<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Создание ордера',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                '_method' => 'POST',
                'landing_uuid' => 'd782ee74-4b7d-4060-bb76-024549e98fbe',
                'fbclid' => '',
                'mail' => 'qa%40test.com',
                'raw_url' => 'source%3Dtest',
                'event_id' => '35776226'
            ],
            'responseCode' => 200,
            'responseBody' => [
                'res' => 'fail'
            ],
            //массивы для проверки БД
            'db' => [
                'lisa_fixtures' => [
                    'requests' => [
                        [
                            'id' => 1,
                            'author_id' => 9,
                            'type_id' => 2,
                            'supervisor_id' => 23,
                            'manager_id' => null,
                            'status' => 1,
                            'direction' => 1,
                            'priority' => null,
                            'awaiting_correction' => 0,
                            'created_at >=' => date('Y-m-d'),
                            'correction_comment' => null,
                            'amount_to_work' => 1,
                            'subject' => 'COMI-17063 замеры Зимний комбинезон Be easy Ликки 20SD2-19V12 80 см Светло-розовый (2200000054517)',
                            'description' => 'Ссылка на JIRA: https://sd.local/servicedesk/customer/portal/106/COMI-17063  ',
                            'category_id' => 437,
                            'seller_id' => 5,
                            'recommendations' => null,
                            'reason' => null,
                            'parent_id' => null,
                            'planned_start_date' => null,
                            'planned_finish_date' => null,
                            'actual_start_date' => null,
                            'actual_finish_date' => null,
                            'supervisor_process_date' => null,
                            'supervisor_check_date' => null,
                            'result_comment' => null,
                            'supervisor_comment' => null,
                            'last_change_status_date >=' => date('Y-m-d'),
                            'team_direction' => 3,
                            'report_period_id' => null,
                            'sync_source_id' => null,
                            'sv_report_periods' => null,
                            'employee_code_1c' => null,
                            'child_count' => 0,
                            'photo_load_status' => 0,
                            'previous_status' => null,
                            'rz_category_id' => null,
                            'author_team' => null,
                            'supervisor_team' => 9,
                            'manager_team' => null,
                        ]
                    ],
                    'requests_fields' => [
                        [
                            'request_id' => 1,
                            'field_id' => 1,
                            'value' => 1,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 20,
                            'value' => 61,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 49,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 50,
                            'value' => 0,
                        ],
                    ]
                ]
            ]
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Ошибка при неправильном методе',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                '_method' => 'PUT',
                'landing_uuid' => 'd782ee74-4b7d-4060-bb76-024549e98fbe',
                'fbclid' => '',
                'mail' => 'qa%40test.com',
                'raw_url' => 'source%3Dtest',
                'event_id' => '35776226'
            ],
            'responseCode' => 405,
            'responseBody' => 'An Error Occurred: Method Not Allowed',
            'db' => [
                'lisa_fixtures' => [
                    'requests' => [],
                    'requests_fields' => []
                ]
            ]
        ]
    ],

    'case3' => [
        'setting' => [
            'description' => 'Ошибка при отсутствии всех полей кроме метода',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                '_method' => 'POST',
//                'landing_uuid' => 'd782ee74-4b7d-4060-bb76-024549e98fbe',
//                'fbclid' => '',
//                'mail' => 'qa%40test.com',
//                'raw_url' => 'source%3Dtest',
//                'event_id' => '35776226'
            ],
            'responseCode' => 500,
            'responseBody' => 'Server Error',
            'db' => [
                'lisa_fixtures' => [
                    'requests' => [],
                    'requests_fields' => []
                ]
            ]
        ]
    ],


];