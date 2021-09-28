<?php

namespace lisa;

use Codeception\Example;
use Codeception\Module\TestHelper;

/**
 * @group lisa
 * @group lisa_api
 * @group lisa_api_users
 * @group POSTUser
 * @group POSTUserUpdateMultiple
 * @group POSTUserUpdateMultipleTeam
 */
class POSTUserUpdateMultipleTeamCest
{
    protected function pageProvider(): array
    {
        return TestHelper::prepareDataprovider(require 'data.php', '');
    }

    /**
     * @param UsersTester $I
     * @param Example $data
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @dataProvider pageProvider
     */
    public function POSTUserUpdateMultipleTeam(UsersTester $I, Example $data)
    {
        $I->loadDataForTest($data, 'oneUserWithoutAssignment');
        $providerData = $data['provider_data'];

        $I->loadDataForRedis();

        $I->sendPOST('/user/update-team', $providerData['requestBody']);
        $I->seeResponseCodeIs(200);
        $I->canSeeJsonResponseEquals($providerData['responseBody']);

        $I->checkRedis($providerData['excludedRedisKeys'] ?? null);
        $I->checkTablesInDB($providerData['db']);
        $I->checkRabbitMQ($providerData['RabbitMQ'] ?? null);
        $I->checkRabbitMQWithRoutingKey($providerData['RabbitMQWithRoutingKey'] ?? null, true);
    }
}