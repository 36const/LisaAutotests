<?php

namespace lisa\Page\Functional;

use lisa\FunctionalTester;

class Seller extends FunctionalTester
{
    public function amOnSeller()
    {
        $I = $this;
        $I->amOnPage("/bpm/seller");
    }

    public static $updateButton = '//a[@href="/bpm/seller/update?id=0"]';

    public static $sellerSV = '//select[@id="marketsupervisor-supervisor_id"]/../span';
    public static $sellerName = '//select[@id="marketsupervisor-owox_id"][@disabled]';
    public static $saveButton = '//div[@class="sellers-form"]//button[text()=" Сохранить"]';

    public static $search = '//input[@class="select2-search__field"]';
    public static $clearButton = '//div[@class="form-group field-marketsupervisor-supervisor_id required"]//span[@class="select2-selection__clear"][text()="×"]';

    /**Список результатов поиска пользователя*/
    public static function searchResult(string $userName)
    {
        return "//ul[@class='select2-results__options']//li[contains(text(), '$userName')]";
    }

    public static function errorField(string $text) {
        return "//div[@class='sellers-form']//div[@class='help-block' and text()='$text']";
    }
}