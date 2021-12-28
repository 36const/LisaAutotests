<?php

namespace lisa\Page\Users;

class User
{
    public const SAVE_BUTTON = '//form/..//button/span[contains(text(),"Сохранить")]';
    public const SUBORDINATES_BUTTON = '//form/..//button/span[contains(text(),"Подчиненные")]';

    public static function field(string $fieldName): string
    {
        return "//form//div/label[text()='$fieldName']/..";
    }

    public static function permission(string $groupName, string $permissionName = null): string
    {
        return $permissionName
            ? "//form//button[contains(text(), '$groupName')]/..//label[text()='$permissionName']/../div/input"
            : "//form//button[contains(text(), '$groupName')]";
    }

    public static function requestsAccess(string $itemName = null): string
    {
        return $itemName
            ? "//div/div[text()='Доступы отображения списка заявок']/..//div/label[text()='$itemName']/.."
            : "//div/div[text()='Доступы отображения списка заявок']";
    }
}