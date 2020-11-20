<?php
namespace lisa;

use Codeception\Example;
use rzk\TestHelper;
use Codeception\Module\TestHelper as Vadim;

/**
 * @group lisa
 * @group lisa_api
 * @group lisa_api_gomer
 * @group GETGomerSyncSourceIdTypeId
 */
class GETGomerSyncSourceIdTypeIdCest
{
    /**@return array*/
    protected function pageProvider()
    {
        return Vadim::prepareDataprovider(require 'data.php');
    }

    /**
     * @param ApiTester $I
     * @param Example $data
     * @throws \GuzzleHttp\Exception\GuzzleException
     *
     * @dataProvider pageProvider
     *
     */
    public function GETGomerSyncSourceIdTypeId(ApiTester $I, Example $data)
    {
        $I->loadDataForTest($data);
        $providerData = $data['provider_data'];

        $I->sendGET('/bpm/api/get-request-by-sync-source-id-and-type-id', $providerData['requestParameters']);

        $I->seeResponseCodeIs($providerData['responseCode']);
        $I->seeResponseContainsJson($providerData['responseBody']);
    }
}