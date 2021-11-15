<?php

return [
    'lisa_fixtures' => [
        'reports' => [
            [
//                'id' => 1,
                'title' => 'Всё во всём',
                'fields' => '["id", "type_id", "author_id", "supervisor_id", "manager_id", "status", "previous_status", "awaiting_correction", "created_at", "subject", "description", "direction", "category_id", "rz_category_id", "seller_id", "amount_to_work", "recommendations", "reason", "parent_id", "planned_start_date", "planned_finish_date", "actual_start_date", "actual_finish_date", "supervisor_process_date", "supervisor_check_date", "result_comment", "supervisor_comment", "correction_comment", "team_direction", "last_change_status_date", "priority", "report_period_id", "sv_report_periods", "cross_check_status", "cross_check_manager_id", "employee_code_1c", "child_count", "photo_load_status", "supervisor_drfo", "manager_drfo", "supervisor_team", "manager_team", "173", "172", "171", "170", "169", "168", "167", "166", "165", "164", "162", "163", "161", "160", "89", "158", "159", "157", "156", "155", "154", "153", "150", "152", "151", "148", "147", "145", "146", "144", "143", "142", "141", "140", "139", "138", "137", "135", "136", "134", "133", "132", "131", "130", "129", "128", "127", "5", "121", "126", "125", "124", "123", "122", "101", "120", "118", "117", "116", "115", "114", "113", "112", "111", "110", "109", "108", "107", "106", "105", "104", "103", "102", "100", "99", "98", "97", "96", "95", "94", "92", "91", "90", "88", "87", "86", "85", "84", "83", "82", "81", "80", "79", "78", "77", "76", "74", "75", "73", "72", "71", "70", "69", "68", "67", "66", "65", "64", "63", "61", "60", "59", "58", "57", "56", "55", "54", "53", "52", "51", "50", "49", "48", "47", "46", "45", "44", "43", "42", "41", "39", "40", "38", "37", "36", "35", "34", "33", "32", "31", "30", "29", "28", "27", "26", "25", "24", "23", "22", "21", "20", "18", "14", "19", "17", "16", "15", "13", "12", "11", "10", "9", "7", "8", "1", "6", "2", "3", "4", "62", "93", "149"]',
                'conditions' => '{"type_id": ["1", "2", "3", "5", "6", "4", "10", "9", "8", "7", "11", "12", "13", "14", "15"], "team_direction": ["1", "2", "3", "4", "6", "5"]}',
                'type' => 0
            ],
            [
//                'id' => 2,
                'title' => 'http://splitter.docker/lisa/#/report/create?mode=create',
                'fields' => '["id", "author_id", "supervisor_id", "type_id", "status", "previous_status", "category_id", "rz_category_id", "seller_id", "actual_start_date", "actual_finish_date", "89", "report_period_id", "sv_report_periods", "manager_drfo", "manager_team", "supervisor_drfo", "supervisor_team", "160", "146", "131", "128", "64", "53", "52", "50", "49", "47", "33", "21", "20", "1"]',
                'conditions' => '{"type_id": ["1", "4", "7", "13"], "team_direction": ["2", "4", "6"]}',
                'type' => 0
            ]
        ],
    ],
];