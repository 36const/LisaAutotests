<?php

namespace lisa;

use Codeception\Example;
use Codeception\Module\TestHelper;
use Facebook\WebDriver\WebDriverKeys;
use lisa\Page\Requests\Request;

/**
 * @group lisa
 * @group lisa_acceptance
 * @group lisa_acceptance_requests
 * @group ColumnsFiltersSearch
 */
class TableColumnsFiltersSearchCest
{
    protected function pageProvider(): array
    {
        return TestHelper::prepareDataprovider(require 'data.php', '');
    }

    /**
     * @param AcceptanceTester $I
     * @param Example $data
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @dataProvider pageProvider
     */
    public function ColumnsFiltersSearch(AcceptanceTester $I, Example $data)
    {
        $I->loadDataForTest($data, 'allUsers');
        $setting = $data['setting'];
        $provider_data = $data['provider_data'];
        $I->cleanup();

        //без данной хрени выдаётся element is not interractible при клике в этих кейсах
        if (in_array($setting['column'], ['supervisor_id', 'cross_check_manager_id']))
            $I->amOnPage('/');

        $I->amOnPage('/lisa/#/request/list/all');

        //открыть результаты поля поиска и ввести текст
        $I->retryClick(Request::columnSearchField($setting['column']));
        $I->pressKey(Request::columnSearchField($setting['column']), $setting['symbol_1'], $setting['symbol_2']);
        $I->waitAndCantSeeVisualChanges(__FUNCTION__ . $setting['case'] . 1);

        //кликнуть на один из результатов и проверить применение в таблице
        in_array($setting['column'], ['category_id', 'rz_category_id', 'seller_id'])
            ? $I->retryClick(Request::columnValueFromSearch(substr($setting['value'], 4)))
            : $I->retryClick(Request::columnValueFromSearch(explode(' ', trim($setting['value']))[0]));

        $I->canSeeElement(Request::selectedValueFromSearch($setting['column'], $setting['value']));
        $I->canSeeElement(Request::tableSummary($setting['amount']));
        $I->waitAndCantSeeVisualChanges(__FUNCTION__ . $setting['case'] . 2);

        //очистить фильтр колонки
        $I->click(Request::searchClearButton($setting['column']));

        $I->cantSeeElement(Request::selectedValueFromSearch($setting['column'], $setting['value']));
        $I->canSeeElement(Request::HIDDEN_TABLE_SUMMARY);
        $I->waitAndCantSeeVisualChanges(__FUNCTION__ . $setting['case'] . 3);
    }
}