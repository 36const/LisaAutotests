<?php

namespace lisa;

use Codeception\Example;
use Codeception\Module\TestHelper;

/**
 * @group lisa
 * @group _lisa_functional
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

        $I->loadDataForRedis(FunctionalTester::REDIS_KEYS_VALUES);

        $I->declareExchange('goods_service', 'topic', false, true, false);
        $I->declareQueue('goods-service-lisa', false, true, false, false);
        $I->bindQueueToExchange('goods-service-lisa', 'goods_service', 'create.category.entity.SLR.DVR.CMT.CTT.SEO.BI.LLT.1C.MRK.CTL.DBA.EBQ.GML.SSH.LIS');

        $I->pushToExchange('goods_service', $providerData['message'], 'create.category.entity.SLR.DVR.CMT.CTT.SEO.BI.LLT.1C.MRK.CTL.DBA.EBQ.GML.SSH.LIS');

        $I->runShellCommand('./yii bpm/request/sync-category');
        $I->canSeeResultCodeIs(0);

        $I->checkRedis();
        $I->checkTablesInDB($providerData['db']);
        $I->checkRabbitMQ($providerData);
    }
}