<?php

namespace lisa;

use Codeception\Example;
use Codeception\Module\TestHelper;

/**
 * @group lisa
 * @group lisa_api
 * @group lisa_api_users
 * @group GETUserModel
 */
class GETUserModelCest
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
    public function GETReasonModel(UsersTester $I, Example $data)
    {
        $I->loadDataForTest($data, 'allUsersWithoutSettings');
        $providerData = $data['provider_data'];

        $I->sendGET('/user/get-model/' . ($providerData['id'] ?? null));

        $I->seeResponseCodeIs(200);
        $I->canSeeJsonResponseEquals($providerData['responseBody']);
    }
}
