<?php
return [
    "lisa_fixtures" => [
        "requests" => [],
        "requests_fields" => [],
        "request_errors" => [],
        "notification_settings" => [
            [
                //'id' => 1,
                "user_id" => 4,
                "types_for_notification" => '{"create": 2, "comment": 2, "mention": "2", "manager_id": 2, "attachments": 2, "supervisor_id": 2}',
                "fields_for_complete" => '["1", "2", "20", "29", "30", "53", "54", "67", "101", "122"]',
                "statuses_for_notification" => '{"1": 2, "2": 2, "3": 2, "4": 2, "5": 2, "6": 2, "7": 2, "8": 2, "9": 2, "11": 2}'
            ],
            [
                //'id' => 1,
                "user_id" => 6,
                "types_for_notification" => '{"create": 1, "comment": 2, "mention": "2", "manager_id": 2, "attachments": 2, "supervisor_id": 2}',
                "fields_for_complete" => '["1", "2", "20", "29", "30", "53", "54", "67", "101", "122"]',
                "statuses_for_notification" => '{"1": 2, "2": 2, "3": 2, "4": 2, "5": 2, "6": 2, "7": 2, "8": 2, "9": 2, "11": 2}'
            ],
            [
                //'id' => 1,
                "user_id" => 15,
                "types_for_notification" => '{"create": 2, "comment": 2, "mention": "1", "manager_id": 1, "attachments": 1, "supervisor_id": 1}',
                "fields_for_complete" => '["1", "2", "20", "29", "30", "53", "54", "67", "101", "122"]',
                "statuses_for_notification" => '{"1": 2, "2": 2, "3": 2, "4": 2, "5": 2, "6": 2, "7": 2, "8": 2, "9": 2, "11": 2}'
            ],
            [
                //'id' => 1,
                "user_id" => 17,
                "types_for_notification" => '{"create": 2, "comment": 2, "mention": "2", "manager_id": 2, "attachments": 2, "supervisor_id": 2}',
                "fields_for_complete" => '["1", "2", "20", "29", "30", "53", "54", "67", "101", "122"]',
                "statuses_for_notification" => '{"1": 1, "2": 1, "3": 2, "4": 2, "5": 1, "6": 1, "7": 1, "8": 1, "9": 1, "11": 1}'
            ],
        ],
        "request_templates" => [
            [
                //'id' => 1,
                'parent_id' => null,
                'name' => 'Группировка товаров (Определяется типом задачи) =~}!@#$%^&*()_+`-]\'/[;.,}"?{:>|<1001234567890>',
                'type_id' => 4,
                'direction' => 0,
                'fields' => '{"169": "1", "subject": "Группировка товаров (Определяется типом задачи) =~}!@#$%^&*()_+`-]\'/[;.,}\\"?{:><1001234567890>", "type_id": "4", "priority": "2", "direction": "0", "seller_id": "0", "category_id": "2", "description": "=~}!@#$%^&*()_+`-]\'/[;.,}\\"?{:><1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО\\n", "amount_to_work": "999", "planned_finish_date": "2021-03-01 08:40:59"}',
            ],
            [
                //'id' => 2,
                'parent_id' => 1,
                'name' => 'Добавление',
                'type_id' => 1,
                'direction' => 2,
                'fields' => '{"15": "1", "19": "1", "subject": "Добавление новых товаров (Работа с товарами Розетки)", "type_id": "1", "direction": "2", "seller_id": "0", "description": "description", "amount_to_work": "10"}',
            ],
            [
                //'id' => 3,
                'parent_id' => 1,
                'name' => 'Добавление/изменение информации',
                'type_id' => 2,
                'direction' => 1,
                'fields' => '{"2": "1", "123": "1", "subject": "Добавление/изменение информации", "type_id": "2", "priority": "1", "direction": "1", "seller_id": "67757", "category_id": "2", "description": "Добавление/изменение информации", "amount_to_work": "10"}',
            ],
            [
                //'id' => 4,
                'parent_id' => 1,
                'name' => 'Добавление нового портала/раздела фат-меню/категории',
                'type_id' => 7,
                'direction' => 0,
                'fields' => '{"2": "1", "subject": "Добавление нового портала/раздела фат-меню/категории", "type_id": "7", "direction": "0", "category_id": "1", "description": "Добавление нового портала/раздела фат-меню/категории", "amount_to_work": "10"}',
            ],
            [
                //'id' => 5,
                'parent_id' => 1,
                'name' => 'Добавление параметров/значений',
                'type_id' => 9,
                'direction' => 0,
                'fields' => '{"1": "1", "subject": "Добавление параметров/значений", "type_id": "9", "direction": "0", "seller_id": "83", "description": "Добавление параметров/значений", "amount_to_work": "999999999", "planned_finish_date": "2021-01-01 00:00:36"}',
            ],
            [
                //'id' => 6,
                'parent_id' => 1,
                'name' => 'Проектирование структуры',
                'type_id' => 11,
                'direction' => 0,
                'fields' => '{"1": "1", "subject": "Проектирование структуры", "type_id": "11", "priority": "1", "direction": "0", "seller_id": "5", "category_id": "2", "description": "Проектирование структуры", "amount_to_work": "777"}',
            ],
            [
                //'id' => 7,
                'parent_id' => null,
                'name' => 'Группировка товаров',
                'type_id' => 4,
                'direction' => 0,
                'fields' => '{"subject": "Группировка товаров", "type_id": "4", "priority": "1", "direction": "0", "seller_id": "83", "description": "Группировка товаров", "amount_to_work": "10"}',
            ],
            [
                //'id' => 8,
                'parent_id' => 7,
                'name' => 'Добавление/изменение информации в существующих порталах/фат-меню/категориях товаров',
                'type_id' => 8,
                'direction' => 0,
                'fields' => '{"1": "1", "6": "1", "7": "1", "subject": "Добавление/изменение информации в существующих порталах/фат-меню/категориях товаров", "type_id": "8", "direction": "0", "category_id": "2", "description": "Добавление/изменение информации в существующих порталах/фат-меню/категориях товаров", "amount_to_work": "777"}',
            ],
        ],
        "user_notifications" => [],
        "request_status_history" => [],
        "observers" => [],
        "categories" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/categories.php',
        "markets_supervisors" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/markets_supervisors.php',
        "field_values" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/field_values.php',
        "difficulty_coefs" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/difficulty_coefs.php',
        "teams" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/teams.php',
        "priorities" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/priorities.php',
        "formula_coefs" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/formula_coefs.php',
        "goods_in_groups_coefs" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/goods_in_groups_coefs.php',
    ],
    "cooper_fixtures" => [
        "market" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'cooper_fixtures/market.php',
    ]
];