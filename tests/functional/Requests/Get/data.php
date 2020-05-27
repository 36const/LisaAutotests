<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Вкладка Все',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "requestParameters" => [],
            "pageObjects" => [
                "canSee" => [
                    [
                        "selector" => "//tr[@data-key='7']/td[@data-col-seq='2']",
                        "value" => "7 "
                    ],
                    [
                        "selector" => "//tr[@data-key='7']/td[@data-col-seq='3']",
                        "value" => "Добавление/изменение тегов (Определяется типом задачи) "
                    ],
                    [
                        "selector" => "//tr[@data-key='7']/td[@data-col-seq='4']",
                        "value" => "Добавление/изменение тегов	"
                    ],
                    [
                        "selector" => "//tr[@data-key='7']/td[@data-col-seq='5']",
                        "value" => "Константин Куцан"
                    ],
                    [
                        "selector" => "//tr[@data-key='7']/td[@data-col-seq='6']",
                        "value" => "Супервайзер Категоркин 15"
                    ],
                    [
                        "selector" => "//tr[@data-key='7']/td[@data-col-seq='7']",
                        "value" => "Менеджер Контентович 1А"
                    ],
                    [
                        "selector" => "//tr[@data-key='7']/td[@data-col-seq='8']",
                        "value" => "Выполнена"
                    ],
                    [
                        "selector" => "//tr[@data-key='7']/td[@data-col-seq='9']",
                        "value" => "Нет"
                    ],
                    [
                        "selector" => "//tr[@data-key='7']/td[@data-col-seq='10']",
                        "value" => "10"
                    ],

                    [
                        "selector" => "//tr[@data-key='6']/td[@data-col-seq='2']",
                        "value" => "6 "
                    ],
                    [
                        "selector" => "//tr[@data-key='6']/td[@data-col-seq='3']",
                        "value" => "Добавление/изменение видео (Определяется типом задачи)"
                    ],
                    [
                        "selector" => "//tr[@data-key='6']/td[@data-col-seq='4']",
                        "value" => "Добавление/изменение видео"
                    ],
                    [
                        "selector" => "//tr[@data-key='6']/td[@data-col-seq='5']",
                        "value" => "Константин Куцан"
                    ],
                    [
                        "selector" => "//tr[@data-key='6']/td[@data-col-seq='6']",
                        "value" => "Супервайзер Категоркин 18"
                    ],
                    [
                        "selector" => "//tr[@data-key='6']/td[@data-col-seq='7']",
                        "value" => "Менеджер Контентович 1А"
                    ],
                    [
                        "selector" => "//tr[@data-key='6']/td[@data-col-seq='8']",
                        "value" => "Частично выполнена"
                    ],
                    [
                        "selector" => "//tr[@data-key='6']/td[@data-col-seq='9']",
                        "value" => "Нет"
                    ],
                    [
                        "selector" => "//tr[@data-key='6']/td[@data-col-seq='10']",
                        "value" => "10"
                    ],

                    [
                        "selector" => "//tr[@data-key='5']/td[@data-col-seq='2']",
                        "value" => "5 "
                    ],
                    [
                        "selector" => "//tr[@data-key='5']/td[@data-col-seq='3']",
                        "value" => "Изменение существующих параметров/значений (Определяется типом задачи)"
                    ],
                    [
                        "selector" => "//tr[@data-key='5']/td[@data-col-seq='4']",
                        "value" => "Изменение существующих параметров/значений	"
                    ],
                    [
                        "selector" => "//tr[@data-key='5']/td[@data-col-seq='5']",
                        "value" => "Константин Куцан"
                    ],
                    [
                        "selector" => "//tr[@data-key='5']/td[@data-col-seq='6']",
                        "value" => "Супервайзер Проектенко 17"
                    ],
                    [
                        "selector" => "//tr[@data-key='5']/td[@data-col-seq='7']",
                        "value" => "Менеджер Контентович 1А"
                    ],
                    [
                        "selector" => "//tr[@data-key='5']/td[@data-col-seq='8']",
                        "value" => "Ожидает"
                    ],
                    [
                        "selector" => "//tr[@data-key='5']/td[@data-col-seq='9']",
                        "value" => "Нет"
                    ],
                    [
                        "selector" => "//tr[@data-key='5']/td[@data-col-seq='10']",
                        "value" => "10"
                    ],

                    [
                        "selector" => "//tr[@data-key='4']/td[@data-col-seq='2']",
                        "value" => "4 "
                    ],
                    [
                        "selector" => "//tr[@data-key='4']/td[@data-col-seq='3']",
                        "value" => "Добавление параметров/значений (Определяется типом задачи)"
                    ],
                    [
                        "selector" => "//tr[@data-key='4']/td[@data-col-seq='4']",
                        "value" => "Добавление параметров/значений"
                    ],
                    [
                        "selector" => "//tr[@data-key='4']/td[@data-col-seq='5']",
                        "value" => "Константин Куцан"
                    ],
                    [
                        "selector" => "//tr[@data-key='4']/td[@data-col-seq='6']",
                        "value" => "Супервайзер Проектенко 14"
                    ],
                    [
                        "selector" => "//tr[@data-key='4']/td[@data-col-seq='7']",
                        "value" => "Менеджер Контентович 1А"
                    ],
                    [
                        "selector" => "//tr[@data-key='4']/td[@data-col-seq='8']",
                        "value" => "В работе"
                    ],
                    [
                        "selector" => "//tr[@data-key='4']/td[@data-col-seq='9']",
                        "value" => "Нет"
                    ],
                    [
                        "selector" => "//tr[@data-key='4']/td[@data-col-seq='10']",
                        "value" => "10"
                    ],

                    [
                        "selector" => "//tr[@data-key='3']/td[@data-col-seq='2']",
                        "value" => "3 "
                    ],
                    [
                        "selector" => "//tr[@data-key='3']/td[@data-col-seq='3']",
                        "value" => "Добавление нового портала/раздела фат-меню/категории товаров (Определяется типом задачи)"
                    ],
                    [
                        "selector" => "//tr[@data-key='3']/td[@data-col-seq='4']",
                        "value" => "Добавление нового портала/раздела фат-меню/категории товаров"
                    ],
                    [
                        "selector" => "//tr[@data-key='3']/td[@data-col-seq='5']",
                        "value" => "Константин Куцан"
                    ],
                    [
                        "selector" => "//tr[@data-key='3']/td[@data-col-seq='6']",
                        "value" => "Супервайзер Категоркин 15"
                    ],
                    [
                        "selector" => "//tr[@data-key='3']/td[@data-col-seq='7']",
                        "value" => "Менеджер Контентович 1А"
                    ],
                    [
                        "selector" => "//tr[@data-key='3']/td[@data-col-seq='8']",
                        "value" => "Ожидает взятия в работу	"
                    ],
                    [
                        "selector" => "//tr[@data-key='3']/td[@data-col-seq='9']",
                        "value" => "Нет"
                    ],
                    [
                        "selector" => "//tr[@data-key='3']/td[@data-col-seq='10']",
                        "value" => "10"
                    ],

                    [
                        "selector" => "//tr[@data-key='2']/td[@data-col-seq='2']",
                        "value" => "2 "
                    ],
                    [
                        "selector" => "//tr[@data-key='2']/td[@data-col-seq='3']",
                        "value" => "Заливка фото с фотостудии (Работа с товарами Розетки)"
                    ],
                    [
                        "selector" => "//tr[@data-key='2']/td[@data-col-seq='4']",
                        "value" => "Заливка фото с фотостудии"
                    ],
                    [
                        "selector" => "//tr[@data-key='2']/td[@data-col-seq='5']",
                        "value" => "Константин Куцан"
                    ],
                    [
                        "selector" => "//tr[@data-key='2']/td[@data-col-seq='6']",
                        "value" => "Супервайзер Начальникович 1	"
                    ],
                    [
                        "selector" => "//tr[@data-key='2']/td[@data-col-seq='7']",
                        "value" => "(не задано)"
                    ],
                    [
                        "selector" => "//tr[@data-key='2']/td[@data-col-seq='8']",
                        "value" => "Требует изменений"
                    ],
                    [
                        "selector" => "//tr[@data-key='2']/td[@data-col-seq='9']",
                        "value" => "Нет"
                    ],
                    [
                        "selector" => "//tr[@data-key='2']/td[@data-col-seq='10']",
                        "value" => "10"
                    ],

                    [
                        "selector" => "//tr[@data-key='1']/td[@data-col-seq='2']",
                        "value" => "1 "
                    ],
                    [
                        "selector" => "//tr[@data-key='1']/td[@data-col-seq='3']",
                        "value" => "Перенос товаров (Работа с товарами Маркетплейса)"
                    ],
                    [
                        "selector" => "//tr[@data-key='1']/td[@data-col-seq='4']",
                        "value" => "Перенос товаров"
                    ],
                    [
                        "selector" => "//tr[@data-key='1']/td[@data-col-seq='5']",
                        "value" => "Константин Куцан"
                    ],
                    [
                        "selector" => "//tr[@data-key='1']/td[@data-col-seq='6']",
                        "value" => "Супервайзер Начальникович 1	"
                    ],
                    [
                        "selector" => "//tr[@data-key='1']/td[@data-col-seq='7']",
                        "value" => "(не задано)"
                    ],
                    [
                        "selector" => "//tr[@data-key='1']/td[@data-col-seq='8']",
                        "value" => "Взята на проверку"
                    ],
                    [
                        "selector" => "//tr[@data-key='1']/td[@data-col-seq='9']",
                        "value" => "Нет"
                    ],
                    [
                        "selector" => "//tr[@data-key='1']/td[@data-col-seq='10']",
                        "value" => "10"
                    ],
                ],
                "cantSee" => []
            ]
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Вкладка Все, статус 2 и 3',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "requestParameters" => [
                'RequestSearch[id]' => '',
                'RequestSearch[subject]' => '',
                'RequestSearch[type_id]' => '',
                'RequestSearch[author_id]' => '',
                'RequestSearch[supervisor_id]' => '',
                'RequestSearch[manager_id]' => '',
                'RequestSearch[status]' => '',
                'RequestSearch[status]' => [2, 3],
                'RequestSearch[awaiting_correction]' => '',
                'RequestSearch[amount_to_work]' => '',
            ],
            "pageObjects" => [
                "canSee" => [
                    [
                        "selector" => "//tr[@data-key='2']/td[@data-col-seq='2']",
                        "value" => "2 "
                    ],
                    [
                        "selector" => "//tr[@data-key='2']/td[@data-col-seq='3']",
                        "value" => "Заливка фото с фотостудии (Работа с товарами Розетки)"
                    ],
                    [
                        "selector" => "//tr[@data-key='2']/td[@data-col-seq='4']",
                        "value" => "Заливка фото с фотостудии"
                    ],
                    [
                        "selector" => "//tr[@data-key='2']/td[@data-col-seq='5']",
                        "value" => "Константин Куцан"
                    ],
                    [
                        "selector" => "//tr[@data-key='2']/td[@data-col-seq='6']",
                        "value" => "Супервайзер Начальникович 1	"
                    ],
                    [
                        "selector" => "//tr[@data-key='2']/td[@data-col-seq='7']",
                        "value" => "(не задано)"
                    ],
                    [
                        "selector" => "//tr[@data-key='2']/td[@data-col-seq='8']",
                        "value" => "Требует изменений"
                    ],
                    [
                        "selector" => "//tr[@data-key='2']/td[@data-col-seq='9']",
                        "value" => "Нет"
                    ],
                    [
                        "selector" => "//tr[@data-key='2']/td[@data-col-seq='10']",
                        "value" => "10"
                    ],

                    [
                        "selector" => "//tr[@data-key='1']/td[@data-col-seq='2']",
                        "value" => "1 "
                    ],
                    [
                        "selector" => "//tr[@data-key='1']/td[@data-col-seq='3']",
                        "value" => "Перенос товаров (Работа с товарами Маркетплейса)"
                    ],
                    [
                        "selector" => "//tr[@data-key='1']/td[@data-col-seq='4']",
                        "value" => "Перенос товаров"
                    ],
                    [
                        "selector" => "//tr[@data-key='1']/td[@data-col-seq='5']",
                        "value" => "Константин Куцан"
                    ],
                    [
                        "selector" => "//tr[@data-key='1']/td[@data-col-seq='6']",
                        "value" => "Супервайзер Начальникович 1	"
                    ],
                    [
                        "selector" => "//tr[@data-key='1']/td[@data-col-seq='7']",
                        "value" => "(не задано)"
                    ],
                    [
                        "selector" => "//tr[@data-key='1']/td[@data-col-seq='8']",
                        "value" => "Взята на проверку"
                    ],
                    [
                        "selector" => "//tr[@data-key='1']/td[@data-col-seq='9']",
                        "value" => "Нет"
                    ],
                    [
                        "selector" => "//tr[@data-key='1']/td[@data-col-seq='10']",
                        "value" => "10"
                    ],
                ],
                "cantSee" => [
                    [
                        "selector" => "//tr[@data-key='7']/td[@data-col-seq='2']",
                        "value" => "7 "
                    ],
                    [
                        "selector" => "//tr[@data-key='7']/td[@data-col-seq='3']",
                        "value" => "Добавление/изменение тегов (Определяется типом задачи) "
                    ],
                    [
                        "selector" => "//tr[@data-key='7']/td[@data-col-seq='4']",
                        "value" => "Добавление/изменение тегов	"
                    ],
                    [
                        "selector" => "//tr[@data-key='7']/td[@data-col-seq='5']",
                        "value" => "Константин Куцан"
                    ],
                    [
                        "selector" => "//tr[@data-key='7']/td[@data-col-seq='6']",
                        "value" => "Супервайзер Категоркин 15"
                    ],
                    [
                        "selector" => "//tr[@data-key='7']/td[@data-col-seq='7']",
                        "value" => "Менеджер Контентович 1А"
                    ],
                    [
                        "selector" => "//tr[@data-key='7']/td[@data-col-seq='8']",
                        "value" => "Выполнена"
                    ],
                    [
                        "selector" => "//tr[@data-key='7']/td[@data-col-seq='9']",
                        "value" => "Нет"
                    ],
                    [
                        "selector" => "//tr[@data-key='7']/td[@data-col-seq='10']",
                        "value" => "10"
                    ],

                    [
                        "selector" => "//tr[@data-key='6']/td[@data-col-seq='2']",
                        "value" => "6 "
                    ],
                    [
                        "selector" => "//tr[@data-key='6']/td[@data-col-seq='3']",
                        "value" => "Добавление/изменение видео (Определяется типом задачи)"
                    ],
                    [
                        "selector" => "//tr[@data-key='6']/td[@data-col-seq='4']",
                        "value" => "Добавление/изменение видео"
                    ],
                    [
                        "selector" => "//tr[@data-key='6']/td[@data-col-seq='5']",
                        "value" => "Константин Куцан"
                    ],
                    [
                        "selector" => "//tr[@data-key='6']/td[@data-col-seq='6']",
                        "value" => "Супервайзер Категоркин 18"
                    ],
                    [
                        "selector" => "//tr[@data-key='6']/td[@data-col-seq='7']",
                        "value" => "Менеджер Контентович 1А"
                    ],
                    [
                        "selector" => "//tr[@data-key='6']/td[@data-col-seq='8']",
                        "value" => "Частично выполнена"
                    ],
                    [
                        "selector" => "//tr[@data-key='6']/td[@data-col-seq='9']",
                        "value" => "Нет"
                    ],
                    [
                        "selector" => "//tr[@data-key='6']/td[@data-col-seq='10']",
                        "value" => "10"
                    ],

                    [
                        "selector" => "//tr[@data-key='5']/td[@data-col-seq='2']",
                        "value" => "5 "
                    ],
                    [
                        "selector" => "//tr[@data-key='5']/td[@data-col-seq='3']",
                        "value" => "Изменение существующих параметров/значений (Определяется типом задачи)"
                    ],
                    [
                        "selector" => "//tr[@data-key='5']/td[@data-col-seq='4']",
                        "value" => "Изменение существующих параметров/значений	"
                    ],
                    [
                        "selector" => "//tr[@data-key='5']/td[@data-col-seq='5']",
                        "value" => "Константин Куцан"
                    ],
                    [
                        "selector" => "//tr[@data-key='5']/td[@data-col-seq='6']",
                        "value" => "Супервайзер Проектенко 17"
                    ],
                    [
                        "selector" => "//tr[@data-key='5']/td[@data-col-seq='7']",
                        "value" => "Менеджер Контентович 1А"
                    ],
                    [
                        "selector" => "//tr[@data-key='5']/td[@data-col-seq='8']",
                        "value" => "Ожидает"
                    ],
                    [
                        "selector" => "//tr[@data-key='5']/td[@data-col-seq='9']",
                        "value" => "Нет"
                    ],
                    [
                        "selector" => "//tr[@data-key='5']/td[@data-col-seq='10']",
                        "value" => "10"
                    ],

                    [
                        "selector" => "//tr[@data-key='4']/td[@data-col-seq='2']",
                        "value" => "4 "
                    ],
                    [
                        "selector" => "//tr[@data-key='4']/td[@data-col-seq='3']",
                        "value" => "Добавление параметров/значений (Определяется типом задачи)"
                    ],
                    [
                        "selector" => "//tr[@data-key='4']/td[@data-col-seq='4']",
                        "value" => "Добавление параметров/значений"
                    ],
                    [
                        "selector" => "//tr[@data-key='4']/td[@data-col-seq='5']",
                        "value" => "Константин Куцан"
                    ],
                    [
                        "selector" => "//tr[@data-key='4']/td[@data-col-seq='6']",
                        "value" => "Супервайзер Проектенко 14"
                    ],
                    [
                        "selector" => "//tr[@data-key='4']/td[@data-col-seq='7']",
                        "value" => "Менеджер Контентович 1А"
                    ],
                    [
                        "selector" => "//tr[@data-key='4']/td[@data-col-seq='8']",
                        "value" => "В работе"
                    ],
                    [
                        "selector" => "//tr[@data-key='4']/td[@data-col-seq='9']",
                        "value" => "Нет"
                    ],
                    [
                        "selector" => "//tr[@data-key='4']/td[@data-col-seq='10']",
                        "value" => "10"
                    ],

                    [
                        "selector" => "//tr[@data-key='3']/td[@data-col-seq='2']",
                        "value" => "3 "
                    ],
                    [
                        "selector" => "//tr[@data-key='3']/td[@data-col-seq='3']",
                        "value" => "Добавление нового портала/раздела фат-меню/категории товаров (Определяется типом задачи)"
                    ],
                    [
                        "selector" => "//tr[@data-key='3']/td[@data-col-seq='4']",
                        "value" => "Добавление нового портала/раздела фат-меню/категории товаров"
                    ],
                    [
                        "selector" => "//tr[@data-key='3']/td[@data-col-seq='5']",
                        "value" => "Константин Куцан"
                    ],
                    [
                        "selector" => "//tr[@data-key='3']/td[@data-col-seq='6']",
                        "value" => "Супервайзер Категоркин 15"
                    ],
                    [
                        "selector" => "//tr[@data-key='3']/td[@data-col-seq='7']",
                        "value" => "Менеджер Контентович 1А"
                    ],
                    [
                        "selector" => "//tr[@data-key='3']/td[@data-col-seq='8']",
                        "value" => "Ожидает взятия в работу	"
                    ],
                    [
                        "selector" => "//tr[@data-key='3']/td[@data-col-seq='9']",
                        "value" => "Нет"
                    ],
                    [
                        "selector" => "//tr[@data-key='3']/td[@data-col-seq='10']",
                        "value" => "10"
                    ],

                ]
            ]
        ]
    ],

];
