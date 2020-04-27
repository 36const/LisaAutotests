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

    public function checkFields($requestBody)
    {
        $I = $this;

        foreach ($requestBody as $field => $value) {
            ($field == '_csrf-backend') || stripos($field, 'comment') ?:
                $I->seeInField($field, $value);
        }
    }
}