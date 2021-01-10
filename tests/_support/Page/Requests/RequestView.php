<?php

namespace lisa\Page\Requests;

use lisa\FunctionalTester;

class RequestView extends FunctionalTester
{
    public function amOnView(int $id, int $cc = 0)
    {
        $I = $this;
        $I->amOnPage("/bpm/request/view?id=$id&forCrossCheck=$cc");
    }

    public static $commonInformation =      "//table[@class='table table-bordered detail-view']//th[text()='Общая информация по задаче']";
    public static $results =                "//table[@class='table table-bordered detail-view']//th[text()='Результат задачи']";
    public static $errors =                 "//table[@class='table table-bordered detail-view']//th/a[text()='Ошибки']";
    public static $errorsCrossCheck =       "//table[@class='table table-bordered detail-view']//th/a[text()='Ошибки (Кросс-чек)']";
    public static $motivationManagers =     "//table[@class='table table-bordered detail-view']//th[text()='Мотивация контент-менеджеры']";
    public static $motivationSupervisors =  "//table[@class='table table-bordered detail-view']//th[text()='Мотивация супервайзеры']/a[text()=' (Зафиксированные данные по отчётным периодам)']";
    public static $motivationCcManagers =   "//table[@class='table table-bordered detail-view']//th[text()='Мотивация кросс-чек менеджера']";
    public static $dates =                  "//table[@class='table table-bordered detail-view']//th[text()='Даты']";
    public static $reportPeriodId =         "//table[@class='table table-bordered detail-view']//th[text()='Отчетный период КМ']";
    public static $svReportPeriods =        "//table[@class='table table-bordered detail-view']//th[text()='Отчетный период СВ']";
    public static $supervisor_comment =     "//table[@class='table table-bordered detail-view']//*[@name='Request[supervisor_comment]']";
    public static $supervisor_id =          "//table[@class='table table-bordered detail-view']//*[@name='Request[supervisor_id]']/..//span";
    public static $manager_id =             "//table[@class='table table-bordered detail-view']//*[@name='Request[manager_id]']/..//span";

    public static $createChangeTypeButton = "//a[@href='/bpm/request/view?id=1&forCrossCheck=0']";
    public static $saveButton = "//button[@id='update-form-save']";
    public static $tabsCheckbox = "//input[@id='tabs-toggle-button']";

    /**Блок результатов поиска в активном поле*/
    public static $searchResults = "//ul[@class='select2-results__options']//li";

    /**Список результатов поиска менеджера*/
    public static function searchCMResult(int $number, string $name)
    {
        return RequestView::$searchResults . "[$number]//span[text() = '$name']";
    }

    /**Список результатов поиска супервайзера*/
    public static function searchSVResult(int $number, string $name)
    {
        return RequestView::$searchResults . "[$number][text() = '$name']";
    }

    public static function findCheckbox(string $name)
    {
        return "//td[@class='checkboxes']//label[text()='$name']/input[@type='checkbox']";
    }

    /**
     * Поля-чекбоксы, которые нужно проверять
     * не через canSeeInField, а через canSeeCheckboxIsChecked
     */
    public $checkboxes = [
        'RequestField[1]',
        'RequestField[2]',
        'RequestField[3]',
        'RequestField[4]',
        'RequestField[5]',
        'RequestField[6]',
        'RequestField[7]',
        'RequestField[8]',
        'RequestField[9]',
        'RequestField[10]',
        'RequestField[11]',
        'RequestField[12]',
        'RequestField[13]',
        'RequestField[14]',
        'RequestField[15]',
        'RequestField[16]',
        'RequestField[17]',
        'RequestField[18]',
        'RequestField[19]',
        'RequestField[123]',
        'RequestField[124]',
        'RequestField[125]',
        'RequestField[126]',
        'RequestField[127]',
        'RequestField[159]',
    ];

    /**
     * Поля с готовыми текстовыми значениями (не input), которые нужно проверять
     * не через canSeeInField, а через canSeeElement
     */
    public $textFields = [
        //основная информация
        'Request[id]',
        'Request[type_id]',
        'Request[status]',
        'Request[created_at]',
        'Request[cross_check_status]',
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
        'RequestField[89]',
        'RequestField[142]',
        'RequestField[143]',
        //общие количества ошибок
        'RequestField[101]',
        'RequestField[122]',
        'RequestField[146]',
        'RequestField[158]',
    ];

