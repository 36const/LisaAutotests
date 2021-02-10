<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Установка и изменение фильтра Дата регистрации',
            'column' => 'created_at',
            'amount' => 3,
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => []
    ],
];
