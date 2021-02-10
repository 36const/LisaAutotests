<?php

namespace lisa;

use Codeception\Example;
use lisa\Page\Requests\Request;
use Codeception\Module\TestHelper;

/**
 * @group lisa
 * @group lisa_acceptance
 * @group lisa_acceptance_requests
 * @group ColumnsFiltersDate
 */
class ColumnsFiltersDateCest
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
    public function ColumnsFiltersDate(AcceptanceTester $I, Example $data, Request $request)
    {
        $I->loadDataForTest($data, 'allUsers');
        $I->setRequestPerPageCookie(50);
        $setting = $data['setting'];
        $request->amOnTable();

        //открыть календарь
        $I->click(Request::columnSearchFieldDates($setting['column']));
        $I->canSeeElement(Request::tableSummary(24));

        //установить начальную и конечную даты
        $I->click(Request::dateSetting(1));
        $I->click(Request::dateSetting(14));
        $I->canSeeElement(Request::calendarDateRange());

        //проверить применение в таблице
        $I->click(Request::$searchDatesApplyButton);
        $I->canSeeElement(Request::searchDateRange($setting['column']));
        $I->canSeeElement(Request::tableSummary($setting['amount']));

        //очистить фильтр колонки
        $I->click(Request::searchDatesClearButton($setting['column']));
        $I->cantSeeElement(Request::searchDateRange($setting['column']));
        $I->canSeeElement(Request::tableSummary(24));
    }
}