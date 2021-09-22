<?php

use Codeception\Module\TestHelper;

return [
    'lisa_fixtures' => [
        'auth.api_users' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.api_users.php',
        'auth.users' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.users.php',
        'auth.auth_item' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.auth_item.php',
        'auth.auth_assignment' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.auth_assignment.php',
        'auth.teams' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.teams.php',
        'auto_diff_conditions' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auto_diff_conditions.php',
        'auto_diff_sets' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auto_diff_sets.php',
        'categories' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/categories.php',
        'difficulty_coefs' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/difficulty_coefs.php',
        'excluded_fields' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/excluded_fields.php',
        'field_values' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/field_values_prod.php',
        'formula_coefs' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/formula_coefs.php',
        'goods_in_groups_coefs' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/goods_in_groups_coefs.php',
        'markets_supervisors' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/markets_supervisors.php',
        'priorities' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/priorities.php',
        'reasons' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/reasons.php',
        'request_attachments' => [],
        'request_errors' => [],
        'rozetka_categories' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/rozetka_categories.php',
        'observers' => []
    ],
//    'gomer_fixtures' => [
//        'users' => (include TestHelper::getFixtureTempleteDefaultPath() . 'gomer_fixtures/users.php'),
//    ]
];