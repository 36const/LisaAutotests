<?php

namespace lisa;

use Codeception\Example;
use lisa\Page\Functional\DifficultyCoef;
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
     * @param DifficultyCoef $difficultyCoef
     * @throws \GuzzleHttp\Exception\GuzzleException
     *
     * @dataProvider pageProvider
     *
     */
    public function DifficultyCoefCreate(AcceptanceTester $I, Example $data, DifficultyCoef $difficultyCoef)
    {
        $I->loadDataForTest($data);
        $providerData = $data['provider_data'];

        $difficultyCoef->amOnDifficultyCoef();

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
        $I->wait(1);
        $I->canSee('Такая комбинация Типа заявки и выбраных полей уже существует');
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
