<?php

$reportPeriods = [
    [
        'id' => 1,
        'value' => '2020-01-01 - 2020-03-31',
    ],
    [
        'id' => 2,
        'value' => '2020-04-01 - 2020-06-30',
    ],
    [
        'id' => 3,
        'value' => '2020-07-01 - 2021-12-21',
    ],
    [
        'id' => 4,
        'value' => '2021-12-22 - 2021-12-31',
    ],
];

$fieldsList = [
    [
        'id' => 33,
        'name' => 'Ошибки в оформлении товаров',
    ],
    [
        'id' => 34,
        'name' => 'Ошибки в общих характеристиках товаров',
    ],
    [
        'id' => 35,
        'name' => 'Ошибки в характеристиках и описаниях товаров',
    ],
    [
        'id' => 36,
        'name' => 'Ошибки в группировке товаров',
    ],
    [
        'id' => 37,
        'name' => 'Ошибки в размещении товаров',
    ],
    [
        'id' => 38,
        'name' => 'Ошибки в особых правилах',
    ],
    [
        'id' => 39,
        'name' => 'Ошибки в стоп-брендах',
    ],
    [
        'id' => 40,
        'name' => 'Ошибки в редиректах',
    ],
    [
        'id' => 41,
        'name' => 'Ошибки в структурах категорий',
    ],
    [
        'id' => 42,
        'name' => 'Ошибки в портальных страницах',
    ],
    [
        'id' => 43,
        'name' => 'Ошибки в размерных сетках',
    ],
    [
        'id' => 44,
        'name' => 'Ошибки в тегах',
    ],
    [
        'id' => 45,
        'name' => 'Ошибки в значениях параметров и в производителях',
    ],
    [
        'id' => 46,
        'name' => 'Ошибки в видео к товарам',
    ],
    [
        'id' => 51,
        'name' => 'Рассчитанное количество проверенных товаров',
    ],
    [
        'id' => 60,
        'name' => 'Рассчитанное количество проверенных товаров с ошибками',
    ],
    [
        'id' => 65,
        'name' => 'Количество проверенных товаров',
    ],
    [
        'id' => 95,
        'name' => 'Количество групп с ошибками',
    ],
    [
        'id' => 102,
        'name' => 'Количество проверенных видео',
    ],
    [
        'id' => 103,
        'name' => 'Количество проверенных групп',
    ],
    [
        'id' => 104,
        'name' => 'Количество проверенных значений параметров',
    ],
    [
        'id' => 105,
        'name' => 'Количество проверенных категорий',
    ],
    [
        'id' => 106,
        'name' => 'Количество проверенных параметров',
    ],
    [
        'id' => 107,
        'name' => 'Количество проверенных порталов/точек входа в фат-меню',
    ],
    [
        'id' => 108,
        'name' => 'Количество проверенных размерных сеток',
    ],
    [
        'id' => 109,
        'name' => 'Количество проверенных редиректов',
    ],
    [
        'id' => 117,
        'name' => 'Количество проверенных тегов',
    ],
    [
        'id' => 101,
        'name' => 'Общее количество ошибок',
    ],
    [
        'id' => 122,
        'name' => 'Общее количество товаров с ошибками',
    ],
    [
        'id' => 128,
        'name' => 'Ошибки в оформлении товаров (Кросс-чек)',
    ],
    [
        'id' => 129,
        'name' => 'Ошибки в общих характеристиках товаров (Кросс-чек)',
    ],
    [
        'id' => 130,
        'name' => 'Ошибки в характеристиках и описаниях товаров (Кросс-чек)',
    ],
    [
        'id' => 131,
        'name' => 'Ошибки в группировке товаров (Кросс-чек)',
    ],
    [
        'id' => 132,
        'name' => 'Ошибки в размещении товаров (Кросс-чек)',
    ],
    [
        'id' => 133,
        'name' => 'Ошибки в особых правилах (Кросс-чек)',
    ],
    [
        'id' => 134,
        'name' => 'Ошибки в стоп-брендах (Кросс-чек)',
    ],
    [
        'id' => 135,
        'name' => 'Ошибки в редиректах (Кросс-чек)',
    ],
    [
        'id' => 136,
        'name' => 'Ошибки в структурах категорий (Кросс-чек)',
    ],
    [
        'id' => 137,
        'name' => 'Ошибки в портальных страницах (Кросс-чек)',
    ],
    [
        'id' => 138,
        'name' => 'Ошибки в размерных сетках (Кросс-чек)',
    ],
    [
        'id' => 139,
        'name' => 'Ошибки в тегах (Кросс-чек)',
    ],
    [
        'id' => 140,
        'name' => 'Ошибки в значениях параметров и в производителях (Кросс-чек)',
    ],
    [
        'id' => 141,
        'name' => 'Ошибки в видео к товарам (Кросс-чек)',
    ],
];

