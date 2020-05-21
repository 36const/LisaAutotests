<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Изменение условий фильтра',
            //удалить по одному значению из "Распределение"
            //сдвинуть даты на неделю назад
            //снять правую колонку чек-боксов
            //в доп. фильтрах в текстовых полях заменить на ссылку
            //в доп. фильтрах в числовых полях добавить 0
            //в доп. фильтрах в множественных полях оставить по одному значению
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'Filter[name]' => 'Новый фильтр',
                'date[actual_finish_date]' => '2020-05-18 00:00to2020-05-24 23:59',
                'date[actual_start_date]' => '2020-05-11 00:00to2020-05-17 23:59',
                'date[created_at]' => '2020-04-20 00:00to2020-04-26 23:59',
                'date[last_change_status_date]' => '2020-06-01 00:00to2020-06-07 23:59',
                'date[planned_finish_date]' => '2020-05-04 00:00to2020-05-10 23:59',
                'date[planned_start_date]' => '2020-04-27 00:00to2020-05-03 23:59',
                'date[supervisor_process_date]' => '2020-05-25 00:00to2020-05-31 23:59',
                'fields[11]' => '1',
                'fields[123]' => '1',
                'fields[124]' => '1',
                'fields[126]' => '1',
                'fields[12]' => '1',
                'fields[14]' => '1',
                'fields[15]' => '1',
                'fields[17]' => '1',
                'fields[18]' => '1',
                'fields[1]' => '1',
                'fields[2]' => '1',
                'fields[4]' => '1',
                'fields[5]' => '1',
                'fields[6]' => '1',
                'fields[8]' => '1',
                'fields[9]' => '1',
                'filter-select2' => ['id', 'status', 'awaiting_correction', 'subject', 'description', 'direction', 'amount_to_work', 'recommendations', 'reason_id', 'parent_id', 'result_comment', 'supervisor_comment', 'report_period_id', 'team_direction', 'correction_comment', 'priority', 'sv_report_periods'],
                'request_field[amount_to_work]' => '100',
                'request_field[author_id]' => ['17', '19'],
                'request_field[awaiting_correction]' => '0',
                'request_field[category_id]' => ['1'],
                'request_field[correction_comment]' => 'https://zabbix3.local/latest.php?groupids%5B%5D=251&hostids%5B%5D=12686&hostids%5B%5D=16666&hostids%5B%5D=16728&hostids%5B%5D=17592&hostids%5B%5D=17607&hostids%5B%5D=17714&hostids%5B%5D=17720&hostids%5B%5D=18537&hostids%5B%5D=19198&application=Memory&select=&show_without_data=1&show_details=1&filter_set=1',
                'request_field[description]' => 'https://zabbix3.local/latest.php?groupids%5B%5D=251&hostids%5B%5D=12686&hostids%5B%5D=16666&hostids%5B%5D=16728&hostids%5B%5D=17592&hostids%5B%5D=17607&hostids%5B%5D=17714&hostids%5B%5D=17720&hostids%5B%5D=18537&hostids%5B%5D=19198&application=Memory&select=&show_without_data=1&show_details=1&filter_set=1',
                'request_field[direction]' => ['0'],
                'request_field[id]' => '100',
                'request_field[manager_id]' => ['13'],
                'request_field[parent_id]' => '110',
                'request_field[priority]' => ['0'],
                'request_field[reason_id]' => ['1'],
                'request_field[recommendations]' => 'https://zabbix3.local/latest.php?groupids%5B%5D=251&hostids%5B%5D=12686&hostids%5B%5D=16666&hostids%5B%5D=16728&hostids%5B%5D=17592&hostids%5B%5D=17607&hostids%5B%5D=17714&hostids%5B%5D=17720&hostids%5B%5D=18537&hostids%5B%5D=19198&application=Memory&select=&show_without_data=1&show_details=1&filter_set=1',
                'request_field[report_period_id]' => ['1'],
                'request_field[result_comment]' => 'https://zabbix3.local/latest.php?groupids%5B%5D=251&hostids%5B%5D=12686&hostids%5B%5D=16666&hostids%5B%5D=16728&hostids%5B%5D=17592&hostids%5B%5D=17607&hostids%5B%5D=17714&hostids%5B%5D=17720&hostids%5B%5D=18537&hostids%5B%5D=19198&application=Memory&select=&show_without_data=1&show_details=1&filter_set=1',
                'request_field[seller_id]' => ['5', '0'],
                'request_field[status]' => ['1'],
                'request_field[subject]' => 'https://zabbix3.local/latest.php?groupids%5B%5D=251&hostids%5B%5D=12686&hostids%5B%5D=16666&hostids%5B%5D=16728&hostids%5B%5D=17592&hostids%5B%5D=17607&hostids%5B%5D=17714&hostids%5B%5D=17720&hostids%5B%5D=18537&hostids%5B%5D=19198&application=Memory&select=&show_without_data=1&show_details=1&filter_set=1',
                'request_field[supervisor_comment]' => 'https://zabbix3.local/latest.php?groupids%5B%5D=251&hostids%5B%5D=12686&hostids%5B%5D=16666&hostids%5B%5D=16728&hostids%5B%5D=17592&hostids%5B%5D=17607&hostids%5B%5D=17714&hostids%5B%5D=17720&hostids%5B%5D=18537&hostids%5B%5D=19198&application=Memory&select=&show_without_data=1&show_details=1&filter_set=1',
                'request_field[supervisor_id]' => ['33', '35'],
                'request_field[sv_report_periods]' => ['1'],
                'request_field[team_direction]' => ['1'],
                'request_field[type_id]' => ['2', '7', '8', '9', '12', '13', '14', '15'],
                '_csrf-backend' => null,
            ],
            "responseCode" => 200,
            'db' => [
                'lisa_fixtures' => [
                    'filters' => [
                        [
                            'id' => 1,
                            "user_id" => 4,
                            "name" => 'Новый фильтр',
                            "conditions" => '{
                                "id": {"requests.id": "100"},
                                "fields": ["OR", {"value": "1", "field_id": 11}, {"value": "1", "field_id": 123}, {"value": "1", "field_id": 124}, {"value": "1", "field_id": 126}, {"value": "1", "field_id": 12}, {"value": "1", "field_id": 14}, {"value": "1", "field_id": 15}, {"value": "1", "field_id": 17}, {"value": "1", "field_id": 18}, {"value": "1", "field_id": 1}, {"value": "1", "field_id": 2}, {"value": "1", "field_id": 4}, {"value": "1", "field_id": 5}, {"value": "1", "field_id": 6}, {"value": "1", "field_id": 8}, {"value": "1", "field_id": 9}],
                                "status": ["in", "requests.status", ["1"]],
                                "subject": {"requests.subject": "https://zabbix3.local/latest.php?groupids%5B%5D=251&hostids%5B%5D=12686&hostids%5B%5D=16666&hostids%5B%5D=16728&hostids%5B%5D=17592&hostids%5B%5D=17607&hostids%5B%5D=17714&hostids%5B%5D=17720&hostids%5B%5D=18537&hostids%5B%5D=19198&application=Memory&select=&show_without_data=1&show_details=1&filter_set=1"},
                                "type_id": ["in", "requests.type_id", ["2", "7", "8", "9", "12", "13", "14", "15"]],
                                "priority": ["in", "requests.priority", ["0"]],
                                "author_id": ["in", "requests.author_id", ["17", "19"]],
                                "direction": ["in", "requests.direction", ["0"]],
                                "parent_id": {"requests.parent_id": "110"},
                                "reason_id": ["in", "requests.reason_id", ["1"]],
                                "seller_id": ["in", "requests.seller_id", ["5", "0"]],
                                "created_at": ["between", "created_at", "2020-04-20 00:00", "2020-04-26 23:59"],
                                "manager_id": ["in", "requests.manager_id", ["13"]],
                                "category_id": ["in", "requests.category_id", ["1"]],
                                "description": {"requests.description": "https://zabbix3.local/latest.php?groupids%5B%5D=251&hostids%5B%5D=12686&hostids%5B%5D=16666&hostids%5B%5D=16728&hostids%5B%5D=17592&hostids%5B%5D=17607&hostids%5B%5D=17714&hostids%5B%5D=17720&hostids%5B%5D=18537&hostids%5B%5D=19198&application=Memory&select=&show_without_data=1&show_details=1&filter_set=1"},
                                "supervisor_id": ["in", "requests.supervisor_id", ["33", "35"]],
                                "amount_to_work": {"requests.amount_to_work": "100"},
                                "result_comment": {"requests.result_comment": "https://zabbix3.local/latest.php?groupids%5B%5D=251&hostids%5B%5D=12686&hostids%5B%5D=16666&hostids%5B%5D=16728&hostids%5B%5D=17592&hostids%5B%5D=17607&hostids%5B%5D=17714&hostids%5B%5D=17720&hostids%5B%5D=18537&hostids%5B%5D=19198&application=Memory&select=&show_without_data=1&show_details=1&filter_set=1"},
                                "team_direction": ["in", "requests.team_direction", ["1"]],
                                "recommendations": {"requests.recommendations": "https://zabbix3.local/latest.php?groupids%5B%5D=251&hostids%5B%5D=12686&hostids%5B%5D=16666&hostids%5B%5D=16728&hostids%5B%5D=17592&hostids%5B%5D=17607&hostids%5B%5D=17714&hostids%5B%5D=17720&hostids%5B%5D=18537&hostids%5B%5D=19198&application=Memory&select=&show_without_data=1&show_details=1&filter_set=1"},
                                "report_period_id": ["in", "requests.report_period_id", ["1"]],
                                "actual_start_date": ["between", "actual_start_date", "2020-05-11 00:00", "2020-05-17 23:59"],
                                "sv_report_periods": ["json", "sv_report_periods", ["1"]],
                                "actual_finish_date": ["between", "actual_finish_date", "2020-05-18 00:00", "2020-05-24 23:59"],
                                "correction_comment": {"requests.correction_comment": "https://zabbix3.local/latest.php?groupids%5B%5D=251&hostids%5B%5D=12686&hostids%5B%5D=16666&hostids%5B%5D=16728&hostids%5B%5D=17592&hostids%5B%5D=17607&hostids%5B%5D=17714&hostids%5B%5D=17720&hostids%5B%5D=18537&hostids%5B%5D=19198&application=Memory&select=&show_without_data=1&show_details=1&filter_set=1"},
                                "planned_start_date": ["between", "planned_start_date", "2020-04-27 00:00", "2020-05-03 23:59"],
                                "supervisor_comment": {"requests.supervisor_comment": "https://zabbix3.local/latest.php?groupids%5B%5D=251&hostids%5B%5D=12686&hostids%5B%5D=16666&hostids%5B%5D=16728&hostids%5B%5D=17592&hostids%5B%5D=17607&hostids%5B%5D=17714&hostids%5B%5D=17720&hostids%5B%5D=18537&hostids%5B%5D=19198&application=Memory&select=&show_without_data=1&show_details=1&filter_set=1"},
                                "awaiting_correction": {"requests.awaiting_correction": "0"},
                                "planned_finish_date": ["between", "planned_finish_date", "2020-05-04 00:00", "2020-05-10 23:59"],
                                "last_change_status_date": ["between", "last_change_status_date", "2020-06-01 00:00", "2020-06-07 23:59"],
                                "supervisor_process_date": ["between", "supervisor_process_date", "2020-05-25 00:00", "2020-05-31 23:59"]
                            }',
                        ]
                    ]
                ]
            ]
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Изменение фильтра на пустой',
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
                '_csrf-backend' => null,
            ],
            "responseCode" => 200,
            'db' => [
                'lisa_fixtures' => [
                    'filters' => [
                        [
                            //'id' => 1,
                            "user_id" => 4,
                            "name" => 'Фильтр',
                            "conditions" => '{
                                "id": {"requests.id": "10"},
                                "fields": ["OR", {"value": "1", "field_id": 10}, {"value": "1", "field_id": 11}, {"value": "1", "field_id": 123}, {"value": "1", "field_id": 124}, {"value": "1", "field_id": 125}, {"value": "1", "field_id": 126}, {"value": "1", "field_id": 127}, {"value": "1", "field_id": 12}, {"value": "1", "field_id": 13}, {"value": "1", "field_id": 14}, {"value": "1", "field_id": 15}, {"value": "1", "field_id": 16}, {"value": "1", "field_id": 17}, {"value": "1", "field_id": 18}, {"value": "1", "field_id": 19}, {"value": "1", "field_id": 1}, {"value": "1", "field_id": 2}, {"value": "1", "field_id": 3}, {"value": "1", "field_id": 4}, {"value": "1", "field_id": 5}, {"value": "1", "field_id": 6}, {"value": "1", "field_id": 7}, {"value": "1", "field_id": 8}, {"value": "1", "field_id": 9}], 
                                "status": ["in", "requests.status", ["1", "2", "3", "4", "5", "6", "7", "8", "9", "11"]], 
                                "subject": {"requests.subject": "250~!@#$%^&*()_+`=-]\'/[;.,}\"?{:><|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ"}, 
                                "type_id": ["in", "requests.type_id", ["1", "13", "15", "9", "14", "12", "2", "7", "8"]], 
                                "priority": ["in", "requests.priority", ["0", "1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12"]], 
                                "author_id": ["in", "requests.author_id", ["15", "19", "17"]], 
                                "direction": ["in", "requests.direction", ["0", "1", "2"]], 
                                "parent_id": {"requests.parent_id": "11"}, 
                                "reason_id": ["in", "requests.reason_id", ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13", "14", "15"]], 
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
                                "report_period_id": ["in", "requests.report_period_id", ["1", "2"]], 
                                "actual_start_date": ["between", "actual_start_date", "2020-05-18 00:00", "2020-05-24 23:59"], 
                                "sv_report_periods": ["json", "sv_report_periods", ["1", "2"]], 
                                "actual_finish_date": ["between", "actual_finish_date", "2020-05-25 00:00", "2020-05-31 23:59"], 
                                "correction_comment": {"requests.correction_comment": "250~!@#$%^&*()_+`=-]\'/[;.,}\"?{:><|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ"}, 
                                "planned_start_date": ["between", "planned_start_date", "2020-05-04 00:00", "2020-05-10 23:59"], 
                                "supervisor_comment": {"requests.supervisor_comment": "250~!@#$%^&*()_+`=-]\'/[;.,}\"?{:><|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ"}, 
                                "awaiting_correction": {"requests.awaiting_correction": "1"}, 
                                "planned_finish_date": ["between", "planned_finish_date", "2020-05-11 00:00", "2020-05-17 23:59"], 
                                "last_change_status_date": ["between", "last_change_status_date", "2020-06-08 00:00", "2020-06-14 23:59"], 
                                "supervisor_process_date": ["between", "supervisor_process_date", "2020-06-01 00:00", "2020-06-07 23:59"]
                            }',
                        ]
                    ]
                ]
            ]
        ]
    ],

    'case3' => [
        'setting' => [
            'description' => 'Удаление условий фильтра',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'Filter[name]' => 'Новый фильтр',
                'request_field[manager_id]' => ['13'],
                'date[actual_finish_date]' => '',
                'date[actual_start_date]' => '',
                'date[created_at]' => '',
                'date[last_change_status_date]' => '',
                'date[planned_finish_date]' => '',
                'date[planned_start_date]' => '',
                'date[supervisor_process_date]' => '',
                '_csrf-backend' => null,
            ],
            "responseCode" => 200,
            'db' => [
                'lisa_fixtures' => [
                    'filters' => [
                        [
                            'id' => 1,
                            "user_id" => 4,
                            "name" => 'Новый фильтр',
                            "conditions" => '{"manager_id": ["in", "requests.manager_id", ["13"]]}',
                        ]
                    ]
                ]
            ]
        ]
    ],

];
