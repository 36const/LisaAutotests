<?php

return [
    "lisa_fixtures" => [
        "auth.auth_item_child" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.auth_item_child.php',
        "auth.teams" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.teams.php',
        "auth.user_changing_history" => [],
    ],

    "gomer_fixtures" => [
        "users" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'gomer_fixtures/users.php',
    ],
];