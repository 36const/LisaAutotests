<?php

namespace lisa;

use Codeception\Example;
use Codeception\Module\TestHelper;
use lisa\Page\Requests\RequestCreate;
use lisa\Page\Other\SearchField;

/**
 * @group lisa
 * @group lisa_acceptance
 * @group lisa_acceptance_ironVPN
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
        //очистка базы
        $I->loadDataForTest($data);
        $provider_data = $data['provider_data'];
        $setting = $data['setting'];

        //открытие стартовой страницы
        $I->amOnPage('/?source=test');
        $I->waitAndCantSeeVisualChanges(__FUNCTION__ . '_1');

        //ошибка когда пустой эмейл, без соглашения
        $I->retryClick('//button//span[text()="Get IronVPN Now"]');
        $I->retryClick('//div[@role="dialog"]');
        $I->retryClick('//div[@role="dialog"]//button//span[text()="Get IronVPN Now"]');
        $I->waitAndCantSeeVisualChanges(__FUNCTION__ . '_2');
        $I->checkTablesInDB(include __DIR__ . '/fixture/case1.php'); //проверка, что в БД не появилось новых записей

        //ошибка когда пустой эмейл, с соглашением
        $I->retryClick('//div[@role="dialog"]//div[@id="checkAgree"]');
        $I->retryClick('//div[@role="dialog"]//button//span[text()="Get IronVPN Now"]');
        $I->waitAndCantSeeVisualChanges(__FUNCTION__ . '_2');
        $I->checkTablesInDB(include __DIR__ . '/fixture/case1.php'); 

        //ошибка когда эмейл только часть после @, с соглашением
        $I->retryClick('//div[@role="dialog"]//div[@id="checkUserEmail"]');
        $I->retryClick('//div[@role="dialog"]//div[@id="checkUserEmail"]//div[@class="input-box__input-list show"]/div[text()="@gmail.com"]');
        $I->retryClick('//div[@role="dialog"]//button//span[text()="Get IronVPN Now"]');
        $I->waitAndCantSeeVisualChanges(__FUNCTION__ . '_3');
        $I->checkTablesInDB(include __DIR__ . '/fixture/case1.php'); 

        //автоподставление введённого текста в выпадающий список эмейлов и выбор одного из них, с соглашением
        $I->pressKey('//div[@role="dialog"]//div[@id="checkUserEmail"]/p/following-sibling::input', ['ctrl', 'a'], 'qa');
        $I->waitAndCantSeeVisualChanges(__FUNCTION__ . '_4');
        $I->retryClick('//div[@role="dialog"]//div[@id="checkUserEmail"]//div[@class="input-box__input-list show"]/div[text()="qa@yahoo.com"]');
        $I->waitAndCantSeeVisualChanges(__FUNCTION__ . '_5');
        $I->checkTablesInDB(include __DIR__ . '/fixture/case1.php'); 

        //удаление получившегося эмейла и ввод тестового эмейла полностью вручную, без соглашения
        $I->pressKey('//div[@role="dialog"]//div[@id="checkUserEmail"]/p/following-sibling::input', ['ctrl', 'a'], 'qa@test.com');
        $I->retryClick('//div[@role="dialog"]//div[@id="checkAgree"]//span/i');
        $I->waitAndCantSeeVisualChanges(__FUNCTION__ . '_6');
        $I->tryToClick('//div[@role="dialog"]//button//span[text()="Get IronVPN Now"]');
        $I->waitAndCantSeeVisualChanges(__FUNCTION__ . '_6');
        $I->checkTablesInDB(include __DIR__ . '/fixture/case1.php'); 

        //проставление соглашения и переход на страницу покупки
        $I->retryClick('//div[@role="dialog"]//div[@id="checkAgree"]//span/i');
        $I->waitAndCantSeeVisualChanges(__FUNCTION__ . '_7');
        $I->retryClick('//div[@role="dialog"]//button//span[text()="Get IronVPN Now"]');
        $I->waitForElement('//h1[text()="Special Offer"]');
        $I->waitAndCantSeeVisualChanges(__FUNCTION__ . '_8');
        $I->checkTablesInDB(include __DIR__ . '/fixture/case1.php'); 
    }
}
