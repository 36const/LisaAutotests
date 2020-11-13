<?php

return [
    "lisa_fixtures" => [
        "requests" => [
            [
                "id" => 11,
                "author_id" => 16,
                "type_id" => 1,
                "supervisor_id" => 5,
                "manager_id" => 11,
                "status" => 6,
                "direction" => 2,
                "priority" => 1,
                "awaiting_correction" => 3,
                "created_at" => "2020-01-11 00:00:00",
                "correction_comment" => "https://zabbix3.local/latest.php?groupids%5B%5D=251&hostids%5B%5D=12686&hostids%5B%5D=16666&hostids%5B%5D=16728&hostids%5B%5D=17592&hostids%5B%5D=17607&hostids%5B%5D=17714&hostids%5B%5D=17720&hostids%5B%5D=18537&hostids%5B%5D=19198&application=Memory",
                "amount_to_work" => 10,
                "subject" => "Добавление новых товаров (Работа с товарами Маркетплейса)",
                "description" => "Описание",
                "category_id" => null,
                "seller_id" => 0,
                "recommendations" => null,
                "reason_id" => null,
                "reason" => "!@#$%^&*()_+`-]'/[;.,}\"?{:>\|<\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ ~!@#$%^&*(250",
                "parent_id" => null,
                "planned_start_date" => null,
                "planned_finish_date" => null,
                "actual_start_date" => '2020-01-01 00:00:03',
                "actual_finish_date" => '2020-01-01 00:00:04',
                "supervisor_process_date" => '2020-01-01 00:00:02',
                "supervisor_check_date" => '2020-01-01 00:00:05',
                "result_comment" => null,
                "supervisor_comment" => null,
                "last_change_status_date" => date("Y-m-d H:i:s", strtotime('-1 day')),
                "team_direction" => 2,
                "report_period_id" => null,
                "sync_source_id" => null,
                "sv_report_periods" => '{"3": "3", "4": "4"}',
            ],
        ],
        "requests_fields" => [
            [
                "request_id" => 11,
                "field_id" => 8,
                "value" => "1"
            ],
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
                "field_id" => 25,
                "value" => "19"
            ],
            [
                "request_id" => 11,
                "field_id" => 49,
                "value" => "90"
            ],
            [
                "request_id" => 11,
                "field_id" => 50,
                "value" => "0"
            ],
            [
                "request_id" => 11,
                "field_id" => 51,
                "value" => "90"
            ],
            [
                "request_id" => 11,
                "field_id" => 53,
                "value" => "3"
            ],
            [
                "request_id" => 11,
                "field_id" => 60,
                "value" => "570"
            ],
            [
                "request_id" => 11,
                "field_id" => 64,
                "value" => "90"
            ],
            [
                "request_id" => 11,
                "field_id" => 65,
                "value" => "30"
            ],
            [
                "request_id" => 11,
                "field_id" => 66,
                "value" => "10"
            ],
            [
                "request_id" => 11,
                "field_id" => 72,
                "value" => "10"
            ],
            [
                "request_id" => 11,
                "field_id" => 73,
                "value" => "10"
            ],
            [
                "request_id" => 11,
                "field_id" => 74,
                "value" => "10"
            ],
            [
                "request_id" => 11,
                "field_id" => 75,
                "value" => "10"
            ],
            [
                "request_id" => 11,
                "field_id" => 93,
                "value" => "10"
            ],
            [
                "request_id" => 11,
                "field_id" => 94,
                "value" => "10"
            ],
            [
                "request_id" => 11,
                "field_id" => 101,
                "value" => "190"
            ],
            [
                "request_id" => 11,
                "field_id" => 114,
                "value" => "3"
            ],
            [
                "request_id" => 11,
                "field_id" => 121,
                "value" => "http://gomer.local/bpm/request/to-correction?id=11"
            ],
            [
                "request_id" => 11,
                "field_id" => 122,
                "value" => "190"
            ],
            [
                "request_id" => 11,
                "field_id" => 142,
                "value" => "0"
            ],
            [
                "request_id" => 11,
                "field_id" => 143,
                "value" => "0"
            ],
            [
                "request_id" => 11,
                "field_id" => 146,
                "value" => null
            ],
            [
                "request_id" => 11,
                "field_id" => 158,
                "value" => null
            ],
        ],
        "request_errors" => [
            [
//                "id" => 1,
                "request_id" => 11,
                "manager_id" => 4,
                "errors_count" => 10,
                "items_with_errors" => 10,
                "field_value_id" => 91,
                "comment" => "http://gomer.local/bpm/request/to-correction?id=11",
                "status" => 1,
                "create_ts" => "2020-09-18 05:57:39",
                "correction_date" => "2020-09-18 06:57:39"
            ],
            [
//                "id" => 2,
                "request_id" => 11,
                "manager_id" => 11,
                "errors_count" => 10,
                "items_with_errors" => 10,
                "field_value_id" => 89,
                "comment" => "http://gomer.local/bpm/request/to-correction?id=11",
                "status" => 1,
                "create_ts" => "2020-09-18 05:57:39",
                "correction_date" => "2020-09-18 06:57:39"
            ],
            [
//                "id" => 3,
                "request_id" => 11,
                "manager_id" => 11,
                "errors_count" => 10,
                "items_with_errors" => 10,
                "field_value_id" => 75,
                "comment" => "http://gomer.local/bpm/request/to-correction?id=11",
                "status" => 1,
                "create_ts" => "2020-09-18 05:57:39",
                "correction_date" => "2020-09-18 06:57:39"
            ],
            [
//                "id" => 4,
                "request_id" => 11,
                "manager_id" => 11,
                "errors_count" => 10,
                "items_with_errors" => 10,
                "field_value_id" => 74,
                "comment" => "http://gomer.local/bpm/request/to-correction?id=11",
                "status" => 1,
                "create_ts" => "2020-09-18 05:57:39",
                "correction_date" => "2020-09-18 06:57:39"
            ],
            [
//                "id" => 5,
                "request_id" => 11,
                "manager_id" => 11,
                "errors_count" => 20,
                "items_with_errors" => 20,
                "field_value_id" => 91,
                "comment" => "!@#$%^&*()_+`-]'/[;.,]\"?[:>\\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО",
                "status" => 1,
                "create_ts" => "2020-09-18 08:34:53",
                "correction_date" => "2020-09-18 09:34:53"
            ],
            [
//                "id" => 6,
                "request_id" => 11,
                "manager_id" => 11,
                "errors_count" => 20,
                "items_with_errors" => 20,
                "field_value_id" => 89,
                "comment" => "!@#$%^&*()_+`-]'/[;.,]\"?[:>\\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО",
                "status" => 1,
                "create_ts" => "2020-09-18 08:34:53",
                "correction_date" => "2020-09-18 09:34:53"
            ],
            [
//                "id" => 7,
                "request_id" => 11,
                "manager_id" => 11,
                "errors_count" => 20,
                "items_with_errors" => 20,
                "field_value_id" => 96,
                "comment" => "!@#$%^&*()_+`-]'/[;.,]\"?[:>\\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО",
                "status" => 1,
                "create_ts" => "2020-09-18 08:34:53",
                "correction_date" => "2020-09-18 09:34:53"
            ],
            [
//                "id" => 8,
                "request_id" => 11,
                "manager_id" => 11,
                "errors_count" => 30,
                "items_with_errors" => 30,
                "field_value_id" => 91,
                "comment" => "",
                "status" => 0,
                "create_ts" => "2020-09-18 09:11:24",
                "correction_date" => null
            ],
            [
//                "id" => 9,
                "request_id" => 11,
                "manager_id" => 11,
                "errors_count" => 30,
                "items_with_errors" => 30,
                "field_value_id" => 89,
                "comment" => "",
                "status" => 0,
                "create_ts" => "2020-09-18 09:11:24",
                "correction_date" => null
            ],
            [
//                "id" => 10,
                "request_id" => 11,
                "manager_id" => 11,
                "errors_count" => 30,
                "items_with_errors" => 30,
                "field_value_id" => 137,
                "comment" => "",
                "status" => 0,
                "create_ts" => "2020-09-18 09:11:24",
                "correction_date" => null
            ]
        ],
        "report_periods" => [
            [
                //'id' => 1,
                "begin" => '2020-01-01 00:00:00',
                "end" => '2020-03-31 00:00:00',
                "created_at" => '2020-01-01 00:00:00',
                "updated_at" => null,
            ],
            [
                //'id' => 2,
                "begin" => '2020-04-01 00:00:00',
                "end" => '2020-06-30 00:00:00',
                "created_at" => '2020-01-01 00:00:00',
                "updated_at" => null,
            ],
            [
                //'id' => 3,
                "begin" => '2020-07-01 00:00:00',
                "end" => date('Y-m-d', strtotime('-1 week')) . ' 00:00:00',
                "created_at" => '2020-02-01 00:00:00',
                "updated_at" => '2020-07-01 17:01:01',
            ],
            [
                //'id' => 4,
                "begin" => date('Y-m-d', strtotime('-6 days')) . ' 00:00:00',
                "end" => '2021-12-31 00:00:00',
                "created_at" => '2020-03-01 00:00:00',
                "updated_at" => '2020-09-01 19:01:01',
            ],
        ],
        "reports" => [
            [
                "title" => 'Всё во всём',
                "fields" => '["id", "employee_code_1c", "159", "report_period_id", "sv_report_periods", "manager_id", "manager_drfo", "manager_team", "supervisor_id", "supervisor_drfo", "supervisor_team", "team_direction", "subject", "author_id", "cross_check_manager_id", "direction", "type_id", "status", "cross_check_status", "category_id", "seller_id", "child_count", "amount_to_work", "priority", "awaiting_correction", "description", "reason_id", "parent_id", "78", "29", "20", "30", "correction_comment", "result_comment", "supervisor_comment", "reason", "recommendations", "127", "17", "3", "7", "18", "126", "13", "16", "12", "124", "123", "125", "1", "2", "14", "15", "19", "8", "9", "4", "5", "6", "10", "11", "76", "77", "63", "70", "80", "93", "81", "71", "115", "82", "83", "66", "79", "112", "90", "96", "97", "98", "99", "100", "67", "84", "91", "118", "116", "75", "73", "74", "94", "92", "72", "88", "110", "111", "87", "69", "85", "113", "62", "47", "48", "86", "68", "27", "31", "23", "22", "21", "24", "26", "28", "32", "25", "46", "141", "36", "131", "45", "140", "34", "129", "38", "133", "33", "128", "42", "137", "43", "138", "37", "132", "40", "135", "39", "134", "41", "136", "44", "139", "35", "130", "101", "146", "122", "158", "114", "52", "53", "54", "55", "56", "57", "58", "49", "50", "59", "61", "64", "51", "142", "60", "143", "120", "156", "121", "157", "102", "147", "103", "148", "95", "145", "104", "149", "105", "150", "106", "151", "107", "152", "108", "153", "109", "154", "117", "155", "65", "144", "created_at", "last_change_status_date", "supervisor_process_date", "supervisor_check_date", "actual_start_date", "actual_finish_date", "planned_start_date", "planned_finish_date", "89"]',
                "conditions" => '{"type_id": ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13", "14", "15"], "team_direction": ["1", "2", "3", "4", "5", "6"]}',
                "type" => 0
            ],
            [
                "title" => "Всё во всём (сводный)",
                "fields" => '["id", "employee_code_1c", "159", "report_period_id", "sv_report_periods", "manager_id", "manager_drfo", "manager_team", "supervisor_id", "supervisor_drfo", "supervisor_team", "team_direction", "subject", "author_id", "cross_check_manager_id", "direction", "type_id", "status", "cross_check_status", "category_id", "seller_id", "child_count", "amount_to_work", "priority", "awaiting_correction", "description", "reason_id", "parent_id", "78", "29", "20", "30", "correction_comment", "result_comment", "supervisor_comment", "reason", "recommendations", "127", "17", "3", "7", "18", "126", "13", "16", "12", "124", "123", "125", "1", "2", "14", "15", "19", "8", "9", "4", "5", "6", "10", "11", "76", "77", "63", "70", "80", "93", "81", "71", "115", "82", "83", "66", "79", "112", "90", "96", "97", "98", "99", "100", "67", "84", "91", "118", "116", "75", "73", "74", "94", "92", "72", "88", "110", "111", "87", "69", "85", "113", "62", "47", "48", "86", "68", "27", "31", "23", "22", "21", "24", "26", "28", "32", "25", "46", "141", "36", "131", "45", "140", "34", "129", "38", "133", "33", "128", "42", "137", "43", "138", "37", "132", "40", "135", "39", "134", "41", "136", "44", "139", "35", "130", "101", "146", "122", "158", "114", "52", "53", "54", "55", "56", "57", "58", "49", "50", "59", "61", "64", "51", "142", "60", "143", "120", "156", "121", "157", "102", "147", "103", "148", "95", "145", "104", "149", "105", "150", "106", "151", "107", "152", "108", "153", "109", "154", "117", "155", "65", "144", "created_at", "last_change_status_date", "supervisor_process_date", "supervisor_check_date", "actual_start_date", "actual_finish_date", "planned_start_date", "planned_finish_date", "89"]',
                "conditions" => '{"type_id": ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13", "14", "15"], "team_direction": ["1", "2", "3", "4", "5", "6"]}',
                "type" => 1
            ],
        ],
        "report_period_request_fields" => [
            [
                "report_period_id" => 3,
                "request_id" => 11,
                "field_id" => 33,
                "value" => 20
            ],
            [
                "report_period_id" => 3,
                "request_id" => 11,
                "field_id" => 36,
                "value" => 20
            ],
            [
                "report_period_id" => 3,
                "request_id" => 11,
                "field_id" => 37,
                "value" => 30
            ],
            [
                "report_period_id" => 3,
                "request_id" => 11,
                "field_id" => 35,
                "value" => 30
            ],
            [
                "report_period_id" => 3,
                "request_id" => 11,
                "field_id" => 101,
                "value" => 100
            ],
            [
                "report_period_id" => 3,
                "request_id" => 11,
                "field_id" => 122,
                "value" => 100
            ],
            [
                "report_period_id" => 3,
                "request_id" => 11,
                "field_id" => 51,
                "value" => 60
            ],
            [
                "report_period_id" => 3,
                "request_id" => 11,
                "field_id" => 60,
                "value" => 300
            ],
            [
                "report_period_id" => 3,
                "request_id" => 11,
                "field_id" => 65,
                "value" => 20
            ]
        ],
        "categories" => include \rzk\FixtureController::getFixtureDir() . 'lisa_fixtures/categories.php',
        "difficulty_coefs" => include \rzk\FixtureController::getFixtureDir() . 'lisa_fixtures/difficulty_coefs.php',
        "field_values" => include \rzk\FixtureController::getFixtureDir() . 'lisa_fixtures/field_values.php',
        "markets_supervisors" => include \rzk\FixtureController::getFixtureDir() . 'lisa_fixtures/markets_supervisors.php',
        "priorities" => include \rzk\FixtureController::getFixtureDir() . 'lisa_fixtures/priorities.php',
        "reasons" => include \rzk\FixtureController::getFixtureDir() . 'lisa_fixtures/reasons.php',
        "roles" => include \rzk\FixtureController::getFixtureDir() . 'lisa_fixtures/roles.php',
        "teams" => include \rzk\FixtureController::getFixtureDir() . 'lisa_fixtures/teams.php',
    ],
    "cooper_fixtures" => [
        "market" => include \rzk\FixtureController::getFixtureDir() . 'cooper_fixtures/market.php',
    ]
];