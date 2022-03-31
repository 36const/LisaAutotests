<?php

namespace lisa;

use Codeception\Example;
use Codeception\Module\TestHelper;
use lisa\Page\IronVPN\Home;

/**
 * @group ironVPN
 * @group UserFlow1
 */
class UserFlow1Cest
{
    protected function pageProvider(): array
    {
        return TestHelper::prepareDataprovider(require 'data.php', 'case1');
    }

    /**
     * @param AcceptanceTester $I
     * @param Example $data
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @dataProvider pageProvider
     */
    public function UserFlow1(AcceptanceTester $I, Example $data)
    {
        $I->loadDataForTest($data);

        //открытие стартовой страницы
        $I->amOnPage('/?source=test');
        $I->waitAndCantSeeVisualChanges(__FUNCTION__ . '_1');

        //ошибка когда пустой эмейл, без соглашения
        $I->retryClick(Home::GET_NOW_BUTTON_BTN);
        $I->retryClick(Home::GET_NOW_POPUP);
        $I->retryClick(Home::GET_NOW_BUTTON_IN_POPUP);
        $I->waitAndCantSeeVisualChanges(__FUNCTION__ . '_2');
        $I->checkTablesInDB(include __DIR__ . '/fixture/case.php'); //проверка, что в БД не появилось новых записей

        //ошибка когда пустой эмейл, с соглашением
        $I->retryClick(Home::AGREE_CHECKBOX_IN_POPUP);
        $I->retryClick(Home::GET_NOW_BUTTON_IN_POPUP);
        $I->waitAndCantSeeVisualChanges(__FUNCTION__ . '_2');
        $I->checkTablesInDB(include __DIR__ . '/fixture/case.php');

        //ошибка когда эмейл только часть после @, с соглашением
        $I->retryClick(Home::EMAIL_FIELD_IN_POPUP);
        $I->retryClick(Home::emailFromList('@gmail.com'));
        $I->retryClick(Home::GET_NOW_BUTTON_IN_POPUP);
        $I->waitAndCantSeeVisualChanges(__FUNCTION__ . '_3');
        $I->checkTablesInDB(include __DIR__ . '/fixture/case.php');

        //автоподставление введённого текста в выпадающий список эмейлов и выбор одного из них, с соглашением
        $I->pressKey(Home::EMAIL_INPUT_FIELD_IN_POPUP, ['ctrl', 'a'], 'qa');
        $I->waitAndCantSeeVisualChanges(__FUNCTION__ . '_4');
        $I->retryClick(Home::emailFromList('qa@yahoo.com'));
        $I->waitAndCantSeeVisualChanges(__FUNCTION__ . '_5');
        $I->checkTablesInDB(include __DIR__ . '/fixture/case.php');

        //удаление получившегося эмейла и ввод тестового эмейла полностью вручную, без соглашения
        $I->pressKey(Home::EMAIL_INPUT_FIELD_IN_POPUP, ['ctrl', 'a'], 'qa@test.com');
        $I->retryClick(Home::AGREE_CHECKBOX_IN_POPUP . '//span/i');
        $I->waitAndCantSeeVisualChanges(__FUNCTION__ . '_6');
        $I->tryToClick(Home::GET_NOW_BUTTON_IN_POPUP);
        $I->waitAndCantSeeVisualChanges(__FUNCTION__ . '_6');
        $I->checkTablesInDB(include __DIR__ . '/fixture/case.php');

        //проставление соглашения и переход на страницу покупки
        $I->retryClick(Home::AGREE_CHECKBOX_IN_POPUP . '//span/i');
        $I->waitAndCantSeeVisualChanges(__FUNCTION__ . '_7');
        $I->retryClick(Home::GET_NOW_BUTTON_IN_POPUP);
        $I->waitForElement('//h1[text()="Special Offer"]');
        $I->waitAndCantSeeVisualChanges(__FUNCTION__ . '_8');
        $I->checkTablesInDB(include __DIR__ . '/fixture/case.php');
    }
}
