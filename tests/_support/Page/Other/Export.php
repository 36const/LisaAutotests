<?php

namespace lisa\Page\Other;

class Export
{
    public static function exportsAmount(int $amount)
    {
        return "//div[@class='list-view']/div[@class='summary']/b[text() = '$amount']";
    }

    public static function exportsItem(int $number)
    {
        return "//div[@class='list-view']//div[@style='margin:5px' and @data-key='$number']//*";
    }

    public static function exportsReady(int $number)
    {
        return "//div[@class='list-view']//div[@style='margin:5px' and @data-key='$number']//a[@title='Скачать']";
    }
}