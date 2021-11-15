<?php

namespace lisa\Page\Requests;

class Request
{
    public static $globalCaption = "//h1[@class='global-caption']";
    public static $emptyTable = '//table[@class="kv-grid-table table table-bordered table-striped"]' .
                                '/tbody//div[@class="empty" and text()="Ничего не найдено."]';
    public static $paginator = '//ul[@class="pagination"]';

    public static $modal_supervisor_id = "//form[@id='appoint-supervisor-form']//*[@name='Request[supervisor_id]']/..//span";
    public static $modal_manager_id = "//form[@id='appoint-manager-form']//*[@name='Request[manager_id]']/..//span";

    /**Общее количество заявок в названии вкладки*/
    public static function statusTabsCounter(int $tabNumber, int $tabCounter): string
    {
        return "//ul[@class='nav nav-tabs']/li[$tabNumber]/a/span[@class='tab-counter'][text()=' ($tabCounter)']";
    }

    /**Общее количество отфильтрованных заявок*/
    public static function tableSummary($summary): string
    {
        return "//div[@class='summary']/b/..//*[text()='$summary']";
    }

    /**Диапазон количества показанных заявок*/
    public static function tableFromTo(string $diapason): string
    {
        return "//div[@class='summary']/b[text()='$diapason']";
    }

    /**Строка заявки в таблице*/
    public static function requestInTable(int $tableRow, string $columnName, string $text): string
    {
        return '//table[@class="kv-grid-table table table-bordered table-striped"]' .
            '/tbody/tr[' . $tableRow . ']/td[@data-col-seq="' . $columnName . '"]//*[contains(text(),"' . $text . '")]';
    }

    /**Строка заявки в таблице без указания номера строки*/
    public static function requestInTableInexact(string $columnName, string $text): string
    {
        return "//tbody/tr/td[@data-col-seq='$columnName']//*[contains(text(), '$text')]";
    }

    /**Заголовки колонок таблицы*/
    public static function columnName(string $columnName, string $text): string
    {
        return "//thead/tr/th[@data-col-seq='$columnName']/..//*[contains(text(),'$text')]";
    }

    /**Блок кнопок изменения статуса в таблице заявок и самой заявке*/
    public static function transferButton(string $action): string
    {
        return "//div[@class='buttons-background']//*[contains(@class, 'btn')][contains(text(), '$action')]";
    }

    /**Страница таблицы*/
    public static function tablePage(string $page): string
    {
        return "//ul[@class='pagination']//li/a[text() = '$page']";
    }


    //****** Колонки с готовым списком значений ******//

    /**Поле поиска в заголовке колонки с готовым списком вариантов*/
    public static function columnSearchField(string $fieldName): string
    {
        return "//thead//td//select[@name='RequestSearch[$fieldName][]']/..//ul";
    }

    /**Чекбокс "Выбрать все" в заголовке колонки с готовым списком вариантов*/
    public static $columnSelectAll = "//span[@class='select2-dropdown select2-dropdown--below']//span[text()='Выбрать все']";

    /**Значение в выпадающем списке значений в заголовке колонки*/
    public static function columnValueList(string $value): string
    {
        return "//span[@class='select2-results']/ul/li[text()='$value']";
    }

    /**Значение в списке выбранных для поиска значений в заголовке колонки*/
    public static function searchValueList(string $fieldName, string $value): string
    {
        return Request::columnSearchField($fieldName) . "[@class='select2-selection__rendered']/li[text()='$value']";
    }

    /**Кнопка удаления одного значения из фильтра в заголовке колонки*/
    public static function searchValueRemove(string $fieldName, string $value): string
    {
        return Request::searchValueList($fieldName, $value) . "/span[@class='select2-selection__choice__remove']";
    }

    /**Кнопка сброса фильтра в заголовке колонки*/
    public static function searchClearButton(string $fieldName): string
    {
        return "//thead//td//input[@name='RequestSearch[$fieldName]']/..//button[@title='Очистить']";
    }


    //****** Колонки с поиском значений, без готового списка ******//

    /**Поле поиска в заголовке колонки без готового списка вариантов*/
    public static function columnSearchFieldNotList(string $fieldName): string
    {
        return "//thead//td//select[@name='RequestSearch[$fieldName]']/..//span[@role='combobox']";
    }

    /**Поле поиска в заголовке колонки без готового списка вариантов после выбора результата*/
    public static function columnSearchFieldNotListAfterResult(string $fieldName, string $result): string
    {
        return Request::columnSearchFieldNotList($fieldName) . "/span[@title='$result' and text()='$result']";
    }

    /**Кнопка сброса фильтра в заголовке колонки без готового списка вариантов*/
    public static function searchNotListClearButton(string $fieldName, string $result): string
    {
        return Request::columnSearchFieldNotListAfterResult($fieldName, $result) . "/span[@title='Удалить все элементы' and text()='×']";
    }


