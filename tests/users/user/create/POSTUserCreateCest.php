<?php

namespace lisa;

use Codeception\Example;
use Codeception\Module\TestHelper;

/**
 * @group lisa
 * @group lisa_api
 * @group lisa_api_users
 * @group POSTUserCreate
 */
class POSTUserCreateCest
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
    public function POSTUserCreate(UsersTester $I, Example $data)
    {
        $I->loadDataForTest($data);
        $providerData = $data['provider_data'];

        $I->loadDataForRedis();

        $I->haveHttpHeader('Content-Type', 'application/json');
        $I->sendPOST('/user/create', $providerData['requestBody']);

        $I->seeResponseCodeIs(200);
        $I->canseeResponseContainsJson($providerData['responseBody']);

        if (!isset($data['setting']['negative']))
            $I->canSeeResponseMatchesJsonType(['create_ts' => 'string:regex(~[\d]{4}-[\d]{2}-[\d]{2} [\d]{2}:[\d]{2}:[\d]{2}~)'], '$.model');

        $I->checkRedis($providerData['excludedRedisKeys'] ?? null);
        $I->checkTablesInDB($providerData['db']);
        $I->checkRabbitMQWithRoutingKey($providerData['RabbitMQWithRoutingKey'] ?? null, true);
    }
}
