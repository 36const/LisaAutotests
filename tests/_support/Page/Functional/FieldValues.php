<?php

namespace lisa\Page\Functional;

use lisa\FunctionalTester;

class FieldValues extends FunctionalTester
{
    public function amOnFieldValues()
    {
        $I = $this;
        $I->amOnPage("/bpm/field-values");
    }

    public static $createButton = '//a[@href="/bpm/field-values/create" and @title="Добавить значение"]/span[text()="Добавить значение"]';

    public static $fieldId = '//select[@id="fieldvalue-field_id"]';
    public static $fieldValue = '//input[@id="fieldvalue-value"]';
    public static $saveButton = '//div[@class="field-values-form"]//button[text()=" Сохранить"]';

    public static function errorField(string $text) {
        return "//div[@class='field-values-form']//div[@class='help-block' and text()='$text']";
    }
}