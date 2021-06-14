<?php

namespace lisa;

use Codeception\Example;
use Codeception\Module\TestHelper;

/**
 * @group lisa
 * @group lisa_functional
 * @group lisa_functional_settings
 * @group POSTSeller
 * @group POSTSellerDistributionUpdate
 */
class POSTSellerDistributionUpdateCest
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
    public function POSTSellerDistributionUpdate(FunctionalTester $I, Example $data)
    {
        $I->loadDataForTest($data);
        $providerData = $data['provider_data'];
        \Yii::$app->redis->flushall();

        $I->sendPOST('/bpm/seller/distribution', $providerData['requestBody']);
        $I->seeResponseCodeIs(200);

        $I->canSee($providerData['pageObjects']);
        $I->checkSellerRedis($providerData['redis']);
    }
}