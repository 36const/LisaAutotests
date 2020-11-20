<?php

namespace lisa;

use Codeception\Example;
use rzk\TestHelper;
use Codeception\Module\TestHelper as Vadim;

/**
 * @group lisa
 * @group lisa_functional
 * @group lisa_functional_users
 * @group GETPermissions
 */
class GETPermissionsCest
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
    public function GETPermissions(FunctionalTester $I, Example $data)
    {
        $I->loadDataForTest($data, 'oneUserWithoutPermissionsTable');
        $providerData = $data['provider_data'];

        $I->amOnPage($providerData['url']);

        isset($providerData['responseCode']) ?
            $I->seeResponseCodeIs($providerData['responseCode']) :
            $I->seeResponseCodeIs(200);

        $I->checkObjectsOnPage($providerData['pageObjects']);
    }
}
