<?php

namespace lisa;

use Codeception\Example;
use Codeception\Module\TestHelper;

/**
 * @group lisa
 * @group lisa_api
 * @group lisa_api_users
 * @group GETBlockedFieldsByRoles
 */
class GETBlockedFieldsByRolesCest
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
    public function GETBlockedFieldsByRoles(UsersTester $I, Example $data)
    {
        $I->loadDataForTest($data, null);
        $providerData = $data['provider_data'];

        $I->sendGET('/request/view/1');
        $I->canSeeResponseCodeIs(200);

        foreach ($providerData['responseBody'] as $jsonPath => $jsonValue)
            $I->canSeePartJsonResponseEquals($jsonValue, $jsonPath);
    }
}
