<?php

namespace lisa\Page\Requests;

use lisa\Page\Other\SearchField;

class RequestTable
{
    public const HIDDEN_TABLE_SUMMARY = '//span[@class="counter-wrapper"][text()="......"]';
    public const REASON_IN_STATUS_CHANGE_POPUP = '//div[@role="document"]//div[@role="combobox"]';
    public const COMMENT_IN_STATUS_CHANGE_POPUP = '//div[@role="document"]//textarea';

    /**Общее количество заявок в названии вкладки*/
    public static function statusTabsCounter(int $tabNumber, int $tabCounter): string
    {
        return "//ul[@class='nav nav-tabs']/li[$tabNumber]/a/span[@class='tab-counter'][text()=' ($tabCounter)']";
    }

    /**Общее количество отфильтрованных заявок*/
    public static function tableSummary($summary): string
    {
        return "//div[@class='lisa-request-grid']//span/b[2][text()='$summary']";
    }

    /**Блок кнопок изменения статуса в таблице заявок и самой заявке*/
    public static function transferButton(string $action): string
    {
        return "//div[@id='sticky-toolbar']/header//button[@title='$action']";
    }

    /**Вкладка таблицы заявок*/
    public static function requestsTableTab(string $tabName): string
    {
        return "//div[@role='tablist']//a[text()='$tabName']";
    }

    /**Всплывающая модалка изменения статуса - кнопка*/
    public static function transferPopUp(string $action): string
    {
        return "//div[@role='document']//button/span[text()='$action']";
    }

    /**Страница таблицы*/
    public static function tablePage(string $page): string
    {
        return "//ul[@class='pagination']//li/a[text() = '$page']";
    }


    //****** Поля с готовым списком значений ******//

    /**Значение в выпадающем списке с множественным выбором*/
    public static function columnValueFromList(string $optionTitle): string
    {
        return "//div[@role='listbox']//div[@role='option']//div[@class='v-list-item__title'][text()='$optionTitle']/../..//div[@class='v-simple-checkbox']";
    }

    /**Значение в выпадающем списке с единичным выбором*/
    public static function columnValueFromListSingle(string $optionTitle): string
    {
        return "//div[@role='listbox']/div[@role='option'][contains(text(),'$optionTitle')]";
    }

    /**Поле поиска в заголовке колонки с готовым списком вариантов*/
    public static function columnSearchField(string $fieldName): string
    {
        return "//td[@column='$fieldName']//input";
    }

    /**Выбранное значение в заголовке колонки*/
    public static function selectedValueFromList(string $fieldName, string $optionTitle): string
    {
        return self::columnSearchField($fieldName) . "//preceding-sibling::span/span[text()='$optionTitle']";
    }

    /**Кнопка удаления одного значения из фильтра в заголовке колонки*/
    public static function searchValueRemove(string $fieldName, string $value): string
    {
        return self::columnSearchField($fieldName) . "//preceding-sibling::span/span[text()='$value']/button";
    }

    /**Кнопка сброса фильтра в заголовке колонки*/
    public static function searchClearButton(string $fieldName): string
    {
        return self::columnSearchField($fieldName) . "//preceding-sibling::div[@class='v-input__append-inner']//button";
    }

    /**Поле поиска в заголовке колонки без готового списка вариантов после выбора результата*/
    public static function selectedValueFromSearch(string $fieldName, string $result): string
    {
        return self::columnSearchField($fieldName) . "/preceding-sibling::span/span[text()='$result']";
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