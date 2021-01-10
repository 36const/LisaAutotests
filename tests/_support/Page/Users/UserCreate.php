<?php

namespace lisa\Page\Users;

class UserCreate
{
    public static $saveButton = '//button[@type="submit" and text()=" Сохранить"]';

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