<?php

return [
    "lisa_fixtures" => [
        "default_role_permissions" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/default_role_permissions.php',
        "roles" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/roles.php',
        "public.teams" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/teams.php',
        "user_changing_history" => [],
    ],

    "gomer_fixtures" => [
        "users" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'gomer_fixtures/users.php',
    ],
];