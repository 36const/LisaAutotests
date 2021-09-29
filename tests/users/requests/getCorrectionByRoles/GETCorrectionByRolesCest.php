<?php

namespace lisa;

use Codeception\Example;
use Codeception\Module\TestHelper;

/**
 * @group lisa
 * @group lisa_api
 * @group lisa_api_users
 * @group GETCorrectionByRoles
 */
class GETCorrectionByRolesCest
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
    public function GETCorrectionByRoles(UsersTester $I, Example $data)
    {
        $I->loadDataForTest($data, null);
        $providerData = $data['provider_data'];

        $I->sendGET('/request/to-correction/1?isCorrection');

        $I->canSeeResponseCodeIs(200);
        $I->canSeeJsonResponseEquals($providerData['responseCorrectionBody']);

        $I->sendGET('/request/to-correction/1');

        $I->canSeeResponseCodeIs(200);
        $I->canSeeJsonResponseEquals($providerData['responseToCorrectionBody']);
    }
}
