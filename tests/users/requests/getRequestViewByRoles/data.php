<?php

use lisa\Constants;

return [
    'case1_1' => [
        'setting' => [
            'description' => 'Заявка тип 1 направление 1 статус 6 из профиля кч-менеджера',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1_1.php',
        'provider_data' => [
            'responseBody' => [
                'request' => (include __DIR__ . '/fixture/case1_1.php')['lisa_fixtures']['requests'][0],
                'isCrossCheck' => true,
                'fieldsForOuter' => [],
                'fieldsForPC' => [],
                'fieldsData' => [
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
                        'visible' => true,
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
                        0 => [
                            'alias' => '!@#$%^&*()_+`-=][\';.|}{:?><.jpg',
                            'canDelete' => false,
                            'id' => 4,
                            'isImage' => true,
                            'link' => 'http://minio.docker/lisa-auto/1/803902_~!@#$%^&*()_+`-=][;.|}{:?><.jpg',
                            'size' => ' (0.03 Mb)',
                            'status' => 3,
                            'uploaded_at' => '2021-10-09 00:00:00',
                            'uploaded_by' => 'Константин Куцан',
                        ],
                        1 => [
                            'alias' => '194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd',
                            'canDelete' => false,
                            'id' => 1,
                            'isImage' => false,
                            'link' => 'http://minio.docker/lisa-auto/1/803902_194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd',
                            'size' => ' (0.06 Mb)',
                            'status' => 3,
                            'uploaded_at' => '2021-10-09 00:00:00',
                            'uploaded_by' => 'Константин Куцан',
                        ],
                        2 => [
                            'alias' => 'doc .doc',
                            'canDelete' => false,
                            'id' => 2,
                            'isImage' => false,
                            'link' => 'http://minio.docker/lisa-auto/1/803902_doc.doc',
                            'size' => ' (0.03 Mb)',
                            'status' => 3,
                            'uploaded_at' => '2021-10-09 00:00:00',
                            'uploaded_by' => 'Константин Куцан',
                        ],
                        3 => [
                            'alias' => 'pptx_абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїі.pptx',
                            'canDelete' => false,
                            'id' => 3,
                            'isImage' => false,
                            'link' => 'http://minio.docker/lisa-auto/1/803902_pptx_abvgdeezzijklmnoprstufhccssyeuaegii.pptx',
                            'size' => ' (0.09 Mb)',
                            'status' => 3,
                            'uploaded_at' => '2021-10-09 00:00:00',
                            'uploaded_by' => 'Константин Куцан',
                        ],
                    ],
                    'resultFieldsOrder' => [],
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
                                'value' => date('Y-01-01') . ' - ' . date('Y-m-d', strtotime('last day of previous month -1 month -1 day')),
                            ],
                            1 => [
                                'id' => 2,
                                'value' => date('Y-m-01', strtotime('-1 month')) . ' - ' . date('Y-m-d', strtotime('last day of previous month')),
                            ],
                            2 => [
                                'id' => 3,
                                'value' => date('Y-m-01') . ' - ' . date('Y-m-d'),
                            ],
                            3 => [
                                'id' => 4,
                                'value' => date('Y-m-d', strtotime('+1 day')) . ' - ' . date('Y-m-d', strtotime('last day of this month')),
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
                'buttons' => [
                    0 => [
                        'component' => 'Reason',
                        'title' => 'Ожидать',
                        'visible' => true,
                        'targetStatus' => 7,
                        'action' => 'change-reason',
                        'icon' => 'mdiTimerSand',
                        'currentStatus' => 6,
                    ],
                    1 => [
                        'component' => 'Reason',
                        'title' => 'Отменить',
                        'visible' => true,
                        'targetStatus' => 4,
                        'action' => 'change-reason',
                        'icon' => 'mdiCloseThick',
                        'currentStatus' => 6,
                    ],
                    2 => [
                        'component' => 'Complete',
                        'title' => 'Частично выполнена',
                        'visible' => true,
                        'targetStatus' => 8,
                        'icon' => 'mdiBookmarkCheckOutline',
                        'currentStatus' => 6,
                    ],
                    3 => [
                        'component' => 'Complete',
                        'title' => 'Выполнена',
                        'visible' => true,
                        'targetStatus' => 9,
                        'icon' => 'mdiCheckBold',
                        'withoutReason' => true,
                        'currentStatus' => 6,
                    ],
                ],
                'bredcrumbStatus' => [
                    'text' => 'В работе',
                    'link' => '#/request/list/in-work',
                ],
            ]
        ]
    ],

    'case1_2' => [
        'setting' => [
            'description' => 'Заявка тип 1 направление 2 статус 4 из профиля менеджера',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1_2.php',
        'provider_data' => [
            'responseBody' => [
                'request' => (include __DIR__ . '/fixture/case1_2.php')['lisa_fixtures']['requests'][0],
                'isCrossCheck' => false,
                'fieldsData' => [
                    'requestFields' => [
                        8 => '1',
                        15 => '1',
                        19 => '1',
                        49 => '0',
                        50 => '0',
                        51 => '0',
                        52 => '2',
                        53 => '0.5',
                        54 => '1',
                        60 => '0',
                        64 => '0',
                        101 => '0',
                        114 => '3',
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
                        'visible' => true,
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
                                'id' => 1,
                                'name' => 'Информация необходима для склада',
                                'status' => 1,
                                'disabled' => false,
                            ],
                            1 => [
                                'id' => 3,
                                'name' => 'Исправление критичной ошибки',
                                'status' => 0,
                                'disabled' => true,
                            ],
                            2 => [
                                'id' => 2,
                                'name' => 'Товар-новинка/эксклюзив (трафикообразующий)',
                                'status' => 1,
                                'disabled' => false,
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
                    'status' => 'Отменена',
                    'type_id' => [
                        'disabled' => false,
                        'value' => 'Добавление новых товаров',
                    ],
                    'reasons' => [
                        'initValue' => [
                        ],
                        'items' => [
                            0 => [
                                'id' => 10,
                                'reason' => 'Все товары уже есть на сайте',
                                'status' => 1,
                                'disabled' => false,
                            ],
                            1 => [
                                'id' => 11,
                                'reason' => 'Другое (описан в коментариях)',
                                'status' => 1,
                                'disabled' => false,
                            ],
                            2 => [
                                'id' => 9,
                                'reason' => 'Дубль задачи',
                                'status' => 1,
                                'disabled' => false,
                            ],
                        ],
                        'disabled' => true,
                        'text' => '',
                    ],
                    'attachments' => [
                        0 => [
                            'alias' => '194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd',
                            'id' => 1,
                            'size' => ' (0.06 Mb)',
                            'uploaded_at' => '2021-10-09 00:00:00',
                            'uploaded_by' => 'Константин Куцан',
                            'isImage' => false,
                            'status' => 3,
                            'link' => 'http://minio.docker/lisa-auto/1/803902_194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd',
                            'canDelete' => false,
                        ],
                        1 => [
                            'alias' => 'doc .doc',
                            'id' => 2,
                            'size' => ' (0.03 Mb)',
                            'uploaded_at' => '2021-10-09 00:00:00',
                            'uploaded_by' => 'Константин Куцан',
                            'isImage' => false,
                            'status' => 3,
                            'link' => 'http://minio.docker/lisa-auto/1/803902_doc.doc',
                            'canDelete' => false,
                        ],
                        2 => [
                            'alias' => 'pptx_абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїі.pptx',
                            'id' => 3,
                            'size' => ' (0.09 Mb)',
                            'uploaded_at' => '2021-10-09 00:00:00',
                            'uploaded_by' => 'Константин Куцан',
                            'isImage' => false,
                            'status' => 3,
                            'link' => 'http://minio.docker/lisa-auto/1/803902_pptx_abvgdeezzijklmnoprstufhccssyeuaegii.pptx',
                            'canDelete' => false,
                        ],
                        3 => [
                            'alias' => '!@#$%^&*()_+`-=][\';.|}{:?><.jpg',
                            'id' => 4,
                            'size' => ' (0.03 Mb)',
                            'uploaded_at' => '2021-10-09 00:00:00',
                            'uploaded_by' => 'Константин Куцан',
                            'isImage' => true,
                            'status' => 3,
                            'link' => 'http://minio.docker/lisa-auto/1/803902_~!@#$%^&*()_+`-=][;.|}{:?><.jpg',
                            'canDelete' => false,
                        ],
                    ],
                    'requestResult' => [
                        'inputs' => [
                            0 => [
                                'id' => 118,
                                'name' => 'Количество обработанных товаров',
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
                                'required' => true,
                            ],
                            2 => [
                                'id' => 73,
                                'name' => 'Количество связанных категорий',
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
                    'resultFieldsOrder' => [
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
                            'value' => '3',
                            'readonly' => true,
                        ],
                        2 => [
                            'id' => 49,
                            'name' => 'Рассчитанное количество добавленных товаров',
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
                                'value' => '1',
                                'disabled' => true,
                            ],
                            1 => [
                                'id' => 15,
                                'name' => 'С видео',
                                'value' => '1',
                                'disabled' => true,
                            ],
                            2 => [
                                'id' => 19,
                                'name' => 'С палитрой',
                                'value' => '1',
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
                                'value' => date('Y-01-01') . ' - ' . date('Y-m-d', strtotime('last day of previous month -1 month -1 day')),
                            ],
                            1 => [
                                'id' => 2,
                                'value' => date('Y-m-01', strtotime('-1 month')) . ' - ' . date('Y-m-d', strtotime('last day of previous month')),
                            ],
                            2 => [
                                'id' => 3,
                                'value' => date('Y-m-01') . ' - ' . date('Y-m-d'),
                            ],
                            3 => [
                                'id' => 4,
                                'value' => date('Y-m-d', strtotime('+1 day')) . ' - ' . date('Y-m-d', strtotime('last day of this month')),
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
                'buttons' => [
                ],
                'bredcrumbStatus' => [
                    'text' => 'Отменены',
                    'link' => '#/request/list/declined',
                ],
                'fieldsForPC' => [
                ],
                'fieldsForOuter' => [
                ],
            ]
        ]
    ],

    'case2_1' => [
        'setting' => [
            'description' => 'Заявка тип 2 направление 1 статус 1 из профиля кч-менеджера',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case2_1.php',
        'provider_data' => [
            'responseBody' => [
                'request' => (include __DIR__ . '/fixture/case2_1.php')['lisa_fixtures']['requests'][0],
                'isCrossCheck' => false,
                'fieldsData' => [
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
                        'visible' => true,
                    ],
                    'cross_check_status' => 'Не прошла кросс-чек',
                    'seller_id' => [
                        'disabled' => false,
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
                        'disabled' => false,
                        'items' => [
                            0 => [
                                'id' => 1,
                                'name' => 'Информация необходима для склада',
                                'status' => 1,
                                'disabled' => false,
                            ],
                            1 => [
                                'id' => 3,
                                'name' => 'Исправление критичной ошибки',
                                'status' => 0,
                                'disabled' => true,
                            ],
                            2 => [
                                'id' => 2,
                                'name' => 'Товар-новинка/эксклюзив (трафикообразующий)',
                                'status' => 1,
                                'disabled' => false,
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
                    'status' => 'Новая',
                    'type_id' => [
                        'disabled' => false,
                        'value' => 'Добавление/изменение информации в существующих товарах',
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
                        ],
                        'disabled' => true,
                        'text' => '',
                    ],
                    'attachments' => [
                        0 => [
                            'alias' => '194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd',
                            'id' => 1,
                            'size' => ' (0.06 Mb)',
                            'uploaded_at' => '2021-10-09 00:00:00',
                            'uploaded_by' => 'Константин Куцан',
                            'isImage' => false,
                            'status' => 3,
                            'link' => 'http://minio.docker/lisa-auto/1/803902_194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd',
                            'canDelete' => false,
                        ],
                        1 => [
                            'alias' => 'doc .doc',
                            'id' => 2,
                            'size' => ' (0.03 Mb)',
                            'uploaded_at' => '2021-10-09 00:00:00',
                            'uploaded_by' => 'Константин Куцан',
                            'isImage' => false,
                            'status' => 3,
                            'link' => 'http://minio.docker/lisa-auto/1/803902_doc.doc',
                            'canDelete' => false,
                        ],
                        2 => [
                            'alias' => 'pptx_абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїі.pptx',
                            'id' => 3,
                            'size' => ' (0.09 Mb)',
                            'uploaded_at' => '2021-10-09 00:00:00',
                            'uploaded_by' => 'Константин Куцан',
                            'isImage' => false,
                            'status' => 3,
                            'link' => 'http://minio.docker/lisa-auto/1/803902_pptx_abvgdeezzijklmnoprstufhccssyeuaegii.pptx',
                            'canDelete' => false,
                        ],
                        3 => [
                            'alias' => '!@#$%^&*()_+`-=][\';.|}{:?><.jpg',
                            'id' => 4,
                            'size' => ' (0.03 Mb)',
                            'uploaded_at' => '2021-10-09 00:00:00',
                            'uploaded_by' => 'Константин Куцан',
                            'isImage' => true,
                            'status' => 3,
                            'link' => 'http://minio.docker/lisa-auto/1/803902_~!@#$%^&*()_+`-=][;.|}{:?><.jpg',
                            'canDelete' => false,
                        ],
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
                                'id' => 111,
                                'name' => 'Количество товаров, которые уже есть в БД',
                                'type' => 'integer',
                                'status' => 1,
                                'disabled' => true,
                            ],
                            2 => [
                                'id' => 69,
                                'name' => 'Общее количество обработанных фото',
                                'type' => 'integer',
                                'status' => 1,
                                'disabled' => true,
                            ],
                            3 => [
                                'id' => 68,
                                'name' => 'Среднее количество фото в товаре',
                                'type' => 'integer',
                                'status' => 1,
                                'disabled' => true,
                            ],
                            4 => [
                                'id' => 71,
                                'name' => 'Количество добавленных инструкций',
                                'type' => 'integer',
                                'status' => 1,
                                'disabled' => true,
                            ],
                            5 => [
                                'id' => 70,
                                'name' => 'Количество добавленных видеороликов',
                                'type' => 'integer',
                                'status' => 1,
                                'disabled' => true,
                            ],
                            6 => [
                                'id' => 88,
                                'name' => 'Количество товаров, к которым добавлены видео',
                                'type' => 'integer',
                                'status' => 1,
                                'disabled' => true,
                            ],
                            7 => [
                                'id' => 93,
                                'name' => 'Количество обработанных групп',
                                'type' => 'integer',
                                'status' => 1,
                                'disabled' => true,
                            ],
                            8 => [
                                'id' => 94,
                                'name' => 'Количество сгруппированых товаров',
                                'type' => 'integer',
                                'status' => 1,
                                'disabled' => true,
                            ],
                            9 => [
                                'id' => 76,
                                'name' => 'Добавлено новых СЦ',
                                'type' => 'integer',
                                'status' => 1,
                                'disabled' => true,
                            ],
                            10 => [
                                'id' => 77,
                                'name' => 'Изменено существующих СЦ',
                                'type' => 'integer',
                                'status' => 1,
                                'disabled' => true,
                            ],
                        ],
                        'selects' => [
                            0 => [
                                'id' => 21,
                                'name' => 'Наличие характеристик к товарам',
                                'type' => 'select',
                                'status' => 1,
                                'disabled' => true,
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
                                'disabled' => true,
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
                                'disabled' => true,
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
                                'id' => 24,
                                'name' => 'Обработка фото',
                                'type' => 'select',
                                'status' => 1,
                                'disabled' => true,
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
                            4 => [
                                'id' => 27,
                                'name' => 'Видео к товарам',
                                'type' => 'select',
                                'status' => 1,
                                'disabled' => true,
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
                            5 => [
                                'id' => 31,
                                'name' => 'Группировка товаров (наличие варьируемых параметров)',
                                'type' => 'select',
                                'status' => 1,
                                'disabled' => true,
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
                            6 => [
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
                            7 => [
                                'id' => 26,
                                'name' => 'Язык информации',
                                'type' => 'select',
                                'status' => 1,
                                'disabled' => true,
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
                    'resultFieldsOrder' => [
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
                                'id' => 1,
                                'name' => 'Ручная загрузка',
                                'value' => '1',
                                'disabled' => false,
                            ],
                            1 => [
                                'id' => 2,
                                'name' => 'Пакетная загрузка',
                                'value' => 0,
                                'disabled' => false,
                            ],
                            2 => [
                                'id' => 4,
                                'name' => 'С фотосъемкой',
                                'value' => 0,
                                'disabled' => false,
                            ],
                            3 => [
                                'id' => 8,
                                'name' => 'С размерной сеткой',
                                'value' => 0,
                                'disabled' => false,
                            ],
                            4 => [
                                'id' => 9,
                                'name' => 'С тегами к товарам',
                                'value' => 0,
                                'disabled' => false,
                            ],
                            5 => [
                                'id' => 15,
                                'name' => 'С видео',
                                'value' => 0,
                                'disabled' => false,
                            ],
                            6 => [
                                'id' => 12,
                                'name' => 'На основе отзыва клиента на сайте',
                                'value' => 0,
                                'disabled' => false,
                            ],
                            7 => [
                                'id' => 14,
                                'name' => 'Промо-описание',
                                'value' => 0,
                                'disabled' => false,
                            ],
                            8 => [
                                'id' => 10,
                                'name' => 'Уценка',
                                'value' => 0,
                                'disabled' => false,
                            ],
                            9 => [
                                'id' => 11,
                                'name' => 'Уценка 2',
                                'value' => 0,
                                'disabled' => false,
                            ],
                            10 => [
                                'id' => 123,
                                'name' => 'Обновление фото',
                                'value' => 0,
                                'disabled' => false,
                            ],
                            11 => [
                                'id' => 124,
                                'name' => 'Обновление описания',
                                'value' => 0,
                                'disabled' => false,
                            ],
                            12 => [
                                'id' => 125,
                                'name' => 'Обновление характеристик',
                                'value' => 0,
                                'disabled' => false,
                            ],
                            13 => [
                                'id' => 126,
                                'name' => 'Добавление/обновление инструкций',
                                'value' => 0,
                                'disabled' => false,
                            ],
                            14 => [
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
                'buttons' => [
                    5 => [
                        'component' => 'Button',
                        'title' => 'Создать подзадачу',
                        'visible' => true,
                        'icon' => 'mdiArrangeSendBackward',
                        'action' => '/request/create?typeId=2&direction=1&id=1',
                        'currentStatus' => 1,
                    ],
                ],
                'bredcrumbStatus' => [
                    'text' => 'Новые',
                    'link' => '#/request/list/new',
                ],
                'fieldsForPC' => [
                ],
                'fieldsForOuter' => [
                ],
            ]
        ]
    ],

    'case2_2' => [
        'setting' => [
            'description' => 'Заявка на тип 2 направление 2 статус 9 из профиля менеджера',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case2_2.php',
        'provider_data' => [
            'responseBody' => [
                'request' => (include __DIR__ . '/fixture/case2_2.php')['lisa_fixtures']['requests'][0],
                'isCrossCheck' => false,
                'fieldsForOuter' => [
                    'amount_to_work',
                    'id',
                    'reason',
                    'status',
                    'subject',
                    'type_id',
                    'request_attachments',
                    67,
                    72,
                    94,
                ],
                'fieldsForPC' => [
                    'actual_finish_date',
                    'id',
                    'reason',
                    'status',
                    'subject',
                    'type_id',
                    'request_attachments',
                    67,
                    94,
                ],
                'fieldsData' => [
                    'requestFields' => [
                        49 => '0',
                        50 => '0',
                        51 => '0',
                        52 => '2',
                        53 => '0.5',
                        54 => '1',
                        60 => '0',
                        64 => '0',
                        101 => '0',
                        114 => '3',
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
                            0 => [
                                'id' => 0,
                                'name' => 'Кросс-чек менеджер скрыт',
                            ],
                        ],
                        'userTeam' => 1,
                        'url' => '/user/managers',
                        'disabled' => true,
                        'visible' => false,
                    ],
                    'cross_check_status' => 'На кросс-чеке',
                    'seller_id' => [
                        'disabled' => true,
                        'initValue' => [
                            'owox_id' => 121212,
                            'title' => 'Mogozinchik',
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
                        0 => [
                            'alias' => '!@#$%^&*()_+`-=][\';.|}{:?><.jpg',
                            'canDelete' => false,
                            'id' => 4,
                            'isImage' => true,
                            'link' => 'http://minio.docker/lisa-auto/1/803902_~!@#$%^&*()_+`-=][;.|}{:?><.jpg',
                            'size' => ' (0.03 Mb)',
                            'status' => 3,
                            'uploaded_at' => '2021-10-09 00:00:00',
                            'uploaded_by' => 'Константин Куцан',
                        ],
                        1 => [
                            'alias' => '194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd',
                            'canDelete' => false,
                            'id' => 1,
                            'isImage' => false,
                            'link' => 'http://minio.docker/lisa-auto/1/803902_194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd',
                            'size' => ' (0.06 Mb)',
                            'status' => 3,
                            'uploaded_at' => '2021-10-09 00:00:00',
                            'uploaded_by' => 'Константин Куцан',
                        ],
                        2 => [
                            'alias' => 'doc .doc',
                            'canDelete' => false,
                            'id' => 2,
                            'isImage' => false,
                            'link' => 'http://minio.docker/lisa-auto/1/803902_doc.doc',
                            'size' => ' (0.03 Mb)',
                            'status' => 3,
                            'uploaded_at' => '2021-10-09 00:00:00',
                            'uploaded_by' => 'Константин Куцан',
                        ],
                        3 => [
                            'alias' => 'pptx_абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїі.pptx',
                            'canDelete' => false,
                            'id' => 3,
                            'isImage' => false,
                            'link' => 'http://minio.docker/lisa-auto/1/803902_pptx_abvgdeezzijklmnoprstufhccssyeuaegii.pptx',
                            'size' => ' (0.09 Mb)',
                            'status' => 3,
                            'uploaded_at' => '2021-10-09 00:00:00',
                            'uploaded_by' => 'Константин Куцан',
                        ],
                    ],
                    'resultFieldsOrder' => [],
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
                        'selects' => [],
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
                            'value' => '3',
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
                                'value' => date('Y-01-01') . ' - ' . date('Y-m-d', strtotime('last day of previous month -1 month -1 day')),
                            ],
                            1 => [
                                'id' => 2,
                                'value' => date('Y-m-01', strtotime('-1 month')) . ' - ' . date('Y-m-d', strtotime('last day of previous month')),
                            ],
                            2 => [
                                'id' => 3,
                                'value' => date('Y-m-01') . ' - ' . date('Y-m-d'),
                            ],
                            3 => [
                                'id' => 4,
                                'value' => date('Y-m-d', strtotime('+1 day')) . ' - ' . date('Y-m-d', strtotime('last day of this month')),
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
                'buttons' => [
                    3 => [
                        'component' => 'Button',
                        'title' => 'Завершить кросс-чек',
                        'visible' => true,
                        'icon' => 'mdiClosedCaption',
                        'action' => 'complete-cross-check',
                        'currentStatus' => 9,
                    ],
                ],
                'bredcrumbStatus' => [
                    'text' => 'Выполнены',
                    'link' => '#/request/list/completed',
                ],
            ],
        ]
    ],

    'case3_1' => [
        'setting' => [
            'description' => 'Заявка тип 3 направление 1 статус 2 из профиля супервайзера',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case3_1.php',
        'provider_data' => [
            'responseBody' => [
                'request' => (include __DIR__ . '/fixture/case3_1.php')['lisa_fixtures']['requests'][0],
                'isCrossCheck' => false,
                'fieldsData' => [
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
                        'disabled' => false,
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
                        'disabled' => false,
                    ],
                    'supervisor_id' => [
                        'initValue' => [
                            0 => [
                                'id' => 4,
                                'name' => 'Константин Куцан',
                            ],
                        ],
                        'url' => '/user/supervisors',
                        'disabled' => false,
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
                        ],
                        'url' => '/rozetka-category/all?name=name',
                        'disabled' => false,
                    ],
                    'cross_check_manager_id' => [
                        'initValue' => [
                        ],
                        'userTeam' => 1,
                        'url' => '/user/managers',
                        'disabled' => true,
                        'visible' => true,
                    ],
                    'cross_check_status' => 'Не прошла кросс-чек',
                    'seller_id' => [
                        'disabled' => false,
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
                        'disabled' => false,
                        'items' => [
                            0 => [
                                'id' => 1,
                                'name' => 'Информация необходима для склада',
                                'status' => 1,
                                'disabled' => false,
                            ],
                            1 => [
                                'id' => 3,
                                'name' => 'Исправление критичной ошибки',
                                'status' => 0,
                                'disabled' => true,
                            ],
                            2 => [
                                'id' => 2,
                                'name' => 'Товар-новинка/эксклюзив (трафикообразующий)',
                                'status' => 1,
                                'disabled' => false,
                            ],
                        ],
                    ],
                    'amount_to_work' => [
                        'disabled' => false,
                    ],
                    'textareaPermissions' => [
                        'description' => true,
                        'recommendations' => true,
                        'supervisor_comment' => true,
                        'result_comment' => false,
                        'correction_comment' => true,
                    ],
                    'status' => 'Готова для распределения',
                    'type_id' => [
                        'disabled' => false,
                        'value' => 'Перенос товаров',
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
                        ],
                        'disabled' => true,
                        'text' => '',
                    ],
                    'attachments' => [
                        0 => [
                            'alias' => '194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd',
                            'id' => 1,
                            'size' => ' (0.06 Mb)',
                            'uploaded_at' => '2021-10-09 00:00:00',
                            'uploaded_by' => 'Константин Куцан',
                            'isImage' => false,
                            'status' => 3,
                            'link' => 'http://minio.docker/lisa-auto/1/803902_194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd',
                            'canDelete' => false,
                        ],
                        1 => [
                            'alias' => 'doc .doc',
                            'id' => 2,
                            'size' => ' (0.03 Mb)',
                            'uploaded_at' => '2021-10-09 00:00:00',
                            'uploaded_by' => 'Константин Куцан',
                            'isImage' => false,
                            'status' => 3,
                            'link' => 'http://minio.docker/lisa-auto/1/803902_doc.doc',
                            'canDelete' => false,
                        ],
                        2 => [
                            'alias' => 'pptx_абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїі.pptx',
                            'id' => 3,
                            'size' => ' (0.09 Mb)',
                            'uploaded_at' => '2021-10-09 00:00:00',
                            'uploaded_by' => 'Константин Куцан',
                            'isImage' => false,
                            'status' => 3,
                            'link' => 'http://minio.docker/lisa-auto/1/803902_pptx_abvgdeezzijklmnoprstufhccssyeuaegii.pptx',
                            'canDelete' => false,
                        ],
                        3 => [
                            'alias' => '!@#$%^&*()_+`-=][\';.|}{:?><.jpg',
                            'id' => 4,
                            'size' => ' (0.03 Mb)',
                            'uploaded_at' => '2021-10-09 00:00:00',
                            'uploaded_by' => 'Константин Куцан',
                            'isImage' => true,
                            'status' => 3,
                            'link' => 'http://minio.docker/lisa-auto/1/803902_~!@#$%^&*()_+`-=][;.|}{:?><.jpg',
                            'canDelete' => false,
                        ],
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
                                'id' => 111,
                                'name' => 'Количество товаров, которые уже есть в БД',
                                'type' => 'integer',
                                'status' => 1,
                                'disabled' => true,
                            ],
                            2 => [
                                'id' => 69,
                                'name' => 'Общее количество обработанных фото',
                                'type' => 'integer',
                                'status' => 1,
                                'disabled' => true,
                            ],
                            3 => [
                                'id' => 68,
                                'name' => 'Среднее количество фото в товаре',
                                'type' => 'integer',
                                'status' => 1,
                                'disabled' => true,
                            ],
                            4 => [
                                'id' => 71,
                                'name' => 'Количество добавленных инструкций',
                                'type' => 'integer',
                                'status' => 1,
                                'disabled' => true,
                            ],
                            5 => [
                                'id' => 70,
                                'name' => 'Количество добавленных видеороликов',
                                'type' => 'integer',
                                'status' => 1,
                                'disabled' => true,
                            ],
                            6 => [
                                'id' => 88,
                                'name' => 'Количество товаров, к которым добавлены видео',
                                'type' => 'integer',
                                'status' => 1,
                                'disabled' => true,
                            ],
                            7 => [
                                'id' => 93,
                                'name' => 'Количество обработанных групп',
                                'type' => 'integer',
                                'status' => 1,
                                'disabled' => true,
                            ],
                            8 => [
                                'id' => 94,
                                'name' => 'Количество сгруппированых товаров',
                                'type' => 'integer',
                                'status' => 1,
                                'disabled' => true,
                            ],
                            9 => [
                                'id' => 76,
                                'name' => 'Добавлено новых СЦ',
                                'type' => 'integer',
                                'status' => 1,
                                'disabled' => true,
                            ],
                            10 => [
                                'id' => 77,
                                'name' => 'Изменено существующих СЦ',
                                'type' => 'integer',
                                'status' => 1,
                                'disabled' => true,
                            ],
                        ],
                        'selects' => [
                            0 => [
                                'id' => 21,
                                'name' => 'Наличие характеристик к товарам',
                                'type' => 'select',
                                'status' => 1,
                                'disabled' => false,
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
                            4 => [
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
                            5 => [
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
                            6 => [
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
                            7 => [
                                'id' => 26,
                                'name' => 'Язык информации',
                                'type' => 'select',
                                'status' => 1,
                                'disabled' => false,
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
                    'resultFieldsOrder' => [
                    ],
                    'managerMotivation' => [
                        0 => [
                            'id' => 52,
                            'name' => 'Коэффициент сложности категории',
                            'value' => '2',
                            'readonly' => true,
                        ],
                        1 => [
                            'id' => 53,
                            'name' => 'Коэффициент типа задачи',
                            'value' => '0.5',
                            'readonly' => true,
                        ],
                        2 => [
                            'id' => 54,
                            'name' => 'Коэффициент уровня сложности задачи',
                            'value' => '1',
                            'readonly' => true,
                        ],
                        3 => [
                            'id' => 50,
                            'name' => 'Рассчитанное количество измененных товаров',
                            'value' => '0',
                            'readonly' => true,
                        ],
                    ],
                    'svMotivation' => [
                        0 => [
                            'id' => 121,
                            'name' => 'Проверенные ссылки',
                            'type' => 'textarea',
                            'value' => NULL,
                            'readonly' => false,
                        ],
                        1 => [
                            'id' => 65,
                            'name' => 'Количество проверенных товаров',
                            'type' => 'integer',
                            'value' => NULL,
                            'readonly' => false,
                        ],
                        2 => [
                            'id' => 51,
                            'name' => 'Рассчитанное количество проверенных товаров',
                            'type' => 'decimal',
                            'value' => '0',
                            'readonly' => true,
                        ],
                        3 => [
                            'id' => 60,
                            'name' => 'Рассчитанное количество проверенных товаров с ошибками',
                            'type' => 'decimal',
                            'value' => '0',
                            'readonly' => true,
                        ],
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
                                'disabled' => false,
                            ],
                            1 => [
                                'id' => 2,
                                'name' => 'Пакетная загрузка',
                                'value' => 0,
                                'disabled' => false,
                            ],
                            2 => [
                                'id' => 4,
                                'name' => 'С фотосъемкой',
                                'value' => 0,
                                'disabled' => false,
                            ],
                            3 => [
                                'id' => 8,
                                'name' => 'С размерной сеткой',
                                'value' => 0,
                                'disabled' => false,
                            ],
                            4 => [
                                'id' => 9,
                                'name' => 'С тегами к товарам',
                                'value' => 0,
                                'disabled' => false,
                            ],
                            5 => [
                                'id' => 15,
                                'name' => 'С видео',
                                'value' => 0,
                                'disabled' => false,
                            ],
                            6 => [
                                'id' => 18,
                                'name' => 'Добавление товаров в новую категорию',
                                'value' => 0,
                                'disabled' => false,
                            ],
                            7 => [
                                'id' => 12,
                                'name' => 'На основе отзыва клиента на сайте',
                                'value' => 0,
                                'disabled' => false,
                            ],
                            8 => [
                                'id' => 14,
                                'name' => 'Промо-описание',
                                'value' => 0,
                                'disabled' => false,
                            ],
                            9 => [
                                'id' => 10,
                                'name' => 'Уценка',
                                'value' => 0,
                                'disabled' => false,
                            ],
                            10 => [
                                'id' => 11,
                                'name' => 'Уценка 2',
                                'value' => 0,
                                'disabled' => false,
                            ],
                            11 => [
                                'id' => 16,
                                'name' => 'Лоты',
                                'value' => 0,
                                'disabled' => false,
                            ],
                        ],
                        'visa' => [
                            'id' => 3,
                            'name' => 'Виза супервайзера',
                            'value' => 0,
                            'disabled' => false,
                        ],
                    ],
                    'excludedFields' => Constants::EXCLUDED_FIELDS,
                    'report_period_id' => [
                        'disabled' => true,
                        'items' => [
                            0 => [
                                'id' => 1,
                                'value' => date('Y-01-01') . ' - ' . date('Y-m-d', strtotime('last day of previous month -1 month -1 day')),
                            ],
                            1 => [
                                'id' => 2,
                                'value' => date('Y-m-01', strtotime('-1 month')) . ' - ' . date('Y-m-d', strtotime('last day of previous month')),
                            ],
                            2 => [
                                'id' => 3,
                                'value' => date('Y-m-01') . ' - ' . date('Y-m-d'),
                            ],
                            3 => [
                                'id' => 4,
                                'value' => date('Y-m-d', strtotime('+1 day')) . ' - ' . date('Y-m-d', strtotime('last day of this month')),
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
                'buttons' => [
                    0 => [
                        'component' => 'Reason',
                        'title' => 'На доработку',
                        'visible' => true,
                        'targetStatus' => 3,
                        'action' => 'change-reason',
                        'icon' => 'mdiPencilOutline',
                        'currentStatus' => 2,
                    ],
                    1 => [
                        'component' => 'Reason',
                        'title' => 'Отменить',
                        'visible' => true,
                        'targetStatus' => 4,
                        'action' => 'change-reason',
                        'icon' => 'mdiCloseThick',
                        'currentStatus' => 2,
                    ],
                    2 => [
                        'component' => 'Appoint',
                        'title' => 'Назначить исполнителя',
                        'visible' => true,
                        'icon' => 'mdiAccountCircle',
                        'url' => '/user/managers',
                        'userTeam' => 1,
                        'prompt' => 'Поиск исполнителя...',
                        'action' => 'appoint-manager',
                        'currentStatus' => 2,
                    ],
                    3 => [
                        'component' => 'Appoint',
                        'title' => 'Изменить супервайзера',
                        'icon' => 'mdiAccountCowboyHat',
                        'visible' => true,
                        'url' => '/user/supervisors',
                        'prompt' => 'Поиск супервизора...',
                        'action' => 'appoint-supervisor',
                        'notShowInView' => true,
                        'currentStatus' => 2,
                    ],
                    4 => [
                        'component' => 'Button',
                        'title' => 'Создать подзадачу',
                        'visible' => true,
                        'icon' => 'mdiArrangeSendBackward',
                        'action' => '/request/create?typeId=3&direction=1&id=1',
                        'currentStatus' => 2,
                    ],
                ],
                'bredcrumbStatus' => [
                    'text' => 'Готовы для распределения',
                    'link' => '#/request/list/in-check',
                ],
                'fieldsForPC' => [
                ],
                'fieldsForOuter' => [
                ],
            ]
        ]
    ],

    'case3_2' => [
        'setting' => [
            'description' => 'Заявка на тип 3 направление 2 статус 8 из профиля менеджера',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case3_2.php',
        'provider_data' => [
            'responseBody' => [
                'request' => (include __DIR__ . '/fixture/case3_2.php')['lisa_fixtures']['requests'][0],
                'isCrossCheck' => true,
                'fieldsData' => [
                    'requestFields' => [
                        49 => '0',
                        50 => '0',
                        51 => '0',
                        52 => '2',
                        53 => '0.5',
                        54 => '1',
                        60 => '0',
                        64 => '0',
                        101 => '0',
                        114 => '3',
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
                                'id' => 3,
                                'name' => 'Гость',
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
                            0 => [
                                'id' => 4,
                                'name' => 'Константин Куцан',
                            ],
                        ],
                        'userTeam' => 1,
                        'url' => '/user/managers',
                        'disabled' => true,
                        'visible' => true,
                    ],
                    'cross_check_status' => 'На кросс-чеке',
                    'seller_id' => [
                        'disabled' => true,
                        'initValue' => [
                            'owox_id' => 121212,
                            'title' => 'Mogozinchik',
                        ],
                    ],
                    'priority' => [
                        'disabled' => true,
                        'items' => [
                            0 => [
                                'id' => 1,
                                'name' => 'Информация необходима для склада',
                                'status' => 1,
                                'disabled' => false,
                            ],
                            1 => [
                                'id' => 3,
                                'name' => 'Исправление критичной ошибки',
                                'status' => 0,
                                'disabled' => true,
                            ],
                            2 => [
                                'id' => 2,
                                'name' => 'Товар-новинка/эксклюзив (трафикообразующий)',
                                'status' => 1,
                                'disabled' => false,
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
                    'status' => 'Частично выполнена',
                    'type_id' => [
                        'disabled' => false,
                        'value' => 'Перенос товаров',
                    ],
                    'reasons' => [
                        'initValue' => [
                            0 => [
                                'id' => 6,
                                'reason' => 'Не получена запрошенная недостающая информация',
                                'status' => 1,
                                'disabled' => false,
                            ],
                            1 => [
                                'id' => 7,
                                'reason' => 'Товары ушли в ошибки',
                                'status' => 1,
                                'disabled' => false,
                            ],
                        ],
                        'items' => [
                            0 => [
                                'id' => 11,
                                'reason' => 'Другое (описан в коментариях)',
                                'status' => 1,
                                'disabled' => false,
                            ],
                            1 => [
                                'id' => 6,
                                'reason' => 'Не получена запрошенная недостающая информация',
                                'status' => 1,
                                'disabled' => false,
                            ],
                            2 => [
                                'id' => 7,
                                'reason' => 'Товары ушли в ошибки',
                                'status' => 1,
                                'disabled' => false,
                            ],
                            3 => [
                                'id' => 8,
                                'reason' => 'Часть товаров ушла в ошибки',
                                'status' => 0,
                                'disabled' => true,
                            ],
                        ],
                        'disabled' => true,
                        'text' => '',
                    ],
                    'attachments' => [
                        0 => [
                            'alias' => '194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd',
                            'id' => 1,
                            'size' => ' (0.06 Mb)',
                            'uploaded_at' => '2021-10-09 00:00:00',
                            'uploaded_by' => 'Константин Куцан',
                            'isImage' => false,
                            'status' => 3,
                            'link' => 'http://minio.docker/lisa-auto/1/803902_194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd',
                            'canDelete' => false,
                        ],
                        1 => [
                            'alias' => 'doc .doc',
                            'id' => 2,
                            'size' => ' (0.03 Mb)',
                            'uploaded_at' => '2021-10-09 00:00:00',
                            'uploaded_by' => 'Константин Куцан',
                            'isImage' => false,
                            'status' => 3,
                            'link' => 'http://minio.docker/lisa-auto/1/803902_doc.doc',
                            'canDelete' => false,
                        ],
                        2 => [
                            'alias' => 'pptx_абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїі.pptx',
                            'id' => 3,
                            'size' => ' (0.09 Mb)',
                            'uploaded_at' => '2021-10-09 00:00:00',
                            'uploaded_by' => 'Константин Куцан',
                            'isImage' => false,
                            'status' => 3,
                            'link' => 'http://minio.docker/lisa-auto/1/803902_pptx_abvgdeezzijklmnoprstufhccssyeuaegii.pptx',
                            'canDelete' => false,
                        ],
                        3 => [
                            'alias' => '!@#$%^&*()_+`-=][\';.|}{:?><.jpg',
                            'id' => 4,
                            'size' => ' (0.03 Mb)',
                            'uploaded_at' => '2021-10-09 00:00:00',
                            'uploaded_by' => 'Константин Куцан',
                            'isImage' => true,
                            'status' => 3,
                            'link' => 'http://minio.docker/lisa-auto/1/803902_~!@#$%^&*()_+`-=][;.|}{:?><.jpg',
                            'canDelete' => false,
                        ],
                    ],
                    'requestResult' => [
                        'inputs' => [
                            67 => [
                                'id' => 67,
                                'name' => 'Количество изменённых товаров',
                                'type' => 'integer',
                                'status' => 1,
                                'disabled' => true,
                                'required' => true,
                            ],
                            73 => [
                                'id' => 73,
                                'name' => 'Количество связанных категорий',
                                'type' => 'integer',
                                'status' => 1,
                                'disabled' => true,
                                'required' => true,
                            ],
                            72 => [
                                'id' => 72,
                                'name' => 'Количество скрытых товаров',
                                'type' => 'integer',
                                'status' => 1,
                                'disabled' => true,
                            ],
                            93 => [
                                'id' => 93,
                                'name' => 'Количество обработанных групп',
                                'type' => 'integer',
                                'status' => 1,
                                'disabled' => true,
                            ],
                            94 => [
                                'id' => 94,
                                'name' => 'Количество сгруппированых товаров',
                                'type' => 'integer',
                                'status' => 1,
                                'disabled' => true,
                            ],
                            74 => [
                                'id' => 74,
                                'name' => 'Количество связанных параметров',
                                'type' => 'integer',
                                'status' => 1,
                                'disabled' => true,
                            ],
                            75 => [
                                'id' => 75,
                                'name' => 'Количество связанных значений параметров',
                                'type' => 'integer',
                                'status' => 1,
                                'disabled' => true,
                            ],
                        ],
                        'selects' => [
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
                    'resultFieldsOrder' => [
                        0 => 67,
                        1 => 72,
                        2 => 73,
                        3 => 93,
                        4 => 94,
                        5 => 74,
                        6 => 75,
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
                                'disabled' => true,
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
                                'value' => date('Y-01-01') . ' - ' . date('Y-m-d', strtotime('last day of previous month -1 month -1 day')),
                            ],
                            1 => [
                                'id' => 2,
                                'value' => date('Y-m-01', strtotime('-1 month')) . ' - ' . date('Y-m-d', strtotime('last day of previous month')),
                            ],
                            2 => [
                                'id' => 3,
                                'value' => date('Y-m-01') . ' - ' . date('Y-m-d'),
                            ],
                            3 => [
                                'id' => 4,
                                'value' => date('Y-m-d', strtotime('+1 day')) . ' - ' . date('Y-m-d', strtotime('last day of this month')),
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
                'buttons' => [
                    1 => [
                        'component' => 'Button',
                        'title' => 'На исправление',
                        'visible' => true,
                        'icon' => 'mdiReloadAlert',
                        'action' => '/request/to-correction/1',
                        'currentStatus' => 8,
                    ],
                    3 => [
                        'component' => 'Button',
                        'title' => 'Завершить кросс-чек',
                        'visible' => true,
                        'icon' => 'mdiClosedCaption',
                        'action' => 'complete-cross-check',
                        'currentStatus' => 8,
                    ],
                ],
                'bredcrumbStatus' => [
                    'text' => 'Частично выполнены',
                    'link' => '#/request/list/completed',
                ],
                'fieldsForPC' => [
                    'id',
                    'status',
                    'actual_finish_date',
                    'subject',
                    'reason',
                    'type_id',
                    'request_attachments',
                    67,
                    94,
                ],
                'fieldsForOuter' => [
                    'reason',
                    'amount_to_work',
                    'type_id',
                    'status',
                    'id',
                    'subject',
                    'request_attachments',
                    67,
                    94,
                    72,
                ],
            ],
        ]
    ],

    'case4_0' => [
        'setting' => [
            'description' => 'Заявка тип 4 направление 0 статус 3 из профиля продакта',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case4_0.php',
        'provider_data' => [
            'responseBody' => [
                'request' => (include __DIR__ . '/fixture/case4_0.php')['lisa_fixtures']['requests'][0],
                'isCrossCheck' => false,
                'fieldsForOuter' => [
                    'amount_to_work',
                    'id',
                    'reason',
                    'status',
                    'subject',
                    'type_id',
                    'request_attachments',
                    94,
                ],
                'fieldsForPC' => [
                    'actual_finish_date',
                    'id',
                    'reason',
                    'status',
                    'subject',
                    'type_id',
                    'request_attachments',
                    94,
                ],
                'fieldsData' => [
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
                            0 => [
                                'id' => 3,
                                'name' => 'Гость',
                            ],
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
                            0 => [
                                'id' => 1,
                                'name' => 'Система',
                            ],
                        ],
                        'userTeam' => 18,
                        'url' => '/user/managers',
                        'disabled' => true,
                        'visible' => true,
                    ],
                    'cross_check_status' => 'На кросс-чеке',
                    'seller_id' => [
                        'disabled' => false,
                        'initValue' => [
                            'owox_id' => 121212,
                            'title' => 'Mogozinchik',
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
                    'resultFieldsOrder' => [
                        0 => 'child_count',
                        1 => 31,
                        2 => 32,
                        3 => 91,
                        4 => 93,
                        5 => 94,
                        6 => 116,
                        7 => 161,
                        8 => 162,
                        9 => 163,
                        10 => 168,
                    ],
                    'requestResult' => [
                        'inputs' => [
                            91 => [
                                'id' => 91,
                                'name' => 'Количество обработанных категорий',
                                'type' => 'integer',
                                'status' => 1,
                                'disabled' => true,
                                'required' => true,
                            ],
                            161 => [
                                'id' => 161,
                                'name' => 'Количество обработанных, но не сгруппированных товаров',
                                'type' => 'integer',
                                'status' => 1,
                                'disabled' => false,
                                'required' => true,
                            ],
                            94 => [
                                'id' => 94,
                                'name' => 'Количество сгруппированых товаров',
                                'type' => 'integer',
                                'status' => 1,
                                'disabled' => true,
                                'required' => true,
                            ],
                            93 => [
                                'id' => 93,
                                'name' => 'Количество обработанных групп',
                                'type' => 'integer',
                                'status' => 1,
                                'disabled' => true,
                                'required' => true,
                            ],
                            162 => [
                                'id' => 162,
                                'name' => 'Количество настроек групп (управление группами)',
                                'type' => 'integer',
                                'status' => 1,
                                'disabled' => false,
                                'required' => true,
                            ],
                            116 => [
                                'id' => 116,
                                'name' => 'Количество отправленных писем',
                                'type' => 'integer',
                                'status' => 1,
                                'disabled' => true,
                                'required' => true,
                            ],
                            163 => [
                                'id' => 163,
                                'name' => 'Количество слов в словарях',
                                'type' => 'integer',
                                'status' => 1,
                                'disabled' => true,
                                'required' => true,
                            ],
                        ],
                        'selects' => [
                            32 => [
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
                            31 => [
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
                'buttons' => [
                    1 => [
                        'component' => 'Button',
                        'title' => 'Создать подзадачу',
                        'visible' => true,
                        'icon' => 'mdiArrangeSendBackward',
                        'action' => '/request/create?typeId=4&direction=0&id=1',
                        'currentStatus' => 3,
                    ],
                    2 => [
                        'component' => 'Reason',
                        'title' => 'Вернуть в новые',
                        'visible' => true,
                        'targetStatus' => 1,
                        'withoutReason' => true,
                        'action' => 'change-reason',
                        'icon' => 'mdiArrowLeftBoldOutline',
                        'currentStatus' => 3,
                    ],
                ],
                'bredcrumbStatus' => [
                    'text' => 'На доработке',
                    'link' => '#/request/list/require-changes',
                ],
            ],
        ]
    ],

    'case5_1' => [
        'setting' => [
            'description' => 'Заявка тип 5 направление 1 статус 6 из профиля супервайзера',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case5_1.php',
        'provider_data' => [
            'responseBody' => [
                'request' => (include __DIR__ . '/fixture/case5_1.php')['lisa_fixtures']['requests'][0],
                'isCrossCheck' => false,
                'fieldsData' => [
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
                        'disabled' => false,
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
                        'disabled' => false,
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
                        'disabled' => false,
                    ],
                    'rz_category_id' => [
                        'initValue' => [
                        ],
                        'url' => '/rozetka-category/all?name=name',
                        'disabled' => false,
                    ],
                    'cross_check_manager_id' => [
                        'initValue' => [
                        ],
                        'userTeam' => 1,
                        'url' => '/user/managers',
                        'disabled' => true,
                        'visible' => true,
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
                        'disabled' => false,
                        'items' => [
                            0 => [
                                'id' => 1,
                                'name' => 'Информация необходима для склада',
                                'status' => 1,
                                'disabled' => false,
                            ],
                            1 => [
                                'id' => 3,
                                'name' => 'Исправление критичной ошибки',
                                'status' => 0,
                                'disabled' => true,
                            ],
                            2 => [
                                'id' => 2,
                                'name' => 'Товар-новинка/эксклюзив (трафикообразующий)',
                                'status' => 1,
                                'disabled' => false,
                            ],
                        ],
                    ],
                    'amount_to_work' => [
                        'disabled' => true,
                    ],
                    'textareaPermissions' => [
                        'description' => true,
                        'recommendations' => true,
                        'supervisor_comment' => true,
                        'result_comment' => true,
                        'correction_comment' => true,
                    ],
                    'status' => 'В работе',
                    'type_id' => [
                        'disabled' => false,
                        'value' => 'Заливка фото с фотостудии',
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
                        ],
                        'disabled' => true,
                        'text' => '',
                    ],
                    'attachments' => [
                        0 => [
                            'alias' => '194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd',
                            'id' => 1,
                            'size' => ' (0.06 Mb)',
                            'uploaded_at' => '2021-10-09 00:00:00',
                            'uploaded_by' => 'Константин Куцан',
                            'isImage' => false,
                            'status' => 3,
                            'link' => 'http://minio.docker/lisa-auto/1/803902_194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd',
                            'canDelete' => false,
                        ],
                        1 => [
                            'alias' => 'doc .doc',
                            'id' => 2,
                            'size' => ' (0.03 Mb)',
                            'uploaded_at' => '2021-10-09 00:00:00',
                            'uploaded_by' => 'Константин Куцан',
                            'isImage' => false,
                            'status' => 3,
                            'link' => 'http://minio.docker/lisa-auto/1/803902_doc.doc',
                            'canDelete' => false,
                        ],
                        2 => [
                            'alias' => 'pptx_абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїі.pptx',
                            'id' => 3,
                            'size' => ' (0.09 Mb)',
                            'uploaded_at' => '2021-10-09 00:00:00',
                            'uploaded_by' => 'Константин Куцан',
                            'isImage' => false,
                            'status' => 3,
                            'link' => 'http://minio.docker/lisa-auto/1/803902_pptx_abvgdeezzijklmnoprstufhccssyeuaegii.pptx',
                            'canDelete' => false,
                        ],
                        3 => [
                            'alias' => '!@#$%^&*()_+`-=][\';.|}{:?><.jpg',
                            'id' => 4,
                            'size' => ' (0.03 Mb)',
                            'uploaded_at' => '2021-10-09 00:00:00',
                            'uploaded_by' => 'Константин Куцан',
                            'isImage' => true,
                            'status' => 3,
                            'link' => 'http://minio.docker/lisa-auto/1/803902_~!@#$%^&*()_+`-=][;.|}{:?><.jpg',
                            'canDelete' => false,
                        ],
                    ],
                    'requestResult' => [
                        'inputs' => [
                            0 => [
                                'id' => 67,
                                'name' => 'Количество изменённых товаров',
                                'type' => 'integer',
                                'status' => 1,
                                'disabled' => false,
                                'required' => true,
                            ],
                            1 => [
                                'id' => 111,
                                'name' => 'Количество товаров, которые уже есть в БД',
                                'type' => 'integer',
                                'status' => 1,
                                'disabled' => false,
                            ],
                            2 => [
                                'id' => 69,
                                'name' => 'Общее количество обработанных фото',
                                'type' => 'integer',
                                'status' => 1,
                                'disabled' => false,
                            ],
                            3 => [
                                'id' => 68,
                                'name' => 'Среднее количество фото в товаре',
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
                            4 => [
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
                            5 => [
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
                            6 => [
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
                            7 => [
                                'id' => 26,
                                'name' => 'Язык информации',
                                'type' => 'select',
                                'status' => 1,
                                'disabled' => false,
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
                    'resultFieldsOrder' => [
                    ],
                    'managerMotivation' => [
                        0 => [
                            'id' => 52,
                            'name' => 'Коэффициент сложности категории',
                            'value' => '2',
                            'readonly' => true,
                        ],
                        1 => [
                            'id' => 53,
                            'name' => 'Коэффициент типа задачи',
                            'value' => '0.5',
                            'readonly' => true,
                        ],
                        2 => [
                            'id' => 54,
                            'name' => 'Коэффициент уровня сложности задачи',
                            'value' => '1',
                            'readonly' => true,
                        ],
                        3 => [
                            'id' => 50,
                            'name' => 'Рассчитанное количество измененных товаров',
                            'value' => '0',
                            'readonly' => true,
                        ],
                    ],
                    'svMotivation' => [
                        0 => [
                            'id' => 121,
                            'name' => 'Проверенные ссылки',
                            'type' => 'textarea',
                            'value' => NULL,
                            'readonly' => false,
                        ],
                        1 => [
                            'id' => 65,
                            'name' => 'Количество проверенных товаров',
                            'type' => 'integer',
                            'value' => NULL,
                            'readonly' => false,
                        ],
                        2 => [
                            'id' => 51,
                            'name' => 'Рассчитанное количество проверенных товаров',
                            'type' => 'decimal',
                            'value' => '0',
                            'readonly' => true,
                        ],
                        3 => [
                            'id' => 60,
                            'name' => 'Рассчитанное количество проверенных товаров с ошибками',
                            'type' => 'decimal',
                            'value' => '0',
                            'readonly' => true,
                        ],
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
                                'disabled' => false,
                            ],
                            1 => [
                                'id' => 2,
                                'name' => 'Пакетная загрузка',
                                'value' => 0,
                                'disabled' => false,
                            ],
                            2 => [
                                'id' => 4,
                                'name' => 'С фотосъемкой',
                                'value' => 0,
                                'disabled' => false,
                            ],
                            3 => [
                                'id' => 8,
                                'name' => 'С размерной сеткой',
                                'value' => 0,
                                'disabled' => false,
                            ],
                            4 => [
                                'id' => 9,
                                'name' => 'С тегами к товарам',
                                'value' => 0,
                                'disabled' => false,
                            ],
                            5 => [
                                'id' => 15,
                                'name' => 'С видео',
                                'value' => 0,
                                'disabled' => false,
                            ],
                            6 => [
                                'id' => 18,
                                'name' => 'Добавление товаров в новую категорию',
                                'value' => 0,
                                'disabled' => false,
                            ],
                            7 => [
                                'id' => 12,
                                'name' => 'На основе отзыва клиента на сайте',
                                'value' => 0,
                                'disabled' => false,
                            ],
                            8 => [
                                'id' => 14,
                                'name' => 'Промо-описание',
                                'value' => 0,
                                'disabled' => false,
                            ],
                            9 => [
                                'id' => 10,
                                'name' => 'Уценка',
                                'value' => 0,
                                'disabled' => false,
                            ],
                            10 => [
                                'id' => 11,
                                'name' => 'Уценка 2',
                                'value' => 0,
                                'disabled' => false,
                            ],
                            11 => [
                                'id' => 16,
                                'name' => 'Лоты',
                                'value' => 0,
                                'disabled' => false,
                            ],
                        ],
                        'visa' => [
                            'id' => 3,
                            'name' => 'Виза супервайзера',
                            'value' => 0,
                            'disabled' => false,
                        ],
                    ],
                    'excludedFields' => Constants::EXCLUDED_FIELDS,
                    'report_period_id' => [
                        'disabled' => true,
                        'items' => [
                            0 => [
                                'id' => 1,
                                'value' => date('Y-01-01') . ' - ' . date('Y-m-d', strtotime('last day of previous month -1 month -1 day')),
                            ],
                            1 => [
                                'id' => 2,
                                'value' => date('Y-m-01', strtotime('-1 month')) . ' - ' . date('Y-m-d', strtotime('last day of previous month')),
                            ],
                            2 => [
                                'id' => 3,
                                'value' => date('Y-m-01') . ' - ' . date('Y-m-d'),
                            ],
                            3 => [
                                'id' => 4,
                                'value' => date('Y-m-d', strtotime('+1 day')) . ' - ' . date('Y-m-d', strtotime('last day of this month')),
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
                'buttons' => [
                    0 => [
                        'component' => 'Reason',
                        'title' => 'Ожидать',
                        'visible' => true,
                        'targetStatus' => 7,
                        'action' => 'change-reason',
                        'icon' => 'mdiTimerSand',
                        'currentStatus' => 6,
                    ],
                    1 => [
                        'component' => 'Reason',
                        'title' => 'Отменить',
                        'visible' => true,
                        'targetStatus' => 4,
                        'action' => 'change-reason',
                        'icon' => 'mdiCloseThick',
                        'currentStatus' => 6,
                    ],
                    2 => [
                        'component' => 'Complete',
                        'title' => 'Частично выполнена',
                        'visible' => true,
                        'targetStatus' => 8,
                        'icon' => 'mdiBookmarkCheckOutline',
                        'currentStatus' => 6,
                    ],
                    3 => [
                        'component' => 'Complete',
                        'title' => 'Выполнена',
                        'visible' => true,
                        'targetStatus' => 9,
                        'icon' => 'mdiCheckBold',
                        'withoutReason' => true,
                        'currentStatus' => 6,
                    ],
                    5 => [
                        'component' => 'Appoint',
                        'title' => 'Изменить исполнителя',
                        'visible' => true,
                        'icon' => 'mdiAccountCircle',
                        'url' => '/user/managers',
                        'userTeam' => 1,
                        'prompt' => 'Поиск исполнителя...',
                        'action' => 'appoint-manager',
                        'currentStatus' => 6,
                    ],
                    7 => [
                        'component' => 'Button',
                        'title' => 'Создать подзадачу',
                        'visible' => true,
                        'icon' => 'mdiArrangeSendBackward',
                        'action' => '/request/create?typeId=5&direction=1&id=1',
                        'currentStatus' => 6,
                    ],
                ],
                'bredcrumbStatus' => [
                    'text' => 'В работе',
                    'link' => '#/request/list/in-work',
                ],
                'fieldsForPC' => [
                ],
                'fieldsForOuter' => [
                ],
            ]
        ]
    ],

    'case6_2' => [
        'setting' => [
            'description' => 'Заявка на тип 6 направление 2 статус 5 из профиля менеджера',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case6_2.php',
        'provider_data' => [
            'responseBody' => [
                'request' => (include __DIR__ . '/fixture/case6_2.php')['lisa_fixtures']['requests'][0],
                'isCrossCheck' => false,
                'fieldsData' => [
                    'requestFields' => [
                        49 => '0',
                        50 => '0',
                        51 => '0',
                        53 => '0.5',
                        60 => '0',
                        64 => '0',
                        101 => '0',
                        114 => '3',
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
                        'visible' => true,
                    ],
                    'cross_check_status' => 'Не прошла кросс-чек',
                    'seller_id' => [
                        'disabled' => true,
                        'initValue' => [
                            'owox_id' => 121212,
                            'title' => 'Mogozinchik',
                        ],
                    ],
                    'priority' => [
                        'disabled' => true,
                        'items' => [
                            0 => [
                                'id' => 1,
                                'name' => 'Информация необходима для склада',
                                'status' => 1,
                                'disabled' => false,
                            ],
                            1 => [
                                'id' => 3,
                                'name' => 'Исправление критичной ошибки',
                                'status' => 0,
                                'disabled' => true,
                            ],
                            2 => [
                                'id' => 2,
                                'name' => 'Товар-новинка/эксклюзив (трафикообразующий)',
                                'status' => 1,
                                'disabled' => false,
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
                    'status' => 'Ожидает взятия в работу',
                    'type_id' => [
                        'disabled' => false,
                        'value' => 'Проверка скрытых товаров',
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
                        ],
                        'disabled' => true,
                        'text' => '',
                    ],
                    'attachments' => [
                        0 => [
                            'alias' => '194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd',
                            'id' => 1,
                            'size' => ' (0.06 Mb)',
                            'uploaded_at' => '2021-10-09 00:00:00',
                            'uploaded_by' => 'Константин Куцан',
                            'isImage' => false,
                            'status' => 3,
                            'link' => 'http://minio.docker/lisa-auto/1/803902_194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd',
                            'canDelete' => false,
                        ],
                        1 => [
                            'alias' => 'doc .doc',
                            'id' => 2,
                            'size' => ' (0.03 Mb)',
                            'uploaded_at' => '2021-10-09 00:00:00',
                            'uploaded_by' => 'Константин Куцан',
                            'isImage' => false,
                            'status' => 3,
                            'link' => 'http://minio.docker/lisa-auto/1/803902_doc.doc',
                            'canDelete' => false,
                        ],
                        2 => [
                            'alias' => 'pptx_абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїі.pptx',
                            'id' => 3,
                            'size' => ' (0.09 Mb)',
                            'uploaded_at' => '2021-10-09 00:00:00',
                            'uploaded_by' => 'Константин Куцан',
                            'isImage' => false,
                            'status' => 3,
                            'link' => 'http://minio.docker/lisa-auto/1/803902_pptx_abvgdeezzijklmnoprstufhccssyeuaegii.pptx',
                            'canDelete' => false,
                        ],
                        3 => [
                            'alias' => '!@#$%^&*()_+`-=][\';.|}{:?><.jpg',
                            'id' => 4,
                            'size' => ' (0.03 Mb)',
                            'uploaded_at' => '2021-10-09 00:00:00',
                            'uploaded_by' => 'Константин Куцан',
                            'isImage' => true,
                            'status' => 3,
                            'link' => 'http://minio.docker/lisa-auto/1/803902_~!@#$%^&*()_+`-=][;.|}{:?><.jpg',
                            'canDelete' => false,
                        ],
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
                    'resultFieldsOrder' => [
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
                            'value' => '3',
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
                                'value' => date('Y-01-01') . ' - ' . date('Y-m-d', strtotime('last day of previous month -1 month -1 day')),
                            ],
                            1 => [
                                'id' => 2,
                                'value' => date('Y-m-01', strtotime('-1 month')) . ' - ' . date('Y-m-d', strtotime('last day of previous month')),
                            ],
                            2 => [
                                'id' => 3,
                                'value' => date('Y-m-01') . ' - ' . date('Y-m-d'),
                            ],
                            3 => [
                                'id' => 4,
                                'value' => date('Y-m-d', strtotime('+1 day')) . ' - ' . date('Y-m-d', strtotime('last day of this month')),
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
                'buttons' => [
                    0 => [
                        'component' => 'Button',
                        'title' => 'В работу',
                        'visible' => true,
                        'action' => 'to-work',
                        'icon' => 'mdiCog',
                        'currentStatus' => 5,
                    ],
                ],
                'bredcrumbStatus' => [
                    'text' => 'Ожидают взятия в работу',
                    'link' => '#/request/list/wait-work',
                ],
                'fieldsForPC' => [
                    'id',
                    'status',
                    'actual_finish_date',
                    'subject',
                    'reason',
                    'type_id',
                    'request_attachments',
                    67,
                    94,
                ],
                'fieldsForOuter' => [
                    'reason',
                    'amount_to_work',
                    'type_id',
                    'status',
                    'id',
                    'subject',
                    'request_attachments',
                    67,
                    94,
                    72,
                ],
            ],
        ]
    ],

    'case7_0' => [
        'setting' => [
            'description' => 'Заявка тип 7 направление 0 статус 11 из профиля супервайзера',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case7_0.php',
        'provider_data' => [
            'responseBody' => [
                'request' => (include __DIR__ . '/fixture/case7_0.php')['lisa_fixtures']['requests'][0],
                'isCrossCheck' => false,
                'fieldsForOuter' => [
                    'amount_to_work',
                    'id',
                    'reason',
                    'status',
                    'subject',
                    'type_id',
                    'request_attachments',
                ],
                'fieldsForPC' => [
                    'actual_finish_date',
                    'id',
                    'reason',
                    'status',
                    'subject',
                    'type_id',
                    'request_attachments',
                ],
                'fieldsData' => [
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
                            0 => [
                                'id' => 3,
                                'name' => 'Гость',
                            ],
                        ],
                        'userTeam' => 1,
                        'url' => '/user/managers',
                        'disabled' => true,
                        'visible' => true,
                    ],
                    'cross_check_status' => 'Кросс-чек пройден',
                    'seller_id' => [
                        'disabled' => true,
                        'initValue' => [
                            'owox_id' => 121212,
                            'title' => 'Mogozinchik',
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
                            [
                                'disabled' => false,
                                'id' => 11,
                                'reason' => 'Другое (описан в коментариях)',
                                'status' => 1,
                            ]
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
                    'resultFieldsOrder' => [],
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
                                'value' => date('Y-01-01') . ' - ' . date('Y-m-d', strtotime('last day of previous month -1 month -1 day')),
                            ],
                            1 => [
                                'id' => 2,
                                'value' => date('Y-m-01', strtotime('-1 month')) . ' - ' . date('Y-m-d', strtotime('last day of previous month')),
                            ],
                            2 => [
                                'id' => 3,
                                'value' => date('Y-m-01') . ' - ' . date('Y-m-d'),
                            ],
                            3 => [
                                'id' => 4,
                                'value' => date('Y-m-d', strtotime('+1 day')) . ' - ' . date('Y-m-d', strtotime('last day of this month')),
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
                'buttons' => [
                    1 => [
                        'component' => 'Button',
                        'title' => 'Создать подзадачу',
                        'visible' => true,
                        'icon' => 'mdiArrangeSendBackward',
                        'action' => '/request/create?typeId=7&direction=0&id=1',
                        'currentStatus' => 11,
                    ],
                ],
                'bredcrumbStatus' => [
                    'text' => 'Закрыты',
                    'link' => '#/request/list/closed',
                ],
            ]
        ]
    ],

    'case8_0' => [
        'setting' => [
            'description' => 'Заявка тип 8 направление 0 статус 6 из профиля продакта',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case8_0.php',
        'provider_data' => [
            'responseBody' => [
                'request' => (include __DIR__ . '/fixture/case8_0.php')['lisa_fixtures']['requests'][0],
                'isCrossCheck' => false,
                'fieldsData' => [
                    'requestFields' => [
                        1 => '1',
                        6 => '1',
                        7 => '1',
                        28 => '27',
                        53 => '3',
                        54 => '1',
                        55 => '273.3',
                        79 => '10',
                        80 => '10',
                        81 => '10',
                        84 => '10',
                        85 => '10',
                        89 => '3',
                        90 => '10',
                        97 => '10',
                        98 => '10',
                        99 => '10',
                        101 => '0',
                        112 => '10',
                        113 => '10',
                        115 => '10',
                        122 => '0',
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
                                'id' => 4,
                                'name' => 'Константин Куцан',
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
                        'userTeam' => 18,
                        'url' => '/user/managers',
                        'disabled' => true,
                    ],
                    'supervisor_id' => [
                        'initValue' => [
                            0 => [
                                'id' => 1,
                                'name' => 'Система',
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
                        'userTeam' => 18,
                        'url' => '/user/managers',
                        'disabled' => true,
                        'visible' => true,
                    ],
                    'cross_check_status' => 'Не прошла кросс-чек',
                    'seller_id' => [
                        'disabled' => true,
                        'initValue' => [
                            'owox_id' => 121212,
                            'title' => 'Mogozinchik',
                        ],
                    ],
                    'priority' => [
                        'disabled' => true,
                        'items' => [
                            0 => [
                                'id' => 1,
                                'name' => 'Информация необходима для склада',
                                'status' => 1,
                                'disabled' => false,
                            ],
                            1 => [
                                'id' => 3,
                                'name' => 'Исправление критичной ошибки',
                                'status' => 0,
                                'disabled' => true,
                            ],
                            2 => [
                                'id' => 2,
                                'name' => 'Товар-новинка/эксклюзив (трафикообразующий)',
                                'status' => 1,
                                'disabled' => false,
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
                    'status' => 'В работе',
                    'type_id' => [
                        'disabled' => false,
                        'value' => 'Добавление/изменение информации в существующих порталах/фат-меню/категориях товаров',
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
                    'resultFieldsOrder' => [
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
                                'value' => '1',
                                'disabled' => true,
                            ],
                            3 => [
                                'id' => 7,
                                'name' => 'Добавление графики',
                                'value' => '1',
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
                    'svOrHigher' => false,
                ],
                'buttons' => [
                    7 => [
                        'component' => 'Button',
                        'title' => 'Создать подзадачу',
                        'visible' => true,
                        'icon' => 'mdiArrangeSendBackward',
                        'action' => '/request/create?typeId=8&direction=0&id=1',
                        'currentStatus' => 6,
                    ],
                ],
                'bredcrumbStatus' => [
                    'text' => 'В работе',
                    'link' => '#/request/list/in-work',
                ],
                'fieldsForPC' => [
                    'id',
                    'status',
                    'actual_finish_date',
                    'subject',
                    'reason',
                    'type_id',
                    'request_attachments',
                ],
                'fieldsForOuter' => [
                    'reason',
                    'amount_to_work',
                    'type_id',
                    'status',
                    'id',
                    'subject',
                    'request_attachments',
                ],
            ]
        ]
    ],

    'case9_0' => [
        'setting' => [
            'description' => 'Заявка тип 9 направление 0 статус 9 из профиля кч-менеджера',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case9_0.php',
        'provider_data' => [
            'responseBody' => [
                'request' => (include __DIR__ . '/fixture/case9_0.php')['lisa_fixtures']['requests'][0],
                'isCrossCheck' => true,
                'fieldsData' => [
                    'requestFields' => [
                        1 => '1',
                        6 => '1',
                        7 => '1',
                        28 => '27',
                        53 => '3',
                        54 => '1',
                        55 => '273.3',
                        79 => '10',
                        80 => '10',
                        81 => '10',
                        84 => '10',
                        85 => '10',
                        89 => '3',
                        90 => '10',
                        97 => '10',
                        98 => '10',
                        99 => '10',
                        101 => '0',
                        112 => '10',
                        113 => '10',
                        115 => '10',
                        122 => '0',
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
                                'id' => 3,
                                'name' => 'Гость',
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
                        'visible' => true,
                    ],
                    'cross_check_status' => 'На кросс-чеке',
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
                                'id' => 1,
                                'name' => 'Информация необходима для склада',
                                'status' => 1,
                                'disabled' => false,
                            ],
                            1 => [
                                'id' => 3,
                                'name' => 'Исправление критичной ошибки',
                                'status' => 0,
                                'disabled' => true,
                            ],
                            2 => [
                                'id' => 2,
                                'name' => 'Товар-новинка/эксклюзив (трафикообразующий)',
                                'status' => 1,
                                'disabled' => false,
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
                        'value' => 'Добавление параметров/значений',
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
                        ],
                        'disabled' => true,
                        'text' => '',
                    ],
                    'attachments' => [
                    ],
                    'requestResult' => [
                        'inputs' => [
                            0 => [
                                'id' => 79,
                                'name' => 'Количество добавленных/заблокированных параметров',
                                'type' => 'integer',
                                'status' => 1,
                                'disabled' => true,
                                'required' => true,
                            ],
                            1 => [
                                'id' => 80,
                                'name' => 'Количество добавленных значений к параметрам',
                                'type' => 'integer',
                                'status' => 1,
                                'disabled' => true,
                                'required' => true,
                            ],
                            2 => [
                                'id' => 91,
                                'name' => 'Количество обработанных категорий',
                                'type' => 'integer',
                                'status' => 1,
                                'disabled' => true,
                            ],
                            3 => [
                                'id' => 97,
                                'name' => 'Количество измененных товаров (Splitter)',
                                'type' => 'integer',
                                'status' => 1,
                                'disabled' => true,
                            ],
                            4 => [
                                'id' => 98,
                                'name' => 'Количество измененных товаров (пакетно в Owox)',
                                'type' => 'integer',
                                'status' => 1,
                                'disabled' => true,
                            ],
                            5 => [
                                'id' => 99,
                                'name' => 'Количество измененных товаров (поштучно в Owox)',
                                'type' => 'integer',
                                'status' => 1,
                                'disabled' => true,
                            ],
                            6 => [
                                'id' => 113,
                                'name' => 'Перевязано опций',
                                'type' => 'integer',
                                'status' => 1,
                                'disabled' => true,
                            ],
                            7 => [
                                'id' => 84,
                                'name' => 'Количество настроенных редиректов',
                                'type' => 'integer',
                                'status' => 1,
                                'disabled' => true,
                            ],
                        ],
                        'selects' => [
                        ],
                    ],
                    'requestErrors' => [
                        'origin' => [
                            0 => [
                                'field_id' => 41,
                                'title' => 'Ошибки в структурах категорий',
                                'errorsCount' => 0,
                                'itemsCount' => 0,
                            ],
                            1 => [
                                'field_id' => 45,
                                'title' => 'Ошибки в значениях параметров и в производителях',
                                'errorsCount' => 0,
                                'itemsCount' => 0,
                            ],
                            2 => [
                                'field_id' => 101,
                                'title' => 'Общее количество ошибок',
                                'errorsCount' => 0,
                                'itemsCount' => 0,
                            ],
                        ],
                        'cc' => [
                            0 => [
                                'field_id' => 136,
                                'title' => 'Ошибки в структурах категорий (Кросс-чек)',
                                'errorsCount' => 0,
                                'itemsCount' => 0,
                            ],
                            1 => [
                                'field_id' => 140,
                                'title' => 'Ошибки в значениях параметров и в производителях (Кросс-чек)',
                                'errorsCount' => 0,
                                'itemsCount' => 0,
                            ],
                            2 => [
                                'field_id' => 146,
                                'title' => 'Общее количество ошибок (Кросс-чек)',
                                'errorsCount' => 0,
                                'itemsCount' => 0,
                            ],
                        ],
                    ],
                    'resultFieldsOrder' => [
                    ],
                    'managerMotivation' => [
                    ],
                    'svMotivation' => [
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
                                'value' => date('Y-01-01') . ' - ' . date('Y-m-d', strtotime('last day of previous month -1 month -1 day')),
                            ],
                            1 => [
                                'id' => 2,
                                'value' => date('Y-m-01', strtotime('-1 month')) . ' - ' . date('Y-m-d', strtotime('last day of previous month')),
                            ],
                            2 => [
                                'id' => 3,
                                'value' => date('Y-m-01') . ' - ' . date('Y-m-d'),
                            ],
                            3 => [
                                'id' => 4,
                                'value' => date('Y-m-d', strtotime('+1 day')) . ' - ' . date('Y-m-d', strtotime('last day of this month')),
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
                    'svOrHigher' => false,
                ],
                'buttons' => [
                    1 => [
                        'component' => 'Button',
                        'title' => 'На исправление',
                        'visible' => true,
                        'icon' => 'mdiReloadAlert',
                        'action' => '/request/to-correction/1',
                        'currentStatus' => 9,
                    ],
                    3 => [
                        'component' => 'Button',
                        'title' => 'Завершить кросс-чек',
                        'visible' => true,
                        'icon' => 'mdiClosedCaption',
                        'action' => 'complete-cross-check',
                        'currentStatus' => 9,
                    ],
                ],
                'bredcrumbStatus' => [
                    'text' => 'Выполнены',
                    'link' => '#/request/list/completed',
                ],
                'fieldsForPC' => [
                ],
                'fieldsForOuter' => [
                ],
            ]
        ]
    ],

    'case10_0' => [
        'setting' => [
            'description' => 'Заявка тип 10 направление 0 статус 9 из профиля менеджера',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case10_0.php',
        'provider_data' => [
            'responseBody' => [
                'request' => (include __DIR__ . '/fixture/case10_0.php')['lisa_fixtures']['requests'][0],
                'isCrossCheck' => false,
                'fieldsData' => [
                    'requestFields' => [
                        1 => '1',
                        53 => '0.5',
                        54 => '1',
                        101 => '0',
                        122 => '0',
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
                        'visible' => true,
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
                                'id' => 1,
                                'name' => 'Информация необходима для склада',
                                'status' => 1,
                                'disabled' => false,
                            ],
                            1 => [
                                'id' => 3,
                                'name' => 'Исправление критичной ошибки',
                                'status' => 0,
                                'disabled' => true,
                            ],
                            2 => [
                                'id' => 2,
                                'name' => 'Товар-новинка/эксклюзив (трафикообразующий)',
                                'status' => 1,
                                'disabled' => false,
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
                    'status' => 'Ожидает',
                    'type_id' => [
                        'disabled' => false,
                        'value' => 'Изменение существующих параметров/значений',
                    ],
                    'reasons' => [
                        'initValue' => [
                            0 => [
                                'id' => 1,
                                'reason' => 'Ожидается загрузка фото в товары',
                                'status' => 1,
                                'disabled' => false,
                            ],
                        ],
                        'items' => [
                            0 => [
                                'id' => 11,
                                'reason' => 'Другое (описан в коментариях)',
                                'status' => 1,
                                'disabled' => false,
                            ],
                            1 => [
                                'id' => 3,
                                'reason' => 'Изменен приоритет задачи',
                                'status' => 1,
                                'disabled' => false,
                            ],
                            2 => [
                                'id' => 14,
                                'reason' => 'Ожидает группировки',
                                'status' => 1,
                                'disabled' => false,
                            ],
                            3 => [
                                'id' => 5,
                                'reason' => 'Ожидается загрузка обновлений в систему',
                                'status' => 0,
                                'disabled' => true,
                            ],
                            4 => [
                                'id' => 4,
                                'reason' => 'Ожидается загрузка товаров в систему',
                                'status' => 1,
                                'disabled' => false,
                            ],
                            5 => [
                                'id' => 1,
                                'reason' => 'Ожидается загрузка фото в товары',
                                'status' => 1,
                                'disabled' => false,
                            ],
                            6 => [
                                'id' => 15,
                                'reason' => 'Товары на модерации',
                                'status' => 1,
                                'disabled' => false,
                            ],
                            7 => [
                                'id' => 2,
                                'reason' => 'Требуется уточнение информации по задаче',
                                'status' => 1,
                                'disabled' => false,
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
                                'id' => 97,
                                'name' => 'Количество измененных товаров (Splitter)',
                                'type' => 'integer',
                                'status' => 1,
                                'disabled' => true,
                            ],
                            4 => [
                                'id' => 98,
                                'name' => 'Количество измененных товаров (пакетно в Owox)',
                                'type' => 'integer',
                                'status' => 1,
                                'disabled' => true,
                            ],
                            5 => [
                                'id' => 99,
                                'name' => 'Количество измененных товаров (поштучно в Owox)',
                                'type' => 'integer',
                                'status' => 1,
                                'disabled' => true,
                            ],
                            6 => [
                                'id' => 113,
                                'name' => 'Перевязано опций',
                                'type' => 'integer',
                                'status' => 1,
                                'disabled' => true,
                            ],
                            7 => [
                                'id' => 84,
                                'name' => 'Количество настроенных редиректов',
                                'type' => 'integer',
                                'status' => 1,
                                'disabled' => true,
                            ],
                        ],
                        'selects' => [
                        ],
                    ],
                    'requestErrors' => [
                        'origin' => [
                            0 => [
                                'field_id' => 41,
                                'title' => 'Ошибки в структурах категорий',
                                'errorsCount' => 0,
                                'itemsCount' => 0,
                            ],
                            1 => [
                                'field_id' => 45,
                                'title' => 'Ошибки в значениях параметров и в производителях',
                                'errorsCount' => 0,
                                'itemsCount' => 0,
                            ],
                            2 => [
                                'field_id' => 101,
                                'title' => 'Общее количество ошибок',
                                'errorsCount' => 0,
                                'itemsCount' => 0,
                            ],
                        ],
                        'cc' => [
                            0 => [
                                'field_id' => 136,
                                'title' => 'Ошибки в структурах категорий (Кросс-чек)',
                                'errorsCount' => 0,
                                'itemsCount' => 0,
                            ],
                            1 => [
                                'field_id' => 140,
                                'title' => 'Ошибки в значениях параметров и в производителях (Кросс-чек)',
                                'errorsCount' => 0,
                                'itemsCount' => 0,
                            ],
                            2 => [
                                'field_id' => 146,
                                'title' => 'Общее количество ошибок (Кросс-чек)',
                                'errorsCount' => 0,
                                'itemsCount' => 0,
                            ],
                        ],
                    ],
                    'resultFieldsOrder' => [
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
                            'id' => 59,
                            'name' => 'Рассчитанное количество обработанных категорий, параметров и значений параметров',
                            'value' => 0,
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
                                'value' => date('Y-01-01') . ' - ' . date('Y-m-d', strtotime('last day of previous month -1 month -1 day')),
                            ],
                            1 => [
                                'id' => 2,
                                'value' => date('Y-m-01', strtotime('-1 month')) . ' - ' . date('Y-m-d', strtotime('last day of previous month')),
                            ],
                            2 => [
                                'id' => 3,
                                'value' => date('Y-m-01') . ' - ' . date('Y-m-d'),
                            ],
                            3 => [
                                'id' => 4,
                                'value' => date('Y-m-d', strtotime('+1 day')) . ' - ' . date('Y-m-d', strtotime('last day of this month')),
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
                    'svOrHigher' => false,
                ],
                'buttons' => [
                ],
                'bredcrumbStatus' => [
                    'text' => 'Ожидают',
                    'link' => '#/request/list/on-hold',
                ],
                'fieldsForPC' => [
                ],
                'fieldsForOuter' => [
                ],
            ]
        ]
    ],

    'case11_0' => [
        'setting' => [
            'description' => 'Заявка тип 11 направление 0 статус 3 из профиля СВ',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case11_0.php',
        'provider_data' => [
            'responseBody' => [
                'request' => (include __DIR__ . '/fixture/case11_0.php')['lisa_fixtures']['requests'][0],
                'isCrossCheck' => false,
                'fieldsData' => [
                    'requestFields' => [
                        1 => '1',
                        53 => '0.5',
                        54 => '1',
                        101 => '0',
                        122 => '0',
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
                        'disabled' => false,
                    ],
                    'supervisor_id' => [
                        'initValue' => [
                            0 => [
                                'id' => 4,
                                'name' => 'Константин Куцан',
                            ],
                        ],
                        'url' => '/user/supervisors',
                        'disabled' => false,
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
                        ],
                        'url' => '/rozetka-category/all?name=name',
                        'disabled' => false,
                    ],
                    'cross_check_manager_id' => [
                        'initValue' => [
                        ],
                        'userTeam' => 1,
                        'url' => '/user/managers',
                        'disabled' => true,
                        'visible' => true,
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
                                'id' => 1,
                                'name' => 'Информация необходима для склада',
                                'status' => 1,
                                'disabled' => false,
                            ],
                            1 => [
                                'id' => 3,
                                'name' => 'Исправление критичной ошибки',
                                'status' => 0,
                                'disabled' => true,
                            ],
                            2 => [
                                'id' => 2,
                                'name' => 'Товар-новинка/эксклюзив (трафикообразующий)',
                                'status' => 1,
                                'disabled' => false,
                            ],
                        ],
                    ],
                    'amount_to_work' => [
                        'disabled' => false,
                    ],
                    'textareaPermissions' => [
                        'description' => true,
                        'recommendations' => true,
                        'supervisor_comment' => true,
                        'result_comment' => false,
                        'correction_comment' => true,
                    ],
                    'status' => 'На доработке',
                    'type_id' => [
                        'disabled' => false,
                        'value' => 'Проектирование структуры',
                    ],
                    'reasons' => [
                        'initValue' => [
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
                                'id' => 97,
                                'name' => 'Количество измененных товаров (Splitter)',
                                'type' => 'integer',
                                'status' => 1,
                                'disabled' => true,
                            ],
                            4 => [
                                'id' => 98,
                                'name' => 'Количество измененных товаров (пакетно в Owox)',
                                'type' => 'integer',
                                'status' => 1,
                                'disabled' => true,
                            ],
                            5 => [
                                'id' => 99,
                                'name' => 'Количество измененных товаров (поштучно в Owox)',
                                'type' => 'integer',
                                'status' => 1,
                                'disabled' => true,
                            ],
                            6 => [
                                'id' => 113,
                                'name' => 'Перевязано опций',
                                'type' => 'integer',
                                'status' => 1,
                                'disabled' => true,
                            ],
                            7 => [
                                'id' => 84,
                                'name' => 'Количество настроенных редиректов',
                                'type' => 'integer',
                                'status' => 1,
                                'disabled' => true,
                            ],
                        ],
                        'selects' => [
                        ],
                    ],
                    'requestErrors' => [
                        'origin' => [
                            0 => [
                                'field_id' => 41,
                                'title' => 'Ошибки в структурах категорий',
                                'errorsCount' => 0,
                                'itemsCount' => 0,
                            ],
                            1 => [
                                'field_id' => 45,
                                'title' => 'Ошибки в значениях параметров и в производителях',
                                'errorsCount' => 0,
                                'itemsCount' => 0,
                            ],
                            2 => [
                                'field_id' => 101,
                                'title' => 'Общее количество ошибок',
                                'errorsCount' => 0,
                                'itemsCount' => 0,
                            ],
                        ],
                        'cc' => [
                            0 => [
                                'field_id' => 136,
                                'title' => 'Ошибки в структурах категорий (Кросс-чек)',
                                'errorsCount' => 0,
                                'itemsCount' => 0,
                            ],
                            1 => [
                                'field_id' => 140,
                                'title' => 'Ошибки в значениях параметров и в производителях (Кросс-чек)',
                                'errorsCount' => 0,
                                'itemsCount' => 0,
                            ],
                            2 => [
                                'field_id' => 146,
                                'title' => 'Общее количество ошибок (Кросс-чек)',
                                'errorsCount' => 0,
                                'itemsCount' => 0,
                            ],
                        ],
                    ],
                    'resultFieldsOrder' => [
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
                            'id' => 59,
                            'name' => 'Рассчитанное количество обработанных категорий, параметров и значений параметров',
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
                                'disabled' => false,
                            ],
                            1 => [
                                'id' => 2,
                                'name' => 'Пакетная загрузка',
                                'value' => 0,
                                'disabled' => false,
                            ],
                        ],
                        'visa' => [
                            'id' => 3,
                            'name' => 'Виза супервайзера',
                            'value' => 0,
                            'disabled' => false,
                        ],
                    ],
                    'excludedFields' => Constants::EXCLUDED_FIELDS,
                    'report_period_id' => [
                        'disabled' => true,
                        'items' => [
                            0 => [
                                'id' => 1,
                                'value' => date('Y-01-01') . ' - ' . date('Y-m-d', strtotime('last day of previous month -1 month -1 day')),
                            ],
                            1 => [
                                'id' => 2,
                                'value' => date('Y-m-01', strtotime('-1 month')) . ' - ' . date('Y-m-d', strtotime('last day of previous month')),
                            ],
                            2 => [
                                'id' => 3,
                                'value' => date('Y-m-01') . ' - ' . date('Y-m-d'),
                            ],
                            3 => [
                                'id' => 4,
                                'value' => date('Y-m-d', strtotime('+1 day')) . ' - ' . date('Y-m-d', strtotime('last day of this month')),
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
                            'disabled' => false,
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
                            'disabled' => false,
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
                'buttons' => [
                    0 => [
                        'component' => 'Appoint',
                        'title' => 'Изменить супервайзера',
                        'icon' => 'mdiAccountCowboyHat',
                        'visible' => true,
                        'url' => '/user/supervisors',
                        'prompt' => 'Поиск супервизора...',
                        'action' => 'appoint-supervisor',
                        'notShowInView' => true,
                        'currentStatus' => 3,
                    ],
                    1 => [
                        'component' => 'Button',
                        'title' => 'Создать подзадачу',
                        'visible' => true,
                        'icon' => 'mdiArrangeSendBackward',
                        'action' => '/request/create?typeId=11&direction=0&id=1',
                        'currentStatus' => 3,
                    ],
                    2 => [
                        'component' => 'Reason',
                        'title' => 'Вернуть в новые',
                        'visible' => true,
                        'targetStatus' => 1,
                        'withoutReason' => true,
                        'action' => 'change-reason',
                        'icon' => 'mdiArrowLeftBoldOutline',
                        'currentStatus' => 3,
                    ],
                    3 => [
                        'component' => 'Reason',
                        'title' => 'Отменить',
                        'visible' => true,
                        'targetStatus' => 4,
                        'action' => 'change-reason',
                        'icon' => 'mdiCloseThick',
                        'currentStatus' => 3,
                    ],
                ],
                'bredcrumbStatus' => [
                    'text' => 'На доработке',
                    'link' => '#/request/list/require-changes',
                ],
                'fieldsForPC' => [
                ],
                'fieldsForOuter' => [
                ],
            ]
        ]
    ],

    'case12_1' => [
        'setting' => [
            'description' => 'Заявка тип 12 направление 1 статус 6 из профиля продакта',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case12_1.php',
        'provider_data' => [
            'responseBody' => [
                'request' => (include __DIR__ . '/fixture/case12_1.php')['lisa_fixtures']['requests'][0],
                'isCrossCheck' => false,
                'fieldsData' => [
                    'requestFields' => [
                        1 => '1',
                        21 => '1',
                        22 => '6',
                        23 => '11',
                        24 => '15',
                        25 => '18',
                        26 => '22',
                        27 => '24',
                        31 => '48',
                        49 => '0',
                        50 => '10.1',
                        51 => '0',
                        52 => '2',
                        53 => '0.5',
                        54 => '1',
                        60 => '0',
                        64 => '10.1',
                        67 => '10',
                        68 => '10',
                        69 => '10',
                        70 => '10',
                        71 => '10',
                        76 => '10',
                        77 => '10',
                        88 => '10',
                        89 => '0',
                        93 => '10',
                        94 => '10',
                        101 => '0',
                        111 => '10',
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
                                'id' => 4,
                                'name' => 'Константин Куцан',
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
                        'userTeam' => 18,
                        'url' => '/user/managers',
                        'disabled' => true,
                    ],
                    'supervisor_id' => [
                        'initValue' => [
                            0 => [
                                'id' => 1,
                                'name' => 'Система',
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
                        'userTeam' => 18,
                        'url' => '/user/managers',
                        'disabled' => true,
                        'visible' => true,
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
                                'id' => 1,
                                'name' => 'Информация необходима для склада',
                                'status' => 1,
                                'disabled' => false,
                            ],
                            1 => [
                                'id' => 3,
                                'name' => 'Исправление критичной ошибки',
                                'status' => 0,
                                'disabled' => true,
                            ],
                            2 => [
                                'id' => 2,
                                'name' => 'Товар-новинка/эксклюзив (трафикообразующий)',
                                'status' => 1,
                                'disabled' => false,
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
                        'value' => 'Добавление новых СЦ/изменение существующих СЦ',
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
                        ],
                        'disabled' => true,
                        'text' => '',
                    ],
                    'attachments' => [
                        0 => [
                            'alias' => '194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd',
                            'id' => 1,
                            'size' => ' (0.06 Mb)',
                            'uploaded_at' => '2021-10-09 00:00:00',
                            'uploaded_by' => 'Константин Куцан',
                            'isImage' => false,
                            'status' => 3,
                            'link' => 'http://minio.docker/lisa-auto/1/803902_194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd',
                            'canDelete' => false,
                        ],
                        1 => [
                            'alias' => 'doc .doc',
                            'id' => 2,
                            'size' => ' (0.03 Mb)',
                            'uploaded_at' => '2021-10-09 00:00:00',
                            'uploaded_by' => 'Константин Куцан',
                            'isImage' => false,
                            'status' => 3,
                            'link' => 'http://minio.docker/lisa-auto/1/803902_doc.doc',
                            'canDelete' => false,
                        ],
                        2 => [
                            'alias' => 'pptx_абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїі.pptx',
                            'id' => 3,
                            'size' => ' (0.09 Mb)',
                            'uploaded_at' => '2021-10-09 00:00:00',
                            'uploaded_by' => 'Константин Куцан',
                            'isImage' => false,
                            'status' => 3,
                            'link' => 'http://minio.docker/lisa-auto/1/803902_pptx_abvgdeezzijklmnoprstufhccssyeuaegii.pptx',
                            'canDelete' => false,
                        ],
                        3 => [
                            'alias' => '!@#$%^&*()_+`-=][\';.|}{:?><.jpg',
                            'id' => 4,
                            'size' => ' (0.03 Mb)',
                            'uploaded_at' => '2021-10-09 00:00:00',
                            'uploaded_by' => 'Константин Куцан',
                            'isImage' => true,
                            'status' => 3,
                            'link' => 'http://minio.docker/lisa-auto/1/803902_~!@#$%^&*()_+`-=][;.|}{:?><.jpg',
                            'canDelete' => false,
                        ],
                    ],
                    'requestResult' => [
                        'inputs' => [
                            0 => [
                                'id' => 76,
                                'name' => 'Добавлено новых СЦ',
                                'type' => 'integer',
                                'status' => 1,
                                'disabled' => true,
                                'required' => true,
                            ],
                            1 => [
                                'id' => 77,
                                'name' => 'Изменено существующих СЦ',
                                'type' => 'integer',
                                'status' => 1,
                                'disabled' => true,
                                'required' => true,
                            ],
                            2 => [
                                'id' => 67,
                                'name' => 'Количество изменённых товаров',
                                'type' => 'integer',
                                'status' => 1,
                                'disabled' => true,
                            ],
                            3 => [
                                'id' => 111,
                                'name' => 'Количество товаров, которые уже есть в БД',
                                'type' => 'integer',
                                'status' => 1,
                                'disabled' => true,
                            ],
                            4 => [
                                'id' => 69,
                                'name' => 'Общее количество обработанных фото',
                                'type' => 'integer',
                                'status' => 1,
                                'disabled' => true,
                            ],
                            5 => [
                                'id' => 68,
                                'name' => 'Среднее количество фото в товаре',
                                'type' => 'integer',
                                'status' => 1,
                                'disabled' => true,
                            ],
                            6 => [
                                'id' => 71,
                                'name' => 'Количество добавленных инструкций',
                                'type' => 'integer',
                                'status' => 1,
                                'disabled' => true,
                            ],
                            7 => [
                                'id' => 70,
                                'name' => 'Количество добавленных видеороликов',
                                'type' => 'integer',
                                'status' => 1,
                                'disabled' => true,
                            ],
                            8 => [
                                'id' => 88,
                                'name' => 'Количество товаров, к которым добавлены видео',
                                'type' => 'integer',
                                'status' => 1,
                                'disabled' => true,
                            ],
                            9 => [
                                'id' => 93,
                                'name' => 'Количество обработанных групп',
                                'type' => 'integer',
                                'status' => 1,
                                'disabled' => true,
                            ],
                            10 => [
                                'id' => 94,
                                'name' => 'Количество сгруппированых товаров',
                                'type' => 'integer',
                                'status' => 1,
                                'disabled' => true,
                            ],
                        ],
                        'selects' => [
                            0 => [
                                'id' => 21,
                                'name' => 'Наличие характеристик к товарам',
                                'type' => 'select',
                                'status' => 1,
                                'disabled' => true,
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
                                'disabled' => true,
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
                                'disabled' => true,
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
                                'id' => 24,
                                'name' => 'Обработка фото',
                                'type' => 'select',
                                'status' => 1,
                                'disabled' => true,
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
                            4 => [
                                'id' => 27,
                                'name' => 'Видео к товарам',
                                'type' => 'select',
                                'status' => 1,
                                'disabled' => true,
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
                            5 => [
                                'id' => 31,
                                'name' => 'Группировка товаров (наличие варьируемых параметров)',
                                'type' => 'select',
                                'status' => 1,
                                'disabled' => true,
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
                            6 => [
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
                            7 => [
                                'id' => 26,
                                'name' => 'Язык информации',
                                'type' => 'select',
                                'status' => 1,
                                'disabled' => true,
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
                    'resultFieldsOrder' => [
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
                'buttons' => [
                    5 => [
                        'component' => 'Button',
                        'title' => 'Создать подзадачу',
                        'visible' => true,
                        'icon' => 'mdiArrangeSendBackward',
                        'action' => '/request/create?typeId=12&direction=1&id=1',
                        'currentStatus' => 9,
                    ],
                ],
                'bredcrumbStatus' => [
                    'text' => 'Выполнены',
                    'link' => '#/request/list/completed',
                ],
                'fieldsForPC' => [
                ],
                'fieldsForOuter' => [
                ],
            ]
        ]
    ],

    'case13_0' => [
        'setting' => [
            'description' => 'Заявка тип 13 направление 0 статус 9 из профиля менеджера',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case13_0.php',
        'provider_data' => [
            'responseBody' => [
                'request' => (include __DIR__ . '/fixture/case13_0.php')['lisa_fixtures']['requests'][0],
                'isCrossCheck' => false,
                'fieldsData' => [
                    'requestFields' => [
                        1 => '1',
                        27 => '24',
                        47 => '10',
                        48 => '10',
                        53 => '0.5',
                        54 => '1',
                        56 => '25',
                        62 => '10',
                        63 => '10',
                        70 => '10',
                        86 => '10',
                        87 => '10',
                        88 => '10',
                        89 => '3',
                        100 => '10',
                        101 => '0',
                        122 => '0',
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
                        'visible' => true,
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
                                'id' => 1,
                                'name' => 'Информация необходима для склада',
                                'status' => 1,
                                'disabled' => false,
                            ],
                            1 => [
                                'id' => 3,
                                'name' => 'Исправление критичной ошибки',
                                'status' => 0,
                                'disabled' => true,
                            ],
                            2 => [
                                'id' => 2,
                                'name' => 'Товар-новинка/эксклюзив (трафикообразующий)',
                                'status' => 1,
                                'disabled' => false,
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
                        'value' => 'Добавление/изменение видео',
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
                        ],
                        'disabled' => true,
                        'text' => '',
                    ],
                    'attachments' => [
                    ],
                    'requestResult' => [
                        'inputs' => [
                            70 => [
                                'id' => 70,
                                'name' => 'Количество добавленных видеороликов',
                                'type' => 'integer',
                                'status' => 1,
                                'disabled' => true,
                                'required' => true,
                            ],
                            100 => [
                                'id' => 100,
                                'name' => 'Количество измененных/замененных видеороликов',
                                'type' => 'integer',
                                'status' => 1,
                                'disabled' => true,
                                'required' => true,
                            ],
                            88 => [
                                'id' => 88,
                                'name' => 'Количество товаров, к которым добавлены видео',
                                'type' => 'integer',
                                'status' => 1,
                                'disabled' => true,
                                'required' => true,
                            ],
                            47 => [
                                'id' => 47,
                                'name' => 'Суммарная длительность добавленных роликов/ролика, мин',
                                'type' => 'decimal',
                                'status' => 1,
                                'disabled' => true,
                            ],
                            48 => [
                                'id' => 48,
                                'name' => 'Суммарная длительность измененных роликов/ролика, мин',
                                'type' => 'decimal',
                                'status' => 1,
                                'disabled' => true,
                            ],
                            86 => [
                                'id' => 86,
                                'name' => 'Редактирование видео и обрезка видеоролика. Рендеринг, мин',
                                'type' => 'integer',
                                'status' => 1,
                                'disabled' => true,
                            ],
                            87 => [
                                'id' => 87,
                                'name' => 'Количество отредактированных видео',
                                'type' => 'integer',
                                'status' => 1,
                                'disabled' => true,
                            ],
                            62 => [
                                'id' => 62,
                                'name' => 'Время на конвертацию видео в формат mp4, мин',
                                'type' => 'decimal',
                                'status' => 1,
                                'disabled' => true,
                            ],
                            63 => [
                                'id' => 63,
                                'name' => 'Количество видео, которые конвертировали в формат mp4, штук',
                                'type' => 'decimal',
                                'status' => 1,
                                'disabled' => true,
                            ],
                        ],
                        'selects' => [
                            27 => [
                                'id' => 27,
                                'name' => 'Видео к товарам',
                                'type' => 'select',
                                'status' => 1,
                                'disabled' => true,
                                'required' => true,
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
                        ],
                    ],
                    'requestErrors' => [
                        'origin' => [
                            0 => [
                                'field_id' => 46,
                                'title' => 'Ошибки в видео к товарам',
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
                                'field_id' => 141,
                                'title' => 'Ошибки в видео к товарам (Кросс-чек)',
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
                    'resultFieldsOrder' => [
                        0 => 27,
                        1 => 47,
                        2 => 48,
                        3 => 62,
                        4 => 63,
                        5 => 70,
                        6 => 86,
                        7 => 87,
                        8 => 88,
                        9 => 100,

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
                            'id' => 56,
                            'name' => 'Рассчитанное количество добавленных видео',
                            'value' => '25',
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
                                'value' => date('Y-01-01') . ' - ' . date('Y-m-d', strtotime('last day of previous month -1 month -1 day')),
                            ],
                            1 => [
                                'id' => 2,
                                'value' => date('Y-m-01', strtotime('-1 month')) . ' - ' . date('Y-m-d', strtotime('last day of previous month')),
                            ],
                            2 => [
                                'id' => 3,
                                'value' => date('Y-m-01') . ' - ' . date('Y-m-d'),
                            ],
                            3 => [
                                'id' => 4,
                                'value' => date('Y-m-d', strtotime('+1 day')) . ' - ' . date('Y-m-d', strtotime('last day of this month')),
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
                'buttons' => [
                ],
                'bredcrumbStatus' => [
                    'text' => 'Выполнены',
                    'link' => '#/request/list/completed',
                ],
                'fieldsForPC' => [
                ],
                'fieldsForOuter' => [
                ],
            ]
        ]
    ],

    'case14_0' => [
        'setting' => [
            'description' => 'Заявка тип 14 направление 0 статус 7 из профиля СВ',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case14_0.php',
        'provider_data' => [
            'responseBody' => [
                'request' => (include __DIR__ . '/fixture/case14_0.php')['lisa_fixtures']['requests'][0],
                'isCrossCheck' => false,
                'fieldsData' => [
                    'requestFields' => [
                        1 => '1',
                        53 => '0.5',
                        54 => '1',
                        58 => '0',
                        101 => '0',
                        122 => '0',
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
                        'visible' => true,
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
                                'id' => 1,
                                'name' => 'Информация необходима для склада',
                                'status' => 1,
                                'disabled' => false,
                            ],
                            1 => [
                                'id' => 3,
                                'name' => 'Исправление критичной ошибки',
                                'status' => 0,
                                'disabled' => true,
                            ],
                            2 => [
                                'id' => 2,
                                'name' => 'Товар-новинка/эксклюзив (трафикообразующий)',
                                'status' => 1,
                                'disabled' => false,
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
                    'status' => 'Ожидает',
                    'type_id' => [
                        'disabled' => false,
                        'value' => 'Добавление/изменение размерной сетки',
                    ],
                    'reasons' => [
                        'initValue' => [
                            0 => [
                                'id' => 1,
                                'reason' => 'Ожидается загрузка фото в товары',
                                'status' => 1,
                                'disabled' => false,
                            ],
                        ],
                        'items' => [
                            0 => [
                                'id' => 11,
                                'reason' => 'Другое (описан в коментариях)',
                                'status' => 1,
                                'disabled' => false,
                            ],
                            1 => [
                                'id' => 3,
                                'reason' => 'Изменен приоритет задачи',
                                'status' => 1,
                                'disabled' => false,
                            ],
                            2 => [
                                'id' => 14,
                                'reason' => 'Ожидает группировки',
                                'status' => 1,
                                'disabled' => false,
                            ],
                            3 => [
                                'id' => 5,
                                'reason' => 'Ожидается загрузка обновлений в систему',
                                'status' => 0,
                                'disabled' => true,
                            ],
                            4 => [
                                'id' => 4,
                                'reason' => 'Ожидается загрузка товаров в систему',
                                'status' => 1,
                                'disabled' => false,
                            ],
                            5 => [
                                'id' => 1,
                                'reason' => 'Ожидается загрузка фото в товары',
                                'status' => 1,
                                'disabled' => false,
                            ],
                            6 => [
                                'id' => 15,
                                'reason' => 'Товары на модерации',
                                'status' => 1,
                                'disabled' => false,
                            ],
                            7 => [
                                'id' => 2,
                                'reason' => 'Требуется уточнение информации по задаче',
                                'status' => 1,
                                'disabled' => false,
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
                                'id' => 82,
                                'name' => 'Количество добавленных размерных сеток',
                                'type' => 'integer',
                                'status' => 1,
                                'disabled' => true,
                                'required' => true,
                            ],
                            1 => [
                                'id' => 80,
                                'name' => 'Количество добавленных значений к параметрам',
                                'type' => 'integer',
                                'status' => 1,
                                'disabled' => true,
                            ],
                        ],
                        'selects' => [
                            0 => [
                                'id' => 26,
                                'name' => 'Язык информации',
                                'type' => 'select',
                                'status' => 1,
                                'disabled' => true,
                                'required' => true,
                                'values' => [
                                    0 => [
                                        'value' => 23,
                                        'text' => 'Английский',
                                        'disabled' => false,
                                    ],
                                    1 => [
                                        'value' => 21,
                                        'text' => 'Русский',
                                        'disabled' => false,
                                    ],
                                    2 => [
                                        'value' => 174,
                                        'text' => 'Русский + украинский',
                                        'disabled' => false,
                                    ],
                                    3 => [
                                        'value' => 22,
                                        'text' => 'Украинский',
                                        'disabled' => false,
                                    ],
                                ],
                            ],
                        ],
                    ],
                    'requestErrors' => [
                        'origin' => [
                            0 => [
                                'field_id' => 43,
                                'title' => 'Ошибки в размерных сетках',
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
                                'field_id' => 138,
                                'title' => 'Ошибки в размерных сетках (Кросс-чек)',
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
                    'resultFieldsOrder' => [
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
                            'id' => 57,
                            'name' => 'Рассчитанное количество добавленных размерных сеток',
                            'value' => 0,
                            'readonly' => true,
                        ],
                    ],
                    'svMotivation' => [
                        0 => [
                            'id' => 120,
                            'name' => 'Проверенные размерные сетки (ссылки)',
                            'type' => 'textarea',
                            'value' => NULL,
                            'readonly' => false,
                        ],
                        1 => [
                            'id' => 108,
                            'name' => 'Количество проверенных размерных сеток',
                            'type' => 'integer',
                            'value' => NULL,
                            'readonly' => false,
                        ],
                    ],
                    'ccMotivation' => [
                        0 => [
                            'id' => 156,
                            'name' => 'Проверенные размерные сетки (ссылки) (Кросс-чек)',
                            'type' => 'textarea',
                            'value' => NULL,
                            'readonly' => false,
                        ],
                        1 => [
                            'id' => 153,
                            'name' => 'Количество проверенных размерных сеток (Кросс-чек)',
                            'type' => 'integer',
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
                                'value' => date('Y-01-01') . ' - ' . date('Y-m-d', strtotime('last day of previous month -1 month -1 day')),
                            ],
                            1 => [
                                'id' => 2,
                                'value' => date('Y-m-01', strtotime('-1 month')) . ' - ' . date('Y-m-d', strtotime('last day of previous month')),
                            ],
                            2 => [
                                'id' => 3,
                                'value' => date('Y-m-01') . ' - ' . date('Y-m-d'),
                            ],
                            3 => [
                                'id' => 4,
                                'value' => date('Y-m-d', strtotime('+1 day')) . ' - ' . date('Y-m-d', strtotime('last day of this month')),
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
                'buttons' => [
                    0 => [
                        'component' => 'Button',
                        'title' => 'В работу',
                        'visible' => true,
                        'action' => 'to-work',
                        'icon' => 'mdiCog',
                        'currentStatus' => 7,
                    ],
                    2 => [
                        'component' => 'Button',
                        'title' => 'Создать подзадачу',
                        'visible' => true,
                        'icon' => 'mdiArrangeSendBackward',
                        'action' => '/request/create?typeId=14&direction=0&id=1',
                        'currentStatus' => 7,
                    ],
                ],
                'bredcrumbStatus' => [
                    'text' => 'Ожидают',
                    'link' => '#/request/list/on-hold',
                ],
                'fieldsForPC' => [
                ],
                'fieldsForOuter' => [
                ],
            ]
        ]
    ],

    'case15_0' => [
        'setting' => [
            'description' => 'Заявка тип 15 направление 0 статус 11 из профиля продакта',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case15_0.php',
        'provider_data' => [
            'responseBody' => [
                'request' => (include __DIR__ . '/fixture/case15_0.php')['lisa_fixtures']['requests'][0],
                'isCrossCheck' => false,
                'fieldsData' => [
                    'requestFields' => [
                        1 => '1',
                        53 => '0.5',
                        54 => '1',
                        58 => '15',
                        83 => '10',
                        89 => '3',
                        92 => '10',
                        101 => '0',
                        110 => '10',
                        122 => '0',
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
                                'id' => 4,
                                'name' => 'Константин Куцан',
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
                        'userTeam' => 18,
                        'url' => '/user/managers',
                        'disabled' => true,
                    ],
                    'supervisor_id' => [
                        'initValue' => [
                            0 => [
                                'id' => 1,
                                'name' => 'Система',
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
                        'userTeam' => 18,
                        'url' => '/user/managers',
                        'disabled' => true,
                        'visible' => true,
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
                                'id' => 1,
                                'name' => 'Информация необходима для склада',
                                'status' => 1,
                                'disabled' => false,
                            ],
                            1 => [
                                'id' => 3,
                                'name' => 'Исправление критичной ошибки',
                                'status' => 0,
                                'disabled' => true,
                            ],
                            2 => [
                                'id' => 2,
                                'name' => 'Товар-новинка/эксклюзив (трафикообразующий)',
                                'status' => 1,
                                'disabled' => false,
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
                        'value' => 'Добавление/изменение тегов',
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
                        ],
                        'disabled' => true,
                        'text' => '',
                    ],
                    'attachments' => [
                    ],
                    'requestResult' => [
                        'inputs' => [
                            0 => [
                                'id' => 83,
                                'name' => 'Количество добавленных тегов',
                                'type' => 'integer',
                                'status' => 1,
                                'disabled' => true,
                                'required' => true,
                            ],
                            1 => [
                                'id' => 92,
                                'name' => 'Количество созданных связей для тегов',
                                'type' => 'integer',
                                'status' => 1,
                                'disabled' => true,
                                'required' => true,
                            ],
                            2 => [
                                'id' => 110,
                                'name' => 'Количество товаров, к которым добавлены теги',
                                'type' => 'integer',
                                'status' => 1,
                                'disabled' => true,
                                'required' => true,
                            ],
                        ],
                        'selects' => [
                        ],
                    ],
                    'requestErrors' => [
                        'origin' => [
                            0 => [
                                'field_id' => 44,
                                'title' => 'Ошибки в тегах',
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
                                'field_id' => 139,
                                'title' => 'Ошибки в тегах (Кросс-чек)',
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
                    'resultFieldsOrder' => [
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
                'buttons' => [
                    1 => [
                        'component' => 'Button',
                        'title' => 'Создать подзадачу',
                        'visible' => true,
                        'icon' => 'mdiArrangeSendBackward',
                        'action' => '/request/create?typeId=15&direction=0&id=1',
                        'currentStatus' => 11,
                    ],
                ],
                'bredcrumbStatus' => [
                    'text' => 'Закрыты',
                    'link' => '#/request/list/closed',
                ],
                'fieldsForPC' => [
                ],
                'fieldsForOuter' => [
                ],
            ]
        ]
    ],

];
