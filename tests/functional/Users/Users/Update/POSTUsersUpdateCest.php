<?php

namespace lisa;

use Codeception\Example;
use rzk\TestHelper;
use lisa\Page\Functional\RequestView;
use lisa\Page\Functional\User;
use Codeception\Module\TestHelper as Vadim;

/**
 * @group lisa
 * @group lisa_functional
 * @group lisa_functional_users
 * @group POSTUsers
 * @group POSTUsersUpdate
 */
class POSTUsersUpdateCest
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
//        return $this->testHelper->getDataProvider('');
        return Vadim::prepareDataprovider(require ('data.php'));
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