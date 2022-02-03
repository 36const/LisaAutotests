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
 * @group ChangeTemplate
 */
class ChangeTemplateCest
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
    public function ChangeTemplate(AcceptanceTester $I, Example $data)
    {
        $I->loadDataForTest($data);
        $provider_data = $data['provider_data'];

        $I->amOnPage('/lisa/#/request-template/list');
        $I->reloadPage();
        $I->waitAndCantSeeVisualChanges(__FUNCTION__ . 1);

        //заходим на страницу родительского шаблона с актуальными значениями
        $I->click('//tr[2]/td/a/span');
        $I->waitAndCantSeeVisualChanges(__FUNCTION__ . 2);

        //заходим на страницу дочернего шаблона с заблоченными категорией, приоритетом и наблюдателем
        $I->amOnPage('/lisa/#/request-template/list');
        $I->click('//tr[3]/td/a/span');
        $I->waitAndCantSeeVisualChanges(__FUNCTION__ . 3, 3);

        //изменяем заблоченные категорию и приоритет (наблюдателей оставляем, заблоченный юзер должен удалиться автоматом)
        $I->click(RequestCreate::CATEGORY);
        $I->pressKey(RequestCreate::CATEGORY, 'Ав');
        $I->retryClick(SearchField::searchResult('иабилеты'));
        $I->click(RequestCreate::PRIORITY . '/..');
        $I->retryClick("//div[@role='listbox']//div[@role='option']//div[@class='v-list-item__title'][text()='Информация необходима для склада']");

        //сохраняем шаблон
        $I->click(RequestCreate::CREATE_FORM_BUTTON);
        $I->waitAndCantSeeVisualChanges(__FUNCTION__ . 4, 2);

        $I->checkTablesInDB($provider_data['db']);
    }
}
