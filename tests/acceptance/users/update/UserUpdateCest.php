<?php

namespace lisa;

use Codeception\Example;
use Codeception\Module\TestHelper;
use lisa\Page\Requests\RequestView;
use lisa\Page\Settings\Category;
use lisa\Page\Other\SearchField;
use lisa\Page\Users\User;

/**
 * @group lisa
 * @group lisa_acceptance
 * @group lisa_acceptance_settings
 * @group UserUpdate
 */
class UserUpdateCest
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
    public function UserUpdate(AcceptanceTester $I, Example $data)
    {
        $I->loadDataForTest($data);
        $providerData = $data['provider_data'];

        $I->amOnPage('/lisa/#/user/list');
        $I->moveMouseOver('//h1/../div');
        $I->waitAndCantSeeVisualChanges(__FUNCTION__ . 1);
        $I->clickAndWait('//td[text()="Супервайзер Начальникович 2"]/..//a[@href="#/user/update/10"]');
        $I->waitAndCantSeeVisualChanges(__FUNCTION__ . 2);

        //ошибка при изменении подчинённых без их выбора
        $I->click(User::SUBORDINATES_BUTTON);
        $I->click("//div[@role='document']//label[text()='Супервайзер Начальникович 3']/..//input");
        $I->click(RequestView::POPUP_SAVE);
        $I->waitAndCantSeeVisualChanges(__FUNCTION__ . 3);
        $I->checkTablesInDB($providerData['db_1']);

        //изменить подчинённых
        $I->click("//div[@role='document']//label[text()='Подчиненные']/..//input");
        $I->click(RequestView::POPUP_SAVE);
        $I->waitAndCantSeeVisualChanges(__FUNCTION__ . 4);
        $I->checkTablesInDB($providerData['db_2']);
        $I->click('//div[@role="document"]//header//button');

        //ошибка при сохранении СВ без руководителя
        $I->click(User::field('Руководитель') . '//button');
        $I->click(User::SAVE_BUTTON);
        $I->waitAndCantSeeVisualChanges(__FUNCTION__ . 5);
        $I->checkTablesInDB($providerData['db_2']);

        //ошибка при сохранении без ролей
        $I->click(User::field('Роль (Контент)') . '//button');
        $I->click(User::SAVE_BUTTON);
        $I->waitAndCantSeeVisualChanges(__FUNCTION__ . 6, 2);
        $I->checkTablesInDB($providerData['db_2']);

        //сохранить с новой командой, ролями и без руководителя
        $I->click(User::field('Команда'));
        $I->click(SearchField::searchResult('Маркетплейс 5 (Контент)'));
        $I->click(User::field('Роль (Контент)'));
        $I->click(SearchField::searchResult('Продакт-менеджер'));
        $I->click(User::field('Роль (Маркетинг)'));
        $I->click(SearchField::searchResult('Маркетолог'));
        $I->click(User::SAVE_BUTTON);
        $I->waitAndCantSeeVisualChanges(__FUNCTION__ . 7);
        $I->checkTablesInDB($providerData['db_3']);

        //проставить пермишены
        $I->scrollTo(User::permission('Управление пользователями'));

        $I->clickAndWait(User::permission('Управление пользователями'));
        $I->click(User::permission('Управление пользователями', 'Блокирование пользователей'));
        $I->click(User::permission('Управление пользователями', 'Изменение пользователей'));

        $I->clickAndWait(User::permission('Управление заявками'));
        $I->click(User::permission('Управление заявками', 'Взятие в работу и выполнение/отмена заявок (не менеджером заявки)'));
        $I->click(User::permission('Управление заявками', 'Выгрузка до 50 тысяч заявок'));

        //проставить доступы к отображению заявок
        $I->scrollTo(User::requestsAccess());

        $I->click(User::requestsAccess('Команды'));
        $I->click('(//div[@role="listbox"])[4]//div[text()="Маркетплейс 3 (Контент)"]');
        $I->click('(//div[@role="listbox"])[4]//div[text()="Маркетплейс 5 (Контент)"]');

        $I->click(User::requestsAccess('Типы заявок'));
        $I->click(SearchField::searchResult('Добавление новых товаров'));
        $I->click(SearchField::searchResult('Добавление/изменение информации в существующих товарах'));

        $I->click(User::requestsAccess('Направления команд'));
        $I->click(SearchField::searchResult('Работа с товарами Rozetka'));
        $I->click(SearchField::searchResult('Работа с группами'));

        $I->waitAndCantSeeVisualChanges(__FUNCTION__ . 8);

        //сохранить изменения
        $I->scrollTo(User::SAVE_BUTTON, null, -300);
        $I->click(User::SAVE_BUTTON);
        $I->waitAndCantSeeVisualChanges(__FUNCTION__ . 9);
        $I->checkTablesInDB($providerData['db_4']);
    }
}
