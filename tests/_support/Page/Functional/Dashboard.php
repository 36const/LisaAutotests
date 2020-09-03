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

    public static function statusColumn($i)
    {
        return [
            'new',
            'wait-work',
            'in-work',
            'on-hold',
            'completed',
            'declined',
            'require-changes',
            'closed',
            'in-day',
            'not-in-day',
            'active-managers'][$i];
    }

    public static function amountColumns($i)
    {
        return ['begin-of-day', 'on-date', 'today'][$i];
    }

    public static function objectColumn($i)
    {
        return ['requests', 'goods'][$i];
    }

    public static function dateColumn($i)
    {
        return ['oldest', 'newest', 'leg'][$i];
    }

    public static function activeManagersColumn(int $row)
    {
        return "//table[@class='table table-bordered']/tbody/tr[$row]/td[@data-name='active-managers']";
    }

    public static function common(int $row, int $statusCol, int $requestsOrGoods)
    {
        return "//table[@class='table table-bordered']/tbody/tr[$row]/td[@data-name='" . self::statusColumn($statusCol)
            . "[" . self::objectColumn($requestsOrGoods) . "]']";
    }

    public static function detail(int $row, int $amountCol, int $requestsOrGoods)
    {
        return "//table[@class='table table-bordered']/tbody/tr[$row]/td[@data-name='" . self::amountColumns($amountCol)
            . "[" . self::objectColumn($requestsOrGoods) . "]']";
    }

    public static function commonDate(int $row, int $statusCol, int $age, int $requestId)
    {
        return "//table[@class='table table-bordered']/tbody/tr[$row]/td[@data-name='" . self::statusColumn($statusCol)
            . "[" . self::dateColumn($age) . "]']/a[@href='/bpm/request/view?id=$requestId']";
    }

    public static function commonDateLeg(int $row)
    {
        return "//table[@class='table table-bordered']/tbody/tr[$row]/td[@data-name='new[lag]']";
    }

}