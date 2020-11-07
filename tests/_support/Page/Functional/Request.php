<?php

namespace lisa\Page\Functional;

use lisa\FunctionalTester;

class Request extends FunctionalTester
{
    public static $tabs =
        ['index', 'new', 'in-check', 'require-changes', 'declined', 'wait-work',
            'in-work', 'on-hold', 'completed', '', '', 'closed', 'observable', 'cross-check'];

    public function amOnTable($filter = null)
    {
        $I = $this;
        $I->amOnPage("/bpm/request/$filter");
    }

    public static $globalPath = "//div[@class='global-breadcrumbs']//li[@class='active']";
    public static $globalCaption = "//h1[@class='global-caption']";
    public static $emptyTable = '//table[@class="kv-grid-table table table-bordered table-striped"]' .
                                '/tbody//div[@class="empty" and text()="Ничего не найдено."]';
    public static $paginator = '//ul[@class="pagination"]';

    /**Общее количество заявок в названии вкладки*/
    public static function statusTabsCounter(int $tabNumber, int $tabCounter)
    {
        return "//ul[@class='nav nav-tabs']/li[$tabNumber]/a/span[@class='tab-counter'][text()=' ($tabCounter)']";
    }

    /**Общее количество отфильтрованных заявок*/
    public static function tableSummary($summary)
    {
        return "//div[@class='summary']/b/..//*[text()='$summary']";
    }

    /**Диапазон количества показанных заявок*/
    public static function tableFromTo(string $diapason)
    {
        return "//div[@class='summary']/b[text()='$diapason']";
    }

    /**Строка заявки в таблице*/
    public static function requestInTable($lineNumber, $columnNumber, $text)
    {
        return '//table[@class="kv-grid-table table table-bordered table-striped"]' .
            '/tbody/tr[' . $lineNumber . ']/td[@data-col-seq="' . $columnNumber . '"]//*[text()=' . $text . ']';
    }

    /**Поле поиска в заголовке колонки*/
    public static function columnSearchField(string $fieldName)
    {
        return "//thead//td//select[@name='RequestSearch[$fieldName][]']/..//ul";
    }

    /**Чекбокс "Выбрать все"*/
    public static $columnSelectAll = "//span[@class='select2-dropdown select2-dropdown--below']//span[text()='Выбрать все']";

    /**Значение в выпадающем списке значений в заголовке колонки*/
    public static function columnValueList(string $value)
    {
        return "//span[@class='select2-results']/ul/li[text()='$value']";
    }

    /**Значение в списке выбранных для поиска значений в заголовке колонки*/
    public static function searchValueList(string $fieldName, string $value)
    {
        return Request::columnSearchField($fieldName) . "[@class='select2-selection__rendered']/li[text()='$value']";
    }

    /**Кнопка удаления одного значения из фильтра в заголовке колонки*/
    public static function searchValueRemove(string $fieldName, string $value)
    {
        return Request::searchValueList($fieldName, $value) . "/span[@class='select2-selection__choice__remove']";
    }

    /**Кнопка сброса фильтра в заголовке колонки*/
    public static function searchClearButton(string $fieldName)
    {
        return "//thead//td//input[@name='RequestSearch[$fieldName]']/..//button[@title='Очистить']";
    }

    /**Поле ввода значения для поиска в колонке*/
    public static function columnSearch(string $fieldName)
    {
        return "//thead//td//input[@name='RequestSearch[$fieldName]']/..//span[@class='selection']//span[@class='select2-selection__rendered']";
    }

    /**Блок кнопок изменения статуса в таблице заявок и самой заявке*/
    public static function transferButton(string $action)
    {
        return "//div[@class='buttons-background']//*[contains(text(), '$action')]";
    }

    /**Контекстное меню заявки*/
    public static function contextMenu(string $action)
    {
        return "//tbody//ul[@class='dropdown-menu']//a[contains(text(), '$action')]";
    }

    /**Страница таблицы*/
    public static function tablePage($page)
    {
        return "//ul[@class='pagination']//li/a[text() = '$page']";
    }

}