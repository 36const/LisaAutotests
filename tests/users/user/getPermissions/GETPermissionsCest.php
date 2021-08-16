<?php

namespace lisa;

use Codeception\Example;
use Codeception\Module\TestHelper;

/**
 * @group lisa
 * @group lisa_api
 * @group lisa_api_users
 * @group GETPermissions
 */
class GETPermissionsCest
{
    protected function pageProvider(): array
    {
        return TestHelper::prepareDataprovider(require 'data.php', 'case1 case2 case3 case4');
    }

    /**
     * @param UsersTester $I
     * @param Example $data
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @dataProvider pageProvider
     */
    public function GETPermissions(UsersTester $I, Example $data)
    {
        $I->loadDataForTest($data, 'oneUserWithoutAssignment');
        $providerData = $data['provider_data'];

        foreach ($providerData['url'] as $url) {
            $I->sendGET($url);
            $I->canSeeResponseCodeIs($providerData['responseCode'] ?? 200);
            
            isset($providerData['responseBody'])
                ? $I->canSeePartJsonResponseEquals($providerData['responseBody'], $providerData['jsonPath'])
                : $I->cantSeeResponseJsonMatchesJsonPath($providerData['jsonPath']);
        }
    }
}
