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
 * @group POSTUserUpdateMultiplePosition
 */
class POSTUserUpdateMultiplePositionCest
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
    public function POSTUserUpdateAssignRole(UsersTester $I, Example $data)
    {
        $I->loadDataForTest($data, 'oneUserWithoutAssignment');
        $providerData = $data['provider_data'];

        $redis = array_merge(
            Constants::REDIS_KEYS_VALUES,
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