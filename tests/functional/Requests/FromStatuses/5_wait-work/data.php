<?php

return [
    'case5_4' => [
        'setting' => [
            'description' => 'Перевод из "Ожидает взятия в работу" в "Отменена"',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case.php',
        'provider_data' => [
            'requestParameter' => 'change-reason',
            'requestBody' => [
                'Request[reason]' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО<textarea /><input></input><form action="http://live.hh.ru"><input type="submit"></form>',
                'Request[reason_id]' => '11',
                'Request[status]' => '4',
                'keys',
                'keys',
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => [
                        [
                            "id" => 1,
                            "author_id" => 4,
                            "type_id" => 1,
                            "supervisor_id" => 6,
                            "manager_id" => 11,
                            "status" => 4,
                            "direction" => 1,
                            "priority" => 2,
                            "awaiting_correction" => 0,
                            "created_at" => '2020-01-01 00:00:00',
                            "correction_comment" => '',
                            "amount_to_work" => 10,
                            "subject" => "Добавление новых товаров (Работа с товарами Розетки)",
                            "description" => 'description',
                            "attachments" => '[]',
                            "category_id" => 1,
                            "seller_id" => 83,
                            "recommendations" => '',
                            "reason_id" => 11,
                            "reason" => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|',
                            "parent_id" => null,
                            "planned_start_date" => null,
                            "planned_finish_date" => null,
                            "actual_start_date" => null,
                            "actual_finish_date" => null,
                            //"supervisor_process_date" => '2020-01-01 00:00:02',
                            "supervisor_check_date" => null,
                            "difficulty" => null,
                            "result_comment" => '',
                            "supervisor_comment" => '',
                            //"last_change_status_date" => "2020-01-01 00:00:01",
                            "team_direction" => 3,
                            "report_period_id" => null,
                            "sync_source_id" => null,
                            "sv_report_periods" => '{"1": 1}',
                            "cross_check_status" => '0',
                            "cross_check_manager_id" => null,
                            "employee_code_1c" => null,
                            "child_count" => 0
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
                            'field_id' => 49,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 50,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 51,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 52,
                            'value' => 2,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 53,
                            'value' => 0.5,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 54,
                            'value' => 1,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 60,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 64,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 101,
                            'value' => null,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 122,
                            'value' => null,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 142,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 143,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 146,
                            'value' => null,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 158,
                            'value' => null,
                        ],
                    ],
                    'user_notifications' => [
                        [
                            "id" => 1,
                            "user_id" => 4,
                            "notification" => 'Заявка <b>№1</b> <b>"Добавление новых товаров (Работа с товарами Розетки)"</b>, количество в работу: <b>10</b> с приоритетом <b>Товар-новинка/эксклюзив (трафикообразующий)</b> изменен статус с <b>"Ожидает взятия в работу"</b> на <b>"Отменена"</b> пользователем <b>Константин Куцан</b> по причине <b>Дубль задачи </b>!@#$%^&*()_+`-]\'/[;.,}"?{:>\|',
                            "status" => 0,
                            //"created_at" => '2020-01-01 00:00:01',
                            "request_id" => 1,
                            "priority" => 2,
                            "recipients" => "Константин Куцан, Менеджер Контентович 1А, Супервайзер Начальникович 1"
                        ],
                        [
                            "id" => 2,
                            "user_id" => 6,
                            "notification" => 'Заявка <b>№1</b> <b>"Добавление новых товаров (Работа с товарами Розетки)"</b>, количество в работу: <b>10</b> с приоритетом <b>Товар-новинка/эксклюзив (трафикообразующий)</b> изменен статус с <b>"Ожидает взятия в работу"</b> на <b>"Отменена"</b> пользователем <b>Константин Куцан</b> по причине <b>Дубль задачи </b>!@#$%^&*()_+`-]\'/[;.,}"?{:>\|',
                            "status" => 0,
                            //"created_at" => '2020-01-01 00:00:01',
                            "request_id" => 1,
                            "priority" => 2,
                            "recipients" => "Константин Куцан, Менеджер Контентович 1А, Супервайзер Начальникович 1"
                        ],
                        [
                            "id" => 3,
                            "user_id" => 11,
                            "notification" => 'Заявка <b>№1</b> <b>"Добавление новых товаров (Работа с товарами Розетки)"</b>, количество в работу: <b>10</b> с приоритетом <b>Товар-новинка/эксклюзив (трафикообразующий)</b> изменен статус с <b>"Ожидает взятия в работу"</b> на <b>"Отменена"</b> пользователем <b>Константин Куцан</b> по причине <b>Дубль задачи </b>!@#$%^&*()_+`-]\'/[;.,}"?{:>\|',
                            "status" => 0,
                            //"created_at" => '2020-01-01 00:00:01',
                            "request_id" => 1,
                            "priority" => 2,
                            "recipients" => "Константин Куцан, Менеджер Контентович 1А, Супервайзер Начальникович 1"
                        ],
                    ],
                    'request_status_history' => [
                        [
                            "id" => 1,
                            "request_id" => 1,
                            "user_id" => 4,
                            "old_status" => 5,
                            "new_status" => 4,
                            "reason_id" => 11,
                            "reason" => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|',
                            //"created_at" => "2020-01-01 00:00:01",
                            "manager_id" => 11
                        ]
                    ]
                ]
            ]
        ]
    ],

    'case5_6' => [
        'setting' => [
            'description' => 'Перевод из "Ожидает взятия в работу" во "В работе"',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case.php',
        'provider_data' => [
            'requestParameter' => 'update',
            'requestBody' => [
                'RequestField[111]' => '0',
                'RequestField[121]' => '',
                'RequestField[144]' => '0',
                'RequestField[157]' => '',
                'RequestField[1]' => '1',
                'RequestField[20]' => '',
                'RequestField[21]' => '',
                'RequestField[22]' => '',
                'RequestField[23]' => '',
                'RequestField[24]' => '',
                'RequestField[25]' => '',
                'RequestField[26]' => '',
                'RequestField[27]' => '',
                'RequestField[31]' => '',
                'RequestField[65]' => '0',
                'RequestField[66]' => '0',
                'RequestField[68]' => '0',
                'RequestField[69]' => '0',
                'RequestField[70]' => '0',
                'RequestField[71]' => '0',
                'RequestField[76]' => '0',
                'RequestField[77]' => '0',
                'RequestField[88]' => '0',
                'RequestField[93]' => '0',
                'RequestField[94]' => '0',
                'Request[addedAttachments]' => '[]',
                'Request[amount_to_work]' => '10',
                'Request[attachment_folder]' => '9c4f8356ab2ddca8b9dcafb8b511df50',
                'Request[author_id]' => '4',
                'Request[category_id]' => '1',
                'Request[correction_comment]' => '',
                'Request[cross_check_manager_id]' => '',
                'Request[deletedAttachments]' => '[]',
                'Request[description]' => 'description',
                'Request[manager_id]' => '11',
                'Request[planned_start_date]' => '',
                'Request[priority]' => '2',
                'Request[recommendations]' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО<textarea /><input></input><form action="http://live.hh.ru"><input type="submit"></form>',
                'Request[report_period_id]' => '',
                'Request[result_comment]' => '',
                'Request[seller_id]' => '83',
                'Request[subject]' => 'Добавление новых товаров (Работа с товарами Розетки)',
                'Request[supervisor_comment]' => '',
                'Request[supervisor_id]' => '6',
                'Request[uploadedFiles][]' => '',
                'Request[uploadedFiles][]' => '',
                'newStatus' => '6',
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => [
                        [
                            "id" => 1,
                            "author_id" => 4,
                            "type_id" => 1,
                            "supervisor_id" => 6,
                            "manager_id" => 11,
                            "status" => 6,
                            "direction" => 1,
                            "priority" => 2,
                            "awaiting_correction" => 0,
                            "created_at" => '2020-01-01 00:00:00',
                            "correction_comment" => '',
                            "amount_to_work" => 10,
                            "subject" => "Добавление новых товаров (Работа с товарами Розетки)",
                            "description" => 'description',
                            "attachments" => '[]',
                            "category_id" => 1,
                            "seller_id" => 83,
                            "recommendations" => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|',
                            "reason_id" => null,
                            "reason" => null,
                            "parent_id" => null,
                            "planned_start_date" => null,
                            "planned_finish_date" => null,
                            //"actual_start_date" => null,
                            "actual_finish_date" => null,
                            "supervisor_process_date" => null,
                            "supervisor_check_date" => null,
                            "difficulty" => null,
                            "result_comment" => '',
                            "supervisor_comment" => '',
                            //"last_change_status_date" => "2020-01-01 00:00:01",
                            "team_direction" => 3,
                            "report_period_id" => null,
                            "sync_source_id" => null,
                            "sv_report_periods" => null,
                            "cross_check_status" => '0',
                            "cross_check_manager_id" => null,
                            "employee_code_1c" => null,
                            "child_count" => 0
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
                            'field_id' => 49,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 50,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 51,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 52,
                            'value' => 2,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 53,
                            'value' => 0.5,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 54,
                            'value' => 1,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 60,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 64,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 101,
                            'value' => null,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 122,
                            'value' => null,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 142,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 143,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 146,
                            'value' => null,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 158,
                            'value' => null,
                        ],
                    ],
                    'user_notifications' => [
                        [
                            "id" => 1,
                            "user_id" => 4,
                            "notification" => 'Заявка <b>№1</b> <b>"Добавление новых товаров (Работа с товарами Розетки)"</b>, количество в работу: <b>10</b> с приоритетом <b>Товар-новинка/эксклюзив (трафикообразующий)</b> изменен статус с <b>"Ожидает взятия в работу"</b> на <b>"В работе"</b> пользователем <b>Константин Куцан</b>',
                            "status" => 0,
                            //"created_at" => '2020-01-01 00:00:01',
                            "request_id" => 1,
                            "priority" => 2,
                            "recipients" => "Константин Куцан, Менеджер Контентович 1А, Супервайзер Начальникович 1"
                        ],
                        [
                            "id" => 2,
                            "user_id" => 6,
                            "notification" => 'Заявка <b>№1</b> <b>"Добавление новых товаров (Работа с товарами Розетки)"</b>, количество в работу: <b>10</b> с приоритетом <b>Товар-новинка/эксклюзив (трафикообразующий)</b> изменен статус с <b>"Ожидает взятия в работу"</b> на <b>"В работе"</b> пользователем <b>Константин Куцан</b>',
                            "status" => 0,
                            //"created_at" => '2020-01-01 00:00:01',
                            "request_id" => 1,
                            "priority" => 2,
                            "recipients" => "Константин Куцан, Менеджер Контентович 1А, Супервайзер Начальникович 1"
                        ],
                        [
                            "id" => 3,
                            "user_id" => 11,
                            "notification" => 'Заявка <b>№1</b> <b>"Добавление новых товаров (Работа с товарами Розетки)"</b>, количество в работу: <b>10</b> с приоритетом <b>Товар-новинка/эксклюзив (трафикообразующий)</b> изменен статус с <b>"Ожидает взятия в работу"</b> на <b>"В работе"</b> пользователем <b>Константин Куцан</b>',
                            "status" => 0,
                            //"created_at" => '2020-01-01 00:00:01',
                            "request_id" => 1,
                            "priority" => 2,
                            "recipients" => "Константин Куцан, Менеджер Контентович 1А, Супервайзер Начальникович 1"
                        ]
                    ],
                    'request_status_history' => [
                        [
                            "id" => 1,
                            "request_id" => 1,
                            "user_id" => 4,
                            "old_status" => 5,
                            "new_status" => 6,
                            "reason_id" => null,
                            "reason" => null,
                            //"created_at" => "2020-01-01 00:00:01",
                            "manager_id" => 11
                        ]
                    ]
                ]
            ]
        ]
    ],
];