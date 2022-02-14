<?php

namespace lisa;

use Codeception\Example;
use Codeception\Module\TestHelper;

/**
 * @group lisa
 * @group lisa_api
 * @group lisa_api_requests
 * @group POSTMassCreate
 */
class POSTMassCreateCest
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
    public function POSTMassCreate(RequestsTester $I, Example $data)
    {
        $I->loadDataForTest($data);
        $providerData = $data['provider_data'];
        $setting = $data['setting'];

        foreach ($providerData['requests'] as $request) {
            $I->sendPOST('/request/create', $request);
            $I->seeResponseCodeIs(200);
        }

        $I->checkTablesInDB($providerData['db']);

        if (stripos($setting['description'], '5')) {
            $I->seeNumRecords(6, 'requests', ['supervisor_id' => '34']);
            $I->seeNumRecords(6, 'requests', ['supervisor_id' => '37']);
        }
    }
}
