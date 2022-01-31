<?php

namespace lisa;

use Codeception\Example;
use Codeception\Module\TestHelper;
use lisa\Page\Requests\RequestTable;
use lisa\Page\Requests\RequestView;

/**
 * @group lisa
 * @group lisa_acceptance
 * @group lisa_acceptance_1
 * @group lisa_acceptance_requests
 * @group RequestStatusesTransfer
 * @group RequestStatusesTransferSingle1
 */
class RequestStatusesTransferSingle1Cest
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
    public function RequestStatusesTransferSingle1(AcceptanceTester $I, Example $data)
    {
        $I->loadDataForTest($data);
        $provider_data = $data['provider_data'];

        $I->amOnPage('/lisa/#/request/view/1');

        //перевод 1->5
        $I->click(RequestTable::transferButton('Назначить исполнителя'));
        $I->click(RequestTable::REASON_IN_STATUS_CHANGE_POPUP); //переименовать
        $I->click(RequestTable::columnValueFromListSingle('Менеджер Контентович 1А'));
        $I->waitAndCantSeeVisualChanges(__FUNCTION__ . '_1', 1, 0.001, ['div.lisa-request-view > div > button']);
        $I->click(RequestTable::transferPopUp('Назначить исполнителя'));
        $I->waitAndCantSeeVisualChanges(__FUNCTION__ . '_2', 2);
        $I->checkTablesInDB($provider_data['db_1']);

        //перевод 5->6
        $I->clickAndWait(RequestTable::transferButton('В работу'), 1);
        //$I->waitAndCantSeeVisualChanges(__FUNCTION__ . '_3', 2); //иногда не показывается сообщение
        $I->checkTablesInDB($provider_data['db_2']);

        //изменение категории/продавца/супервайзера/чекбокса
        $I->click(RequestView::field('Категория'));
        $I->click(RequestTable::columnValueFromListSingle('Видео к товару'));
        $I->click(RequestView::field('Продавец'));
        $I->click("//div[@role='listbox']//div[@role='option']//div[@class='v-list-item__title'][text()='Rozetka']");
        $I->click(RequestView::field('Супервайзер'));
        $I->click(RequestTable::columnValueFromListSingle('Супервайзер Начальникович 2'));
        $I->click(RequestView::checkbox('Пакетная загрузка'));
        $I->waitAndCantSeeVisualChanges(__FUNCTION__ . '_4');

        //перевод 6->7
        $I->click(RequestTable::transferButton('Ожидать'));
        $I->click(RequestTable::REASON_IN_STATUS_CHANGE_POPUP);
        $I->click(RequestTable::columnValueFromList('Ожидает группировки'));
        $I->click("//div[contains(@class,'headline')][text()='Ожидать']");
        $I->pressKey(RequestTable::COMMENT_IN_STATUS_CHANGE_POPUP, 'http://splitter.docker');
        $I->waitAndCantSeeVisualChanges(__FUNCTION__ . '_5');
        $I->click(RequestTable::transferPopUp('Ожидать'));
        $I->waitAndCantSeeVisualChanges(__FUNCTION__ . '_6', 2);
        $I->checkTablesInDB($provider_data['db_3']);

    }
}
