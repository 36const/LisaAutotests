<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Получить все причины',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestParameters' => [],
            'responseBody' => [
                'data' => [
                    'models' => [
                        0 => [
                            'id' => 1,
                            'child_status' => 'Ожидает',
                            'reason' => 'Ожидается загрузка фото в товары',
                            'status' => 'Активный',
                            'reason_for_personal_cab' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|Ожидается загрузка фото ЛК',
                            'reason_for_personal_cab_ua' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|Ожидается загрузка фото_ua ЛК',
                            'reason_for_supplier_cab' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|Ожидается загрузка фото Output',
                            'reason_for_supplier_cab_ua' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|Ожидается загрузка фото_ua Output',
                        ],
                        1 => [
                            'id' => 2,
                            'child_status' => 'Ожидает',
                            'reason' => 'Требуется уточнение информации по задаче',
                            'status' => 'Активный',
                            'reason_for_personal_cab' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|Требуется уточнение информации ЛК',
                            'reason_for_personal_cab_ua' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|Требуется уточнение информации_ua ЛК',
                            'reason_for_supplier_cab' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|Требуется уточнение информаци Output',
                            'reason_for_supplier_cab_ua' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|Требуется уточнение информации_ua Output',
                        ],
                        2 => [
                            'id' => 3,
                            'child_status' => 'Ожидает',
                            'reason' => 'Изменен приоритет задачи',
                            'status' => 'Активный',
                            'reason_for_personal_cab' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|Изменен приоритет ЛК',
                            'reason_for_personal_cab_ua' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|Изменен приоритет_ua ЛК',
                            'reason_for_supplier_cab' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|Изменен приоритет Output',
                            'reason_for_supplier_cab_ua' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|Изменен приоритет_ua Output',
                        ],
                        3 => [
                            'id' => 4,
                            'child_status' => 'Ожидает',
                            'reason' => 'Ожидается загрузка товаров в систему',
                            'status' => 'Активный',
                            'reason_for_personal_cab' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|Ожидается загрузка товаров ЛК',
                            'reason_for_personal_cab_ua' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|Ожидается загрузка товаров_ua ЛК',
                            'reason_for_supplier_cab' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|Ожидается загрузка товаров Output',
                            'reason_for_supplier_cab_ua' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|Ожидается загрузка товаров_ua Output',
                        ],
                        4 => [
                            'id' => 5,
                            'child_status' => 'Ожидает',
                            'reason' => 'Ожидается загрузка обновлений в систему',
                            'status' => 'Заблокированный',
                            'reason_for_personal_cab' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|Ожидается загрузка обновлений ЛК',
                            'reason_for_personal_cab_ua' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|Ожидается загрузка обновлений_ua ЛК',
                            'reason_for_supplier_cab' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|Ожидается загрузка обновлений Output',
                            'reason_for_supplier_cab_ua' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|Ожидается загрузка обновлений_ua Output',
                        ],
                        5 => [
                            'id' => 6,
                            'child_status' => 'Частично выполнена',
                            'reason' => 'Не получена запрошенная недостающая информация',
                            'status' => 'Активный',
                            'reason_for_personal_cab' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|Не получена информация ЛК',
                            'reason_for_personal_cab_ua' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|Не получена информация_ua ЛК',
                            'reason_for_supplier_cab' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|Не получена информация Output',
                            'reason_for_supplier_cab_ua' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|Не получена информация_ua Output',
                        ],
                        6 => [
                            'id' => 7,
                            'child_status' => 'Частично выполнена',
                            'reason' => 'Товары ушли в ошибки',
                            'status' => 'Активный',
                            'reason_for_personal_cab' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|Товары ушли ЛК',
                            'reason_for_personal_cab_ua' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|Товары ушли_ua ЛК',
                            'reason_for_supplier_cab' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|Товары ушли Output',
                            'reason_for_supplier_cab_ua' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|Товары ушли_ua Output',
                        ],
                        7 => [
                            'id' => 8,
                            'child_status' => 'Частично выполнена',
                            'reason' => 'Часть товаров ушла в ошибки',
                            'status' => 'Заблокированный',
                            'reason_for_personal_cab' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|Часть товаров ушла ЛК',
                            'reason_for_personal_cab_ua' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|Часть товаров ушла_ua ЛК',
                            'reason_for_supplier_cab' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|Часть товаров ушла Output',
                            'reason_for_supplier_cab_ua' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|Часть товаров ушла_ua Output',
                        ],
                        8 => [
                            'id' => 9,
                            'child_status' => 'Отменена',
                            'reason' => 'Дубль задачи',
                            'status' => 'Активный',
                            'reason_for_personal_cab' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|Дубль ЛК',
                            'reason_for_personal_cab_ua' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|Дубль_ua ЛК',
                            'reason_for_supplier_cab' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|Дубль Output',
                            'reason_for_supplier_cab_ua' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|Дубль_ua Output',
                        ],
                        9 => [
                            'id' => 10,
                            'child_status' => 'Отменена',
                            'reason' => 'Все товары уже есть на сайте',
                            'status' => 'Активный',
                            'reason_for_personal_cab' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|Все товары уже есть ЛК',
                            'reason_for_personal_cab_ua' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|Все товары уже есть_ua ЛК',
                            'reason_for_supplier_cab' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|Все товары уже есть Output',
                            'reason_for_supplier_cab_ua' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|Все товары уже есть_ua Output',
                        ],
                        10 => [
                            'id' => 11,
                            'child_status' => 'Все',
                            'reason' => 'Другое (описан в коментариях)',
                            'status' => 'Активный',
                            'reason_for_personal_cab' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|Другое ЛК',
                            'reason_for_personal_cab_ua' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|Другое_ua ЛК',
                            'reason_for_supplier_cab' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|Другое Output',
                            'reason_for_supplier_cab_ua' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|Другое_ua Output',
                        ],
                        11 => [
                            'id' => 12,
                            'child_status' => 'На доработке',
                            'reason' => 'Нинада',
                            'status' => 'Заблокированный',
                            'reason_for_personal_cab' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|NO ЛК',
                            'reason_for_personal_cab_ua' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|NO_ua ЛК',
                            'reason_for_supplier_cab' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|NO Output',
                            'reason_for_supplier_cab_ua' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|NO_ua Output',
                        ],
                        12 => [
                            'id' => 13,
                            'child_status' => 'На доработке',
                            'reason' => 'Нада',
                            'status' => 'Активный',
                            'reason_for_personal_cab' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|YES ЛК',
                            'reason_for_personal_cab_ua' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|YES_ua ЛК',
                            'reason_for_supplier_cab' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|YES Output',
                            'reason_for_supplier_cab_ua' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|YES_ua Output',
                        ],
                        13 => [
                            'id' => 14,
                            'child_status' => 'Ожидает',
                            'reason' => 'Ожидает группировки',
                            'status' => 'Активный',
                            'reason_for_personal_cab' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|Ожидает групп ЛК',
                            'reason_for_personal_cab_ua' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|Ожидает групп_ua ЛК',
                            'reason_for_supplier_cab' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|Ожидает групп Output',
                            'reason_for_supplier_cab_ua' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|Ожидает групп_ua Output',
                        ],
                        14 => [
                            'id' => 15,
                            'child_status' => 'Ожидает',
                            'reason' => 'Товары на модерации',
                            'status' => 'Активный',
                            'reason_for_personal_cab' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|Товары на моде ЛК',
                            'reason_for_personal_cab_ua' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|Товары на моде_ua ЛК',
                            'reason_for_supplier_cab' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|Товары на моде Output',
                            'reason_for_supplier_cab_ua' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|Товары на моде_ua Output',
                        ],
                    ],
                    '_links' => [
                        'self' => [
                            'href' => 'http://lisa-api.docker/reason/list?page=1',
                        ],
                        'first' => [
                            'href' => 'http://lisa-api.docker/reason/list?page=1',
                        ],
                        'last' => [
                            'href' => 'http://lisa-api.docker/reason/list?page=1',
                        ],
                    ],
                    '_meta' => [
                        'totalCount' => 15,
                        'pageCount' => 1,
                        'currentPage' => 1,
                        'perPage' => 20,
                    ],
                ],
                'filters' => [
                ],
                'initialValues' => [
                    'statuses' => [
                        1 => 'Новая',
                        2 => 'Готова для распределения',
                        3 => 'На доработке',
                        4 => 'Отменена',
                        5 => 'Ожидает взятия в работу',
                        6 => 'В работе',
                        7 => 'Ожидает',
                        8 => 'Частично выполнена',
                        9 => 'Выполнена',
                        11 => 'Закрыта',
                        999 => 'Все',
                    ],
                ],
            ],
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Получить причины с фильтрами по конечному статусу и статусу',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestParameters' => [
                'filter[child_status]' => 3,
                'filter[status]' => 0,
            ],
            'responseBody' => [
                'data' => [
                    'models' => [
                        0 => [
                            'id' => 12,
                            'child_status' => 'На доработке',
                            'reason' => 'Нинада',
                            'status' => 'Заблокированный',
                            'reason_for_personal_cab' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|NO ЛК',
                            'reason_for_personal_cab_ua' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|NO_ua ЛК',
                            'reason_for_supplier_cab' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|NO Output',
                            'reason_for_supplier_cab_ua' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|NO_ua Output',
                        ],
                    ],
                    '_links' => [
                        'self' => [
                            'href' => 'http://lisa-api.docker/reason/list?filter%5Bchild_status%5D=3&filter%5Bstatus%5D=0&page=1',
                        ],
                        'first' => [
                            'href' => 'http://lisa-api.docker/reason/list?filter%5Bchild_status%5D=3&filter%5Bstatus%5D=0&page=1',
                        ],
                        'last' => [
                            'href' => 'http://lisa-api.docker/reason/list?filter%5Bchild_status%5D=3&filter%5Bstatus%5D=0&page=1',
                        ],
                    ],
                    '_meta' => [
                        'totalCount' => 1,
                        'pageCount' => 1,
                        'currentPage' => 1,
                        'perPage' => 20,
                    ],
                ],
                'filters' => [
                    'child_status' => '3',
                    'status' => '0',
                ],
                'initialValues' => [
                    'statuses' => [
                        1 => 'Новая',
                        2 => 'Готова для распределения',
                        3 => 'На доработке',
                        4 => 'Отменена',
                        5 => 'Ожидает взятия в работу',
                        6 => 'В работе',
                        7 => 'Ожидает',
                        8 => 'Частично выполнена',
                        9 => 'Выполнена',
                        11 => 'Закрыта',
                        999 => 'Все',
                    ],
                ],
            ],
        ]
    ],

    'case3' => [
        'setting' => [
            'description' => 'Получить причины с фильтром по причине и обратной сортировкой по id',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestParameters' => [
                'filter[child_status]' => '',
                'filter[status]' => '',
                'filter[reason]' => 'ож',
                'sort' => '-id'
            ],
            'responseBody' => [
                'data' => [
                    'models' => [
                        0 => [
                            'id' => 14,
                            'child_status' => 'Ожидает',
                            'reason' => 'Ожидает группировки',
                            'status' => 'Активный',
                            'reason_for_personal_cab' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|Ожидает групп ЛК',
                            'reason_for_personal_cab_ua' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|Ожидает групп_ua ЛК',
                            'reason_for_supplier_cab' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|Ожидает групп Output',
                            'reason_for_supplier_cab_ua' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|Ожидает групп_ua Output',
                        ],
                        1 => [
                            'id' => 5,
                            'child_status' => 'Ожидает',
                            'reason' => 'Ожидается загрузка обновлений в систему',
                            'status' => 'Заблокированный',
                            'reason_for_personal_cab' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|Ожидается загрузка обновлений ЛК',
                            'reason_for_personal_cab_ua' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|Ожидается загрузка обновлений_ua ЛК',
                            'reason_for_supplier_cab' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|Ожидается загрузка обновлений Output',
                            'reason_for_supplier_cab_ua' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|Ожидается загрузка обновлений_ua Output',
                        ],
                        2 => [
                            'id' => 4,
                            'child_status' => 'Ожидает',
                            'reason' => 'Ожидается загрузка товаров в систему',
                            'status' => 'Активный',
                            'reason_for_personal_cab' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|Ожидается загрузка товаров ЛК',
                            'reason_for_personal_cab_ua' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|Ожидается загрузка товаров_ua ЛК',
                            'reason_for_supplier_cab' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|Ожидается загрузка товаров Output',
                            'reason_for_supplier_cab_ua' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|Ожидается загрузка товаров_ua Output',
                        ],
                        3 => [
                            'id' => 1,
                            'child_status' => 'Ожидает',
                            'reason' => 'Ожидается загрузка фото в товары',
                            'status' => 'Активный',
                            'reason_for_personal_cab' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|Ожидается загрузка фото ЛК',
                            'reason_for_personal_cab_ua' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|Ожидается загрузка фото_ua ЛК',
                            'reason_for_supplier_cab' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|Ожидается загрузка фото Output',
                            'reason_for_supplier_cab_ua' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|Ожидается загрузка фото_ua Output',
                        ],
                    ],
                    '_links' => [
                        'self' => [
                            'href' => 'http://lisa-api.docker/reason/list?filter%5Bchild_status%5D=&filter%5Bstatus%5D=&filter%5Breason%5D=%D0%BE%D0%B6&sort=-id&page=1',
                        ],
                        'first' => [
                            'href' => 'http://lisa-api.docker/reason/list?filter%5Bchild_status%5D=&filter%5Bstatus%5D=&filter%5Breason%5D=%D0%BE%D0%B6&sort=-id&page=1',
                        ],
                        'last' => [
                            'href' => 'http://lisa-api.docker/reason/list?filter%5Bchild_status%5D=&filter%5Bstatus%5D=&filter%5Breason%5D=%D0%BE%D0%B6&sort=-id&page=1',
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
                    'child_status' => '',
                    'status' => '',
                    'reason' => 'ож',
                ],
                'initialValues' => [
                    'statuses' => [
                        1 => 'Новая',
                        2 => 'Готова для распределения',
                        3 => 'На доработке',
                        4 => 'Отменена',
                        5 => 'Ожидает взятия в работу',
                        6 => 'В работе',
                        7 => 'Ожидает',
                        8 => 'Частично выполнена',
                        9 => 'Выполнена',
                        11 => 'Закрыта',
                        999 => 'Все',
                    ],
                ],
            ],
        ]
    ],

    'case4' => [
        'setting' => [
            'description' => 'Получить причины с фильтром по ЛК и обратной сортировкой по КП (укр.)',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestParameters' => [
                'filter[reason_for_personal_cab]' => 'ожи',
                'sort' => '-reason_for_supplier_cab_ua'
            ],
            'responseBody' => [
                'data' => [
                    'models' => [
                        0 => [
                            'id' => 1,
                            'child_status' => 'Ожидает',
                            'reason' => 'Ожидается загрузка фото в товары',
                            'status' => 'Активный',
                            'reason_for_personal_cab' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|Ожидается загрузка фото ЛК',
                            'reason_for_personal_cab_ua' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|Ожидается загрузка фото_ua ЛК',
                            'reason_for_supplier_cab' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|Ожидается загрузка фото Output',
                            'reason_for_supplier_cab_ua' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|Ожидается загрузка фото_ua Output',
                        ],
                        1 => [
                            'id' => 4,
                            'child_status' => 'Ожидает',
                            'reason' => 'Ожидается загрузка товаров в систему',
                            'status' => 'Активный',
                            'reason_for_personal_cab' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|Ожидается загрузка товаров ЛК',
                            'reason_for_personal_cab_ua' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|Ожидается загрузка товаров_ua ЛК',
                            'reason_for_supplier_cab' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|Ожидается загрузка товаров Output',
                            'reason_for_supplier_cab_ua' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|Ожидается загрузка товаров_ua Output',
                        ],
                        2 => [
                            'id' => 5,
                            'child_status' => 'Ожидает',
                            'reason' => 'Ожидается загрузка обновлений в систему',
                            'status' => 'Заблокированный',
                            'reason_for_personal_cab' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|Ожидается загрузка обновлений ЛК',
                            'reason_for_personal_cab_ua' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|Ожидается загрузка обновлений_ua ЛК',
                            'reason_for_supplier_cab' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|Ожидается загрузка обновлений Output',
                            'reason_for_supplier_cab_ua' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|Ожидается загрузка обновлений_ua Output',
                        ],
                        3 => [
                            'id' => 14,
                            'child_status' => 'Ожидает',
                            'reason' => 'Ожидает группировки',
                            'status' => 'Активный',
                            'reason_for_personal_cab' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|Ожидает групп ЛК',
                            'reason_for_personal_cab_ua' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|Ожидает групп_ua ЛК',
                            'reason_for_supplier_cab' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|Ожидает групп Output',
                            'reason_for_supplier_cab_ua' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|Ожидает групп_ua Output',
                        ],
                    ],
                    '_links' => [
                        'self' => [
                            'href' => 'http://lisa-api.docker/reason/list?filter%5Breason_for_personal_cab%5D=%D0%BE%D0%B6%D0%B8&sort=-reason_for_supplier_cab_ua&page=1',
                        ],
                        'first' => [
                            'href' => 'http://lisa-api.docker/reason/list?filter%5Breason_for_personal_cab%5D=%D0%BE%D0%B6%D0%B8&sort=-reason_for_supplier_cab_ua&page=1',
                        ],
                        'last' => [
                            'href' => 'http://lisa-api.docker/reason/list?filter%5Breason_for_personal_cab%5D=%D0%BE%D0%B6%D0%B8&sort=-reason_for_supplier_cab_ua&page=1',
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
                    'reason_for_personal_cab' => 'ожи',
                ],
                'initialValues' => [
                    'statuses' => [
                        1 => 'Новая',
                        2 => 'Готова для распределения',
                        3 => 'На доработке',
                        4 => 'Отменена',
                        5 => 'Ожидает взятия в работу',
                        6 => 'В работе',
                        7 => 'Ожидает',
                        8 => 'Частично выполнена',
                        9 => 'Выполнена',
                        11 => 'Закрыта',
                        999 => 'Все',
                    ],
                ],
            ],
        ]
    ],

    'case5' => [
        'setting' => [
            'description' => 'Получить причины с фильтром по КП и обратной сортировкой по ЛК (укр.)',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestParameters' => [
                'filter[reason_for_personal_cab]' => '',
                'filter[reason_for_supplier_cab]' => 'и out',
                'sort' => 'reason_for_personal_cab_ua'
            ],
            'responseBody' => [
                'data' => [
                    'models' => [
                        0 => [
                            'id' => 7,
                            'child_status' => 'Частично выполнена',
                            'reason' => 'Товары ушли в ошибки',
                            'status' => 'Активный',
                            'reason_for_personal_cab' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|Товары ушли ЛК',
                            'reason_for_personal_cab_ua' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|Товары ушли_ua ЛК',
                            'reason_for_supplier_cab' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|Товары ушли Output',
                            'reason_for_supplier_cab_ua' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|Товары ушли_ua Output',
                        ],
                        1 => [
                            'id' => 2,
                            'child_status' => 'Ожидает',
                            'reason' => 'Требуется уточнение информации по задаче',
                            'status' => 'Активный',
                            'reason_for_personal_cab' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|Требуется уточнение информации ЛК',
                            'reason_for_personal_cab_ua' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|Требуется уточнение информации_ua ЛК',
                            'reason_for_supplier_cab' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|Требуется уточнение информаци Output',
                            'reason_for_supplier_cab_ua' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|Требуется уточнение информации_ua Output',
                        ],
                    ],
                    '_links' => [
                        'self' => [
                            'href' => 'http://lisa-api.docker/reason/list?filter%5Breason_for_personal_cab%5D=&filter%5Breason_for_supplier_cab%5D=%D0%B8+out&sort=reason_for_personal_cab_ua&page=1',
                        ],
                        'first' => [
                            'href' => 'http://lisa-api.docker/reason/list?filter%5Breason_for_personal_cab%5D=&filter%5Breason_for_supplier_cab%5D=%D0%B8+out&sort=reason_for_personal_cab_ua&page=1',
                        ],
                        'last' => [
                            'href' => 'http://lisa-api.docker/reason/list?filter%5Breason_for_personal_cab%5D=&filter%5Breason_for_supplier_cab%5D=%D0%B8+out&sort=reason_for_personal_cab_ua&page=1',
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
                    'reason_for_personal_cab' => '',
                    'reason_for_supplier_cab' => 'и out',
                ],
                'initialValues' => [
                    'statuses' => [
                        1 => 'Новая',
                        2 => 'Готова для распределения',
                        3 => 'На доработке',
                        4 => 'Отменена',
                        5 => 'Ожидает взятия в работу',
                        6 => 'В работе',
                        7 => 'Ожидает',
                        8 => 'Частично выполнена',
                        9 => 'Выполнена',
                        11 => 'Закрыта',
                        999 => 'Все',
                    ],
                ],
            ],
        ]
    ],

    'case6' => [
        'setting' => [
            'description' => 'Получить причины с фильтром статусу и несуществующему id',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestParameters' => [
                'filter[child_status]' => '',
                'filter[status]' => 1,
                'filter[reason]' => '',
                'sort' => 'id',
                'filter[id]' => 999,
            ],
            'responseBody' => [
                'data' => [
                    'models' => [
                    ],
                    '_links' => [
                        'self' => [
                            'href' => 'http://lisa-api.docker/reason/list?filter%5Bchild_status%5D=&filter%5Bstatus%5D=1&filter%5Breason%5D=&filter%5Bid%5D=999&sort=id&page=1',
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
                    'child_status' => '',
                    'status' => '1',
                    'reason' => '',
                    'id' => '999',
                ],
                'initialValues' => [
                    'statuses' => [
                        1 => 'Новая',
                        2 => 'Готова для распределения',
                        3 => 'На доработке',
                        4 => 'Отменена',
                        5 => 'Ожидает взятия в работу',
                        6 => 'В работе',
                        7 => 'Ожидает',
                        8 => 'Частично выполнена',
                        9 => 'Выполнена',
                        11 => 'Закрыта',
                        999 => 'Все',
                    ],
                ],
            ],
        ]
    ],
];
