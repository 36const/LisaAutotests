<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Получить список приоритетов',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestParameters' => [],
            'responseBody' => [
                'data' => [
                    'models' => [
                        0 => [
                            'id' => 1,
                            'name' => 'Информация необходима для склада',
                            'status' => 'Активный',
                        ],
                        1 => [
                            'id' => 2,
                            'name' => 'Товар-новинка/эксклюзив (трафикообразующий)',
                            'status' => 'Активный',
                        ],
                        2 => [
                            'id' => 3,
                            'name' => 'Исправление критичной ошибки',
                            'status' => 'Заблокированный',
                        ],
                    ],
                    '_links' => [
                        'self' => [
                            'href' => 'http://lisa.api/priority/list?page=1',
                        ],
                        'first' => [
                            'href' => 'http://lisa.api/priority/list?page=1',
                        ],
                        'last' => [
                            'href' => 'http://lisa.api/priority/list?page=1',
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
            ]
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Получить список приоритетов с обратной сортировкой по id и фильтром по названию',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestParameters' => [
                'sort' => '-id',
                'filter[name]' => 'об',
                'filter[status]' => '',
            ],
            'responseBody' => [
                'data' => [
                    'models' => [
                        0 => [
                            'id' => 2,
                            'name' => 'Товар-новинка/эксклюзив (трафикообразующий)',
                            'status' => 'Активный',
                        ],
                        1 => [
                            'id' => 1,
                            'name' => 'Информация необходима для склада',
                            'status' => 'Активный',
                        ],
                    ],
                    '_links' => [
                        'self' => [
                            'href' => 'http://lisa.api/priority/list?sort=-id&filter%5Bname%5D=%D0%BE%D0%B1&filter%5Bstatus%5D=&page=1',
                        ],
                        'first' => [
                            'href' => 'http://lisa.api/priority/list?sort=-id&filter%5Bname%5D=%D0%BE%D0%B1&filter%5Bstatus%5D=&page=1',
                        ],
                        'last' => [
                            'href' => 'http://lisa.api/priority/list?sort=-id&filter%5Bname%5D=%D0%BE%D0%B1&filter%5Bstatus%5D=&page=1',
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
                    'name' => 'об',
                    'status' => '',
                ],
            ],
        ]
    ],

    'case3' => [
        'setting' => [
            'description' => 'Получить список приоритетов с сортировкой по названию и фильтром по статусу',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestParameters' => [
                'filter[status]' => 1,
                'sort' => 'name',
            ],
            'responseBody' => [
                'data' => [
                    'models' => [
                        0 => [
                            'id' => 1,
                            'name' => 'Информация необходима для склада',
                            'status' => 'Активный',
                        ],
                        1 => [
                            'id' => 2,
                            'name' => 'Товар-новинка/эксклюзив (трафикообразующий)',
                            'status' => 'Активный',
                        ],
                    ],
                    '_links' => [
                        'self' => [
                            'href' => 'http://lisa.api/priority/list?filter%5Bstatus%5D=1&sort=name&page=1',
                        ],
                        'first' => [
                            'href' => 'http://lisa.api/priority/list?filter%5Bstatus%5D=1&sort=name&page=1',
                        ],
                        'last' => [
                            'href' => 'http://lisa.api/priority/list?filter%5Bstatus%5D=1&sort=name&page=1',
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
                ],
            ],
        ]
    ],

];
