<?php

namespace lisa;

use Codeception\Example;
use Codeception\Module\TestHelper;

/**
 * @group lisa
 * @group lisa_functional
 * @group lisa_functional_users
 * @group GETPermissions
 */
class GETPermissionsCest
{
    protected function pageProvider(): array
    {
        return TestHelper::prepareDataprovider(require 'data.php', '');
    }

    /**
     * @param FunctionalTester $I
     * @param Example $data
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @dataProvider pageProvider
     */
    public function GETPermissions(FunctionalTester $I, Example $data)
    {
        $I->loadDataForTest($data, 'oneUserWithoutPermissionsTable');
        $providerData = $data['provider_data'];

        $I->amOnPage($providerData['url']);

        $I->seeResponseCodeIs($providerData['responseCode'] ?? 200);

        $I->checkObjectsOnPage($providerData['pageObjects']);
    }
}
