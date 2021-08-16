<?php

namespace lisa;

use Codeception\Example;
use Codeception\Module\TestHelper;

/**
 * @group lisa
 * @group lisa_api
 * @group lisa_api_settings
 * @group lisa_api_category
 * @group lisa_api_crons
 * @group CronMakeXls
 * @group CronRzCategoriesImportXls
 */
class CronRzCategoriesImportXlsCest
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
    public function CronRzCategoriesImportXls(SettingsTester $I, Example $data)
    {
        $I->loadDataForTest($data);
        $providerData = $data['provider_data'];

        $I->loadDataForRedis(RequestsTester::REDIS_KEYS_VALUES);

        $I->declareExchange('default', 'direct', false, true, false);
        $I->declareQueue('lisa_rzCategoriesImport', false, true, false, false);
        $I->bindQueueToExchange('lisa_rzCategoriesImport', 'default', 'lisa_rzCategoriesImport');
        $I->pushToExchange('default', $providerData['user'] ?? '{"userId":4}', 'lisa_rzCategoriesImport');

        $I->runShellCommand('cp '. codecept_data_dir('CategoriesImport/' . $providerData['file']) . ' ./web/files/rz_categories_import.xlsx');
        $I->runShellCommand('./yii request/import-rz-categories', false);
        $I->seeInShellOutput('');

        $I->checkRedis($providerData['excludedRedisKeys'] ?? null);
        $I->checkKeyValueInRedis($providerData['redisValueAfter'] ?? null);
        $I->checkRabbitMQ($providerData['RabbitMQ'] ?? null);
        $I->checkTablesInDB($providerData['db']);
    }
}