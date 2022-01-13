<?php

use Codeception\Module\TestHelper;

return [
    'lisa_fixtures' => [
        'requests' => array_replace_recursive(
            (include __DIR__ . '/case6_9_5_1.php')['lisa_fixtures']['requests'],
            [
                [
                    'supplier_cabinet_id' => 111,
                ]
            ]
        ),
        'requests_fields' => (include __DIR__ . '/case6_9_5_1.php')['lisa_fixtures']['requests_fields'],
        'request_attachments' => [
            [
                //'id' => 1,
                'request_id' => 1,
                'file_name_old' => '',
                'alias' => '194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd',
                'status' => 0,
                'uploaded_by' => 'Константин Куцан',
                'uploaded_at' => '2020-01-01 00:00:00',
                'deleted_by' => NULL,
                'deleted_at' => NULL,
                'file_name' => '803902_194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd',
                'size' => 60424,
            ],
            [
                //'id' => 2,
                'request_id' => 1,
                'file_name_old' => '',
                'alias' => 'doc .doc',
                'status' => 1,
                'uploaded_by' => 'Константин Куцан',
                'uploaded_at' => '2020-01-01 00:00:00',
                'deleted_by' => NULL,
                'deleted_at' => NULL,
                'file_name' => '803902_doc.doc',
                'size' => 34304,
            ],
            [
                //'id' => 3,
                'request_id' => 1,
                'file_name_old' => '',
                'alias' => 'pptx_абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїі.pptx',
                'status' => 3,
                'uploaded_by' => 'Константин Куцан',
                'uploaded_at' => '2020-01-01 00:00:00',
                'deleted_by' => NULL,
                'deleted_at' => NULL,
                'file_name' => '803902_pptx_abvgdeezzijklmnoprstufhccssyeuaegii.pptx',
                'size' => 97152,
            ],
            [
                //'id' => 4,
                'request_id' => 1,
                'file_name_old' => '',
                'alias' => '!@#$%^&*()_+`-=][\';.|}{:?><.jpg',
                'status' => 4,
                'uploaded_by' => 'Константин Куцан',
                'uploaded_at' => '2020-01-01 00:00:00',
                'deleted_by' => NULL,
                'deleted_at' => NULL,
                'file_name' => '803902_~!@#$%^&*()_+`-=][;.|}{:?><.jpg',
                'size' => 34304,
            ],
        ],
        'report_periods' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/report_periods.php',
        'request_errors' => [],
        'notification_settings' => [],
        'user_notifications' => [],
        'requests_reasons' => [],
        'request_status_history' => (include __DIR__ . '/case6_9_5_1.php')['lisa_fixtures']['request_status_history'],
        'transition_info' => [],
        'observers' => [],
        'auto_diff_log' => [],
    ]
];