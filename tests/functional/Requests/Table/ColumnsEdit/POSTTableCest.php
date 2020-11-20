<?php

namespace lisa;

use Codeception\Example;
use rzk\TestHelper;
use Codeception\Module\TestHelper as Vadim;

/**
 * @group lisa
 * @group lisa_functional
 * @group lisa_functional_requests
 * @group POSTTable
 */
class POSTTableCest
{
    /**@return array*/
    protected function pageProvider()
    {
        return Vadim::prepareDataprovider(require 'data.php');
    }

    /**
     * @param FunctionalTester $I
     * @param Example $data
     * @throws \GuzzleHttp\Exception\GuzzleException
     *
     * @dataProvider pageProvider
     *
     */
    public function POSTTable(FunctionalTester $I, Example $data)
    {
        $I->loadDataForTest($data, 'allUsers');

        $providerData = $data['provider_data'];

        $I->sendPOST('/bpm/grid-settings/save-columns', $providerData['requestBody']);
        $I->seeResponseCodeIs(200);

        $I->amOnPage('/bpm/request/' . $providerData['url']);

        $I->checkTablesInDB($providerData['db']);
        $I->checkObjectsOnPage($providerData['pageObjects']);
    }
}
