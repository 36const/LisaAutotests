<?php

namespace lisa;

use Codeception\Example;
use rzk\TestHelper;
use lisa\Page\Functional\RequestView;
use lisa\Page\Functional\Roles;

/**
 * @group lisa
 * @group lisa_functional
 * @group lisa_functional_users
 * @group POSTRoles
 * @group POSTRolesUpdate
 */
class POSTRolesUpdateCest
{
    /**
     * @var TestHelper $testHelper
     */
    private $testHelper;

    public function __construct()
    {
        $this->testHelper = new TestHelper(__DIR__);
    }

    /**
     * @return array
     */
    protected function pageProvider()
    {
        return $this->testHelper->getDataProvider('');
    }

    /**
     * @param FunctionalTester $I
     * @param Example $data
     * @param Roles $roles
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @dataProvider pageProvider
     *
     */
    public function POSTRolesUpdate(FunctionalTester $I, Example $data, Roles $roles)
    {
        $I->loadDataForTest($data, $this->testHelper);

        $providerData = $data['provider_data'];

        $I->sendPOST('/bpm/roles/update?id=1', $providerData['requestBody']);
        $I->seeResponseCodeIs(200);

        $I->checkTablesInDB($providerData['db']);

        $roles->amOnRoleUpdate(1);
        $roles->checkCheckboxes($providerData['requestBody']);
    }
}