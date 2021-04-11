<?php

return [
    "lisa_fixtures" => [
        "auth.teams" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.teams.php',
        "auth.users" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.users.php',
        "auth.auth_item" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.auth_item.php',
        "auth.auth_item_child" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.auth_item_child.php',
        "auth.auth_assignment" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.auth_assignment.php',
    ],
    "gomer_fixtures" => [
        "users" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'gomer_fixtures/users.php',
    ],
];