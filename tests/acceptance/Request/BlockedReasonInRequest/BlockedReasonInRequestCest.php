<?php

namespace lisa;

use Codeception\Example;
use lisa\Page\Other\SearchField;
use lisa\Page\Requests\RequestView;
use Codeception\Module\TestHelper;

/**
 * @group lisa
 * @group lisa_acceptance
 * @group lisa_acceptance_requests
 * @group BlockedReasonInRequest
 */
class BlockedReasonInRequestCest
{
    protected function pageProvider()
    {
        return TestHelper::prepareDataprovider(require 'data.php', '');
    }

    /**
     * @param AcceptanceTester $I
     * @param Example $data
     * @param RequestView $view
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @dataProvider pageProvider
     */
    public function BlockedReasonInRequest(AcceptanceTester $I, Example $data, RequestView $view)
    {
        $I->loadDataForTest($data);
        $providerData = $data['provider_data'];

        $view->amOnView(5);

        $I->canSeeInField('reasons[]', '4');
        $I->canSeeInField('reasons[]', '5');

        //список доступных для выбора значений ризонов
        $I->click(RequestView::listField('reasons[]'));
        $I->canSeeElement(SearchField::searchResult('Другое (описан в коментариях)'));
        $I->canSeeElement(SearchField::searchResult('Изменен приоритет задачи'));
        $I->canSeeElement(SearchField::searchResult('Ожидает группировки'));
        $I->canSeeElement(SearchField::searchResult(''));
        $I->canSeeElement(SearchField::searchResult('Ожидается загрузка товаров в систему'));
        $I->canSeeElement(SearchField::searchResult('Ожидается загрузка фото в товары'));
        $I->canSeeElement(SearchField::searchResult('Требуется уточнение информации по задаче'));
        $I->cantSeeElement(SearchField::searchResult('Ожидается загрузка обновлений в систему'));

        //удаление активного значения
        $I->click(RequestView::listField('reasons[]') . '//li[text()="Ожидается загрузка товаров в систему"]/span');
        $I->cantSeeInField('reasons[]', '4');
        $I->canSeeInField('reasons[]', '5');

        //сохранение заявки после удаления активного значения
        $I->click(RequestView::$saveButton);
        $I->wait(1);
        $I->cantSeeInField('reasons[]', '4');
        $I->canSeeInField('reasons[]', '5');
        $I->checkTablesInDB($providerData['db_1']);

        //удаление заблокированного значения
        $I->click(RequestView::listField('reasons[]') . '//li[text()="Ожидается загрузка обновлений в систему"]/span');
        $I->cantSeeInField('reasons[]', '4');
        $I->cantSeeInField('reasons[]', '5');

        //сохранение заявки после удаления заблокированного значения и автоперевод 7->6
        $I->click(RequestView::$saveButton);
        $I->wait(1);
        $I->cantSeeInField('reasons[]', '4');
        $I->cantSeeInField('reasons[]', '5');
        $I->checkTablesInDB($providerData['db_2']);
    }
}
