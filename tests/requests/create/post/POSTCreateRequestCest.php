<?php

namespace lisa;

use Codeception\Example;
use Codeception\Module\TestHelper;

/**
 * @group lisa
 * @group lisa_api
 * @group lisa_api_requests
 * @group POSTCreateRequest
 */
class POSTCreateRequestCest
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
    public function POSTCreateRequest(RequestsTester $I, Example $data)
    {
        $I->loadDataForTest($data);
        $providerData = $data['provider_data'];

        $I->declareQueue('lisa_sendOuterNotifications', false, true, false, false);

        if (isset($providerData['requestBody']['files']))
            $I->runShellCommand('mkdir -p ./web/files/1631802792673');

        $I->sendPOST('/request/create', $providerData['requestBody']);
        $I->seeResponseCodeIs(200);
        $I->canSeeJsonResponseMatchesCriteria($providerData['responseBody']);

        $I->checkTablesInDB($providerData['db']);
        $I->checkRabbitMQ($providerData['RabbitMQ'] ?? null);
        $I->checkRabbitMQWithRoutingKey($providerData['RabbitMQWithRoutingKey'] ?? null, true);
    }
}
