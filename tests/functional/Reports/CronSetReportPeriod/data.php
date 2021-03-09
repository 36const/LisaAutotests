<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Непроставление отчётного периода КМ в заявках в статусах кроме 4, 8, 9, 11',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'db' => [
                'lisa_fixtures' => [
                    "requests" => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['requests'],
                ]
            ],
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Проставление отчётного периода КМ во вчерашних заявках без отчётного периода',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case2.php',
        'provider_data' => [
            'db' => [
                'lisa_fixtures' => [
                    "requests" => [
                        //4
                        [
                            "id" => 18,
                            "author_id" => 19,
                            "type_id" => 10,
                            "supervisor_id" => 34,
                            "manager_id" => 13,
                            "status" => 4,
                            "direction" => 0,
                            "priority" => null,
                            "awaiting_correction" => 0,
                            "created_at" => '2020-01-01 00:00:00',
                            "correction_comment" => null,
                            "amount_to_work" => 10,
                            "subject" => "Изменение существующих параметров/значений (Определяется типом задачи)",
                            "description" => "Описание",
                            "category_id" => null,
                            "seller_id" => 0,
                            "recommendations" => null,
                            "reason" => "Отменить",
                            "parent_id" => null,
                            "planned_start_date" => null,
                            "planned_finish_date" => null,
                            "actual_start_date" => "2020-01-01 00:00:03",
                            "actual_finish_date" => null,
                            "supervisor_process_date" => "2020-01-01 00:00:02",
                            "supervisor_check_date" => null,
                            "result_comment" => null,
                            "supervisor_comment" => null,
                            "last_change_status_date" => date("Y-m-d H:i:s", strtotime('-1 day')),
                            "team_direction" => 5,
                            "report_period_id" => 3,
                            "sync_source_id" => null,
                            "sv_report_periods" => '{"1": 1}',
                            "cross_check_status" => 0,
                            "cross_check_manager_id" => null,
                            "employee_code_1c" => null,
                            "child_count" => 0,
                            "photo_load_status" => 0,
                        ],
                        //11
                        [
                            "id" => 24,
                            "author_id" => 15,
                            "type_id" => 8,
                            "supervisor_id" => 38,
                            "manager_id" => 13,
                            "status" => 11,
                            "direction" => 0,
                            "priority" => 1,
                            "awaiting_correction" => 0,
                            "created_at" => '2020-01-01 00:00:00',
                            "correction_comment" => "",
                            "amount_to_work" => 10,
                            "subject" => "Добавление/изменение информации в существующих порталах/фат-меню/категориях товаров (Определяется типом задачи)",
                            "description" => "Описание",
                            "category_id" => 2,
                            "seller_id" => 0,
                            "recommendations" => "",
                            "reason" => null,
                            "parent_id" => null,
                            "planned_start_date" => null,
                            "planned_finish_date" => null,
                            "actual_start_date" => "2020-01-01 00:00:03",
                            "actual_finish_date" => "2020-01-01 00:00:04",
                            "supervisor_process_date" => "2020-01-01 00:00:02",
                            "supervisor_check_date" => "2020-01-01 00:00:05",
                            "result_comment" => "Выполнена",
                            "supervisor_comment" => "",
                            "last_change_status_date" => date("Y-m-d H:i:s", strtotime('-1 day')),
                            "team_direction" => 6,
                            "report_period_id" => 3,
                            "sync_source_id" => null,
                            "sv_report_periods" => '{"1": 1}',
                            "cross_check_status" => 0,
                            "cross_check_manager_id" => null,
                            "employee_code_1c" => null,
                            "child_count" => 0,
                            "photo_load_status" => 0,
                        ],
                        //8,9
                        [
                            "id" => 7,
                            "author_id" => 18,
                            "type_id" => 15,
                            "supervisor_id" => 35,
                            "manager_id" => 11,
                            "status" => 8,
                            "direction" => 0,
                            "priority" => 2,
                            "awaiting_correction" => 0,
                            "created_at" => '2020-01-01 00:00:00',
                            "correction_comment" => "!@#$%^&*()_+`-]'/[;.,}\"?{:>\|<\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ ~!@#$%^&*(250",
                            "amount_to_work" => 10,
                            "subject" => "Добавление/изменение тегов (Определяется типом задачи)",
                            "description" => "!@#$%^&*()_+`-]'/[;.,}\"?{:>\|<\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ ~!@#$%^&*(250",
                            "category_id" => 1,
                            "seller_id" => 83,
                            "recommendations" => "!@#$%^&*()_+`-]'/[;.,}\"?{:>\|<\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ ~!@#$%^&*(250",
                            "reason" => null,
                            "parent_id" => null,
                            "planned_start_date" => null,
                            "planned_finish_date" => null,
                            "actual_start_date" => "2020-01-01 00:00:03",
                            "actual_finish_date" => "2020-01-01 00:00:04",
                            "supervisor_process_date" => "2020-01-01 00:00:02",
                            "supervisor_check_date" => null,
                            "result_comment" => "!@#$%^&*()_+`-]'/[;.,}\"?{:>\|<\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ ~!@#$%^&*(250",
                            "supervisor_comment" => "!@#$%^&*()_+`-]'/[;.,}\"?{:>\|<\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ ~!@#$%^&*(250",
                            "last_change_status_date" => date("Y-m-d H:i:s", strtotime('-1 day')),
                            "team_direction" => 6,
                            "report_period_id" => 3,
                            "sync_source_id" => null,
                            "sv_report_periods" => '{"1": "1"}',
                            "cross_check_status" => 0,
                            "cross_check_manager_id" => null,
                            "employee_code_1c" => null,
                            "child_count" => 0,
                            "photo_load_status" => 0,
                        ],
                        [
                            "id" => 20,
                            "author_id" => 18,
                            "type_id" => 13,
                            "supervisor_id" => 35,
                            "manager_id" => 13,
                            "status" => 9,
                            "direction" => 0,
                            "priority" => 2,
                            "awaiting_correction" => 0,
                            "created_at" => '2020-01-01 00:00:00',
                            "correction_comment" => null,
                            "amount_to_work" => 10,
                            "subject" => "Добавление/изменение видео (Определяется типом задачи)",
                            "description" => "Описание",
                            "category_id" => 2,
                            "seller_id" => 9423,
                            "recommendations" => null,
                            "reason" => null,
                            "parent_id" => null,
                            "planned_start_date" => null,
                            "planned_finish_date" => null,
                            "actual_start_date" => "2020-01-01 00:00:03",
                            "actual_finish_date" => "2020-01-01 00:00:04",
                            "supervisor_process_date" => "2020-01-01 00:00:02",
                            "supervisor_check_date" => null,
                            "result_comment" => "Выполнена",
                            "supervisor_comment" => null,
                            "last_change_status_date" => date("Y-m-d H:i:s", strtotime('-1 day')),
                            "team_direction" => 6,
                            "report_period_id" => 3,
                            "sync_source_id" => null,
                            "sv_report_periods" => '{"1": 1}',
                            "cross_check_status" => 0,
                            "cross_check_manager_id" => null,
                            "employee_code_1c" => null,
                            "child_count" => 0,
                            "photo_load_status" => 0,
                        ],
                    ],
                ]
            ],
        ]
    ],

    'case3' => [
        'setting' => [
            'description' => 'Непроставление отчётного периода КМ в сегодняшних заявках без отчётного периода',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case3.php',
        'provider_data' => [
            'db' => [
                'lisa_fixtures' => [
                    "requests" => (include __DIR__ . '/fixture/case3.php')['lisa_fixtures']['requests'],
                ]
            ],
        ]
    ],

    'case4' => [
        'setting' => [
            'description' => 'Оставление ранее проставленного отчётного периода КМ во вчерашних заявках',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case4.php',
        'provider_data' => [
            'db' => [
                'lisa_fixtures' => [
                    "requests" => (include __DIR__ . '/fixture/case4.php')['lisa_fixtures']['requests'],
                ]
            ],
        ]
    ],

];
