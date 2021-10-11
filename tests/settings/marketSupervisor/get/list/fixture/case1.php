<?php

use Codeception\Module\TestHelper;

return [
    'lisa_fixtures' => [
        'markets_supervisors' => [
            [
                'owox_id' => -2,
                'supervisor_id' => 5,
                'title' => 'Все продавцы',
                'status' => null
            ],
            [
                'owox_id' => 0,
                'supervisor_id' => 5,
                'title' => 'Маркетплейс (общий)',
                'status' => null
            ],
            [
                'owox_id' => 5,
                'supervisor_id' => 6,
                'title' => 'Rozetka',
                'status' => 0
            ],
            [
                'owox_id' => 83,
                'supervisor_id' => 6,
                'title' => 'Euromart',
                'status' => 6
            ],
            [
                'owox_id' => 9423,
                'supervisor_id' => 10,
                'title' => 'anytech',
                'status' => 6
            ],
            [
                'owox_id' => 67757,
                'supervisor_id' => 10,
                'title' => 'iTook',
                'status' => 2
            ],
            [
                'owox_id' => 72141,
                'supervisor_id' => 10,
                'title' => 'Rozetka.md',
                'status' => 3
            ],
            [
                'owox_id' => 128603,
                'supervisor_id' => 10,
                'title' => 'RozetkaEU',
                'status' => 5
            ],
            [
                'owox_id' => 124276,
                'supervisor_id' => 10,
                'title' => 'Rozetka.uz',
                'status' => 7
            ],
        ],
    ]
];