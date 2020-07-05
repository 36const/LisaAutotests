<?php

namespace lisa;

use Codeception\Example;
use rzk\TestHelper;
use lisa\Page\Functional\Login;
use lisa\Page\Functional\Filters;

/**
 * @group lisa
 * @group lisa_functional
 * @group POSTFilters
 * @group POSTFiltersCreate
 */
class POSTFilterCreateCest
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
     * @param Filters $filter
     * @throws \GuzzleHttp\Exception\GuzzleException
     *
     * @dataProvider pageProvider
     *
     */
    public function POSTFilterCreate(FunctionalTester $I, Example $data, Login $login, Filters $filter)
    {
        $I->loadDataForTest($data, $this->testHelper, ['allUsers']);

        $providerData = $data['provider_data'];

        $providerData['requestBody']['_csrf-backend'] = $login->login();

        $I->sendPOST('/bpm/filter/create', $providerData['requestBody']);
        $I->seeResponseCodeIs(200);

        $I->checkTablesInDB($providerData['db']);
    }
}
