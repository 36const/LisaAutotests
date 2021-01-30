<?php

namespace lisa;

use Codeception\Example;
use lisa\Page\Requests\Request;
use lisa\Page\Other\SearchField;
use Codeception\Module\TestHelper;

/**
 * @group lisa
 * @group lisa_acceptance
 * @group lisa_acceptance_requests
 * @group ColumnsFiltersSearch
 */
class ColumnsFiltersSearchCest
{
    /**@return array*/
    protected function pageProvider()
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
    public function ColumnsFiltersSearch(AcceptanceTester $I, Example $data, Request $request)
    {
        $I->loadDataForTest($data, 'allUsers');
        $I->setRequestPerPageCookie(50);
        $setting = $data['setting'];
        $request->amOnTable();

        //открыть результаты поля поиска
        $I->click(Request::columnSearchFieldNotList($setting['column']));
        $I->canSeeElement(Request::tableSummary(24));
        $I->canSeeElement(Request::columnValueList('Пожалуйста, введите ещё хотя бы 2 символa'));

        //ввести первые две буквы и проверить выпавшие результаты
        $I->pressKey(SearchField::$search, $setting['symbol_1'], $setting['symbol_2']);
        $I->canSeeElement(Request::columnValueList($setting['value']));

        //кликнуть на один из результатов и проверить применение в таблице
        $I->click(Request::columnValueList($setting['value']));
        $I->canSeeElement(Request::columnSearchFieldNotListAfterResult($setting['column'], $setting['value']));
        $I->canSeeElement(Request::tableSummary($setting['amount']));

        //очистить фильтр колонки
        $I->click(Request::searchNotListClearButton($setting['column'], $setting['value']));
        $I->canSeeElement(Request::tableSummary(24));
        $I->cantSeeElement(Request::columnValueList($setting['value']));
    }
}