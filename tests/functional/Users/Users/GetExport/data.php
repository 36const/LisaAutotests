<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Выгрузка всех пользователей',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?q=[]'
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Выгрузка пользователя по id',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?q={"UserSearch":{"id":"4","name":"","login":"","team":"","position":"","drfo":"","create_ts":"","parent_id":"","change_date":"","status":""}}'
        ]
    ],

    'case3' => [
        'setting' => [
            'description' => 'Выгрузка пользователей по имени',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?q={"UserSearch":{"id":"","name":"Супервайзер","login":"","team":"","position":"","drfo":"","create_ts":"","parent_id":"","change_date":"","status":""}}'
        ]
    ],

    'case4' => [
        'setting' => [
            'description' => 'Выгрузка пользователей по логину',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?q={"UserSearch":{"id":"","name":"","login":"contentManager","team":"","position":"","drfo":"","create_ts":"","parent_id":"","change_date":"","status":""}}'
        ]
    ],

    'case5' => [
        'setting' => [
            'description' => 'Выгрузка пользователей по команде',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?q={"UserSearch":{"id":"","name":"","login":"","team":"15","position":"","drfo":"","create_ts":"","parent_id":"","change_date":"","status":""}}'
        ]
    ],

    'case6' => [
        'setting' => [
            'description' => 'Выгрузка пользователей по должности',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?q={"UserSearch":{"id":"","name":"","login":"","team":"","position":"teamLead","drfo":"","create_ts":"","parent_id":"","change_date":"","status":""}}'
        ]
    ],

    'case7' => [
        'setting' => [
            'description' => 'Выгрузка пользователей по ДРФО',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?q={"UserSearch":{"id":"","name":"","login":"","team":"","position":"","drfo":"\'000000005","create_ts":"","parent_id":"","change_date":"","status":""}}'
        ]
    ],

    'case8' => [
        'setting' => [
            'description' => 'Выгрузка пользователей по Дате создания',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?q={"UserSearch":{"id":"","name":"","login":"","team":"","position":"","drfo":"","create_ts":"2020-04-13 00:00:00to2020-04-14 23:59:00","parent_id":"","change_date":"","status":""}}'
        ]
    ],

    'case9' => [
        'setting' => [
            'description' => 'Выгрузка пользователей по руководителю',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?q={"UserSearch":{"id":"","name":"","login":"","team":"","position":"","drfo":"","create_ts":"","parent_id":"10","change_date":"","status":""}}'
        ]
    ],

    'case10' => [
        'setting' => [
            'description' => 'Выгрузка пользователей по Дате последнего обновления',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?q={"UserSearch":{"id":"","name":"","login":"","team":"","position":"","drfo":"","create_ts":"","parent_id":"","change_date":"2020-06-28 00:00:00to2020-07-05 23:59:00","status":""}}'
        ]
    ],

    'case11' => [
        'setting' => [
            'description' => 'Выгрузка пользователей по статусу',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?q={"UserSearch":{"id":"","name":"","login":"","team":"","position":"","drfo":"","create_ts":"","parent_id":"","change_date":"","status":"0"}}'
        ]
    ],

];
