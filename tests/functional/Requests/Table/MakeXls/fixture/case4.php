<?php

return [
    "lisa_fixtures" => [
        "requests" => [
            [
                "id" => 11,
                "author_id" => 16,
                "type_id" => 1,
                "supervisor_id" => 5,
                "manager_id" => null,
                "status" => 1,
                "direction" => 2,
                "priority" => 1,
                "awaiting_correction" => 0,
                "created_at" => "2020-01-11 00:00:00",
                "correction_comment" => "https://zabbix3.local/latest.php?groupids%5B%5D=251&hostids%5B%5D=12686&hostids%5B%5D=16666&hostids%5B%5D=16728&hostids%5B%5D=17592&hostids%5B%5D=17607&hostids%5B%5D=17714&hostids%5B%5D=17720&hostids%5B%5D=18537&hostids%5B%5D=19198&application=Memory",
                "amount_to_work" => 10,
                "subject" => "Добавление новых товаров (Работа с товарами Маркетплейса)",
                "description" => "Описание",
                "category_id" => null,
                "seller_id" => 0,
                "recommendations" => null,
                "reason" => "!@#$%^&*()_+`-]'/[;.,}\"?{:>\|<\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ ~!@#$%^&*(250",
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
                "team_direction" => 2,
                "report_period_id" => null,
                "sync_source_id" => null,
                "sv_report_periods" => null,
            ],
        ],
        "requests_fields" => [
            [
                "request_id" => 11,
                "field_id" => 15,
                "value" => "1"
            ],
            [
                "request_id" => 11,
                "field_id" => 19,
                "value" => "1"
            ],
            [
                "request_id" => 11,
                "field_id" => 8,
                "value" => "1"
            ],
            [
                "request_id" => 11,
                "field_id" => 101,
                "value" => 0
            ],
            [
                "request_id" => 11,
                "field_id" => 146,
                "value" => 0
            ],
            [
                "request_id" => 11,
                "field_id" => 122,
                "value" => 0
            ],
            [
                "request_id" => 11,
                "field_id" => 158,
                "value" => 0
            ],
            [
                "request_id" => 11,
                "field_id" => 53,
                "value" => "3"
            ],
            [
                "request_id" => 11,
                "field_id" => 114,
                "value" => "3"
            ],
            [
                "request_id" => 11,
                "field_id" => 49,
                "value" => "0"
            ],
            [
                "request_id" => 11,
                "field_id" => 50,
                "value" => "0"
            ],
            [
                "request_id" => 11,
                "field_id" => 64,
                "value" => "0"
            ],
            [
                "request_id" => 11,
                "field_id" => 51,
                "value" => "0"
            ],
            [
                "request_id" => 11,
                "field_id" => 142,
                "value" => "0"
            ],
            [
                "request_id" => 11,
                "field_id" => 60,
                "value" => "0"
            ],
            [
                "request_id" => 11,
                "field_id" => 143,
                "value" => "0"
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
        "categories" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/categories.php',
        "markets_supervisors" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/markets_supervisors.php',
        "field_values" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/field_values.php',
        "difficulty_coefs" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/difficulty_coefs.php',
        "teams" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/teams.php',
        "roles" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/roles.php',
        "priorities" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/priorities.php',
        "reasons" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/reasons.php',
    ],
    "cooper_fixtures" => [
        "market" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'cooper_fixtures/market.php',
    ]
];