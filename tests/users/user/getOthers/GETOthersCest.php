<?php

namespace lisa;

use Codeception\Example;
use Codeception\Module\TestHelper;

/**
 * @group lisa
 * @group lisa_api
 * @group lisa_api_users
 * @group GETOthers
 */
class GETOthersCest
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
    public function GETOthers(UsersTester $I, Example $data)
    {
        $I->loadDataForTest($data);
        $providerData = $data['provider_data'];

        $I->sendGET('/user/' . $providerData['url']);

        $I->canSeeResponseCodeIs(200);
        $I->canSeeJsonResponseEquals($providerData['responseBody']);
    }
}
