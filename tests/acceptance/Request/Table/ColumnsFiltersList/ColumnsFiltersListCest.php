<?php

namespace lisa;

use Codeception\Example;
use lisa\Page\Requests\Request;
use Codeception\Module\TestHelper;

/**
 * @group lisa
 * @group lisa_acceptance
 * @group lisa_acceptance_requests
 * @group ColumnsFiltersList
 */
class ColumnsFiltersListCest
{
    protected function pageProvider(): array
    {
        return TestHelper::prepareDataprovider(require 'data.php', '');
    }

    /**
     * @param AcceptanceTester $I
     * @param Example $data
     * @param Request $request
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @dataProvider pageProvider
     */
    public function ColumnsFiltersList(AcceptanceTester $I, Example $data, Request $request)
    {
        $I->loadDataForTest($data, 'allUsers');
        $I->setRequestPerPageCookie(50);
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