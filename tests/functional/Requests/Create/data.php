<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Новая заявка на Добавление новых товаров (Работа с товарами Розетки)',
            'type' => 1,
            'direction' => 1
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'checkboxes' => [
                ' Добавление товаров в новую категорию',
                ' Лоты',
                ' На основе отзыва клиента на сайте',
                ' Пакетная загрузка',
                ' Промо-описание',
                ' Ручная загрузка',
                ' С видео',
                ' С размерной сеткой',
                ' С тегами к товарам',
                ' С фотосъемкой',
                ' Уценка',
                ' Уценка 2'
            ],
            'requestBody' => [
                "RequestField[1]" => 1,
                "Request[amount_to_work]" => 10,
                "Request[attachment_folder]" => '18ac118ec8919dcb3ad0d7ddd129d88a',
                "Request[addedAttachments]" => '[]',
                "Request[deletedAttachments]" => '[]',
                "Request[attachments]" => '[]',
                "Request[category_id]" => 1,
                "Request[description]" => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО<textarea /><input></input><form action="http://live.hh.ru"><input type="submit"></form>',
                "Request[observers]" => [15, 17],
                "Request[direction]" => 1,
                "Request[parent_id]" => null,
                "Request[planned_finish_date]" => null,
                "Request[priority]" => 2,
                "Request[seller_id]" => 83,
                "Request[subject]" => "Добавление новых товаров (Работа с товарами Розетки)",
                "Request[type_id]" => 1,
                "Request[uploadedFiles][]" => null,
                "Request[uploadedFiles][]" => null,
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => [
                        [
                            "id" => 1,
                            "author_id" => 4,
                            "type_id" => 1,
                            "supervisor_id" => 6,
                            "manager_id" => null,
                            "status" => 1,
                            "direction" => 1,
                            "priority" => 2,
                            "awaiting_correction" => 0,
                            //"created_at" => '2020-01-01 00:00:01',
                            "correction_comment" => null,
                            "amount_to_work" => 10,
                            "subject" => "Добавление новых товаров (Работа с товарами Розетки)",
                            "description" => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|',
                            "attachments" => '[]',
                            "category_id" => 1,
                            "seller_id" => 83,
                            "recommendations" => null,
                            "reason_id" => null,
                            "reason" => null,
                            "parent_id" => null,
                            "planned_start_date" => null,
                            "planned_finish_date" => null,
                            "actual_start_date" => null,
                            "actual_finish_date" => null,
                            "supervisor_process_date" => null,
                            "supervisor_check_date" => null,
                            "difficulty" => null,
                            "result_comment" => null,
                            "supervisor_comment" => null,
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
                            "notification" => 'Создана новая заявка <b>№1 "Добавление новых товаров (Работа с товарами Розетки)"</b>, количество в работу: <b>10</b> пользователем <b>Константин Куцан</b> с приоритетом: <b>Товар-новинка/эксклюзив (трафикообразующий)</b>',
                            "status" => 0,
                            //"created_at" => '2020-01-01 00:00:01',
                            "request_id" => 1,
                            "priority" => 2,
                            "recipients" => "Константин Куцан, Менеджер Продактович 1, Супервайзер Начальникович 1, Тим Лидович 1"
                        ],
                        [
                            "id" => 2,
                            "user_id" => 6,
                            "notification" => 'Создана новая заявка <b>№1 "Добавление новых товаров (Работа с товарами Розетки)"</b>, количество в работу: <b>10</b> пользователем <b>Константин Куцан</b> с приоритетом: <b>Товар-новинка/эксклюзив (трафикообразующий)</b>',
                            "status" => 0,
                            //"created_at" => '2020-01-01 00:00:01',
                            "request_id" => 1,
                            "priority" => 2,
                            "recipients" => "Константин Куцан, Менеджер Продактович 1, Супервайзер Начальникович 1, Тим Лидович 1"
                        ],
                        [
                            "id" => 3,
                            "user_id" => 15,
                            "notification" => 'Создана новая заявка <b>№1 "Добавление новых товаров (Работа с товарами Розетки)"</b>, количество в работу: <b>10</b> пользователем <b>Константин Куцан</b> с приоритетом: <b>Товар-новинка/эксклюзив (трафикообразующий)</b>',
                            "status" => 0,
                            //"created_at" => '2020-01-01 00:00:01',
                            "request_id" => 1,
                            "priority" => 2,
                            "recipients" => "Константин Куцан, Менеджер Продактович 1, Супервайзер Начальникович 1, Тим Лидович 1"
                        ],
                        [
                            "id" => 4,
                            "user_id" => 17,
                            "notification" => 'Создана новая заявка <b>№1 "Добавление новых товаров (Работа с товарами Розетки)"</b>, количество в работу: <b>10</b> пользователем <b>Константин Куцан</b> с приоритетом: <b>Товар-новинка/эксклюзив (трафикообразующий)</b>',
                            "status" => 0,
                            //"created_at" => '2020-01-01 00:00:01',
                            "request_id" => 1,
                            "priority" => 2,
                            "recipients" => "Константин Куцан, Менеджер Продактович 1, Супервайзер Начальникович 1, Тим Лидович 1"
                        ],
                    ],
                    'observers' => [
                        [
                            "request_id" => 1,
                            "user_id" => 15
                        ],
                        [
                            "request_id" => 1,
                            "user_id" => 17
                        ],
                    ],
                ]
            ],
            "pageObjects" => [
                "canSee" => [
                    [
                        [
                            "selector" => "//select[@name='Request[seller_id]']/option[1][@value='9423']",
                            "value" => "anytech"
                        ],
                        [
                            "selector" => "//select[@name='Request[seller_id]']/option[2][@value='67757']",
                            "value" => "iTook"
                        ],
                        [
                            "selector" => "//select[@name='Request[seller_id]']/option[3][@value='83']",
                            "value" => "Euromart"
                        ],
                        [
                            "selector" => "//select[@name='Request[seller_id]']/option[4][@value='5' and @selected]",
                            "value" => "Rozetka"
                        ],
                    ]
                ]
            ]
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Новая заявка на Добавление новых товаров (Работа с товарами Маркетплейса)',
            'type' => 1,
            'direction' => 2
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'checkboxes' => [
                ' Автомодерация',
                ' БУ, REF',
                ' Жалоба на товар продавца маркета',
                ' С видео',
                ' С палитрой',
                ' С размерной сеткой',
                ' Стоп-бренды'
            ],
            'requestBody' => [
                "RequestField[8]" => 1,
                "RequestField[15]" => 1,
                "RequestField[19]" => 1,
                "Request[amount_to_work]" => 10,
                "Request[attachment_folder]" => '18ac118ec8919dcb3ad0d7ddd129d88a',
                "Request[addedAttachments]" => '[]',
                "Request[deletedAttachments]" => '[]',
                "Request[attachments]" => '[]',
                "Request[description]" => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО<textarea /><input></input><form action="http://live.hh.ru"><input type="submit"></form>',
                "Request[observers]" => [15, 17],
                "Request[direction]" => 2,
                "Request[parent_id]" => null,
                "Request[planned_finish_date]" => null,
                "Request[priority]" => 2,
                "Request[seller_id]" => 0,
                "Request[subject]" => "Добавление новых товаров (Работа с товарами Маркетплейса)",
                "Request[type_id]" => 1,
                "Request[uploadedFiles][]" => null,
                "Request[uploadedFiles][]" => null,
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => [
                        [
                            "id" => 1,
                            "author_id" => 4,
                            "type_id" => 1,
                            "supervisor_id" => 5,
                            "manager_id" => null,
                            "status" => 1,
                            "direction" => 2,
                            "priority" => 2,
                            "awaiting_correction" => 0,
                            //"created_at" => '2020-01-01 00:00:01',
                            "correction_comment" => null,
                            "amount_to_work" => 10,
                            "subject" => "Добавление новых товаров (Работа с товарами Маркетплейса)",
                            "description" => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|',
                            "attachments" => '[]',
                            "category_id" => null,
                            "seller_id" => '0',
                            "recommendations" => null,
                            "reason_id" => null,
                            "reason" => null,
                            "parent_id" => null,
                            "planned_start_date" => null,
                            "planned_finish_date" => null,
                            "actual_start_date" => null,
                            "actual_finish_date" => null,
                            "supervisor_process_date" => null,
                            "supervisor_check_date" => null,
                            "difficulty" => null,
                            "result_comment" => null,
                            "supervisor_comment" => null,
                            //"last_change_status_date" => "2020-01-01 00:00:01",
                            "team_direction" => 2,
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
                            'field_id' => 8,
                            'value' => 1,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 15,
                            'value' => 1,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 19,
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
                            'field_id' => 53,
                            'value' => 3,
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
                            'field_id' => 114,
                            'value' => 3,
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
                            "notification" => 'Создана новая заявка <b>№1 "Добавление новых товаров (Работа с товарами Маркетплейса)"</b>, количество в работу: <b>10</b> пользователем <b>Константин Куцан</b> с приоритетом: <b>Товар-новинка/эксклюзив (трафикообразующий)</b>',
                            "status" => 0,
                            //"created_at" => '2020-01-01 00:00:01',
                            "request_id" => 1,
                            "priority" => 2,
                            "recipients" => "Константин Куцан, Менеджер Продактович 1, Супервайзер Руководько 1, Тим Лидович 1"
                        ],
                        [
                            "id" => 2,
                            "user_id" => 5,
                            "notification" => 'Создана новая заявка <b>№1 "Добавление новых товаров (Работа с товарами Маркетплейса)"</b>, количество в работу: <b>10</b> пользователем <b>Константин Куцан</b> с приоритетом: <b>Товар-новинка/эксклюзив (трафикообразующий)</b>',
                            "status" => 0,
                            //"created_at" => '2020-01-01 00:00:01',
                            "request_id" => 1,
                            "priority" => 2,
                            "recipients" => "Константин Куцан, Менеджер Продактович 1, Супервайзер Руководько 1, Тим Лидович 1"
                        ],
                        [
                            "id" => 3,
                            "user_id" => 15,
                            "notification" => 'Создана новая заявка <b>№1 "Добавление новых товаров (Работа с товарами Маркетплейса)"</b>, количество в работу: <b>10</b> пользователем <b>Константин Куцан</b> с приоритетом: <b>Товар-новинка/эксклюзив (трафикообразующий)</b>',
                            "status" => 0,
                            //"created_at" => '2020-01-01 00:00:01',
                            "request_id" => 1,
                            "priority" => 2,
                            "recipients" => "Константин Куцан, Менеджер Продактович 1, Супервайзер Руководько 1, Тим Лидович 1"
                        ],
                        [
                            "id" => 4,
                            "user_id" => 17,
                            "notification" => 'Создана новая заявка <b>№1 "Добавление новых товаров (Работа с товарами Маркетплейса)"</b>, количество в работу: <b>10</b> пользователем <b>Константин Куцан</b> с приоритетом: <b>Товар-новинка/эксклюзив (трафикообразующий)</b>',
                            "status" => 0,
                            //"created_at" => '2020-01-01 00:00:01',
                            "request_id" => 1,
                            "priority" => 2,
                            "recipients" => "Константин Куцан, Менеджер Продактович 1, Супервайзер Руководько 1, Тим Лидович 1"
                        ],
                    ],
                    'observers' => [
                        [
                            "request_id" => 1,
                            "user_id" => 15
                        ],
                        [
                            "request_id" => 1,
                            "user_id" => 17
                        ],
                    ],
                ]
            ]
        ]
    ],

    'case3' => [
        'setting' => [
            'description' => 'Новая заявка на Добавление/изменение информации в существующих товарах (Работа с товарами Розетки)',
            'type' => 2,
            'direction' => 1
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'checkboxes' => [
                ' Добавление/обновление инструкций',
                ' На основе отзыва клиента на сайте',
                ' Обновление описания',
                ' Обновление фото',
                ' Обновление характеристик',
                ' Пакетная загрузка',
                ' По заявке с MobileCourier',
                ' Промо-описание',
                ' Ручная загрузка',
                ' С видео',
                ' С размерной сеткой',
                ' С тегами к товарам',
                ' С фотосъемкой',
                ' Уценка',
                ' Уценка 2'
            ],
            'requestBody' => [
                "RequestField[1]" => 1,
                "Request[amount_to_work]" => 10,
                "Request[attachment_folder]" => '18ac118ec8919dcb3ad0d7ddd129d88a',
                "Request[addedAttachments]" => '[]',
                "Request[deletedAttachments]" => '[]',
                "Request[attachments]" => '[]',
                "Request[category_id]" => 1,
                "Request[description]" => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО<textarea /><input></input><form action="http://live.hh.ru"><input type="submit"></form>',
                "Request[observers]" => [15, 17],
                "Request[direction]" => 1,
                "Request[parent_id]" => null,
                "Request[planned_finish_date]" => null,
                "Request[priority]" => 2,
                "Request[seller_id]" => 83,
                "Request[subject]" => "Добавление/изменение информации в существующих товарах (Работа с товарами Розетки)",
                "Request[type_id]" => 2,
                "Request[uploadedFiles][]" => null,
                "Request[uploadedFiles][]" => null,
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => [
                        [
                            "id" => 1,
                            "author_id" => 4,
                            "type_id" => 2,
                            "supervisor_id" => 6,
                            "manager_id" => null,
                            "status" => 1,
                            "direction" => 1,
                            "priority" => 2,
                            "awaiting_correction" => 0,
                            //"created_at" => '2020-01-01 00:00:01',
                            "correction_comment" => null,
                            "amount_to_work" => 10,
                            "subject" => "Добавление/изменение информации в существующих товарах (Работа с товарами Розетки)",
                            "description" => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|',
                            "attachments" => '[]',
                            "category_id" => 1,
                            "seller_id" => 83,
                            "recommendations" => null,
                            "reason_id" => null,
                            "reason" => null,
                            "parent_id" => null,
                            "planned_start_date" => null,
                            "planned_finish_date" => null,
                            "actual_start_date" => null,
                            "actual_finish_date" => null,
                            "supervisor_process_date" => null,
                            "supervisor_check_date" => null,
                            "difficulty" => null,
                            "result_comment" => null,
                            "supervisor_comment" => null,
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
                            "notification" => 'Создана новая заявка <b>№1 "Добавление/изменение информации в существующих товарах (Работа с товарами Розетки)"</b>, количество в работу: <b>10</b> пользователем <b>Константин Куцан</b> с приоритетом: <b>Товар-новинка/эксклюзив (трафикообразующий)</b>',
                            "status" => 0,
                            //"created_at" => '2020-01-01 00:00:01',
                            "request_id" => 1,
                            "priority" => 2,
                            "recipients" => "Константин Куцан, Менеджер Продактович 1, Супервайзер Начальникович 1, Тим Лидович 1"
                        ],
                        [
                            "id" => 2,
                            "user_id" => 6,
                            "notification" => 'Создана новая заявка <b>№1 "Добавление/изменение информации в существующих товарах (Работа с товарами Розетки)"</b>, количество в работу: <b>10</b> пользователем <b>Константин Куцан</b> с приоритетом: <b>Товар-новинка/эксклюзив (трафикообразующий)</b>',
                            "status" => 0,
                            //"created_at" => '2020-01-01 00:00:01',
                            "request_id" => 1,
                            "priority" => 2,
                            "recipients" => "Константин Куцан, Менеджер Продактович 1, Супервайзер Начальникович 1, Тим Лидович 1"
                        ],
                        [
                            "id" => 3,
                            "user_id" => 15,
                            "notification" => 'Создана новая заявка <b>№1 "Добавление/изменение информации в существующих товарах (Работа с товарами Розетки)"</b>, количество в работу: <b>10</b> пользователем <b>Константин Куцан</b> с приоритетом: <b>Товар-новинка/эксклюзив (трафикообразующий)</b>',
                            "status" => 0,
                            //"created_at" => '2020-01-01 00:00:01',
                            "request_id" => 1,
                            "priority" => 2,
                            "recipients" => "Константин Куцан, Менеджер Продактович 1, Супервайзер Начальникович 1, Тим Лидович 1"
                        ],
                        [
                            "id" => 4,
                            "user_id" => 17,
                            "notification" => 'Создана новая заявка <b>№1 "Добавление/изменение информации в существующих товарах (Работа с товарами Розетки)"</b>, количество в работу: <b>10</b> пользователем <b>Константин Куцан</b> с приоритетом: <b>Товар-новинка/эксклюзив (трафикообразующий)</b>',
                            "status" => 0,
                            //"created_at" => '2020-01-01 00:00:01',
                            "request_id" => 1,
                            "priority" => 2,
                            "recipients" => "Константин Куцан, Менеджер Продактович 1, Супервайзер Начальникович 1, Тим Лидович 1"
                        ],
                    ],
                    'observers' => [
                        [
                            "request_id" => 1,
                            "user_id" => 15
                        ],
                        [
                            "request_id" => 1,
                            "user_id" => 17
                        ],
                    ],
                ]
            ],
            "pageObjects" => [
                "canSee" => [
                    [
                        [
                            "selector" => "//select[@name='Request[seller_id]']/option[1][@value='9423']",
                            "value" => "anytech"
                        ],
                        [
                            "selector" => "//select[@name='Request[seller_id]']/option[2][@value='67757']",
                            "value" => "iTook"
                        ],
                        [
                            "selector" => "//select[@name='Request[seller_id]']/option[3][@value='83']",
                            "value" => "Euromart"
                        ],
                        [
                            "selector" => "//select[@name='Request[seller_id]']/option[4][@value='5' and @selected]",
                            "value" => "Rozetka"
                        ],
                    ]
                ]
            ]
        ]
    ],

    'case4' => [
        'setting' => [
            'description' => 'Новая заявка на Добавление/изменение информации в существующих товарах (Работа с товарами Маркетплейса)',
            'type' => 2,
            'direction' => 2
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'checkboxes' => [
                ' Автомодерация',
                ' БУ, REF',
                ' Жалоба на товар продавца маркета',
                ' По заявке с MobileCourier',
                ' С видео',
                ' С палитрой',
                ' С размерной сеткой',
                ' Стоп-бренды'
            ],
            'requestBody' => [
                "RequestField[8]" => 1,
                "RequestField[15]" => 1,
                "RequestField[19]" => 1,
                "Request[amount_to_work]" => 10,
                "Request[attachment_folder]" => '18ac118ec8919dcb3ad0d7ddd129d88a',
                "Request[addedAttachments]" => '[]',
                "Request[deletedAttachments]" => '[]',
                "Request[attachments]" => '[]',
                "Request[seller_id]" => 0,
                "Request[description]" => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО<textarea /><input></input><form action="http://live.hh.ru"><input type="submit"></form>',
                "Request[observers]" => [15, 17],
                "Request[direction]" => 2,
                "Request[parent_id]" => null,
                "Request[planned_finish_date]" => null,
                "Request[priority]" => 2,
                "Request[subject]" => "Добавление/изменение информации в существующих товарах (Работа с товарами Маркетплейса)",
                "Request[type_id]" => 2,
                "Request[uploadedFiles][]" => null,
                "Request[uploadedFiles][]" => null,
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => [
                        [
                            "id" => 1,
                            "author_id" => 4,
                            "type_id" => 2,
                            "supervisor_id" => 5,
                            "manager_id" => null,
                            "status" => 1,
                            "direction" => 2,
                            "priority" => 2,
                            "awaiting_correction" => 0,
                            //"created_at" => '2020-01-01 00:00:01',
                            "correction_comment" => null,
                            "amount_to_work" => 10,
                            "subject" => "Добавление/изменение информации в существующих товарах (Работа с товарами Маркетплейса)",
                            "description" => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|',
                            "attachments" => '[]',
                            "category_id" => null,
                            "seller_id" => '0',
                            "recommendations" => null,
                            "reason_id" => null,
                            "reason" => null,
                            "parent_id" => null,
                            "planned_start_date" => null,
                            "planned_finish_date" => null,
                            "actual_start_date" => null,
                            "actual_finish_date" => null,
                            "supervisor_process_date" => null,
                            "supervisor_check_date" => null,
                            "difficulty" => null,
                            "result_comment" => null,
                            "supervisor_comment" => null,
                            //"last_change_status_date" => "2020-01-01 00:00:01",
                            "team_direction" => 2,
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
                            'field_id' => 8,
                            'value' => 1,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 15,
                            'value' => 1,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 19,
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
                            'field_id' => 53,
                            'value' => 3,
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
                            'field_id' => 114,
                            'value' => 3,
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
                            "notification" => 'Создана новая заявка <b>№1 "Добавление/изменение информации в существующих товарах (Работа с товарами Маркетплейса)"</b>, количество в работу: <b>10</b> пользователем <b>Константин Куцан</b> с приоритетом: <b>Товар-новинка/эксклюзив (трафикообразующий)</b>',
                            "status" => 0,
                            //"created_at" => '2020-01-01 00:00:01',
                            "request_id" => 1,
                            "priority" => 2,
                            "recipients" => "Константин Куцан, Менеджер Продактович 1, Супервайзер Руководько 1, Тим Лидович 1"
                        ],
                        [
                            "id" => 2,
                            "user_id" => 5,
                            "notification" => 'Создана новая заявка <b>№1 "Добавление/изменение информации в существующих товарах (Работа с товарами Маркетплейса)"</b>, количество в работу: <b>10</b> пользователем <b>Константин Куцан</b> с приоритетом: <b>Товар-новинка/эксклюзив (трафикообразующий)</b>',
                            "status" => 0,
                            //"created_at" => '2020-01-01 00:00:01',
                            "request_id" => 1,
                            "priority" => 2,
                            "recipients" => "Константин Куцан, Менеджер Продактович 1, Супервайзер Руководько 1, Тим Лидович 1"
                        ],
                        [
                            "id" => 3,
                            "user_id" => 15,
                            "notification" => 'Создана новая заявка <b>№1 "Добавление/изменение информации в существующих товарах (Работа с товарами Маркетплейса)"</b>, количество в работу: <b>10</b> пользователем <b>Константин Куцан</b> с приоритетом: <b>Товар-новинка/эксклюзив (трафикообразующий)</b>',
                            "status" => 0,
                            //"created_at" => '2020-01-01 00:00:01',
                            "request_id" => 1,
                            "priority" => 2,
                            "recipients" => "Константин Куцан, Менеджер Продактович 1, Супервайзер Руководько 1, Тим Лидович 1"
                        ],
                        [
                            "id" => 4,
                            "user_id" => 17,
                            "notification" => 'Создана новая заявка <b>№1 "Добавление/изменение информации в существующих товарах (Работа с товарами Маркетплейса)"</b>, количество в работу: <b>10</b> пользователем <b>Константин Куцан</b> с приоритетом: <b>Товар-новинка/эксклюзив (трафикообразующий)</b>',
                            "status" => 0,
                            //"created_at" => '2020-01-01 00:00:01',
                            "request_id" => 1,
                            "priority" => 2,
                            "recipients" => "Константин Куцан, Менеджер Продактович 1, Супервайзер Руководько 1, Тим Лидович 1"
                        ],
                    ],
                    'observers' => [
                        [
                            "request_id" => 1,
                            "user_id" => 15
                        ],
                        [
                            "request_id" => 1,
                            "user_id" => 17
                        ],
                    ],
                ]
            ]
        ]
    ],

    'case5' => [
        'setting' => [
            'description' => 'Новая заявка на Перенос товаров (Работа с товарами Розетки)',
            'type' => 3,
            'direction' => 1
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'checkboxes' => [
                ' Добавление товаров в новую категорию',
                ' Лоты',
                ' На основе отзыва клиента на сайте',
                ' Пакетная загрузка',
                ' Промо-описание',
                ' Ручная загрузка',
                ' С видео',
                ' С размерной сеткой',
                ' С тегами к товарам',
                ' С фотосъемкой',
                ' Уценка',
                ' Уценка 2'
            ],
            'requestBody' => [
                "RequestField[1]" => 1,
                "Request[amount_to_work]" => 10,
                "Request[attachment_folder]" => '18ac118ec8919dcb3ad0d7ddd129d88a',
                "Request[addedAttachments]" => '[]',
                "Request[deletedAttachments]" => '[]',
                "Request[attachments]" => '[]',
                "Request[category_id]" => 1,
                "Request[description]" => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО<textarea /><input></input><form action="http://live.hh.ru"><input type="submit"></form>',
                "Request[observers]" => [15, 17],
                "Request[direction]" => 1,
                "Request[parent_id]" => null,
                "Request[planned_finish_date]" => null,
                "Request[priority]" => 2,
                "Request[seller_id]" => 83,
                "Request[subject]" => "Перенос товаров (Работа с товарами Розетки)",
                "Request[type_id]" => 3,
                "Request[uploadedFiles][]" => null,
                "Request[uploadedFiles][]" => null,
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => [
                        [
                            "id" => 1,
                            "author_id" => 4,
                            "type_id" => 3,
                            "supervisor_id" => 6,
                            "manager_id" => null,
                            "status" => 1,
                            "direction" => 1,
                            "priority" => 2,
                            "awaiting_correction" => 0,
                            //"created_at" => '2020-01-01 00:00:01',
                            "correction_comment" => null,
                            "amount_to_work" => 10,
                            "subject" => "Перенос товаров (Работа с товарами Розетки)",
                            "description" => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|',
                            "attachments" => '[]',
                            "category_id" => 1,
                            "seller_id" => 83,
                            "recommendations" => null,
                            "reason_id" => null,
                            "reason" => null,
                            "parent_id" => null,
                            "planned_start_date" => null,
                            "planned_finish_date" => null,
                            "actual_start_date" => null,
                            "actual_finish_date" => null,
                            "supervisor_process_date" => null,
                            "supervisor_check_date" => null,
                            "difficulty" => null,
                            "result_comment" => null,
                            "supervisor_comment" => null,
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
                            "notification" => 'Создана новая заявка <b>№1 "Перенос товаров (Работа с товарами Розетки)"</b>, количество в работу: <b>10</b> пользователем <b>Константин Куцан</b> с приоритетом: <b>Товар-новинка/эксклюзив (трафикообразующий)</b>',
                            "status" => 0,
                            //"created_at" => '2020-01-01 00:00:01',
                            "request_id" => 1,
                            "priority" => 2,
                            "recipients" => "Константин Куцан, Менеджер Продактович 1, Супервайзер Начальникович 1, Тим Лидович 1"
                        ],
                        [
                            "id" => 2,
                            "user_id" => 6,
                            "notification" => 'Создана новая заявка <b>№1 "Перенос товаров (Работа с товарами Розетки)"</b>, количество в работу: <b>10</b> пользователем <b>Константин Куцан</b> с приоритетом: <b>Товар-новинка/эксклюзив (трафикообразующий)</b>',
                            "status" => 0,
                            //"created_at" => '2020-01-01 00:00:01',
                            "request_id" => 1,
                            "priority" => 2,
                            "recipients" => "Константин Куцан, Менеджер Продактович 1, Супервайзер Начальникович 1, Тим Лидович 1"
                        ],
                        [
                            "id" => 3,
                            "user_id" => 15,
                            "notification" => 'Создана новая заявка <b>№1 "Перенос товаров (Работа с товарами Розетки)"</b>, количество в работу: <b>10</b> пользователем <b>Константин Куцан</b> с приоритетом: <b>Товар-новинка/эксклюзив (трафикообразующий)</b>',
                            "status" => 0,
                            //"created_at" => '2020-01-01 00:00:01',
                            "request_id" => 1,
                            "priority" => 2,
                            "recipients" => "Константин Куцан, Менеджер Продактович 1, Супервайзер Начальникович 1, Тим Лидович 1"
                        ],
                        [
                            "id" => 4,
                            "user_id" => 17,
                            "notification" => 'Создана новая заявка <b>№1 "Перенос товаров (Работа с товарами Розетки)"</b>, количество в работу: <b>10</b> пользователем <b>Константин Куцан</b> с приоритетом: <b>Товар-новинка/эксклюзив (трафикообразующий)</b>',
                            "status" => 0,
                            //"created_at" => '2020-01-01 00:00:01',
                            "request_id" => 1,
                            "priority" => 2,
                            "recipients" => "Константин Куцан, Менеджер Продактович 1, Супервайзер Начальникович 1, Тим Лидович 1"
                        ],
                    ],
                    'observers' => [
                        [
                            "request_id" => 1,
                            "user_id" => 15
                        ],
                        [
                            "request_id" => 1,
                            "user_id" => 17
                        ],
                    ],
                ]
            ],
            "pageObjects" => [
                "canSee" => [
                    [
                        [
                            "selector" => "//select[@name='Request[seller_id]']/option[1][@value='9423']",
                            "value" => "anytech"
                        ],
                        [
                            "selector" => "//select[@name='Request[seller_id]']/option[2][@value='67757']",
                            "value" => "iTook"
                        ],
                        [
                            "selector" => "//select[@name='Request[seller_id]']/option[3][@value='83']",
                            "value" => "Euromart"
                        ],
                        [
                            "selector" => "//select[@name='Request[seller_id]']/option[4][@value='5' and @selected]",
                            "value" => "Rozetka"
                        ],
                    ]
                ]
            ]
        ]
    ],

    'case6' => [
        'setting' => [
            'description' => 'Новая заявка на Перенос товаров (Работа с товарами Маркетплейса)',
            'type' => 3,
            'direction' => 2
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'checkboxes' => [
                ' Автомодерация',
                ' БУ, REF',
                ' Жалоба на товар продавца маркета',
                ' С видео',
                ' С палитрой',
                ' С размерной сеткой',
                ' Стоп-бренды'
            ],
            'requestBody' => [
                "RequestField[8]" => 1,
                "RequestField[15]" => 1,
                "RequestField[19]" => 1,
                "Request[amount_to_work]" => 10,
                "Request[attachment_folder]" => '18ac118ec8919dcb3ad0d7ddd129d88a',
                "Request[addedAttachments]" => '[]',
                "Request[deletedAttachments]" => '[]',
                "Request[attachments]" => '[]',
                "Request[description]" => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО<textarea /><input></input><form action="http://live.hh.ru"><input type="submit"></form>',
                "Request[observers]" => [15, 17],
                "Request[direction]" => 2,
                "Request[parent_id]" => null,
                "Request[planned_finish_date]" => null,
                "Request[priority]" => 2,
                "Request[seller_id]" => 0,
                "Request[subject]" => "Перенос товаров (Работа с товарами Маркетплейса)",
                "Request[type_id]" => 3,
                "Request[uploadedFiles][]" => null,
                "Request[uploadedFiles][]" => null,
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => [
                        [
                            "id" => 1,
                            "author_id" => 4,
                            "type_id" => 3,
                            "supervisor_id" => 5,
                            "manager_id" => null,
                            "status" => 1,
                            "direction" => 2,
                            "priority" => 2,
                            "awaiting_correction" => 0,
                            //"created_at" => '2020-01-01 00:00:01',
                            "correction_comment" => null,
                            "amount_to_work" => 10,
                            "subject" => "Перенос товаров (Работа с товарами Маркетплейса)",
                            "description" => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|',
                            "attachments" => '[]',
                            "category_id" => null,
                            "seller_id" => '0',
                            "recommendations" => null,
                            "reason_id" => null,
                            "reason" => null,
                            "parent_id" => null,
                            "planned_start_date" => null,
                            "planned_finish_date" => null,
                            "actual_start_date" => null,
                            "actual_finish_date" => null,
                            "supervisor_process_date" => null,
                            "supervisor_check_date" => null,
                            "difficulty" => null,
                            "result_comment" => null,
                            "supervisor_comment" => null,
                            //"last_change_status_date" => "2020-01-01 00:00:01",
                            "team_direction" => 2,
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
                            'field_id' => 8,
                            'value' => 1,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 15,
                            'value' => 1,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 19,
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
                            'field_id' => 53,
                            'value' => 3,
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
                            'field_id' => 114,
                            'value' => 3,
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
                            "notification" => 'Создана новая заявка <b>№1 "Перенос товаров (Работа с товарами Маркетплейса)"</b>, количество в работу: <b>10</b> пользователем <b>Константин Куцан</b> с приоритетом: <b>Товар-новинка/эксклюзив (трафикообразующий)</b>',
                            "status" => 0,
                            //"created_at" => '2020-01-01 00:00:01',
                            "request_id" => 1,
                            "priority" => 2,
                            "recipients" => "Константин Куцан, Менеджер Продактович 1, Супервайзер Руководько 1, Тим Лидович 1"
                        ],
                        [
                            "id" => 2,
                            "user_id" => 5,
                            "notification" => 'Создана новая заявка <b>№1 "Перенос товаров (Работа с товарами Маркетплейса)"</b>, количество в работу: <b>10</b> пользователем <b>Константин Куцан</b> с приоритетом: <b>Товар-новинка/эксклюзив (трафикообразующий)</b>',
                            "status" => 0,
                            //"created_at" => '2020-01-01 00:00:01',
                            "request_id" => 1,
                            "priority" => 2,
                            "recipients" => "Константин Куцан, Менеджер Продактович 1, Супервайзер Руководько 1, Тим Лидович 1"
                        ],
                        [
                            "id" => 3,
                            "user_id" => 15,
                            "notification" => 'Создана новая заявка <b>№1 "Перенос товаров (Работа с товарами Маркетплейса)"</b>, количество в работу: <b>10</b> пользователем <b>Константин Куцан</b> с приоритетом: <b>Товар-новинка/эксклюзив (трафикообразующий)</b>',
                            "status" => 0,
                            //"created_at" => '2020-01-01 00:00:01',
                            "request_id" => 1,
                            "priority" => 2,
                            "recipients" => "Константин Куцан, Менеджер Продактович 1, Супервайзер Руководько 1, Тим Лидович 1"
                        ],
                        [
                            "id" => 4,
                            "user_id" => 17,
                            "notification" => 'Создана новая заявка <b>№1 "Перенос товаров (Работа с товарами Маркетплейса)"</b>, количество в работу: <b>10</b> пользователем <b>Константин Куцан</b> с приоритетом: <b>Товар-новинка/эксклюзив (трафикообразующий)</b>',
                            "status" => 0,
                            //"created_at" => '2020-01-01 00:00:01',
                            "request_id" => 1,
                            "priority" => 2,
                            "recipients" => "Константин Куцан, Менеджер Продактович 1, Супервайзер Руководько 1, Тим Лидович 1"
                        ],
                    ],
                    'observers' => [
                        [
                            "request_id" => 1,
                            "user_id" => 15
                        ],
                        [
                            "request_id" => 1,
                            "user_id" => 17
                        ],
                    ],
                ]
            ]
        ]
    ],

    'case7' => [
        'setting' => [
            'description' => 'Новая заявка на Группировка товаров (Определяется типом задачи)',
            'type' => 4,
            'direction' => 0
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'checkboxes' => [
                ' Пакетная загрузка',
                ' Ручная загрузка',
            ],
            'requestBody' => [
                "RequestField[1]" => 1,
                "Request[amount_to_work]" => 10,
                "Request[attachment_folder]" => '18ac118ec8919dcb3ad0d7ddd129d88a',
                "Request[addedAttachments]" => '[]',
                "Request[deletedAttachments]" => '[]',
                "Request[attachments]" => '[]',
                "Request[category_id]" => 1,
                "Request[description]" => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО<textarea /><input></input><form action="http://live.hh.ru"><input type="submit"></form>',
                "Request[observers]" => [15, 17],
                "Request[direction]" => 0,
                "Request[parent_id]" => null,
                "Request[planned_finish_date]" => null,
                "Request[priority]" => 2,
                "Request[seller_id]" => 0,
                "Request[subject]" => "Группировка товаров (Определяется типом задачи)",
                "Request[type_id]" => 4,
                "Request[uploadedFiles][]" => null,
                "Request[uploadedFiles][]" => null,
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => [
                        [
                            "id" => 1,
                            "author_id" => 4,
                            "type_id" => 4,
                            "supervisor_id" => 33,
                            "manager_id" => null,
                            "status" => 1,
                            "direction" => 0,
                            "priority" => 2,
                            "awaiting_correction" => 0,
                            //"created_at" => '2020-01-01 00:00:01',
                            "correction_comment" => null,
                            "amount_to_work" => 10,
                            "subject" => "Группировка товаров (Определяется типом задачи)",
                            "description" => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|',
                            "attachments" => '[]',
                            "category_id" => 1,
                            "seller_id" => '0',
                            "recommendations" => null,
                            "reason_id" => null,
                            "reason" => null,
                            "parent_id" => null,
                            "planned_start_date" => null,
                            "planned_finish_date" => null,
                            "actual_start_date" => null,
                            "actual_finish_date" => null,
                            "supervisor_process_date" => null,
                            "supervisor_check_date" => null,
                            "difficulty" => null,
                            "result_comment" => null,
                            "supervisor_comment" => null,
                            //"last_change_status_date" => "2020-01-01 00:00:01",
                            "team_direction" => 4,
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
                            'field_id' => 61,
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
                            "notification" => 'Создана новая заявка <b>№1 "Группировка товаров (Определяется типом задачи)"</b>, количество в работу: <b>10</b> пользователем <b>Константин Куцан</b> с приоритетом: <b>Товар-новинка/эксклюзив (трафикообразующий)</b>',
                            "status" => 0,
                            //"created_at" => '2020-01-01 00:00:01',
                            "request_id" => 1,
                            "priority" => 2,
                            "recipients" => "Константин Куцан, Менеджер Продактович 1, Супервайзер Групповушкин 13, Тим Лидович 1"
                        ],
                        [
                            "id" => 2,
                            "user_id" => 33,
                            "notification" => 'Создана новая заявка <b>№1 "Группировка товаров (Определяется типом задачи)"</b>, количество в работу: <b>10</b> пользователем <b>Константин Куцан</b> с приоритетом: <b>Товар-новинка/эксклюзив (трафикообразующий)</b>',
                            "status" => 0,
                            //"created_at" => '2020-01-01 00:00:01',
                            "request_id" => 1,
                            "priority" => 2,
                            "recipients" => "Константин Куцан, Менеджер Продактович 1, Супервайзер Групповушкин 13, Тим Лидович 1"
                        ],
                        [
                            "id" => 3,
                            "user_id" => 15,
                            "notification" => 'Создана новая заявка <b>№1 "Группировка товаров (Определяется типом задачи)"</b>, количество в работу: <b>10</b> пользователем <b>Константин Куцан</b> с приоритетом: <b>Товар-новинка/эксклюзив (трафикообразующий)</b>',
                            "status" => 0,
                            //"created_at" => '2020-01-01 00:00:01',
                            "request_id" => 1,
                            "priority" => 2,
                            "recipients" => "Константин Куцан, Менеджер Продактович 1, Супервайзер Групповушкин 13, Тим Лидович 1"
                        ],
                        [
                            "id" => 4,
                            "user_id" => 17,
                            "notification" => 'Создана новая заявка <b>№1 "Группировка товаров (Определяется типом задачи)"</b>, количество в работу: <b>10</b> пользователем <b>Константин Куцан</b> с приоритетом: <b>Товар-новинка/эксклюзив (трафикообразующий)</b>',
                            "status" => 0,
                            //"created_at" => '2020-01-01 00:00:01',
                            "request_id" => 1,
                            "priority" => 2,
                            "recipients" => "Константин Куцан, Менеджер Продактович 1, Супервайзер Групповушкин 13, Тим Лидович 1"
                        ],
                    ],
                    'observers' => [
                        [
                            "request_id" => 1,
                            "user_id" => 15
                        ],
                        [
                            "request_id" => 1,
                            "user_id" => 17
                        ],
                    ],
                ]
            ]
        ]
    ],

    'case8' => [
        'setting' => [
            'description' => 'Новая заявка на Заливка фото с фотостудии (Работа с товарами Розетки)',
            'type' => 5,
            'direction' => 1
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'checkboxes' => [
                ' Добавление товаров в новую категорию',
                ' Лоты',
                ' На основе отзыва клиента на сайте',
                ' Пакетная загрузка',
                ' Промо-описание',
                ' Ручная загрузка',
                ' С видео',
                ' С размерной сеткой',
                ' С тегами к товарам',
                ' С фотосъемкой',
                ' Уценка',
                ' Уценка 2'
            ],
            'requestBody' => [
                "RequestField[1]" => 1,
                "Request[amount_to_work]" => 10,
                "Request[attachment_folder]" => '18ac118ec8919dcb3ad0d7ddd129d88a',
                "Request[addedAttachments]" => '[]',
                "Request[deletedAttachments]" => '[]',
                "Request[attachments]" => '[]',
                "Request[category_id]" => 1,
                "Request[description]" => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО<textarea /><input></input><form action="http://live.hh.ru"><input type="submit"></form>',
                "Request[observers]" => [15, 17],
                "Request[direction]" => 1,
                "Request[parent_id]" => null,
                "Request[planned_finish_date]" => null,
                "Request[priority]" => 2,
                "Request[seller_id]" => 83,
                "Request[subject]" => "Заливка фото с фотостудии (Работа с товарами Розетки)",
                "Request[type_id]" => 5,
                "Request[uploadedFiles][]" => null,
                "Request[uploadedFiles][]" => null,
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => [
                        [
                            "id" => 1,
                            "author_id" => 4,
                            "type_id" => 5,
                            "supervisor_id" => 6,
                            "manager_id" => null,
                            "status" => 1,
                            "direction" => 1,
                            "priority" => 2,
                            "awaiting_correction" => 0,
                            //"created_at" => '2020-01-01 00:00:01',
                            "correction_comment" => null,
                            "amount_to_work" => 10,
                            "subject" => "Заливка фото с фотостудии (Работа с товарами Розетки)",
                            "description" => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|',
                            "attachments" => '[]',
                            "category_id" => 1,
                            "seller_id" => 83,
                            "recommendations" => null,
                            "reason_id" => null,
                            "reason" => null,
                            "parent_id" => null,
                            "planned_start_date" => null,
                            "planned_finish_date" => null,
                            "actual_start_date" => null,
                            "actual_finish_date" => null,
                            "supervisor_process_date" => null,
                            "supervisor_check_date" => null,
                            "difficulty" => null,
                            "result_comment" => null,
                            "supervisor_comment" => null,
                            //"last_change_status_date" => "2020-01-01 00:00:01",
                            "team_direction" => 3,
                            "report_period_id" => null,
                            "sync_source_id" => null,
                            "sv_report_periods" => null,
                            "cross_check_status" => '0',
                            "cross_check_manager_id" => null,
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
                            "notification" => 'Создана новая заявка <b>№1 "Заливка фото с фотостудии (Работа с товарами Розетки)"</b>, количество в работу: <b>10</b> пользователем <b>Константин Куцан</b> с приоритетом: <b>Товар-новинка/эксклюзив (трафикообразующий)</b>',
                            "status" => 0,
                            //"created_at" => '2020-01-01 00:00:01',
                            "request_id" => 1,
                            "priority" => 2,
                            "recipients" => "Константин Куцан, Менеджер Продактович 1, Супервайзер Начальникович 1, Тим Лидович 1"
                        ],
                        [
                            "id" => 2,
                            "user_id" => 6,
                            "notification" => 'Создана новая заявка <b>№1 "Заливка фото с фотостудии (Работа с товарами Розетки)"</b>, количество в работу: <b>10</b> пользователем <b>Константин Куцан</b> с приоритетом: <b>Товар-новинка/эксклюзив (трафикообразующий)</b>',
                            "status" => 0,
                            //"created_at" => '2020-01-01 00:00:01',
                            "request_id" => 1,
                            "priority" => 2,
                            "recipients" => "Константин Куцан, Менеджер Продактович 1, Супервайзер Начальникович 1, Тим Лидович 1"
                        ],
                        [
                            "id" => 3,
                            "user_id" => 15,
                            "notification" => 'Создана новая заявка <b>№1 "Заливка фото с фотостудии (Работа с товарами Розетки)"</b>, количество в работу: <b>10</b> пользователем <b>Константин Куцан</b> с приоритетом: <b>Товар-новинка/эксклюзив (трафикообразующий)</b>',
                            "status" => 0,
                            //"created_at" => '2020-01-01 00:00:01',
                            "request_id" => 1,
                            "priority" => 2,
                            "recipients" => "Константин Куцан, Менеджер Продактович 1, Супервайзер Начальникович 1, Тим Лидович 1"
                        ],
                        [
                            "id" => 4,
                            "user_id" => 17,
                            "notification" => 'Создана новая заявка <b>№1 "Заливка фото с фотостудии (Работа с товарами Розетки)"</b>, количество в работу: <b>10</b> пользователем <b>Константин Куцан</b> с приоритетом: <b>Товар-новинка/эксклюзив (трафикообразующий)</b>',
                            "status" => 0,
                            //"created_at" => '2020-01-01 00:00:01',
                            "request_id" => 1,
                            "priority" => 2,
                            "recipients" => "Константин Куцан, Менеджер Продактович 1, Супервайзер Начальникович 1, Тим Лидович 1"
                        ],
                    ],
                    'observers' => [
                        [
                            "request_id" => 1,
                            "user_id" => 15
                        ],
                        [
                            "request_id" => 1,
                            "user_id" => 17
                        ],
                    ],
                ]
            ],
            "pageObjects" => [
                "canSee" => [
                    [
                        [
                            "selector" => "//select[@name='Request[seller_id]']/option[1][@value='9423']",
                            "value" => "anytech"
                        ],
                        [
                            "selector" => "//select[@name='Request[seller_id]']/option[2][@value='67757']",
                            "value" => "iTook"
                        ],
                        [
                            "selector" => "//select[@name='Request[seller_id]']/option[3][@value='83']",
                            "value" => "Euromart"
                        ],
                        [
                            "selector" => "//select[@name='Request[seller_id]']/option[4][@value='5' and @selected]",
                            "value" => "Rozetka"
                        ],
                    ]
                ]
            ]
        ]
    ],

    'case9' => [
        'setting' => [
            'description' => 'Новая заявка на Проверка скрытых товаров (Работа с товарами Маркетплейса)',
            'type' => 6,
            'direction' => 2
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'checkboxes' => [
                ' Автомодерация',
                ' БУ, REF',
                ' Жалоба на товар продавца маркета',
                ' С видео',
                ' С палитрой',
                ' С размерной сеткой',
                ' Стоп-бренды'
            ],
            'requestBody' => [
                "RequestField[8]" => 1,
                "RequestField[15]" => 1,
                "RequestField[19]" => 1,
                "Request[amount_to_work]" => 10,
                "Request[attachment_folder]" => '18ac118ec8919dcb3ad0d7ddd129d88a',
                "Request[addedAttachments]" => '[]',
                "Request[deletedAttachments]" => '[]',
                "Request[attachments]" => '[]',
                "Request[seller_id]" => 0,
                "Request[description]" => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО<textarea /><input></input><form action="http://live.hh.ru"><input type="submit"></form>',
                "Request[observers]" => [15, 17],
                "Request[direction]" => 2,
                "Request[parent_id]" => null,
                "Request[planned_finish_date]" => null,
                "Request[priority]" => 2,
                "Request[subject]" => "Проверка скрытых товаров (Работа с товарами Маркетплейса)",
                "Request[type_id]" => 6,
                "Request[uploadedFiles][]" => null,
                "Request[uploadedFiles][]" => null,
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => [
                        [
                            "id" => 1,
                            "author_id" => 4,
                            "type_id" => 6,
                            "supervisor_id" => 5,
                            "manager_id" => null,
                            "status" => 1,
                            "direction" => 2,
                            "priority" => 2,
                            "awaiting_correction" => 0,
                            //"created_at" => '2020-01-01 00:00:01',
                            "correction_comment" => null,
                            "amount_to_work" => 10,
                            "subject" => "Проверка скрытых товаров (Работа с товарами Маркетплейса)",
                            "description" => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|',
                            "attachments" => '[]',
                            "category_id" => null,
                            "seller_id" => '0',
                            "recommendations" => null,
                            "reason_id" => null,
                            "reason" => null,
                            "parent_id" => null,
                            "planned_start_date" => null,
                            "planned_finish_date" => null,
                            "actual_start_date" => null,
                            "actual_finish_date" => null,
                            "supervisor_process_date" => null,
                            "supervisor_check_date" => null,
                            "difficulty" => null,
                            "result_comment" => null,
                            "supervisor_comment" => null,
                            //"last_change_status_date" => "2020-01-01 00:00:01",
                            "team_direction" => 2,
                            "report_period_id" => null,
                            "sync_source_id" => null,
                            "sv_report_periods" => null,
                            "cross_check_status" => '0',
                            "cross_check_manager_id" => null,
                        ]
                    ],
                    'requests_fields' => [
                        [
                            'request_id' => 1,
                            'field_id' => 8,
                            'value' => 1,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 15,
                            'value' => 1,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 19,
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
                            'field_id' => 53,
                            'value' => 3,
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
                            'field_id' => 114,
                            'value' => 3,
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
                            "notification" => 'Создана новая заявка <b>№1 "Проверка скрытых товаров (Работа с товарами Маркетплейса)"</b>, количество в работу: <b>10</b> пользователем <b>Константин Куцан</b> с приоритетом: <b>Товар-новинка/эксклюзив (трафикообразующий)</b>',
                            "status" => 0,
                            //"created_at" => '2020-01-01 00:00:01',
                            "request_id" => 1,
                            "priority" => 2,
                            "recipients" => "Константин Куцан, Менеджер Продактович 1, Супервайзер Руководько 1, Тим Лидович 1"
                        ],
                        [
                            "id" => 2,
                            "user_id" => 5,
                            "notification" => 'Создана новая заявка <b>№1 "Проверка скрытых товаров (Работа с товарами Маркетплейса)"</b>, количество в работу: <b>10</b> пользователем <b>Константин Куцан</b> с приоритетом: <b>Товар-новинка/эксклюзив (трафикообразующий)</b>',
                            "status" => 0,
                            //"created_at" => '2020-01-01 00:00:01',
                            "request_id" => 1,
                            "priority" => 2,
                            "recipients" => "Константин Куцан, Менеджер Продактович 1, Супервайзер Руководько 1, Тим Лидович 1"
                        ],
                        [
                            "id" => 3,
                            "user_id" => 15,
                            "notification" => 'Создана новая заявка <b>№1 "Проверка скрытых товаров (Работа с товарами Маркетплейса)"</b>, количество в работу: <b>10</b> пользователем <b>Константин Куцан</b> с приоритетом: <b>Товар-новинка/эксклюзив (трафикообразующий)</b>',
                            "status" => 0,
                            //"created_at" => '2020-01-01 00:00:01',
                            "request_id" => 1,
                            "priority" => 2,
                            "recipients" => "Константин Куцан, Менеджер Продактович 1, Супервайзер Руководько 1, Тим Лидович 1"
                        ],
                        [
                            "id" => 4,
                            "user_id" => 17,
                            "notification" => 'Создана новая заявка <b>№1 "Проверка скрытых товаров (Работа с товарами Маркетплейса)"</b>, количество в работу: <b>10</b> пользователем <b>Константин Куцан</b> с приоритетом: <b>Товар-новинка/эксклюзив (трафикообразующий)</b>',
                            "status" => 0,
                            //"created_at" => '2020-01-01 00:00:01',
                            "request_id" => 1,
                            "priority" => 2,
                            "recipients" => "Константин Куцан, Менеджер Продактович 1, Супервайзер Руководько 1, Тим Лидович 1"
                        ],
                    ],
                    'observers' => [
                        [
                            "request_id" => 1,
                            "user_id" => 15
                        ],
                        [
                            "request_id" => 1,
                            "user_id" => 17
                        ],
                    ],
                ]
            ]
        ]
    ],

    'case10' => [
        'setting' => [
            'description' => 'Новая заявка на Добавление нового портала/раздела фат-меню/категории товаров (Определяется типом задачи)',
            'type' => 7,
            'direction' => 0
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'checkboxes' => [
                ' Добавление графики',
                ' Пакетная загрузка',
                ' Ручная загрузка',
                ' Точки входа'
            ],
            'requestBody' => [
                "RequestField[1]" => 1,
                "RequestField[6]" => 1,
                "RequestField[7]" => 1,
                "Request[amount_to_work]" => 10,
                "Request[attachment_folder]" => '18ac118ec8919dcb3ad0d7ddd129d88a',
                "Request[addedAttachments]" => '[]',
                "Request[deletedAttachments]" => '[]',
                "Request[attachments]" => '[]',
                "Request[category_id]" => 1,
                "Request[description]" => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО<textarea /><input></input><form action="http://live.hh.ru"><input type="submit"></form>',
                "Request[observers]" => [15, 17],
                "Request[direction]" => 0,
                "Request[parent_id]" => null,
                "Request[planned_finish_date]" => null,
                "Request[priority]" => 2,
                "Request[seller_id]" => 0,
                "Request[subject]" => "Добавление нового портала/раздела фат-меню/категории товаров (Определяется типом задачи)",
                "Request[type_id]" => 7,
                "Request[uploadedFiles][]" => null,
                "Request[uploadedFiles][]" => null,
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => [
                        [
                            "id" => 1,
                            "author_id" => 4,
                            "type_id" => 7,
                            "supervisor_id" => 35,
                            "manager_id" => null,
                            "status" => 1,
                            "direction" => 0,
                            "priority" => 2,
                            "awaiting_correction" => 0,
                            //"created_at" => '2020-01-01 00:00:01',
                            "correction_comment" => null,
                            "amount_to_work" => 10,
                            "subject" => "Добавление нового портала/раздела фат-меню/категории товаров (Определяется типом задачи)",
                            "description" => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|',
                            "attachments" => '[]',
                            "category_id" => 1,
                            "seller_id" => '0',
                            "recommendations" => null,
                            "reason_id" => null,
                            "reason" => null,
                            "parent_id" => null,
                            "planned_start_date" => null,
                            "planned_finish_date" => null,
                            "actual_start_date" => null,
                            "actual_finish_date" => null,
                            "supervisor_process_date" => null,
                            "supervisor_check_date" => null,
                            "difficulty" => null,
                            "result_comment" => null,
                            "supervisor_comment" => null,
                            //"last_change_status_date" => "2020-01-01 00:00:01",
                            "team_direction" => 6,
                            "report_period_id" => null,
                            "sync_source_id" => null,
                            "sv_report_periods" => null,
                            "cross_check_status" => '0',
                            "cross_check_manager_id" => null,
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
                            'field_id' => 6,
                            'value' => 1,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 7,
                            'value' => 1,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 53,
                            'value' => 3,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 54,
                            'value' => 1,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 55,
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
                            "notification" => 'Создана новая заявка <b>№1 "Добавление нового портала/раздела фат-меню/категории товаров (Определяется типом задачи)"</b>, количество в работу: <b>10</b> пользователем <b>Константин Куцан</b> с приоритетом: <b>Товар-новинка/эксклюзив (трафикообразующий)</b>',
                            "status" => 0,
                            //"created_at" => '2020-01-01 00:00:01',
                            "request_id" => 1,
                            "priority" => 2,
                            "recipients" => "Константин Куцан, Менеджер Продактович 1, Супервайзер Категоркин 15, Тим Лидович 1"
                        ],
                        [
                            "id" => 2,
                            "user_id" => 35,
                            "notification" => 'Создана новая заявка <b>№1 "Добавление нового портала/раздела фат-меню/категории товаров (Определяется типом задачи)"</b>, количество в работу: <b>10</b> пользователем <b>Константин Куцан</b> с приоритетом: <b>Товар-новинка/эксклюзив (трафикообразующий)</b>',
                            "status" => 0,
                            //"created_at" => '2020-01-01 00:00:01',
                            "request_id" => 1,
                            "priority" => 2,
                            "recipients" => "Константин Куцан, Менеджер Продактович 1, Супервайзер Категоркин 15, Тим Лидович 1"
                        ],
                        [
                            "id" => 3,
                            "user_id" => 15,
                            "notification" => 'Создана новая заявка <b>№1 "Добавление нового портала/раздела фат-меню/категории товаров (Определяется типом задачи)"</b>, количество в работу: <b>10</b> пользователем <b>Константин Куцан</b> с приоритетом: <b>Товар-новинка/эксклюзив (трафикообразующий)</b>',
                            "status" => 0,
                            //"created_at" => '2020-01-01 00:00:01',
                            "request_id" => 1,
                            "priority" => 2,
                            "recipients" => "Константин Куцан, Менеджер Продактович 1, Супервайзер Категоркин 15, Тим Лидович 1"
                        ],
                        [
                            "id" => 4,
                            "user_id" => 17,
                            "notification" => 'Создана новая заявка <b>№1 "Добавление нового портала/раздела фат-меню/категории товаров (Определяется типом задачи)"</b>, количество в работу: <b>10</b> пользователем <b>Константин Куцан</b> с приоритетом: <b>Товар-новинка/эксклюзив (трафикообразующий)</b>',
                            "status" => 0,
                            //"created_at" => '2020-01-01 00:00:01',
                            "request_id" => 1,
                            "priority" => 2,
                            "recipients" => "Константин Куцан, Менеджер Продактович 1, Супервайзер Категоркин 15, Тим Лидович 1"
                        ],
                    ],
                    'observers' => [
                        [
                            "request_id" => 1,
                            "user_id" => 15
                        ],
                        [
                            "request_id" => 1,
                            "user_id" => 17
                        ],
                    ],
                ]
            ]
        ]
    ],

    'case11' => [
        'setting' => [
            'description' => 'Новая заявка на Добавление/изменение информации в существующих порталах/фат-меню/категориях товаров (Определяется типом задачи)',
            'type' => 8,
            'direction' => 0
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'checkboxes' => [
                ' Добавление графики',
                ' Пакетная загрузка',
                ' Ручная загрузка',
                ' Точки входа'
            ],
            'requestBody' => [
                "RequestField[1]" => 1,
                "RequestField[6]" => 1,
                "RequestField[7]" => 1,
                "Request[amount_to_work]" => 10,
                "Request[attachment_folder]" => '18ac118ec8919dcb3ad0d7ddd129d88a',
                "Request[addedAttachments]" => '[]',
                "Request[deletedAttachments]" => '[]',
                "Request[attachments]" => '[]',
                "Request[category_id]" => 1,
                "Request[description]" => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО<textarea /><input></input><form action="http://live.hh.ru"><input type="submit"></form>',
                "Request[observers]" => [15, 17],
                "Request[direction]" => 0,
                "Request[parent_id]" => null,
                "Request[planned_finish_date]" => null,
                "Request[priority]" => 2,
                "Request[seller_id]" => 0,
                "Request[subject]" => "Добавление/изменение информации в существующих порталах/фат-меню/категориях товаров (Определяется типом задачи)",
                "Request[type_id]" => 8,
                "Request[uploadedFiles][]" => null,
                "Request[uploadedFiles][]" => null,
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => [
                        [
                            "id" => 1,
                            "author_id" => 4,
                            "type_id" => 8,
                            "supervisor_id" => 35,
                            "manager_id" => null,
                            "status" => 1,
                            "direction" => 0,
                            "priority" => 2,
                            "awaiting_correction" => 0,
                            //"created_at" => '2020-01-01 00:00:01',
                            "correction_comment" => null,
                            "amount_to_work" => 10,
                            "subject" => "Добавление/изменение информации в существующих порталах/фат-меню/категориях товаров (Определяется типом задачи)",
                            "description" => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|',
                            "attachments" => '[]',
                            "category_id" => 1,
                            "seller_id" => '0',
                            "recommendations" => null,
                            "reason_id" => null,
                            "reason" => null,
                            "parent_id" => null,
                            "planned_start_date" => null,
                            "planned_finish_date" => null,
                            "actual_start_date" => null,
                            "actual_finish_date" => null,
                            "supervisor_process_date" => null,
                            "supervisor_check_date" => null,
                            "difficulty" => null,
                            "result_comment" => null,
                            "supervisor_comment" => null,
                            //"last_change_status_date" => "2020-01-01 00:00:01",
                            "team_direction" => 6,
                            "report_period_id" => null,
                            "sync_source_id" => null,
                            "sv_report_periods" => null,
                            "cross_check_status" => '0',
                            "cross_check_manager_id" => null,
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
                            'field_id' => 6,
                            'value' => 1,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 7,
                            'value' => 1,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 53,
                            'value' => 3,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 54,
                            'value' => 1,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 55,
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
                            "notification" => 'Создана новая заявка <b>№1 "Добавление/изменение информации в существующих порталах/фат-меню/категориях товаров (Определяется типом задачи)"</b>, количество в работу: <b>10</b> пользователем <b>Константин Куцан</b> с приоритетом: <b>Товар-новинка/эксклюзив (трафикообразующий)</b>',
                            "status" => 0,
                            //"created_at" => '2020-01-01 00:00:01',
                            "request_id" => 1,
                            "priority" => 2,
                            "recipients" => "Константин Куцан, Менеджер Продактович 1, Супервайзер Категоркин 15, Тим Лидович 1"
                        ],
                        [
                            "id" => 2,
                            "user_id" => 35,
                            "notification" => 'Создана новая заявка <b>№1 "Добавление/изменение информации в существующих порталах/фат-меню/категориях товаров (Определяется типом задачи)"</b>, количество в работу: <b>10</b> пользователем <b>Константин Куцан</b> с приоритетом: <b>Товар-новинка/эксклюзив (трафикообразующий)</b>',
                            "status" => 0,
                            //"created_at" => '2020-01-01 00:00:01',
                            "request_id" => 1,
                            "priority" => 2,
                            "recipients" => "Константин Куцан, Менеджер Продактович 1, Супервайзер Категоркин 15, Тим Лидович 1"
                        ],
                        [
                            "id" => 3,
                            "user_id" => 15,
                            "notification" => 'Создана новая заявка <b>№1 "Добавление/изменение информации в существующих порталах/фат-меню/категориях товаров (Определяется типом задачи)"</b>, количество в работу: <b>10</b> пользователем <b>Константин Куцан</b> с приоритетом: <b>Товар-новинка/эксклюзив (трафикообразующий)</b>',
                            "status" => 0,
                            //"created_at" => '2020-01-01 00:00:01',
                            "request_id" => 1,
                            "priority" => 2,
                            "recipients" => "Константин Куцан, Менеджер Продактович 1, Супервайзер Категоркин 15, Тим Лидович 1"
                        ],
                        [
                            "id" => 4,
                            "user_id" => 17,
                            "notification" => 'Создана новая заявка <b>№1 "Добавление/изменение информации в существующих порталах/фат-меню/категориях товаров (Определяется типом задачи)"</b>, количество в работу: <b>10</b> пользователем <b>Константин Куцан</b> с приоритетом: <b>Товар-новинка/эксклюзив (трафикообразующий)</b>',
                            "status" => 0,
                            //"created_at" => '2020-01-01 00:00:01',
                            "request_id" => 1,
                            "priority" => 2,
                            "recipients" => "Константин Куцан, Менеджер Продактович 1, Супервайзер Категоркин 15, Тим Лидович 1"
                        ],
                    ],
                    'observers' => [
                        [
                            "request_id" => 1,
                            "user_id" => 15
                        ],
                        [
                            "request_id" => 1,
                            "user_id" => 17
                        ],
                    ],
                ]
            ]
        ]
    ],

    'case12' => [
        'setting' => [
            'description' => 'Новая заявка на Добавление параметров/значений (Определяется типом задачи)',
            'type' => 9,
            'direction' => 0
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'checkboxes' => [
                ' Пакетная загрузка',
                ' Ручная загрузка',
            ],
            'requestBody' => [
                "RequestField[1]" => 1,
                "Request[amount_to_work]" => 10,
                "Request[attachment_folder]" => '18ac118ec8919dcb3ad0d7ddd129d88a',
                "Request[addedAttachments]" => '[]',
                "Request[deletedAttachments]" => '[]',
                "Request[attachments]" => '[]',
                "Request[category_id]" => 1,
                "Request[description]" => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО<textarea /><input></input><form action="http://live.hh.ru"><input type="submit"></form>',
                "Request[observers]" => [15, 17],
                "Request[direction]" => 0,
                "Request[parent_id]" => null,
                "Request[planned_finish_date]" => null,
                "Request[priority]" => 2,
                "Request[seller_id]" => 0,
                "Request[subject]" => "Добавление параметров/значений (Определяется типом задачи)",
                "Request[type_id]" => 9,
                "Request[uploadedFiles][]" => null,
                "Request[uploadedFiles][]" => null,
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => [
                        [
                            "id" => 1,
                            "author_id" => 4,
                            "type_id" => 9,
                            "supervisor_id" => 34,
                            "manager_id" => null,
                            "status" => 1,
                            "direction" => 0,
                            "priority" => 2,
                            "awaiting_correction" => 0,
                            //"created_at" => '2020-01-01 00:00:01',
                            "correction_comment" => null,
                            "amount_to_work" => 10,
                            "subject" => "Добавление параметров/значений (Определяется типом задачи)",
                            "description" => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|',
                            "attachments" => '[]',
                            "category_id" => 1,
                            "seller_id" => '0',
                            "recommendations" => null,
                            "reason_id" => null,
                            "reason" => null,
                            "parent_id" => null,
                            "planned_start_date" => null,
                            "planned_finish_date" => null,
                            "actual_start_date" => null,
                            "actual_finish_date" => null,
                            "supervisor_process_date" => null,
                            "supervisor_check_date" => null,
                            "difficulty" => null,
                            "result_comment" => null,
                            "supervisor_comment" => null,
                            //"last_change_status_date" => "2020-01-01 00:00:01",
                            "team_direction" => 5,
                            "report_period_id" => null,
                            "sync_source_id" => null,
                            "sv_report_periods" => null,
                            "cross_check_status" => '0',
                            "cross_check_manager_id" => null,
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
                            'field_id' => 59,
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
                            "notification" => 'Создана новая заявка <b>№1 "Добавление параметров/значений (Определяется типом задачи)"</b>, количество в работу: <b>10</b> пользователем <b>Константин Куцан</b> с приоритетом: <b>Товар-новинка/эксклюзив (трафикообразующий)</b>',
                            "status" => 0,
                            //"created_at" => '2020-01-01 00:00:01',
                            "request_id" => 1,
                            "priority" => 2,
                            "recipients" => "Константин Куцан, Менеджер Продактович 1, Супервайзер Проектенко 14, Тим Лидович 1"
                        ],
                        [
                            "id" => 2,
                            "user_id" => 34,
                            "notification" => 'Создана новая заявка <b>№1 "Добавление параметров/значений (Определяется типом задачи)"</b>, количество в работу: <b>10</b> пользователем <b>Константин Куцан</b> с приоритетом: <b>Товар-новинка/эксклюзив (трафикообразующий)</b>',
                            "status" => 0,
                            //"created_at" => '2020-01-01 00:00:01',
                            "request_id" => 1,
                            "priority" => 2,
                            "recipients" => "Константин Куцан, Менеджер Продактович 1, Супервайзер Проектенко 14, Тим Лидович 1"
                        ],
                        [
                            "id" => 3,
                            "user_id" => 15,
                            "notification" => 'Создана новая заявка <b>№1 "Добавление параметров/значений (Определяется типом задачи)"</b>, количество в работу: <b>10</b> пользователем <b>Константин Куцан</b> с приоритетом: <b>Товар-новинка/эксклюзив (трафикообразующий)</b>',
                            "status" => 0,
                            //"created_at" => '2020-01-01 00:00:01',
                            "request_id" => 1,
                            "priority" => 2,
                            "recipients" => "Константин Куцан, Менеджер Продактович 1, Супервайзер Проектенко 14, Тим Лидович 1"
                        ],
                        [
                            "id" => 4,
                            "user_id" => 17,
                            "notification" => 'Создана новая заявка <b>№1 "Добавление параметров/значений (Определяется типом задачи)"</b>, количество в работу: <b>10</b> пользователем <b>Константин Куцан</b> с приоритетом: <b>Товар-новинка/эксклюзив (трафикообразующий)</b>',
                            "status" => 0,
                            //"created_at" => '2020-01-01 00:00:01',
                            "request_id" => 1,
                            "priority" => 2,
                            "recipients" => "Константин Куцан, Менеджер Продактович 1, Супервайзер Проектенко 14, Тим Лидович 1"
                        ],
                    ],
                    'observers' => [
                        [
                            "request_id" => 1,
                            "user_id" => 15
                        ],
                        [
                            "request_id" => 1,
                            "user_id" => 17
                        ],
                    ],
                ]
            ]
        ]
    ],

    'case13' => [
        'setting' => [
            'description' => 'Новая заявка на Изменение существующих параметров/значений (Определяется типом задачи)',
            'type' => 10,
            'direction' => 0
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'checkboxes' => [
                ' Пакетная загрузка',
                ' Ручная загрузка',
            ],
            'requestBody' => [
                "RequestField[1]" => 1,
                "Request[amount_to_work]" => 10,
                "Request[attachment_folder]" => '18ac118ec8919dcb3ad0d7ddd129d88a',
                "Request[addedAttachments]" => '[]',
                "Request[deletedAttachments]" => '[]',
                "Request[attachments]" => '[]',
                "Request[category_id]" => 1,
                "Request[description]" => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО<textarea /><input></input><form action="http://live.hh.ru"><input type="submit"></form>',
                "Request[observers]" => [15, 17],
                "Request[direction]" => 0,
                "Request[parent_id]" => null,
                "Request[planned_finish_date]" => null,
                "Request[priority]" => 2,
                "Request[seller_id]" => 0,
                "Request[subject]" => "Изменение существующих параметров/значений (Определяется типом задачи)",
                "Request[type_id]" => 10,
                "Request[uploadedFiles][]" => null,
                "Request[uploadedFiles][]" => null,
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => [
                        [
                            "id" => 1,
                            "author_id" => 4,
                            "type_id" => 10,
                            "supervisor_id" => 34,
                            "manager_id" => null,
                            "status" => 1,
                            "direction" => 0,
                            "priority" => 2,
                            "awaiting_correction" => 0,
                            //"created_at" => '2020-01-01 00:00:01',
                            "correction_comment" => null,
                            "amount_to_work" => 10,
                            "subject" => "Изменение существующих параметров/значений (Определяется типом задачи)",
                            "description" => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|',
                            "attachments" => '[]',
                            "category_id" => 1,
                            "seller_id" => '0',
                            "recommendations" => null,
                            "reason_id" => null,
                            "reason" => null,
                            "parent_id" => null,
                            "planned_start_date" => null,
                            "planned_finish_date" => null,
                            "actual_start_date" => null,
                            "actual_finish_date" => null,
                            "supervisor_process_date" => null,
                            "supervisor_check_date" => null,
                            "difficulty" => null,
                            "result_comment" => null,
                            "supervisor_comment" => null,
                            //"last_change_status_date" => "2020-01-01 00:00:01",
                            "team_direction" => 5,
                            "report_period_id" => null,
                            "sync_source_id" => null,
                            "sv_report_periods" => null,
                            "cross_check_status" => '0',
                            "cross_check_manager_id" => null,
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
                            'field_id' => 59,
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
                            "notification" => 'Создана новая заявка <b>№1 "Изменение существующих параметров/значений (Определяется типом задачи)"</b>, количество в работу: <b>10</b> пользователем <b>Константин Куцан</b> с приоритетом: <b>Товар-новинка/эксклюзив (трафикообразующий)</b>',
                            "status" => 0,
                            //"created_at" => '2020-01-01 00:00:01',
                            "request_id" => 1,
                            "priority" => 2,
                            "recipients" => "Константин Куцан, Менеджер Продактович 1, Супервайзер Проектенко 14, Тим Лидович 1"
                        ],
                        [
                            "id" => 2,
                            "user_id" => 34,
                            "notification" => 'Создана новая заявка <b>№1 "Изменение существующих параметров/значений (Определяется типом задачи)"</b>, количество в работу: <b>10</b> пользователем <b>Константин Куцан</b> с приоритетом: <b>Товар-новинка/эксклюзив (трафикообразующий)</b>',
                            "status" => 0,
                            //"created_at" => '2020-01-01 00:00:01',
                            "request_id" => 1,
                            "priority" => 2,
                            "recipients" => "Константин Куцан, Менеджер Продактович 1, Супервайзер Проектенко 14, Тим Лидович 1"
                        ],
                        [
                            "id" => 3,
                            "user_id" => 15,
                            "notification" => 'Создана новая заявка <b>№1 "Изменение существующих параметров/значений (Определяется типом задачи)"</b>, количество в работу: <b>10</b> пользователем <b>Константин Куцан</b> с приоритетом: <b>Товар-новинка/эксклюзив (трафикообразующий)</b>',
                            "status" => 0,
                            //"created_at" => '2020-01-01 00:00:01',
                            "request_id" => 1,
                            "priority" => 2,
                            "recipients" => "Константин Куцан, Менеджер Продактович 1, Супервайзер Проектенко 14, Тим Лидович 1"
                        ],
                        [
                            "id" => 4,
                            "user_id" => 17,
                            "notification" => 'Создана новая заявка <b>№1 "Изменение существующих параметров/значений (Определяется типом задачи)"</b>, количество в работу: <b>10</b> пользователем <b>Константин Куцан</b> с приоритетом: <b>Товар-новинка/эксклюзив (трафикообразующий)</b>',
                            "status" => 0,
                            //"created_at" => '2020-01-01 00:00:01',
                            "request_id" => 1,
                            "priority" => 2,
                            "recipients" => "Константин Куцан, Менеджер Продактович 1, Супервайзер Проектенко 14, Тим Лидович 1"
                        ],
                    ],
                    'observers' => [
                        [
                            "request_id" => 1,
                            "user_id" => 15
                        ],
                        [
                            "request_id" => 1,
                            "user_id" => 17
                        ],
                    ],
                ]
            ]
        ]
    ],

    'case14' => [
        'setting' => [
            'description' => 'Новая заявка на Проектирование структуры (Определяется типом задачи)',
            'type' => 11,
            'direction' => 0
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'checkboxes' => [
                ' Пакетная загрузка',
                ' Ручная загрузка',
            ],
            'requestBody' => [
                "RequestField[1]" => 1,
                "Request[amount_to_work]" => 10,
                "Request[attachment_folder]" => '18ac118ec8919dcb3ad0d7ddd129d88a',
                "Request[addedAttachments]" => '[]',
                "Request[deletedAttachments]" => '[]',
                "Request[attachments]" => '[]',
                "Request[category_id]" => 1,
                "Request[description]" => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО<textarea /><input></input><form action="http://live.hh.ru"><input type="submit"></form>',
                "Request[observers]" => [15, 17],
                "Request[direction]" => 0,
                "Request[parent_id]" => null,
                "Request[planned_finish_date]" => null,
                "Request[priority]" => 2,
                "Request[seller_id]" => 0,
                "Request[subject]" => "Проектирование структуры (Определяется типом задачи)",
                "Request[type_id]" => 11,
                "Request[uploadedFiles][]" => null,
                "Request[uploadedFiles][]" => null,
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => [
                        [
                            "id" => 1,
                            "author_id" => 4,
                            "type_id" => 11,
                            "supervisor_id" => 34,
                            "manager_id" => null,
                            "status" => 1,
                            "direction" => 0,
                            "priority" => 2,
                            "awaiting_correction" => 0,
                            //"created_at" => '2020-01-01 00:00:01',
                            "correction_comment" => null,
                            "amount_to_work" => 10,
                            "subject" => "Проектирование структуры (Определяется типом задачи)",
                            "description" => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|',
                            "attachments" => '[]',
                            "category_id" => 1,
                            "seller_id" => '0',
                            "recommendations" => null,
                            "reason_id" => null,
                            "reason" => null,
                            "parent_id" => null,
                            "planned_start_date" => null,
                            "planned_finish_date" => null,
                            "actual_start_date" => null,
                            "actual_finish_date" => null,
                            "supervisor_process_date" => null,
                            "supervisor_check_date" => null,
                            "difficulty" => null,
                            "result_comment" => null,
                            "supervisor_comment" => null,
                            //"last_change_status_date" => "2020-01-01 00:00:01",
                            "team_direction" => 5,
                            "report_period_id" => null,
                            "sync_source_id" => null,
                            "sv_report_periods" => null,
                            "cross_check_status" => '0',
                            "cross_check_manager_id" => null,
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
                            'field_id' => 59,
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
                            "notification" => 'Создана новая заявка <b>№1 "Проектирование структуры (Определяется типом задачи)"</b>, количество в работу: <b>10</b> пользователем <b>Константин Куцан</b> с приоритетом: <b>Товар-новинка/эксклюзив (трафикообразующий)</b>',
                            "status" => 0,
                            //"created_at" => '2020-01-01 00:00:01',
                            "request_id" => 1,
                            "priority" => 2,
                            "recipients" => "Константин Куцан, Менеджер Продактович 1, Супервайзер Проектенко 14, Тим Лидович 1"
                        ],
                        [
                            "id" => 2,
                            "user_id" => 34,
                            "notification" => 'Создана новая заявка <b>№1 "Проектирование структуры (Определяется типом задачи)"</b>, количество в работу: <b>10</b> пользователем <b>Константин Куцан</b> с приоритетом: <b>Товар-новинка/эксклюзив (трафикообразующий)</b>',
                            "status" => 0,
                            //"created_at" => '2020-01-01 00:00:01',
                            "request_id" => 1,
                            "priority" => 2,
                            "recipients" => "Константин Куцан, Менеджер Продактович 1, Супервайзер Проектенко 14, Тим Лидович 1"
                        ],
                        [
                            "id" => 3,
                            "user_id" => 15,
                            "notification" => 'Создана новая заявка <b>№1 "Проектирование структуры (Определяется типом задачи)"</b>, количество в работу: <b>10</b> пользователем <b>Константин Куцан</b> с приоритетом: <b>Товар-новинка/эксклюзив (трафикообразующий)</b>',
                            "status" => 0,
                            //"created_at" => '2020-01-01 00:00:01',
                            "request_id" => 1,
                            "priority" => 2,
                            "recipients" => "Константин Куцан, Менеджер Продактович 1, Супервайзер Проектенко 14, Тим Лидович 1"
                        ],
                        [
                            "id" => 4,
                            "user_id" => 17,
                            "notification" => 'Создана новая заявка <b>№1 "Проектирование структуры (Определяется типом задачи)"</b>, количество в работу: <b>10</b> пользователем <b>Константин Куцан</b> с приоритетом: <b>Товар-новинка/эксклюзив (трафикообразующий)</b>',
                            "status" => 0,
                            //"created_at" => '2020-01-01 00:00:01',
                            "request_id" => 1,
                            "priority" => 2,
                            "recipients" => "Константин Куцан, Менеджер Продактович 1, Супервайзер Проектенко 14, Тим Лидович 1"
                        ],
                    ]
                ]
            ]
        ]
    ],

    'case15' => [
        'setting' => [
            'description' => 'Новая заявка на Добавление новых СЦ/изменение существующих СЦ (Работа с товарами Розетки)',
            'type' => 12,
            'direction' => 1
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'checkboxes' => [
                ' Добавление товаров в новую категорию',
                ' Лоты',
                ' На основе отзыва клиента на сайте',
                ' Пакетная загрузка',
                ' Промо-описание',
                ' Ручная загрузка',
                ' С видео',
                ' С размерной сеткой',
                ' С тегами к товарам',
                ' С фотосъемкой',
                ' Уценка',
                ' Уценка 2'
            ],
            'requestBody' => [
                "RequestField[1]" => 1,
                "Request[amount_to_work]" => 10,
                "Request[attachment_folder]" => '18ac118ec8919dcb3ad0d7ddd129d88a',
                "Request[addedAttachments]" => '[]',
                "Request[deletedAttachments]" => '[]',
                "Request[attachments]" => '[]',
                "Request[category_id]" => 1,
                "Request[description]" => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО<textarea /><input></input><form action="http://live.hh.ru"><input type="submit"></form>',
                "Request[observers]" => [15, 17],
                "Request[direction]" => 1,
                "Request[parent_id]" => null,
                "Request[planned_finish_date]" => null,
                "Request[priority]" => 2,
                "Request[seller_id]" => 83,
                "Request[subject]" => "Добавление новых СЦ/изменение существующих СЦ (Работа с товарами Розетки)",
                "Request[type_id]" => 12,
                "Request[uploadedFiles][]" => null,
                "Request[uploadedFiles][]" => null,
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => [
                        [
                            "id" => 1,
                            "author_id" => 4,
                            "type_id" => 12,
                            "supervisor_id" => 6,
                            "manager_id" => null,
                            "status" => 1,
                            "direction" => 1,
                            "priority" => 2,
                            "awaiting_correction" => 0,
                            //"created_at" => '2020-01-01 00:00:01',
                            "correction_comment" => null,
                            "amount_to_work" => 10,
                            "subject" => "Добавление новых СЦ/изменение существующих СЦ (Работа с товарами Розетки)",
                            "description" => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|',
                            "attachments" => '[]',
                            "category_id" => 1,
                            "seller_id" => 83,
                            "recommendations" => null,
                            "reason_id" => null,
                            "reason" => null,
                            "parent_id" => null,
                            "planned_start_date" => null,
                            "planned_finish_date" => null,
                            "actual_start_date" => null,
                            "actual_finish_date" => null,
                            "supervisor_process_date" => null,
                            "supervisor_check_date" => null,
                            "difficulty" => null,
                            "result_comment" => null,
                            "supervisor_comment" => null,
                            //"last_change_status_date" => "2020-01-01 00:00:01",
                            "team_direction" => 3,
                            "report_period_id" => null,
                            "sync_source_id" => null,
                            "sv_report_periods" => null,
                            "cross_check_status" => '0',
                            "cross_check_manager_id" => null,
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
                            "notification" => 'Создана новая заявка <b>№1 "Добавление новых СЦ/изменение существующих СЦ (Работа с товарами Розетки)"</b>, количество в работу: <b>10</b> пользователем <b>Константин Куцан</b> с приоритетом: <b>Товар-новинка/эксклюзив (трафикообразующий)</b>',
                            "status" => 0,
                            //"created_at" => '2020-01-01 00:00:01',
                            "request_id" => 1,
                            "priority" => 2,
                            "recipients" => "Константин Куцан, Менеджер Продактович 1, Супервайзер Начальникович 1, Тим Лидович 1"
                        ],
                        [
                            "id" => 2,
                            "user_id" => 6,
                            "notification" => 'Создана новая заявка <b>№1 "Добавление новых СЦ/изменение существующих СЦ (Работа с товарами Розетки)"</b>, количество в работу: <b>10</b> пользователем <b>Константин Куцан</b> с приоритетом: <b>Товар-новинка/эксклюзив (трафикообразующий)</b>',
                            "status" => 0,
                            //"created_at" => '2020-01-01 00:00:01',
                            "request_id" => 1,
                            "priority" => 2,
                            "recipients" => "Константин Куцан, Менеджер Продактович 1, Супервайзер Начальникович 1, Тим Лидович 1"
                        ],
                        [
                            "id" => 3,
                            "user_id" => 15,
                            "notification" => 'Создана новая заявка <b>№1 "Добавление новых СЦ/изменение существующих СЦ (Работа с товарами Розетки)"</b>, количество в работу: <b>10</b> пользователем <b>Константин Куцан</b> с приоритетом: <b>Товар-новинка/эксклюзив (трафикообразующий)</b>',
                            "status" => 0,
                            //"created_at" => '2020-01-01 00:00:01',
                            "request_id" => 1,
                            "priority" => 2,
                            "recipients" => "Константин Куцан, Менеджер Продактович 1, Супервайзер Начальникович 1, Тим Лидович 1"
                        ],
                        [
                            "id" => 4,
                            "user_id" => 17,
                            "notification" => 'Создана новая заявка <b>№1 "Добавление новых СЦ/изменение существующих СЦ (Работа с товарами Розетки)"</b>, количество в работу: <b>10</b> пользователем <b>Константин Куцан</b> с приоритетом: <b>Товар-новинка/эксклюзив (трафикообразующий)</b>',
                            "status" => 0,
                            //"created_at" => '2020-01-01 00:00:01',
                            "request_id" => 1,
                            "priority" => 2,
                            "recipients" => "Константин Куцан, Менеджер Продактович 1, Супервайзер Начальникович 1, Тим Лидович 1"
                        ],
                    ],
                    'observers' => [
                        [
                            "request_id" => 1,
                            "user_id" => 15
                        ],
                        [
                            "request_id" => 1,
                            "user_id" => 17
                        ],
                    ],
                ]
            ],
            "pageObjects" => [
                "canSee" => [
                    [
                        [
                            "selector" => "//select[@name='Request[seller_id]']/option[1][@value='9423']",
                            "value" => "anytech"
                        ],
                        [
                            "selector" => "//select[@name='Request[seller_id]']/option[2][@value='67757']",
                            "value" => "iTook"
                        ],
                        [
                            "selector" => "//select[@name='Request[seller_id]']/option[3][@value='83']",
                            "value" => "Euromart"
                        ],
                        [
                            "selector" => "//select[@name='Request[seller_id]']/option[4][@value='5' and @selected]",
                            "value" => "Rozetka"
                        ],
                    ]
                ]
            ]
        ]
    ],

    'case16' => [
        'setting' => [
            'description' => 'Новая заявка на Добавление/изменение видео (Определяется типом задачи)',
            'type' => 13,
            'direction' => 0
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'checkboxes' => [
                ' Пакетная загрузка',
                ' Ручная загрузка',
            ],
            'requestBody' => [
                "RequestField[1]" => 1,
                "Request[amount_to_work]" => 10,
                "Request[attachment_folder]" => '18ac118ec8919dcb3ad0d7ddd129d88a',
                "Request[addedAttachments]" => '[]',
                "Request[deletedAttachments]" => '[]',
                "Request[attachments]" => '[]',
                "Request[category_id]" => 1,
                "Request[description]" => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО<textarea /><input></input><form action="http://live.hh.ru"><input type="submit"></form>',
                "Request[observers]" => [15, 17],
                "Request[direction]" => 0,
                "Request[parent_id]" => null,
                "Request[planned_finish_date]" => null,
                "Request[priority]" => 2,
                "Request[seller_id]" => 0,
                "Request[subject]" => "Добавление/изменение видео (Определяется типом задачи)",
                "Request[type_id]" => 13,
                "Request[uploadedFiles][]" => null,
                "Request[uploadedFiles][]" => null,
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => [
                        [
                            "id" => 1,
                            "author_id" => 4,
                            "type_id" => 13,
                            "supervisor_id" => 35,
                            "manager_id" => null,
                            "status" => 1,
                            "direction" => 0,
                            "priority" => 2,
                            "awaiting_correction" => 0,
                            //"created_at" => '2020-01-01 00:00:01',
                            "correction_comment" => null,
                            "amount_to_work" => 10,
                            "subject" => "Добавление/изменение видео (Определяется типом задачи)",
                            "description" => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|',
                            "attachments" => '[]',
                            "category_id" => 1,
                            "seller_id" => '0',
                            "recommendations" => null,
                            "reason_id" => null,
                            "reason" => null,
                            "parent_id" => null,
                            "planned_start_date" => null,
                            "planned_finish_date" => null,
                            "actual_start_date" => null,
                            "actual_finish_date" => null,
                            "supervisor_process_date" => null,
                            "supervisor_check_date" => null,
                            "difficulty" => null,
                            "result_comment" => null,
                            "supervisor_comment" => null,
                            //"last_change_status_date" => "2020-01-01 00:00:01",
                            "team_direction" => 6,
                            "report_period_id" => null,
                            "sync_source_id" => null,
                            "sv_report_periods" => null,
                            "cross_check_status" => '0',
                            "cross_check_manager_id" => null,
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
                            'field_id' => 56,
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
                            "notification" => 'Создана новая заявка <b>№1 "Добавление/изменение видео (Определяется типом задачи)"</b>, количество в работу: <b>10</b> пользователем <b>Константин Куцан</b> с приоритетом: <b>Товар-новинка/эксклюзив (трафикообразующий)</b>',
                            "status" => 0,
                            //"created_at" => '2020-01-01 00:00:01',
                            "request_id" => 1,
                            "priority" => 2,
                            "recipients" => "Константин Куцан, Менеджер Продактович 1, Супервайзер Категоркин 15, Тим Лидович 1"
                        ],
                        [
                            "id" => 2,
                            "user_id" => 35,
                            "notification" => 'Создана новая заявка <b>№1 "Добавление/изменение видео (Определяется типом задачи)"</b>, количество в работу: <b>10</b> пользователем <b>Константин Куцан</b> с приоритетом: <b>Товар-новинка/эксклюзив (трафикообразующий)</b>',
                            "status" => 0,
                            //"created_at" => '2020-01-01 00:00:01',
                            "request_id" => 1,
                            "priority" => 2,
                            "recipients" => "Константин Куцан, Менеджер Продактович 1, Супервайзер Категоркин 15, Тим Лидович 1"
                        ],
                        [
                            "id" => 3,
                            "user_id" => 15,
                            "notification" => 'Создана новая заявка <b>№1 "Добавление/изменение видео (Определяется типом задачи)"</b>, количество в работу: <b>10</b> пользователем <b>Константин Куцан</b> с приоритетом: <b>Товар-новинка/эксклюзив (трафикообразующий)</b>',
                            "status" => 0,
                            //"created_at" => '2020-01-01 00:00:01',
                            "request_id" => 1,
                            "priority" => 2,
                            "recipients" => "Константин Куцан, Менеджер Продактович 1, Супервайзер Категоркин 15, Тим Лидович 1"
                        ],
                        [
                            "id" => 4,
                            "user_id" => 17,
                            "notification" => 'Создана новая заявка <b>№1 "Добавление/изменение видео (Определяется типом задачи)"</b>, количество в работу: <b>10</b> пользователем <b>Константин Куцан</b> с приоритетом: <b>Товар-новинка/эксклюзив (трафикообразующий)</b>',
                            "status" => 0,
                            //"created_at" => '2020-01-01 00:00:01',
                            "request_id" => 1,
                            "priority" => 2,
                            "recipients" => "Константин Куцан, Менеджер Продактович 1, Супервайзер Категоркин 15, Тим Лидович 1"
                        ],
                    ],
                    'observers' => [
                        [
                            "request_id" => 1,
                            "user_id" => 15
                        ],
                        [
                            "request_id" => 1,
                            "user_id" => 17
                        ],
                    ],
                ]
            ]
        ]
    ],

    'case17' => [
        'setting' => [
            'description' => 'Новая заявка на Добавление/изменение размерной сетки (Определяется типом задачи)',
            'type' => 14,
            'direction' => 0
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'checkboxes' => [
                ' Пакетная загрузка',
                ' Ручная загрузка',
            ],
            'requestBody' => [
                "RequestField[1]" => 1,
                "Request[amount_to_work]" => 10,
                "Request[attachment_folder]" => '18ac118ec8919dcb3ad0d7ddd129d88a',
                "Request[addedAttachments]" => '[]',
                "Request[deletedAttachments]" => '[]',
                "Request[attachments]" => '[]',
                "Request[category_id]" => 1,
                "Request[description]" => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО<textarea /><input></input><form action="http://live.hh.ru"><input type="submit"></form>',
                "Request[observers]" => [15, 17],
                "Request[direction]" => 0,
                "Request[parent_id]" => null,
                "Request[planned_finish_date]" => null,
                "Request[priority]" => 2,
                "Request[seller_id]" => 0,
                "Request[subject]" => "Добавление/изменение размерной сетки (Определяется типом задачи)",
                "Request[type_id]" => 14,
                "Request[uploadedFiles][]" => null,
                "Request[uploadedFiles][]" => null,
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => [
                        [
                            "id" => 1,
                            "author_id" => 4,
                            "type_id" => 14,
                            "supervisor_id" => 35,
                            "manager_id" => null,
                            "status" => 1,
                            "direction" => 0,
                            "priority" => 2,
                            "awaiting_correction" => 0,
                            //"created_at" => '2020-01-01 00:00:01',
                            "correction_comment" => null,
                            "amount_to_work" => 10,
                            "subject" => "Добавление/изменение размерной сетки (Определяется типом задачи)",
                            "description" => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|',
                            "attachments" => '[]',
                            "category_id" => 1,
                            "seller_id" => '0',
                            "recommendations" => null,
                            "reason_id" => null,
                            "reason" => null,
                            "parent_id" => null,
                            "planned_start_date" => null,
                            "planned_finish_date" => null,
                            "actual_start_date" => null,
                            "actual_finish_date" => null,
                            "supervisor_process_date" => null,
                            "supervisor_check_date" => null,
                            "difficulty" => null,
                            "result_comment" => null,
                            "supervisor_comment" => null,
                            //"last_change_status_date" => "2020-01-01 00:00:01",
                            "team_direction" => 6,
                            "report_period_id" => null,
                            "sync_source_id" => null,
                            "sv_report_periods" => null,
                            "cross_check_status" => '0',
                            "cross_check_manager_id" => null,
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
                            'field_id' => 57,
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
                            "notification" => 'Создана новая заявка <b>№1 "Добавление/изменение размерной сетки (Определяется типом задачи)"</b>, количество в работу: <b>10</b> пользователем <b>Константин Куцан</b> с приоритетом: <b>Товар-новинка/эксклюзив (трафикообразующий)</b>',
                            "status" => 0,
                            //"created_at" => '2020-01-01 00:00:01',
                            "request_id" => 1,
                            "priority" => 2,
                            "recipients" => "Константин Куцан, Менеджер Продактович 1, Супервайзер Категоркин 15, Тим Лидович 1"
                        ],
                        [
                            "id" => 2,
                            "user_id" => 35,
                            "notification" => 'Создана новая заявка <b>№1 "Добавление/изменение размерной сетки (Определяется типом задачи)"</b>, количество в работу: <b>10</b> пользователем <b>Константин Куцан</b> с приоритетом: <b>Товар-новинка/эксклюзив (трафикообразующий)</b>',
                            "status" => 0,
                            //"created_at" => '2020-01-01 00:00:01',
                            "request_id" => 1,
                            "priority" => 2,
                            "recipients" => "Константин Куцан, Менеджер Продактович 1, Супервайзер Категоркин 15, Тим Лидович 1"
                        ],
                        [
                            "id" => 3,
                            "user_id" => 15,
                            "notification" => 'Создана новая заявка <b>№1 "Добавление/изменение размерной сетки (Определяется типом задачи)"</b>, количество в работу: <b>10</b> пользователем <b>Константин Куцан</b> с приоритетом: <b>Товар-новинка/эксклюзив (трафикообразующий)</b>',
                            "status" => 0,
                            //"created_at" => '2020-01-01 00:00:01',
                            "request_id" => 1,
                            "priority" => 2,
                            "recipients" => "Константин Куцан, Менеджер Продактович 1, Супервайзер Категоркин 15, Тим Лидович 1"
                        ],
                        [
                            "id" => 4,
                            "user_id" => 17,
                            "notification" => 'Создана новая заявка <b>№1 "Добавление/изменение размерной сетки (Определяется типом задачи)"</b>, количество в работу: <b>10</b> пользователем <b>Константин Куцан</b> с приоритетом: <b>Товар-новинка/эксклюзив (трафикообразующий)</b>',
                            "status" => 0,
                            //"created_at" => '2020-01-01 00:00:01',
                            "request_id" => 1,
                            "priority" => 2,
                            "recipients" => "Константин Куцан, Менеджер Продактович 1, Супервайзер Категоркин 15, Тим Лидович 1"
                        ],
                    ],
                    'observers' => [
                        [
                            "request_id" => 1,
                            "user_id" => 15
                        ],
                        [
                            "request_id" => 1,
                            "user_id" => 17
                        ],
                    ],
                ]
            ]
        ]
    ],

    'case18' => [
        'setting' => [
            'description' => 'Новая заявка на Добавление/изменение тегов (Определяется типом задачи)',
            'type' => 15,
            'direction' => 0
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'checkboxes' => [
                ' Пакетная загрузка',
                ' Ручная загрузка',
            ],
            'requestBody' => [
                "RequestField[1]" => 1,
                "Request[amount_to_work]" => 10,
                "Request[attachment_folder]" => '18ac118ec8919dcb3ad0d7ddd129d88a',
                "Request[addedAttachments]" => '[]',
                "Request[deletedAttachments]" => '[]',
                "Request[attachments]" => '[]',
                "Request[category_id]" => 1,
                "Request[description]" => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО<textarea /><input></input><form action="http://live.hh.ru"><input type="submit"></form>',
                "Request[observers]" => [15, 17],
                "Request[direction]" => 0,
                "Request[parent_id]" => null,
                "Request[planned_finish_date]" => null,
                "Request[priority]" => 2,
                "Request[seller_id]" => 0,
                "Request[subject]" => "Добавление/изменение тегов (Определяется типом задачи)",
                "Request[type_id]" => 15,
                "Request[uploadedFiles][]" => null,
                "Request[uploadedFiles][]" => null,
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => [
                        [
                            "id" => 1,
                            "author_id" => 4,
                            "type_id" => 15,
                            "supervisor_id" => 35,
                            "manager_id" => null,
                            "status" => 1,
                            "direction" => 0,
                            "priority" => 2,
                            "awaiting_correction" => 0,
                            //"created_at" => '2020-01-01 00:00:01',
                            "correction_comment" => null,
                            "amount_to_work" => 10,
                            "subject" => "Добавление/изменение тегов (Определяется типом задачи)",
                            "description" => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|',
                            "attachments" => '[]',
                            "category_id" => 1,
                            "seller_id" => '0',
                            "recommendations" => null,
                            "reason_id" => null,
                            "reason" => null,
                            "parent_id" => null,
                            "planned_start_date" => null,
                            "planned_finish_date" => null,
                            "actual_start_date" => null,
                            "actual_finish_date" => null,
                            "supervisor_process_date" => null,
                            "supervisor_check_date" => null,
                            "difficulty" => null,
                            "result_comment" => null,
                            "supervisor_comment" => null,
                            //"last_change_status_date" => "2020-01-01 00:00:01",
                            "team_direction" => 6,
                            "report_period_id" => null,
                            "sync_source_id" => null,
                            "sv_report_periods" => null,
                            "cross_check_status" => '0',
                            "cross_check_manager_id" => null,
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
                            'field_id' => 58,
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
                            "notification" => 'Создана новая заявка <b>№1 "Добавление/изменение тегов (Определяется типом задачи)"</b>, количество в работу: <b>10</b> пользователем <b>Константин Куцан</b> с приоритетом: <b>Товар-новинка/эксклюзив (трафикообразующий)</b>',
                            "status" => 0,
                            //"created_at" => '2020-01-01 00:00:01',
                            "request_id" => 1,
                            "priority" => 2,
                            "recipients" => "Константин Куцан, Менеджер Продактович 1, Супервайзер Категоркин 15, Тим Лидович 1"
                        ],
                        [
                            "id" => 2,
                            "user_id" => 35,
                            "notification" => 'Создана новая заявка <b>№1 "Добавление/изменение тегов (Определяется типом задачи)"</b>, количество в работу: <b>10</b> пользователем <b>Константин Куцан</b> с приоритетом: <b>Товар-новинка/эксклюзив (трафикообразующий)</b>',
                            "status" => 0,
                            //"created_at" => '2020-01-01 00:00:01',
                            "request_id" => 1,
                            "priority" => 2,
                            "recipients" => "Константин Куцан, Менеджер Продактович 1, Супервайзер Категоркин 15, Тим Лидович 1"
                        ],
                        [
                            "id" => 3,
                            "user_id" => 15,
                            "notification" => 'Создана новая заявка <b>№1 "Добавление/изменение тегов (Определяется типом задачи)"</b>, количество в работу: <b>10</b> пользователем <b>Константин Куцан</b> с приоритетом: <b>Товар-новинка/эксклюзив (трафикообразующий)</b>',
                            "status" => 0,
                            //"created_at" => '2020-01-01 00:00:01',
                            "request_id" => 1,
                            "priority" => 2,
                            "recipients" => "Константин Куцан, Менеджер Продактович 1, Супервайзер Категоркин 15, Тим Лидович 1"
                        ],
                        [
                            "id" => 4,
                            "user_id" => 17,
                            "notification" => 'Создана новая заявка <b>№1 "Добавление/изменение тегов (Определяется типом задачи)"</b>, количество в работу: <b>10</b> пользователем <b>Константин Куцан</b> с приоритетом: <b>Товар-новинка/эксклюзив (трафикообразующий)</b>',
                            "status" => 0,
                            //"created_at" => '2020-01-01 00:00:01',
                            "request_id" => 1,
                            "priority" => 2,
                            "recipients" => "Константин Куцан, Менеджер Продактович 1, Супервайзер Категоркин 15, Тим Лидович 1"
                        ],
                    ],
                    'observers' => [
                        [
                            "request_id" => 1,
                            "user_id" => 15
                        ],
                        [
                            "request_id" => 1,
                            "user_id" => 17
                        ],
                    ],
                ]
            ]
        ]
    ]
];
