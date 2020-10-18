<?php

namespace lisa;

use Codeception\Example;
use lisa\Page\Functional\Report;
use rzk\TestHelper;

/**
 * @group lisa
 * @group lisa_functional
 * @group lisa_functional_reports
 * @group GETReportPatternsAccess
 */
class GETReportPatternsAccessCest
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
     * @param Report $report
     * @throws \GuzzleHttp\Exception\GuzzleException
     *
     * @dataProvider pageProvider
     *
     */
    public function GETReportPatternsAccess(FunctionalTester $I, Example $data, Report $report)
    {
        $I->loadDataForTest($data, $this->testHelper, [], false);
        $providerData = $data['provider_data'];

        $report->amOnReportGenerate();
        $I->seeResponseCodeIs(200);

        $I->checkObjectsOnPage($providerData['pageObjects']);
    }
}