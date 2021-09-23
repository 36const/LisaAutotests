<?php

namespace lisa;

use Codeception\Example;
use Codeception\Module\TestHelper;

/**
 * @group lisa
 * @group lisa_api
 * @group lisa_api_reports
 * @group POSTReportPattern
 * @group POSTReportPatternCreateUpdate
 */
class POSTReportPatternCreateUpdateCest
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
    public function POSTReportPatternCreateUpdate(RequestsTester $I, Example $data)
    {
        $I->loadDataForTest($data);
        $providerData = $data['provider_data'];

        $I->sendPOST('/report/save', $providerData['requestBody']);
        
        $I->seeResponseCodeIs(200);
        $I->canSeeJsonResponseEquals($providerData['responseBody']);

        $I->checkTablesInDB($providerData['db']);
    }
}
