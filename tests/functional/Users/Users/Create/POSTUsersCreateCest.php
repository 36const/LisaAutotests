<?php

namespace lisa;

use Codeception\Example;
use rzk\TestHelper;
use lisa\Page\Functional\Login;
use lisa\Page\Functional\User;

/**
 * @group lisa
 * @group lisa_functional
 * @group POSTUsers
 * @group POSTUsersCreate
 */
class POSTUsersCreateCest
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
     * @param Login $login
     * @param User $user
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @dataProvider pageProvider
     *
     */
    public function POSTUsersCreate(FunctionalTester $I, Example $data, Login $login, User $user)
    {
        $I->loadDataForTest($data, $this->testHelper, [], false);

        $providerData = $data['provider_data'];

        $providerData['requestBody']['_csrf-backend'] = $login->login();

        $I->sendPOST('/bpm/user/create', $providerData['requestBody']);
        $I->seeResponseCodeIs(200);

        $I->checkTablesInDB($providerData['db']);

        if (!in_array('negative', $data['setting'])) {
            $user->amOnUserUpdate(6);
            $user->checkCheckboxes($providerData['requestBody']);
        }
    }
}