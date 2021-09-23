<?php

namespace lisa;

use Codeception\Example;
use Codeception\Module\TestHelper;

/**
 * @group lisa
 * @group lisa_api
 * @group lisa_api_settings
 * @group lisa_api_excludedFields
 * @group DELETEExcludedFieldDelete
 */
class DELETEExcludedFieldDeleteCest
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
    public function DELETEExcludedFieldDelete(SettingsTester $I, Example $data)
    {
        $I->loadDataForTest($data);
        $providerData = $data['provider_data'];

        $I->loadDataForRedis();

        $I->sendDELETE('/excluded-field/delete?field_id=10&excluded_field_id=11');

        $I->seeResponseCodeIs(200);
        $I->canSeeJsonResponseEquals($providerData['responseBody']);

        $I->checkRedis($providerData['excludedRedisKeys'] ?? null);
        $I->checkTablesInDB($providerData['db']);
    }
}
