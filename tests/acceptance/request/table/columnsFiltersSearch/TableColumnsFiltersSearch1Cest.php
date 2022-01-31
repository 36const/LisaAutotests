<?php

namespace lisa;

use Codeception\Example;
use Codeception\Module\TestHelper;
use Facebook\WebDriver\WebDriverKeys;
use lisa\Page\Requests\RequestTable;

/**
 * @group lisa
 * @group lisa_acceptance
 * @group lisa_acceptance_2
 * @group lisa_acceptance_requests
 * @group TableColumnsFiltersSearch
 * @group TableColumnsFiltersSearch1
 */
class TableColumnsFiltersSearch1Cest
{
    protected function pageProvider(): array
    {
        return TestHelper::prepareDataprovider(require 'data.php', 'case1 case2 case3');
    }

    /**
     * @param AcceptanceTester $I
     * @param Example $data
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @dataProvider pageProvider
     */
    public function TableColumnsFiltersSearch(AcceptanceTester $I, Example $data)
    {
        $I->loadDataForTest($data, 'allUsers');
        $setting = $data['setting'];
        $provider_data = $data['provider_data'];
        $I->cleanup();

        $I->TableColumnsFiltersSearch($setting, $provider_data);
    }
}