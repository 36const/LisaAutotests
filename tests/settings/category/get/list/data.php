<?php

use lisa\RequestsTester;

return [
    'case1' => [
        'setting' => [
            'description' => 'Получить список категорий',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestParameters' => [],
            'responseBody' => [
                'data' => [
                    'models' => [
                        0 => [
                            'id' => 1,
                            'title' => 'Авиабилеты',
                            'difficulty' => 2,
                            'supervisor_id' => 'Супервайзер Начальникович 1',
                            'rz_categories_string' => 'Алкогольные напитки и продукты питания (<b>4626923</b>) | Аксессуары для алкоголя (<b>753399</b>) | Мини-бары (<b>4652996</b>) | Фляги (<b>4653010</b>) | Упаковки для алкогольных напитков (<b>4653017</b>) | Фото и видео (<b>4628124</b>)',
                            'status' => 'Активный',
                        ],
                        1 => [
                            'id' => 2,
                            'title' => 'Видео к товару',
                            'difficulty' => 3,
                            'supervisor_id' => 'Супервайзер Начальникович 2',
                            'rz_categories_string' => 'Файлы (<b>2514857</b>) | Визитницы (<b>2514867</b>) | Бейджи, брелоки-идентификаторы, настольные таблички (<b>2514872</b>) | Банковские принадлежности (<b>2560747</b>) | Папки, регистраторы (<b>2581722</b>) | Папки пластиковые (<b>2514862</b>) | Папки-портфели, папки-боксы (<b>2581727</b>) | Папки-регистраторы (<b>2581732</b>) | Папки-планшеты (<b>2581737</b>) | Папки и файлы подвесные (<b>2581742</b>) | Папки с файлами (<b>2595767</b>) | Архивные короба и боксы (<b>2666302</b>) | Папки специальные (<b>4626584</b>)',
                            'status' => 'Активный',
                        ],
                        2 => [
                            'id' => 3,
                            'title' => 'Добавление логотипов к производителям',
                            'difficulty' => 4,
                            'supervisor_id' => 'Супервайзер Начальникович 1',
                            'rz_categories_string' => '',
                            'status' => 'Заблокированный',
                        ],
                    ],
                    '_links' => [
                        'self' => [
                            'href' => 'http://lisa.api/category/list?page=1',
                        ],
                        'first' => [
                            'href' => 'http://lisa.api/category/list?page=1',
                        ],
                        'last' => [
                            'href' => 'http://lisa.api/category/list?page=1',
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
                ],
                'initialValues' => [
                    'userNames' => RequestsTester::USER_NAMES,
                    'exportUrl' => 'http://lisa.api/files/выгрузка_связанных_категорий_LISA.xlsx',
                ]
            ]
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Получить список категорий с обратной сортировкой по id и фильтром по названию',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestParameters' => [
                'sort' => '-id',
                'filter[title]' => 'ви',
            ],
            'responseBody' => [
                'data' => [
                    'models' => [
                        0 => [
                            'id' => 2,
                            'title' => 'Видео к товару',
                            'difficulty' => 3,
                            'supervisor_id' => 'Супервайзер Начальникович 2',
                            'rz_categories_string' => 'Файлы (<b>2514857</b>) | Визитницы (<b>2514867</b>) | Бейджи, брелоки-идентификаторы, настольные таблички (<b>2514872</b>) | Банковские принадлежности (<b>2560747</b>) | Папки, регистраторы (<b>2581722</b>) | Папки пластиковые (<b>2514862</b>) | Папки-портфели, папки-боксы (<b>2581727</b>) | Папки-регистраторы (<b>2581732</b>) | Папки-планшеты (<b>2581737</b>) | Папки и файлы подвесные (<b>2581742</b>) | Папки с файлами (<b>2595767</b>) | Архивные короба и боксы (<b>2666302</b>) | Папки специальные (<b>4626584</b>)',
                            'status' => 'Активный',
                        ],
                        1 => [
                            'id' => 1,
                            'title' => 'Авиабилеты',
                            'difficulty' => 2,
                            'supervisor_id' => 'Супервайзер Начальникович 1',
                            'rz_categories_string' => 'Алкогольные напитки и продукты питания (<b>4626923</b>) | Аксессуары для алкоголя (<b>753399</b>) | Мини-бары (<b>4652996</b>) | Фляги (<b>4653010</b>) | Упаковки для алкогольных напитков (<b>4653017</b>) | Фото и видео (<b>4628124</b>)',
                            'status' => 'Активный',
                        ],
                    ],
                    '_links' => [
                        'self' => [
                            'href' => 'http://lisa.api/category/list?sort=-id&filter%5Btitle%5D=%D0%B2%D0%B8&page=1',
                        ],
                        'first' => [
                            'href' => 'http://lisa.api/category/list?sort=-id&filter%5Btitle%5D=%D0%B2%D0%B8&page=1',
                        ],
                        'last' => [
                            'href' => 'http://lisa.api/category/list?sort=-id&filter%5Btitle%5D=%D0%B2%D0%B8&page=1',
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
                    'title' => 'ви',
                ],
                'initialValues' => [
                    'userNames' => RequestsTester::USER_NAMES,
                    'exportUrl' => 'http://lisa.api/files/выгрузка_связанных_категорий_LISA.xlsx',
                ]
            ],
        ]
    ],

    'case3' => [
        'setting' => [
            'description' => 'Получить список категорий с сортировкой по статусу и фильтром по супервайзеру',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestParameters' => [
                'filter[title]' => '',
                'filter[supervisor_id]' => 6,
                'sort' => '-status',
            ],
            'responseBody' => [
                'data' => [
                    'models' => [
                        0 => [
                            'id' => 1,
                            'title' => 'Авиабилеты',
                            'difficulty' => 2,
                            'supervisor_id' => 'Супервайзер Начальникович 1',
                            'rz_categories_string' => 'Алкогольные напитки и продукты питания (<b>4626923</b>) | Аксессуары для алкоголя (<b>753399</b>) | Мини-бары (<b>4652996</b>) | Фляги (<b>4653010</b>) | Упаковки для алкогольных напитков (<b>4653017</b>) | Фото и видео (<b>4628124</b>)',
                            'status' => 'Активный',
                        ],
                        1 => [
                            'id' => 3,
                            'title' => 'Добавление логотипов к производителям',
                            'difficulty' => 4,
                            'supervisor_id' => 'Супервайзер Начальникович 1',
                            'rz_categories_string' => '',
                            'status' => 'Заблокированный',
                        ],
                    ],
                    '_links' => [
                        'self' => [
                            'href' => 'http://lisa.api/category/list?filter%5Btitle%5D=&filter%5Bsupervisor_id%5D=6&sort=-status&page=1',
                        ],
                        'first' => [
                            'href' => 'http://lisa.api/category/list?filter%5Btitle%5D=&filter%5Bsupervisor_id%5D=6&sort=-status&page=1',
                        ],
                        'last' => [
                            'href' => 'http://lisa.api/category/list?filter%5Btitle%5D=&filter%5Bsupervisor_id%5D=6&sort=-status&page=1',
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
                    'title' => '',
                    'supervisor_id' => '6',
                ],
                'initialValues' => [
                    'userNames' => RequestsTester::USER_NAMES,
                    'exportUrl' => 'http://lisa.api/files/выгрузка_связанных_категорий_LISA.xlsx',
                ]
            ],
        ]
    ],

];
