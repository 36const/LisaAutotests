<?php

namespace lisa;

use Codeception\Example;
use lisa\Page\Functional\Request;
use Codeception\Module\TestHelper;

/**
 * @group lisa
 * @group lisa_acceptance
 * @group lisa_acceptance_requests
 * @group TableColumnsSettings
 */
class TableColumnsSettingsCest
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
    public function TableColumnsSettings(AcceptanceTester $I, Example $data, Request $request)
    {
        $I->loadDataForTest($data, 'allUsers');
        $provider_data = $data['provider_data'];
        $request->amOnTable();

        $I->click(Request::$personalSettings);
        $I->waitForElementVisible("//div[@id='lisa-grid-config-form']");
        $I->canSeeNumberOfElements(Request::$visibleColumns, 1);
        $I->canSeeNumberOfElements(Request::$hiddenColumns, 74);
        $I->canSeeNumberOfElements(Request::$hiddenColumns . '[@class="disabled"]', 5);

        //перевести 20 колонок в видимые
        foreach ($provider_data['columns_1'] as $column)
            $I->click(Request::hiddenToVisible($column));

        $I->canSeeNumberOfElements(Request::$visibleColumns, 21);
        $I->canSeeNumberOfElements(Request::$hiddenColumns, 54);

        //перевести 3 колонки назад в скрытые
        foreach ($provider_data['columns_2'] as $column)
            $I->click(Request::visibleToHidden($column));

        $I->canSeeNumberOfElements(Request::$visibleColumns, 18);
        $I->canSeeNumberOfElements(Request::$hiddenColumns, 57);

        //ввести символы в строку поиска колонки
        $I->pressKey(Request::$searchColumns, 'я', ' ');
        $I->canSeeNumberOfElements(Request::$visibleColumns, 18);
        $I->canSeeNumberOfElements(Request::$hiddenColumns, 6);

        //перевести первые 3 найденные колонки в видимые
        foreach ($provider_data['columns_3'] as $column)
            $I->click(Request::hiddenToVisible($column));

//        $I->dragAndDrop(Request::$hiddenColumns . "[@value='$column']", "//div[@id='lisa-grid-config-form']//ul[contains(@class, 'sortable-visible')]");

        $I->canSeeNumberOfElements(Request::$visibleColumns, 21);
        $I->canSeeNumberOfElements(Request::$hiddenColumns, 3);

        //снять чекбокс с сохранить все изменения
        $I->click(Request::$checkboxNewTab);
        $I->click(Request::$submitSettings);
        $I->waitForElementNotVisible("//div[@id='lisa-grid-config-form']");

        $I->cantSeeCookie('newTabOpening');
        $I->checkTablesInDB($provider_data['db_1']);

        $I->click(Request::$personalSettings);
        $I->waitForElementVisible("//div[@id='lisa-grid-config-form']");
        $I->canSeeNumberOfElements(Request::$visibleColumns, 21);
        $I->canSeeNumberOfElements(Request::$hiddenColumns, 54);
        $I->canSeeNumberOfElements(Request::$hiddenColumns . '[@class="disabled"]', 5);

        //вернуть чекбокс с сбросить все изменения
        $I->click(Request::$checkboxNewTab);
        $I->click(Request::$deleteSettings);
        $I->waitForElementNotVisible("//div[@id='lisa-grid-config-form']");

        $I->canSeeCookie('newTabOpening', ['value' => 'false']);
        $I->checkTablesInDB($provider_data['db_2']);
    }
}