<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Добавление/удаление в шаблоне отчёта только полей',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'Fields' => '["id", "parent_id", 127, 17, 29, 27, 3, 62, 31, "supervisor_process_date", "last_change_status_date", "supervisor_check_date", "created_at", 7, 18, 126, 76, 13, "subject", 77, "category_id", "amount_to_work", 63, 95, 70, 80, 93, 81, 71, 115, 82, 83, 66, 79, 112, 90, 96, 97, 98, 99]',
                'Fields' => '["id","parent_id","127","17","29","27","3","62","31","supervisor_process_date","last_change_status_date","supervisor_check_date","created_at","7","18","126","76","13","subject","77","category_id","amount_to_work","63","95","70","80","93","81","71","115","82","83","66","79","112","90","96","97","98"]',
                'Fields' => '["id","parent_id","127","17","29","27","3","62","31","supervisor_process_date","last_change_status_date","supervisor_check_date","created_at","7","18","126","76","13","subject","77","category_id","amount_to_work","63","95","70","80","93","81","71","115","82","83","66","79","112","90","97","98"]',
                'Fields' => '["id","parent_id","127","17","29","27","3","62","31","supervisor_process_date","last_change_status_date","supervisor_check_date","created_at","7","18","126","76","13","subject","77","category_id","amount_to_work","63","95","70","80","93","81","71","115","82","83","79","112","90","97","98"]',
                'Fields' => '["id","parent_id","127","17","29","27","3","62","31","supervisor_process_date","last_change_status_date","supervisor_check_date","created_at","7","18","126","76","13","subject","77","category_id","amount_to_work","63","95","70","80","81","71","115","82","83","79","112","90","97","98"]',
                'Fields' => '["id","parent_id","127","17","29","27","3","62","31","supervisor_process_date","last_change_status_date","supervisor_check_date","created_at","7","18","126","76","13","subject","77","category_id","amount_to_work","63","70","80","81","71","115","82","83","79","112","90","97","98"]',
                'Fields' => '["id","parent_id","127","17","29","27","3","62","31","supervisor_process_date","last_change_status_date","supervisor_check_date","created_at","7","18","126","76","13","subject","77","category_id","amount_to_work","63","70","80","81","71","115","82","79","112","90","97","98"]',
                'Fields' => '["145","id","parent_id","127","17","29","27","3","62","31","supervisor_process_date","last_change_status_date","supervisor_check_date","created_at","7","18","126","76","13","subject","77","category_id","amount_to_work","63","70","80","81","71","115","82","79","112","90","97","98"]',
                'Fields' => '["145","id","direction","parent_id","127","17","29","27","3","62","31","supervisor_process_date","last_change_status_date","supervisor_check_date","created_at","7","18","126","76","13","subject","77","category_id","amount_to_work","63","70","80","81","71","115","82","79","112","90","97","98"]',
                'Fields' => '["145","id","direction","parent_id","127","120","17","29","27","3","62","31","supervisor_process_date","last_change_status_date","supervisor_check_date","created_at","7","18","126","76","13","subject","77","category_id","amount_to_work","63","70","80","81","71","115","82","79","112","90","97","98"]',
                'Fields' => '["145","id","direction","parent_id","127","120","17","55","29","27","3","62","31","supervisor_process_date","last_change_status_date","supervisor_check_date","created_at","7","18","126","76","13","subject","77","category_id","amount_to_work","63","70","80","81","71","115","82","79","112","90","97","98"]',
                'Report[conditions][team_direction]' => ['1','2','3'],
                'Report[conditions][type_id]' => ['1','2','3','4','5','6','7','8'],
                'Report[title]' => 'Всё во всём',
            ],
            'db' => [
                "lisa_fixtures" => [
                    "reports" => [
                        [
                            "id" => 1,
                            "title" => "Всё во всём",
                            "fields" => '["145","id","direction","parent_id","127","120","17","55","29","27","3","62","31","supervisor_process_date","last_change_status_date","supervisor_check_date","created_at","7","18","126","76","13","subject","77","category_id","amount_to_work","63","70","80","81","71","115","82","79","112","90","97","98"]',
                            "conditions" => '{"type_id": ["1", "2", "3", "4", "5", "6", "7", "8"], "team_direction": ["1", "2", "3"]}',
                            "type" => 0
                        ],
                        [
                            "title" => "Всё во всём (сводный)",
                            "fields" => '["id","17","3","manager_drfo","supervisor_process_date","subject","category_id","amount_to_work","98","cross_check_manager_id","cross_check_status","direction","125","sv_report_periods","46","130","attachments","reason","157","status","supervisor_id","type_id","actual_finish_date"]',
                            "conditions" => '{"type_id": ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13", "14", "15"], "team_direction": ["1", "2", "3", "4", "5", "6"]}',
                            "type" => 1
                        ],
                    ],
                ],
            ]
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Добавление/удаление в шаблоне отчёта полей и направлений',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'Fields' => '["id", "parent_id", 127, 17, 29, 27, 3, 62, 31, "supervisor_process_date", "last_change_status_date", "supervisor_check_date", "created_at", 7, 18, 126, 76, 13, "subject", 77, "category_id", "amount_to_work", 63, 95, 70, 80, 93, 81, 71, 115, 82, 83, 66, 79, 112, 90, 96, 97, 98, 99]',
                'Fields' => '["parent_id","127","17","29","27","3","62","31","supervisor_process_date","last_change_status_date","supervisor_check_date","created_at","7","18","126","76","13","subject","77","category_id","amount_to_work","63","95","70","80","93","81","71","115","82","83","66","79","112","90","96","97","98","99"]',
                'Fields' => '["parent_id","127","17","29","27","62","31","supervisor_process_date","last_change_status_date","supervisor_check_date","created_at","7","18","126","76","13","subject","77","category_id","amount_to_work","63","95","70","80","93","81","71","115","82","83","66","79","112","90","96","97","98","99"]',
                'Fields' => '["parent_id","127","17","29","27","62","31","supervisor_process_date","last_change_status_date","created_at","7","18","126","76","13","subject","77","category_id","amount_to_work","63","95","70","80","93","81","71","115","82","83","66","79","112","90","96","97","98","99"]',
                'Fields' => '["parent_id","127","17","29","27","62","31","supervisor_process_date","last_change_status_date","created_at","7","18","126","76","13","subject","77","category_id","amount_to_work","63","70","80","93","81","71","115","82","83","66","79","112","90","96","97","98","99"]',
                'Fields' => '["parent_id","127","17","29","27","62","31","supervisor_process_date","last_change_status_date","created_at","7","18","126","76","13","subject","77","category_id","amount_to_work","63","70","80","93","81","115","82","83","66","79","112","90","96","97","98","99"]',
                'Fields' => '["parent_id","127","17","29","27","78","62","31","supervisor_process_date","last_change_status_date","created_at","7","18","126","76","13","subject","77","category_id","amount_to_work","63","70","80","93","81","115","82","83","66","79","112","90","96","97","98","99"]',
                'Fields' => '["parent_id","127","17","29","27","78","62","31","supervisor_process_date","last_change_status_date","created_at","123","7","18","126","76","13","subject","77","category_id","amount_to_work","63","70","80","93","81","115","82","83","66","79","112","90","96","97","98","99"]',
                'Report[conditions][team_direction]' => ['1','5','6'],
                'Report[conditions][type_id]' => ['1','2','3','4','5','6','7','8'],
                'Report[title]' => 'Всё во всём',
            ],
            'db' => [
                "lisa_fixtures" => [
                    "reports" => [
                        [
                            "id" => 1,
                            "title" => "Всё во всём",
                            "fields" => '["parent_id","127","17","29","27","78","62","31","supervisor_process_date","last_change_status_date","created_at","123","7","18","126","76","13","subject","77","category_id","amount_to_work","63","70","80","93","81","115","82","83","66","79","112","90","96","97","98","99"]',
                            "conditions" => '{"type_id": ["1", "2", "3", "4", "5", "6", "7", "8"], "team_direction": ["1", "5", "6"]}',
                            "type" => 0
                        ],
                        [
                            "title" => "Всё во всём (сводный)",
                            "fields" => '["id","17","3","manager_drfo","supervisor_process_date","subject","category_id","amount_to_work","98","cross_check_manager_id","cross_check_status","direction","125","sv_report_periods","46","130","attachments","reason","157","status","supervisor_id","type_id","actual_finish_date"]',
                            "conditions" => '{"type_id": ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13", "14", "15"], "team_direction": ["1", "2", "3", "4", "5", "6"]}',
                            "type" => 1
                        ],
                    ],
                ],
            ]
        ]
    ],

    'case3' => [
        'setting' => [
            'description' => 'Добавление/удаление в шаблоне отчёта полей и типов',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'Fields' => '["id", "parent_id", 127, 17, 29, 27, 3, 62, 31, "supervisor_process_date", "last_change_status_date", "supervisor_check_date", "created_at", 7, 18, 126, 76, 13, "subject", 77, "category_id", "amount_to_work", 63, 95, 70, 80, 93, 81, 71, 115, 82, 83, 66, 79, 112, 90, 96, 97, 98, 99]',
                'Fields' => '["parent_id","127","17","29","27","3","62","31","supervisor_process_date","last_change_status_date","supervisor_check_date","created_at","7","18","126","76","13","subject","77","category_id","amount_to_work","63","95","70","80","93","81","71","115","82","83","66","79","112","90","96","97","98","99"]',
                'Fields' => '["127","17","29","27","3","62","31","supervisor_process_date","last_change_status_date","supervisor_check_date","created_at","7","18","126","76","13","subject","77","category_id","amount_to_work","63","95","70","80","93","81","71","115","82","83","66","79","112","90","96","97","98","99"]',
                'Fields' => '["17","29","27","3","62","31","supervisor_process_date","last_change_status_date","supervisor_check_date","created_at","7","18","126","76","13","subject","77","category_id","amount_to_work","63","95","70","80","93","81","71","115","82","83","66","79","112","90","96","97","98","99"]',
                'Fields' => '["29","27","3","62","31","supervisor_process_date","last_change_status_date","supervisor_check_date","created_at","7","18","126","76","13","subject","77","category_id","amount_to_work","63","95","70","80","93","81","71","115","82","83","66","79","112","90","96","97","98","99"]',
                'Fields' => '["27","3","62","31","supervisor_process_date","last_change_status_date","supervisor_check_date","created_at","7","18","126","76","13","subject","77","category_id","amount_to_work","63","95","70","80","93","81","71","115","82","83","66","79","112","90","96","97","98","99"]',
                'Fields' => '["27","3","62","31","supervisor_process_date","last_change_status_date","supervisor_check_date","created_at","7","18","126","76","13","subject","77","category_id","amount_to_work","63","95","70","80","93","81","71","115","82","83","66","79","112","90","96","97","98","99","59"]',
                'Fields' => '["27","3","62","31","supervisor_process_date","last_change_status_date","supervisor_check_date","created_at","7","18","126","76","13","subject","77","category_id","amount_to_work","63","95","70","80","93","81","71","115","82","83","66","79","112","90","96","97","98","99","59","51"]',
                'Fields' => '["27","3","62","31","supervisor_process_date","last_change_status_date","supervisor_check_date","created_at","7","18","126","76","13","subject","77","category_id","amount_to_work","63","95","70","80","93","81","71","115","82","83","66","79","112","90","96","97","98","99","59","51","142"]',
                'Fields' => '["27","3","62","31","supervisor_process_date","last_change_status_date","supervisor_check_date","created_at","7","18","126","76","13","subject","77","category_id","amount_to_work","63","95","70","80","93","81","71","115","82","83","66","79","112","90","96","97","98","99","59","51","142","60"]',
                'Fields' => '["27","3","62","31","supervisor_process_date","last_change_status_date","supervisor_check_date","created_at","7","18","126","76","13","subject","77","category_id","amount_to_work","63","95","70","80","93","81","71","115","82","83","66","79","112","90","96","97","98","99","59","51","142","60","9"]',
                'Report[conditions][team_direction]' => ['1','2','3'],
                'Report[conditions][type_id]' => ['1','2','3','9','10','11','12','13','14','15'],
                'Report[title]' => 'Всё во всём',
            ],
            'db' => [
                "lisa_fixtures" => [
                    "reports" => [
                        [
                            "id" => 1,
                            "title" => "Всё во всём",
                            "fields" => '["27","3","62","31","supervisor_process_date","last_change_status_date","supervisor_check_date","created_at","7","18","126","76","13","subject","77","category_id","amount_to_work","63","95","70","80","93","81","71","115","82","83","66","79","112","90","96","97","98","99","59","51","142","60","9"]',
                            "conditions" => '{"type_id": ["1", "2", "3", "9", "10", "11", "12", "13", "14", "15"], "team_direction": ["1", "2", "3"]}',
                            "type" => 0
                        ],
                        [
                            "title" => "Всё во всём (сводный)",
                            "fields" => '["id","17","3","manager_drfo","supervisor_process_date","subject","category_id","amount_to_work","98","cross_check_manager_id","cross_check_status","direction","125","sv_report_periods","46","130","attachments","reason","157","status","supervisor_id","type_id","actual_finish_date"]',
                            "conditions" => '{"type_id": ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13", "14", "15"], "team_direction": ["1", "2", "3", "4", "5", "6"]}',
                            "type" => 1
                        ],
                    ]
                ]
            ]
        ]
    ],

    'case4' => [
        'setting' => [
            'description' => 'Добавление/удаление в шаблоне отчёта полей, типов, направлений и названия',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'Fields' => '["id", "parent_id", 127, 17, 29, 27, 3, 62, 31, "supervisor_process_date", "last_change_status_date", "supervisor_check_date", "created_at", 7, 18, 126, 76, 13, "subject", 77, "category_id", "amount_to_work", 63, 95, 70, 80, 93, 81, 71, 115, 82, 83, 66, 79, 112, 90, 96, 97, 98, 99]',
                'Fields' => '["id","manager_drfo","parent_id","127","17","29","27","3","62","31","supervisor_process_date","last_change_status_date","supervisor_check_date","created_at","7","18","126","76","13","subject","77","category_id","amount_to_work","63","95","70","80","93","81","71","115","82","83","66","79","112","90","96","97","98","99"]',
                'Fields' => '["id","manager_drfo","parent_id","100","127","17","29","27","3","62","31","supervisor_process_date","last_change_status_date","supervisor_check_date","created_at","7","18","126","76","13","subject","77","category_id","amount_to_work","63","95","70","80","93","81","71","115","82","83","66","79","112","90","96","97","98","99"]',
                'Fields' => '["id","manager_drfo","parent_id","100","127","121","17","29","27","3","62","31","supervisor_process_date","last_change_status_date","supervisor_check_date","created_at","7","18","126","76","13","subject","77","category_id","amount_to_work","63","95","70","80","93","81","71","115","82","83","66","79","112","90","96","97","98","99"]',
                'Fields' => '["id","manager_drfo","parent_id","100","127","121","17","158","29","27","3","62","31","supervisor_process_date","last_change_status_date","supervisor_check_date","created_at","7","18","126","76","13","subject","77","category_id","amount_to_work","63","95","70","80","93","81","71","115","82","83","66","79","112","90","96","97","98","99"]',
                'Fields' => '["id","manager_drfo","parent_id","100","127","121","17","158","29","59","27","3","62","31","supervisor_process_date","last_change_status_date","supervisor_check_date","created_at","7","18","126","76","13","subject","77","category_id","amount_to_work","63","95","70","80","93","81","71","115","82","83","66","79","112","90","96","97","98","99"]',
                'Fields' => '["manager_drfo","parent_id","100","127","121","17","158","29","59","27","3","62","31","supervisor_process_date","last_change_status_date","supervisor_check_date","created_at","7","18","126","76","13","subject","77","category_id","amount_to_work","63","95","70","80","93","81","71","115","82","83","66","79","112","90","96","97","98","99"]',
                'Fields' => '["manager_drfo","100","127","121","17","158","29","59","27","3","62","31","supervisor_process_date","last_change_status_date","supervisor_check_date","created_at","7","18","126","76","13","subject","77","category_id","amount_to_work","63","95","70","80","93","81","71","115","82","83","66","79","112","90","96","97","98","99"]',
                'Fields' => '["manager_drfo","100","121","17","158","29","59","27","3","62","31","supervisor_process_date","last_change_status_date","supervisor_check_date","created_at","7","18","126","76","13","subject","77","category_id","amount_to_work","63","95","70","80","93","81","71","115","82","83","66","79","112","90","96","97","98","99"]',
                'Fields' => '["manager_drfo","100","121","158","29","59","27","3","62","31","supervisor_process_date","last_change_status_date","supervisor_check_date","created_at","7","18","126","76","13","subject","77","category_id","amount_to_work","63","95","70","80","93","81","71","115","82","83","66","79","112","90","96","97","98","99"]',
                'Fields' => '["manager_drfo","100","121","158","59","27","3","62","31","supervisor_process_date","last_change_status_date","supervisor_check_date","created_at","7","18","126","76","13","subject","77","category_id","amount_to_work","63","95","70","80","93","81","71","115","82","83","66","79","112","90","96","97","98","99"]',
                'Report[conditions][team_direction]' => ['3','5','6'],
                'Report[conditions][type_id]' => ['6','7','8','13','14','15'],
                'Report[title]' => 'Всё во всём - новый',
            ],
            'db' => [
                "lisa_fixtures" => [
                    "reports" => [
                        [
                            "id" => 1,
                            "title" => "Всё во всём - новый",
                            "fields" => '["manager_drfo","100","121","158","59","27","3","62","31","supervisor_process_date","last_change_status_date","supervisor_check_date","created_at","7","18","126","76","13","subject","77","category_id","amount_to_work","63","95","70","80","93","81","71","115","82","83","66","79","112","90","96","97","98","99"]',
                            "conditions" => '{"type_id": ["6", "7", "8", "13", "14", "15"], "team_direction": ["3", "5", "6"]}',
                            "type" => 0
                        ],
                        [
                            "title" => "Всё во всём (сводный)",
                            "fields" => '["id","17","3","manager_drfo","supervisor_process_date","subject","category_id","amount_to_work","98","cross_check_manager_id","cross_check_status","direction","125","sv_report_periods","46","130","attachments","reason","157","status","supervisor_id","type_id","actual_finish_date"]',
                            "conditions" => '{"type_id": ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13", "14", "15"], "team_direction": ["1", "2", "3", "4", "5", "6"]}',
                            "type" => 1
                        ],
                    ],
                ],
            ]
        ]
    ],

    'case5' => [
        'setting' => [
            'description' => 'Добавление/удаление в шаблоне отчёта полей, типов, направлений c дублированием названия',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'Fields' => '["id", "parent_id", 127, 17, 29, 27, 3, 62, 31, "supervisor_process_date", "last_change_status_date", "supervisor_check_date", "created_at", 7, 18, 126, 76, 13, "subject", 77, "category_id", "amount_to_work", 63, 95, 70, 80, 93, 81, 71, 115, 82, 83, 66, 79, 112, 90, 96, 97, 98, 99]',
                'Fields' => '["id","manager_drfo","parent_id","127","17","29","27","3","62","31","supervisor_process_date","last_change_status_date","supervisor_check_date","created_at","7","18","126","76","13","subject","77","category_id","amount_to_work","63","95","70","80","93","81","71","115","82","83","66","79","112","90","96","97","98","99"]',
                'Fields' => '["id","manager_drfo","parent_id","100","127","17","29","27","3","62","31","supervisor_process_date","last_change_status_date","supervisor_check_date","created_at","7","18","126","76","13","subject","77","category_id","amount_to_work","63","95","70","80","93","81","71","115","82","83","66","79","112","90","96","97","98","99"]',
                'Fields' => '["id","manager_drfo","parent_id","100","127","121","17","29","27","3","62","31","supervisor_process_date","last_change_status_date","supervisor_check_date","created_at","7","18","126","76","13","subject","77","category_id","amount_to_work","63","95","70","80","93","81","71","115","82","83","66","79","112","90","96","97","98","99"]',
                'Fields' => '["id","manager_drfo","parent_id","100","127","121","17","158","29","27","3","62","31","supervisor_process_date","last_change_status_date","supervisor_check_date","created_at","7","18","126","76","13","subject","77","category_id","amount_to_work","63","95","70","80","93","81","71","115","82","83","66","79","112","90","96","97","98","99"]',
                'Fields' => '["id","manager_drfo","parent_id","100","127","121","17","158","29","59","27","3","62","31","supervisor_process_date","last_change_status_date","supervisor_check_date","created_at","7","18","126","76","13","subject","77","category_id","amount_to_work","63","95","70","80","93","81","71","115","82","83","66","79","112","90","96","97","98","99"]',
                'Fields' => '["manager_drfo","parent_id","100","127","121","17","158","29","59","27","3","62","31","supervisor_process_date","last_change_status_date","supervisor_check_date","created_at","7","18","126","76","13","subject","77","category_id","amount_to_work","63","95","70","80","93","81","71","115","82","83","66","79","112","90","96","97","98","99"]',
                'Fields' => '["manager_drfo","100","127","121","17","158","29","59","27","3","62","31","supervisor_process_date","last_change_status_date","supervisor_check_date","created_at","7","18","126","76","13","subject","77","category_id","amount_to_work","63","95","70","80","93","81","71","115","82","83","66","79","112","90","96","97","98","99"]',
                'Fields' => '["manager_drfo","100","121","17","158","29","59","27","3","62","31","supervisor_process_date","last_change_status_date","supervisor_check_date","created_at","7","18","126","76","13","subject","77","category_id","amount_to_work","63","95","70","80","93","81","71","115","82","83","66","79","112","90","96","97","98","99"]',
                'Fields' => '["manager_drfo","100","121","158","29","59","27","3","62","31","supervisor_process_date","last_change_status_date","supervisor_check_date","created_at","7","18","126","76","13","subject","77","category_id","amount_to_work","63","95","70","80","93","81","71","115","82","83","66","79","112","90","96","97","98","99"]',
                'Fields' => '["manager_drfo","100","121","158","59","27","3","62","31","supervisor_process_date","last_change_status_date","supervisor_check_date","created_at","7","18","126","76","13","subject","77","category_id","amount_to_work","63","95","70","80","93","81","71","115","82","83","66","79","112","90","96","97","98","99"]',
                'Report[conditions][team_direction]' => ['3','5','6'],
                'Report[conditions][type_id]' => ['6','7','8','13','14','15'],
                'Report[title]' => 'Всё во всём (сводный)',
            ],
            'db' => [
                "lisa_fixtures" => [
                    "reports" => [
                        [
                            "title" => 'Всё во всём',
                            "fields" => '["id","17","3","manager_drfo","supervisor_process_date","subject","category_id","amount_to_work","98","cross_check_manager_id","cross_check_status","direction","125","sv_report_periods","46","130","attachments","reason","157","status","supervisor_id","type_id","actual_finish_date"]',
                            "conditions" => '{"type_id": ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13", "14", "15"], "team_direction": ["1", "2", "3", "4", "5", "6"]}',
                            "type" => 0
                        ],
                        [
                            "title" => "Всё во всём (сводный)",
                            "fields" => '["id","17","3","manager_drfo","supervisor_process_date","subject","category_id","amount_to_work","98","cross_check_manager_id","cross_check_status","direction","125","sv_report_periods","46","130","attachments","reason","157","status","supervisor_id","type_id","actual_finish_date"]',
                            "conditions" => '{"type_id": ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13", "14", "15"], "team_direction": ["1", "2", "3", "4", "5", "6"]}',
                            "type" => 1
                        ],
                    ],
                ],
            ]
        ]
    ],
];
