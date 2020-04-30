<?php

namespace lisa\Page\Functional;

use lisa\FunctionalTester;

class RequestCorrection extends FunctionalTester
{
    public function amOnCorrection(int $id)
    {
        $I = $this;
        $I->amOnPage("/bpm/request/correction?id=$id");
    }

    /**
     * Поля мотивации СВ, не отображаемые на странице correction
     */
    public $uncheckingSVFields = [
        '_csrf-backend',
        //типы 1, 2, 3, 5, 6
        'RequestField[121]',
        'RequestField[65]',
        //тип 4
        'RequestField[103]',
        'RequestField[95]',
        //типы 9, 10, 11
        'RequestField[104]',
        'RequestField[105]',
        'RequestField[106]',
        //типы 7, 8
        'RequestField[107]',
        'RequestField[109]',
        //тип 13
        'RequestField[102]',
        //тип 14
        'RequestField[108]',
        'RequestField[120]',
        //тип 15
        'RequestField[117]'
    ];

    /**
     * Проверка html-полей и их значений в форме ошибок для менеджера
     * @param $requestBody
     */
    public function checkFields($requestBody)
    {
        $I = $this;
        $errors = null;

        foreach ($requestBody as $field => $value) {
            try {
                ($value == '') || in_array($field, $this->uncheckingSVFields) ?:
                    $I->seeElement('//div[@class="kv-attribute"][1]//*', ['name' => $field, 'value' => $value]);
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