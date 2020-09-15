<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Основные, вкладка Все',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '',
            'requestBody' => [
                '4-dynagrid' => '1',
                'DynaGridConfig[theme]' => 'panel-danger',
                'deleteFlag' => '0',
                'visibleKeys' => 'ef6ef760,50cd524a,bf04724b,4a16cdfb,805bbc04,3d33757d,ddcc7b4a,54eab21f,6f4cf3ff,2187abd1,0e27ac6a',
            ],
            "pageObjects" => [
                "canSee" => [
                    "Заголовки" => [
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='2']",
                            "value" => "ID задачи"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='3']",
                            "value" => "Заголовок"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='4']",
                            "value" => "Тип"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='5']",
                            "value" => "Создатель заявки"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='6']",
                            "value" => "Супервайзер заявки"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='7']",
                            "value" => "Менеджер заявки"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='8']",
                            "value" => "Статус"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='9']",
                            "value" => "Направление задачи"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='10']",
                            "value" => "Направление команды"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='11']",
                            "value" => "Категория товаров"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='12']",
                            "value" => "Продавец"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='13']",
                            "value" => "Приоритет"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='14']",
                            "value" => "Кросс-чек статус"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='15']",
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
                        [
                            "selector" => "//tbody/tr[@data-key='7']/td[@data-col-seq='2']",
                            "value" => "7"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='7']/td[@data-col-seq='3']",
                            "value" => "Добавление/изменение тегов (Определяется типом задачи)"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='7']/td[@data-col-seq='4']",
                            "value" => "Добавление/изменение тегов"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='7']/td[@data-col-seq='5']",
                            "value" => "Константин Куцан"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='7']/td[@data-col-seq='6']",
                            "value" => "Супервайзер Категоркин 15"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='7']/td[@data-col-seq='7']",
                            "value" => "Менеджер Контентович 1А"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='7']/td[@data-col-seq='8']",
                            "value" => "Выполнена"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='7']/td[@data-col-seq='9']",
                            "value" => "Определяется типом задачи"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='7']/td[@data-col-seq='10']",
                            "value" => "Работа с порталами, фат-меню, категориями"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='7']/td[@data-col-seq='11']",
                            "value" => "Авиабилеты"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='7']/td[@data-col-seq='12']",
                            "value" => "Euromart"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='7']/td[@data-col-seq='13']",
                            "value" => "Товар-новинка/эксклюзив (трафикообразующий)"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='7']/td[@data-col-seq='14']",
                            "value" => "Не прошла кросс-чек"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='7']/td[@data-col-seq='15']",
                            "value" => "(не задано)"
                        ],
                    ],
                    "Заявка 6" => [
                        [
                            "selector" => "//tbody/tr[@data-key='6']/td[@data-col-seq='2']",
                            "value" => "6"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='6']/td[@data-col-seq='3']",
                            "value" => "Добавление/изменение видео (Определяется типом задачи)"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='6']/td[@data-col-seq='4']",
                            "value" => "Добавление/изменение видео"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='6']/td[@data-col-seq='5']",
                            "value" => "Константин Куцан"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='6']/td[@data-col-seq='6']",
                            "value" => "Супервайзер Категоркин 18"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='6']/td[@data-col-seq='7']",
                            "value" => "Менеджер Контентович 1А"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='6']/td[@data-col-seq='8']",
                            "value" => "Частично выполнена"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='6']/td[@data-col-seq='9']",
                            "value" => "Определяется типом задачи"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='6']/td[@data-col-seq='10']",
                            "value" => "Работа с порталами, фат-меню, категориями"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='6']/td[@data-col-seq='11']",
                            "value" => "Авиабилеты"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='6']/td[@data-col-seq='12']",
                            "value" => "Euromart"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='6']/td[@data-col-seq='13']",
                            "value" => "Товар-новинка/эксклюзив (трафикообразующий)"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='6']/td[@data-col-seq='14']",
                            "value" => "Не прошла кросс-чек"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='6']/td[@data-col-seq='15']",
                            "value" => "(не задано)"
                        ],
                    ],
                    "Заявка 5" => [
                        [
                            "selector" => "//tbody/tr[@data-key='5']/td[@data-col-seq='2']",
                            "value" => "5"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='5']/td[@data-col-seq='3']",
                            "value" => "Изменение существующих параметров/значений (Определяется типом задачи)"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='5']/td[@data-col-seq='4']",
                            "value" => "Изменение существующих параметров/значений"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='5']/td[@data-col-seq='5']",
                            "value" => "Константин Куцан"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='5']/td[@data-col-seq='6']",
                            "value" => "Супервайзер Проектенко 17"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='5']/td[@data-col-seq='7']",
                            "value" => "Менеджер Контентович 1А"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='5']/td[@data-col-seq='8']",
                            "value" => "Ожидает"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='5']/td[@data-col-seq='9']",
                            "value" => "Определяется типом задачи"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='5']/td[@data-col-seq='10']",
                            "value" => "Работа с проектированием структур + фильтрами"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='5']/td[@data-col-seq='11']",
                            "value" => "Авиабилеты"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='5']/td[@data-col-seq='12']",
                            "value" => "Euromart"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='5']/td[@data-col-seq='13']",
                            "value" => "Товар-новинка/эксклюзив (трафикообразующий)"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='5']/td[@data-col-seq='14']",
                            "value" => "Не прошла кросс-чек"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='5']/td[@data-col-seq='15']",
                            "value" => "(не задано)"
                        ],
                    ],
                    "Заявка 4" => [
                        [
                            "selector" => "//tbody/tr[@data-key='4']/td[@data-col-seq='2']",
                            "value" => "4"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='4']/td[@data-col-seq='3']",
                            "value" => "Добавление параметров/значений (Определяется типом задачи)"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='4']/td[@data-col-seq='4']",
                            "value" => "Добавление параметров/значений  "
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='4']/td[@data-col-seq='5']",
                            "value" => "Константин Куцан"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='4']/td[@data-col-seq='6']",
                            "value" => "Супервайзер Проектенко 14"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='4']/td[@data-col-seq='7']",
                            "value" => "Менеджер Контентович 1А"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='4']/td[@data-col-seq='8']",
                            "value" => "В работе"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='4']/td[@data-col-seq='9']",
                            "value" => "Определяется типом задачи"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='4']/td[@data-col-seq='10']",
                            "value" => "Работа с проектированием структур + фильтрами"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='4']/td[@data-col-seq='11']",
                            "value" => "Авиабилеты"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='4']/td[@data-col-seq='12']",
                            "value" => "Euromart"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='4']/td[@data-col-seq='13']",
                            "value" => "Товар-новинка/эксклюзив (трафикообразующий)"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='4']/td[@data-col-seq='14']",
                            "value" => "Не прошла кросс-чек"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='4']/td[@data-col-seq='15']",
                            "value" => "(не задано)"
                        ],
                    ],
                    "Заявка 3" => [
                        [
                            "selector" => "//tbody/tr[@data-key='3']/td[@data-col-seq='2']",
                            "value" => "3"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='3']/td[@data-col-seq='3']",
                            "value" => "Добавление нового портала/раздела фат-меню/категории товаров (Определяется типом задачи)"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='3']/td[@data-col-seq='4']",
                            "value" => "Добавление нового портала/раздела фат-меню/категории товаров"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='3']/td[@data-col-seq='5']",
                            "value" => "Константин Куцан"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='3']/td[@data-col-seq='6']",
                            "value" => "Супервайзер Категоркин 15   "
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='3']/td[@data-col-seq='7']",
                            "value" => "Менеджер Контентович 1А"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='3']/td[@data-col-seq='8']",
                            "value" => "Ожидает взятия в работу	    "
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='3']/td[@data-col-seq='9']",
                            "value" => "Определяется типом задачи"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='3']/td[@data-col-seq='10']",
                            "value" => "Работа с порталами, фат-меню, категориями"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='3']/td[@data-col-seq='11']",
                            "value" => "Авиабилеты"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='3']/td[@data-col-seq='12']",
                            "value" => "Euromart"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='3']/td[@data-col-seq='13']",
                            "value" => "Товар-новинка/эксклюзив (трафикообразующий)"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='3']/td[@data-col-seq='14']",
                            "value" => "Не прошла кросс-чек"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='3']/td[@data-col-seq='15']",
                            "value" => "(не задано)"
                        ],
                    ],
                    "Заявка 2" => [
                        [
                            "selector" => "//tbody/tr[@data-key='2']/td[@data-col-seq='2']",
                            "value" => "2"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='2']/td[@data-col-seq='3']",
                            "value" => "Заливка фото с фотостудии (Работа с товарами Розетки)"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='2']/td[@data-col-seq='4']",
                            "value" => "Заливка фото с фотостудии"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='2']/td[@data-col-seq='5']",
                            "value" => "Константин Куцан"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='2']/td[@data-col-seq='6']",
                            "value" => "Супервайзер Начальникович 1"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='2']/td[@data-col-seq='7']",
                            "value" => "(не задано)"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='2']/td[@data-col-seq='8']",
                            "value" => "На доработке"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='2']/td[@data-col-seq='9']",
                            "value" => "Работа с товарами Розетки"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='2']/td[@data-col-seq='10']",
                            "value" => "Работа с товарами Rozetka"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='2']/td[@data-col-seq='11']",
                            "value" => "Авиабилеты"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='2']/td[@data-col-seq='12']",
                            "value" => "Rozetka"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='2']/td[@data-col-seq='13']",
                            "value" => "Товар-новинка/эксклюзив (трафикообразующий)"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='2']/td[@data-col-seq='14']",
                            "value" => "Не прошла кросс-чек"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='2']/td[@data-col-seq='15']",
                            "value" => "(не задано)"
                        ],
                    ],
                    "Заявка 1" => [
                        [
                            "selector" => "//tbody/tr[@data-key='1']/td[@data-col-seq='2']",
                            "value" => "1"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='1']/td[@data-col-seq='3']",
                            "value" => "Перенос товаров (Работа с товарами Маркетплейса)"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='1']/td[@data-col-seq='4']",
                            "value" => "Перенос товаров	"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='1']/td[@data-col-seq='5']",
                            "value" => "Константин Куцан"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='1']/td[@data-col-seq='6']",
                            "value" => "Супервайзер Начальникович 1"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='1']/td[@data-col-seq='7']",
                            "value" => "(не задано)"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='1']/td[@data-col-seq='8']",
                            "value" => "Готова для распределения"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='1']/td[@data-col-seq='9']",
                            "value" => "Работа с товарами Маркетплейса"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='1']/td[@data-col-seq='10']",
                            "value" => "Работа с товарами Маркетплейса  "
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='1']/td[@data-col-seq='11']",
                            "value" => "(не задано)"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='1']/td[@data-col-seq='12']",
                            "value" => "Euromart"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='1']/td[@data-col-seq='13']",
                            "value" => "Товар-новинка/эксклюзив (трафикообразующий)"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='1']/td[@data-col-seq='14']",
                            "value" => "Не прошла кросс-чек"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='1']/td[@data-col-seq='15']",
                            "value" => "(не задано)"
                        ],
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
                '4-dynagrid' => '1',
                'DynaGridConfig[theme]' => 'panel-danger',
                'deleteFlag' => '0',
                'visibleKeys' => 'd82b34cd,7551a25e,216af811,195c6167,7100d06f,9f3bab20,3a15b8f6,12fe4397,132cbbd2',
            ],
            "pageObjects" => [
                "canSee" => [
                    "Заголовки" => [
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='2']",
                            "value" => "ID задачи"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='3']",
                            "value" => "Заголовок"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='4']",
                            "value" => "Тип"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='5']",
                            "value" => "ID связанной задачи"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='6']",
                            "value" => "Уровень сложности задачи"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='7']",
                            "value" => "На исправление"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='8']",
                            "value" => "Причина"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='9']",
                            "value" => "Уточнения. Количество уточнений у автора"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='10']",
                            "value" => "Наличие фото к товарам"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='11']",
                            "value" => "Наличие характеристик к товарам"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='12']",
                            "value" => "Наличие описаний к товарам"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='13']",
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
                            "selector" => "//select[@name='RequestSearch[reason_id][]']/option[7][@value='Ожидается загрузка обновлений в систему']",
                            "value" => "Ожидается загрузка обновлений в систему"
                        ],
                        [
                            "selector" => "//select[@name='RequestSearch[reason_id][]']/option[8][@value='Ожидается загрузка товаров в систему']",
                            "value" => "Ожидается загрузка товаров в систему"
                        ],
                        [
                            "selector" => "//select[@name='RequestSearch[reason_id][]']/option[9][@value='Ожидается загрузка фото в товары']",
                            "value" => "Ожидается загрузка фото в товары"
                        ],
                        [
                            "selector" => "//select[@name='RequestSearch[reason_id][]']/option[10][@value='Товары ушли в ошибки']",
                            "value" => "Товары ушли в ошибки"
                        ],
                        [
                            "selector" => "//select[@name='RequestSearch[reason_id][]']/option[11][@value='Требуется уточнение информации по задаче']",
                            "value" => "Требуется уточнение информации по задаче"
                        ],
                        [
                            "selector" => "//select[@name='RequestSearch[reason_id][]']/option[12][@value='Часть товаров ушла в ошибки']",
                            "value" => "Часть товаров ушла в ошибки"
                        ],
                        [
                            "selector" => "//select[@name='RequestSearch[reason_id][]']/option[13][@value='-1']",
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
                        [
                            "selector" => "//tbody/tr[@data-key='1']/td[@data-col-seq='2']",
                            "value" => "1"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='1']/td[@data-col-seq='3']",
                            "value" => "Перенос товаров (Работа с товарами Маркетплейса)"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='1']/td[@data-col-seq='4']",
                            "value" => "Перенос товаров	"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='1']/td[@data-col-seq='5']",
                            "value" => "(не задано)"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='1']/td[@data-col-seq='6']",
                            "value" => "(не задано)"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='1']/td[@data-col-seq='7']",
                            "value" => "Нет"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='1']/td[@data-col-seq='8']",
                            "value" => "(не задано)"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='1']/td[@data-col-seq='9']",
                            "value" => "(не задано)"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='1']/td[@data-col-seq='10']",
                            "value" => "(не задано)"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='1']/td[@data-col-seq='11']",
                            "value" => "(не задано)"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='1']/td[@data-col-seq='12']",
                            "value" => "(не задано)"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='1']/td[@data-col-seq='13']",
                            "value" => "(не задано)"
                        ],
                    ],
                ],
                "cantSee" => [
                    "Заявка 7" => [
                        [
                            "selector" => "//tbody/tr[@data-key='7']/td[@data-col-seq='2']",
                            "value" => "7"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='7']/td[@data-col-seq='3']",
                            "value" => "Добавление/изменение тегов (Определяется типом задачи)"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='7']/td[@data-col-seq='4']",
                            "value" => "Добавление/изменение тегов"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='7']/td[@data-col-seq='5']",
                            "value" => "Константин Куцан"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='7']/td[@data-col-seq='6']",
                            "value" => "Супервайзер Категоркин 15"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='7']/td[@data-col-seq='7']",
                            "value" => "Менеджер Контентович 1А"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='7']/td[@data-col-seq='8']",
                            "value" => "Выполнена"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='7']/td[@data-col-seq='9']",
                            "value" => "Определяется типом задачи"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='7']/td[@data-col-seq='10']",
                            "value" => "Работа с порталами, фат-меню, категориями"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='7']/td[@data-col-seq='11']",
                            "value" => "Авиабилеты"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='7']/td[@data-col-seq='12']",
                            "value" => "Euromart"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='7']/td[@data-col-seq='13']",
                            "value" => "Товар-новинка/эксклюзив (трафикообразующий)"
                        ],
                    ],
                    "Заявка 6" => [
                        [
                            "selector" => "//tbody/tr[@data-key='6']/td[@data-col-seq='2']",
                            "value" => "6"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='6']/td[@data-col-seq='3']",
                            "value" => "Добавление/изменение видео (Определяется типом задачи)"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='6']/td[@data-col-seq='4']",
                            "value" => "Добавление/изменение видео"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='6']/td[@data-col-seq='5']",
                            "value" => "Константин Куцан"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='6']/td[@data-col-seq='6']",
                            "value" => "Супервайзер Категоркин 18"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='6']/td[@data-col-seq='7']",
                            "value" => "Менеджер Контентович 1А"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='6']/td[@data-col-seq='8']",
                            "value" => "Частично выполнена"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='6']/td[@data-col-seq='9']",
                            "value" => "Определяется типом задачи"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='6']/td[@data-col-seq='10']",
                            "value" => "Работа с порталами, фат-меню, категориями"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='6']/td[@data-col-seq='11']",
                            "value" => "Авиабилеты"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='6']/td[@data-col-seq='12']",
                            "value" => "Euromart"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='6']/td[@data-col-seq='13']",
                            "value" => "Товар-новинка/эксклюзив (трафикообразующий)"
                        ],
                    ],
                    "Заявка 5" => [
                        [
                            "selector" => "//tbody/tr[@data-key='5']/td[@data-col-seq='2']",
                            "value" => "5"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='5']/td[@data-col-seq='3']",
                            "value" => "Изменение существующих параметров/значений (Определяется типом задачи)"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='5']/td[@data-col-seq='4']",
                            "value" => "Изменение существующих параметров/значений"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='5']/td[@data-col-seq='5']",
                            "value" => "Константин Куцан"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='5']/td[@data-col-seq='6']",
                            "value" => "Супервайзер Проектенко 17"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='5']/td[@data-col-seq='7']",
                            "value" => "Менеджер Контентович 1А"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='5']/td[@data-col-seq='8']",
                            "value" => "Ожидает"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='5']/td[@data-col-seq='9']",
                            "value" => "Определяется типом задачи"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='5']/td[@data-col-seq='10']",
                            "value" => "Работа с проектированием структур + фильтрами"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='5']/td[@data-col-seq='11']",
                            "value" => "Авиабилеты"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='5']/td[@data-col-seq='12']",
                            "value" => "Euromart"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='5']/td[@data-col-seq='13']",
                            "value" => "Товар-новинка/эксклюзив (трафикообразующий)"
                        ],
                    ],
                    "Заявка 4" => [
                        [
                            "selector" => "//tbody/tr[@data-key='4']/td[@data-col-seq='2']",
                            "value" => "4"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='4']/td[@data-col-seq='3']",
                            "value" => "Добавление параметров/значений (Определяется типом задачи)"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='4']/td[@data-col-seq='4']",
                            "value" => "Добавление параметров/значений  "
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='4']/td[@data-col-seq='5']",
                            "value" => "Константин Куцан"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='4']/td[@data-col-seq='6']",
                            "value" => "Супервайзер Проектенко 14"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='4']/td[@data-col-seq='7']",
                            "value" => "Менеджер Контентович 1А"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='4']/td[@data-col-seq='8']",
                            "value" => "В работе"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='4']/td[@data-col-seq='9']",
                            "value" => "Определяется типом задачи"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='4']/td[@data-col-seq='10']",
                            "value" => "Работа с проектированием структур + фильтрами"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='4']/td[@data-col-seq='11']",
                            "value" => "Авиабилеты"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='4']/td[@data-col-seq='12']",
                            "value" => "Euromart"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='4']/td[@data-col-seq='13']",
                            "value" => "Товар-новинка/эксклюзив (трафикообразующий)"
                        ],
                    ],
                    "Заявка 3" => [
                        [
                            "selector" => "//tbody/tr[@data-key='3']/td[@data-col-seq='2']",
                            "value" => "3"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='3']/td[@data-col-seq='3']",
                            "value" => "Добавление нового портала/раздела фат-меню/категории товаров (Определяется типом задачи)"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='3']/td[@data-col-seq='4']",
                            "value" => "Добавление нового портала/раздела фат-меню/категории товаров"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='3']/td[@data-col-seq='5']",
                            "value" => "Константин Куцан"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='3']/td[@data-col-seq='6']",
                            "value" => "Супервайзер Категоркин 15   "
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='3']/td[@data-col-seq='7']",
                            "value" => "Менеджер Контентович 1А"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='3']/td[@data-col-seq='8']",
                            "value" => "Ожидает взятия в работу	    "
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='3']/td[@data-col-seq='9']",
                            "value" => "Определяется типом задачи"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='3']/td[@data-col-seq='10']",
                            "value" => "Работа с порталами, фат-меню, категориями"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='3']/td[@data-col-seq='11']",
                            "value" => "Авиабилеты"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='3']/td[@data-col-seq='12']",
                            "value" => "Euromart"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='3']/td[@data-col-seq='13']",
                            "value" => "Товар-новинка/эксклюзив (трафикообразующий)"
                        ],
                    ],
                    "Заявка 2" => [
                        [
                            "selector" => "//tbody/tr[@data-key='2']/td[@data-col-seq='2']",
                            "value" => "2"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='2']/td[@data-col-seq='3']",
                            "value" => "Заливка фото с фотостудии (Работа с товарами Розетки)"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='2']/td[@data-col-seq='4']",
                            "value" => "Заливка фото с фотостудии"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='2']/td[@data-col-seq='5']",
                            "value" => "Константин Куцан"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='2']/td[@data-col-seq='6']",
                            "value" => "Супервайзер Начальникович 1"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='2']/td[@data-col-seq='7']",
                            "value" => "(не задано)"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='2']/td[@data-col-seq='8']",
                            "value" => "На доработке"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='2']/td[@data-col-seq='9']",
                            "value" => "Работа с товарами Розетки"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='2']/td[@data-col-seq='10']",
                            "value" => "Работа с товарами Rozetka"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='2']/td[@data-col-seq='11']",
                            "value" => "Авиабилеты"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='2']/td[@data-col-seq='12']",
                            "value" => "Rozetka"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='2']/td[@data-col-seq='13']",
                            "value" => "Товар-новинка/эксклюзив (трафикообразующий)"
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
                '4-dynagrid' => '1',
                'DynaGridConfig[theme]' => 'panel-danger',
                'deleteFlag' => '0',
                'visibleKeys' => 'f237cb47,cb2e0668,f5a35a47,a5480d6b,00bab8f4',
            ],
            "pageObjects" => [
                "canSee" => [
                    "Заголовки" => [
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='2']",
                            "value" => "ID задачи"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='3']",
                            "value" => "Заголовок"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='4']",
                            "value" => "Тип"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='5']",
                            "value" => "Описание"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='6']",
                            "value" => "Причина отмены/доработки"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='7']",
                            "value" => "Рекомендации"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='8']",
                            "value" => "Комментарий на исправление"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='9']",
                            "value" => "Комментарий к результату задачи"
                        ],
                    ],
                    "Заявка 2" => [
                        [
                            "selector" => "//tbody/tr[@data-key='2']/td[@data-col-seq='2']",
                            "value" => "2"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='2']/td[@data-col-seq='3']",
                            "value" => "Заливка фото с фотостудии (Работа с товарами Розетки)"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='2']/td[@data-col-seq='4']",
                            "value" => "Заливка фото с фотостудии"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='2']/td[@data-col-seq='5']",
                            "value" => "Описание"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='2']/td[@data-col-seq='6']",
