<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Получить список нотификаций',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestParameters' => [],
            'responseBody' => [
                'data' => [
                    'models' => [
                        0 => [
                            'id' => 11,
                            'user_id' => 4,
                            'notification' => 'Менеджер Продактович 1 <b>оставил(а) комментарий к заявке</b> <a href="http://admin.gomer.local/lisa/#/request/view/2?notifyId=11">№2 !@#$%^&*()_+`-]\'/[;.,}"?{:>\\№абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО</a>',
                            'status' => 0,
                            'created_at' => '2020-07-03 14:14:37',
                            'request_id' => 2,
                            'priority' => 'Исправление критичной ошибки',
                            'amount_to_work' => 10,
                            'request_subject' => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\\№абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            'fields_for_complete' => '[]',
                            'triggered_by' => 'Менеджер Продактович 1',
                            'event' => 'comment',
                            'changed_fields' => '{"newValue": "@bpm_teamLead_2  ~!@#$%^&amp;*()_+`]&#039;/[;.,|}}&quot;?{:&gt;&lt;\\n@bpm_teamLead_1  ", "oldValue": ""}',
                            'notify_service_id' => NULL,
                            'status_text' => 'Не прочитано',
                            'loading' => false,
                        ],
                        1 => [
                            'id' => 9,
                            'user_id' => 4,
                            'notification' => 'Менеджер Продактович 1 <b>перевел(а) заявку</b> <a href="http://admin.gomer.local/lisa/#/request/view/2?notifyId=9">№2 !@#$%^&*()_+`-]\'/[;.,}"?{:>\\№абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО</a> в статус "<b>Частично выполнена</b>"',
                            'status' => 0,
                            'created_at' => '2020-07-03 14:11:08',
                            'request_id' => 2,
                            'priority' => NULL,
                            'amount_to_work' => 10,
                            'request_subject' => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\\№абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            'fields_for_complete' => '{"Описание": "Описание", "Приоритет": "Товар-новинка/эксклюзив (трафикообразующий)", "Супервайзер": "Супервайзер Категоркин 15", "Ручная загрузка": "(не указан)", "Пакетная загрузка": "Да", "Сложность структуры": "(не указан)", "Коэффициент типа задачи": "2", "Уровень сложности задачи": "6", "Количество изменённых товаров": "(не указан)", "Коэффициент уровня сложности задачи": "2"}',
                            'triggered_by' => 'Менеджер Продактович 1',
                            'event' => 'status',
                            'changed_fields' => '{"newValue": 8, "oldValue": 6}',
                            'notify_service_id' => NULL,
                            'status_text' => 'Не прочитано',
                            'loading' => false,
                        ],
                        2 => [
                            'id' => 5,
                            'user_id' => 4,
                            'notification' => 'Менеджер Продактович 1 <b>перевел(а) заявку</b> <a href="http://admin.gomer.local/lisa/#/request/view/1?notifyId=5">№1 !@#$%^&*()_+`-]\'/[;.,}"?{:>\\№абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО</a> в статус "<b>Готова для распределения</b>"',
                            'status' => 0,
                            'created_at' => '2020-06-03 14:09:53',
                            'request_id' => 1,
                            'priority' => 'Товар-новинка/эксклюзив (трафикообразующий)',
                            'amount_to_work' => 10,
                            'request_subject' => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\\№абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            'fields_for_complete' => '[]',
                            'triggered_by' => 'Менеджер Продактович 1',
                            'event' => 'status',
                            'changed_fields' => '{"newValue": 2, "oldValue": 1}',
                            'notify_service_id' => NULL,
                            'status_text' => 'Не прочитано',
                            'loading' => false,
                        ],
                        3 => [
                            'id' => 1,
                            'user_id' => 4,
                            'notification' => 'Менеджер Продактович 1 <b>создал(а) заявку</b> <a href="http://admin.gomer.local/lisa/#/request/view/1?notifyId=1">№1 !@#$%^&*()_+`-]\'/[;.,}"?{:>\\№абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО</a>',
                            'status' => 1,
                            'created_at' => '2020-06-03 14:07:22',
                            'request_id' => 1,
                            'priority' => 'Товар-новинка/эксклюзив (трафикообразующий)',
                            'amount_to_work' => 10,
                            'request_subject' => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\\№абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            'fields_for_complete' => '[]',
                            'triggered_by' => 'Менеджер Продактович 1',
                            'event' => 'create',
                            'changed_fields' => '{"newValue": 1, "oldValue": null}',
                            'notify_service_id' => '5fe1a264253dc6.52838091',
                            'status_text' => 'Прочитано',
                            'loading' => false,
                        ],
                    ],
                    '_links' => [
                        'self' => [
                            'href' => 'http://lisa.api/notification/list?page=1',
                        ],
                        'first' => [
                            'href' => 'http://lisa.api/notification/list?page=1',
                        ],
                        'last' => [
                            'href' => 'http://lisa.api/notification/list?page=1',
                        ],
                    ],
                    '_meta' => [
                        'totalCount' => 4,
                        'pageCount' => 1,
                        'currentPage' => 1,
                        'perPage' => 20,
                    ],
                ],
                'filters' => [
                ],
                'initialValues' => [
                    'priorities' => [
                        1 => 'Информация необходима для склада',
                        3 => 'Исправление критичной ошибки',
                        2 => 'Товар-новинка/эксклюзив (трафикообразующий)',
                    ],
                ],
            ]
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Получить список нотификаций с сортировкой по id заявки и фильтром по приоритету',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestParameters' => [
                'sort' => 'request_id',
                'filter[priority]' => 2,
            ],
            'responseBody' => [
                'data' => [
                    'models' => [
                        0 => [
                            'id' => 1,
                            'user_id' => 4,
                            'notification' => 'Менеджер Продактович 1 <b>создал(а) заявку</b> <a href="http://admin.gomer.local/lisa/#/request/view/1?notifyId=1">№1 !@#$%^&*()_+`-]\'/[;.,}"?{:>\\№абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО</a>',
                            'status' => 1,
                            'created_at' => '2020-06-03 14:07:22',
                            'request_id' => 1,
                            'priority' => 'Товар-новинка/эксклюзив (трафикообразующий)',
                            'amount_to_work' => 10,
                            'request_subject' => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\\№абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            'fields_for_complete' => '[]',
                            'triggered_by' => 'Менеджер Продактович 1',
                            'event' => 'create',
                            'changed_fields' => '{"newValue": 1, "oldValue": null}',
                            'notify_service_id' => '5fe1a264253dc6.52838091',
                            'status_text' => 'Прочитано',
                            'loading' => false,
                        ],
                        1 => [
                            'id' => 5,
                            'user_id' => 4,
                            'notification' => 'Менеджер Продактович 1 <b>перевел(а) заявку</b> <a href="http://admin.gomer.local/lisa/#/request/view/1?notifyId=5">№1 !@#$%^&*()_+`-]\'/[;.,}"?{:>\\№абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО</a> в статус "<b>Готова для распределения</b>"',
                            'status' => 0,
                            'created_at' => '2020-06-03 14:09:53',
                            'request_id' => 1,
                            'priority' => 'Товар-новинка/эксклюзив (трафикообразующий)',
                            'amount_to_work' => 10,
                            'request_subject' => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\\№абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            'fields_for_complete' => '[]',
                            'triggered_by' => 'Менеджер Продактович 1',
                            'event' => 'status',
                            'changed_fields' => '{"newValue": 2, "oldValue": 1}',
                            'notify_service_id' => NULL,
                            'status_text' => 'Не прочитано',
                            'loading' => false,
                        ],
                    ],
                    '_links' => [
                        'self' => [
                            'href' => 'http://lisa.api/notification/list?sort=request_id&filter%5Bpriority%5D=2&page=1',
                        ],
                        'first' => [
                            'href' => 'http://lisa.api/notification/list?sort=request_id&filter%5Bpriority%5D=2&page=1',
                        ],
                        'last' => [
                            'href' => 'http://lisa.api/notification/list?sort=request_id&filter%5Bpriority%5D=2&page=1',
                        ],
                    ],
                    '_meta' => [
                        'totalCount' => 2,
                        'pageCount' => 1,
                        'currentPage' => 1,
                        'perPage' => 20,
                    ],
                ],
                'filters' => [
                    'priority' => '2',
                ],
                'initialValues' => [
                    'priorities' => [
                        1 => 'Информация необходима для склада',
                        3 => 'Исправление критичной ошибки',
                        2 => 'Товар-новинка/эксклюзив (трафикообразующий)',
                    ],
                ],
            ]
        ]
    ],

    'case3' => [
        'setting' => [
            'description' => 'Получить список нотификаций с сортировкой по дате и фильтром по статусу',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestParameters' => [
                'filter[created_at]' => '',
                'filter[status]' => 0,
                'sort' => 'created_at',
            ],
            'responseBody' => [
                'data' => [
                    'models' => [
                        0 => [
                            'id' => 5,
                            'user_id' => 4,
                            'notification' => 'Менеджер Продактович 1 <b>перевел(а) заявку</b> <a href="http://admin.gomer.local/lisa/#/request/view/1?notifyId=5">№1 !@#$%^&*()_+`-]\'/[;.,}"?{:>\\№абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО</a> в статус "<b>Готова для распределения</b>"',
                            'status' => 0,
                            'created_at' => '2020-06-03 14:09:53',
                            'request_id' => 1,
                            'priority' => 'Товар-новинка/эксклюзив (трафикообразующий)',
                            'amount_to_work' => 10,
                            'request_subject' => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\\№абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            'fields_for_complete' => '[]',
                            'triggered_by' => 'Менеджер Продактович 1',
                            'event' => 'status',
                            'changed_fields' => '{"newValue": 2, "oldValue": 1}',
                            'notify_service_id' => NULL,
                            'status_text' => 'Не прочитано',
                            'loading' => false,
                        ],
                        1 => [
                            'id' => 9,
                            'user_id' => 4,
                            'notification' => 'Менеджер Продактович 1 <b>перевел(а) заявку</b> <a href="http://admin.gomer.local/lisa/#/request/view/2?notifyId=9">№2 !@#$%^&*()_+`-]\'/[;.,}"?{:>\\№абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО</a> в статус "<b>Частично выполнена</b>"',
                            'status' => 0,
                            'created_at' => '2020-07-03 14:11:08',
                            'request_id' => 2,
                            'priority' => NULL,
                            'amount_to_work' => 10,
                            'request_subject' => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\\№абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            'fields_for_complete' => '{"Описание": "Описание", "Приоритет": "Товар-новинка/эксклюзив (трафикообразующий)", "Супервайзер": "Супервайзер Категоркин 15", "Ручная загрузка": "(не указан)", "Пакетная загрузка": "Да", "Сложность структуры": "(не указан)", "Коэффициент типа задачи": "2", "Уровень сложности задачи": "6", "Количество изменённых товаров": "(не указан)", "Коэффициент уровня сложности задачи": "2"}',
                            'triggered_by' => 'Менеджер Продактович 1',
                            'event' => 'status',
                            'changed_fields' => '{"newValue": 8, "oldValue": 6}',
                            'notify_service_id' => NULL,
                            'status_text' => 'Не прочитано',
                            'loading' => false,
                        ],
                        2 => [
                            'id' => 11,
                            'user_id' => 4,
                            'notification' => 'Менеджер Продактович 1 <b>оставил(а) комментарий к заявке</b> <a href="http://admin.gomer.local/lisa/#/request/view/2?notifyId=11">№2 !@#$%^&*()_+`-]\'/[;.,}"?{:>\\№абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО</a>',
                            'status' => 0,
                            'created_at' => '2020-07-03 14:14:37',
                            'request_id' => 2,
                            'priority' => 'Исправление критичной ошибки',
                            'amount_to_work' => 10,
                            'request_subject' => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\\№абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                            'fields_for_complete' => '[]',
                            'triggered_by' => 'Менеджер Продактович 1',
                            'event' => 'comment',
                            'changed_fields' => '{"newValue": "@bpm_teamLead_2  ~!@#$%^&amp;*()_+`]&#039;/[;.,|}}&quot;?{:&gt;&lt;\\n@bpm_teamLead_1  ", "oldValue": ""}',
                            'notify_service_id' => NULL,
                            'status_text' => 'Не прочитано',
                            'loading' => false,
                        ],
                    ],
                    '_links' => [
                        'self' => [
                            'href' => 'http://lisa.api/notification/list?filter%5Bcreated_at%5D=&filter%5Bstatus%5D=0&sort=created_at&page=1',
                        ],
                        'first' => [
                            'href' => 'http://lisa.api/notification/list?filter%5Bcreated_at%5D=&filter%5Bstatus%5D=0&sort=created_at&page=1',
                        ],
                        'last' => [
                            'href' => 'http://lisa.api/notification/list?filter%5Bcreated_at%5D=&filter%5Bstatus%5D=0&sort=created_at&page=1',
                        ],
                    ],
                    '_meta' => [
                        'totalCount' => 3,
                        'pageCount' => 1,
                        'currentPage' => 1,
                        'perPage' => 20,
                    ],
                ],
                'filters' => [
                    'created_at' => '',
                    'status' => '0',
                ],
                'initialValues' => [
                    'priorities' => [
                        1 => 'Информация необходима для склада',
                        3 => 'Исправление критичной ошибки',
                        2 => 'Товар-новинка/эксклюзив (трафикообразующий)',
                    ],
                ],
            ]
        ]
    ],

    'case4' => [
        'setting' => [
            'description' => 'Получить пустой список нотификаций с фильтром по несуществующей id заявки',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestParameters' => [
                'filter[request_id]' => 999,
            ],
            'responseBody' => [
                'data' => [
                    'models' => [
                    ],
                    '_links' => [
                        'self' => [
                            'href' => 'http://lisa.api/notification/list?filter%5Brequest_id%5D=999&page=1',
                        ],
                    ],
                    '_meta' => [
                        'totalCount' => 0,
                        'pageCount' => 0,
                        'currentPage' => 1,
                        'perPage' => 20,
                    ],
                ],
                'filters' => [
                    'request_id' => '999',
                ],
                'initialValues' => [
                    'priorities' => [
                        1 => 'Информация необходима для склада',
                        3 => 'Исправление критичной ошибки',
                        2 => 'Товар-новинка/эксклюзив (трафикообразующий)',
                    ],
                ],
            ]
        ]
    ],

    'case5' => [
        'setting' => [
            'description' => 'Ошибка при фильтре id строкой',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestParameters' => [
                'filter[request_id]' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>|<1001234567890>а',
            ],
            'responseBody' => [
                'data' => [
                    'errors' => [
                        'request_id' => [
                            0 => 'Значение «Номер заявки» должно быть целым числом.',
                        ],
                    ],
                ],
                'filters' => [
                    'request_id' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>|<1001234567890>а',
                ],
                'initialValues' => [
                    'priorities' => [
                        1 => 'Информация необходима для склада',
                        3 => 'Исправление критичной ошибки',
                        2 => 'Товар-новинка/эксклюзив (трафикообразующий)',
                    ],
                ],
            ],
        ],
    ],

];
