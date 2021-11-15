<?php

namespace lisa\Page\Requests;

class RequestCreate
{
    public const MAIN_BLOCK = "//div[@class='v-card v-sheet theme--light']";

    public const TEMPLATE = "//div[@class='v-input__control']//label[text()='Шаблон']/following::div/input";
    public const SUBJECT = "//div[@class='v-input__control']//label[text()='Заголовок']/following::input";
    public const DESCRIPTION = "//div[@class='v-input__control']//label[text()='Описание']/following::textarea";
    public const CATEGORY = "//div[@class='v-input__control']//label[text()='Категория']/following::input";
    public const ROZETKA_CATEGORY = "//div[@class='v-input__control']//label[text()='Категория Rozetka']/following::input";
    public const SELLER = "//div[@class='v-input__control']//label[text()='Продавец']/following::input";
    public const AMOUNT = "//div[@class='v-input__control']//label[text()='Количество в работу']/following::input";
    public const PLANNED_FINISH_DATE = "//div[@class='v-input__control']//label[text()='Плановая дата завершения']/following::input";
    public const ALL_CHECKBOXES = "//div[@class='row ma-6 align-center']";
    public const PRIORITY = "//div[@class='v-input__control']//label[text()='Количество в работу']/following::input";
    public const OBSERVERS = "//div[@class='v-input__control']//label[text()='Наблюдатели']/following::div";

    public const CREATE_FORM_BUTTON = "//button/span[text()='Сохранить']";

    public const CREATE_BUTTON = "//a[@class='btn btn-success'][text()=' Создать заявку']";
    public const CREATE_MODAL = "//div[@class='v-card v-sheet theme--light']/div[text()='Тип заявки']";
    public const TYPES_LIST = "//div[@class='v-card v-sheet theme--light']//input[@placeholder='Выберите тип заявки']/../..";
    public const CREATE_MODAL_BUTTON = "//div[@class='v-card v-sheet theme--light']//button/span[text()='Создать']";
    public const REQUESTS_LIST = "//div[@class='lisa-request-grid']//tbody//tr[2]";

    public static function typeSelect($typeName): string
    {
        return "//div[@role='listbox']//div[@class='v-list-item__title'][text()='$typeName']";
    }

    public static function checkboxesDirection(string $directionId): string
    {
        return "//div[@role='radiogroup']//label[text()='$directionId']/../div";
    }

    public static function errorFieldMessage($field, $text): string
    {
        return $field . "/../div[@class='help-block' and contains(text(),'$text')]";
    }

    public static function findCheckbox(string $name): string
    {
        return "//div[@class='attachments-update']//label[text()='$name']/input[@type='checkbox']";
    }

    public static function rozetkaSellers(int $option, int $id, string $name): string
    {
        return "//select[@name='Request[seller_id]']/option[$option][@value='$id'][text()='$name']";
    }

}
