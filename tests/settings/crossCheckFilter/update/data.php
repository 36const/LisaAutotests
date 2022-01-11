<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Создание КЧ-фильтра 1',
//группа	все
//блок	все
//поиск	эти
//список	эти
//чекбокс	равно да
//целое	=
//дробное	=
//дата	в промежутке
//текст	содержит
//блоков	один
//групп	одна
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'id' => 1,
                'team_id' => 1,
                'limit' => 50,
                'order_by' => NULL,
                'conditions' => [
                    'group1' => [
                        'blocks' => [
                            'block1' => [
                                'status' => [
                                    'value' => [
                                        0 => '8',
                                        1 => '9',
                                    ],
                                    'operator' => 'in',
                                ],
                                'awaiting_correction' => [
                                    'value' => [
                                        0 => '1',
                                    ],
                                    'operator' => 'in',
                                ],
                                'conditionsConnectOperator' => 'and',
                            ],
                            'block2' => [
                                1 => [
                                    'value' => '1',
                                    'operator' => '=',
                                ],
                                23 => [
                                    'value' => [
                                        0 => '13',
                                        1 => '14',
                                    ],
                                    'operator' => 'in',
                                ],
                                52 => [
                                    'value' => '0.5',
                                    'operator' => '=',
                                ],
                                116 => [
                                    'value' => '10',
                                    'operator' => '=',
                                ],
                                'conditionsConnectOperator' => 'and',
                                'actual_finish_date' => [
                                    'value' => '2021-10-04 00:00:00to2021-10-17 23:59:59',
                                    'operator' => 'between',
                                ],
                                'author_id' => [
                                    'value' => [
                                        0 => 36,
                                    ],
                                    'operator' => 'in',
                                ],
                                'subject' => [
                                    'value' => 'фывафыва',
                                    'operator' => 'ilike',
                                ],
                            ],
                        ],
                        'blocksConnectOperator' => 'and',
                    ],
                ],
            ],
            'responseBody' => [
                'model' => [
                    'id' => 1,
                    'team_id' => 1,
                    'limit' => 50,
                    'order_by' => NULL,
                    'conditions' => '{"group1":{"blocks":{"block1":{"status":{"value":["8","9"],"operator":"in"},"awaiting_correction":{"value":["1"],"operator":"in"},"conditionsConnectOperator":"and"},"block2":{"1":{"value":"1","operator":"="},"23":{"value":["13","14"],"operator":"in"},"52":{"value":"0.5","operator":"="},"116":{"value":"10","operator":"="},"conditionsConnectOperator":"and","actual_finish_date":{"value":"2021-10-04 00:00:00to2021-10-17 23:59:59","operator":"between"},"author_id":{"value":[36],"operator":"in"},"subject":{"value":"фывафыва","operator":"ilike"}}},"blocksConnectOperator":"and"}}',
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'cross_check_filters' => array_replace_recursive(
                        (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['cross_check_filters'],
                        [
                            [
                                'id' => 1,
                                'team_id' => 1,
                                'limit' => 50,
                                'order_by' => null,
                                'conditions' => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "awaiting_correction": {"value": ["1"], "operator": "in"}, "conditionsConnectOperator": "and"}, "block2": {"1": {"value": "1", "operator": "="}, "23": {"value": ["13", "14"], "operator": "in"}, "52": {"value": "0.5", "operator": "="}, "116": {"value": "10", "operator": "="}, "subject": {"value": "фывафыва", "operator": "ilike"}, "author_id": {"value": [36], "operator": "in"}, "actual_finish_date": {"value": "2021-10-04 00:00:00to2021-10-17 23:59:59", "operator": "between"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}',
                            ],
                        ]
                    ),
                    'common_log' => [
                        [
                            'id' => 1,
                            'entity' => 'cross_check_filters',
                            'entity_id' => 1,
                            'old_value' => '{"conditions": "{\\"group1\\": {\\"blocks\\": {\\"block1\\": {\\"status\\": {\\"value\\": [\\"8\\", \\"9\\"], \\"operator\\": \\"in\\"}, \\"cross_check_status\\": {\\"value\\": [\\"2\\"], \\"operator\\": \\"not in\\"}, \\"awaiting_correction\\": {\\"value\\": [\\"0\\"], \\"operator\\": \\"in\\"}, \\"conditionsConnectOperator\\": \\"and\\"}, \\"block2\\": {\\"1\\": {\\"value\\": \\"0\\", \\"operator\\": \\"=\\"}, \\"2\\": {\\"value\\": \\"1\\", \\"operator\\": \\"=\\"}, \\"3\\": {\\"value\\": \\"0\\", \\"operator\\": \\"=\\"}, \\"4\\": {\\"value\\": \\"1\\", \\"operator\\": \\"=\\"}, \\"5\\": {\\"value\\": \\"0\\", \\"operator\\": \\"=\\"}, \\"6\\": {\\"value\\": \\"1\\", \\"operator\\": \\"=\\"}, \\"7\\": {\\"value\\": \\"0\\", \\"operator\\": \\"=\\"}, \\"8\\": {\\"value\\": \\"1\\", \\"operator\\": \\"=\\"}, \\"9\\": {\\"value\\": \\"0\\", \\"operator\\": \\"=\\"}, \\"10\\": {\\"value\\": \\"1\\", \\"operator\\": \\"=\\"}, \\"11\\": {\\"value\\": \\"0\\", \\"operator\\": \\"=\\"}, \\"12\\": {\\"value\\": \\"1\\", \\"operator\\": \\"=\\"}, \\"13\\": {\\"value\\": \\"0\\", \\"operator\\": \\"=\\"}, \\"14\\": {\\"value\\": \\"1\\", \\"operator\\": \\"=\\"}, \\"15\\": {\\"value\\": \\"0\\", \\"operator\\": \\"=\\"}, \\"16\\": {\\"value\\": \\"1\\", \\"operator\\": \\"=\\"}, \\"17\\": {\\"value\\": \\"0\\", \\"operator\\": \\"=\\"}, \\"18\\": {\\"value\\": \\"1\\", \\"operator\\": \\"=\\"}, \\"19\\": {\\"value\\": \\"0\\", \\"operator\\": \\"=\\"}, \\"123\\": {\\"value\\": \\"1\\", \\"operator\\": \\"=\\"}, \\"124\\": {\\"value\\": \\"0\\", \\"operator\\": \\"=\\"}, \\"125\\": {\\"value\\": \\"1\\", \\"operator\\": \\"=\\"}, \\"126\\": {\\"value\\": \\"0\\", \\"operator\\": \\"=\\"}, \\"127\\": {\\"value\\": \\"1\\", \\"operator\\": \\"=\\"}, \\"159\\": {\\"value\\": \\"0\\", \\"operator\\": \\"=\\"}, \\"160\\": {\\"value\\": \\"1\\", \\"operator\\": \\"=\\"}, \\"169\\": {\\"value\\": \\"0\\", \\"operator\\": \\"=\\"}, \\"conditionsConnectOperator\\": \\"or\\"}, \\"block3\\": {\\"20\\": {\\"value\\": [\\"66\\", \\"65\\", \\"64\\"], \\"operator\\": \\"in\\"}, \\"21\\": {\\"value\\": [\\"5\\", \\"3\\", \\"4\\"], \\"operator\\": \\"not in\\"}, \\"22\\": {\\"value\\": [\\"10\\", \\"9\\", \\"8\\"], \\"operator\\": \\"in\\"}, \\"23\\": {\\"value\\": [\\"14\\", \\"13\\", \\"12\\"], \\"operator\\": \\"not in\\"}, \\"24\\": {\\"value\\": [\\"173\\"], \\"operator\\": \\"in\\"}, \\"25\\": {\\"value\\": [\\"20\\"], \\"operator\\": \\"not in\\"}, \\"26\\": {\\"value\\": [\\"174\\"], \\"operator\\": \\"in\\"}, \\"27\\": {\\"value\\": [\\"26\\"], \\"operator\\": \\"not in\\"}, \\"28\\": {\\"value\\": [\\"27\\", \\"28\\"], \\"operator\\": \\"in\\"}, \\"29\\": {\\"value\\": [\\"31\\", \\"30\\"], \\"operator\\": \\"not in\\"}, \\"30\\": {\\"value\\": [\\"40\\", \\"39\\", \\"41\\"], \\"operator\\": \\"in\\"}, \\"31\\": {\\"value\\": [\\"49\\", \\"48\\"], \\"operator\\": \\"not in\\"}, \\"32\\": {\\"value\\": [\\"53\\", \\"52\\"], \\"operator\\": \\"in\\"}, \\"conditionsConnectOperator\\": \\"and\\"}, \\"block4\\": {\\"type_id\\": {\\"value\\": [\\"15\\"], \\"operator\\": \\"in\\"}, \\"priority\\": {\\"value\\": [\\"3\\", \\"2\\"], \\"operator\\": \\"in\\"}, \\"direction\\": {\\"value\\": [\\"1\\"], \\"operator\\": \\"not in\\"}, \\"team_direction\\": {\\"value\\": [\\"1\\", \\"2\\", \\"3\\"], \\"operator\\": \\"not in\\"}, \\"previous_status\\": {\\"value\\": [\\"1\\", \\"3\\", \\"5\\"], \\"operator\\": \\"in\\"}, \\"report_period_id\\": {\\"value\\": [\\"4\\", \\"3\\"], \\"operator\\": \\"in\\"}, \\"sv_report_periods\\": {\\"value\\": [\\"1\\", \\"2\\"], \\"operator\\": \\"not in\\"}, \\"conditionsConnectOperator\\": \\"or\\"}}, \\"blocksConnectOperator\\": \\"and\\"}, \\"group2\\": {\\"blocks\\": {\\"block1\\": {\\"author_id\\": {\\"value\\": [11, 12], \\"operator\\": \\"in\\"}, \\"seller_id\\": {\\"value\\": [5, -2, 0], \\"operator\\": \\"not in\\"}, \\"manager_id\\": {\\"value\\": [13, 14], \\"operator\\": \\"in\\"}, \\"category_id\\": {\\"value\\": [1], \\"operator\\": \\"not in\\"}, \\"supervisor_id\\": {\\"value\\": [33, 36], \\"operator\\": \\"not in\\"}, \\"rz_category_id\\": {\\"value\\": [4641568, 4652996, 4629305], \\"operator\\": \\"in\\"}, \\"cross_check_manager_id\\": {\\"value\\": [15, 16], \\"operator\\": \\"in\\"}, \\"conditionsConnectOperator\\": \\"and\\"}, \\"block2\\": {\\"49\\": {\\"value\\": \\"1\\", \\"operator\\": \\"=\\"}, \\"50\\": {\\"value\\": \\"0\\", \\"operator\\": \\"!=\\"}, \\"51\\": {\\"value\\": \\"0.1\\", \\"operator\\": \\">=\\"}, \\"52\\": {\\"value\\": \\"1.1\\", \\"operator\\": \\"<=\\"}, \\"53\\": {\\"value\\": \\"99999999\\", \\"operator\\": \\">\\"}, \\"54\\": {\\"value\\": \\"11111111\\", \\"operator\\": \\"<\\"}, \\"65\\": {\\"value\\": \\"1-9\\", \\"operator\\": \\"between\\"}, \\"66\\": {\\"value\\": \\"5\\", \\"operator\\": \\"=\\"}, \\"67\\": {\\"value\\": \\"0.5\\", \\"operator\\": \\"!=\\"}, \\"73\\": {\\"value\\": \\"55555555\\", \\"operator\\": \\">=\\"}, \\"74\\": {\\"value\\": \\"1.11\\", \\"operator\\": \\"<=\\"}, \\"75\\": {\\"value\\": \\"0.99\\", \\"operator\\": \\">\\"}, \\"114\\": {\\"value\\": \\"0\\", \\"operator\\": \\"<\\"}, \\"child_count\\": {\\"value\\": \\"9\\", \\"operator\\": \\"=\\"}, \\"amount_to_work\\": {\\"value\\": \\"1-3\\", \\"operator\\": \\"between\\"}, \\"conditionsConnectOperator\\": \\"or\\"}, \\"block3\\": {\\"created_at\\": {\\"value\\": \\"2021-10-18 00:00:00to2021-10-31 23:59:59\\", \\"operator\\": \\"not between\\"}, \\"actual_start_date\\": {\\"value\\": \\"2021-10-01 00:00:00to2021-10-01 01:01:00\\", \\"operator\\": \\"between\\"}, \\"actual_finish_date\\": {\\"value\\": \\"2021-10-01 00:00:00to2021-10-01 23:59:59\\", \\"operator\\": \\"not between\\"}, \\"planned_start_date\\": {\\"value\\": \\"2021-10-11 00:00:00to2021-10-11 23:59:59\\", \\"operator\\": \\"between\\"}, \\"planned_finish_date\\": {\\"value\\": \\"2021-01-01 00:00:00to2021-02-28 23:59:59\\", \\"operator\\": \\"not between\\"}, \\"supervisor_check_date\\": {\\"value\\": \\"2021-10-04 00:00:00to2021-10-04 23:59:59\\", \\"operator\\": \\"not between\\"}, \\"last_change_status_date\\": {\\"value\\": \\"2021-10-01 00:00:00to2021-10-31 23:59:59\\", \\"operator\\": \\"between\\"}, \\"supervisor_process_date\\": {\\"value\\": \\"2021-10-25 23:00:00to2021-10-31 00:59:00\\", \\"operator\\": \\"between\\"}, \\"conditionsConnectOperator\\": \\"and\\"}, \\"block4\\": {\\"120\\": {\\"value\\": \\"http://splitter.docker/lisa/#/cross-check-filter/update/1\\", \\"operator\\": \\"ilike\\"}, \\"121\\": {\\"value\\": \\"http://splitter.docker/lisa/#/cross-check-filter/update/1\\", \\"operator\\": \\"not like\\"}, \\"156\\": {\\"value\\": \\"http://splitter.docker/lisa/#/cross-check-filter/update/1\\", \\"operator\\": \\"ilike\\"}, \\"157\\": {\\"value\\": \\"http://splitter.docker/lisa/#/cross-check-filter/update/1\\", \\"operator\\": \\"not like\\"}, \\"subject\\": {\\"value\\": \\"=~}!@#$%^&*()_+`-]\'/[;.,}\\\\\\"?{:>\\\\\\\\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО\\", \\"operator\\": \\"ilike\\"}, \\"result_comment\\": {\\"value\\": \\"=~}!@#$%^&*()_+`-]\'/[;.,}\\\\\\"?{:>\\\\\\\\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО\\", \\"operator\\": \\"not like\\"}, \\"recommendations\\": {\\"value\\": \\"ЙЦУКЕНГШЩЗХЪqwertyuiop[]\\", \\"operator\\": \\"ilike\\"}, \\"correction_comment\\": {\\"value\\": \\"1234\\", \\"operator\\": \\"not like\\"}, \\"supervisor_comment\\": {\\"value\\": \\"ЯЧСМ\\", \\"operator\\": \\"ilike\\"}, \\"conditionsConnectOperator\\": \\"or\\"}}, \\"blocksConnectOperator\\": \\"or\\"}}"}',
                            'new_value' => '{"conditions": "{\\"group1\\":{\\"blocks\\":{\\"block1\\":{\\"status\\":{\\"value\\":[\\"8\\",\\"9\\"],\\"operator\\":\\"in\\"},\\"awaiting_correction\\":{\\"value\\":[\\"1\\"],\\"operator\\":\\"in\\"},\\"conditionsConnectOperator\\":\\"and\\"},\\"block2\\":{\\"1\\":{\\"value\\":\\"1\\",\\"operator\\":\\"=\\"},\\"23\\":{\\"value\\":[\\"13\\",\\"14\\"],\\"operator\\":\\"in\\"},\\"52\\":{\\"value\\":\\"0.5\\",\\"operator\\":\\"=\\"},\\"116\\":{\\"value\\":\\"10\\",\\"operator\\":\\"=\\"},\\"conditionsConnectOperator\\":\\"and\\",\\"actual_finish_date\\":{\\"value\\":\\"2021-10-04 00:00:00to2021-10-17 23:59:59\\",\\"operator\\":\\"between\\"},\\"author_id\\":{\\"value\\":[36],\\"operator\\":\\"in\\"},\\"subject\\":{\\"value\\":\\"фывафыва\\",\\"operator\\":\\"ilike\\"}}},\\"blocksConnectOperator\\":\\"and\\"}}"}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 2,
                        ]
                    ],
                ],
            ]
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Создание КЧ-фильтра 2',
//группа один из
//блок один из
//поиск эти
//список
//чекбокс равно нет
//целое !=
//дробное =
//дата вне промежутка
//текст содержит
//групп одна
//блоков несколько
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'id' => 1,
                'team_id' => 1,
                'limit' => 50,
                'order_by' => NULL,
                'conditions' => [
                    'group1' => [
                        'blocks' => [
                            'block1' => [
                                'status' => [
                                    'value' => [
                                        0 => '8',
                                        1 => '9',
                                    ],
                                    'operator' => 'in',
                                ],
                                'awaiting_correction' => [
                                    'value' => [
                                        0 => '0',
                                    ],
                                    'operator' => 'in',
                                ],
                                'conditionsConnectOperator' => 'and',
                            ],
                            'block2' => [
                                2 => [
                                    'value' => '0',
                                    'operator' => '=',
                                ],
                                'conditionsConnectOperator' => 'or',
                                'description' => [
                                    'value' => '=~}!@#$%^&*()_+`-]\\\'/[;.,}"?{:><1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                                    'operator' => 'ilike',
                                ],
                            ],
                            'block3' => [
                                66 => [
                                    'value' => '10',
                                    'operator' => '=',
                                ],
                                'conditionsConnectOperator' => 'or',
                                'manager_id' => [
                                    'value' => [
                                        0 => 11,
                                        1 => 13,
                                    ],
                                    'operator' => 'in',
                                ],
                            ],
                            'block4' => [
                                'conditionsConnectOperator' => 'or',
                                'created_at' => [
                                    'value' => '2021-10-04 00:00:00to2021-10-17 23:59:59',
                                    'operator' => 'not between',
                                ],
                            ],
                            'block5' => [
                                51 => [
                                    'value' => '8.55',
                                    'operator' => '=',
                                ],
                                'conditionsConnectOperator' => 'or',
                            ],
                        ],
                        'blocksConnectOperator' => 'or',
                    ],
                ],
            ],
            'responseBody' => [
                'model' => [
                    'id' => 1,
                    'team_id' => 1,
                    'limit' => 50,
                    'order_by' => NULL,
                    'conditions' => '{"group1":{"blocks":{"block1":{"status":{"value":["8","9"],"operator":"in"},"awaiting_correction":{"value":["0"],"operator":"in"},"conditionsConnectOperator":"and"},"block2":{"2":{"value":"0","operator":"="},"conditionsConnectOperator":"or","description":{"value":"=~}!@#$%^&*()_+`-]\\\\\'/[;.,}\\"?{:><1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО","operator":"ilike"}},"block3":{"66":{"value":"10","operator":"="},"conditionsConnectOperator":"or","manager_id":{"value":[11,13],"operator":"in"}},"block4":{"conditionsConnectOperator":"or","created_at":{"value":"2021-10-04 00:00:00to2021-10-17 23:59:59","operator":"not between"}},"block5":{"51":{"value":"8.55","operator":"="},"conditionsConnectOperator":"or"}},"blocksConnectOperator":"or"}}',
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'cross_check_filters' => array_replace_recursive(
                        (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['cross_check_filters'],
                        [
                            [
                                'id' => 1,
                                'team_id' => 1,
                                'limit' => 50,
                                'order_by' => null,
                                'conditions' => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}, "block2": {"2": {"value": "0", "operator": "="}, "description": {"value": "=~}!@#$%^&*()_+`-]\\\\\'/[;.,}\"?{:><1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО", "operator": "ilike"}, "conditionsConnectOperator": "or"}, "block3": {"66": {"value": "10", "operator": "="}, "manager_id": {"value": [11, 13], "operator": "in"}, "conditionsConnectOperator": "or"}, "block4": {"created_at": {"value": "2021-10-04 00:00:00to2021-10-17 23:59:59", "operator": "not between"}, "conditionsConnectOperator": "or"}, "block5": {"51": {"value": "8.55", "operator": "="}, "conditionsConnectOperator": "or"}}, "blocksConnectOperator": "or"}}',
                            ],
                        ],
                    ),
                    'common_log' => [
                        [
                            'id' => 1,
                            'entity' => 'cross_check_filters',
                            'entity_id' => 1,
                            'old_value' => '{"conditions": "{\\"group1\\": {\\"blocks\\": {\\"block1\\": {\\"status\\": {\\"value\\": [\\"8\\", \\"9\\"], \\"operator\\": \\"in\\"}, \\"cross_check_status\\": {\\"value\\": [\\"2\\"], \\"operator\\": \\"not in\\"}, \\"awaiting_correction\\": {\\"value\\": [\\"0\\"], \\"operator\\": \\"in\\"}, \\"conditionsConnectOperator\\": \\"and\\"}, \\"block2\\": {\\"1\\": {\\"value\\": \\"0\\", \\"operator\\": \\"=\\"}, \\"2\\": {\\"value\\": \\"1\\", \\"operator\\": \\"=\\"}, \\"3\\": {\\"value\\": \\"0\\", \\"operator\\": \\"=\\"}, \\"4\\": {\\"value\\": \\"1\\", \\"operator\\": \\"=\\"}, \\"5\\": {\\"value\\": \\"0\\", \\"operator\\": \\"=\\"}, \\"6\\": {\\"value\\": \\"1\\", \\"operator\\": \\"=\\"}, \\"7\\": {\\"value\\": \\"0\\", \\"operator\\": \\"=\\"}, \\"8\\": {\\"value\\": \\"1\\", \\"operator\\": \\"=\\"}, \\"9\\": {\\"value\\": \\"0\\", \\"operator\\": \\"=\\"}, \\"10\\": {\\"value\\": \\"1\\", \\"operator\\": \\"=\\"}, \\"11\\": {\\"value\\": \\"0\\", \\"operator\\": \\"=\\"}, \\"12\\": {\\"value\\": \\"1\\", \\"operator\\": \\"=\\"}, \\"13\\": {\\"value\\": \\"0\\", \\"operator\\": \\"=\\"}, \\"14\\": {\\"value\\": \\"1\\", \\"operator\\": \\"=\\"}, \\"15\\": {\\"value\\": \\"0\\", \\"operator\\": \\"=\\"}, \\"16\\": {\\"value\\": \\"1\\", \\"operator\\": \\"=\\"}, \\"17\\": {\\"value\\": \\"0\\", \\"operator\\": \\"=\\"}, \\"18\\": {\\"value\\": \\"1\\", \\"operator\\": \\"=\\"}, \\"19\\": {\\"value\\": \\"0\\", \\"operator\\": \\"=\\"}, \\"123\\": {\\"value\\": \\"1\\", \\"operator\\": \\"=\\"}, \\"124\\": {\\"value\\": \\"0\\", \\"operator\\": \\"=\\"}, \\"125\\": {\\"value\\": \\"1\\", \\"operator\\": \\"=\\"}, \\"126\\": {\\"value\\": \\"0\\", \\"operator\\": \\"=\\"}, \\"127\\": {\\"value\\": \\"1\\", \\"operator\\": \\"=\\"}, \\"159\\": {\\"value\\": \\"0\\", \\"operator\\": \\"=\\"}, \\"160\\": {\\"value\\": \\"1\\", \\"operator\\": \\"=\\"}, \\"169\\": {\\"value\\": \\"0\\", \\"operator\\": \\"=\\"}, \\"conditionsConnectOperator\\": \\"or\\"}, \\"block3\\": {\\"20\\": {\\"value\\": [\\"66\\", \\"65\\", \\"64\\"], \\"operator\\": \\"in\\"}, \\"21\\": {\\"value\\": [\\"5\\", \\"3\\", \\"4\\"], \\"operator\\": \\"not in\\"}, \\"22\\": {\\"value\\": [\\"10\\", \\"9\\", \\"8\\"], \\"operator\\": \\"in\\"}, \\"23\\": {\\"value\\": [\\"14\\", \\"13\\", \\"12\\"], \\"operator\\": \\"not in\\"}, \\"24\\": {\\"value\\": [\\"173\\"], \\"operator\\": \\"in\\"}, \\"25\\": {\\"value\\": [\\"20\\"], \\"operator\\": \\"not in\\"}, \\"26\\": {\\"value\\": [\\"174\\"], \\"operator\\": \\"in\\"}, \\"27\\": {\\"value\\": [\\"26\\"], \\"operator\\": \\"not in\\"}, \\"28\\": {\\"value\\": [\\"27\\", \\"28\\"], \\"operator\\": \\"in\\"}, \\"29\\": {\\"value\\": [\\"31\\", \\"30\\"], \\"operator\\": \\"not in\\"}, \\"30\\": {\\"value\\": [\\"40\\", \\"39\\", \\"41\\"], \\"operator\\": \\"in\\"}, \\"31\\": {\\"value\\": [\\"49\\", \\"48\\"], \\"operator\\": \\"not in\\"}, \\"32\\": {\\"value\\": [\\"53\\", \\"52\\"], \\"operator\\": \\"in\\"}, \\"conditionsConnectOperator\\": \\"and\\"}, \\"block4\\": {\\"type_id\\": {\\"value\\": [\\"15\\"], \\"operator\\": \\"in\\"}, \\"priority\\": {\\"value\\": [\\"3\\", \\"2\\"], \\"operator\\": \\"in\\"}, \\"direction\\": {\\"value\\": [\\"1\\"], \\"operator\\": \\"not in\\"}, \\"team_direction\\": {\\"value\\": [\\"1\\", \\"2\\", \\"3\\"], \\"operator\\": \\"not in\\"}, \\"previous_status\\": {\\"value\\": [\\"1\\", \\"3\\", \\"5\\"], \\"operator\\": \\"in\\"}, \\"report_period_id\\": {\\"value\\": [\\"4\\", \\"3\\"], \\"operator\\": \\"in\\"}, \\"sv_report_periods\\": {\\"value\\": [\\"1\\", \\"2\\"], \\"operator\\": \\"not in\\"}, \\"conditionsConnectOperator\\": \\"or\\"}}, \\"blocksConnectOperator\\": \\"and\\"}, \\"group2\\": {\\"blocks\\": {\\"block1\\": {\\"author_id\\": {\\"value\\": [11, 12], \\"operator\\": \\"in\\"}, \\"seller_id\\": {\\"value\\": [5, -2, 0], \\"operator\\": \\"not in\\"}, \\"manager_id\\": {\\"value\\": [13, 14], \\"operator\\": \\"in\\"}, \\"category_id\\": {\\"value\\": [1], \\"operator\\": \\"not in\\"}, \\"supervisor_id\\": {\\"value\\": [33, 36], \\"operator\\": \\"not in\\"}, \\"rz_category_id\\": {\\"value\\": [4641568, 4652996, 4629305], \\"operator\\": \\"in\\"}, \\"cross_check_manager_id\\": {\\"value\\": [15, 16], \\"operator\\": \\"in\\"}, \\"conditionsConnectOperator\\": \\"and\\"}, \\"block2\\": {\\"49\\": {\\"value\\": \\"1\\", \\"operator\\": \\"=\\"}, \\"50\\": {\\"value\\": \\"0\\", \\"operator\\": \\"!=\\"}, \\"51\\": {\\"value\\": \\"0.1\\", \\"operator\\": \\">=\\"}, \\"52\\": {\\"value\\": \\"1.1\\", \\"operator\\": \\"<=\\"}, \\"53\\": {\\"value\\": \\"99999999\\", \\"operator\\": \\">\\"}, \\"54\\": {\\"value\\": \\"11111111\\", \\"operator\\": \\"<\\"}, \\"65\\": {\\"value\\": \\"1-9\\", \\"operator\\": \\"between\\"}, \\"66\\": {\\"value\\": \\"5\\", \\"operator\\": \\"=\\"}, \\"67\\": {\\"value\\": \\"0.5\\", \\"operator\\": \\"!=\\"}, \\"73\\": {\\"value\\": \\"55555555\\", \\"operator\\": \\">=\\"}, \\"74\\": {\\"value\\": \\"1.11\\", \\"operator\\": \\"<=\\"}, \\"75\\": {\\"value\\": \\"0.99\\", \\"operator\\": \\">\\"}, \\"114\\": {\\"value\\": \\"0\\", \\"operator\\": \\"<\\"}, \\"child_count\\": {\\"value\\": \\"9\\", \\"operator\\": \\"=\\"}, \\"amount_to_work\\": {\\"value\\": \\"1-3\\", \\"operator\\": \\"between\\"}, \\"conditionsConnectOperator\\": \\"or\\"}, \\"block3\\": {\\"created_at\\": {\\"value\\": \\"2021-10-18 00:00:00to2021-10-31 23:59:59\\", \\"operator\\": \\"not between\\"}, \\"actual_start_date\\": {\\"value\\": \\"2021-10-01 00:00:00to2021-10-01 01:01:00\\", \\"operator\\": \\"between\\"}, \\"actual_finish_date\\": {\\"value\\": \\"2021-10-01 00:00:00to2021-10-01 23:59:59\\", \\"operator\\": \\"not between\\"}, \\"planned_start_date\\": {\\"value\\": \\"2021-10-11 00:00:00to2021-10-11 23:59:59\\", \\"operator\\": \\"between\\"}, \\"planned_finish_date\\": {\\"value\\": \\"2021-01-01 00:00:00to2021-02-28 23:59:59\\", \\"operator\\": \\"not between\\"}, \\"supervisor_check_date\\": {\\"value\\": \\"2021-10-04 00:00:00to2021-10-04 23:59:59\\", \\"operator\\": \\"not between\\"}, \\"last_change_status_date\\": {\\"value\\": \\"2021-10-01 00:00:00to2021-10-31 23:59:59\\", \\"operator\\": \\"between\\"}, \\"supervisor_process_date\\": {\\"value\\": \\"2021-10-25 23:00:00to2021-10-31 00:59:00\\", \\"operator\\": \\"between\\"}, \\"conditionsConnectOperator\\": \\"and\\"}, \\"block4\\": {\\"120\\": {\\"value\\": \\"http://splitter.docker/lisa/#/cross-check-filter/update/1\\", \\"operator\\": \\"ilike\\"}, \\"121\\": {\\"value\\": \\"http://splitter.docker/lisa/#/cross-check-filter/update/1\\", \\"operator\\": \\"not like\\"}, \\"156\\": {\\"value\\": \\"http://splitter.docker/lisa/#/cross-check-filter/update/1\\", \\"operator\\": \\"ilike\\"}, \\"157\\": {\\"value\\": \\"http://splitter.docker/lisa/#/cross-check-filter/update/1\\", \\"operator\\": \\"not like\\"}, \\"subject\\": {\\"value\\": \\"=~}!@#$%^&*()_+`-]\'/[;.,}\\\\\\"?{:>\\\\\\\\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО\\", \\"operator\\": \\"ilike\\"}, \\"result_comment\\": {\\"value\\": \\"=~}!@#$%^&*()_+`-]\'/[;.,}\\\\\\"?{:>\\\\\\\\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО\\", \\"operator\\": \\"not like\\"}, \\"recommendations\\": {\\"value\\": \\"ЙЦУКЕНГШЩЗХЪqwertyuiop[]\\", \\"operator\\": \\"ilike\\"}, \\"correction_comment\\": {\\"value\\": \\"1234\\", \\"operator\\": \\"not like\\"}, \\"supervisor_comment\\": {\\"value\\": \\"ЯЧСМ\\", \\"operator\\": \\"ilike\\"}, \\"conditionsConnectOperator\\": \\"or\\"}}, \\"blocksConnectOperator\\": \\"or\\"}}"}',
                            'new_value' => '{"conditions": "{\\"group1\\":{\\"blocks\\":{\\"block1\\":{\\"status\\":{\\"value\\":[\\"8\\",\\"9\\"],\\"operator\\":\\"in\\"},\\"awaiting_correction\\":{\\"value\\":[\\"0\\"],\\"operator\\":\\"in\\"},\\"conditionsConnectOperator\\":\\"and\\"},\\"block2\\":{\\"2\\":{\\"value\\":\\"0\\",\\"operator\\":\\"=\\"},\\"conditionsConnectOperator\\":\\"or\\",\\"description\\":{\\"value\\":\\"=~}!@#$%^&*()_+`-]\\\\\\\\\'/[;.,}\\\\\\"?{:><1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО\\",\\"operator\\":\\"ilike\\"}},\\"block3\\":{\\"66\\":{\\"value\\":\\"10\\",\\"operator\\":\\"=\\"},\\"conditionsConnectOperator\\":\\"or\\",\\"manager_id\\":{\\"value\\":[11,13],\\"operator\\":\\"in\\"}},\\"block4\\":{\\"conditionsConnectOperator\\":\\"or\\",\\"created_at\\":{\\"value\\":\\"2021-10-04 00:00:00to2021-10-17 23:59:59\\",\\"operator\\":\\"not between\\"}},\\"block5\\":{\\"51\\":{\\"value\\":\\"8.55\\",\\"operator\\":\\"=\\"},\\"conditionsConnectOperator\\":\\"or\\"}},\\"blocksConnectOperator\\":\\"or\\"}}"}    ',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 2,
                        ]
                    ],
                ],
            ]
        ]
    ],

    'case3' => [
        'setting' => [
            'description' => 'Создание КЧ-фильтра 3',
//группа все
//блок один из
//поиск эти
//список не эти
//чекбокс
//целое	>=
//дробное >
//дата в промежутке
//текст содержит
//групп одна
//блоков один
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'id' => 1,
                'team_id' => 1,
                'limit' => 50,
                'order_by' => NULL,
                'conditions' => [
                    'group1' => [
                        'blocks' => [
                            'block1' => [
                                'status' => [
                                    'value' => [
                                        0 => '8',
                                        1 => '9',
                                    ],
                                    'operator' => 'in',
                                ],
                                'awaiting_correction' => [
                                    'value' => [
                                        0 => '0',
                                    ],
                                    'operator' => 'in',
                                ],
                                'conditionsConnectOperator' => 'and',
                            ],
                            'block2' => [
                                61 => [
                                    'value' => '1.2',
                                    'operator' => '>',
                                ],
                                68 => [
                                    'value' => '10',
                                    'operator' => '>=',
                                ],
                                'conditionsConnectOperator' => 'or',
                                'actual_start_date' => [
                                    'value' => '2021-10-04 00:00:00to2021-10-04 23:59:59',
                                    'operator' => 'between',
                                ],
                                'priority' => [
                                    'value' => [
                                        0 => '1',
                                        1 => '2',
                                        2 => '3',
                                    ],
                                    'operator' => 'not in',
                                ],
                                'supervisor_comment' => [
                                    'value' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:><1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                                    'operator' => 'ilike',
                                ],
                                'supervisor_id' => [
                                    'value' => [
                                        0 => 10,
                                        1 => 29,
                                    ],
                                    'operator' => 'in',
                                ],
                            ],
                        ],
                        'blocksConnectOperator' => 'and',
                    ],
                ],
            ],
            'responseBody' => [
                'model' => [
                    'id' => 1,
                    'team_id' => 1,
                    'limit' => 50,
                    'order_by' => NULL,
                    'conditions' => '{"group1":{"blocks":{"block1":{"status":{"value":["8","9"],"operator":"in"},"awaiting_correction":{"value":["0"],"operator":"in"},"conditionsConnectOperator":"and"},"block2":{"61":{"value":"1.2","operator":">"},"68":{"value":"10","operator":">="},"conditionsConnectOperator":"or","actual_start_date":{"value":"2021-10-04 00:00:00to2021-10-04 23:59:59","operator":"between"},"priority":{"value":["1","2","3"],"operator":"not in"},"supervisor_comment":{"value":"=~}!@#$%^&*()_+`-]\'/[;.,}\\"?{:><1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО","operator":"ilike"},"supervisor_id":{"value":[10,29],"operator":"in"}}},"blocksConnectOperator":"and"}}',
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'cross_check_filters' => array_replace_recursive(
                        (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['cross_check_filters'],
                        [
                            [
                                'id' => 1,
                                'team_id' => 1,
                                'limit' => 50,
                                'order_by' => null,
                                'conditions' => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}, "block2": {"61": {"value": "1.2", "operator": ">"}, "68": {"value": "10", "operator": ">="}, "priority": {"value": ["1", "2", "3"], "operator": "not in"}, "supervisor_id": {"value": [10, 29], "operator": "in"}, "actual_start_date": {"value": "2021-10-04 00:00:00to2021-10-04 23:59:59", "operator": "between"}, "supervisor_comment": {"value": "=~}!@#$%^&*()_+`-]\'/[;.,}\"?{:><1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО", "operator": "ilike"}, "conditionsConnectOperator": "or"}}, "blocksConnectOperator": "and"}}',
                            ],
                        ],
                    ),
                    'common_log' => [
                        [
                            'id' => 1,
                            'entity' => 'cross_check_filters',
                            'entity_id' => 1,
                            'old_value' => '{"conditions": "{\\"group1\\": {\\"blocks\\": {\\"block1\\": {\\"status\\": {\\"value\\": [\\"8\\", \\"9\\"], \\"operator\\": \\"in\\"}, \\"cross_check_status\\": {\\"value\\": [\\"2\\"], \\"operator\\": \\"not in\\"}, \\"awaiting_correction\\": {\\"value\\": [\\"0\\"], \\"operator\\": \\"in\\"}, \\"conditionsConnectOperator\\": \\"and\\"}, \\"block2\\": {\\"1\\": {\\"value\\": \\"0\\", \\"operator\\": \\"=\\"}, \\"2\\": {\\"value\\": \\"1\\", \\"operator\\": \\"=\\"}, \\"3\\": {\\"value\\": \\"0\\", \\"operator\\": \\"=\\"}, \\"4\\": {\\"value\\": \\"1\\", \\"operator\\": \\"=\\"}, \\"5\\": {\\"value\\": \\"0\\", \\"operator\\": \\"=\\"}, \\"6\\": {\\"value\\": \\"1\\", \\"operator\\": \\"=\\"}, \\"7\\": {\\"value\\": \\"0\\", \\"operator\\": \\"=\\"}, \\"8\\": {\\"value\\": \\"1\\", \\"operator\\": \\"=\\"}, \\"9\\": {\\"value\\": \\"0\\", \\"operator\\": \\"=\\"}, \\"10\\": {\\"value\\": \\"1\\", \\"operator\\": \\"=\\"}, \\"11\\": {\\"value\\": \\"0\\", \\"operator\\": \\"=\\"}, \\"12\\": {\\"value\\": \\"1\\", \\"operator\\": \\"=\\"}, \\"13\\": {\\"value\\": \\"0\\", \\"operator\\": \\"=\\"}, \\"14\\": {\\"value\\": \\"1\\", \\"operator\\": \\"=\\"}, \\"15\\": {\\"value\\": \\"0\\", \\"operator\\": \\"=\\"}, \\"16\\": {\\"value\\": \\"1\\", \\"operator\\": \\"=\\"}, \\"17\\": {\\"value\\": \\"0\\", \\"operator\\": \\"=\\"}, \\"18\\": {\\"value\\": \\"1\\", \\"operator\\": \\"=\\"}, \\"19\\": {\\"value\\": \\"0\\", \\"operator\\": \\"=\\"}, \\"123\\": {\\"value\\": \\"1\\", \\"operator\\": \\"=\\"}, \\"124\\": {\\"value\\": \\"0\\", \\"operator\\": \\"=\\"}, \\"125\\": {\\"value\\": \\"1\\", \\"operator\\": \\"=\\"}, \\"126\\": {\\"value\\": \\"0\\", \\"operator\\": \\"=\\"}, \\"127\\": {\\"value\\": \\"1\\", \\"operator\\": \\"=\\"}, \\"159\\": {\\"value\\": \\"0\\", \\"operator\\": \\"=\\"}, \\"160\\": {\\"value\\": \\"1\\", \\"operator\\": \\"=\\"}, \\"169\\": {\\"value\\": \\"0\\", \\"operator\\": \\"=\\"}, \\"conditionsConnectOperator\\": \\"or\\"}, \\"block3\\": {\\"20\\": {\\"value\\": [\\"66\\", \\"65\\", \\"64\\"], \\"operator\\": \\"in\\"}, \\"21\\": {\\"value\\": [\\"5\\", \\"3\\", \\"4\\"], \\"operator\\": \\"not in\\"}, \\"22\\": {\\"value\\": [\\"10\\", \\"9\\", \\"8\\"], \\"operator\\": \\"in\\"}, \\"23\\": {\\"value\\": [\\"14\\", \\"13\\", \\"12\\"], \\"operator\\": \\"not in\\"}, \\"24\\": {\\"value\\": [\\"173\\"], \\"operator\\": \\"in\\"}, \\"25\\": {\\"value\\": [\\"20\\"], \\"operator\\": \\"not in\\"}, \\"26\\": {\\"value\\": [\\"174\\"], \\"operator\\": \\"in\\"}, \\"27\\": {\\"value\\": [\\"26\\"], \\"operator\\": \\"not in\\"}, \\"28\\": {\\"value\\": [\\"27\\", \\"28\\"], \\"operator\\": \\"in\\"}, \\"29\\": {\\"value\\": [\\"31\\", \\"30\\"], \\"operator\\": \\"not in\\"}, \\"30\\": {\\"value\\": [\\"40\\", \\"39\\", \\"41\\"], \\"operator\\": \\"in\\"}, \\"31\\": {\\"value\\": [\\"49\\", \\"48\\"], \\"operator\\": \\"not in\\"}, \\"32\\": {\\"value\\": [\\"53\\", \\"52\\"], \\"operator\\": \\"in\\"}, \\"conditionsConnectOperator\\": \\"and\\"}, \\"block4\\": {\\"type_id\\": {\\"value\\": [\\"15\\"], \\"operator\\": \\"in\\"}, \\"priority\\": {\\"value\\": [\\"3\\", \\"2\\"], \\"operator\\": \\"in\\"}, \\"direction\\": {\\"value\\": [\\"1\\"], \\"operator\\": \\"not in\\"}, \\"team_direction\\": {\\"value\\": [\\"1\\", \\"2\\", \\"3\\"], \\"operator\\": \\"not in\\"}, \\"previous_status\\": {\\"value\\": [\\"1\\", \\"3\\", \\"5\\"], \\"operator\\": \\"in\\"}, \\"report_period_id\\": {\\"value\\": [\\"4\\", \\"3\\"], \\"operator\\": \\"in\\"}, \\"sv_report_periods\\": {\\"value\\": [\\"1\\", \\"2\\"], \\"operator\\": \\"not in\\"}, \\"conditionsConnectOperator\\": \\"or\\"}}, \\"blocksConnectOperator\\": \\"and\\"}, \\"group2\\": {\\"blocks\\": {\\"block1\\": {\\"author_id\\": {\\"value\\": [11, 12], \\"operator\\": \\"in\\"}, \\"seller_id\\": {\\"value\\": [5, -2, 0], \\"operator\\": \\"not in\\"}, \\"manager_id\\": {\\"value\\": [13, 14], \\"operator\\": \\"in\\"}, \\"category_id\\": {\\"value\\": [1], \\"operator\\": \\"not in\\"}, \\"supervisor_id\\": {\\"value\\": [33, 36], \\"operator\\": \\"not in\\"}, \\"rz_category_id\\": {\\"value\\": [4641568, 4652996, 4629305], \\"operator\\": \\"in\\"}, \\"cross_check_manager_id\\": {\\"value\\": [15, 16], \\"operator\\": \\"in\\"}, \\"conditionsConnectOperator\\": \\"and\\"}, \\"block2\\": {\\"49\\": {\\"value\\": \\"1\\", \\"operator\\": \\"=\\"}, \\"50\\": {\\"value\\": \\"0\\", \\"operator\\": \\"!=\\"}, \\"51\\": {\\"value\\": \\"0.1\\", \\"operator\\": \\">=\\"}, \\"52\\": {\\"value\\": \\"1.1\\", \\"operator\\": \\"<=\\"}, \\"53\\": {\\"value\\": \\"99999999\\", \\"operator\\": \\">\\"}, \\"54\\": {\\"value\\": \\"11111111\\", \\"operator\\": \\"<\\"}, \\"65\\": {\\"value\\": \\"1-9\\", \\"operator\\": \\"between\\"}, \\"66\\": {\\"value\\": \\"5\\", \\"operator\\": \\"=\\"}, \\"67\\": {\\"value\\": \\"0.5\\", \\"operator\\": \\"!=\\"}, \\"73\\": {\\"value\\": \\"55555555\\", \\"operator\\": \\">=\\"}, \\"74\\": {\\"value\\": \\"1.11\\", \\"operator\\": \\"<=\\"}, \\"75\\": {\\"value\\": \\"0.99\\", \\"operator\\": \\">\\"}, \\"114\\": {\\"value\\": \\"0\\", \\"operator\\": \\"<\\"}, \\"child_count\\": {\\"value\\": \\"9\\", \\"operator\\": \\"=\\"}, \\"amount_to_work\\": {\\"value\\": \\"1-3\\", \\"operator\\": \\"between\\"}, \\"conditionsConnectOperator\\": \\"or\\"}, \\"block3\\": {\\"created_at\\": {\\"value\\": \\"2021-10-18 00:00:00to2021-10-31 23:59:59\\", \\"operator\\": \\"not between\\"}, \\"actual_start_date\\": {\\"value\\": \\"2021-10-01 00:00:00to2021-10-01 01:01:00\\", \\"operator\\": \\"between\\"}, \\"actual_finish_date\\": {\\"value\\": \\"2021-10-01 00:00:00to2021-10-01 23:59:59\\", \\"operator\\": \\"not between\\"}, \\"planned_start_date\\": {\\"value\\": \\"2021-10-11 00:00:00to2021-10-11 23:59:59\\", \\"operator\\": \\"between\\"}, \\"planned_finish_date\\": {\\"value\\": \\"2021-01-01 00:00:00to2021-02-28 23:59:59\\", \\"operator\\": \\"not between\\"}, \\"supervisor_check_date\\": {\\"value\\": \\"2021-10-04 00:00:00to2021-10-04 23:59:59\\", \\"operator\\": \\"not between\\"}, \\"last_change_status_date\\": {\\"value\\": \\"2021-10-01 00:00:00to2021-10-31 23:59:59\\", \\"operator\\": \\"between\\"}, \\"supervisor_process_date\\": {\\"value\\": \\"2021-10-25 23:00:00to2021-10-31 00:59:00\\", \\"operator\\": \\"between\\"}, \\"conditionsConnectOperator\\": \\"and\\"}, \\"block4\\": {\\"120\\": {\\"value\\": \\"http://splitter.docker/lisa/#/cross-check-filter/update/1\\", \\"operator\\": \\"ilike\\"}, \\"121\\": {\\"value\\": \\"http://splitter.docker/lisa/#/cross-check-filter/update/1\\", \\"operator\\": \\"not like\\"}, \\"156\\": {\\"value\\": \\"http://splitter.docker/lisa/#/cross-check-filter/update/1\\", \\"operator\\": \\"ilike\\"}, \\"157\\": {\\"value\\": \\"http://splitter.docker/lisa/#/cross-check-filter/update/1\\", \\"operator\\": \\"not like\\"}, \\"subject\\": {\\"value\\": \\"=~}!@#$%^&*()_+`-]\'/[;.,}\\\\\\"?{:>\\\\\\\\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО\\", \\"operator\\": \\"ilike\\"}, \\"result_comment\\": {\\"value\\": \\"=~}!@#$%^&*()_+`-]\'/[;.,}\\\\\\"?{:>\\\\\\\\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО\\", \\"operator\\": \\"not like\\"}, \\"recommendations\\": {\\"value\\": \\"ЙЦУКЕНГШЩЗХЪqwertyuiop[]\\", \\"operator\\": \\"ilike\\"}, \\"correction_comment\\": {\\"value\\": \\"1234\\", \\"operator\\": \\"not like\\"}, \\"supervisor_comment\\": {\\"value\\": \\"ЯЧСМ\\", \\"operator\\": \\"ilike\\"}, \\"conditionsConnectOperator\\": \\"or\\"}}, \\"blocksConnectOperator\\": \\"or\\"}}"}',
                            'new_value' => '{"conditions": "{\\"group1\\":{\\"blocks\\":{\\"block1\\":{\\"status\\":{\\"value\\":[\\"8\\",\\"9\\"],\\"operator\\":\\"in\\"},\\"awaiting_correction\\":{\\"value\\":[\\"0\\"],\\"operator\\":\\"in\\"},\\"conditionsConnectOperator\\":\\"and\\"},\\"block2\\":{\\"61\\":{\\"value\\":\\"1.2\\",\\"operator\\":\\">\\"},\\"68\\":{\\"value\\":\\"10\\",\\"operator\\":\\">=\\"},\\"conditionsConnectOperator\\":\\"or\\",\\"actual_start_date\\":{\\"value\\":\\"2021-10-04 00:00:00to2021-10-04 23:59:59\\",\\"operator\\":\\"between\\"},\\"priority\\":{\\"value\\":[\\"1\\",\\"2\\",\\"3\\"],\\"operator\\":\\"not in\\"},\\"supervisor_comment\\":{\\"value\\":\\"=~}!@#$%^&*()_+`-]\'/[;.,}\\\\\\"?{:><1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО\\",\\"operator\\":\\"ilike\\"},\\"supervisor_id\\":{\\"value\\":[10,29],\\"operator\\":\\"in\\"}}},\\"blocksConnectOperator\\":\\"and\\"}}"}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 2,
                        ]
                    ],
                ],
            ]
        ]
    ],

    'case4' => [
        'setting' => [
            'description' => 'Создание КЧ-фильтра 4',
//группа все
//блок все
//поиск эти
//список эти
//чекбокс равно нет
//целое <=
//дробное
//дата в промежутке
//текст содержит
//групп одна
//блоков один
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'id' => 1,
                'team_id' => 1,
                'limit' => 50,
                'order_by' => NULL,
                'conditions' => [
                    'group1' => [
                        'blocks' => [
                            'block1' => [
                                'status' => [
                                    'value' => [
                                        0 => '8',
                                        1 => '9',
                                    ],
                                    'operator' => 'in',
                                ],
                                'awaiting_correction' => [
                                    'value' => [
                                        0 => '0',
                                    ],
                                    'operator' => 'in',
                                ],
                                'conditionsConnectOperator' => 'and',
                            ],
                            'block2' => [
                                6 => [
                                    'value' => '0',
                                    'operator' => '=',
                                ],
                                101 => [
                                    'value' => '11',
                                    'operator' => '<=',
                                ],
                                'conditionsConnectOperator' => 'or',
                                'category_id' => [
                                    'value' => [
                                        0 => 1,
                                        1 => 2,
                                        2 => 474,
                                    ],
                                    'operator' => 'in',
                                ],
                                'rz_category_id' => [
                                    'value' => [
                                        0 => 2581742,
                                        1 => 2595767,
                                        2 => 2514857,
                                        3 => 4626584,
                                        4 => 2581722,
                                        5 => 2581732,
                                    ],
                                    'operator' => 'in',
                                ],
                                'planned_finish_date' => [
                                    'value' => '2021-10-25 00:00:00to2021-10-31 23:59:59',
                                    'operator' => 'between',
                                ],
                                'recommendations' => [
                                    'value' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:><1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                                    'operator' => 'not like',
                                ],
                            ],
                        ],
                        'blocksConnectOperator' => 'and',
                    ],
                ],
            ],
            'responseBody' => [
                'model' => [
                    'id' => 1,
                    'team_id' => 1,
                    'limit' => 50,
                    'order_by' => NULL,
                    'conditions' => '{"group1":{"blocks":{"block1":{"status":{"value":["8","9"],"operator":"in"},"awaiting_correction":{"value":["0"],"operator":"in"},"conditionsConnectOperator":"and"},"block2":{"6":{"value":"0","operator":"="},"101":{"value":"11","operator":"<="},"conditionsConnectOperator":"or","category_id":{"value":[1,2,474],"operator":"in"},"rz_category_id":{"value":[2581742,2595767,2514857,4626584,2581722,2581732],"operator":"in"},"planned_finish_date":{"value":"2021-10-25 00:00:00to2021-10-31 23:59:59","operator":"between"},"recommendations":{"value":"=~}!@#$%^&*()_+`-]\'/[;.,}\\"?{:><1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО","operator":"not like"}}},"blocksConnectOperator":"and"}}',
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'cross_check_filters' => array_replace_recursive(
                        (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['cross_check_filters'],
                        [
                            [
                                'id' => 1,
                                'team_id' => 1,
                                'limit' => 50,
                                'order_by' => null,
                                'conditions' => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}, "block2": {"6": {"value": "0", "operator": "="}, "101": {"value": "11", "operator": "<="}, "category_id": {"value": [1, 2, 474], "operator": "in"}, "rz_category_id": {"value": [2581742, 2595767, 2514857, 4626584, 2581722, 2581732], "operator": "in"}, "recommendations": {"value": "=~}!@#$%^&*()_+`-]\'/[;.,}\"?{:><1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО", "operator": "not like"}, "planned_finish_date": {"value": "2021-10-25 00:00:00to2021-10-31 23:59:59", "operator": "between"}, "conditionsConnectOperator": "or"}}, "blocksConnectOperator": "and"}}',
                            ],
                        ],
                    ),
                    'common_log' => [
                        [
                            'id' => 1,
                            'entity' => 'cross_check_filters',
                            'entity_id' => 1,
                            'old_value' => '{"conditions": "{\\"group1\\": {\\"blocks\\": {\\"block1\\": {\\"status\\": {\\"value\\": [\\"8\\", \\"9\\"], \\"operator\\": \\"in\\"}, \\"cross_check_status\\": {\\"value\\": [\\"2\\"], \\"operator\\": \\"not in\\"}, \\"awaiting_correction\\": {\\"value\\": [\\"0\\"], \\"operator\\": \\"in\\"}, \\"conditionsConnectOperator\\": \\"and\\"}, \\"block2\\": {\\"1\\": {\\"value\\": \\"0\\", \\"operator\\": \\"=\\"}, \\"2\\": {\\"value\\": \\"1\\", \\"operator\\": \\"=\\"}, \\"3\\": {\\"value\\": \\"0\\", \\"operator\\": \\"=\\"}, \\"4\\": {\\"value\\": \\"1\\", \\"operator\\": \\"=\\"}, \\"5\\": {\\"value\\": \\"0\\", \\"operator\\": \\"=\\"}, \\"6\\": {\\"value\\": \\"1\\", \\"operator\\": \\"=\\"}, \\"7\\": {\\"value\\": \\"0\\", \\"operator\\": \\"=\\"}, \\"8\\": {\\"value\\": \\"1\\", \\"operator\\": \\"=\\"}, \\"9\\": {\\"value\\": \\"0\\", \\"operator\\": \\"=\\"}, \\"10\\": {\\"value\\": \\"1\\", \\"operator\\": \\"=\\"}, \\"11\\": {\\"value\\": \\"0\\", \\"operator\\": \\"=\\"}, \\"12\\": {\\"value\\": \\"1\\", \\"operator\\": \\"=\\"}, \\"13\\": {\\"value\\": \\"0\\", \\"operator\\": \\"=\\"}, \\"14\\": {\\"value\\": \\"1\\", \\"operator\\": \\"=\\"}, \\"15\\": {\\"value\\": \\"0\\", \\"operator\\": \\"=\\"}, \\"16\\": {\\"value\\": \\"1\\", \\"operator\\": \\"=\\"}, \\"17\\": {\\"value\\": \\"0\\", \\"operator\\": \\"=\\"}, \\"18\\": {\\"value\\": \\"1\\", \\"operator\\": \\"=\\"}, \\"19\\": {\\"value\\": \\"0\\", \\"operator\\": \\"=\\"}, \\"123\\": {\\"value\\": \\"1\\", \\"operator\\": \\"=\\"}, \\"124\\": {\\"value\\": \\"0\\", \\"operator\\": \\"=\\"}, \\"125\\": {\\"value\\": \\"1\\", \\"operator\\": \\"=\\"}, \\"126\\": {\\"value\\": \\"0\\", \\"operator\\": \\"=\\"}, \\"127\\": {\\"value\\": \\"1\\", \\"operator\\": \\"=\\"}, \\"159\\": {\\"value\\": \\"0\\", \\"operator\\": \\"=\\"}, \\"160\\": {\\"value\\": \\"1\\", \\"operator\\": \\"=\\"}, \\"169\\": {\\"value\\": \\"0\\", \\"operator\\": \\"=\\"}, \\"conditionsConnectOperator\\": \\"or\\"}, \\"block3\\": {\\"20\\": {\\"value\\": [\\"66\\", \\"65\\", \\"64\\"], \\"operator\\": \\"in\\"}, \\"21\\": {\\"value\\": [\\"5\\", \\"3\\", \\"4\\"], \\"operator\\": \\"not in\\"}, \\"22\\": {\\"value\\": [\\"10\\", \\"9\\", \\"8\\"], \\"operator\\": \\"in\\"}, \\"23\\": {\\"value\\": [\\"14\\", \\"13\\", \\"12\\"], \\"operator\\": \\"not in\\"}, \\"24\\": {\\"value\\": [\\"173\\"], \\"operator\\": \\"in\\"}, \\"25\\": {\\"value\\": [\\"20\\"], \\"operator\\": \\"not in\\"}, \\"26\\": {\\"value\\": [\\"174\\"], \\"operator\\": \\"in\\"}, \\"27\\": {\\"value\\": [\\"26\\"], \\"operator\\": \\"not in\\"}, \\"28\\": {\\"value\\": [\\"27\\", \\"28\\"], \\"operator\\": \\"in\\"}, \\"29\\": {\\"value\\": [\\"31\\", \\"30\\"], \\"operator\\": \\"not in\\"}, \\"30\\": {\\"value\\": [\\"40\\", \\"39\\", \\"41\\"], \\"operator\\": \\"in\\"}, \\"31\\": {\\"value\\": [\\"49\\", \\"48\\"], \\"operator\\": \\"not in\\"}, \\"32\\": {\\"value\\": [\\"53\\", \\"52\\"], \\"operator\\": \\"in\\"}, \\"conditionsConnectOperator\\": \\"and\\"}, \\"block4\\": {\\"type_id\\": {\\"value\\": [\\"15\\"], \\"operator\\": \\"in\\"}, \\"priority\\": {\\"value\\": [\\"3\\", \\"2\\"], \\"operator\\": \\"in\\"}, \\"direction\\": {\\"value\\": [\\"1\\"], \\"operator\\": \\"not in\\"}, \\"team_direction\\": {\\"value\\": [\\"1\\", \\"2\\", \\"3\\"], \\"operator\\": \\"not in\\"}, \\"previous_status\\": {\\"value\\": [\\"1\\", \\"3\\", \\"5\\"], \\"operator\\": \\"in\\"}, \\"report_period_id\\": {\\"value\\": [\\"4\\", \\"3\\"], \\"operator\\": \\"in\\"}, \\"sv_report_periods\\": {\\"value\\": [\\"1\\", \\"2\\"], \\"operator\\": \\"not in\\"}, \\"conditionsConnectOperator\\": \\"or\\"}}, \\"blocksConnectOperator\\": \\"and\\"}, \\"group2\\": {\\"blocks\\": {\\"block1\\": {\\"author_id\\": {\\"value\\": [11, 12], \\"operator\\": \\"in\\"}, \\"seller_id\\": {\\"value\\": [5, -2, 0], \\"operator\\": \\"not in\\"}, \\"manager_id\\": {\\"value\\": [13, 14], \\"operator\\": \\"in\\"}, \\"category_id\\": {\\"value\\": [1], \\"operator\\": \\"not in\\"}, \\"supervisor_id\\": {\\"value\\": [33, 36], \\"operator\\": \\"not in\\"}, \\"rz_category_id\\": {\\"value\\": [4641568, 4652996, 4629305], \\"operator\\": \\"in\\"}, \\"cross_check_manager_id\\": {\\"value\\": [15, 16], \\"operator\\": \\"in\\"}, \\"conditionsConnectOperator\\": \\"and\\"}, \\"block2\\": {\\"49\\": {\\"value\\": \\"1\\", \\"operator\\": \\"=\\"}, \\"50\\": {\\"value\\": \\"0\\", \\"operator\\": \\"!=\\"}, \\"51\\": {\\"value\\": \\"0.1\\", \\"operator\\": \\">=\\"}, \\"52\\": {\\"value\\": \\"1.1\\", \\"operator\\": \\"<=\\"}, \\"53\\": {\\"value\\": \\"99999999\\", \\"operator\\": \\">\\"}, \\"54\\": {\\"value\\": \\"11111111\\", \\"operator\\": \\"<\\"}, \\"65\\": {\\"value\\": \\"1-9\\", \\"operator\\": \\"between\\"}, \\"66\\": {\\"value\\": \\"5\\", \\"operator\\": \\"=\\"}, \\"67\\": {\\"value\\": \\"0.5\\", \\"operator\\": \\"!=\\"}, \\"73\\": {\\"value\\": \\"55555555\\", \\"operator\\": \\">=\\"}, \\"74\\": {\\"value\\": \\"1.11\\", \\"operator\\": \\"<=\\"}, \\"75\\": {\\"value\\": \\"0.99\\", \\"operator\\": \\">\\"}, \\"114\\": {\\"value\\": \\"0\\", \\"operator\\": \\"<\\"}, \\"child_count\\": {\\"value\\": \\"9\\", \\"operator\\": \\"=\\"}, \\"amount_to_work\\": {\\"value\\": \\"1-3\\", \\"operator\\": \\"between\\"}, \\"conditionsConnectOperator\\": \\"or\\"}, \\"block3\\": {\\"created_at\\": {\\"value\\": \\"2021-10-18 00:00:00to2021-10-31 23:59:59\\", \\"operator\\": \\"not between\\"}, \\"actual_start_date\\": {\\"value\\": \\"2021-10-01 00:00:00to2021-10-01 01:01:00\\", \\"operator\\": \\"between\\"}, \\"actual_finish_date\\": {\\"value\\": \\"2021-10-01 00:00:00to2021-10-01 23:59:59\\", \\"operator\\": \\"not between\\"}, \\"planned_start_date\\": {\\"value\\": \\"2021-10-11 00:00:00to2021-10-11 23:59:59\\", \\"operator\\": \\"between\\"}, \\"planned_finish_date\\": {\\"value\\": \\"2021-01-01 00:00:00to2021-02-28 23:59:59\\", \\"operator\\": \\"not between\\"}, \\"supervisor_check_date\\": {\\"value\\": \\"2021-10-04 00:00:00to2021-10-04 23:59:59\\", \\"operator\\": \\"not between\\"}, \\"last_change_status_date\\": {\\"value\\": \\"2021-10-01 00:00:00to2021-10-31 23:59:59\\", \\"operator\\": \\"between\\"}, \\"supervisor_process_date\\": {\\"value\\": \\"2021-10-25 23:00:00to2021-10-31 00:59:00\\", \\"operator\\": \\"between\\"}, \\"conditionsConnectOperator\\": \\"and\\"}, \\"block4\\": {\\"120\\": {\\"value\\": \\"http://splitter.docker/lisa/#/cross-check-filter/update/1\\", \\"operator\\": \\"ilike\\"}, \\"121\\": {\\"value\\": \\"http://splitter.docker/lisa/#/cross-check-filter/update/1\\", \\"operator\\": \\"not like\\"}, \\"156\\": {\\"value\\": \\"http://splitter.docker/lisa/#/cross-check-filter/update/1\\", \\"operator\\": \\"ilike\\"}, \\"157\\": {\\"value\\": \\"http://splitter.docker/lisa/#/cross-check-filter/update/1\\", \\"operator\\": \\"not like\\"}, \\"subject\\": {\\"value\\": \\"=~}!@#$%^&*()_+`-]\'/[;.,}\\\\\\"?{:>\\\\\\\\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО\\", \\"operator\\": \\"ilike\\"}, \\"result_comment\\": {\\"value\\": \\"=~}!@#$%^&*()_+`-]\'/[;.,}\\\\\\"?{:>\\\\\\\\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО\\", \\"operator\\": \\"not like\\"}, \\"recommendations\\": {\\"value\\": \\"ЙЦУКЕНГШЩЗХЪqwertyuiop[]\\", \\"operator\\": \\"ilike\\"}, \\"correction_comment\\": {\\"value\\": \\"1234\\", \\"operator\\": \\"not like\\"}, \\"supervisor_comment\\": {\\"value\\": \\"ЯЧСМ\\", \\"operator\\": \\"ilike\\"}, \\"conditionsConnectOperator\\": \\"or\\"}}, \\"blocksConnectOperator\\": \\"or\\"}}"}',
                            'new_value' => '{"conditions": "{\\"group1\\":{\\"blocks\\":{\\"block1\\":{\\"status\\":{\\"value\\":[\\"8\\",\\"9\\"],\\"operator\\":\\"in\\"},\\"awaiting_correction\\":{\\"value\\":[\\"0\\"],\\"operator\\":\\"in\\"},\\"conditionsConnectOperator\\":\\"and\\"},\\"block2\\":{\\"6\\":{\\"value\\":\\"0\\",\\"operator\\":\\"=\\"},\\"101\\":{\\"value\\":\\"11\\",\\"operator\\":\\"<=\\"},\\"conditionsConnectOperator\\":\\"or\\",\\"category_id\\":{\\"value\\":[1,2,474],\\"operator\\":\\"in\\"},\\"rz_category_id\\":{\\"value\\":[2581742,2595767,2514857,4626584,2581722,2581732],\\"operator\\":\\"in\\"},\\"planned_finish_date\\":{\\"value\\":\\"2021-10-25 00:00:00to2021-10-31 23:59:59\\",\\"operator\\":\\"between\\"},\\"recommendations\\":{\\"value\\":\\"=~}!@#$%^&*()_+`-]\'/[;.,}\\\\\\"?{:><1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО\\",\\"operator\\":\\"not like\\"}}},\\"blocksConnectOperator\\":\\"and\\"}}"}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 2,
                        ]
                    ],
                ],
            ]
        ]
    ],

    'case5' => [
        'setting' => [
            'description' => 'Создание КЧ-фильтра 5',
//группа один из
//блок все
//поиск не эти
//список эти
//чекбокс равно да
//целое >=
//дробное <=
//дата
//текст не содержит
//групп несколько
//блоков несколько
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'id' => 1,
                'team_id' => 1,
                'limit' => '20',
                'order_by' => NULL,
                'conditions' => [
                    'group1' => [
                        'blocks' => [
                            'block1' => [
                                'status' => [
                                    'value' => [
                                        0 => '8',
                                        1 => '9',
                                    ],
                                    'operator' => 'in',
                                ],
                                'cross_check_status' => [
                                    'value' => [
                                        0 => '2',
                                    ],
                                    'operator' => 'not in',
                                ],
                                'awaiting_correction' => [
                                    'value' => [
                                        0 => '0',
                                    ],
                                    'operator' => 'in',
                                ],
                                'conditionsConnectOperator' => 'and',
                            ],
                            'block2' => [
                                33 => [
                                    'value' => [
                                        0 => '69',
                                        1 => '70',
                                        2 => '71',
                                        3 => '72',
                                        4 => '73',
                                    ],
                                    'operator' => 'in',
                                ],
                                'conditionsConnectOperator' => 'and',
                                'author_id' => [
                                    'value' => [
                                        0 => 4,
                                        1 => 15,
                                        2 => 17,
                                    ],
                                    'operator' => 'not in',
                                ],
                            ],
                            'block3' => [
                                11 => [
                                    'value' => '1',
                                    'operator' => '=',
                                ],
                                'conditionsConnectOperator' => 'and',
                            ],
                        ],
                        'blocksConnectOperator' => 'or',
                    ],
                    'group2' => [
                        'blocks' => [
                            'block1' => [
                                54 => [
                                    'value' => '1.5',
                                    'operator' => '<=',
                                ],
                                'conditionsConnectOperator' => 'and',
                            ],
                            'block2' => [
                                82 => [
                                    'value' => '20',
                                    'operator' => '>=',
                                ],
                                'conditionsConnectOperator' => 'and',
                            ],
                        ],
                        'blocksConnectOperator' => 'or',
                    ],
                    'group3' => [
                        'blocks' => [
                            'block1' => [
                                'conditionsConnectOperator' => 'and',
                                'result_comment' => [
                                    'value' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:><1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                                    'operator' => 'not like',
                                ],
                            ],
                        ],
                        'blocksConnectOperator' => 'or',
                    ],
                ],
            ],
            'responseBody' => [
                'model' => [
                    'id' => 1,
                    'team_id' => 1,
                    'limit' => '20',
                    'order_by' => NULL,
                    'conditions' => '{"group1":{"blocks":{"block1":{"status":{"value":["8","9"],"operator":"in"},"cross_check_status":{"value":["2"],"operator":"not in"},"awaiting_correction":{"value":["0"],"operator":"in"},"conditionsConnectOperator":"and"},"block2":{"33":{"value":["69","70","71","72","73"],"operator":"in"},"conditionsConnectOperator":"and","author_id":{"value":[4,15,17],"operator":"not in"}},"block3":{"11":{"value":"1","operator":"="},"conditionsConnectOperator":"and"}},"blocksConnectOperator":"or"},"group2":{"blocks":{"block1":{"54":{"value":"1.5","operator":"<="},"conditionsConnectOperator":"and"},"block2":{"82":{"value":"20","operator":">="},"conditionsConnectOperator":"and"}},"blocksConnectOperator":"or"},"group3":{"blocks":{"block1":{"conditionsConnectOperator":"and","result_comment":{"value":"=~}!@#$%^&*()_+`-]\'/[;.,}\"?{:><1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО","operator":"not like"}}},"blocksConnectOperator":"or"}}',
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'cross_check_filters' => array_replace_recursive(
                        (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['cross_check_filters'],
                        [
                            [
                                'id' => 1,
                                'team_id' => 1,
                                'limit' => 20,
                                'order_by' => null,
                                'conditions' => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}, "block2": {"33": {"value": ["69", "70", "71", "72", "73"], "operator": "in"}, "author_id": {"value": [4, 15, 17], "operator": "not in"}, "conditionsConnectOperator": "and"}, "block3": {"11": {"value": "1", "operator": "="}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "or"}, "group2": {"blocks": {"block1": {"54": {"value": "1.5", "operator": "<="}, "conditionsConnectOperator": "and"}, "block2": {"82": {"value": "20", "operator": ">="}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "or"}, "group3": {"blocks": {"block1": {"result_comment": {"value": "=~}!@#$%^&*()_+`-]\'/[;.,}\"?{:><1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО", "operator": "not like"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "or"}}',
                            ],
                        ],
                    ),
                    'common_log' => [
                        [
                            'id' => 1,
                            'entity' => 'cross_check_filters',
                            'entity_id' => 1,
                            'old_value' => '{"limit": 50, "conditions": "{\\"group1\\": {\\"blocks\\": {\\"block1\\": {\\"status\\": {\\"value\\": [\\"8\\", \\"9\\"], \\"operator\\": \\"in\\"}, \\"cross_check_status\\": {\\"value\\": [\\"2\\"], \\"operator\\": \\"not in\\"}, \\"awaiting_correction\\": {\\"value\\": [\\"0\\"], \\"operator\\": \\"in\\"}, \\"conditionsConnectOperator\\": \\"and\\"}, \\"block2\\": {\\"1\\": {\\"value\\": \\"0\\", \\"operator\\": \\"=\\"}, \\"2\\": {\\"value\\": \\"1\\", \\"operator\\": \\"=\\"}, \\"3\\": {\\"value\\": \\"0\\", \\"operator\\": \\"=\\"}, \\"4\\": {\\"value\\": \\"1\\", \\"operator\\": \\"=\\"}, \\"5\\": {\\"value\\": \\"0\\", \\"operator\\": \\"=\\"}, \\"6\\": {\\"value\\": \\"1\\", \\"operator\\": \\"=\\"}, \\"7\\": {\\"value\\": \\"0\\", \\"operator\\": \\"=\\"}, \\"8\\": {\\"value\\": \\"1\\", \\"operator\\": \\"=\\"}, \\"9\\": {\\"value\\": \\"0\\", \\"operator\\": \\"=\\"}, \\"10\\": {\\"value\\": \\"1\\", \\"operator\\": \\"=\\"}, \\"11\\": {\\"value\\": \\"0\\", \\"operator\\": \\"=\\"}, \\"12\\": {\\"value\\": \\"1\\", \\"operator\\": \\"=\\"}, \\"13\\": {\\"value\\": \\"0\\", \\"operator\\": \\"=\\"}, \\"14\\": {\\"value\\": \\"1\\", \\"operator\\": \\"=\\"}, \\"15\\": {\\"value\\": \\"0\\", \\"operator\\": \\"=\\"}, \\"16\\": {\\"value\\": \\"1\\", \\"operator\\": \\"=\\"}, \\"17\\": {\\"value\\": \\"0\\", \\"operator\\": \\"=\\"}, \\"18\\": {\\"value\\": \\"1\\", \\"operator\\": \\"=\\"}, \\"19\\": {\\"value\\": \\"0\\", \\"operator\\": \\"=\\"}, \\"123\\": {\\"value\\": \\"1\\", \\"operator\\": \\"=\\"}, \\"124\\": {\\"value\\": \\"0\\", \\"operator\\": \\"=\\"}, \\"125\\": {\\"value\\": \\"1\\", \\"operator\\": \\"=\\"}, \\"126\\": {\\"value\\": \\"0\\", \\"operator\\": \\"=\\"}, \\"127\\": {\\"value\\": \\"1\\", \\"operator\\": \\"=\\"}, \\"159\\": {\\"value\\": \\"0\\", \\"operator\\": \\"=\\"}, \\"160\\": {\\"value\\": \\"1\\", \\"operator\\": \\"=\\"}, \\"169\\": {\\"value\\": \\"0\\", \\"operator\\": \\"=\\"}, \\"conditionsConnectOperator\\": \\"or\\"}, \\"block3\\": {\\"20\\": {\\"value\\": [\\"66\\", \\"65\\", \\"64\\"], \\"operator\\": \\"in\\"}, \\"21\\": {\\"value\\": [\\"5\\", \\"3\\", \\"4\\"], \\"operator\\": \\"not in\\"}, \\"22\\": {\\"value\\": [\\"10\\", \\"9\\", \\"8\\"], \\"operator\\": \\"in\\"}, \\"23\\": {\\"value\\": [\\"14\\", \\"13\\", \\"12\\"], \\"operator\\": \\"not in\\"}, \\"24\\": {\\"value\\": [\\"173\\"], \\"operator\\": \\"in\\"}, \\"25\\": {\\"value\\": [\\"20\\"], \\"operator\\": \\"not in\\"}, \\"26\\": {\\"value\\": [\\"174\\"], \\"operator\\": \\"in\\"}, \\"27\\": {\\"value\\": [\\"26\\"], \\"operator\\": \\"not in\\"}, \\"28\\": {\\"value\\": [\\"27\\", \\"28\\"], \\"operator\\": \\"in\\"}, \\"29\\": {\\"value\\": [\\"31\\", \\"30\\"], \\"operator\\": \\"not in\\"}, \\"30\\": {\\"value\\": [\\"40\\", \\"39\\", \\"41\\"], \\"operator\\": \\"in\\"}, \\"31\\": {\\"value\\": [\\"49\\", \\"48\\"], \\"operator\\": \\"not in\\"}, \\"32\\": {\\"value\\": [\\"53\\", \\"52\\"], \\"operator\\": \\"in\\"}, \\"conditionsConnectOperator\\": \\"and\\"}, \\"block4\\": {\\"type_id\\": {\\"value\\": [\\"15\\"], \\"operator\\": \\"in\\"}, \\"priority\\": {\\"value\\": [\\"3\\", \\"2\\"], \\"operator\\": \\"in\\"}, \\"direction\\": {\\"value\\": [\\"1\\"], \\"operator\\": \\"not in\\"}, \\"team_direction\\": {\\"value\\": [\\"1\\", \\"2\\", \\"3\\"], \\"operator\\": \\"not in\\"}, \\"previous_status\\": {\\"value\\": [\\"1\\", \\"3\\", \\"5\\"], \\"operator\\": \\"in\\"}, \\"report_period_id\\": {\\"value\\": [\\"4\\", \\"3\\"], \\"operator\\": \\"in\\"}, \\"sv_report_periods\\": {\\"value\\": [\\"1\\", \\"2\\"], \\"operator\\": \\"not in\\"}, \\"conditionsConnectOperator\\": \\"or\\"}}, \\"blocksConnectOperator\\": \\"and\\"}, \\"group2\\": {\\"blocks\\": {\\"block1\\": {\\"author_id\\": {\\"value\\": [11, 12], \\"operator\\": \\"in\\"}, \\"seller_id\\": {\\"value\\": [5, -2, 0], \\"operator\\": \\"not in\\"}, \\"manager_id\\": {\\"value\\": [13, 14], \\"operator\\": \\"in\\"}, \\"category_id\\": {\\"value\\": [1], \\"operator\\": \\"not in\\"}, \\"supervisor_id\\": {\\"value\\": [33, 36], \\"operator\\": \\"not in\\"}, \\"rz_category_id\\": {\\"value\\": [4641568, 4652996, 4629305], \\"operator\\": \\"in\\"}, \\"cross_check_manager_id\\": {\\"value\\": [15, 16], \\"operator\\": \\"in\\"}, \\"conditionsConnectOperator\\": \\"and\\"}, \\"block2\\": {\\"49\\": {\\"value\\": \\"1\\", \\"operator\\": \\"=\\"}, \\"50\\": {\\"value\\": \\"0\\", \\"operator\\": \\"!=\\"}, \\"51\\": {\\"value\\": \\"0.1\\", \\"operator\\": \\">=\\"}, \\"52\\": {\\"value\\": \\"1.1\\", \\"operator\\": \\"<=\\"}, \\"53\\": {\\"value\\": \\"99999999\\", \\"operator\\": \\">\\"}, \\"54\\": {\\"value\\": \\"11111111\\", \\"operator\\": \\"<\\"}, \\"65\\": {\\"value\\": \\"1-9\\", \\"operator\\": \\"between\\"}, \\"66\\": {\\"value\\": \\"5\\", \\"operator\\": \\"=\\"}, \\"67\\": {\\"value\\": \\"0.5\\", \\"operator\\": \\"!=\\"}, \\"73\\": {\\"value\\": \\"55555555\\", \\"operator\\": \\">=\\"}, \\"74\\": {\\"value\\": \\"1.11\\", \\"operator\\": \\"<=\\"}, \\"75\\": {\\"value\\": \\"0.99\\", \\"operator\\": \\">\\"}, \\"114\\": {\\"value\\": \\"0\\", \\"operator\\": \\"<\\"}, \\"child_count\\": {\\"value\\": \\"9\\", \\"operator\\": \\"=\\"}, \\"amount_to_work\\": {\\"value\\": \\"1-3\\", \\"operator\\": \\"between\\"}, \\"conditionsConnectOperator\\": \\"or\\"}, \\"block3\\": {\\"created_at\\": {\\"value\\": \\"2021-10-18 00:00:00to2021-10-31 23:59:59\\", \\"operator\\": \\"not between\\"}, \\"actual_start_date\\": {\\"value\\": \\"2021-10-01 00:00:00to2021-10-01 01:01:00\\", \\"operator\\": \\"between\\"}, \\"actual_finish_date\\": {\\"value\\": \\"2021-10-01 00:00:00to2021-10-01 23:59:59\\", \\"operator\\": \\"not between\\"}, \\"planned_start_date\\": {\\"value\\": \\"2021-10-11 00:00:00to2021-10-11 23:59:59\\", \\"operator\\": \\"between\\"}, \\"planned_finish_date\\": {\\"value\\": \\"2021-01-01 00:00:00to2021-02-28 23:59:59\\", \\"operator\\": \\"not between\\"}, \\"supervisor_check_date\\": {\\"value\\": \\"2021-10-04 00:00:00to2021-10-04 23:59:59\\", \\"operator\\": \\"not between\\"}, \\"last_change_status_date\\": {\\"value\\": \\"2021-10-01 00:00:00to2021-10-31 23:59:59\\", \\"operator\\": \\"between\\"}, \\"supervisor_process_date\\": {\\"value\\": \\"2021-10-25 23:00:00to2021-10-31 00:59:00\\", \\"operator\\": \\"between\\"}, \\"conditionsConnectOperator\\": \\"and\\"}, \\"block4\\": {\\"120\\": {\\"value\\": \\"http://splitter.docker/lisa/#/cross-check-filter/update/1\\", \\"operator\\": \\"ilike\\"}, \\"121\\": {\\"value\\": \\"http://splitter.docker/lisa/#/cross-check-filter/update/1\\", \\"operator\\": \\"not like\\"}, \\"156\\": {\\"value\\": \\"http://splitter.docker/lisa/#/cross-check-filter/update/1\\", \\"operator\\": \\"ilike\\"}, \\"157\\": {\\"value\\": \\"http://splitter.docker/lisa/#/cross-check-filter/update/1\\", \\"operator\\": \\"not like\\"}, \\"subject\\": {\\"value\\": \\"=~}!@#$%^&*()_+`-]\'/[;.,}\\\\\\"?{:>\\\\\\\\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО\\", \\"operator\\": \\"ilike\\"}, \\"result_comment\\": {\\"value\\": \\"=~}!@#$%^&*()_+`-]\'/[;.,}\\\\\\"?{:>\\\\\\\\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО\\", \\"operator\\": \\"not like\\"}, \\"recommendations\\": {\\"value\\": \\"ЙЦУКЕНГШЩЗХЪqwertyuiop[]\\", \\"operator\\": \\"ilike\\"}, \\"correction_comment\\": {\\"value\\": \\"1234\\", \\"operator\\": \\"not like\\"}, \\"supervisor_comment\\": {\\"value\\": \\"ЯЧСМ\\", \\"operator\\": \\"ilike\\"}, \\"conditionsConnectOperator\\": \\"or\\"}}, \\"blocksConnectOperator\\": \\"or\\"}}"}',
                            'new_value' => '{"limit": "20", "conditions": "{\\"group1\\":{\\"blocks\\":{\\"block1\\":{\\"status\\":{\\"value\\":[\\"8\\",\\"9\\"],\\"operator\\":\\"in\\"},\\"cross_check_status\\":{\\"value\\":[\\"2\\"],\\"operator\\":\\"not in\\"},\\"awaiting_correction\\":{\\"value\\":[\\"0\\"],\\"operator\\":\\"in\\"},\\"conditionsConnectOperator\\":\\"and\\"},\\"block2\\":{\\"33\\":{\\"value\\":[\\"69\\",\\"70\\",\\"71\\",\\"72\\",\\"73\\"],\\"operator\\":\\"in\\"},\\"conditionsConnectOperator\\":\\"and\\",\\"author_id\\":{\\"value\\":[4,15,17],\\"operator\\":\\"not in\\"}},\\"block3\\":{\\"11\\":{\\"value\\":\\"1\\",\\"operator\\":\\"=\\"},\\"conditionsConnectOperator\\":\\"and\\"}},\\"blocksConnectOperator\\":\\"or\\"},\\"group2\\":{\\"blocks\\":{\\"block1\\":{\\"54\\":{\\"value\\":\\"1.5\\",\\"operator\\":\\"<=\\"},\\"conditionsConnectOperator\\":\\"and\\"},\\"block2\\":{\\"82\\":{\\"value\\":\\"20\\",\\"operator\\":\\">=\\"},\\"conditionsConnectOperator\\":\\"and\\"}},\\"blocksConnectOperator\\":\\"or\\"},\\"group3\\":{\\"blocks\\":{\\"block1\\":{\\"conditionsConnectOperator\\":\\"and\\",\\"result_comment\\":{\\"value\\":\\"=~}!@#$%^&*()_+`-]\'/[;.,}\\\\\\"?{:><1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО\\",\\"operator\\":\\"not like\\"}}},\\"blocksConnectOperator\\":\\"or\\"}}"}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 2,
                        ]
                    ],
                ],
            ]
        ]
    ],

    'case6' => [
        'setting' => [
            'description' => 'Создание КЧ-фильтра 6',
//группа один из
//блок все
//поиск не эти
//список эти
//чекбокс равно да
//целое >=
//дробное <=
//дата
//текст не содержит
//групп несколько
//блоков несколько
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'id' => 1,
                'team_id' => 1,
                'limit' => 50,
                'order_by' => NULL,
                'conditions' => [
                    'group1' => [
                        'blocks' => [
                            'block1' => [
                                'status' => [
                                    'value' => [
                                        0 => '8',
                                        1 => '9',
                                    ],
                                    'operator' => 'in',
                                ],
                                'cross_check_status' => [
                                    'value' => [
                                        0 => '2',
                                    ],
                                    'operator' => 'not in',
                                ],
                                'awaiting_correction' => [
                                    'value' => [
                                        0 => '0',
                                    ],
                                    'operator' => 'in',
                                ],
                                'conditionsConnectOperator' => 'and',
                            ],
                            'block2' => [
                                46 => [
                                    'value' => [
                                        0 => '138',
                                        1 => '139',
                                    ],
                                    'operator' => 'not in',
                                ],
                                80 => [
                                    'value' => '20',
                                    'operator' => '>',
                                ],
                                'conditionsConnectOperator' => 'or',
                            ],
                            'block3' => [
                                15 => [
                                    'value' => '0',
                                    'operator' => '=',
                                ],
                                53 => [
                                    'value' => '3.25',
                                    'operator' => '>=',
                                ],
                                'conditionsConnectOperator' => 'or',
                            ],
                            'block4' => [
                                'conditionsConnectOperator' => 'or',
                                'planned_start_date' => [
                                    'value' => '2021-10-11 00:00:00to2021-10-17 23:59:59',
                                    'operator' => 'between',
                                ],
                            ],
                        ],
                        'blocksConnectOperator' => 'and',
                    ],
                ],
            ],
            'responseBody' => [
                'model' => [
                    'id' => 1,
                    'team_id' => 1,
                    'limit' => 50,
                    'order_by' => NULL,
                    'conditions' => '{"group1":{"blocks":{"block1":{"status":{"value":["8","9"],"operator":"in"},"cross_check_status":{"value":["2"],"operator":"not in"},"awaiting_correction":{"value":["0"],"operator":"in"},"conditionsConnectOperator":"and"},"block2":{"46":{"value":["138","139"],"operator":"not in"},"80":{"value":"20","operator":">"},"conditionsConnectOperator":"or"},"block3":{"15":{"value":"0","operator":"="},"53":{"value":"3.25","operator":">="},"conditionsConnectOperator":"or"},"block4":{"conditionsConnectOperator":"or","planned_start_date":{"value":"2021-10-11 00:00:00to2021-10-17 23:59:59","operator":"between"}}},"blocksConnectOperator":"and"}}',
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'cross_check_filters' => array_replace_recursive(
                        (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['cross_check_filters'],
                        [
                            [
                                'id' => 1,
                                'team_id' => 1,
                                'limit' => 50,
                                'order_by' => null,
                                'conditions' => '{"group1":{"blocks":{"block1":{"status":{"value":["8","9"],"operator":"in"},"cross_check_status":{"value":["2"],"operator":"not in"},"awaiting_correction":{"value":["0"],"operator":"in"},"conditionsConnectOperator":"and"},"block2":{"46":{"value":["138","139"],"operator":"not in"},"80":{"value":"20","operator":">"},"conditionsConnectOperator":"or"},"block3":{"15":{"value":"0","operator":"="},"53":{"value":"3.25","operator":">="},"conditionsConnectOperator":"or"},"block4":{"conditionsConnectOperator":"or","planned_start_date":{"value":"2021-10-11 00:00:00to2021-10-17 23:59:59","operator":"between"}}},"blocksConnectOperator":"and"}}',
                            ],
                        ],
                    ),
                    'common_log' => [
                        [
                            'id' => 1,
                            'entity' => 'cross_check_filters',
                            'entity_id' => 1,
                            'old_value' => '{"conditions": "{\\"group1\\": {\\"blocks\\": {\\"block1\\": {\\"status\\": {\\"value\\": [\\"8\\", \\"9\\"], \\"operator\\": \\"in\\"}, \\"cross_check_status\\": {\\"value\\": [\\"2\\"], \\"operator\\": \\"not in\\"}, \\"awaiting_correction\\": {\\"value\\": [\\"0\\"], \\"operator\\": \\"in\\"}, \\"conditionsConnectOperator\\": \\"and\\"}, \\"block2\\": {\\"1\\": {\\"value\\": \\"0\\", \\"operator\\": \\"=\\"}, \\"2\\": {\\"value\\": \\"1\\", \\"operator\\": \\"=\\"}, \\"3\\": {\\"value\\": \\"0\\", \\"operator\\": \\"=\\"}, \\"4\\": {\\"value\\": \\"1\\", \\"operator\\": \\"=\\"}, \\"5\\": {\\"value\\": \\"0\\", \\"operator\\": \\"=\\"}, \\"6\\": {\\"value\\": \\"1\\", \\"operator\\": \\"=\\"}, \\"7\\": {\\"value\\": \\"0\\", \\"operator\\": \\"=\\"}, \\"8\\": {\\"value\\": \\"1\\", \\"operator\\": \\"=\\"}, \\"9\\": {\\"value\\": \\"0\\", \\"operator\\": \\"=\\"}, \\"10\\": {\\"value\\": \\"1\\", \\"operator\\": \\"=\\"}, \\"11\\": {\\"value\\": \\"0\\", \\"operator\\": \\"=\\"}, \\"12\\": {\\"value\\": \\"1\\", \\"operator\\": \\"=\\"}, \\"13\\": {\\"value\\": \\"0\\", \\"operator\\": \\"=\\"}, \\"14\\": {\\"value\\": \\"1\\", \\"operator\\": \\"=\\"}, \\"15\\": {\\"value\\": \\"0\\", \\"operator\\": \\"=\\"}, \\"16\\": {\\"value\\": \\"1\\", \\"operator\\": \\"=\\"}, \\"17\\": {\\"value\\": \\"0\\", \\"operator\\": \\"=\\"}, \\"18\\": {\\"value\\": \\"1\\", \\"operator\\": \\"=\\"}, \\"19\\": {\\"value\\": \\"0\\", \\"operator\\": \\"=\\"}, \\"123\\": {\\"value\\": \\"1\\", \\"operator\\": \\"=\\"}, \\"124\\": {\\"value\\": \\"0\\", \\"operator\\": \\"=\\"}, \\"125\\": {\\"value\\": \\"1\\", \\"operator\\": \\"=\\"}, \\"126\\": {\\"value\\": \\"0\\", \\"operator\\": \\"=\\"}, \\"127\\": {\\"value\\": \\"1\\", \\"operator\\": \\"=\\"}, \\"159\\": {\\"value\\": \\"0\\", \\"operator\\": \\"=\\"}, \\"160\\": {\\"value\\": \\"1\\", \\"operator\\": \\"=\\"}, \\"169\\": {\\"value\\": \\"0\\", \\"operator\\": \\"=\\"}, \\"conditionsConnectOperator\\": \\"or\\"}, \\"block3\\": {\\"20\\": {\\"value\\": [\\"66\\", \\"65\\", \\"64\\"], \\"operator\\": \\"in\\"}, \\"21\\": {\\"value\\": [\\"5\\", \\"3\\", \\"4\\"], \\"operator\\": \\"not in\\"}, \\"22\\": {\\"value\\": [\\"10\\", \\"9\\", \\"8\\"], \\"operator\\": \\"in\\"}, \\"23\\": {\\"value\\": [\\"14\\", \\"13\\", \\"12\\"], \\"operator\\": \\"not in\\"}, \\"24\\": {\\"value\\": [\\"173\\"], \\"operator\\": \\"in\\"}, \\"25\\": {\\"value\\": [\\"20\\"], \\"operator\\": \\"not in\\"}, \\"26\\": {\\"value\\": [\\"174\\"], \\"operator\\": \\"in\\"}, \\"27\\": {\\"value\\": [\\"26\\"], \\"operator\\": \\"not in\\"}, \\"28\\": {\\"value\\": [\\"27\\", \\"28\\"], \\"operator\\": \\"in\\"}, \\"29\\": {\\"value\\": [\\"31\\", \\"30\\"], \\"operator\\": \\"not in\\"}, \\"30\\": {\\"value\\": [\\"40\\", \\"39\\", \\"41\\"], \\"operator\\": \\"in\\"}, \\"31\\": {\\"value\\": [\\"49\\", \\"48\\"], \\"operator\\": \\"not in\\"}, \\"32\\": {\\"value\\": [\\"53\\", \\"52\\"], \\"operator\\": \\"in\\"}, \\"conditionsConnectOperator\\": \\"and\\"}, \\"block4\\": {\\"type_id\\": {\\"value\\": [\\"15\\"], \\"operator\\": \\"in\\"}, \\"priority\\": {\\"value\\": [\\"3\\", \\"2\\"], \\"operator\\": \\"in\\"}, \\"direction\\": {\\"value\\": [\\"1\\"], \\"operator\\": \\"not in\\"}, \\"team_direction\\": {\\"value\\": [\\"1\\", \\"2\\", \\"3\\"], \\"operator\\": \\"not in\\"}, \\"previous_status\\": {\\"value\\": [\\"1\\", \\"3\\", \\"5\\"], \\"operator\\": \\"in\\"}, \\"report_period_id\\": {\\"value\\": [\\"4\\", \\"3\\"], \\"operator\\": \\"in\\"}, \\"sv_report_periods\\": {\\"value\\": [\\"1\\", \\"2\\"], \\"operator\\": \\"not in\\"}, \\"conditionsConnectOperator\\": \\"or\\"}}, \\"blocksConnectOperator\\": \\"and\\"}, \\"group2\\": {\\"blocks\\": {\\"block1\\": {\\"author_id\\": {\\"value\\": [11, 12], \\"operator\\": \\"in\\"}, \\"seller_id\\": {\\"value\\": [5, -2, 0], \\"operator\\": \\"not in\\"}, \\"manager_id\\": {\\"value\\": [13, 14], \\"operator\\": \\"in\\"}, \\"category_id\\": {\\"value\\": [1], \\"operator\\": \\"not in\\"}, \\"supervisor_id\\": {\\"value\\": [33, 36], \\"operator\\": \\"not in\\"}, \\"rz_category_id\\": {\\"value\\": [4641568, 4652996, 4629305], \\"operator\\": \\"in\\"}, \\"cross_check_manager_id\\": {\\"value\\": [15, 16], \\"operator\\": \\"in\\"}, \\"conditionsConnectOperator\\": \\"and\\"}, \\"block2\\": {\\"49\\": {\\"value\\": \\"1\\", \\"operator\\": \\"=\\"}, \\"50\\": {\\"value\\": \\"0\\", \\"operator\\": \\"!=\\"}, \\"51\\": {\\"value\\": \\"0.1\\", \\"operator\\": \\">=\\"}, \\"52\\": {\\"value\\": \\"1.1\\", \\"operator\\": \\"<=\\"}, \\"53\\": {\\"value\\": \\"99999999\\", \\"operator\\": \\">\\"}, \\"54\\": {\\"value\\": \\"11111111\\", \\"operator\\": \\"<\\"}, \\"65\\": {\\"value\\": \\"1-9\\", \\"operator\\": \\"between\\"}, \\"66\\": {\\"value\\": \\"5\\", \\"operator\\": \\"=\\"}, \\"67\\": {\\"value\\": \\"0.5\\", \\"operator\\": \\"!=\\"}, \\"73\\": {\\"value\\": \\"55555555\\", \\"operator\\": \\">=\\"}, \\"74\\": {\\"value\\": \\"1.11\\", \\"operator\\": \\"<=\\"}, \\"75\\": {\\"value\\": \\"0.99\\", \\"operator\\": \\">\\"}, \\"114\\": {\\"value\\": \\"0\\", \\"operator\\": \\"<\\"}, \\"child_count\\": {\\"value\\": \\"9\\", \\"operator\\": \\"=\\"}, \\"amount_to_work\\": {\\"value\\": \\"1-3\\", \\"operator\\": \\"between\\"}, \\"conditionsConnectOperator\\": \\"or\\"}, \\"block3\\": {\\"created_at\\": {\\"value\\": \\"2021-10-18 00:00:00to2021-10-31 23:59:59\\", \\"operator\\": \\"not between\\"}, \\"actual_start_date\\": {\\"value\\": \\"2021-10-01 00:00:00to2021-10-01 01:01:00\\", \\"operator\\": \\"between\\"}, \\"actual_finish_date\\": {\\"value\\": \\"2021-10-01 00:00:00to2021-10-01 23:59:59\\", \\"operator\\": \\"not between\\"}, \\"planned_start_date\\": {\\"value\\": \\"2021-10-11 00:00:00to2021-10-11 23:59:59\\", \\"operator\\": \\"between\\"}, \\"planned_finish_date\\": {\\"value\\": \\"2021-01-01 00:00:00to2021-02-28 23:59:59\\", \\"operator\\": \\"not between\\"}, \\"supervisor_check_date\\": {\\"value\\": \\"2021-10-04 00:00:00to2021-10-04 23:59:59\\", \\"operator\\": \\"not between\\"}, \\"last_change_status_date\\": {\\"value\\": \\"2021-10-01 00:00:00to2021-10-31 23:59:59\\", \\"operator\\": \\"between\\"}, \\"supervisor_process_date\\": {\\"value\\": \\"2021-10-25 23:00:00to2021-10-31 00:59:00\\", \\"operator\\": \\"between\\"}, \\"conditionsConnectOperator\\": \\"and\\"}, \\"block4\\": {\\"120\\": {\\"value\\": \\"http://splitter.docker/lisa/#/cross-check-filter/update/1\\", \\"operator\\": \\"ilike\\"}, \\"121\\": {\\"value\\": \\"http://splitter.docker/lisa/#/cross-check-filter/update/1\\", \\"operator\\": \\"not like\\"}, \\"156\\": {\\"value\\": \\"http://splitter.docker/lisa/#/cross-check-filter/update/1\\", \\"operator\\": \\"ilike\\"}, \\"157\\": {\\"value\\": \\"http://splitter.docker/lisa/#/cross-check-filter/update/1\\", \\"operator\\": \\"not like\\"}, \\"subject\\": {\\"value\\": \\"=~}!@#$%^&*()_+`-]\'/[;.,}\\\\\\"?{:>\\\\\\\\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО\\", \\"operator\\": \\"ilike\\"}, \\"result_comment\\": {\\"value\\": \\"=~}!@#$%^&*()_+`-]\'/[;.,}\\\\\\"?{:>\\\\\\\\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО\\", \\"operator\\": \\"not like\\"}, \\"recommendations\\": {\\"value\\": \\"ЙЦУКЕНГШЩЗХЪqwertyuiop[]\\", \\"operator\\": \\"ilike\\"}, \\"correction_comment\\": {\\"value\\": \\"1234\\", \\"operator\\": \\"not like\\"}, \\"supervisor_comment\\": {\\"value\\": \\"ЯЧСМ\\", \\"operator\\": \\"ilike\\"}, \\"conditionsConnectOperator\\": \\"or\\"}}, \\"blocksConnectOperator\\": \\"or\\"}}"}',
                            'new_value' => '{"conditions": "{\\"group1\\":{\\"blocks\\":{\\"block1\\":{\\"status\\":{\\"value\\":[\\"8\\",\\"9\\"],\\"operator\\":\\"in\\"},\\"cross_check_status\\":{\\"value\\":[\\"2\\"],\\"operator\\":\\"not in\\"},\\"awaiting_correction\\":{\\"value\\":[\\"0\\"],\\"operator\\":\\"in\\"},\\"conditionsConnectOperator\\":\\"and\\"},\\"block2\\":{\\"46\\":{\\"value\\":[\\"138\\",\\"139\\"],\\"operator\\":\\"not in\\"},\\"80\\":{\\"value\\":\\"20\\",\\"operator\\":\\">\\"},\\"conditionsConnectOperator\\":\\"or\\"},\\"block3\\":{\\"15\\":{\\"value\\":\\"0\\",\\"operator\\":\\"=\\"},\\"53\\":{\\"value\\":\\"3.25\\",\\"operator\\":\\">=\\"},\\"conditionsConnectOperator\\":\\"or\\"},\\"block4\\":{\\"conditionsConnectOperator\\":\\"or\\",\\"planned_start_date\\":{\\"value\\":\\"2021-10-11 00:00:00to2021-10-17 23:59:59\\",\\"operator\\":\\"between\\"}}},\\"blocksConnectOperator\\":\\"and\\"}}"}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 2,
                        ]
                    ],
                ],
            ]
        ]
    ],
];
