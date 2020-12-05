<?php

namespace lisa\Page\Functional;

use lisa\FunctionalTester;

class Request extends FunctionalTester
{
    public static $tabs =
        ['index', 'new', 'in-check', 'require-changes', 'declined', 'wait-work',
            'in-work', 'on-hold', 'completed', '', '', 'closed', 'observable', 'cross-check'];

    public function amOnTable(string $filter = null)
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
    public static function requestInTable(int $tableRow, string $columnName, string $text)
    {
        return '//table[@class="kv-grid-table table table-bordered table-striped"]' .
            '/tbody/tr[' . $tableRow . ']/td[@data-col-seq="' . $columnName . '"]//*[contains(text(),"' . $text . '")]';
    }

    /**Поле поиска в заголовке колонки с готовым списком вариантов*/
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

    /**Поле поиска в заголовке колонки без готового списка вариантов*/
    public static function columnSearchFieldNotList(string $fieldName)
    {
        return "//thead//td//select[@name='RequestSearch[$fieldName]']/..//span[@role='combobox']";
    }

    /**Поле поиска в заголовке колонки без готового списка вариантов после выбора результата*/
    public static function columnSearchFieldNotListAfterResult(string $fieldName, string $result)
    {
        return Request::columnSearchFieldNotList($fieldName) . "/span[@title='$result' and text()='$result']";
    }

    /**Кнопка сброса фильтра в заголовке колонки*/
    public static function searchNotListClearButton(string $fieldName, string $result)
    {
        return Request::columnSearchFieldNotListAfterResult($fieldName, $result) . "/span[@title='Удалить все элементы' and text()='×']";
    }

    /**Поле ввода текста для поиска в заголовке колонки без готового списка вариантов*/
    public static $search = '//span/input[@class="select2-search__field"]';

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

    /**Иконка родительской заявки*/
    public static function parentRequest(int $tableRow, string $page = null)
    {
        return $page == null ?
            "//tbody/tr[$tableRow]//td/a[@title='Родительская заявка']" :
            "//tbody/tr[$tableRow]//td/a[@href='$page' and @title='Родительская заявка']" ;
    }

    /**Иконка дочерних заявок*/
    public static function childRequest(int $tableRow, string $page = null)
    {
        return $page == null ?
            "//tbody/tr[$tableRow]//td/a[@title='Дочерние заявки']" :
            "//tbody/tr[$tableRow]//td/a[@href='$page' and @title='Дочерние заявки']";
    }

    /**Фото загружены*/
    public static function photoLoadStatus($tableRow)
    {
        return "//tbody/tr[$tableRow]//td/i[@title='Фото загружены']";
    }

    /**Вложения*/
    public static function attachments($tableRow)
    {
        return "//tbody/tr[$tableRow]//td/i[@title='В заявке есть прикрепленные файлы']";
    }

    /**Подсвечивающаяся запись*/
    public static function toCorrection($tableRow)
    {
        return "//tbody/tr[$tableRow][@class='border-hover correction-color request-grid']";
    }
}