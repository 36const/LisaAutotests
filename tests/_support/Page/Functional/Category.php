<?php

namespace lisa\Page\Functional;

use lisa\FunctionalTester;

class Category extends FunctionalTester
{
    public function amOnCategory()
    {
        $I = $this;
        $I->amOnPage("/bpm/category");
    }

    public static $createButton = '//a[@href="/bpm/category/create" and @title="Добавить категорию"]/span[text()="Добавить категорию"]';

    public static $categoryTitle = '//input[@id="category-title"]';
    public static $categoryDiff = '//input[@id="category-difficulty"]';
    public static $categoryStatus = '//select[@id="category-status"]';
    public static $categorySV = '//select[@id="category-supervisor_id"]/../span';
    public static $saveButton = '//div[@class="category-form"]//button[text()=" Сохранить"]';

    public static $search = '//input[@class="select2-search__field"]';

    /**Список результатов поиска пользователя*/
    public static function searchResult(string $userName)
    {
        return "//ul[@class='select2-results__options']//li[contains(text(), '$userName')]";
    }

    public static function errorField(string $text) {
        return "//div[@class='category-form']//div[@class='help-block' and text()='$text']";
    }
}