<?php

namespace lisa;

use Codeception\Example;
use rzk\TestHelper;

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
     * @throws \GuzzleHttp\Exception\GuzzleException
     *
     * @dataProvider pageProvider
     *
     */
    public function POSTReportPatternDelete(FunctionalTester $I, Example $data)
    {
        $I->loadDataForTest($data, $this->testHelper);

        $providerData = $data['provider_data'];

        $I->sendPOST('/bpm/report/delete?id=1', $providerData['requestBody']);
        $I->seeResponseCodeIs(200);

        $I->checkTablesInDB($providerData['db'], true);
    }
}