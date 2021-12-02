<?php

namespace lisa\Page\Requests;

class RequestView
{
    public const CHANGE_TYPE_BUTTON = "//a[@class='btn btn-success'][text()=' Изменить тип']";
    public const DESCRIPTION = "//div[@class='row']//span[text()='Описание']";
    public const RESULTS = "//div[@id='request-result-section']//div[text()='Результат задачи']";
    public const ERRORS = "//span[@id='errors-section']/following::div//a[text()='Ошибки']";
    public const MOTIVATION = "//div[contains(@class,'motivation-section')]//div[contains(text(),'Мотивация супервайзеры')]";
    public const DATES = "//div[@id='dates-section']//div[text()='Даты']";

    public const POPUP_RESULT_COMMENT = "//div[@role='document']//label[text()='Комментарий к результату задачи']/following-sibling::textarea";
    public const POPUP_COMPLETED = "//div[@role='document']//button/span[text()='Выполнена']";

    public static function field(string $fieldName)
    {
        return "//div[@role='combobox']//label[text()='$fieldName']/following-sibling::input";
    }

    public static function checkbox(string $checkboxName)
    {
        return "//div[contains(@class,'v-input--checkbox')]//label[text()='$checkboxName']/preceding-sibling::div/input";
    }

}
