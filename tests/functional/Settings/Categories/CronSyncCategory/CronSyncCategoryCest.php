<?php

namespace lisa;

use Codeception\Example;
use Codeception\Module\TestHelper;

/**
 * @group lisa
 * @group lisa_functional
 * @group lisa_functional_settings
 * @group CronSyncCategory
 */
class CronSyncCategoryCest
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
    public function CronSyncCategory(FunctionalTester $I, Example $data)
    {
        $I->loadDataForTest($data);
        $providerData = $data['provider_data'];

        $I->runShellCommand('./yii bpm/request/sync-category');

        $I->declareExchange('goods_service', 'topic');
        $I->bindQueueToExchange('goods-service-lisa', 'goods_service', 'create.category.entity.DVR');

        $I->pushToExchange('goods_service', $providerData['message'], 'create.category.entity.DVR');

        $I->runShellCommand('./yii bpm/request/sync-category');
        $I->canSeeResultCodeIs(0);

        $I->checkTablesInDB($providerData['db']);
        $I->checkRabbitMQ($providerData);
    }
}