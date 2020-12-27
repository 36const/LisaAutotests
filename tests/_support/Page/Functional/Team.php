<?php

namespace lisa\Page\Functional;

use lisa\FunctionalTester;

class Team extends FunctionalTester
{
    public function amOnTeam()
    {
        $I = $this;
        $I->amOnPage("/bpm/team");
    }

    public static $createButton = '//a[@href="/bpm/team/create" and @title="Добавить команду"]/span[text()="Добавить команду"]';

    public static $teamName = '//input[@id="team-name"]';
    public static $teamDirection = '//select[@id="team-direction"]';
    public static $teamStatus = '//select[@id="team-status"]';
    public static $saveButton = '//div[@class="team-form"]//button[text()=" Сохранить"]';

    public static function errorField(string $text) {
        return "//div[@class='team-form']//div[@class='help-block' and text()='$text']";
    }
}