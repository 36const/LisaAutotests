<?php

namespace lisa\Page\Settings;

class Category
{
    public const CREATE_BUTTON = '//a[@href="#/category/create"]/button/span[text()="Добавить категорию"]';
    public const SAVE_BUTTON = '//ul[@id="button-group-save"]//a[text()=" Сохранить"]';

    public const CATEGORY_TITLE = '//label[text()="Название"]/following::input';
    public const CATEGORY_DIFF = '//label[text()="Сложность"]/following::input';
    public const CATEGORY_SV = '//label[text()="Супервайзер"]/following::input';

    public static function errorField(string $text): string
    {
        return "//form//div[contains(@class,'error--text')]//div[text()='$text']";
    }

    public static function categoryStatus(string $text): string
    {
        return "//div[@role='radiogroup']//legend[text()='Статус']/following::div//label[text()='$text']/preceding::div//input";
    }
}