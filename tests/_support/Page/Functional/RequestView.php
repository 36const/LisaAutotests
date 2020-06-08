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
     * Поля с готовыми текстовыми значениями (не input), которые нужно проверять
     * не через seeInField, а через seeElement
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
     * Перевод массивов для проверки БД в массив полей для проверки html
     * и исключение из него полей, не отображающихся на странице
     */
    public function convertDbArrays($dbTablesArray, $otherTypesFields)
    {
        $requests = [];

        foreach ($dbTablesArray as $dbName) {
            foreach ($dbName as $tableName => $tableData) {
                foreach ($tableData as $tableRow) {
                    foreach ($tableRow as $column => $value) {

                        if ($tableName == 'requests') {
                            //перевести значение отчётного периода СВ из json
                            ($column != 'sv_report_periods' && $value != null) ?:
                                $value = json_decode($value, true)['1'];

                            in_array($column, $this->unsetFields) ?:
                                ($column == 'sv_report_periods' ?
                                    $requests[$tableRow['id']]['Request[' . $column . '][]'] = $value :
                                    $requests[$tableRow['id']]['Request[' . $column . ']'] = $value);
                        }

                        if ($tableName == 'requests_fields') {
                            //перевести значения параметров null в 0
                            $tableRow['value'] != null ?: $tableRow['value'] = 0;

                            in_array($tableRow['field_id'], $this->unsetFields) ?:
                                $requests[$tableRow['request_id']]['RequestField[' . $tableRow['field_id'] . ']'] = $tableRow['value'];
                        }
                    }
                    //исключить поле category для направления Маркет
                    if ($tableName == 'requests' && $tableRow['direction'] == 2)
                        unset($requests[$tableRow['id']]['Request[category_id]']);
                }
            }

            foreach ($requests as &$request) {

                //исключить поле "Кол-во изменённых товаров" для типа 1
                if ($request['Request[type_id]'] == 1)
                    unset($request['RequestField[50]']);

                //исключить поле "Кол-во добавленных товаров" для типов 2, 3, 5, 6, 12
                if (in_array($request['Request[type_id]'], [2, 3, 5, 6, 12]))
                    unset($request['RequestField[49]']);

                //исключить поля, не отображаемые в новом типе заявки (для кейсов POSTChangeType)
                if (!empty($otherTypesFields)) {
                    foreach ($otherTypesFields as $otherTypesField)
                        unset($request[$otherTypesField]);
                }
            }

            return $requests;
        }
    }

    /**
     * Проверка html-полей и их значений в форме заявки
     */
    public function checkFields($dbTablesArray, $otherTypesFields = [])
    {
        $I = $this;
        $requests = $this->convertDbArrays($dbTablesArray, $otherTypesFields);

        foreach ($requests as $id => $request) {
            $I->amOnView($id);

            foreach ($request as $field => $value) {
                in_array($field, $this->textFields) ?
                    $I->canSeeElement('//form[@id="update_form"]//*', ['name' => $field, 'value' => $value]) :
                    $I->canSeeInField($field, $value);
            }
        }
    }

    /**
     * Проверка html-полей и их значений в форме заявки с предварительной проверкой,
     * есть ли такое поле в форме заявки (для кейсов с пакетным редактированием)
     */
    public function checkFieldsForMassEditing($dbTablesArray)
    {
        $I = $this;
        $requests = $this->convertDbArrays($dbTablesArray, []);

        foreach ($requests as $id => $request) {
            $I->amOnView($id);

            foreach ($request as $field => $value) {
                try {
                    $I->seeElement('//form[@id="update_form"]//*', ['name' => $field]);

                    in_array($field, $this->textFields) ?
                        $I->canSeeElement('//form[@id="update_form"]//*', ['name' => $field, 'value' => $value]) :
                        $I->canSeeInField($field, $value);

                } catch (\Exception $exception) {
                    continue;
                }
            }
        }
    }
}