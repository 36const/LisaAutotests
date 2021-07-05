<?php

namespace lisa;

use Codeception\Example;
use Codeception\Module\TestHelper;

/**
 * @group lisa
 * @group lisa_functional
 * @group lisa_functional_settings
 * @group CronMakeXls
 * @group CronMakeCategoriesXls
 */
class CronMakeCategoriesXlsCest
{
    protected function pageProvider(): array
    {
        return TestHelper::prepareDataprovider(require 'data.php', '');
    }

    /**
     * @param FunctionalTester $I
     * @param Example $data
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @dataProvider pageProvider
     */
    public function CronMakeCategoriesXls(FunctionalTester $I, Example $data)
    {
        $I->loadDataForTest($data);
        $providerData = $data['provider_data'];

        $I->declareExchange('default', 'direct', false, true, false);
        $I->declareQueue('lisa_rz_categories_export', false, true, false, false);
        $I->bindQueueToExchange('lisa_rz_categories_export', 'default', 'lisa_rz_categories_export');
        $I->pushToExchange('default', '["export"]', 'lisa_rz_categories_export');

        $I->runShellCommand('rm -f /var/www/gomer.local/www/backend/runtime/выгрузка_связанных_категорий_LISA.xlsx');
        $I->runShellCommand('touch /var/www/gomer.local/www/backend/runtime/выгрузка_связанных_категорий_LISA.xlsx');
        $I->runShellCommand('./yii bpm/request/export-rz-categories', false);
        $I->canSeeResultCodeIs(1);

        $I->checkTablesInDB($providerData['db']);
        $I->checkRabbitMQ($providerData);

        $I->seeFileFound('выгрузка_связанных_категорий_LISA.xlsx', '/var/www/gomer.local/www/backend/runtime/');
        $I->checkXlsxFile($providerData['fileContent'], 55, 1, '/var/www/gomer.local/www/backend/runtime/');

        $I->amOnPage('/bpm/category');
        $I->checkObjectsOnPage($providerData['pageObjects']);
    }
}