return [
    'case1' => [
        'setting' => [
            'description' => 'Получить список зафиксированных данных по СВ',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestParameters' => [],
            'responseBody' => [
                'data' => [
                    'models' => [
                        0 => [
                            'report_period_id' => '2020-07-01 - 2021-12-21',
                            'request_id' => 11,
                            'field_id' => 'Ошибки в оформлении товаров',
                            'value' => 20,
                            'supervisor_id' => 'Супервайзер Руководько 1',
                        ],
                        1 => [
                            'report_period_id' => '2020-07-01 - 2021-12-21',
                            'request_id' => 11,
                            'field_id' => 'Ошибки в группировке товаров',
                            'value' => 20,
                            'supervisor_id' => 'Супервайзер Руководько 1',
                        ],
                        2 => [
                            'report_period_id' => '2020-07-01 - 2021-12-21',
                            'request_id' => 11,
                            'field_id' => 'Ошибки в размещении товаров',
                            'value' => 30,
                            'supervisor_id' => 'Супервайзер Руководько 1',
                        ],
                        3 => [
                            'report_period_id' => '2020-07-01 - 2021-12-21',
                            'request_id' => 12,
                            'field_id' => 'Ошибки в характеристиках и описаниях товаров',
                            'value' => 30,
                            'supervisor_id' => 'Супервайзер Начальникович 2',
                        ],
                        4 => [
                            'report_period_id' => '2020-07-01 - 2021-12-21',
                            'request_id' => 12,
                            'field_id' => 'Общее количество ошибок',
                            'value' => 100,
                            'supervisor_id' => 'Супервайзер Начальникович 2',
                        ],
                        5 => [
                            'report_period_id' => '2020-07-01 - 2021-12-21',
                            'request_id' => 12,
                            'field_id' => 'Общее количество товаров с ошибками',
                            'value' => 100,
                            'supervisor_id' => 'Супервайзер Начальникович 2',
                        ],
                        6 => [
                            'report_period_id' => '2020-07-01 - 2021-12-21',
                            'request_id' => 12,
                            'field_id' => 'Рассчитанное количество проверенных товаров',
                            'value' => 60,
                            'supervisor_id' => 'Супервайзер Начальникович 2',
                        ],
                        7 => [
                            'report_period_id' => '2020-07-01 - 2021-12-21',
                            'request_id' => 12,
                            'field_id' => 'Рассчитанное количество проверенных товаров с ошибками',
                            'value' => 300,
                            'supervisor_id' => 'Супервайзер Начальникович 2',
                        ],
                        8 => [
                            'report_period_id' => '2020-07-01 - 2021-12-21',
                            'request_id' => 12,
                            'field_id' => 'Количество проверенных товаров',
                            'value' => 20,
                            'supervisor_id' => 'Супервайзер Начальникович 2',
                        ],
                        9 => [
                            'report_period_id' => '2021-12-22 - 2021-12-31',
                            'request_id' => 12,
                            'field_id' => 'Ошибки в группировке товаров',
                            'value' => 20,
                            'supervisor_id' => 'Супервайзер Начальникович 2',
                        ],
                        10 => [
                            'report_period_id' => '2021-12-22 - 2021-12-31',
                            'request_id' => 12,
                            'field_id' => 'Ошибки в оформлении товаров',
                            'value' => 20,
                            'supervisor_id' => 'Супервайзер Начальникович 2',
                        ],
                        11 => [
                            'report_period_id' => '2021-12-22 - 2021-12-31',
                            'request_id' => 12,
                            'field_id' => 'Ошибки в размещении товаров',
                            'value' => 60,
                            'supervisor_id' => 'Супервайзер Начальникович 2',
                        ],
                        12 => [
                            'report_period_id' => '2021-12-22 - 2021-12-31',
                            'request_id' => 11,
                            'field_id' => 'Ошибки в стоп-брендах',
                            'value' => 30,
                            'supervisor_id' => 'Супервайзер Руководько 1',
                        ],
                        13 => [
                            'report_period_id' => '2021-12-22 - 2021-12-31',
                            'request_id' => 11,
                            'field_id' => 'Ошибки в характеристиках и описаниях товаров',
                            'value' => 60,
                            'supervisor_id' => 'Супервайзер Руководько 1',
                        ],
                        14 => [
                            'report_period_id' => '2021-12-22 - 2021-12-31',
                            'request_id' => 11,
                            'field_id' => 'Общее количество ошибок',
                            'value' => 190,
                            'supervisor_id' => 'Супервайзер Руководько 1',
                        ],
                        15 => [
                            'report_period_id' => '2021-12-22 - 2021-12-31',
                            'request_id' => 11,
                            'field_id' => 'Общее количество товаров с ошибками',
                            'value' => 190,
                            'supervisor_id' => 'Супервайзер Руководько 1',
                        ],
                        16 => [
                            'report_period_id' => '2021-12-22 - 2021-12-31',
                            'request_id' => 11,
                            'field_id' => 'Рассчитанное количество проверенных товаров',
                            'value' => 90,
                            'supervisor_id' => 'Супервайзер Руководько 1',
                        ],
                        17 => [
                            'report_period_id' => '2021-12-22 - 2021-12-31',
                            'request_id' => 11,
                            'field_id' => 'Рассчитанное количество проверенных товаров с ошибками',
                            'value' => 570,
                            'supervisor_id' => 'Супервайзер Руководько 1',
                        ],
                        18 => [
                            'report_period_id' => '2021-12-22 - 2021-12-31',
                            'request_id' => 11,
                            'field_id' => 'Количество проверенных товаров',
                            'value' => 30,
                            'supervisor_id' => 'Супервайзер Руководько 1',
                        ],
                    ],
                    '_links' => [
                        'self' => [
                            'href' => 'http://lisa-api.docker/report/fixate?page=1',
                        ],
                        'first' => [
                            'href' => 'http://lisa-api.docker/report/fixate?page=1',
                        ],
                        'last' => [
                            'href' => 'http://lisa-api.docker/report/fixate?page=1',
                        ],
                    ],
                    '_meta' => [
                        'totalCount' => 19,
                        'pageCount' => 1,
                        'currentPage' => 1,
                        'perPage' => 20,
                    ],
                ],
                'reportPeriods' => $reportPeriods,
                'fieldsList' => $fieldsList,
                'filters' => [
                ],
            ],
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Получить список зафиксированных данных по СВ с фильтром по периоду и сортировкой по полю',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestParameters' => [
                'filter[report_period_id]' => 4,
                'sort' => 'field_id',
            ],
            'responseBody' => [
                'data' => [
                    'models' => [
                        0 => [
                            'report_period_id' => '2021-12-22 - 2021-12-31',
                            'request_id' => 12,
                            'field_id' => 'Ошибки в оформлении товаров',
                            'value' => 20,
                            'supervisor_id' => 'Супервайзер Начальникович 2',
                        ],
                        1 => [
                            'report_period_id' => '2021-12-22 - 2021-12-31',
                            'request_id' => 11,
                            'field_id' => 'Ошибки в характеристиках и описаниях товаров',
                            'value' => 60,
                            'supervisor_id' => 'Супервайзер Руководько 1',
                        ],
                        2 => [
                            'report_period_id' => '2021-12-22 - 2021-12-31',
                            'request_id' => 12,
                            'field_id' => 'Ошибки в группировке товаров',
                            'value' => 20,
                            'supervisor_id' => 'Супервайзер Начальникович 2',
                        ],
                        3 => [
                            'report_period_id' => '2021-12-22 - 2021-12-31',
                            'request_id' => 12,
                            'field_id' => 'Ошибки в размещении товаров',
                            'value' => 60,
                            'supervisor_id' => 'Супервайзер Начальникович 2',
                        ],
                        4 => [
                            'report_period_id' => '2021-12-22 - 2021-12-31',
                            'request_id' => 11,
                            'field_id' => 'Ошибки в стоп-брендах',
                            'value' => 30,
                            'supervisor_id' => 'Супервайзер Руководько 1',
                        ],
                        5 => [
                            'report_period_id' => '2021-12-22 - 2021-12-31',
                            'request_id' => 11,
                            'field_id' => 'Рассчитанное количество проверенных товаров',
                            'value' => 90,
                            'supervisor_id' => 'Супервайзер Руководько 1',
                        ],
                        6 => [
                            'report_period_id' => '2021-12-22 - 2021-12-31',
                            'request_id' => 11,
                            'field_id' => 'Рассчитанное количество проверенных товаров с ошибками',
                            'value' => 570,
                            'supervisor_id' => 'Супервайзер Руководько 1',
                        ],
                        7 => [
                            'report_period_id' => '2021-12-22 - 2021-12-31',
                            'request_id' => 11,
                            'field_id' => 'Количество проверенных товаров',
                            'value' => 30,
                            'supervisor_id' => 'Супервайзер Руководько 1',
                        ],
                        8 => [
                            'report_period_id' => '2021-12-22 - 2021-12-31',
                            'request_id' => 11,
                            'field_id' => 'Общее количество ошибок',
                            'value' => 190,
                            'supervisor_id' => 'Супервайзер Руководько 1',
                        ],
                        9 => [
                            'report_period_id' => '2021-12-22 - 2021-12-31',
                            'request_id' => 11,
                            'field_id' => 'Общее количество товаров с ошибками',
                            'value' => 190,
                            'supervisor_id' => 'Супервайзер Руководько 1',
                        ],
                    ],
                    '_links' => [
                        'self' => [
                            'href' => 'http://lisa-api.docker/report/fixate?filter%5Breport_period_id%5D=4&sort=field_id&page=1',
                        ],
                        'first' => [
                            'href' => 'http://lisa-api.docker/report/fixate?filter%5Breport_period_id%5D=4&sort=field_id&page=1',
                        ],
                        'last' => [
                            'href' => 'http://lisa-api.docker/report/fixate?filter%5Breport_period_id%5D=4&sort=field_id&page=1',
                        ],
                    ],
                    '_meta' => [
                        'totalCount' => 10,
                        'pageCount' => 1,
                        'currentPage' => 1,
                        'perPage' => 20,
                    ],
                ],
                'reportPeriods' => $reportPeriods,
                'fieldsList' => $fieldsList,
                'filters' => [
                    'report_period_id' => '4',
                ],
            ],
        ]
    ],

    'case3' => [
        'setting' => [
            'description' => 'Получить список зафиксированных данных по СВ с фильтром по номеру заявки и сортировкой по значению',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestParameters' => [
                'filter[report_period_id]' => '',
                'filter[request_id]' => 11,
                'sort' => '-value',
            ],
            'responseBody' => [
                'data' => [
                    'models' => [
                        0 => [
                            'report_period_id' => '2021-12-22 - 2021-12-31',
                            'request_id' => 11,
                            'field_id' => 'Рассчитанное количество проверенных товаров с ошибками',
                            'value' => 570,
                            'supervisor_id' => 'Супервайзер Руководько 1',
                        ],
                        1 => [
                            'report_period_id' => '2021-12-22 - 2021-12-31',
                            'request_id' => 11,
                            'field_id' => 'Общее количество ошибок',
                            'value' => 190,
                            'supervisor_id' => 'Супервайзер Руководько 1',
                        ],
                        2 => [
                            'report_period_id' => '2021-12-22 - 2021-12-31',
                            'request_id' => 11,
                            'field_id' => 'Общее количество товаров с ошибками',
                            'value' => 190,
                            'supervisor_id' => 'Супервайзер Руководько 1',
                        ],
                        3 => [
                            'report_period_id' => '2021-12-22 - 2021-12-31',
                            'request_id' => 11,
                            'field_id' => 'Рассчитанное количество проверенных товаров',
                            'value' => 90,
                            'supervisor_id' => 'Супервайзер Руководько 1',
                        ],
                        4 => [
                            'report_period_id' => '2021-12-22 - 2021-12-31',
                            'request_id' => 11,
                            'field_id' => 'Ошибки в характеристиках и описаниях товаров',
                            'value' => 60,
                            'supervisor_id' => 'Супервайзер Руководько 1',
                        ],
                        5 => [
                            'report_period_id' => '2021-12-22 - 2021-12-31',
                            'request_id' => 11,
                            'field_id' => 'Количество проверенных товаров',
                            'value' => 30,
                            'supervisor_id' => 'Супервайзер Руководько 1',
                        ],
                        6 => [
                            'report_period_id' => '2020-07-01 - 2021-12-21',
                            'request_id' => 11,
                            'field_id' => 'Ошибки в размещении товаров',
                            'value' => 30,
                            'supervisor_id' => 'Супервайзер Руководько 1',
                        ],
                        7 => [
                            'report_period_id' => '2021-12-22 - 2021-12-31',
                            'request_id' => 11,
                            'field_id' => 'Ошибки в стоп-брендах',
                            'value' => 30,
                            'supervisor_id' => 'Супервайзер Руководько 1',
                        ],
                        8 => [
                            'report_period_id' => '2020-07-01 - 2021-12-21',
                            'request_id' => 11,
                            'field_id' => 'Ошибки в группировке товаров',
                            'value' => 20,
                            'supervisor_id' => 'Супервайзер Руководько 1',
                        ],
                        9 => [
                            'report_period_id' => '2020-07-01 - 2021-12-21',
                            'request_id' => 11,
                            'field_id' => 'Ошибки в оформлении товаров',
                            'value' => 20,
                            'supervisor_id' => 'Супервайзер Руководько 1',
                        ],
                    ],
                    '_links' => [
                        'self' => [
                            'href' => 'http://lisa-api.docker/report/fixate?filter%5Breport_period_id%5D=&filter%5Brequest_id%5D=11&sort=-value&page=1',
                        ],
                        'first' => [
                            'href' => 'http://lisa-api.docker/report/fixate?filter%5Breport_period_id%5D=&filter%5Brequest_id%5D=11&sort=-value&page=1',
                        ],
                        'last' => [
                            'href' => 'http://lisa-api.docker/report/fixate?filter%5Breport_period_id%5D=&filter%5Brequest_id%5D=11&sort=-value&page=1',
                        ],
                    ],
                    '_meta' => [
                        'totalCount' => 10,
                        'pageCount' => 1,
                        'currentPage' => 1,
                        'perPage' => 20,
                    ],
                ],
                'reportPeriods' => $reportPeriods,
                'fieldsList' => $fieldsList,
                'filters' => [
                    'report_period_id' => '',
                    'request_id' => '11',
                ],
            ],
        ]
    ],

    'case4' => [
        'setting' => [
            'description' => 'Получить список зафиксированных данных по СВ с фильтром по СВ и сортировкой по периоду',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestParameters' => [
                'filter[report_period_id]' => '',
                'filter[request_id]' => '',
                'filter[supervisor_id]' => 10,
                'sort' => '-report_period_id',
            ],
            'responseBody' => [
                'data' => [
                    'models' => [
                        0 => [
                            'report_period_id' => '2021-12-22 - 2021-12-31',
                            'request_id' => 12,
                            'field_id' => 'Ошибки в группировке товаров',
                            'value' => 20,
                            'supervisor_id' => 'Супервайзер Начальникович 2',
                        ],
                        1 => [
                            'report_period_id' => '2021-12-22 - 2021-12-31',
                            'request_id' => 12,
                            'field_id' => 'Ошибки в оформлении товаров',
                            'value' => 20,
                            'supervisor_id' => 'Супервайзер Начальникович 2',
                        ],
                        2 => [
                            'report_period_id' => '2021-12-22 - 2021-12-31',
                            'request_id' => 12,
                            'field_id' => 'Ошибки в размещении товаров',
                            'value' => 60,
                            'supervisor_id' => 'Супервайзер Начальникович 2',
                        ],
                        3 => [
                            'report_period_id' => '2020-07-01 - 2021-12-21',
                            'request_id' => 12,
                            'field_id' => 'Рассчитанное количество проверенных товаров',
                            'value' => 60,
                            'supervisor_id' => 'Супервайзер Начальникович 2',
                        ],
                        4 => [
                            'report_period_id' => '2020-07-01 - 2021-12-21',
                            'request_id' => 12,
                            'field_id' => 'Ошибки в характеристиках и описаниях товаров',
                            'value' => 30,
                            'supervisor_id' => 'Супервайзер Начальникович 2',
                        ],
                        5 => [
                            'report_period_id' => '2020-07-01 - 2021-12-21',
                            'request_id' => 12,
                            'field_id' => 'Количество проверенных товаров',
                            'value' => 20,
                            'supervisor_id' => 'Супервайзер Начальникович 2',
                        ],
                        6 => [
                            'report_period_id' => '2020-07-01 - 2021-12-21',
                            'request_id' => 12,
                            'field_id' => 'Рассчитанное количество проверенных товаров с ошибками',
                            'value' => 300,
                            'supervisor_id' => 'Супервайзер Начальникович 2',
                        ],
                        7 => [
                            'report_period_id' => '2020-07-01 - 2021-12-21',
                            'request_id' => 12,
                            'field_id' => 'Общее количество ошибок',
                            'value' => 100,
                            'supervisor_id' => 'Супервайзер Начальникович 2',
                        ],
                        8 => [
                            'report_period_id' => '2020-07-01 - 2021-12-21',
                            'request_id' => 12,
                            'field_id' => 'Общее количество товаров с ошибками',
                            'value' => 100,
                            'supervisor_id' => 'Супервайзер Начальникович 2',
                        ],
                    ],
                    '_links' => [
                        'self' => [
                            'href' => 'http://lisa-api.docker/report/fixate?filter%5Breport_period_id%5D=&filter%5Brequest_id%5D=&filter%5Bsupervisor_id%5D=10&sort=-report_period_id&page=1',
                        ],
                        'first' => [
                            'href' => 'http://lisa-api.docker/report/fixate?filter%5Breport_period_id%5D=&filter%5Brequest_id%5D=&filter%5Bsupervisor_id%5D=10&sort=-report_period_id&page=1',
                        ],
                        'last' => [
                            'href' => 'http://lisa-api.docker/report/fixate?filter%5Breport_period_id%5D=&filter%5Brequest_id%5D=&filter%5Bsupervisor_id%5D=10&sort=-report_period_id&page=1',
                        ],
                    ],
                    '_meta' => [
                        'totalCount' => 9,
                        'pageCount' => 1,
                        'currentPage' => 1,
                        'perPage' => 20,
                    ],
                ],
                'reportPeriods' => $reportPeriods,
                'fieldsList' => $fieldsList,
                'filters' => [
                    'report_period_id' => '',
                    'request_id' => '',
                    'supervisor_id' => '10',
                ],
            ],
        ]
    ],


];
