<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Cтраница взаимоисключающих чекбоксов',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '',
            "pageObjects" => [
                "canSee" => [
                    "Заголовки" => [
                        [
                            "selector" => "//thead/tr/th[1]",
                            "value" => "Поле"
                        ],
                        [
                            "selector" => "//thead/tr/th[2]",
                            "value" => "Исключающее поле"
                        ],
                        [
                            "selector" => "//thead/tr/th[3]",
                            "value" => "Действия"
                        ],
                    ],
                    "1-2" => [
                        [
                            "selector" => "//tbody/tr[1]/td[1]",
                            "value" => "Ручная загрузка"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[2]",
                            "value" => "Пакетная загрузка"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[3]/a[@href='/bpm/excluded-fields/delete?field_id=1&excluded_field_id=2']",
                        ],
                    ],
                    "10-5" => [
                        [
                            "selector" => "//tbody/tr[2]/td[1]",
                            "value" => "Уценка"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[2]",
                            "value" => "Стоп-бренды"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[3]/a[@href='/bpm/excluded-fields/delete?field_id=10&excluded_field_id=5']",
                        ],
                    ],
                    "10-11" => [
                        [
                            "selector" => "//tbody/tr[3]/td[1]",
                            "value" => "Уценка"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[2]",
                            "value" => "Уценка 2"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[3]/a[@href='/bpm/excluded-fields/delete?field_id=10&excluded_field_id=11']",
                        ],
                    ],
                    "11-5" => [
                        [
                            "selector" => "//tbody/tr[4]/td[1]",
                            "value" => "Уценка 2"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[2]",
                            "value" => "Стоп-бренды"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[3]/a[@href='/bpm/excluded-fields/delete?field_id=11&excluded_field_id=5']",
                        ],
                    ],
                    "11-6" => [
                        [
                            "selector" => "//tbody/tr[5]/td[1]",
                            "value" => "Уценка 2"
                        ],
                        [
                            "selector" => "//tbody/tr[5]/td[2]",
                            "value" => "Точки входа"
                        ],
                        [
                            "selector" => "//tbody/tr[5]/td[3]/a[@href='/bpm/excluded-fields/delete?field_id=11&excluded_field_id=6']",
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
            'description' => 'Cтраница взаимоисключающих чекбоксов с сортировкой по полю',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?sort=-field_id',
            "pageObjects" => [
                "canSee" => [
                    "Заголовки" => [
                        [
                            "selector" => "//thead/tr/th[1]",
                            "value" => "Поле"
                        ],
                        [
                            "selector" => "//thead/tr/th[2]",
                            "value" => "Исключающее поле"
                        ],
                        [
                            "selector" => "//thead/tr/th[3]",
                            "value" => "Действия"
                        ],
                    ],
                    "1-2" => [
                        [
                            "selector" => "//tbody/tr[5]/td[1]",
                            "value" => "Ручная загрузка"
                        ],
                        [
                            "selector" => "//tbody/tr[5]/td[2]",
                            "value" => "Пакетная загрузка"
                        ],
                        [
                            "selector" => "//tbody/tr[5]/td[3]/a[@href='/bpm/excluded-fields/delete?field_id=1&excluded_field_id=2']",
                        ],
                    ],
                    "10-5" => [
                        [
                            "selector" => "//tbody/tr[4]/td[1]",
                            "value" => "Уценка"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[2]",
                            "value" => "Стоп-бренды"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[3]/a[@href='/bpm/excluded-fields/delete?field_id=10&excluded_field_id=5']",
                        ],
                    ],
                    "10-11" => [
                        [
                            "selector" => "//tbody/tr[3]/td[1]",
                            "value" => "Уценка"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[2]",
                            "value" => "Уценка 2"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[3]/a[@href='/bpm/excluded-fields/delete?field_id=10&excluded_field_id=11']",
                        ],
                    ],
                    "11-5" => [
                        [
                            "selector" => "//tbody/tr[2]/td[1]",
                            "value" => "Уценка 2"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[2]",
                            "value" => "Стоп-бренды"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[3]/a[@href='/bpm/excluded-fields/delete?field_id=11&excluded_field_id=5']",
                        ],
                    ],
                    "11-6" => [
                        [
                            "selector" => "//tbody/tr[1]/td[1]",
                            "value" => "Уценка 2"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[2]",
                            "value" => "Точки входа"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[3]/a[@href='/bpm/excluded-fields/delete?field_id=11&excluded_field_id=6']",
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
            'description' => 'Cтраница взаимоисключающих чекбоксов с сортировкой по исключ. полю',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?sort=excluded_field_id',
            "pageObjects" => [
                "canSee" => [
                    "Заголовки" => [
                        [
                            "selector" => "//thead/tr/th[1]",
                            "value" => "Поле"
                        ],
                        [
                            "selector" => "//thead/tr/th[2]",
                            "value" => "Исключающее поле"
                        ],
                        [
                            "selector" => "//thead/tr/th[3]",
                            "value" => "Действия"
                        ],
                    ],
                    "1-2" => [
                        [
                            "selector" => "//tbody/tr[1]/td[1]",
                            "value" => "Ручная загрузка"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[2]",
                            "value" => "Пакетная загрузка"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[3]/a[@href='/bpm/excluded-fields/delete?field_id=1&excluded_field_id=2']",
                        ],
                    ],
                    "10-5" => [
                        [
                            "selector" => "//tbody/tr[2]/td[1]",
                            "value" => "Уценка"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[2]",
                            "value" => "Стоп-бренды"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[3]/a[@href='/bpm/excluded-fields/delete?field_id=10&excluded_field_id=5']",
                        ],
                    ],
                    "10-11" => [
                        [
                            "selector" => "//tbody/tr[5]/td[1]",
                            "value" => "Уценка"
                        ],
                        [
                            "selector" => "//tbody/tr[5]/td[2]",
                            "value" => "Уценка 2"
                        ],
                        [
                            "selector" => "//tbody/tr[5]/td[3]/a[@href='/bpm/excluded-fields/delete?field_id=10&excluded_field_id=11']",
                        ],
                    ],
                    "11-5" => [
                        [
                            "selector" => "//tbody/tr[3]/td[1]",
                            "value" => "Уценка 2"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[2]",
                            "value" => "Стоп-бренды"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[3]/a[@href='/bpm/excluded-fields/delete?field_id=11&excluded_field_id=5']",
                        ],
                    ],
                    "11-6" => [
                        [
                            "selector" => "//tbody/tr[4]/td[1]",
                            "value" => "Уценка 2"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[2]",
                            "value" => "Точки входа"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[3]/a[@href='/bpm/excluded-fields/delete?field_id=11&excluded_field_id=6']",
                        ],
                    ],
                ],
                "cantSee" => [
                ]
            ]
        ]
    ],
];
