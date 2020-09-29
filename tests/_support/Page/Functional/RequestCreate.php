<?php

namespace lisa\Page\Functional;

use lisa\FunctionalTester;

class RequestCreate extends FunctionalTester
{
    public static $allCheckboxes = "//div[@class='attachments-update']//label";
    public static $blockedCategory = "//select[@name='Request[category_id]' and @disabled]";

    public static $subject = "//input[@name='Request[subject]']";
    public static $description = "//textarea[@name='Request[description]']";
    public static $amount = "//input[@name='Request[amount_to_work]']";
    public static $plannedFinishDate = "//input[@name='Request[planned_finish_date]']";
    public static $observers = "//select[@name='Request[observers][]']";
    public static $priority = "//select[@name='Request[priority]']";

    public static $createModal = "//div[@id='create_modal']";
    public static $createButton = "//a[@href='/bpm/request']";
    public static $typesList = "//select[@id='types-select' and @name='RequestType']";

    public static function typeSelect($typeId)
    {
        return static::$typesList . "//option[@value=$typeId]";
    }

    public static function checkboxesDirection(int $directionId)
    {
        return "//div[@id='checkboxes-direction']//input[@name='direction' and @value='$directionId']";
    }

    public static $createButtonModal = "//div[@id='create_modal']//button[@id='create-button' and text()='Создать']";

    public function amOnRequestCreate(int $type, int $direction)
    {
        $I = $this;
        $I->amOnPage("/bpm/request/create-by-type?typeId=$type&direction=$direction");
    }

    public static function findCheckbox(string $name, bool $checked = false)
    {
        return $checked ?
            "//div[@class='attachments-update']//label[text()='$name']/input[@checked]" :
            "//div[@class='attachments-update']//label[text()='$name']";
    }

    public function amOnRelatedRequestCreate(int $type, int $direction, int $id)
    {
        $I = $this;
        $I->amOnPage("/bpm/request/create-by-type?typeId=$type&direction=$direction&id=$id");
    }

    /**
     * Колонки таблиц БД, значения которых нужно проверять в html создания связанной заявки
     */
    public $pageFields = [
        'subject',
        'description',
        'category',
        'seller_id',
        'amount_to_work',
        'observers',
        'priority',
        '1',
        '2',
        '4',
        '5',
        '6',
        '7',
        '8',
        '9',
        '10',
        '11',
        '12',
        '13',
        '14',
        '15',
        '16',
        '17',
        '18',
        '19',
        '123',
        '124',
        '125',
        '126',
        '127',
        '159'
    ];

    /**
     * Перевод массивов для проверки БД в массив полей для проверки html создания связанной заявки
     * и исключение из него полей, не отображающихся на странице
     */
    public function convertDbArrays($dbTablesArray, $requestId)
    {
        $requests = [];

        foreach ($dbTablesArray as $dbName) {
            foreach ($dbName as $tableName => $tableData) {
                foreach ($tableData as $tableRow) {
                    foreach ($tableRow as $column => $value) {

                        if (($tableName == 'requests') && ($tableRow['id'] == $requestId)) {
                            if (in_array($column, $this->pageFields)) {
                                $requests['Request[' . $column . ']'] = $value;
                            }
                        }

                        if (($tableName == 'requests_fields') && ($tableRow['request_id'] == $requestId)) {
                            if (in_array($tableRow['field_id'], $this->pageFields)) {
                                $requests['RequestField[' . $tableRow['field_id'] . ']'] = $tableRow['value'];
                            }
                        }
                    }
                }
            }
        }

        return $requests;
    }

    /**
     * Проверка html-полей и их значений на странице создания связанной заявки
     */
    public function checkRelatedRequestFields($tableRow, int $type, int $direction, int $id)
    {
        $I = $this;
        $request = $this->convertDbArrays($tableRow, $id);

        $I->amOnRelatedRequestCreate($type, $direction, $id);

        foreach ($request as $field => $value)
            $I->canSeeInField($field, $value);
    }

}
