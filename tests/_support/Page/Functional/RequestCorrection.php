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
     * Проверка html-полей и их значений в форме ошибок для менеджера
     * @param $requestBody
     */
    public function checkFields($requestBody)
    {
        $I = $this;
        $errors = null;

        foreach ($requestBody as $field => $value) {
            try {
                ($value == '') || in_array($field, ['_csrf-backend', 'RequestField[121]', 'RequestField[65]']) ?:
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