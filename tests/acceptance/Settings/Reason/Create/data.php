<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Создание значения поля',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'db_1' => [
                "lisa_fixtures" => [
                    "reasons" => [
                        [
                            "id" => 1,
                            "child_status" => 7,
                            "reason" => "Ожидается загрузка фото в товары",
                            "status" => 1
                        ],
                        [
                            "id" => 2,
                            "child_status" => 7,
                            "reason" => "Требуется уточнение информации по задаче",
                            "status" => 1
                        ],
                        [
                            "id" => 3,
                            "child_status" => 7,
                            "reason" => "Изменен приоритет задачи",
                            "status" => 1
                        ],
                        [
                            "id" => 4,
                            "child_status" => 7,
                            "reason" => "Ожидается загрузка товаров в систему",
                            "status" => 1
                        ],
                        [
                            "id" => 5,
                            "child_status" => 7,
                            "reason" => "Ожидается загрузка обновлений в систему",
                            "status" => 0
                        ],
                        [
                            "id" => 6,
                            "child_status" => 8,
                            "reason" => "Не получена запрошенная недостающая информация",
                            "status" => 1
                        ],
                        [
                            "id" => 7,
                            "child_status" => 8,
                            "reason" => "Товары ушли в ошибки",
                            "status" => 1
                        ],
                        [
                            "id" => 8,
                            "child_status" => 8,
                            "reason" => "Часть товаров ушла в ошибки",
                            "status" => 0
                        ],
                        [
                            "id" => 9,
                            "child_status" => 4,
                            "reason" => "Дубль задачи",
                            "status" => 1
                        ],
                        [
                            "id" => 10,
                            "child_status" => 4,
                            "reason" => "Все товары уже есть на сайте",
                            "status" => 1
                        ],
                        [
                            "id" => 11,
                            "child_status" => 999,
                            "reason" => "Другое (описан в коментариях)",
                            "status" => 1
                        ],
                        [
                            "id" => 12,
                            "child_status" => 3,
                            "reason" => "Нинада",
                            "status" => 0
                        ],
                        [
                            "id" => 13,
                            "child_status" => 3,
                            "reason" => "Нада",
                            "status" => 1
                        ],
                        [
                            "id" => 14,
                            "child_status" => 7,
                            "reason" => "Ожидает группировки",
                            "status" => 1
                        ],
                    ],
                ],
            ],
            'db_2' => [
                "lisa_fixtures" => [
                    "reasons" => [
                        [
                            "id" => 1,
                            "child_status" => 7,
                            "reason" => "Ожидается загрузка фото в товары",
                            "status" => 1
                        ],
                        [
                            "id" => 2,
                            "child_status" => 7,
                            "reason" => "Требуется уточнение информации по задаче",
                            "status" => 1
                        ],
                        [
                            "id" => 3,
                            "child_status" => 7,
                            "reason" => "Изменен приоритет задачи",
                            "status" => 1
                        ],
                        [
                            "id" => 4,
                            "child_status" => 7,
                            "reason" => "Ожидается загрузка товаров в систему",
                            "status" => 1
                        ],
                        [
                            "id" => 5,
                            "child_status" => 7,
                            "reason" => "Ожидается загрузка обновлений в систему",
                            "status" => 0
                        ],
                        [
                            "id" => 6,
                            "child_status" => 8,
                            "reason" => "Не получена запрошенная недостающая информация",
                            "status" => 1
                        ],
                        [
                            "id" => 7,
                            "child_status" => 8,
                            "reason" => "Товары ушли в ошибки",
                            "status" => 1
                        ],
                        [
                            "id" => 8,
                            "child_status" => 8,
                            "reason" => "Часть товаров ушла в ошибки",
                            "status" => 0
                        ],
                        [
                            "id" => 9,
                            "child_status" => 4,
                            "reason" => "Дубль задачи",
                            "status" => 1
                        ],
                        [
                            "id" => 10,
                            "child_status" => 4,
                            "reason" => "Все товары уже есть на сайте",
                            "status" => 1
                        ],
                        [
                            "id" => 11,
                            "child_status" => 999,
                            "reason" => "Другое (описан в коментариях)",
                            "status" => 1
                        ],
                        [
                            "id" => 12,
                            "child_status" => 3,
                            "reason" => "Нинада",
                            "status" => 0
                        ],
                        [
                            "id" => 13,
                            "child_status" => 3,
                            "reason" => "Нада",
                            "status" => 1
                        ],
                        [
                            "id" => 14,
                            "child_status" => 7,
                            "reason" => "Ожидает группировки",
                            "status" => 1
                        ],
                        [
                            "id" => 15,
                            "child_status" => 7,
                            "reason" => "Ожидает группировки",
                            "status" => 1
                        ],
                    ],
                ],
            ],
        ]
    ],
];
