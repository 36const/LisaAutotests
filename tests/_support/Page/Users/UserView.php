<?php

namespace lisa\Page\Users;

class UserView
{
    /**Таблица с информацией об учётной записи после успешного создания пользователя*/
    public static function viewUserTable(int $tr, string $text)
    {
        return "//table/tbody/tr[$tr]//*[contains(text(), '$text')]";
    }
}