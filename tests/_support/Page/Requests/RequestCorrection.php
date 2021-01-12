<?php

namespace lisa\Page\Requests;

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
        //типы 1, 2, 3, 5, 6, 12
        'RequestField[121]',
        'RequestField[65]',
        'RequestField[157]',
        'RequestField[144]',
        //тип 4
        'RequestField[103]',
        'RequestField[95]',
        'RequestField[145]',
        'RequestField[148]',
        //типы 9, 10, 11
        'RequestField[104]',
        'RequestField[105]',
        'RequestField[106]',
        'RequestField[149]',
        'RequestField[150]',
        'RequestField[151]',
        //типы 7, 8
        'RequestField[107]',
        'RequestField[109]',
        'RequestField[152]',
        'RequestField[154]',
        //тип 13
        'RequestField[102]',
        'RequestField[147]',
        //тип 14
        'RequestField[108]',
        'RequestField[120]',
        'RequestField[153]',
        'RequestField[156]',
        //тип 15
        'RequestField[117]',
        'RequestField[155]',
    ];

    /**
     * Проверка html-полей и их значений в форме ошибок для менеджера
     */
    public function checkFields($requestBody)
    {
        $I = $this;

        foreach ($requestBody as $field => $value) {
            ($value == '') || in_array($field, $this->uncheckingSVFields) ?:
                $I->canSeeElement('//div[@class="kv-attribute"]//*', ['name' => $field, 'value' => $value]);
        }
    }
}