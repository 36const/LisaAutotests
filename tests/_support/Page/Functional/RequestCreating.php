<?php
namespace lisa\Page\Functional;

use lisa\FunctionalTester;

class RequestCreating extends FunctionalTester
{
    // include url of current page
    public static $URL = '';
    public static $allCheckbox = "//*[@class='attachments-update']//label";

    /**
     * Declare UI map for this page here. CSS or XPath allowed.
     * public static $usernameField = '#username';
     * public static $formSubmitButton = "#mainForm input[type=submit]";
     */

    /**
     * Basic route example for your current URL
     * You can append any additional parameter to URL
     * and use it in tests like: Page\Edit::route('/123-post');
     */
    public static function route($param)
    {
        return static::$URL.$param;
    }

    public function amOnRequestCreating(int $type, int $direction)
    {
        $I = $this;
        $I->amOnPage("/bpm/request/create-by-type?typeId=$type&direction=$direction");
    }

    //TODO реализовать через sprintf() https://www.php.net/manual/ru/function.sprintf.php
    public function findCheckbox($name)
    {
        return "//*[@class='attachments-update']//*[text()=\" $name\"]";
    }

    public function grabAllCheckboxes()
    {
        $I = $this;
        return $I->grabMultiple("//*[@class='attachments-update']//label");
    }

}