    /**
     * Поля с множественными значениями, которые нужно проверять через canSeeInField в foreach
     */
    public $multipleFields = [
        'Request[observers][]',
        'reasons[]'
    ];

    /**
     * Колонки таблиц БД, значения которых не нужно проверять в html
     */
    public $unsetFields = [
        'direction',
        'awaiting_correction',
        'reason_id',
        'reason',
        'parent_id',
        'team_direction',
        'sync_source_id',
        'employee_code_1c',
        'child_count',
        'photo_load_status',

        'created_at',
        'planned_start_date',
        'planned_finish_date',
        'actual_start_date',
        'actual_finish_date',
        'supervisor_process_date',
        'supervisor_check_date',
        'last_change_status_date',

        'request_id',
        '64', //Общее рассчитанное количество показателей
        '89' //Фактические затраты КМ, мин
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

                        //убрать из названия колонки лишние символы
                        if (strpos($column, ' ')) {
                            $column = str_replace([' ', '>', '<', '='], '', $column);
                            $tableRow[$column] = $value;
                        }

                        if ($tableName == 'requests') {
                            //перевести значение отчётного периода СВ из json
                            if ($column == 'sv_report_periods' && $value != null)
                                $value = json_decode($value, true)['1'];

                            in_array($column, $this->unsetFields) ?:
                                ($column == 'sv_report_periods' ?
                                    $requests[$tableRow['id']]['Request[' . $column . '][]'] = $value :
                                    $requests[$tableRow['id']]['Request[' . $column . ']'] = $value);

                            //исключить поле category для направления Маркет
                            if ($tableRow['direction'] == 2)
                                unset($requests[$tableRow['id']]['Request[category_id]']);
                        }
                    }

                    if ($tableName == 'requests_fields') {
                        in_array($tableRow['field_id'], $this->unsetFields) ?:
                            $requests[$tableRow['request_id']]['RequestField[' . $tableRow['field_id'] . ']'] = $tableRow['value'];
                    }

                    if ($tableName == 'requests_reasons')
                        $requests[$tableRow['request_id']]['reasons[]'][] = $tableRow['reason_id'];

                    if ($tableName == 'observers')
                        $requests[$tableRow['request_id']]['Request[observers][]'][] = $tableRow['user_id'];
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
        }

        return $requests;
    }

    /**
     * Проверка html-полей и их значений в форме заявки
     */
    public function checkFields($dbTablesArray, $otherTypesFields = [])
    {
        $I = $this;
        $requests = $I->convertDbArrays($dbTablesArray, $otherTypesFields);

        foreach ($requests as $id => $request) {
            $I->amOnView($id);

            foreach ($request as $field => $value) {

                if (in_array($field, $this->checkboxes)) {
                    $I->canSeeCheckboxIsChecked($field);
                } elseif (in_array($field, $this->textFields)) {
                    $I->canSeeElement('//form[@id="update_form"]//*', ['name' => $field, 'value' => (string)$value]);
                } elseif (in_array($field, $this->multipleFields)) {
                    foreach ($value as $option)
                        $I->canSeeInField($field, $option);
                } else {
                    $I->canSeeInField($field, $value);
                }
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
        $requests = $I->convertDbArrays($dbTablesArray, []);

        foreach ($requests as $id => $request) {
            $I->amOnView($id);

            foreach ($request as $field => $value) {
                try {
                    $I->seeElement('//form[@id="update_form"]//*', ['name' => $field]);

                    if (in_array($field, $this->checkboxes)) {
                        $I->canSeeCheckboxIsChecked($field);
                    } elseif (in_array($field, $this->textFields)) {
                        $I->canSeeElement('//form[@id="update_form"]//*', ['name' => $field, 'value' => (string)$value]);
                    } elseif (in_array($field, $this->multipleFields)) {
                        foreach ($value as $option)
                            $I->canSeeInField($field, $option);
                    } else {
                        $I->canSeeInField($field, $value);
                    }

                } catch (\Exception $exception) {
                    continue;
                }
            }
        }
    }
}