//                            "value" => "(не задано)"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='2']/td[@data-col-seq='7']",
                            "value" => "(не задано)"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='2']/td[@data-col-seq='8']",
                            "value" => "(не задано)"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='2']/td[@data-col-seq='9']",
                            "value" => "(не задано)"
                        ],
                    ],
                ],
                "cantSee" => [
                    "Заявка 7" => [
                        [
                            "selector" => "//tbody/tr[@data-key='7']/td[@data-col-seq='2']",
                            "value" => "7"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='7']/td[@data-col-seq='3']",
                            "value" => "Добавление/изменение тегов (Определяется типом задачи)"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='7']/td[@data-col-seq='4']",
                            "value" => "Добавление/изменение тегов"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='7']/td[@data-col-seq='5']",
                            "value" => "Константин Куцан"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='7']/td[@data-col-seq='6']",
                            "value" => "Супервайзер Категоркин 15"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='7']/td[@data-col-seq='7']",
                            "value" => "Менеджер Контентович 1А"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='7']/td[@data-col-seq='8']",
                            "value" => "Выполнена"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='7']/td[@data-col-seq='9']",
                            "value" => "Определяется типом задачи"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='7']/td[@data-col-seq='10']",
                            "value" => "Работа с порталами, фат-меню, категориями"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='7']/td[@data-col-seq='11']",
                            "value" => "Авиабилеты"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='7']/td[@data-col-seq='12']",
                            "value" => "Euromart"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='7']/td[@data-col-seq='13']",
                            "value" => "Товар-новинка/эксклюзив (трафикообразующий)"
                        ],
                    ],
                    "Заявка 6" => [
                        [
                            "selector" => "//tbody/tr[@data-key='6']/td[@data-col-seq='2']",
                            "value" => "6"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='6']/td[@data-col-seq='3']",
                            "value" => "Добавление/изменение видео (Определяется типом задачи)"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='6']/td[@data-col-seq='4']",
                            "value" => "Добавление/изменение видео"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='6']/td[@data-col-seq='5']",
                            "value" => "Константин Куцан"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='6']/td[@data-col-seq='6']",
                            "value" => "Супервайзер Категоркин 18"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='6']/td[@data-col-seq='7']",
                            "value" => "Менеджер Контентович 1А"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='6']/td[@data-col-seq='8']",
                            "value" => "Частично выполнена"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='6']/td[@data-col-seq='9']",
                            "value" => "Определяется типом задачи"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='6']/td[@data-col-seq='10']",
                            "value" => "Работа с порталами, фат-меню, категориями"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='6']/td[@data-col-seq='11']",
                            "value" => "Авиабилеты"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='6']/td[@data-col-seq='12']",
                            "value" => "Euromart"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='6']/td[@data-col-seq='13']",
                            "value" => "Товар-новинка/эксклюзив (трафикообразующий)"
                        ],
                    ],
                    "Заявка 5" => [
                        [
                            "selector" => "//tbody/tr[@data-key='5']/td[@data-col-seq='2']",
                            "value" => "5"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='5']/td[@data-col-seq='3']",
                            "value" => "Изменение существующих параметров/значений (Определяется типом задачи)"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='5']/td[@data-col-seq='4']",
                            "value" => "Изменение существующих параметров/значений"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='5']/td[@data-col-seq='5']",
                            "value" => "Константин Куцан"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='5']/td[@data-col-seq='6']",
                            "value" => "Супервайзер Проектенко 17"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='5']/td[@data-col-seq='7']",
                            "value" => "Менеджер Контентович 1А"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='5']/td[@data-col-seq='8']",
                            "value" => "Ожидает"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='5']/td[@data-col-seq='9']",
                            "value" => "Определяется типом задачи"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='5']/td[@data-col-seq='10']",
                            "value" => "Работа с проектированием структур + фильтрами"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='5']/td[@data-col-seq='11']",
                            "value" => "Авиабилеты"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='5']/td[@data-col-seq='12']",
                            "value" => "Euromart"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='5']/td[@data-col-seq='13']",
                            "value" => "Товар-новинка/эксклюзив (трафикообразующий)"
                        ],
                    ],
                    "Заявка 4" => [
                        [
                            "selector" => "//tbody/tr[@data-key='4']/td[@data-col-seq='2']",
                            "value" => "4"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='4']/td[@data-col-seq='3']",
                            "value" => "Добавление параметров/значений (Определяется типом задачи)"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='4']/td[@data-col-seq='4']",
                            "value" => "Добавление параметров/значений  "
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='4']/td[@data-col-seq='5']",
                            "value" => "Константин Куцан"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='4']/td[@data-col-seq='6']",
                            "value" => "Супервайзер Проектенко 14"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='4']/td[@data-col-seq='7']",
                            "value" => "Менеджер Контентович 1А"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='4']/td[@data-col-seq='8']",
                            "value" => "В работе"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='4']/td[@data-col-seq='9']",
                            "value" => "Определяется типом задачи"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='4']/td[@data-col-seq='10']",
                            "value" => "Работа с проектированием структур + фильтрами"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='4']/td[@data-col-seq='11']",
                            "value" => "Авиабилеты"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='4']/td[@data-col-seq='12']",
                            "value" => "Euromart"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='4']/td[@data-col-seq='13']",
                            "value" => "Товар-новинка/эксклюзив (трафикообразующий)"
                        ],
                    ],
                    "Заявка 3" => [
                        [
                            "selector" => "//tbody/tr[@data-key='3']/td[@data-col-seq='2']",
                            "value" => "3"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='3']/td[@data-col-seq='3']",
                            "value" => "Добавление нового портала/раздела фат-меню/категории товаров (Определяется типом задачи)"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='3']/td[@data-col-seq='4']",
                            "value" => "Добавление нового портала/раздела фат-меню/категории товаров"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='3']/td[@data-col-seq='5']",
                            "value" => "Константин Куцан"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='3']/td[@data-col-seq='6']",
                            "value" => "Супервайзер Категоркин 15   "
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='3']/td[@data-col-seq='7']",
                            "value" => "Менеджер Контентович 1А"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='3']/td[@data-col-seq='8']",
                            "value" => "Ожидает взятия в работу	    "
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='3']/td[@data-col-seq='9']",
                            "value" => "Определяется типом задачи"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='3']/td[@data-col-seq='10']",
                            "value" => "Работа с порталами, фат-меню, категориями"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='3']/td[@data-col-seq='11']",
                            "value" => "Авиабилеты"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='3']/td[@data-col-seq='12']",
                            "value" => "Euromart"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='3']/td[@data-col-seq='13']",
                            "value" => "Товар-новинка/эксклюзив (трафикообразующий)"
                        ],
                    ],
                    "Заявка 1" => [
                        [
                            "selector" => "//tbody/tr[@data-key='1']/td[@data-col-seq='2']",
                            "value" => "1"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='1']/td[@data-col-seq='3']",
                            "value" => "Перенос товаров (Работа с товарами Маркетплейса)"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='1']/td[@data-col-seq='4']",
                            "value" => "Перенос товаров	"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='1']/td[@data-col-seq='5']",
                            "value" => "(не задано)"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='1']/td[@data-col-seq='6']",
                            "value" => "(не задано)"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='1']/td[@data-col-seq='7']",
                            "value" => "Нет"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='1']/td[@data-col-seq='8']",
                            "value" => "(не задано)"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='1']/td[@data-col-seq='9']",
                            "value" => "(не задано)"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='1']/td[@data-col-seq='10']",
                            "value" => "(не задано)"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='1']/td[@data-col-seq='11']",
                            "value" => "(не задано)"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='1']/td[@data-col-seq='12']",
                            "value" => "(не задано)"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='1']/td[@data-col-seq='13']",
                            "value" => "(не задано)"
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
                '4-dynagrid' => '1',
                'DynaGridConfig[theme]' => 'panel-danger',
                'deleteFlag' => '0',
                'visibleKeys' => '45671659,9cf76095,4017ea5d,fdd5e993,f69e93e9,e7ee29ab',
            ],
            "pageObjects" => [
                "canSee" => [
                    "Заголовки" => [
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='2']",
                            "value" => "ID задачи"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='3']",
                            "value" => "Заголовок"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='4']",
                            "value" => "Тип"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='5']",
                            "value" => "Количество в работу"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='6']",
                            "value" => "Количество добавленных товаров"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='7']",
                            "value" => "Количество измененных товаров"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='8']",
                            "value" => "Количество товаров, которые уже есть в БД"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='9']",
                            "value" => "Рассчитанное количество проверенных товаров"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='10']",
                            "value" => "Рассчитанное количество проверенных товаров с ошибками"
                        ],
                    ],
                    "Заявка 3" => [
                        [
                            "selector" => "//tbody/tr[@data-key='3']/td[@data-col-seq='2']",
                            "value" => "3"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='3']/td[@data-col-seq='3']",
                            "value" => "Добавление нового портала/раздела фат-меню/категории товаров (Определяется типом задачи)"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='3']/td[@data-col-seq='4']",
                            "value" => "Добавление нового портала/раздела фат-меню/категории товаров"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='3']/td[@data-col-seq='5']",
                            "value" => "10"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='3']/td[@data-col-seq='6']",
                            "value" => "(не задано)"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='3']/td[@data-col-seq='7']",
                            "value" => "(не задано)"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='3']/td[@data-col-seq='8']",
                            "value" => "(не задано)"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='3']/td[@data-col-seq='9']",
                            "value" => "(не задано)"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='3']/td[@data-col-seq='10']",
                            "value" => "(не задано)"
                        ],
                    ],
                ],
                "cantSee" => [
                    "Заявка 7" => [
                        [
                            "selector" => "//tbody/tr[@data-key='7']/td[@data-col-seq='2']",
                            "value" => "7"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='7']/td[@data-col-seq='3']",
                            "value" => "Добавление/изменение тегов (Определяется типом задачи)"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='7']/td[@data-col-seq='4']",
                            "value" => "Добавление/изменение тегов"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='7']/td[@data-col-seq='5']",
                            "value" => "Константин Куцан"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='7']/td[@data-col-seq='6']",
                            "value" => "Супервайзер Категоркин 15"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='7']/td[@data-col-seq='7']",
                            "value" => "Менеджер Контентович 1А"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='7']/td[@data-col-seq='8']",
                            "value" => "Выполнена"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='7']/td[@data-col-seq='9']",
                            "value" => "Определяется типом задачи"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='7']/td[@data-col-seq='10']",
                            "value" => "Работа с порталами, фат-меню, категориями"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='7']/td[@data-col-seq='11']",
                            "value" => "Авиабилеты"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='7']/td[@data-col-seq='12']",
                            "value" => "Euromart"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='7']/td[@data-col-seq='13']",
                            "value" => "Товар-новинка/эксклюзив (трафикообразующий)"
                        ],
                    ],
                    "Заявка 6" => [
                        [
                            "selector" => "//tbody/tr[@data-key='6']/td[@data-col-seq='2']",
                            "value" => "6"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='6']/td[@data-col-seq='3']",
                            "value" => "Добавление/изменение видео (Определяется типом задачи)"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='6']/td[@data-col-seq='4']",
                            "value" => "Добавление/изменение видео"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='6']/td[@data-col-seq='5']",
                            "value" => "Константин Куцан"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='6']/td[@data-col-seq='6']",
                            "value" => "Супервайзер Категоркин 18"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='6']/td[@data-col-seq='7']",
                            "value" => "Менеджер Контентович 1А"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='6']/td[@data-col-seq='8']",
                            "value" => "Частично выполнена"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='6']/td[@data-col-seq='9']",
                            "value" => "Определяется типом задачи"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='6']/td[@data-col-seq='10']",
                            "value" => "Работа с порталами, фат-меню, категориями"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='6']/td[@data-col-seq='11']",
                            "value" => "Авиабилеты"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='6']/td[@data-col-seq='12']",
                            "value" => "Euromart"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='6']/td[@data-col-seq='13']",
                            "value" => "Товар-новинка/эксклюзив (трафикообразующий)"
                        ],
                    ],
                    "Заявка 5" => [
                        [
                            "selector" => "//tbody/tr[@data-key='5']/td[@data-col-seq='2']",
                            "value" => "5"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='5']/td[@data-col-seq='3']",
                            "value" => "Изменение существующих параметров/значений (Определяется типом задачи)"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='5']/td[@data-col-seq='4']",
                            "value" => "Изменение существующих параметров/значений"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='5']/td[@data-col-seq='5']",
                            "value" => "Константин Куцан"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='5']/td[@data-col-seq='6']",
                            "value" => "Супервайзер Проектенко 17"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='5']/td[@data-col-seq='7']",
                            "value" => "Менеджер Контентович 1А"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='5']/td[@data-col-seq='8']",
                            "value" => "Ожидает"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='5']/td[@data-col-seq='9']",
                            "value" => "Определяется типом задачи"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='5']/td[@data-col-seq='10']",
                            "value" => "Работа с проектированием структур + фильтрами"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='5']/td[@data-col-seq='11']",
                            "value" => "Авиабилеты"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='5']/td[@data-col-seq='12']",
                            "value" => "Euromart"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='5']/td[@data-col-seq='13']",
                            "value" => "Товар-новинка/эксклюзив (трафикообразующий)"
                        ],
                    ],
                    "Заявка 4" => [
                        [
                            "selector" => "//tbody/tr[@data-key='4']/td[@data-col-seq='2']",
                            "value" => "4"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='4']/td[@data-col-seq='3']",
                            "value" => "Добавление параметров/значений (Определяется типом задачи)"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='4']/td[@data-col-seq='4']",
                            "value" => "Добавление параметров/значений  "
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='4']/td[@data-col-seq='5']",
                            "value" => "Константин Куцан"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='4']/td[@data-col-seq='6']",
                            "value" => "Супервайзер Проектенко 14"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='4']/td[@data-col-seq='7']",
                            "value" => "Менеджер Контентович 1А"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='4']/td[@data-col-seq='8']",
                            "value" => "В работе"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='4']/td[@data-col-seq='9']",
                            "value" => "Определяется типом задачи"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='4']/td[@data-col-seq='10']",
                            "value" => "Работа с проектированием структур + фильтрами"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='4']/td[@data-col-seq='11']",
                            "value" => "Авиабилеты"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='4']/td[@data-col-seq='12']",
                            "value" => "Euromart"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='4']/td[@data-col-seq='13']",
                            "value" => "Товар-новинка/эксклюзив (трафикообразующий)"
                        ],
                    ],
                    "Заявка 2" => [
                        [
                            "selector" => "//tbody/tr[@data-key='2']/td[@data-col-seq='2']",
                            "value" => "2"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='2']/td[@data-col-seq='3']",
                            "value" => "Заливка фото с фотостудии (Работа с товарами Розетки)"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='2']/td[@data-col-seq='4']",
                            "value" => "Заливка фото с фотостудии"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='2']/td[@data-col-seq='5']",
                            "value" => "Константин Куцан"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='2']/td[@data-col-seq='6']",
                            "value" => "Супервайзер Начальникович 1"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='2']/td[@data-col-seq='7']",
                            "value" => "(не задано)"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='2']/td[@data-col-seq='8']",
                            "value" => "На доработке"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='2']/td[@data-col-seq='9']",
                            "value" => "Работа с товарами Розетки"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='2']/td[@data-col-seq='10']",
                            "value" => "Работа с товарами Rozetka"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='2']/td[@data-col-seq='11']",
                            "value" => "Авиабилеты"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='2']/td[@data-col-seq='12']",
                            "value" => "Rozetka"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='2']/td[@data-col-seq='13']",
                            "value" => "Товар-новинка/эксклюзив (трафикообразующий)"
                        ],
                    ],
                    "Заявка 1" => [
                        [
                            "selector" => "//tbody/tr[@data-key='1']/td[@data-col-seq='2']",
                            "value" => "1"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='1']/td[@data-col-seq='3']",
                            "value" => "Перенос товаров (Работа с товарами Маркетплейса)"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='1']/td[@data-col-seq='4']",
                            "value" => "Перенос товаров	"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='1']/td[@data-col-seq='5']",
                            "value" => "(не задано)"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='1']/td[@data-col-seq='6']",
                            "value" => "(не задано)"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='1']/td[@data-col-seq='7']",
                            "value" => "Нет"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='1']/td[@data-col-seq='8']",
                            "value" => "(не задано)"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='1']/td[@data-col-seq='9']",
                            "value" => "(не задано)"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='1']/td[@data-col-seq='10']",
                            "value" => "(не задано)"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='1']/td[@data-col-seq='11']",
                            "value" => "(не задано)"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='1']/td[@data-col-seq='12']",
                            "value" => "(не задано)"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='1']/td[@data-col-seq='13']",
                            "value" => "(не задано)"
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
                '4-dynagrid' => '1',
                'DynaGridConfig[theme]' => 'panel-danger',
                'deleteFlag' => '0',
                'visibleKeys' => '4e9f52f3,92daa30a,4c0599eb,4173aa0a,0c4a481f,3190e8ed,c23b3887,17888c9e,9052d997,450d4c53',
            ],
            "pageObjects" => [
                "canSee" => [
                    "Заголовки" => [
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='2']",
                            "value" => "ID задачи"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='3']",
                            "value" => "Заголовок"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='4']",
                            "value" => "Тип"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='5']",
                            "value" => "Дата последнего изменения статуса"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='6']",
                            "value" => "Дата регистрации задачи в системе"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='7']",
                            "value" => "Дата обработки задачи супервайзером"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='8']",
                            "value" => "Дата проверки задачи супервайзером"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='9']",
                            "value" => "Плановая дата начала работ"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='10']",
                            "value" => "Плановая дата завершения"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='11']",
                            "value" => "Фактическая дата начала работ"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='12']",
                            "value" => "Фактическая дата завершения"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='13']",
                            "value" => "Отчетный период КМ"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='14']",
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
                        [
                            "selector" => "//tbody/tr[@data-key='4']/td[@data-col-seq='2']",
                            "value" => "4"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='4']/td[@data-col-seq='3']",
                            "value" => "Добавление параметров/значений (Определяется типом задачи)"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='4']/td[@data-col-seq='4']",
                            "value" => "Добавление параметров/значений  "
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='4']/td[@data-col-seq='5']",
                            "value" => "2020-01-01 00:00:01"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='4']/td[@data-col-seq='6']",
                            "value" => "2020-01-01 00:00:00"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='4']/td[@data-col-seq='7']",
                            "value" => "2020-01-01 00:00:02"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='4']/td[@data-col-seq='8']",
                            "value" => "(не задано)"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='4']/td[@data-col-seq='9']",
                            "value" => "(не задано)"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='4']/td[@data-col-seq='10']",
                            "value" => "(не задано)"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='4']/td[@data-col-seq='11']",
                            "value" => "2020-01-01 00:00:03"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='4']/td[@data-col-seq='12']",
                            "value" => "(не задано)"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='4']/td[@data-col-seq='13']",
                            "value" => "(не задано)"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='4']/td[@data-col-seq='14']",
                            "value" => "2020-01-01 - 2020-03-31"
                        ],
                    ],
                ],
                "cantSee" => [
                    "Заявка 7" => [
                        [
                            "selector" => "//tbody/tr[@data-key='7']/td[@data-col-seq='2']",
                            "value" => "7"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='7']/td[@data-col-seq='3']",
                            "value" => "Добавление/изменение тегов (Определяется типом задачи)"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='7']/td[@data-col-seq='4']",
                            "value" => "Добавление/изменение тегов"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='7']/td[@data-col-seq='5']",
                            "value" => "Константин Куцан"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='7']/td[@data-col-seq='6']",
                            "value" => "Супервайзер Категоркин 15"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='7']/td[@data-col-seq='7']",
                            "value" => "Менеджер Контентович 1А"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='7']/td[@data-col-seq='8']",
                            "value" => "Выполнена"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='7']/td[@data-col-seq='9']",
                            "value" => "Определяется типом задачи"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='7']/td[@data-col-seq='10']",
                            "value" => "Работа с порталами, фат-меню, категориями"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='7']/td[@data-col-seq='11']",
                            "value" => "Авиабилеты"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='7']/td[@data-col-seq='12']",
                            "value" => "Euromart"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='7']/td[@data-col-seq='13']",
                            "value" => "Товар-новинка/эксклюзив (трафикообразующий)"
                        ],
                    ],
                    "Заявка 6" => [
                        [
                            "selector" => "//tbody/tr[@data-key='6']/td[@data-col-seq='2']",
                            "value" => "6"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='6']/td[@data-col-seq='3']",
                            "value" => "Добавление/изменение видео (Определяется типом задачи)"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='6']/td[@data-col-seq='4']",
                            "value" => "Добавление/изменение видео"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='6']/td[@data-col-seq='5']",
                            "value" => "Константин Куцан"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='6']/td[@data-col-seq='6']",
                            "value" => "Супервайзер Категоркин 18"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='6']/td[@data-col-seq='7']",
                            "value" => "Менеджер Контентович 1А"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='6']/td[@data-col-seq='8']",
                            "value" => "Частично выполнена"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='6']/td[@data-col-seq='9']",
                            "value" => "Определяется типом задачи"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='6']/td[@data-col-seq='10']",
                            "value" => "Работа с порталами, фат-меню, категориями"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='6']/td[@data-col-seq='11']",
                            "value" => "Авиабилеты"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='6']/td[@data-col-seq='12']",
                            "value" => "Euromart"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='6']/td[@data-col-seq='13']",
                            "value" => "Товар-новинка/эксклюзив (трафикообразующий)"
                        ],
                    ],
                    "Заявка 5" => [
                        [
                            "selector" => "//tbody/tr[@data-key='5']/td[@data-col-seq='2']",
                            "value" => "5"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='5']/td[@data-col-seq='3']",
                            "value" => "Изменение существующих параметров/значений (Определяется типом задачи)"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='5']/td[@data-col-seq='4']",
                            "value" => "Изменение существующих параметров/значений"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='5']/td[@data-col-seq='5']",
                            "value" => "Константин Куцан"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='5']/td[@data-col-seq='6']",
                            "value" => "Супервайзер Проектенко 17"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='5']/td[@data-col-seq='7']",
                            "value" => "Менеджер Контентович 1А"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='5']/td[@data-col-seq='8']",
                            "value" => "Ожидает"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='5']/td[@data-col-seq='9']",
                            "value" => "Определяется типом задачи"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='5']/td[@data-col-seq='10']",
                            "value" => "Работа с проектированием структур + фильтрами"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='5']/td[@data-col-seq='11']",
                            "value" => "Авиабилеты"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='5']/td[@data-col-seq='12']",
                            "value" => "Euromart"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='5']/td[@data-col-seq='13']",
                            "value" => "Товар-новинка/эксклюзив (трафикообразующий)"
                        ],
                    ],
                    "Заявка 3" => [
                        [
                            "selector" => "//tbody/tr[@data-key='3']/td[@data-col-seq='2']",
                            "value" => "3"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='3']/td[@data-col-seq='3']",
                            "value" => "Добавление нового портала/раздела фат-меню/категории товаров (Определяется типом задачи)"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='3']/td[@data-col-seq='4']",
                            "value" => "Добавление нового портала/раздела фат-меню/категории товаров"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='3']/td[@data-col-seq='5']",
                            "value" => "Константин Куцан"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='3']/td[@data-col-seq='6']",
                            "value" => "Супервайзер Категоркин 15   "
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='3']/td[@data-col-seq='7']",
                            "value" => "Менеджер Контентович 1А"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='3']/td[@data-col-seq='8']",
                            "value" => "Ожидает взятия в работу	    "
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='3']/td[@data-col-seq='9']",
                            "value" => "Определяется типом задачи"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='3']/td[@data-col-seq='10']",
                            "value" => "Работа с порталами, фат-меню, категориями"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='3']/td[@data-col-seq='11']",
                            "value" => "Авиабилеты"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='3']/td[@data-col-seq='12']",
                            "value" => "Euromart"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='3']/td[@data-col-seq='13']",
                            "value" => "Товар-новинка/эксклюзив (трафикообразующий)"
                        ],
                    ],
                    "Заявка 2" => [
                        [
                            "selector" => "//tbody/tr[@data-key='2']/td[@data-col-seq='2']",
                            "value" => "2"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='2']/td[@data-col-seq='3']",
                            "value" => "Заливка фото с фотостудии (Работа с товарами Розетки)"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='2']/td[@data-col-seq='4']",
                            "value" => "Заливка фото с фотостудии"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='2']/td[@data-col-seq='5']",
                            "value" => "Константин Куцан"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='2']/td[@data-col-seq='6']",
                            "value" => "Супервайзер Начальникович 1"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='2']/td[@data-col-seq='7']",
                            "value" => "(не задано)"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='2']/td[@data-col-seq='8']",
                            "value" => "На доработке"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='2']/td[@data-col-seq='9']",
                            "value" => "Работа с товарами Розетки"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='2']/td[@data-col-seq='10']",
                            "value" => "Работа с товарами Rozetka"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='2']/td[@data-col-seq='11']",
                            "value" => "Авиабилеты"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='2']/td[@data-col-seq='12']",
                            "value" => "Rozetka"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='2']/td[@data-col-seq='13']",
                            "value" => "Товар-новинка/эксклюзив (трафикообразующий)"
                        ],
                    ],
                    "Заявка 1" => [
                        [
                            "selector" => "//tbody/tr[@data-key='1']/td[@data-col-seq='2']",
                            "value" => "1"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='1']/td[@data-col-seq='3']",
                            "value" => "Перенос товаров (Работа с товарами Маркетплейса)"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='1']/td[@data-col-seq='4']",
                            "value" => "Перенос товаров	"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='1']/td[@data-col-seq='5']",
                            "value" => "(не задано)"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='1']/td[@data-col-seq='6']",
                            "value" => "(не задано)"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='1']/td[@data-col-seq='7']",
                            "value" => "Нет"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='1']/td[@data-col-seq='8']",
                            "value" => "(не задано)"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='1']/td[@data-col-seq='9']",
                            "value" => "(не задано)"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='1']/td[@data-col-seq='10']",
                            "value" => "(не задано)"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='1']/td[@data-col-seq='11']",
                            "value" => "(не задано)"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='1']/td[@data-col-seq='12']",
                            "value" => "(не задано)"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='1']/td[@data-col-seq='13']",
                            "value" => "(не задано)"
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
                '4-dynagrid' => '1',
                'DynaGridConfig[theme]' => 'panel-danger',
                'deleteFlag' => '0',
                'visibleKeys' => 'd4c95f87,9036328c,4a81e2dd,d0e05655,41125d67,5e00cc71,93b970aa,266c381f,0788d3f1,06b2967b,67b74568,ee469705',
            ],
            "pageObjects" => [
                "canSee" => [
                    "Заголовки" => [
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='2']",
                            "value" => "ID задачи"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='3']",
                            "value" => "Заголовок"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='4']",
                            "value" => "Тип"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='5']",
                            "value" => "Ручная загрузка"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='6']",
                            "value" => "Пакетная загрузка"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='7']",
                            "value" => "Виза супервайзера"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='8']",
                            "value" => "С фотосъемкой"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='9']",
                            "value" => "Точки входа"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='10']",
                            "value" => "Добавление графики"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='11']",
                            "value" => "С размерной сеткой"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='12']",
                            "value" => "С тегами к товарам"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='13']",
                            "value" => "Уценка"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='14']",
                            "value" => "Уценка 2"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='15']",
                            "value" => "На основе отзыва клиента на сайте"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='16']",
                            "value" => "Жалоба на товар продавца маркета"
                        ],
                    ],
                    "Заявка 5" => [
                        [
                            "selector" => "//tbody/tr[@data-key='5']/td[@data-col-seq='2']",
                            "value" => "5"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='5']/td[@data-col-seq='3']",
                            "value" => "Изменение существующих параметров/значений (Определяется типом задачи)"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='5']/td[@data-col-seq='4']",
                            "value" => "Изменение существующих параметров/значений"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='5']/td[@data-col-seq='5']",
                            "value" => "Нет"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='5']/td[@data-col-seq='6']",
                            "value" => "Да"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='5']/td[@data-col-seq='7']",
                            "value" => "Нет"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='5']/td[@data-col-seq='8']",
                            "value" => "Нет"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='5']/td[@data-col-seq='9']",
                            "value" => "Нет"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='5']/td[@data-col-seq='10']",
                            "value" => "Нет"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='5']/td[@data-col-seq='11']",
                            "value" => "Нет"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='5']/td[@data-col-seq='12']",
                            "value" => "Нет"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='5']/td[@data-col-seq='13']",
                            "value" => "Нет"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='5']/td[@data-col-seq='13']",
                            "value" => "Нет"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='5']/td[@data-col-seq='13']",
                            "value" => "Нет"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='5']/td[@data-col-seq='13']",
                            "value" => "Нет"
                        ],
                    ],
                ],
                "cantSee" => [
                    "Заявка 7" => [
                        [
                            "selector" => "//tbody/tr[@data-key='7']/td[@data-col-seq='2']",
                            "value" => "7"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='7']/td[@data-col-seq='3']",
                            "value" => "Добавление/изменение тегов (Определяется типом задачи)"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='7']/td[@data-col-seq='4']",
                            "value" => "Добавление/изменение тегов"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='7']/td[@data-col-seq='5']",
                            "value" => "Константин Куцан"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='7']/td[@data-col-seq='6']",
                            "value" => "Супервайзер Категоркин 15"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='7']/td[@data-col-seq='7']",
                            "value" => "Менеджер Контентович 1А"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='7']/td[@data-col-seq='8']",
                            "value" => "Выполнена"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='7']/td[@data-col-seq='9']",
                            "value" => "Определяется типом задачи"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='7']/td[@data-col-seq='10']",
                            "value" => "Работа с порталами, фат-меню, категориями"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='7']/td[@data-col-seq='11']",
                            "value" => "Авиабилеты"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='7']/td[@data-col-seq='12']",
                            "value" => "Euromart"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='7']/td[@data-col-seq='13']",
                            "value" => "Товар-новинка/эксклюзив (трафикообразующий)"
                        ],
                    ],
                    "Заявка 6" => [
                        [
                            "selector" => "//tbody/tr[@data-key='6']/td[@data-col-seq='2']",
                            "value" => "6"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='6']/td[@data-col-seq='3']",
                            "value" => "Добавление/изменение видео (Определяется типом задачи)"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='6']/td[@data-col-seq='4']",
                            "value" => "Добавление/изменение видео"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='6']/td[@data-col-seq='5']",
                            "value" => "Константин Куцан"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='6']/td[@data-col-seq='6']",
                            "value" => "Супервайзер Категоркин 18"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='6']/td[@data-col-seq='7']",
                            "value" => "Менеджер Контентович 1А"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='6']/td[@data-col-seq='8']",
                            "value" => "Частично выполнена"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='6']/td[@data-col-seq='9']",
                            "value" => "Определяется типом задачи"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='6']/td[@data-col-seq='10']",
                            "value" => "Работа с порталами, фат-меню, категориями"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='6']/td[@data-col-seq='11']",
                            "value" => "Авиабилеты"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='6']/td[@data-col-seq='12']",
                            "value" => "Euromart"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='6']/td[@data-col-seq='13']",
                            "value" => "Товар-новинка/эксклюзив (трафикообразующий)"
                        ],
                    ],
                    "Заявка 4" => [
                        [
                            "selector" => "//tbody/tr[@data-key='4']/td[@data-col-seq='2']",
                            "value" => "4"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='4']/td[@data-col-seq='3']",
                            "value" => "Добавление параметров/значений (Определяется типом задачи)"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='4']/td[@data-col-seq='4']",
                            "value" => "Добавление параметров/значений  "
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='4']/td[@data-col-seq='5']",
                            "value" => "Константин Куцан"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='4']/td[@data-col-seq='6']",
                            "value" => "Супервайзер Проектенко 14"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='4']/td[@data-col-seq='7']",
                            "value" => "Менеджер Контентович 1А"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='4']/td[@data-col-seq='8']",
                            "value" => "В работе"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='4']/td[@data-col-seq='9']",
                            "value" => "Определяется типом задачи"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='4']/td[@data-col-seq='10']",
                            "value" => "Работа с проектированием структур + фильтрами"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='4']/td[@data-col-seq='11']",
                            "value" => "Авиабилеты"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='4']/td[@data-col-seq='12']",
                            "value" => "Euromart"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='4']/td[@data-col-seq='13']",
                            "value" => "Товар-новинка/эксклюзив (трафикообразующий)"
                        ],
                    ],
                    "Заявка 3" => [
                        [
                            "selector" => "//tbody/tr[@data-key='3']/td[@data-col-seq='2']",
                            "value" => "3"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='3']/td[@data-col-seq='3']",
                            "value" => "Добавление нового портала/раздела фат-меню/категории товаров (Определяется типом задачи)"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='3']/td[@data-col-seq='4']",
                            "value" => "Добавление нового портала/раздела фат-меню/категории товаров"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='3']/td[@data-col-seq='5']",
                            "value" => "Константин Куцан"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='3']/td[@data-col-seq='6']",
                            "value" => "Супервайзер Категоркин 15   "
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='3']/td[@data-col-seq='7']",
                            "value" => "Менеджер Контентович 1А"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='3']/td[@data-col-seq='8']",
                            "value" => "Ожидает взятия в работу	    "
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='3']/td[@data-col-seq='9']",
                            "value" => "Определяется типом задачи"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='3']/td[@data-col-seq='10']",
                            "value" => "Работа с порталами, фат-меню, категориями"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='3']/td[@data-col-seq='11']",
                            "value" => "Авиабилеты"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='3']/td[@data-col-seq='12']",
                            "value" => "Euromart"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='3']/td[@data-col-seq='13']",
                            "value" => "Товар-новинка/эксклюзив (трафикообразующий)"
                        ],
                    ],
                    "Заявка 2" => [
                        [
                            "selector" => "//tbody/tr[@data-key='2']/td[@data-col-seq='2']",
                            "value" => "2"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='2']/td[@data-col-seq='3']",
                            "value" => "Заливка фото с фотостудии (Работа с товарами Розетки)"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='2']/td[@data-col-seq='4']",
                            "value" => "Заливка фото с фотостудии"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='2']/td[@data-col-seq='5']",
                            "value" => "Константин Куцан"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='2']/td[@data-col-seq='6']",
                            "value" => "Супервайзер Начальникович 1"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='2']/td[@data-col-seq='7']",
                            "value" => "(не задано)"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='2']/td[@data-col-seq='8']",
                            "value" => "На доработке"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='2']/td[@data-col-seq='9']",
                            "value" => "Работа с товарами Розетки"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='2']/td[@data-col-seq='10']",
                            "value" => "Работа с товарами Rozetka"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='2']/td[@data-col-seq='11']",
                            "value" => "Авиабилеты"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='2']/td[@data-col-seq='12']",
                            "value" => "Rozetka"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='2']/td[@data-col-seq='13']",
                            "value" => "Товар-новинка/эксклюзив (трафикообразующий)"
                        ],
                    ],
                    "Заявка 1" => [
                        [
                            "selector" => "//tbody/tr[@data-key='1']/td[@data-col-seq='2']",
                            "value" => "1"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='1']/td[@data-col-seq='3']",
                            "value" => "Перенос товаров (Работа с товарами Маркетплейса)"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='1']/td[@data-col-seq='4']",
                            "value" => "Перенос товаров	"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='1']/td[@data-col-seq='5']",
                            "value" => "(не задано)"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='1']/td[@data-col-seq='6']",
                            "value" => "(не задано)"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='1']/td[@data-col-seq='7']",
                            "value" => "Нет"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='1']/td[@data-col-seq='8']",
                            "value" => "(не задано)"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='1']/td[@data-col-seq='9']",
                            "value" => "(не задано)"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='1']/td[@data-col-seq='10']",
                            "value" => "(не задано)"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='1']/td[@data-col-seq='11']",
                            "value" => "(не задано)"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='1']/td[@data-col-seq='12']",
                            "value" => "(не задано)"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='1']/td[@data-col-seq='13']",
                            "value" => "(не задано)"
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
                '4-dynagrid' => '1',
                'DynaGridConfig[theme]' => 'panel-danger',
                'deleteFlag' => '0',
                'visibleKeys' => 'f4f49851,329730bf,100af6ba,f3809f80,2cbe2443,29902e9a,e7f76e0d,5800ee87,07546bc1,43f73178,4c698919,80fd31f5,817b5bc0',
            ],
            "pageObjects" => [
                "canSee" => [
                    "Заголовки" => [
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='2']",
                            "value" => "ID задачи"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='3']",
                            "value" => "Заголовок"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='4']",
                            "value" => "Тип"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='5']",
                            "value" => "Промо-описание"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='6']",
                            "value" => "Добавление товаров в новую категорию"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='7']",
                            "value" => "БУ, REF"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='8']",
                            "value" => "Обновление фото"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='9']",
                            "value" => "Обновление описания"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='10']",
                            "value" => "Обновление характеристик"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='11']",
                            "value" => "Автомодерация"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='12']",
                            "value" => "Добавление/обновление инструкций"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='13']",
                            "value" => "Стоп-бренды"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='14']",
                            "value" => "С палитрой"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='15']",
                            "value" => "Лоты"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='16']",
                            "value" => "С видео"
                        ],
                        [
                            "selector" => "//thead/tr/th[@data-col-seq='17']",
                            "value" => "По заявке с MobileCourier"
                        ],
                    ],
                    "Заявка 6" => [
                        [
                            "selector" => "//tbody/tr[@data-key='6']/td[@data-col-seq='2']",
                            "value" => "6"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='6']/td[@data-col-seq='3']",
                            "value" => "Добавление/изменение видео (Определяется типом задачи)"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='6']/td[@data-col-seq='4']",
                            "value" => "Добавление/изменение видео"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='6']/td[@data-col-seq='5']",
                            "value" => "Нет"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='6']/td[@data-col-seq='6']",
                            "value" => "Нет"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='6']/td[@data-col-seq='7']",
                            "value" => "Нет"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='6']/td[@data-col-seq='8']",
                            "value" => "Нет"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='6']/td[@data-col-seq='9']",
                            "value" => "Нет"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='6']/td[@data-col-seq='10']",
                            "value" => "Нет"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='6']/td[@data-col-seq='11']",
                            "value" => "Нет"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='6']/td[@data-col-seq='12']",
                            "value" => "Нет"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='6']/td[@data-col-seq='13']",
                            "value" => "Нет"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='6']/td[@data-col-seq='14']",
                            "value" => "Нет"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='6']/td[@data-col-seq='15']",
                            "value" => "Нет"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='6']/td[@data-col-seq='16']",
                            "value" => "Нет"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='6']/td[@data-col-seq='17']",
                            "value" => "Нет"
                        ],
                    ],
                    "Заявка 7" => [
                        [
                            "selector" => "//tbody/tr[@data-key='7']/td[@data-col-seq='2']",
                            "value" => "7"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='7']/td[@data-col-seq='3']",
                            "value" => "Добавление/изменение тегов (Определяется типом задачи)"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='7']/td[@data-col-seq='4']",
                            "value" => "Добавление/изменение тегов"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='7']/td[@data-col-seq='5']",
                            "value" => "Нет"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='7']/td[@data-col-seq='6']",
                            "value" => "Нет"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='7']/td[@data-col-seq='7']",
                            "value" => "Нет"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='7']/td[@data-col-seq='8']",
                            "value" => "Нет"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='7']/td[@data-col-seq='9']",
                            "value" => "Нет"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='7']/td[@data-col-seq='10']",
                            "value" => "Нет"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='7']/td[@data-col-seq='11']",
                            "value" => "Нет"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='7']/td[@data-col-seq='12']",
                            "value" => "Нет"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='7']/td[@data-col-seq='13']",
                            "value" => "Нет"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='6']/td[@data-col-seq='14']",
                            "value" => "Нет"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='6']/td[@data-col-seq='15']",
                            "value" => "Нет"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='6']/td[@data-col-seq='16']",
                            "value" => "Нет"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='6']/td[@data-col-seq='17']",
                            "value" => "Нет"
                        ],
                    ],
                ],
                "cantSee" => [
                    "Заявка 5" => [
                        [
                            "selector" => "//tbody/tr[@data-key='5']/td[@data-col-seq='2']",
                            "value" => "5"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='5']/td[@data-col-seq='3']",
                            "value" => "Изменение существующих параметров/значений (Определяется типом задачи)"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='5']/td[@data-col-seq='4']",
                            "value" => "Изменение существующих параметров/значений"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='5']/td[@data-col-seq='5']",
                            "value" => "Константин Куцан"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='5']/td[@data-col-seq='6']",
                            "value" => "Супервайзер Проектенко 17"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='5']/td[@data-col-seq='7']",
                            "value" => "Менеджер Контентович 1А"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='5']/td[@data-col-seq='8']",
                            "value" => "Ожидает"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='5']/td[@data-col-seq='9']",
                            "value" => "Определяется типом задачи"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='5']/td[@data-col-seq='10']",
                            "value" => "Работа с проектированием структур + фильтрами"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='5']/td[@data-col-seq='11']",
                            "value" => "Авиабилеты"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='5']/td[@data-col-seq='12']",
                            "value" => "Euromart"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='5']/td[@data-col-seq='13']",
                            "value" => "Товар-новинка/эксклюзив (трафикообразующий)"
                        ],
                    ],
                    "Заявка 4" => [
                        [
                            "selector" => "//tbody/tr[@data-key='4']/td[@data-col-seq='2']",
                            "value" => "4"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='4']/td[@data-col-seq='3']",
                            "value" => "Добавление параметров/значений (Определяется типом задачи)"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='4']/td[@data-col-seq='4']",
                            "value" => "Добавление параметров/значений  "
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='4']/td[@data-col-seq='5']",
                            "value" => "Константин Куцан"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='4']/td[@data-col-seq='6']",
                            "value" => "Супервайзер Проектенко 14"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='4']/td[@data-col-seq='7']",
                            "value" => "Менеджер Контентович 1А"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='4']/td[@data-col-seq='8']",
                            "value" => "В работе"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='4']/td[@data-col-seq='9']",
                            "value" => "Определяется типом задачи"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='4']/td[@data-col-seq='10']",
                            "value" => "Работа с проектированием структур + фильтрами"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='4']/td[@data-col-seq='11']",
                            "value" => "Авиабилеты"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='4']/td[@data-col-seq='12']",
                            "value" => "Euromart"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='4']/td[@data-col-seq='13']",
                            "value" => "Товар-новинка/эксклюзив (трафикообразующий)"
                        ],
                    ],
                    "Заявка 3" => [
                        [
                            "selector" => "//tbody/tr[@data-key='3']/td[@data-col-seq='2']",
                            "value" => "3"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='3']/td[@data-col-seq='3']",
                            "value" => "Добавление нового портала/раздела фат-меню/категории товаров (Определяется типом задачи)"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='3']/td[@data-col-seq='4']",
                            "value" => "Добавление нового портала/раздела фат-меню/категории товаров"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='3']/td[@data-col-seq='5']",
                            "value" => "Константин Куцан"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='3']/td[@data-col-seq='6']",
                            "value" => "Супервайзер Категоркин 15   "
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='3']/td[@data-col-seq='7']",
                            "value" => "Менеджер Контентович 1А"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='3']/td[@data-col-seq='8']",
                            "value" => "Ожидает взятия в работу	    "
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='3']/td[@data-col-seq='9']",
                            "value" => "Определяется типом задачи"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='3']/td[@data-col-seq='10']",
                            "value" => "Работа с порталами, фат-меню, категориями"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='3']/td[@data-col-seq='11']",
                            "value" => "Авиабилеты"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='3']/td[@data-col-seq='12']",
                            "value" => "Euromart"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='3']/td[@data-col-seq='13']",
                            "value" => "Товар-новинка/эксклюзив (трафикообразующий)"
                        ],
                    ],
                    "Заявка 2" => [
                        [
                            "selector" => "//tbody/tr[@data-key='2']/td[@data-col-seq='2']",
                            "value" => "2"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='2']/td[@data-col-seq='3']",
                            "value" => "Заливка фото с фотостудии (Работа с товарами Розетки)"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='2']/td[@data-col-seq='4']",
                            "value" => "Заливка фото с фотостудии"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='2']/td[@data-col-seq='5']",
                            "value" => "Константин Куцан"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='2']/td[@data-col-seq='6']",
                            "value" => "Супервайзер Начальникович 1"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='2']/td[@data-col-seq='7']",
                            "value" => "(не задано)"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='2']/td[@data-col-seq='8']",
                            "value" => "На доработке"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='2']/td[@data-col-seq='9']",
                            "value" => "Работа с товарами Розетки"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='2']/td[@data-col-seq='10']",
                            "value" => "Работа с товарами Rozetka"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='2']/td[@data-col-seq='11']",
                            "value" => "Авиабилеты"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='2']/td[@data-col-seq='12']",
                            "value" => "Rozetka"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='2']/td[@data-col-seq='13']",
                            "value" => "Товар-новинка/эксклюзив (трафикообразующий)"
                        ],
                    ],
                    "Заявка 1" => [
                        [
                            "selector" => "//tbody/tr[@data-key='1']/td[@data-col-seq='2']",
                            "value" => "1"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='1']/td[@data-col-seq='3']",
                            "value" => "Перенос товаров (Работа с товарами Маркетплейса)"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='1']/td[@data-col-seq='4']",
                            "value" => "Перенос товаров	"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='1']/td[@data-col-seq='5']",
                            "value" => "(не задано)"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='1']/td[@data-col-seq='6']",
                            "value" => "(не задано)"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='1']/td[@data-col-seq='7']",
                            "value" => "Нет"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='1']/td[@data-col-seq='8']",
                            "value" => "(не задано)"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='1']/td[@data-col-seq='9']",
                            "value" => "(не задано)"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='1']/td[@data-col-seq='10']",
                            "value" => "(не задано)"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='1']/td[@data-col-seq='11']",
                            "value" => "(не задано)"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='1']/td[@data-col-seq='12']",
                            "value" => "(не задано)"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='1']/td[@data-col-seq='13']",
                            "value" => "(не задано)"
                        ],
                    ],
                ]
            ]
        ]
    ],

    'case8' => [
        'setting' => [
            'description' => 'Заблокированные значения в таблице',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case8.php',
        'provider_data' => [
            "url" => '',
            'requestBody' => [
                '4-dynagrid' => '1',
                'DynaGridConfig[theme]' => 'panel-danger',
                'deleteFlag' => '0',
                'visibleKeys' => '6f4cf3ff,195c6167,7100d06f,9f3bab20,3a15b8f6,12fe4397,132cbbd2',
            ],
            "pageObjects" => [
                "canSee" => [
                    "Заявка 1" => [
                        [
                            "selector" => "//tbody/tr[@data-key='1']/td[@data-col-seq='2']",
                            "value" => "1"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='1']/td[@data-col-seq='3']",
                            "value" => "Добавление/изменение информации в существующих товарах (Работа с товарами Розетки)"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='1']/td[@data-col-seq='4']",
                            "value" => "Добавление/изменение информации в существующих товарах"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='1']/td[@data-col-seq='5']",
                            "value" => "Исправление критичной ошибки"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='1']/td[@data-col-seq='6']",
                            "value" => "Нинада"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='1']/td[@data-col-seq='7']",
                            "value" => "Более 5 уточнений"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='1']/td[@data-col-seq='8']",
                            "value" => "Фото предоставлены фотостудией"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='1']/td[@data-col-seq='9']",
                            "value" => "Характеристики добавлены с обновлением фото/описания"
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='1']/td[@data-col-seq='10']",
                            "value" => "Не предоставлены продактом. Выполнен поиск."
                        ],
                        [
                            "selector" => "//tbody/tr[@data-key='1']/td[@data-col-seq='11']",
                            "value" => "Английский"
                        ],
                    ],
                ],
                "cantSee" => []
            ]
        ]
    ],
];
