<?php

use lisa\Constants;

return [
    'case1' => [
        'setting' => [
            'description' => 'Заявка тип 1 направление 1 статус 6 из профиля кч-менеджера',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'responseBody' => [
                '$.fieldsData' => [
                    'requestFields' => [
                        1 => '1',
                        49 => '0',
                        50 => '0',
                        51 => '0',
                        52 => '2',
                        53 => '0.5',
                        54 => '1',
                        60 => '0',
                        64 => '0',
                        101 => '0',
                        122 => '0',
                        142 => '0',
                        143 => '0',
                        146 => '0',
                        158 => '0',
                    ],
                    'subject' => [
                        'disabled' => true,
                    ],
                    'author_id' => [
                        'url' => '/user/active-names',
                        'initValue' => [
                            0 => [
                                'id' => 1,
                                'name' => 'Система',
                            ],
                        ],
                        'disabled' => true,
                    ],
                    'manager_id' => [
                        'initValue' => [
                            0 => [
                                'id' => 2,
                                'name' => 'Администратор',
                            ],
                        ],
                        'userTeam' => 1,
                        'url' => '/user/managers',
                        'disabled' => true,
                    ],
                    'supervisor_id' => [
                        'initValue' => [
                            0 => [
                                'id' => 2,
                                'name' => 'Администратор',
                            ],
                        ],
                        'url' => '/user/supervisors',
                        'disabled' => true,
                    ],
                    'category_id' => [
                        'initValue' => [
                            'id' => 1,
                            'name' => 'Авиабилеты',
                        ],
                        'url' => '/category/all',
                        'disabled' => true,
                    ],
                    'rz_category_id' => [
                        'initValue' => [
                        ],
                        'url' => '/rozetka-category/all?name=name',
                        'disabled' => true,
                    ],
                    'cross_check_manager_id' => [
                        'initValue' => [
                            0 => [
                                'id' => 4,
                                'name' => 'Константин Куцан',
                            ],
                        ],
                        'userTeam' => 1,
                        'url' => '/user/managers',
                        'disabled' => true,
                    ],
                    'cross_check_status' => 'Не прошла кросс-чек',
                    'seller_id' => [
                        'disabled' => true,
                        'initValue' => [
                            0 => [
                                'owox_id' => 9423,
                                'title' => 'anytech',
                            ],
                            1 => [
                                'owox_id' => 67757,
                                'title' => 'iTook',
                            ],
                            2 => [
                                'owox_id' => 83,
                                'title' => 'Euromart',
                            ],
                            3 => [
                                'owox_id' => 5,
                                'title' => 'Rozetka',
                            ],
                            4 => [
                                'owox_id' => 72141,
                                'title' => 'Rozetka.md',
                            ],
                            5 => [
                                'owox_id' => 128603,
                                'title' => 'RozetkaEU',
                            ],
                            6 => [
                                'owox_id' => 124276,
                                'title' => 'Rozetka.uz',
                            ],
                            7 => [
                                'owox_id' => -2,
                                'title' => 'Все продавцы',
                            ],
                        ],
                    ],
                    'priority' => [
                        'disabled' => true,
                        'items' => [
                            0 => [
                                'disabled' => false,
                                'id' => 1,
                                'name' => 'Информация необходима для склада',
                                'status' => 1,
                            ],
                            1 => [
                                'disabled' => false,
                                'id' => 2,
                                'name' => 'Товар-новинка/эксклюзив (трафикообразующий)',
                                'status' => 1,
                            ],
                            2 => [
                                'disabled' => true,
                                'id' => 3,
                                'name' => 'Исправление критичной ошибки',
                                'status' => 0,
                            ],
                        ],
                    ],
                    'amount_to_work' => [
                        'disabled' => true,
                    ],
                    'textareaPermissions' => [
                        'description' => false,
                        'recommendations' => false,
                        'supervisor_comment' => false,
                        'result_comment' => true,
                        'correction_comment' => false,
                    ],
                    'status' => 'В работе',
                    'type_id' => [
                        'disabled' => false,
                        'value' => 'Добавление новых товаров',
                    ],
                    'reasons' => [
                        'initValue' => [
                        ],
                        'items' => [
                            [
                                'disabled' => false,
                                'id' => 11,
                                'reason' => 'Другое (описан в коментариях)',
                                'status' => 1,
                            ]
                        ],
                        'disabled' => true,
                        'text' => '',
                    ],
                    'attachments' => [
                    ],
                    'requestResult' => [
                        'inputs' => [
                            0 => [
                                'id' => 66,
                                'name' => 'Количество добавленных товаров',
                                'type' => 'integer',
                                'status' => 1,
                                'disabled' => false,
                                'required' => true,
                            ],
                            1 => [
                                'id' => 69,
                                'name' => 'Общее количество обработанных фото',
                                'type' => 'integer',
                                'status' => 1,
                                'disabled' => false,
                                'required' => true,
                            ],
                            2 => [
                                'id' => 68,
                                'name' => 'Среднее количество фото в товаре',
                                'type' => 'integer',
                                'status' => 1,
                                'disabled' => false,
                                'required' => true,
                            ],
                            3 => [
                                'id' => 111,
                                'name' => 'Количество товаров, которые уже есть в БД',
                                'type' => 'integer',
                                'status' => 1,
                                'disabled' => false,
                            ],
                            4 => [
                                'id' => 71,
                                'name' => 'Количество добавленных инструкций',
                                'type' => 'integer',
                                'status' => 1,
                                'disabled' => false,
                            ],
                            5 => [
                                'id' => 70,
                                'name' => 'Количество добавленных видеороликов',
                                'type' => 'integer',
                                'status' => 1,
                                'disabled' => false,
                            ],
                            6 => [
                                'id' => 88,
                                'name' => 'Количество товаров, к которым добавлены видео',
                                'type' => 'integer',
                                'status' => 1,
                                'disabled' => false,
                            ],
                            7 => [
                                'id' => 93,
                                'name' => 'Количество обработанных групп',
                                'type' => 'integer',
                                'status' => 1,
                                'disabled' => false,
                            ],
                            8 => [
                                'id' => 94,
                                'name' => 'Количество сгруппированых товаров',
                                'type' => 'integer',
                                'status' => 1,
                                'disabled' => false,
                            ],
                            9 => [
                                'id' => 76,
                                'name' => 'Добавлено новых СЦ',
                                'type' => 'integer',
                                'status' => 1,
                                'disabled' => false,
                            ],
                            10 => [
                                'id' => 77,
                                'name' => 'Изменено существующих СЦ',
                                'type' => 'integer',
                                'status' => 1,
                                'disabled' => false,
                            ],
                        ],
                        'selects' => [
                            0 => [
                                'id' => 21,
                                'name' => 'Наличие характеристик к товарам',
                                'type' => 'select',
                                'status' => 1,
                                'disabled' => false,
                                'required' => true,
                                'values' => [
                                    0 => [
                                        'value' => 5,
                                        'text' => 'Характеристики добавлены с обновлением фото/описания',
                                        'disabled' => true,
                                    ],
                                    1 => [
                                        'value' => 4,
                                        'text' => 'Не предоставлены продактом. Выполнен поиск.',
                                        'disabled' => false,
                                    ],
                                    2 => [
                                        'value' => 1,
                                        'text' => 'Предоставлены продактом',
                                        'disabled' => false,
                                    ],
                                    3 => [
                                        'value' => 2,
                                        'text' => 'Предоставлены продактом частично. Без дополнительного поиска.',
                                        'disabled' => false,
                                    ],
                                    4 => [
                                        'value' => 3,
                                        'text' => 'Предоставлены продактом частично. С дополнительным поиском.',
                                        'disabled' => false,
                                    ],
                                ],
                            ],
                            1 => [
                                'id' => 23,
                                'name' => 'Наличие описаний к товарам',
                                'type' => 'select',
                                'status' => 1,
                                'disabled' => false,
                                'required' => true,
                                'values' => [
                                    0 => [
                                        'value' => 14,
                                        'text' => 'Не предоставлены продактом. Выполнен поиск.',
                                        'disabled' => true,
                                    ],
                                    1 => [
                                        'value' => 11,
                                        'text' => 'Предоставлены продактом',
                                        'disabled' => false,
                                    ],
                                    2 => [
                                        'value' => 12,
                                        'text' => 'Предоставлены продактом частично. Без дополнительного поиска.',
                                        'disabled' => false,
                                    ],
                                    3 => [
                                        'value' => 13,
                                        'text' => 'Предоставлены продактом частично. С дополнительным поиском.',
                                        'disabled' => false,
                                    ],
                                ],
                            ],
                            2 => [
                                'id' => 22,
                                'name' => 'Наличие фото к товарам',
                                'type' => 'select',
                                'status' => 1,
                                'disabled' => false,
                                'required' => true,
                                'values' => [
                                    0 => [
                                        'value' => 9,
                                        'text' => 'Не предоставлены продактом. Выполнен поиск.',
                                        'disabled' => false,
                                    ],
                                    1 => [
                                        'value' => 6,
                                        'text' => 'Предоставлены продактом',
                                        'disabled' => false,
                                    ],
                                    2 => [
                                        'value' => 7,
                                        'text' => 'Предоставлены продактом частично. Без дополнительного поиска.',
                                        'disabled' => false,
                                    ],
                                    3 => [
                                        'value' => 8,
                                        'text' => 'Предоставлены продактом частично. С дополнительным поиском.',
                                        'disabled' => false,
                                    ],
                                    4 => [
                                        'value' => 10,
                                        'text' => 'Фото предоставлены фотостудией',
                                        'disabled' => true,
                                    ],
                                ],
                            ],
                            3 => [
                                'id' => 26,
                                'name' => 'Язык информации',
                                'type' => 'select',
                                'status' => 1,
                                'disabled' => false,
                                'required' => true,
                                'values' => [
                                    0 => [
                                        'value' => 23,
                                        'text' => 'Английский',
                                        'disabled' => true,
                                    ],
                                    1 => [
                                        'value' => 21,
                                        'text' => 'Русский',
                                        'disabled' => false,
                                    ],
                                    2 => [
                                        'value' => 22,
                                        'text' => 'Украинский',
                                        'disabled' => false,
                                    ],
                                ],
                            ],
                            4 => [
                                'id' => 24,
                                'name' => 'Обработка фото',
                                'type' => 'select',
                                'status' => 1,
                                'disabled' => false,
                                'values' => [
                                    0 => [
                                        'value' => 15,
                                        'text' => 'Без обработки (только кадрирование)',
                                        'disabled' => false,
                                    ],
                                    1 => [
                                        'value' => 17,
                                        'text' => 'Удаление теней/фона/ватермарков/цветокорекция',
                                        'disabled' => true,
                                    ],
                                    2 => [
                                        'value' => 16,
                                        'text' => 'Удаление теней/фона (простая обработка)',
                                        'disabled' => false,
                                    ],
                                ],
                            ],
                            5 => [
                                'id' => 27,
                                'name' => 'Видео к товарам',
                                'type' => 'select',
                                'status' => 1,
                                'disabled' => false,
                                'values' => [
                                    0 => [
                                        'value' => 25,
                                        'text' => 'Добавлено по собственной инициативе',
                                        'disabled' => false,
                                    ],
                                    1 => [
                                        'value' => 24,
                                        'text' => 'Предоставлено продактом',
                                        'disabled' => false,
                                    ],
                                    2 => [
                                        'value' => 26,
                                        'text' => 'Предоставлено продактом, в плохом качестве (производился поиск)',
                                        'disabled' => true,
                                    ],
                                ],
                            ],
                            6 => [
                                'id' => 31,
                                'name' => 'Группировка товаров (наличие варьируемых параметров)',
                                'type' => 'select',
                                'status' => 1,
                                'disabled' => false,
                                'values' => [
                                    0 => [
                                        'value' => 48,
                                        'text' => 'Без варьируемого параметра',
                                        'disabled' => false,
                                    ],
                                    1 => [
                                        'value' => 50,
                                        'text' => 'Два варьируемых параметра',
                                        'disabled' => false,
                                    ],
                                    2 => [
                                        'value' => 49,
                                        'text' => 'Один варьируемый параметр',
                                        'disabled' => false,
                                    ],
                                    3 => [
                                        'value' => 51,
                                        'text' => 'Три варьируемых параметра',
                                        'disabled' => true,
                                    ],
                                ],
                            ],
                            7 => [
                                'id' => 25,
                                'name' => 'Уточнения. Количество уточнений у автора.',
                                'type' => 'select',
                                'status' => 1,
                                'disabled' => false,
                                'values' => [
                                    0 => [
                                        'value' => 18,
                                        'text' => 'Без уточнений',
                                        'disabled' => false,
                                    ],
                                    1 => [
                                        'value' => 20,
                                        'text' => 'Более 5 уточнений',
                                        'disabled' => true,
                                    ],
                                    2 => [
                                        'value' => 19,
                                        'text' => 'Менее 5 уточнений',
                                        'disabled' => false,
                                    ],
                                ],
                            ],
                        ],
                    ],
                    'requestErrors' => [
                        'origin' => [
                            0 => [
                                'field_id' => 33,
                                'title' => 'Ошибки в оформлении товаров',
                                'errorsCount' => 0,
                                'itemsCount' => 0,
                            ],
                            1 => [
                                'field_id' => 34,
                                'title' => 'Ошибки в общих характеристиках товаров',
                                'errorsCount' => 0,
                                'itemsCount' => 0,
                            ],
                            2 => [
                                'field_id' => 35,
                                'title' => 'Ошибки в характеристиках и описаниях товаров',
                                'errorsCount' => 0,
                                'itemsCount' => 0,
                            ],
                            3 => [
                                'field_id' => 37,
                                'title' => 'Ошибки в размещении товаров',
                                'errorsCount' => 0,
                                'itemsCount' => 0,
                            ],
                            4 => [
                                'field_id' => 36,
                                'title' => 'Ошибки в группировке товаров',
                                'errorsCount' => 0,
                                'itemsCount' => 0,
                            ],
                            5 => [
                                'field_id' => 46,
                                'title' => 'Ошибки в видео к товарам',
                                'errorsCount' => 0,
                                'itemsCount' => 0,
                            ],
                            6 => [
                                'field_id' => 101,
                                'title' => 'Общее количество ошибок',
                                'errorsCount' => 0,
                                'itemsCount' => 0,
                            ],
                        ],
                        'cc' => [
                            0 => [
                                'field_id' => 128,
                                'title' => 'Ошибки в оформлении товаров (Кросс-чек)',
                                'errorsCount' => 0,
                                'itemsCount' => 0,
                            ],
                            1 => [
                                'field_id' => 129,
                                'title' => 'Ошибки в общих характеристиках товаров (Кросс-чек)',
                                'errorsCount' => 0,
                                'itemsCount' => 0,
                            ],
                            2 => [
                                'field_id' => 130,
                                'title' => 'Ошибки в характеристиках и описаниях товаров (Кросс-чек)',
                                'errorsCount' => 0,
                                'itemsCount' => 0,
                            ],
                            3 => [
                                'field_id' => 132,
                                'title' => 'Ошибки в размещении товаров (Кросс-чек)',
                                'errorsCount' => 0,
                                'itemsCount' => 0,
                            ],
                            4 => [
                                'field_id' => 131,
                                'title' => 'Ошибки в группировке товаров (Кросс-чек)',
                                'errorsCount' => 0,
                                'itemsCount' => 0,
                            ],
                            5 => [
                                'field_id' => 141,
                                'title' => 'Ошибки в видео к товарам (Кросс-чек)',
                                'errorsCount' => 0,
                                'itemsCount' => 0,
                            ],
                            6 => [
                                'field_id' => 146,
                                'title' => 'Общее количество ошибок (Кросс-чек)',
                                'errorsCount' => 0,
                                'itemsCount' => 0,
                            ],
                        ],
                    ],
                    'managerMotivation' => [
                    ],
                    'svMotivation' => [
                    ],
                    'ccMotivation' => [
                        0 => [
                            'id' => 157,
                            'name' => 'Проверенные ссылки (Кросс-чек)',
                            'type' => 'textarea',
                            'value' => NULL,
                            'readonly' => false,
                        ],
                        1 => [
                            'id' => 144,
                            'name' => 'Количество проверенных товаров (Кросс-чек)',
                            'type' => 'integer',
                            'value' => NULL,
                            'readonly' => false,
                        ],
                        2 => [
                            'id' => 142,
                            'name' => 'Рассчитанное количество проверенных товаров (Кросс-чек)',
                            'type' => 'decimal',
                            'value' => '0',
                            'readonly' => true,
                        ],
                        3 => [
                            'id' => 143,
                            'name' => 'Рассчитанное количество проверенных товаров с ошибками (Кросс-чек)',
                            'type' => 'decimal',
                            'value' => '0',
                            'readonly' => true,
                        ],
                    ],
                    'checkboxes' => [
                        'all' => [
                            0 => [
                                'id' => 1,
                                'name' => 'Ручная загрузка',
                                'value' => '1',
                                'disabled' => true,
                            ],
                            1 => [
                                'id' => 2,
                                'name' => 'Пакетная загрузка',
                                'value' => 0,
                                'disabled' => true,
                            ],
                            2 => [
                                'id' => 4,
                                'name' => 'С фотосъемкой',
                                'value' => 0,
                                'disabled' => true,
                            ],
                            3 => [
                                'id' => 8,
                                'name' => 'С размерной сеткой',
                                'value' => 0,
                                'disabled' => true,
                            ],
                            4 => [
                                'id' => 9,
                                'name' => 'С тегами к товарам',
                                'value' => 0,
                                'disabled' => true,
                            ],
                            5 => [
                                'id' => 15,
                                'name' => 'С видео',
                                'value' => 0,
                                'disabled' => true,
                            ],
                            6 => [
                                'id' => 18,
                                'name' => 'Добавление товаров в новую категорию',
                                'value' => 0,
                                'disabled' => true,
                            ],
                            7 => [
                                'id' => 12,
                                'name' => 'На основе отзыва клиента на сайте',
                                'value' => 0,
                                'disabled' => true,
                            ],
                            8 => [
                                'id' => 14,
                                'name' => 'Промо-описание',
                                'value' => 0,
                                'disabled' => true,
                            ],
                            9 => [
                                'id' => 10,
                                'name' => 'Уценка',
                                'value' => 0,
                                'disabled' => true,
                            ],
                            10 => [
                                'id' => 11,
                                'name' => 'Уценка 2',
                                'value' => 0,
                                'disabled' => true,
                            ],
                            11 => [
                                'id' => 16,
                                'name' => 'Лоты',
                                'value' => 0,
                                'disabled' => true,
                            ],
                        ],
                        'visa' => [
                            'id' => 3,
                            'name' => 'Виза супервайзера',
                            'value' => 0,
                            'disabled' => true,
                        ],
                    ],
                    'excludedFields' => Constants::EXCLUDED_FIELDS,
                    'report_period_id' => [
                        'disabled' => true,
                        'items' => [
                            0 => [
                                'id' => 1,
                                'value' => '2020-01-01 - 2021-12-31',
                            ],
                        ],
                    ],
                    'sv_report_periods' => false,
                    'additionalFields' => [
                        0 => [
                            'id' => 20,
                            'name' => 'Уровень сложности задачи',
                            'type' => 'select',
                            'value' => 0,
                            'disabled' => true,
                            'items' => [
                                0 => [
                                    'value' => 61,
                                    'text' => '1',
                                    'disabled' => false,
                                ],
                                1 => [
                                    'value' => 62,
                                    'text' => '2',
                                    'disabled' => false,
                                ],
                                2 => [
                                    'value' => 63,
                                    'text' => '3',
                                    'disabled' => false,
                                ],
                                3 => [
                                    'value' => 64,
                                    'text' => '4',
                                    'disabled' => false,
                                ],
                                4 => [
                                    'value' => 65,
                                    'text' => '5',
                                    'disabled' => false,
                                ],
                                5 => [
                                    'value' => 66,
                                    'text' => '6',
                                    'disabled' => false,
                                ],
                            ],
                        ],
                    ],
                    'observers' => [
                        'existing' => [
                        ],
                        'list' => [
                        ],
                        'initValue' => [
                        ],
                    ],
                    'planned_start_date' => [
                        'disabled' => true,
                    ],
                    'svOrHigher' => false,
                ],
            ]
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Заявка на тип 2 направление 2 статус 9 из профиля менеджера',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case2.php',
        'provider_data' => [
            'responseBody' => [
                '$.fieldsData' => [
                    'requestFields' => [
                        1 => '1',
                        49 => '0',
                        50 => '0',
                        51 => '0',
                        52 => '2',
                        53 => '0.5',
                        54 => '1',
                        60 => '0',
                        64 => '0',
                        101 => '0',
                        122 => '0',
                        142 => '0',
                        143 => '0',
                        146 => '0',
                        158 => '0',
                    ],
                    'subject' => [
                        'disabled' => true,
                    ],
                    'author_id' => [
                        'url' => '/user/active-names',
                        'initValue' => [
                            0 => [
                                'id' => 1,
                                'name' => 'Система',
                            ],
                        ],
                        'disabled' => true,
                    ],
                    'manager_id' => [
                        'initValue' => [
                            0 => [
                                'id' => 4,
                                'name' => 'Константин Куцан',
                            ],
                        ],
                        'userTeam' => 1,
                        'url' => '/user/managers',
                        'disabled' => true,
                    ],
                    'supervisor_id' => [
                        'initValue' => [
                            0 => [
                                'id' => 2,
                                'name' => 'Администратор',
                            ],
                        ],
                        'url' => '/user/supervisors',
                        'disabled' => true,
                    ],
                    'category_id' => [
                        'initValue' => [
                        ],
                        'url' => '/category/all',
                        'disabled' => true,
                    ],
                    'rz_category_id' => [
                        'initValue' => [
                        ],
                        'url' => '/rozetka-category/all?name=name',
                        'disabled' => true,
                    ],
                    'cross_check_manager_id' => [
                        'initValue' => [
                        ],
                        'userTeam' => 1,
                        'url' => '/user/managers',
                        'disabled' => true,
                    ],
                    'cross_check_status' => 'Не прошла кросс-чек',
                    'seller_id' => [
                        'disabled' => true,
                        'initValue' => [
                            'owox_id' => 83,
                            'title' => 'Euromart',
                        ],
                    ],
                    'priority' => [
                        'disabled' => true,
                        'items' => [
                            0 => [
                                'disabled' => false,
                                'id' => 1,
                                'name' => 'Информация необходима для склада',
                                'status' => 1,
                            ],
                            1 => [
                                'disabled' => false,
                                'id' => 2,
                                'name' => 'Товар-новинка/эксклюзив (трафикообразующий)',
                                'status' => 1,
                            ],
                            2 => [
                                'disabled' => true,
                                'id' => 3,
                                'name' => 'Исправление критичной ошибки',
                                'status' => 0,
                            ],
                        ],
                    ],
                    'amount_to_work' => [
                        'disabled' => true,
                    ],
                    'textareaPermissions' => [
                        'description' => false,
                        'recommendations' => false,
                        'supervisor_comment' => false,
                        'result_comment' => false,
                        'correction_comment' => false,
                    ],
                    'status' => 'Выполнена',
                    'type_id' => [
                        'disabled' => true,
                        'value' => 'Добавление/изменение информации в существующих товарах',
                    ],
                    'reasons' => [
                        'initValue' => [
                        ],
                        'items' => [
                            [
                                'disabled' => false,
                                'id' => 11,
                                'reason' => 'Другое (описан в коментариях)',
                                'status' => 1,
                            ]
                        ],
                        'disabled' => true,
                        'text' => '',
                    ],
                    'attachments' => [
                    ],
                    'requestResult' => [
                        'inputs' => [
                            0 => [
                                'id' => 67,
                                'name' => 'Количество изменённых товаров',
                                'type' => 'integer',
                                'status' => 1,
                                'disabled' => true,
                                'required' => true,
                            ],
                            1 => [
                                'id' => 72,
                                'name' => 'Количество скрытых товаров',
                                'type' => 'integer',
                                'status' => 1,
                                'disabled' => true,
                            ],
                            2 => [
                                'id' => 73,
                                'name' => 'Количество связанных категорий',
                                'type' => 'integer',
                                'status' => 1,
                                'disabled' => true,
                            ],
                            3 => [
                                'id' => 93,
                                'name' => 'Количество обработанных групп',
                                'type' => 'integer',
                                'status' => 1,
                                'disabled' => true,
                            ],
                            4 => [
                                'id' => 94,
                                'name' => 'Количество сгруппированых товаров',
                                'type' => 'integer',
                                'status' => 1,
                                'disabled' => true,
                            ],
                            5 => [
                                'id' => 74,
                                'name' => 'Количество связанных параметров',
                                'type' => 'integer',
                                'status' => 1,
                                'disabled' => true,
                            ],
                            6 => [
                                'id' => 75,
                                'name' => 'Количество связанных значений параметров',
                                'type' => 'integer',
                                'status' => 1,
                                'disabled' => true,
                            ],
                        ],
                        'selects' => [
                            0 => [
                                'id' => 25,
                                'name' => 'Уточнения. Количество уточнений у автора.',
                                'type' => 'select',
                                'status' => 1,
                                'disabled' => true,
                                'values' => [
                                    0 => [
                                        'value' => 18,
                                        'text' => 'Без уточнений',
                                        'disabled' => false,
                                    ],
                                    1 => [
                                        'value' => 20,
                                        'text' => 'Более 5 уточнений',
                                        'disabled' => true,
                                    ],
                                    2 => [
                                        'value' => 19,
                                        'text' => 'Менее 5 уточнений',
                                        'disabled' => false,
                                    ],
                                ],
                            ],
                        ],
                    ],
                    'requestErrors' => [
                        'origin' => [
                            0 => [
                                'field_id' => 37,
                                'title' => 'Ошибки в размещении товаров',
                                'errorsCount' => 0,
                                'itemsCount' => 0,
                            ],
                            1 => [
                                'field_id' => 35,
                                'title' => 'Ошибки в характеристиках и описаниях товаров',
                                'errorsCount' => 0,
                                'itemsCount' => 0,
                            ],
                            2 => [
                                'field_id' => 33,
                                'title' => 'Ошибки в оформлении товаров',
                                'errorsCount' => 0,
                                'itemsCount' => 0,
                            ],
                            3 => [
                                'field_id' => 36,
                                'title' => 'Ошибки в группировке товаров',
                                'errorsCount' => 0,
                                'itemsCount' => 0,
                            ],
                            4 => [
                                'field_id' => 38,
                                'title' => 'Ошибки в особых правилах',
                                'errorsCount' => 0,
                                'itemsCount' => 0,
                            ],
                            5 => [
                                'field_id' => 39,
                                'title' => 'Ошибки в стоп-брендах',
                                'errorsCount' => 0,
                                'itemsCount' => 0,
                            ],
                            6 => [
                                'field_id' => 101,
                                'title' => 'Общее количество ошибок',
                                'errorsCount' => 0,
                                'itemsCount' => 0,
                            ],
                        ],
                        'cc' => [
                            0 => [
                                'field_id' => 132,
                                'title' => 'Ошибки в размещении товаров (Кросс-чек)',
                                'errorsCount' => 0,
                                'itemsCount' => 0,
                            ],
                            1 => [
                                'field_id' => 130,
                                'title' => 'Ошибки в характеристиках и описаниях товаров (Кросс-чек)',
                                'errorsCount' => 0,
                                'itemsCount' => 0,
                            ],
                            2 => [
                                'field_id' => 128,
                                'title' => 'Ошибки в оформлении товаров (Кросс-чек)',
                                'errorsCount' => 0,
                                'itemsCount' => 0,
                            ],
                            3 => [
                                'field_id' => 131,
                                'title' => 'Ошибки в группировке товаров (Кросс-чек)',
                                'errorsCount' => 0,
                                'itemsCount' => 0,
                            ],
                            4 => [
                                'field_id' => 133,
                                'title' => 'Ошибки в особых правилах (Кросс-чек)',
                                'errorsCount' => 0,
                                'itemsCount' => 0,
                            ],
                            5 => [
                                'field_id' => 134,
                                'title' => 'Ошибки в стоп-брендах (Кросс-чек)',
                                'errorsCount' => 0,
                                'itemsCount' => 0,
                            ],
                            6 => [
                                'field_id' => 146,
                                'title' => 'Общее количество ошибок (Кросс-чек)',
                                'errorsCount' => 0,
                                'itemsCount' => 0,
                            ],
                        ],
                    ],
                    'managerMotivation' => [
                        0 => [
                            'id' => 53,
                            'name' => 'Коэффициент типа задачи',
                            'value' => '0.5',
                            'readonly' => true,
                        ],
                        1 => [
                            'id' => 114,
                            'name' => 'Коэффициент группировки',
                            'value' => 0,
                            'readonly' => true,
                        ],
                        2 => [
                            'id' => 50,
                            'name' => 'Рассчитанное количество измененных товаров',
                            'value' => '0',
                            'readonly' => true,
                        ],
                    ],
                    'svMotivation' => [
                    ],
                    'ccMotivation' => [
                    ],
                    'checkboxes' => [
                        'all' => [
                            0 => [
                                'id' => 8,
                                'name' => 'С размерной сеткой',
                                'value' => 0,
                                'disabled' => true,
                            ],
                            1 => [
                                'id' => 15,
                                'name' => 'С видео',
                                'value' => 0,
                                'disabled' => true,
                            ],
                            2 => [
                                'id' => 19,
                                'name' => 'С палитрой',
                                'value' => 0,
                                'disabled' => true,
                            ],
                            3 => [
                                'id' => 127,
                                'name' => 'Автомодерация',
                                'value' => 0,
                                'disabled' => false,
                            ],
                            4 => [
                                'id' => 5,
                                'name' => 'Стоп-бренды',
                                'value' => 0,
                                'disabled' => true,
                            ],
                            5 => [
                                'id' => 17,
                                'name' => 'БУ, REF',
                                'value' => 0,
                                'disabled' => true,
                            ],
                            6 => [
                                'id' => 160,
                                'name' => 'Укр. поля',
                                'value' => 0,
                                'disabled' => true,
                            ],
                            7 => [
                                'id' => 13,
                                'name' => 'Жалоба на товар продавца маркета',
                                'value' => 0,
                                'disabled' => true,
                            ],
                            8 => [
                                'id' => 159,
                                'name' => 'По заявке с MobileCourier',
                                'value' => 0,
                                'disabled' => true,
                            ],
                        ],
                        'visa' => [
                            'id' => 3,
                            'name' => 'Виза супервайзера',
                            'value' => 0,
                            'disabled' => true,
                        ],
                    ],
                    'excludedFields' => Constants::EXCLUDED_FIELDS,
                    'report_period_id' => [
                        'disabled' => true,
                        'items' => [
                            0 => [
                                'id' => 1,
                                'value' => '2020-01-01 - 2021-12-31',
                            ],
                        ],
                    ],
                    'sv_report_periods' => false,
                    'additionalFields' => [
                    ],
                    'observers' => [
                        'existing' => [
                        ],
                        'list' => [
                        ],
                        'initValue' => [
                        ],
                    ],
                    'planned_start_date' => [
                        'disabled' => true,
                    ],
                    'svOrHigher' => false,
                ],
            ],
        ]
    ],

    'case3' => [
        'setting' => [
            'description' => 'Заявка тип 4 направление 0 статус 3 из профиля продакта',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case3.php',
        'provider_data' => [
            'responseBody' => [
                '$.fieldsData' => [
                    'requestFields' => [
                        1 => '1',
                        40 => '0',
                        44 => '0',
                        49 => '0',
                        50 => '0',
                        51 => '0',
                        52 => '2',
                        53 => '0.5',
                        54 => '1',
                        101 => '0',
                        122 => '0',
                        142 => '0',
                        143 => '0',
                        146 => '0',
                        158 => '0',
                    ],
                    'subject' => [
                        'disabled' => false,
                    ],
                    'author_id' => [
                        'url' => '/user/active-names',
                        'initValue' => [
                            0 => [
                                'id' => 4,
                                'name' => 'Константин Куцан',
                            ],
                        ],
                        'disabled' => true,
                    ],
                    'manager_id' => [
                        'initValue' => [
                        ],
                        'userTeam' => 18,
                        'url' => '/user/managers',
                        'disabled' => true,
                    ],
                    'supervisor_id' => [
                        'initValue' => [
                            0 => [
                                'id' => 2,
                                'name' => 'Администратор',
                            ],
                        ],
                        'url' => '/user/supervisors',
                        'disabled' => true,
                    ],
                    'category_id' => [
                        'initValue' => [
                            'id' => 1,
                            'name' => 'Авиабилеты',
                        ],
                        'url' => '/category/all',
                        'disabled' => false,
                    ],
                    'rz_category_id' => [
                        'initValue' => [
                            'id' => 753399,
                            'name' => 'Аксессуары для алкоголя',
                        ],
                        'url' => '/rozetka-category/all?name=name',
                        'disabled' => false,
                    ],
                    'cross_check_manager_id' => [
                        'initValue' => [
                        ],
                        'userTeam' => 18,
                        'url' => '/user/managers',
                        'disabled' => true,
                    ],
                    'cross_check_status' => 'Не прошла кросс-чек',
                    'seller_id' => [
                        'disabled' => false,
                        'initValue' => [
                            'owox_id' => 83,
                            'title' => 'Euromart',
                        ],
                    ],
                    'priority' => [
                        'disabled' => false,
                        'items' => [
                            0 => [
                                'disabled' => false,
                                'id' => 1,
                                'name' => 'Информация необходима для склада',
                                'status' => 1,
                            ],
                            1 => [
                                'disabled' => false,
                                'id' => 2,
                                'name' => 'Товар-новинка/эксклюзив (трафикообразующий)',
                                'status' => 1,
                            ],
                            2 => [
                                'disabled' => true,
                                'id' => 3,
                                'name' => 'Исправление критичной ошибки',
                                'status' => 0,
                            ],
                        ],
                    ],
                    'amount_to_work' => [
                        'disabled' => true,
                    ],
                    'textareaPermissions' => [
                        'description' => true,
                        'recommendations' => false,
                        'supervisor_comment' => false,
                        'result_comment' => false,
                        'correction_comment' => false,
                    ],
                    'status' => 'На доработке',
                    'type_id' => [
                        'disabled' => false,
                        'value' => 'Группировка товаров',
                    ],
                    'reasons' => [
                        'initValue' => [
                        ],
                        'items' => [
                            0 => [
                                'id' => 11,
                                'reason' => 'Другое (описан в коментариях)',
                                'status' => 1,
                                'disabled' => false,
                            ],
                            1 => [
                                'id' => 13,
                                'reason' => 'Нада',
                                'status' => 1,
                                'disabled' => false,
                            ],
                            2 => [
                                'id' => 12,
                                'reason' => 'Нинада',
                                'status' => 0,
                                'disabled' => true,
                            ],
                        ],
                        'disabled' => false,
                        'text' => '',
                    ],
                    'attachments' => [
                    ],
                    'requestResult' => [
                        'inputs' => [
                            0 => [
                                'id' => 91,
                                'name' => 'Количество обработанных категорий',
                                'type' => 'integer',
                                'status' => 1,
                                'disabled' => true,
                                'required' => true,
                            ],
                            1 => [
                                'id' => 161,
                                'name' => 'Количество обработанных, но не сгруппированных товаров',
                                'type' => 'integer',
                                'status' => 1,
                                'disabled' => false,
                                'required' => true,
                            ],
                            2 => [
                                'id' => 94,
                                'name' => 'Количество сгруппированых товаров',
                                'type' => 'integer',
                                'status' => 1,
                                'disabled' => true,
                                'required' => true,
                            ],
                            3 => [
                                'id' => 93,
                                'name' => 'Количество обработанных групп',
                                'type' => 'integer',
                                'status' => 1,
                                'disabled' => true,
                                'required' => true,
                            ],
                            4 => [
                                'id' => 162,
                                'name' => 'Количество настроек групп (управление группами)',
                                'type' => 'integer',
                                'status' => 1,
                                'disabled' => false,
                                'required' => true,
                            ],
                            5 => [
                                'id' => 116,
                                'name' => 'Количество отправленных писем',
                                'type' => 'integer',
                                'status' => 1,
                                'disabled' => true,
                                'required' => true,
                            ],
                            6 => [
                                'id' => 163,
                                'name' => 'Количество слов в словарях',
                                'type' => 'integer',
                                'status' => 1,
                                'disabled' => true,
                                'required' => true,
                            ],
                        ],
                        'selects' => [
                            0 => [
                                'id' => 32,
                                'name' => 'Сложность группировки в заявках',
                                'type' => 'select',
                                'status' => 1,
                                'disabled' => true,
                                'required' => true,
                                'values' => [
                                    0 => [
                                        'value' => 55,
                                        'text' => 'Есть артикул или модель в больше, чем 50% товаров (3 и больше категорий)',
                                        'disabled' => false,
                                    ],
                                    1 => [
                                        'value' => 54,
                                        'text' => 'Есть артикул или модель в больше, чем 50% товаров (до 3 категорий)',
                                        'disabled' => false,
                                    ],
                                    2 => [
                                        'value' => 59,
                                        'text' => 'Есть артикул или модель в меньше, чем 50% товаров (3 и больше категорий)',
                                        'disabled' => false,
                                    ],
                                    3 => [
                                        'value' => 58,
                                        'text' => 'Есть артикул или модель в меньше, чем 50% товаров (до 3 категорий)',
                                        'disabled' => false,
                                    ],
                                    4 => [
                                        'value' => 53,
                                        'text' => 'Определено какие товары попадают в группу (3 и больше категорий)',
                                        'disabled' => false,
                                    ],
                                    5 => [
                                        'value' => 52,
                                        'text' => 'Определено какие товары попадают в группу (до 3 категорий)',
                                        'disabled' => false,
                                    ],
                                    6 => [
                                        'value' => 60,
                                        'text' => 'Отдельный список категорий (до 2-х категорий)',
                                        'disabled' => true,
                                    ],
                                    7 => [
                                        'value' => 57,
                                        'text' => 'Товаров с артикулом или моделью столько же, сколько без них (1:1) (3 и больше категорий)',
                                        'disabled' => false,
                                    ],
                                    8 => [
                                        'value' => 56,
                                        'text' => 'Товаров с артикулом или моделью столько же, сколько без них (1:1) (до 3 категорий)',
                                        'disabled' => false,
                                    ],
                                ],
                            ],
                            1 => [
                                'id' => 31,
                                'name' => 'Группировка товаров (наличие варьируемых параметров)',
                                'type' => 'select',
                                'status' => 1,
                                'disabled' => true,
                                'required' => true,
                                'values' => [
                                    0 => [
                                        'value' => 48,
                                        'text' => 'Без варьируемого параметра',
                                        'disabled' => false,
                                    ],
                                    1 => [
                                        'value' => 50,
                                        'text' => 'Два варьируемых параметра',
                                        'disabled' => false,
                                    ],
                                    2 => [
                                        'value' => 49,
                                        'text' => 'Один варьируемый параметр',
                                        'disabled' => false,
                                    ],
                                    3 => [
                                        'value' => 51,
                                        'text' => 'Три варьируемых параметра',
                                        'disabled' => true,
                                    ],
                                ],
                            ],
                        ],
                    ],
                    'requestErrors' => [
                        'origin' => [
                            0 => [
                                'field_id' => 36,
                                'title' => 'Ошибки в группировке товаров',
                                'errorsCount' => 0,
                                'itemsCount' => 0,
                            ],
                            1 => [
                                'field_id' => 101,
                                'title' => 'Общее количество ошибок',
                                'errorsCount' => 0,
                                'itemsCount' => 0,
                            ],
                        ],
                        'cc' => [
                            0 => [
                                'field_id' => 131,
                                'title' => 'Ошибки в группировке товаров (Кросс-чек)',
                                'errorsCount' => 0,
                                'itemsCount' => 0,
                            ],
                            1 => [
                                'field_id' => 146,
                                'title' => 'Общее количество ошибок (Кросс-чек)',
                                'errorsCount' => 0,
                                'itemsCount' => 0,
                            ],
                        ],
                    ],
                    'managerMotivation' => [
                    ],
                    'svMotivation' => [
                    ],
                    'ccMotivation' => [
                    ],
                    'checkboxes' => [
                        'all' => [
                            0 => [
                                'id' => 169,
                                'name' => 'Алгоритм',
                                'value' => 0,
                                'disabled' => true,
                            ],
                        ],
                        'visa' => [
                            'id' => 3,
                            'name' => 'Виза супервайзера',
                            'value' => 0,
                            'disabled' => true,
                        ],
                    ],
                    'excludedFields' => Constants::EXCLUDED_FIELDS,
                    'report_period_id' => false,
                    'sv_report_periods' => false,
                    'additionalFields' => [
                        0 => [
                            'id' => 20,
                            'name' => 'Уровень сложности задачи',
                            'type' => 'select',
                            'value' => 0,
                            'disabled' => true,
                            'items' => [
                                0 => [
                                    'value' => 61,
                                    'text' => '1',
                                    'disabled' => false,
                                ],
                                1 => [
                                    'value' => 62,
                                    'text' => '2',
                                    'disabled' => false,
                                ],
                                2 => [
                                    'value' => 63,
                                    'text' => '3',
                                    'disabled' => false,
                                ],
                                3 => [
                                    'value' => 64,
                                    'text' => '4',
                                    'disabled' => false,
                                ],
                                4 => [
                                    'value' => 65,
                                    'text' => '5',
                                    'disabled' => false,
                                ],
                                5 => [
                                    'value' => 66,
                                    'text' => '6',
                                    'disabled' => false,
                                ],
                            ],
                        ],
                    ],
                    'observers' => [
                        'existing' => [
                        ],
                        'list' => [
                        ],
                        'initValue' => [
                        ],
                    ],
                    'planned_start_date' => [
                        'disabled' => true,
                    ],
                    'svOrHigher' => false,
                ],
            ],
        ]
    ],

    'case4' => [
        'setting' => [
            'description' => 'Заявка тип 7 направление 0 статус 11 из профиля супервайзера',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case4.php',
        'provider_data' => [
            'responseBody' => [
                '$.fieldsData' => [
                    'requestFields' => [
                        1 => '1',
                        49 => '0',
                        50 => '0',
                        51 => '0',
                        52 => '2',
                        53 => '0.5',
                        54 => '1',
                        60 => '0',
                        64 => '0',
                        101 => '0',
                        122 => '0',
                        142 => '0',
                        143 => '0',
                        146 => '0',
                        158 => '0',
                    ],
                    'subject' => [
                        'disabled' => true,
                    ],
                    'author_id' => [
                        'url' => '/user/active-names',
                        'initValue' => [
                            0 => [
                                'id' => 1,
                                'name' => 'Система',
                            ],
                        ],
                        'disabled' => true,
                    ],
                    'manager_id' => [
                        'initValue' => [
                        ],
                        'userTeam' => 1,
                        'url' => '/user/managers',
                        'disabled' => true,
                    ],
                    'supervisor_id' => [
                        'initValue' => [
                            0 => [
                                'id' => 4,
                                'name' => 'Константин Куцан',
                            ],
                        ],
                        'url' => '/user/supervisors',
                        'disabled' => true,
                    ],
                    'category_id' => [
                        'initValue' => [
                            'id' => 1,
                            'name' => 'Авиабилеты',
                        ],
                        'url' => '/category/all',
                        'disabled' => true,
                    ],
                    'rz_category_id' => [
                        'initValue' => [
                        ],
                        'url' => '/rozetka-category/all?name=name',
                        'disabled' => true,
                    ],
                    'cross_check_manager_id' => [
                        'initValue' => [
                        ],
                        'userTeam' => 1,
                        'url' => '/user/managers',
                        'disabled' => true,
                    ],
                    'cross_check_status' => 'Не прошла кросс-чек',
                    'seller_id' => [
                        'disabled' => true,
                        'initValue' => [
                            'owox_id' => 83,
                            'title' => 'Euromart',
                        ],
                    ],
                    'priority' => [
                        'disabled' => true,
                        'items' => [
                            0 => [
                                'disabled' => false,
                                'id' => 1,
                                'name' => 'Информация необходима для склада',
                                'status' => 1,
                            ],
                            1 => [
                                'disabled' => false,
                                'id' => 2,
                                'name' => 'Товар-новинка/эксклюзив (трафикообразующий)',
                                'status' => 1,
                            ],
                            2 => [
                                'disabled' => true,
                                'id' => 3,
                                'name' => 'Исправление критичной ошибки',
                                'status' => 0,
                            ],
                        ],
                    ],
                    'amount_to_work' => [
                        'disabled' => true,
                    ],
                    'textareaPermissions' => [
                        'description' => false,
                        'recommendations' => false,
                        'supervisor_comment' => false,
                        'result_comment' => false,
                        'correction_comment' => false,
                    ],
                    'status' => 'Закрыта',
                    'type_id' => [
                        'disabled' => false,
                        'value' => 'Добавление нового портала/раздела фат-меню/категории товаров',
                    ],
                    'reasons' => [
                        'initValue' => [
                        ],
                        'items' => [
                            [
                                'disabled' => false,
                                'id' => 11,
                                'reason' => 'Другое (описан в коментариях)',
                                'status' => 1,
                            ]
                        ],
                        'disabled' => true,
                        'text' => '',
                    ],
                    'attachments' => [
                    ],
                    'requestResult' => [
                        'inputs' => [
                            0 => [
                                'id' => 115,
                                'name' => 'Количество добавленных категорий',
                                'type' => 'integer',
                                'status' => 1,
                                'disabled' => true,
                                'required' => true,
                            ],
                            1 => [
                                'id' => 79,
                                'name' => 'Количество добавленных/заблокированных параметров',
                                'type' => 'integer',
                                'status' => 1,
                                'disabled' => true,
                                'required' => true,
                            ],
                            2 => [
                                'id' => 80,
                                'name' => 'Количество добавленных значений к параметрам',
                                'type' => 'integer',
                                'status' => 1,
                                'disabled' => true,
                                'required' => true,
                            ],
                            3 => [
                                'id' => 90,
                                'name' => 'Количество заполненных параметров в товарах при изменении структуры категории',
                                'type' => 'integer',
                                'status' => 1,
                                'disabled' => true,
                                'required' => true,
                            ],
                            4 => [
                                'id' => 113,
                                'name' => 'Перевязано опций',
                                'type' => 'integer',
                                'status' => 1,
                                'disabled' => true,
                                'required' => true,
                            ],
                            5 => [
                                'id' => 85,
                                'name' => 'Отправлено файлов продакту на заполнение',
                                'type' => 'integer',
                                'status' => 1,
                                'disabled' => true,
                                'required' => true,
                            ],
                            6 => [
                                'id' => 97,
                                'name' => 'Количество измененных товаров (Splitter)',
                                'type' => 'integer',
                                'status' => 1,
                                'disabled' => true,
                                'required' => true,
                            ],
                            7 => [
                                'id' => 98,
                                'name' => 'Количество измененных товаров (пакетно в Owox)',
                                'type' => 'integer',
                                'status' => 1,
                                'disabled' => true,
                                'required' => true,
                            ],
                            8 => [
                                'id' => 99,
                                'name' => 'Количество измененных товаров (поштучно в Owox)',
                                'type' => 'integer',
                                'status' => 1,
                                'disabled' => true,
                                'required' => true,
                            ],
                            9 => [
                                'id' => 84,
                                'name' => 'Количество настроенных редиректов',
                                'type' => 'integer',
                                'status' => 1,
                                'disabled' => true,
                                'required' => true,
                            ],
                            10 => [
                                'id' => 112,
                                'name' => 'Количество добавленных/измененных точек входа на портале/в фат-меню',
                                'type' => 'integer',
                                'status' => 1,
                                'disabled' => true,
                                'required' => true,
                            ],
                            11 => [
                                'id' => 81,
                                'name' => 'Количество добавленных иконок на портальную страницу',
                                'type' => 'integer',
                                'status' => 1,
                                'disabled' => true,
                                'required' => true,
                            ],
                        ],
                        'selects' => [
                            0 => [
                                'id' => 28,
                                'name' => 'Перенос информации при изменении структуры категории',
                                'type' => 'select',
                                'status' => 1,
                                'disabled' => true,
                                'required' => true,
                                'values' => [
                                    0 => [
                                        'value' => 29,
                                        'text' => 'Перенос из названий товаров в выборы из списков',
                                        'disabled' => true,
                                    ],
                                    1 => [
                                        'value' => 27,
                                        'text' => 'Перенос из текстовых полей/блоков в выборы из списков',
                                        'disabled' => false,
                                    ],
                                    2 => [
                                        'value' => 28,
                                        'text' => 'Перенос из текстовых полей/блоков в текстовые поля',
                                        'disabled' => false,
                                    ],
                                ],
                            ],
                        ],
                    ],
                    'requestErrors' => [
                        'origin' => [
                            0 => [
                                'field_id' => 40,
                                'title' => 'Ошибки в редиректах',
                                'errorsCount' => 0,
                                'itemsCount' => 0,
                            ],
                            1 => [
                                'field_id' => 41,
                                'title' => 'Ошибки в структурах категорий',
                                'errorsCount' => 0,
                                'itemsCount' => 0,
                            ],
                            2 => [
                                'field_id' => 42,
                                'title' => 'Ошибки в портальных страницах',
                                'errorsCount' => 0,
                                'itemsCount' => 0,
                            ],
                            3 => [
                                'field_id' => 45,
                                'title' => 'Ошибки в значениях параметров и в производителях',
                                'errorsCount' => 0,
                                'itemsCount' => 0,
                            ],
                            4 => [
                                'field_id' => 101,
                                'title' => 'Общее количество ошибок',
                                'errorsCount' => 0,
                                'itemsCount' => 0,
                            ],
                        ],
                        'cc' => [
                            0 => [
                                'field_id' => 135,
                                'title' => 'Ошибки в редиректах (Кросс-чек)',
                                'errorsCount' => 0,
                                'itemsCount' => 0,
                            ],
                            1 => [
                                'field_id' => 136,
                                'title' => 'Ошибки в структурах категорий (Кросс-чек)',
                                'errorsCount' => 0,
                                'itemsCount' => 0,
                            ],
                            2 => [
                                'field_id' => 137,
                                'title' => 'Ошибки в портальных страницах (Кросс-чек)',
                                'errorsCount' => 0,
                                'itemsCount' => 0,
                            ],
                            3 => [
                                'field_id' => 140,
                                'title' => 'Ошибки в значениях параметров и в производителях (Кросс-чек)',
                                'errorsCount' => 0,
                                'itemsCount' => 0,
                            ],
                            4 => [
                                'field_id' => 146,
                                'title' => 'Общее количество ошибок (Кросс-чек)',
                                'errorsCount' => 0,
                                'itemsCount' => 0,
                            ],
                        ],
                    ],
                    'managerMotivation' => [
                        0 => [
                            'id' => 53,
                            'name' => 'Коэффициент типа задачи',
                            'value' => '0.5',
                            'readonly' => true,
                        ],
                        1 => [
                            'id' => 54,
                            'name' => 'Коэффициент уровня сложности задачи',
                            'value' => '1',
                            'readonly' => true,
                        ],
                        2 => [
                            'id' => 55,
                            'name' => 'Рассчитанное количество выполненных работ',
                            'value' => 0,
                            'readonly' => true,
                        ],
                    ],
                    'svMotivation' => [
                        0 => [
                            'id' => 105,
                            'name' => 'Количество проверенных категорий',
                            'type' => 'integer',
                            'value' => NULL,
                            'readonly' => false,
                        ],
                        1 => [
                            'id' => 106,
                            'name' => 'Количество проверенных параметров',
                            'type' => 'integer',
                            'value' => NULL,
                            'readonly' => false,
                        ],
                        2 => [
                            'id' => 104,
                            'name' => 'Количество проверенных значений параметров',
                            'type' => 'integer',
                            'value' => NULL,
                            'readonly' => false,
                        ],
                        3 => [
                            'id' => 109,
                            'name' => 'Количество проверенных редиректов',
                            'type' => 'integer',
                            'value' => NULL,
                            'readonly' => false,
                        ],
                        4 => [
                            'id' => 107,
                            'name' => 'Количество проверенных порталов/точек входа в фат-меню',
                            'type' => 'integer',
                            'value' => NULL,
                            'readonly' => false,
                        ],
                        5 => [
                            'id' => 65,
                            'name' => 'Количество проверенных товаров',
                            'type' => 'integer',
                            'value' => NULL,
                            'readonly' => false,
                        ],
                        6 => [
                            'id' => 121,
                            'name' => 'Проверенные ссылки',
                            'type' => 'textarea',
                            'value' => NULL,
                            'readonly' => false,
                        ],
                    ],
                    'ccMotivation' => [
                        0 => [
                            'id' => 150,
                            'name' => 'Количество проверенных категорий (Кросс-чек)',
                            'type' => 'integer',
                            'value' => NULL,
                            'readonly' => false,
                        ],
                        1 => [
                            'id' => 151,
                            'name' => 'Количество проверенных параметров (Кросс-чек)',
                            'type' => 'integer',
                            'value' => NULL,
                            'readonly' => false,
                        ],
                        2 => [
                            'id' => 149,
                            'name' => 'Количество проверенных значений параметров (Кросс-чек)',
                            'type' => 'integer',
                            'value' => NULL,
                            'readonly' => false,
                        ],
                        3 => [
                            'id' => 154,
                            'name' => 'Количество проверенных редиректов (Кросс-чек)',
                            'type' => 'integer',
                            'value' => NULL,
                            'readonly' => false,
                        ],
                        4 => [
                            'id' => 152,
                            'name' => 'Количество проверенных порталов/точек входа в фат-меню (Кросс-чек)',
                            'type' => 'integer',
                            'value' => NULL,
                            'readonly' => false,
                        ],
                        5 => [
                            'id' => 144,
                            'name' => 'Количество проверенных товаров (Кросс-чек)',
                            'type' => 'integer',
                            'value' => NULL,
                            'readonly' => false,
                        ],
                        6 => [
                            'id' => 157,
                            'name' => 'Проверенные ссылки (Кросс-чек)',
                            'type' => 'textarea',
                            'value' => NULL,
                            'readonly' => false,
                        ],
                    ],
                    'checkboxes' => [
                        'all' => [
                            0 => [
                                'id' => 1,
                                'name' => 'Ручная загрузка',
                                'value' => '1',
                                'disabled' => true,
                            ],
                            1 => [
                                'id' => 2,
                                'name' => 'Пакетная загрузка',
                                'value' => 0,
                                'disabled' => true,
                            ],
                            2 => [
                                'id' => 6,
                                'name' => 'Точки входа',
                                'value' => 0,
                                'disabled' => true,
                            ],
                            3 => [
                                'id' => 7,
                                'name' => 'Добавление графики',
                                'value' => 0,
                                'disabled' => true,
                            ],
                        ],
                        'visa' => [
                            'id' => 3,
                            'name' => 'Виза супервайзера',
                            'value' => 0,
                            'disabled' => true,
                        ],
                    ],
                    'excludedFields' => Constants::EXCLUDED_FIELDS,
                    'report_period_id' => [
                        'disabled' => true,
                        'items' => [
                            0 => [
                                'id' => 1,
                                'value' => '2020-01-01 - 2021-12-31',
                            ],
                        ],
                    ],
                    'sv_report_periods' => [
                        'disabled' => true,
                    ],
                    'additionalFields' => [
                        0 => [
                            'id' => 20,
                            'name' => 'Уровень сложности задачи',
                            'type' => 'select',
                            'value' => 0,
                            'disabled' => false,
                            'items' => [
                                0 => [
                                    'value' => 61,
                                    'text' => '1',
                                    'disabled' => false,
                                ],
                                1 => [
                                    'value' => 62,
                                    'text' => '2',
                                    'disabled' => false,
                                ],
                                2 => [
                                    'value' => 63,
                                    'text' => '3',
                                    'disabled' => false,
                                ],
                                3 => [
                                    'value' => 64,
                                    'text' => '4',
                                    'disabled' => false,
                                ],
                                4 => [
                                    'value' => 65,
                                    'text' => '5',
                                    'disabled' => false,
                                ],
                                5 => [
                                    'value' => 66,
                                    'text' => '6',
                                    'disabled' => false,
                                ],
                            ],
                        ],
                        1 => [
                            'id' => 30,
                            'name' => 'Сложность структуры',
                            'type' => 'select',
                            'value' => 0,
                            'disabled' => true,
                            'items' => [
                                0 => [
                                    'value' => 39,
                                    'text' => 'Простые (физические характеристики)',
                                    'disabled' => false,
                                ],
                                1 => [
                                    'value' => 40,
                                    'text' => 'Простые (физические характеристики) 1 вид товара',
                                    'disabled' => false,
                                ],
                                2 => [
                                    'value' => 41,
                                    'text' => 'Простые (физические характеристики) несколько видов товара',
                                    'disabled' => false,
                                ],
                                3 => [
                                    'value' => 45,
                                    'text' => 'Сложные (физические + функциональные + технологические характеристики)',
                                    'disabled' => false,
                                ],
                                4 => [
                                    'value' => 46,
                                    'text' => 'Сложные (физические + функциональные + технологические характеристики) 1 вид товара',
                                    'disabled' => false,
                                ],
                                5 => [
                                    'value' => 47,
                                    'text' => 'Сложные (физические + функциональные + технологические характеристики) несколько видов товара',
                                    'disabled' => true,
                                ],
                                6 => [
                                    'value' => 42,
                                    'text' => 'Средней сложности (физические + функциональные характеристики)',
                                    'disabled' => false,
                                ],
                                7 => [
                                    'value' => 43,
                                    'text' => 'Средней сложности (физические + функциональные характеристики) 1 вид товара',
                                    'disabled' => false,
                                ],
                                8 => [
                                    'value' => 44,
                                    'text' => 'Средней сложности (физические + функциональные характеристики) несколько видов товара',
                                    'disabled' => false,
                                ],
                            ],
                        ],
                        2 => [
                            'id' => 29,
                            'name' => 'Вид структуры',
                            'type' => 'select',
                            'value' => 0,
                            'disabled' => true,
                            'items' => [
                                0 => [
                                    'value' => 30,
                                    'text' => 'Новые разделы (категории верхнего уровня, второго за верхним уровня)',
                                    'disabled' => false,
                                ],
                                1 => [
                                    'value' => 31,
                                    'text' => 'Новые категории промежуточных уровней/автопорталы',
                                    'disabled' => false,
                                ],
                                2 => [
                                    'value' => 32,
                                    'text' => 'Новые конечные категории',
                                    'disabled' => false,
                                ],
                                3 => [
                                    'value' => 33,
                                    'text' => 'Существующие разделы (категории верхнего уровня, второго за верхним уровня)',
                                    'disabled' => false,
                                ],
                                4 => [
                                    'value' => 34,
                                    'text' => 'Существующие категории промежуточных уровней/автопорталы',
                                    'disabled' => false,
                                ],
                                5 => [
                                    'value' => 35,
                                    'text' => 'Существующие конечные категории',
                                    'disabled' => false,
                                ],
                                6 => [
                                    'value' => 36,
                                    'text' => 'Существующие разделы (категории верхнего уровня, второго за верхним уровня) + перенос информации',
                                    'disabled' => false,
                                ],
                                7 => [
                                    'value' => 37,
                                    'text' => 'Существующие категории промежуточных уровней/автопорталы + перенос информации',
                                    'disabled' => false,
                                ],
                                8 => [
                                    'value' => 38,
                                    'text' => 'Существующие конечные категории + перенос информации',
                                    'disabled' => true,
                                ],
                            ],
                        ],
                    ],
                    'observers' => [
                        'existing' => [
                        ],
                        'list' => [
                        ],
                        'initValue' => [
                        ],
                    ],
                    'planned_start_date' => [
                        'disabled' => true,
                    ],
                    'svOrHigher' => true,
                ],
            ]
        ]
    ],

];
