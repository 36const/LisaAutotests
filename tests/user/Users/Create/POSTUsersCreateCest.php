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
    protected function pageProvider(): array
    {
        return TestHelper::prepareDataprovider(require 'data.php', '');
    }

    /**
     * @param UserTester $I
     * @param Example $data
     * @param User $user
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @dataProvider pageProvider
     */
    public function POSTUsersCreate(UserTester $I, Example $data, User $user)
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