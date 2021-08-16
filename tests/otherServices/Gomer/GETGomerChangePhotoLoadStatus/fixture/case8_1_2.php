<?php

use Codeception\Module\TestHelper;

return [
    'lisa_fixtures' => [
        'requests' => [
            [
                //'id' => 1,
                'type_id' => 1,
                'status' => 7,
                'direction' => 2,
                'subject' => 'Добавление новых товаров (Работа с товарами Маркета)',
                'category_id' => null,
                'seller_id' => 83,
                'team_direction' => 2,
                'photo_load_status' => 0
            ],
        ],
        'requests_fields' => [],
        'requests_reasons' => [
            [
                'request_id' => 1,
                'reason_id' => 1
            ],
            [
                'request_id' => 1,
                'reason_id' => 2
            ]
        ],
    ]
];