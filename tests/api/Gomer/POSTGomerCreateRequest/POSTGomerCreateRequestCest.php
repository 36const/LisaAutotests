<?php
namespace lisa;

use Codeception\Example;
use Codeception\Module\TestHelper;

/**
 * @group lisa
 * @group lisa_api
 * @group lisa_api_gomer
 * @group POSTGomerCreateRequest
 */
class POSTGomerCreateRequestCest
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
    public function POSTGomerCreateRequest(ApiTester $I, Example $data)
    {
        $I->loadDataForTest($data, 'allUsers');
        $providerData = $data['provider_data'];

        isset($providerData['attachments']) ?
            $I->sendPOST('/bpm/api/create-request', $providerData['requestBody'], $providerData['attachments']) :
            $I->sendPOST('/bpm/api/create-request', $providerData['requestBody']);

        $I->seeResponseCodeIs($providerData['responseCode'] ?? 200);
        $I->seeResponseContainsJson($providerData['responseBody']);

        $I->checkTablesInDB($providerData['db']);
    }
}