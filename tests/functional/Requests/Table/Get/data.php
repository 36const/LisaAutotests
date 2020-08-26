<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Количество заявок на вкладках',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "response" => [
                "new" => 3,
                "in-check" => 3,
                "require-changes" => 3,
                "declined" => 1,
                "wait-work" => 3,
                "in-work" => 3,
                "on-hold" => 2,
                "completed" => 3,
                "closed" => 3,
                "total" => 24
            ],
        ]
    ],

];
