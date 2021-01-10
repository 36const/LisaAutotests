<?php

namespace lisa\Page\Other;

class SearchField
{
    /**Поле ввода символов для поиска*/
    public static $search = '//span/input[@class="select2-search__field"]';

    /**Список результатов поиска пользователя*/
    public static function searchResult(string $userName)
    {
        return "//ul[@class='select2-results__options']//li[contains(text(), '$userName')]";
    }
}