<?php

namespace lisa;

use Codeception\Example;
use lisa\Page\Settings\Priority;
use Codeception\Module\TestHelper;

/**
 * @group lisa
 * @group lisa_acceptance
 * @group lisa_acceptance_settings
 * @group PriorityCreate
 */
class PriorityCreateCest
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
    public function PriorityCreate(AcceptanceTester $I, Example $data)
    {
        $I->loadDataForTest($data);
        $providerData = $data['provider_data'];

        $I->amOnPage("/bpm/priority");

        $I->click(Priority::$createButton);
        $I->waitForElement(Priority::$saveButton);

        $I->click(Priority::$saveButton);
        $I->canSeeElement(Priority::errorField('Необходимо заполнить «Название приоритета».'));

        $I->selectOption(Priority::$priorityStatus, 'Заблокированый');
        $I->click(Priority::$saveButton);
        $I->canSeeElement(Priority::errorField('Необходимо заполнить «Название приоритета».'));

        $I->pressKey(Priority::$priorityName, 'И', 'с', 'п', 'р', 'а', 'в', 'л', 'е', 'н', 'и', 'е', ' ', 'к', 'р', 'и', 'т', 'и', 'ч', 'н', 'о', 'й', ' ', 'о', 'ш', 'и', 'б', 'к', 'и');
        $I->click(Priority::$saveButton);
        $I->canSeeElement(Priority::errorField('Значение «Исправление критичной ошибки» для «Название приоритета» уже занято.'));

        $I->selectOption(Priority::$priorityStatus, 'Активный');
        $I->click(Priority::$saveButton);
        $I->canSeeElement(Priority::errorField('Значение «Исправление критичной ошибки» для «Название приоритета» уже занято.'));

        $I->wait(1);     //без ожидания выдаёт ошибку, что нет кнопки "Сохранить"
        $I->pressKey(Priority::$priorityName, '-');
        $I->click(Priority::$saveButton);
        $I->waitForElement(Priority::$createButton);
        $I->canSee('Приоритет успешно создан.');
        $I->checkTablesInDB($providerData['db']);
    }
}
