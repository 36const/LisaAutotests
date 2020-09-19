<?php

namespace lisa;

use Codeception\Example;
use rzk\TestHelper;

/**
 * @group lisa
 * @group lisa_functional
 * @group lisa_functional_reports
 * @group CronMakeXls
 * @group CronReportGenerateMakeXls
 */
class CronReportGenerateMakeXlsCest
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
    public function CronReportGenerateMakeXls(FunctionalTester $I, Example $data)
    {
        $I->loadDataForTest($data, $this->testHelper, ['allUsers']);
        $providerData = $data['provider_data'];

        $I->sendPOST('/bpm/report/generate', $providerData['requestBody']);
        $I->seeResponseCodeIs(200);

        $I->runShellCommand('./yii bpm/request/make-xls');
        $I->canSeeInShellOutput('');

        $I->amOnPage('/bpm/export/index');
        $I->checkObjectsOnPage($providerData['pageObjects']);
        $I->checkTablesInDB($providerData['db']);
    }
}