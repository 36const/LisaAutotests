<?php

namespace lisa\Page\Settings;

class Category
{
    public static $createButton = '//a[@href="/bpm/category/create" and @title="Добавить категорию"]/span[text()="Добавить категорию"]';

    public static $categoryTitle = '//input[@id="category-title"]';
    public static $categoryDiff = '//input[@id="category-difficulty"]';
    public static $categoryStatus = '//select[@id="category-status"]';
    public static $categorySV = '//select[@id="category-supervisor_id"]/../span';
    public static $saveButton = '//div[@class="category-form"]//button[text()=" Сохранить"]';

    public static function errorField(string $text): string
    {
        return "//form[@id='category_form']//div[@class='help-block' and text()='$text']";
    }
}