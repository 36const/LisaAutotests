<?php

namespace lisa;

use Codeception\Example;
use Codeception\Module\TestHelper;

/**
 * @group lisa
 * @group lisa_functional
 * @group lisa_functional_reports
 * @group CronMakeXls
 * @group CronReportFixateMakeXls
 */
class CronReportFixateMakeXlsCest
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
    public function CronReportFixateMakeXls(FunctionalTester $I, Example $data)
    {
        $I->loadDataForTest($data, 'allUsers');
        $providerData = $data['provider_data'];
        $I->cleanDir(FunctionalTester::BPM_UPLOADS);

        $I->sendGET('/bpm/report/export' . $providerData['url']);
        $I->seeResponseCodeIs(200);
        $I->canSeeNumberOfMessagesInQueue('lisa_exportGenerating', 1);
        $I->checkTablesInDB($providerData['db_1']);

        $I->runShellCommand('./yii bpm/request/make-xls');
        $I->canSeeInShellOutput('');
        $I->canSeeResultCodeIs(0);
        $I->canSeeNumberOfMessagesInQueue('lisa_exportGenerating', 0);

        $I->amOnPage('/bpm/export/index');
        $I->checkObjectsOnPage($providerData['pageObjects']);
        $I->checkTablesInDB($providerData['db_2']);
        $I->canSeeFileFound(
            $providerData['db_2']['lisa_fixtures']['user_exports'][0]['title >'] . '*',
            FunctionalTester::BPM_UPLOADS
        );
    }
}