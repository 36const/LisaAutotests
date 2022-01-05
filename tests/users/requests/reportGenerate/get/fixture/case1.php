<?php

use Codeception\Module\TestHelper;

return [
    'lisa_fixtures' => [
        'requests' => [],
        'requests_fields' => [],
        'report_periods' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/report_periods.php',
        'reports' => [
            [
                'title' => 'Всё во всём',
                'fields' => '["id",  "report_period_id", "sv_report_periods", "manager_id", "manager_drfo", "supervisor_id", "supervisor_drfo", "cross_check_manager_id", "author_id", "direction", "type_id", "status", "category_id", "rz_category_id", "seller_id"]',
                'conditions' => '{"type_id": ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13", "14", "15"], "team_direction": ["1", "2", "3", "4", "5", "6"]}',
                'type' => 0
            ],
            [
                'title' => 'Всё во всём 1',
                'fields' => '["id",  "report_period_id", "sv_report_periods", "manager_id", "manager_drfo", "supervisor_id", "supervisor_drfo", "cross_check_manager_id", "author_id", "direction", "type_id", "status", "category_id", "rz_category_id", "seller_id"]',
                'conditions' => '{"type_id": ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13", "14", "15"], "team_direction": ["1", "3", "4", "5", "6"]}',
                'type' => 0
            ],
            [
                'title' => 'Всё во всём 2',
                'fields' => '["id",  "report_period_id", "sv_report_periods", "manager_id", "manager_drfo", "supervisor_id", "supervisor_drfo", "cross_check_manager_id", "author_id", "direction", "type_id", "status", "category_id", "rz_category_id", "seller_id"]',
                'conditions' => '{"type_id": ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13", "14", "15"], "team_direction": ["2"]}',
                'type' => 0
            ],
            [
                'title' => 'Всё во всём 3',
                'fields' => '["id",  "report_period_id", "sv_report_periods", "manager_id", "manager_drfo", "supervisor_id", "supervisor_drfo", "cross_check_manager_id", "author_id", "direction", "type_id", "status", "category_id", "rz_category_id", "seller_id"]',
                'conditions' => '{"type_id": ["4"], "team_direction": ["2", "4", "5", "6"]}',
                'type' => 0
            ],
            [
                'title' => 'Всё во всём (сводный)',
                'fields' => '["id",  "report_period_id", "sv_report_periods", "manager_id", "manager_drfo", "supervisor_id", "supervisor_drfo", "cross_check_manager_id", "author_id", "direction", "type_id", "status", "category_id", "rz_category_id", "seller_id"]',
                'conditions' => '{"type_id": ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13", "14", "15"], "team_direction": ["1", "2", "3", "4", "5", "6"]}',
                'type' => 1
            ],
            [
                'title' => 'Всё во всём (сводный) 1',
                'fields' => '["id",  "report_period_id", "sv_report_periods", "manager_id", "manager_drfo", "supervisor_id", "supervisor_drfo", "cross_check_manager_id", "author_id", "direction", "type_id", "status", "category_id", "rz_category_id", "seller_id"]',
                'conditions' => '{"type_id": ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13", "14", "15"], "team_direction": ["1", "3", "4", "5", "6"]}',
                'type' => 1
            ],
            [
                'title' => 'Всё во всём (сводный) 2',
                'fields' => '["id",  "report_period_id", "sv_report_periods", "manager_id", "manager_drfo", "supervisor_id", "supervisor_drfo", "cross_check_manager_id", "author_id", "direction", "type_id", "status", "category_id", "rz_category_id", "seller_id"]',
                'conditions' => '{"type_id": ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13", "14", "15"], "team_direction": ["2"]}',
                'type' => 1
            ],
            [
                'title' => 'Всё во всём (сводный) 3',
                'fields' => '["id",  "report_period_id", "sv_report_periods", "manager_id", "manager_drfo", "supervisor_id", "supervisor_drfo", "cross_check_manager_id", "author_id", "direction", "type_id", "status", "category_id", "rz_category_id", "seller_id"]',
                'conditions' => '{"type_id": ["4"], "team_direction": ["2", "4", "5", "6"]}',
                'type' => 1
            ],
        ],
        'auth.users' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.users.php',
        'auth.auth_assignment' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.auth_assignment.php',
    ]
];