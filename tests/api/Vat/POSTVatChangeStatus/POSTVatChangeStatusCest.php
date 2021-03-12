<?php
namespace lisa;

use Codeception\Example;
use Codeception\Module\TestHelper;

/**
 * @group lisa
 * @group lisa_api
 * @group lisa_api_vat
 * @group POSTVatChangeStatus
 */
class POSTVatChangeStatusCest
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
    public function POSTVatChangeStatus(ApiTester $I, Example $data)
    {
        $I->loadDataForTest($data, null);
        $providerData = $data['provider_data'];

        $I->sendPOST('bpm/api/change-status', $providerData['requestBody']);
        $I->seeResponseCodeIs(200);
        $I->seeResponseContainsJson($providerData['responseBody']);

        $I->checkTablesInDB($providerData['db']);
    }
}