<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Создание фильтра со всеми полями',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'Filter[name]' => 'Фильтр',
                'date[actual_finish_date]' => '2020-05-25 00:00to2020-05-31 23:59',
                'date[actual_start_date]' => '2020-05-18 00:00to2020-05-24 23:59',
                'date[created_at]' => '2020-04-27 00:00to2020-05-03 23:59',
                'date[last_change_status_date]' => '2020-06-08 00:00to2020-06-14 23:59',
                'date[planned_finish_date]' => '2020-05-11 00:00to2020-05-17 23:59',
                'date[planned_start_date]' => '2020-05-04 00:00to2020-05-10 23:59',
                'date[supervisor_process_date]' => '2020-06-01 00:00to2020-06-07 23:59',
                'fields[10]' => '1',
                'fields[11]' => '1',
                'fields[123]' => '1',
                'fields[124]' => '1',
                'fields[125]' => '1',
                'fields[126]' => '1',
                'fields[127]' => '1',
                'fields[12]' => '1',
                'fields[13]' => '1',
                'fields[14]' => '1',
                'fields[159]' => '1',
                'fields[15]' => '1',
                'fields[16]' => '1',
                'fields[17]' => '1',
                'fields[18]' => '1',
                'fields[19]' => '1',
                'fields[1]' => '1',
                'fields[2]' => '1',
                'fields[3]' => '1',
                'fields[4]' => '1',
                'fields[5]' => '1',
                'fields[6]' => '1',
                'fields[7]' => '1',
                'fields[8]' => '1',
                'fields[9]' => '1',
                'filter-select2' => ['id', 'status', 'awaiting_correction', 'subject', 'description', 'direction', 'amount_to_work', 'recommendations', 'parent_id', 'supervisor_check_date', 'result_comment', 'supervisor_comment', 'report_period_id', 'team_direction', 'correction_comment', 'priority', 'sv_report_periods', 'cross_check_status', 'employee_code_1c'],
                'request_field[amount_to_work]' => '10',
                'request_field[author_id]' => ['15', '19', '17'],
                'request_field[awaiting_correction]' => '1',
                'request_field[category_id]' => ['1', '2'],
                'request_field[correction_comment]' => '250~!@#$%^&*()_+`=-]\'/[;.,}"?{:><|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ',
                'request_field[cross_check_manager_id]' => ['12', '14'],
                'request_field[cross_check_status]' => ['0', '1'],
                'request_field[description]' => '250~!@#$%^&*()_+`=-]\'/[;.,}"?{:><|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ',
                'request_field[direction]' => ['0', '1', '2'],
                'request_field[employee_code_1c]' => '012',
                'request_field[id]' => '10',
                'request_field[manager_id]' => ['11', '13'],
                'request_field[parent_id]' => '11',
                'request_field[priority]' => ['1', '2', '3'],
                'request_field[recommendations]' => '250~!@#$%^&*()_+`=-]\'/[;.,}"?{:><|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ',
                'request_field[report_period_id]' => ['1', '2'],
                'request_field[result_comment]' => '250~!@#$%^&*()_+`=-]\'/[;.,}"?{:><|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ',
                'request_field[seller_id]' => ['0', '5', '83'],
                'request_field[status]' => ['1', '2', '3', '4', '5', '6', '7', '8', '9', '11'],
                'request_field[subject]' => '250~!@#$%^&*()_+`=-]\'/[;.,}"?{:><|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ',
                'request_field[supervisor_comment]' => '250~!@#$%^&*()_+`=-]\'/[;.,}"?{:><|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ',
                'request_field[supervisor_id]' => ['33', '35', '6'],
                'request_field[sv_report_periods]' => ['1', '2'],
                'request_field[team_direction]' => ['1', '2', '3', '4', '5', '6'],
                'request_field[type_id]' => ['1', '13', '15', '9', '14', '12', '2', '7', '8'],
            ],
            "responseCode" => 200,
            'db' => [
                'lisa_fixtures' => [
                    'filters' => [
                        [
                            'id' => 1,
                            "user_id" => 4,
                            "name" => 'Фильтр',
                            "conditions" => '{
                                "id": {"requests.id": "10"},
                                "fields": ["OR", {"value": "1", "field_id": 10}, {"value": "1", "field_id": 11}, {"value": "1", "field_id": 123}, {"value": "1", "field_id": 124}, {"value": "1", "field_id": 125}, {"value": "1", "field_id": 126}, {"value": "1", "field_id": 127}, {"value": "1", "field_id": 12}, {"value": "1", "field_id": 13}, {"value": "1", "field_id": 14}, {"value": "1", "field_id": 159}, {"value": "1", "field_id": 15}, {"value": "1", "field_id": 16}, {"value": "1", "field_id": 17}, {"value": "1", "field_id": 18}, {"value": "1", "field_id": 19}, {"value": "1", "field_id": 1}, {"value": "1", "field_id": 2}, {"value": "1", "field_id": 3}, {"value": "1", "field_id": 4}, {"value": "1", "field_id": 5}, {"value": "1", "field_id": 6}, {"value": "1", "field_id": 7}, {"value": "1", "field_id": 8}, {"value": "1", "field_id": 9}], 
                                "status": ["in", "requests.status", ["1", "2", "3", "4", "5", "6", "7", "8", "9", "11"]], 
                                "subject": {"requests.subject": "250~!@#$%^&*()_+`=-]\'/[;.,}\"?{:><|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ"}, 
                                "type_id": ["in", "requests.type_id", ["1", "13", "15", "9", "14", "12", "2", "7", "8"]], 
                                "priority": ["in", "requests.priority", ["1", "2", "3"]], 
                                "author_id": ["in", "requests.author_id", ["15", "19", "17"]], 
                                "direction": ["in", "requests.direction", ["0", "1", "2"]], 
                                "parent_id": {"requests.parent_id": "11"},                                   
                                "seller_id": ["in", "requests.seller_id", ["0", "5", "83"]], 
                                "created_at": ["between", "created_at", "2020-04-27 00:00", "2020-05-03 23:59"], 
                                "manager_id": ["in", "requests.manager_id", ["11", "13"]], 
                                "category_id": ["in", "requests.category_id", ["1", "2"]], 
                                "description": {"requests.description": "250~!@#$%^&*()_+`=-]\'/[;.,}\"?{:><|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ"}, 
                                "supervisor_id": ["in", "requests.supervisor_id", ["33", "35", "6"]], 
                                "amount_to_work": {"requests.amount_to_work": "10"}, 
                                "result_comment": {"requests.result_comment": "250~!@#$%^&*()_+`=-]\'/[;.,}\"?{:><|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ"}, 
                                "team_direction": ["in", "requests.team_direction", ["1", "2", "3", "4", "5", "6"]], 
                                "recommendations": {"requests.recommendations": "250~!@#$%^&*()_+`=-]\'/[;.,}\"?{:><|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ"}, 
                                "employee_code_1c": {"requests.employee_code_1c": "012"}, 
                                "report_period_id": ["in", "requests.report_period_id", ["1", "2"]], 
                                "actual_start_date": ["between", "actual_start_date", "2020-05-18 00:00", "2020-05-24 23:59"], 
                                "sv_report_periods": ["json", "sv_report_periods", ["1", "2"]], 
                                "actual_finish_date": ["between", "actual_finish_date", "2020-05-25 00:00", "2020-05-31 23:59"], 
                                "correction_comment": {"requests.correction_comment": "250~!@#$%^&*()_+`=-]\'/[;.,}\"?{:><|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ"}, 
                                "cross_check_status": ["in", "requests.cross_check_status", ["0", "1"]], 
                                "planned_start_date": ["between", "planned_start_date", "2020-05-04 00:00", "2020-05-10 23:59"], 
                                "supervisor_comment": {"requests.supervisor_comment": "250~!@#$%^&*()_+`=-]\'/[;.,}\"?{:><|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ"}, 
                                "awaiting_correction": {"requests.awaiting_correction": "1"}, 
                                "planned_finish_date": ["between", "planned_finish_date", "2020-05-11 00:00", "2020-05-17 23:59"], 
                                "cross_check_manager_id": ["in", "requests.cross_check_manager_id", ["12", "14"]], 
                                "last_change_status_date": ["between", "last_change_status_date", "2020-06-08 00:00", "2020-06-14 23:59"], 
                                "supervisor_process_date": ["between", "supervisor_process_date", "2020-06-01 00:00", "2020-06-07 23:59"]
                            }',
                        ]
                    ]
                ]
            ]
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Создание пустого фильтра',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'Filter[name]' => 'Empty',
                'date[actual_finish_date]' => '',
                'date[actual_start_date]' => '',
                'date[created_at]' => '',
                'date[last_change_status_date]' => '',
                'date[planned_finish_date]' => '',
                'date[planned_start_date]' => '',
                'date[supervisor_process_date]' => '',
            ],
            "responseCode" => 404,
            'db' => [
                'lisa_fixtures' => [
                    'filters' => [
                    ]
                ]
            ]
        ]
    ],

    'case3' => [
        'setting' => [
            'description' => 'Создание фильтра c одним полем',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'Filter[name]' => 'Фильтр 2',
                'request_field[direction]' => ['0', '1', '2'],
                'date[actual_finish_date]' => '',
                'date[actual_start_date]' => '',
                'date[created_at]' => '',
                'date[last_change_status_date]' => '',
                'date[planned_finish_date]' => '',
                'date[planned_start_date]' => '',
                'date[supervisor_process_date]' => '',
            ],
            "responseCode" => 200,
            'db' => [
                'lisa_fixtures' => [
                    'filters' => [
                        [
                            'id' => 1,
                            "user_id" => 4,
                            "name" => 'Фильтр 2',
                            "conditions" => '{"direction": ["in", "requests.direction", ["0", "1", "2"]]}',
                        ]
                    ]
                ]
            ]
        ]
    ]
];
