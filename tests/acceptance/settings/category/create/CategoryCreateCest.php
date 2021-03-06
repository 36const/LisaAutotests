<?php

namespace lisa;

use Codeception\Example;
use Codeception\Module\TestHelper;
use lisa\Page\Settings\Category;
use lisa\Page\Other\SearchField;

/**
 * @group lisa
 * @group lisa_acceptance
 * @group lisa_acceptance_1
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
        $I->reloadPage();
        $I->waitForElement(Category::CREATE_BUTTON);
        $I->click(Category::CREATE_BUTTON);

        $I->retryClick(Category::SAVE_BUTTON);
        $I->waitAndCantSeeVisualChanges(__FUNCTION__ . 1, 2, 0.14);
        $I->waitForElementVisible(Category::errorField('Необходимо заполнить «Название категории».'));
        $I->waitForElementVisible(Category::errorField('Необходимо заполнить «Коэффициент сложности».'));
        $I->waitForElementVisible(Category::errorField('Необходимо заполнить «Супервизор».'));
        $I->checkTablesInDB($providerData['db_1']);

        $I->pressKey(Category::CATEGORY_DIFF, '1.3');
        $I->click(Category::SAVE_BUTTON);
        $I->waitForElementVisible(Category::errorField('Необходимо заполнить «Название категории».'));
        $I->waitForElementVisible(Category::errorField('Необходимо заполнить «Супервизор».'));
        $I->waitForElementNotVisible(Category::errorField('Необходимо заполнить «Коэффициент сложности».'));
        $I->checkTablesInDB($providerData['db_1']);

        $I->click(Category::categoryStatus('Заблокированный'));
        $I->click(Category::SAVE_BUTTON);
        $I->waitForElementVisible(Category::errorField('Необходимо заполнить «Название категории».'));
        $I->waitForElementVisible(Category::errorField('Необходимо заполнить «Супервизор».'));
        $I->waitForElementNotVisible(Category::errorField('Необходимо заполнить «Коэффициент сложности».'));
        $I->checkTablesInDB($providerData['db_1']);

        $I->pressKey(Category::CATEGORY_TITLE, 'Авиабилеты');
        $I->click(Category::SAVE_BUTTON);
        $I->waitForElementVisible(Category::errorField('Значение «Авиабилеты» для «Название категории» уже занято.'));
        $I->waitForElementVisible(Category::errorField('Необходимо заполнить «Супервизор».'));
        $I->waitForElementNotVisible(Category::errorField('Необходимо заполнить «Коэффициент сложности».'));
        $I->waitForElementNotVisible(Category::errorField('Необходимо заполнить «Название категории».'));
        $I->checkTablesInDB($providerData['db_1']);

        $I->click(Category::categoryStatus('Активный'));
        $I->click(Category::SAVE_BUTTON);
        $I->waitForElementVisible(Category::errorField('Значение «Авиабилеты» для «Название категории» уже занято.'));
        $I->waitForElementVisible(Category::errorField('Необходимо заполнить «Супервизор».'));
        $I->waitForElementNotVisible(Category::errorField('Необходимо заполнить «Коэффициент сложности».'));
        $I->waitForElementNotVisible(Category::errorField('Необходимо заполнить «Название категории».'));
        $I->checkTablesInDB($providerData['db_1']);

        $I->reloadPage();
        $I->click(Category::CATEGORY_SV);
        $I->pressKey(Category::CATEGORY_SV, 'Ку');
        $I->click(SearchField::searchResult('Константин '));
        $I->click(Category::SAVE_BUTTON);
        $I->waitForElementVisible(Category::errorField('Необходимо заполнить «Название категории».'));
        $I->waitForElementVisible(Category::errorField('Необходимо заполнить «Коэффициент сложности».'));
        $I->waitForElementNotVisible(Category::errorField('Необходимо заполнить «Супервизор».'));
        $I->checkTablesInDB($providerData['db_1']);

        $I->pressKey(Category::CATEGORY_TITLE, 'Авиабилеты-');
        $I->pressKey(Category::CATEGORY_DIFF, '1.3');

        $I->click(Category::RZ_CATEGORY_BUTTON);
        $I->pressKey(Category::RZ_CATEGORY_SEARCH, 'папки');
        $I->wait(1);
        $I->retryClick(Category::rzCategoryCheckbox(2581742));
        $I->retryClick(Category::rzCategoryCheckbox(2581737));
        $I->retryClick(Category::rzCategoryCheckbox(2514862));
        $I->moveMouseOver(Category::rzCategoryCheckbox(2514862));
        $I->waitAndCantSeeVisualChanges(__FUNCTION__ . 2);

        $I->click(Category::SAVE_BUTTON);
        $I->waitForElement(Category::CREATE_BUTTON);
        $I->canSee('Категория успешно создана!');
        $I->waitAndCantSeeVisualChanges(__FUNCTION__ . 3);
        $I->checkTablesInDB($providerData['db_2']);
    }
}
