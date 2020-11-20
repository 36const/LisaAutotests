<?php

namespace lisa;

use Codeception\Example;
use rzk\TestHelper;
use Codeception\Module\TestHelper as Vadim;
use lisa\Page\Functional\RequestView;
use lisa\Page\Functional\Roles;

/**
 * @group lisa
 * @group lisa_functional
 * @group lisa_functional_users
 * @group POSTRoles
 * @group POSTUpdateUserPermissions
 */
class POSTUpdateUserPermissionsCest
{
    /**@return array*/
    protected function pageProvider()
    {
        return Vadim::prepareDataprovider(require 'data.php');
    }

    /**
     * @param FunctionalTester $I
     * @param Example $data
     * @param Roles $roles
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @dataProvider pageProvider
     *
     */
    public function POSTUpdateUserPermissions(FunctionalTester $I, Example $data, Roles $roles)
    {
        $I->loadDataForTest($data, null);

        $providerData = $data['provider_data'];

        $I->sendPOST('/bpm/roles/update?id=5', $providerData['requestBody']);
        $I->seeResponseCodeIs(200);

        $I->checkTablesInDB($providerData['db']);

        $roles->amOnRoleUpdate(5);
        $roles->checkCheckboxes($providerData['requestBody']);
    }
}