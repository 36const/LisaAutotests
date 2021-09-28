<?php

namespace lisa;

use Codeception\Example;
use Codeception\Module\TestHelper;

/**
 * @group lisa
 * @group lisa_api
 * @group lisa_api_users
 * @group GETHistoryList
 */
class GETHistoryListCest
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
    public function GETHistoryList(UsersTester $I, Example $data)
    {
        $I->loadDataForTest($data, 'oneUserWithoutAssignment');
        $providerData = $data['provider_data'];

        $I->sendGET('/user-changing-history/list', $providerData['requestParameters']);

        $I->seeResponseCodeIs(200);
        $I->canSeeJsonResponseEquals($providerData['responseBody']);
    }
}
