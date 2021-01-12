<?php

namespace lisa;

use Codeception\Example;
use Codeception\Module\TestHelper;

/**
 * @group lisa
 * @group lisa_functional
 * @group lisa_functional_users
 * @group GETUsers
 */
class GETUsersCest
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
    public function GETUsers(FunctionalTester $I, Example $data)
    {
        $I->loadDataForTest($data, null);
        $providerData = $data['provider_data'];

        $I->amOnPage('bpm/user/index/' . $providerData['url']);
        $I->seeResponseCodeIs(200);

        $I->checkObjectsOnPage($providerData['pageObjects']);
    }
}
