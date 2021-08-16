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
 * @group CronReportFixateExportGenerate
 */
class CronReportFixateExportGenerateCest
{
    protected function pageProvider(): array
    {
        return TestHelper::prepareDataprovider(require 'data.php', '');
    }

    /**
     * @param RequestsTester $I
     * @param Example $data
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @dataProvider pageProvider
     */
    public function CronReportFixateExportGenerate(RequestsTester $I, Example $data)
    {
        $I->loadDataForTest($data);
        $providerData = $data['provider_data'];
        $setting = $data['setting'];

        is_dir('./web/files/')
            ? $I->cleanDir('../../../web/files/')
            : $I->runShellCommand('mkdir -p ./web/files/');

        $I->sendPOST('report/export' . $providerData['url']);

        $I->seeResponseCodeIs(200);
        $I->canSeeResponseEquals('{"success":true}');
        $I->canSeeNumberOfMessagesInQueue('lisa_exportGenerate', $setting['count'] ?? 1);
        $I->checkTablesInDB($providerData['db_1']);

        $I->runShellCommand('./yii export/generate');

        $I->assertEquals('', $I->grabShellOutput());
        $I->canSeeResultCodeIs(0);
        $I->canSeeNumberOfMessagesInQueue('lisa_exportGenerate', 0);
        $I->checkTablesInDB($providerData['db_2']);

        if (!isset($setting['count'])) {
            $I->seeFileFound(
                $providerData['db_2']['lisa_fixtures']['user_exports'][0]['title >'] . '*xlsx',
                '../../../web/files/'
            );
            $I->checkXlsxFile($providerData['fileContent'] ?? null, $setting['rows'] ?? null);
        }
    }
}