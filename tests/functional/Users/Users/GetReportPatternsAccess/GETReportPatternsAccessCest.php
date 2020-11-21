<?php

namespace lisa;

use Codeception\Example;
use lisa\Page\Functional\Report;
use Codeception\Module\TestHelper;

/**
 * @group lisa
 * @group lisa_functional
 * @group lisa_functional_reports
 * @group GETReportPatternsAccess
 */
class GETReportPatternsAccessCest
{
    /**@return array*/
    protected function pageProvider()
    {
        return TestHelper::prepareDataprovider(require 'data.php', '');
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
        $I->loadDataForTest($data, null);
        $providerData = $data['provider_data'];

        $report->amOnReportGenerate();
        $I->seeResponseCodeIs(200);

        $I->checkObjectsOnPage($providerData['pageObjects']);
    }
}
