<?php

namespace lisa\Page\Reports;

class Dashboard
{
    public static function type(string $option = null): string
    {
        return $option ?
            "//select[@name='Dashboard[type]']/option[@value='$option'][@selected]" :
            "//select[@name='Dashboard[type]']";
    }

    public static function display(string $option = null): string
    {
        return $option ?
            "//select[@name='Dashboard[display]']/option[@value='$option'][@selected]" :
            "//select[@name='Dashboard[display]']";
    }

    //общие дашборды
    public static function member(string $option = null): string
    {
        return $option ?
            "//select[@name='Dashboard[member]']/option[@value='$option'][@selected]" :
            "//select[@name='Dashboard[member]']";
    }

    public static function status(string $option = null): string
    {
        return $option ?
            "//select[@name='Dashboard[status]']/option[@value='$option'][@selected]" :
            "//select[@name='Dashboard[status]']";
    }

    public static function date(string $value = null): string
    {
        return $value ?
            "//input[@name='Dashboard[date]' and @value='$value']" :
            "//input[@name='Dashboard[date]']";
    }

    public static function statusColumn($i): string
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
            'active-managers'
        ][$i];
    }

    public static function activeManagersColumn(int $row): string
    {
        return "//table[@class='table table-bordered']/tbody/tr[$row]/td[@data-name='active-managers']";
    }

    public static function common(int $row, int $statusCol, int $requestsOrGoods): string
    {
        return "//table[@class='table table-bordered']/tbody/tr[$row]/td[@data-name='" . self::statusColumn($statusCol)
            . "[" . self::objectColumn($requestsOrGoods) . "]']";
    }

    //общие дашборды по датам
    public static function dateColumn($i): string
    {
        return ['oldest', 'newest', 'leg'][$i];
    }

    public static function commonDate(int $row, int $statusCol, int $age, int $requestId): string
    {
        return "//table[@class='table table-bordered']/tbody/tr[$row]/td[@data-name='" . self::statusColumn($statusCol)
            . "[" . self::dateColumn($age) . "]']/a[@href='/bpm/request/view?id=$requestId']";
    }

    public static function commonDateLeg(int $row): string
    {
        return "//table[@class='table table-bordered']/tbody/tr[$row]/td[@data-name='new[lag]']";
    }

    public static function commonDateLegValue(string $oldest): float
    {
        return round((strtotime(date("Y-m-d")) - strtotime($oldest))/60/60/24);
    }

    //детальные дашборды
    public static function amountColumns($i): string
    {
        return ['begin-of-day', 'on-date', 'today'][$i];
    }

    public static function objectColumn($i): string
    {
        return ['requests', 'goods'][$i];
    }

    public static function detail(int $row, int $amountCol, int $requestsOrGoods): string
    {
        return "//table[@class='table table-bordered']/tbody/tr[$row]/td[@data-name='" . self::amountColumns($amountCol)
            . "[" . self::objectColumn($requestsOrGoods) . "]']";
    }

}