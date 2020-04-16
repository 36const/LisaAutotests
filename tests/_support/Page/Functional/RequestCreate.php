<?php
namespace lisa\Page\Functional;

use lisa\FunctionalTester;

class RequestCreate extends FunctionalTester
{
    public static $URL = '';
    public static $allCheckboxes = "//*[@class='attachments-update']//label";

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

    public function amOnRequestCreate(int $type, int $direction)
    {
        $I = $this;
        $I->amOnPage("/bpm/request/create-by-type?typeId=$type&direction=$direction");
    }

    public function findCheckbox($name)
    {
        return "//*[@class='attachments-update']//*[text()=\" $name\"]";
    }

}
