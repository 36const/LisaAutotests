<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Получить модель полей для создания приоритета',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'responseBody' => [
                'model' => [
                    'id' => NULL,
                    'name' => NULL,
                    'status' => 1,
                ],
            ]
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Получить модель поля для редактирования приоритета',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'id' => 2,
            'responseBody' => [
                'model' => [
                    'id' => 2,
                    'name' => 'Товар-новинка/эксклюзив (трафикообразующий)',
                    'status' => 1,
                ],
            ]
        ]
    ],

];
