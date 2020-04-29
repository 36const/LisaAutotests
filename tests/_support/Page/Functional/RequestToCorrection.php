<?php

namespace lisa\Page\Functional;

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
     * @param $requestBody
     */
    public function checkFields($requestBody)
    {
        $I = $this;
        $errors = null;

        foreach ($requestBody as $field => $value) {
            try {
                ($field == '_csrf-backend') ?:
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