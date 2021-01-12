<?php

namespace lisa\Page\Requests;

use lisa\FunctionalTester;

class RequestToCorrection extends FunctionalTester
{
    public function amOnToCorrection(int $id)
    {
        $I = $this;
        $I->amOnPage("/bpm/request/to-correction?id=$id");
    }

    /**
     * Проверка html-полей и их значений в форме ошибок для супервайзера
     */
    public function checkFields($requestBody)
    {
        $I = $this;

        foreach ($requestBody as $field => $value)
            $I->canSeeInField($field, $value);
    }
}