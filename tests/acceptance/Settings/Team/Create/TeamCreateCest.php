<?php

namespace lisa;

use Codeception\Example;
use lisa\Page\Settings\Team;
use Codeception\Module\TestHelper;

/**
 * @group lisa
 * @group lisa_acceptance
 * @group lisa_acceptance_settings
 * @group TeamCreate
 */
class TeamCreateCest
{
    protected function pageProvider()
    {
        return TestHelper::prepareDataprovider(require 'data.php', '');
    }

    /**
     * @param AcceptanceTester $I
     * @param Example $data
     * @throws \GuzzleHttp\Exception\GuzzleException
     *
     * @dataProvider pageProvider
     *
     */
    public function TeamCreate(AcceptanceTester $I, Example $data)
    {
        $I->loadDataForTest($data);
        $providerData = $data['provider_data'];

        $I->amOnPage("/bpm/team");

        $I->click(Team::$createButton);
        $I->waitForElement(Team::$saveButton);

        $I->click(Team::$saveButton);
        $I->canSeeElement(Team::errorField('Необходимо заполнить «Название».'));

        $I->selectOption(Team::$teamStatus, 'Заблокированый');
        $I->click(Team::$saveButton);
        $I->canSeeElement(Team::errorField('Необходимо заполнить «Название».'));

        $I->pressKey(Team::$teamName, 'М', 'а', 'р', 'к', 'е', 'т', 'п', 'л', 'е', 'й', 'с', ' ', '2');
        $I->click(Team::$saveButton);
        $I->canSeeElement(Team::errorField('Значение «Маркетплейс 2» для «Название» уже занято.'));

        $I->selectOption(Team::$teamStatus, 'Активный');
        $I->click(Team::$saveButton);
        $I->canSeeElement(Team::errorField('Значение «Маркетплейс 2» для «Название» уже занято.'));

        $I->wait(1);     //без ожидания выдаёт ошибку element is not attached to the page document
        $I->selectOption(Team::$teamDirection, 'Работа с товарами Маркетплейса');
        $I->click(Team::$saveButton);
        $I->canSeeElement(Team::errorField('Значение «Маркетплейс 2» для «Название» уже занято.'));

        $I->wait(1);     //без ожидания выдаёт ошибку, что нет кнопки "Сохранить"
        $I->pressKey(Team::$teamName, '-');
        $I->click(Team::$saveButton);
        $I->waitForElement(Team::$createButton);
        $I->canSee('Команда успешно создана');
        $I->checkTablesInDB($providerData['db']);
    }
}
