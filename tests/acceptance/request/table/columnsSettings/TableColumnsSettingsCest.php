<?php

namespace lisa;

use Codeception\Example;
use Codeception\Module\TestHelper;
use Facebook\WebDriver\WebDriverKeys;
use lisa\Page\Requests\RequestTable;
use lisa\Page\Requests\RequestCreate;

/**
 * @group lisa
 * @group lisa_acceptance
 * @group lisa_acceptance_requests
 * @group TableColumnsSettings
 */
class TableColumnsSettingsCest
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
    public function TableColumnsSettings(AcceptanceTester $I, Example $data)
    {
        $I->loadDataForTest($data);
        $provider_data = $data['provider_data'];

        $I->amOnPage('/lisa/#/request/list/all');
        $I->click(RequestTable::TABLE_SETTINGS);

        $I->waitForElementVisible(RequestTable::HIDDEN_COLUMNS);
        $I->canSeeNumberOfElements(RequestTable::VISIBLE_COLUMNS, 0);
        $I->canSeeNumberOfElements(RequestTable::HIDDEN_COLUMNS, 83);
        $I->waitAndCantSeeVisualChanges(__FUNCTION__ . 1);

        //перевести 18 колонок в видимые
        $quantity = 18;
        while ($quantity > 0) {
            $I->click(RequestTable::HIDDEN_COLUMNS . '/button');
            $quantity--;
        }
        $I->canSeeNumberOfElements(RequestTable::VISIBLE_COLUMNS, 18);
        $I->canSeeNumberOfElements(RequestTable::HIDDEN_COLUMNS, 65);
        $I->waitAndCantSeeVisualChanges(__FUNCTION__ . 2);

        //отфильтровать скрытые колонки с "дата" в названии
        $I->pressKey(RequestTable::SEARCH_COLUMNS, 'д', 'а', 'т', 'а');
        $I->waitAndCantSeeVisualChanges(__FUNCTION__ . 3);

        //попытаться перевести ещё 4 колонки в видимые, переведутся только 2
        $quantity = 4;
        while ($quantity > 0) {
            $I->click(RequestTable::HIDDEN_COLUMNS . '/button');
            $quantity--;
        }
        $I->canSeeNumberOfElements(RequestTable::VISIBLE_COLUMNS, 20);
        $I->canSeeNumberOfElements(RequestTable::HIDDEN_COLUMNS, 5);
        $I->waitAndCantSeeVisualChanges(__FUNCTION__ . 4);

        //очистить поле фильтра
        $I->pressKey(
            RequestTable::SEARCH_COLUMNS, 
            WebDriverKeys::BACKSPACE, WebDriverKeys::BACKSPACE, WebDriverKeys::BACKSPACE, WebDriverKeys::BACKSPACE
        );
        $I->waitAndCantSeeVisualChanges(__FUNCTION__ . 5);

        //сохранить настройки
        $I->click(RequestTable::SAVE_SETTINGS_BUTTON);
        $I->waitAndCantSeeVisualChanges(__FUNCTION__ . 6);
        $I->checkTablesInDB($provider_data['db_1']);

        //перезагрузить страницу
        $I->reloadPage();
        $I->waitForElement(RequestCreate::CREATE_BUTTON);
        $I->waitAndCantSeeVisualChanges(__FUNCTION__ . 7);

        //открыть настройки и проверить, что после перезагрузки страницы они не изменились
        $I->click(RequestTable::TABLE_SETTINGS);
        $I->waitForElementVisible(RequestTable::HIDDEN_COLUMNS);
        $I->canSeeNumberOfElements(RequestTable::VISIBLE_COLUMNS, 20);
        $I->canSeeNumberOfElements(RequestTable::HIDDEN_COLUMNS, 63);
        $I->waitAndCantSeeVisualChanges(__FUNCTION__ . 8);

        //установить открытие заявки в новой вкладке, что после перезагрузки страницы они не изменились
        $I->click(RequestTable::CHECKBOX_NEW_TAB);
        $I->click(RequestTable::SAVE_SETTINGS_BUTTON);
        $I->reloadPage();
        $I->click(RequestTable::TABLE_SETTINGS);
        $I->waitForElementVisible(RequestTable::HIDDEN_COLUMNS, 5);
        $I->waitAndCantSeeVisualChanges(__FUNCTION__ . 9);

        //установить открытие заявки в новом окне, что после перезагрузки страницы они не изменились
        $I->click(RequestTable::CHECKBOX_NEW_WINDOW);
        $I->click(RequestTable::SAVE_SETTINGS_BUTTON);
        $I->reloadPage();
        $I->wait(2);
        $I->click(RequestTable::TABLE_SETTINGS);
        $I->waitForElementVisible(RequestTable::HIDDEN_COLUMNS);
        $I->waitAndCantSeeVisualChanges(__FUNCTION__ . 10);

        //вернуть первые 3 видимые колонки в скрытые
        $quantity = 3;
        while ($quantity > 0) {
            $I->click(RequestTable::VISIBLE_COLUMNS . '/button');
            $quantity--;
        }
        $I->canSeeNumberOfElements(RequestTable::VISIBLE_COLUMNS, 17);
        $I->canSeeNumberOfElements(RequestTable::HIDDEN_COLUMNS, 66);
        $I->waitAndCantSeeVisualChanges(__FUNCTION__ . 11);

        //сохранить настройки
        $I->click(RequestTable::SAVE_SETTINGS_BUTTON);
        $I->waitAndCantSeeVisualChanges(__FUNCTION__ . 12);

        //перезагрузить страницу
        $I->reloadPage();
        $I->waitForElement(RequestCreate::CREATE_BUTTON);
        $I->waitAndCantSeeVisualChanges(__FUNCTION__ . 13);

        //сбросить настройки
        $I->click(RequestTable::TABLE_SETTINGS);
        $I->waitForElementVisible(RequestTable::HIDDEN_COLUMNS);
        $I->click(RequestTable::DELETE_SETTINGS_BUTTON);
        $I->waitForElementNotVisible(RequestTable::DELETE_SETTINGS_BUTTON);
        $I->waitAndCantSeeVisualChanges(__FUNCTION__ . 14);
        $I->checkTablesInDB($provider_data['db_2']);
    }
}