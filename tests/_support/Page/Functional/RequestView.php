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

    public $tableHttpName = [
        'requests' => 'Request',
        'requests_fields' => 'RequestField'
    ];

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
        //ошибки
        'ErrorsCount[\d+]',
        'ErrorsItemsCount[\d+]',
    ];

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
        'sv_report_periods',

        'planned_start_date',
        'planned_finish_date',
        'actual_start_date',
        'actual_finish_date',
        'supervisor_process_date',
        'supervisor_check_date',

        'request_id',
        '64',
        '101', //temp
        '122', //temp

    ];

    public function checkFields($fields)
    {
        $I = $this;
        unset($fields['_csrf-backend']);
        unset($fields['newStatus']);
        unset($fields['Request[uploadedFiles][]']);
        unset($fields['Request[attachment_folder]']);
        unset($fields['Request[sv_report_periods]']);
        $I->seeInFormFields('form[id=update_form]', $fields);
    }

    public function checkFields2($dbTablesArray)
    {
        $I = $this;

        $fields = [];

        foreach ($dbTablesArray as $tableName => $tableData) {
            foreach ($tableData as $tableRow) {
                foreach ($tableRow as $column => $value) {

                    if ($tableName == 'requests') {
                        in_array($column, $this->unsetFields) ?:
                            $fields[$this->tableHttpName["$tableName"] . '[' . $column . ']'] = $value;
                    }

                    if ($tableName == 'requests_fields') {
                        in_array($tableRow['field_id'], $this->unsetFields) ?:
                            $fields[$this->tableHttpName["$tableName"] . '[' . $tableRow['field_id'] . ']'] = $tableRow['value'];
                    }
                }
            }

            if ($fields['Request[type_id]'] == 1)
                unset($fields['RequestField[50]']);

            if (in_array($fields['Request[type_id]'], [2, 3, 5, 6]))
                unset($fields['RequestField[49]']);
        }

        foreach ($fields as $field => $value) {
            in_array($field, $this->textFields) ?
                $I->seeElement('//form[@id="update_form"]//*', ['name' => $field, 'value' => $value]) :
                $I->seeInField($field, $value);
        }
    }
}