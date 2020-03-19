<?php

namespace lisa;

use Codeception\Util\HttpCode;
use rzk\TestHelper;

/**
 * Inherited Methods
 * @method void wantToTest($text)
 * @method void wantTo($text)
 * @method void execute($callable)
 * @method void expectTo($prediction)
 * @method void expect($prediction)
 * @method void amGoingTo($argumentation)
 * @method void am($role)
 * @method void lookForwardTo($achieveValue)
 * @method void comment($description)
 * @method void pause()
 *
 * @SuppressWarnings(PHPMD)
 */
class FunctionalTester extends \Codeception\Actor
{
    use _generated\FunctionalTesterActions;

    public function loadDataForTest(\Codeception\Example $data, TestHelper $testHelper)
    {
        $I = $this;
        $testHelper->loadFixtureAndMock($I, $data);
        $I->wantTo($data['setting']['description']);
    }

    public function login()
    {
        $I = $this;
        $I->amOnPage('/');

        $I->fillField("LoginForm[username]", "test");
        $I->fillField("LoginForm[password]", "!23qweASD");
        $I->checkOption(['id' => 'loginform-isbasicauth']);
        $I->click("login-button");

        $I->seeInTitle("Добро пожаловать");
    }

    public function checkboxInCreatingPage($name)
    {
        return "//*[@class='attachments-update']//*[text()=\" $name\"]";
    }

    public function allCheckboxesNamesInCreatingPage()
    {
        $I = $this;
        return $I->grabMultiple("//*[@class='attachments-update']//label");
    }


    /**
     * Define custom actions here
     */
}
