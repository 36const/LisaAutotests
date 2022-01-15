<?php

namespace lisa;

use Codeception\Example;
use Codeception\Module\TestHelper;

/**
 * @group lisa
 * @group lisa_api
 * @group lisa_api_reports
 * @group lisa_api_crons
 * @group CronExportGenerate
 * @group CronReportExportGenerateByUsers
 */
class CronReportExportGenerateByUsersCest
{
    protected function pageProvider(): array
    {
        return TestHelper::prepareDataprovider(require 'data.php', '');
    }

    /**
     * @param UsersTester $I
     * @param Example $data
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @dataProvider pageProvider
     */
    public function CronReportExportGenerateByUsers(UsersTester $I, Example $data)
    {
        $I->loadDataForTest($data, 'allUsers');
        $providerData = $data['provider_data'];
        $setting = $data['setting'];

        $I->runShellCommand(Constants::MAKE_AND_CLEAR_FILES_DIR);

        $I->sendPOST('report/generate', $providerData['requestBody']);

        $I->seeResponseCodeIs(200);
        $I->canSeeResponseEquals('{"success":true}');
        $I->canSeeNumberOfMessagesInQueue('lisa_exportGenerate', $setting['count'] ?? 1);
        $I->checkTablesInDB($providerData['db_1']);

        $I->runShellCommand('./yii export/generate');

        $I->assertEquals('', $I->grabShellOutput());
        $I->canSeeResultCodeIs(0);
        $I->canSeeNumberOfMessagesInQueue('lisa_exportGenerate', 0);
        $I->checkTablesInDB($providerData['db_2']);

        $I->seeFileFound(
            $providerData['db_2']['lisa_fixtures']['user_exports'][0]['title >'] . ($setting['format'] ?? '*.xlsx'),
            Constants::TEMP_FILES_DIR
        );
        $I->checkXlsxFile($providerData['fileContent'] ?? null, $setting['rows'] ?? null);
    }
}
