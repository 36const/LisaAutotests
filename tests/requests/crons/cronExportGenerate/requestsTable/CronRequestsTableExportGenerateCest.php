<?php

namespace lisa;

use Codeception\Example;
use Codeception\Module\TestHelper;

/**
 * @group lisa
 * @group lisa_api
 * @group lisa_api_requests
 * @group lisa_api_crons
 * @group CronExportGenerate
 * @group CronRequestsTableExportGenerate
 */
class CronRequestsTableExportGenerateCest
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
    public function CronTableExportGenerate(RequestsTester $I, Example $data)
    {
        $I->loadDataForTest($data);
        $providerData = $data['provider_data'];
        $setting = $data['setting'];

        is_dir('./web/files/')
            ? $I->cleanDir('../../../web/files/')
            : $I->runShellCommand('mkdir -p ./web/files/');

        $I->sendPOST('request/export/' . $providerData['requestUrl'], ['per-page' => 100]);

        $I->seeResponseCodeIs(200);
        $I->canSeeJsonResponseEquals($providerData['responseBody']);
        $I->canSeeNumberOfMessagesInQueue('lisa_exportGenerate', $setting['count'] ?? 1);
        $I->checkTablesInDB($providerData['db_1']);

        $I->runShellCommand('./yii export/generate');

        $I->assertEquals($setting['output'] ?? '', $I->grabShellOutput());
        $I->canSeeResultCodeIs(0);
        $I->canSeeNumberOfMessagesInQueue('lisa_exportGenerate', 0);
        $I->checkTablesInDB($providerData['db_2']);

        if (!isset($setting['count'])) {
            $I->seeFileFound(
                $providerData['db_2']['lisa_fixtures']['user_exports'][0]['title >='] . '*xlsx',
                '../../../web/files/'
            );
            $I->checkXlsxFile($providerData['fileContent'] ?? null, $setting['rows'] ?? null);
        }
    }
}