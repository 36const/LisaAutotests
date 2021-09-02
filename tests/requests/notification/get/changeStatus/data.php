<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Пометить сообщение прочитанным',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestParameters' => [
                'id' => 11,
                'status' => 1
            ],
            'db' => [
                'lisa_fixtures' => [
                    'notification_settings' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['notification_settings'],
                    'user_notifications' => [
                        [
                            'id' => 1,
                            'user_id' => 4,
                            'notification' => '',
                            'status' => 1,
                            'created_at' => '2020-06-03 14:07:22',
                            'request_id' => 1,
                            'priority' => 2,
                            'amount_to_work' => 10,
                            'request_subject' => "!@#$%^&*()_+`-]'/[;.,}\"?{:>\\№абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО",
                            'fields_for_complete' => '[]',
                            'triggered_by' => 'Менеджер Продактович 1',
                            'event' => 'create',
                            'changed_fields' => '{"newValue": 1, "oldValue": null}',
                            'notify_service_id' => '5fe1a264253dc6.52838091',
                        ],
                        [
                            'id' => 2,
                            'user_id' => 6,
                            'notification' => '',
                            'status' => 0,
                            'created_at' => '2020-06-03 14:07:22',
                            'request_id' => 1,
                            'priority' => 2,
                            'amount_to_work' => 10,
                            'request_subject' => "!@#$%^&*()_+`-]'/[;.,}\"?{:>\\№абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО",
                            'fields_for_complete' => '[]',
                            'triggered_by' => 'Менеджер Продактович 1',
                            'event' => 'create',
                            'changed_fields' => '{"newValue": 1, "oldValue": null}',
                            'notify_service_id' => null,
                        ],
                        [
                            'id' => 3,
                            'user_id' => 15,
                            'notification' => '',
                            'status' => 0,
                            'created_at' => '2020-06-03 14:07:22',
                            'request_id' => 1,
                            'priority' => 2,
                            'amount_to_work' => 10,
                            'request_subject' => "!@#$%^&*()_+`-]'/[;.,}\"?{:>\\№абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО",
                            'fields_for_complete' => '[]',
                            'triggered_by' => 'Менеджер Продактович 1',
                            'event' => 'create',
                            'changed_fields' => '{"newValue": 1, "oldValue": null}',
                            'notify_service_id' => '5fe1a264253dc6.52838091',
                        ],
                        [
                            'id' => 4,
                            'user_id' => 17,
                            'notification' => '',
                            'status' => 0,
                            'created_at' => '2020-06-03 14:07:22',
                            'request_id' => 1,
                            'priority' => 2,
                            'amount_to_work' => 10,
                            'request_subject' => "!@#$%^&*()_+`-]'/[;.,}\"?{:>\\№абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО",
                            'fields_for_complete' => '[]',
                            'triggered_by' => 'Менеджер Продактович 1',
                            'event' => 'create',
                            'changed_fields' => '{"newValue": 1, "oldValue": null}',
                            'notify_service_id' => null,
                        ],
                        [
                            'id' => 5,
                            'user_id' => 4,
                            'notification' => '',
                            'status' => 0,
                            'created_at' => '2020-06-03 14:09:53',
                            'request_id' => 1,
                            'priority' => 2,
                            'amount_to_work' => 10,
                            'request_subject' => "!@#$%^&*()_+`-]'/[;.,}\"?{:>\\№абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО",
                            'fields_for_complete' => '[]',
                            'triggered_by' => 'Менеджер Продактович 1',
                            'event' => 'status',
                            'changed_fields' => '{"newValue": 2, "oldValue": 1}',
                            'notify_service_id' => null,
                        ],
                        [
                            'id' => 6,
                            'user_id' => 6,
                            'notification' => '',
                            'status' => 0,
                            'created_at' => '2020-06-03 14:09:53',
                            'request_id' => 1,
                            'priority' => 2,
                            'amount_to_work' => 10,
                            'request_subject' => "!@#$%^&*()_+`-]'/[;.,}\"?{:>\\№абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО",
                            'fields_for_complete' => '[]',
                            'triggered_by' => 'Менеджер Продактович 1',
                            'event' => 'status',
                            'changed_fields' => '{"newValue": 2, "oldValue": 1}',
                            'notify_service_id' => null,
                        ],
                        [
                            'id' => 7,
                            'user_id' => 15,
                            'notification' => '',
                            'status' => 0,
                            'created_at' => '2020-06-03 14:09:53',
                            'request_id' => 1,
                            'priority' => 2,
                            'amount_to_work' => 10,
                            'request_subject' => "!@#$%^&*()_+`-]'/[;.,}\"?{:>\\№абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО",
                            'fields_for_complete' => '[]',
                            'triggered_by' => 'Менеджер Продактович 1',
                            'event' => 'status',
                            'changed_fields' => '{"newValue": 2, "oldValue": 1}',
                            'notify_service_id' => null,
                        ],
                        [
                            'id' => 8,
                            'user_id' => 17,
                            'notification' => '',
                            'status' => 0,
                            'created_at' => '2020-06-03 14:09:53',
                            'request_id' => 1,
                            'priority' => 2,
                            'amount_to_work' => 10,
                            'request_subject' => "!@#$%^&*()_+`-]'/[;.,}\"?{:>\\№абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО",
                            'fields_for_complete' => '[]',
                            'triggered_by' => 'Менеджер Продактович 1',
                            'event' => 'status',
                            'changed_fields' => '{"newValue": 2, "oldValue": 1}',
                            'notify_service_id' => null,
                        ],
                        [
                            'id' => 9,
                            'user_id' => 4,
                            'notification' => '',
                            'status' => 0,
                            'created_at' => '2020-06-03 14:11:08',
                            'request_id' => 2,
                            'priority' => null,
                            'amount_to_work' => 10,
                            'request_subject' => "!@#$%^&*()_+`-]'/[;.,}\"?{:>\\№абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО",
                            'fields_for_complete' => '{"Описание": "Описание", "Приоритет": "Товар-новинка/эксклюзив (трафикообразующий)", "Супервайзер": "Супервайзер Категоркин 15", "Ручная загрузка": "(не указан)", "Пакетная загрузка": "Да", "Сложность структуры": "(не указан)", "Коэффициент типа задачи": "2", "Уровень сложности задачи": "6", "Количество изменённых товаров": "(не указан)", "Коэффициент уровня сложности задачи": "2"}',
                            'triggered_by' => 'Менеджер Продактович 1',
                            'event' => 'status',
                            'changed_fields' => '{"newValue": 8, "oldValue": 6}',
                            'notify_service_id' => null,
                        ],
                        [
                            'id' => 10,
                            'user_id' => 34,
                            'notification' => '',
                            'status' => 0,
                            'created_at' => '2020-06-03 14:11:08',
                            'request_id' => 2,
                            'priority' => 3,
                            'amount_to_work' => 10,
                            'request_subject' => "!@#$%^&*()_+`-]'/[;.,}\"?{:>\\№абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО",
                            'fields_for_complete' => '[]',
                            'triggered_by' => 'Менеджер Продактович 1',
                            'event' => 'mention',
                            'changed_fields' => '[]',
                            'notify_service_id' => '5fe1a264253dc6.52838091',
                        ],
                        [
                            'id' => 11,
                            'user_id' => 4,
                            'notification' => '',
                            'status' => 1,
                            'created_at' => '2020-06-03 14:14:37',
                            'request_id' => 2,
                            'priority' => 3,
                            'amount_to_work' => 10,
                            'request_subject' => "!@#$%^&*()_+`-]'/[;.,}\"?{:>\\№абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО",
                            'fields_for_complete' => '[]',
                            'triggered_by' => 'Менеджер Продактович 1',
                            'event' => 'comment',
                            'changed_fields' => '{"newValue": "@bpm_teamLead_2  ~!@#$%^&amp;*()_+`]&#039;/[;.,|}}&quot;?{:&gt;&lt;\n@bpm_teamLead_1  ", "oldValue": ""}',
                            'notify_service_id' => null,
                        ],
                        [
                            'id' => 12,
                            'user_id' => 34,
                            'notification' => '',
                            'status' => 0,
                            'created_at' => '2020-06-03 14:14:37',
                            'request_id' => 2,
                            'priority' => 3,
                            'amount_to_work' => 10,
                            'request_subject' => "!@#$%^&*()_+`-]'/[;.,}\"?{:>\\№абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО",
                            'fields_for_complete' => '[]',
                            'triggered_by' => 'Менеджер Продактович 1',
                            'event' => 'comment',
                            'changed_fields' => '{"newValue": "@bpm_teamLead_2  ~!@#$%^&amp;*()_+`]&#039;/[;.,|}}&quot;?{:&gt;&lt;\n@bpm_teamLead_1  ", "oldValue": ""}',
                            'notify_service_id' => '5fe1a264253dc6.52838091',
                        ]
                    ]
                ]
            ]
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Пометить сообщение непрочитанным',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestParameters' => [
                'id' => 1,
                'status' => 0
            ],
            'db' => [
                'lisa_fixtures' => [
                    'notification_settings' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['notification_settings'],
                    'user_notifications' => [
                        [
                            'id' => 1,
                            'user_id' => 4,
                            'notification' => '',
                            'status' => 0,
                            'created_at' => '2020-06-03 14:07:22',
                            'request_id' => 1,
                            'priority' => 2,
                            'amount_to_work' => 10,
                            'request_subject' => "!@#$%^&*()_+`-]'/[;.,}\"?{:>\\№абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО",
                            'fields_for_complete' => '[]',
                            'triggered_by' => 'Менеджер Продактович 1',
                            'event' => 'create',
                            'changed_fields' => '{"newValue": 1, "oldValue": null}',
                            'notify_service_id' => '5fe1a264253dc6.52838091',
                        ],
                        [
                            'id' => 2,
                            'user_id' => 6,
                            'notification' => '',
                            'status' => 0,
                            'created_at' => '2020-06-03 14:07:22',
                            'request_id' => 1,
                            'priority' => 2,
                            'amount_to_work' => 10,
                            'request_subject' => "!@#$%^&*()_+`-]'/[;.,}\"?{:>\\№абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО",
                            'fields_for_complete' => '[]',
                            'triggered_by' => 'Менеджер Продактович 1',
                            'event' => 'create',
                            'changed_fields' => '{"newValue": 1, "oldValue": null}',
                            'notify_service_id' => null,
                        ],
                        [
                            'id' => 3,
                            'user_id' => 15,
                            'notification' => '',
                            'status' => 0,
                            'created_at' => '2020-06-03 14:07:22',
                            'request_id' => 1,
                            'priority' => 2,
                            'amount_to_work' => 10,
                            'request_subject' => "!@#$%^&*()_+`-]'/[;.,}\"?{:>\\№абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО",
                            'fields_for_complete' => '[]',
                            'triggered_by' => 'Менеджер Продактович 1',
                            'event' => 'create',
                            'changed_fields' => '{"newValue": 1, "oldValue": null}',
                            'notify_service_id' => '5fe1a264253dc6.52838091',
                        ],
                        [
                            'id' => 4,
                            'user_id' => 17,
                            'notification' => '',
                            'status' => 0,
                            'created_at' => '2020-06-03 14:07:22',
                            'request_id' => 1,
                            'priority' => 2,
                            'amount_to_work' => 10,
                            'request_subject' => "!@#$%^&*()_+`-]'/[;.,}\"?{:>\\№абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО",
                            'fields_for_complete' => '[]',
                            'triggered_by' => 'Менеджер Продактович 1',
                            'event' => 'create',
                            'changed_fields' => '{"newValue": 1, "oldValue": null}',
                            'notify_service_id' => null,
                        ],
                        [
                            'id' => 5,
                            'user_id' => 4,
                            'notification' => '',
                            'status' => 0,
                            'created_at' => '2020-06-03 14:09:53',
                            'request_id' => 1,
                            'priority' => 2,
                            'amount_to_work' => 10,
                            'request_subject' => "!@#$%^&*()_+`-]'/[;.,}\"?{:>\\№абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО",
                            'fields_for_complete' => '[]',
                            'triggered_by' => 'Менеджер Продактович 1',
                            'event' => 'status',
                            'changed_fields' => '{"newValue": 2, "oldValue": 1}',
                            'notify_service_id' => null,
                        ],
                        [
                            'id' => 6,
                            'user_id' => 6,
                            'notification' => '',
                            'status' => 0,
                            'created_at' => '2020-06-03 14:09:53',
                            'request_id' => 1,
                            'priority' => 2,
                            'amount_to_work' => 10,
                            'request_subject' => "!@#$%^&*()_+`-]'/[;.,}\"?{:>\\№абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО",
                            'fields_for_complete' => '[]',
                            'triggered_by' => 'Менеджер Продактович 1',
                            'event' => 'status',
                            'changed_fields' => '{"newValue": 2, "oldValue": 1}',
                            'notify_service_id' => null,
                        ],
                        [
                            'id' => 7,
                            'user_id' => 15,
                            'notification' => '',
                            'status' => 0,
                            'created_at' => '2020-06-03 14:09:53',
                            'request_id' => 1,
                            'priority' => 2,
                            'amount_to_work' => 10,
                            'request_subject' => "!@#$%^&*()_+`-]'/[;.,}\"?{:>\\№абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО",
                            'fields_for_complete' => '[]',
                            'triggered_by' => 'Менеджер Продактович 1',
                            'event' => 'status',
                            'changed_fields' => '{"newValue": 2, "oldValue": 1}',
                            'notify_service_id' => null,
                        ],
                        [
                            'id' => 8,
                            'user_id' => 17,
                            'notification' => '',
                            'status' => 0,
                            'created_at' => '2020-06-03 14:09:53',
                            'request_id' => 1,
                            'priority' => 2,
                            'amount_to_work' => 10,
                            'request_subject' => "!@#$%^&*()_+`-]'/[;.,}\"?{:>\\№абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО",
                            'fields_for_complete' => '[]',
                            'triggered_by' => 'Менеджер Продактович 1',
                            'event' => 'status',
                            'changed_fields' => '{"newValue": 2, "oldValue": 1}',
                            'notify_service_id' => null,
                        ],
                        [
                            'id' => 9,
                            'user_id' => 4,
                            'notification' => '',
                            'status' => 0,
                            'created_at' => '2020-06-03 14:11:08',
                            'request_id' => 2,
                            'priority' => null,
                            'amount_to_work' => 10,
                            'request_subject' => "!@#$%^&*()_+`-]'/[;.,}\"?{:>\\№абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО",
                            'fields_for_complete' => '{"Описание": "Описание", "Приоритет": "Товар-новинка/эксклюзив (трафикообразующий)", "Супервайзер": "Супервайзер Категоркин 15", "Ручная загрузка": "(не указан)", "Пакетная загрузка": "Да", "Сложность структуры": "(не указан)", "Коэффициент типа задачи": "2", "Уровень сложности задачи": "6", "Количество изменённых товаров": "(не указан)", "Коэффициент уровня сложности задачи": "2"}',
                            'triggered_by' => 'Менеджер Продактович 1',
                            'event' => 'status',
                            'changed_fields' => '{"newValue": 8, "oldValue": 6}',
                            'notify_service_id' => null,
                        ],
                        [
                            'id' => 10,
                            'user_id' => 34,
                            'notification' => '',
                            'status' => 0,
                            'created_at' => '2020-06-03 14:11:08',
                            'request_id' => 2,
                            'priority' => 3,
                            'amount_to_work' => 10,
                            'request_subject' => "!@#$%^&*()_+`-]'/[;.,}\"?{:>\\№абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО",
                            'fields_for_complete' => '[]',
                            'triggered_by' => 'Менеджер Продактович 1',
                            'event' => 'mention',
                            'changed_fields' => '[]',
                            'notify_service_id' => '5fe1a264253dc6.52838091',
                        ],
                        [
                            'id' => 11,
                            'user_id' => 4,
                            'notification' => '',
                            'status' => 0,
                            'created_at' => '2020-06-03 14:14:37',
                            'request_id' => 2,
                            'priority' => 3,
                            'amount_to_work' => 10,
                            'request_subject' => "!@#$%^&*()_+`-]'/[;.,}\"?{:>\\№абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО",
                            'fields_for_complete' => '[]',
                            'triggered_by' => 'Менеджер Продактович 1',
                            'event' => 'comment',
                            'changed_fields' => '{"newValue": "@bpm_teamLead_2  ~!@#$%^&amp;*()_+`]&#039;/[;.,|}}&quot;?{:&gt;&lt;\n@bpm_teamLead_1  ", "oldValue": ""}',
                            'notify_service_id' => null,
                        ],
                        [
                            'id' => 12,
                            'user_id' => 34,
                            'notification' => '',
                            'status' => 0,
                            'created_at' => '2020-06-03 14:14:37',
                            'request_id' => 2,
                            'priority' => 3,
                            'amount_to_work' => 10,
                            'request_subject' => "!@#$%^&*()_+`-]'/[;.,}\"?{:>\\№абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО",
                            'fields_for_complete' => '[]',
                            'triggered_by' => 'Менеджер Продактович 1',
                            'event' => 'comment',
                            'changed_fields' => '{"newValue": "@bpm_teamLead_2  ~!@#$%^&amp;*()_+`]&#039;/[;.,|}}&quot;?{:&gt;&lt;\n@bpm_teamLead_1  ", "oldValue": ""}',
                            'notify_service_id' => '5fe1a264253dc6.52838091',
                        ]
                    ]
                ]
            ]
        ]
    ],

];