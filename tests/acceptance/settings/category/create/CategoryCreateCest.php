<?php

namespace lisa;

use Codeception\Example;
use Codeception\Module\TestHelper;
use lisa\Page\Settings\Category;
use lisa\Page\Other\SearchField;

/**
 * @group lisa
 * @group lisa_acceptance
 * @group lisa_acceptance_settings
 * @group CategoryCreate
 */
class CategoryCreateCest
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
    public function CategoryCreate(AcceptanceTester $I, Example $data)
    {
        $I->loadDataForTest($data);
        $providerData = $data['provider_data'];

        $I->amOnPage('/lisa/#/category/list');
        $I->click(Category::CREATE_BUTTON);
        $I->waitForElement(Category::SAVE_BUTTON);

        $I->click(Category::SAVE_BUTTON);
        $I->waitForElementVisible(Category::errorField('Необходимо заполнить «Название категории».'));
        $I->waitForElementVisible(Category::errorField('Необходимо заполнить «Коэффициент сложности».'));
        $I->waitForElementVisible(Category::errorField('Необходимо заполнить «Супервизор».'));
        $I->checkTablesInDB($providerData['db_1']);
        $I->waitAndCantSeeVisualChanges(__FUNCTION__ . 1, 3);

        $I->pressKey(Category::CATEGORY_DIFF, '1', '.', '3');
        $I->click(Category::SAVE_BUTTON);
        $I->wait(1);
        $I->waitForElementVisible(Category::errorField('Необходимо заполнить «Название категории».'));
        $I->waitForElementVisible(Category::errorField('Необходимо заполнить «Супервизор».'));
        $I->cantSeeElement(Category::errorField('Необходимо заполнить «Коэффициент сложности».'));
        $I->checkTablesInDB($providerData['db_1']);

        $I->click(Category::categoryStatus('Заблокированный'));
        $I->click(Category::SAVE_BUTTON);
        $I->wait(1);
        $I->waitForElementVisible(Category::errorField('Необходимо заполнить «Название категории».'));
        $I->waitForElementVisible(Category::errorField('Необходимо заполнить «Супервизор».'));
        $I->cantSeeElement(Category::errorField('Необходимо заполнить «Коэффициент сложности».'));
        $I->checkTablesInDB($providerData['db_1']);

        $I->pressKey(Category::CATEGORY_TITLE, 'А', 'в', 'и', 'а', 'б', 'и', 'л', 'е', 'т', 'ы');
        $I->click(Category::SAVE_BUTTON);
        $I->wait(1);
        $I->waitForElementVisible(Category::errorField('Значение «Авиабилеты» для «Название категории» уже занято.'));
        $I->waitForElementVisible(Category::errorField('Необходимо заполнить «Супервизор».'));
        $I->cantSeeElement(Category::errorField('Необходимо заполнить «Коэффициент сложности».'));
        $I->cantSeeElement(Category::errorField('Необходимо заполнить «Название категории».'));
        $I->checkTablesInDB($providerData['db_1']);

        $I->click(Category::categoryStatus('Активный'));
        $I->click(Category::SAVE_BUTTON);
        $I->wait(1);
        $I->waitForElementVisible(Category::errorField('Значение «Авиабилеты» для «Название категории» уже занято.'));
        $I->waitForElementVisible(Category::errorField('Необходимо заполнить «Супервизор».'));
        $I->cantSeeElement(Category::errorField('Необходимо заполнить «Коэффициент сложности».'));
        $I->cantSeeElement(Category::errorField('Необходимо заполнить «Название категории».'));
        $I->checkTablesInDB($providerData['db_1']);

        $I->reloadPage();
        $I->click(Category::CATEGORY_SV);
        $I->pressKey(Category::CATEGORY_SV, 'К', 'у');
        $I->click(SearchField::searchResult('Константин '));
        $I->click(Category::SAVE_BUTTON);
        $I->wait(1);
        $I->waitForElementVisible(Category::errorField('Необходимо заполнить «Название категории».'));
        $I->waitForElementVisible(Category::errorField('Необходимо заполнить «Коэффициент сложности».'));
        $I->cantSeeElement(Category::errorField('Необходимо заполнить «Супервизор».'));
        $I->checkTablesInDB($providerData['db_1']);

        $I->pressKey(Category::CATEGORY_TITLE, 'А', 'в', 'и', 'а', 'б', 'и', 'л', 'е', 'т', 'ы', '-');
        $I->pressKey(Category::CATEGORY_DIFF, '1', '.', '3');
        $I->click(Category::SAVE_BUTTON);
        $I->waitForElement(Category::CREATE_BUTTON);
        $I->canSee('Категория успешно создана!');
        $I->waitAndCantSeeVisualChanges(__FUNCTION__ . 2);
        $I->checkTablesInDB($providerData['db_2']);
    }
}
