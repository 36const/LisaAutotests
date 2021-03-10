<?php

namespace lisa;

use Codeception\Example;
use lisa\Page\Users\UserCreate;
use lisa\Page\Users\UserView;
use lisa\Page\Other\SearchField;
use Codeception\Module\TestHelper;

/**
 * @group lisa
 * @group lisa_acceptance
 * @group lisa_acceptance_users
 * @group CreateUserWithExistingName
 */
class CreateUserWithExistingNameCest
{
    protected function pageProvider(): array
    {
        return TestHelper::prepareDataprovider(require 'data.php', '');
    }

    /**
     * @param AcceptanceTester $I
     * @param Example $data
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Exception
     * @dataProvider pageProvider
     */
    public function CreateUserWithExistingName(AcceptanceTester $I, Example $data)
    {
        $I->loadDataForTest($data, null);

        $I->amOnPage("/bpm/user/create");

        $I->click(UserCreate::$saveButton);
        $I->canSeeElement(UserCreate::$divUserLoginError);
        $I->canSeeElement(UserCreate::$divUserEmailError);
        $I->canSeeElement(UserCreate::$divUserPositionError);
        $I->cantSeeElement(UserCreate::$divUserTeamError);

        $I->amOnPage("/bpm/user/create");

        $I->click(UserCreate::$loginField);
        $I->click(SearchField::$search);
        $I->pressKey(SearchField::$search, 'К', 'у');
        $I->click(SearchField::searchResult('Куцан  Константин  (kutsan)'));

        $I->canSeeElement(UserCreate::$divUserName . "[contains(text(), 'Константин Куцан')]");
        $I->canSeeElement(UserCreate::$divUserName . "[contains(text(), 'Значение «Константин Куцан» для «Имя пользователя» уже занято.')]");
        $I->click(UserCreate::$saveButton);

        $I->canSeeElement(UserCreate::$divUserPositionError);
        $I->selectOption('//select[@name="UserBpm[position]"]', 'Контент-менеджер');
        $I->click(UserCreate::$saveButton);

        $I->canSeeElement(UserCreate::$divUserTeamError);
        $I->selectOption('//select[@name="UserBpm[team]"]', 'Маркетплейс Freelance');

        $I->click(UserCreate::$parentField);
        $I->click(SearchField::$search);
        $I->pressKey(SearchField::$search, 'С', 'у');
        $I->click(SearchField::searchResult('Супервайзер Руководько 1'));
        $I->click(UserCreate::$saveButton);

        $I->canSeeElement(UserView::viewUserTable(1, 'Константин Куцан'));
        $I->canSeeElement(UserView::viewUserTable(2, 'kutsan'));
        $I->canSeeElement(UserView::viewUserTable(3, 'kutsan@rozetka.com.ua'));
        $I->canSeeElement(UserView::viewUserTable(4, ' Супервайзер Руководько 1'));
        $I->canSeeElement(UserView::viewUserTable(5, 'contentManager'));
        $I->canSeeElement(UserView::viewUserTable(7, 'Маркетплейс Freelance'));
        $I->canSeeElement(UserView::viewUserTable(8, 'Активный'));
        $I->canSeeElement(UserView::viewUserTable(9, date('Y-m-d')));
        $I->canSeeElement(UserView::viewUserTable(10, ' Константин Куцан'));
        $I->canSeeElement(UserView::viewUserTable(11, date('Y-m-d')));
    }
}