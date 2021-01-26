<?php

namespace lisa;

use Codeception\Example;
use Codeception\Module\TestHelper;

/**
 * @group lisa
 * @group lisa_functional
 * @group lisa_functional_requests
 * @group POSTTableColumnsEdit
 */
class POSTTableColumnsEditCest
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
    public function POSTTableColumnsEdit(FunctionalTester $I, Example $data)
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
