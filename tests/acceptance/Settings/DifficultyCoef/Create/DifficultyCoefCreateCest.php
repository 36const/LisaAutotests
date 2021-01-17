<?php

namespace lisa;

use Codeception\Example;
use lisa\Page\Settings\DifficultyCoef;
use Codeception\Module\TestHelper;

/**
 * @group lisa
 * @group lisa_acceptance
 * @group lisa_acceptance_settings
 * @group DifficultyCoefCreate
 */
class DifficultyCoefCreateCest
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
    public function DifficultyCoefCreate(AcceptanceTester $I, Example $data)
    {
        $I->loadDataForTest($data);
        $providerData = $data['provider_data'];

        $I->amOnPage("/bpm/difficulty-coef");

        $I->click(DifficultyCoef::$createButton);
        $I->waitForElement(DifficultyCoef::$saveButton);

        $I->click(DifficultyCoef::$saveButton);
        $I->checkTablesInDB($providerData['db_1']);

        $I->selectOption(DifficultyCoef::$requestType, 'Добавление новых товаров');
        $I->click(DifficultyCoef::$saveButton);
        $I->checkTablesInDB($providerData['db_1']);

        $I->scrollTo(DifficultyCoef::checkbox(1), 0, -50);
        $I->click(DifficultyCoef::checkbox(1));
        $I->pressKey(DifficultyCoef::$coef, '2', ',', '5');
        $I->click(DifficultyCoef::$saveButton);
        $I->retrySee('Такая комбинация Типа заявки и выбраных полей уже существует');
        $I->checkTablesInDB($providerData['db_1']);

        $I->selectOption(DifficultyCoef::$requestType, 'Добавление новых товаров');
        $I->click(DifficultyCoef::checkbox(1));
        $I->click(DifficultyCoef::checkbox(2));
        $I->pressKey(DifficultyCoef::$coef, '0', '.', '5');
        $I->click(DifficultyCoef::$saveButton);
        $I->waitForElement(DifficultyCoef::$createButton);
        $I->canSee('Коэффициент успешно добавлен');
        $I->checkTablesInDB($providerData['db_2']);
    }
}
