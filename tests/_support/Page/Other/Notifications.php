<?php

namespace lisa\Page\Other;

class Notifications
{
    public static function toogleStatusButton(int $id, string $okOrRepeat)
    {
        return "//a[@class='glyphicon glyphicon-$okOrRepeat fa-2x' and @href='/bpm/notification/toggle-status?id=$id']";
    }

    public static $markAllButton = '//ul/a[@href="/bpm/notification/mark-all-as-read"]';
    public static $settingsButton = '//ul/a[@href="/bpm/notification-settings/update"]';

    public static $notifMenu = '//li[@id="lisa-notify-dropdown"]';
    public static $notifAllIsRead = "//li[@id='lisa-notify-dropdown']//ul[text()='Новых нотификаций нет. Дотыкались.']";

    public static function notifMenuTotal(int $count)
    {
        return "//span[@id='total-notifications-small' and text()=$count]";
    }

    public static function notifMenuMessage(int $id)
    {
        return self::$notifMenu . "//ul//div[@id='notification-$id']";
    }

    public static function notifMenuMessageAction(int $id)
    {
        return self::notifMenuMessage($id) . "//div[@class='lisa-notification-actions']/a";
    }

    public static function notifMenuFootButton(string $button)
    {
        return self::$notifMenu . "//li[@class='footer no-padding']//a[text()='$button']";
    }

}
