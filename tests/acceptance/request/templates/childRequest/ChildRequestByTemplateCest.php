<?php

namespace lisa;

use Codeception\Example;
use Codeception\Module\TestHelper;
use lisa\Page\Requests\RequestCreate;
use lisa\Page\Requests\RequestTable;
use lisa\Page\Other\SearchField;

/**
 * @group lisa
 * @group lisa_acceptance
 * @group lisa_acceptance_1
 * @group lisa_acceptance_requests
 * @group lisa_acceptance_templates
 * @group ChildRequestByTemplate
 */
class ChildRequestByTemplateCest
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
    public function ChildRequestByTemplate(AcceptanceTester $I, Example $data)
    {
        $I->loadDataForTest($data);
        $provider_data = $data['provider_data'];

        $I->amOnPage('/lisa/#/request/view/1');
        $I->reloadPage();

        //заходим на страницу создания связанной заявки
        $I->retryClick(RequestTable::transferButton('Создать подзадачу'));
        $I->waitAndCantSeeVisualChanges(__FUNCTION__ . 1, 2);

        //применяем шаблон и изменяем поле Количество товаров в работу
        $I->click(RequestCreate::TEMPLATE . '/..');
        $I->click(SearchField::searchResult('Добавление'));
        $I->click(RequestCreate::AMOUNT . '/..');
        $I->pressKey(RequestCreate::AMOUNT, ['ctrl', 'a']);
        $I->pressKey(RequestCreate::AMOUNT,  '999999999');
        $I->waitAndCantSeeVisualChanges(__FUNCTION__ . 2, 2);

        //создаём новую заявку
        $I->scrollTo(RequestCreate::MAIN_BLOCK);
        $I->click(RequestCreate::CREATE_FORM_BUTTON);
        $I->waitForElement(RequestCreate::CREATE_BUTTON);
        $I->canSee('Ваша заявка успешно создана.');
        $I->waitAndCantSeeVisualChanges(__FUNCTION__ . 3, 2);

        $I->checkTablesInDB($provider_data['db']);
    }
}
