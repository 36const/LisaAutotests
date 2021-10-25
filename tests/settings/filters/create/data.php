<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Создание фильтра со всеми полями',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'id' => NULL,
                'user_id' => NULL,
                'name' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                'conditions' => [
                    'fields' => ['1', '2', '3', '4', '6', '7', '8', '9', '10', '12', '13', '14', '18', '19', '123', '124', '125', '5', '126', '127', '159', '160', '169', '11', '15', '17', '16'],
                    'author_id' => ['1', '7', '4', '5'],
                    'manager_id' => ['11'],
                    'cross_check_manager_id' => ['13', '14', '18'],
                    'supervisor_id' => ['9', '27', '34', '36', '35'],
                    'seller_id' => [-2, 0, 5],
                    'category_id' => [1],
                    'type_id' => ['1', '2', '7', '9'],
                    'created_at' => '2021-07-01 00:00:00to2021-07-08 23:59:59',
                    'planned_start_date' => '2021-07-15 00:00:00to2021-07-22 23:59:59',
                    'planned_finish_date' => '2021-07-22 00:00:00to2021-07-29 23:59:59',
                    'actual_start_date' => '2021-08-01 00:00:00to2021-08-07 23:59:59',
                    'actual_finish_date' => '2021-08-01 00:00:00to2021-08-31 23:59:59',
                    'supervisor_process_date' => '2021-09-01 00:00:00to2021-09-30 23:59:59',
                    'last_change_status_date' => '2020-01-01 00:00:00to2020-01-31 23:59:59',
                    'supervisor_check_date' => '2021-08-01 00:00:00to2022-01-31 23:59:59',
                    'id' => '10',
                    'status' => ['1', '2', '3'],
                    'previous_status' => ['11', '9', '8'],
                    'awaiting_correction' => ['1'],
                    'subject' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                    'description' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                    'recommendations' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                    'result_comment' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                    'supervisor_comment' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                    'correction_comment' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                    'direction' => ['0', '1'],
                    'amount_to_work' => '500',
                    'parent_id' => '20',
                    'report_period_id' => ['1', '2'],
                    'sv_report_periods' => ['1'],
                    'team_direction' => ['3'],
                    'priority' => ['2', '3'],
                    'child_count' => '99',
                    'employee_code_1c' => '\'1234567890',
                    'cross_check_status' => ['0'],
                    'photo_load_status' => ['0', '1'],
                ],
                'selectedOtherFields' => [
                    0 => 'id',
                    1 => 'status',
                    2 => 'previous_status',
                    3 => 'awaiting_correction',
                    4 => 'subject',
                    5 => 'description',
                    6 => 'direction',
                    7 => 'amount_to_work',
                    8 => 'recommendations',
                    9 => 'parent_id',
                    10 => 'result_comment',
                    11 => 'supervisor_comment',
                    12 => 'report_period_id',
                    13 => 'team_direction',
                    14 => 'correction_comment',
                    15 => 'priority',
                    16 => 'sv_report_periods',
                    17 => 'child_count',
                    18 => 'employee_code_1c',
                    19 => 'cross_check_status',
                    20 => 'photo_load_status',
                ],
            ],
            'responseBody' => [
                'model' => [
                    'id' => NULL,
                    'user_id' => NULL,
                    'name' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                    'conditions' => [
                        'author_id' => ['1', '7', '4', '5'],
                        'manager_id' => ['11'],
                        'cross_check_manager_id' => ['13', '14', '18'],
                        'supervisor_id' => ['9', '27', '34', '36', '35'],
                        'seller_id' => [-2, 0, 5],
                        'category_id' => [1],
                        'type_id' => ['1', '2', '7', '9'],
                        'created_at' => '2021-07-01 00:00:00to2021-07-08 23:59:59',
                        'planned_start_date' => '2021-07-15 00:00:00to2021-07-22 23:59:59',
                        'planned_finish_date' => '2021-07-22 00:00:00to2021-07-29 23:59:59',
                        'actual_start_date' => '2021-08-01 00:00:00to2021-08-07 23:59:59',
                        'actual_finish_date' => '2021-08-01 00:00:00to2021-08-31 23:59:59',
                        'supervisor_process_date' => '2021-09-01 00:00:00to2021-09-30 23:59:59',
                        'last_change_status_date' => '2020-01-01 00:00:00to2020-01-31 23:59:59',
                        'supervisor_check_date' => '2021-08-01 00:00:00to2022-01-31 23:59:59',
                        'id' => '10',
                        'status' => ['1', '2', '3'],
                        'previous_status' => ['11', '9', '8'],
                        'awaiting_correction' => ['1'],
                        'subject' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                        'description' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                        'recommendations' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                        'result_comment' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                        'supervisor_comment' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                        'correction_comment' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                        'direction' => ['0', '1'],
                        'amount_to_work' => '500',
                        'parent_id' => '20',
                        'report_period_id' => ['1', '2'],
                        'sv_report_periods' => ['1'],
                        'team_direction' => ['3'],
                        'priority' => ['2', '3'],
                        'child_count' => '99',
                        'employee_code_1c' => '\'1234567890',
                        'cross_check_status' => ['0'],
                        'photo_load_status' => ['0', '1'],
                    ],
                    'selectedOtherFields' => [
                        0 => 'id',
                        1 => 'status',
                        2 => 'previous_status',
                        3 => 'awaiting_correction',
                        4 => 'subject',
                        5 => 'description',
                        6 => 'direction',
                        7 => 'amount_to_work',
                        8 => 'recommendations',
                        9 => 'parent_id',
                        10 => 'result_comment',
                        11 => 'supervisor_comment',
                        12 => 'report_period_id',
                        13 => 'team_direction',
                        14 => 'correction_comment',
                        15 => 'priority',
                        16 => 'sv_report_periods',
                        17 => 'child_count',
                        18 => 'employee_code_1c',
                        19 => 'cross_check_status',
                        20 => 'photo_load_status',
                    ]
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'filters' => [
                        [
                            'id' => 1,
                            'user_id' => 4,
                            'name' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            'conditions' => '{
                                "id": {"requests.id": "10"}, 
                                "fields": ["OR", {"value": "1", "field_id": "1"}, {"value": "1", "field_id": "2"}, {"value": "1", "field_id": "3"}, {"value": "1", "field_id": "4"}, {"value": "1", "field_id": "6"}, {"value": "1", "field_id": "7"}, {"value": "1", "field_id": "8"}, {"value": "1", "field_id": "9"}, {"value": "1", "field_id": "10"}, {"value": "1", "field_id": "12"}, {"value": "1", "field_id": "13"}, {"value": "1", "field_id": "14"}, {"value": "1", "field_id": "18"}, {"value": "1", "field_id": "19"}, {"value": "1", "field_id": "123"}, {"value": "1", "field_id": "124"}, {"value": "1", "field_id": "125"}, {"value": "1", "field_id": "5"}, {"value": "1", "field_id": "126"}, {"value": "1", "field_id": "127"}, {"value": "1", "field_id": "159"}, {"value": "1", "field_id": "160"}, {"value": "1", "field_id": "169"}, {"value": "1", "field_id": "11"}, {"value": "1", "field_id": "15"}, {"value": "1", "field_id": "17"}, {"value": "1", "field_id": "16"}], 
                                "status": ["in", "requests.status", ["1", "2", "3"]], 
                                "subject": {"requests.subject": "=~}!@#$%^&*()_+`-]\'/[;.,}\"?{:>\\\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО"}, 
                                "type_id": ["in", "requests.type_id", ["1", "2", "7", "9"]], 
                                "priority": ["in", "requests.priority", ["2", "3"]], 
                                "author_id": ["in", "requests.author_id", ["1", "7", "4", "5"]], 
                                "direction": ["in", "requests.direction", ["0", "1"]], 
                                "parent_id": {"requests.parent_id": "20"}, 
                                "seller_id": ["in", "requests.seller_id", [-2, 0, 5]], 
                                "created_at": ["between", "created_at", "2021-07-01 00:00:00", "2021-07-08 23:59:59"], 
                                "manager_id": ["in", "requests.manager_id", ["11"]], 
                                "category_id": ["in", "requests.category_id", [1]], 
                                "child_count": {"requests.child_count": "99"}, 
                                "description": {"requests.description": "=~}!@#$%^&*()_+`-]\'/[;.,}\"?{:>\\\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО"}, 
                                "supervisor_id": ["in", "requests.supervisor_id", ["9", "27", "34", "36", "35"]], 
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
                                "cross_check_manager_id": ["in", "requests.cross_check_manager_id", ["13", "14", "18"]], 
                                "last_change_status_date": ["between", "last_change_status_date", "2020-01-01 00:00:00", "2020-01-31 23:59:59"], 
                                "supervisor_process_date": ["between", "supervisor_process_date", "2021-09-01 00:00:00", "2021-09-30 23:59:59"]
                            }',
                            'order' => 0
                        ]
                    ]
                ]
            ]
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Создание фильтра c одним полем при наличии других фильтров',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case2.php',
        'provider_data' => [
            'requestBody' => [
                'id' => NULL,
                'user_id' => NULL,
                'name' => 'Фильтр',
                'conditions' => [
                    'fields' => [
                    ],
                    'author_id' => [
                        0 => '5',
                    ],
                ],
                'selectedOtherFields' => [
                ],
            ],
            'responseBody' => [
                'model' => [
                    'id' => NULL,
                    'user_id' => NULL,
                    'name' => 'Фильтр',
                    'conditions' => [
                        'author_id' => [
                            0 => '5',
                        ],
                    ],
                    'selectedOtherFields' => [
                    ],
                ]
            ],
            'db' => [
                'lisa_fixtures' => [
                    'filters' => [
                        [
                            'id' => 1,
                            'user_id' => 4,
                            'name' => 'Mister Filter',
                            'conditions' => '{
                                "fields": ["OR", 
                                {"value": "1", "field_id": 1}, 
                                {"value": "1", "field_id": 3}, 
                                {"value": "1", "field_id": 8}, 
                                {"value": "1", "field_id": 9}], 
                                "type_id": ["in", "requests.type_id", ["1", "9", "12", "13", "14", "15"]], 
                                "author_id": ["in", "requests.author_id", ["15", "17"]], 
                                "seller_id": ["in", "requests.seller_id", ["83", "5", "0"]], 
                                "created_at": ["between", "created_at", "2020-05-05 00:00", "2020-05-10 23:59"], 
                                "manager_id": ["in", "requests.manager_id", ["11", "13"]], 
                                "category_id": ["in", "requests.category_id", ["1"]], 
                                "supervisor_id": ["in", "requests.supervisor_id", ["33", "34", "35"]], 
                                "planned_start_date": ["between", "planned_start_date", "2020-05-05 00:00", "2020-05-05 23:59"], 
                                "planned_finish_date": ["between", "planned_finish_date", "2020-05-01 00:00", "2020-06-30 23:59"]
                            }',
                            'order' => 0
                        ],
                        [
                            'id' => 2,
                            'user_id' => 4,
                            'name' => 'Mister Filter 2',
                            'conditions' => '{
                                "fields": ["OR", 
                                {"value": "1", "field_id": 1}, 
                                {"value": "1", "field_id": 3}, 
                                {"value": "1", "field_id": 8}, 
                                {"value": "1", "field_id": 9}], 
                                "type_id": ["in", "requests.type_id", ["1", "9", "12", "13", "14", "15"]], 
                                "author_id": ["in", "requests.author_id", ["15", "17"]], 
                                "seller_id": ["in", "requests.seller_id", ["83", "5", "0"]], 
                                "created_at": ["between", "created_at", "2020-05-05 00:00", "2020-05-10 23:59"], 
                                "manager_id": ["in", "requests.manager_id", ["11", "13"]], 
                                "category_id": ["in", "requests.category_id", ["1"]], 
                                "supervisor_id": ["in", "requests.supervisor_id", ["33", "34", "35"]], 
                                "planned_start_date": ["between", "planned_start_date", "2020-05-05 00:00", "2020-05-05 23:59"], 
                                "planned_finish_date": ["between", "planned_finish_date", "2020-05-01 00:00", "2020-06-30 23:59"]
                            }',
                            'order' => 2
                        ],
                        [
                            'id' => 3,
                            'user_id' => 4,
                            'name' => 'Mister Filter 3',
                            'conditions' => '{
                                "fields": ["OR", 
                                {"value": "1", "field_id": 1}, 
                                {"value": "1", "field_id": 3}, 
                                {"value": "1", "field_id": 8}, 
                                {"value": "1", "field_id": 9}], 
                                "type_id": ["in", "requests.type_id", ["1", "9", "12", "13", "14", "15"]], 
                                "author_id": ["in", "requests.author_id", ["15", "17"]], 
                                "seller_id": ["in", "requests.seller_id", ["83", "5", "0"]], 
                                "created_at": ["between", "created_at", "2020-05-05 00:00", "2020-05-10 23:59"], 
                                "manager_id": ["in", "requests.manager_id", ["11", "13"]], 
                                "category_id": ["in", "requests.category_id", ["1"]], 
                                "supervisor_id": ["in", "requests.supervisor_id", ["33", "34", "35"]], 
                                "planned_start_date": ["between", "planned_start_date", "2020-05-05 00:00", "2020-05-05 23:59"], 
                                "planned_finish_date": ["between", "planned_finish_date", "2020-05-01 00:00", "2020-06-30 23:59"]
                            }',
                            'order' => 3
                        ],
                        [
                            'id' => 4,
                            'user_id' => 4,
                            'name' => 'Фильтр',
                            'conditions' => '{"author_id": ["in", "requests.author_id", ["5"]]}',
                            'order' => 0
                        ]
                    ]
                ]
            ]
        ]
    ],
    
    'case3' => [
        'setting' => [
            'description' => 'Невозможность создания фильтра без названия и условий',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'id' => NULL,
                'user_id' => NULL,
                'name' => NULL,
                'conditions' => [
                    'fields' => [
                    ],
                ],
                'selectedOtherFields' => [
                ],
            ],
            'responseBody' => [
                'errors' => [
                    'name' => [
                        0 => 'Необходимо заполнить «Название фильтра».',
                    ],
                    'conditions' => [
                        0 => 'Уже и вьюха новая, а вы все так же не заполняете ни одного поля? Ну такооое :|',
                    ],
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'filters' => []
                ]
            ]
        ]
    ],

    'case4' => [
        'setting' => [
            'description' => 'Невозможность создания фильтра без названия',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'id' => NULL,
                'user_id' => NULL,
                'name' => NULL,
                'conditions' => [
                    'fields' => [
                    ],
                    'author_id' => [
                        0 => '5',
                    ],
                    'created_at' => '2021-08-01 00:00:00to2021-08-01 23:59:59',
                ],
                'selectedOtherFields' => [
                ],
            ],
            'responseBody' => [
                'errors' => [
                    'name' => [
                        0 => 'Необходимо заполнить «Название фильтра».',
                    ],
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'filters' => []
                ]
            ]
        ]
    ],

    'case5' => [
        'setting' => [
            'description' => 'Невозможность создания фильтра без условий',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'id' => NULL,
                'user_id' => NULL,
                'name' => 'name',
                'conditions' => [
                    'fields' => [
                    ],
                ],
                'selectedOtherFields' => [
                ],
            ],
            'responseBody' => [
                'errors' => [
                    'conditions' => [
                        0 => 'Уже и вьюха новая, а вы все так же не заполняете ни одного поля? Ну такооое :|',
                    ],
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'filters' => []
                ]
            ]
        ]
    ],

];
