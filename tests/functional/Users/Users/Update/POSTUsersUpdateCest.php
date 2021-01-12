<?php

namespace lisa;

use Codeception\Example;
use Codeception\Module\TestHelper;
use lisa\Page\Requests\RequestView;
use lisa\Page\Users\User;

/**
 * @group lisa
 * @group lisa_functional
 * @group lisa_functional_users
 * @group POSTUsers
 * @group POSTUsersUpdate
 */
class POSTUsersUpdateCest
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
    public function POSTUsersUpdate(FunctionalTester $I, Example $data, User $user)
    {
        $I->loadDataForTest($data, null);

        $providerData = $data['provider_data'];

        $I->sendPOST('/bpm/user/update?id=4', $providerData['requestBody']);
        $I->seeResponseCodeIs(200);

        $I->checkTablesInDB($providerData['db']);

        $user->amOnUserUpdate(4);
        $user->checkCheckboxes($providerData['requestBody']);
    }
}