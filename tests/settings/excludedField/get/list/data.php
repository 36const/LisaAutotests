<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Получить все взаимоисключающие чекбоксы',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestParameters' => [],
            'responseBody' => [
                'data' => [
                    'models' => [
                        0 => [
                            'field_id' => 1,
                            'excluded_field_id' => 2,
                            'field_name' => 'Ручная загрузка',
                            'excluded_field_name' => 'Пакетная загрузка',
                        ],
                        1 => [
                            'field_id' => 10,
                            'excluded_field_id' => 11,
                            'field_name' => 'Уценка',
                            'excluded_field_name' => 'Уценка 2',
                        ],
                        2 => [
                            'field_id' => 10,
                            'excluded_field_id' => 5,
                            'field_name' => 'Уценка',
                            'excluded_field_name' => 'Стоп-бренды',
                        ],
                        3 => [
                            'field_id' => 11,
                            'excluded_field_id' => 5,
                            'field_name' => 'Уценка 2',
                            'excluded_field_name' => 'Стоп-бренды',
                        ],
                        4 => [
                            'field_id' => 12,
                            'excluded_field_id' => 5,
                            'field_name' => 'На основе отзыва клиента на сайте',
                            'excluded_field_name' => 'Стоп-бренды',
                        ],
                        5 => [
                            'field_id' => 10,
                            'excluded_field_id' => 6,
                            'field_name' => 'Уценка',
                            'excluded_field_name' => 'Точки входа',
                        ],
                    ],
                    '_links' => [
                        'self' => [
                            'href' => 'http://lisa.api/excluded-field/list?page=1',
                        ],
                        'first' => [
                            'href' => 'http://lisa.api/excluded-field/list?page=1',
                        ],
                        'last' => [
                            'href' => 'http://lisa.api/excluded-field/list?page=1',
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
                    'fieldNames' => [
                        1 => 'Ручная загрузка',
                        2 => 'Пакетная загрузка',
                        3 => 'Виза супервайзера',
                        4 => 'С фотосъемкой',
                        6 => 'Точки входа',
                        7 => 'Добавление графики',
                        8 => 'С размерной сеткой',
                        9 => 'С тегами к товарам',
                        10 => 'Уценка',
                        11 => 'Уценка 2',
                        12 => 'На основе отзыва клиента на сайте',
                        13 => 'Жалоба на товар продавца маркета',
                        14 => 'Промо-описание',
                        15 => 'С видео',
                        16 => 'Лоты',
                        17 => 'БУ, REF',
                        18 => 'Добавление товаров в новую категорию',
                        19 => 'С палитрой',
                        123 => 'Обновление фото',
                        124 => 'Обновление описания',
                        125 => 'Обновление характеристик',
                        126 => 'Добавление/обновление инструкций',
                        5 => 'Стоп-бренды',
                        127 => 'Автомодерация',
                        159 => 'По заявке с MobileCourier',
                        160 => 'Укр. поля',
                        169 => 'Алгоритм',
                    ],
                ],
            ],
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Получить список взаимоискл. чекбоксов с обратной сортировкой по Полю и фильтром по Искл. полю',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestParameters' => [
                'sort' => '-field_id',
                'filter[excluded_field_id]' => 5,
            ],
            'responseBody' => [
                'data' => [
                    'models' => [
                        0 => [
                            'field_id' => 12,
                            'excluded_field_id' => 5,
                            'field_name' => 'На основе отзыва клиента на сайте',
                            'excluded_field_name' => 'Стоп-бренды',
                        ],
                        1 => [
                            'field_id' => 11,
                            'excluded_field_id' => 5,
                            'field_name' => 'Уценка 2',
                            'excluded_field_name' => 'Стоп-бренды',
                        ],
                        2 => [
                            'field_id' => 10,
                            'excluded_field_id' => 5,
                            'field_name' => 'Уценка',
                            'excluded_field_name' => 'Стоп-бренды',
                        ],
                    ],
                    '_links' => [
                        'self' => [
                            'href' => 'http://lisa.api/excluded-field/list?sort=-field_id&filter%5Bexcluded_field_id%5D=5&page=1',
                        ],
                        'first' => [
                            'href' => 'http://lisa.api/excluded-field/list?sort=-field_id&filter%5Bexcluded_field_id%5D=5&page=1',
                        ],
                        'last' => [
                            'href' => 'http://lisa.api/excluded-field/list?sort=-field_id&filter%5Bexcluded_field_id%5D=5&page=1',
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
                    'excluded_field_id' => '5',
                ],
                'initialValues' => [
                    'fieldNames' => [
                        1 => 'Ручная загрузка',
                        2 => 'Пакетная загрузка',
                        3 => 'Виза супервайзера',
                        4 => 'С фотосъемкой',
                        6 => 'Точки входа',
                        7 => 'Добавление графики',
                        8 => 'С размерной сеткой',
                        9 => 'С тегами к товарам',
                        10 => 'Уценка',
                        11 => 'Уценка 2',
                        12 => 'На основе отзыва клиента на сайте',
                        13 => 'Жалоба на товар продавца маркета',
                        14 => 'Промо-описание',
                        15 => 'С видео',
                        16 => 'Лоты',
                        17 => 'БУ, REF',
                        18 => 'Добавление товаров в новую категорию',
                        19 => 'С палитрой',
                        123 => 'Обновление фото',
                        124 => 'Обновление описания',
                        125 => 'Обновление характеристик',
                        126 => 'Добавление/обновление инструкций',
                        5 => 'Стоп-бренды',
                        127 => 'Автомодерация',
                        159 => 'По заявке с MobileCourier',
                        160 => 'Укр. поля',
                        169 => 'Алгоритм',
                    ],
                ],
            ],
        ]
    ],

    'case3' => [
        'setting' => [
            'description' => 'Получить список взаимоискл. чекбоксов с сортировкой по Искл. полю и несущ. фильтром по Полю',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestParameters' => [
                'sort' => 'excluded_field_id',
                'filter[excluded_field_id]' => '',
                'filter[field_id]' => 9,
            ],
            'responseBody' => [
                'data' => [
                    'models' => [
                    ],
                    '_links' => [
                        'self' => [
                            'href' => 'http://lisa.api/excluded-field/list?sort=excluded_field_id&filter%5Bexcluded_field_id%5D=&filter%5Bfield_id%5D=9&page=1',
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
                    'excluded_field_id' => '',
                    'field_id' => '9',
                ],
                'initialValues' => [
                    'fieldNames' => [
                        1 => 'Ручная загрузка',
                        2 => 'Пакетная загрузка',
                        3 => 'Виза супервайзера',
                        4 => 'С фотосъемкой',
                        6 => 'Точки входа',
                        7 => 'Добавление графики',
                        8 => 'С размерной сеткой',
                        9 => 'С тегами к товарам',
                        10 => 'Уценка',
                        11 => 'Уценка 2',
                        12 => 'На основе отзыва клиента на сайте',
                        13 => 'Жалоба на товар продавца маркета',
                        14 => 'Промо-описание',
                        15 => 'С видео',
                        16 => 'Лоты',
                        17 => 'БУ, REF',
                        18 => 'Добавление товаров в новую категорию',
                        19 => 'С палитрой',
                        123 => 'Обновление фото',
                        124 => 'Обновление описания',
                        125 => 'Обновление характеристик',
                        126 => 'Добавление/обновление инструкций',
                        5 => 'Стоп-бренды',
                        127 => 'Автомодерация',
                        159 => 'По заявке с MobileCourier',
                        160 => 'Укр. поля',
                        169 => 'Алгоритм',
                    ],
                ],
            ],
        ]
    ],

];
