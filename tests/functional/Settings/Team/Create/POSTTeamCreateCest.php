<?php

namespace lisa;

use Codeception\Example;
use Codeception\Module\TestHelper;

/**
 * @group lisa
 * @group _lisa_functional
 * @group lisa_functional_settings
 * @group POSTTeam
 * @group POSTTeamCreate
 */
class POSTTeamCreateCest
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
    public function POSTTeamCreate(FunctionalTester $I, Example $data)
    {
        $I->loadDataForTest($data);
        $providerData = $data['provider_data'];

        $I->loadDataForRedis(FunctionalTester::REDIS_KEYS_VALUES);

        $I->sendPOST('/bpm/team/create', $providerData['requestBody']);
        $I->seeResponseCodeIs(200);

        $I->checkRedis();
        $I->checkTablesInDB($providerData['db']);
    }
}