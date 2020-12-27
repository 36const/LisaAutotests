<?php

namespace lisa;

use Codeception\Example;
use lisa\Page\Functional\FieldValues;
use Codeception\Module\TestHelper;

/**
 * @group lisa
 * @group lisa_acceptance
 * @group lisa_acceptance_settings
 * @group FieldValuesCreate
 */
class FieldValuesCreateCest
{
    protected function pageProvider()
    {
        return TestHelper::prepareDataprovider(require 'data.php', '');
    }

    /**
     * @param AcceptanceTester $I
     * @param Example $data
     * @param FieldValues $fieldValues
     * @throws \GuzzleHttp\Exception\GuzzleException
     *
     * @dataProvider pageProvider
     *
     */
    public function FieldValuesCreate(AcceptanceTester $I, Example $data, FieldValues $fieldValues)
    {
        $I->loadDataForTest($data);
        $providerData = $data['provider_data'];

        $fieldValues->amOnFieldValues();

        $I->click(FieldValues::$createButton);
        $I->waitForElement(FieldValues::$saveButton);

        $I->click(FieldValues::$saveButton);
        $I->canSeeElement(FieldValues::errorField('Необходимо заполнить «Значение поля».'));

        $I->selectOption(FieldValues::$fieldId, 'Наличие характеристик к товарам');
        $I->pressKey(FieldValues::$fieldValue, 'П', 'р', 'е', 'д', 'о', 'с', 'т', 'а', 'в', 'л', 'е', 'н', 'ы', ' ', 'п', 'р', 'о', 'д', 'а', 'к', 'т', 'о', 'м');
        $I->click(FieldValues::$saveButton);

        $I->waitForElement(FieldValues::$createButton);
        $I->checkTablesInDB($providerData['db']);
    }
}
