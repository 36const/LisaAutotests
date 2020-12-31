<?php

namespace lisa;

use Codeception\Example;
use lisa\Page\Functional\Category;
use Codeception\Module\TestHelper;

/**
 * @group lisa
 * @group lisa_acceptance
 * @group lisa_acceptance_settings
 * @group CategoryCreate
 */
class CategoryCreateCest
{
    protected function pageProvider()
    {
        return TestHelper::prepareDataprovider(require 'data.php', '');
    }

    /**
     * @param AcceptanceTester $I
     * @param Example $data
     * @param Category $category
     * @throws \GuzzleHttp\Exception\GuzzleException
     *
     * @dataProvider pageProvider
     *
     */
    public function CategoryCreate(AcceptanceTester $I, Example $data, Category $category)
    {
        $I->loadDataForTest($data);
        $providerData = $data['provider_data'];

        $category->amOnCategory();

        $I->click(Category::$createButton);
        $I->waitForElement(Category::$saveButton);

        $I->click(Category::$saveButton);
        $I->checkTablesInDB($providerData['db_1']);

        $I->pressKey(Category::$categoryDiff, '1', '.', '3');
        $I->click(Category::$saveButton);
        $I->canSeeElement(Category::errorField('Необходимо заполнить «Название категории».'));
        $I->checkTablesInDB($providerData['db_1']);

        $I->selectOption(Category::$categoryStatus, 'Заблокированый');
        $I->click(Category::$saveButton);
        $I->canSeeElement(Category::errorField('Необходимо заполнить «Название категории».'));
        $I->checkTablesInDB($providerData['db_1']);

        $I->pressKey(Category::$categoryTitle, 'А', 'в', 'и', 'а', 'б', 'и', 'л', 'е', 'т', 'ы');
        $I->click(Category::$saveButton);
        $I->canSeeElement(Category::errorField('Значение «Авиабилеты» для «Название категории» уже занято.'));
        $I->canSeeElement(Category::errorField('Необходимо заполнить «Супервизор».'));
        $I->checkTablesInDB($providerData['db_1']);

        $I->selectOption(Category::$categoryStatus, 'Активный');
        $I->click(Category::$saveButton);
        $I->canSeeElement(Category::errorField('Необходимо заполнить «Супервизор».'));
        $I->checkTablesInDB($providerData['db_1']);

        $I->reloadPage();
        $I->click(Category::$categorySV);
        $I->click(Category::$search);
        $I->pressKey(Category::$search, 'К', 'у');
        $I->click(Category::searchResult('Константин Куцан'));
        $I->click(Category::$saveButton);
        $I->canSeeElement(Category::errorField('Значение «Авиабилеты» для «Название категории» уже занято.'));
        $I->checkTablesInDB($providerData['db_1']);

        $I->wait(1);     //без ожидания выдаёт ошибку, что нет кнопки "Сохранить"
        $I->pressKey(Category::$categoryTitle, '-');
        $I->click(Category::$saveButton);
        $I->waitForElement(Category::$createButton);
        $I->canSee('Категория Авиабилеты- успешно создана.');
        $I->checkTablesInDB($providerData['db_2']);
    }
}
