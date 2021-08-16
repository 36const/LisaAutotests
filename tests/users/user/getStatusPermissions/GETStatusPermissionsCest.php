<?php

namespace lisa;

use Codeception\Example;
use Codeception\Module\TestHelper;

/**
 * @group lisa
 * @group lisa_api
 * @group lisa_api_users
 * @group GETStatusPermissions
 */
class GETStatusPermissionsCest
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
    public function GETStatusPermissions(UsersTester $I, Example $data)
    {
        $I->loadDataForTest($data, 'oneUserWithoutAssignment');
        $providerData = $data['provider_data'];

        $I->sendGET($providerData['url']);
        $I->canSeeResponseCodeIs(200);
        $I->canSeePartJsonResponseEquals($providerData['tableMassButtons'], '$.tabsData');
        
        $I->sendGET('/request/buttons/1');
        $I->canSeeResponseCodeIs(200);
        $I->canSeeJsonResponseEquals($providerData['contextAndViewButtons']);

        $I->sendGET('/request/view/1');
        $I->canSeeResponseCodeIs(200);
        $I->canSeePartJsonResponseEquals($providerData['contextAndViewButtons'], '$.buttons');

        if (isset($providerData['toCorrectionButtons'])) {
            $I->sendGET('/request/to-correction/1');
            $I->canSeePartJsonResponseEquals($providerData['toCorrectionButtons'], '$.fieldsData.actualErrors');
        }
    }
}
