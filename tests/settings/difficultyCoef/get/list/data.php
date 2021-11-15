<?php

use lisa\Constants;

return [
    'case1' => [
        'setting' => [
            'description' => 'Получить все коэффициенты',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestParameters' => [],
            'responseBody' => [
                'data' => [
                    'models' => [
                        0 => [
                            'id' => 1,
                            'type_id' => 'Добавление новых товаров',
                            'field_ids' => 'Ручная загрузка',
                            'difficulty_coef' => 0.5,
                            'status' => 'Активный',
                        ],
                        1 => [
                            'id' => 2,
                            'type_id' => 'Добавление новых товаров',
                            'field_ids' => 'Пакетная загрузка',
                            'difficulty_coef' => 2,
                            'status' => 'Активный',
                        ],
                        2 => [
                            'id' => 3,
                            'type_id' => 'Добавление/изменение информации в существующих товарах',
                            'field_ids' => 'С размерной сеткой | С видео | С палитрой',
                            'difficulty_coef' => 3,
                            'status' => 'Активный',
                        ],
                        3 => [
                            'id' => 4,
                            'type_id' => 'Добавление/изменение информации в существующих товарах',
                            'field_ids' => 'Ручная загрузка',
                            'difficulty_coef' => 0.5,
                            'status' => 'Заблокированный',
                        ],
                        4 => [
                            'id' => 5,
                            'type_id' => 'Добавление/изменение информации в существующих товарах',
                            'field_ids' => 'Пакетная загрузка',
                            'difficulty_coef' => 2,
                            'status' => 'Заблокированный',
                        ],
                        5 => [
                            'id' => 6,
                            'type_id' => 'Добавление новых товаров',
                            'field_ids' => 'С размерной сеткой | С видео | С палитрой',
                            'difficulty_coef' => 3,
                            'status' => 'Заблокированный',
                        ],
                    ],
                    '_links' => [
                        'self' => [
                            'href' => 'http://lisa-api.docker/difficulty-coef/list?page=1',
                        ],
                        'first' => [
                            'href' => 'http://lisa-api.docker/difficulty-coef/list?page=1',
                        ],
                        'last' => [
                            'href' => 'http://lisa-api.docker/difficulty-coef/list?page=1',
                        ],
                    ],
                    '_meta' => [
                        'totalCount' => 6,
                        'pageCount' => 1,
                        'currentPage' => 1,
                        'perPage' => 20,
                    ],
                ],
                'filters' => [
                ],
                'initialValues' => [
                    'types' => Constants::TYPES,
                ],
            ],
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Получить список заблокированных значений с обратной сортировкой по id',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestParameters' => [
                'filter[status]' => 0,
                'sort' => '-id',
            ],
            'responseBody' => [
                'data' => [
                    'models' => [
                        0 => [
                            'id' => 6,
                            'type_id' => 'Добавление новых товаров',
                            'field_ids' => 'С размерной сеткой | С видео | С палитрой',
                            'difficulty_coef' => 3,
                            'status' => 'Заблокированный',
                        ],
                        1 => [
                            'id' => 5,
                            'type_id' => 'Добавление/изменение информации в существующих товарах',
                            'field_ids' => 'Пакетная загрузка',
                            'difficulty_coef' => 2,
                            'status' => 'Заблокированный',
                        ],
                        2 => [
                            'id' => 4,
                            'type_id' => 'Добавление/изменение информации в существующих товарах',
                            'field_ids' => 'Ручная загрузка',
                            'difficulty_coef' => 0.5,
                            'status' => 'Заблокированный',
                        ],
                    ],
                    '_links' => [
                        'self' => [
                            'href' => 'http://lisa-api.docker/difficulty-coef/list?filter%5Bstatus%5D=0&sort=-id&page=1',
                        ],
                        'first' => [
                            'href' => 'http://lisa-api.docker/difficulty-coef/list?filter%5Bstatus%5D=0&sort=-id&page=1',
                        ],
                        'last' => [
                            'href' => 'http://lisa-api.docker/difficulty-coef/list?filter%5Bstatus%5D=0&sort=-id&page=1',
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
                    'status' => '0',
                ],
                'initialValues' => [
                    'types' => Constants::TYPES,
                ],
            ],
        ]
    ],

    'case3' => [
        'setting' => [
            'description' => 'Получить список значений с фильтром по статусу и типу',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestParameters' => [
                'filter[status]' => 1,
                'filter[type_id]' => 1,
            ],
            'responseBody' => [
                'data' => [
                    'models' => [
                        0 => [
                            'id' => 1,
                            'type_id' => 'Добавление новых товаров',
                            'field_ids' => 'Ручная загрузка',
                            'difficulty_coef' => 0.5,
                            'status' => 'Активный',
                        ],
                        1 => [
                            'id' => 2,
                            'type_id' => 'Добавление новых товаров',
                            'field_ids' => 'Пакетная загрузка',
                            'difficulty_coef' => 2,
                            'status' => 'Активный',
                        ],
                    ],
                    '_links' => [
                        'self' => [
                            'href' => 'http://lisa-api.docker/difficulty-coef/list?filter%5Bstatus%5D=1&filter%5Btype_id%5D=1&page=1',
                        ],
                        'first' => [
                            'href' => 'http://lisa-api.docker/difficulty-coef/list?filter%5Bstatus%5D=1&filter%5Btype_id%5D=1&page=1',
                        ],
                        'last' => [
                            'href' => 'http://lisa-api.docker/difficulty-coef/list?filter%5Bstatus%5D=1&filter%5Btype_id%5D=1&page=1',
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
                    'status' => '1',
                    'type_id' => '1',
                ],
                'initialValues' => [
                    'types' => Constants::TYPES,
                ],
            ],
        ]
    ],

    'case4' => [
        'setting' => [
            'description' => 'Получить список значений с сортировкой по типу и фильтром по коэффициенту',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestParameters' => [
                'filter[status]' => '',
                'filter[type_id]' => '',
                'filter[difficulty_coef]' => 0.5,
                'sort' => 'type_id',
            ],
            'responseBody' => [
                'data' => [
                    'models' => [
                        0 => [
                            'id' => 1,
                            'type_id' => 'Добавление новых товаров',
                            'field_ids' => 'Ручная загрузка',
                            'difficulty_coef' => 0.5,
                            'status' => 'Активный',
                        ],
                        1 => [
                            'id' => 4,
                            'type_id' => 'Добавление/изменение информации в существующих товарах',
                            'field_ids' => 'Ручная загрузка',
                            'difficulty_coef' => 0.5,
                            'status' => 'Заблокированный',
                        ],
                    ],
                    '_links' => [
                        'self' => [
                            'href' => 'http://lisa-api.docker/difficulty-coef/list?filter%5Bstatus%5D=&filter%5Btype_id%5D=&filter%5Bdifficulty_coef%5D=0.5&sort=type_id&page=1',
                        ],
                        'first' => [
                            'href' => 'http://lisa-api.docker/difficulty-coef/list?filter%5Bstatus%5D=&filter%5Btype_id%5D=&filter%5Bdifficulty_coef%5D=0.5&sort=type_id&page=1',
                        ],
                        'last' => [
                            'href' => 'http://lisa-api.docker/difficulty-coef/list?filter%5Bstatus%5D=&filter%5Btype_id%5D=&filter%5Bdifficulty_coef%5D=0.5&sort=type_id&page=1',
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
                    'status' => '',
                    'type_id' => '',
                    'difficulty_coef' => '0.5',
                ],
                'initialValues' => [
                    'types' => Constants::TYPES,
                ],
            ],
        ]
    ],

    'case5' => [
        'setting' => [
            'description' => 'Ошибка при фильтре коэффициента строкой',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestParameters' => [
                'filter[status]' => '',
                'filter[type_id]' => '',
                'filter[difficulty_coef]' => 'выпарп',
                'sort' => 'type_id',
            ],
            'responseBody' => [
                'data' => [
                    'errors' => [
                        'difficulty_coef' => [
                            0 => 'Значение «Коэффициент сложности» должно быть числом.',
                        ],
                    ],
                ],
                'filters' => [
                    'status' => '',
                    'type_id' => '',
                    'difficulty_coef' => 'выпарп',
                ],
                'initialValues' => [
                    'types' => Constants::TYPES,
                ],
            ],
        ]
    ],

    'case6' => [
        'setting' => [
            'description' => 'Ошибка при фильтре id строкой',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestParameters' => [
                'filter[status]' => '',
                'filter[type_id]' => '',
                'filter[difficulty_coef]' => '',
                'sort' => 'type_id',
                'filter[id]' => '!@#$%^',
            ],
            'responseBody' => [
                'data' => [
                    'errors' => [
                        'id' => [
                            0 => 'Значение «ID» должно быть целым числом.',
                        ],
                    ],
                ],
                'filters' => [
                    'status' => '',
                    'type_id' => '',
                    'difficulty_coef' => '',
                    'id' => '!@#$%^',
                ],
                'initialValues' => [
                    'types' => Constants::TYPES,
                ],
            ],
        ]
    ],

];
