<?php

namespace lisa;

use Codeception\Example;
use Codeception\Module\TestHelper;
use lisa\Page\Requests\RequestView;

/**
 * @group lisa
 * @group lisa_functional
 * @group lisa_functional_users
 * @group GETMotivationAndReportPeriodBlocks
 */
class GETMotivationAndReportPeriodBlocksCest
{
    protected function pageProvider(): array
    {
        return TestHelper::prepareDataprovider(require 'data.php', '');
    }

    /**
     * @param UserTester $I
     * @param Example $data
     * @param RequestView $view
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @dataProvider pageProvider
     */
    public function GETMotivationAndReportPeriodBlocks(UserTester $I, Example $data, RequestView $view)
    {
        $I->loadDataForTest($data, null);
        $providerData = $data['provider_data'];

        $view->amOnView(1);
        $I->seeResponseCodeIs(200);

        $I->checkObjectsOnPage($providerData['pageObjects']);
    }
}