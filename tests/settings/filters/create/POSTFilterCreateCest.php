<?php

namespace lisa;

use Codeception\Example;
use Codeception\Module\TestHelper;

/**
 * @group lisa
 * @group lisa_api
 * @group lisa_api_settings
 * @group lisa_api_filter
 * @group POSTFilter
 * @group POSTFilterCreate
 */
class POSTFilterCreateCest
{
    protected function pageProvider(): array
    {
        return TestHelper::prepareDataprovider(require 'data.php', '');
    }

    /**
     * @param SettingsTester $I
     * @param Example $data
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @dataProvider pageProvider
     */
    public function POSTFilterCreate(SettingsTester $I, Example $data)
    {
        $I->loadDataForTest($data);
        $providerData = $data['provider_data'];

        $I->loadDataForRedis(RequestsTester::REDIS_KEYS_VALUES);
        
        $I->haveHttpHeader('Content-Type', 'application/json');
        $I->sendPOST('/filter/save', $providerData['requestBody']);
        
        $I->seeResponseCodeIs(200);
        $I->canSeeJsonResponseEquals($providerData['responseBody']);

        $I->checkRedis($providerData['excludedRedisKeys'] ?? null);
        $I->checkTablesInDB($providerData['db']);
    }
}