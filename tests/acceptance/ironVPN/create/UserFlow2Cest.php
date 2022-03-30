<?php

namespace lisa;

use Codeception\Example;
use Codeception\Module\TestHelper;
use Facebook\WebDriver\WebDriverKeys;
use lisa\Page\Requests\RequestCreate;
use lisa\Page\Other\SearchField;

/**
 * @group lisa
 * @group lisa_acceptance
 * @group lisa_acceptance_1
 * @group lisa_acceptance_requests
 * @group UserFlow2
 */
class UserFlow2Cest
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
        $I->retryClick('//button//span[text()="Get IronVPN Now"]');
        $I->retryClick('//div[@role="dialog"]');
        $I->pressKey('//div[@role="dialog"]//div[@id="checkUserEmail"]/p/following-sibling::input', 'qa@test.com');
        $I->retryClick('//div[@role="dialog"]//div[@id="checkAgree"]');
        $I->retryClick('//div[@role="dialog"]//button//span[text()="Get IronVPN Now"]');
        $I->waitForElement('//h1[text()="Special Offer"]');
        //при необходимости, можно установить чтобы на скрине не проверялись элементы с числами,
        //чтобы не редактировать скрины при каждом изменении цен/акций
        $I->waitAndCantSeeVisualChanges(__FUNCTION__ . '_2');
        $I->checkTablesInDB(include __DIR__ . '/fixture/case1.php'); //проверка, что в БД не появилось новых записей

        //открытие всплывашки оплаты
        $I->retryClick('//section[@id="trial"]//a/span[text()="Get IronVPN Now"]');
        $I->waitForElement('//iframe[@id="solid-payment-form-iframe"]', 3);
        $I->wait(3);

        //попытка нажать на оплату со всеми пустыми полями
        $I->switchToIFrame('//iframe[@id="solid-payment-form-iframe"]');
        $I->canSeeElement('//div[@id="root"]/form//button[@name="submitButton" and @disabled]');
        $I->tryToClick('//div[@id="root"]/form//button[@name="submitButton"]');
        $I->switchToIFrame();
        $I->waitAndCantSeeVisualChanges(__FUNCTION__ . '_3');
        $I->checkTablesInDB(include __DIR__ . '/fixture/case1.php');

        //заполнить и сразу очистить каждое поле для показа предупреждений
        $I->switchToIFrame('//iframe[@id="solid-payment-form-iframe"]');
//        $I->retryClick('//div[@id="root"]/form//div[@class="card_view"]//div[@class="input_group card_number"]');
//        $I->retryClick('//div[@id="root"]/form//div[@class="card_view"]//div[@class="input_group expiry_date"]');
//        $I->retryClick('//div[@id="root"]/form//div[@class="card_view"]//div[@class="input_group card_cvv"]');
        $I->pressKey('//div[@id="root"]/form//div[@class="card_view"]//div[@class="input_group card_number"]//input', '0', WebDriverKeys::BACKSPACE);
        $I->pressKey('//div[@id="root"]/form//div[@class="card_view"]//div[@class="input_group expiry_date"]//input', '0', WebDriverKeys::BACKSPACE);
        $I->pressKey('//div[@id="root"]/form//div[@class="card_view"]//div[@class="input_group card_cvv"]//input', '0', WebDriverKeys::BACKSPACE);
        $I->click('//div[@id="root"]/form//div[@class="card_brands"]');
        $I->tryToClick('//div[@id="root"]/form//button[@name="submitButton"]');
        $I->switchToIFrame();
        $I->waitAndCantSeeVisualChanges(__FUNCTION__ . '_4');
        $I->checkTablesInDB(include __DIR__ . '/fixture/case1.php');

        //заполнить не-цифрами
        $I->switchToIFrame('//iframe[@id="solid-payment-form-iframe"]');
        $I->pressKey('//div[@id="root"]/form//div[@class="card_view"]//div[@class="input_group card_number"]//input', 'йцукенгASDF№!@#$%^&*()_+-=~`-=\"\'|}"?{:><');
        $I->pressKey('//div[@id="root"]/form//div[@class="card_view"]//div[@class="input_group expiry_date"]//input', '-=\"\'|}"?{:><!@#$%^&*()_+-=~`йцукенгASDF№!');
        $I->pressKey('//div[@id="root"]/form//div[@class="card_view"]//div[@class="input_group card_cvv"]//input', '!@#$%^&*()_+-=~`-=\"\'|}"?{:><йцукенгASDF№!');
        $I->click('//div[@id="root"]/form//div[@class="card_brands"]');
        $I->tryToClick('//div[@id="root"]/form//button[@name="submitButton"]');
        $I->switchToIFrame();
        $I->waitAndCantSeeVisualChanges(__FUNCTION__ . '_5');
        $I->checkTablesInDB(include __DIR__ . '/fixture/case1.php');

        //заполнить цифрами, но не полностью
        $I->switchToIFrame('//iframe[@id="solid-payment-form-iframe"]');
        $I->pressKey('//div[@id="root"]/form//div[@class="card_view"]//div[@class="input_group card_number"]//input', '1234');
        $I->pressKey('//div[@id="root"]/form//div[@class="card_view"]//div[@class="input_group expiry_date"]//input', '12');
        $I->pressKey('//div[@id="root"]/form//div[@class="card_view"]//div[@class="input_group card_cvv"]//input', '99');
        $I->click('//div[@id="root"]/form//div[@class="card_brands"]');
        $I->tryToClick('//div[@id="root"]/form//button[@name="submitButton"]');
        $I->switchToIFrame();
        $I->waitAndCantSeeVisualChanges(__FUNCTION__ . '_6');
        $I->checkTablesInDB(include __DIR__ . '/fixture/case1.php');

        //заполнить цифрами, полностью, но номер и срок с невозможными значениями
        $I->switchToIFrame('//iframe[@id="solid-payment-form-iframe"]');
        $I->pressKey('//div[@id="root"]/form//div[@class="card_view"]//div[@class="input_group card_number"]//input', '9876543210987654');
        $I->pressKey('//div[@id="root"]/form//div[@class="card_view"]//div[@class="input_group expiry_date"]//input', '879');
        $I->pressKey('//div[@id="root"]/form//div[@class="card_view"]//div[@class="input_group card_cvv"]//input', '0000');
        $I->click('//div[@id="root"]/form//div[@class="card_brands"]');
        $I->canSeeElement('//div[@id="root"]/form//button[@name="submitButton" and @disabled]');
        $I->tryToClick('//div[@id="root"]/form//button[@name="submitButton"]');
        $I->switchToIFrame();
        $I->waitAndCantSeeVisualChanges(__FUNCTION__ . '_7');
        $I->checkTablesInDB(include __DIR__ . '/fixture/case1.php');

        //заполнить цифрами, полностью, но номер с невозможным значением, а срок крайний прошедший (прошлый месяц)
        $I->switchToIFrame('//iframe[@id="solid-payment-form-iframe"]');
        $I->pressKey('//div[@id="root"]/form//div[@class="card_view"]//div[@class="input_group card_number"]//input', ['ctrl', 'a'], '9876543210987654321');
        $I->pressKey('//div[@id="root"]/form//div[@class="card_view"]//div[@class="input_group expiry_date"]//input', ['ctrl', 'a'], date('mY', strtotime('-2 month -1 day')));
        $I->pressKey('//div[@id="root"]/form//div[@class="card_view"]//div[@class="input_group card_cvv"]//input', ['ctrl', 'a'], '111');
        $I->click('//div[@id="root"]/form//div[@class="card_brands"]');
        $I->canSeeElement('//div[@id="root"]/form//button[@name="submitButton" and @disabled]');
        //здесь не подходит сравнение скринов, потому что месяц и год будут меняться, а исключить это поле из сравнения скрина нельзя, потому что оно находится в iframe
        //поэтому здесь сравниваем только элементы html страницы
        $I->canSeeElement('//div[@id="root"]/form//div[@class="body_errors"]/div[@id="cardNumber_error-text"][text()="Please, check card number"]');
        $I->canSeeElement('//div[@id="root"]/form//div[@class="body_errors"]/div[@id="cardExpiryDate_error-text"][text()="You entered an expiration date that has already passed"]');
        $I->cantSeeElement('//div[@id="root"]/form//div[@class="body_errors"]/div[@id="cardCvv_error-text"]');
        $I->tryToClick('//div[@id="root"]/form//button[@name="submitButton" and @disabled]');
        $I->switchToIFrame();
