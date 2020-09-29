<?php

namespace lisa;

use Codeception\Example;
use lisa\Page\Functional\Request;
use rzk\TestHelper;

/**
 * @group lisa
 * @group lisa_functional
 * @group lisa_functional_requests
 * @group ColumnsFilters
 */
class ColumnsFiltersListCest
{
    /**
     * @var TestHelper $testHelper
     */
    private $testHelper;

    public function __construct()
    {
        $this->testHelper = new TestHelper(__DIR__);
    }

    /**
     * @return array
     */
    protected function pageProvider()
    {
        return $this->testHelper->getDataProvider('');
    }

    /**
     * @param AcceptanceTester $I
     * @param Example $data
     * @param Request $request
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @dataProvider pageProvider
     */
    public function ColumnsFilters(AcceptanceTester $I, Example $data, Request $request)
    {
        $I->loadDataForTest($data, $this->testHelper, ['allUsers']);
        $I->setCookie('4_1', '4af694c2adb20eb8d86832aae7e632ea63d498b38e29ae526745c68a67a31709a%3A2%3A%7Bi%3A0%3Bs%3A3%3A%224_1%22%3Bi%3A1%3Bs%3A287%3A%22%7B%22grid%22%3A%22%7B%5C%22page%5C%22%3A10%2C%5C%22theme%5C%22%3A%5C%22panel-danger%5C%22%2C%5C%22keys%5C%22%3A%5B%5C%226f4cf3ff%5C%22%2C%5C%22195c6167%5C%22%2C%5C%227100d06f%5C%22%2C%5C%229f3bab20%5C%22%2C%5C%223a15b8f6%5C%22%2C%5C%2212fe4397%5C%22%2C%5C%22132cbbd2%5C%22%2C%5C%22ef6ef760%5C%22%2C%5C%2250cd524a%5C%22%2C%5C%22bf04724b%5C%22%2C%5C%220e27ac6a%5C%22%2C%5C%224a16cdfb%5C%22%2C%5C%222187abd1%5C%22%2C%5C%22216af811%5C%22%2C%5C%2245671659%5C%22%5D%2C%5C%22filter%5C%22%3Anull%2C%5C%22sort%5C%22%3Anull%7D%22%7D%22%3B%7D');
        $setting = $data['setting'];
        $provider_data = $data['provider_data'];
        $request->amOnTable();

        $I->click(Request::columnSearchField($setting['column']));
        $I->canSeeElement(Request::tabSummary(24));
        $I->checkObjectsOnPage($provider_data['columnValueList']);

        $I->click(Request::$columnSelectAll);
        $I->canSeeElement(Request::tabSummary(24));
        $I->checkObjectsOnPage($provider_data['searchValueListAll']);

        $I->click(Request::searchValueRemove($setting['column'], $setting['value']));
        $I->canSeeElement(Request::tabSummary($setting['amount']));
        $I->checkObjectsOnPage($provider_data['searchValueListNotAll']);

        $I->click(Request::searchClearButton($setting['column']));
        $I->canSeeElement(Request::tabSummary(24));
        $I->checkObjectsOnPage($provider_data['searchValueListNotAnyone']);
    }
}