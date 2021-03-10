<?php
return [
    "lisa_fixtures" => [
        'requests' => [[]],
        'request_attachments' => [
            [
                "uploaded_at" => date("Y-m-d H:i:s", strtotime('-2 year')),
                "deleted_at" => date("Y-m-d H:i:s"),
            ],
            [
                "uploaded_at" => date("Y-m-d H:i:s", strtotime('-1 year -1 day')),
            ],
            [
                "uploaded_at" => date("Y-m-d H:i:s", strtotime('-1 year')),
                "deleted_at" => null,
            ],
            [
                "uploaded_at" => date("Y-m-d H:i:s", strtotime('-1 year +1 day')),
                "deleted_at" => null,
            ],
            [
                "uploaded_at" => date("Y-m-d H:i:s", strtotime('-1 day')),
                "deleted_at" => null,
            ],
        ],
    ]
];