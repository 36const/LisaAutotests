<?php

namespace lisa\Page\Settings;

class ExcludedFields
{
    public static $createButton = '//a[@href="/bpm/excluded-fields" and @title="Добавить взаимоисключающий чекбокс"]/span[text()="Добавить взаимоисключающий чекбокс"]';

    public static $modal = '//form[@action="/bpm/excluded-fields/create"]';
    public static $addButton = '//form[@action="/bpm/excluded-fields/create"]//button';
    public static $deleteFirstRowButton = '//tbody/tr/td/a[@href="/bpm/excluded-fields/delete?field_id=1&excluded_field_id=2"]';
    public static $deleteOkButton = '//div[@class="modal bootstrap-dialog type-warning fade size-normal in"]//button[@class="btn btn-warning" and text()=" Ok"]';

    public static $errorField = '//form[@action="/bpm/excluded-fields/create"]//div[@class="help-block" and text()="Необходимо заполнить «Поле»."]';
    public static $errorExcludedField = '//form[@action="/bpm/excluded-fields/create"]//div[@class="help-block" and text()="Необходимо заполнить «Исключающее поле»."]';
    public static $errorDuplicate = '//div[@class="alert-danger alert fade in"]';

    public static $fieldId = '//select[@id="excludedfield-field_id"]';
    public static $excludedFieldId = '//select[@id="excludedfield-excluded_field_id"]';
}