<?php
namespace lisa;

use Codeception\Example;
use Codeception\Module\TestHelper;

/**
 * @group lisa
 * @group lisa_api
 * @group lisa_api_other_services
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
     * @param OtherServicesTester $I
     * @param Example $data
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @dataProvider pageProvider
     */
    public function POSTGomerCreateRequest(OtherServicesTester $I, Example $data)
    {
        $I->loadDataForTest($data);
        $providerData = $data['provider_data'];

        $I->changeMaxFileSize();

        isset($providerData['attachments']) ?
            $I->sendPOST('/request/create-request', $providerData['requestBody'], $providerData['attachments']) :
            $I->sendPOST('/request/create-request', $providerData['requestBody']);

        $I->seeResponseCodeIs($providerData['responseCode'] ?? 200);
        $I->seeJsonResponseEquals($providerData['responseBody']);

        $I->checkTablesInDB($providerData['db']);
        $I->checkRabbitMQ($providerData['RabbitMQ'] ?? null);

        $I->changeMaxFileSize(false);
    }
}