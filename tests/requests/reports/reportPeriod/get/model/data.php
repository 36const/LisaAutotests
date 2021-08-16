<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Получить модель полей для создания отчётного периода',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'responseBody' => [
                'model' => [
                    'id' => NULL,
                    'begin' => NULL,
                    'end' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ],
                'initialValues' => [
                ],
            ]
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Получить модель поля для редактирования отчётного периода',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'id' => 2,
            'responseBody' => [
                'model' => [
                    'id' => 2,
                    'begin' => '2021-02-01 00:00:00',
                    'end' => '2021-02-28 00:00:00',
                    'created_at' => '2021-01-01 00:00:00',
                    'updated_at' => NULL,
                ],
                'initialValues' => [
                ],
            ]
        ]
    ],

];
