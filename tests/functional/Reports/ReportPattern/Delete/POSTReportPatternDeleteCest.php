<?php

namespace lisa;

use Codeception\Example;
use lisa\Page\Functional\Report;
use rzk\TestHelper;
use lisa\Page\Functional\Login;

/**
 * @group lisa
 * @group lisa_functional
 * @group lisa_functional_reports
 * @group POSTReportPattern
 * @group POSTReportPatternDelete
 */
class POSTReportPatternDeleteCest
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
     * @param Report $report
     * @throws \GuzzleHttp\Exception\GuzzleException
     *
     * @dataProvider pageProvider
     *
     */
    public function POSTReportPatternDelete(FunctionalTester $I, Example $data, Login $login, Report $report)
    {
        $I->loadDataForTest($data, $this->testHelper);

        $providerData = $data['provider_data'];

        $providerData['requestBody']['_csrf-backend'] = $login->login();

        $I->sendPOST('/bpm/report/delete?id=1', $providerData['requestBody']);
        $I->seeResponseCodeIs(200);

        $I->checkTablesInDB($providerData['db'], true);
    }
}