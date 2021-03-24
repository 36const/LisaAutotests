<?php

use lisa\Page\Requests\Request;

return [
    'case1' => [
        'setting' => [
            'description' => 'Основные, вкладка Все',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '',
            'requestBody' => [
                'visibleColumns' => ['author_id', 'supervisor_id', 'manager_id', 'status', 'previous_status', 'direction', 'team_direction', 'category_id', 'seller_id', 'priority', 'cross_check_status', 'cross_check_manager_id']
            ],
            'db' => [
                'lisa_fixtures' => [
                    "grid_settings" => [
                        [
                            "id" => 1,
                            "user_id" => 4,
                            "columns_list" => '["author_id", "supervisor_id", "manager_id", "status", "previous_status", "direction", "team_direction", "category_id", "seller_id", "priority", "cross_check_status", "cross_check_manager_id"]'
                        ]
                    ],
                ]
            ],
            "pageObjects" => [
                "canSee" => [
                    "Заголовки" => [
                        ["selector" => Request::columnName('id', 'ID задачи')],
                        ["selector" => Request::columnName('subject', 'Заголовок')],
                        ["selector" => Request::columnName('type_id', 'Тип')],
                        ["selector" => Request::columnName('author_id', 'Создатель заявки')],
                        ["selector" => Request::columnName('supervisor_id', 'Супервайзер заявки')],
                        ["selector" => Request::columnName('manager_id', 'Менеджер заявки')],
                        ["selector" => Request::columnName('status', 'Статус')],
                        ["selector" => Request::columnName('previous_status', 'Предыдущий статус')],
                        ["selector" => Request::columnName('direction', 'Направление задачи')],
                        ["selector" => Request::columnName('team_direction', 'Направление команды')],
                        ["selector" => Request::columnName('category_id', 'Категория товаров')],
                        ["selector" => Request::columnName('seller_id', 'Продавец')],
                        ["selector" => Request::columnName('priority', 'Приоритет')],
                        ["selector" => Request::columnName('cross_check_status', 'Кросс-чек статус')],
                        ["selector" => Request::columnName('cross_check_manager_id', 'Кросс-чек менеджер')],
                    ],
                    "Выпадающие списки" => [
                        [
                            "selector" => "//select[@name='RequestSearch[priority][]']/option[1][@value='1']",
                            "value" => "Информация необходима для склада"
                        ],
                        [
                            "selector" => "//select[@name='RequestSearch[priority][]']/option[2][@value='3']",
                            "value" => "Исправление критичной ошибки"
                        ],
                        [
                            "selector" => "//select[@name='RequestSearch[priority][]']/option[3][@value='2']",
                            "value" => "Товар-новинка/эксклюзив (трафикообразующий)"
                        ],
                    ],
                    "Заявка 7" => [
                        ["selector" => Request::requestInTable(1, 'id', 7)],
                        ["selector" => Request::requestInTable(1, 'subject', 'Добавление/изменение тегов (Определяется типом задачи)')],
                        ["selector" => Request::requestInTable(1, 'type_id', 'Добавление/изменение тегов')],
                        ["selector" => Request::requestInTable(1, 'author_id', 'Константин Куцан')],
                        ["selector" => Request::requestInTable(1, 'supervisor_id', 'Супервайзер Категоркин 15')],
                        ["selector" => Request::requestInTable(1, 'manager_id', 'Менеджер Контентович 1А')],
                        ["selector" => Request::requestInTable(1, 'status', 'Выполнена')],
                        ["selector" => Request::requestInTable(1, 'previous_status', 'В работе')],
                        ["selector" => Request::requestInTable(1, 'direction', 'Определяется типом задачи')],
                        ["selector" => Request::requestInTable(1, 'team_direction', 'Работа с порталами, фат-меню, категориями')],
                        ["selector" => Request::requestInTable(1, 'category_id', 'Авиабилеты')],
                        ["selector" => Request::requestInTable(1, 'seller_id', 'Euromart')],
                        ["selector" => Request::requestInTable(1, 'priority', 'Товар-новинка/эксклюзив (трафикообразующий)')],
                        ["selector" => Request::requestInTable(1, 'cross_check_status', 'Не прошла кросс-чек')],
                        ["selector" => Request::requestInTable(1, 'cross_check_manager_id', '(не задано)')],
                    ],
                    "Заявка 6" => [
                        ["selector" => Request::requestInTable(2, 'id', 6)],
                        ["selector" => Request::requestInTable(2, 'subject', 'Добавление/изменение видео (Определяется типом задачи)')],
                        ["selector" => Request::requestInTable(2, 'type_id', 'Добавление/изменение видео')],
                        ["selector" => Request::requestInTable(2, 'author_id', 'Константин Куцан')],
                        ["selector" => Request::requestInTable(2, 'supervisor_id', 'Супервайзер Категоркин 18')],
                        ["selector" => Request::requestInTable(2, 'manager_id', 'Менеджер Контентович 1А')],
                        ["selector" => Request::requestInTable(2, 'status', 'Частично выполнена')],
                        ["selector" => Request::requestInTable(2, 'previous_status', 'В работе')],
                        ["selector" => Request::requestInTable(2, 'direction', 'Определяется типом задачи')],
                        ["selector" => Request::requestInTable(2, 'team_direction', 'Работа с порталами, фат-меню, категориями')],
                        ["selector" => Request::requestInTable(2, 'category_id', 'Авиабилеты')],
                        ["selector" => Request::requestInTable(2, 'seller_id', 'Euromart')],
                        ["selector" => Request::requestInTable(2, 'priority', 'Товар-новинка/эксклюзив (трафикообразующий)')],
                        ["selector" => Request::requestInTable(2, 'cross_check_status', 'Не прошла кросс-чек')],
                        ["selector" => Request::requestInTable(2, 'cross_check_manager_id', '(не задано)')],
                    ],
                    "Заявка 5" => [
                        ["selector" => Request::requestInTable(3, 'id', 5)],
                        ["selector" => Request::requestInTable(3, 'subject', 'Изменение существующих параметров/значений (Определяется типом задачи)')],
                        ["selector" => Request::requestInTable(3, 'type_id', 'Изменение существующих параметров/значений')],
                        ["selector" => Request::requestInTable(3, 'author_id', 'Константин Куцан')],
                        ["selector" => Request::requestInTable(3, 'supervisor_id', 'Супервайзер Проектенко 17')],
                        ["selector" => Request::requestInTable(3, 'manager_id', 'Менеджер Контентович 1А')],
                        ["selector" => Request::requestInTable(3, 'status', 'Ожидает')],
                        ["selector" => Request::requestInTable(3, 'previous_status', 'В работе')],
                        ["selector" => Request::requestInTable(3, 'direction', 'Определяется типом задачи')],
                        ["selector" => Request::requestInTable(3, 'team_direction', 'Работа с проектированием структур + фильтрами')],
                        ["selector" => Request::requestInTable(3, 'category_id', 'Авиабилеты')],
                        ["selector" => Request::requestInTable(3, 'seller_id', 'Euromart')],
                        ["selector" => Request::requestInTable(3, 'priority', 'Товар-новинка/эксклюзив (трафикообразующий)')],
                        ["selector" => Request::requestInTable(3, 'cross_check_status', 'Не прошла кросс-чек')],
                        ["selector" => Request::requestInTable(3, 'cross_check_manager_id', '(не задано)')],
                    ],
                    "Заявка 4" => [
                        ["selector" => Request::requestInTable(4, 'id', 4)],
                        ["selector" => Request::requestInTable(4, 'subject', 'Добавление параметров/значений (Определяется типом задачи)')],
                        ["selector" => Request::requestInTable(4, 'type_id', 'Добавление параметров/значений')],
                        ["selector" => Request::requestInTable(4, 'author_id', 'Константин Куцан')],
                        ["selector" => Request::requestInTable(4, 'supervisor_id', 'Супервайзер Проектенко 14')],
                        ["selector" => Request::requestInTable(4, 'manager_id', 'Менеджер Контентович 1А')],
                        ["selector" => Request::requestInTable(4, 'status', 'В работе')],
                        ["selector" => Request::requestInTable(4, 'previous_status', 'Ожидает взятия в работу')],
                        ["selector" => Request::requestInTable(4, 'direction', 'Определяется типом задачи')],
                        ["selector" => Request::requestInTable(4, 'team_direction', 'Работа с проектированием структур + фильтрами')],
                        ["selector" => Request::requestInTable(4, 'category_id', 'Авиабилеты')],
                        ["selector" => Request::requestInTable(4, 'seller_id', 'Euromart')],
                        ["selector" => Request::requestInTable(4, 'priority', 'Товар-новинка/эксклюзив (трафикообразующий)')],
                        ["selector" => Request::requestInTable(4, 'cross_check_status', 'Не прошла кросс-чек')],
                        ["selector" => Request::requestInTable(4, 'cross_check_manager_id', '(не задано)')],
                    ],
                    "Заявка 3" => [
                        ["selector" => Request::requestInTable(5, 'id', 3)],
                        ["selector" => Request::requestInTable(5, 'subject', 'Добавление нового портала/раздела фат-меню/категории товаров (Определяется типом задачи)')],
                        ["selector" => Request::requestInTable(5, 'type_id', 'Добавление нового портала/раздела фат-меню/категории товаров')],
                        ["selector" => Request::requestInTable(5, 'author_id', 'Константин Куцан')],
                        ["selector" => Request::requestInTable(5, 'supervisor_id', 'Супервайзер Категоркин 15')],
                        ["selector" => Request::requestInTable(5, 'manager_id', 'Менеджер Контентович 1А')],
                        ["selector" => Request::requestInTable(5, 'status', 'Ожидает взятия в работу')],
                        ["selector" => Request::requestInTable(5, 'previous_status', 'Готова для распределения')],
                        ["selector" => Request::requestInTable(5, 'direction', 'Определяется типом задачи')],
                        ["selector" => Request::requestInTable(5, 'team_direction', 'Работа с порталами, фат-меню, категориями')],
                        ["selector" => Request::requestInTable(5, 'category_id', 'Авиабилеты')],
                        ["selector" => Request::requestInTable(5, 'seller_id', 'Euromart')],
                        ["selector" => Request::requestInTable(5, 'priority', 'Товар-новинка/эксклюзив (трафикообразующий)')],
                        ["selector" => Request::requestInTable(5, 'cross_check_status', 'Не прошла кросс-чек')],
                        ["selector" => Request::requestInTable(5, 'cross_check_manager_id', '(не задано)')],
                    ],
                    "Заявка 2" => [
                        ["selector" => Request::requestInTable(6, 'id', 2)],
                        ["selector" => Request::requestInTable(6, 'subject', 'Заливка фото с фотостудии (Работа с товарами Розетки)')],
                        ["selector" => Request::requestInTable(6, 'type_id', 'Заливка фото с фотостудии')],
                        ["selector" => Request::requestInTable(6, 'author_id', 'Константин Куцан')],
                        ["selector" => Request::requestInTable(6, 'supervisor_id', 'Супервайзер Начальникович 1')],
                        ["selector" => Request::requestInTable(6, 'manager_id', '(не задано)')],
                        ["selector" => Request::requestInTable(6, 'status', 'На доработке')],
                        ["selector" => Request::requestInTable(6, 'previous_status', 'Готова для распределения')],
                        ["selector" => Request::requestInTable(6, 'direction', 'Работа с товарами Розетки')],
                        ["selector" => Request::requestInTable(6, 'team_direction', 'Работа с товарами Rozetka')],
                        ["selector" => Request::requestInTable(6, 'category_id', 'Авиабилеты')],
                        ["selector" => Request::requestInTable(6, 'seller_id', 'Rozetka')],
                        ["selector" => Request::requestInTable(6, 'priority', 'Товар-новинка/эксклюзив (трафикообразующий)')],
                        ["selector" => Request::requestInTable(6, 'cross_check_status', 'Не прошла кросс-чек')],
                        ["selector" => Request::requestInTable(6, 'cross_check_manager_id', '(не задано)')],
                    ],
                    "Заявка 1" => [
                        ["selector" => Request::requestInTable(7, 'id', 1)],
                        ["selector" => Request::requestInTable(7, 'subject', 'Перенос товаров (Работа с товарами Маркетплейса)')],
                        ["selector" => Request::requestInTable(7, 'type_id', 'Перенос товаров')],
                        ["selector" => Request::requestInTable(7, 'author_id', 'Константин Куцан')],
                        ["selector" => Request::requestInTable(7, 'supervisor_id', 'Супервайзер Начальникович 1')],
                        ["selector" => Request::requestInTable(7, 'manager_id', '(не задано)')],
                        ["selector" => Request::requestInTable(7, 'status', 'Готова для распределения')],
                        ["selector" => Request::requestInTable(7, 'previous_status', 'Новая')],
                        ["selector" => Request::requestInTable(7, 'direction', 'Работа с товарами Маркетплейса')],
                        ["selector" => Request::requestInTable(7, 'team_direction', 'Работа с товарами Маркетплейса')],
                        ["selector" => Request::requestInTable(7, 'category_id', '(не задано)')],
                        ["selector" => Request::requestInTable(7, 'seller_id', 'Euromart')],
                        ["selector" => Request::requestInTable(7, 'priority', 'Товар-новинка/эксклюзив (трафикообразующий)')],
                        ["selector" => Request::requestInTable(7, 'cross_check_status', 'Не прошла кросс-чек')],
                        ["selector" => Request::requestInTable(7, 'cross_check_manager_id', '(не задано)')],
                    ],
                ]
            ]
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Списки, вкладка Готова для распределения',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => 'in-check',
            'requestBody' => [
                'visibleColumns' => ['parent_id', 'difficulty_level', 'awaiting_correction', 'reasons', 'author_clarifications', 'photos_available', 'characteristics_available', 'description_available', 'language'],
            ],
            'db' => [
                'lisa_fixtures' => [
                    "grid_settings" => [
                        [
                            "id" => 1,
                            "user_id" => 4,
                            "columns_list" => '["parent_id", "difficulty_level", "awaiting_correction", "reasons", "author_clarifications", "photos_available", "characteristics_available", "description_available", "language"]'
                        ]
                    ],
                ]
            ],
            "pageObjects" => [
                "canSee" => [
                    "Заголовки" => [
                        ["selector" => Request::columnName('id', 'ID задачи')],
                        ["selector" => Request::columnName('subject', 'Заголовок')],
                        ["selector" => Request::columnName('type_id', 'Тип')],
                        ["selector" => Request::columnName('parent_id', 'ID связанной задачи')],
                        ["selector" => Request::columnName('difficulty_level', 'Уровень сложности задачи')],
                        ["selector" => Request::columnName('awaiting_correction', 'На исправление')],
                        ["selector" => Request::columnName('reasons', 'Причины')],
                        ["selector" => Request::columnName('author_clarifications', 'Уточнения. Количество уточнений у автора')],
                        ["selector" => Request::columnName('photos_available', 'Наличие фото к товарам')],
                        ["selector" => Request::columnName('characteristics_available', 'Наличие характеристик к товарам')],
                        ["selector" => Request::columnName('description_available', 'Наличие описаний к товарам')],
                        ["selector" => Request::columnName('language', 'Язык информации')],
                    ],
                    "Выпадающие списки" => [
                        [
                            "selector" => "//select[@name='RequestSearch[difficulty_level][]']/option[1][@value='61']",
                            "value" => "1"
                        ],
                        [
                            "selector" => "//select[@name='RequestSearch[difficulty_level][]']/option[2][@value='62']",
                            "value" => "2"
                        ],
                        [
                            "selector" => "//select[@name='RequestSearch[difficulty_level][]']/option[3][@value='63']",
                            "value" => "3"
                        ],
                        [
                            "selector" => "//select[@name='RequestSearch[difficulty_level][]']/option[4][@value='64']",
                            "value" => "4"
                        ],
                        [
                            "selector" => "//select[@name='RequestSearch[difficulty_level][]']/option[5][@value='65']",
                            "value" => "5"
                        ],
                        [
                            "selector" => "//select[@name='RequestSearch[difficulty_level][]']/option[6][@value='66']",
                            "value" => "6"
                        ],
                        [
                            "selector" => "//select[@name='RequestSearch[difficulty_level][]']/option[7][@value='-1']",
                            "value" => "(не задано)"
                        ],

                        [
                            "selector" => "//select[@name='RequestSearch[reasons][]']/option[1]",
                            "value" => "Все товары уже есть на сайте (Отменена)"
                        ],
                        [
                            "selector" => "//select[@name='RequestSearch[reasons][]']/option[2]",
                            "value" => "Другое (описан в коментариях) (Все)"
                        ],
                        [
                            "selector" => "//select[@name='RequestSearch[reasons][]']/option[3]",
                            "value" => "Дубль задачи (Отменена)"
                        ],
                        [
                            "selector" => "//select[@name='RequestSearch[reasons][]']/option[4]",
                            "value" => "Изменен приоритет задачи (Ожидает)"
                        ],
                        [
                            "selector" => "//select[@name='RequestSearch[reasons][]']/option[5]",
                            "value" => "Нада (На доработке)"
                        ],
                        [
                            "selector" => "//select[@name='RequestSearch[reasons][]']/option[6]",
                            "value" => "Не получена запрошенная недостающая информация (Частично выполнена)"
                        ],
                        [
                            "selector" => "//select[@name='RequestSearch[reasons][]']/option[7]",
                            "value" => "Нинада (На доработке)"
                        ],
                        [
                            "selector" => "//select[@name='RequestSearch[reasons][]']/option[8]",
                            "value" => "Ожидает группировки (Ожидает)"
                        ],
                        [
                            "selector" => "//select[@name='RequestSearch[reasons][]']/option[9]",
                            "value" => "Ожидается загрузка обновлений в систему (Ожидает)"
                        ],
                        [
                            "selector" => "//select[@name='RequestSearch[reasons][]']/option[10]",
                            "value" => "Ожидается загрузка товаров в систему (Ожидает)"
                        ],
                        [
                            "selector" => "//select[@name='RequestSearch[reasons][]']/option[11]",
                            "value" => "Ожидается загрузка фото в товары (Ожидает)"
                        ],
                        [
                            "selector" => "//select[@name='RequestSearch[reasons][]']/option[12]",
                            "value" => "Товары на модерации (Ожидает)"
                        ],
                        [
                            "selector" => "//select[@name='RequestSearch[reasons][]']/option[13]",
                            "value" => "Товары ушли в ошибки (Частично выполнена)"
                        ],
                        [
                            "selector" => "//select[@name='RequestSearch[reasons][]']/option[14]",
                            "value" => "Требуется уточнение информации по задаче (Ожидает)"
                        ],
                        [
                            "selector" => "//select[@name='RequestSearch[reasons][]']/option[15]",
                            "value" => "Часть товаров ушла в ошибки (Частично выполнена)"
                        ],
                        [
                            "selector" => "//select[@name='RequestSearch[reasons][]']/option[16]",
                            "value" => "(не задано)"
                        ],

                        [
                            "selector" => "//select[@name='RequestSearch[author_clarifications][]']/option[1][@value='18']",
                            "value" => "Без уточнений"
                        ],
                        [
                            "selector" => "//select[@name='RequestSearch[author_clarifications][]']/option[2][@value='20']",
                            "value" => "Более 5 уточнений"
                        ],
                        [
                            "selector" => "//select[@name='RequestSearch[author_clarifications][]']/option[3][@value='19']",
                            "value" => "Менее 5 уточнений"
                        ],
                        [
                            "selector" => "//select[@name='RequestSearch[author_clarifications][]']/option[4][@value='-1']",
                            "value" => "(не задано)"
                        ],

                        [
                            "selector" => "//select[@name='RequestSearch[photos_available][]']/option[1][@value='9']",
                            "value" => "Не предоставлены продактом. Выполнен поиск."
                        ],
                        [
                            "selector" => "//select[@name='RequestSearch[photos_available][]']/option[2][@value='6']",
                            "value" => "Предоставлены продактом"
                        ],
                        [
                            "selector" => "//select[@name='RequestSearch[photos_available][]']/option[3][@value='7']",
                            "value" => "Предоставлены продактом частично. Без дополнительного поиска."
                        ],
                        [
                            "selector" => "//select[@name='RequestSearch[photos_available][]']/option[4][@value='8']",
                            "value" => "Предоставлены продактом частично. С дополнительным поиском."
                        ],
                        [
                            "selector" => "//select[@name='RequestSearch[photos_available][]']/option[5][@value='10']",
                            "value" => "Фото предоставлены фотостудией"
                        ],
                        [
                            "selector" => "//select[@name='RequestSearch[photos_available][]']/option[6][@value='-1']",
                            "value" => "(не задано)"
                        ],

                        [
                            "selector" => "//select[@name='RequestSearch[characteristics_available][]']/option[1][@value='5']",
                            "value" => "Характеристики добавлены с обновлением фото/описания"
                        ],
                        [
                            "selector" => "//select[@name='RequestSearch[characteristics_available][]']/option[2][@value='4']",
                            "value" => "Не предоставлены продактом. Выполнен поиск."
                        ],
                        [
                            "selector" => "//select[@name='RequestSearch[characteristics_available][]']/option[3][@value='1']",
                            "value" => "Предоставлены продактом"
                        ],
                        [
                            "selector" => "//select[@name='RequestSearch[characteristics_available][]']/option[4][@value='2']",
                            "value" => "Предоставлены продактом частично. Без дополнительного поиска."
                        ],
                        [
                            "selector" => "//select[@name='RequestSearch[characteristics_available][]']/option[5][@value='3']",
                            "value" => "Предоставлены продактом частично. С дополнительным поиском."
                        ],
                        [
                            "selector" => "//select[@name='RequestSearch[characteristics_available][]']/option[6][@value='-1']",
                            "value" => "(не задано)"
                        ],

                        [
                            "selector" => "//select[@name='RequestSearch[description_available][]']/option[1][@value='14']",
                            "value" => "Не предоставлены продактом. Выполнен поиск."
                        ],
                        [
                            "selector" => "//select[@name='RequestSearch[description_available][]']/option[2][@value='11']",
                            "value" => "Предоставлены продактом"
                        ],
                        [
                            "selector" => "//select[@name='RequestSearch[description_available][]']/option[3][@value='12']",
                            "value" => "Предоставлены продактом частично. Без дополнительного поиска."
                        ],
                        [
                            "selector" => "//select[@name='RequestSearch[description_available][]']/option[4][@value='13']",
                            "value" => "Предоставлены продактом частично. С дополнительным поиском."
                        ],
                        [
                            "selector" => "//select[@name='RequestSearch[description_available][]']/option[5][@value='-1']",
                            "value" => "(не задано)"
                        ],

                        [
                            "selector" => "//select[@name='RequestSearch[language][]']/option[1][@value='23']",
                            "value" => "Английский"
                        ],
                        [
                            "selector" => "//select[@name='RequestSearch[language][]']/option[2][@value='21']",
                            "value" => "Русский"
                        ],
                        [
                            "selector" => "//select[@name='RequestSearch[language][]']/option[3][@value='22']",
                            "value" => "Украинский"
                        ],
                        [
                            "selector" => "//select[@name='RequestSearch[language][]']/option[4][@value='-1']",
                            "value" => "(не задано)"
                        ],
                    ],
                    "Заявка 1" => [
                        ["selector" => Request::requestInTable(1, 'id', 1)],
                        ["selector" => Request::requestInTable(1, 'subject', 'Перенос товаров (Работа с товарами Маркетплейса)')],
                        ["selector" => Request::requestInTable(1, 'type_id', 'Перенос товаров')],
                        ["selector" => Request::requestInTable(1, 'parent_id', '(не задано)')],
                        ["selector" => Request::requestInTable(1, 'difficulty_level', '(не задано)')],
                        ["selector" => Request::requestInTable(1, 'awaiting_correction', 'Нет')],
                        ["selector" => Request::requestInTable(1, 'reasons', '(не задано)')],
                        ["selector" => Request::requestInTable(1, 'author_clarifications', '(не задано)')],
                        ["selector" => Request::requestInTable(1, 'photos_available', '(не задано)')],
                        ["selector" => Request::requestInTable(1, 'characteristics_available', '(не задано)')],
                        ["selector" => Request::requestInTable(1, 'description_available', '(не задано)')],
                        ["selector" => Request::requestInTable(1, 'language', '(не задано)')],
                    ],
                ],
                "cantSee" => [
                    "Заявка 7" => [
                        ["selector" => Request::requestInTableInexact('id', '7')],
                        ["selector" => Request::requestInTableInexact('subject', 'Добавление/изменение тегов (Определяется типом задачи)')],
                        ["selector" => Request::requestInTableInexact('type_id', 'Добавление/изменение тегов')],
                    ],
                    "Заявка 6" => [
                        ["selector" => Request::requestInTableInexact('id', '6')],
                        ["selector" => Request::requestInTableInexact('subject', 'Добавление/изменение видео (Определяется типом задачи)')],
                        ["selector" => Request::requestInTableInexact('type_id', 'Добавление/изменение видео')],
                    ],
                    "Заявка 5" => [
                        ["selector" => Request::requestInTableInexact('id', '5')],
                        ["selector" => Request::requestInTableInexact('subject', 'Изменение существующих параметров/значений (Определяется типом задачи)')],
                        ["selector" => Request::requestInTableInexact('type_id', 'Изменение существующих параметров/значений')],
                    ],
                    "Заявка 4" => [
                        ["selector" => Request::requestInTableInexact('id', '4')],
                        ["selector" => Request::requestInTableInexact('subject', 'Добавление параметров/значений (Определяется типом задачи)')],
                        ["selector" => Request::requestInTableInexact('type_id', 'Добавление параметров/значений')],
                    ],
                    "Заявка 3" => [
                        ["selector" => Request::requestInTableInexact('id', '3')],
                        ["selector" => Request::requestInTableInexact('subject', 'Добавление нового портала/раздела фат-меню/категории товаров (Определяется типом задачи)')],
                        ["selector" => Request::requestInTableInexact('type_id', 'Добавление нового портала/раздела фат-меню/категории товаров')],
                    ],
                    "Заявка 2" => [
                        ["selector" => Request::requestInTableInexact('id', '2')],
                        ["selector" => Request::requestInTableInexact('subject', 'Заливка фото с фотостудии (Работа с товарами Розетки)')],
                        ["selector" => Request::requestInTableInexact('type_id', 'Заливка фото с фотостудии')],
                    ],
                ]
            ]
        ]
    ],

    'case3' => [
        'setting' => [
            'description' => 'Текстовые поля, вкладка На доработке',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => 'require-changes',
            'requestBody' => [
                'visibleColumns' => ['description', 'reason', 'recommendations', 'correction_comment', 'result_comment'],
            ],
            'db' => [
                'lisa_fixtures' => [
                    "grid_settings" => [
                        [
                            "id" => 1,
                            "user_id" => 4,
                            "columns_list" => '["description", "reason", "recommendations", "correction_comment", "result_comment"]'
                        ]
                    ],
                ]
            ],
            "pageObjects" => [
                "canSee" => [
                    "Заголовки" => [
                        ["selector" => Request::columnName('id', 'ID задачи')],
                        ["selector" => Request::columnName('subject', 'Заголовок')],
                        ["selector" => Request::columnName('type_id', 'Тип')],
                        ["selector" => Request::columnName('description', 'Описание')],
                        ["selector" => Request::columnName('reason', 'Причина отмены/доработки')],
                        ["selector" => Request::columnName('recommendations', 'Рекомендации')],
                        ["selector" => Request::columnName('correction_comment', 'Комментарий на исправление')],
                        ["selector" => Request::columnName('result_comment', 'Комментарий к результату задачи')],
                    ],
                    "Заявка 2" => [
                        ["selector" => Request::requestInTable(1, 'id', 2)],
                        ["selector" => Request::requestInTable(1, 'subject', 'Заливка фото с фотостудии (Работа с товарами Розетки)')],
                        ["selector" => Request::requestInTable(1, 'type_id', 'Заливка фото с фотостудии')],
                        ["selector" => Request::requestInTable(1, 'description', 'Описание')],
                        ["selector" => "//tbody/tr/td[@data-col-seq='reason']"], //особое поле "Причина отмены/доработки"
                        ["selector" => Request::requestInTable(1, 'recommendations', '(не задано)')],
                        ["selector" => Request::requestInTable(1, 'correction_comment', '(не задано)')],
                        ["selector" => Request::requestInTable(1, 'result_comment', '(не задано)')],
                    ],
                ],
                "cantSee" => [
                    "Заявка 7" => [
                        ["selector" => Request::requestInTableInexact('id', '7')],
                        ["selector" => Request::requestInTableInexact('subject', 'Добавление/изменение тегов (Определяется типом задачи)')],
                        ["selector" => Request::requestInTableInexact('type_id', 'Добавление/изменение тегов')],
                    ],
                    "Заявка 6" => [
                        ["selector" => Request::requestInTableInexact('id', '6')],
                        ["selector" => Request::requestInTableInexact('subject', 'Добавление/изменение видео (Определяется типом задачи)')],
                        ["selector" => Request::requestInTableInexact('type_id', 'Добавление/изменение видео')],
                    ],
                    "Заявка 5" => [
                        ["selector" => Request::requestInTableInexact('id', '5')],
                        ["selector" => Request::requestInTableInexact('subject', 'Изменение существующих параметров/значений (Определяется типом задачи)')],
                        ["selector" => Request::requestInTableInexact('type_id', 'Изменение существующих параметров/значений')],
                    ],
                    "Заявка 4" => [
                        ["selector" => Request::requestInTableInexact('id', '4')],
                        ["selector" => Request::requestInTableInexact('subject', 'Добавление параметров/значений (Определяется типом задачи)')],
                        ["selector" => Request::requestInTableInexact('type_id', 'Добавление параметров/значений  ')],
                    ],
                    "Заявка 3" => [
                        ["selector" => Request::requestInTableInexact('id', '3')],
                        ["selector" => Request::requestInTableInexact('subject', 'Добавление нового портала/раздела фат-меню/категории товаров (Определяется типом задачи)')],
                        ["selector" => Request::requestInTableInexact('type_id', 'Добавление нового портала/раздела фат-меню/категории товаров')],
                    ],
                    "Заявка 1" => [
                        ["selector" => Request::requestInTableInexact('id', '1')],
                        ["selector" => Request::requestInTableInexact('subject', 'Перенос товаров (Работа с товарами Маркетплейса)')],
                        ["selector" => Request::requestInTableInexact('type_id', 'Перенос товаров	')],
                    ],
                ]
            ]
        ]
    ],

    'case4' => [
        'setting' => [
            'description' => 'Числовые поля, вкладка Ожидает взятия в работу',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => 'wait-work',
            'requestBody' => [
                'visibleColumns' => ['amount_to_work', 'added_goods', 'handled_goods','changed_goods', 'goods_in_db', 'quantity_of_handled_but_not_grouped', 'group_settings', 'quantity_of_words_in_dictionaries', 'calc_quantity_of_indicators', 'calc_quantity_of_not_grouped', 'calc_quantity_of_sent_emails', 'calc_quantity_of_child_requests', 'calc_quantity_of_words_in_dictionaries', 'average_amount_of_goods_in_group', 'calc_quantity_of_checked_goods', 'calc_quantity_of_checked_goods_with_errors', 'calc_quantity_of_checked_goods_cc', 'calc_quantity_of_checked_goods_with_errors_cc'],
            ],
            'db' => [
                'lisa_fixtures' => [
                    "grid_settings" => [
                        [
                            "id" => 1,
                            "user_id" => 4,
                            "columns_list" => '["amount_to_work", "added_goods", "handled_goods", "changed_goods", "goods_in_db", "quantity_of_handled_but_not_grouped", "group_settings", "quantity_of_words_in_dictionaries", "calc_quantity_of_indicators", "calc_quantity_of_not_grouped", "calc_quantity_of_sent_emails", "calc_quantity_of_child_requests", "calc_quantity_of_words_in_dictionaries", "average_amount_of_goods_in_group", "calc_quantity_of_checked_goods", "calc_quantity_of_checked_goods_with_errors", "calc_quantity_of_checked_goods_cc", "calc_quantity_of_checked_goods_with_errors_cc"]'
                        ]
                    ],
                ]
            ],
            "pageObjects" => [
                "canSee" => [
                    "Заголовки" => [
                        ["selector" => Request::columnName('id', 'ID задачи')],
                        ["selector" => Request::columnName('subject', 'Заголовок')],
                        ["selector" => Request::columnName('type_id', 'Тип')],
                        ["selector" => Request::columnName('amount_to_work', 'Количество в работу')],
                        ["selector" => Request::columnName('added_goods', 'Количество добавленных товаров')],
                        ["selector" => Request::columnName('handled_goods', 'Количество обработанных товаров')],
                        ["selector" => Request::columnName('changed_goods', 'Количество измененных товаров')],
                        ["selector" => Request::columnName('goods_in_db', 'Количество товаров, которые уже есть в БД')],
                        ["selector" => Request::columnName('quantity_of_handled_but_not_grouped', 'Количество обработанных, но не сгруппированных товаров')],
                        ["selector" => Request::columnName('group_settings', 'Количество настроек групп (управление группами)')],
                        ["selector" => Request::columnName('quantity_of_words_in_dictionaries', 'Количество слов в словарях')],
                        ["selector" => Request::columnName('calc_quantity_of_indicators', 'Общее рассчитанное количество показателей')],
                        ["selector" => Request::columnName('calc_quantity_of_not_grouped', 'Рассчитанное количество не сгруппированных товаров')],
                        ["selector" => Request::columnName('calc_quantity_of_sent_emails', 'Рассчитанное количество отправленных писем')],
                        ["selector" => Request::columnName('calc_quantity_of_child_requests', 'Рассчитанное количество созданных подзадач')],
                        ["selector" => Request::columnName('calc_quantity_of_words_in_dictionaries', 'Рассчитанное количество слов в словарях')],
                        ["selector" => Request::columnName('average_amount_of_goods_in_group', 'Среднее количество товаров в группе')],
                        ["selector" => Request::columnName('calc_quantity_of_checked_goods', 'Рассчитанное количество проверенных товаров')],
                        ["selector" => Request::columnName('calc_quantity_of_checked_goods_with_errors', 'Рассчитанное количество проверенных товаров с ошибками')],
                        ["selector" => Request::columnName('calc_quantity_of_checked_goods_cc', 'Рассчитанное количество проверенных товаров (Кросс-чек)')],
                        ["selector" => Request::columnName('calc_quantity_of_checked_goods_with_errors_cc', 'Рассчитанное количество проверенных товаров с ошибками (Кросс-чек)')],
                    ],
                    "Заявка 3" => [
                        ["selector" => Request::requestInTable(1, 'id', 3)],
                        ["selector" => Request::requestInTable(1, 'subject', 'Добавление нового портала/раздела фат-меню/категории товаров (Определяется типом задачи)')],
                        ["selector" => Request::requestInTable(1, 'type_id', 'Добавление нового портала/раздела фат-меню/категории товаров')],
                        ["selector" => Request::requestInTable(1, 'amount_to_work', '10')],
                        ["selector" => Request::requestInTable(1, 'added_goods', '(не задано)')],
                        ["selector" => Request::requestInTable(1, 'handled_goods', '(не задано)')],
                        ["selector" => Request::requestInTable(1, 'changed_goods', '(не задано)')],
                        ["selector" => Request::requestInTable(1, 'goods_in_db', '(не задано)')],
                        ["selector" => Request::requestInTable(1, 'quantity_of_handled_but_not_grouped', '(не задано)')],
                        ["selector" => Request::requestInTable(1, 'group_settings', '(не задано)')],
                        ["selector" => Request::requestInTable(1, 'quantity_of_words_in_dictionaries', '(не задано)')],
                        ["selector" => Request::requestInTable(1, 'calc_quantity_of_indicators', '(не задано)')],
                        ["selector" => Request::requestInTable(1, 'calc_quantity_of_not_grouped', '(не задано)')],
                        ["selector" => Request::requestInTable(1, 'calc_quantity_of_sent_emails', '(не задано)')],
                        ["selector" => Request::requestInTable(1, 'calc_quantity_of_child_requests', '(не задано)')],
                        ["selector" => Request::requestInTable(1, 'calc_quantity_of_words_in_dictionaries', '(не задано)')],
                        ["selector" => Request::requestInTable(1, 'average_amount_of_goods_in_group', '(не задано)')],
                        ["selector" => Request::requestInTable(1, 'calc_quantity_of_checked_goods', '(не задано)')],
                        ["selector" => Request::requestInTable(1, 'calc_quantity_of_checked_goods_with_errors', '(не задано)')],
                        ["selector" => Request::requestInTable(1, 'calc_quantity_of_checked_goods_cc', '(не задано)')],
                        ["selector" => Request::requestInTable(1, 'calc_quantity_of_checked_goods_with_errors_cc', '(не задано)')],
                    ],
                ],
                "cantSee" => [
                    "Заявка 7" => [
                        ["selector" => Request::requestInTableInexact('id', '7')],
                        ["selector" => Request::requestInTableInexact('subject', 'Добавление/изменение тегов (Определяется типом задачи)')],
                        ["selector" => Request::requestInTableInexact('type_id', 'Добавление/изменение тегов')],
                    ],
                    "Заявка 6" => [
                        ["selector" => Request::requestInTableInexact('id', '6')],
                        ["selector" => Request::requestInTableInexact('subject', 'Добавление/изменение видео (Определяется типом задачи)')],
                        ["selector" => Request::requestInTableInexact('type_id', 'Добавление/изменение видео')],
                    ],
                    "Заявка 5" => [
                        ["selector" => Request::requestInTableInexact('id', '5')],
                        ["selector" => Request::requestInTableInexact('subject', 'Изменение существующих параметров/значений (Определяется типом задачи)')],
                        ["selector" => Request::requestInTableInexact('type_id', 'Изменение существующих параметров/значений')],
                    ],
                    "Заявка 4" => [
                        ["selector" => Request::requestInTableInexact('id', '4')],
                        ["selector" => Request::requestInTableInexact('subject', 'Добавление параметров/значений (Определяется типом задачи)')],
                        ["selector" => Request::requestInTableInexact('type_id', 'Добавление параметров/значений  ')],
                    ],
                    "Заявка 2" => [
                        ["selector" => Request::requestInTableInexact('id', '2')],
                        ["selector" => Request::requestInTableInexact('subject', 'Заливка фото с фотостудии (Работа с товарами Розетки)')],
                        ["selector" => Request::requestInTableInexact('type_id', 'Заливка фото с фотостудии')],
                    ],
                    "Заявка 1" => [
                        ["selector" => Request::requestInTableInexact('id', '1')],
                        ["selector" => Request::requestInTableInexact('subject', 'Перенос товаров (Работа с товарами Маркетплейса)')],
                        ["selector" => Request::requestInTableInexact('type_id', 'Перенос товаров	')],
                    ],
                ]
            ]
        ]
    ],

    'case5' => [
        'setting' => [
            'description' => 'Даты, вкладка В работе',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => 'in-work',
            'requestBody' => [
                'visibleColumns' => ['last_change_status_date', 'created_at', 'supervisor_process_date', 'supervisor_check_date', 'planned_start_date', 'planned_finish_date', 'actual_start_date', 'actual_finish_date', 'report_period_id', 'sv_report_periods'],
            ],
            'db' => [
                'lisa_fixtures' => [
                    "grid_settings" => [
                        [
                            "id" => 1,
                            "user_id" => 4,
                            "columns_list" => '["last_change_status_date", "created_at", "supervisor_process_date", "supervisor_check_date", "planned_start_date", "planned_finish_date", "actual_start_date", "actual_finish_date", "report_period_id", "sv_report_periods"]'
                        ]
                    ],
                ]
            ],
            "pageObjects" => [
                "canSee" => [
                    "Заголовки" => [
                        ["selector" => Request::columnName('id', 'ID задачи')],
                        ["selector" => Request::columnName('subject', 'Заголовок')],
                        ["selector" => Request::columnName('type_id', 'Тип')],
                        ["selector" => Request::columnName('last_change_status_date', 'Дата последнего изменения статуса')],
                        ["selector" => Request::columnName('created_at', 'Дата регистрации задачи в системе')],
                        ["selector" => Request::columnName('supervisor_process_date', 'Дата обработки задачи супервайзером')],
                        ["selector" => Request::columnName('supervisor_check_date', 'Дата проверки задачи супервайзером')],
                        ["selector" => Request::columnName('planned_start_date', 'Плановая дата начала работ')],
                        ["selector" => Request::columnName('planned_finish_date', 'Плановая дата завершения')],
                        ["selector" => Request::columnName('actual_start_date', 'Фактическая дата начала работ')],
                        ["selector" => Request::columnName('actual_finish_date', 'Фактическая дата завершения')],
                        ["selector" => Request::columnName('report_period_id', 'Отчетный период КМ')],
                        ["selector" => Request::columnName('sv_report_periods', 'Отчетные периоды СВ')],
                    ],
                    "Выпадающие списки" => [
                        [
                            "selector" => "//select[@name='RequestSearch[report_period_id][]']/option[1][@value='1']",
                            "value" => "2020-01-01 - 2020-03-31"
                        ],
                        [
                            "selector" => "//select[@name='RequestSearch[report_period_id][]']/option[2][@value='2']",
                            "value" => "2020-04-01 - 2020-06-30"
                        ],
                        [
                            "selector" => "//select[@name='RequestSearch[report_period_id][]']/option[3][@value='3']",
                            "value" => "2020-07-01 - 2020-09-30"
                        ],
                        [
                            "selector" => "//select[@name='RequestSearch[report_period_id][]']/option[4][@value='4']",
                            "value" => "2020-10-01 - 2020-12-31"
                        ],
                        [
                            "selector" => "//select[@name='RequestSearch[report_period_id][]']/option[5][@value='-1']",
                            "value" => "(не задано)"
                        ],

                        [
                            "selector" => "//select[@name='RequestSearch[sv_report_periods][]']/option[1][@value='1']",
                            "value" => "2020-01-01 - 2020-03-31"
                        ],
                        [
                            "selector" => "//select[@name='RequestSearch[sv_report_periods][]']/option[2][@value='2']",
                            "value" => "2020-04-01 - 2020-06-30"
                        ],
                        [
                            "selector" => "//select[@name='RequestSearch[sv_report_periods][]']/option[3][@value='3']",
                            "value" => "2020-07-01 - 2020-09-30"
                        ],
                        [
                            "selector" => "//select[@name='RequestSearch[sv_report_periods][]']/option[4][@value='4']",
                            "value" => "2020-10-01 - 2020-12-31"
                        ],
                        [
                            "selector" => "//select[@name='RequestSearch[sv_report_periods][]']/option[5][@value='-1']",
                            "value" => "(не задано)"
                        ],
                    ],
                    "Заявка 4" => [
                        ["selector" => Request::requestInTable(1, 'id', 4)],
                        ["selector" => Request::requestInTable(1, 'subject', 'Добавление параметров/значений (Определяется типом задачи)')],
                        ["selector" => Request::requestInTable(1, 'type_id', 'Добавление параметров/значений')],
                        ["selector" => Request::requestInTable(1, 'last_change_status_date', '2020-01-01 00:00:01')],
                        ["selector" => Request::requestInTable(1, 'created_at', '2020-01-01 00:00:00')],
                        ["selector" => Request::requestInTable(1, 'supervisor_process_date', '2020-01-01 00:00:02')],
                        ["selector" => Request::requestInTable(1, 'supervisor_check_date', '(не задано)')],
                        ["selector" => Request::requestInTable(1, 'planned_start_date', '(не задано)')],
                        ["selector" => Request::requestInTable(1, 'planned_finish_date', '(не задано)')],
                        ["selector" => Request::requestInTable(1, 'actual_start_date', '2020-01-01 00:00:03')],
                        ["selector" => Request::requestInTable(1, 'actual_finish_date', '(не задано)')],
                        ["selector" => Request::requestInTable(1, 'report_period_id', '(не задано)')],
                        ["selector" => Request::requestInTable(1, 'sv_report_periods', '2020-01-01 - 2020-03-31')],
                    ],
                ],
                "cantSee" => [
                    "Заявка 7" => [
                        ["selector" => Request::requestInTableInexact('id', '7')],
                        ["selector" => Request::requestInTableInexact('subject', 'Добавление/изменение тегов (Определяется типом задачи)')],
                        ["selector" => Request::requestInTableInexact('type_id', 'Добавление/изменение тегов')],
                    ],
                    "Заявка 6" => [
                        ["selector" => Request::requestInTableInexact('id', '6')],
                        ["selector" => Request::requestInTableInexact('subject', 'Добавление/изменение видео (Определяется типом задачи)')],
                        ["selector" => Request::requestInTableInexact('type_id', 'Добавление/изменение видео')],
                    ],
                    "Заявка 5" => [
                        ["selector" => Request::requestInTableInexact('id', '5')],
                        ["selector" => Request::requestInTableInexact('subject', 'Изменение существующих параметров/значений (Определяется типом задачи)')],
                        ["selector" => Request::requestInTableInexact('type_id', 'Изменение существующих параметров/значений')],
                    ],
                    "Заявка 3" => [
                        ["selector" => Request::requestInTableInexact('id', '3')],
                        ["selector" => Request::requestInTableInexact('subject', 'Добавление нового портала/раздела фат-меню/категории товаров (Определяется типом задачи)')],
                        ["selector" => Request::requestInTableInexact('type_id', 'Добавление нового портала/раздела фат-меню/категории товаров')],
                    ],
                    "Заявка 2" => [
                        ["selector" => Request::requestInTableInexact('id', '2')],
                        ["selector" => Request::requestInTableInexact('subject', 'Заливка фото с фотостудии (Работа с товарами Розетки)')],
                        ["selector" => Request::requestInTableInexact('type_id', 'Заливка фото с фотостудии')],
                    ],
                    "Заявка 1" => [
                        ["selector" => Request::requestInTableInexact('id', '1')],
                        ["selector" => Request::requestInTableInexact('subject', 'Перенос товаров (Работа с товарами Маркетплейса)')],
                        ["selector" => Request::requestInTableInexact('type_id', 'Перенос товаров	')],
                    ],
                ]
            ]
        ]
    ],

    'case6' => [
        'setting' => [
            'description' => 'Чек-боксы, вкладка Ожидает',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => 'on-hold',
            'requestBody' => [
                'visibleColumns' => ['hand_load', 'pack_load', 'visa', 'with_photo', 'enter_points', 'adding_graphics', 'with_grid', 'with_tags', 'markdown', 'markdown_2', 'by_client_review', 'complaint_for_good'],
            ],
            'db' => [
                'lisa_fixtures' => [
                    "grid_settings" => [
                        [
                            "id" => 1,
                            "user_id" => 4,
                            "columns_list" => '["hand_load", "pack_load", "visa", "with_photo", "enter_points", "adding_graphics", "with_grid", "with_tags", "markdown", "markdown_2", "by_client_review", "complaint_for_good"]'
                        ]
                    ],
                ]
            ],
            "pageObjects" => [
                "canSee" => [
                    "Заголовки" => [
                        ["selector" => Request::columnName('id', 'ID задачи')],
                        ["selector" => Request::columnName('subject', 'Заголовок')],
                        ["selector" => Request::columnName('type_id', 'Тип')],
                        ["selector" => Request::columnName('hand_load', 'Ручная загрузка')],
                        ["selector" => Request::columnName('pack_load', 'Пакетная загрузка')],
                        ["selector" => Request::columnName('visa', 'Виза супервайзера')],
                        ["selector" => Request::columnName('with_photo', 'С фотосъемкой')],
                        ["selector" => Request::columnName('enter_points', 'Точки входа')],
                        ["selector" => Request::columnName('adding_graphics', 'Добавление графики')],
                        ["selector" => Request::columnName('with_grid', 'С размерной сеткой')],
                        ["selector" => Request::columnName('with_tags', 'С тегами к товарам')],
                        ["selector" => Request::columnName('markdown', 'Уценка')],
                        ["selector" => Request::columnName('markdown_2', 'Уценка 2')],
                        ["selector" => Request::columnName('by_client_review', 'На основе отзыва клиента на сайте')],
                        ["selector" => Request::columnName('complaint_for_good', 'Жалоба на товар продавца маркета')],
                    ],
                    "Заявка 5" => [
                        ["selector" => Request::requestInTable(1, 'id', 5)],
                        ["selector" => Request::requestInTable(1, 'subject', 'Изменение существующих параметров/значений (Определяется типом задачи)')],
                        ["selector" => Request::requestInTable(1, 'type_id', 'Изменение существующих параметров/значений')],
                        ["selector" => Request::requestInTable(1, 'hand_load', 'Нет')],
                        ["selector" => Request::requestInTable(1, 'pack_load', 'Да')],
                        ["selector" => Request::requestInTable(1, 'visa', 'Нет')],
                        ["selector" => Request::requestInTable(1, 'with_photo', 'Нет')],
                        ["selector" => Request::requestInTable(1, 'enter_points', 'Нет')],
                        ["selector" => Request::requestInTable(1, 'adding_graphics', 'Нет')],
                        ["selector" => Request::requestInTable(1, 'with_grid', 'Нет')],
                        ["selector" => Request::requestInTable(1, 'with_tags', 'Нет')],
                        ["selector" => Request::requestInTable(1, 'markdown', 'Нет')],
                        ["selector" => Request::requestInTable(1, 'markdown_2', 'Нет')],
                        ["selector" => Request::requestInTable(1, 'by_client_review', 'Нет')],
                        ["selector" => Request::requestInTable(1, 'complaint_for_good', 'Нет')],
                    ],
                ],
                "cantSee" => [
                    "Заявка 7" => [
                        ["selector" => Request::requestInTableInexact('id', '7')],
                        ["selector" => Request::requestInTableInexact('subject', 'Добавление/изменение тегов (Определяется типом задачи)')],
                        ["selector" => Request::requestInTableInexact('type_id', 'Добавление/изменение тегов')],
                    ],
                    "Заявка 6" => [
                        ["selector" => Request::requestInTableInexact('id', '6')],
                        ["selector" => Request::requestInTableInexact('subject', 'Добавление/изменение видео (Определяется типом задачи)')],
                        ["selector" => Request::requestInTableInexact('type_id', 'Добавление/изменение видео')],
                    ],
                    "Заявка 4" => [
                        ["selector" => Request::requestInTableInexact('id', '4')],
                        ["selector" => Request::requestInTableInexact('subject', 'Добавление параметров/значений (Определяется типом задачи)')],
                        ["selector" => Request::requestInTableInexact('type_id', 'Добавление параметров/значений  ')],
                    ],
                    "Заявка 3" => [
                        ["selector" => Request::requestInTableInexact('id', '3')],
                        ["selector" => Request::requestInTableInexact('subject', 'Добавление нового портала/раздела фат-меню/категории товаров (Определяется типом задачи)')],
                        ["selector" => Request::requestInTableInexact('type_id', 'Добавление нового портала/раздела фат-меню/категории товаров')],
                    ],
                    "Заявка 2" => [
                        ["selector" => Request::requestInTableInexact('id', '2')],
                        ["selector" => Request::requestInTableInexact('subject', 'Заливка фото с фотостудии (Работа с товарами Розетки)')],
                        ["selector" => Request::requestInTableInexact('type_id', 'Заливка фото с фотостудии')],
                    ],
                    "Заявка 1" => [
                        ["selector" => Request::requestInTableInexact('id', '1')],
                        ["selector" => Request::requestInTableInexact('subject', 'Перенос товаров (Работа с товарами Маркетплейса)')],
                        ["selector" => Request::requestInTableInexact('type_id', 'Перенос товаров	')],
                    ],
                ]
            ]
        ]
    ],

    'case7' => [
        'setting' => [
            'description' => 'Чек-боксы, вкладка Выполнены',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => 'completed',
            'requestBody' => [
                'visibleColumns' => ['promo_desc', 'adding_goods_to_new_category', 'used_ref', 'updating_photos', 'updating_description', 'updating_characteristics', 'automoderation', 'adding_instructions', 'stop_brands', 'with_pallets', 'lots', 'with_video', 'mobile_courier', 'ua_fields', 'algorithm'],
            ],
            'db' => [
                'lisa_fixtures' => [
                    "grid_settings" => [
                        [
                            "id" => 1,
                            "user_id" => 4,
                            "columns_list" => '["promo_desc", "adding_goods_to_new_category", "used_ref", "updating_photos", "updating_description", "updating_characteristics", "automoderation", "adding_instructions", "stop_brands", "with_pallets", "lots", "with_video", "mobile_courier", "ua_fields", "algorithm"]'
                        ]
                    ],
                ]
            ],
            "pageObjects" => [
                "canSee" => [
                    "Заголовки" => [
                        ["selector" => Request::columnName('id', 'ID задачи')],
                        ["selector" => Request::columnName('subject', 'Заголовок')],
                        ["selector" => Request::columnName('type_id', 'Тип')],
                        ["selector" => Request::columnName('promo_desc', 'Промо-описание')],
                        ["selector" => Request::columnName('adding_goods_to_new_category', 'Добавление товаров в новую категорию')],
                        ["selector" => Request::columnName('used_ref', 'БУ, REF')],
                        ["selector" => Request::columnName('updating_photos', 'Обновление фото')],
                        ["selector" => Request::columnName('updating_description', 'Обновление описания')],
                        ["selector" => Request::columnName('updating_characteristics', 'Обновление характеристик')],
                        ["selector" => Request::columnName('automoderation', 'Автомодерация')],
                        ["selector" => Request::columnName('adding_instructions', 'Добавление/обновление инструкций')],
                        ["selector" => Request::columnName('stop_brands', 'Стоп-бренды')],
                        ["selector" => Request::columnName('with_pallets', 'С палитрой')],
                        ["selector" => Request::columnName('lots', 'Лоты')],
                        ["selector" => Request::columnName('with_video', 'С видео')],
                        ["selector" => Request::columnName('mobile_courier', 'По заявке с MobileCourier')],
                        ["selector" => Request::columnName('ua_fields', 'Укр. поля')],
                        ["selector" => Request::columnName('algorithm', 'Алгоритм')],
                    ],
                    "Заявка 6" => [
                        ["selector" => Request::requestInTable(1, 'id', 7)],
                        ["selector" => Request::requestInTable(1, 'subject', 'Добавление/изменение тегов (Определяется типом задачи)')],
                        ["selector" => Request::requestInTable(1, 'type_id', 'Добавление/изменение тегов')],
                        ["selector" => Request::requestInTable(1, 'promo_desc', 'Нет')],
                        ["selector" => Request::requestInTable(1, 'adding_goods_to_new_category', 'Нет')],
                        ["selector" => Request::requestInTable(1, 'used_ref', 'Нет')],
                        ["selector" => Request::requestInTable(1, 'updating_photos', 'Нет')],
                        ["selector" => Request::requestInTable(1, 'updating_description', 'Нет')],
                        ["selector" => Request::requestInTable(1, 'updating_characteristics', 'Нет')],
                        ["selector" => Request::requestInTable(1, 'automoderation', 'Нет')],
                        ["selector" => Request::requestInTable(1, 'adding_instructions', 'Нет')],
                        ["selector" => Request::requestInTable(1, 'adding_instructions', 'Нет')],
                        ["selector" => Request::requestInTable(1, 'stop_brands', 'Нет')],
                        ["selector" => Request::requestInTable(1, 'with_pallets', 'Нет')],
                        ["selector" => Request::requestInTable(1, 'lots', 'Нет')],
                        ["selector" => Request::requestInTable(1, 'with_video', 'Нет')],
                        ["selector" => Request::requestInTable(1, 'mobile_courier', 'Нет')],
                        ["selector" => Request::requestInTable(1, 'ua_fields', 'Нет')],
                        ["selector" => Request::requestInTable(1, 'algorithm', 'Нет')],
                    ],
                    "Заявка 7" => [
                        ["selector" => Request::requestInTable(2, 'id', 6)],
                        ["selector" => Request::requestInTable(2, 'subject', 'Добавление/изменение видео (Определяется типом задачи)')],
                        ["selector" => Request::requestInTable(2, 'type_id', 'Добавление/изменение видео')],
                        ["selector" => Request::requestInTable(2, 'promo_desc', 'Нет')],
                        ["selector" => Request::requestInTable(2, 'adding_goods_to_new_category', 'Нет')],
                        ["selector" => Request::requestInTable(2, 'used_ref', 'Нет')],
                        ["selector" => Request::requestInTable(2, 'updating_photos', 'Нет')],
                        ["selector" => Request::requestInTable(2, 'updating_description', 'Нет')],
                        ["selector" => Request::requestInTable(2, 'updating_characteristics', 'Нет')],
                        ["selector" => Request::requestInTable(2, 'automoderation', 'Нет')],
                        ["selector" => Request::requestInTable(2, 'adding_instructions', 'Нет')],
                        ["selector" => Request::requestInTable(2, 'adding_instructions', 'Нет')],
                        ["selector" => Request::requestInTable(2, 'stop_brands', 'Нет')],
                        ["selector" => Request::requestInTable(2, 'with_pallets', 'Нет')],
                        ["selector" => Request::requestInTable(2, 'lots', 'Нет')],
                        ["selector" => Request::requestInTable(2, 'with_video', 'Нет')],
                        ["selector" => Request::requestInTable(2, 'mobile_courier', 'Нет')],
                        ["selector" => Request::requestInTable(2, 'ua_fields', 'Нет')],
                        ["selector" => Request::requestInTable(2, 'algorithm', 'Нет')],
                    ],
                ],
                "cantSee" => [
                    "Заявка 5" => [
                        ["selector" => Request::requestInTableInexact('id', '5')],
                        ["selector" => Request::requestInTableInexact('subject', 'Изменение существующих параметров/значений (Определяется типом задачи)')],
                        ["selector" => Request::requestInTableInexact('type_id', 'Изменение существующих параметров/значений')],
                    ],
                    "Заявка 4" => [
                        ["selector" => Request::requestInTableInexact('id', '4')],
                        ["selector" => Request::requestInTableInexact('subject', 'Добавление параметров/значений (Определяется типом задачи)')],
                        ["selector" => Request::requestInTableInexact('type_id', 'Добавление параметров/значений')],
                    ],
                    "Заявка 3" => [
                        ["selector" => Request::requestInTableInexact('id', '3')],
                        ["selector" => Request::requestInTableInexact('subject', 'Добавление нового портала/раздела фат-меню/категории товаров (Определяется типом задачи)')],
                        ["selector" => Request::requestInTableInexact('type_id', 'Добавление нового портала/раздела фат-меню/категории товаров')],
                    ],
                    "Заявка 2" => [
                        ["selector" => Request::requestInTableInexact('id', '2')],
                        ["selector" => Request::requestInTableInexact('subject', 'Заливка фото с фотостудии (Работа с товарами Розетки)')],
                        ["selector" => Request::requestInTableInexact('type_id', 'Заливка фото с фотостудии')],
                    ],
                    "Заявка 1" => [
                        ["selector" => Request::requestInTableInexact('id', '1')],
                        ["selector" => Request::requestInTableInexact('subject', 'Перенос товаров (Работа с товарами Маркетплейса)')],
                        ["selector" => Request::requestInTableInexact('type_id', 'Перенос товаров	')],
                    ],
                ]
            ]
        ]
    ],

    'case8' => [
        'setting' => [
            'description' => 'Заблокированные значения полей с выпадающими списками в таблице',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case8.php',
        'provider_data' => [
            "url" => '',
            'requestBody' => [
                'visibleColumns' => ['priority', 'reasons', 'author_clarifications', 'photos_available', 'characteristics_available', 'description_available', 'language'],
            ],
            'db' => [
                'lisa_fixtures' => [
                    "grid_settings" => [
                        [
                            "id" => 1,
                            "user_id" => 4,
                            "columns_list" => '["priority", "reasons", "author_clarifications", "photos_available", "characteristics_available", "description_available", "language"]'
                        ]
                    ],
                ]
            ],
            "pageObjects" => [
                "canSee" => [
                    "Заявка 1" => [
                        ["selector" => Request::requestInTable(1, 'id', 1)],
                        ["selector" => Request::requestInTable(1, 'subject', 'Добавление/изменение информации в существующих товарах (Работа с товарами Розетки)')],
                        ["selector" => Request::requestInTable(1, 'type_id', 'Добавление/изменение информации в существующих товарах')],
                        ["selector" => Request::requestInTable(1, 'priority', 'Исправление критичной ошибки')],
                        ["selector" => Request::requestInTable(1, 'reasons', 'Нинада')],
                        ["selector" => Request::requestInTable(1, 'author_clarifications', 'Более 5 уточнений')],
                        ["selector" => Request::requestInTable(1, 'photos_available', 'Фото предоставлены фотостудией')],
                        ["selector" => Request::requestInTable(1, 'characteristics_available', 'Характеристики добавлены с обновлением фото/описания')],
                        ["selector" => Request::requestInTable(1, 'description_available', 'Не предоставлены продактом. Выполнен поиск.')],
                        ["selector" => Request::requestInTable(1, 'language', 'Английский')],
                    ],
                ],
            ]
        ]
    ],
];
