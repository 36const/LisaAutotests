<?php

namespace lisa;

use Codeception\Example;
use Codeception\Module\TestHelper;

/**
 * @group lisa
 * @group lisa_api
 * @group GETMarketMarketRequestDetails
 */
class GETMarketMarketRequestDetailsCest
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
    public function GETMarketMarketRequestDetails(ApiTester $I, Example $data)
    {
        $I->loadDataForTest($data);
        $providerData = $data['provider_data'];

        $I->sendGET('/bpm/api/market-request-details', $providerData['requestParameters']);

        $I->seeResponseCodeIs($providerData['responseCode']);
        $I->canSeeJsonResponseEquals($providerData['responseBody']);
    }
}