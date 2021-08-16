<?php

use Codeception\Module\TestHelper;

return [
    'lisa_fixtures' => [
        'requests' => [
            [
                'id' => 1,
                'type_id' => 1,
                'status' => 1,
                'author_id' => 1,
                'direction' => 2,
                'seller_id' => 83,
                'subject' => 'Euromart. Источник №1',
                'description' => 'http://splitter.staging.com.ua/gomer/items/on-moderation/source/1',
                'sync_source_id' => 1,
            ],
            [
                'id' => 2,
                'type_id' => 2,
                'status' => 2,
                'author_id' => 1,
                'direction' => 2,
                'seller_id' => 83,
                'subject' => 'Euromart. Источник №1',
                'description' => 'http://splitter.staging.com.ua/gomer/items/changes/source/1?ItemSearch%5Bupload_status%5D=2',
                'sync_source_id' => 1,
            ],
            [
                'id' => 3,
                'type_id' => 3,
                'status' => 3,
                'author_id' => 1,
                'direction' => 2,
                'seller_id' => 83,
                'subject' => 'Euromart. Источник №1',
                'description' => 'http://splitter.staging.com.ua/gomer/items/changes/source/1?ItemSearch%5Bchange_type%5D=sync_source_category_id',
                'sync_source_id' => 1,
            ],
/*            [
                'id' => 614,
                "type_id" => 6,
                "status" => 3,
                "direction" => 2,
                "seller_id" => 83,
                "subject" => "Euromart. Источник №1",
                "description" => 'http://splitter.staging.com.ua/gomer/items/changes/source/1?ItemSearch%5Bupload_status%5D=9',
                "sync_source_id" => 1,
            ],*/
        ]
    ],
];