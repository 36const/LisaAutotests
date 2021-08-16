<?php

use Codeception\Module\TestHelper;

return [
    'lisa_fixtures' => [
        'requests' => [],
        'requests_fields' => [],
        'categories' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/categories.php',
        'priorities' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/priorities.php',
        'markets_supervisors' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/markets_supervisors.php',
        'excluded_fields' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/excluded_fields.php',
        'request_templates' => [
            [
//                "id" => 1,
                'parent_id' => null,
                'name' => 'Добавление',
                'type_id' => 1,
                'direction' => 2,
                'fields' => '{"5": "1", "160": "1", "subject": "Добавление новых товаров (Работа с товарами Розетки)", "type_id": "1", "direction": "2", "description": "description"}',
                'user_id' => 4,
                'seller_id' => 83,
                'category_id' => null,
                'amount_to_work' => 10,
                'observers' => '["15", "16"]',
            ],
            [
//                "id" => 2,
                'parent_id' => null,
                'name' => 'Добавление/изменение видео (Определяется типом задачи)',
                'type_id' => 13,
                'direction' => 0,
                'fields' => '{"1": "1", "subject": "Добавление/изменение видео (Определяется типом задачи)", "type_id": "13", "direction": "0", "description": "description"}',
                'user_id' => 4,
                'seller_id' => null,
                'category_id' => null,
                'amount_to_work' => null,
                'observers' => null,
            ],
        ]
    ]
];