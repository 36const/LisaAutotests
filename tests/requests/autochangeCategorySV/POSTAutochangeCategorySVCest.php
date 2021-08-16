<?php

namespace lisa;

use Codeception\Example;
use Codeception\Module\TestHelper;

/**
 * @group lisa
 * @group lisa_api
 * @group lisa_api_requests
 * @group POSTAutochangeCategorySV
 */
class POSTAutochangeCategorySVCest
{
    protected function pageProvider(): array
    {
        return TestHelper::prepareDataprovider(require 'data.php', '');
    }

    /**
     * @param RequestsTester $I
     * @param Example $data
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @dataProvider pageProvider
     */
    public function POSTAutochangeCategorySV(RequestsTester $I, Example $data)
    {
        $I->loadDataForTest($data);
        $providerData = $data['provider_data'];

        $I->haveHttpHeader('Content-Type', 'application/json');

        in_array($providerData['requestParameter'], ['update', 'to-correction'])
            ? $I->sendPUT('/request/' . $providerData['requestParameter'] . '/1', json_encode($providerData['requestBody']))
            : $I->sendPOST('/request/' . $providerData['requestParameter'], json_encode($providerData['requestBody']));

        $I->seeResponseCodeIs(200);
        $I->canSeeJsonResponseEquals($providerData['responseBody']);

        $I->checkTablesInDB($providerData['db']);
        $I->checkRabbitMQ($providerData['RabbitMQ'] ?? null);
        $I->checkRabbitMQWithRoutingKey($providerData['RabbitMQWithRoutingKey'] ?? null, true);
    }
}
