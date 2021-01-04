<?php

return [
    "lisa_fixtures" => [
        "requests" => [
            //1
            [
//                "id" => 9,
                "author_id" => 16,
                "type_id" => 2,
                "supervisor_id" => 10,
                "manager_id" => null,
                "status" => 1,
                "direction" => 1,
                "priority" => 3,
                "awaiting_correction" => 0,
                "created_at" => "2020-01-09 00:00:00",
                "correction_comment" => null,
                "amount_to_work" => 10,
                "subject" => "Добавление/изменение информации в существующих товарах (Работа с товарами Розетки)",
                "description" => "Описание",
                "category_id" => 2,
                "seller_id" => 9423,
                "recommendations" => null,
                //"reason_id" => 12,
                "reason" => null,
                "parent_id" => null,
                "planned_start_date" => null,
                "planned_finish_date" => null,
                "actual_start_date" => null,
                "actual_finish_date" => null,
                "supervisor_process_date" => null,
                "supervisor_check_date" => null,
                "result_comment" => null,
                "supervisor_comment" => null,
                "last_change_status_date" => "2020-01-01 00:00:01",
                "team_direction" => 3,
                "report_period_id" => null,
                "sync_source_id" => null,
                "sv_report_periods" => null,
            ],
        ],
        "requests_fields" => [
            [
                "request_id" => 1,
                "field_id" => 1,
                "value" => "1"
            ],
            [
                "request_id" => 1,
                "field_id" => 53,
                "value" => "0"
            ],
            [
                "request_id" => 1,
                "field_id" => 54,
                "value" => "1"
            ],
            [
                "request_id" => 1,
                "field_id" => 52,
                "value" => "3"
            ],
            [
                "request_id" => 1,
                "field_id" => 49,
                "value" => "0"
            ],
            [
                "request_id" => 1,
                "field_id" => 50,
                "value" => "0"
            ],
            [
                "request_id" => 1,
                "field_id" => 64,
                "value" => "0"
            ],
            [
                "request_id" => 1,
                "field_id" => 51,
                "value" => "0"
            ],
            [
                "request_id" => 1,
                "field_id" => 60,
                "value" => "0"
            ],
            [
                "request_id" => 1,
                "field_id" => 21,
                "value" => "5"
            ],
            [
                "request_id" => 1,
                "field_id" => 23,
                "value" => "14"
            ],
            [
                "request_id" => 1,
                "field_id" => 22,
                "value" => "10"
            ],
            [
                "request_id" => 1,
                "field_id" => 24,
                "value" => "17"
            ],
            [
                "request_id" => 1,
                "field_id" => 27,
                "value" => "25"
            ],
            [
                "request_id" => 1,
                "field_id" => 31,
                "value" => "48"
            ],
            [
                "request_id" => 1,
                "field_id" => 25,
                "value" => "20"
            ],
            [
                "request_id" => 1,
                "field_id" => 26,
                "value" => "23"
            ],
            [
                "request_id" => 1,
                "field_id" => 101,
                "value" => 0
            ],
            [
                "request_id" => 1,
                "field_id" => 142,
                "value" => "0"
            ],
            [
                "request_id" => 1,
                "field_id" => 143,
                "value" => "0"
            ],
            [
                "request_id" => 1,
                "field_id" => 146,
                "value" => 0
            ],
            [
                "request_id" => 1,
                "field_id" => 122,
                "value" => 0
            ],
            [
                "request_id" => 1,
                "field_id" => 158,
                "value" => 0
            ],
            [
                "request_id" => 1,
                "field_id" => 159,
                "value" => "1"
            ],
        ],
        "report_periods" => [
            [
                //'id' => 1,
                "begin" => '2020-01-01 00:00:00',
                "end" => '2020-01-31 00:00:00',
                "created_at" => '2020-01-01 00:00:00',
                "updated_at" => null,
            ],
            [
                //'id' => 2,
                "begin" => '2020-02-01 00:00:00',
                "end" => '2020-02-28 00:00:00',
                "created_at" => '2020-01-01 00:00:00',
                "updated_at" => null,
            ],
            [
                //'id' => 3,
                "begin" => '2020-03-01 00:00:00',
                "end" => '2020-03-31 00:00:00',
                "created_at" => '2020-02-01 00:00:00',
                "updated_at" => '2020-07-01 17:01:01',
            ],
            [
                //'id' => 4,
                "begin" => '2020-04-01 00:00:00',
                "end" => '2020-04-30 00:00:00',
                "created_at" => '2020-03-01 00:00:00',
                "updated_at" => '2020-09-01 19:01:01',
            ],
        ],
        "grid_settings" => [],
        "categories" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/categories.php',
        "markets_supervisors" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/markets_supervisors.php',
        "field_values" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/field_values.php',
        "difficulty_coefs" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/difficulty_coefs.php',
        "teams" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/teams.php',
        "priorities" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/priorities.php',
        "reasons" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/reasons.php',
        'requests_reasons' => [
            [
                "request_id" => 1,
                "reason_id" => 12
            ]
        ],
    ],
    "cooper_fixtures" => [
        "market" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'cooper_fixtures/market.php',
    ]
];