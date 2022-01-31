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
 * @group TableColumnsFiltersList
 * @group TableColumnsFiltersList2
 */
class TableColumnsFiltersList2Cest
{
    protected function pageProvider(): array
    {
        return TestHelper::prepareDataprovider(require 'data.php', 'case5 case6 case7 case8');
    }

    /**
     * @param AcceptanceTester $I
     * @param Example $data
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @dataProvider pageProvider
     */
    public function TableColumnsFiltersList(AcceptanceTester $I, Example $data)
    {
        $I->loadDataForTest($data);
        $setting = $data['setting'];
        $provider_data = $data['provider_data'];
        $I->cleanup();

        $I->TableColumnsFiltersList($setting, $provider_data);
    }
}