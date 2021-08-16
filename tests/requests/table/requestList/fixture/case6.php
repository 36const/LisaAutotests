<?php

use Codeception\Module\TestHelper;

return [
    'lisa_fixtures' => [
        'requests' => (include __DIR__ . '/caseAll.php')['lisa_fixtures']['requests'],
        'requests_fields' => (include __DIR__ . '/caseAll.php')['lisa_fixtures']['requests_fields'],
        'report_periods' => (include __DIR__ . '/caseAll.php')['lisa_fixtures']['report_periods'],
        'request_status_history' => (include __DIR__ . '/caseAll.php')['lisa_fixtures']['request_status_history'],
        'requests_reasons' => (include __DIR__ . '/caseAll.php')['lisa_fixtures']['requests_reasons'],
        'grid_settings' => [
            [
                'id' => 1,
                'user_id' => 4,
                'columns_list' =>
                    '["quantity_of_handled_but_not_grouped", "group_settings", "quantity_of_words_in_dictionaries", ' .
                    '"calc_quantity_of_indicators", "calc_quantity_of_not_grouped", "calc_quantity_of_sent_emails", ' .
                    '"calc_quantity_of_child_requests", "calc_quantity_of_words_in_dictionaries", "average_amount_of_goods_in_group"]'
            ]
        ],
    ],
];