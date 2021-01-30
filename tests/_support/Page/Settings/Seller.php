<?php

namespace lisa\Page\Settings;

class Seller
{
    public static $updateButton = '//a[@href="/bpm/seller/update?id=0"]';

    public static $sellerSV = '//select[@id="marketsupervisor-supervisor_id"]/../span';
    public static $sellerName = '//select[@id="marketsupervisor-owox_id"][@disabled]';
    public static $saveButton = '//div[@class="sellers-form"]//button[text()=" Сохранить"]';
    public static $clearButton = '//div[@class="form-group field-marketsupervisor-supervisor_id required"]//span[@class="select2-selection__clear"][text()="×"]';

    public static function errorField(string $text): string
    {
        return "//div[@class='sellers-form']//div[@class='help-block' and text()='$text']";
    }
}