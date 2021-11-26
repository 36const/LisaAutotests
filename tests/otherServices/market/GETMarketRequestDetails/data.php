<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Заявка маркета в статусе 3 тип 1',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestParameters' => [
                'requestId' => 1,
                'sellerId' => 83,
            ],
            'responseCode' => 200,
            'responseBody' => [
                'status' => 200,
                'details' => [
                    'ID задачи' => 1,
                    'Статус исполнения' => 3,
                    'Id типа задачи' => 1,
                    'Тип' => 'Добавление новых товаров',
                    'Причины' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|YES ЛК',
                    'Комментарий' => 'Euromart',
                ],
            ],
            'db' => [
                'lisa_fixtures' => []
            ]
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Заявка маркета в статусе 4 тип 2',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case2.php',
        'provider_data' => [
            'requestParameters' => [
                'requestId' => 1,
                'sellerId' => 83,
            ],
            'responseCode' => 200,
            'responseBody' => [
                'status' => 200,
                'details' => [
                    'ID задачи' => 1,
                    'Статус исполнения' => 4,
                    'Id типа задачи' => 2,
                    'Тип' => 'Добавление/изменение информации в существующих товарах',
                    'Причины' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|Все товары уже есть ЛК | !@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|Другое ЛК',
                    'Комментарий' => "http://elk.dev.rozetka.com.ua/app/kibana#/dashboard/6b539350-27b3-11ea-825a-395acaa4d6c3?_g=&not_(refreshInterval:(pause:!t,value:0),time:(from:now%2FM,mode:quick,to:now%2FM))&_a=(description:'',filters:!(),fullScreenMode:!f,options:(darkTheme:!f,hidePanelTitles:!f,useMargins:!t),panels:!((embeddableConfig:(),gridData:(h:15,i:'6',w:24,x:24,y:30),id:'7ba18f80-2238-11ea-a052-1d55fc41757c',panelIndex:'6',type:visualization,version:'6.4.2'),(embeddableConfig:(),gridData:(h:15,i:'7',w:24,x:0,y:0),id:e8db8c70-21ae-11ea-825a-395acaa4d6c3,panelIndex:'7',type:visualization,version:'6.4.2'),(embeddableConfig:(),gridData:(h:15,i:'8',w:24,x:24,y:0),id:bd6c7d00-223b-11ea-a052-1d55fc41757c,panelIndex:'8',type:visualization,version:'6.4.2'),(embeddableConfig:(),gridData:(h:15,i:'9',w:12,x:0,y:15),id:fd87de60-2241-11ea-a052-1d55fc41757c,panelIndex:'9',type:visualization,version:'6.4.2'),(embeddableConfig:(),gridData:(h:15,i:'10',w:12,x:12,y:15),id:b8a458e0-2283-11ea-a052-1d55fc41757c,panelIndex:'10',type:visualization,version:'6.4.2'),(embeddableConfig:(),gridData:(h:15,i:'11',w:24,x:24,y:45),id:'1e605320-2287-11ea-825a-395acaa4d6c3',panelIndex:'11',type:visualization,version:'6.4.2'),(embeddableConfig:(),gridData:(h:15,i:'12',w:24,x:0,y:45),id:f280c580-228d-11ea-825a-395acaa4d6c3,panelIndex:'12',type:visualization,version:'6.4.2'),(embeddableConfig:(),gridData:(h:15,i:'13',w:24,x:24,y:15),id:'36fe2110-24bb-11ea-a052-1d55fc41757c',panelIndex:'13',type:visualization,version:'6.4.2'),(embeddableConfig:(),gridData:(h:15,i:'14',w:24,x:0,y:30),id:'6f8eba80-24ca-11ea-825a-395acaa4d6c3',panelIndex:'14',type:visualization,version:'6.4.2')),query:(language:kuery,query:''),timeRestore:!t,title:'Goods%20Experimental%20Copy',viewMode:view)",
                ],
            ],
            'db' => [
                'lisa_fixtures' => []
            ]
        ]
    ],

    'case3' => [
        'setting' => [
            'description' => 'Заявка маркета в статусе 8 тип 1',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case3.php',
        'provider_data' => [
            'requestParameters' => [
                'requestId' => 1,
                'sellerId' => 83,
            ],
            'responseCode' => 200,
            'responseBody' => [
                'status' => 200,
                'details' => [
                    'ID задачи' => 1,
                    'Статус исполнения' => 8,
                    'Id типа задачи' => 1,
                    'Тип' => 'Добавление новых товаров',
                    'Фактическая дата завершения' => '2020-01-01 00:00:04',
                    'Количество обработанных товаров' => '10',
                    'Количество скрытых товаров' => '20',
//                    'Количество сгруппированых товаров' => '30',
                ],
            ],
            'db' => [
                'lisa_fixtures' => []
            ]
        ]
    ],

    'case4' => [
        'setting' => [
            'description' => 'Заявка маркета в статусе 9 тип 2',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case4.php',
        'provider_data' => [
            'requestParameters' => [
                'requestId' => 1,
                'sellerId' => 83,
            ],
            'responseCode' => 200,
            'responseBody' => [
                'status' => 200,
                'details' => [
                    'ID задачи' => 1,
                    'Статус исполнения' => 9,
                    'Id типа задачи' => 2,
                    'Тип' => 'Добавление/изменение информации в существующих товарах',
                    'Фактическая дата завершения' => '2020-01-01 00:00:04',
                    'Количество изменённых товаров' => '10',
                    'Количество сгруппированых товаров' => '30',
                ],
            ],
            'db' => [
                'lisa_fixtures' => []
            ]
        ]
    ],

    'case5' => [
        'setting' => [
            'description' => 'Заявка маркета в статусе 11 тип 3',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case5.php',
        'provider_data' => [
            'requestParameters' => [
                'requestId' => 1,
                'sellerId' => 83,
            ],
            'responseCode' => 200,
            'responseBody' => [
                'status' => 200,
                'details' => [
                    'ID задачи' => 1,
                    'Статус исполнения' => 11,
                    'Id типа задачи' => 3,
                    'Тип' => 'Перенос товаров',
                    'Фактическая дата завершения' => '2020-01-01 00:00:04',
                    'Количество изменённых товаров' => '10',
                ],
            ],
            'db' => [
                'lisa_fixtures' => []
            ]
        ]
    ],

    'case6' => [
        'setting' => [
            'description' => 'Заявка маркета в статусе 8 тип 4',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case6.php',
        'provider_data' => [
            'requestParameters' => [
                'requestId' => 1,
                'sellerId' => 83,
            ],
            'responseCode' => 200,
            'responseBody' => [
                'status' => 200,
                'details' => [
                    'ID задачи' => 1,
                    'Статус исполнения' => 8,
                    'Id типа задачи' => 4,
                    'Тип' => 'Группировка товаров',
                    'Фактическая дата завершения' => '2020-01-01 00:00:04',
                    'Количество сгруппированых товаров' => '30',
                ],
            ],
            'db' => [
                'lisa_fixtures' => []
            ]
        ]
    ],

    'case7' => [
        'setting' => [
            'description' => 'Заявка маркета в статусе 9 тип 6',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case7.php',
        'provider_data' => [
            'requestParameters' => [
                'requestId' => 1,
                'sellerId' => 83,
            ],
            'responseCode' => 200,
            'responseBody' => [
                'status' => 200,
                'details' => [
                    'ID задачи' => 1,
                    'Статус исполнения' => 9,
                    'Id типа задачи' => 6,
                    'Тип' => 'Проверка скрытых товаров',
                    'Фактическая дата завершения' => '2020-01-01 00:00:04',
                    'Количество сгруппированых товаров' => '30',
                    'Количество изменённых товаров' => '10',
                ],
            ],
            'db' => [
                'lisa_fixtures' => []
            ]
        ]
    ],

    'case8' => [
        'setting' => [
            'description' => 'Заявка маркета в статусе 11 тип 13',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case8.php',
        'provider_data' => [
            'requestParameters' => [
                'requestId' => 1,
                'sellerId' => 83,
            ],
            'responseCode' => 200,
            'responseBody' => [
                'status' => 200,
                'details' => [
                    'ID задачи' => 1,
                    'Статус исполнения' => 11,
                    'Id типа задачи' => 13,
                    'Тип' => 'Добавление/изменение видео',
                    'Фактическая дата завершения' => '2020-01-01 00:00:04',
                    'Количество товаров, к которым добавлены видео' => '10',
                ],
            ],
            'db' => [
                'lisa_fixtures' => []
            ]
        ]
    ],

    'case9' => [
        'setting' => [
            'description' => 'Заявка маркета в статусе 9 тип 14',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case9.php',
        'provider_data' => [
            'requestParameters' => [
                'requestId' => 1,
                'sellerId' => 83,
            ],
            'responseCode' => 200,
            'responseBody' => [
                'status' => 200,
                'details' => [
                    'ID задачи' => 1,
                    'Статус исполнения' => 9,
                    'Id типа задачи' => 14,
                    'Тип' => 'Добавление/изменение размерной сетки',
                    'Фактическая дата завершения' => '2020-01-01 00:00:04',
                    'Количество добавленных размерных сеток' => '10',
                ],
            ],
            'db' => [
                'lisa_fixtures' => []
            ]
        ]
    ],

    'case10' => [
        'setting' => [
            'description' => 'Ошибка при заявке маркета в статусе 3 тип 5',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case10.php',
        'provider_data' => [
            'requestParameters' => [
                'requestId' => 1,
                'sellerId' => 83,
            ],
            'responseCode' => 200,
            'responseBody' => [
                'status' => 423,
                'error' => 'Невозможно получить данные по заявке данного типа.',
            ],
            'db' => [
                'lisa_fixtures' => []
            ]
        ]
    ],

    'case11' => [
        'setting' => [
            'description' => 'Ошибка при заявке маркета в статусе 4 тип 7',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case11.php',
        'provider_data' => [
            'requestParameters' => [
                'requestId' => 1,
                'sellerId' => 83,
            ],
            'responseCode' => 200,
            'responseBody' => [
                'status' => 423,
                'error' => 'Невозможно получить данные по заявке данного типа.',
            ],
            'db' => [
                'lisa_fixtures' => []
            ]
        ]
    ],

    'case12' => [
        'setting' => [
            'description' => 'Ошибка при заявке маркета в статусе 8 тип 8',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case12.php',
        'provider_data' => [
            'requestParameters' => [
                'requestId' => 1,
                'sellerId' => 83,
            ],
            'responseCode' => 200,
            'responseBody' => [
                'status' => 423,
                'error' => 'Невозможно получить данные по заявке данного типа.',
            ],
            'db' => [
                'lisa_fixtures' => []
            ]
        ]
    ],

    'case13' => [
        'setting' => [
            'description' => 'Ошибка при заявке маркета в статусе 9 тип 9',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case13.php',
        'provider_data' => [
            'requestParameters' => [
                'requestId' => 1,
                'sellerId' => 83,
            ],
            'responseCode' => 200,
            'responseBody' => [
                'status' => 423,
                'error' => 'Невозможно получить данные по заявке данного типа.',
            ],
            'db' => [
                'lisa_fixtures' => []
            ]
        ]
    ],

    'case14' => [
        'setting' => [
            'description' => 'Ошибка при заявке маркета в статусе 11 тип 10',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case14.php',
        'provider_data' => [
            'requestParameters' => [
                'requestId' => 1,
                'sellerId' => 83,
            ],
            'responseCode' => 200,
            'responseBody' => [
                'status' => 423,
                'error' => 'Невозможно получить данные по заявке данного типа.',
            ],
            'db' => [
                'lisa_fixtures' => []
            ]
        ]
    ],

    'case15' => [
        'setting' => [
            'description' => 'Ошибка при заявке маркета в статусе 3 тип 11',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case15.php',
        'provider_data' => [
            'requestParameters' => [
                'requestId' => 1,
                'sellerId' => 83,
            ],
            'responseCode' => 200,
            'responseBody' => [
                'status' => 423,
                'error' => 'Невозможно получить данные по заявке данного типа.',
            ],
            'db' => [
                'lisa_fixtures' => []
            ]
        ]
    ],

    'case16' => [
        'setting' => [
            'description' => 'Ошибка при заявке маркета в статусе 4 тип 12',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case16.php',
        'provider_data' => [
            'requestParameters' => [
                'requestId' => 1,
                'sellerId' => 83,
            ],
            'responseCode' => 200,
            'responseBody' => [
                'status' => 423,
                'error' => 'Невозможно получить данные по заявке данного типа.',
            ],
            'db' => [
                'lisa_fixtures' => []
            ]
        ]
    ],

    'case17' => [
        'setting' => [
            'description' => 'Ошибка при заявке маркета в статусе 9 тип 15',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case17.php',
        'provider_data' => [
            'requestParameters' => [
                'requestId' => 1,
                'sellerId' => 83,
            ],
            'responseCode' => 200,
            'responseBody' => [
                'status' => 423,
                'error' => 'Невозможно получить данные по заявке данного типа.',
            ],
            'db' => [
                'lisa_fixtures' => []
            ]
        ]
    ],

    'case18' => [
        'setting' => [
            'description' => 'Ошибка при заявке маркета в статусе 1 тип 1',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case18.php',
        'provider_data' => [
            'requestParameters' => [
                'requestId' => 1,
                'sellerId' => 83,
            ],
            'responseCode' => 200,
            'responseBody' => [
                'status' => 423,
                'error' => 'Невозможно получить данные по заявке в текущем статусе.',
            ],
            'db' => [
                'lisa_fixtures' => []
            ]
        ],
    ],

    'case19' => [
        'setting' => [
            'description' => 'Ошибка при заявке маркета в статусе 2 тип 2',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case19.php',
        'provider_data' => [
            'requestParameters' => [
                'requestId' => 1,
                'sellerId' => 83,
            ],
            'responseCode' => 200,
            'responseBody' => [
                'status' => 423,
                'error' => 'Невозможно получить данные по заявке в текущем статусе.',
            ],
            'db' => [
                'lisa_fixtures' => []
            ]
        ]
    ],

    'case20' => [
        'setting' => [
            'description' => 'Ошибка при заявке маркета в статусе 5 тип 3',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case20.php',
        'provider_data' => [
            'requestParameters' => [
                'requestId' => 1,
                'sellerId' => 83,
            ],
            'responseCode' => 200,
            'responseBody' => [
                'status' => 423,
                'error' => 'Невозможно получить данные по заявке в текущем статусе.',
            ],
            'db' => [
                'lisa_fixtures' => []
            ]
        ]
    ],

    'case21' => [
        'setting' => [
            'description' => 'Ошибка при заявке маркета в статусе 6 тип 4',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case21.php',
        'provider_data' => [
            'requestParameters' => [
                'requestId' => 1,
                'sellerId' => 83,
            ],
            'responseCode' => 200,
            'responseBody' => [
                'status' => 423,
                'error' => 'Невозможно получить данные по заявке в текущем статусе.',
            ],
            'db' => [
                'lisa_fixtures' => []
            ]
        ]
    ],

    'case22' => [
        'setting' => [
            'description' => 'Ошибка при заявке маркета в статусе 7 тип 6',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case22.php',
        'provider_data' => [
            'requestParameters' => [
                'requestId' => 1,
                'sellerId' => 83,
            ],
            'responseCode' => 200,
            'responseBody' => [
                'status' => 423,
                'error' => 'Невозможно получить данные по заявке в текущем статусе.',
            ],
            'db' => [
                'lisa_fixtures' => []
            ]
        ]
    ],

    'case23' => [
        'setting' => [
            'description' => 'Ошибка при указании чужого sellerId',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestParameters' => [
                'requestId' => 1,
                'sellerId' => 883,
            ],
            'responseCode' => 200,
            'responseBody' => [
                'status' => 404,
                'error' => 'Модель класа app\\models\\Request не найдена по параметрам. Conditions:{"id":1,"seller_id":883}',
            ],
            'db' => [
                'lisa_fixtures' => []
            ]
        ]
    ],

    'case24' => [
        'setting' => [
            'description' => 'Ошибка при отсутствии sellerId',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestParameters' => [
                'requestId' => 1,
                //'sellerId' => 883,
            ],
            'responseCode' => 400,
            'responseBody' => [
                'code' => 0,
                'status' => 400,
                'name' => 'Bad Request',
                'message' => 'Отсутствуют обязательные параметры: sellerId',
                'type' => 'yii\\web\\BadRequestHttpException',
            ],
            'db' => [
                'lisa_fixtures' => [
                    'exceptions' => [
                        [
                            'id' => 1,
                            'date >=' => date('Y-m-d'),
                            'class' => 'yii\\web\\BadRequestHttpException',
                            'message' => 'Отсутствуют обязательные параметры: sellerId',
                            'code' => 0,
                            'user' => '4',
                        ]
                    ]
                ]
            ]
        ]
    ],

];