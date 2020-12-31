<?php

namespace lisa\Page\Functional;

use lisa\FunctionalTester;

class UserCreate extends FunctionalTester
{
    public function amOnUserCreate()
    {
        $I = $this;
        $I->amOnPage("/bpm/user/create");
    }

    public static $saveButton = '//button[@type="submit" and text()=" Сохранить"]';

    /**Список результатов поиска пользователя*/
    public static function searchResult(string $login)
    {
        return "//ul[@class='select2-results__options']//li[contains(text(), '$login')]";
    }

    public static $search = '//input[@class="select2-search__field"]';

    public static $loginField = '//span[@id="select2-userbpm-login-container"]';
    public static $parentField = '//span[@id="select2-userbpm-parent_id-container"]';

    public static $divUserName = '//div[@class="form-group field-userbpm-name"]//*';
    public static $divUserEmail = '//div[@class="form-group field-userbpm-email"]//*';

    public static $divUserLoginError = '//div[@class="form-group field-userbpm-login required has-error"]' .
                                        '//p[text()="Необходимо заполнить «Логин пользователя»."]';
    public static $divUserEmailError = '//div[@class="form-group field-userbpm-email required has-error"]' .
                                        '//p[text()="Необходимо заполнить «Почта пользователя»."]';
    public static $divUserPositionError = '//div[@class="form-group field-userbpm-position required has-error"]' .
                                        '//p[text()="Необходимо заполнить «Должность пользователя»."]';
    public static $divUserTeamError = '//div[@class="form-group field-userbpm-team required has-error"]' .
                                        '//p[text()="Необходимо заполнить «Команда пользователя»."]';
}