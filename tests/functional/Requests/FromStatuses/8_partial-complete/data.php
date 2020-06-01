<?php

return [
    'case8_6' => [
        'setting' => [
            'description' => 'Перевод из "Частично выполнена" во "В работе (на исправление)"',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case.php',
        'provider_data' => [
            'requestParameter' => 'to-correction',
            'requestBody' => [
                'RequestErrors[33][67][comment]' => 'comment',
                'RequestErrors[33][67][errorsCount]' => '10',
                'RequestErrors[33][67][itemsCount]' => '10',
                'RequestErrors[33][68][comment]' => '',
                'RequestErrors[33][68][errorsCount]' => '',
                'RequestErrors[33][68][itemsCount]' => '',
                'RequestErrors[33][69][comment]' => '',
                'RequestErrors[33][69][errorsCount]' => '',
                'RequestErrors[33][69][itemsCount]' => '',
                'RequestErrors[33][70][comment]' => '',
                'RequestErrors[33][70][errorsCount]' => '',
                'RequestErrors[33][70][itemsCount]' => '',
                'RequestErrors[33][71][comment]' => '',
                'RequestErrors[33][71][errorsCount]' => '',
                'RequestErrors[33][71][itemsCount]' => '',
                'RequestErrors[33][72][comment]' => '',
                'RequestErrors[33][72][errorsCount]' => '',
                'RequestErrors[33][72][itemsCount]' => '',
                'RequestErrors[34][76][comment]' => '',
                'RequestErrors[34][76][errorsCount]' => '',
                'RequestErrors[34][76][itemsCount]' => '',
                'RequestErrors[34][77][comment]' => '',
                'RequestErrors[34][77][errorsCount]' => '',
                'RequestErrors[34][77][itemsCount]' => '',
                'RequestErrors[34][78][comment]' => '',
                'RequestErrors[34][78][errorsCount]' => '',
                'RequestErrors[34][78][itemsCount]' => '',
                'RequestErrors[34][79][comment]' => '',
                'RequestErrors[34][79][errorsCount]' => '',
                'RequestErrors[34][79][itemsCount]' => '',
                'RequestErrors[34][80][comment]' => '',
                'RequestErrors[34][80][errorsCount]' => '',
                'RequestErrors[34][80][itemsCount]' => '',
                'RequestErrors[35][81][comment]' => '',
                'RequestErrors[35][81][errorsCount]' => '',
                'RequestErrors[35][81][itemsCount]' => '',
                'RequestErrors[35][82][comment]' => '',
                'RequestErrors[35][82][errorsCount]' => '',
                'RequestErrors[35][82][itemsCount]' => '',
                'RequestErrors[35][83][comment]' => '',
                'RequestErrors[35][83][errorsCount]' => '',
                'RequestErrors[35][83][itemsCount]' => '',
                'RequestErrors[35][84][comment]' => '',
                'RequestErrors[35][84][errorsCount]' => '',
                'RequestErrors[35][84][itemsCount]' => '',
                'RequestErrors[35][85][comment]' => '',
                'RequestErrors[35][85][errorsCount]' => '',
                'RequestErrors[35][85][itemsCount]' => '',
                'RequestErrors[35][86][comment]' => '',
                'RequestErrors[35][86][errorsCount]' => '',
                'RequestErrors[35][86][itemsCount]' => '',
                'RequestErrors[35][87][comment]' => '',
                'RequestErrors[35][87][errorsCount]' => '',
                'RequestErrors[35][87][itemsCount]' => '',
                'RequestErrors[35][88][comment]' => '',
                'RequestErrors[35][88][errorsCount]' => '',
                'RequestErrors[35][88][itemsCount]' => '',
                'RequestErrors[35][89][comment]' => '',
                'RequestErrors[35][89][errorsCount]' => '',
                'RequestErrors[35][89][itemsCount]' => '',
                'RequestErrors[36][95][comment]' => '',
                'RequestErrors[36][95][errorsCount]' => '',
                'RequestErrors[36][95][itemsCount]' => '',
                'RequestErrors[36][96][comment]' => '',
                'RequestErrors[36][96][errorsCount]' => '',
                'RequestErrors[36][96][itemsCount]' => '',
                'RequestErrors[36][97][comment]' => '',
                'RequestErrors[36][97][errorsCount]' => '',
                'RequestErrors[36][97][itemsCount]' => '',
                'RequestErrors[36][98][comment]' => '',
                'RequestErrors[36][98][errorsCount]' => '',
                'RequestErrors[36][98][itemsCount]' => '',
                'RequestErrors[37][90][comment]' => '',
                'RequestErrors[37][90][errorsCount]' => '',
                'RequestErrors[37][90][itemsCount]' => '',
                'RequestErrors[37][91][comment]' => '',
                'RequestErrors[37][91][errorsCount]' => '',
                'RequestErrors[37][91][itemsCount]' => '',
                'RequestErrors[46][138][comment]' => '',
                'RequestErrors[46][138][errorsCount]' => '',
                'RequestErrors[46][138][itemsCount]' => '',
                'RequestErrors[46][139][comment]' => '',
                'RequestErrors[46][139][errorsCount]' => '',
                'RequestErrors[46][139][itemsCount]' => '',
                'RequestField[121]' => 'http://gomer.local/bpm/request/to-correction?id=1',
                'RequestField[65]' => '10',
                "_csrf-backend" => null,
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
                            "awaiting_correction" => 1,
                            "created_at" => '2020-01-01 00:00:00',
                            "correction_comment" => '',
                            "amount_to_work" => 10,
                            "subject" => "Добавление новых товаров (Работа с товарами Розетки)",
                            "description" => 'description',
                            "attachments" => '[]',
                            "category_id" => 1,
                            "seller_id" => 83,
                            "recommendations" => '',
                            "reason_id" => 15,
                            "reason" => null,
                            "parent_id" => null,
                            "planned_start_date" => null,
                            "planned_finish_date" => null,
                            "actual_start_date" => '2020-01-01 00:00:03',
                            "actual_finish_date" => '2020-01-01 00:00:04',
                            "supervisor_process_date" => '2020-01-01 00:00:02',
                            //"supervisor_check_date" => null,
                            "difficulty" => null,
                            "result_comment" => 'Комментарий к результату задачи',
                            "supervisor_comment" => '',
                            //"last_change_status_date" => "2020-01-01 00:00:01",
                            "team_direction" => 3,
                            "report_period_id" => null,
                            "sync_source_id" => null,
                            "sv_report_periods" => '{"1": "1"}',
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
                            'field_id' => 21,
                            'value' => 1,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 22,
                            'value' => 6,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 23,
                            'value' => 11,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 24,
                            'value' => 15,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 25,
                            'value' => 18,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 26,
                            'value' => 22,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 27,
                            'value' => 24,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 31,
                            'value' => 48,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 49,
                            'value' => 10.1,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 50,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 51,
                            'value' => 10,
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
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 64,
                            'value' => 10.1,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 65,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 66,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 68,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 69,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 70,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 71,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 76,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 77,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 88,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 93,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 94,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 101,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 111,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 121,
                            'value' => 'http://gomer.local/bpm/request/to-correction?id=1',
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 122,
                            'value' => 10,
                        ],
                    ],
                    'request_errors' => [
                        [
                            'id' => 1,
                            'request_id' => 1,
                            'manager_id' => 11,
                            'errors_count' => 10,
                            'items_with_errors' => 10,
                            'field_value_id' => 67,
                            'comment' => 'comment',
                            'status' => 0,
                            //'create_ts' => null,
                            'correction_date' => null
                        ]
                    ],
                    'user_notifications' => [
                        [
                            "id" => 1,
                            "user_id" => 4,
                            "notification" => 'Заявка <b>№1</b> <b>"Добавление новых товаров (Работа с товарами Розетки)"</b>, количество в работу: <b>10</b> с приоритетом <b>Товар-новинка/эксклюзив (трафикообразующий)</b> изменен статус с <b>"Частично выполнена"</b> на <b>"В работе"</b> пользователем <b>Константин Куцан</b>',
                            "status" => 0,
                            //"created_at" => '2020-01-01 00:00:01',
                            "request_id" => 1,
                            "priority" => 2,
                            "recipients" => "Константин Куцан, Супервайзер Начальникович 1, Менеджер Контентович 1А"
                        ],
                        [
                            "id" => 2,
                            "user_id" => 6,
                            "notification" => 'Заявка <b>№1</b> <b>"Добавление новых товаров (Работа с товарами Розетки)"</b>, количество в работу: <b>10</b> с приоритетом <b>Товар-новинка/эксклюзив (трафикообразующий)</b> изменен статус с <b>"Частично выполнена"</b> на <b>"В работе"</b> пользователем <b>Константин Куцан</b>',
                            "status" => 0,
                            //"created_at" => '2020-01-01 00:00:01',
                            "request_id" => 1,
                            "priority" => 2,
                            "recipients" => "Константин Куцан, Супервайзер Начальникович 1, Менеджер Контентович 1А"
                        ],
                        [
                            "id" => 3,
                            "user_id" => 11,
                            "notification" => 'Заявка <b>№1</b> <b>"Добавление новых товаров (Работа с товарами Розетки)"</b>, количество в работу: <b>10</b> с приоритетом <b>Товар-новинка/эксклюзив (трафикообразующий)</b> изменен статус с <b>"Частично выполнена"</b> на <b>"В работе"</b> пользователем <b>Константин Куцан</b>',
                            "status" => 0,
                            //"created_at" => '2020-01-01 00:00:01',
                            "request_id" => 1,
                            "priority" => 2,
                            "recipients" => "Константин Куцан, Супервайзер Начальникович 1, Менеджер Контентович 1А"
                        ],
                    ],
                    'request_status_history' => [
                        [
                            "id" => 1,
                            "request_id" => 1,
                            "user_id" => 4,
                            "old_status" => 8,
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

    'case8_11' => [
        'setting' => [
            'description' => 'Перевод из "Частично выполнена" в "Закрыта"',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case.php',
        'provider_data' => [
            'requestParameter' => 'update',
            'requestBody' => [
                'RequestField[111]' => '10',
                'RequestField[121]' => '',
                'RequestField[1]' => '1',
                'RequestField[20]' => '66',
                'RequestField[21]' => '1',
                'RequestField[22]' => '6',
                'RequestField[23]' => '11',
                'RequestField[24]' => '15',
                'RequestField[25]' => '18',
                'RequestField[26]' => '22',
                'RequestField[27]' => '24',
                'RequestField[31]' => '48',
                'RequestField[65]' => '10',
                'RequestField[66]' => '10',
                'RequestField[68]' => '10',
                'RequestField[69]' => '10',
                'RequestField[70]' => '10',
                'RequestField[71]' => '10',
                'RequestField[76]' => '10',
                'RequestField[77]' => '10',
                'RequestField[88]' => '10',
                'RequestField[93]' => '10',
                'RequestField[94]' => '10',
                'Request[addedAttachments]' => '[]',
                'Request[amount_to_work]' => '10',
                'Request[attachment_folder]' => '982cabb0b062bd7eb1f4f289ceec2db1',
                'Request[author_id]' => '4',
                'Request[category_id]' => '1',
                'Request[correction_comment]' => '',
                'Request[deletedAttachments]' => '[]',
                'Request[description]' => 'description',
                'Request[manager_id]' => '11',
                'Request[planned_start_date]' => '',
                'Request[priority]' => '2',
                'Request[recommendations]' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО<textarea /><input></input><form action="http://live.hh.ru"><input type="submit"></form>',
                'Request[report_period_id]' => '',
                'Request[result_comment]' => 'Комментарий к результату задачи',
                'Request[seller_id]' => '83',
                'Request[subject]' => 'Добавление новых товаров (Работа с товарами Розетки)',
                'Request[supervisor_comment]' => 'Комментарий супервайзера',
                'Request[supervisor_id]' => '6',
                'Request[sv_report_periods][]' => '1',
                'Request[uploadedFiles][]' => '',
                'Request[uploadedFiles][]' => '',
                '_csrf-backend' => null,
                'newStatus' => '11',
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
                            "status" => 11,
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
                            "reason_id" => 15,
                            "reason" => null,
                            "parent_id" => null,
                            "planned_start_date" => null,
                            "planned_finish_date" => null,
                            "actual_start_date" => '2020-01-01 00:00:03',
                            "actual_finish_date" => '2020-01-01 00:00:04',
                            "supervisor_process_date" => '2020-01-01 00:00:02',
                            //"supervisor_check_date" => null,
                            "difficulty" => null,
                            "result_comment" => 'Комментарий к результату задачи',
                            "supervisor_comment" => 'Комментарий супервайзера',
                            //"last_change_status_date" => "2020-01-01 00:00:01",
                            "team_direction" => 3,
                            "report_period_id" => null,
                            "sync_source_id" => null,
                            "sv_report_periods" => '{"1": "1"}',
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
                            'value' => 66,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 21,
                            'value' => 1,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 22,
                            'value' => 6,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 23,
                            'value' => 11,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 24,
                            'value' => 15,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 25,
                            'value' => 18,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 26,
                            'value' => 22,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 27,
                            'value' => 24,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 31,
                            'value' => 48,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 49,
                            'value' => 20.1,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 50,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 51,
                            'value' => 10,
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
                            'value' => 2,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 60,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 64,
                            'value' => 20.1,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 65,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 66,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 68,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 69,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 70,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 71,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 76,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 77,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 88,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 93,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 94,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 101,
                            'value' => null,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 111,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 122,
                            'value' => null,
                        ],
                    ],
                    "request_errors" => [],
                    'user_notifications' => [
                        [
                            "id" => 1,
                            "user_id" => 4,
                            "notification" => 'Заявка <b>№1</b> <b>"Добавление новых товаров (Работа с товарами Розетки)"</b>, количество в работу: <b>10</b> с приоритетом <b>Товар-новинка/эксклюзив (трафикообразующий)</b> изменен статус с <b>"Частично выполнена"</b> на <b>"Закрыта"</b> пользователем <b>Константин Куцан</b>',
                            "status" => 0,
                            //"created_at" => '2020-01-01 00:00:01',
                            "request_id" => 1,
                            "priority" => 2,
                            "recipients" => "Константин Куцан, Супервайзер Начальникович 1, Менеджер Контентович 1А"
                        ],
                        [
                            "id" => 2,
                            "user_id" => 6,
                            "notification" => 'Заявка <b>№1</b> <b>"Добавление новых товаров (Работа с товарами Розетки)"</b>, количество в работу: <b>10</b> с приоритетом <b>Товар-новинка/эксклюзив (трафикообразующий)</b> изменен статус с <b>"Частично выполнена"</b> на <b>"Закрыта"</b> пользователем <b>Константин Куцан</b>',
                            "status" => 0,
                            //"created_at" => '2020-01-01 00:00:01',
                            "request_id" => 1,
                            "priority" => 2,
                            "recipients" => "Константин Куцан, Супервайзер Начальникович 1, Менеджер Контентович 1А"
                        ],
                        [
                            "id" => 3,
                            "user_id" => 11,
                            "notification" => 'Заявка <b>№1</b> <b>"Добавление новых товаров (Работа с товарами Розетки)"</b>, количество в работу: <b>10</b> с приоритетом <b>Товар-новинка/эксклюзив (трафикообразующий)</b> изменен статус с <b>"Частично выполнена"</b> на <b>"Закрыта"</b> пользователем <b>Константин Куцан</b>',
                            "status" => 0,
                            //"created_at" => '2020-01-01 00:00:01',
                            "request_id" => 1,
                            "priority" => 2,
                            "recipients" => "Константин Куцан, Супервайзер Начальникович 1, Менеджер Контентович 1А"
                        ],
                    ],
                    'request_status_history' => [
                        [
                            "id" => 1,
                            "request_id" => 1,
                            "user_id" => 4,
                            "old_status" => 8,
                            "new_status" => 11,
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
