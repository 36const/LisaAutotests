<?php

namespace lisa;

use Codeception\Example;
use Codeception\Module\TestHelper;

/**
 * @group lisa
 * @group lisa_api
 * @group lisa_api_otherServices
 * @group GETMarketMarketRequestDetails
 */
class GETMarketMarketRequestDetailsCest
{
    protected function pageProvider(): array
    {
        return TestHelper::prepareDataprovider(require 'data.php', '');
    }

    /**
     * @param OtherServicesTester $I
     * @param Example $data
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @dataProvider pageProvider
     */
    public function GETMarketMarketRequestDetails(OtherServicesTester $I, Example $data)
    {
        $I->loadDataForTest($data);
        $providerData = $data['provider_data'];

        $I->sendGET('/request/market-request-details', $providerData['requestParameters']);

        $I->seeResponseCodeIs($providerData['responseCode']);
        $I->canSeeJsonResponseEquals($providerData['responseBody']);
        
        $I->checkTablesInDB($providerData['db']);
    }
}