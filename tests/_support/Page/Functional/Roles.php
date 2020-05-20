<?php

namespace lisa\Page\Functional;

use lisa\FunctionalTester;

class Roles extends FunctionalTester
{
    public function amOnRoleUpdate(int $id)
    {
        $I = $this;
        $I->amOnPage("/bpm/roles/update?id=$id");
    }

    public function amOnRoles()
    {
        $I = $this;
        $I->amOnPage("/bpm/roles");
    }

    /**
     * Проверка чекбоксов пермишенов на странице должности
     */
    public function checkCheckboxes($requestBody)
    {
        $I = $this;

        foreach ($requestBody as $field => $value) {
            if (strpos($field, 'RoleBpm[rolePermissions]') !== false && $value == '1') {
                $I->canSeeCheckboxIsChecked($field, $value);
            }
        }
    }
}