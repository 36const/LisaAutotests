<?php

namespace lisa\Page\Functional;

use lisa\FunctionalTester;

class DifficultyCoef extends FunctionalTester
{
    public function amOnDifficultyCoef()
    {
        $I = $this;
        $I->amOnPage("/bpm/difficulty-coef");
    }

    public static $createButton = '//a[@href="/bpm/difficulty-coef/create" and @title="Добавить коэффициент"]/span[text()="Добавить коэффициент"]';

    public static $requestType = '//select[@id="difficultycoef-type_id"]';
    public static $coef = '//input[@id="difficultycoef-difficulty_coef"]';
    public static $coefStatus = '//select[@id="difficultycoef-status"]';
    public static $saveButton = '//div[@class="difficulty-coef-form"]//button[text()=" Сохранить"]';

    public static function checkbox(int $id)
    {
        return "//div[@class='difficulty-coef-form']//table//input[@name='fields[$id]']/..";
    }

    public static function errorField(string $text) {
        return "//div[@class='difficulty-coef-form']//div[@class='help-block' and text()='$text']";
    }
}