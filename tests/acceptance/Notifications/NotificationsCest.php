<?php

namespace lisa;

use Codeception\Example;
use lisa\Page\Other\Notifications;
use lisa\Page\Requests\Request;
use Codeception\Module\TestHelper;

/**
 * @group lisa
 * @group lisa_acceptance
 * @group lisa_acceptance_notifications
 * @group Notifications
 */
class NotificationsCest
{
    protected function pageProvider()
    {
        return TestHelper::prepareDataprovider(require 'data.php', '');
    }

    /**
     * @param AcceptanceTester $I
     * @param Example $data
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @dataProvider pageProvider
     */
    public function Notifications(AcceptanceTester $I, Example $data)
    {
        $I->loadDataForTest($data);
        $providerData = $data['provider_data'];

        $I->amOnPage('/bpm/notification');
        $I->canSeeElement(Notifications::notifMenuTotal(3));

        //отметить одну прочитанной через таблицу
        $I->click(Notifications::toggleStatusButton(1, 'ok'));
        $I->waitForElement(Notifications::toggleStatusButton(1, 'repeat'));
        $I->canSeeElement(Notifications::toggleStatusButton(3, 'ok'));
        $I->canSeeElement(Notifications::toggleStatusButton(5, 'ok'));
        $I->canSeeElement(Notifications::notifMenuTotal(2));
        $I->click(Notifications::$notifMenu);
        $I->cantSeeElement(Notifications::notifMenuMessage(1));
        $I->canSeeElement(Notifications::notifMenuMessage(3));
        $I->canSeeElement(Notifications::notifMenuMessage(5));
        $I->checkTablesInDB($providerData['db_1']);

        //отметить одну прочитанной через модалку
        $I->click(Notifications::notifMenuMessageAction(3));
        $I->cantSeeElement(Notifications::notifMenuMessage(1));
        $I->waitForElementNotVisible(Notifications::notifMenuMessage(3));
        $I->canSeeElement(Notifications::notifMenuMessage(5));
        $I->canSeeElement(Notifications::notifMenuTotal(1));
        $I->checkTablesInDB($providerData['db_2']);

        //перейти в раздел нотификаций через кнопку в модалке
        $I->click(Notifications::notifMenuFootButton('Просмотреть все'));
        $I->waitForElement(Notifications::toggleStatusButton(3, 'repeat'));
        $I->canSeeElement(Notifications::toggleStatusButton(1, 'repeat'));
        $I->canSeeElement(Notifications::toggleStatusButton(5, 'ok'));
        $I->canSeeElement(Notifications::notifMenuTotal(1));
        $I->checkTablesInDB($providerData['db_2']);

        //пометить все прочитанными через модалку
        $I->click(Notifications::$notifMenu);
        $I->click(Notifications::notifMenuFootButton('Пометить прочитанными все'));
        $I->waitForElement(Notifications::toggleStatusButton(5, 'repeat'));
        $I->canSeeElement(Notifications::toggleStatusButton(1, 'repeat'));
        $I->canSeeElement(Notifications::toggleStatusButton(3, 'repeat'));
        $I->click(Notifications::$notifMenu);
        $I->click(Notifications::$notifAllIsRead);
        $I->checkTablesInDB($providerData['db_3']);

        //пометить два не прочитанными через таблицу
        $I->click(Notifications::toggleStatusButton(1, 'repeat'));
        $I->waitForElement(Notifications::toggleStatusButton(1, 'ok'));
        $I->click(Notifications::toggleStatusButton(3, 'repeat'));
        $I->waitForElement(Notifications::toggleStatusButton(3, 'ok'));
        $I->canSeeElement(Notifications::toggleStatusButton(5, 'repeat'));
        $I->click(Notifications::$notifMenu);
        $I->canSeeElement(Notifications::notifMenuTotal(2));
        $I->canSeeElement(Notifications::notifMenuMessage(1));
        $I->canSeeElement(Notifications::notifMenuMessage(3));
        $I->cantSeeElement(Notifications::notifMenuMessage(5));
        $I->checkTablesInDB($providerData['db_4']);

        //пометить все прочитанными через таблицу
        $I->click(Notifications::$markAllButton);
        $I->waitForElement(Notifications::toggleStatusButton(5, 'repeat'));
        $I->canSeeElement(Notifications::toggleStatusButton(1, 'repeat'));
        $I->canSeeElement(Notifications::toggleStatusButton(3, 'repeat'));
        $I->click(Notifications::$notifMenu);
        $I->cantSeeElement(Notifications::notifMenuMessage(1));
        $I->cantSeeElement(Notifications::notifMenuMessage(3));
        $I->cantSeeElement(Notifications::notifMenuMessage(5));
        $I->canSeeElement(Notifications::$notifAllIsRead);
        $I->checkTablesInDB($providerData['db_5']);

        //пометить два не прочитанными через таблицу
        $I->click(Notifications::toggleStatusButton(1, 'repeat'));
        $I->waitForElement(Notifications::toggleStatusButton(1, 'ok'));
        $I->click(Notifications::toggleStatusButton(3, 'repeat'));
        $I->waitForElement(Notifications::toggleStatusButton(3, 'ok'));
        $I->canSeeElement(Notifications::notifMenuTotal(2));

        //перейти в заявку через ссылку в таблице
        $I->click('//tbody//a[@href="http://gomer.local/bpm/request/view-from-notify?requestId=1&notifId=1"]');
        $I->waitForElement(Request::$globalCaption . '[text()="№1 Изменение существующих параметров/значений (Определяется типом задачи)"]');
        $I->click(Notifications::$notifMenu);
        $I->canSeeElement(Notifications::notifMenuTotal(1));
        $I->canSeeElement(Notifications::notifMenuMessage(3));
        $I->cantSeeElement(Notifications::notifMenuMessage(1));
        $I->cantSeeElement(Notifications::notifMenuMessage(5));
        $I->checkTablesInDB($providerData['db_6']);

        //перейти в заявку через ссылку в модалке
        $I->amOnPage('/bpm/notification');
        $I->click(Notifications::$notifMenu);
        $I->click(Notifications::notifMenuMessage(3) . '//a[@href="http://gomer.local/bpm/request/view-from-notify?requestId=1&notifId=3"]');
        $I->waitForElement(Request::$globalCaption . '[text()="№1 Изменение существующих параметров/значений (Определяется типом задачи)"]');
        $I->click(Notifications::$notifMenu);
        $I->cantSeeElement(Notifications::notifMenuMessage(1));
        $I->cantSeeElement(Notifications::notifMenuMessage(3));
        $I->cantSeeElement(Notifications::notifMenuMessage(5));
        $I->checkTablesInDB($providerData['db_7']);

        //переход в настройки через модалку
        $I->click(Notifications::notifMenuFootButton('Настройки'));
        $I->canSeeElement(Request::$globalCaption . '[text()="Изменение личных настроек"]');

        //переход в настройки через таблицу
        $I->amOnPage('/bpm/notification');
        $I->waitForElement(Notifications::toggleStatusButton(5, 'repeat'));
        $I->canSeeElement(Notifications::toggleStatusButton(1, 'repeat'));
        $I->canSeeElement(Notifications::toggleStatusButton(3, 'repeat'));
        $I->click(Notifications::$settingsButton);
        $I->canSeeElement(Request::$globalCaption . '[text()="Изменение личных настроек"]');
    }
}
