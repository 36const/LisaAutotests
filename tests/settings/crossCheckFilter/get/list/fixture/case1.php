<?php

use Codeception\Module\TestHelper;

return [
    'lisa_fixtures' => [
        'cross_check_filters' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/cross_check_filters.php',
        'report_periods' => [
            [
                //'id' => 1,
                'begin' => '2020-01-01 00:00:00',
                'end' => '2020-03-31 00:00:00',
                'created_at' => '2021-01-01 00:00:00',
                'updated_at' => null,
            ],
            [
                //'id' => 2,
                'begin' => '2020-04-01 00:00:00',
                'end' => '2020-06-30 00:00:00',
                'created_at' => '2021-01-01 00:00:00',
                'updated_at' => null,
            ],
            [
                //'id' => 3,
                'begin' => '2020-07-01 00:00:00',
                'end' => '2020-09-30 00:00:00',
                'created_at' => '2021-02-01 00:00:00',
                'updated_at' => '2021-07-01 17:01:01',
            ],
            [
                //'id' => 4,
                'begin' => '2020-10-01 00:00:00',
                'end' => '2020-12-31 00:00:00',
                'created_at' => '2021-03-01 00:00:00',
                'updated_at' => '2021-09-01 19:01:01',
            ],
        ],
        'categories' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/categories.php',
        'difficulty_coefs' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/difficulty_coefs.php',
        'field_values' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/field_values_prod.php',
        'markets_supervisors' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/markets_supervisors.php',
        'priorities' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/priorities.php',
        'rozetka_categories' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/rozetka_categories.php',
    ],
];