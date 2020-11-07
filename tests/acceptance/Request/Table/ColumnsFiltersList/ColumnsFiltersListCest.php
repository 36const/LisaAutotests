<?php

namespace lisa;

use Codeception\Example;
use lisa\Page\Functional\Request;
use rzk\TestHelper;

/**
 * @group lisa
 * @group lisa_acceptance_requests
 * @group ColumnsFiltersList
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
        $I->setCookie('4_1', '9011c14791a24f62123a9c8024e3f775cdfa1d7fce0c67f3f3dfd50c5963b309a%3A2%3A%7Bi%3A0%3Bs%3A3%3A%224_1%22%3Bi%3A1%3Bs%3A157%3A%22%7B%22grid%22%3A%22%7B%5C%22page%5C%22%3A10%2C%5C%22theme%5C%22%3A%5C%22panel-danger%5C%22%2C%5C%22keys%5C%22%3A%5B%5C%226f4cf3ff%5C%22%2C%5C%22195c6167%5C%22%2C%5C%227100d06f%5C%22%2C%5C%229052d997%5C%22%2C%5C%22450d4c53%5C%22%5D%2C%5C%22filter%5C%22%3Anull%2C%5C%22sort%5C%22%3Anull%7D%22%7D%22%3B%7D');
        $I->seeCookie('4_1');
        $I->setCookie('requestsPerPage', '3ec0974560bea6af5963e933fe1c99eb711543f52eb104c79ee3d8072ad13089a%3A2%3A%7Bi%3A0%3Bs%3A15%3A%22requestsPerPage%22%3Bi%3A1%3Bi%3A50%3B%7D');
        $I->seeCookie('requestsPerPage');
        $setting = $data['setting'];
        $provider_data = $data['provider_data'];
        $request->amOnTable();

        //открыть список значений в фильтре колонки
        $I->click(Request::columnSearchField($setting['column']));
        $I->canSeeElement(Request::tableSummary(24));
        $I->checkObjectsOnPage($provider_data['columnValueList']);

        //выбрать все значения из выпадающего списка значений колонки
        $I->click(Request::$columnSelectAll);
        $I->canSeeElement(Request::tableSummary(24));
        $I->checkObjectsOnPage($provider_data['searchValueListAll']);

        //удалить одно из выбранных значений колонки
        $I->click(Request::searchValueRemove($setting['column'], $setting['value']));
        $I->canSeeElement(Request::tableSummary($setting['amount']));
        $I->checkObjectsOnPage($provider_data['searchValueListNotAll']);

        //удалить все оставшиеся значения колонки (очистить фильтр колонки)
        $I->click(Request::searchClearButton($setting['column']));
        $I->canSeeElement(Request::tableSummary(24));
        $I->checkObjectsOnPage($provider_data['searchValueListNotAnyone']);
    }
}