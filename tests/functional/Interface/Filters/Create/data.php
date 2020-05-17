<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Создание фильтра',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'Filter[name]' => 'Фильтр1',
                'date[actual_finish_date]' => '2020-05-26 00:00to2020-06-04 23:59',
                'date[actual_start_date]' => '2020-05-14 00:00to2020-05-28 23:59',
                'date[created_at]' => '2020-05-05 00:00to2020-05-10 23:59',
                'date[last_change_status_date]' => '2020-06-10 00:00to2020-06-10 23:59',
                'date[planned_finish_date]' => '2020-06-09 00:00to2020-06-09 23:59',
                'date[planned_start_date]' => '2020-05-01 00:00to2020-05-08 23:59',
                'date[supervisor_process_date]' => '2020-05-04 00:00to2020-05-14 23:59',
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
                'filter-select2' => ['id', 'status', 'awaiting_correction', 'subject', 'description', 'direction', 'amount_to_work', 'recommendations', 'reason', 'reason_id', 'parent_id', 'result_comment', 'supervisor_comment', 'report_period_id', 'team_direction', 'correction_comment', 'priority'],
                'request_field[amount_to_work]' => '10',
                'request_field[author_id]' => ['15', '17'],
                'request_field[awaiting_correction]' => '0',
                'request_field[category_id]' => ['1', '22'],
                'request_field[correction_comment]' => 'pl,',
                'request_field[description]' => 'asdf',
                'request_field[direction]' => '1',
                'request_field[id]' => '1',
                'request_field[manager_id]' => ['11', '13'],
                'request_field[parent_id]' => '2',
                'request_field[priority]' => '2',
                'request_field[reason]' => '1234',
                'request_field[reason_id]' => '6',
                'request_field[recommendations]' => 'zxcv',
                'request_field[report_period_id]' => '1',
                'request_field[result_comment]' => ']\'/',
                'request_field[seller_id]' => ['83', '5', '0'],
                'request_field[status]' => '2',
                'request_field[subject]' => 'qwer',
                'request_field[supervisor_comment]' => '[;.',
                'request_field[supervisor_id]' => ['33', '34', '35', '1'],
                'request_field[type_id]' => ['1', '9', '12', '13', '14', '15', '2', '7', '8', '10', '6', '11'],
                '_csrf-backend' => null,
            ],
            "responseCode" => 200,
            'db' => [
                'lisa_fixtures' => [
                    'filters' => [
                        [
                            'id' => 1,
                            "user_id" => 4,
                            "name" => 'Фильтр1',
                            "conditions" => '{
                                "id": {"requests.id": "1"}, 
                                "fields": ["OR", {"value": "1", "field_id": 10}, {"value": "1", "field_id": 11}, {"value": "1", "field_id": 123}, {"value": "1", "field_id": 124}, {"value": "1", "field_id": 125}, {"value": "1", "field_id": 126}, {"value": "1", "field_id": 127}, {"value": "1", "field_id": 12}, {"value": "1", "field_id": 13}, {"value": "1", "field_id": 14}, {"value": "1", "field_id": 15}, {"value": "1", "field_id": 16}, {"value": "1", "field_id": 17}, {"value": "1", "field_id": 18}, {"value": "1", "field_id": 19}, {"value": "1", "field_id": 1}, {"value": "1", "field_id": 2}, {"value": "1", "field_id": 3}, {"value": "1", "field_id": 4}, {"value": "1", "field_id": 5}, {"value": "1", "field_id": 6}, {"value": "1", "field_id": 7}, {"value": "1", "field_id": 8}, {"value": "1", "field_id": 9}], "reason": {"requests.reason": "1234"}, 
                                "status": {"requests.status": "2"}, 
                                "subject": {"requests.subject": "qwer"}, 
                                "type_id": ["in", "requests.type_id", ["1", "9", "12", "13", "14", "15", "2", "7", "8", "10", "6", "11"]], 
                                "priority": {"requests.priority": "2"}, 
                                "author_id": ["in", "requests.author_id", ["15", "17"]], 
                                "direction": {"requests.direction": "1"}, 
                                "parent_id": {"requests.parent_id": "2"}, 
                                "reason_id": {"requests.reason_id": "6"}, 
                                "seller_id": ["in", "requests.seller_id", ["83", "5", "0"]], 
                                "created_at": ["between", "created_at", "2020-05-05 00:00", "2020-05-10 23:59"], 
                                "manager_id": ["in", "requests.manager_id", ["11", "13"]], 
                                "category_id": ["in", "requests.category_id", ["1", "22"]], 
                                "description": {"requests.description": "asdf"}, 
                                "supervisor_id": ["in", "requests.supervisor_id", ["33", "34", "35", "1"]], 
                                "amount_to_work": {"requests.amount_to_work": "10"}, 
                                "result_comment": {"requests.result_comment": "]\'/"}, 
                                "recommendations": {"requests.recommendations": "zxcv"}, 
                                "report_period_id": {"requests.report_period_id": "1"}, 
                                "actual_start_date": ["between", "actual_start_date", "2020-05-14 00:00", "2020-05-28 23:59"], 
                                "actual_finish_date": ["between", "actual_finish_date", "2020-05-26 00:00", "2020-06-04 23:59"], 
                                "correction_comment": {"requests.correction_comment": "pl,"}, 
                                "planned_start_date": ["between", "planned_start_date", "2020-05-01 00:00", "2020-05-08 23:59"], 
                                "supervisor_comment": {"requests.supervisor_comment": "[;."}, 
                                "awaiting_correction": {"requests.awaiting_correction": "0"}, 
                                "planned_finish_date": ["between", "planned_finish_date", "2020-06-09 00:00", "2020-06-09 23:59"], 
                                "last_change_status_date": ["between", "last_change_status_date", "2020-06-10 00:00", "2020-06-10 23:59"], 
                                "supervisor_process_date": ["between", "supervisor_process_date", "2020-05-04 00:00", "2020-05-14 23:59"]}',
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
                '_csrf-backend' => null,
            ],
            "responseCode" => 404,
            'db' => [
                'lisa_fixtures' => [
                    'filters' => [
                    ]
                ]
            ]
        ]
    ]

];
