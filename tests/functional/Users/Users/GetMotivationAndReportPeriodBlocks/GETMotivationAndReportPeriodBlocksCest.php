<?php

namespace lisa;

use Codeception\Example;
use Codeception\Module\TestHelper;
use lisa\Page\Functional\RequestView;

/**
 * @group lisa
 * @group lisa_functional
 * @group lisa_functional_users
 * @group GETMotivationAndReportPeriodBlocks
 */
class GETMotivationAndReportPeriodBlocksCest
{
    /**@return array*/
    protected function pageProvider()
    {
        return TestHelper::prepareDataprovider(require 'data.php', '');
    }

    /**
     * @param FunctionalTester $I
     * @param Example $data
     * @param RequestView $view
     * @throws \GuzzleHttp\Exception\GuzzleException
     *
     * @dataProvider pageProvider
     *
     */
    public function GETMotivationAndReportPeriodBlocks(FunctionalTester $I, Example $data, RequestView $view)
    {
        $I->loadDataForTest($data, null);

        $providerData = $data['provider_data'];

        $view->amOnView(1);
        $I->seeResponseCodeIs(200);

        $I->checkObjectsOnPage($providerData['pageObjects']);
    }
}
