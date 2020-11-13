<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Создание детального отчёта с добавлением только полей по-порядку',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestParameter' => 'create',
            'requestBody' => [
                'Fields' => '',
                'Fields' => '["id"]',
                'Fields' => '["id","17"]',
                'Fields' => '["id","17","3"]',
                'Fields' => '["id","17","3","manager_drfo"]',
                'Fields' => '["id","17","3","manager_drfo","supervisor_process_date"]',
                'Fields' => '["id","17","3","manager_drfo","supervisor_process_date","subject"]',
                'Fields' => '["id","17","3","manager_drfo","supervisor_process_date","subject","category_id"]',
                'Fields' => '["id","17","3","manager_drfo","supervisor_process_date","subject","category_id","amount_to_work"]',
                'Fields' => '["id","17","3","manager_drfo","supervisor_process_date","subject","category_id","amount_to_work","98"]',
                'Fields' => '["id","17","3","manager_drfo","supervisor_process_date","subject","category_id","amount_to_work","98","cross_check_manager_id"]',
                'Fields' => '["id","17","3","manager_drfo","supervisor_process_date","subject","category_id","amount_to_work","98","cross_check_manager_id","cross_check_status"]',
                'Fields' => '["id","17","3","manager_drfo","supervisor_process_date","subject","category_id","amount_to_work","98","cross_check_manager_id","cross_check_status","direction"]',
                'Fields' => '["id","17","3","manager_drfo","supervisor_process_date","subject","category_id","amount_to_work","98","cross_check_manager_id","cross_check_status","direction","125"]',
                'Fields' => '["id","17","3","manager_drfo","supervisor_process_date","subject","category_id","amount_to_work","98","cross_check_manager_id","cross_check_status","direction","125","sv_report_periods"]',
                'Fields' => '["id","17","3","manager_drfo","supervisor_process_date","subject","category_id","amount_to_work","98","cross_check_manager_id","cross_check_status","direction","125","sv_report_periods","46"]',
                'Fields' => '["id","17","3","manager_drfo","supervisor_process_date","subject","category_id","amount_to_work","98","cross_check_manager_id","cross_check_status","direction","125","sv_report_periods","46","130"]',
                'Fields' => '["id","17","3","manager_drfo","supervisor_process_date","subject","category_id","amount_to_work","98","cross_check_manager_id","cross_check_status","direction","125","sv_report_periods","46","130","reason"]',
                'Fields' => '["id","17","3","manager_drfo","supervisor_process_date","subject","category_id","amount_to_work","98","cross_check_manager_id","cross_check_status","direction","125","sv_report_periods","46","130","reason","157"]',
                'Fields' => '["id","17","3","manager_drfo","supervisor_process_date","subject","category_id","amount_to_work","98","cross_check_manager_id","cross_check_status","direction","125","sv_report_periods","46","130","reason","157","status"]',
                'Fields' => '["id","17","3","manager_drfo","supervisor_process_date","subject","category_id","amount_to_work","98","cross_check_manager_id","cross_check_status","direction","125","sv_report_periods","46","130","reason","157","status","supervisor_id"]',
                'Fields' => '["id","17","3","manager_drfo","supervisor_process_date","subject","category_id","amount_to_work","98","cross_check_manager_id","cross_check_status","direction","125","sv_report_periods","46","130","reason","157","status","supervisor_id","type_id"]',
                'Fields' => '["id","17","3","manager_drfo","supervisor_process_date","subject","category_id","amount_to_work","98","cross_check_manager_id","cross_check_status","direction","125","sv_report_periods","46","130","reason","157","status","supervisor_id","type_id","actual_finish_date"]',
                'Report[title]' => 'Всё во всём',
            ],
            'db' => [
                "lisa_fixtures" => [
                    "reports" => [
                        [
                            "id" => 1,
                            "title" => "Всё во всём",
                            "fields" => '["id","17","3","manager_drfo","supervisor_process_date","subject","category_id","amount_to_work","98","cross_check_manager_id","cross_check_status","direction","125","sv_report_periods","46","130","reason","157","status","supervisor_id","type_id","actual_finish_date"]',
                            "conditions" => "[]",
                            "type" => 0
                        ]
                    ],
                ],
            ]
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Создание детального отчёта с направлениями и изменением порядка полей после добавления',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestParameter' => 'create',
            'requestBody' => [
                'Fields' => '',
                'Fields' => '["id"]',
                'Fields' => '["id","127"]',
                'Fields' => '["id","127","2"]',
                'Fields' => '["id","127","2","110"]',
                'Fields' => '["127","2","110","id"]',
                'Fields' => '["2","110","127","id"]',
                'Fields' => '["110","2","127","id"]',
                'Report[conditions][team_direction]' => ['1', '2', '3', '4', '5', '6'],
                'Report[title]' => 'Всё во всём',
            ],
            'db' => [
                "lisa_fixtures" => [
                    "reports" => [
                        [
                            "id" => 1,
                            "title" => "Всё во всём",
                            'fields' => '["110","2","127","id"]',
                            "conditions" => '{"team_direction": ["1", "2", "3", "4", "5", "6"]}',
                            "type" => 0
                        ]
                    ],
                ],
            ]
        ]
    ],

    'case3' => [
        'setting' => [
            'description' => 'Создание детального отчёта с типами и добавлением полей не по-порядку',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestParameter' => 'create',
            'requestBody' => [
                'Fields' => '',
                'Fields' => '["29"]',
                'Fields' => '["155","29"]',
                'Fields' => '["155","29","40"]',
                'Fields' => '["155","110","29","40"]',
                'Fields' => '["155","110","29","priority","40"]',
                'Fields' => '["155","110","29","priority","40","156"]',
                'Fields' => '["155","110","29","priority","40","124","156"]',
                'Report[conditions][type_id]' => ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15'],
                'Report[title]' => 'Всё во всём',
            ],
            'db' => [
                "lisa_fixtures" => [
                    "reports" => [
                        [
                            "id" => 1,
                            "title" => "Всё во всём",
                            'fields' => '["155","110","29","priority","40","124","156"]',
                            "conditions" => '{"type_id": ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13", "14", "15"]}',
                            "type" => 0
                        ]
                    ]
                ]
            ]
        ]
    ],

    'case4' => [
        'setting' => [
            'description' => 'Создание детального отчёта с типами, направлениями и возвращением полей',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestParameter' => 'create',
            'requestBody' => [
                'Fields' => '',
                'Fields' => '["155"]',
                'Fields' => '["155","111"]',
                'Fields' => '["155","111","31"]',
                'Fields' => '["155","111","71","31"]',
                'Fields' => '["155","111","142","71","31"]',
                'Fields' => '["155","55","111","142","71","31"]',
                'Fields' => '["155","55","111","142","131","71","31"]',
                'Fields' => '["155","55","116","111","142","131","71","31"]',
                'Fields' => '["155","55","status","116","111","142","131","71","31"]',
                'Fields' => '["55","status","116","111","142","131","71","31"]',
                'Fields' => '["55","116","111","142","131","71","31"]',
                'Fields' => '["55","116","142","131","71","31"]',
                'Fields' => '["55","116","142","131","31"]',
                'Report[conditions][team_direction]' => ['1', '2', '3', '4', '5', '6'],
                'Report[conditions][type_id]' => ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15'],
                'Report[title]' => 'Всё во всём',
            ],
            'db' => [
                "lisa_fixtures" => [
                    "reports" => [
                        [
                            "id" => 1,
                            "title" => "Всё во всём",
                            'fields' => '["55","116","142","131","31"]',
                            "conditions" => '{"type_id": ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13", "14", "15"], "team_direction": ["1", "2", "3", "4", "5", "6"]}',
                            "type" => 0
                        ]
                    ],
                ],
            ]
        ]
    ],

    'case5' => [
        'setting' => [
            'description' => 'Создание сводного отчёта с указанием только полей без изменений',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case5.php',
        'provider_data' => [
            'requestParameter' => 'create-total?id=1',
            'requestBody' => [
                'Fields' => '["id","17","3","manager_drfo","supervisor_process_date","subject","category_id","amount_to_work","98","cross_check_manager_id","cross_check_status","direction","125","sv_report_periods","46","130","reason","157","status","supervisor_id","type_id","actual_finish_date"]',
                'Report[title]' => 'Всё во всём (сводный)',
            ],
            'db' => [
                "lisa_fixtures" => [
                    "reports" => [
                        [
                            "id" => 1,
                            "title" => "Всё во всём",
                            "fields" => '["id","17","3","manager_drfo","supervisor_process_date","subject","category_id","amount_to_work","98","cross_check_manager_id","cross_check_status","direction","125","sv_report_periods","46","130","reason","157","status","supervisor_id","type_id","actual_finish_date"]',
                            "conditions" => "[]",
                            "type" => 0
                        ],
                        [
                            "id" => 2,
                            "title" => "Всё во всём (сводный)",
                            "fields" => '["id","17","3","manager_drfo","supervisor_process_date","subject","category_id","amount_to_work","98","cross_check_manager_id","cross_check_status","direction","125","sv_report_periods","46","130","reason","157","status","supervisor_id","type_id","actual_finish_date"]',
                            "conditions" => "[]",
                            "type" => 1
                        ],
                    ],
                ],
            ]
        ]
    ],

    'case6' => [
        'setting' => [
            'description' => 'Создание сводного отчёта с направлениями и изменением порядка полей',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case6.php',
        'provider_data' => [
            'requestParameter' => 'create-total?id=1',
            'requestBody' => [
                'Fields' => '["id", "17", "3", "manager_drfo", "supervisor_process_date", "subject", "category_id", "amount_to_work", "98", "cross_check_manager_id", "cross_check_status", "direction", "125", "sv_report_periods", "46", "130", "reason", "157", "status", "supervisor_id", "type_id", "actual_finish_date"]',
                'Fields' => '["id","17","3","manager_drfo","supervisor_process_date","subject","category_id","amount_to_work","actual_finish_date","98","cross_check_manager_id","cross_check_status","direction","125","sv_report_periods","46","130","reason","157","status","supervisor_id","type_id"]',
                'Fields' => '["id","17","3","manager_drfo","supervisor_process_date","subject","category_id","amount_to_work","actual_finish_date","type_id","98","cross_check_manager_id","cross_check_status","direction","125","sv_report_periods","46","130","reason","157","status","supervisor_id"]',
                'Fields' => '["id","17","3","manager_drfo","supervisor_process_date","subject","category_id","amount_to_work","actual_finish_date","type_id","98","supervisor_id","cross_check_manager_id","cross_check_status","direction","125","sv_report_periods","46","130","reason","157","status"]',
                'Fields' => '["id","17","3","manager_drfo","supervisor_process_date","subject","category_id","amount_to_work","actual_finish_date","type_id","98","supervisor_id","status","cross_check_manager_id","cross_check_status","direction","125","sv_report_periods","46","130","reason","157"]',
                'Fields' => '["id","17","3","manager_drfo","supervisor_process_date","subject","category_id","amount_to_work","actual_finish_date","type_id","98","supervisor_id","status","157","cross_check_manager_id","cross_check_status","direction","125","sv_report_periods","46","130","reason"]',
                'Fields' => '["id","17","3","manager_drfo","supervisor_process_date","subject","category_id","amount_to_work","actual_finish_date","type_id","98","supervisor_id","status","157","reason","cross_check_manager_id","cross_check_status","direction","125","sv_report_periods","46","130"]',
                'Fields' => '["id","17","3","manager_drfo","supervisor_process_date","subject","category_id","amount_to_work","actual_finish_date","type_id","98","supervisor_id","status","157","reason","cross_check_manager_id","cross_check_status","direction","125","sv_report_periods","46","130"]',
                'Fields' => '["id","17","3","manager_drfo","supervisor_process_date","subject","category_id","amount_to_work","actual_finish_date","type_id","98","supervisor_id","status","157","reason","130","cross_check_manager_id","cross_check_status","direction","125","sv_report_periods","46"]',
                'Fields' => '["id","17","3","manager_drfo","supervisor_process_date","subject","category_id","amount_to_work","actual_finish_date","type_id","98","supervisor_id","status","157","reason","130","46","cross_check_manager_id","cross_check_status","direction","125","sv_report_periods"]',
                'Fields' => '["id","17","3","manager_drfo","supervisor_process_date","subject","category_id","amount_to_work","actual_finish_date","type_id","98","supervisor_id","status","157","reason","130","46","sv_report_periods","cross_check_manager_id","cross_check_status","direction","125"]',
                'Fields' => '["id","17","3","manager_drfo","supervisor_process_date","subject","category_id","amount_to_work","actual_finish_date","type_id","98","supervisor_id","status","157","reason","130","46","sv_report_periods","125","cross_check_manager_id","cross_check_status","direction"]',
                'Fields' => '["id","17","3","manager_drfo","supervisor_process_date","subject","category_id","amount_to_work","actual_finish_date","type_id","98","supervisor_id","status","157","reason","130","46","sv_report_periods","125","direction","cross_check_manager_id","cross_check_status"]',
                'Fields' => '["id","17","3","manager_drfo","supervisor_process_date","subject","category_id","amount_to_work","actual_finish_date","type_id","98","supervisor_id","status","157","reason","130","46","sv_report_periods","125","direction","cross_check_status","cross_check_manager_id"]',
                'Report[conditions][team_direction]' => ['1','2','3','4','5','6'],
                'Report[title]' => 'Всё во всём (сводный)',
            ],
            'db' => [
                "lisa_fixtures" => [
                    "reports" => [
                        [
                            "id" => 1,
                            "title" => "Всё во всём",
                            "fields" => '["id","17","3","manager_drfo","supervisor_process_date","subject","category_id","amount_to_work","98","cross_check_manager_id","cross_check_status","direction","125","sv_report_periods","46","130","reason","157","status","supervisor_id","type_id","actual_finish_date"]',
                            "conditions" => '{"team_direction": ["1", "2", "3", "4", "5", "6"]}',
                            "type" => 0
                        ],
                        [
                            "id" => 2,
                            "title" => "Всё во всём (сводный)",
                            'fields' => '["id","17","3","manager_drfo","supervisor_process_date","subject","category_id","amount_to_work","actual_finish_date","type_id","98","supervisor_id","status","157","reason","130","46","sv_report_periods","125","direction","cross_check_status","cross_check_manager_id"]',
                            "conditions" => '{"team_direction": ["1", "2", "3", "4", "5", "6"]}',
                            "type" => 1
                        ],
                    ],
                ],
            ]
        ]
    ],

    'case7' => [
        'setting' => [
            'description' => 'Создание сводного отчёта с типами и добавлением новых полей',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case7.php',
        'provider_data' => [
            'requestParameter' => 'create-total?id=1',
            'requestBody' => [
                'Fields' => '["id", "17", "3", "manager_drfo", "supervisor_process_date", "subject", "category_id", "amount_to_work", "98", "cross_check_manager_id", "cross_check_status", "direction", "125", "sv_report_periods", "46", "130", "reason", "157", "status", "supervisor_id", "type_id", "actual_finish_date"]',
                'Fields' => '["id","17","75","3","manager_drfo","supervisor_process_date","subject","category_id","amount_to_work","98","cross_check_manager_id","cross_check_status","direction","125","sv_report_periods","46","130","reason","157","status","supervisor_id","type_id","actual_finish_date"]',
                'Fields' => '["id","17","75","3","manager_drfo","supervisor_process_date","88","subject","category_id","amount_to_work","98","cross_check_manager_id","cross_check_status","direction","125","sv_report_periods","46","130","reason","157","status","supervisor_id","type_id","actual_finish_date"]',
                'Fields' => '["id","17","75","3","manager_drfo","supervisor_process_date","88","subject","category_id","28","amount_to_work","98","cross_check_manager_id","cross_check_status","direction","125","sv_report_periods","46","130","reason","157","status","supervisor_id","type_id","actual_finish_date"]',
                'Fields' => '["id","17","75","3","manager_drfo","supervisor_process_date","88","subject","category_id","28","amount_to_work","98","cross_check_manager_id","cross_check_status","121","direction","125","sv_report_periods","46","130","reason","157","status","supervisor_id","type_id","actual_finish_date"]',
                'Report[conditions][type_id]' => ['1','2','3','4','5','6','7','8','9','10','11','12','13','14','15'],
                'Report[title]' => 'Всё во всём (сводный)',
            ],
            'db' => [
                "lisa_fixtures" => [
                    "reports" => [
                        [
                            "id" => 1,
                            "title" => "Всё во всём",
                            "fields" => '["id","17","3","manager_drfo","supervisor_process_date","subject","category_id","amount_to_work","98","cross_check_manager_id","cross_check_status","direction","125","sv_report_periods","46","130","reason","157","status","supervisor_id","type_id","actual_finish_date"]',
                            "conditions" => '{"type_id": ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13", "14", "15"]}',
                            "type" => 0
                        ],
                        [
                            "id" => 2,
                            "title" => "Всё во всём (сводный)",
                            'fields' => '["id","17","75","3","manager_drfo","supervisor_process_date","88","subject","category_id","28","amount_to_work","98","cross_check_manager_id","cross_check_status","121","direction","125","sv_report_periods","46","130","reason","157","status","supervisor_id","type_id","actual_finish_date"]',
                            "conditions" => '{"type_id": ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13", "14", "15"]}',
                            "type" => 1
                        ],
                    ]
                ]
            ]
        ]
    ],

    'case8' => [
        'setting' => [
            'description' => 'Создание сводного отчёта с типами, направлениями и удалением изначальных полей',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case8.php',
        'provider_data' => [
            'requestParameter' => 'create-total?id=1',
            'requestBody' => [
                'Fields' => '["id", "17", "3", "manager_drfo", "supervisor_process_date", "subject", "category_id", "amount_to_work", "98", "cross_check_manager_id", "cross_check_status", "direction", "125", "sv_report_periods", "46", "130", "reason", "157", "status", "supervisor_id", "type_id", "actual_finish_date"]',
                'Fields' => '["id","3","manager_drfo","supervisor_process_date","subject","category_id","amount_to_work","98","cross_check_manager_id","cross_check_status","direction","125","sv_report_periods","46","130","reason","157","status","supervisor_id","type_id","actual_finish_date"]',
                'Fields' => '["id","3","manager_drfo","subject","category_id","amount_to_work","98","cross_check_manager_id","cross_check_status","direction","125","sv_report_periods","46","130","reason","157","status","supervisor_id","type_id","actual_finish_date"]',
                'Fields' => '["id","3","manager_drfo","subject","category_id","98","cross_check_manager_id","cross_check_status","direction","125","sv_report_periods","46","130","reason","157","status","supervisor_id","type_id","actual_finish_date"]',
                'Fields' => '["id","3","manager_drfo","subject","category_id","98","cross_check_manager_id","cross_check_status","125","sv_report_periods","46","130","reason","157","status","supervisor_id","type_id","actual_finish_date"]',
                'Fields' => '["id","3","manager_drfo","subject","category_id","98","cross_check_manager_id","cross_check_status","125","sv_report_periods","130","reason","157","status","supervisor_id","type_id","actual_finish_date"]',
                'Fields' => '["id","3","manager_drfo","subject","category_id","98","cross_check_manager_id","cross_check_status","125","sv_report_periods","130","reason","status","supervisor_id","type_id","actual_finish_date"]',
                'Fields' => '["id","3","manager_drfo","subject","category_id","98","cross_check_manager_id","cross_check_status","125","sv_report_periods","130","reason","status","type_id","actual_finish_date"]',
                'Fields' => '["id","3","manager_drfo","subject","category_id","98","cross_check_manager_id","cross_check_status","125","sv_report_periods","130","reason","status","type_id"]',
                'Report[conditions][team_direction]' => ['1','2','3','4','5','6'],
                'Report[conditions][type_id]' => ['1','2','3','4','5','6','7','8','9','10','11','12','13','14','15'],
                'Report[title]' => 'Всё во всём (сводный)',
            ],
            'db' => [
                "lisa_fixtures" => [
                    "reports" => [
                        [
                            "id" => 1,
                            "title" => "Всё во всём",
                            "fields" => '["id","17","3","manager_drfo","supervisor_process_date","subject","category_id","amount_to_work","98","cross_check_manager_id","cross_check_status","direction","125","sv_report_periods","46","130","reason","157","status","supervisor_id","type_id","actual_finish_date"]',
                            "conditions" => '{"type_id": ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13", "14", "15"], "team_direction": ["1", "2", "3", "4", "5", "6"]}',
                            "type" => 0
                        ],
                        [
                            "id" => 2,
                            "title" => "Всё во всём (сводный)",
                            'fields' => '["id","3","manager_drfo","subject","category_id","98","cross_check_manager_id","cross_check_status","125","sv_report_periods","130","reason","status","type_id"]',
                            "conditions" => '{"type_id": ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13", "14", "15"], "team_direction": ["1", "2", "3", "4", "5", "6"]}',
                            "type" => 1
                        ],
                    ],
                ],
            ]
        ]
    ],

    'case9' => [
        'setting' => [
            'description' => 'Создание копии детального отчёта с типами, направлениями и без изменений полей',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case8.php',
        'provider_data' => [
            'requestParameter' => 'copy?id=1',
            'requestBody' => [
                'Fields' => '["id", "17", "3", "manager_drfo", "supervisor_process_date", "subject", "category_id", "amount_to_work", "98", "cross_check_manager_id", "cross_check_status", "direction", "125", "sv_report_periods", "46", "130", "reason", "157", "status", "supervisor_id", "type_id", "actual_finish_date"]',
                'Report[conditions][team_direction]' => ['1','2','3','4','5','6'],
                'Report[conditions][type_id]' => ['1','2','3','4','5','6','7','8','9','10','11','12','13','14','15'],
                'Report[title]' => 'Всё во всём (копия)',
            ],
            'db' => [
                "lisa_fixtures" => [
                    "reports" => [
                        [
                            "id" => 1,
                            "title" => "Всё во всём",
                            "fields" => '["id", "17", "3", "manager_drfo", "supervisor_process_date", "subject", "category_id", "amount_to_work", "98", "cross_check_manager_id", "cross_check_status", "direction", "125", "sv_report_periods", "46", "130", "reason", "157", "status", "supervisor_id", "type_id", "actual_finish_date"]',
                            "conditions" => '{"type_id": ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13", "14", "15"], "team_direction": ["1", "2", "3", "4", "5", "6"]}',
                            "type" => 0
                        ],
                        [
                            "id" => 2,
                            "title" => "Всё во всём (копия)",
                            "fields" => '["id", "17", "3", "manager_drfo", "supervisor_process_date", "subject", "category_id", "amount_to_work", "98", "cross_check_manager_id", "cross_check_status", "direction", "125", "sv_report_periods", "46", "130", "reason", "157", "status", "supervisor_id", "type_id", "actual_finish_date"]',
                            "conditions" => '{"type_id": ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13", "14", "15"], "team_direction": ["1", "2", "3", "4", "5", "6"]}',
                            "type" => 0
                        ],
                    ],
                ],
            ]
        ]
    ],

    'case10' => [
        'setting' => [
            'description' => 'Создание копии сводного отчёта с типами, направлениями и добавлением/удалением/изменением порядка полей',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case10.php',
        'provider_data' => [
            'requestParameter' => 'copy?id=2',
            'requestBody' => [
                'Fields' => '["id", "17", "3", "manager_drfo", "supervisor_process_date", "subject", "category_id", "amount_to_work", "98", "cross_check_manager_id", "cross_check_status", "direction", "125", "sv_report_periods", "46", "130", "reason", "157", "status", "supervisor_id", "type_id", "actual_finish_date"]',
                'Fields' => '["17","3","manager_drfo","supervisor_process_date","subject","category_id","amount_to_work","98","cross_check_manager_id","cross_check_status","direction","125","sv_report_periods","46","130","reason","157","status","supervisor_id","type_id","actual_finish_date"]',
                'Fields' => '["17","manager_drfo","supervisor_process_date","subject","category_id","amount_to_work","98","cross_check_manager_id","cross_check_status","direction","125","sv_report_periods","46","130","reason","157","status","supervisor_id","type_id","actual_finish_date"]',
                'Fields' => '["17","manager_drfo","subject","category_id","amount_to_work","98","cross_check_manager_id","cross_check_status","direction","125","sv_report_periods","46","130","reason","157","status","supervisor_id","type_id","actual_finish_date"]',
                'Fields' => '["17","manager_drfo","subject","category_id","98","cross_check_manager_id","cross_check_status","direction","125","sv_report_periods","46","130","reason","157","status","supervisor_id","type_id","actual_finish_date"]',
                'Fields' => '["17","manager_drfo","subject","category_id","98","cross_check_manager_id","direction","125","sv_report_periods","46","130","reason","157","status","supervisor_id","type_id","actual_finish_date"]',
                'Fields' => '["17","manager_drfo","subject","category_id","98","cross_check_manager_id","direction","sv_report_periods","46","130","reason","157","status","supervisor_id","type_id","actual_finish_date"]',
                'Fields' => '["17","manager_drfo","subject","category_id","98","cross_check_manager_id","direction","sv_report_periods","46","reason","157","status","supervisor_id","type_id","actual_finish_date"]',
                'Fields' => '["17","manager_drfo","subject","category_id","98","cross_check_manager_id","direction","sv_report_periods","46","reason","157","supervisor_id","type_id","actual_finish_date"]',
                'Fields' => '["17","manager_drfo","subject","category_id","98","cross_check_manager_id","direction","sv_report_periods","46","reason","157","supervisor_id","type_id"]',
                'Fields' => '["17","type_id","manager_drfo","subject","category_id","98","cross_check_manager_id","direction","sv_report_periods","46","reason","157","supervisor_id"]',
                'Fields' => '["17","type_id","manager_drfo","subject","category_id","157","98","cross_check_manager_id","direction","sv_report_periods","46","reason","supervisor_id"]',
                'Fields' => '["17","type_id","manager_drfo","subject","category_id","157","98","cross_check_manager_id","direction","sv_report_periods","46","supervisor_id","reason"]',
                'Fields' => '["17","type_id","manager_drfo","93","subject","category_id","157","98","cross_check_manager_id","direction","sv_report_periods","46","supervisor_id","reason"]',
                'Fields' => '["17","type_id","manager_drfo","93","subject","category_id","157","98","57","cross_check_manager_id","direction","sv_report_periods","46","supervisor_id","reason"]',
                'Fields' => '["17","type_id","manager_drfo","93","subject","category_id","157","98","57","cross_check_manager_id","direction","146","sv_report_periods","46","supervisor_id","reason"]',
                'Fields' => '["17","type_id","manager_drfo","93","subject","category_id","157","98","57","cross_check_manager_id","direction","146","sv_report_periods","46","supervisor_id","reason","recommendations"]',
                'Report[conditions][team_direction]' => ['1','2','3','4','5','6'],
                'Report[conditions][type_id]' => ['1','2','3','4','5','6','7','8','9','10','11','12','13','14','15'],
                'Report[title]' => 'Всё во всём (сводный) (копия)',
            ],
            'db' => [
                "lisa_fixtures" => [
                    "reports" => [
                        [
                            "id" => 1,
                            "title" => "Всё во всём",
                            "fields" => '["id","17","3","manager_drfo","supervisor_process_date","subject","category_id","amount_to_work","98","cross_check_manager_id","cross_check_status","direction","125","sv_report_periods","46","130","reason","157","status","supervisor_id","type_id","actual_finish_date"]',
                            "conditions" => '{"type_id": ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13", "14", "15"], "team_direction": ["1", "2", "3", "4", "5", "6"]}',
                            "type" => 0
                        ],
                        [
                            "id" => 2,
                            "title" => "Всё во всём (сводный)",
                            "fields" => '["id","17","3","manager_drfo","supervisor_process_date","subject","category_id","amount_to_work","98","cross_check_manager_id","cross_check_status","direction","125","sv_report_periods","46","130","reason","157","status","supervisor_id","type_id","actual_finish_date"]',
                            "conditions" => '{"type_id": ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13", "14", "15"], "team_direction": ["1", "2", "3", "4", "5", "6"]}',
                            "type" => 1
                        ],
                        [
                            "id" => 3,
                            "title" => "Всё во всём (сводный) (копия)",
                            'fields' => '["17","type_id","manager_drfo","93","subject","category_id","157","98","57","cross_check_manager_id","direction","146","sv_report_periods","46","supervisor_id","reason","recommendations"]',
                            "conditions" => '{"type_id": ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13", "14", "15"], "team_direction": ["1", "2", "3", "4", "5", "6"]}',
                            "type" => 0
                        ],
                    ],
                ],
            ]
        ]
    ],

    'case11' => [
        'setting' => [
            'description' => 'Создание детального отчёта с дублированием названия',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case10.php',
        'provider_data' => [
            'requestParameter' => 'create',
            'requestBody' => [
                'Fields' => '["id", "17", "3", "manager_drfo", "supervisor_process_date", "subject", "category_id", "amount_to_work", "98", "cross_check_manager_id", "cross_check_status", "direction", "125", "sv_report_periods", "46", "130", "reason", "157", "status", "supervisor_id", "type_id", "actual_finish_date"]',
                'Fields' => '["17","3","manager_drfo","supervisor_process_date","subject","category_id","amount_to_work","98","cross_check_manager_id","cross_check_status","direction","125","sv_report_periods","46","130","reason","157","status","supervisor_id","type_id","actual_finish_date"]',
                'Fields' => '["17","manager_drfo","supervisor_process_date","subject","category_id","amount_to_work","98","cross_check_manager_id","cross_check_status","direction","125","sv_report_periods","46","130","reason","157","status","supervisor_id","type_id","actual_finish_date"]',
                'Fields' => '["17","manager_drfo","subject","category_id","amount_to_work","98","cross_check_manager_id","cross_check_status","direction","125","sv_report_periods","46","130","reason","157","status","supervisor_id","type_id","actual_finish_date"]',
                'Fields' => '["17","manager_drfo","subject","category_id","98","cross_check_manager_id","cross_check_status","direction","125","sv_report_periods","46","130","reason","157","status","supervisor_id","type_id","actual_finish_date"]',
                'Fields' => '["17","manager_drfo","subject","category_id","98","cross_check_manager_id","direction","125","sv_report_periods","46","130","reason","157","status","supervisor_id","type_id","actual_finish_date"]',
                'Fields' => '["17","manager_drfo","subject","category_id","98","cross_check_manager_id","direction","sv_report_periods","46","130","reason","157","status","supervisor_id","type_id","actual_finish_date"]',
                'Fields' => '["17","manager_drfo","subject","category_id","98","cross_check_manager_id","direction","sv_report_periods","46","reason","157","status","supervisor_id","type_id","actual_finish_date"]',
                'Fields' => '["17","manager_drfo","subject","category_id","98","cross_check_manager_id","direction","sv_report_periods","46","reason","157","supervisor_id","type_id","actual_finish_date"]',
                'Fields' => '["17","manager_drfo","subject","category_id","98","cross_check_manager_id","direction","sv_report_periods","46","reason","157","supervisor_id","type_id"]',
                'Fields' => '["17","type_id","manager_drfo","subject","category_id","98","cross_check_manager_id","direction","sv_report_periods","46","reason","157","supervisor_id"]',
                'Fields' => '["17","type_id","manager_drfo","subject","category_id","157","98","cross_check_manager_id","direction","sv_report_periods","46","reason","supervisor_id"]',
                'Fields' => '["17","type_id","manager_drfo","subject","category_id","157","98","cross_check_manager_id","direction","sv_report_periods","46","supervisor_id","reason"]',
                'Fields' => '["17","type_id","manager_drfo","93","subject","category_id","157","98","cross_check_manager_id","direction","sv_report_periods","46","supervisor_id","reason"]',
                'Fields' => '["17","type_id","manager_drfo","93","subject","category_id","157","98","57","cross_check_manager_id","direction","sv_report_periods","46","supervisor_id","reason"]',
                'Fields' => '["17","type_id","manager_drfo","93","subject","category_id","157","98","57","cross_check_manager_id","direction","146","sv_report_periods","46","supervisor_id","reason"]',
                'Fields' => '["17","type_id","manager_drfo","93","subject","category_id","157","98","57","cross_check_manager_id","direction","146","sv_report_periods","46","supervisor_id","reason","recommendations"]',
                'Report[conditions][team_direction]' => ['1','2','3','4','5','6'],
                'Report[conditions][type_id]' => ['1','2','3','4','5','6','7','8','9','10','11','12','13','14','15'],
                'Report[title]' => 'Всё во всём',
            ],
            'db' => [
                "lisa_fixtures" => [
                    "reports" => [
                        [
                            "id" => 1,
                            "title" => "Всё во всём",
                            "fields" => '["id","17","3","manager_drfo","supervisor_process_date","subject","category_id","amount_to_work","98","cross_check_manager_id","cross_check_status","direction","125","sv_report_periods","46","130","reason","157","status","supervisor_id","type_id","actual_finish_date"]',
                            "conditions" => '{"type_id": ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13", "14", "15"], "team_direction": ["1", "2", "3", "4", "5", "6"]}',
                            "type" => 0
                        ],
                        [
                            "id" => 2,
                            "title" => "Всё во всём (сводный)",
                            "fields" => '["id","17","3","manager_drfo","supervisor_process_date","subject","category_id","amount_to_work","98","cross_check_manager_id","cross_check_status","direction","125","sv_report_periods","46","130","reason","157","status","supervisor_id","type_id","actual_finish_date"]',
                            "conditions" => '{"type_id": ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13", "14", "15"], "team_direction": ["1", "2", "3", "4", "5", "6"]}',
                            "type" => 1
                        ],
                    ],
                ],
            ]
        ]
    ],

    'case12' => [
        'setting' => [
            'description' => 'Создание сводного отчёта с дублированием названия',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case10.php',
        'provider_data' => [
            'requestParameter' => 'create-total?id=1',
            'requestBody' => [
                'Fields' => '["id", "17", "3", "manager_drfo", "supervisor_process_date", "subject", "category_id", "amount_to_work", "98", "cross_check_manager_id", "cross_check_status", "direction", "125", "sv_report_periods", "46", "130", "reason", "157", "status", "supervisor_id", "type_id", "actual_finish_date"]',
                'Fields' => '["17","3","manager_drfo","supervisor_process_date","subject","category_id","amount_to_work","98","cross_check_manager_id","cross_check_status","direction","125","sv_report_periods","46","130","reason","157","status","supervisor_id","type_id","actual_finish_date"]',
                'Fields' => '["17","manager_drfo","supervisor_process_date","subject","category_id","amount_to_work","98","cross_check_manager_id","cross_check_status","direction","125","sv_report_periods","46","130","reason","157","status","supervisor_id","type_id","actual_finish_date"]',
                'Fields' => '["17","manager_drfo","subject","category_id","amount_to_work","98","cross_check_manager_id","cross_check_status","direction","125","sv_report_periods","46","130","reason","157","status","supervisor_id","type_id","actual_finish_date"]',
                'Fields' => '["17","manager_drfo","subject","category_id","98","cross_check_manager_id","cross_check_status","direction","125","sv_report_periods","46","130","reason","157","status","supervisor_id","type_id","actual_finish_date"]',
                'Fields' => '["17","manager_drfo","subject","category_id","98","cross_check_manager_id","direction","125","sv_report_periods","46","130","reason","157","status","supervisor_id","type_id","actual_finish_date"]',
                'Fields' => '["17","manager_drfo","subject","category_id","98","cross_check_manager_id","direction","sv_report_periods","46","130","reason","157","status","supervisor_id","type_id","actual_finish_date"]',
                'Fields' => '["17","manager_drfo","subject","category_id","98","cross_check_manager_id","direction","sv_report_periods","46","reason","157","status","supervisor_id","type_id","actual_finish_date"]',
                'Fields' => '["17","manager_drfo","subject","category_id","98","cross_check_manager_id","direction","sv_report_periods","46","reason","157","supervisor_id","type_id","actual_finish_date"]',
                'Fields' => '["17","manager_drfo","subject","category_id","98","cross_check_manager_id","direction","sv_report_periods","46","reason","157","supervisor_id","type_id"]',
                'Fields' => '["17","type_id","manager_drfo","subject","category_id","98","cross_check_manager_id","direction","sv_report_periods","46","reason","157","supervisor_id"]',
                'Fields' => '["17","type_id","manager_drfo","subject","category_id","157","98","cross_check_manager_id","direction","sv_report_periods","46","reason","supervisor_id"]',
                'Fields' => '["17","type_id","manager_drfo","subject","category_id","157","98","cross_check_manager_id","direction","sv_report_periods","46","supervisor_id","reason"]',
                'Fields' => '["17","type_id","manager_drfo","93","subject","category_id","157","98","cross_check_manager_id","direction","sv_report_periods","46","supervisor_id","reason"]',
                'Fields' => '["17","type_id","manager_drfo","93","subject","category_id","157","98","57","cross_check_manager_id","direction","sv_report_periods","46","supervisor_id","reason"]',
                'Fields' => '["17","type_id","manager_drfo","93","subject","category_id","157","98","57","cross_check_manager_id","direction","146","sv_report_periods","46","supervisor_id","reason"]',
                'Fields' => '["17","type_id","manager_drfo","93","subject","category_id","157","98","57","cross_check_manager_id","direction","146","sv_report_periods","46","supervisor_id","reason","recommendations"]',
                'Report[conditions][team_direction]' => ['1','2','3','4','5','6'],
                'Report[conditions][type_id]' => ['1','2','3','4','5','6','7','8','9','10','11','12','13','14','15'],
                'Report[title]' => 'Всё во всём (сводный)',
            ],
            'db' => [
                "lisa_fixtures" => [
                    "reports" => [
                        [
                            "id" => 1,
                            "title" => "Всё во всём",
                            "fields" => '["id","17","3","manager_drfo","supervisor_process_date","subject","category_id","amount_to_work","98","cross_check_manager_id","cross_check_status","direction","125","sv_report_periods","46","130","reason","157","status","supervisor_id","type_id","actual_finish_date"]',
                            "conditions" => '{"type_id": ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13", "14", "15"], "team_direction": ["1", "2", "3", "4", "5", "6"]}',
                            "type" => 0
                        ],
                        [
                            "id" => 2,
                            "title" => "Всё во всём (сводный)",
                            "fields" => '["id","17","3","manager_drfo","supervisor_process_date","subject","category_id","amount_to_work","98","cross_check_manager_id","cross_check_status","direction","125","sv_report_periods","46","130","reason","157","status","supervisor_id","type_id","actual_finish_date"]',
                            "conditions" => '{"type_id": ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13", "14", "15"], "team_direction": ["1", "2", "3", "4", "5", "6"]}',
                            "type" => 1
                        ],
                    ],
                ],
            ]
        ]
    ],

    'case13' => [
        'setting' => [
            'description' => 'Создание копии отчёта с дублированием названия',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case10.php',
        'provider_data' => [
            'requestParameter' => 'copy?id=2',
            'requestBody' => [
                'Fields' => '["id", "17", "3", "manager_drfo", "supervisor_process_date", "subject", "category_id", "amount_to_work", "98", "cross_check_manager_id", "cross_check_status", "direction", "125", "sv_report_periods", "46", "130", "reason", "157", "status", "supervisor_id", "type_id", "actual_finish_date"]',
                'Fields' => '["17","3","manager_drfo","supervisor_process_date","subject","category_id","amount_to_work","98","cross_check_manager_id","cross_check_status","direction","125","sv_report_periods","46","130","reason","157","status","supervisor_id","type_id","actual_finish_date"]',
                'Fields' => '["17","manager_drfo","supervisor_process_date","subject","category_id","amount_to_work","98","cross_check_manager_id","cross_check_status","direction","125","sv_report_periods","46","130","reason","157","status","supervisor_id","type_id","actual_finish_date"]',
                'Fields' => '["17","manager_drfo","subject","category_id","amount_to_work","98","cross_check_manager_id","cross_check_status","direction","125","sv_report_periods","46","130","reason","157","status","supervisor_id","type_id","actual_finish_date"]',
                'Fields' => '["17","manager_drfo","subject","category_id","98","cross_check_manager_id","cross_check_status","direction","125","sv_report_periods","46","130","reason","157","status","supervisor_id","type_id","actual_finish_date"]',
                'Fields' => '["17","manager_drfo","subject","category_id","98","cross_check_manager_id","direction","125","sv_report_periods","46","130","reason","157","status","supervisor_id","type_id","actual_finish_date"]',
                'Fields' => '["17","manager_drfo","subject","category_id","98","cross_check_manager_id","direction","sv_report_periods","46","130","reason","157","status","supervisor_id","type_id","actual_finish_date"]',
                'Fields' => '["17","manager_drfo","subject","category_id","98","cross_check_manager_id","direction","sv_report_periods","46","reason","157","status","supervisor_id","type_id","actual_finish_date"]',
                'Fields' => '["17","manager_drfo","subject","category_id","98","cross_check_manager_id","direction","sv_report_periods","46","reason","157","supervisor_id","type_id","actual_finish_date"]',
                'Fields' => '["17","manager_drfo","subject","category_id","98","cross_check_manager_id","direction","sv_report_periods","46","reason","157","supervisor_id","type_id"]',
                'Fields' => '["17","type_id","manager_drfo","subject","category_id","98","cross_check_manager_id","direction","sv_report_periods","46","reason","157","supervisor_id"]',
                'Fields' => '["17","type_id","manager_drfo","subject","category_id","157","98","cross_check_manager_id","direction","sv_report_periods","46","reason","supervisor_id"]',
                'Fields' => '["17","type_id","manager_drfo","subject","category_id","157","98","cross_check_manager_id","direction","sv_report_periods","46","supervisor_id","reason"]',
                'Fields' => '["17","type_id","manager_drfo","93","subject","category_id","157","98","cross_check_manager_id","direction","sv_report_periods","46","supervisor_id","reason"]',
                'Fields' => '["17","type_id","manager_drfo","93","subject","category_id","157","98","57","cross_check_manager_id","direction","sv_report_periods","46","supervisor_id","reason"]',
                'Fields' => '["17","type_id","manager_drfo","93","subject","category_id","157","98","57","cross_check_manager_id","direction","146","sv_report_periods","46","supervisor_id","reason"]',
                'Fields' => '["17","type_id","manager_drfo","93","subject","category_id","157","98","57","cross_check_manager_id","direction","146","sv_report_periods","46","supervisor_id","reason","recommendations"]',
                'Report[conditions][team_direction]' => ['1','2','3','4','5','6'],
                'Report[conditions][type_id]' => ['1','2','3','4','5','6','7','8','9','10','11','12','13','14','15'],
                'Report[title]' => 'Всё во всём (сводный)',
            ],
            'db' => [
                "lisa_fixtures" => [
                    "reports" => [
                        [
                            "id" => 1,
                            "title" => "Всё во всём",
                            "fields" => '["id","17","3","manager_drfo","supervisor_process_date","subject","category_id","amount_to_work","98","cross_check_manager_id","cross_check_status","direction","125","sv_report_periods","46","130","reason","157","status","supervisor_id","type_id","actual_finish_date"]',
                            "conditions" => '{"type_id": ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13", "14", "15"], "team_direction": ["1", "2", "3", "4", "5", "6"]}',
                            "type" => 0
                        ],
                        [
                            "id" => 2,
                            "title" => "Всё во всём (сводный)",
                            "fields" => '["id","17","3","manager_drfo","supervisor_process_date","subject","category_id","amount_to_work","98","cross_check_manager_id","cross_check_status","direction","125","sv_report_periods","46","130","reason","157","status","supervisor_id","type_id","actual_finish_date"]',
                            "conditions" => '{"type_id": ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13", "14", "15"], "team_direction": ["1", "2", "3", "4", "5", "6"]}',
                            "type" => 1
                        ],
                    ],
                ],
            ]
        ]
    ],

];
