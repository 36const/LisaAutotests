<?php

return [
    "lisa_fixtures" => [
        "filters" => [
            [
//                'id' => 1,
                "user_id" => 4,
                "name" => 'Фильтр',
                "conditions" => '{
                    "id": {"requests.id": "10"},
                    "fields": ["OR", {"value": "1", "field_id": 10}, {"value": "1", "field_id": 11}, {"value": "1", "field_id": 123}, {"value": "1", "field_id": 124}, {"value": "1", "field_id": 125}, {"value": "1", "field_id": 126}, {"value": "1", "field_id": 127}, {"value": "1", "field_id": 12}, {"value": "1", "field_id": 13}, {"value": "1", "field_id": 14}, {"value": "1", "field_id": 159}, {"value": "1", "field_id": 15}, {"value": "1", "field_id": 16}, {"value": "1", "field_id": 17}, {"value": "1", "field_id": 18}, {"value": "1", "field_id": 19}, {"value": "1", "field_id": 1}, {"value": "1", "field_id": 2}, {"value": "1", "field_id": 3}, {"value": "1", "field_id": 4}, {"value": "1", "field_id": 5}, {"value": "1", "field_id": 6}, {"value": "1", "field_id": 7}, {"value": "1", "field_id": 8}, {"value": "1", "field_id": 9}], 
                    "status": ["in", "requests.status", ["1", "2", "3", "4", "5", "6", "7", "8", "9", "11"]], 
                    "subject": {"requests.subject": "250~!@#$%^&*()_+`=-]/[;.,}\"?{:><|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ"}, 
                    "type_id": ["in", "requests.type_id", ["1", "13", "15", "9", "14", "12", "2", "7", "8"]], 
                    "priority": ["in", "requests.priority", ["1", "2", "3"]], 
                    "author_id": ["in", "requests.author_id", ["15", "19", "17"]], 
                    "direction": ["in", "requests.direction", ["0", "1", "2"]], 
                    "parent_id": {"requests.parent_id": "11"}, 
                    "reason_id": ["in", "requests.reason_id", ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13", "14", "15"]], 
                    "seller_id": ["in", "requests.seller_id", ["0", "5", "83"]], 
                    "created_at": ["between", "created_at", "2020-04-27 00:00", "2020-05-03 23:59"], 
                    "manager_id": ["in", "requests.manager_id", ["11", "13"]], 
                    "category_id": ["in", "requests.category_id", ["1", "2"]], 
                    "description": {"requests.description": "250~!@#$%^&*()_+`=-]/[;.,}\"?{:><|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ"}, 
                    "supervisor_id": ["in", "requests.supervisor_id", ["33", "35", "6"]], 
                    "amount_to_work": {"requests.amount_to_work": "10"}, 
                    "result_comment": {"requests.result_comment": "250~!@#$%^&*()_+`=-]/[;.,}\"?{:><|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ"}, 
                    "team_direction": ["in", "requests.team_direction", ["1", "2", "3", "4", "5", "6"]], 
                    "recommendations": {"requests.recommendations": "250~!@#$%^&*()_+`=-]/[;.,}\"?{:><|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ"}, 
                    "employee_code_1c": {"requests.employee_code_1c": "012"}, 
                    "report_period_id": ["in", "requests.report_period_id", ["1", "2"]], 
                    "actual_start_date": ["between", "actual_start_date", "2020-05-18 00:00", "2020-05-24 23:59"], 
                    "sv_report_periods": ["json", "sv_report_periods", ["1", "2"]], 
                    "actual_finish_date": ["between", "actual_finish_date", "2020-05-25 00:00", "2020-05-31 23:59"], 
                    "correction_comment": {"requests.correction_comment": "250~!@#$%^&*()_+`=-]/[;.,}\"?{:><|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ"}, 
                    "cross_check_status": ["in", "requests.cross_check_status", ["0", "1"]], 
                    "planned_start_date": ["between", "planned_start_date", "2020-05-04 00:00", "2020-05-10 23:59"], 
                    "supervisor_comment": {"requests.supervisor_comment": "250~!@#$%^&*()_+`=-]/[;.,}\"?{:><|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ"}, 
                    "awaiting_correction": {"requests.awaiting_correction": "1"}, 
                    "planned_finish_date": ["between", "planned_finish_date", "2020-05-11 00:00", "2020-05-17 23:59"], 
                    "cross_check_manager_id": ["in", "requests.cross_check_manager_id", ["12", "14"]], 
                    "last_change_status_date": ["between", "last_change_status_date", "2020-06-08 00:00", "2020-06-14 23:59"], 
                    "supervisor_process_date": ["between", "supervisor_process_date", "2020-06-01 00:00", "2020-06-07 23:59"]
                }',
            ]
        ],
        "categories" => include \rzk\FixtureController::getFixtureDir() . 'lisa_fixtures/categories.php',
        "field_values" => include \rzk\FixtureController::getFixtureDir() . 'lisa_fixtures/field_values.php',
        "priorities" => include \rzk\FixtureController::getFixtureDir() . 'lisa_fixtures/priorities.php',
        "reasons" => include \rzk\FixtureController::getFixtureDir() . 'lisa_fixtures/reasons.php',
        "report_periods" => [
            [
                //'id' => 1,
                "begin" => '2020-01-01 00:00:00',
                "end" => '2020-06-30 00:00:00',
                "created_at" => '2020-01-01 00:00:00',
                "updated_at" => null,
            ],
            [
                //'id' => 2,
                "begin" => '2020-07-01 00:00:00',
                "end" => '2020-12-31 00:00:00',
                "created_at" => '2020-01-01 00:00:00',
                "updated_at" => null,
            ],
        ]
    ],
    "cooper_fixtures" => [
        "market" => include \rzk\FixtureController::getFixtureDir() . 'cooper_fixtures/market.php',
    ]
];