<?php

namespace lisa;

use Codeception\Example;
use Codeception\Module\TestHelper;

/**
 * @group lisa
 * @group lisa_api
 * @group lisa_api_users
 * @group POSTUsers
 * @group POSTUsersUpdateMultiple
 * @group POSTUsersUpdateMultiplePosition
 */
class POSTUsersUpdateMultiplePositionCest
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
    public function POSTUsersUpdateAssignRole(UsersTester $I, Example $data)
    {
        $I->loadDataForTest($data, null);
        $providerData = $data['provider_data'];

        $redis = array_merge(
            UsersTester::REDIS_KEYS_VALUES,
            [
                'allowed_types_8' => 'value',
                'user_permissions_9' => 'value',
                'user_permissions_6' => 'value'
            ]
        );
        $I->loadDataForRedis($redis);

        $I->sendPOST('/user/update-position', $providerData['requestBody']);
        $I->seeResponseCodeIs(200);
        $I->canSeeJsonResponseEquals($providerData['responseBody']);

        $I->checkRedis($providerData['excludedRedisKeys'] ?? null, $redis);
        $I->checkTablesInDB($providerData['db']);
        $I->checkRabbitMQ($providerData['RabbitMQ'] ?? null);
        $I->checkRabbitMQWithRoutingKey($providerData['RabbitMQWithRoutingKey'] ?? null, true);
    }
}