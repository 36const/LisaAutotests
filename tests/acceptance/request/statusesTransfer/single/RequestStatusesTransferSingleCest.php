<?php

namespace lisa;

use Codeception\Example;
use Codeception\Module\TestHelper;
use lisa\Page\Requests\RequestTable;
use lisa\Page\Requests\RequestView;

/**
 * @group lisa
 * @group lisa_acceptance
 * @group lisa_acceptance_requests
 * @group RequestStatusesTransfer
 * @group RequestStatusesTransferSingle
 */
class RequestStatusesTransferSingleCest
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
    public function RequestStatusesTransferSingle(AcceptanceTester $I, Example $data)
    {
        $I->loadDataForTest($data);
        $provider_data = $data['provider_data'];
        $setting = $data['setting'];

        $I->amOnPage('/lisa/#/request/view/1');

        //перевод 1->5
        $I->click(RequestTable::transferButton('Назначить исполнителя'));
        $I->click(RequestTable::REASON_IN_STATUS_CHANGE_POPUP); //переименовать
        $I->click(RequestTable::columnValueFromListSingle('Менеджер Контентович 1А'));
        $I->waitAndCantSeeVisualChanges(__FUNCTION__ . 1);
        $I->click(RequestTable::transferPopUp('Назначить исполнителя'));
        $I->waitAndCantSeeVisualChanges(__FUNCTION__ . 2);
        $I->checkTablesInDB($provider_data['db_1']);

        //перевод 5->6
        $I->click(RequestTable::transferButton('В работу'));
        $I->waitAndCantSeeVisualChanges(__FUNCTION__ . 3);
        $I->checkTablesInDB($provider_data['db_2']);

        //изменение категории/продавца/супервайзера/чекбокса
        $I->click(RequestView::viewField('Категория'));
        $I->click(RequestTable::columnValueFromListSingle('Видео к товару'));
        $I->click("//div[@role='combobox']//label[text()='Продавец']/following-sibling::input");
        $I->click("//div[@role='listbox']//div[@role='option']//div[@class='v-list-item__title'][text()='Rozetka']");
        $I->click(RequestView::viewField('Супервайзер'));
        $I->click(RequestTable::columnValueFromListSingle('Супервайзер Начальникович 2'));
        $I->click(RequestView::viewCheckbox('Пакетная загрузка'));
        $I->waitAndCantSeeVisualChanges(__FUNCTION__ . 4);

        //перевод 6->7
        $I->click(RequestTable::transferButton('Ожидать'));
        $I->click(RequestTable::REASON_IN_STATUS_CHANGE_POPUP);
        $I->click(RequestTable::columnValueFromList('Другое (описан в коментариях)'));
        $I->click(RequestTable::columnValueFromList('Ожидает группировки'));
        $I->click("//div[contains(@class,'headline')][text()='Ожидать']");
        $I->pressKey(
            RequestTable::COMMENT_IN_STATUS_CHANGE_POPUP,
            'h','t','t','p',':','/','/','s','p','l','i','t','t','e','r','.','d','o','c','k','e','r'
        );
        $I->waitAndCantSeeVisualChanges(__FUNCTION__ . 5);
        $I->click(RequestTable::transferPopUp('Ожидать'));
        $I->waitAndCantSeeVisualChanges(__FUNCTION__ . 6);
        $I->checkTablesInDB($provider_data['db_3']);

    }
}
