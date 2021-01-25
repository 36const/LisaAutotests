<?php

namespace lisa;

use Codeception\Example;
use lisa\Page\Settings\ExcludedFields;
use Codeception\Module\TestHelper;

/**
 * @group lisa
 * @group lisa_acceptance
 * @group lisa_acceptance_settings
 * @group ExcludedFieldsCreate
 */
class ExcludedFieldsCreateCest
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
    public function ExcludedFieldsCreate(AcceptanceTester $I, Example $data)
    {
        $I->loadDataForTest($data);
        $providerData = $data['provider_data'];

        $I->amOnPage("/bpm/excluded-fields");

        $I->click(ExcludedFields::$createButton);
        $I->waitForElementClickable(ExcludedFields::$addButton);

        $I->click(ExcludedFields::$addButton);
        $I->canSeeElement(ExcludedFields::$errorField);
        $I->canSeeElement(ExcludedFields::$errorExcludedField);

        $I->selectOption(ExcludedFields::$fieldId, 'Ручная загрузка');
        $I->click(ExcludedFields::$addButton);
        $I->cantSee(ExcludedFields::$errorField);
        $I->canSeeElement(ExcludedFields::$errorExcludedField);

        $I->selectOption(ExcludedFields::$fieldId, 'Выберите поле');
        $I->selectOption(ExcludedFields::$excludedFieldId, 'Пакетная загрузка');
        $I->click(ExcludedFields::$addButton);
        $I->canSeeElement(ExcludedFields::$errorField);
        $I->cantSee(ExcludedFields::$errorExcludedField);

        $I->selectOption(ExcludedFields::$fieldId, 'Ручная загрузка');
        $I->click(ExcludedFields::$addButton);
        $I->canSeeElement(ExcludedFields::$errorDuplicate);
        $I->canSee('Такая комбинация уже существует');

        $I->click(ExcludedFields::$deleteFirstRowButton);
        $I->click(ExcludedFields::$deleteOkButton);
        $I->checkTablesInDB($providerData['db_1']);

        $I->amOnPage("/bpm/excluded-fields");

        $I->click(ExcludedFields::$createButton);
        $I->waitForElementClickable(ExcludedFields::$addButton);
        $I->waitForElement(ExcludedFields::$modal);

        $I->selectOption(ExcludedFields::$fieldId, 'Ручная загрузка');
        $I->selectOption(ExcludedFields::$excludedFieldId, 'Пакетная загрузка');
        $I->click(ExcludedFields::$addButton);
        $I->cantSeeElement(ExcludedFields::$errorDuplicate);
        $I->cantSee('Такая комбинация уже существует');
        $I->wait(2); //без этого доп. ожидания, при проверке таблицы в БД не обнаруживается новая запись
        $I->checkTablesInDB($providerData['db_2']);
    }
}
