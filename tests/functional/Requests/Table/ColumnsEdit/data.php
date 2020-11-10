<?php

use lisa\Page\Functional\Request;

return [
    'case1' => [
        'setting' => [
            'description' => 'Основные, вкладка Все',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '',
            'requestBody' => [
                'visibleColumns' => ['author_id', 'supervisor_id', 'manager_id', 'status', 'direction', 'team_direction', 'category_id', 'seller_id', 'priority', 'cross_check_status', 'cross_check_manager_id']
            ],
            'db' => [
                'lisa_fixtures' => [
                    "grid_settings" => [
                        [
                            "id" => 1,
                            "user_id" => 4,
                            "columns_list" => '["author_id", "supervisor_id", "manager_id", "status", "direction", "team_direction", "category_id", "seller_id", "priority", "cross_check_status", "cross_check_manager_id"]'
                        ]
                    ],
                ]
            ],
            "pageObjects" => [
                "canSee" => [
                    "Заголовки" => [
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='id']",
                            "value" => "ID задачи"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='subject']",
                            "value" => "Заголовок"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='type_id']",
                            "value" => "Тип"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='author_id']",
                            "value" => "Создатель заявки"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='supervisor_id']",
                            "value" => "Супервайзер заявки"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='manager_id']",
                            "value" => "Менеджер заявки"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='status']",
                            "value" => "Статус"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='direction']",
                            "value" => "Направление задачи"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='team_direction']",
                            "value" => "Направление команды"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='category_id']",
                            "value" => "Категория товаров"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='seller_id']",
                            "value" => "Продавец"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='priority']",
                            "value" => "Приоритет"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='cross_check_status']",
                            "value" => "Кросс-чек статус"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='cross_check_manager_id']",
                            "value" => "Кросс-чек менеджер"
                        ],
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
                'visibleColumns' => ['parent_id', 'difficulty_level', 'awaiting_correction', 'reason_id', 'author_clarifications', 'photos_available', 'characteristics_available', 'description_available', 'language'],
            ],
            'db' => [
                'lisa_fixtures' => [
                    "grid_settings" => [
                        [
                            "id" => 1,
                            "user_id" => 4,
                            "columns_list" => '["parent_id", "difficulty_level", "awaiting_correction", "reason_id", "author_clarifications", "photos_available", "characteristics_available", "description_available", "language"]'
                        ]
                    ],
                ]
            ],
            "pageObjects" => [
                "canSee" => [
                    "Заголовки" => [
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='id']",
                            "value" => "ID задачи"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='subject']",
                            "value" => "Заголовок"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='type_id']",
                            "value" => "Тип"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='parent_id']",
                            "value" => "ID связанной задачи"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='difficulty_level']",
                            "value" => "Уровень сложности задачи"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='awaiting_correction']",
                            "value" => "На исправление"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='reason_id']",
                            "value" => "Причина"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='author_clarifications']",
                            "value" => "Уточнения. Количество уточнений у автора"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='photos_available']",
                            "value" => "Наличие фото к товарам"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='characteristics_available']",
                            "value" => "Наличие характеристик к товарам"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='description_available']",
                            "value" => "Наличие описаний к товарам"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='language']",
                            "value" => "Язык информации"
                        ],
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
                            "selector" => "//select[@name='RequestSearch[reason_id][]']/option[1][@value='Все товары уже есть на сайте']",
                            "value" => "Все товары уже есть на сайте"
                        ],
                        [
                            "selector" => "//select[@name='RequestSearch[reason_id][]']/option[2][@value='Другое (описан в коментариях)']",
                            "value" => "Другое (описан в коментариях)"
                        ],
                        [
                            "selector" => "//select[@name='RequestSearch[reason_id][]']/option[3][@value='Дубль задачи']",
                            "value" => "Дубль задачи"
                        ],
                        [
                            "selector" => "//select[@name='RequestSearch[reason_id][]']/option[4][@value='Изменен приоритет задачи']",
                            "value" => "Изменен приоритет задачи"
                        ],
                        [
                            "selector" => "//select[@name='RequestSearch[reason_id][]']/option[5][@value='Не получена запрошенная недостающая информация']",
                            "value" => "Не получена запрошенная недостающая информация"
                        ],
                        [
                            "selector" => "//select[@name='RequestSearch[reason_id][]']/option[6][@value='Нинада']",
                            "value" => "Нинада"
                        ],
                        [
                            "selector" => "//select[@name='RequestSearch[reason_id][]']/option[7][@value='Ожидает группировки']",
                            "value" => "Ожидает группировки"
                        ],
                        [
                            "selector" => "//select[@name='RequestSearch[reason_id][]']/option[8][@value='Ожидается загрузка обновлений в систему']",
                            "value" => "Ожидается загрузка обновлений в систему"
                        ],
                        [
                            "selector" => "//select[@name='RequestSearch[reason_id][]']/option[9][@value='Ожидается загрузка товаров в систему']",
                            "value" => "Ожидается загрузка товаров в систему"
                        ],
                        [
                            "selector" => "//select[@name='RequestSearch[reason_id][]']/option[10][@value='Ожидается загрузка фото в товары']",
                            "value" => "Ожидается загрузка фото в товары"
                        ],
                        [
                            "selector" => "//select[@name='RequestSearch[reason_id][]']/option[11][@value='Товары ушли в ошибки']",
                            "value" => "Товары ушли в ошибки"
                        ],
                        [
                            "selector" => "//select[@name='RequestSearch[reason_id][]']/option[12][@value='Требуется уточнение информации по задаче']",
                            "value" => "Требуется уточнение информации по задаче"
                        ],
                        [
                            "selector" => "//select[@name='RequestSearch[reason_id][]']/option[13][@value='Часть товаров ушла в ошибки']",
                            "value" => "Часть товаров ушла в ошибки"
                        ],
                        [
                            "selector" => "//select[@name='RequestSearch[reason_id][]']/option[14][@value='-1']",
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
                            "selector" => "//select[@name='RequestSearch[characteristics_available][]']/option[1][@value='4']",
                            "value" => "Не предоставлены продактом. Выполнен поиск."
                        ],
                        [
                            "selector" => "//select[@name='RequestSearch[characteristics_available][]']/option[2][@value='1']",
                            "value" => "Предоставлены продактом"
                        ],
                        [
                            "selector" => "//select[@name='RequestSearch[characteristics_available][]']/option[3][@value='2']",
                            "value" => "Предоставлены продактом частично. Без дополнительного поиска."
                        ],
                        [
                            "selector" => "//select[@name='RequestSearch[characteristics_available][]']/option[4][@value='3']",
                            "value" => "Предоставлены продактом частично. С дополнительным поиском."
                        ],
                        [
                            "selector" => "//select[@name='RequestSearch[characteristics_available][]']/option[5][@value='5']",
                            "value" => "Характеристики добавлены с обновлением фото/описания"
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
                        ["selector" => Request::requestInTable(1, 'reason_id', '(не задано)')],
                        ["selector" => Request::requestInTable(1, 'author_clarifications', '(не задано)')],
                        ["selector" => Request::requestInTable(1, 'photos_available', '(не задано)')],
                        ["selector" => Request::requestInTable(1, 'characteristics_available', '(не задано)')],
                        ["selector" => Request::requestInTable(1, 'description_available', '(не задано)')],
                        ["selector" => Request::requestInTable(1, 'language', '(не задано)')],
                    ],
                ],
                "cantSee" => [
                    "Заявка 7" => [
                        [
                            "selector" => "//tbody/tr/td[@data-col-seq='id']",
                            "value" => "7"
                        ],
                        [
                            "selector" => "//tbody/tr/td[@data-col-seq='subject']",
                            "value" => "Добавление/изменение тегов (Определяется типом задачи)"
                        ],
                        [
                            "selector" => "//tbody/tr/td[@data-col-seq='type_id']",
                            "value" => "Добавление/изменение тегов"
                        ],
                    ],
                    "Заявка 6" => [
                        [
                            "selector" => "//tbody/tr/td[@data-col-seq='id']",
                            "value" => "6"
                        ],
                        [
                            "selector" => "//tbody/tr/td[@data-col-seq='subject']",
                            "value" => "Добавление/изменение видео (Определяется типом задачи)"
                        ],
                        [
                            "selector" => "//tbody/tr/td[@data-col-seq='type_id']",
                            "value" => "Добавление/изменение видео"
                        ],
                    ],
                    "Заявка 5" => [
                        [
                            "selector" => "//tbody/tr/td[@data-col-seq='id']",
                            "value" => "5"
                        ],
                        [
                            "selector" => "//tbody/tr/td[@data-col-seq='subject']",
                            "value" => "Изменение существующих параметров/значений (Определяется типом задачи)"
                        ],
                        [
                            "selector" => "//tbody/tr/td[@data-col-seq='type_id']",
                            "value" => "Изменение существующих параметров/значений"
                        ],
                    ],
                    "Заявка 4" => [
                        [
                            "selector" => "//tbody/tr/td[@data-col-seq='id']",
                            "value" => "4"
                        ],
                        [
                            "selector" => "//tbody/tr/td[@data-col-seq='subject']",
                            "value" => "Добавление параметров/значений (Определяется типом задачи)"
                        ],
                        [
                            "selector" => "//tbody/tr/td[@data-col-seq='type_id']",
                            "value" => "Добавление параметров/значений"
                        ],
                    ],
                    "Заявка 3" => [
                        [
                            "selector" => "//tbody/tr/td[@data-col-seq='id']",
                            "value" => "3"
                        ],
                        [
                            "selector" => "//tbody/tr/td[@data-col-seq='subject']",
                            "value" => "Добавление нового портала/раздела фат-меню/категории товаров (Определяется типом задачи)"
                        ],
                        [
                            "selector" => "//tbody/tr/td[@data-col-seq='type_id']",
                            "value" => "Добавление нового портала/раздела фат-меню/категории товаров"
                        ],
                    ],
                    "Заявка 2" => [
                        [
                            "selector" => "//tbody/tr/td[@data-col-seq='id']",
                            "value" => "2"
                        ],
                        [
                            "selector" => "//tbody/tr/td[@data-col-seq='subject']",
                            "value" => "Заливка фото с фотостудии (Работа с товарами Розетки)"
                        ],
                        [
                            "selector" => "//tbody/tr/td[@data-col-seq='type_id']",
                            "value" => "Заливка фото с фотостудии"
                        ],
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
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='id']",
                            "value" => "ID задачи"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='subject']",
                            "value" => "Заголовок"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='type_id']",
                            "value" => "Тип"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='description']",
                            "value" => "Описание"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='reason']",
                            "value" => "Причина отмены/доработки"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='recommendations']",
                            "value" => "Рекомендации"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='correction_comment']",
                            "value" => "Комментарий на исправление"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='result_comment']",
                            "value" => "Комментарий к результату задачи"
                        ],
                    ],
                    "Заявка 2" => [
                        ["selector" => Request::requestInTable(1, 'id', 2)],
                        ["selector" => Request::requestInTable(1, 'subject', 'Заливка фото с фотостудии (Работа с товарами Розетки)')],
                        ["selector" => Request::requestInTable(1, 'type_id', 'Заливка фото с фотостудии')],
                        ["selector" => Request::requestInTable(1, 'description', 'Описание')],
                        ["selector" => "//tbody/tr/td[@data-col-seq='reason']"],
                        ["selector" => Request::requestInTable(1, 'recommendations', '(не задано)')],
                        ["selector" => Request::requestInTable(1, 'correction_comment', '(не задано)')],
                        ["selector" => Request::requestInTable(1, 'result_comment', '(не задано)')],
                    ],
                ],
                "cantSee" => [
                    "Заявка 7" => [
                        [
                            "selector" => "//tbody/tr/td[@data-col-seq='id']",
                            "value" => "7"
                        ],
                        [
                            "selector" => "//tbody/tr/td[@data-col-seq='subject']",
                            "value" => "Добавление/изменение тегов (Определяется типом задачи)"
                        ],
                        [
                            "selector" => "//tbody/tr/td[@data-col-seq='type_id']",
                            "value" => "Добавление/изменение тегов"
                        ],
                    ],
                    "Заявка 6" => [
                        [
                            "selector" => "//tbody/tr/td[@data-col-seq='id']",
                            "value" => "6"
                        ],
                        [
                            "selector" => "//tbody/tr/td[@data-col-seq='subject']",
                            "value" => "Добавление/изменение видео (Определяется типом задачи)"
                        ],
                        [
                            "selector" => "//tbody/tr/td[@data-col-seq='type_id']",
                            "value" => "Добавление/изменение видео"
                        ],
                    ],
                    "Заявка 5" => [
                        [
                            "selector" => "//tbody/tr/td[@data-col-seq='id']",
                            "value" => "5"
                        ],
                        [
                            "selector" => "//tbody/tr/td[@data-col-seq='subject']",
                            "value" => "Изменение существующих параметров/значений (Определяется типом задачи)"
                        ],
                        [
                            "selector" => "//tbody/tr/td[@data-col-seq='type_id']",
                            "value" => "Изменение существующих параметров/значений"
                        ],
                    ],
                    "Заявка 4" => [
                        [
                            "selector" => "//tbody/tr/td[@data-col-seq='id']",
                            "value" => "4"
                        ],
                        [
                            "selector" => "//tbody/tr/td[@data-col-seq='subject']",
                            "value" => "Добавление параметров/значений (Определяется типом задачи)"
                        ],
                        [
                            "selector" => "//tbody/tr/td[@data-col-seq='type_id']",
                            "value" => "Добавление параметров/значений  "
                        ],
                    ],
                    "Заявка 3" => [
                        [
                            "selector" => "//tbody/tr/td[@data-col-seq='id']",
                            "value" => "3"
                        ],
                        [
                            "selector" => "//tbody/tr/td[@data-col-seq='subject']",
                            "value" => "Добавление нового портала/раздела фат-меню/категории товаров (Определяется типом задачи)"
                        ],
                        [
                            "selector" => "//tbody/tr/td[@data-col-seq='type_id']",
                            "value" => "Добавление нового портала/раздела фат-меню/категории товаров"
                        ],
                    ],
                    "Заявка 1" => [
                        [
                            "selector" => "//tbody/tr/td[@data-col-seq='id']",
                            "value" => "1"
                        ],
                        [
                            "selector" => "//tbody/tr/td[@data-col-seq='subject']",
                            "value" => "Перенос товаров (Работа с товарами Маркетплейса)"
                        ],
                        [
                            "selector" => "//tbody/tr/td[@data-col-seq='type_id']",
                            "value" => "Перенос товаров	"
                        ],
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
                'visibleColumns' => ['amount_to_work', 'added_goods', 'changed_goods', 'goods_in_db', 'calc_quantity_of_checked_goods', 'calc_quantity_of_checked_goods_with_errors', 'calc_quantity_of_checked_goods_cc', 'calc_quantity_of_checked_goods_with_errors_cc'],
            ],
            'db' => [
                'lisa_fixtures' => [
                    "grid_settings" => [
                        [
                            "id" => 1,
                            "user_id" => 4,
                            "columns_list" => '["amount_to_work", "added_goods", "changed_goods", "goods_in_db", "calc_quantity_of_checked_goods", "calc_quantity_of_checked_goods_with_errors", "calc_quantity_of_checked_goods_cc", "calc_quantity_of_checked_goods_with_errors_cc"]'
                        ]
                    ],
                ]
            ],
            "pageObjects" => [
                "canSee" => [
                    "Заголовки" => [
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='id']",
                            "value" => "ID задачи"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='subject']",
                            "value" => "Заголовок"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='type_id']",
                            "value" => "Тип"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='amount_to_work']",
                            "value" => "Количество в работу"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='added_goods']",
                            "value" => "Количество добавленных товаров"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='changed_goods']",
                            "value" => "Количество измененных товаров"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='goods_in_db']",
                            "value" => "Количество товаров, которые уже есть в БД"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='calc_quantity_of_checked_goods']",
                            "value" => "Рассчитанное количество проверенных товаров"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='calc_quantity_of_checked_goods_with_errors']",
                            "value" => "Рассчитанное количество проверенных товаров с ошибками"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='calc_quantity_of_checked_goods_cc']",
                            "value" => "Рассчитанное количество проверенных товаров (Кросс-чек)"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='calc_quantity_of_checked_goods_with_errors_cc']",
                            "value" => "Рассчитанное количество проверенных товаров с ошибками (Кросс-чек)"
                        ],
                    ],
                    "Заявка 3" => [
                        ["selector" => Request::requestInTable(1, 'id', 3)],
                        ["selector" => Request::requestInTable(1, 'subject', 'Добавление нового портала/раздела фат-меню/категории товаров (Определяется типом задачи)')],
                        ["selector" => Request::requestInTable(1, 'type_id', 'Добавление нового портала/раздела фат-меню/категории товаров')],
                        ["selector" => Request::requestInTable(1, 'amount_to_work', '10')],
                        ["selector" => Request::requestInTable(1, 'added_goods', '(не задано)')],
                        ["selector" => Request::requestInTable(1, 'changed_goods', '(не задано)')],
                        ["selector" => Request::requestInTable(1, 'goods_in_db', '(не задано)')],
                        ["selector" => Request::requestInTable(1, 'calc_quantity_of_checked_goods', '(не задано)')],
                        ["selector" => Request::requestInTable(1, 'calc_quantity_of_checked_goods_with_errors', '(не задано)')],
                        ["selector" => Request::requestInTable(1, 'calc_quantity_of_checked_goods_cc', '(не задано)')],
                        ["selector" => Request::requestInTable(1, 'calc_quantity_of_checked_goods_with_errors_cc', '(не задано)')],
                    ],
                ],
                "cantSee" => [
                    "Заявка 7" => [
                        [
                            "selector" => "//tbody/tr/td[@data-col-seq='id']",
                            "value" => "7"
                        ],
                        [
                            "selector" => "//tbody/tr/td[@data-col-seq='subject']",
                            "value" => "Добавление/изменение тегов (Определяется типом задачи)"
                        ],
                        [
                            "selector" => "//tbody/tr/td[@data-col-seq='type_id']",
                            "value" => "Добавление/изменение тегов"
                        ],
                    ],
                    "Заявка 6" => [
                        [
                            "selector" => "//tbody/tr/td[@data-col-seq='id']",
                            "value" => "6"
                        ],
                        [
                            "selector" => "//tbody/tr/td[@data-col-seq='subject']",
                            "value" => "Добавление/изменение видео (Определяется типом задачи)"
                        ],
                        [
                            "selector" => "//tbody/tr/td[@data-col-seq='type_id']",
                            "value" => "Добавление/изменение видео"
                        ],
                    ],
                    "Заявка 5" => [
                        [
                            "selector" => "//tbody/tr/td[@data-col-seq='id']",
                            "value" => "5"
                        ],
                        [
                            "selector" => "//tbody/tr/td[@data-col-seq='subject']",
                            "value" => "Изменение существующих параметров/значений (Определяется типом задачи)"
                        ],
                        [
                            "selector" => "//tbody/tr/td[@data-col-seq='type_id']",
                            "value" => "Изменение существующих параметров/значений"
                        ],
                    ],
                    "Заявка 4" => [
                        [
                            "selector" => "//tbody/tr/td[@data-col-seq='id']",
                            "value" => "4"
                        ],
                        [
                            "selector" => "//tbody/tr/td[@data-col-seq='subject']",
                            "value" => "Добавление параметров/значений (Определяется типом задачи)"
                        ],
                        [
                            "selector" => "//tbody/tr/td[@data-col-seq='type_id']",
                            "value" => "Добавление параметров/значений  "
                        ],
                    ],
                    "Заявка 2" => [
                        [
                            "selector" => "//tbody/tr/td[@data-col-seq='id']",
                            "value" => "2"
                        ],
                        [
                            "selector" => "//tbody/tr/td[@data-col-seq='subject']",
                            "value" => "Заливка фото с фотостудии (Работа с товарами Розетки)"
                        ],
                        [
                            "selector" => "//tbody/tr/td[@data-col-seq='type_id']",
                            "value" => "Заливка фото с фотостудии"
                        ],
                    ],
                    "Заявка 1" => [
                        [
                            "selector" => "//tbody/tr/td[@data-col-seq='id']",
                            "value" => "1"
                        ],
                        [
                            "selector" => "//tbody/tr/td[@data-col-seq='subject']",
                            "value" => "Перенос товаров (Работа с товарами Маркетплейса)"
                        ],
                        [
                            "selector" => "//tbody/tr/td[@data-col-seq='type_id']",
                            "value" => "Перенос товаров	"
                        ],
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
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='id']",
                            "value" => "ID задачи"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='subject']",
                            "value" => "Заголовок"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='type_id']",
                            "value" => "Тип"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='last_change_status_date']",
                            "value" => "Дата последнего изменения статуса"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='created_at']",
                            "value" => "Дата регистрации задачи в системе"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='supervisor_process_date']",
                            "value" => "Дата обработки задачи супервайзером"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='supervisor_check_date']",
                            "value" => "Дата проверки задачи супервайзером"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='planned_start_date']",
                            "value" => "Плановая дата начала работ"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='planned_finish_date']",
                            "value" => "Плановая дата завершения"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='actual_start_date']",
                            "value" => "Фактическая дата начала работ"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='actual_finish_date']",
                            "value" => "Фактическая дата завершения"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='report_period_id']",
                            "value" => "Отчетный период КМ"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='sv_report_periods']",
                            "value" => "Отчетные периоды СВ"
                        ],
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
                        [
                            "selector" => "//tbody/tr/td[@data-col-seq='id']",
                            "value" => "7"
                        ],
                        [
                            "selector" => "//tbody/tr/td[@data-col-seq='subject']",
                            "value" => "Добавление/изменение тегов (Определяется типом задачи)"
                        ],
                        [
                            "selector" => "//tbody/tr/td[@data-col-seq='type_id']",
                            "value" => "Добавление/изменение тегов"
                        ],
                    ],
                    "Заявка 6" => [
                        [
                            "selector" => "//tbody/tr/td[@data-col-seq='id']",
                            "value" => "6"
                        ],
                        [
                            "selector" => "//tbody/tr/td[@data-col-seq='subject']",
                            "value" => "Добавление/изменение видео (Определяется типом задачи)"
                        ],
                        [
                            "selector" => "//tbody/tr/td[@data-col-seq='type_id']",
                            "value" => "Добавление/изменение видео"
                        ],
                    ],
                    "Заявка 5" => [
                        [
                            "selector" => "//tbody/tr/td[@data-col-seq='id']",
                            "value" => "5"
                        ],
                        [
                            "selector" => "//tbody/tr/td[@data-col-seq='subject']",
                            "value" => "Изменение существующих параметров/значений (Определяется типом задачи)"
                        ],
                        [
                            "selector" => "//tbody/tr/td[@data-col-seq='type_id']",
                            "value" => "Изменение существующих параметров/значений"
                        ],
                    ],
                    "Заявка 3" => [
                        [
                            "selector" => "//tbody/tr/td[@data-col-seq='id']",
                            "value" => "3"
                        ],
                        [
                            "selector" => "//tbody/tr/td[@data-col-seq='subject']",
                            "value" => "Добавление нового портала/раздела фат-меню/категории товаров (Определяется типом задачи)"
                        ],
                        [
                            "selector" => "//tbody/tr/td[@data-col-seq='type_id']",
                            "value" => "Добавление нового портала/раздела фат-меню/категории товаров"
                        ],
                    ],
                    "Заявка 2" => [
                        [
                            "selector" => "//tbody/tr/td[@data-col-seq='id']",
                            "value" => "2"
                        ],
                        [
                            "selector" => "//tbody/tr/td[@data-col-seq='subject']",
                            "value" => "Заливка фото с фотостудии (Работа с товарами Розетки)"
                        ],
                        [
                            "selector" => "//tbody/tr/td[@data-col-seq='type_id']",
                            "value" => "Заливка фото с фотостудии"
                        ],
                    ],
                    "Заявка 1" => [
                        [
                            "selector" => "//tbody/tr/td[@data-col-seq='id']",
                            "value" => "1"
                        ],
                        [
                            "selector" => "//tbody/tr/td[@data-col-seq='subject']",
                            "value" => "Перенос товаров (Работа с товарами Маркетплейса)"
                        ],
                        [
                            "selector" => "//tbody/tr/td[@data-col-seq='type_id']",
                            "value" => "Перенос товаров	"
                        ],
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
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='id']",
                            "value" => "ID задачи"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='subject']",
                            "value" => "Заголовок"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='type_id']",
                            "value" => "Тип"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='hand_load']",
                            "value" => "Ручная загрузка"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='pack_load']",
                            "value" => "Пакетная загрузка"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='visa']",
                            "value" => "Виза супервайзера"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='with_photo']",
                            "value" => "С фотосъемкой"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='enter_points']",
                            "value" => "Точки входа"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='adding_graphics']",
                            "value" => "Добавление графики"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='with_grid']",
                            "value" => "С размерной сеткой"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='with_tags']",
                            "value" => "С тегами к товарам"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='markdown']",
                            "value" => "Уценка"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='markdown_2']",
                            "value" => "Уценка 2"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='by_client_review']",
                            "value" => "На основе отзыва клиента на сайте"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='complaint_for_good']",
                            "value" => "Жалоба на товар продавца маркета"
                        ],
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
                        [
                            "selector" => "//tbody/tr/td[@data-col-seq='id']",
                            "value" => "7"
                        ],
                        [
                            "selector" => "//tbody/tr/td[@data-col-seq='subject']",
                            "value" => "Добавление/изменение тегов (Определяется типом задачи)"
                        ],
                        [
                            "selector" => "//tbody/tr/td[@data-col-seq='type_id']",
                            "value" => "Добавление/изменение тегов"
                        ],
                    ],
                    "Заявка 6" => [
                        [
                            "selector" => "//tbody/tr/td[@data-col-seq='id']",
                            "value" => "6"
                        ],
                        [
                            "selector" => "//tbody/tr/td[@data-col-seq='subject']",
                            "value" => "Добавление/изменение видео (Определяется типом задачи)"
                        ],
                        [
                            "selector" => "//tbody/tr/td[@data-col-seq='type_id']",
                            "value" => "Добавление/изменение видео"
                        ],
                    ],
                    "Заявка 4" => [
                        [
                            "selector" => "//tbody/tr/td[@data-col-seq='id']",
                            "value" => "4"
                        ],
                        [
                            "selector" => "//tbody/tr/td[@data-col-seq='subject']",
                            "value" => "Добавление параметров/значений (Определяется типом задачи)"
                        ],
                        [
                            "selector" => "//tbody/tr/td[@data-col-seq='type_id']",
                            "value" => "Добавление параметров/значений  "
                        ],
                    ],
                    "Заявка 3" => [
                        [
                            "selector" => "//tbody/tr/td[@data-col-seq='id']",
                            "value" => "3"
                        ],
                        [
                            "selector" => "//tbody/tr/td[@data-col-seq='subject']",
                            "value" => "Добавление нового портала/раздела фат-меню/категории товаров (Определяется типом задачи)"
                        ],
                        [
                            "selector" => "//tbody/tr/td[@data-col-seq='type_id']",
                            "value" => "Добавление нового портала/раздела фат-меню/категории товаров"
                        ],
                    ],
                    "Заявка 2" => [
                        [
                            "selector" => "//tbody/tr/td[@data-col-seq='id']",
                            "value" => "2"
                        ],
                        [
                            "selector" => "//tbody/tr/td[@data-col-seq='subject']",
                            "value" => "Заливка фото с фотостудии (Работа с товарами Розетки)"
                        ],
                        [
                            "selector" => "//tbody/tr/td[@data-col-seq='type_id']",
                            "value" => "Заливка фото с фотостудии"
                        ],
                    ],
                    "Заявка 1" => [
                        [
                            "selector" => "//tbody/tr/td[@data-col-seq='id']",
                            "value" => "1"
                        ],
                        [
                            "selector" => "//tbody/tr/td[@data-col-seq='subject']",
                            "value" => "Перенос товаров (Работа с товарами Маркетплейса)"
                        ],
                        [
                            "selector" => "//tbody/tr/td[@data-col-seq='type_id']",
                            "value" => "Перенос товаров	"
                        ],
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
                'visibleColumns' => ['promo_desc', 'adding_goods_to_new_category', 'used_ref', 'updating_photos', 'updating_description', 'updating_characteristics', 'automoderation', 'adding_instructions', 'stop_brands', 'with_pallets', 'lots', 'with_video', 'mobile_courier'],
            ],
            'db' => [
                'lisa_fixtures' => [
                    "grid_settings" => [
                        [
                            "id" => 1,
                            "user_id" => 4,
                            "columns_list" => '["promo_desc", "adding_goods_to_new_category", "used_ref", "updating_photos", "updating_description", "updating_characteristics", "automoderation", "adding_instructions", "stop_brands", "with_pallets", "lots", "with_video", "mobile_courier"]'
                        ]
                    ],
                ]
            ],
            "pageObjects" => [
                "canSee" => [
                    "Заголовки" => [
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='id']",
                            "value" => "ID задачи"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='subject']",
                            "value" => "Заголовок"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='type_id']",
                            "value" => "Тип"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='promo_desc']",
                            "value" => "Промо-описание"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='adding_goods_to_new_category']",
                            "value" => "Добавление товаров в новую категорию"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='used_ref']",
                            "value" => "БУ, REF"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='updating_photos']",
                            "value" => "Обновление фото"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='updating_description']",
                            "value" => "Обновление описания"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='updating_characteristics']",
                            "value" => "Обновление характеристик"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='automoderation']",
                            "value" => "Автомодерация"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='adding_instructions']",
                            "value" => "Добавление/обновление инструкций"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='stop_brands']",
                            "value" => "Стоп-бренды"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='with_pallets']",
                            "value" => "С палитрой"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='lots']",
                            "value" => "Лоты"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='with_video']",
                            "value" => "С видео"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='mobile_courier']",
                            "value" => "По заявке с MobileCourier"
                        ],
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
                    ],
                ],
                "cantSee" => [
                    "Заявка 5" => [
                        [
                            "selector" => "//tbody/tr/td[@data-col-seq='id']",
                            "value" => "5"
                        ],
                        [
                            "selector" => "//tbody/tr/td[@data-col-seq='subject']",
                            "value" => "Изменение существующих параметров/значений (Определяется типом задачи)"
                        ],
                        [
                            "selector" => "//tbody/tr/td[@data-col-seq='type_id']",
                            "value" => "Изменение существующих параметров/значений"
                        ],
                    ],
                    "Заявка 4" => [
                        [
                            "selector" => "//tbody/tr/td[@data-col-seq='id']",
                            "value" => "4"
                        ],
                        [
                            "selector" => "//tbody/tr/td[@data-col-seq='subject']",
                            "value" => "Добавление параметров/значений (Определяется типом задачи)"
                        ],
                        [
                            "selector" => "//tbody/tr/td[@data-col-seq='type_id']",
                            "value" => "Добавление параметров/значений"
                        ],
                    ],
                    "Заявка 3" => [
                        [
                            "selector" => "//tbody/tr/td[@data-col-seq='id']",
                            "value" => "3"
                        ],
                        [
                            "selector" => "//tbody/tr/td[@data-col-seq='subject']",
                            "value" => "Добавление нового портала/раздела фат-меню/категории товаров (Определяется типом задачи)"
                        ],
                        [
                            "selector" => "//tbody/tr/td[@data-col-seq='type_id']",
                            "value" => "Добавление нового портала/раздела фат-меню/категории товаров"
                        ],
                    ],
                    "Заявка 2" => [
                        [
                            "selector" => "//tbody/tr/td[@data-col-seq='id']",
                            "value" => "2"
                        ],
                        [
                            "selector" => "//tbody/tr/td[@data-col-seq='subject']",
                            "value" => "Заливка фото с фотостудии (Работа с товарами Розетки)"
                        ],
                        [
                            "selector" => "//tbody/tr/td[@data-col-seq='type_id']",
                            "value" => "Заливка фото с фотостудии"
                        ],
                    ],
                    "Заявка 1" => [
                        [
                            "selector" => "//tbody/tr/td[@data-col-seq='id']",
                            "value" => "1"
                        ],
                        [
                            "selector" => "//tbody/tr/td[@data-col-seq='subject']",
                            "value" => "Перенос товаров (Работа с товарами Маркетплейса)"
                        ],
                        [
                            "selector" => "//tbody/tr/td[@data-col-seq='type_id']",
                            "value" => "Перенос товаров	"
                        ],
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
                'visibleColumns' => ['priority', 'reason_id', 'author_clarifications', 'photos_available', 'characteristics_available', 'description_available', 'language'],
            ],
            'db' => [
                'lisa_fixtures' => [
                    "grid_settings" => [
                        [
                            "id" => 1,
                            "user_id" => 4,
                            "columns_list" => '["priority", "reason_id", "author_clarifications", "photos_available", "characteristics_available", "description_available", "language"]'
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
                        ["selector" => Request::requestInTable(1, 'reason_id', 'Нинада')],
                        ["selector" => Request::requestInTable(1, 'author_clarifications', 'Более 5 уточнений')],
                        ["selector" => Request::requestInTable(1, 'photos_available', 'Фото предоставлены фотостудией')],
                        ["selector" => Request::requestInTable(1, 'characteristics_available', 'Характеристики добавлены с обновлением фото/описания')],
                        ["selector" => Request::requestInTable(1, 'description_available', 'Не предоставлены продактом. Выполнен поиск.')],
                        ["selector" => Request::requestInTable(1, 'language', 'Английский')],
                    ],
                ],
                "cantSee" => []
            ]
        ]
    ],
];
