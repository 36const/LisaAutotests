<?php

use lisa\RequestsTester;

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
                            'status' => NULL,
                        ],
                        3 => [
                            'owox_id' => 83,
                            'supervisor_id' => 'Супервайзер Начальникович 1',
                            'title' => 'Euromart',
                            'status' => 6,
                        ],
                        4 => [
                            'owox_id' => 9423,
                            'supervisor_id' => 'Супервайзер Начальникович 2',
                            'title' => 'anytech',
                            'status' => 6,
                        ],
                        5 => [
                            'owox_id' => 67757,
                            'supervisor_id' => 'Супервайзер Начальникович 2',
                            'title' => 'iTook',
                            'status' => 3,
                        ],
                    ],
                    '_links' => [
                        'self' => [
                            'href' => 'http://lisa.api/market-supervisor/list?page=1',
                        ],
                        'first' => [
                            'href' => 'http://lisa.api/market-supervisor/list?page=1',
                        ],
                        'last' => [
                            'href' => 'http://lisa.api/market-supervisor/list?page=1',
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
                    'userNames' => RequestsTester::USER_NAMES
                ]
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
                            'href' => 'http://lisa.api/market-supervisor/list?filter%5Bsupervisor_id%5D=5&sort=-owox_id&page=1',
                        ],
                        'first' => [
                            'href' => 'http://lisa.api/market-supervisor/list?filter%5Bsupervisor_id%5D=5&sort=-owox_id&page=1',
                        ],
                        'last' => [
                            'href' => 'http://lisa.api/market-supervisor/list?filter%5Bsupervisor_id%5D=5&sort=-owox_id&page=1',
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
                'initialValues' => [
                    'userNames' => RequestsTester::USER_NAMES
                ]
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
                            'owox_id' => 67757,
                            'supervisor_id' => 'Супервайзер Начальникович 2',
                            'title' => 'iTook',
                            'status' => 3,
                        ],
                        1 => [
                            'owox_id' => 9423,
                            'supervisor_id' => 'Супервайзер Начальникович 2',
                            'title' => 'anytech',
                            'status' => 6,
                        ],
                    ],
                    '_links' => [
                        'self' => [
                            'href' => 'http://lisa.api/market-supervisor/list?filter%5Btitle%5D=&filter%5Bsupervisor_id%5D=10&sort=-title&page=1',
                        ],
                        'first' => [
                            'href' => 'http://lisa.api/market-supervisor/list?filter%5Btitle%5D=&filter%5Bsupervisor_id%5D=10&sort=-title&page=1',
                        ],
                        'last' => [
                            'href' => 'http://lisa.api/market-supervisor/list?filter%5Btitle%5D=&filter%5Bsupervisor_id%5D=10&sort=-title&page=1',
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
                    'supervisor_id' => '10',
                ],
                'initialValues' => [
                    'userNames' => RequestsTester::USER_NAMES
                ]
            ],
        ]
    ],

];
