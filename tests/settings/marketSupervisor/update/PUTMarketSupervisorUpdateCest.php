<?php

namespace lisa;

use Codeception\Example;
use Codeception\Module\TestHelper;

/**
 * @group lisa
 * @group lisa_api
 * @group lisa_api_settings
 * @group lisa_api_marketSupervisor
 * @group PUTMarketSupervisorUpdate
 */
class PUTMarketSupervisorUpdateCest
{
    protected function pageProvider(): array
    {
        return TestHelper::prepareDataprovider(require 'data.php', '');
    }

    /**
     * @param SettingsTester $I
     * @param Example $data
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @dataProvider pageProvider
     */
    public function PUTMarketSupervisorUpdate(SettingsTester $I, Example $data)
    {
        $I->loadDataForTest($data);
        $providerData = $data['provider_data'];

        $I->loadDataForRedis();

        $I->sendPUT('/market-supervisor/update/0', $providerData['requestBody']);

        $I->seeResponseCodeIs(200);
        $I->canSeeJsonResponseEquals($providerData['responseBody']);

        $I->checkRedis();
        $I->checkKeyValueInRedis($providerData['redisValueAfter']);
        $I->checkTablesInDB($providerData['db']);
        $I->checkRabbitMQWithRoutingKey($providerData['RabbitMQWithRoutingKey'] ?? null);
    }
}
