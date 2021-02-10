<?php

namespace lisa\Page\Other;

class SearchField
{
    /**Поле ввода символов для поиска*/
    public static $search = '//span/input[@class="select2-search__field"]';

    /**Строка из списка результатов поиска*/
    public static function searchResult(string $text): string
    {
        return "//ul[@class='select2-results__options']//li[contains(text(), '$text')]";
    }
}