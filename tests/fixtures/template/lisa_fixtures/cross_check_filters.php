<?php

return [
    [
        //"id" => 1,
        'team_id' => 1,
        'limit' => 50,
        'order_by' => null,
        'conditions' => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}, "block2": {"1": {"value": "0", "operator": "="}, "2": {"value": "1", "operator": "="}, "3": {"value": "0", "operator": "="}, "4": {"value": "1", "operator": "="}, "5": {"value": "0", "operator": "="}, "6": {"value": "1", "operator": "="}, "7": {"value": "0", "operator": "="}, "8": {"value": "1", "operator": "="}, "9": {"value": "0", "operator": "="}, "10": {"value": "1", "operator": "="}, "11": {"value": "0", "operator": "="}, "12": {"value": "1", "operator": "="}, "13": {"value": "0", "operator": "="}, "14": {"value": "1", "operator": "="}, "15": {"value": "0", "operator": "="}, "16": {"value": "1", "operator": "="}, "17": {"value": "0", "operator": "="}, "18": {"value": "1", "operator": "="}, "19": {"value": "0", "operator": "="}, "123": {"value": "1", "operator": "="}, "124": {"value": "0", "operator": "="}, "125": {"value": "1", "operator": "="}, "126": {"value": "0", "operator": "="}, "127": {"value": "1", "operator": "="}, "159": {"value": "0", "operator": "="}, "160": {"value": "1", "operator": "="}, "169": {"value": "0", "operator": "="}, "conditionsConnectOperator": "or"}, "block3": {"20": {"value": ["66", "65", "64"], "operator": "in"}, "21": {"value": ["5", "3", "4"], "operator": "not in"}, "22": {"value": ["10", "9", "8"], "operator": "in"}, "23": {"value": ["14", "13", "12"], "operator": "not in"}, "24": {"value": ["173"], "operator": "in"}, "25": {"value": ["20"], "operator": "not in"}, "26": {"value": ["174"], "operator": "in"}, "27": {"value": ["26"], "operator": "not in"}, "28": {"value": ["27", "28"], "operator": "in"}, "29": {"value": ["31", "30"], "operator": "not in"}, "30": {"value": ["40", "39", "41"], "operator": "in"}, "31": {"value": ["49", "48"], "operator": "not in"}, "32": {"value": ["53", "52"], "operator": "in"}, "conditionsConnectOperator": "and"}, "block4": {"type_id": {"value": ["15"], "operator": "in"}, "priority": {"value": ["3", "2"], "operator": "in"}, "direction": {"value": ["1"], "operator": "not in"}, "team_direction": {"value": ["1", "2", "3"], "operator": "not in"}, "previous_status": {"value": ["1", "3", "5"], "operator": "in"}, "report_period_id": {"value": ["4", "3"], "operator": "in"}, "sv_report_periods": {"value": ["1", "2"], "operator": "not in"}, "conditionsConnectOperator": "or"}}, "blocksConnectOperator": "and"}, "group2": {"blocks": {"block1": {"author_id": {"value": [11, 12], "operator": "in"}, "seller_id": {"value": [5, -2, 0], "operator": "not in"}, "manager_id": {"value": [13, 14], "operator": "in"}, "category_id": {"value": [1], "operator": "not in"}, "supervisor_id": {"value": [33, 36], "operator": "not in"}, "rz_category_id": {"value": [4641568, 4652996, 4629305], "operator": "in"}, "cross_check_manager_id": {"value": [15, 16], "operator": "in"}, "conditionsConnectOperator": "and"}, "block2": {"49": {"value": "1", "operator": "="}, "50": {"value": "0", "operator": "!="}, "51": {"value": "0.1", "operator": ">="}, "52": {"value": "1.1", "operator": "<="}, "53": {"value": "99999999", "operator": ">"}, "54": {"value": "11111111", "operator": "<"}, "65": {"value": "1-9", "operator": "between"}, "66": {"value": "5", "operator": "="}, "67": {"value": "0.5", "operator": "!="}, "73": {"value": "55555555", "operator": ">="}, "74": {"value": "1.11", "operator": "<="}, "75": {"value": "0.99", "operator": ">"}, "114": {"value": "0", "operator": "<"}, "child_count": {"value": "9", "operator": "="}, "amount_to_work": {"value": "1-3", "operator": "between"}, "conditionsConnectOperator": "or"}, "block3": {"created_at": {"value": "2021-10-18 00:00:00to2021-10-31 23:59:59", "operator": "not between"}, "actual_start_date": {"value": "2021-10-01 00:00:00to2021-10-01 01:01:00", "operator": "between"}, "actual_finish_date": {"value": "2021-10-01 00:00:00to2021-10-01 23:59:59", "operator": "not between"}, "planned_start_date": {"value": "2021-10-11 00:00:00to2021-10-11 23:59:59", "operator": "between"}, "planned_finish_date": {"value": "2021-01-01 00:00:00to2021-02-28 23:59:59", "operator": "not between"}, "supervisor_check_date": {"value": "2021-10-04 00:00:00to2021-10-04 23:59:59", "operator": "not between"}, "last_change_status_date": {"value": "2021-10-01 00:00:00to2021-10-31 23:59:59", "operator": "between"}, "supervisor_process_date": {"value": "2021-10-25 23:00:00to2021-10-31 00:59:00", "operator": "between"}, "conditionsConnectOperator": "and"}, "block4": {"120": {"value": "http://splitter.docker/lisa/#/cross-check-filter/update/1", "operator": "ilike"}, "121": {"value": "http://splitter.docker/lisa/#/cross-check-filter/update/1", "operator": "not like"}, "156": {"value": "http://splitter.docker/lisa/#/cross-check-filter/update/1", "operator": "ilike"}, "157": {"value": "http://splitter.docker/lisa/#/cross-check-filter/update/1", "operator": "not like"}, "subject": {"value": "=~}!@#$%^&*()_+`-]\'/[;.,}\"?{:>\\\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО", "operator": "ilike"}, "result_comment": {"value": "=~}!@#$%^&*()_+`-]\'/[;.,}\"?{:>\\\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО", "operator": "not like"}, "recommendations": {"value": "ЙЦУКЕНГШЩЗХЪqwertyuiop[]", "operator": "ilike"}, "correction_comment": {"value": "1234", "operator": "not like"}, "supervisor_comment": {"value": "ЯЧСМ", "operator": "ilike"}, "conditionsConnectOperator": "or"}}, "blocksConnectOperator": "or"}}',
    ],
    [
        //"id" => 2,
        'team_id' => 2,
        'limit' => 3,
        'order_by' => null,
        'conditions' => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
    ],
    [
        //"id" => 3,
        'team_id' => 3,
        'limit' => 3,
        'order_by' => null,
        'conditions' => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
    ],
    [
        //"id" => 4,
        'team_id' => 4,
        'limit' => 3,
        'order_by' => null,
        'conditions' => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
    ],
    [
        //"id" => 5,
        'team_id' => 5,
        'limit' => 3,
        'order_by' => null,
        'conditions' => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
    ],
    [
        //"id" => 6,
        'team_id' => 6,
        'limit' => 3,
        'order_by' => null,
        'conditions' => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
    ],
    [
        //"id" => 7,
        'team_id' => 7,
        'limit' => 3,
        'order_by' => null,
        'conditions' => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
    ],
    [
        //"id" => 8,
        'team_id' => 8,
        'limit' => 3,
        'order_by' => null,
        'conditions' => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
    ],
    [
        //"id" => 9,
        'team_id' => 9,
        'limit' => 3,
        'order_by' => null,
        'conditions' => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
    ],
    [
        //"id" => 10,
        'team_id' => 10,
        'limit' => 3,
        'order_by' => null,
        'conditions' => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
    ],
    [
        //"id" => 11,
        'team_id' => 11,
        'limit' => 3,
        'order_by' => null,
        'conditions' => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
    ],
    [
        //"id" => 12,
        'team_id' => 12,
        'limit' => 3,
        'order_by' => null,
        'conditions' => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
    ],
    [
        //"id" => 13,
        'team_id' => 13,
        'limit' => 3,
        'order_by' => null,
        'conditions' => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
    ],
    [
        //"id" => 14,
        'team_id' => 14,
        'limit' => 3,
        'order_by' => null,
        'conditions' => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
    ],
    [
        //"id" => 15,
        'team_id' => 15,
        'limit' => 3,
        'order_by' => null,
        'conditions' => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}, "block2": {"1": {"value": "1", "operator": "="}, "59": {"value": "60", "operator": "<"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
    ],
    [
        //"id" => 16,
        'team_id' => 16,
        'limit' => 3,
        'order_by' => null,
        'conditions' => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
    ],
    [
        //"id" => 17,
        'team_id' => 17,
        'limit' => 100,
        'order_by' => null,
        'conditions' => '{"group1": {"blocks": {"block1": {"status": {"value": ["1", "2", "3", "4", "5", "6", "7", "8", "9", "11"], "operator": "in"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
    ],
    [
        //"id" => 18,
        'team_id' => 18,
        'limit' => 3,
        'order_by' => null,
        'conditions' => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}, "block2": {"32": {"value": ["54"], "operator": "in"}, "33": {"value": ["67", "68", "69", "70"], "operator": "in"}, "conditionsConnectOperator": "or"}}, "blocksConnectOperator": "and"}}'
    ],
    [
        //"id" => 19,
        'team_id' => 19,
        'limit' => 3,
        'order_by' => null,
        'conditions' => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
    ],
    [
        //"id" => 20,
        'team_id' => 20,
        'limit' => 3,
        'order_by' => null,
        'conditions' => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
    ],
    [
        //"id" => 21,
        'team_id' => 21,
        'limit' => 3,
        'order_by' => null,
        'conditions' => '{"group1": {"blocks": {"block1": {"status": {"value": ["8", "9"], "operator": "in"}, "cross_check_status": {"value": ["2"], "operator": "not in"}, "awaiting_correction": {"value": ["0"], "operator": "in"}, "conditionsConnectOperator": "and"}}, "blocksConnectOperator": "and"}}'
    ]
];