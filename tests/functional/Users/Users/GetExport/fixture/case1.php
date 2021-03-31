<?php

return [
    "lisa_fixtures" => [
        "roles" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/roles.php',
        "public.teams" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/teams.php',
    ],
];