<?php

namespace lisa;

use Codeception\Example;
use Codeception\Module\TestHelper;
use lisa\Page\Users\Roles;

/**
 * @group lisa
 * @group lisa_functional
 * @group lisa_functional_users
 * @group POSTRoles
 * @group POSTRolesCreate
 */
class POSTRolesCreateCest
{
    /**@return array*/
    protected function pageProvider()
    {
        return TestHelper::prepareDataprovider(require 'data.php', '');
    }

    /**
     * @param FunctionalTester $I
     * @param Example $data
     * @param Roles $roles
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @dataProvider pageProvider
     */
    public function POSTRolesCreate(FunctionalTester $I, Example $data, Roles $roles)
    {
        $I->loadDataForTest($data);

        $providerData = $data['provider_data'];

        $I->sendPOST('/bpm/roles/create', $providerData['requestBody']);
        $I->seeResponseCodeIs(200);

        $I->checkTablesInDB($providerData['db']);

        $roles->amOnRoleUpdate(1);
        $roles->checkCheckboxes($providerData['requestBody']);
    }
}