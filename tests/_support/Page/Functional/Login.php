<?php
namespace lisa\Page\Functional;

use lisa\FunctionalTester;

class Login extends FunctionalTester
{
    // include url of current page
    public static $URL = '';

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

    public function grabCsrfToken()
    {
        $I = $this;
        $csrfToken = $I->grabAttributeFrom("//meta[@name='csrf-token']", 'content');
        return $csrfToken;
    }

    public function grabCsrfCookie()
    {
        $I = $this;
        $csrfCookie = $I->grabCookie('_csrf-backend');
        return $csrfCookie;
    }

    public function login()
    {
        $I = $this;
        $I->amOnPage('/');

        $I->grabCsrfToken();
        $I->grabCsrfCookie();
    }

}
