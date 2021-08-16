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
                    '1' => true,
                    '2' => true,
                    '3' => true,
                    '4' => true,
                    '5' => true,
                    '6' => true,
                    '7' => true,
                    '8' => true,
                    '9' => true,
                    '10' => true,
                ]
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
                'ids' => '11,21,31,41,51,61,71,81,91,101'
            ],
            'responseCode' => 200,
            'responseBody' => [
                'status' => 200,
                'result' => [
                    '11' => false,
                    '21' => false,
                    '31' => false,
                    '41' => false,
                    '51' => false,
                    '61' => false,
                    '71' => false,
                    '81' => false,
                    '91' => false,
                    '101' => false,
                ]
            ]
        ]
    ],

    'case3' => [
        'setting' => [
            'description' => 'И существующие и не существующие',
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
                    '1' => true,
                    '21' => false,
                    '3' => true,
                    '41' => false,
                    '5' => true,
                    '61' => false,
                    '7' => true,
                    '81' => false,
                    '9' => true,
                    '101' => false,
                ]
            ]
        ]
    ],

    'case4' => [
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
            ]
        ]
    ],

    'case5' => [
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
            ]
        ]
    ],

    'case6' => [
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
            ]
        ]
    ],
];