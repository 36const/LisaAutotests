<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Изменение набора полей автосложности',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'type_id' => 3,
                'fields' => [
                    0 => 21,
                    1 => 22,
                    2 => 23,
                    3 => 24,
                    4 => 25,
                    5 => 26,
                    6 => 27,
                    7 => 31,
                    8 => 68,
                    9 => 71,
                    10 => '67',
                ],
            ],
            'responseBody' => [
                'model' => [
                    'type_id' => 3,
                    'fields' => 'Наличие характеристик к товарам | Наличие фото к товарам | Наличие описаний к товарам | Обработка фото | Уточнения. Количество уточнений у автора. | Язык информации | Видео к товарам | Группировка товаров (наличие варьируемых параметров) | Среднее количество фото в товаре | Количество добавленных инструкций | Количество изменённых товаров',
                    'type_name' => 'Перенос товаров',
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'auto_diff_fields' => array_replace(
                        (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['auto_diff_fields'],
                        [
                            2 => [
                                'type_id' => 3,
                                'fields' => '[21, 22, 23, 24, 25, 26, 27, 31, 68, 71, 67]',
                            ],
                        ]
                    ),
                    'common_log' => [
                        [
                            'id' => 1,
                            'entity' => 'auto_diff_fields',
                            'entity_id' => 3,
                            'old_value' => '{"fields": "[21, 22, 23, 24, 25, 26, 27, 31, 68, 71, 111, 93]"}',
                            'new_value' => '{"fields": "[21,22,23,24,25,26,27,31,68,71,67]"}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 2,
                        ]
                    ],
                ],
            ]
        ]
    ],

];
