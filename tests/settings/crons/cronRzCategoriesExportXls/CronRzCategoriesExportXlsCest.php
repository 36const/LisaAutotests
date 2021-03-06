<?php

namespace lisa;

use Codeception\Example;
use Codeception\Module\TestHelper;
use yii\helpers\Console;

/**
 * @group lisa
 * @group lisa_api
 * @group lisa_api_settings
 * @group lisa_api_category
 * @group lisa_api_crons
 * @group CronMakeXls
 * @group CronRzCategoriesExportXls
 */
class CronRzCategoriesExportXlsCest
{
    protected function pageProvider(): array
    {
        return TestHelper::prepareDataprovider(require 'data.php', '');
    }

    /**
     * @param SettingsTester $I
     * @param Example $data
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @dataProvider pageProvider
     */
    public function CronRzCategoriesExportXls(SettingsTester $I, Example $data)
    {
        $I->loadDataForTest($data);
        $providerData = $data['provider_data'];

        $I->pushToExchange('default', '["export"]', 'lisa_rzCategoriesExport');

        $I->runShellCommand(Constants::MAKE_AND_CLEAR_FILES_DIR);
        $I->runShellCommand('touch ' . Constants::TEMP_FILES_DIR . 'выгрузка_связанных_категорий_LISA.xlsx');

        $I->runShellCommand('./yii request/export-rz-categories', false);
        $I->seeInShellOutput('');

        $I->checkRabbitMQ($providerData['RabbitMQ'] ?? null);
        $I->checkTablesInDB($providerData['db']);

        $I->seeFileFound('выгрузка_связанных_категорий_LISA.xlsx', Constants::TEMP_FILES_DIR);
        $I->checkXlsxFile($providerData['fileContent'] ?? null, $data['setting']['rows'] ?? null);

        $I->sendGET('/category/list');
        $I->canSeeJsonResponseEquals($providerData['responseBody']);
    }
}