<?php

namespace lisa;

use Codeception\Example;
use lisa\Page\Functional\Dashboard;
use Codeception\Module\TestHelper;

/**
 * @group lisa
 * @group lisa_functional
 * @group lisa_functional_dashboard
 * @group GETDashboardDetail
 */
class GETDashboardDetailCest
{
    /**@return array*/
    protected function pageProvider()
    {
        return TestHelper::prepareDataprovider(require 'data.php', '');
    }

    /**
     * @param FunctionalTester $I
     * @param Example $data
     * @param Dashboard $dashboard
     * @throws \GuzzleHttp\Exception\GuzzleException
     *
     * @dataProvider pageProvider
     *
     */
    public function GETDashboardDetail(FunctionalTester $I, Example $data, Dashboard $dashboard)
    {
        $I->loadDataForTest($data, 'allUsers');
        $providerData = $data['provider_data'];

        $I->runShellCommand('./yii bpm/request/count-for-dashboards');
        $I->canSeeInShellOutput('');

        $dashboard->amOnDashboardDetail($providerData['url']);
        $I->seeResponseCodeIs(200);

        $I->checkObjectsOnPage($providerData['pageObjects']);
    }
}
