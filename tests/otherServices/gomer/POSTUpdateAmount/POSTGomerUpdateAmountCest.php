<?php
namespace lisa;

use Codeception\Example;
use Codeception\Module\TestHelper;

/**
 * @group lisa
 * @group lisa_api
 * @group lisa_api_otherServices
 * @group lisa_api_gomer
 * @group POSTGomerUpdateAmount
 */
class POSTGomerUpdateAmountCest
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
    public function POSTGomerUpdateAmount(OtherServicesTester $I, Example $data)
    {
        $I->loadDataForTest($data);
        $providerData = $data['provider_data'];

        $I->declareQueue('lisa_sendOuterNotifications', false, true, false, false);

        $I->sendPOST('/request/update-amount-to-work', $providerData['requestBody']);

        $I->seeResponseCodeIs($providerData['responseCode']);
        $I->seeJsonResponseEquals($providerData['responseBody']);

        $I->checkTablesInDB($providerData['db']);
        $I->checkRabbitMQ($providerData['RabbitMQ'] ?? null);
    }
}