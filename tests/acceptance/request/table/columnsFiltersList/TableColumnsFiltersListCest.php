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
 * @group TableColumnsFiltersList
 */
class TableColumnsFiltersListCest
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
    public function TableColumnsFiltersList(AcceptanceTester $I, Example $data)
    {
        $I->loadDataForTest($data);
        $setting = $data['setting'];
        $provider_data = $data['provider_data'];
        $I->cleanup();
        $I->amOnPage('/lisa/#/request/list/all');

        //открыть список значений в фильтре колонки
        $I->retryClick(Request::columnSearchField($setting['column']));
        $I->checkObjectsOnPage($provider_data['columnValueList']);
        //$I->waitAndCantSeeVisualChanges(__FUNCTION__ . $setting['case'] . 1);

        //выбрать несколько значений из выпадающего списка
        foreach ($provider_data['columnValueListToSelect'] as $item)
            $I->clickAndWait($item);

        if ($I->tryToSeeElement(Request::HIDDEN_TABLE_SUMMARY))
            $I->moveMouseOver(Request::HIDDEN_TABLE_SUMMARY);

        $I->waitForElement(Request::tableSummary($setting['tableSummary_1']));
        $I->checkObjectsOnPage($provider_data['searchValueList_1']);
        $I->waitAndCantSeeVisualChanges(__FUNCTION__ . $setting['case'] . 2);

        //удалить одно из выбранных значений колонки
        $I->click(Request::searchValueRemove($setting['column'], $setting['value'] ?? '(не задано)'));

        $I->waitForElement(Request::tableSummary($setting['tableSummary_2']));
        $I->checkObjectsOnPage($provider_data['searchValueList_2']);
        $I->waitAndCantSeeVisualChanges(__FUNCTION__ . $setting['case'] . 3);

        //удалить все оставшиеся значения колонки (очистить фильтр колонки)
        $I->click(Request::searchClearButton($setting['column']));

        $I->waitForElement(Request::HIDDEN_TABLE_SUMMARY);
        $I->checkObjectsOnPage($provider_data['searchValueList_3']);
        //$I->waitAndCantSeeVisualChanges(__FUNCTION__ . $setting['case'] . 4);
    }
}