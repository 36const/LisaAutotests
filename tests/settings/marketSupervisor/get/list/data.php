<?php

use lisa\Constants;

$initialValues = [
    'statusNames' => [
        'Подготовительный',
        'Требует Верификации',
        'Заблокирован',
        'Приостановлен',
        'Отключен',
        'Верифицирован',
        'Активный',
        'Проблемный',
    ],
];

return [
    'case1' => [
        'setting' => [
            'description' => 'Получить список магазинов',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestParameters' => [],
            'responseBody' => [
                'data' => [
                    'models' => [
                        0 => [
                            'owox_id' => -2,
                            'supervisor_id' => 'Супервайзер Руководько 1',
                            'title' => 'Все продавцы',
                            'status' => NULL,
                        ],
                        1 => [
                            'owox_id' => 0,
                            'supervisor_id' => 'Супервайзер Руководько 1',
                            'title' => 'Маркетплейс (общий)',
                            'status' => NULL,
                        ],
                        2 => [
                            'owox_id' => 5,
                            'supervisor_id' => 'Супервайзер Начальникович 1',
                            'title' => 'Rozetka',
                            'status' => 'Подготовительный',
                        ],
                        3 => [
                            'owox_id' => 83,
                            'supervisor_id' => 'Супервайзер Начальникович 1',
                            'title' => 'Euromart',
                            'status' => 'Активный',
                        ],
                        4 => [
                            'owox_id' => 9423,
                            'supervisor_id' => 'Супервайзер Начальникович 2',
                            'title' => 'anytech',
                            'status' => 'Активный',
                        ],
                        5 => [
                            'owox_id' => 67757,
                            'supervisor_id' => 'Супервайзер Начальникович 2',
                            'title' => 'iTook',
                            'status' => 'Заблокирован',
                        ],
                        6 => [
                            'owox_id' => 72141,
                            'supervisor_id' => 'Супервайзер Начальникович 2',
                            'title' => 'Rozetka.md',
                            'status' => 'Приостановлен',
                        ],
                        7 => [
                            'owox_id' => 128603,
                            'supervisor_id' => 'Супервайзер Начальникович 2',
                            'title' => 'RozetkaEU',
                            'status' => 'Верифицирован',
                        ],
                        8 => [
                            'owox_id' => 124276,
                            'supervisor_id' => 'Супервайзер Начальникович 2',
                            'title' => 'Rozetka.uz',
                            'status' => 'Проблемный',
                        ],
                    ],
                    '_links' => [
                        'self' => [
                            'href' => 'http://lisa-api.docker/market-supervisor/list?page=1',
                        ],
                        'first' => [
                            'href' => 'http://lisa-api.docker/market-supervisor/list?page=1',
                        ],
                        'last' => [
                            'href' => 'http://lisa-api.docker/market-supervisor/list?page=1',
                        ],
                    ],
                    '_meta' => [
                        'totalCount' => 9,
                        'pageCount' => 1,
                        'currentPage' => 1,
                        'perPage' => 20,
                    ],
                ],
                'filters' => [
                ],
                'initialValues' => $initialValues
            ]
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Получить список магазинов с обратной сортировкой по owox_id и фильтром по супервайзеру',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestParameters' => [
                'filter[supervisor_id]' => 5,
                'sort' => '-owox_id',
            ],
            'responseBody' => [
                'data' => [
                    'models' => [
                        0 => [
                            'owox_id' => 0,
                            'supervisor_id' => 'Супервайзер Руководько 1',
                            'title' => 'Маркетплейс (общий)',
                            'status' => NULL,
                        ],
                        1 => [
                            'owox_id' => -2,
                            'supervisor_id' => 'Супервайзер Руководько 1',
                            'title' => 'Все продавцы',
                            'status' => NULL,
                        ],
                    ],
                    '_links' => [
                        'self' => [
                            'href' => 'http://lisa-api.docker/market-supervisor/list?filter%5Bsupervisor_id%5D=5&sort=-owox_id&page=1',
                        ],
                        'first' => [
                            'href' => 'http://lisa-api.docker/market-supervisor/list?filter%5Bsupervisor_id%5D=5&sort=-owox_id&page=1',
                        ],
                        'last' => [
                            'href' => 'http://lisa-api.docker/market-supervisor/list?filter%5Bsupervisor_id%5D=5&sort=-owox_id&page=1',
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
                    'supervisor_id' => '5',
                ],
                'initialValues' => $initialValues
            ],
        ]
    ],

    'case3' => [
        'setting' => [
            'description' => 'Получить список магазинов с обратной сортировкой по названию и фильтром по супервайзеру',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestParameters' => [
                'filter[title]' => '',
                'filter[supervisor_id]' => 10,
                'sort' => '-title',
            ],
            'responseBody' => [
                'data' => [
                    'models' => [
                        0 => [
                            'owox_id' => 124276,
                            'supervisor_id' => 'Супервайзер Начальникович 2',
                            'title' => 'Rozetka.uz',
                            'status' => 'Проблемный',
                        ],
                        1 => [
                            'owox_id' => 72141,
                            'supervisor_id' => 'Супервайзер Начальникович 2',
                            'title' => 'Rozetka.md',
                            'status' => 'Приостановлен',
                        ],
                        2 => [
                            'owox_id' => 128603,
                            'supervisor_id' => 'Супервайзер Начальникович 2',
                            'title' => 'RozetkaEU',
                            'status' => 'Верифицирован',
                        ],
                        3 => [
                            'owox_id' => 67757,
                            'supervisor_id' => 'Супервайзер Начальникович 2',
                            'title' => 'iTook',
                            'status' => 'Заблокирован',
                        ],
                        4 => [
                            'owox_id' => 9423,
                            'supervisor_id' => 'Супервайзер Начальникович 2',
                            'title' => 'anytech',
                            'status' => 'Активный',
                        ],
                    ],
                    '_links' => [
                        'self' => [
                            'href' => 'http://lisa-api.docker/market-supervisor/list?filter%5Btitle%5D=&filter%5Bsupervisor_id%5D=10&sort=-title&page=1',
                        ],
                        'first' => [
                            'href' => 'http://lisa-api.docker/market-supervisor/list?filter%5Btitle%5D=&filter%5Bsupervisor_id%5D=10&sort=-title&page=1',
                        ],
                        'last' => [
                            'href' => 'http://lisa-api.docker/market-supervisor/list?filter%5Btitle%5D=&filter%5Bsupervisor_id%5D=10&sort=-title&page=1',
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
                    'title' => '',
                    'supervisor_id' => '10',
                ],
                'initialValues' => $initialValues
            ],
        ]
    ],

    'case4' => [
        'setting' => [
            'description' => 'Получить список магазинов с сортировкой по супервайзеру и фильтром по статусу',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestParameters' => [
                'filter[status]' => 6,
                'sort' => 'supervisor_id',
            ],
            'responseBody' => [
                'data' => [
                    'models' => [
                        0 => [
                            'owox_id' => 83,
                            'supervisor_id' => 'Супервайзер Начальникович 1',
                            'title' => 'Euromart',
                            'status' => 'Активный',
                        ],
                        1 => [
                            'owox_id' => 9423,
                            'supervisor_id' => 'Супервайзер Начальникович 2',
                            'title' => 'anytech',
                            'status' => 'Активный',
                        ],
                    ],
                    '_links' => [
                        'self' => [
                            'href' => 'http://lisa-api.docker/market-supervisor/list?filter%5Bstatus%5D=6&sort=supervisor_id&page=1',
                        ],
                        'first' => [
                            'href' => 'http://lisa-api.docker/market-supervisor/list?filter%5Bstatus%5D=6&sort=supervisor_id&page=1',
                        ],
                        'last' => [
                            'href' => 'http://lisa-api.docker/market-supervisor/list?filter%5Bstatus%5D=6&sort=supervisor_id&page=1',
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
                    'status' => '6',
                ],
                'initialValues' => $initialValues
            ],
        ]
    ],

    'case5' => [
        'setting' => [
            'description' => 'Получить список магазинов с сортировкой по супервайзеру и фильтром по названию магазина',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestParameters' => [
                'filter[title]' => 'ro',
                'sort' => 'supervisor_id',
            ],
            'responseBody' => [
                'data' => [
                    'models' => [
                        0 => [
                            'owox_id' => 5,
                            'supervisor_id' => 'Супервайзер Начальникович 1',
                            'title' => 'Rozetka',
                            'status' => 'Подготовительный',
                        ],
                        1 => [
                            'owox_id' => 83,
                            'supervisor_id' => 'Супервайзер Начальникович 1',
                            'title' => 'Euromart',
                            'status' => 'Активный',
                        ],
                        2 => [
                            'owox_id' => 72141,
                            'supervisor_id' => 'Супервайзер Начальникович 2',
                            'title' => 'Rozetka.md',
                            'status' => 'Приостановлен',
                        ],
                        3 => [
                            'owox_id' => 128603,
                            'supervisor_id' => 'Супервайзер Начальникович 2',
                            'title' => 'RozetkaEU',
                            'status' => 'Верифицирован',
                        ],
                        4 => [
                            'owox_id' => 124276,
                            'supervisor_id' => 'Супервайзер Начальникович 2',
                            'title' => 'Rozetka.uz',
                            'status' => 'Проблемный',
                        ],
                    ],
                    '_links' => [
                        'self' => [
                            'href' => 'http://lisa-api.docker/market-supervisor/list?filter%5Btitle%5D=ro&sort=supervisor_id&page=1',
                        ],
                        'first' => [
                            'href' => 'http://lisa-api.docker/market-supervisor/list?filter%5Btitle%5D=ro&sort=supervisor_id&page=1',
                        ],
                        'last' => [
                            'href' => 'http://lisa-api.docker/market-supervisor/list?filter%5Btitle%5D=ro&sort=supervisor_id&page=1',
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
                    'title' => 'ro',
                ],
                'initialValues' => $initialValues,
            ],
        ]
    ],

];
