<?php

namespace lisa;

use Codeception\Example;
use lisa\Page\Functional\Dashboard;
use rzk\TestHelper;

/**
 * @group lisa
 * @group lisa_functional
 * @group lisa_functional_dashboard
 * @group GETDashboardCommon
 */
class GETDashboardCommonCest
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
     * @param Dashboard $dashboard
     * @throws \GuzzleHttp\Exception\GuzzleException
     *
     * @dataProvider pageProvider
     *
     */
    public function GETDashboardCommon(FunctionalTester $I, Example $data, Dashboard $dashboard)
    {
        $I->loadDataForTest($data, $this->testHelper, ['allUsers']);
        $providerData = $data['provider_data'];

        $dashboard->amOnDashboardCommon($providerData['url']);
        $I->seeResponseCodeIs(200);

        $I->checkObjectsOnPage($providerData['pageObjects']);
    }
}
