<?php

namespace lisa;

use Codeception\Example;
use Codeception\Module\TestHelper;
use Facebook\WebDriver\WebDriverKeys;
use lisa\Page\IronVPN\Home;
use lisa\Page\IronVPN\Processing;

/**
 * @group ironVPN
 * @group UserFlow3
 */
class UserFlow3Cest
{
    protected function pageProvider(): array
    {
        return TestHelper::prepareDataprovider(require 'data.php', 'case3');
    }

    /**
     * @param AcceptanceTester $I
     * @param Example $data
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @dataProvider pageProvider
     */
    public function UserFlow3(AcceptanceTester $I, Example $data)
    {
        //очистка базы
        $I->loadDataForTest($data);
        $provider_data = $data['provider_data'];
        $setting = $data['setting'];

        //открытие стартовой страницы
        $I->amOnPage('/?source=test');
        $I->waitAndCantSeeVisualChanges(__FUNCTION__ . '_1');

        //ввод тестового эмейла, проставление соглашения и переход на страницу покупки
        $I->scrollTo(Home::GET_NOW_BUTTON_MIN);
        $I->waitAndCantSeeVisualChanges(__FUNCTION__ . '_2');
        $I->retryClick(Home::GET_NOW_BUTTON_MIN);
        $I->retryClick(Home::GET_NOW_POPUP);
        $I->pressKey(Home::EMAIL_INPUT_FIELD_IN_POPUP, 'qa@test.com');
        $I->retryClick(Home::AGREE_CHECKBOX_IN_POPUP);
        $I->waitAndCantSeeVisualChanges(__FUNCTION__ . '_3');
        $I->retryClick(Home::GET_NOW_BUTTON_IN_POPUP);
        $I->waitForElement('//h1[text()="Special Offer"]');
        //при необходимости, можно установить чтобы на скрине не проверялись элементы с числами,
        //чтобы не редактировать скрины при каждом изменении цен/акций
        $I->waitAndCantSeeVisualChanges(__FUNCTION__ . '_4');
        $I->checkTablesInDB(include __DIR__ . '/fixture/case.php'); //проверка, что в БД не появилось новых записей

        //открытие всплывашки оплаты
        $I->scrollTo(Processing::GET_NOW_BUTTON_MONEY_BACK);
        $I->waitAndCantSeeVisualChanges(__FUNCTION__ . '_5');
        $I->retryClick(Processing::GET_NOW_BUTTON_MONEY_BACK);
        $I->waitForElement(Processing::PAYMENT_IFRAME, 3);
        $I->wait(3);
        $I->waitAndCantSeeVisualChanges(__FUNCTION__ . '_6');

        //заполнить все поля правильно
        $I->switchToIFrame(Processing::PAYMENT_IFRAME);
        $I->pressKey(Processing::CARD_VIEW_EXPIRY_DATE, '32029');
        $I->pressKey(Processing::CARD_VIEW_CVV, '967');
        $I->pressKey(Processing::CARD_VIEW_NUMBER, '4532456618142692');
        $I->click(Processing::CARD_BRANDS);
        $I->pressKey(Processing::CARD_VIEW_INDEX, '98765');
        $I->click(Processing::CARD_BRANDS);
        $I->canSeeElement(Processing::SUBMIT_BUTTON);
        $I->switchToIFrame();
        $I->waitAndCantSeeVisualChanges(__FUNCTION__ . '_7');

        $I->switchToIFrame(Processing::PAYMENT_IFRAME);
        $I->retryClick(Processing::SUBMIT_BUTTON);
        $I->checkTablesInDB(include __DIR__ . '/fixture/case.php');
        $I->switchToIFrame();
        //всплывашка об оплате иногда сдвигается вниз, поэтому есть отклонение от эталонного скрина 1.69%
        $I->waitAndCantSeeVisualChanges(__FUNCTION__ . '_8', 1, 1.69);
        //пароль каждый раз новый, поэтому убираем это поле со скрина
        $I->waitAndCantSeeVisualChanges(__FUNCTION__ . '_9', 3, 0.001, ['div.access-block > p.get-plan_pass']);

        //$I->checkTablesInDB($provider_data['db']); //проверка созданной записи в базе
    }
}
