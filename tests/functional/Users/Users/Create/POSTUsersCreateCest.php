<?php

namespace lisa;

use Codeception\Example;
use Codeception\Module\TestHelper;
use lisa\Page\Users\User;

/**
 * @group lisa
 * @group lisa_functional
 * @group lisa_functional_users
 * @group POSTUsers
 * @group POSTUsersCreate
 */
class POSTUsersCreateCest
{
    /**@return array*/
    protected function pageProvider()
    {
        return TestHelper::prepareDataprovider(require 'data.php', '');
    }

    /**
     * @param FunctionalTester $I
     * @param Example $data
     * @param User $user
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @dataProvider pageProvider
     *
     */
    public function POSTUsersCreate(FunctionalTester $I, Example $data, User $user)
    {
        $I->loadDataForTest($data, null);

        $providerData = $data['provider_data'];

        $I->sendPOST('/bpm/user/create', $providerData['requestBody']);
        $I->seeResponseCodeIs(200);

        $I->checkTablesInDB($providerData['db']);

        if (!in_array('negative', $data['setting'])) {
            $user->amOnUserUpdate(6);
            $user->checkCheckboxes($providerData['requestBody']);
        }
    }
}