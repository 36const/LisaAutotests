<?php

namespace lisa\Page\Functional;

use lisa\FunctionalTester;

class Dashboard extends FunctionalTester
{
    public function amOnDashboardCommon($url = '')
    {
        $I = $this;
        $I->amOnPage("/bpm/dashboard/common" . $url);
    }

    public function amOnDashboardDetail($url = '')
    {
        $I = $this;
        $I->amOnPage("/bpm/dashboard/detail" . $url);
    }

    public static function type(string $option = null)
    {
        return $option == null ?
            "//select[@name='Dashboard[type]']" :
            "//select[@name='Dashboard[type]']/option[@value='$option'][@selected]";
    }

    public static function display(string $option = null)
    {
        return $option == null ?
            "//select[@name='Dashboard[display]']" :
            "//select[@name='Dashboard[display]']/option[@value='$option'][@selected]";
    }

    public static function member(string $option = null)
    {
        return $option == null ?
            "//select[@name='Dashboard[member]']" :
            "//select[@name='Dashboard[member]']/option[@value='$option'][@selected]";
    }

    public static function status(string $option = null)
    {
        return $option == null ?
            "//select[@name='Dashboard[status]']" :
            "//select[@name='Dashboard[status]']/option[@value='$option'][@selected]";
    }

    public static function date(string $value = null)
    {
        return $value == null ?
            "//input[@name='Dashboard[date]']" :
            "//input[@name='Dashboard[date]' and @value='$value']";
    }
}