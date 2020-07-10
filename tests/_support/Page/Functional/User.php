<?php

namespace lisa\Page\Functional;

use lisa\FunctionalTester;

class User extends FunctionalTester
{
    public function amOnUserUpdate(int $id)
    {
        $I = $this;
        $I->amOnPage("/bpm/user/update?id=$id");
    }

    public function amOnUsers()
    {
        $I = $this;
        $I->amOnPage("/bpm/user");
    }

    /**
     * Проверка чекбоксов пермишенов на странице пользователя
     */
    public function checkCheckboxes($requestBody)
    {
        $I = $this;

        foreach ($requestBody as $field => $value) {
            if (strpos($field, 'UserBpm[userPermissions]') !== false && $value == '1') {
                $I->canSeeCheckboxIsChecked($field, $value);
            }
        }
    }
}