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

    public static $csrfToken;
    public static $csrfCookie;

    public function login()
    {
        //if (self::$csrfToken == null) {
            $I = $this;
            $I->amOnPage('/');

            $I->fillField("LoginForm[username]", "test");
            $I->fillField("LoginForm[password]", "!23qweASD");
            $I->checkOption(['id' => 'loginform-isbasicauth']);
            $I->click("login-button");

            $I->seeInTitle("Добро пожаловать");

            $I->grabCsrfToken();
            $I->grabCsrfCookie();
            /*$cookie = $I->grabCookie('_csrf-backend');
            $I->haveHttpHeader('Cookie', '_csrf-backend=' . $cookie);*/
        //}
    }

    public function grabCsrfToken()
    {
        $I = $this;
        self::$csrfToken = $I->grabMultiple("//meta[@name='csrf-token']", 'content');
        return self::$csrfToken[0];
    }

    public function grabCsrfCookie()
    {
        $I = $this;
        self::$csrfCookie = $I->grabCookie('_csrf-backend');;
        return self::$csrfCookie;
    }

    public function amOnCreatingPage(int $type, int $direction)
    {
        $I = $this;
        $I->amOnPage("/bpm/request/create-by-type?typeId=$type&direction=$direction");
    }

    public function checkboxInCreatingPage($name)
    {
        return "//*[@class='attachments-update']//*[text()=\" $name\"]";
    }

    public function allCheckboxesInCreatingPage()
    {
        $I = $this;
        return $I->grabMultiple("//*[@class='attachments-update']//label");
    }

    public function validateInDB(string $DBName, string $table, $checkValuesRecords)
    {
        $I = $this;
        $I->amConnectedToDatabase($DBName);
        $I->seeInDatabase($table, $checkValuesRecords);
    }

    public function validateRequestsFieldsInDB($checkValuesRecords)
    {
        $I = $this;
        foreach ($checkValuesRecords as $key => $value) {
            $I->validateInDB('lisa_fixtures', 'requests_fields', $value);
        }
    }

    /**
     * Define custom actions here
     */
}
