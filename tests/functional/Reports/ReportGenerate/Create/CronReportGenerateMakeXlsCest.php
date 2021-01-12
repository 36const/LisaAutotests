<?php

namespace lisa;

use Codeception\Example;
use Codeception\Module\TestHelper;

/**
 * @group lisa
 * @group lisa_functional
 * @group lisa_functional_reports
 * @group CronMakeXls
 * @group CronReportGenerateMakeXls
 */
class CronReportGenerateMakeXlsCest
{
    /**@return array*/
    protected function pageProvider()
    {
        return TestHelper::prepareDataprovider(require 'data.php', '');
    }

    /**
     * @param FunctionalTester $I
     * @param Example $data
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @dataProvider pageProvider
     */
    public function CronReportGenerateMakeXls(FunctionalTester $I, Example $data)
    {
        $I->loadDataForTest($data, 'allUsers');
        $providerData = $data['provider_data'];

        $I->sendPOST('/bpm/report/generate', $providerData['requestBody']);
        $I->seeResponseCodeIs(200);
        $I->canSeeNumberOfMessagesInQueue('lisa_exportGenerating', 1);

        $I->runShellCommand('./yii bpm/request/make-xls');
        $I->canSeeInShellOutput('');
        $I->canSeeResultCodeIs(0);
        $I->canSeeNumberOfMessagesInQueue('lisa_exportGenerating', 0);

        $I->amOnPage('/bpm/export/index');
        $I->checkObjectsOnPage($providerData['pageObjects']);
        $I->checkTablesInDB($providerData['db']);
    }
}