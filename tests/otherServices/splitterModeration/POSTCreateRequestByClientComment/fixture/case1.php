<?php

use Codeception\Module\TestHelper;

return [
    'lisa_fixtures' => [
        'requests' => [],
        'requests_fields' => [],
        'categories' => [
            [
                //"id" => 1,
                'title' => 'Авиабилеты',
                'difficulty' => 2,
                'supervisor_id' => 6,
                'status' => 1
            ],
            [
                //"id" => 2,
                'title' => 'Видео к товару',
                'difficulty' => 3,
                'supervisor_id' => 10,
                'status' => 1
            ],
            [
                //"id" => 3,
                'title' => 'Добавление логотипов к производителям',
                'difficulty' => 4,
                'supervisor_id' => 6,
                'status' => 0
            ],
            [
                'id' => 339,
                'title' => 'Добавление логотипов к производителям',
                'difficulty' => 4,
                'supervisor_id' => 6,
                'status' => 1
            ],
        ],
    ],
];