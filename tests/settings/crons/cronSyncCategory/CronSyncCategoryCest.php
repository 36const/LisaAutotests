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
 * @group CronSyncCategory
 */
class CronSyncCategoryCest
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
    public function CronSyncCategory(SettingsTester $I, Example $data)
    {
        $I->loadDataForTest($data);
        $providerData = $data['provider_data'];

        $I->loadDataForRedis(RequestsTester::REDIS_KEYS_VALUES);

        $I->declareExchange('goods_service', 'topic', false, true, false);
        $I->declareQueue('goods-lisa', false, true, false, false);
        $I->bindQueueToExchange('goods-lisa', 'goods_service', $providerData['routing_key']);

        $I->pushToExchange('goods_service', $providerData['message'], $providerData['routing_key']);

        $I->runShellCommand('./yii request/sync-category', false);
        $I->canSeeResultCodeIs(1);

        $I->checkRedis($providerData['excludedRedisKeys'] ?? null);
        $I->checkRabbitMQ($providerData['RabbitMQ'] ?? null);
        $I->checkTablesInDB($providerData['db']);
    }
}