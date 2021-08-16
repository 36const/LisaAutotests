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
                        ],
                        1 => [
                            'id' => 2,
                            'child_status' => 'Ожидает',
                            'reason' => 'Требуется уточнение информации по задаче',
                            'status' => 'Активный',
                        ],
                        2 => [
                            'id' => 3,
                            'child_status' => 'Ожидает',
                            'reason' => 'Изменен приоритет задачи',
                            'status' => 'Активный',
                        ],
                        3 => [
                            'id' => 4,
                            'child_status' => 'Ожидает',
                            'reason' => 'Ожидается загрузка товаров в систему',
                            'status' => 'Активный',
                        ],
                        4 => [
                            'id' => 5,
                            'child_status' => 'Ожидает',
                            'reason' => 'Ожидается загрузка обновлений в систему',
                            'status' => 'Заблокированный',
                        ],
                        5 => [
                            'id' => 6,
                            'child_status' => 'Частично выполнена',
                            'reason' => 'Не получена запрошенная недостающая информация',
                            'status' => 'Активный',
                        ],
                        6 => [
                            'id' => 7,
                            'child_status' => 'Частично выполнена',
                            'reason' => 'Товары ушли в ошибки',
                            'status' => 'Активный',
                        ],
                        7 => [
                            'id' => 8,
                            'child_status' => 'Частично выполнена',
                            'reason' => 'Часть товаров ушла в ошибки',
                            'status' => 'Заблокированный',
                        ],
                        8 => [
                            'id' => 9,
                            'child_status' => 'Отменена',
                            'reason' => 'Дубль задачи',
                            'status' => 'Активный',
                        ],
                        9 => [
                            'id' => 10,
                            'child_status' => 'Отменена',
                            'reason' => 'Все товары уже есть на сайте',
                            'status' => 'Активный',
                        ],
                        10 => [
                            'id' => 11,
                            'child_status' => 'Все',
                            'reason' => 'Другое (описан в коментариях)',
                            'status' => 'Активный',
                        ],
                        11 => [
                            'id' => 12,
                            'child_status' => 'На доработке',
                            'reason' => 'Нинада',
                            'status' => 'Заблокированный',
                        ],
                        12 => [
                            'id' => 13,
                            'child_status' => 'На доработке',
                            'reason' => 'Нада',
                            'status' => 'Активный',
                        ],
                        13 => [
                            'id' => 14,
                            'child_status' => 'Ожидает',
                            'reason' => 'Ожидает группировки',
                            'status' => 'Активный',
                        ],
                        14 => [
                            'id' => 15,
                            'child_status' => 'Ожидает',
                            'reason' => 'Товары на модерации',
                            'status' => 'Активный',
                        ],
                    ],
                    '_links' => [
                        'self' => [
                            'href' => 'http://lisa.api/reason/list?page=1',
                        ],
                        'first' => [
                            'href' => 'http://lisa.api/reason/list?page=1',
                        ],
                        'last' => [
                            'href' => 'http://lisa.api/reason/list?page=1',
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
                        ],
                    ],
                    '_links' => [
                        'self' => [
                            'href' => 'http://lisa.api/reason/list?filter%5Bchild_status%5D=3&filter%5Bstatus%5D=0&page=1',
                        ],
                        'first' => [
                            'href' => 'http://lisa.api/reason/list?filter%5Bchild_status%5D=3&filter%5Bstatus%5D=0&page=1',
                        ],
                        'last' => [
                            'href' => 'http://lisa.api/reason/list?filter%5Bchild_status%5D=3&filter%5Bstatus%5D=0&page=1',
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
                        ],
                        1 => [
                            'id' => 5,
                            'child_status' => 'Ожидает',
                            'reason' => 'Ожидается загрузка обновлений в систему',
                            'status' => 'Заблокированный',
                        ],
                        2 => [
                            'id' => 4,
                            'child_status' => 'Ожидает',
                            'reason' => 'Ожидается загрузка товаров в систему',
                            'status' => 'Активный',
                        ],
                        3 => [
                            'id' => 1,
                            'child_status' => 'Ожидает',
                            'reason' => 'Ожидается загрузка фото в товары',
                            'status' => 'Активный',
                        ],
                    ],
                    '_links' => [
                        'self' => [
                            'href' => 'http://lisa.api/reason/list?filter%5Bchild_status%5D=&filter%5Bstatus%5D=&filter%5Breason%5D=%D0%BE%D0%B6&sort=-id&page=1',
                        ],
                        'first' => [
                            'href' => 'http://lisa.api/reason/list?filter%5Bchild_status%5D=&filter%5Bstatus%5D=&filter%5Breason%5D=%D0%BE%D0%B6&sort=-id&page=1',
                        ],
                        'last' => [
                            'href' => 'http://lisa.api/reason/list?filter%5Bchild_status%5D=&filter%5Bstatus%5D=&filter%5Breason%5D=%D0%BE%D0%B6&sort=-id&page=1',
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
                            'href' => 'http://lisa.api/reason/list?filter%5Bchild_status%5D=&filter%5Bstatus%5D=1&filter%5Breason%5D=&filter%5Bid%5D=999&sort=id&page=1',
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
