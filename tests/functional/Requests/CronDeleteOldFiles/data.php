<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Удаление файлов старше 1 года',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'db' => [
                'lisa_fixtures' => [
                    'request_attachments' => [
                        [
                            "id" => 3,
                            "request_id" => 1,
                            "alias" => "jpg.jpg",
                            "status" => 2,
                            "uploaded_by" => "Константин Куцан",
                            "uploaded_at" => date("Y-m-d H:i:s", strtotime('-1 year')),
                            "deleted_by" => null,
                            "deleted_at" => null,
                            "file_name" => "223839_jpg.jpg"
                        ],
                        [
                            "id" => 4,
                            "request_id" => 1,
                            "alias" => "jpg.jpg",
                            "status" => 2,
                            "uploaded_by" => "Константин Куцан",
                            "uploaded_at" => date("Y-m-d H:i:s", strtotime('-1 year +1 day')),
                            "deleted_by" => null,
                            "deleted_at" => null,
                            "file_name" => "223839_jpg.jpg"
                        ],
                        [
                            "id" => 5,
                            "request_id" => 1,
                            "alias" => "jpg.jpg",
                            "status" => 2,
                            "uploaded_by" => "Константин Куцан",
                            "uploaded_at" => date("Y-m-d H:i:s", strtotime('-1 day')),
                            "deleted_by" => null,
                            "deleted_at" => null,
                            "file_name" => "223839_jpg.jpg"
                        ]
                    ]
                ]
            ],
        ]
    ],

];
