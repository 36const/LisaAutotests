<?php

namespace lisa;

use Codeception\Example;
use lisa\Page\Other\SearchField;
use lisa\Page\Requests\RequestCreate;
use Codeception\Module\TestHelper;

/**
 * @group lisa
 * @group lisa_acceptance
 * @group lisa_acceptance_requests
 * @group CreateRequestPage
 */
class CreateRequestPageCest
{
    /**@return array */
    protected function pageProvider()
    {
        return TestHelper::prepareDataprovider(require 'data.php', '');
    }

    /**
     * @param AcceptanceTester $I
     * @param Example $data
     * @param RequestCreate $create
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @dataProvider pageProvider
     */
    public function CreateRequestPage(AcceptanceTester $I, Example $data, RequestCreate $create)
    {
        $I->loadDataForTest($data);
        $provider_data = $data['provider_data'];
        $setting = $data['setting'];

        $create->amOnPage('/bpm/request');
        $I->cantSeeElement(RequestCreate::$createModal);

        $I->click(RequestCreate::$createButton);
        $I->waitForElementVisible(RequestCreate::$createModal);

        $I->click(RequestCreate::$typesList);
        $I->click(RequestCreate::typeSelect($setting['type']));
        $I->click(RequestCreate::checkboxesDirection($setting['direction']));

        $I->click(RequestCreate::$createButtonModal);
        $I->checkObjectsOnPage($provider_data['pageObjects']);

        //ни одного заполненного поля
        $I->click(RequestCreate::$createButtonForm);
        $I->checkObjectsOnPage($provider_data['pageForm_1']);

        //заполнен заголовок
        $I->pressKey(RequestCreate::$subject, '!', '"', '№', ';', '%', ':', '?', '*', '(', ')');
        $I->click(RequestCreate::$createButtonForm);
        $I->wait(1);
        $I->checkObjectsOnPage($provider_data['pageForm_2']);

        //заполнен заголовок и описание
        $I->pressKey(RequestCreate::$description, '!', '"', '№', ';', '%', ':', '?', '*', '(', ')');
        $I->click(RequestCreate::$createButtonForm);
        $I->wait(1);
        $I->checkObjectsOnPage($provider_data['pageForm_3']);

        //заполнен заголовок, описание и категория/продавец
        if ($setting['direction'] == 0 || $setting['direction'] == 1) {
            $I->click(RequestCreate::$category . '/../span');
            $I->click(SearchField::$search);
            $I->pressKey(SearchField::$search, 'А', 'в');
            $I->click(SearchField::searchResult('Авиабилеты'));
        } else {
            $I->click(RequestCreate::$seller . '/../span');
            $I->click(SearchField::$search);
            $I->pressKey(SearchField::$search, 'М', 'а');
            $I->click(SearchField::searchResult('Маркетплейс (общий)'));
        }
        $I->wait(1);
        $I->click(RequestCreate::$createButtonForm);
        $I->checkObjectsOnPage($provider_data['pageForm_4']);

        //заполнен заголовок, описание, категория/продавец и количество
        $I->wait(1);
        $I->pressKey(RequestCreate::$amount, '9', '9', '9', '9', '9', '9', '9', '9', '9');
        $I->click(RequestCreate::$createButtonForm);
        $I->waitForElement('//div[contains(@class, "alert-success")]');
        $I->canSee('Ваша заявка успешно создана.');

        $I->checkTablesInDB($provider_data['db']);
    }
}
