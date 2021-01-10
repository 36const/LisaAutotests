<?php

namespace lisa\Page\Requests;

use lisa\FunctionalTester;

class Request extends FunctionalTester
{
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

    public static $modal_supervisor_id = "//form[@id='appoint-supervisor-form']//*[@name='Request[supervisor_id]']/..//span";
    public static $modal_manager_id = "//form[@id='appoint-manager-form']//*[@name='Request[manager_id]']/..//span";

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

    /**Блок кнопок изменения статуса в таблице заявок и самой заявке*/
    public static function transferButton(string $action)
    {
        return "//div[@class='buttons-background']//*[contains(@class, 'btn')][contains(text(), '$action')]";
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


    //****** Колонки с готовым списком значений ******//

    /**Поле поиска в заголовке колонки с готовым списком вариантов*/
    public static function columnSearchField(string $fieldName)
    {
        return "//thead//td//select[@name='RequestSearch[$fieldName][]']/..//ul";
    }

    /**Чекбокс "Выбрать все" в заголовке колонки с готовым списком вариантов*/
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


    //****** Колонки с поиском значений, без готового списка ******//

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

    /**Кнопка сброса фильтра в заголовке колонки без готового списка вариантов*/
    public static function searchNotListClearButton(string $fieldName, string $result)
    {
        return Request::columnSearchFieldNotListAfterResult($fieldName, $result) . "/span[@title='Удалить все элементы' and text()='×']";
    }


    //****** Колонки с поиском значений, без готового списка ******//

    /**Поле поиска по диапазону дат*/
    public static function columnSearchFieldDates(string $fieldName)
    {
        return "//input[@name='RequestSearch[$fieldName]']";
    }

    /**Дата*/
    public static function dateSetting(int $day)
    {
        return "//div[@class='daterangepicker ltr show-calendar opensright'][@style]//tbody//td[text()='$day']";
    }

    /**Итоговый диапазон внизу выпадающего календаря*/
    public static function calendarDateRange()
    {
        return "//div[@class='daterangepicker ltr show-calendar opensright'][@style]//div[@class='drp-buttons']//span[text()='" . date("Y-m") . "-01 00:00:00to" . date("Y-m") . "-14 23:59:00']";
    }

    /**Итоговый диапазон в поле поиска*/
    public static function searchDateRange(string $fieldName)
    {
        return "//input[@name='RequestSearch[$fieldName]' and @value='" . date("Y-m") . "-01 00:00:00to" . date("Y-m") . "-14 23:59:00']";
    }

    /**Кнопка подтверждения выбранного диапазона дат*/
    public static $searchDatesApplyButton = "//div[@class='daterangepicker ltr show-calendar opensright'][@style]//div[@class='drp-buttons']//button[text()='Подтвердить']";

    /**Кнопка сброса фильтра даты в заголовке колонки*/
    public static function searchDatesClearButton(string $fieldName)
    {
        return "//a[@id='clear-date' and @value='RequestSearch[$fieldName]']";
    }


    //****** Иконки в колонке id заявки ******//

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

    /**Иконка фото загружены*/
    public static function photoLoadStatus(int $tableRow)
    {
        return "//tbody/tr[$tableRow]//td/i[@title='Фото загружены']";
    }

    /**Иконка вложений*/
    public static function attachments(int $tableRow)
    {
        return "//tbody/tr[$tableRow]//td/i[@title='В заявке есть прикрепленные файлы']";
    }

    /**Подсвечивающаяся запись*/
    public static function toCorrection(int $tableRow)
    {
        return "//tbody/tr[$tableRow][@class='border-hover correction-color request-grid']";
    }


    //****** Настройки таблицы ******//

    /**Кнопка настроек таблицы*/
    public static $personalSettings = "//div[@class='buttons-background']//button[@title='Персонализировать настройки таблицы']";

    /**Поле поиска колонок*/
    public static $searchColumns = "//div[@id='lisa-grid-config-form']//input[@id='column-search']";

    /**Скрытые колонки*/
    public static $hiddenColumns = "//div[@id='lisa-grid-config-form']//ul[contains(@class, 'sortable-hidden')]//li";

    /**Видимые колонки*/
    public static $visibleColumns = "//div[@id='lisa-grid-config-form']//ul[contains(@class, 'sortable-visible')]//li";

    /**Кнопка перевода колонки из скрытых в видимые*/
    public static function hiddenToVisible(string $columnName)
    {
        return Request::$hiddenColumns . "[@value='$columnName']//button[@class='btn btn-default sort-vis-button pull-left']";
    }

    /**Кнопка перевода колонки из видимых в скрытые*/
    public static function visibleToHidden(string $columnName)
    {
        return Request::$visibleColumns . "[@value='$columnName']//button[@class='btn btn-default sort-hid-button pull-right']";
    }

    /**Кнопка сохранения настроек*/
    public static $submitSettings = "//div[@class='modal-footer']//button[@id='lisa-grid-submit']";

    /**Кнопка сброса настроек*/
    public static $deleteSettings = "//div[@class='modal-footer']//button[@id='lisa-grid-delete']";

    /**Чекбокс открытия заявки в новой вкладке*/
    public static $checkboxNewTab = "//div[@class='modal-footer']//input[@id='new-window-opening']";
}