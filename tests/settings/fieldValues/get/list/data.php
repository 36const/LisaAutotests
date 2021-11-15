<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Получить значения всех полей',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestParameters' => [],
            'responseBody' => [
                'data' => [
                    'models' => [
                        0 => [
                            'id' => 1,
                            'field_id' => 'Наличие характеристик к товарам',
                            'value' => 'Предоставлены продактом',
                            'status' => 'Активный',
                            'order' => 2,
                        ],
                        1 => [
                            'id' => 2,
                            'field_id' => 'Наличие характеристик к товарам',
                            'value' => 'Предоставлены продактом частично. Без дополнительного поиска.',
                            'status' => 'Активный',
                            'order' => 3,
                        ],
                        2 => [
                            'id' => 3,
                            'field_id' => 'Наличие характеристик к товарам',
                            'value' => 'Предоставлены продактом частично. С дополнительным поиском.',
                            'status' => 'Активный',
                            'order' => 4,
                        ],
                        3 => [
                            'id' => 4,
                            'field_id' => 'Наличие характеристик к товарам',
                            'value' => 'Не предоставлены продактом. Выполнен поиск.',
                            'status' => 'Активный',
                            'order' => 1,
                        ],
                        4 => [
                            'id' => 5,
                            'field_id' => 'Наличие характеристик к товарам',
                            'value' => 'Характеристики добавлены с обновлением фото/описания',
                            'status' => 'Заблокированный',
                            'order' => 0,
                        ],
                        5 => [
                            'id' => 6,
                            'field_id' => 'Наличие фото к товарам',
                            'value' => 'Предоставлены продактом',
                            'status' => 'Активный',
                            'order' => 0,
                        ],
                        6 => [
                            'id' => 7,
                            'field_id' => 'Наличие фото к товарам',
                            'value' => 'Предоставлены продактом частично. Без дополнительного поиска.',
                            'status' => 'Активный',
                            'order' => 0,
                        ],
                        7 => [
                            'id' => 8,
                            'field_id' => 'Наличие фото к товарам',
                            'value' => 'Предоставлены продактом частично. С дополнительным поиском.',
                            'status' => 'Активный',
                            'order' => 0,
                        ],
                        8 => [
                            'id' => 9,
                            'field_id' => 'Наличие фото к товарам',
                            'value' => 'Не предоставлены продактом. Выполнен поиск.',
                            'status' => 'Активный',
                            'order' => 0,
                        ],
                        9 => [
                            'id' => 10,
                            'field_id' => 'Наличие фото к товарам',
                            'value' => 'Фото предоставлены фотостудией',
                            'status' => 'Заблокированный',
                            'order' => 0,
                        ],
                        10 => [
                            'id' => 11,
                            'field_id' => 'Наличие описаний к товарам',
                            'value' => 'Предоставлены продактом',
                            'status' => 'Активный',
                            'order' => 0,
                        ],
                        11 => [
                            'id' => 12,
                            'field_id' => 'Наличие описаний к товарам',
                            'value' => 'Предоставлены продактом частично. Без дополнительного поиска.',
                            'status' => 'Активный',
                            'order' => 0,
                        ],
                        12 => [
                            'id' => 13,
                            'field_id' => 'Наличие описаний к товарам',
                            'value' => 'Предоставлены продактом частично. С дополнительным поиском.',
                            'status' => 'Активный',
                            'order' => 0,
                        ],
                        13 => [
                            'id' => 14,
                            'field_id' => 'Наличие описаний к товарам',
                            'value' => 'Не предоставлены продактом. Выполнен поиск.',
                            'status' => 'Заблокированный',
                            'order' => 0,
                        ],
                        14 => [
                            'id' => 15,
                            'field_id' => 'Обработка фото',
                            'value' => 'Без обработки (только кадрирование)',
                            'status' => 'Активный',
                            'order' => 0,
                        ],
                        15 => [
                            'id' => 16,
                            'field_id' => 'Обработка фото',
                            'value' => 'Удаление теней/фона (простая обработка)',
                            'status' => 'Активный',
                            'order' => 0,
                        ],
                        16 => [
                            'id' => 17,
                            'field_id' => 'Обработка фото',
                            'value' => 'Удаление теней/фона/ватермарков/цветокорекция',
                            'status' => 'Заблокированный',
                            'order' => 0,
                        ],
                        17 => [
                            'id' => 18,
                            'field_id' => 'Уточнения. Количество уточнений у автора.',
                            'value' => 'Без уточнений',
                            'status' => 'Активный',
                            'order' => 0,
                        ],
                        18 => [
                            'id' => 19,
                            'field_id' => 'Уточнения. Количество уточнений у автора.',
                            'value' => 'Менее 5 уточнений',
                            'status' => 'Активный',
                            'order' => 0,
                        ],
                        19 => [
                            'id' => 20,
                            'field_id' => 'Уточнения. Количество уточнений у автора.',
                            'value' => 'Более 5 уточнений',
                            'status' => 'Заблокированный',
                            'order' => 0,
                        ],
                    ],
                    '_links' => [
                        'self' => [
                            'href' => 'http://lisa-api.docker/field-value/list?page=1',
                        ],
                        'first' => [
                            'href' => 'http://lisa-api.docker/field-value/list?page=1',
                        ],
                        'last' => [
                            'href' => 'http://lisa-api.docker/field-value/list?page=4',
                        ],
                        'next' => [
                            'href' => 'http://lisa-api.docker/field-value/list?page=2',
                        ],
                    ],
                    '_meta' => [
                        'totalCount' => 66,
                        'pageCount' => 4,
                        'currentPage' => 1,
                        'perPage' => 20,
                    ],
                ],
                'filters' => [
                ],
                'initialValues' => [
                    'fieldNames' => [
                        20 => 'Уровень сложности задачи',
                        21 => 'Наличие характеристик к товарам',
                        22 => 'Наличие фото к товарам',
                        23 => 'Наличие описаний к товарам',
                        24 => 'Обработка фото',
                        25 => 'Уточнения. Количество уточнений у автора.',
                        26 => 'Язык информации',
                        27 => 'Видео к товарам',
                        28 => 'Перенос информации при изменении структуры категории',
                        29 => 'Вид структуры',
                        30 => 'Сложность структуры',
                        31 => 'Группировка товаров (наличие варьируемых параметров)',
                        32 => 'Сложность группировки в заявках',
                    ],
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
                            'id' => 60,
                            'field_id' => 'Сложность группировки в заявках',
                            'value' => 'Отдельный список категорий (до 2-х категорий)',
                            'status' => 'Заблокированный',
                            'order' => 0,
                        ],
                        1 => [
                            'id' => 51,
                            'field_id' => 'Группировка товаров (наличие варьируемых параметров)',
                            'value' => 'Три варьируемых параметра',
                            'status' => 'Заблокированный',
                            'order' => 0,
                        ],
                        2 => [
                            'id' => 47,
                            'field_id' => 'Сложность структуры',
                            'value' => 'Сложные (физические + функциональные + технологические характеристики) несколько видов товара',
                            'status' => 'Заблокированный',
                            'order' => 0,
                        ],
                        3 => [
                            'id' => 38,
                            'field_id' => 'Вид структуры',
                            'value' => 'Существующие конечные категории + перенос информации',
                            'status' => 'Заблокированный',
                            'order' => 8,
                        ],
                        4 => [
                            'id' => 29,
                            'field_id' => 'Перенос информации при изменении структуры категории',
                            'value' => 'Перенос из названий товаров в выборы из списков',
                            'status' => 'Заблокированный',
                            'order' => 0,
                        ],
                        5 => [
                            'id' => 26,
                            'field_id' => 'Видео к товарам',
                            'value' => 'Предоставлено продактом, в плохом качестве (производился поиск)',
                            'status' => 'Заблокированный',
                            'order' => 0,
                        ],
                        6 => [
                            'id' => 23,
                            'field_id' => 'Язык информации',
                            'value' => 'Английский',
                            'status' => 'Заблокированный',
                            'order' => 0,
                        ],
                        7 => [
                            'id' => 20,
                            'field_id' => 'Уточнения. Количество уточнений у автора.',
                            'value' => 'Более 5 уточнений',
                            'status' => 'Заблокированный',
                            'order' => 0,
                        ],
                        8 => [
                            'id' => 17,
                            'field_id' => 'Обработка фото',
                            'value' => 'Удаление теней/фона/ватермарков/цветокорекция',
                            'status' => 'Заблокированный',
                            'order' => 0,
                        ],
                        9 => [
                            'id' => 14,
                            'field_id' => 'Наличие описаний к товарам',
                            'value' => 'Не предоставлены продактом. Выполнен поиск.',
                            'status' => 'Заблокированный',
                            'order' => 0,
                        ],
                        10 => [
                            'id' => 10,
                            'field_id' => 'Наличие фото к товарам',
                            'value' => 'Фото предоставлены фотостудией',
                            'status' => 'Заблокированный',
                            'order' => 0,
                        ],
                        11 => [
                            'id' => 5,
                            'field_id' => 'Наличие характеристик к товарам',
                            'value' => 'Характеристики добавлены с обновлением фото/описания',
                            'status' => 'Заблокированный',
                            'order' => 0,
                        ],
                    ],
                    '_links' => [
                        'self' => [
                            'href' => 'http://lisa-api.docker/field-value/list?filter%5Bstatus%5D=0&sort=-id&page=1',
                        ],
                        'first' => [
                            'href' => 'http://lisa-api.docker/field-value/list?filter%5Bstatus%5D=0&sort=-id&page=1',
                        ],
                        'last' => [
                            'href' => 'http://lisa-api.docker/field-value/list?filter%5Bstatus%5D=0&sort=-id&page=1',
                        ],
                    ],
                    '_meta' => [
                        'totalCount' => 12,
                        'pageCount' => 1,
                        'currentPage' => 1,
                        'perPage' => 20,
                    ],
                ],
                'filters' => [
                    'status' => '0',
                ],
                'initialValues' => [
                    'fieldNames' => [
                        20 => 'Уровень сложности задачи',
                        21 => 'Наличие характеристик к товарам',
                        22 => 'Наличие фото к товарам',
                        23 => 'Наличие описаний к товарам',
                        24 => 'Обработка фото',
                        25 => 'Уточнения. Количество уточнений у автора.',
                        26 => 'Язык информации',
                        27 => 'Видео к товарам',
                        28 => 'Перенос информации при изменении структуры категории',
                        29 => 'Вид структуры',
                        30 => 'Сложность структуры',
                        31 => 'Группировка товаров (наличие варьируемых параметров)',
                        32 => 'Сложность группировки в заявках',
                    ],
                ],
            ],
        ]
    ],

    'case3' => [
        'setting' => [
            'description' => 'Получить список значений с фильтром по статусу и полю',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestParameters' => [
                'filter[status]' => 1,
                'filter[field_id]' => 26,
            ],
            'responseBody' => [
                'data' => [
                    'models' => [
                        0 => [
                            'id' => 21,
                            'field_id' => 'Язык информации',
                            'value' => 'Русский',
                            'status' => 'Активный',
                            'order' => 0,
                        ],
                        1 => [
                            'id' => 22,
                            'field_id' => 'Язык информации',
                            'value' => 'Украинский',
                            'status' => 'Активный',
                            'order' => 0,
                        ],
                    ],
                    '_links' => [
                        'self' => [
                            'href' => 'http://lisa-api.docker/field-value/list?filter%5Bstatus%5D=1&filter%5Bfield_id%5D=26&page=1',
                        ],
                        'first' => [
                            'href' => 'http://lisa-api.docker/field-value/list?filter%5Bstatus%5D=1&filter%5Bfield_id%5D=26&page=1',
                        ],
                        'last' => [
                            'href' => 'http://lisa-api.docker/field-value/list?filter%5Bstatus%5D=1&filter%5Bfield_id%5D=26&page=1',
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
                    'field_id' => '26',
                ],
                'initialValues' => [
                    'fieldNames' => [
                        20 => 'Уровень сложности задачи',
                        21 => 'Наличие характеристик к товарам',
                        22 => 'Наличие фото к товарам',
                        23 => 'Наличие описаний к товарам',
                        24 => 'Обработка фото',
                        25 => 'Уточнения. Количество уточнений у автора.',
                        26 => 'Язык информации',
                        27 => 'Видео к товарам',
                        28 => 'Перенос информации при изменении структуры категории',
                        29 => 'Вид структуры',
                        30 => 'Сложность структуры',
                        31 => 'Группировка товаров (наличие варьируемых параметров)',
                        32 => 'Сложность группировки в заявках',
                    ],
                ],
            ],
        ]
    ],

    'case4' => [
        'setting' => [
            'description' => 'Получить список значений с сортировкой по статусу и фильтром по полю и значению',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestParameters' => [
                'filter[status]' => '',
                'filter[field_id]' => 22,
                'filter[value]' => 'пред',
                'sort' => 'status',
            ],
            'responseBody' => [
                'data' => [
                    'models' => [
                        0 => [
                            'id' => 10,
                            'field_id' => 'Наличие фото к товарам',
                            'value' => 'Фото предоставлены фотостудией',
                            'status' => 'Заблокированный',
                            'order' => 0,
                        ],
                        1 => [
                            'id' => 6,
                            'field_id' => 'Наличие фото к товарам',
                            'value' => 'Предоставлены продактом',
                            'status' => 'Активный',
                            'order' => 0,
                        ],
                        2 => [
                            'id' => 7,
                            'field_id' => 'Наличие фото к товарам',
                            'value' => 'Предоставлены продактом частично. Без дополнительного поиска.',
                            'status' => 'Активный',
                            'order' => 0,
                        ],
                        3 => [
                            'id' => 8,
                            'field_id' => 'Наличие фото к товарам',
                            'value' => 'Предоставлены продактом частично. С дополнительным поиском.',
                            'status' => 'Активный',
                            'order' => 0,
                        ],
                        4 => [
                            'id' => 9,
                            'field_id' => 'Наличие фото к товарам',
                            'value' => 'Не предоставлены продактом. Выполнен поиск.',
                            'status' => 'Активный',
                            'order' => 0,
                        ],
                    ],
                    '_links' => [
                        'self' => [
                            'href' => 'http://lisa-api.docker/field-value/list?filter%5Bstatus%5D=&filter%5Bfield_id%5D=22&filter%5Bvalue%5D=%D0%BF%D1%80%D0%B5%D0%B4&sort=status&page=1',
                        ],
                        'first' => [
                            'href' => 'http://lisa-api.docker/field-value/list?filter%5Bstatus%5D=&filter%5Bfield_id%5D=22&filter%5Bvalue%5D=%D0%BF%D1%80%D0%B5%D0%B4&sort=status&page=1',
                        ],
                        'last' => [
                            'href' => 'http://lisa-api.docker/field-value/list?filter%5Bstatus%5D=&filter%5Bfield_id%5D=22&filter%5Bvalue%5D=%D0%BF%D1%80%D0%B5%D0%B4&sort=status&page=1',
                        ],
                    ],
                    '_meta' => [
                        'totalCount' => 5,
                        'pageCount' => 1,
                        'currentPage' => 1,
                        'perPage' => 20,
                    ],
                ],
                'filters' => [
                    'status' => '',
                    'field_id' => '22',
                    'value' => 'пред',
                ],
                'initialValues' => [
                    'fieldNames' => [
                        20 => 'Уровень сложности задачи',
                        21 => 'Наличие характеристик к товарам',
                        22 => 'Наличие фото к товарам',
                        23 => 'Наличие описаний к товарам',
                        24 => 'Обработка фото',
                        25 => 'Уточнения. Количество уточнений у автора.',
                        26 => 'Язык информации',
                        27 => 'Видео к товарам',
                        28 => 'Перенос информации при изменении структуры категории',
                        29 => 'Вид структуры',
                        30 => 'Сложность структуры',
                        31 => 'Группировка товаров (наличие варьируемых параметров)',
                        32 => 'Сложность группировки в заявках',
                    ],
                ],
            ],
        ]
    ],

];
