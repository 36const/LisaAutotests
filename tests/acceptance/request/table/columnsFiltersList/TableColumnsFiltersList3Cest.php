<?php

namespace lisa;

use Codeception\Example;
use Codeception\Module\TestHelper;
use Facebook\WebDriver\WebDriverKeys;
use lisa\Page\Requests\RequestTable;

/**
 * @group lisa
 * @group lisa_acceptance
 * @group lisa_acceptance_requests
 * @group TableColumnsFiltersList
 * @group TableColumnsFiltersList3
 */
class TableColumnsFiltersList3Cest
{
    protected function pageProvider(): array
    {
        return TestHelper::prepareDataprovider(require 'data.php', 'case9 case10 case11 case12');
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