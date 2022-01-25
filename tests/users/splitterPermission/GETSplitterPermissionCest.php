<?php

namespace lisa;

use Codeception\Example;
use Codeception\Module\TestHelper;

/**
 * @group lisa
 * @group lisa_api
 * @group lisa_api_users
 * @group GETSplitterPermission
 */
class GETSplitterPermissionCest
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
    public function GETSplitterPermission(UsersTester $I, Example $data)
    {
        $I->loadDataForTest($data);
        $providerData = $data['provider_data'];

        $I->amOnPage('http://splitter.docker/lisa');

        $I->seeResponseCodeIs(200);

        foreach ($providerData['sidebarElements']['canSee'] as $element)
            $I->canSeeElement($element);

        foreach ($providerData['sidebarElements']['cantSee'] as $element)
            $I->cantSeeElement($element);
    }
}
