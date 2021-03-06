<?php

use Codeception\Module\TestHelper;

return [
    'lisa_fixtures' => [
        'filters' => [
            [
                //'id' => 1,
                'user_id' => 4,
                'name' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                'conditions' => '{
                    "id": {"requests.id": "10"}, 
                    "fields": ["OR", {"value": "1", "field_id": "1"}, {"value": "1", "field_id": "2"}, {"value": "1", "field_id": "3"}, {"value": "1", "field_id": "4"}, {"value": "1", "field_id": "6"}, {"value": "1", "field_id": "7"}, {"value": "1", "field_id": "8"}, {"value": "1", "field_id": "9"}, {"value": "1", "field_id": "10"}, {"value": "1", "field_id": "12"}, {"value": "1", "field_id": "13"}, {"value": "1", "field_id": "14"}, {"value": "1", "field_id": "18"}, {"value": "1", "field_id": "19"}, {"value": "1", "field_id": "123"}, {"value": "1", "field_id": "124"}, {"value": "1", "field_id": "125"}, {"value": "1", "field_id": "5"}, {"value": "1", "field_id": "126"}, {"value": "1", "field_id": "127"}, {"value": "1", "field_id": "159"}, {"value": "1", "field_id": "160"}, {"value": "1", "field_id": "169"}, {"value": "1", "field_id": "11"}, {"value": "1", "field_id": "15"}, {"value": "1", "field_id": "17"}, {"value": "1", "field_id": "16"}], 
                    "status": ["in", "requests.status", ["1", "2", "3"]], 
                    "subject": {"requests.subject": "=~}!@#$%^&*()_+`-]\'/[;.,}\"?{:>\\\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО"}, 
                    "type_id": ["in", "requests.type_id", ["1", "2", "7", "9"]], 
                    "priority": ["in", "requests.priority", ["2", "3"]], 
                    "author_id": ["in", "requests.author_id", ["1", "4", "5"]], 
                    "direction": ["in", "requests.direction", ["0", "1"]], 
                    "parent_id": {"requests.parent_id": "20"}, 
                    "seller_id": ["in", "requests.seller_id", [-2, 0, 5]], 
                    "created_at": ["between", "created_at", "2021-07-01 00:00:00", "2021-07-08 23:59:59"], 
                    "manager_id": ["in", "requests.manager_id", ["3", "11"]], 
                    "category_id": ["in", "requests.category_id", [1]], 
                    "child_count": {"requests.child_count": "99"}, 
                    "description": {"requests.description": "=~}!@#$%^&*()_+`-]\'/[;.,}\"?{:>\\\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО"}, 
                    "supervisor_id": ["in", "requests.supervisor_id", ["7", "27", "34", "36", "35"]], 
                    "amount_to_work": {"requests.amount_to_work": "500"}, 
                    "result_comment": {"requests.result_comment": "=~}!@#$%^&*()_+`-]\'/[;.,}\"?{:>\\\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО"}, 
                    "team_direction": ["in", "requests.team_direction", ["3"]], 
                    "previous_status": ["in", "requests.previous_status", ["11", "9", "8"]], 
                    "recommendations": {"requests.recommendations": "=~}!@#$%^&*()_+`-]\'/[;.,}\"?{:>\\\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО"}, 
                    "employee_code_1c": {"requests.employee_code_1c": "\'1234567890"}, 
                    "report_period_id": ["in", "requests.report_period_id", ["1", "2"]], 
                    "actual_start_date": ["between", "actual_start_date", "2021-08-01 00:00:00", "2021-08-07 23:59:59"], 
                    "photo_load_status": ["in", "requests.photo_load_status", ["0", "1"]], 
                    "sv_report_periods": ["json", "sv_report_periods", ["1"]], 
                    "actual_finish_date": ["between", "actual_finish_date", "2021-08-01 00:00:00", "2021-08-31 23:59:59"], 
                    "correction_comment": {"requests.correction_comment": "=~}!@#$%^&*()_+`-]\'/[;.,}\"?{:>\\\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО"}, 
                    "cross_check_status": ["in", "requests.cross_check_status", ["0"]], 
                    "planned_start_date": ["between", "planned_start_date", "2021-07-15 00:00:00", "2021-07-22 23:59:59"], 
                    "supervisor_comment": {"requests.supervisor_comment": "=~}!@#$%^&*()_+`-]\'/[;.,}\"?{:>\\\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО"}, 
                    "awaiting_correction": ["in", "requests.awaiting_correction", ["1"]], 
                    "planned_finish_date": ["between", "planned_finish_date", "2021-07-22 00:00:00", "2021-07-29 23:59:59"], 
                    "supervisor_check_date": ["between", "supervisor_check_date", "2021-08-01 00:00:00", "2022-01-31 23:59:59"], 
                    "cross_check_manager_id": ["in", "requests.cross_check_manager_id", ["8", "13", "14", "18"]], 
                    "last_change_status_date": ["between", "last_change_status_date", "2020-01-01 00:00:00", "2020-01-31 23:59:59"], 
                    "supervisor_process_date": ["between", "supervisor_process_date", "2021-09-01 00:00:00", "2021-09-30 23:59:59"]
                }',
                'order' => 0,
            ]
        ],
        'categories' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/categories.php',
        'priorities' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/priorities.php',
        'report_periods' => [
            [
                //'id' => 1,
                'begin' => '2020-01-01 00:00:00',
                'end' => '2020-06-30 00:00:00',
                'created_at' => '2020-01-01 00:00:00',
                'updated_at' => null,
            ],
            [
                //'id' => 2,
                'begin' => '2020-07-01 00:00:00',
                'end' => '2020-12-31 00:00:00',
                'created_at' => '2020-01-01 00:00:00',
                'updated_at' => null,
            ],
        ]
    ],
];