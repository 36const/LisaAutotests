<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Изменение дочернего статуса',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'excludedRedisKeys' => [
                'all_reasons2fb6cc3f5862c154757f7dbd5ca312e9',
                'reasons_by_status_11fc68253b26fc3d2e010e94675d7cf8b',
                'reasons_by_status_2848ec487e1a0be4abfe5d5722dade4dc',
                'reasons_by_status_3cb7d746c6663211ac9840871e16bca0c',
                'reasons_by_status_495b720c6262f0fd97d0ec7e7172a3364',
                'reasons_by_status_5ab2862e1fe728ffc6ed525d02b1a08b3',
                'reasons_by_status_64fb7db11b2f190142add5b06cba278b1',
                'reasons_by_status_7c4921af50cf971f4cf6accb6823428ff',
                'reasons_by_status_89eda2a8ada4c29bd2618a2a896f67473',
                'reasons_by_status_9776834c96ed03ea5d6e18bf2f389288f',
                'reasons_by_status_113d18f99638fba7ed367540edf621056d',
            ],
            'requestBody' => [
                'id' => 1,
                'child_status' => 2,
                'reason' => '=}~!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ',
                'status' => 1,
            ],
            'responseBody' => [
                'model' => [
                    'id' => 1,
                    'child_status' => 'Готова для распределения',
                    'reason' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ',
                    'status' => 'Активный',
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'reasons' => [
                        [
                            'id' => 1,
                            'child_status' => 2,
                            'reason' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ',
                            'status' => 1
                        ],
                        [
                            'id' => 2,
                            'child_status' => 4,
                            'reason' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ',
                            'status' => 0
                        ],
                    ],
                ],
            ]
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Изменение названия причины',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'excludedRedisKeys' => [
                'all_reasons2fb6cc3f5862c154757f7dbd5ca312e9',
                'reasons_by_status_11fc68253b26fc3d2e010e94675d7cf8b',
                'reasons_by_status_2848ec487e1a0be4abfe5d5722dade4dc',
                'reasons_by_status_3cb7d746c6663211ac9840871e16bca0c',
                'reasons_by_status_495b720c6262f0fd97d0ec7e7172a3364',
                'reasons_by_status_5ab2862e1fe728ffc6ed525d02b1a08b3',
                'reasons_by_status_64fb7db11b2f190142add5b06cba278b1',
                'reasons_by_status_7c4921af50cf971f4cf6accb6823428ff',
                'reasons_by_status_89eda2a8ada4c29bd2618a2a896f67473',
                'reasons_by_status_9776834c96ed03ea5d6e18bf2f389288f',
                'reasons_by_status_113d18f99638fba7ed367540edf621056d',
            ],
            'requestBody' => [
                'id' => 1,
                'child_status' => 3,
                'reason' => '=}~!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\| ',
                'status' => 1,
            ],
            'responseBody' => [
                'model' => [
                    'id' => 1,
                    'child_status' => 'На доработке',
                    'reason' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\| ',
                    'status' => 'Активный',
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'reasons' => [
                        [
                            'id' => 1,
                            'child_status' => 3,
                            'reason' => "!@#$%^&*()_+`=-]'/[;.,}\"?{:><\\| ",
                            'status' => 1
                        ],
                        [
                            'id' => 2,
                            'child_status' => 4,
                            'reason' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ',
                            'status' => 0
                        ],
                    ],
                ],
            ]
        ]
    ],

    'case3' => [
        'setting' => [
            'description' => 'Активация причины',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'excludedRedisKeys' => [
                'all_reasons2fb6cc3f5862c154757f7dbd5ca312e9',
                'reasons_by_status_11fc68253b26fc3d2e010e94675d7cf8b',
                'reasons_by_status_2848ec487e1a0be4abfe5d5722dade4dc',
                'reasons_by_status_3cb7d746c6663211ac9840871e16bca0c',
                'reasons_by_status_495b720c6262f0fd97d0ec7e7172a3364',
                'reasons_by_status_5ab2862e1fe728ffc6ed525d02b1a08b3',
                'reasons_by_status_64fb7db11b2f190142add5b06cba278b1',
                'reasons_by_status_7c4921af50cf971f4cf6accb6823428ff',
                'reasons_by_status_89eda2a8ada4c29bd2618a2a896f67473',
                'reasons_by_status_9776834c96ed03ea5d6e18bf2f389288f',
                'reasons_by_status_113d18f99638fba7ed367540edf621056d',
            ],
            'id' => 2,
            'requestBody' => [
                'id' => 2,
                'child_status' => '4',
                'reason' => '=}~!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ',
                'status' => 1,
            ],
            'responseBody' => [
                'model' => [
                    'id' => 2,
                    'child_status' => 'Отменена',
                    'reason' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ',
                    'status' => 'Активный',
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'reasons' => [
                        [
                            'id' => 1,
                            'child_status' => 3,
                            'reason' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ',
                            'status' => 1
                        ],
                        [
                            'id' => 2,
                            'child_status' => 4,
                            'reason' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ',
                            'status' => 1
                        ],
                    ],
                ],
            ]
        ]
    ],

    'case4' => [
        'setting' => [
            'description' => 'Блокировка причины',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'excludedRedisKeys' => [
                'all_reasons2fb6cc3f5862c154757f7dbd5ca312e9',
                'reasons_by_status_11fc68253b26fc3d2e010e94675d7cf8b',
                'reasons_by_status_2848ec487e1a0be4abfe5d5722dade4dc',
                'reasons_by_status_3cb7d746c6663211ac9840871e16bca0c',
                'reasons_by_status_495b720c6262f0fd97d0ec7e7172a3364',
                'reasons_by_status_5ab2862e1fe728ffc6ed525d02b1a08b3',
                'reasons_by_status_64fb7db11b2f190142add5b06cba278b1',
                'reasons_by_status_7c4921af50cf971f4cf6accb6823428ff',
                'reasons_by_status_89eda2a8ada4c29bd2618a2a896f67473',
                'reasons_by_status_9776834c96ed03ea5d6e18bf2f389288f',
                'reasons_by_status_113d18f99638fba7ed367540edf621056d',
            ],
            'requestBody' => [
                'id' => 1,
                'child_status' => 3,
                'reason' => '=}~!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ',
                'status' => 0,
            ],
            'responseBody' => [
                'model' => [
                    'id' => 1,
                    'child_status' => 'На доработке',
                    'reason' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ',
                    'status' => 'Заблокированный',
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'reasons' => [
                        [
                            'id' => 1,
                            'child_status' => 3,
                            'reason' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ',
                            'status' => 0
                        ],
                        [
                            'id' => 2,
                            'child_status' => 4,
                            'reason' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ',
                            'status' => 0
                        ],
                    ],
                ],
            ]
        ]
    ],

    'case5' => [
        'setting' => [
            'description' => 'Изменение всех полей причины',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'excludedRedisKeys' => [
                'all_reasons2fb6cc3f5862c154757f7dbd5ca312e9',
                'reasons_by_status_11fc68253b26fc3d2e010e94675d7cf8b',
                'reasons_by_status_2848ec487e1a0be4abfe5d5722dade4dc',
                'reasons_by_status_3cb7d746c6663211ac9840871e16bca0c',
                'reasons_by_status_495b720c6262f0fd97d0ec7e7172a3364',
                'reasons_by_status_5ab2862e1fe728ffc6ed525d02b1a08b3',
                'reasons_by_status_64fb7db11b2f190142add5b06cba278b1',
                'reasons_by_status_7c4921af50cf971f4cf6accb6823428ff',
                'reasons_by_status_89eda2a8ada4c29bd2618a2a896f67473',
                'reasons_by_status_9776834c96ed03ea5d6e18bf2f389288f',
                'reasons_by_status_113d18f99638fba7ed367540edf621056d',
            ],
            'requestBody' => [
                'id' => 1,
                'child_status' => 2,
                'reason' => '=}~!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\| ',
                'status' => 0,
            ],
            'responseBody' => [
                'model' => [
                    'id' => 1,
                    'child_status' => 'Готова для распределения',
                    'reason' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\| ',
                    'status' => 'Заблокированный',
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'reasons' => [
                        [
                            'id' => 1,
                            'child_status' => 2,
                            'reason' => "!@#$%^&*()_+`=-]'/[;.,}\"?{:><\\| ",
                            'status' => 0
                        ],
                        [
                            'id' => 2,
                            'child_status' => 4,
                            'reason' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ',
                            'status' => 0
                        ],
                    ],
                ],
            ]
        ]
    ],

];
