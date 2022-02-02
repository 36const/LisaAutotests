<?php

use Codeception\Module\TestHelper;

return [
    'lisa_fixtures' => [
        'requests' => [],
        'requests_fields' => [],
        'request_errors' => [],
        'notification_settings' => [],
        'user_notifications' => [],
        'request_status_history' => [],
        'grid_settings' => [],
        'observers' => [],
        'request_templates' => [
            [],
            [
                //'id' => 2,
                'parent_id' => 1,
                'name' => 'Добавление (Розетка)',
                'type_id' => 1,
                'direction' => 1,
                'fields' => '{"2": "1", "15": "1", "subject": "Добавление новых товаров (Розетка) Добавление новых товаров (Розетка)", "type_id": "1", "priority": "1", "direction": "1", "seller_id": "72141", "category_id": "2", "description": "http://splitter.docker/lisa/#/request-template/create?typeId=1&direction=1", "amount_to_work": "10", "rz_category_id": null, "planned_finish_date": null}',
                'user_id' => 4,
                'seller_id' => 72141,
                'category_id' => 2,
                'amount_to_work' => 10,
                'observers' => '[5, 6]',
                'rz_category_id' => NULL,
            ]
        ],
    ],
];