    //****** Колонки c датами ******//

    /**Поле поиска по диапазону дат*/
    public static function columnSearchFieldDates(string $fieldName): string
    {
        return "//input[@name='RequestSearch[$fieldName]']";
    }

    /**Дата*/
    public static function dateSetting(int $day): string
    {
        return "//div[@class='daterangepicker ltr show-calendar opensright'][@style]//tbody//td[text()='$day']";
    }

    /**Итоговый диапазон внизу выпадающего календаря*/
    public static function calendarDateRange(): string
    {
        return "//div[@class='daterangepicker ltr show-calendar opensright'][@style]//div[@class='drp-buttons']//span[text()='" . date("Y-m-01 00:00:00") . "to" . date("Y-m-14 23:59:00") . "']";
    }

    /**Итоговый диапазон в поле поиска*/
    public static function searchDateRange(string $fieldName): string
    {
        return "//input[@name='RequestSearch[$fieldName]' and @value='" . date("Y-m-01 00:00:00") . "to" . date("Y-m-14 23:59:00") . "']";
    }

    /**Кнопка подтверждения выбранного диапазона дат*/
    public static $searchDatesApplyButton = "//div[@class='daterangepicker ltr show-calendar opensright'][@style]//div[@class='drp-buttons']//button[text()='Подтвердить']";

    /**Кнопка сброса фильтра даты в заголовке колонки*/
    public static function searchDatesClearButton(string $fieldName): string
    {
        return "//a[@id='clear-date' and @value='RequestSearch[$fieldName]']";
    }


    //****** Иконки в колонке id заявки ******//

    /**Иконка родительской заявки*/
    public static function parentRequest(int $tableRow, string $page = null): string
    {
        return $page ?
            "//tbody/tr[$tableRow]//td/a[@href='$page' and @title='Родительская заявка']" :
            "//tbody/tr[$tableRow]//td/a[@title='Родительская заявка']";
    }

    /**Иконка дочерних заявок*/
    public static function childRequest(int $tableRow, string $page = null): string
    {
        return $page ?
            "//tbody/tr[$tableRow]//td/a[@href='$page' and @title='Дочерние заявки']" :
            "//tbody/tr[$tableRow]//td/a[@title='Дочерние заявки']";
    }

    /**Иконка фото загружены*/
    public static function photoLoadStatus(int $tableRow): string
    {
        return "//tbody/tr[$tableRow]//td/i[@title='Фото загружены']";
    }

    /**Иконка вложений*/
    public static function attachments(int $tableRow): string
    {
        return "//tbody/tr[$tableRow]//td/i[@title='В заявке есть прикрепленные файлы']";
    }

    /**Подсвечивающаяся запись*/
    public static function toCorrection(int $tableRow): string
    {
        return "//tbody/tr[$tableRow][@class='border-hover correction-color request-grid']";
    }


    //****** Настройки таблицы ******//

    /**Кнопка настроек таблицы*/
    public const TABLE_SETTINGS = "//div[@id='sticky-toolbar']//button[@title='Настройки таблицы']";

    /**Поле поиска колонок*/
    public const SEARCH_COLUMNS = "//div[text()='Настройка таблицы']/following::div/div[@class='row']/div[@class='col-6'][2]//label[text()='Нажмите сюда для поиска поля...']/following::input";

    /**Скрытые колонки*/
    public const HIDDEN_COLUMNS = "//div[text()='Настройка таблицы']/following::div/div[@class='row']/div[@class='col-6'][2]//div[@class='list-group-item']";

    /**Видимые колонки*/
    public const VISIBLE_COLUMNS = "//div[text()='Настройка таблицы']/following::div/div[@class='row']/div[@class='col-6'][1]//div[@class='list-group-item']";

    /**Кнопка сохранения настроек*/
    public const SAVE_SETTINGS_BUTTON = "//div[text()='Настройка таблицы']/following::div[@class='v-card__actions']/button/span[text()='Сохранить']";

    /**Кнопка сброса настроек*/
    public const DELETE_SETTINGS_BUTTON = "//div[text()='Настройка таблицы']/following::div[@class='v-card__actions']/button/span[text()='Сбросить все']";

    /**Чекбоксы видов открытия заявкок*/
    public const CHECKBOX_CURRENT_TAB = "//div[text()='Настройка таблицы']/following::div[@class='v-card__actions']//label[text()='В той же вкладке']/../div/input";
    public const CHECKBOX_NEW_TAB = "//div[text()='Настройка таблицы']/following::div[@class='v-card__actions']//label[text()='В новой вкладке']/../div/input";
    public const CHECKBOX_NEW_WINDOW = "//div[text()='Настройка таблицы']/following::div[@class='v-card__actions']//label[text()='В новом окне']/../div/input";
}