<?php

namespace lisa;

use Codeception\Example;
use Codeception\Module\TestHelper;
use Facebook\WebDriver\WebDriverKeys;
use lisa\Page\Other\SearchField;
use lisa\Page\Requests\RequestTable;
use lisa\Page\Requests\RequestView;

/**
 * @group lisa
 * @group lisa_acceptance
 * @group lisa_acceptance_requests
 * @group RequestStatusesTransfer
 * @group RequestStatusesTransferSingle3
 */
class RequestStatusesTransferSingle3Cest
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
    public function RequestStatusesTransferSingle3(AcceptanceTester $I, Example $data)
    {
        $I->loadDataForTest($data);
        $provider_data = $data['provider_data'];

        $I->amOnPage('/lisa/#/request/view/1');
        $I->waitAndCantSeeVisualChanges(__FUNCTION__ . '_1', 2);

        //заполнение проверенных ссылок, количества проверенных товаров и сохранение без перевода
        $I->clickAndWait(RequestTable::transferButton('На исправление'));
        $I->click("//div[contains(@class,'request-corrections')]//span[text()='Проверенные ссылки']/following-sibling::div[contains(@class,'textarea-links')]");
        $I->pressKey(
            "//div[contains(@class,'request-corrections')]//span[text()='Проверенные ссылки']/following-sibling::div//textarea",
            'https://zabbix3.local/latest.php?group=251&host=12686&host=16666&host=16728&host=17592&host=17607&host=17714&host=17720&host=18537&host=19198&application=Memory');
        $I->pressKey(
            "//div[contains(@class,'request-corrections')]//label[text()='Количество проверенных товаров']//following-sibling::input",
            10);
        $I->waitAndCantSeeVisualChanges(__FUNCTION__ . '_2');
        $I->clickAndWait("//div[@id='sticky-toolbar']//button/span[contains(text(),'Сохранить
      ')]/..");
        $I->checkTablesInDB($provider_data['db_1']);

        //заполнение количества ошибок/товаров с ошибками/комментария и сохранение с переводом 8->6
        $I->pressKey("//div[text()='Неправильная категория товаров']/../div[3]//input", 10);
        $I->pressKey("//div[text()='Неправильная категория товаров']/../div[4]//input", 5);
        $I->pressKey(
            "//div[text()='Неправильная категория товаров']/..//div[@class='v-input__control']//textarea",
            '/#/request/to-correction/1');
        $I->waitAndCantSeeVisualChanges(__FUNCTION__ . '_3');
        $I->clickAndWait("//div[@id='sticky-toolbar']//button/span[contains(text(),'Сохранить и отправить на исправление')]/..");
        $I->waitAndCantSeeVisualChanges(__FUNCTION__ . '_4', 2);
        $I->checkTablesInDB($provider_data['db_2']);

        //изменение кч-менеджера, менеджера, продавца и перевод 6->5
        $I->click(RequestView::field('Контент-менеджер') . '/..');
        $I->click(RequestTable::columnValueFromListSingle('Константин Куцан'));
        $I->click("//div[@role='button']//label[text()='Приоритет']/..//button");
        $I->click(RequestView::field('Кросс-чек менеджер') . '/..//button');
        $I->pressKey(RequestView::field('Продавец'), ['ctrl', 'a'], 'Все');
        $I->retryClick(SearchField::searchResult(' продавцы'));
        $I->clickAndWait(RequestView::SAVE_BUTTON);
        $I->waitAndCantSeeVisualChanges(__FUNCTION__ . '_5', 2);
        $I->checkTablesInDB($provider_data['db_3']);

        //ошибка при переводе 5->4 без причины и комментария
        $I->click(RequestTable::transferButton('Отменить'));
        $I->retryClick(RequestTable::transferPopUp('Отменить'));
        $I->waitAndCantSeeVisualChanges(__FUNCTION__ . '_6', 2);
        $I->checkTablesInDB($provider_data['db_3']);

        //перевод 5->4
        $I->click(RequestTable::REASON_IN_STATUS_CHANGE_POPUP);
        $I->click(RequestTable::columnValueFromList('Дубль задачи'));
        $I->pressKey(RequestTable::COMMENT_IN_STATUS_CHANGE_POPUP, '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\\|<1001234567890>');
        $I->click(RequestTable::transferPopUp('Отменить'));
        $I->waitAndCantSeeVisualChanges(__FUNCTION__ . '_7', 2);
        $I->checkTablesInDB($provider_data['db_4']);
    }
}
