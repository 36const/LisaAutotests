<?php

namespace lisa\Page\Settings;

class Priority
{
    public static $createButton = '//a[@href="/bpm/priority/create" and @title="Добавить приоритет"]/span[text()="Добавить приоритет"]';

    public static $priorityStatus = '//select[@id="priority-status"]';
    public static $priorityName = '//input[@id="priority-name"]';
    public static $saveButton = '//div[@class="priority-form"]//button[text()=" Сохранить"]';

    public static function errorField(string $text) {
        return "//div[@class='priority-form']//div[@class='help-block' and text()='$text']";
    }
}