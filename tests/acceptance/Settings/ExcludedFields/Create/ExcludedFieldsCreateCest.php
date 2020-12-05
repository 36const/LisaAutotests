<?php

namespace lisa;

use Codeception\Example;
use lisa\Page\Functional\ExcludedFields;
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
     * @param ExcludedFields $excluded
     * @throws \GuzzleHttp\Exception\GuzzleException
     *
     * @dataProvider pageProvider
     *
     */
    public function ExcludedFieldsCreate(AcceptanceTester $I, Example $data, ExcludedFields $excluded)
    {
        $I->loadDataForTest($data);
        $providerData = $data['provider_data'];

        $excluded->amOnExcludedFields();

        $I->click(ExcludedFields::$createButton);
        $I->waitForElementClickable(ExcludedFields::$addButton);
        $I->canSeeElement(ExcludedFields::$modal);

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
        $I->cantSee(ExcludedFields::$errorField);
        $I->cantSee(ExcludedFields::$errorExcludedField);
        $I->canSeeElement(ExcludedFields::$errorDuplicate);
        $I->canSee('Такая комбинация уже существует');

        $I->click(ExcludedFields::$deleteFirstRowButton);
        $I->click(ExcludedFields::$deleteOkButton);
        $I->checkTablesInDB($providerData['db_1']);

        $excluded->amOnExcludedFields();

        $I->click(ExcludedFields::$createButton);
        $I->waitForElementClickable(ExcludedFields::$addButton);
        $I->canSeeElement(ExcludedFields::$modal);

        $I->selectOption(ExcludedFields::$fieldId, 'Ручная загрузка');
        $I->selectOption(ExcludedFields::$excludedFieldId, 'Пакетная загрузка');
        $I->click(ExcludedFields::$addButton);
        $I->cantSeeElement(ExcludedFields::$errorDuplicate);
        $I->cantSee('Такая комбинация уже существует');
        $I->wait(1); //без этого доп. ожидания, при проверке таблицы не обнаруживается новая запись
        $I->checkTablesInDB($providerData['db_2']);
    }
}
