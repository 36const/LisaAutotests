<?php

return [
    "lisa_fixtures" => [
        "cross_check_filters" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/cross_check_filters.php',
        "public.teams" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/teams.php',
    ],
];