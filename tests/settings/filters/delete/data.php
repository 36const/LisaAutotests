<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Изменение порядка фильтров',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'responseBody' => [
                'status' => 200
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
                            'name' => 'Mister Filter 4',
                            'conditions' => '{"author_id": ["in", "requests.author_id", ["5"]]}',
                            'order' => 0
                        ],
                        [
                            'id' => 5,
                            'user_id' => 5,
                            'name' => 'Фильтр 1',
                            'conditions' => '{"author_id": ["in", "requests.author_id", ["5"]]}',
                            'order' => 0
                        ],
                        [
                            'id' => 6,
                            'user_id' => 5,
                            'name' => 'Фильтр 2',
                            'conditions' => '{"author_id": ["in", "requests.author_id", ["5"]]}',
                            'order' => 4
                        ],
                        [
                            'id' => 7,
                            'user_id' => 5,
                            'name' => 'Фильтр 3',
                            'conditions' => '{"author_id": ["in", "requests.author_id", ["5"]]}',
                            'order' => 6
                        ],
                    ]
                ]
            ]
        ]
    ],

];
