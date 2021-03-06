<?php

namespace lisa;

use Codeception\Example;
use Codeception\Module\TestHelper;
use lisa\Page\Requests\RequestTable;

/**
 * @group lisa
 * @group lisa_acceptance
 * @group lisa_acceptance_1
 * @group lisa_acceptance_requests
 * @group RequestStatusesTransfer
 * @group RequestStatusesTransferMultiple
 */
class RequestStatusesTransferMultipleCest
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
    public function RequestStatusesTransferMultiple(AcceptanceTester $I, Example $data)
    {
        $I->loadDataForTest($data);
        $provider_data = $data['provider_data'];

        $I->amOnPage('/lisa/#/request/list/all');
        $I->reloadPage();

        //перевод 1->2
        $I->clickAndWait(RequestTable::requestsTableTab('Новые'), 2);
        $I->click('//tr/th[@role="columnheader"][1]');
        $I->click(RequestTable::transferButton('Готова для распределения'));
        $I->waitAndCantSeeVisualChanges(__FUNCTION__ . 1, 1, 0.001, ['div.lisa-request-view > div > button']);
        $I->click(RequestTable::transferPopUp('Подтвердить'));
        $I->waitAndCantSeeVisualChanges(__FUNCTION__ . 2);
        $I->checkTablesInDB($provider_data['db_1']);

        //перевод 2->3
        $I->clickAndWait(RequestTable::requestsTableTab('Готовы для распределения'), 1);
        $I->click('//tr/th[@role="columnheader"][1]');
        $I->click(RequestTable::transferButton('На доработку'));
        $I->click(RequestTable::REASON_IN_STATUS_CHANGE_POPUP);
        $I->click(RequestTable::columnValueFromList('Другое (описан в коментариях)'));
        $I->click(RequestTable::columnValueFromList('Нада'));
        $I->pressKey(RequestTable::COMMENT_IN_STATUS_CHANGE_POPUP, 'http://splitter.docker');
        $I->waitAndCantSeeVisualChanges([__FUNCTION__ . '3_1', __FUNCTION__ . '3_2']);  //иногда список немного смещается
        $I->click(RequestTable::transferPopUp('На доработку'));
        $I->waitAndCantSeeVisualChanges(__FUNCTION__ . 4, 2);
        $I->checkTablesInDB($provider_data['db_2']);

        //перевод 3->4
        $I->clickAndWait(RequestTable::requestsTableTab('На доработке'), 1);
        $I->click('//tr/th[@role="columnheader"][1]');
        $I->click(RequestTable::transferButton('Отменить'));
        $I->clickAndWait(RequestTable::REASON_IN_STATUS_CHANGE_POPUP);
        $I->moveMouseOver(RequestTable::columnValueFromList('Другое (описан в коментариях)'));
        $I->click(RequestTable::columnValueFromList('Другое (описан в коментариях)'));
        $I->pressKey(RequestTable::COMMENT_IN_STATUS_CHANGE_POPUP, '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\\|<1001234567890>');
        $I->waitAndCantSeeVisualChanges([__FUNCTION__ . '5_1', __FUNCTION__ . '5_2']);  //иногда третий пункт подсвечивается как при наведении курсора
        $I->click(RequestTable::transferPopUp('Отменить'));
        $I->waitAndCantSeeVisualChanges(__FUNCTION__ . 6, 2);
        $I->checkTablesInDB($provider_data['db_3']);

        //просмотр в 4
        $I->clickAndWait(RequestTable::requestsTableTab('Отменены'));
        $I->waitAndCantSeeVisualChanges(__FUNCTION__ . 7, 2);
    }
}
