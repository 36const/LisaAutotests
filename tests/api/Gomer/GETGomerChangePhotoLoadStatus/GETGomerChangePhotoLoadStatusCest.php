<?php
namespace lisa;

use Codeception\Example;
use Codeception\Module\TestHelper;

/**
 * @group lisa
 * @group lisa_api
 * @group lisa_api_gomer
 * @group GETGomerChangePhotoLoadStatus
 */
class GETGomerChangePhotoLoadStatusCest
{
    /**@return array*/
    protected function pageProvider()
    {
        return TestHelper::prepareDataprovider(require 'data.php', '');
    }

    /**
     * @param ApiTester $I
     * @param Example $data
     * @throws \GuzzleHttp\Exception\GuzzleException
     *
     * @dataProvider pageProvider
     *
     */
    public function GETGomerChangePhotoLoadStatus(ApiTester $I, Example $data)
    {
        $I->loadDataForTest($data);
        $providerData = $data['provider_data'];

        $I->sendGET('/bpm/api/change-photo-load-status', $providerData['requestParameters']);

        $I->seeResponseCodeIs($providerData['responseCode']);
        $I->seeResponseContainsJson($providerData['responseBody']);

        $I->checkTablesInDB($providerData['db']);
    }
}