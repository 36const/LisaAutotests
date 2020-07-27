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
                'CrossCheckFilter[limit]' => '50',
                'conditions[group1][blocksConnectOperator]' => 'and',
                'conditions[group1][blocks][block1][awaiting_correction][operator]' => 'in',
                'conditions[group1][blocks][block1][awaiting_correction][value]' => ['1'],
                'conditions[group1][blocks][block1][conditionsConnectOperator]' => 'and',
                'conditions[group1][blocks][block1][status][operator]' => 'in',
                'conditions[group1][blocks][block1][status][value]' => ['8', '9'],
                'conditions[group1][blocks][block2][116][operator]' => '=',
                'conditions[group1][blocks][block2][116][value]' => '10',
                'conditions[group1][blocks][block2][1][operator]' => '=',
                'conditions[group1][blocks][block2][1][value]' => '1',
                'conditions[group1][blocks][block2][23][operator]' => 'in',
                'conditions[group1][blocks][block2][23][value]' => ['13', '14', '144'],
                'conditions[group1][blocks][block2][52][operator]' => '=',
                'conditions[group1][blocks][block2][52][value]' => '0.5',
                'conditions[group1][blocks][block2][actual_finish_date][operator]' => 'between',
                'conditions[group1][blocks][block2][actual_finish_date][value]' => '2020-07-13 0:00to2020-07-26 23:59',
                'conditions[group1][blocks][block2][author_id][operator]' => 'in',
                'conditions[group1][blocks][block2][author_id][value]' => ['36'],
                'conditions[group1][blocks][block2][conditionsConnectOperator]' => 'and',
                'conditions[group1][blocks][block2][subject][operator]' => 'ilike',
                'conditions[group1][blocks][block2][subject][value]' => 'фывафыва',
                'field-selector' => ['status', 'awaiting_correction', '1', '23', '52', '116', 'author_id', 'subject', 'actual_finish_date']
            ],
            'db' => [
                "lisa_fixtures" => [
                    "cross_check_filters" => [
                        [
                            //"id" => 17,
                            "team_id" => 1,
                            "limit" => 50,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "awaiting_correction": {"value": ["1"], "operator": "in"}, "conditionsConnectOperator": "and"}, "block2": {"1": {"value": "1", "operator": "="}, "23": {"value": ["13", "14", "144"], "operator": "in"}, "52": {"value": "0.5", "operator": "="}, "116": {"value": "10", "operator": "="}, "subject": {"value": "фывафыва", "operator": "ilike"}, "author_id": {"value": ["36"], "operator": "in"}, "actual_finish_date": {"value": "2020-07-13 0:00to2020-07-26 23:59", "operator": "between"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}',
                        ],
                        [
                            //"id" => 1,
                            "team_id" => 2,
                            "limit" => 3,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
                        ],
                        [
                            //"id" => 2,
                            "team_id" => 3,
                            "limit" => 3,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
                        ],
                        [
                            //"id" => 3,
                            "team_id" => 4,
                            "limit" => 3,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
                        ],
                        [
                            //"id" => 4,
                            "team_id" => 5,
                            "limit" => 3,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
                        ],
                        [
                            //"id" => 5,
                            "team_id" => 6,
                            "limit" => 3,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
                        ],
                        [
                            //"id" => 6,
                            "team_id" => 7,
                            "limit" => 3,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
                        ],
                        [
                            //"id" => 7,
                            "team_id" => 8,
                            "limit" => 3,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
                        ],
                        [
                            //"id" => 8,
                            "team_id" => 9,
                            "limit" => 3,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
                        ],
                        [
                            //"id" => 9,
                            "team_id" => 10,
                            "limit" => 3,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
                        ],
                        [
                            //"id" => 10,
                            "team_id" => 11,
                            "limit" => 3,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
                        ],
                        [
                            //"id" => 11,
                            "team_id" => 12,
                            "limit" => 3,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
                        ],
                        [
                            //"id" => 12,
                            "team_id" => 13,
                            "limit" => 3,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
                        ],
                        [
                            //"id" => 13,
                            "team_id" => 14,
                            "limit" => 3,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
                        ],
                        [
                            //"id" => 14,
                            "team_id" => 15,
                            "limit" => 3,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}, "block2": {"1": {"value": "1", "operator": "="}, "59": {"value": "60", "operator": "<"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
                        ],
                        [
                            //"id" => 15,
                            "team_id" => 16,
                            "limit" => 3,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
                        ],
                        [
                            //"id" => 16,
                            "team_id" => 17,
                            "limit" => 100,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["1", "2", "3", "4", "5", "6", "7", "8", "9", "11"], "operator": "in"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
                        ],
                        [
                            //"id" => 18,
                            "team_id" => 18,
                            "limit" => 3,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}, "block2": {"32": {"value": ["54"], "operator": "in"}, "33": {"value": ["67", "68", "69", "70"], "operator": "in"}, "conditionsConnectOperator": "or"}}, "blocksConnectOperator": "and"}}'
                        ],
                        [
                            //"id" => 19,
                            "team_id" => 19,
                            "limit" => 3,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
                        ],
                        [
                            //"id" => 20,
                            "team_id" => 20,
                            "limit" => 3,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
                        ],
                        [
                            //"id" => 21,
                            "team_id" => 21,
                            "limit" => 3,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
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
                'conditions[group1][blocksConnectOperator]' => 'or',
                'conditions[group1][blocks][block1][awaiting_correction][operator]' => 'in',
                'conditions[group1][blocks][block1][awaiting_correction][value]' => ['1'],
                'conditions[group1][blocks][block1][conditionsConnectOperator]' => 'and',
                'conditions[group1][blocks][block1][status][operator]' => 'in',
                'conditions[group1][blocks][block1][status][value]' => ['8', '9'],
                'conditions[group1][blocks][block2][2][operator]' => '=',
                'conditions[group1][blocks][block2][2][value]' => '0',
                'conditions[group1][blocks][block2][conditionsConnectOperator]' => 'or',
                'conditions[group1][blocks][block2][description][operator]' => 'ilike',
                'conditions[group1][blocks][block2][description][value]' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:><1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                'conditions[group1][blocks][block3][66][operator]' => '!=',
                'conditions[group1][blocks][block3][66][value]' => '10',
                'conditions[group1][blocks][block3][conditionsConnectOperator]' => 'or',
                'conditions[group1][blocks][block3][manager_id][operator]' => 'in',
                'conditions[group1][blocks][block3][manager_id][value]' => ['11', '13'],
                'conditions[group1][blocks][block4][conditionsConnectOperator]' => 'or',
                'conditions[group1][blocks][block4][created_at][operator]' => 'not between',
                'conditions[group1][blocks][block4][created_at][value]' => '2020-07-22 0:00to2020-07-22 23:59',
                'conditions[group1][blocks][block5][51][operator]' => '=',
                'conditions[group1][blocks][block5][51][value]' => '8.55',
                'conditions[group1][blocks][block5][conditionsConnectOperator]' => 'or',
                'field-selector' => ['status', 'awaiting_correction', '2', 'description', '66', 'manager_id', 'created_at', '51']
            ],
            'db' => [
                "lisa_fixtures" => [
                    "cross_check_filters" => [
                        [
                            //"id" => 17,
                            "team_id" => 1,
                            "limit" => 50,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "awaiting_correction": {"value": ["1"], "operator": "in"}, "conditionsConnectOperator": "and"}, "block2": {"2": {"value": "0", "operator": "="}, "description": {"value": "=~}!@#$%^&*()_+`-]\'/[;.,}\"?{:><1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО", "operator": "ilike"}, "conditionsConnectOperator": "or"}, "block3": {"66": {"value": "10", "operator": "!="}, "manager_id": {"value": ["11", "13"], "operator": "in"}, "conditionsConnectOperator": "or"}, "block4": {"created_at": {"value": "2020-07-22 0:00to2020-07-22 23:59", "operator": "not between"}, "conditionsConnectOperator": "or"}, "block5": {"51": {"value": "8.55", "operator": "="}, "conditionsConnectOperator": "or"}}, "blocksConnectOperator": "or"}}',
                        ],
                        [
                            //"id" => 1,
                            "team_id" => 2,
                            "limit" => 3,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
                        ],
                        [
                            //"id" => 2,
                            "team_id" => 3,
                            "limit" => 3,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
                        ],
                        [
                            //"id" => 3,
                            "team_id" => 4,
                            "limit" => 3,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
                        ],
                        [
                            //"id" => 4,
                            "team_id" => 5,
                            "limit" => 3,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
                        ],
                        [
                            //"id" => 5,
                            "team_id" => 6,
                            "limit" => 3,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
                        ],
                        [
                            //"id" => 6,
                            "team_id" => 7,
                            "limit" => 3,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
                        ],
                        [
                            //"id" => 7,
                            "team_id" => 8,
                            "limit" => 3,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
                        ],
                        [
                            //"id" => 8,
                            "team_id" => 9,
                            "limit" => 3,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
                        ],
                        [
                            //"id" => 9,
                            "team_id" => 10,
                            "limit" => 3,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
                        ],
                        [
                            //"id" => 10,
                            "team_id" => 11,
                            "limit" => 3,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
                        ],
                        [
                            //"id" => 11,
                            "team_id" => 12,
                            "limit" => 3,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
                        ],
                        [
                            //"id" => 12,
                            "team_id" => 13,
                            "limit" => 3,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
                        ],
                        [
                            //"id" => 13,
                            "team_id" => 14,
                            "limit" => 3,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
                        ],
                        [
                            //"id" => 14,
                            "team_id" => 15,
                            "limit" => 3,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}, "block2": {"1": {"value": "1", "operator": "="}, "59": {"value": "60", "operator": "<"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
                        ],
                        [
                            //"id" => 15,
                            "team_id" => 16,
                            "limit" => 3,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
                        ],
                        [
                            //"id" => 16,
                            "team_id" => 17,
                            "limit" => 100,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["1", "2", "3", "4", "5", "6", "7", "8", "9", "11"], "operator": "in"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
                        ],
                        [
                            //"id" => 18,
                            "team_id" => 18,
                            "limit" => 3,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}, "block2": {"32": {"value": ["54"], "operator": "in"}, "33": {"value": ["67", "68", "69", "70"], "operator": "in"}, "conditionsConnectOperator": "or"}}, "blocksConnectOperator": "and"}}'
                        ],
                        [
                            //"id" => 19,
                            "team_id" => 19,
                            "limit" => 3,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
                        ],
                        [
                            //"id" => 20,
                            "team_id" => 20,
                            "limit" => 3,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
                        ],
                        [
                            //"id" => 21,
                            "team_id" => 21,
                            "limit" => 3,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
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
                'conditions[group1][blocksConnectOperator]' => 'and',
                'conditions[group1][blocks][block1][awaiting_correction][operator]' => 'in',
                'conditions[group1][blocks][block1][awaiting_correction][value]' => ['1'],
                'conditions[group1][blocks][block1][conditionsConnectOperator]' => 'and',
                'conditions[group1][blocks][block1][status][operator]' => 'in',
                'conditions[group1][blocks][block1][status][value]' => ['8', '9'],
                'conditions[group1][blocks][block2][61][operator]' => '>',
                'conditions[group1][blocks][block2][61][value]' => '1.2',
                'conditions[group1][blocks][block2][68][operator]' => '>=',
                'conditions[group1][blocks][block2][68][value]' => '10',
                'conditions[group1][blocks][block2][actual_finish_date][operator]' => 'between',
                'conditions[group1][blocks][block2][actual_finish_date][value]' => '2020-07-22 0:00to2020-07-24 23:59',
                'conditions[group1][blocks][block2][conditionsConnectOperator]' => 'or',
                'conditions[group1][blocks][block2][priority][operator]' => 'not in',
                'conditions[group1][blocks][block2][priority][value]' => ['2', '3', '4'],
                'conditions[group1][blocks][block2][supervisor_comment][operator]' => 'ilike',
                'conditions[group1][blocks][block2][supervisor_comment][value]' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:><1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                'conditions[group1][blocks][block2][supervisor_id][operator]' => 'in',
                'conditions[group1][blocks][block2][supervisor_id][value]' => ['29', '10'],
                'field-selector' => ['status', 'awaiting_correction', '61', '68', 'supervisor_id', 'actual_finish_date', 'supervisor_comment', 'priority']
            ],
            'db' => [
                "lisa_fixtures" => [
                    "cross_check_filters" => [
                        [
                            //"id" => 17,
                            "team_id" => 1,
                            "limit" => 50,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "awaiting_correction": {"value": ["1"], "operator": "in"}, "conditionsConnectOperator": "and"}, "block2": {"61": {"value": "1.2", "operator": ">"}, "68": {"value": "10", "operator": ">="}, "priority": {"value": ["2", "3", "4"], "operator": "not in"}, "supervisor_id": {"value": ["29", "10"], "operator": "in"}, "actual_finish_date": {"value": "2020-07-22 0:00to2020-07-24 23:59", "operator": "between"}, "supervisor_comment": {"value": "=~}!@#$%^&*()_+`-]\'/[;.,}\"?{:><1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО", "operator": "ilike"}, "conditionsConnectOperator": "or"}}, "blocksConnectOperator": "and"}}',
                        ],
                        [
                            //"id" => 1,
                            "team_id" => 2,
                            "limit" => 3,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
                        ],
                        [
                            //"id" => 2,
                            "team_id" => 3,
                            "limit" => 3,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
                        ],
                        [
                            //"id" => 3,
                            "team_id" => 4,
                            "limit" => 3,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
                        ],
                        [
                            //"id" => 4,
                            "team_id" => 5,
                            "limit" => 3,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
                        ],
                        [
                            //"id" => 5,
                            "team_id" => 6,
                            "limit" => 3,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
                        ],
                        [
                            //"id" => 6,
                            "team_id" => 7,
                            "limit" => 3,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
                        ],
                        [
                            //"id" => 7,
                            "team_id" => 8,
                            "limit" => 3,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
                        ],
                        [
                            //"id" => 8,
                            "team_id" => 9,
                            "limit" => 3,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
                        ],
                        [
                            //"id" => 9,
                            "team_id" => 10,
                            "limit" => 3,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
                        ],
                        [
                            //"id" => 10,
                            "team_id" => 11,
                            "limit" => 3,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
                        ],
                        [
                            //"id" => 11,
                            "team_id" => 12,
                            "limit" => 3,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
                        ],
                        [
                            //"id" => 12,
                            "team_id" => 13,
                            "limit" => 3,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
                        ],
                        [
                            //"id" => 13,
                            "team_id" => 14,
                            "limit" => 3,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
                        ],
                        [
                            //"id" => 14,
                            "team_id" => 15,
                            "limit" => 3,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}, "block2": {"1": {"value": "1", "operator": "="}, "59": {"value": "60", "operator": "<"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
                        ],
                        [
                            //"id" => 15,
                            "team_id" => 16,
                            "limit" => 3,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
                        ],
                        [
                            //"id" => 16,
                            "team_id" => 17,
                            "limit" => 100,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["1", "2", "3", "4", "5", "6", "7", "8", "9", "11"], "operator": "in"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
                        ],
                        [
                            //"id" => 18,
                            "team_id" => 18,
                            "limit" => 3,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}, "block2": {"32": {"value": ["54"], "operator": "in"}, "33": {"value": ["67", "68", "69", "70"], "operator": "in"}, "conditionsConnectOperator": "or"}}, "blocksConnectOperator": "and"}}'
                        ],
                        [
                            //"id" => 19,
                            "team_id" => 19,
                            "limit" => 3,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
                        ],
                        [
                            //"id" => 20,
                            "team_id" => 20,
                            "limit" => 3,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
                        ],
                        [
                            //"id" => 21,
                            "team_id" => 21,
                            "limit" => 3,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
                        ]
                    ],
                ],
            ]
        ]
    ],

    'case4' => [
        'setting' => [
            'description' => 'Создание КЧ-фильтра 4',
//группа один из
//блок все
//поиск не эти
//список эти
//чекбокс равно да
//целое
//дробное <
//дата в промежутке
//текст не содержит
//групп несколько
//блоков несколько
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'conditions[group1][blocksConnectOperator]' => 'and',
                'conditions[group1][blocks][block1][awaiting_correction][operator]' => 'in',
                'conditions[group1][blocks][block1][awaiting_correction][value]' => ['1'],
                'conditions[group1][blocks][block1][conditionsConnectOperator]' => 'and',
                'conditions[group1][blocks][block1][status][operator]' => 'in',
                'conditions[group1][blocks][block1][status][value]' => ['8', '9'],
                'conditions[group1][blocks][block2][61][operator]' => '>',
                'conditions[group1][blocks][block2][61][value]' => '1.2',
                'conditions[group1][blocks][block2][68][operator]' => '>=',
                'conditions[group1][blocks][block2][68][value]' => '10',
                'conditions[group1][blocks][block2][actual_finish_date][operator]' => 'between',
                'conditions[group1][blocks][block2][actual_finish_date][value]' => '2020-07-22 0:00to2020-07-24 23:59',
                'conditions[group1][blocks][block2][conditionsConnectOperator]' => 'or',
                'conditions[group1][blocks][block2][priority][operator]' => 'not in',
                'conditions[group1][blocks][block2][priority][value]' => ['2', '3', '4'],
                'conditions[group1][blocks][block2][supervisor_comment][operator]' => 'ilike',
                'conditions[group1][blocks][block2][supervisor_comment][value]' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:><1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                'conditions[group1][blocks][block2][supervisor_id][operator]' => 'in',
                'conditions[group1][blocks][block2][supervisor_id][value]' => ['29', '10'],
                'field-selector' => ['status', 'awaiting_correction', '61', '68', 'supervisor_id', 'actual_finish_date', 'supervisor_comment', 'priority']
            ],
            'db' => [
                "lisa_fixtures" => [
                    "cross_check_filters" => [
                        [
                            //"id" => 17,
                            "team_id" => 1,
                            "limit" => 50,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "awaiting_correction": {"value": ["1"], "operator": "in"}, "conditionsConnectOperator": "and"}, "block2": {"61": {"value": "1.2", "operator": ">"}, "68": {"value": "10", "operator": ">="}, "priority": {"value": ["2", "3", "4"], "operator": "not in"}, "supervisor_id": {"value": ["29", "10"], "operator": "in"}, "actual_finish_date": {"value": "2020-07-22 0:00to2020-07-24 23:59", "operator": "between"}, "supervisor_comment": {"value": "=~}!@#$%^&*()_+`-]\'/[;.,}\"?{:><1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО", "operator": "ilike"}, "conditionsConnectOperator": "or"}}, "blocksConnectOperator": "and"}}',
                        ],
                        [
                            //"id" => 1,
                            "team_id" => 2,
                            "limit" => 3,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
                        ],
                        [
                            //"id" => 2,
                            "team_id" => 3,
                            "limit" => 3,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
                        ],
                        [
                            //"id" => 3,
                            "team_id" => 4,
                            "limit" => 3,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
                        ],
                        [
                            //"id" => 4,
                            "team_id" => 5,
                            "limit" => 3,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
                        ],
                        [
                            //"id" => 5,
                            "team_id" => 6,
                            "limit" => 3,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
                        ],
                        [
                            //"id" => 6,
                            "team_id" => 7,
                            "limit" => 3,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
                        ],
                        [
                            //"id" => 7,
                            "team_id" => 8,
                            "limit" => 3,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
                        ],
                        [
                            //"id" => 8,
                            "team_id" => 9,
                            "limit" => 3,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
                        ],
                        [
                            //"id" => 9,
                            "team_id" => 10,
                            "limit" => 3,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
                        ],
                        [
                            //"id" => 10,
                            "team_id" => 11,
                            "limit" => 3,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
                        ],
                        [
                            //"id" => 11,
                            "team_id" => 12,
                            "limit" => 3,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
                        ],
                        [
                            //"id" => 12,
                            "team_id" => 13,
                            "limit" => 3,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
                        ],
                        [
                            //"id" => 13,
                            "team_id" => 14,
                            "limit" => 3,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
                        ],
                        [
                            //"id" => 14,
                            "team_id" => 15,
                            "limit" => 3,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}, "block2": {"1": {"value": "1", "operator": "="}, "59": {"value": "60", "operator": "<"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
                        ],
                        [
                            //"id" => 15,
                            "team_id" => 16,
                            "limit" => 3,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
                        ],
                        [
                            //"id" => 16,
                            "team_id" => 17,
                            "limit" => 100,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["1", "2", "3", "4", "5", "6", "7", "8", "9", "11"], "operator": "in"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
                        ],
                        [
                            //"id" => 18,
                            "team_id" => 18,
                            "limit" => 3,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}, "block2": {"32": {"value": ["54"], "operator": "in"}, "33": {"value": ["67", "68", "69", "70"], "operator": "in"}, "conditionsConnectOperator": "or"}}, "blocksConnectOperator": "and"}}'
                        ],
                        [
                            //"id" => 19,
                            "team_id" => 19,
                            "limit" => 3,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
                        ],
                        [
                            //"id" => 20,
                            "team_id" => 20,
                            "limit" => 3,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
                        ],
                        [
                            //"id" => 21,
                            "team_id" => 21,
                            "limit" => 3,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
                        ]
                    ],
                ],
            ]
        ]
    ],

    'case5' => [
        'setting' => [
            'description' => 'Создание КЧ-фильтра 5',
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
                'conditions[group1][blocksConnectOperator]' => 'and',
                'conditions[group1][blocks][block1][awaiting_correction][operator]' => 'in',
                'conditions[group1][blocks][block1][awaiting_correction][value]' => ['1'],
                'conditions[group1][blocks][block1][conditionsConnectOperator]' => 'and',
                'conditions[group1][blocks][block1][status][operator]' => 'in',
                'conditions[group1][blocks][block1][status][value]' => ['8', '9'],
                'conditions[group1][blocks][block2][101][operator]' => '<=',
                'conditions[group1][blocks][block2][101][value]' => '11',
                'conditions[group1][blocks][block2][6][operator]' => '=',
                'conditions[group1][blocks][block2][6][value]' => '0',
                'conditions[group1][blocks][block2][category_id][operator]' => 'in',
                'conditions[group1][blocks][block2][category_id][value]' => ['108', '112', '253', '267', '249'],
                'conditions[group1][blocks][block2][conditionsConnectOperator]' => 'and',
                'conditions[group1][blocks][block2][planned_finish_date][operator]' => 'between',
                'conditions[group1][blocks][block2][planned_finish_date][value]' => '2020-07-01 0:00to2020-07-31 23:59',
                'conditions[group1][blocks][block2][reason_id][operator]' => 'in',
                'conditions[group1][blocks][block2][reason_id][value]' => ['12', '14', '15', '16', '1'],
                'conditions[group1][blocks][block2][recommendations][operator]' => 'ilike',
                'conditions[group1][blocks][block2][recommendations][value]' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:><1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                'field-selector' => ['status', 'awaiting_correction', '6', '101', 'category_id', 'recommendations', 'reason_id', 'planned_finish_date']
            ],
            'db' => [
                "lisa_fixtures" => [
                    "cross_check_filters" => [
                        [
                            //"id" => 17,
                            "team_id" => 1,
                            "limit" => 50,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "awaiting_correction": {"value": ["1"], "operator": "in"}, "conditionsConnectOperator": "and"}, "block2": {"6": {"value": "0", "operator": "="}, "101": {"value": "11", "operator": "<="}, "reason_id": {"value": ["12", "14", "15", "16", "1"], "operator": "in"}, "category_id": {"value": ["108", "112", "253", "267", "249"], "operator": "in"}, "recommendations": {"value": "=~}!@#$%^&*()_+`-]\'/[;.,}\"?{:><1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО", "operator": "ilike"}, "planned_finish_date": {"value": "2020-07-01 0:00to2020-07-31 23:59", "operator": "between"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}',
                        ],
                        [
                            //"id" => 1,
                            "team_id" => 2,
                            "limit" => 3,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
                        ],
                        [
                            //"id" => 2,
                            "team_id" => 3,
                            "limit" => 3,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
                        ],
                        [
                            //"id" => 3,
                            "team_id" => 4,
                            "limit" => 3,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
                        ],
                        [
                            //"id" => 4,
                            "team_id" => 5,
                            "limit" => 3,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
                        ],
                        [
                            //"id" => 5,
                            "team_id" => 6,
                            "limit" => 3,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
                        ],
                        [
                            //"id" => 6,
                            "team_id" => 7,
                            "limit" => 3,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
                        ],
                        [
                            //"id" => 7,
                            "team_id" => 8,
                            "limit" => 3,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
                        ],
                        [
                            //"id" => 8,
                            "team_id" => 9,
                            "limit" => 3,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
                        ],
                        [
                            //"id" => 9,
                            "team_id" => 10,
                            "limit" => 3,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
                        ],
                        [
                            //"id" => 10,
                            "team_id" => 11,
                            "limit" => 3,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
                        ],
                        [
                            //"id" => 11,
                            "team_id" => 12,
                            "limit" => 3,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
                        ],
                        [
                            //"id" => 12,
                            "team_id" => 13,
                            "limit" => 3,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
                        ],
                        [
                            //"id" => 13,
                            "team_id" => 14,
                            "limit" => 3,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
                        ],
                        [
                            //"id" => 14,
                            "team_id" => 15,
                            "limit" => 3,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}, "block2": {"1": {"value": "1", "operator": "="}, "59": {"value": "60", "operator": "<"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
                        ],
                        [
                            //"id" => 15,
                            "team_id" => 16,
                            "limit" => 3,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
                        ],
                        [
                            //"id" => 16,
                            "team_id" => 17,
                            "limit" => 100,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["1", "2", "3", "4", "5", "6", "7", "8", "9", "11"], "operator": "in"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
                        ],
                        [
                            //"id" => 18,
                            "team_id" => 18,
                            "limit" => 3,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}, "block2": {"32": {"value": ["54"], "operator": "in"}, "33": {"value": ["67", "68", "69", "70"], "operator": "in"}, "conditionsConnectOperator": "or"}}, "blocksConnectOperator": "and"}}'
                        ],
                        [
                            //"id" => 19,
                            "team_id" => 19,
                            "limit" => 3,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
                        ],
                        [
                            //"id" => 20,
                            "team_id" => 20,
                            "limit" => 3,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
                        ],
                        [
                            //"id" => 21,
                            "team_id" => 21,
                            "limit" => 3,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
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
                'conditions[group1][blocksConnectOperator]' => 'or',
                'conditions[group1][blocks][block1][awaiting_correction][operator]' => 'in',
                'conditions[group1][blocks][block1][awaiting_correction][value]' => ['1'],
                'conditions[group1][blocks][block1][conditionsConnectOperator]' => 'and',
                'conditions[group1][blocks][block1][status][operator]' => 'in',
                'conditions[group1][blocks][block1][status][value]' => ['8', '9'],
                'conditions[group1][blocks][block2][33][operator]' => 'in',
                'conditions[group1][blocks][block2][33][value]' => ['69', '70', '71', '72', '73'],
                'conditions[group1][blocks][block2][author_id][operator]' => 'not in',
                'conditions[group1][blocks][block2][author_id][value]' => ['4', '17', '15'],
                'conditions[group1][blocks][block2][conditionsConnectOperator]' => 'and',
                'conditions[group1][blocks][block3][11][operator]' => '=',
                'conditions[group1][blocks][block3][11][value]' => '1',
                'conditions[group1][blocks][block3][conditionsConnectOperator]' => 'and',
                'conditions[group2][blocksConnectOperator]' => 'or',
                'conditions[group2][blocks][block4][82][operator]' => '>=',
                'conditions[group2][blocks][block4][82][value]' => '20',
                'conditions[group2][blocks][block4][conditionsConnectOperator]' => 'and',
                'conditions[group2][blocks][block5][54][operator]' => '<=',
                'conditions[group2][blocks][block5][54][value]' => '1.5',
                'conditions[group2][blocks][block5][conditionsConnectOperator]' => 'and',
                'conditions[group3][blocksConnectOperator]' => 'or',
                'conditions[group3][blocks][block6][conditionsConnectOperator]' => 'and',
                'conditions[group3][blocks][block6][result_comment][operator]' => 'not like',
                'conditions[group3][blocks][block6][result_comment][value]' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:><1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                'field-selector' => ['status', 'awaiting_correction', '33', 'author_id', '11', '82', '54', 'result_comment']
            ],
            'db' => [
                "lisa_fixtures" => [
                    "cross_check_filters" => [
                        [
                            //"id" => 17,
                            "team_id" => 1,
                            "limit" => 50,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "awaiting_correction": {"value": ["1"], "operator": "in"}, "conditionsConnectOperator": "and"}, "block2": {"33": {"value": ["69", "70", "71", "72", "73"], "operator": "in"}, "author_id": {"value": ["4", "17", "15"], "operator": "not in"}, "conditionsConnectOperator": "and"}, "block3": {"11": {"value": "1", "operator": "="}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "or"}, "group2": {"blocks": {"block4": {"82": {"value": "20", "operator": ">="}, "conditionsConnectOperator": "and"}, "block5": {"54": {"value": "1.5", "operator": "<="}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "or"}, "group3": {"blocks": {"block6": {"result_comment": {"value": "=~}!@#$%^&*()_+`-]\'/[;.,}\"?{:><1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО", "operator": "not like"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "or"}}',
                        ],
                        [
                            //"id" => 1,
                            "team_id" => 2,
                            "limit" => 3,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
                        ],
                        [
                            //"id" => 2,
                            "team_id" => 3,
                            "limit" => 3,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
                        ],
                        [
                            //"id" => 3,
                            "team_id" => 4,
                            "limit" => 3,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
                        ],
                        [
                            //"id" => 4,
                            "team_id" => 5,
                            "limit" => 3,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
                        ],
                        [
                            //"id" => 5,
                            "team_id" => 6,
                            "limit" => 3,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
                        ],
                        [
                            //"id" => 6,
                            "team_id" => 7,
                            "limit" => 3,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
                        ],
                        [
                            //"id" => 7,
                            "team_id" => 8,
                            "limit" => 3,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
                        ],
                        [
                            //"id" => 8,
                            "team_id" => 9,
                            "limit" => 3,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
                        ],
                        [
                            //"id" => 9,
                            "team_id" => 10,
                            "limit" => 3,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
                        ],
                        [
                            //"id" => 10,
                            "team_id" => 11,
                            "limit" => 3,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
                        ],
                        [
                            //"id" => 11,
                            "team_id" => 12,
                            "limit" => 3,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
                        ],
                        [
                            //"id" => 12,
                            "team_id" => 13,
                            "limit" => 3,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
                        ],
                        [
                            //"id" => 13,
                            "team_id" => 14,
                            "limit" => 3,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
                        ],
                        [
                            //"id" => 14,
                            "team_id" => 15,
                            "limit" => 3,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}, "block2": {"1": {"value": "1", "operator": "="}, "59": {"value": "60", "operator": "<"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
                        ],
                        [
                            //"id" => 15,
                            "team_id" => 16,
                            "limit" => 3,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
                        ],
                        [
                            //"id" => 16,
                            "team_id" => 17,
                            "limit" => 100,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["1", "2", "3", "4", "5", "6", "7", "8", "9", "11"], "operator": "in"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
                        ],
                        [
                            //"id" => 18,
                            "team_id" => 18,
                            "limit" => 3,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}, "block2": {"32": {"value": ["54"], "operator": "in"}, "33": {"value": ["67", "68", "69", "70"], "operator": "in"}, "conditionsConnectOperator": "or"}}, "blocksConnectOperator": "and"}}'
                        ],
                        [
                            //"id" => 19,
                            "team_id" => 19,
                            "limit" => 3,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
                        ],
                        [
                            //"id" => 20,
                            "team_id" => 20,
                            "limit" => 3,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
                        ],
                        [
                            //"id" => 21,
                            "team_id" => 21,
                            "limit" => 3,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
                        ]
                    ],
                ],
            ]
        ]
    ],

    'case7' => [
        'setting' => [
            'description' => 'Создание КЧ-фильтра 7',
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
                'conditions[group1][blocksConnectOperator]' => 'and',
                'conditions[group1][blocks][block1][awaiting_correction][operator]' => 'in',
                'conditions[group1][blocks][block1][awaiting_correction][value]' => ['1'],
                'conditions[group1][blocks][block1][conditionsConnectOperator]' => 'and',
                'conditions[group1][blocks][block1][status][operator]' => 'in',
                'conditions[group1][blocks][block1][status][value]' => ['8', '9'],
                'conditions[group1][blocks][block2][46][operator]' => 'not in',
                'conditions[group1][blocks][block2][46][value]' => ['138', '139'],
                'conditions[group1][blocks][block2][80][operator]' => '>',
                'conditions[group1][blocks][block2][80][value]' => '20',
                'conditions[group1][blocks][block2][conditionsConnectOperator]' => 'or',
                'conditions[group1][blocks][block3][15][operator]' => '=',
                'conditions[group1][blocks][block3][15][value]' => '0',
                'conditions[group1][blocks][block3][53][operator]' => '>=',
                'conditions[group1][blocks][block3][53][value]' => '3.25',
                'conditions[group1][blocks][block3][conditionsConnectOperator]' => 'or',
                'conditions[group1][blocks][block4][conditionsConnectOperator]' => 'or',
                'conditions[group1][blocks][block4][planned_start_date][operator]' => 'between',
                'conditions[group1][blocks][block4][planned_start_date][value]' => '2020-07-01 0:00to2020-08-31 23:59',
                'field-selector' => ['status', 'awaiting_correction', '46', '80', '15', '53', 'planned_start_date']
            ],
            'db' => [
                "lisa_fixtures" => [
                    "cross_check_filters" => [
                        [
                            //"id" => 17,
                            "team_id" => 1,
                            "limit" => 50,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "awaiting_correction": {"value": ["1"], "operator": "in"}, "conditionsConnectOperator": "and"}, "block2": {"46": {"value": ["138", "139"], "operator": "not in"}, "80": {"value": "20", "operator": ">"}, "conditionsConnectOperator": "or"}, "block3": {"15": {"value": "0", "operator": "="}, "53": {"value": "3.25", "operator": ">="}, "conditionsConnectOperator": "or"}, "block4": {"planned_start_date": {"value": "2020-07-01 0:00to2020-08-31 23:59", "operator": "between"}, "conditionsConnectOperator": "or"}}, "blocksConnectOperator": "and"}}',
                        ],
                        [
                            //"id" => 1,
                            "team_id" => 2,
                            "limit" => 3,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
                        ],
                        [
                            //"id" => 2,
                            "team_id" => 3,
                            "limit" => 3,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
                        ],
                        [
                            //"id" => 3,
                            "team_id" => 4,
                            "limit" => 3,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
                        ],
                        [
                            //"id" => 4,
                            "team_id" => 5,
                            "limit" => 3,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
                        ],
                        [
                            //"id" => 5,
                            "team_id" => 6,
                            "limit" => 3,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
                        ],
                        [
                            //"id" => 6,
                            "team_id" => 7,
                            "limit" => 3,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
                        ],
                        [
                            //"id" => 7,
                            "team_id" => 8,
                            "limit" => 3,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
                        ],
                        [
                            //"id" => 8,
                            "team_id" => 9,
                            "limit" => 3,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
                        ],
                        [
                            //"id" => 9,
                            "team_id" => 10,
                            "limit" => 3,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
                        ],
                        [
                            //"id" => 10,
                            "team_id" => 11,
                            "limit" => 3,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
                        ],
                        [
                            //"id" => 11,
                            "team_id" => 12,
                            "limit" => 3,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
                        ],
                        [
                            //"id" => 12,
                            "team_id" => 13,
                            "limit" => 3,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
                        ],
                        [
                            //"id" => 13,
                            "team_id" => 14,
                            "limit" => 3,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
                        ],
                        [
                            //"id" => 14,
                            "team_id" => 15,
                            "limit" => 3,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}, "block2": {"1": {"value": "1", "operator": "="}, "59": {"value": "60", "operator": "<"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
                        ],
                        [
                            //"id" => 15,
                            "team_id" => 16,
                            "limit" => 3,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
                        ],
                        [
                            //"id" => 16,
                            "team_id" => 17,
                            "limit" => 100,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["1", "2", "3", "4", "5", "6", "7", "8", "9", "11"], "operator": "in"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
                        ],
                        [
                            //"id" => 18,
                            "team_id" => 18,
                            "limit" => 3,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}, "block2": {"32": {"value": ["54"], "operator": "in"}, "33": {"value": ["67", "68", "69", "70"], "operator": "in"}, "conditionsConnectOperator": "or"}}, "blocksConnectOperator": "and"}}'
                        ],
                        [
                            //"id" => 19,
                            "team_id" => 19,
                            "limit" => 3,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
                        ],
                        [
                            //"id" => 20,
                            "team_id" => 20,
                            "limit" => 3,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
                        ],
                        [
                            //"id" => 21,
                            "team_id" => 21,
                            "limit" => 3,
                            "order_by" => null,
                            "conditions" => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
                        ]
                    ],
                ],
            ]
        ]
    ],
];
