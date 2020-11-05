<?php

namespace lisa\Page\Functional;

use lisa\FunctionalTester;

class UserView extends FunctionalTester
{
    /**Таблица с информацией об учётной записи после успешного создания пользователя*/
    public static function viewUserTable(int $tr, string $text)
    {
        return "//table/tbody/tr[$tr]//*[contains(text(), '$text')]";
    }
}