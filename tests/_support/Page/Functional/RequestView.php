<?php

namespace lisa\Page\Functional;

use lisa\FunctionalTester;

class RequestView extends FunctionalTester
{
    public function amOnView(int $id)
    {
        $I = $this;
        $I->amOnPage("/bpm/request/view?id=$id");
    }

    /**
     * Поля, которые нужно проверять не через input-атрибут value,
     * а через содержимое самого поля
     */
    public $textFields = [
        //основная информация
        'Request[id]',
        'Request[type_id]',
        'Request[status]',
        'Request[created_at]',
        //даты
        'Request[planned_start_date]',
        'Request[planned_finish_date]',
        'Request[actual_start_date]',
        'Request[actual_finish_date]',
        'Request[supervisor_process_date]',
        'Request[supervisor_check_date]',
        //коэффициенты
        'RequestField[52]',
        'RequestField[53]',
        'RequestField[54]',
        'RequestField[114]',
        //рассчитанные количества
        'RequestField[49]',
        'RequestField[50]',
        'RequestField[51]',
        'RequestField[55]',
        'RequestField[56]',
        'RequestField[57]',
        'RequestField[58]',
        'RequestField[59]',
        'RequestField[60]',
        'RequestField[61]',
        'RequestField[101]',
        'RequestField[122]',
        //ошибки
        'RequestErrors[\d+][\d+][errorsCount]',
        'RequestErrors[\d+][\d+][itemsCount]',
    ];

    /**
     * Колонки таблиц БД, значения которых не нужно проверять в html
     */
    public $unsetFields = [
        'direction',
        'awaiting_correction',
        'attachments',
        'reason_id',
        'reason',
        'parent_id',
        'difficulty',
        'team_direction',
        'report_period_id',
        'sync_source_id',

        'planned_start_date',
        'planned_finish_date',
        'actual_start_date',
        'actual_finish_date',
        'supervisor_process_date',
        'supervisor_check_date',

        'request_id',
        '64',
    ];

    /**
     * Перевод массивов для проверки БД в массив тегов для проверки html
     * и исключение из него полей, не отображающихся на странице
     * @param $dbTablesArray
     * @param $otherTypesFields
     * @return array
     */
    public function convertDbArrays($dbTablesArray, $otherTypesFields)
    {
        $fields = [];

        foreach ($dbTablesArray as $dbName) {
            foreach ($dbName as $tableName => $tableData) {
                foreach ($tableData as $tableRow) {
                    foreach ($tableRow as $column => $value) {

                        if ($tableName == 'requests') {
                            ($column != 'sv_report_periods' && $value != null) ?:
                                $value = json_decode($value, true)['1'];

                            in_array($column, $this->unsetFields) ?:
                                ($column == 'sv_report_periods' ?
                                    $fields['Request[' . $column . '][]'] = $value :
                                    $fields['Request[' . $column . ']'] = $value);
                        }

                        if ($tableName == 'requests_fields') {
                            $tableRow['value'] != null ?: $tableRow['value'] = 0;

                            in_array($tableRow['field_id'], $this->unsetFields) ?:
                                $fields['RequestField[' . $tableRow['field_id'] . ']'] = $tableRow['value'];
                        }
                    }

                    if ($tableName == 'requests' && $tableRow['direction'] == 2)
                        unset($fields['Request[category_id]']);
                }
            }

            if ($fields['Request[type_id]'] == 1)
                unset($fields['RequestField[50]']);

            if (in_array($fields['Request[type_id]'], [2, 3, 5, 6, 12]))
                unset($fields['RequestField[49]']);

            if (!empty($otherTypesFields))
                foreach ($otherTypesFields as $otherTypesField)
                    unset($fields[$otherTypesField]);

            return $fields;
        }
    }

    /**
     * Проверка html-полей и их значений в форме заявки
     * @param $dbTablesArray
     */
    public function checkFields($dbTablesArray, $otherTypesFields = [])
    {
        $I = $this;
        $errors = null;
        $fields = $this->convertDbArrays($dbTablesArray, $otherTypesFields);

        foreach ($fields as $field => $value) {
            try {
                in_array($field, $this->textFields) ?
                    $I->seeElement('//form[@id="update_form"]//*', ['name' => $field, 'value' => $value]) :
                    $I->seeInField($field, $value);
            } catch (\Exception $exception) {
                $errors[] = [
                    'field' => $field,
                    'value' => $value,
                    'message' => $exception->getMessage()
                ];
            }
        }

        return $errors;
    }
}