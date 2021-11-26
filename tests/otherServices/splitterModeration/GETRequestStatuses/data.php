<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'По одной существующей заявке в каждом статусе',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestParameters' => [
                'ids' => '1,2,3,4,5,6,7,8,9,10'
            ],
            'responseCode' => 200,
            'responseBody' => [
                'status' => 200,
                'result' => [
                    '1' => [
                        'id' => 1,
                        'status' => 1,
                        'last_change_status_date' => '2020-02-24 17:28:33',
                        'result_comment' => null
                    ],
                    '2' => [
                        'id' => 2,
                        'status' => 2,
                        'last_change_status_date' => '2020-02-24 17:28:33',
                        'result_comment' => null
                    ],
                    '3' => [
                        'id' => 3,
                        'status' => 3,
                        'last_change_status_date' => '2020-02-24 17:28:33',
                        'result_comment' => null
                    ],
                    '4' => [
                        'id' => 4,
                        'status' => 4,
                        'last_change_status_date' => '2020-02-24 17:28:33',
                        'result_comment' => null
                    ],
                    '5' => [
                        'id' => 5,
                        'status' => 5,
                        'last_change_status_date' => '2020-02-24 17:28:33',
                        'result_comment' => null
                    ],
                    '6' => [
                        'id' => 6,
                        'status' => 6,
                        'last_change_status_date' => '2020-02-24 17:28:33',
                        'result_comment' => null
                    ],
                    '7' => [
                        'id' => 7,
                        'status' => 7,
                        'last_change_status_date' => '2020-02-24 17:28:33',
                        'result_comment' => null
                    ],
                    '8' => [
                        'id' => 8,
                        'status' => 8,
                        'last_change_status_date' => '2020-02-24 17:28:33',
                        'result_comment' => 'Комментарий к результату задачи'
                    ],
                    '9' => [
                        'id' => 9,
                        'status' => 9,
                        'last_change_status_date' => '2020-02-24 17:28:33',
                        'result_comment' => 'Комментарий к результату задачи'
                    ],
                    '10' => [
                        'id' => 10,
                        'status' => 11,
                        'last_change_status_date' => '2020-02-24 17:28:33',
                        'result_comment' => 'Комментарий к результату задачи'
                    ],
                ],
                'count' => 10,
                'next_page' => null,
                'previous_page' => null
            ],
            'db' => [
                'lisa_fixtures' => []
            ]
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Несуществующие заявки',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestParameters' => [
                'ids' => '11,21,31,41,51,61,71,81,91,101',
            ],
            'responseCode' => 200,
            'responseBody' => [
                'status' => 200,
                'result' => [],
                'count' => 0,
                'next_page' => null,
                'previous_page' => null
            ],
            'db' => [
                'lisa_fixtures' => []
            ]
        ]
    ],

    'case3' => [
        'setting' => [
            'description' => 'И существующие и не существующие заявки',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestParameters' => [
                'ids' => '1,21,3,41,5,61,7,81,9,101'
            ],
            'responseCode' => 200,
            'responseBody' => [
                'status' => 200,
                'result' => [
                    '1' => [
                        'id' => 1,
                        'status' => 1,
                        'last_change_status_date' => '2020-02-24 17:28:33',
                        'result_comment' => null
                    ],
                    '3' => [
                        'id' => 3,
                        'status' => 3,
                        'last_change_status_date' => '2020-02-24 17:28:33',
                        'result_comment' => null
                    ],
                    '5' => [
                        'id' => 5,
                        'status' => 5,
                        'last_change_status_date' => '2020-02-24 17:28:33',
                        'result_comment' => null
                    ],
                    '7' => [
                        'id' => 7,
                        'status' => 7,
                        'last_change_status_date' => '2020-02-24 17:28:33',
                        'result_comment' => null
                    ],
                    '9' => [
                        'id' => 9,
                        'status' => 9,
                        'last_change_status_date' => '2020-02-24 17:28:33',
                        'result_comment' => 'Комментарий к результату задачи'
                    ],
                ],
                'count' => 5,
                'next_page' => null,
                'previous_page' => null
            ],
            'db' => [
                'lisa_fixtures' => []
            ]
        ]
    ],

    'case4' => [
        'setting' => [
            'description' => 'Несуществующая страница',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestParameters' => [
                'ids' => '1,2,3,4,5,6,7,8,9,10',
                'page' => 2
            ],
            'responseCode' => 200,
            'responseBody' => [
                'status' => 200,
                'result' => [
                    '1' => [
                        'id' => 1,
                        'status' => 1,
                        'last_change_status_date' => '2020-02-24 17:28:33',
                        'result_comment' => null
                    ],
                    '2' => [
                        'id' => 2,
                        'status' => 2,
                        'last_change_status_date' => '2020-02-24 17:28:33',
                        'result_comment' => null
                    ],
                    '3' => [
                        'id' => 3,
                        'status' => 3,
                        'last_change_status_date' => '2020-02-24 17:28:33',
                        'result_comment' => null
                    ],
                    '4' => [
                        'id' => 4,
                        'status' => 4,
                        'last_change_status_date' => '2020-02-24 17:28:33',
                        'result_comment' => null
                    ],
                    '5' => [
                        'id' => 5,
                        'status' => 5,
                        'last_change_status_date' => '2020-02-24 17:28:33',
                        'result_comment' => null
                    ],
                    '6' => [
                        'id' => 6,
                        'status' => 6,
                        'last_change_status_date' => '2020-02-24 17:28:33',
                        'result_comment' => null
                    ],
                    '7' => [
                        'id' => 7,
                        'status' => 7,
                        'last_change_status_date' => '2020-02-24 17:28:33',
                        'result_comment' => null
                    ],
                    '8' => [
                        'id' => 8,
                        'status' => 8,
                        'last_change_status_date' => '2020-02-24 17:28:33',
                        'result_comment' => 'Комментарий к результату задачи'
                    ],
                    '9' => [
                        'id' => 9,
                        'status' => 9,
                        'last_change_status_date' => '2020-02-24 17:28:33',
                        'result_comment' => 'Комментарий к результату задачи'
                    ],
                    '10' => [
                        'id' => 10,
                        'status' => 11,
                        'last_change_status_date' => '2020-02-24 17:28:33',
                        'result_comment' => 'Комментарий к результату задачи'
                    ],
                ],
                'count' => 10,
                'next_page' => null,
                'previous_page' => 1
            ],
            'db' => [
                'lisa_fixtures' => []
            ]
        ],
    ],

    'case5' => [
        'setting' => [
            'description' => 'Пустое ids',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestParameters' => [
                'ids' => ''
            ],
            'responseCode' => 200,
            'responseBody' => [
                'status' => 400,
                'errors' => [
                    ' - не число'
                ]
            ],
            'db' => [
                'lisa_fixtures' => []
            ]
        ]
    ],

    'case6' => [
        'setting' => [
            'description' => 'Ids - не число',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestParameters' => [
                'ids' => 'qwer'
            ],
            'responseCode' => 200,
            'responseBody' => [
                'status' => 400,
                'errors' => [
                    'qwer - не число'
                ]
            ],
            'db' => [
                'lisa_fixtures' => []
            ]
        ]
    ],

    'case7' => [
        'setting' => [
            'description' => 'Без ids',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestParameters' => [],
            'responseCode' => 400,
            'responseBody' => [
                'name' => 'Bad Request',
                'message' => 'Отсутствуют обязательные параметры: ids',
                'code' => 0,
                'status' => 400,
                'type' => "yii\\web\\BadRequestHttpException"
            ],
            'db' => [
                'lisa_fixtures' => [
                    'exceptions' => [
                        [
                            'id' => 1,
                            'date >=' => date('Y-m-d'),
                            'class' => 'yii\\web\\BadRequestHttpException',
                            'message' => 'Отсутствуют обязательные параметры: ids',
                            'code' => 0,
                            'user' => '4',
                        ]
                    ]
                ]
            ]
        ]
    ],

    'case8' => [
        'setting' => [
            'description' => 'Пустое page',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestParameters' => [
                'ids' => '1,2,3,4,5,6,7,8,9,10',
                'page' => ''
            ],
            'responseCode' => 200,
            'responseBody' => [
                'status' => 400,
                'errors' => [
                    'Параметр page должен быть числом'
                ]
            ],
            'db' => [
                'lisa_fixtures' => []
            ]
        ]
    ],

    'case9' => [
        'setting' => [
            'description' => 'Page - не число',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestParameters' => [
                'ids' => '1,2,3,4,5,6,7,8,9,10',
                'page' => 'qwer'
            ],
            'responseCode' => 200,
            'responseBody' => [
                'status' => 400,
                'errors' => [
                    'Параметр page должен быть числом'
                ]
            ],
            'db' => [
                'lisa_fixtures' => []
            ]
        ]
    ],
];