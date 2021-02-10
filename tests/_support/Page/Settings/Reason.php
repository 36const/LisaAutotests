<?php

namespace lisa\Page\Settings;

class Reason
{
    public static $createButton = '//a[@href="/bpm/reason/create" and @title="Добавить новую причину"]/span[text()="Добавить новую причину"]';

    public static $childStatus = '//select[@id="reason-child_status"]';
    public static $reason = '//input[@id="reason-reason"]';
    public static $status = '//select[@id="reason-status"]';
    public static $saveButton = '//div[@class="reason-form"]//button[text()=" Сохранить"]';

    public static function errorField(string $text): string
    {
        return "//div[@class='reason-form']//div[@class='help-block' and text()='$text']";
    }
}