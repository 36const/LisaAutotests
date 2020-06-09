<?php

namespace lisa\Page\Functional;

use lisa\FunctionalTester;

class RequestCreate extends FunctionalTester
{
    public static $allCheckboxes = "//*[@class='attachments-update']//label";

    public function amOnRequestCreate(int $type, int $direction)
    {
        $I = $this;
        $I->amOnPage("/bpm/request/create-by-type?typeId=$type&direction=$direction");
    }

    public function findCheckbox($name)
    {
        return "//*[@class='attachments-update']//*[text()=' $name']";
    }

    public function amOnRelatedRequestCreate(int $type, int $direction, int $id)
    {
        $I = $this;
        $I->amOnPage("/bpm/request/create-by-type?typeId=$type&direction=$direction&id=$id");
    }

    /**
     * Колонки таблиц БД, значения которых нужно проверять в html
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
    ];

    /**
     * Перевод массивов для проверки БД в массив полей для проверки html
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
     * Проверка html-полей и их значений
     */
    public function checkFields($tableRow, int $type, int $direction, int $id)
    {
        $I = $this;
        $request = $this->convertDbArrays($tableRow, $id);

        $I->amOnRelatedRequestCreate($type, $direction, $id);

        foreach ($request as $field => $value)
            $I->canSeeInField($field, $value);
    }

}
