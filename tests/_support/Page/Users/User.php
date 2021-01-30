<?php

namespace lisa\Page\Users;

use lisa\FunctionalTester;

class User extends FunctionalTester
{
    public function amOnUserUpdate(int $id)
    {
        $I = $this;
        $I->amOnPage("/bpm/user/update?id=$id");
    }

    /**Проверка чекбоксов пермишенов на странице пользователя*/
    public function checkCheckboxes($requestBody)
    {
        $I = $this;

        foreach ($requestBody as $field => $value) {
            if (strpos($field, 'UserBpm[userPermissions]') !== false && $value == '1') {
                $I->canSeeCheckboxIsChecked($field, $value);
            }
        }
    }

    /**Кнопка перехода на страницу незакрытых заявок менеджера*/
    public static function requestsBlockingManagerButton(int $managerId): string
    {
        return "//form//a[@href='/bpm/request/index?RequestSearch%5Bmanager_id%5D=$managerId&RequestSearch%5Bstatus%5D%5B0%5D=6&RequestSearch%5Bstatus%5D%5B1%5D=7&RequestSearch%5Bstatus%5D%5B2%5D=5']";
    }

    /**Сообщение об ограничениях*/
    public static $warningAlert = "//div[@class='alert-warning alert fade in']//text()";

    public static $userStatus = "//form//select[@id='userbpm-status']";
}