<?php

namespace lisa\Page\Settings;

class Category
{
    public const CREATE_BUTTON = '//a[@href="#/category/create"]/button/span[text()="Добавить категорию"]';
    public const SAVE_BUTTON = '//ul[@id="button-group-save"]//a[text()=" Сохранить"]';
    public const RZ_CATEGORY_BUTTON = '//button/span[contains(text(),"Открыть привязку категорий")]/..';

    public const CATEGORY_TITLE = '//label[text()="Название"]/following::input';
    public const CATEGORY_DIFF = '//label[text()="Сложность"]/following::input';
    public const CATEGORY_SV = '//label[text()="Супервайзер"]/following::input';
    public const RZ_CATEGORY_SEARCH = '//span[text()="Найти категорию:"]/..//input';

    public static function errorField(string $text): string
    {
        return "//form//div[contains(@class,'error--text')]//div[text()='$text']";
    }

    public static function categoryStatus(string $text): string
    {
        return "//div[@role='radiogroup']//legend[text()='Статус']/..//label[text()='$text']/..//input";
    }

    public static function rzCategoryCheckbox(int $rzCategoryId): string
    {
        return "//div[@data-id='$rzCategoryId']//span/span[2]";
    }
}