<?php

use Codeception\Module\TestHelper;

return [
    'lisa_fixtures' => [
        'categories' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/categories.php',
        'priorities' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/priorities.php',
        'rozetka_categories' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/rozetka_categories.php',
        'request_templates' => [
            [
                //'id' => 1,
                'parent_id' => NULL,
                'name' => 'Группировка товаров (Определяется типом задачи) =~}!@#$%^&*()_+`-]\'/[;.,}"?{:>|',
                'type_id' => 4,
                'direction' => 0,
                'fields' => '{"169": "1", "subject": "Группировка товаров (Определяется типом задачи) =~}!@#$%^&*()_+`-]\'/[;.,}\\"?{:>", "type_id": "4", "priority": "2", "direction": 0, "seller_id": 0, "category_id": "2", "description": "!@#$%^&*()_+`-]\'/[;.,}\\"?{:>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО\\n", "amount_to_work": "", "rz_category_id": "753399", "planned_finish_date": "2021-03-01 08:40:59"}',
                'user_id' => 4,
                'seller_id' => 0,
                'category_id' => 2,
                'amount_to_work' => NULL,
                'observers' => '[16]',
                'rz_category_id' => 753399,
            ],
            [
                //'id' => 2,
                'parent_id' => NULL,
                'name' => 'Добавление',
                'type_id' => 1,
                'direction' => 2,
                'fields' => '{"subject": "Добавление новых товаров (Работа с товарами Розетки)", "type_id": "1", "direction": "2", "description": "description"}',
                'user_id' => 4,
                'seller_id' => 0,
                'category_id' => NULL,
                'amount_to_work' => 10,
                'observers' => NULL,
                'rz_category_id' => NULL,
            ],
            [
                //'id' => 3,
                'parent_id' => 1,
                'name' => 'Изменение информации',
                'type_id' => 2,
                'direction' => 1,
                'fields' => '{"2": "1", "123": "1", "125": "1", "subject": "\\"Добавление/изменение информации в существующих товарах\\" (направление: \\"Работа с товарами Розетки\\" )", "type_id": "2", "priority": "1", "direction": "1", "seller_id": "124276", "category_id": "474", "description": "\\"Добавление/изменение информации в существующих товарах\\" (направление: \\"Работа с товарами Розетки\\" )\\nhttp://gomer.local/lisa/#/request-template/create?typeId=2&direction=1", "amount_to_work": "10", "rz_category_id": null, "planned_finish_date": null}',
                'user_id' => 19,
                'seller_id' => 124276,
                'category_id' => 474,
                'amount_to_work' => 10,
                'observers' => '[]',
                'rz_category_id' => NULL,
            ],
            [
                //'id' => 4,
                'parent_id' => 2,
                'name' => 'Добавление фат-меню',
                'type_id' => 7,
                'direction' => 0,
                'fields' => '{"1": "1", "subject": "\\"Добавление нового портала/раздела фат-меню/категории товаров\\" (направление: \\"Определяется типом задачи\\" )", "type_id": "7", "priority": null, "direction": 0, "seller_id": "83", "category_id": null, "description": "\\"Добавление нового портала/раздела фат-меню/категории товаров\\" (направление: \\"Определяется типом задачи\\" )\\nhttp://gomer.local/lisa/#/request-template/create?typeId=7&direction=0", "amount_to_work": "20", "rz_category_id": null, "planned_finish_date": null}',
                'user_id' => 20,
                'seller_id' => 83,
                'category_id' => NULL,
                'amount_to_work' => 20,
                'observers' => '[17, 21]',
                'rz_category_id' => NULL,
            ],
        ]
    ]
];