<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Cтраница значений полей заявок',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '',
            "pageObjects" => [
                "canSee" => [
                    "Заголовки" => [
                        [
                            "selector" => "//thead/tr/th[1]",
                            "value" => "ID Значения"
                        ],
                        [
                            "selector" => "//thead/tr/th[2]",
                            "value" => "Поле"
                        ],
                        [
                            "selector" => "//thead/tr/th[3]",
                            "value" => "Значение поля"
                        ],
                        [
                            "selector" => "//thead/tr/th[4]",
                            "value" => "Статус"
                        ],
                        [
                            "selector" => "//thead/tr/th[@class='action-column']",
                        ],
                    ],
                    "21-1" => [
                        [
                            "selector" => "//tbody/tr[1]/td[1]",
                            "value" => "1"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[2]",
                            "value" => "Наличие характеристик к товарам"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[3]",
                            "value" => "Предоставлены продактом"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[4]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[5]/a[@href='/bpm/field-values/update?id=1']",
                        ],
                    ],
                    "21-2" => [
                        [
                            "selector" => "//tbody/tr[2]/td[1]",
                            "value" => "2"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[2]",
                            "value" => "Наличие характеристик к товарам"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[3]",
                            "value" => "Предоставлены продактом частично. Без дополнительного поиска."
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[4]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[5]/a[@href='/bpm/field-values/update?id=2']",
                        ],
                    ],
                    "21-3" => [
                        [
                            "selector" => "//tbody/tr[3]/td[1]",
                            "value" => "3"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[2]",
                            "value" => "Наличие характеристик к товарам"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[3]",
                            "value" => "Предоставлены продактом частично. С дополнительным поиском."
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[4]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[5]/a[@href='/bpm/field-values/update?id=3']",
                        ],
                    ],
                    "24-1" => [
                        [
                            "selector" => "//tbody/tr[4]/td[1]",
                            "value" => "4"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[2]",
                            "value" => "Обработка фото	"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[3]",
                            "value" => "Без обработки (только кадрирование)"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[4]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[5]/a[@href='/bpm/field-values/update?id=4']",
                        ],
                    ],
                    "24-2" => [
                        [
                            "selector" => "//tbody/tr[5]/td[1]",
                            "value" => "5"
                        ],
                        [
                            "selector" => "//tbody/tr[5]/td[2]",
                            "value" => "Обработка фото"
                        ],
                        [
                            "selector" => "//tbody/tr[5]/td[3]",
                            "value" => "Удаление теней/фона (простая обработка)"
                        ],
                        [
                            "selector" => "//tbody/tr[5]/td[4]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[5]/td[5]/a[@href='/bpm/field-values/update?id=5']",
                        ],
                    ],
                    "24-3" => [
                        [
                            "selector" => "//tbody/tr[6]/td[1]",
                            "value" => "6"
                        ],
                        [
                            "selector" => "//tbody/tr[6]/td[2]",
                            "value" => "Обработка фото"
                        ],
                        [
                            "selector" => "//tbody/tr[6]/td[3]",
                            "value" => "Удаление теней/фона/ватермарков/цветокорекция"
                        ],
                        [
                            "selector" => "//tbody/tr[6]/td[4]",
                            "value" => "Заблокированый"
                        ],
                        [
                            "selector" => "//tbody/tr[6]/td[5]/a[@href='/bpm/field-values/update?id=6']",
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
            'description' => 'Cтраница значений полей заявок с сортировкой по id',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?sort=-id',
            "pageObjects" => [
                "canSee" => [
                    "Заголовки" => [
                        [
                            "selector" => "//thead/tr/th[1]",
                            "value" => "ID Значения"
                        ],
                        [
                            "selector" => "//thead/tr/th[2]",
                            "value" => "Поле"
                        ],
                        [
                            "selector" => "//thead/tr/th[3]",
                            "value" => "Значение поля"
                        ],
                        [
                            "selector" => "//thead/tr/th[4]",
                            "value" => "Статус"
                        ],
                        [
                            "selector" => "//thead/tr/th[@class='action-column']",
                        ],
                    ],
                    "21-1" => [
                        [
                            "selector" => "//tbody/tr[6]/td[1]",
                            "value" => "1"
                        ],
                        [
                            "selector" => "//tbody/tr[6]/td[2]",
                            "value" => "Наличие характеристик к товарам"
                        ],
                        [
                            "selector" => "//tbody/tr[6]/td[3]",
                            "value" => "Предоставлены продактом"
                        ],
                        [
                            "selector" => "//tbody/tr[6]/td[4]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[6]/td[5]/a[@href='/bpm/field-values/update?id=1']",
                        ],
                    ],
                    "21-2" => [
                        [
                            "selector" => "//tbody/tr[5]/td[1]",
                            "value" => "2"
                        ],
                        [
                            "selector" => "//tbody/tr[5]/td[2]",
                            "value" => "Наличие характеристик к товарам"
                        ],
                        [
                            "selector" => "//tbody/tr[5]/td[3]",
                            "value" => "Предоставлены продактом частично. Без дополнительного поиска."
                        ],
                        [
                            "selector" => "//tbody/tr[5]/td[4]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[5]/td[5]/a[@href='/bpm/field-values/update?id=2']",
                        ],
                    ],
                    "21-3" => [
                        [
                            "selector" => "//tbody/tr[4]/td[1]",
                            "value" => "3"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[2]",
                            "value" => "Наличие характеристик к товарам"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[3]",
                            "value" => "Предоставлены продактом частично. С дополнительным поиском."
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[4]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[5]/a[@href='/bpm/field-values/update?id=3']",
                        ],
                    ],
                    "24-1" => [
                        [
                            "selector" => "//tbody/tr[3]/td[1]",
                            "value" => "4"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[2]",
                            "value" => "Обработка фото	"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[3]",
                            "value" => "Без обработки (только кадрирование)"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[4]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[5]/a[@href='/bpm/field-values/update?id=4']",
                        ],
                    ],
                    "24-2" => [
                        [
                            "selector" => "//tbody/tr[2]/td[1]",
                            "value" => "5"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[2]",
                            "value" => "Обработка фото"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[3]",
                            "value" => "Удаление теней/фона (простая обработка)"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[4]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[5]/a[@href='/bpm/field-values/update?id=5']",
                        ],
                    ],
                    "24-3" => [
                        [
                            "selector" => "//tbody/tr[1]/td[1]",
                            "value" => "6"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[2]",
                            "value" => "Обработка фото"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[3]",
                            "value" => "Удаление теней/фона/ватермарков/цветокорекция"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[4]",
                            "value" => "Заблокированый"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[5]/a[@href='/bpm/field-values/update?id=6']",
                        ],
                    ],
                ],
                "cantSee" => [
                ]
            ]
        ]
    ],

    'case3' => [
        'setting' => [
            'description' => 'Cтраница значений полей заявок с сортировкой по полю',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?sort=-field_id',
            "pageObjects" => [
                "canSee" => [
                    "Заголовки" => [
                        [
                            "selector" => "//thead/tr/th[1]",
                            "value" => "ID Значения"
                        ],
                        [
                            "selector" => "//thead/tr/th[2]",
                            "value" => "Поле"
                        ],
                        [
                            "selector" => "//thead/tr/th[3]",
                            "value" => "Значение поля"
                        ],
                        [
                            "selector" => "//thead/tr/th[4]",
                            "value" => "Статус"
                        ],
                        [
                            "selector" => "//thead/tr/th[@class='action-column']",
                        ],
                    ],
                    "21-1" => [
                        [
                            "selector" => "//tbody/tr[4]/td[1]",
                            "value" => "1"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[2]",
                            "value" => "Наличие характеристик к товарам"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[3]",
                            "value" => "Предоставлены продактом"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[4]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[5]/a[@href='/bpm/field-values/update?id=1']",
                        ],
                    ],
                    "21-2" => [
                        [
                            "selector" => "//tbody/tr[5]/td[1]",
                            "value" => "2"
                        ],
                        [
                            "selector" => "//tbody/tr[5]/td[2]",
                            "value" => "Наличие характеристик к товарам"
                        ],
                        [
                            "selector" => "//tbody/tr[5]/td[3]",
                            "value" => "Предоставлены продактом частично. Без дополнительного поиска."
                        ],
                        [
                            "selector" => "//tbody/tr[5]/td[4]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[5]/td[5]/a[@href='/bpm/field-values/update?id=2']",
                        ],
                    ],
                    "21-3" => [
                        [
                            "selector" => "//tbody/tr[6]/td[1]",
                            "value" => "3"
                        ],
                        [
                            "selector" => "//tbody/tr[6]/td[2]",
                            "value" => "Наличие характеристик к товарам"
                        ],
                        [
                            "selector" => "//tbody/tr[6]/td[3]",
                            "value" => "Предоставлены продактом частично. С дополнительным поиском."
                        ],
                        [
                            "selector" => "//tbody/tr[6]/td[4]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[6]/td[5]/a[@href='/bpm/field-values/update?id=3']",
                        ],
                    ],
                    "24-1" => [
                        [
                            "selector" => "//tbody/tr[1]/td[1]",
                            "value" => "4"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[2]",
                            "value" => "Обработка фото	"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[3]",
                            "value" => "Без обработки (только кадрирование)"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[4]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[5]/a[@href='/bpm/field-values/update?id=4']",
                        ],
                    ],
                    "24-2" => [
                        [
                            "selector" => "//tbody/tr[2]/td[1]",
                            "value" => "5"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[2]",
                            "value" => "Обработка фото"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[3]",
                            "value" => "Удаление теней/фона (простая обработка)"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[4]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[5]/a[@href='/bpm/field-values/update?id=5']",
                        ],
                    ],
                    "24-3" => [
                        [
                            "selector" => "//tbody/tr[3]/td[1]",
                            "value" => "6"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[2]",
                            "value" => "Обработка фото"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[3]",
                            "value" => "Удаление теней/фона/ватермарков/цветокорекция"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[4]",
                            "value" => "Заблокированый"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[5]/a[@href='/bpm/field-values/update?id=6']",
                        ],
                    ],
                ],
                "cantSee" => [
                ]
            ]
        ]
    ],

    'case4' => [
        'setting' => [
            'description' => 'Cтраница значений полей заявок с сортировкой по значению',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?sort=value',
            "pageObjects" => [
                "canSee" => [
                    "Заголовки" => [
                        [
                            "selector" => "//thead/tr/th[1]",
                            "value" => "ID Значения"
                        ],
                        [
                            "selector" => "//thead/tr/th[2]",
                            "value" => "Поле"
                        ],
                        [
                            "selector" => "//thead/tr/th[3]",
                            "value" => "Значение поля"
                        ],
                        [
                            "selector" => "//thead/tr/th[4]",
                            "value" => "Статус"
                        ],
                        [
                            "selector" => "//thead/tr/th[@class='action-column']",
                        ],
                    ],
                    "21-1" => [
                        [
                            "selector" => "//tbody/tr[2]/td[1]",
                            "value" => "1"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[2]",
                            "value" => "Наличие характеристик к товарам"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[3]",
                            "value" => "Предоставлены продактом"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[4]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[5]/a[@href='/bpm/field-values/update?id=1']",
                        ],
                    ],
                    "21-2" => [
                        [
                            "selector" => "//tbody/tr[3]/td[1]",
                            "value" => "2"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[2]",
                            "value" => "Наличие характеристик к товарам"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[3]",
                            "value" => "Предоставлены продактом частично. Без дополнительного поиска."
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[4]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[5]/a[@href='/bpm/field-values/update?id=2']",
                        ],
                    ],
                    "21-3" => [
                        [
                            "selector" => "//tbody/tr[4]/td[1]",
                            "value" => "3"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[2]",
                            "value" => "Наличие характеристик к товарам"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[3]",
                            "value" => "Предоставлены продактом частично. С дополнительным поиском."
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[4]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[5]/a[@href='/bpm/field-values/update?id=3']",
                        ],
                    ],
                    "24-1" => [
                        [
                            "selector" => "//tbody/tr[1]/td[1]",
                            "value" => "4"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[2]",
                            "value" => "Обработка фото	"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[3]",
                            "value" => "Без обработки (только кадрирование)"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[4]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[5]/a[@href='/bpm/field-values/update?id=4']",
                        ],
                    ],
                    "24-2" => [
                        [
                            "selector" => "//tbody/tr[6]/td[1]",
                            "value" => "5"
                        ],
                        [
                            "selector" => "//tbody/tr[6]/td[2]",
                            "value" => "Обработка фото"
                        ],
                        [
                            "selector" => "//tbody/tr[6]/td[3]",
                            "value" => "Удаление теней/фона (простая обработка)"
                        ],
                        [
                            "selector" => "//tbody/tr[6]/td[4]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[6]/td[5]/a[@href='/bpm/field-values/update?id=5']",
                        ],
                    ],
                    "24-3" => [
                        [
                            "selector" => "//tbody/tr[5]/td[1]",
                            "value" => "6"
                        ],
                        [
                            "selector" => "//tbody/tr[5]/td[2]",
                            "value" => "Обработка фото"
                        ],
                        [
                            "selector" => "//tbody/tr[5]/td[3]",
                            "value" => "Удаление теней/фона/ватермарков/цветокорекция"
                        ],
                        [
                            "selector" => "//tbody/tr[5]/td[4]",
                            "value" => "Заблокированый"
                        ],
                        [
                            "selector" => "//tbody/tr[5]/td[5]/a[@href='/bpm/field-values/update?id=6']",
                        ],
                    ],
                ],
                "cantSee" => [
                ]
            ]
        ]
    ],

    'case5' => [
        'setting' => [
            'description' => 'Cтраница значений полей заявок по статусу',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?sort=status',
            "pageObjects" => [
                "canSee" => [
                    "Заголовки" => [
                        [
                            "selector" => "//thead/tr/th[1]",
                            "value" => "ID Значения"
                        ],
                        [
                            "selector" => "//thead/tr/th[2]",
                            "value" => "Поле"
                        ],
                        [
                            "selector" => "//thead/tr/th[3]",
                            "value" => "Значение поля"
                        ],
                        [
                            "selector" => "//thead/tr/th[4]",
                            "value" => "Статус"
                        ],
                        [
                            "selector" => "//thead/tr/th[@class='action-column']",
                        ],
                    ],
                    "21-1" => [
                        [
                            "selector" => "//tbody/tr[2]/td[1]",
                            "value" => "1"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[2]",
                            "value" => "Наличие характеристик к товарам"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[3]",
                            "value" => "Предоставлены продактом"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[4]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[5]/a[@href='/bpm/field-values/update?id=1']",
                        ],
                    ],
                    "21-2" => [
                        [
                            "selector" => "//tbody/tr[3]/td[1]",
                            "value" => "2"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[2]",
                            "value" => "Наличие характеристик к товарам"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[3]",
                            "value" => "Предоставлены продактом частично. Без дополнительного поиска."
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[4]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[5]/a[@href='/bpm/field-values/update?id=2']",
                        ],
                    ],
                    "21-3" => [
                        [
                            "selector" => "//tbody/tr[4]/td[1]",
                            "value" => "3"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[2]",
                            "value" => "Наличие характеристик к товарам"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[3]",
                            "value" => "Предоставлены продактом частично. С дополнительным поиском."
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[4]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[5]/a[@href='/bpm/field-values/update?id=3']",
                        ],
                    ],
                    "24-1" => [
                        [
                            "selector" => "//tbody/tr[5]/td[1]",
                            "value" => "4"
                        ],
                        [
                            "selector" => "//tbody/tr[5]/td[2]",
                            "value" => "Обработка фото	"
                        ],
                        [
                            "selector" => "//tbody/tr[5]/td[3]",
                            "value" => "Без обработки (только кадрирование)"
                        ],
                        [
                            "selector" => "//tbody/tr[5]/td[4]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[5]/td[5]/a[@href='/bpm/field-values/update?id=4']",
                        ],
                    ],
                    "24-2" => [
                        [
                            "selector" => "//tbody/tr[6]/td[1]",
                            "value" => "5"
                        ],
                        [
                            "selector" => "//tbody/tr[6]/td[2]",
                            "value" => "Обработка фото"
                        ],
                        [
                            "selector" => "//tbody/tr[6]/td[3]",
                            "value" => "Удаление теней/фона (простая обработка)"
                        ],
                        [
                            "selector" => "//tbody/tr[6]/td[4]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[6]/td[5]/a[@href='/bpm/field-values/update?id=5']",
                        ],
                    ],
                    "24-3" => [
                        [
                            "selector" => "//tbody/tr[1]/td[1]",
                            "value" => "6"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[2]",
                            "value" => "Обработка фото"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[3]",
                            "value" => "Удаление теней/фона/ватермарков/цветокорекция"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[4]",
                            "value" => "Заблокированый"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[5]/a[@href='/bpm/field-values/update?id=6']",
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
            'description' => 'Cтраница значений полей заявок с фильтром по id',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?FieldValueSearch%5Bid%5D=6&FieldValueSearch%5Bfield_id%5D=&FieldValueSearch%5Bvalue%5D=&FieldValueSearch%5Bstatus%5D=',
            "pageObjects" => [
                "canSee" => [
                    "Заголовки" => [
                        [
                            "selector" => "//thead/tr/th[1]",
                            "value" => "ID Значения"
                        ],
                        [
                            "selector" => "//thead/tr/th[2]",
                            "value" => "Поле"
                        ],
                        [
                            "selector" => "//thead/tr/th[3]",
                            "value" => "Значение поля"
                        ],
                        [
                            "selector" => "//thead/tr/th[4]",
                            "value" => "Статус"
                        ],
                        [
                            "selector" => "//thead/tr/th[@class='action-column']",
                        ],
                    ],
                    "24-3" => [
                        [
                            "selector" => "//tbody/tr[1]/td[1]",
                            "value" => "6"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[2]",
                            "value" => "Обработка фото"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[3]",
                            "value" => "Удаление теней/фона/ватермарков/цветокорекция"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[4]",
                            "value" => "Заблокированый"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[5]/a[@href='/bpm/field-values/update?id=6']",
                        ],
                    ],
                ],
                "cantSee" => [
                    "21-1" => [
                        [
                            "selector" => "//tbody",
                            "value" => "Предоставлены продактом"
                        ],
                    ],
                    "21-2" => [
                        [
                            "selector" => "//tbody",
                            "value" => "Предоставлены продактом частично. Без дополнительного поиска."
                        ],
                    ],
                    "21-3" => [
                        [
                            "selector" => "//tbody",
                            "value" => "Предоставлены продактом частично. С дополнительным поиском."
                        ],
                    ],
                    "24-1" => [
                        [
                            "selector" => "//tbody",
                            "value" => "Без обработки (только кадрирование)"
                        ],
                    ],
                    "24-2" => [
                        [
                            "selector" => "//tbody",
                            "value" => "Удаление теней/фона (простая обработка)"
                        ],
                    ],
                ]
            ]
        ]
    ],

    'case7' => [
        'setting' => [
            'description' => 'Cтраница значений полей заявок с фильтром по полю',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?FieldValueSearch%5Bid%5D=&FieldValueSearch%5Bfield_id%5D=21&FieldValueSearch%5Bvalue%5D=&FieldValueSearch%5Bstatus%5D=',
            "pageObjects" => [
                "canSee" => [
                    "Заголовки" => [
                        [
                            "selector" => "//thead/tr/th[1]",
                            "value" => "ID Значения"
                        ],
                        [
                            "selector" => "//thead/tr/th[2]",
                            "value" => "Поле"
                        ],
                        [
                            "selector" => "//thead/tr/th[3]",
                            "value" => "Значение поля"
                        ],
                        [
                            "selector" => "//thead/tr/th[4]",
                            "value" => "Статус"
                        ],
                        [
                            "selector" => "//thead/tr/th[@class='action-column']",
                        ],
                    ],
                    "21-1" => [
                        [
                            "selector" => "//tbody/tr[1]/td[1]",
                            "value" => "1"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[2]",
                            "value" => "Наличие характеристик к товарам"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[3]",
                            "value" => "Предоставлены продактом"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[4]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[5]/a[@href='/bpm/field-values/update?id=1']",
                        ],
                    ],
                    "21-2" => [
                        [
                            "selector" => "//tbody/tr[2]/td[1]",
                            "value" => "2"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[2]",
                            "value" => "Наличие характеристик к товарам"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[3]",
                            "value" => "Предоставлены продактом частично. Без дополнительного поиска."
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[4]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[5]/a[@href='/bpm/field-values/update?id=2']",
                        ],
                    ],
                    "21-3" => [
                        [
                            "selector" => "//tbody/tr[3]/td[1]",
                            "value" => "3"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[2]",
                            "value" => "Наличие характеристик к товарам"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[3]",
                            "value" => "Предоставлены продактом частично. С дополнительным поиском."
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[4]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[5]/a[@href='/bpm/field-values/update?id=3']",
                        ],
                    ],
                ],
                "cantSee" => [
                    "24-1" => [
                        [
                            "selector" => "//tbody",
                            "value" => "Обработка фото"
                        ],
                        [
                            "selector" => "//tbody",
                            "value" => "Без обработки (только кадрирование)"
                        ],
                    ],
                    "24-2" => [
                        [
                            "selector" => "//tbody",
                            "value" => "Обработка фото"
                        ],
                        [
                            "selector" => "//tbody",
                            "value" => "Удаление теней/фона (простая обработка)"
                        ],
                    ],
                    "24-3" => [
                        [
                            "selector" => "//tbody",
                            "value" => "Обработка фото"
                        ],
                        [
                            "selector" => "//tbody",
                            "value" => "Удаление теней/фона/ватермарков/цветокорекция"
                        ],
                    ],
                ]
            ]
        ]
    ],

    'case8' => [
        'setting' => [
            'description' => 'Cтраница значений полей заявок с фильтром по значению',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?FieldValueSearch%5Bid%5D=&FieldValueSearch%5Bfield_id%5D=&FieldValueSearch%5Bvalue%5D=удал&FieldValueSearch%5Bstatus%5D=',
            "pageObjects" => [
                "canSee" => [
                    "Заголовки" => [
                        [
                            "selector" => "//thead/tr/th[1]",
                            "value" => "ID Значения"
                        ],
                        [
                            "selector" => "//thead/tr/th[2]",
                            "value" => "Поле"
                        ],
                        [
                            "selector" => "//thead/tr/th[3]",
                            "value" => "Значение поля"
                        ],
                        [
                            "selector" => "//thead/tr/th[4]",
                            "value" => "Статус"
                        ],
                        [
                            "selector" => "//thead/tr/th[@class='action-column']",
                        ],
                    ],
                    "24-2" => [
                        [
                            "selector" => "//tbody/tr[1]/td[1]",
                            "value" => "5"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[2]",
                            "value" => "Обработка фото"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[3]",
                            "value" => "Удаление теней/фона (простая обработка)"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[4]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[5]/a[@href='/bpm/field-values/update?id=5']",
                        ],
                    ],
                    "24-3" => [
                        [
                            "selector" => "//tbody/tr[2]/td[1]",
                            "value" => "6"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[2]",
                            "value" => "Обработка фото"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[3]",
                            "value" => "Удаление теней/фона/ватермарков/цветокорекция"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[4]",
                            "value" => "Заблокированый"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[5]/a[@href='/bpm/field-values/update?id=6']",
                        ],
                    ],
                ],
                "cantSee" => [
                    "21-1" => [
                        [
                            "selector" => "//tbody",
                            "value" => "Наличие характеристик к товарам"
                        ],
                        [
                            "selector" => "//tbody",
                            "value" => "Предоставлены продактом"
                        ],
                    ],
                    "21-2" => [
                        [
                            "selector" => "//tbody",
                            "value" => "Наличие характеристик к товарам"
                        ],
                        [
                            "selector" => "//tbody",
                            "value" => "Предоставлены продактом частично. Без дополнительного поиска."
                        ],
                    ],
                    "21-3" => [
                        [
                            "selector" => "//tbody",
                            "value" => "Наличие характеристик к товарам"
                        ],
                        [
                            "selector" => "//tbody",
                            "value" => "Предоставлены продактом частично. С дополнительным поиском."
                        ],
                    ],
                    "24-1" => [
                        [
                            "selector" => "//tbody",
                            "value" => "Без обработки (только кадрирование)"
                        ],
                    ],
                ]
            ]
        ]
    ],

    'case9' => [
        'setting' => [
            'description' => 'Cтраница значений полей заявок по статусу',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?FieldValueSearch%5Bid%5D=&FieldValueSearch%5Bfield_id%5D=&FieldValueSearch%5Bvalue%5D=&FieldValueSearch%5Bstatus%5D=0',
            "pageObjects" => [
                "canSee" => [
                    "Заголовки" => [
                        [
                            "selector" => "//thead/tr/th[1]",
                            "value" => "ID Значения"
                        ],
                        [
                            "selector" => "//thead/tr/th[2]",
                            "value" => "Поле"
                        ],
                        [
                            "selector" => "//thead/tr/th[3]",
                            "value" => "Значение поля"
                        ],
                        [
                            "selector" => "//thead/tr/th[4]",
                            "value" => "Статус"
                        ],
                        [
                            "selector" => "//thead/tr/th[@class='action-column']",
                        ],
                    ],
                    "24-3" => [
                        [
                            "selector" => "//tbody/tr[1]/td[1]",
                            "value" => "6"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[2]",
                            "value" => "Обработка фото"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[3]",
                            "value" => "Удаление теней/фона/ватермарков/цветокорекция"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[4]",
                            "value" => "Заблокированый"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[5]/a[@href='/bpm/field-values/update?id=6']",
                        ],
                    ],
                ],
                "cantSee" => [
                    "21-1" => [
                        [
                            "selector" => "//tbody",
                            "value" => "Наличие характеристик к товарам"
                        ],
                        [
                            "selector" => "//tbody",
                            "value" => "Предоставлены продактом"
                        ],
                    ],
                    "21-2" => [
                        [
                            "selector" => "//tbody",
                            "value" => "Наличие характеристик к товарам"
                        ],
                        [
                            "selector" => "//tbody",
                            "value" => "Предоставлены продактом частично. Без дополнительного поиска."
                        ],
                    ],
                    "21-3" => [
                        [
                            "selector" => "//tbody",
                            "value" => "Наличие характеристик к товарам"
                        ],
                        [
                            "selector" => "//tbody",
                            "value" => "Предоставлены продактом частично. С дополнительным поиском."
                        ],
                    ],
                    "24-1" => [
                        [
                            "selector" => "//tbody",
                            "value" => "Без обработки (только кадрирование)"
                        ],
                    ],
                    "24-2" => [
                        [
                            "selector" => "//tbody",
                            "value" => "Удаление теней/фона (простая обработка)"
                        ],
                    ],
                ]
            ]
        ]
    ],
];
