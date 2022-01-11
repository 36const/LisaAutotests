<?php

$excludedRedisKeys = [
    'all_reasons2fb6cc3f5862c154757f7dbd5ca312e9',
    'reasons_by_status_and_type_direction_11fc68253b26fc3d2e010e94675d7cf8b',
    'reasons_by_status_and_type_direction_2848ec487e1a0be4abfe5d5722dade4dc',
    'reasons_by_status_and_type_direction_3cb7d746c6663211ac9840871e16bca0c',
    'reasons_by_status_and_type_direction_495b720c6262f0fd97d0ec7e7172a3364',
    'reasons_by_status_and_type_direction_5ab2862e1fe728ffc6ed525d02b1a08b3',
    'reasons_by_status_and_type_direction_64fb7db11b2f190142add5b06cba278b1',
    'reasons_by_status_and_type_direction_7c4921af50cf971f4cf6accb6823428ff',
    'reasons_by_status_and_type_direction_89eda2a8ada4c29bd2618a2a896f67473',
    'reasons_by_status_and_type_direction_9776834c96ed03ea5d6e18bf2f389288f',
    'reasons_by_status_and_type_direction_113d18f99638fba7ed367540edf621056d',
];

return [
    'case1' => [
        'setting' => [
            'description' => 'Создание причины для перевода в статус 3, Активная, все типы, с комментарием',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'excludedRedisKeys' => $excludedRedisKeys,
            'requestBody' => [
                'id' => NULL,
                'child_status' => 3,
                'reason' => '=}~!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ',
                'status' => 1,
                'reason_for_personal_cab' => '=}~!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|reason_for_personal_cab',
                'reason_for_personal_cab_ua' => '=}~!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|reason_for_personal_cab_ua',
                'reason_for_supplier_cab' => '=}~!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|reason_for_supplier_cab',
                'reason_for_supplier_cab_ua' => '=}~!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|reason_for_supplier_cab_ua',
                'type_directions' => ["[1,1]", "[1,2]", "[2,1]", "[2,2]", "[3,1]", "[3,2]", "[4,0]", "[5,1]", "[6,2]", "[7,0]", "[8,0]", "[9,0]", "[10,0]", "[11,0]", "[12,1]", "[13,0]", "[14,0]", "[15,0]"],
                'comment_is_required' => '1',
            ],
            'responseBody' => [
                'model' => [
                    'type_directions' => 'Добавление новых товаров (Работа с товарами Розетки), Добавление новых товаров (Работа с товарами Маркетплейса), Добавление/изменение информации в существующих товарах (Работа с товарами Розетки), Добавление/изменение информации в существующих товарах (Работа с товарами Маркетплейса), Перенос товаров (Работа с товарами Розетки), Перенос товаров (Работа с товарами Маркетплейса), Группировка товаров (Определяется типом задачи), Заливка фото с фотостудии (Работа с товарами Розетки), Проверка скрытых товаров (Работа с товарами Маркетплейса), Добавление нового портала/раздела фат-меню/категории товаров (Определяется типом задачи), Добавление/изменение информации в существующих порталах/фат-меню/категориях товаров (Определяется типом задачи), Добавление параметров/значений (Определяется типом задачи), Изменение существующих параметров/значений (Определяется типом задачи), Проектирование структуры (Определяется типом задачи), Добавление новых СЦ/изменение существующих СЦ (Работа с товарами Розетки), Добавление/изменение видео (Определяется типом задачи), Добавление/изменение размерной сетки (Определяется типом задачи), Добавление/изменение тегов (Определяется типом задачи)',
                    'comment_is_required' => '1',
                    'child_status' => 'На доработке',
                    'reason' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ',
                    'reason_for_personal_cab' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|reason_for_personal_cab',
                    'reason_for_personal_cab_ua' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|reason_for_personal_cab_ua',
                    'reason_for_supplier_cab' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|reason_for_supplier_cab',
                    'reason_for_supplier_cab_ua' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|reason_for_supplier_cab_ua',
                    'status' => 'Активный',
                    'id' => 16,
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'reasons' => array_merge_recursive(
                        (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['reasons'],
                        [
                            [
                                'id' => 16,
                                'child_status' => 3,
                                'reason' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ',
                                'status' => 1,
                                'reason_for_personal_cab' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|reason_for_personal_cab',
                                'reason_for_personal_cab_ua' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|reason_for_personal_cab_ua',
                                'reason_for_supplier_cab' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|reason_for_supplier_cab',
                                'reason_for_supplier_cab_ua' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|reason_for_supplier_cab_ua',
                                'type_directions' => '["[1,1]", "[1,2]", "[2,1]", "[2,2]", "[3,1]", "[3,2]", "[4,0]", "[5,1]", "[6,2]", "[7,0]", "[8,0]", "[9,0]", "[10,0]", "[11,0]", "[12,1]", "[13,0]", "[14,0]", "[15,0]"]',
                                'comment_is_required' => '1',
                            ],
                        ],
                    ),
                    'common_log' => [
                        [
                            'id' => 1,
                            'entity' => 'reasons',
                            'entity_id' => 16,
                            'old_value' => '[]',
                            'new_value' => '{"reason": "!@#$%^&*()_+`=-]\'/[;.,}\\"?{:><\\\\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ", "status": "1", "child_status": "3", "type_directions": "[\\"[1,1]\\",\\"[1,2]\\",\\"[2,1]\\",\\"[2,2]\\",\\"[3,1]\\",\\"[3,2]\\",\\"[4,0]\\",\\"[5,1]\\",\\"[6,2]\\",\\"[7,0]\\",\\"[8,0]\\",\\"[9,0]\\",\\"[10,0]\\",\\"[11,0]\\",\\"[12,1]\\",\\"[13,0]\\",\\"[14,0]\\",\\"[15,0]\\"]", "comment_is_required": "1", "reason_for_personal_cab": "!@#$%^&*()_+`=-]\'/[;.,}\\"?{:><\\\\|reason_for_personal_cab", "reason_for_supplier_cab": "!@#$%^&*()_+`=-]\'/[;.,}\\"?{:><\\\\|reason_for_supplier_cab", "reason_for_personal_cab_ua": "!@#$%^&*()_+`=-]\'/[;.,}\\"?{:><\\\\|reason_for_personal_cab_ua", "reason_for_supplier_cab_ua": "!@#$%^&*()_+`=-]\'/[;.,}\\"?{:><\\\\|reason_for_supplier_cab_ua"}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 1,
                        ]
                    ],
                ],
            ]
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Создание причины для перевода в статус 4, Заблокированная, с несколькими типами, без комментария',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'excludedRedisKeys' => $excludedRedisKeys,
            'requestBody' => [
                'id' => NULL,
                'child_status' => 4,
                'reason' => '=}~!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ',
                'status' => 0,
                'reason_for_personal_cab' => '=}~!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|reason_for_personal_cab',
                'reason_for_personal_cab_ua' => '=}~!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|reason_for_personal_cab_ua',
                'reason_for_supplier_cab' => '=}~!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|reason_for_supplier_cab',
                'reason_for_supplier_cab_ua' => '=}~!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|reason_for_supplier_cab_ua',
                'type_directions' => ['[3,1]', '[3,2]', '[4,0]', '[5,1]', '[6,2]', '[7,0]'],
                'comment_is_required' => '0',
            ],
            'responseBody' => [
                'model' => [
                    'type_directions' => 'Перенос товаров (Работа с товарами Розетки), Перенос товаров (Работа с товарами Маркетплейса), Группировка товаров (Определяется типом задачи), Заливка фото с фотостудии (Работа с товарами Розетки), Проверка скрытых товаров (Работа с товарами Маркетплейса), Добавление нового портала/раздела фат-меню/категории товаров (Определяется типом задачи)',
                    'comment_is_required' => '0',
                    'child_status' => 'Отменена',
                    'reason' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ',
                    'reason_for_personal_cab' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|reason_for_personal_cab',
                    'reason_for_personal_cab_ua' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|reason_for_personal_cab_ua',
                    'reason_for_supplier_cab' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|reason_for_supplier_cab',
                    'reason_for_supplier_cab_ua' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|reason_for_supplier_cab_ua',
                    'status' => 'Заблокированный',
                    'id' => 16,
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'reasons' => array_merge_recursive(
                        (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['reasons'],
                        [
                            [
                                'id' => 16,
                                'child_status' => 4,
                                'reason' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ',
                                'status' => 0,
                                'reason_for_personal_cab' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|reason_for_personal_cab',
                                'reason_for_personal_cab_ua' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|reason_for_personal_cab_ua',
                                'reason_for_supplier_cab' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|reason_for_supplier_cab',
                                'reason_for_supplier_cab_ua' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|reason_for_supplier_cab_ua',
                                'type_directions' => '["[3,1]", "[3,2]", "[4,0]", "[5,1]", "[6,2]", "[7,0]"]',
                                'comment_is_required' => '0',
                            ],
                        ],
                    ),
                    'common_log' => [
                        [
                            'id' => 1,
                            'entity' => 'reasons',
                            'entity_id' => 16,
                            'old_value' => '[]',
                            'new_value' => '{"reason": "!@#$%^&*()_+`=-]\'/[;.,}\\"?{:><\\\\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ", "status": 0, "child_status": "4", "type_directions": "[\\"[3,1]\\",\\"[3,2]\\",\\"[4,0]\\",\\"[5,1]\\",\\"[6,2]\\",\\"[7,0]\\"]", "comment_is_required": "0", "reason_for_personal_cab": "!@#$%^&*()_+`=-]\'/[;.,}\\"?{:><\\\\|reason_for_personal_cab", "reason_for_supplier_cab": "!@#$%^&*()_+`=-]\'/[;.,}\\"?{:><\\\\|reason_for_supplier_cab", "reason_for_personal_cab_ua": "!@#$%^&*()_+`=-]\'/[;.,}\\"?{:><\\\\|reason_for_personal_cab_ua", "reason_for_supplier_cab_ua": "!@#$%^&*()_+`=-]\'/[;.,}\\"?{:><\\\\|reason_for_supplier_cab_ua"}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 1,
                        ]
                    ],
                ],
            ]
        ]
    ],

    'case3' => [
        'setting' => [
            'description' => 'Создание причины для перевода в статус 7, Активная, без типов, с комментарием',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'excludedRedisKeys' => $excludedRedisKeys,
            'requestBody' => [
                'id' => NULL,
                'child_status' => 7,
                'reason' => '=}~!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ',
                'status' => 1,
                'reason_for_personal_cab' => '=}~!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|reason_for_personal_cab',
                'reason_for_personal_cab_ua' => '=}~!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|reason_for_personal_cab_ua',
                'reason_for_supplier_cab' => '=}~!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|reason_for_supplier_cab',
                'reason_for_supplier_cab_ua' => '=}~!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|reason_for_supplier_cab_ua',
                'type_directions' => [],
                'comment_is_required' => '1',
            ],
            'responseBody' => [
                'model' => [
                    'type_directions' => '',
                    'comment_is_required' => '1',
                    'child_status' => 'Ожидает',
                    'reason' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ',
                    'reason_for_personal_cab' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|reason_for_personal_cab',
                    'reason_for_personal_cab_ua' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|reason_for_personal_cab_ua',
                    'reason_for_supplier_cab' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|reason_for_supplier_cab',
                    'reason_for_supplier_cab_ua' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|reason_for_supplier_cab_ua',
                    'status' => 'Активный',
                    'id' => 16,
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'reasons' => array_merge_recursive(
                        (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['reasons'],
                        [
                            [
                                'id' => 16,
                                'child_status' => 7,
                                'reason' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ',
                                'status' => 1,
                                'reason_for_personal_cab' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|reason_for_personal_cab',
                                'reason_for_personal_cab_ua' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|reason_for_personal_cab_ua',
                                'reason_for_supplier_cab' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|reason_for_supplier_cab',
                                'reason_for_supplier_cab_ua' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|reason_for_supplier_cab_ua',
                                'type_directions' => '[]',
                                'comment_is_required' => '1',
                            ],
                        ],
                    ),
                    'common_log' => [
                        [
                            'id' => 1,
                            'entity' => 'reasons',
                            'entity_id' => 16,
                            'old_value' => '[]',
                            'new_value' => '{"reason": "!@#$%^&*()_+`=-]\'/[;.,}\\"?{:><\\\\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ", "status": "1", "child_status": "7", "type_directions": "[]", "comment_is_required": "1", "reason_for_personal_cab": "!@#$%^&*()_+`=-]\'/[;.,}\\"?{:><\\\\|reason_for_personal_cab", "reason_for_supplier_cab": "!@#$%^&*()_+`=-]\'/[;.,}\\"?{:><\\\\|reason_for_supplier_cab", "reason_for_personal_cab_ua": "!@#$%^&*()_+`=-]\'/[;.,}\\"?{:><\\\\|reason_for_personal_cab_ua", "reason_for_supplier_cab_ua": "!@#$%^&*()_+`=-]\'/[;.,}\\"?{:><\\\\|reason_for_supplier_cab_ua"}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 1,
                        ]
                    ],
                ],
            ]
        ]
    ],

    'case4' => [
        'setting' => [
            'description' => 'Создание причины для перевода в статус 8, Заблокированная, с одним типом, с комментарием',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'excludedRedisKeys' => $excludedRedisKeys,
            'requestBody' => [
                'id' => NULL,
                'child_status' => 8,
                'reason' => '=}~!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ',
                'status' => 0,
                'reason_for_personal_cab' => '=}~!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|reason_for_personal_cab',
                'reason_for_personal_cab_ua' => '=}~!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|reason_for_personal_cab_ua',
                'reason_for_supplier_cab' => '=}~!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|reason_for_supplier_cab',
                'reason_for_supplier_cab_ua' => '=}~!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|reason_for_supplier_cab_ua',
                'type_directions' => ['[15,0]'],
                'comment_is_required' => '1',
            ],
            'responseBody' => [
                'model' => [
                    'type_directions' => 'Добавление/изменение тегов (Определяется типом задачи)',
                    'comment_is_required' => '1',
                    'child_status' => 'Частично выполнена',
                    'reason' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ',
                    'reason_for_personal_cab' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|reason_for_personal_cab',
                    'reason_for_personal_cab_ua' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|reason_for_personal_cab_ua',
                    'reason_for_supplier_cab' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|reason_for_supplier_cab',
                    'reason_for_supplier_cab_ua' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|reason_for_supplier_cab_ua',
                    'status' => 'Заблокированный',
                    'id' => 16,
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'reasons' => array_merge_recursive(
                        (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['reasons'],
                        [
                            [
                                'id' => 16,
                                'child_status' => 8,
                                'reason' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ',
                                'status' => 0,
                                'reason_for_personal_cab' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|reason_for_personal_cab',
                                'reason_for_personal_cab_ua' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|reason_for_personal_cab_ua',
                                'reason_for_supplier_cab' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|reason_for_supplier_cab',
                                'reason_for_supplier_cab_ua' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|reason_for_supplier_cab_ua',
                                'type_directions' => '["[15,0]"]',
                                'comment_is_required' => '1',
                            ],
                        ],
                    ),
                    'common_log' => [
                        [
                            'id' => 1,
                            'entity' => 'reasons',
                            'entity_id' => 16,
                            'old_value' => '[]',
                            'new_value' => '{"reason": "!@#$%^&*()_+`=-]\'/[;.,}\\"?{:><\\\\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ", "status": 0, "child_status": "8", "type_directions": "[\\"[15,0]\\"]", "comment_is_required": "1", "reason_for_personal_cab": "!@#$%^&*()_+`=-]\'/[;.,}\\"?{:><\\\\|reason_for_personal_cab", "reason_for_supplier_cab": "!@#$%^&*()_+`=-]\'/[;.,}\\"?{:><\\\\|reason_for_supplier_cab", "reason_for_personal_cab_ua": "!@#$%^&*()_+`=-]\'/[;.,}\\"?{:><\\\\|reason_for_personal_cab_ua", "reason_for_supplier_cab_ua": "!@#$%^&*()_+`=-]\'/[;.,}\\"?{:><\\\\|reason_for_supplier_cab_ua"}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 1,
                        ]
                    ],
                ],
            ]
        ]
    ],

    'case5' => [
        'setting' => [
            'description' => 'Невозможность создания причины с пустым полем "Конечный статус"',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'child_status' => NULL,
                'id' => NULL,
                'reason' => 'Причина',
                'reason_for_personal_cab' => '=}~!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|reason_for_personal_cab',
                'reason_for_personal_cab_ua' => '=}~!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|reason_for_personal_cab_ua',
                'reason_for_supplier_cab' => '=}~!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|reason_for_supplier_cab',
                'reason_for_supplier_cab_ua' => '=}~!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|reason_for_supplier_cab_ua',
                'status' => 1,
                'type_directions' => ['[1,1]', '[1,2]', '[2,1]', '[2,2]', '[3,1]', '[3,2]', '[4,0]', '[5,1]', '[6,2]', '[7,0]', '[8,0]', '[9,0]', '[10,0]', '[11,0]', '[12,1]', '[13,0]', '[14,0]', '[15,0]'],
                'comment_is_required' => '1',
            ],
            'responseBody' => [
                'errors' => [
                    'child_status' => [
                        0 => 'Необходимо заполнить «Конечный статус».',
                    ],
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'reasons' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['reasons']
                ],
            ]
        ]
    ],

    'case6' => [
        'setting' => [
            'description' => 'Невозможность создания причины с пустыми полями "Причина ..."',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'child_status' => 4,
                'id' => NULL,
                'reason' => '=}~!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ',
                'reason_for_personal_cab' => NULL,
                'reason_for_personal_cab_ua' => NULL,
                'reason_for_supplier_cab' => NULL,
                'reason_for_supplier_cab_ua' => NULL,
                'status' => 0,
                'type_directions' => ['[3,1]', '[3,2]', '[4,0]', '[5,1]', '[6,2]', '[7,0]'],
                'comment_is_required' => '0',
            ],
            'responseBody' => [
                'errors' => [
                    'reason_for_personal_cab' => [
                        0 => 'Необходимо заполнить «Причина для ЛК».',
                    ],
                    'reason_for_personal_cab_ua' => [
                        0 => 'Необходимо заполнить «Причина для ЛК (укр.)».',
                    ],
                    'reason_for_supplier_cab' => [
                        0 => 'Необходимо заполнить «Причина для КП».',
                    ],
                    'reason_for_supplier_cab_ua' => [
                        0 => 'Необходимо заполнить «Причина для КП (укр.)».',
                    ],
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'reasons' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['reasons']
                ],
            ]
        ]
    ],

    'case7' => [
        'setting' => [
            'description' => 'Невозможность создания причины с пустым полем "Причина"',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'child_status' => 4,
                'id' => NULL,
                'reason' => NULL,
                'reason_for_personal_cab' => '=}~!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|reason_for_personal_cab',
                'reason_for_personal_cab_ua' => '=}~!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|reason_for_personal_cab_ua',
                'reason_for_supplier_cab' => '=}~!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|reason_for_supplier_cab',
                'reason_for_supplier_cab_ua' => '=}~!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|reason_for_supplier_cab_ua',
                'status' => 0,
                'type_directions' => '',
                'comment_is_required' => '1',
            ],
            'responseBody' => [
                'errors' => [
                    'reason' => [
                        0 => 'Необходимо заполнить «Причина».',
                    ],
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'reasons' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['reasons']
                ],
            ]
        ]
    ],

    'case8' => [
        'setting' => [
            'description' => 'Невозможность создания причины с пустым полем "Причина для ЛК"',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'child_status' => 4,
                'id' => NULL,
                'reason' => '=}~!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ',
                'reason_for_personal_cab' => NULL,
                'reason_for_personal_cab_ua' => '=}~!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|reason_for_personal_cab_ua',
                'reason_for_supplier_cab' => '=}~!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|reason_for_supplier_cab',
                'reason_for_supplier_cab_ua' => '=}~!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|reason_for_supplier_cab_ua',
                'status' => 0,
                'type_directions' => ["[15,0]"],
                'comment_is_required' => '1',
            ],
            'responseBody' => [
                'errors' => [
                    'reason_for_personal_cab' => [
                        0 => 'Необходимо заполнить «Причина для ЛК».',
                    ],
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'reasons' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['reasons']
                ],
            ]
        ]
    ],

];