//        $I->waitAndCantSeeVisualChanges(__FUNCTION__ . '_8', 1, 0.001, ['//div[@id="root"]/form//div[@class="card_view"]//div[@class="input_group expiry_date"]//input']);
        $I->checkTablesInDB(include __DIR__ . '/fixture/case1.php');

        //заполнить цифрами, полностью, срок текущий месяц, но номер с невозможным значением
        $I->switchToIFrame('//iframe[@id="solid-payment-form-iframe"]');
        $I->pressKey('//div[@id="root"]/form//div[@class="card_view"]//div[@class="input_group card_number"]//input', ['ctrl', 'a'], '9876543210987654321');
        $I->pressKey('//div[@id="root"]/form//div[@class="card_view"]//div[@class="input_group expiry_date"]//input', ['ctrl', 'a'], date('mY'));
        $I->pressKey('//div[@id="root"]/form//div[@class="card_view"]//div[@class="input_group card_cvv"]//input', ['ctrl', 'a'], '987');
        $I->click('//div[@id="root"]/form//div[@class="card_brands"]');
        $I->canSeeElement('//div[@id="root"]/form//button[@name="submitButton" and @disabled]');
        //здесь не подходит сравнение скринов, потому что месяц и год будут меняться, а исключить это поле из сравнения скрина нельзя, потому что оно находится в iframe
        //поэтому здесь сравниваем только элементы html страницы
        $I->canSeeElement('//div[@id="root"]/form//div[@class="body_errors"]/div[@id="cardNumber_error-text"][text()="Please, check card number"]');
        $I->cantSeeElement('//div[@id="root"]/form//div[@class="body_errors"]/div[@id="cardExpiryDate_error-text"]');
        $I->cantSeeElement('//div[@id="root"]/form//div[@class="body_errors"]/div[@id="cardCvv_error-text"]');
        $I->canSeeElement('//div[@id="root"]/form//button[@name="submitButton" and @disabled]');
        $I->tryToClick('//div[@id="root"]/form//button[@name="submitButton"]');
        $I->switchToIFrame();
//        $I->waitAndCantSeeVisualChanges(__FUNCTION__ . '_9',1, 0.001, ['//div[@id="root"]/form//div[@class="card_view"]//div[@class="input_group expiry_date"]//input']);
        $I->checkTablesInDB(include __DIR__ . '/fixture/case1.php');


//        попытка нажать на оплату со всеми пустыми полями
//        $I->switchToIFrame('//iframe[@id="solid-payment-form-iframe"]');
//        $I->pressKey('//div[@id="root"]/form//div[@class="card_view"]//input', '1111');
    }
}
