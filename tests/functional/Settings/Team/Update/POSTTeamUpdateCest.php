<?php

namespace lisa;

use Codeception\Example;
use Codeception\Module\TestHelper;

/**
 * @group lisa
 * @group lisa_functional
 * @group lisa_functional_settings
 * @group POSTTeam
 * @group POSTTeamUpdate
 */
class POSTTeamUpdateCest
{
    /**@return array*/
    protected function pageProvider()
    {
        return TestHelper::prepareDataprovider(require 'data.php', '');
    }

    /**
     * @param FunctionalTester $I
     * @param Example $data
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @dataProvider pageProvider
     */
    public function POSTCommentUpdate(FunctionalTester $I, Example $data)
    {
        $I->loadDataForTest($data);
        $providerData = $data['provider_data'];

        $I->sendPOST('/bpm/team/update?id=1', $providerData['requestBody']);
        $I->seeResponseCodeIs(200);

        $I->checkTablesInDB($providerData['db']);
    }
}