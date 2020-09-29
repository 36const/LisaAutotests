<?php

use lisa\Page\Functional\Request;

return [
    'case1' => [
        'setting' => [
            'description' => 'Установка и изменение фильтра приоритета в таблице',
            'column' => 'priority',
            'value' => 'Информация необходима для склада',
            'amount' => 14,
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'columnValueList' => [
                "canSee" => [
                    [
                        ["selector" => Request::columnValueList('Информация необходима для склада')],
                        ["selector" => Request::columnValueList('Исправление критичной ошибки')],
                        ["selector" => Request::columnValueList('Товар-новинка/эксклюзив (трафикообразующий)')],
                        ["selector" => Request::columnValueList('(не задано)')],
                    ]
                ],
                "cantSee" => [],
            ],
            'searchValueListAll' => [
                "canSee" => [
                    [
                        ["selector" => Request::searchValueList('priority', 'Информация необходима для склада')],
                        ["selector" => Request::searchValueList('priority', 'Исправление критичной ошибки')],
                        ["selector" => Request::searchValueList('priority', 'Товар-новинка/эксклюзив (трафикообразующий)')],
                        ["selector" => Request::searchValueList('priority', '(не задано)')],
                    ]
                ],
                "cantSee" => [],
            ],

            'searchValueListNotAll' => [
                "canSee" => [
                    [
                        ["selector" => Request::searchValueList('priority', 'Исправление критичной ошибки')],
                        ["selector" => Request::searchValueList('priority', 'Товар-новинка/эксклюзив (трафикообразующий)')],
                        ["selector" => Request::searchValueList('priority', '(не задано)')],
                    ]
                ],
                "cantSee" => [
                    [
                        ["selector" => Request::searchValueList('priority', 'Информация необходима для склада')],
                    ]
                ],
            ],

            'searchValueListNotAnyone' => [
                "canSee" => [],
                "cantSee" => [
                    [
                        ["selector" => Request::searchValueList('priority', 'Исправление критичной ошибки')],
                        ["selector" => Request::searchValueList('priority', 'Товар-новинка/эксклюзив (трафикообразующий)')],
                        ["selector" => Request::searchValueList('priority', '(не задано)')],
                        ["selector" => Request::searchValueList('priority', 'Информация необходима для склада')],
                    ]
                ],
            ],

        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Установка и изменение фильтра причины в таблице',
            'column' => 'reason_id',
            'value' => '(не задано)',
            'amount' => 7,
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'columnValueList' => [
                "canSee" => [
                    [
                        ["selector" => Request::columnValueList('Все товары уже есть на сайте')],
                        ["selector" => Request::columnValueList('Другое (описан в коментариях)')],
                        ["selector" => Request::columnValueList('Дубль задачи')],
                        ["selector" => Request::columnValueList('Изменен приоритет задачи')],
                        ["selector" => Request::columnValueList('Не получена запрошенная недостающая информация')],
                        ["selector" => Request::columnValueList('Нинада')],
                        ["selector" => Request::columnValueList('Ожидается загрузка обновлений в систему')],
                        ["selector" => Request::columnValueList('Ожидается загрузка товаров в систему')],
                        ["selector" => Request::columnValueList('Ожидается загрузка фото в товары')],
                        ["selector" => Request::columnValueList('Товары ушли в ошибки')],
                        ["selector" => Request::columnValueList('Требуется уточнение информации по задаче')],
                        ["selector" => Request::columnValueList('Часть товаров ушла в ошибки')],
                        ["selector" => Request::columnValueList('(не задано)')],
                    ]
                ],
                "cantSee" => [],
            ],
            'searchValueListAll' => [
                "canSee" => [
                    [
                        ["selector" => Request::searchValueList('reason_id','Все товары уже есть на сайте')],
                        ["selector" => Request::searchValueList('reason_id','Другое (описан в коментариях)')],
                        ["selector" => Request::searchValueList('reason_id','Дубль задачи')],
                        ["selector" => Request::searchValueList('reason_id','Изменен приоритет задачи')],
                        ["selector" => Request::searchValueList('reason_id','Не получена запрошенная недостающая информация')],
                        ["selector" => Request::searchValueList('reason_id','Нинада')],
                        ["selector" => Request::searchValueList('reason_id','Ожидается загрузка обновлений в систему')],
                        ["selector" => Request::searchValueList('reason_id','Ожидается загрузка товаров в систему')],
                        ["selector" => Request::searchValueList('reason_id','Ожидается загрузка фото в товары')],
                        ["selector" => Request::searchValueList('reason_id','Товары ушли в ошибки')],
                        ["selector" => Request::searchValueList('reason_id','Требуется уточнение информации по задаче')],
                        ["selector" => Request::searchValueList('reason_id','Часть товаров ушла в ошибки')],
                        ["selector" => Request::searchValueList('reason_id','(не задано)')],
                    ]
                ],
                "cantSee" => [],
            ],
            'searchValueListNotAll' => [
                "canSee" => [
                    [
                        ["selector" => Request::searchValueList('reason_id','Все товары уже есть на сайте')],
                        ["selector" => Request::searchValueList('reason_id','Другое (описан в коментариях)')],
                        ["selector" => Request::searchValueList('reason_id','Дубль задачи')],
                        ["selector" => Request::searchValueList('reason_id','Изменен приоритет задачи')],
                        ["selector" => Request::searchValueList('reason_id','Не получена запрошенная недостающая информация')],
                        ["selector" => Request::searchValueList('reason_id','Нинада')],
                        ["selector" => Request::searchValueList('reason_id','Ожидается загрузка обновлений в систему')],
                        ["selector" => Request::searchValueList('reason_id','Ожидается загрузка товаров в систему')],
                        ["selector" => Request::searchValueList('reason_id','Ожидается загрузка фото в товары')],
                        ["selector" => Request::searchValueList('reason_id','Товары ушли в ошибки')],
                        ["selector" => Request::searchValueList('reason_id','Требуется уточнение информации по задаче')],
                        ["selector" => Request::searchValueList('reason_id','Часть товаров ушла в ошибки')],
                    ]
                ],
                "cantSee" => [
                    [
                        ["selector" => Request::searchValueList('reason_id','(не задано)')],
                    ]
                ],
            ],
            'searchValueListNotAnyone' => [
                "canSee" => [],
                "cantSee" => [
                    [
                        ["selector" => Request::searchValueList('reason_id','Все товары уже есть на сайте')],
                        ["selector" => Request::searchValueList('reason_id','Другое (описан в коментариях)')],
                        ["selector" => Request::searchValueList('reason_id','Дубль задачи')],
                        ["selector" => Request::searchValueList('reason_id','Изменен приоритет задачи')],
                        ["selector" => Request::searchValueList('reason_id','Не получена запрошенная недостающая информация')],
                        ["selector" => Request::searchValueList('reason_id','Нинада')],
                        ["selector" => Request::searchValueList('reason_id','Ожидается загрузка обновлений в систему')],
                        ["selector" => Request::searchValueList('reason_id','Ожидается загрузка товаров в систему')],
                        ["selector" => Request::searchValueList('reason_id','Ожидается загрузка фото в товары')],
                        ["selector" => Request::searchValueList('reason_id','Товары ушли в ошибки')],
                        ["selector" => Request::searchValueList('reason_id','Требуется уточнение информации по задаче')],
                        ["selector" => Request::searchValueList('reason_id','Часть товаров ушла в ошибки')],
                        ["selector" => Request::searchValueList('reason_id','(не задано)')],
                    ]
                ],
            ],
        ]
    ],

    'case3' => [
        'setting' => [
            'description' => 'Установка и изменение фильтра уточнений в таблице',
            'column' => 'author_clarifications',
            'value' => 'Более 5 уточнений',
            'amount' => 22,
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'columnValueList' => [
                "canSee" => [
                    [
                        ["selector" => Request::columnValueList('Без уточнений')],
                        ["selector" => Request::columnValueList('Более 5 уточнений')],
                        ["selector" => Request::columnValueList('Менее 5 уточнений')],
                        ["selector" => Request::columnValueList('(не задано)')],
                    ]
                ],
                "cantSee" => [],
            ],
            'searchValueListAll' => [
                "canSee" => [
                    [
                        ["selector" => Request::searchValueList('author_clarifications','Без уточнений')],
                        ["selector" => Request::searchValueList('author_clarifications','Более 5 уточнений')],
                        ["selector" => Request::searchValueList('author_clarifications','Менее 5 уточнений')],
                        ["selector" => Request::searchValueList('author_clarifications','(не задано)')],
                    ]
                ],
                "cantSee" => [],
            ],
            'searchValueListNotAll' => [
                "canSee" => [
                    [
                        ["selector" => Request::searchValueList('author_clarifications','Без уточнений')],
                        ["selector" => Request::searchValueList('author_clarifications','Менее 5 уточнений')],
                        ["selector" => Request::searchValueList('author_clarifications','(не задано)')],
                    ]
                ],
                "cantSee" => [
                    [
                        ["selector" => Request::searchValueList('author_clarifications','Более 5 уточнений')],
                    ]
                ],
            ],
            'searchValueListNotAnyone' => [
                "canSee" => [],
                "cantSee" => [
                    [
                        ["selector" => Request::searchValueList('author_clarifications','Без уточнений')],
                        ["selector" => Request::searchValueList('author_clarifications','Более 5 уточнений')],
                        ["selector" => Request::searchValueList('author_clarifications','Менее 5 уточнений')],
                        ["selector" => Request::searchValueList('author_clarifications','(не задано)')],
                    ]
                ],
            ],
        ]
    ],

    'case4' => [
        'setting' => [
            'description' => 'Установка и изменение фильтра типов в таблице',
            'column' => 'type_id',
            'value' => '2',
            'amount' => 22,
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'columnValueList' => [
                "canSee" => [
                    [
                        ["selector" => Request::columnValueList('Все товары уже есть на сайте')],
                        ["selector" => Request::columnValueList('Другое (описан в коментариях)')],
                        ["selector" => Request::columnValueList('Дубль задачи')],
                        ["selector" => Request::columnValueList('Изменен приоритет задачи')],
                        ["selector" => Request::columnValueList('Не получена запрошенная недостающая информация')],
                        ["selector" => Request::columnValueList('Нинада')],
                        ["selector" => Request::columnValueList('Ожидается загрузка обновлений в систему')],
                        ["selector" => Request::columnValueList('Ожидается загрузка товаров в систему')],
                        ["selector" => Request::columnValueList('Ожидается загрузка фото в товары')],
                        ["selector" => Request::columnValueList('Товары ушли в ошибки')],
                        ["selector" => Request::columnValueList('Требуется уточнение информации по задаче')],
                        ["selector" => Request::columnValueList('Часть товаров ушла в ошибки')],
                        ["selector" => Request::columnValueList('(не задано)')],
                    ]
                ],
                "cantSee" => [],
            ],
            'searchValueListAll' => [
                "canSee" => [
                    [
                        ["selector" => Request::searchValueList('reason_id','Все товары уже есть на сайте')],
                        ["selector" => Request::searchValueList('reason_id','Другое (описан в коментариях)')],
                        ["selector" => Request::searchValueList('reason_id','Дубль задачи')],
                        ["selector" => Request::searchValueList('reason_id','Изменен приоритет задачи')],
                        ["selector" => Request::searchValueList('reason_id','Не получена запрошенная недостающая информация')],
                        ["selector" => Request::searchValueList('reason_id','Нинада')],
                        ["selector" => Request::searchValueList('reason_id','Ожидается загрузка обновлений в систему')],
                        ["selector" => Request::searchValueList('reason_id','Ожидается загрузка товаров в систему')],
                        ["selector" => Request::searchValueList('reason_id','Ожидается загрузка фото в товары')],
                        ["selector" => Request::searchValueList('reason_id','Товары ушли в ошибки')],
                        ["selector" => Request::searchValueList('reason_id','Требуется уточнение информации по задаче')],
                        ["selector" => Request::searchValueList('reason_id','Часть товаров ушла в ошибки')],
                        ["selector" => Request::searchValueList('reason_id','(не задано)')],
                    ]
                ],
                "cantSee" => [],
            ],
            'searchValueListNotAll' => [
                "canSee" => [
                    [
                        ["selector" => Request::searchValueList('reason_id','Все товары уже есть на сайте')],
                        ["selector" => Request::searchValueList('reason_id','Другое (описан в коментариях)')],
                        ["selector" => Request::searchValueList('reason_id','Дубль задачи')],
                        ["selector" => Request::searchValueList('reason_id','Изменен приоритет задачи')],
                        ["selector" => Request::searchValueList('reason_id','Не получена запрошенная недостающая информация')],
                        ["selector" => Request::searchValueList('reason_id','Нинада')],
                        ["selector" => Request::searchValueList('reason_id','Ожидается загрузка обновлений в систему')],
                        ["selector" => Request::searchValueList('reason_id','Ожидается загрузка товаров в систему')],
                        ["selector" => Request::searchValueList('reason_id','Ожидается загрузка фото в товары')],
                        ["selector" => Request::searchValueList('reason_id','Товары ушли в ошибки')],
                        ["selector" => Request::searchValueList('reason_id','Требуется уточнение информации по задаче')],
                        ["selector" => Request::searchValueList('reason_id','Часть товаров ушла в ошибки')],
                    ]
                ],
                "cantSee" => [
                    [
                        ["selector" => Request::searchValueList('reason_id','(не задано)')],
                    ]
                ],
            ],
            'searchValueListNotAnyone' => [
                "canSee" => [],
                "cantSee" => [
                    [
                        ["selector" => Request::searchValueList('reason_id','Все товары уже есть на сайте')],
                        ["selector" => Request::searchValueList('reason_id','Другое (описан в коментариях)')],
                        ["selector" => Request::searchValueList('reason_id','Дубль задачи')],
                        ["selector" => Request::searchValueList('reason_id','Изменен приоритет задачи')],
                        ["selector" => Request::searchValueList('reason_id','Не получена запрошенная недостающая информация')],
                        ["selector" => Request::searchValueList('reason_id','Нинада')],
                        ["selector" => Request::searchValueList('reason_id','Ожидается загрузка обновлений в систему')],
                        ["selector" => Request::searchValueList('reason_id','Ожидается загрузка товаров в систему')],
                        ["selector" => Request::searchValueList('reason_id','Ожидается загрузка фото в товары')],
                        ["selector" => Request::searchValueList('reason_id','Товары ушли в ошибки')],
                        ["selector" => Request::searchValueList('reason_id','Требуется уточнение информации по задаче')],
                        ["selector" => Request::searchValueList('reason_id','Часть товаров ушла в ошибки')],
                        ["selector" => Request::searchValueList('reason_id','(не задано)')],
                    ]
                ],
            ],
        ]
    ],

];
