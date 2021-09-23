<?php

namespace lisa;

use Codeception\Example;
use Codeception\Module\TestHelper;

/**
 * @group lisa
 * @group lisa_api
 * @group lisa_api_roles
 * @group PUTRolesUpdate
 */
class PUTRolesUpdateCest
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
    public function PUTRolesUpdate(UsersTester $I, Example $data)
    {
        $I->loadDataForTest($data, null);
        $providerData = $data['provider_data'];

        $I->loadDataForRedis();
        
        $I->sendPUT('/auth-item/update/supervisor', $providerData['requestBody']);

        $I->seeResponseCodeIs(200);
        $I->canSeeJsonResponseEquals($providerData['responseBody']);

        $I->checkRedis($providerData['excludedRedisKeys'] ?? null);
        $I->checkTablesInDB($providerData['db']);
    }
}
