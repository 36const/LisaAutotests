<?php

namespace lisa;

use Codeception\Example;
use Codeception\Module\TestHelper;

/**
 * @group lisa
 * @group _lisa_functional
 * @group lisa_functional_settings
 * @group POSTPriority
 * @group POSTPriorityCreate
 */
class POSTPriorityCreateCest
{
    protected function pageProvider(): array
    {
        return TestHelper::prepareDataprovider(require 'data.php', '');
    }

    /**
     * @param FunctionalTester $I
     * @param Example $data
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @dataProvider pageProvider
     */
    public function POSTPriorityCreateCest(FunctionalTester $I, Example $data)
    {
        $I->loadDataForTest($data);
        $providerData = $data['provider_data'];

        $I->loadDataForRedis(FunctionalTester::REDIS_KEYS_VALUES);

        $I->sendPOST('/bpm/priority/create', $providerData['requestBody']);
        $I->seeResponseCodeIs(200);

        $I->checkRedis($providerData['excludedRedisKeys'] ?? null);
        $I->checkTablesInDB($providerData['db']);
    }
}