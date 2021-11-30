<?php

namespace lisa;

use Codeception\Example;
use Codeception\Module\TestHelper;
use lisa\Page\Requests\Request;
use lisa\Page\Requests\RequestCreate;
use lisa\Page\Other\SearchField;

/**
 * @group lisa
 * @group lisa_acceptance
 * @group lisa_acceptance_requests
 * @group RequestStatusesTransfer
 * @group RequestStatusesTransferMultiple
 */
class RequestStatusesTransferMultipleCest
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
    public function RequestStatusesTransfer(AcceptanceTester $I, Example $data)
    {
        $I->loadDataForTest($data);
        $provider_data = $data['provider_data'];
        $setting = $data['setting'];

        $I->amOnPage('/lisa/#/request/list/all');

        //перевод 1->2
        $I->click(Request::requestsTableTab('Новые'));
        $I->click('//tr/th[@role="columnheader"][1]');
        $I->click(Request::transferButton('Готова для распределения'));
        $I->waitAndCantSeeVisualChanges(__FUNCTION__ . 1);
        $I->click(Request::transferPopUp('Подтвердить'));
        $I->waitAndCantSeeVisualChanges(__FUNCTION__ . 2);
        $I->checkTablesInDB($provider_data['db_1']);

        //перевод 2->3
        $I->clickAndWait(Request::requestsTableTab('Готовы для распределения'));
        $I->click('//tr/th[@role="columnheader"][1]');
        $I->click(Request::transferButton('На доработку'));
        $I->click(Request::REASON_IN_STATUS_CHANGE_POPUP);
        $I->click(Request::columnValueFromList('Другое (описан в коментариях)'));
        $I->click(Request::columnValueFromList('Нада'));
        $I->pressKey(
            Request::COMMENT_IN_STATUS_CHANGE_POPUP,
            'h','t','t','p',':','/','/','s','p','l','i','t','t','e','r','.','d','o','c','k','e','r'
        );
        $I->waitAndCantSeeVisualChanges(__FUNCTION__ . 3);
        $I->click(Request::transferPopUp('На доработку'));
        $I->waitAndCantSeeVisualChanges(__FUNCTION__ . 4);
        $I->checkTablesInDB($provider_data['db_2']);

        //перевод 3->4
        $I->clickAndWait(Request::requestsTableTab('На доработке'));
        $I->click('//tr/th[@role="columnheader"][1]');
        $I->click(Request::transferButton('Отменить'));
        $I->click(Request::REASON_IN_STATUS_CHANGE_POPUP);
        $I->click(Request::columnValueFromList('Другое (описан в коментариях)'));
        $I->click(Request::columnValueFromList('Дубль задачи'));
        $I->pressKey(
            Request::COMMENT_IN_STATUS_CHANGE_POPUP,
            '=','~','}','!','@','#','$','%','^','&','*','(',')','_','+','`','-',']','\'','/','[',';','.',',','}','"','?','{',':','>','\\','|','<','1','0','0','1','2','3','4','5','6','7','8','9','0','>'
        );
        $I->waitAndCantSeeVisualChanges(__FUNCTION__ . 5);
        $I->click(Request::transferPopUp('Отменить'));
        $I->waitAndCantSeeVisualChanges(__FUNCTION__ . 6);
        $I->checkTablesInDB($provider_data['db_3']);

        //просмотр в 4
        $I->clickAndWait(Request::requestsTableTab('Отменены'));
        $I->waitAndCantSeeVisualChanges(__FUNCTION__ . 7);
    }
}
