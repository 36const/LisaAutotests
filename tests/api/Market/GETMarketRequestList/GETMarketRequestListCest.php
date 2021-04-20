<?php

namespace lisa;

use Codeception\Example;
use Codeception\Module\TestHelper;

/**
 * @group lisa
 * @group lisa_api
 * @group GETMarketRequestList
 */
class GETMarketRequestListCest
{
    protected function pageProvider(): array
    {
        return TestHelper::prepareDataprovider(require 'data.php', '');
    }

    /**
     * @param ApiTester $I
     * @param Example $data
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @dataProvider pageProvider
     */
    public function GETMarketRequestList(ApiTester $I, Example $data)
    {
        $I->loadDataForTest($data);
        $providerData = $data['provider_data'];

        $I->sendGET('/bpm/api/market-requests-list', $providerData['requestParameters']);

        $I->seeResponseCodeIs($providerData['responseCode'] ?? 200);
        $I->canSeeJsonResponseEquals($providerData['responseBody']);
    }
}