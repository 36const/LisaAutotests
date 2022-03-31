<?php

namespace lisa;

use Codeception\Example;
use Codeception\Module\TestHelper;
use Facebook\WebDriver\WebDriverKeys;
use lisa\Page\IronVPN\Home;
use lisa\Page\IronVPN\Processing;

/**
 * @group ironVPN
 * @group UserFlow2
 */
class UserFlow2Cest
{
    protected function pageProvider(): array
    {
        return TestHelper::prepareDataprovider(require 'data.php', 'case2');
    }

    /**
     * @param AcceptanceTester $I
     * @param Example $data
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @dataProvider pageProvider
     */
    public function UserFlow2(AcceptanceTester $I, Example $data)
    {
        //очистка базы
        $I->loadDataForTest($data);
        $provider_data = $data['provider_data'];
        $setting = $data['setting'];

        //открытие стартовой страницы
        $I->amOnPage('/?source=test');
        $I->waitAndCantSeeVisualChanges(__FUNCTION__ . '_1');

        //ввод тестового эмейла, проставление соглашения и переход на страницу покупки
        $I->retryClick(Home::GET_NOW_BUTTON_BTN);
        $I->retryClick(Home::GET_NOW_POPUP);
        $I->pressKey(Home::EMAIL_INPUT_FIELD_IN_POPUP, ['ctrl', 'a'], 'qa@test.com');
        $I->retryClick(Home::AGREE_CHECKBOX_IN_POPUP);
        $I->retryClick(Home::GET_NOW_BUTTON_IN_POPUP);
        $I->waitForElement('//h1[text()="Special Offer"]');
        //при необходимости, можно установить чтобы на скрине не проверялись элементы с числами,
        //чтобы не редактировать скрины при каждом изменении цен/акций
        $I->waitAndCantSeeVisualChanges(__FUNCTION__ . '_2');
        $I->checkTablesInDB(include __DIR__ . '/fixture/case.php'); //проверка, что в БД не появилось новых записей

        //открытие всплывашки оплаты
        $I->retryClick(Processing::GET_NOW_BUTTON_TRIAL);
        $I->waitForElement(Processing::PAYMENT_IFRAME, 3);
        $I->wait(3);

        //попытка нажать на оплату со всеми пустыми полями
        $I->switchToIFrame(Processing::PAYMENT_IFRAME);
        $I->canSeeElement(Processing::SUBMIT_BUTTON . '[@disabled]');
        $I->click(Processing::CARD_BRANDS);
        $I->tryToClick(Processing::SUBMIT_BUTTON);
        $I->switchToIFrame();
        $I->waitAndCantSeeVisualChanges(__FUNCTION__ . '_3');
        $I->checkTablesInDB(include __DIR__ . '/fixture/case.php');

        //заполнить и сразу очистить каждое поле для показа предупреждений
        $I->switchToIFrame(Processing::PAYMENT_IFRAME);
        $I->pressKey(Processing::CARD_VIEW_NUMBER, '0', WebDriverKeys::BACKSPACE);
        $I->pressKey(Processing::CARD_VIEW_EXPIRY_DATE, '0', WebDriverKeys::BACKSPACE);
        $I->pressKey(Processing::CARD_VIEW_CVV, '0', WebDriverKeys::BACKSPACE);
        $I->click(Processing::CARD_BRANDS);
        $I->tryToClick(Processing::SUBMIT_BUTTON);
        $I->switchToIFrame();
        $I->waitAndCantSeeVisualChanges(__FUNCTION__ . '_4');
        $I->checkTablesInDB(include __DIR__ . '/fixture/case.php');

        //заполнить не-цифрами
        $I->switchToIFrame(Processing::PAYMENT_IFRAME);
        $I->pressKey(Processing::CARD_VIEW_NUMBER, 'йцукенгASDF№!@#$%^&*()_+-=~`-=\"\'|}"?{:><');
        $I->pressKey(Processing::CARD_VIEW_EXPIRY_DATE, '-=\"\'|}"?{:><!@#$%^&*()_+-=~`йцукенгASDF№!');
        $I->pressKey(Processing::CARD_VIEW_CVV, '!@#$%^&*()_+-=~`-=\"\'|}"?{:><йцукенгASDF№!');
        $I->click(Processing::CARD_BRANDS);
        $I->tryToClick(Processing::SUBMIT_BUTTON);
        $I->switchToIFrame();
        $I->waitAndCantSeeVisualChanges(__FUNCTION__ . '_5');
        $I->checkTablesInDB(include __DIR__ . '/fixture/case.php');

        //заполнить цифрами, но не полностью
        $I->switchToIFrame(Processing::PAYMENT_IFRAME);
        $I->pressKey(Processing::CARD_VIEW_NUMBER, '1234');
        $I->pressKey(Processing::CARD_VIEW_EXPIRY_DATE, '12');
        $I->pressKey(Processing::CARD_VIEW_CVV, '99');
        $I->click(Processing::CARD_BRANDS);
        $I->tryToClick(Processing::SUBMIT_BUTTON);
        $I->switchToIFrame();
        $I->waitAndCantSeeVisualChanges(__FUNCTION__ . '_6');
        $I->checkTablesInDB(include __DIR__ . '/fixture/case.php');

        //заполнить цифрами, полностью, но номер и срок с невозможными значениями
        $I->switchToIFrame(Processing::PAYMENT_IFRAME);
        $I->pressKey(Processing::CARD_VIEW_NUMBER, '9876543210987654');
        $I->pressKey(Processing::CARD_VIEW_EXPIRY_DATE, '879');
        $I->pressKey(Processing::CARD_VIEW_CVV, '0000');
        $I->click(Processing::CARD_BRANDS);
        $I->canSeeElement(Processing::SUBMIT_BUTTON . '[@disabled]');
        $I->tryToClick(Processing::SUBMIT_BUTTON);
        $I->switchToIFrame();
        $I->waitAndCantSeeVisualChanges(__FUNCTION__ . '_7');
        $I->checkTablesInDB(include __DIR__ . '/fixture/case.php');

        //заполнить цифрами, полностью, но номер с невозможным значением, а срок ближайший прошедший (прошлый месяц)
        $I->switchToIFrame(Processing::PAYMENT_IFRAME);
        $I->pressKey(Processing::CARD_VIEW_NUMBER, ['ctrl', 'a'], '9876543210987654321');
        $I->pressKey(Processing::CARD_VIEW_EXPIRY_DATE, ['ctrl', 'a'], date('mY', strtotime('-1 month -3 day')));
        $I->pressKey(Processing::CARD_VIEW_CVV, ['ctrl', 'a'], '111');
        $I->click(Processing::CARD_BRANDS);
        $I->canSeeElement(Processing::SUBMIT_BUTTON . '[@disabled]');
        //здесь не подходит сравнение скринов, потому что месяц и год будут меняться, а исключить это поле из сравнения скрина нельзя, потому что оно находится в iframe
        //поэтому здесь сравниваем только элементы html страницы
        $I->canSeeElement(Processing::CARD_VIEW_ERROR_NUMBER . '[text()="Please, check card number"]');
        $I->canSeeElement(Processing::CARD_VIEW_ERROR_EXPIRY_DATE . '[text()="You entered an expiration date that has already passed"]');
        $I->cantSeeElement(Processing::CARD_VIEW_ERROR_CVV . '');
        $I->tryToClick(Processing::SUBMIT_BUTTON . '[@disabled]');
        $I->switchToIFrame();
        $I->checkTablesInDB(include __DIR__ . '/fixture/case.php');

        //заполнить цифрами, полностью, срок текущий месяц, но номер с невозможным значением
        $I->switchToIFrame(Processing::PAYMENT_IFRAME);
        $I->pressKey(Processing::CARD_VIEW_NUMBER, ['ctrl', 'a'], '9876543210987654321');
        $I->pressKey(Processing::CARD_VIEW_EXPIRY_DATE, ['ctrl', 'a'], date('mY'));
        $I->pressKey(Processing::CARD_VIEW_CVV, ['ctrl', 'a'], '9999');
        $I->click(Processing::CARD_BRANDS);
        $I->canSeeElement(Processing::SUBMIT_BUTTON . '[@disabled]');
        //здесь не подходит сравнение скринов, потому что месяц и год будут меняться, а исключить это поле из сравнения скрина нельзя, потому что оно находится в iframe
        //поэтому здесь сравниваем только элементы html страницы
        $I->canSeeElement(Processing::CARD_VIEW_ERROR_NUMBER . '[text()="Please, check card number"]');
        $I->cantSeeElement(Processing::CARD_VIEW_ERROR_EXPIRY_DATE . '');
        $I->cantSeeElement(Processing::CARD_VIEW_ERROR_CVV . '');
        $I->canSeeElement(Processing::SUBMIT_BUTTON . '[@disabled]');
        $I->tryToClick(Processing::SUBMIT_BUTTON);
        $I->switchToIFrame();
        $I->checkTablesInDB(include __DIR__ . '/fixture/case.php');

        //заполнить цифрами, полностью, срок текущий месяц, номер с возможным значением, но без индекса
        $I->switchToIFrame(Processing::PAYMENT_IFRAME);
        $I->pressKey(Processing::CARD_VIEW_EXPIRY_DATE, ['ctrl', 'a'], '32029');
        $I->pressKey(Processing::CARD_VIEW_CVV, ['ctrl', 'a'], '967');
        $I->pressKey(Processing::CARD_VIEW_NUMBER, ['ctrl', 'a'], '4532456618142692');
        $I->click(Processing::CARD_BRANDS);
        $I->canSeeElement(Processing::SUBMIT_BUTTON . '[@disabled]');
        $I->tryToClick(Processing::SUBMIT_BUTTON);
        $I->switchToIFrame();
        $I->waitAndCantSeeVisualChanges(__FUNCTION__ . '_8');
        $I->checkTablesInDB(include __DIR__ . '/fixture/case.php');

        //заполнить все поля правильно
        $I->switchToIFrame(Processing::PAYMENT_IFRAME);
        $I->pressKey(Processing::CARD_VIEW_INDEX, '98765');
        $I->click(Processing::CARD_BRANDS);
        $I->canSeeElement(Processing::SUBMIT_BUTTON);
        $I->switchToIFrame();
        $I->waitAndCantSeeVisualChanges(__FUNCTION__ . '_9');

        $I->switchToIFrame(Processing::PAYMENT_IFRAME);
        $I->retryClick(Processing::SUBMIT_BUTTON);
        $I->checkTablesInDB(include __DIR__ . '/fixture/case.php');
        $I->switchToIFrame();
        //пароль каждый раз новый, поэтому убираем это поле со скрина
        $I->waitAndCantSeeVisualChanges(__FUNCTION__ . '_10', 4, 0.001, ['div.access-block > p.get-plan_pass']);

        //$I->checkTablesInDB($provider_data['db']); //проверка созданной записи в базе
    }
}
