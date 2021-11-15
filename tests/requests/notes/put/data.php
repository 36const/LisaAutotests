<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Добавление новой записи',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'note' => '<div>~!@#$%^&amp;*()_+~|}"?{:&lt;&gt;`\\]\\\'/[;.,-=&not</div>',
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['requests'],
                    'requests_fields' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['requests_fields'],
                    'request_notes' => [
                        [
                            'user_id' => 4,
                            'request_id' => 1,
                            'note' => '<div>~!@#$%^&amp;*()_+~|}"?{:&lt;&gt;`\\]\\\'/[;.,-=&not</div>',
                        ]
                    ],
                ],
            ]
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Изменение существующей записи',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case2.php',
        'provider_data' => [
            'requestBody' => [
                'note' => '<div>~!@#$%^&amp;*()_+~|}"?{:&gt;&lt;`\\]\\\'/[;.,-=</div><div><a href="http://splitter.docker/bpm/request/view?id=904&amp;forCrossCheck=0">http://splitter.docker/bpm/request/view?id=904&amp;forCrossCheck=0</a></div>',
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => (include __DIR__ . '/fixture/case2.php')['lisa_fixtures']['requests'],
                    'requests_fields' => (include __DIR__ . '/fixture/case2.php')['lisa_fixtures']['requests_fields'],
                    'request_notes' => [
                        [
                            'user_id' => 4,
                            'request_id' => 1,
                            'note' => '<div>~!@#$%^&amp;*()_+~|}"?{:&gt;&lt;`\\]\\\'/[;.,-=</div><div><a href="http://splitter.docker/bpm/request/view?id=904&amp;forCrossCheck=0">http://splitter.docker/bpm/request/view?id=904&amp;forCrossCheck=0</a></div>',
                        ]
                    ],
                ],
            ]
        ]
    ],
];
