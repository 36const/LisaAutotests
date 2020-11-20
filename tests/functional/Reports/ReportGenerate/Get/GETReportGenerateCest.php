<?php

namespace lisa;

use Codeception\Example;
use lisa\Page\Functional\Report;
use rzk\TestHelper;
use Codeception\Module\TestHelper as Vadim;

/**
 * @group lisa
 * @group lisa_functional
 * @group lisa_functional_reports
 * @group GETReportGenerate
 */
class GETReportGenerateCest
{
    /**@return array*/
    protected function pageProvider()
    {
        return Vadim::prepareDataprovider(require 'data.php');
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
    public function GETReportGenerate(FunctionalTester $I, Example $data, Report $report)
    {
        $I->loadDataForTest($data);
        $providerData = $data['provider_data'];

        $report->amOnReportGenerate();
        $I->seeResponseCodeIs(200);

        $I->checkObjectsOnPage($providerData['pageObjects']);
    }
}
