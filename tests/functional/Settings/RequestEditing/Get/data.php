<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Страница прав редактирования полей заявок',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '',
            "pageObjects" => [
                "canSee" => [
                    "Заголовки" => [
                        [
                            "selector" => "//thead/tr/th[1]",
                            "value" => "ID"
                        ],
                        [
                            "selector" => "//thead/tr/th[2]",
                            "value" => "Поле заявки"
                        ],
                        [
                            "selector" => "//thead/tr/th[3]",
                            "value" => "Статус заявки"
                        ],
                        [
                            "selector" => "//thead/tr/th[4]",
                            "value" => "Права редактирования"
                        ],
                        [
                            "selector" => "//thead/tr/th[@class='action-column']",
                        ],
                    ],
                    "Создатель 1" => [
                        [
                            "selector" => "//tbody/tr[1]/td[1]",
                            "value" => "1"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[2]",
                            "value" => "Создатель заявки"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[3]",
                            "value" => "Новая"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[4]",
                            "value" => "Никто не может редактировать это поле"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[5]/a[@href='/bpm/request-editing/update?id=1']",
                        ],
                    ],
                    "Создатель 2" => [
                        [
                            "selector" => "//tbody/tr[2]/td[1]",
                            "value" => "2"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[2]",
                            "value" => "Создатель заявки"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[3]",
                            "value" => "Готова для распределения"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[4]",
                            "value" => "Никто не может редактировать это поле"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[5]/a[@href='/bpm/request-editing/update?id=2']",
                        ],
                    ],
                    "Создатель 3" => [
                        [
                            "selector" => "//tbody/tr[3]/td[1]",
                            "value" => "3"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[2]",
                            "value" => "Создатель заявки"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[3]",
                            "value" => "На доработке"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[4]",
                            "value" => "Никто не может редактировать это поле"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[5]/a[@href='/bpm/request-editing/update?id=3']",
                        ],
                    ],
                    "Создатель 4" => [
                        [
                            "selector" => "//tbody/tr[10]/td[1]",
                            "value" => "10"
                        ],
                        [
                            "selector" => "//tbody/tr[10]/td[2]",
                            "value" => "Создатель заявки"
                        ],
                        [
                            "selector" => "//tbody/tr[10]/td[3]",
                            "value" => "Отменена"
                        ],
                        [
                            "selector" => "//tbody/tr[10]/td[4]",
                            "value" => "Никто не может редактировать это поле"
                        ],
                        [
                            "selector" => "//tbody/tr[10]/td[5]/a[@href='/bpm/request-editing/update?id=10']",
                        ],
                    ],
                    "Создатель 5" => [
                        [
                            "selector" => "//tbody/tr[4]/td[1]",
                            "value" => "4"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[2]",
                            "value" => "Создатель заявки"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[3]",
                            "value" => "Ожидает взятия в работу"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[4]",
                            "value" => "Никто не может редактировать это поле"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[5]/a[@href='/bpm/request-editing/update?id=4']",
                        ],
                    ],
                    "Создатель 6" => [
                        [
                            "selector" => "//tbody/tr[5]/td[1]",
                            "value" => "5"
                        ],
                        [
                            "selector" => "//tbody/tr[5]/td[2]",
                            "value" => "Создатель заявки"
                        ],
                        [
                            "selector" => "//tbody/tr[5]/td[3]",
                            "value" => "В работе"
                        ],
                        [
                            "selector" => "//tbody/tr[5]/td[4]",
                            "value" => "Никто не может редактировать это поле"
                        ],
                        [
                            "selector" => "//tbody/tr[5]/td[5]/a[@href='/bpm/request-editing/update?id=5']",
                        ],
                    ],
                    "Создатель 7" => [
                        [
                            "selector" => "//tbody/tr[6]/td[1]",
                            "value" => "6"
                        ],
                        [
                            "selector" => "//tbody/tr[6]/td[2]",
                            "value" => "Создатель заявки"
                        ],
                        [
                            "selector" => "//tbody/tr[6]/td[3]",
                            "value" => "Ожидает"
                        ],
                        [
                            "selector" => "//tbody/tr[6]/td[4]",
                            "value" => "Никто не может редактировать это поле"
                        ],
                        [
                            "selector" => "//tbody/tr[6]/td[5]/a[@href='/bpm/request-editing/update?id=6']",
                        ],
                    ],
                    "Создатель 8" => [
                        [
                            "selector" => "//tbody/tr[7]/td[1]",
                            "value" => "7"
                        ],
                        [
                            "selector" => "//tbody/tr[7]/td[2]",
                            "value" => "Создатель заявки"
                        ],
                        [
                            "selector" => "//tbody/tr[7]/td[3]",
                            "value" => "Частично выполнена"
                        ],
                        [
                            "selector" => "//tbody/tr[7]/td[4]",
                            "value" => "Никто не может редактировать это поле"
                        ],
                        [
                            "selector" => "//tbody/tr[7]/td[5]/a[@href='/bpm/request-editing/update?id=7']",
                        ],
                    ],
                    "Создатель 9" => [
                        [
                            "selector" => "//tbody/tr[8]/td[1]",
                            "value" => "8"
                        ],
                        [
                            "selector" => "//tbody/tr[8]/td[2]",
                            "value" => "Создатель заявки"
                        ],
                        [
                            "selector" => "//tbody/tr[8]/td[3]",
                            "value" => "Выполнена"
                        ],
                        [
                            "selector" => "//tbody/tr[8]/td[4]",
                            "value" => "Никто не может редактировать это поле"
                        ],
                        [
                            "selector" => "//tbody/tr[8]/td[5]/a[@href='/bpm/request-editing/update?id=8']",
                        ],
                    ],
                    "Создатель 11" => [
                        [
                            "selector" => "//tbody/tr[9]/td[1]",
                            "value" => "9"
                        ],
                        [
                            "selector" => "//tbody/tr[9]/td[2]",
                            "value" => "Создатель заявки"
                        ],
                        [
                            "selector" => "//tbody/tr[9]/td[3]",
                            "value" => "Закрыта"
                        ],
                        [
                            "selector" => "//tbody/tr[9]/td[4]",
                            "value" => "Никто не может редактировать это поле"
                        ],
                        [
                            "selector" => "//tbody/tr[9]/td[5]/a[@href='/bpm/request-editing/update?id=9']",
                        ],
                    ],
                    "Заголовок 1" => [
                        [
                            "selector" => "//tbody/tr[11]/td[1]",
                            "value" => "11"
                        ],
                        [
                            "selector" => "//tbody/tr[11]/td[2]",
                            "value" => "Заголовок"
                        ],
                        [
                            "selector" => "//tbody/tr[11]/td[3]",
                            "value" => "Новая"
                        ],
                        [
                            "selector" => "//tbody/tr[11]/td[4]",
                            "value" => "Автор заявки, Супервайзер, Руководитель супервайзеров, Администратор"
                        ],
                        [
                            "selector" => "//tbody/tr[11]/td[5]/a[@href='/bpm/request-editing/update?id=11']",
                        ],
                    ],
                    "Заголовок 2" => [
                        [
                            "selector" => "//tbody/tr[12]/td[1]",
                            "value" => "12"
                        ],
                        [
                            "selector" => "//tbody/tr[12]/td[2]",
                            "value" => "Заголовок"
                        ],
                        [
                            "selector" => "//tbody/tr[12]/td[3]",
                            "value" => "Готова для распределения"
                        ],
                        [
                            "selector" => "//tbody/tr[12]/td[4]",
                            "value" => "Супервайзер, Руководитель супервайзеров, Администратор"
                        ],
                        [
                            "selector" => "//tbody/tr[12]/td[5]/a[@href='/bpm/request-editing/update?id=12']",
                        ],
                    ],
                    "Заголовок 3" => [
                        [
                            "selector" => "//tbody/tr[13]/td[1]",
                            "value" => "13"
                        ],
                        [
                            "selector" => "//tbody/tr[13]/td[2]",
                            "value" => "Заголовок"
                        ],
                        [
                            "selector" => "//tbody/tr[13]/td[3]",
                            "value" => "На доработке"
                        ],
                        [
                            "selector" => "//tbody/tr[13]/td[4]",
                            "value" => "Автор заявки, Супервайзер, Руководитель супервайзеров, Администратор"
                        ],
                        [
                            "selector" => "//tbody/tr[13]/td[5]/a[@href='/bpm/request-editing/update?id=13']",
                        ],
                    ],
                    "Заголовок 4" => [
                        [
                            "selector" => "//tbody/tr[20]/td[1]",
                            "value" => "20"
                        ],
                        [
                            "selector" => "//tbody/tr[20]/td[2]",
                            "value" => "Заголовок"
                        ],
                        [
                            "selector" => "//tbody/tr[20]/td[3]",
                            "value" => "Отменена"
                        ],
                        [
                            "selector" => "//tbody/tr[20]/td[4]",
                            "value" => "Руководитель супервайзеров, Администратор"
                        ],
                        [
                            "selector" => "//tbody/tr[20]/td[5]/a[@href='/bpm/request-editing/update?id=20']",
                        ],
                    ],
                    "Заголовок 5" => [
                        [
                            "selector" => "//tbody/tr[14]/td[1]",
                            "value" => "14"
                        ],
                        [
                            "selector" => "//tbody/tr[14]/td[2]",
                            "value" => "Заголовок"
                        ],
                        [
                            "selector" => "//tbody/tr[14]/td[3]",
                            "value" => "Ожидает взятия в работу"
                        ],
                        [
                            "selector" => "//tbody/tr[14]/td[4]",
                            "value" => "Супервайзер, Руководитель супервайзеров, Администратор"
                        ],
                        [
                            "selector" => "//tbody/tr[14]/td[5]/a[@href='/bpm/request-editing/update?id=14']",
                        ],
                    ],
                    "Заголовок 6" => [
                        [
                            "selector" => "//tbody/tr[15]/td[1]",
                            "value" => "15"
                        ],
                        [
                            "selector" => "//tbody/tr[15]/td[2]",
                            "value" => "Заголовок"
                        ],
                        [
                            "selector" => "//tbody/tr[15]/td[3]",
                            "value" => "В работе"
                        ],
                        [
                            "selector" => "//tbody/tr[15]/td[4]",
                            "value" => "Супервайзер, Руководитель супервайзеров, Администратор"
                        ],
                        [
                            "selector" => "//tbody/tr[15]/td[5]/a[@href='/bpm/request-editing/update?id=15']",
                        ],
                    ],
                    "Заголовок 7" => [
                        [
                            "selector" => "//tbody/tr[16]/td[1]",
                            "value" => "16"
                        ],
                        [
                            "selector" => "//tbody/tr[16]/td[2]",
                            "value" => "Заголовок"
                        ],
                        [
                            "selector" => "//tbody/tr[16]/td[3]",
                            "value" => "Ожидает"
                        ],
                        [
                            "selector" => "//tbody/tr[16]/td[4]",
                            "value" => "Автор заявки, Супервайзер, Руководитель супервайзеров, Администратор"
                        ],
                        [
                            "selector" => "//tbody/tr[16]/td[5]/a[@href='/bpm/request-editing/update?id=16']",
                        ],
                    ],
                    "Заголовок 8" => [
                        [
                            "selector" => "//tbody/tr[17]/td[1]",
                            "value" => "17"
                        ],
                        [
                            "selector" => "//tbody/tr[17]/td[2]",
                            "value" => "Заголовок"
                        ],
                        [
                            "selector" => "//tbody/tr[17]/td[3]",
                            "value" => "Частично выполнена"
                        ],
                        [
                            "selector" => "//tbody/tr[17]/td[4]",
                            "value" => "Супервайзер, Руководитель супервайзеров, Администратор"
                        ],
                        [
                            "selector" => "//tbody/tr[17]/td[5]/a[@href='/bpm/request-editing/update?id=17']",
                        ],
                    ],
                    "Заголовок 9" => [
                        [
                            "selector" => "//tbody/tr[18]/td[1]",
                            "value" => "18"
                        ],
                        [
                            "selector" => "//tbody/tr[18]/td[2]",
                            "value" => "Заголовок"
                        ],
                        [
                            "selector" => "//tbody/tr[18]/td[3]",
                            "value" => "Выполнена"
                        ],
                        [
                            "selector" => "//tbody/tr[18]/td[4]",
                            "value" => "Супервайзер, Руководитель супервайзеров, Администратор"
                        ],
                        [
                            "selector" => "//tbody/tr[18]/td[5]/a[@href='/bpm/request-editing/update?id=18']",
                        ],
                    ],
                    "Заголовок 11" => [
                        [
                            "selector" => "//tbody/tr[19]/td[1]",
                            "value" => "19"
                        ],
                        [
                            "selector" => "//tbody/tr[19]/td[2]",
                            "value" => "Заголовок"
                        ],
                        [
                            "selector" => "//tbody/tr[19]/td[3]",
                            "value" => "Закрыта"
                        ],
                        [
                            "selector" => "//tbody/tr[19]/td[4]",
                            "value" => "Руководитель супервайзеров, Администратор"
                        ],
                        [
                            "selector" => "//tbody/tr[19]/td[5]/a[@href='/bpm/request-editing/update?id=19']",
                        ],
                    ],
                ],
                "cantSee" => [
                ]
            ]
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Страница прав редактирования полей заявок с фильтром id',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?RequestEditingSearch[id]=11&RequestEditingSearch[request_field]=&RequestEditingSearch[request_status]=',
            "pageObjects" => [
                "canSee" => [
                    "Заголовки" => [
                        [
                            "selector" => "//thead/tr/th[1]",
                            "value" => "ID"
                        ],
                        [
                            "selector" => "//thead/tr/th[2]",
                            "value" => "Поле заявки"
                        ],
                        [
                            "selector" => "//thead/tr/th[3]",
                            "value" => "Статус заявки"
                        ],
                        [
                            "selector" => "//thead/tr/th[4]",
                            "value" => "Права редактирования"
                        ],
                        [
                            "selector" => "//thead/tr/th[@class='action-column']",
                        ],
                    ],
                    "Заголовок 1" => [
                        [
                            "selector" => "//tbody/tr[1]/td[1]",
                            "value" => "11"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[2]",
                            "value" => "Заголовок"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[3]",
                            "value" => "Новая"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[4]",
                            "value" => "Автор заявки, Супервайзер, Руководитель супервайзеров, Администратор"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[5]/a[@href='/bpm/request-editing/update?id=11']",
                        ],
                    ],
                ],
                "cantSee" => [
                    "Создатель" => [
                        [
                            "selector" => "//tbody",
                            "value" => "Создатель заявки"
                        ],
                    ],
                    "Заголовок 2" => [
                        [
                            "selector" => "//tbody",
                            "value" => "12"
                        ],
                    ],
                    "Заголовок 3" => [
                        [
                            "selector" => "//tbody",
                            "value" => "13"
                        ],
                    ],
                    "Заголовок 4" => [
                        [
                            "selector" => "//tbody",
                            "value" => "20"
                        ],
                    ],
                    "Заголовок 5" => [
                        [
                            "selector" => "//tbody",
                            "value" => "14"
                        ],
                    ],
                    "Заголовок 6" => [
                        [
                            "selector" => "//tbody",
                            "value" => "15"
                        ],
                    ],
                    "Заголовок 7" => [
                        [
                            "selector" => "//tbody",
                            "value" => "16"
                        ],
                    ],
                    "Заголовок 8" => [
                        [
                            "selector" => "//tbody",
                            "value" => "17"
                        ],
                    ],
                    "Заголовок 9" => [
                        [
                            "selector" => "//tbody",
                            "value" => "18"
                        ],
                    ],
                    "Заголовок 11" => [
                        [
                            "selector" => "//tbody",
                            "value" => "19"
                        ],
                    ],
                ]
            ]
        ]
    ],

    'case3' => [
        'setting' => [
            'description' => 'Страница прав редактирования полей заявок с фильтром поля заявки',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?RequestEditingSearch[id]=&RequestEditingSearch[request_field]=subject&RequestEditingSearch[request_status]=',
            "pageObjects" => [
                "canSee" => [
                    "Заголовки" => [
                        [
                            "selector" => "//thead/tr/th[1]",
                            "value" => "ID"
                        ],
                        [
                            "selector" => "//thead/tr/th[2]",
                            "value" => "Поле заявки"
                        ],
                        [
                            "selector" => "//thead/tr/th[3]",
                            "value" => "Статус заявки"
                        ],
                        [
                            "selector" => "//thead/tr/th[4]",
                            "value" => "Права редактирования"
                        ],
                        [
                            "selector" => "//thead/tr/th[@class='action-column']",
                        ],
                    ],
                    "Заголовок 1" => [
                        [
                            "selector" => "//tbody/tr[1]/td[1]",
                            "value" => "11"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[2]",
                            "value" => "Заголовок"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[3]",
                            "value" => "Новая"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[4]",
                            "value" => "Автор заявки, Супервайзер, Руководитель супервайзеров, Администратор"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[5]/a[@href='/bpm/request-editing/update?id=11']",
                        ],
                    ],
                    "Заголовок 2" => [
                        [
                            "selector" => "//tbody/tr[2]/td[1]",
                            "value" => "12"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[2]",
                            "value" => "Заголовок"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[3]",
                            "value" => "Готова для распределения"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[4]",
                            "value" => "Супервайзер, Руководитель супервайзеров, Администратор"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[5]/a[@href='/bpm/request-editing/update?id=12']",
                        ],
                    ],
                    "Заголовок 3" => [
                        [
                            "selector" => "//tbody/tr[3]/td[1]",
                            "value" => "13"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[2]",
                            "value" => "Заголовок"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[3]",
                            "value" => "На доработке"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[4]",
                            "value" => "Автор заявки, Супервайзер, Руководитель супервайзеров, Администратор"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[5]/a[@href='/bpm/request-editing/update?id=13']",
                        ],
                    ],
                    "Заголовок 4" => [
                        [
                            "selector" => "//tbody/tr[10]/td[1]",
                            "value" => "20"
                        ],
                        [
                            "selector" => "//tbody/tr[10]/td[2]",
                            "value" => "Заголовок"
                        ],
                        [
                            "selector" => "//tbody/tr[10]/td[3]",
                            "value" => "Отменена"
                        ],
                        [
                            "selector" => "//tbody/tr[10]/td[4]",
                            "value" => "Руководитель супервайзеров, Администратор"
                        ],
                        [
                            "selector" => "//tbody/tr[10]/td[5]/a[@href='/bpm/request-editing/update?id=20']",
                        ],
                    ],
                    "Заголовок 5" => [
                        [
                            "selector" => "//tbody/tr[4]/td[1]",
                            "value" => "14"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[2]",
                            "value" => "Заголовок"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[3]",
                            "value" => "Ожидает взятия в работу"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[4]",
                            "value" => "Супервайзер, Руководитель супервайзеров, Администратор"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[5]/a[@href='/bpm/request-editing/update?id=14']",
                        ],
                    ],
                    "Заголовок 6" => [
                        [
                            "selector" => "//tbody/tr[5]/td[1]",
                            "value" => "15"
                        ],
                        [
                            "selector" => "//tbody/tr[5]/td[2]",
                            "value" => "Заголовок"
                        ],
                        [
                            "selector" => "//tbody/tr[5]/td[3]",
                            "value" => "В работе"
                        ],
                        [
                            "selector" => "//tbody/tr[5]/td[4]",
                            "value" => "Супервайзер, Руководитель супервайзеров, Администратор"
                        ],
                        [
                            "selector" => "//tbody/tr[5]/td[5]/a[@href='/bpm/request-editing/update?id=15']",
                        ],
                    ],
                    "Заголовок 7" => [
                        [
                            "selector" => "//tbody/tr[6]/td[1]",
                            "value" => "16"
                        ],
                        [
                            "selector" => "//tbody/tr[6]/td[2]",
                            "value" => "Заголовок"
                        ],
                        [
                            "selector" => "//tbody/tr[6]/td[3]",
                            "value" => "Ожидает"
                        ],
                        [
                            "selector" => "//tbody/tr[6]/td[4]",
                            "value" => "Автор заявки, Супервайзер, Руководитель супервайзеров, Администратор"
                        ],
                        [
                            "selector" => "//tbody/tr[6]/td[5]/a[@href='/bpm/request-editing/update?id=16']",
                        ],
                    ],
                    "Заголовок 8" => [
                        [
                            "selector" => "//tbody/tr[7]/td[1]",
                            "value" => "17"
                        ],
                        [
                            "selector" => "//tbody/tr[7]/td[2]",
                            "value" => "Заголовок"
                        ],
                        [
                            "selector" => "//tbody/tr[7]/td[3]",
                            "value" => "Частично выполнена"
                        ],
                        [
                            "selector" => "//tbody/tr[7]/td[4]",
                            "value" => "Супервайзер, Руководитель супервайзеров, Администратор"
                        ],
                        [
                            "selector" => "//tbody/tr[7]/td[5]/a[@href='/bpm/request-editing/update?id=17']",
                        ],
                    ],
                    "Заголовок 9" => [
                        [
                            "selector" => "//tbody/tr[8]/td[1]",
                            "value" => "18"
                        ],
                        [
                            "selector" => "//tbody/tr[8]/td[2]",
                            "value" => "Заголовок"
                        ],
                        [
                            "selector" => "//tbody/tr[8]/td[3]",
                            "value" => "Выполнена"
                        ],
                        [
                            "selector" => "//tbody/tr[8]/td[4]",
                            "value" => "Супервайзер, Руководитель супервайзеров, Администратор"
                        ],
                        [
                            "selector" => "//tbody/tr[8]/td[5]/a[@href='/bpm/request-editing/update?id=18']",
                        ],
                    ],
                    "Заголовок 11" => [
                        [
                            "selector" => "//tbody/tr[9]/td[1]",
                            "value" => "19"
                        ],
                        [
                            "selector" => "//tbody/tr[9]/td[2]",
                            "value" => "Заголовок"
                        ],
                        [
                            "selector" => "//tbody/tr[9]/td[3]",
                            "value" => "Закрыта"
                        ],
                        [
                            "selector" => "//tbody/tr[9]/td[4]",
                            "value" => "Руководитель супервайзеров, Администратор"
                        ],
                        [
                            "selector" => "//tbody/tr[9]/td[5]/a[@href='/bpm/request-editing/update?id=19']",
                        ],
                    ],
                ],
                "cantSee" => [
                    "Создатель" => [
                        [
                            "selector" => "//tbody",
                            "value" => "Создатель заявки"
                        ],
                    ],
                ]
            ]
        ]
    ],

    'case4' => [
        'setting' => [
            'description' => 'Страница прав редактирования полей заявок с фильтром статуса заявки',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?RequestEditingSearch[id]=&RequestEditingSearch[request_field]=&RequestEditingSearch[request_status]=1',
            "pageObjects" => [
                "canSee" => [
                    "Заголовки" => [
                        [
                            "selector" => "//thead/tr/th[1]",
                            "value" => "ID"
                        ],
                        [
                            "selector" => "//thead/tr/th[2]",
                            "value" => "Поле заявки"
                        ],
                        [
                            "selector" => "//thead/tr/th[3]",
                            "value" => "Статус заявки"
                        ],
                        [
                            "selector" => "//thead/tr/th[4]",
                            "value" => "Права редактирования"
                        ],
                        [
                            "selector" => "//thead/tr/th[@class='action-column']",
                        ],
                    ],
                    "Создатель 1" => [
                        [
                            "selector" => "//tbody/tr[1]/td[1]",
                            "value" => "1"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[2]",
                            "value" => "Создатель заявки"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[3]",
                            "value" => "Новая"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[4]",
                            "value" => "Никто не может редактировать это поле"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[5]/a[@href='/bpm/request-editing/update?id=1']",
                        ],
                    ],
                    "Заголовок 1" => [
                        [
                            "selector" => "//tbody/tr[2]/td[1]",
                            "value" => "11"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[2]",
                            "value" => "Заголовок"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[3]",
                            "value" => "Новая"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[4]",
                            "value" => "Автор заявки, Супервайзер, Руководитель супервайзеров, Администратор"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[5]/a[@href='/bpm/request-editing/update?id=11']",
                        ],
                    ],
                ],
                "cantSee" => [
                    "Создатель 2" => [
                        [
                            "selector" => "//tbody",
                            "value" => "2"
                        ],
                        [
                            "selector" => "//tbody",
                            "value" => "Готова для распределения"
                        ],
                    ],
                    "Создатель 3" => [
                        [
                            "selector" => "//tbody",
                            "value" => "3"
                        ],
                        [
                            "selector" => "//tbody",
                            "value" => "На доработке"
                        ],
                    ],
                    "Создатель 4" => [
                        [
                            "selector" => "//tbody",
                            "value" => "10"
                        ],
                        [
                            "selector" => "//tbody",
                            "value" => "Отменена"
                        ],
                    ],
                    "Создатель 5" => [
                        [
                            "selector" => "//tbody",
                            "value" => "4"
                        ],
                        [
                            "selector" => "//tbody",
                            "value" => "Ожидает взятия в работу"
                        ],
                    ],
                    "Создатель 6" => [
                        [
                            "selector" => "//tbody",
                            "value" => "5"
                        ],
                        [
                            "selector" => "//tbody",
                            "value" => "В работе"
                        ],
                    ],
                    "Создатель 7" => [
                        [
                            "selector" => "//tbody",
                            "value" => "6"
                        ],
//                        [
//                            "selector" => "//tbody",
//                            "value" => "Ожидает"
//                        ],
                    ],
                    "Создатель 8" => [
                        [
                            "selector" => "//tbody",
                            "value" => "7"
                        ],
                        [
                            "selector" => "//tbody",
                            "value" => "Частично выполнена"
                        ],
                    ],
                    "Создатель 9" => [
                        [
                            "selector" => "//tbody",
                            "value" => "8"
                        ],
                        [
                            "selector" => "//tbody",
                            "value" => "Выполнена"
                        ],
                    ],
                    "Создатель 11" => [
                        [
                            "selector" => "//tbody",
                            "value" => "9"
                        ],
                        [
                            "selector" => "//tbody",
                            "value" => "Закрыта"
                        ],
                    ],
                    "Заголовок 2" => [
                        [
                            "selector" => "//tbody",
                            "value" => "12"
                        ],
                        [
                            "selector" => "//tbody",
                            "value" => "Готова для распределения"
                        ],
                    ],
                    "Заголовок 3" => [
                        [
                            "selector" => "//tbody",
                            "value" => "13"
                        ],
                        [
                            "selector" => "//tbody",
                            "value" => "На доработке"
                        ],
                    ],
                    "Заголовок 4" => [
                        [
                            "selector" => "//tbody",
                            "value" => "20"
                        ],
                        [
                            "selector" => "//tbody",
                            "value" => "Отменена"
                        ],
                    ],
                    "Заголовок 5" => [
                        [
                            "selector" => "//tbody",
                            "value" => "14"
                        ],
                        [
                            "selector" => "//tbody",
                            "value" => "Ожидает взятия в работу"
                        ],
                    ],
                    "Заголовок 6" => [
                        [
                            "selector" => "//tbody",
                            "value" => "15"
                        ],
                        [
                            "selector" => "//tbody",
                            "value" => "В работе"
                        ],
                    ],
                    "Заголовок 7" => [
                        [
                            "selector" => "//tbody",
                            "value" => "16"
                        ],
//                        [
//                            "selector" => "//tbody",
//                            "value" => "Ожидает"
//                        ],
                    ],
                    "Заголовок 8" => [
                        [
                            "selector" => "//tbody",
                            "value" => "17"
                        ],
                        [
                            "selector" => "//tbody",
                            "value" => "Частично выполнена"
                        ],
                    ],
                    "Заголовок 9" => [
                        [
                            "selector" => "//tbody",
                            "value" => "18"
                        ],
                        [
                            "selector" => "//tbody",
                            "value" => "Выполнена"
                        ],
                    ],
                    "Заголовок 11" => [
                        [
                            "selector" => "//tbody",
                            "value" => "19"
                        ],
                        [
                            "selector" => "//tbody",
                            "value" => "Закрыта"
                        ],
                    ],
                ]
            ]
        ]
    ],

    'case5' => [
        'setting' => [
            'description' => 'Страница прав редактирования полей заявок с фильтром по id > 999 999 999',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?RequestEditingSearch[id]=9999999999&RequestEditingSearch[request_field]=&RequestEditingSearch[request_status]=',
            "pageObjects" => [
                "canSee" => [
                    "Ошибка" => [
                        [
                            "selector" => "//thead//td[@class='has-error']//div",
                            "value" => "Значение «ID» не должно превышать 999999999."
                        ],
                    ],
                    "Заголовки" => [
                        [
                            "selector" => "//thead/tr/th[1]",
                            "value" => "ID"
                        ],
                        [
                            "selector" => "//thead/tr/th[2]",
                            "value" => "Поле заявки"
                        ],
                        [
                            "selector" => "//thead/tr/th[3]",
                            "value" => "Статус заявки"
                        ],
                        [
                            "selector" => "//thead/tr/th[4]",
                            "value" => "Права редактирования"
                        ],
                        [
                            "selector" => "//thead/tr/th[@class='action-column']",
                        ],
                    ],
                    "Создатель 1" => [
                        [
                            "selector" => "//tbody/tr[1]/td[1]",
                            "value" => "1"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[2]",
                            "value" => "Создатель заявки"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[3]",
                            "value" => "Новая"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[4]",
                            "value" => "Никто не может редактировать это поле"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[5]/a[@href='/bpm/request-editing/update?id=1']",
                        ],
                    ],
                    "Создатель 2" => [
                        [
                            "selector" => "//tbody/tr[2]/td[1]",
                            "value" => "2"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[2]",
                            "value" => "Создатель заявки"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[3]",
                            "value" => "Готова для распределения"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[4]",
                            "value" => "Никто не может редактировать это поле"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[5]/a[@href='/bpm/request-editing/update?id=2']",
                        ],
                    ],
                    "Создатель 3" => [
                        [
                            "selector" => "//tbody/tr[3]/td[1]",
                            "value" => "3"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[2]",
                            "value" => "Создатель заявки"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[3]",
                            "value" => "На доработке"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[4]",
                            "value" => "Никто не может редактировать это поле"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[5]/a[@href='/bpm/request-editing/update?id=3']",
                        ],
                    ],
                    "Создатель 4" => [
                        [
                            "selector" => "//tbody/tr[10]/td[1]",
                            "value" => "10"
                        ],
                        [
                            "selector" => "//tbody/tr[10]/td[2]",
                            "value" => "Создатель заявки"
                        ],
                        [
                            "selector" => "//tbody/tr[10]/td[3]",
                            "value" => "Отменена"
                        ],
                        [
                            "selector" => "//tbody/tr[10]/td[4]",
                            "value" => "Никто не может редактировать это поле"
                        ],
                        [
                            "selector" => "//tbody/tr[10]/td[5]/a[@href='/bpm/request-editing/update?id=10']",
                        ],
                    ],
                    "Создатель 5" => [
                        [
                            "selector" => "//tbody/tr[4]/td[1]",
                            "value" => "4"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[2]",
                            "value" => "Создатель заявки"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[3]",
                            "value" => "Ожидает взятия в работу"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[4]",
                            "value" => "Никто не может редактировать это поле"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[5]/a[@href='/bpm/request-editing/update?id=4']",
                        ],
                    ],
                    "Создатель 6" => [
                        [
                            "selector" => "//tbody/tr[5]/td[1]",
                            "value" => "5"
                        ],
                        [
                            "selector" => "//tbody/tr[5]/td[2]",
                            "value" => "Создатель заявки"
                        ],
                        [
                            "selector" => "//tbody/tr[5]/td[3]",
                            "value" => "В работе"
                        ],
                        [
                            "selector" => "//tbody/tr[5]/td[4]",
                            "value" => "Никто не может редактировать это поле"
                        ],
                        [
                            "selector" => "//tbody/tr[5]/td[5]/a[@href='/bpm/request-editing/update?id=5']",
                        ],
                    ],
                    "Создатель 7" => [
                        [
                            "selector" => "//tbody/tr[6]/td[1]",
                            "value" => "6"
                        ],
                        [
                            "selector" => "//tbody/tr[6]/td[2]",
                            "value" => "Создатель заявки"
                        ],
                        [
                            "selector" => "//tbody/tr[6]/td[3]",
                            "value" => "Ожидает"
                        ],
                        [
                            "selector" => "//tbody/tr[6]/td[4]",
                            "value" => "Никто не может редактировать это поле"
                        ],
                        [
                            "selector" => "//tbody/tr[6]/td[5]/a[@href='/bpm/request-editing/update?id=6']",
                        ],
                    ],
                    "Создатель 8" => [
                        [
                            "selector" => "//tbody/tr[7]/td[1]",
                            "value" => "7"
                        ],
                        [
                            "selector" => "//tbody/tr[7]/td[2]",
                            "value" => "Создатель заявки"
                        ],
                        [
                            "selector" => "//tbody/tr[7]/td[3]",
                            "value" => "Частично выполнена"
                        ],
                        [
                            "selector" => "//tbody/tr[7]/td[4]",
                            "value" => "Никто не может редактировать это поле"
                        ],
                        [
                            "selector" => "//tbody/tr[7]/td[5]/a[@href='/bpm/request-editing/update?id=7']",
                        ],
                    ],
                    "Создатель 9" => [
                        [
                            "selector" => "//tbody/tr[8]/td[1]",
                            "value" => "8"
                        ],
                        [
                            "selector" => "//tbody/tr[8]/td[2]",
                            "value" => "Создатель заявки"
                        ],
                        [
                            "selector" => "//tbody/tr[8]/td[3]",
                            "value" => "Выполнена"
                        ],
                        [
                            "selector" => "//tbody/tr[8]/td[4]",
                            "value" => "Никто не может редактировать это поле"
                        ],
                        [
                            "selector" => "//tbody/tr[8]/td[5]/a[@href='/bpm/request-editing/update?id=8']",
                        ],
                    ],
                    "Создатель 11" => [
                        [
                            "selector" => "//tbody/tr[9]/td[1]",
                            "value" => "9"
                        ],
                        [
                            "selector" => "//tbody/tr[9]/td[2]",
                            "value" => "Создатель заявки"
                        ],
                        [
                            "selector" => "//tbody/tr[9]/td[3]",
                            "value" => "Закрыта"
                        ],
                        [
                            "selector" => "//tbody/tr[9]/td[4]",
                            "value" => "Никто не может редактировать это поле"
                        ],
                        [
                            "selector" => "//tbody/tr[9]/td[5]/a[@href='/bpm/request-editing/update?id=9']",
                        ],
                    ],
                    "Заголовок 1" => [
                        [
                            "selector" => "//tbody/tr[11]/td[1]",
                            "value" => "11"
                        ],
                        [
                            "selector" => "//tbody/tr[11]/td[2]",
                            "value" => "Заголовок"
                        ],
                        [
                            "selector" => "//tbody/tr[11]/td[3]",
                            "value" => "Новая"
                        ],
                        [
                            "selector" => "//tbody/tr[11]/td[4]",
                            "value" => "Автор заявки, Супервайзер, Руководитель супервайзеров, Администратор"
                        ],
                        [
                            "selector" => "//tbody/tr[11]/td[5]/a[@href='/bpm/request-editing/update?id=11']",
                        ],
                    ],
                    "Заголовок 2" => [
                        [
                            "selector" => "//tbody/tr[12]/td[1]",
                            "value" => "12"
                        ],
                        [
                            "selector" => "//tbody/tr[12]/td[2]",
                            "value" => "Заголовок"
                        ],
                        [
                            "selector" => "//tbody/tr[12]/td[3]",
                            "value" => "Готова для распределения"
                        ],
                        [
                            "selector" => "//tbody/tr[12]/td[4]",
                            "value" => "Супервайзер, Руководитель супервайзеров, Администратор"
                        ],
                        [
                            "selector" => "//tbody/tr[12]/td[5]/a[@href='/bpm/request-editing/update?id=12']",
                        ],
                    ],
                    "Заголовок 3" => [
                        [
                            "selector" => "//tbody/tr[13]/td[1]",
                            "value" => "13"
                        ],
                        [
                            "selector" => "//tbody/tr[13]/td[2]",
                            "value" => "Заголовок"
                        ],
                        [
                            "selector" => "//tbody/tr[13]/td[3]",
                            "value" => "На доработке"
                        ],
                        [
                            "selector" => "//tbody/tr[13]/td[4]",
                            "value" => "Автор заявки, Супервайзер, Руководитель супервайзеров, Администратор"
                        ],
                        [
                            "selector" => "//tbody/tr[13]/td[5]/a[@href='/bpm/request-editing/update?id=13']",
                        ],
                    ],
                    "Заголовок 4" => [
                        [
                            "selector" => "//tbody/tr[20]/td[1]",
                            "value" => "20"
                        ],
                        [
                            "selector" => "//tbody/tr[20]/td[2]",
                            "value" => "Заголовок"
                        ],
                        [
                            "selector" => "//tbody/tr[20]/td[3]",
                            "value" => "Отменена"
                        ],
                        [
                            "selector" => "//tbody/tr[20]/td[4]",
                            "value" => "Руководитель супервайзеров, Администратор"
                        ],
                        [
                            "selector" => "//tbody/tr[20]/td[5]/a[@href='/bpm/request-editing/update?id=20']",
                        ],
                    ],
                    "Заголовок 5" => [
                        [
                            "selector" => "//tbody/tr[14]/td[1]",
                            "value" => "14"
                        ],
                        [
                            "selector" => "//tbody/tr[14]/td[2]",
                            "value" => "Заголовок"
                        ],
                        [
                            "selector" => "//tbody/tr[14]/td[3]",
                            "value" => "Ожидает взятия в работу"
                        ],
                        [
                            "selector" => "//tbody/tr[14]/td[4]",
                            "value" => "Супервайзер, Руководитель супервайзеров, Администратор"
                        ],
                        [
                            "selector" => "//tbody/tr[14]/td[5]/a[@href='/bpm/request-editing/update?id=14']",
                        ],
                    ],
                    "Заголовок 6" => [
                        [
                            "selector" => "//tbody/tr[15]/td[1]",
                            "value" => "15"
                        ],
                        [
                            "selector" => "//tbody/tr[15]/td[2]",
                            "value" => "Заголовок"
                        ],
                        [
                            "selector" => "//tbody/tr[15]/td[3]",
                            "value" => "В работе"
                        ],
                        [
                            "selector" => "//tbody/tr[15]/td[4]",
                            "value" => "Супервайзер, Руководитель супервайзеров, Администратор"
                        ],
                        [
                            "selector" => "//tbody/tr[15]/td[5]/a[@href='/bpm/request-editing/update?id=15']",
                        ],
                    ],
                    "Заголовок 7" => [
                        [
                            "selector" => "//tbody/tr[16]/td[1]",
                            "value" => "16"
                        ],
                        [
                            "selector" => "//tbody/tr[16]/td[2]",
                            "value" => "Заголовок"
                        ],
                        [
                            "selector" => "//tbody/tr[16]/td[3]",
                            "value" => "Ожидает"
                        ],
                        [
                            "selector" => "//tbody/tr[16]/td[4]",
                            "value" => "Автор заявки, Супервайзер, Руководитель супервайзеров, Администратор"
                        ],
                        [
                            "selector" => "//tbody/tr[16]/td[5]/a[@href='/bpm/request-editing/update?id=16']",
                        ],
                    ],
                    "Заголовок 8" => [
                        [
                            "selector" => "//tbody/tr[17]/td[1]",
                            "value" => "17"
                        ],
                        [
                            "selector" => "//tbody/tr[17]/td[2]",
                            "value" => "Заголовок"
                        ],
                        [
                            "selector" => "//tbody/tr[17]/td[3]",
                            "value" => "Частично выполнена"
                        ],
                        [
                            "selector" => "//tbody/tr[17]/td[4]",
                            "value" => "Супервайзер, Руководитель супервайзеров, Администратор"
                        ],
                        [
                            "selector" => "//tbody/tr[17]/td[5]/a[@href='/bpm/request-editing/update?id=17']",
                        ],
                    ],
                    "Заголовок 9" => [
                        [
                            "selector" => "//tbody/tr[18]/td[1]",
                            "value" => "18"
                        ],
                        [
                            "selector" => "//tbody/tr[18]/td[2]",
                            "value" => "Заголовок"
                        ],
                        [
                            "selector" => "//tbody/tr[18]/td[3]",
                            "value" => "Выполнена"
                        ],
                        [
                            "selector" => "//tbody/tr[18]/td[4]",
                            "value" => "Супервайзер, Руководитель супервайзеров, Администратор"
                        ],
                        [
                            "selector" => "//tbody/tr[18]/td[5]/a[@href='/bpm/request-editing/update?id=18']",
                        ],
                    ],
                    "Заголовок 11" => [
                        [
                            "selector" => "//tbody/tr[19]/td[1]",
                            "value" => "19"
                        ],
                        [
                            "selector" => "//tbody/tr[19]/td[2]",
                            "value" => "Заголовок"
                        ],
                        [
                            "selector" => "//tbody/tr[19]/td[3]",
                            "value" => "Закрыта"
                        ],
                        [
                            "selector" => "//tbody/tr[19]/td[4]",
                            "value" => "Руководитель супервайзеров, Администратор"
                        ],
                        [
                            "selector" => "//tbody/tr[19]/td[5]/a[@href='/bpm/request-editing/update?id=19']",
                        ],
                    ],
                ],
                "cantSee" => [
                ]
            ]
        ]
    ],

    'case6' => [
        'setting' => [
            'description' => 'Страница прав редактирования полей заявок с нечисловым фильтром по id',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?RequestEditingSearch[id]==~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<&RequestEditingSearch[request_field]=&RequestEditingSearch[request_status]=',
            "pageObjects" => [
                "canSee" => [
                    "Ошибка" => [
                        [
                            "selector" => "//thead//td[@class='has-error']//div",
                            "value" => "Значение «ID» должно быть целым числом."
                        ],
                    ],
                    "Заголовки" => [
                        [
                            "selector" => "//thead/tr/th[1]",
                            "value" => "ID"
                        ],
                        [
                            "selector" => "//thead/tr/th[2]",
                            "value" => "Поле заявки"
                        ],
                        [
                            "selector" => "//thead/tr/th[3]",
                            "value" => "Статус заявки"
                        ],
                        [
                            "selector" => "//thead/tr/th[4]",
                            "value" => "Права редактирования"
                        ],
                        [
                            "selector" => "//thead/tr/th[@class='action-column']",
                        ],
                    ],
                    "Создатель 1" => [
                        [
                            "selector" => "//tbody/tr[1]/td[1]",
                            "value" => "1"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[2]",
                            "value" => "Создатель заявки"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[3]",
                            "value" => "Новая"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[4]",
                            "value" => "Никто не может редактировать это поле"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[5]/a[@href='/bpm/request-editing/update?id=1']",
                        ],
                    ],
                    "Создатель 2" => [
                        [
                            "selector" => "//tbody/tr[2]/td[1]",
                            "value" => "2"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[2]",
                            "value" => "Создатель заявки"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[3]",
                            "value" => "Готова для распределения"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[4]",
                            "value" => "Никто не может редактировать это поле"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[5]/a[@href='/bpm/request-editing/update?id=2']",
                        ],
                    ],
                    "Создатель 3" => [
                        [
                            "selector" => "//tbody/tr[3]/td[1]",
                            "value" => "3"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[2]",
                            "value" => "Создатель заявки"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[3]",
                            "value" => "На доработке"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[4]",
                            "value" => "Никто не может редактировать это поле"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[5]/a[@href='/bpm/request-editing/update?id=3']",
                        ],
                    ],
                    "Создатель 4" => [
                        [
                            "selector" => "//tbody/tr[10]/td[1]",
                            "value" => "10"
                        ],
                        [
                            "selector" => "//tbody/tr[10]/td[2]",
                            "value" => "Создатель заявки"
                        ],
                        [
                            "selector" => "//tbody/tr[10]/td[3]",
                            "value" => "Отменена"
                        ],
                        [
                            "selector" => "//tbody/tr[10]/td[4]",
                            "value" => "Никто не может редактировать это поле"
                        ],
                        [
                            "selector" => "//tbody/tr[10]/td[5]/a[@href='/bpm/request-editing/update?id=10']",
                        ],
                    ],
                    "Создатель 5" => [
                        [
                            "selector" => "//tbody/tr[4]/td[1]",
                            "value" => "4"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[2]",
                            "value" => "Создатель заявки"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[3]",
                            "value" => "Ожидает взятия в работу"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[4]",
                            "value" => "Никто не может редактировать это поле"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[5]/a[@href='/bpm/request-editing/update?id=4']",
                        ],
                    ],
                    "Создатель 6" => [
                        [
                            "selector" => "//tbody/tr[5]/td[1]",
                            "value" => "5"
                        ],
                        [
                            "selector" => "//tbody/tr[5]/td[2]",
                            "value" => "Создатель заявки"
                        ],
                        [
                            "selector" => "//tbody/tr[5]/td[3]",
                            "value" => "В работе"
                        ],
                        [
                            "selector" => "//tbody/tr[5]/td[4]",
                            "value" => "Никто не может редактировать это поле"
                        ],
                        [
                            "selector" => "//tbody/tr[5]/td[5]/a[@href='/bpm/request-editing/update?id=5']",
                        ],
                    ],
                    "Создатель 7" => [
                        [
                            "selector" => "//tbody/tr[6]/td[1]",
                            "value" => "6"
                        ],
                        [
                            "selector" => "//tbody/tr[6]/td[2]",
                            "value" => "Создатель заявки"
                        ],
                        [
                            "selector" => "//tbody/tr[6]/td[3]",
                            "value" => "Ожидает"
                        ],
                        [
                            "selector" => "//tbody/tr[6]/td[4]",
                            "value" => "Никто не может редактировать это поле"
                        ],
                        [
                            "selector" => "//tbody/tr[6]/td[5]/a[@href='/bpm/request-editing/update?id=6']",
                        ],
                    ],
                    "Создатель 8" => [
                        [
                            "selector" => "//tbody/tr[7]/td[1]",
                            "value" => "7"
                        ],
                        [
                            "selector" => "//tbody/tr[7]/td[2]",
                            "value" => "Создатель заявки"
                        ],
                        [
                            "selector" => "//tbody/tr[7]/td[3]",
                            "value" => "Частично выполнена"
                        ],
                        [
                            "selector" => "//tbody/tr[7]/td[4]",
                            "value" => "Никто не может редактировать это поле"
                        ],
                        [
                            "selector" => "//tbody/tr[7]/td[5]/a[@href='/bpm/request-editing/update?id=7']",
                        ],
                    ],
                    "Создатель 9" => [
                        [
                            "selector" => "//tbody/tr[8]/td[1]",
                            "value" => "8"
                        ],
                        [
                            "selector" => "//tbody/tr[8]/td[2]",
                            "value" => "Создатель заявки"
                        ],
                        [
                            "selector" => "//tbody/tr[8]/td[3]",
                            "value" => "Выполнена"
                        ],
                        [
                            "selector" => "//tbody/tr[8]/td[4]",
                            "value" => "Никто не может редактировать это поле"
                        ],
                        [
                            "selector" => "//tbody/tr[8]/td[5]/a[@href='/bpm/request-editing/update?id=8']",
                        ],
                    ],
                    "Создатель 11" => [
                        [
                            "selector" => "//tbody/tr[9]/td[1]",
                            "value" => "9"
                        ],
                        [
                            "selector" => "//tbody/tr[9]/td[2]",
                            "value" => "Создатель заявки"
                        ],
                        [
                            "selector" => "//tbody/tr[9]/td[3]",
                            "value" => "Закрыта"
                        ],
                        [
                            "selector" => "//tbody/tr[9]/td[4]",
                            "value" => "Никто не может редактировать это поле"
                        ],
                        [
                            "selector" => "//tbody/tr[9]/td[5]/a[@href='/bpm/request-editing/update?id=9']",
                        ],
                    ],
                    "Заголовок 1" => [
                        [
                            "selector" => "//tbody/tr[11]/td[1]",
                            "value" => "11"
                        ],
                        [
                            "selector" => "//tbody/tr[11]/td[2]",
                            "value" => "Заголовок"
                        ],
                        [
                            "selector" => "//tbody/tr[11]/td[3]",
                            "value" => "Новая"
                        ],
                        [
                            "selector" => "//tbody/tr[11]/td[4]",
                            "value" => "Автор заявки, Супервайзер, Руководитель супервайзеров, Администратор"
                        ],
                        [
                            "selector" => "//tbody/tr[11]/td[5]/a[@href='/bpm/request-editing/update?id=11']",
                        ],
                    ],
                    "Заголовок 2" => [
                        [
                            "selector" => "//tbody/tr[12]/td[1]",
                            "value" => "12"
                        ],
                        [
                            "selector" => "//tbody/tr[12]/td[2]",
                            "value" => "Заголовок"
                        ],
                        [
                            "selector" => "//tbody/tr[12]/td[3]",
                            "value" => "Готова для распределения"
                        ],
                        [
                            "selector" => "//tbody/tr[12]/td[4]",
                            "value" => "Супервайзер, Руководитель супервайзеров, Администратор"
                        ],
                        [
                            "selector" => "//tbody/tr[12]/td[5]/a[@href='/bpm/request-editing/update?id=12']",
                        ],
                    ],
                    "Заголовок 3" => [
                        [
                            "selector" => "//tbody/tr[13]/td[1]",
                            "value" => "13"
                        ],
                        [
                            "selector" => "//tbody/tr[13]/td[2]",
                            "value" => "Заголовок"
                        ],
                        [
                            "selector" => "//tbody/tr[13]/td[3]",
                            "value" => "На доработке"
                        ],
                        [
                            "selector" => "//tbody/tr[13]/td[4]",
                            "value" => "Автор заявки, Супервайзер, Руководитель супервайзеров, Администратор"
                        ],
                        [
                            "selector" => "//tbody/tr[13]/td[5]/a[@href='/bpm/request-editing/update?id=13']",
                        ],
                    ],
                    "Заголовок 4" => [
                        [
                            "selector" => "//tbody/tr[20]/td[1]",
                            "value" => "20"
                        ],
                        [
                            "selector" => "//tbody/tr[20]/td[2]",
                            "value" => "Заголовок"
                        ],
                        [
                            "selector" => "//tbody/tr[20]/td[3]",
                            "value" => "Отменена"
                        ],
                        [
                            "selector" => "//tbody/tr[20]/td[4]",
                            "value" => "Руководитель супервайзеров, Администратор"
                        ],
                        [
                            "selector" => "//tbody/tr[20]/td[5]/a[@href='/bpm/request-editing/update?id=20']",
                        ],
                    ],
                    "Заголовок 5" => [
                        [
                            "selector" => "//tbody/tr[14]/td[1]",
                            "value" => "14"
                        ],
                        [
                            "selector" => "//tbody/tr[14]/td[2]",
                            "value" => "Заголовок"
                        ],
                        [
                            "selector" => "//tbody/tr[14]/td[3]",
                            "value" => "Ожидает взятия в работу"
                        ],
                        [
                            "selector" => "//tbody/tr[14]/td[4]",
                            "value" => "Супервайзер, Руководитель супервайзеров, Администратор"
                        ],
                        [
                            "selector" => "//tbody/tr[14]/td[5]/a[@href='/bpm/request-editing/update?id=14']",
                        ],
                    ],
                    "Заголовок 6" => [
                        [
                            "selector" => "//tbody/tr[15]/td[1]",
                            "value" => "15"
                        ],
                        [
                            "selector" => "//tbody/tr[15]/td[2]",
                            "value" => "Заголовок"
                        ],
                        [
                            "selector" => "//tbody/tr[15]/td[3]",
                            "value" => "В работе"
                        ],
                        [
                            "selector" => "//tbody/tr[15]/td[4]",
                            "value" => "Супервайзер, Руководитель супервайзеров, Администратор"
                        ],
                        [
                            "selector" => "//tbody/tr[15]/td[5]/a[@href='/bpm/request-editing/update?id=15']",
                        ],
                    ],
                    "Заголовок 7" => [
                        [
                            "selector" => "//tbody/tr[16]/td[1]",
                            "value" => "16"
                        ],
                        [
                            "selector" => "//tbody/tr[16]/td[2]",
                            "value" => "Заголовок"
                        ],
                        [
                            "selector" => "//tbody/tr[16]/td[3]",
                            "value" => "Ожидает"
                        ],
                        [
                            "selector" => "//tbody/tr[16]/td[4]",
                            "value" => "Автор заявки, Супервайзер, Руководитель супервайзеров, Администратор"
                        ],
                        [
                            "selector" => "//tbody/tr[16]/td[5]/a[@href='/bpm/request-editing/update?id=16']",
                        ],
                    ],
                    "Заголовок 8" => [
                        [
                            "selector" => "//tbody/tr[17]/td[1]",
                            "value" => "17"
                        ],
                        [
                            "selector" => "//tbody/tr[17]/td[2]",
                            "value" => "Заголовок"
                        ],
                        [
                            "selector" => "//tbody/tr[17]/td[3]",
                            "value" => "Частично выполнена"
                        ],
                        [
                            "selector" => "//tbody/tr[17]/td[4]",
                            "value" => "Супервайзер, Руководитель супервайзеров, Администратор"
                        ],
                        [
                            "selector" => "//tbody/tr[17]/td[5]/a[@href='/bpm/request-editing/update?id=17']",
                        ],
                    ],
                    "Заголовок 9" => [
                        [
                            "selector" => "//tbody/tr[18]/td[1]",
                            "value" => "18"
                        ],
                        [
                            "selector" => "//tbody/tr[18]/td[2]",
                            "value" => "Заголовок"
                        ],
                        [
                            "selector" => "//tbody/tr[18]/td[3]",
                            "value" => "Выполнена"
                        ],
                        [
                            "selector" => "//tbody/tr[18]/td[4]",
                            "value" => "Супервайзер, Руководитель супервайзеров, Администратор"
                        ],
                        [
                            "selector" => "//tbody/tr[18]/td[5]/a[@href='/bpm/request-editing/update?id=18']",
                        ],
                    ],
                    "Заголовок 11" => [
                        [
                            "selector" => "//tbody/tr[19]/td[1]",
                            "value" => "19"
                        ],
                        [
                            "selector" => "//tbody/tr[19]/td[2]",
                            "value" => "Заголовок"
                        ],
                        [
                            "selector" => "//tbody/tr[19]/td[3]",
                            "value" => "Закрыта"
                        ],
                        [
                            "selector" => "//tbody/tr[19]/td[4]",
                            "value" => "Руководитель супервайзеров, Администратор"
                        ],
                        [
                            "selector" => "//tbody/tr[19]/td[5]/a[@href='/bpm/request-editing/update?id=19']",
                        ],
                    ],
                ],
                "cantSee" => [
                ]
            ]
        ]
    ],

    'case7' => [
        'setting' => [
            'description' => 'Страница прав редактирования полей заявок с несуществующим фильтром по id',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?RequestEditingSearch[id]=999&RequestEditingSearch[request_field]=&RequestEditingSearch[request_status]=',
            "pageObjects" => [
                "canSee" => [
                    "Ошибка" => [
                        [
                            "selector" => "//div[@class='empty']",
                            "value" => "Ничего не найдено."
                        ],
                    ],
                ],
                "cantSee" => [
                ]
            ]
        ]
    ],

];
