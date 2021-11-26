<?php

namespace lisa;

use Codeception\Example;
use Codeception\Module\TestHelper;
use lisa\Page\Requests\RequestCreate;
use lisa\Page\Other\SearchField;

/**
 * @group lisa
 * @group lisa_acceptance
 * @group lisa_acceptance_requests
 * @group CreateRequestPage
 */
class CreateRequestPageCest
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
    public function CreateRequestPage(AcceptanceTester $I, Example $data)
    {
        $I->loadDataForTest($data);
        $provider_data = $data['provider_data'];
        $setting = $data['setting'];

        $I->amOnPage('/lisa/#/request/list/all');
        $I->waitForElement(RequestCreate::CREATE_BUTTON);
        $I->cantSeeElement(RequestCreate::CREATE_MODAL);

        $I->clickAndWait(RequestCreate::CREATE_BUTTON);
        $I->waitForElementVisible(RequestCreate::CREATE_MODAL);
        //$I->waitAndCantSeeVisualChanges(__FUNCTION__ . $setting['case'] . 1);

        $I->click(RequestCreate::TYPES_LIST);
        $I->click(RequestCreate::typeSelect(Constants::TYPES[$setting['type']]));
        $I->click(RequestCreate::checkboxesDirection($setting['direction']));
        //$I->waitAndCantSeeVisualChanges(__FUNCTION__ . $setting['case'] . 2);

        $I->click(RequestCreate::CREATE_MODAL_BUTTON);
        $I->waitAndCantSeeVisualChanges(__FUNCTION__ . $setting['case'] . 3);
        $I->checkObjectsOnPage($provider_data['pageObjects']);

        //ни одного заполненного поля
        $I->click(RequestCreate::CREATE_FORM_BUTTON);
        $I->waitAndCantSeeVisualChanges(__FUNCTION__ . $setting['case'] . 4);

        //заполнен заголовок
        $I->scrollTo(RequestCreate::MAIN_BLOCK);
        $I->pressKey(RequestCreate::SUBJECT, '!', '"', '№', ';', '%', ':', '?', '*', '(', ')');
        $I->click(RequestCreate::CREATE_FORM_BUTTON);
        //$I->waitAndCantSeeVisualChanges(__FUNCTION__ . $setting['case'] . 5);
        $I->checkTablesInDB(include __DIR__ . '/fixture/case1.php');

        //заполнен заголовок и описание
        $I->pressKey(RequestCreate::DESCRIPTION, '!', '"', '№', ';', '%', ':', '?', '*', '(', ')');
        $I->click(RequestCreate::CREATE_FORM_BUTTON);
        //$I->waitAndCantSeeVisualChanges(__FUNCTION__ . $setting['case'] . 6);
        $I->checkTablesInDB(include __DIR__ . '/fixture/case1.php');

        //заполнен заголовок, описание и категория/продавец
        if ($setting['direction'] == 'Работа с товарами Розетки') {
            $I->click(RequestCreate::CATEGORY);
            $I->pressKey(RequestCreate::CATEGORY, 'А', 'в');
            $I->waitAndCantSeeVisualChanges(__FUNCTION__ . $setting['case'] . 7);
            $I->click(SearchField::searchResult('иабилеты'));
        }
        elseif ($setting['direction'] == 'Работа с товарами Маркетплейса') {
            $I->click(RequestCreate::SELLER);
            $I->pressKey(RequestCreate::SELLER, 'М', 'а');
            $I->waitAndCantSeeVisualChanges(__FUNCTION__ . $setting['case'] . 7);
            $I->click(SearchField::searchResult('ркетплейс (общий)'));
        }
        elseif ($setting['direction'] == 'Определяется типом задачи' && $setting['case'] == '3_') {
            $I->click(RequestCreate::ROZETKA_CATEGORY);
            $I->pressKey(RequestCreate::ROZETKA_CATEGORY, 'п', 'о');
            $I->wait(1);
            $I->waitAndCantSeeVisualChanges(__FUNCTION__ . $setting['case'] . 7);
            $I->click(SearchField::searchResult('дарки и товары для праздников (80260)'));
        }
        else {
            $I->click(RequestCreate::CATEGORY);
            $I->pressKey(RequestCreate::CATEGORY, 'А', 'в');
            $I->waitAndCantSeeVisualChanges(__FUNCTION__ . $setting['case'] . 7);
            $I->click(SearchField::searchResult('иабилеты'));
        }
        $I->click(RequestCreate::CREATE_FORM_BUTTON);
        $I->wait(1);
        $I->waitAndCantSeeVisualChanges(__FUNCTION__ . $setting['case'] . 8);
        $I->checkTablesInDB(include __DIR__ . '/fixture/case1.php');

        //заполнен заголовок, описание, категория/продавец и количество в работу
        $I->pressKey(RequestCreate::AMOUNT, '9', '9', '9', '9', '9', '9', '9', '9', '9');
        $I->click(RequestCreate::CREATE_FORM_BUTTON);
        $I->waitForElement(RequestCreate::CREATE_BUTTON);
        $I->canSee('Ваша заявка успешно создана.');
        $I->waitAndCantSeeVisualChanges(__FUNCTION__ . $setting['case'] . 9);

        $I->checkTablesInDB($provider_data['db']);
    }
}
