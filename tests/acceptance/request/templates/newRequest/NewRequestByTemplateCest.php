<?php

namespace lisa;

use Codeception\Example;
use Codeception\Module\TestHelper;
use lisa\Page\Requests\RequestCreate;
use lisa\Page\Other\SearchField;

/**
 * @group lisa
 * @group lisa_acceptance
 * @group lisa_acceptance_1
 * @group lisa_acceptance_requests
 * @group lisa_acceptance_templates
 * @group NewRequestByTemplate
 */
class NewRequestByTemplateCest
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
    public function NewRequestByTemplate(AcceptanceTester $I, Example $data)
    {
        $I->loadDataForTest($data);
        $provider_data = $data['provider_data'];

        $I->amOnPage('/lisa/#/request/create?typeId=1&direction=1');
        $I->reloadPage();

        //применяем шаблон
        $I->retryClick(RequestCreate::TEMPLATE . '/..');
        $I->click(SearchField::searchResult('Добавление (Розетка)'));
        $I->waitAndCantSeeVisualChanges(__FUNCTION__ . 1, 2);

        //удаляем одного наблюдателя
        $I->click('//label[text()="Наблюдатели"]/..//button');

        //создаём новую заявку
        $I->click(RequestCreate::CREATE_FORM_BUTTON);
        $I->waitForElement(RequestCreate::CREATE_BUTTON);
        $I->canSee('Ваша заявка успешно создана.');
        $I->waitAndCantSeeVisualChanges(__FUNCTION__ . 2);

        $I->checkTablesInDB($provider_data['db']);
    }
}
