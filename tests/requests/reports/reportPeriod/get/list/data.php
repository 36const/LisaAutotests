<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Получить список отчётных периодов',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestParameters' => [],
            'responseBody' => [
                'data' => [
                    'models' => [
                        0 => [
                            'id' => 1,
                            'begin' => '2021-01-01 00:00:00',
                            'end' => '2021-01-31 00:00:00',
                            'created_at' => '2021-01-01 00:00:00',
                            'updated_at' => NULL,
                        ],
                        1 => [
                            'id' => 2,
                            'begin' => '2021-02-01 00:00:00',
                            'end' => '2021-02-28 00:00:00',
                            'created_at' => '2021-01-01 00:00:00',
                            'updated_at' => NULL,
                        ],
                        2 => [
                            'id' => 3,
                            'begin' => '2021-03-01 00:00:00',
                            'end' => '2021-03-31 00:00:00',
                            'created_at' => '2021-02-01 00:00:00',
                            'updated_at' => '2021-07-01 17:01:01',
                        ],
                        3 => [
                            'id' => 4,
                            'begin' => '2021-04-01 00:00:00',
                            'end' => '2021-04-30 00:00:00',
                            'created_at' => '2021-03-01 00:00:00',
                            'updated_at' => '2021-09-01 19:01:01',
                        ],
                    ],
                    '_links' => [
                        'self' => [
                            'href' => 'http://lisa-api.docker/report-period/list?page=1',
                        ],
                        'first' => [
                            'href' => 'http://lisa-api.docker/report-period/list?page=1',
                        ],
                        'last' => [
                            'href' => 'http://lisa-api.docker/report-period/list?page=1',
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
                ],
            ]
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Получить список отчётных периодов с обратной сортировкой по id и фильтром по началу периода',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestParameters' => [
                'sort' => '-id',
                'filter[begin]' => '2021-02-01 00:00:00to2021-03-31 23:59:59',
            ],
            'responseBody' => [
                'data' => [
                    'models' => [
                        0 => [
                            'id' => 3,
                            'begin' => '2021-03-01 00:00:00',
                            'end' => '2021-03-31 00:00:00',
                            'created_at' => '2021-02-01 00:00:00',
                            'updated_at' => '2021-07-01 17:01:01',
                        ],
                        1 => [
                            'id' => 2,
                            'begin' => '2021-02-01 00:00:00',
                            'end' => '2021-02-28 00:00:00',
                            'created_at' => '2021-01-01 00:00:00',
                            'updated_at' => NULL,
                        ],
                    ],
                    '_links' => [
                        'self' => [
                            'href' => 'http://lisa-api.docker/report-period/list?sort=-id&filter%5Bbegin%5D=2021-02-01+00%3A00%3A00to2021-03-31+23%3A59%3A59&page=1',
                        ],
                        'first' => [
                            'href' => 'http://lisa-api.docker/report-period/list?sort=-id&filter%5Bbegin%5D=2021-02-01+00%3A00%3A00to2021-03-31+23%3A59%3A59&page=1',
                        ],
                        'last' => [
                            'href' => 'http://lisa-api.docker/report-period/list?sort=-id&filter%5Bbegin%5D=2021-02-01+00%3A00%3A00to2021-03-31+23%3A59%3A59&page=1',
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
                    'begin' => '2021-02-01 00:00:00to2021-03-31 23:59:59',
                ],
            ],
        ]
    ],

    'case3' => [
        'setting' => [
            'description' => 'Получить список отчётных периодов с сортировкой по дате создания и фильтром по концу периода',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestParameters' => [
                'sort' => 'created_at',
                'filter[end]' => '2021-03-01 00:00:00to2021-04-30 23:59:59',
            ],
            'responseBody' => [
                'data' => [
                    'models' => [
                        0 => [
                            'id' => 3,
                            'begin' => '2021-03-01 00:00:00',
                            'end' => '2021-03-31 00:00:00',
                            'created_at' => '2021-02-01 00:00:00',
                            'updated_at' => '2021-07-01 17:01:01',
                        ],
                        1 => [
                            'id' => 4,
                            'begin' => '2021-04-01 00:00:00',
                            'end' => '2021-04-30 00:00:00',
                            'created_at' => '2021-03-01 00:00:00',
                            'updated_at' => '2021-09-01 19:01:01',
                        ],
                    ],
                    '_links' => [
                        'self' => [
                            'href' => 'http://lisa-api.docker/report-period/list?sort=created_at&filter%5Bend%5D=2021-03-01+00%3A00%3A00to2021-04-30+23%3A59%3A59&page=1',
                        ],
                        'first' => [
                            'href' => 'http://lisa-api.docker/report-period/list?sort=created_at&filter%5Bend%5D=2021-03-01+00%3A00%3A00to2021-04-30+23%3A59%3A59&page=1',
                        ],
                        'last' => [
                            'href' => 'http://lisa-api.docker/report-period/list?sort=created_at&filter%5Bend%5D=2021-03-01+00%3A00%3A00to2021-04-30+23%3A59%3A59&page=1',
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
                    'end' => '2021-03-01 00:00:00to2021-04-30 23:59:59',
                ],
            ],
        ]
    ],

];
