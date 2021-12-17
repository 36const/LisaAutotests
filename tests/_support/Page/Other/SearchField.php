<?php

namespace lisa\Page\Other;

class SearchField
{
    /**Строка из списка результатов поиска*/
    public static function searchResult(string $text): string
    {
            return "//div[@role='listbox']//div[@role='option']//div[@class='v-list-item__title'][contains(text(), '$text')]";
    }
}