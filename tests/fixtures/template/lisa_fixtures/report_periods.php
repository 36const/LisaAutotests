<?php

return [
    [
        //'id' => 1,
        'begin' => date('Y-01-01') . ' 00:00:00',
        'end' => date('Y-m-d', strtotime('last day of previous month -1 month -1 day')) . ' 00:00:00',
        'created_at' => '2021-01-01 00:00:00',
        'updated_at' => null,
    ],
    [
        //'id' => 2,
        'begin' => date('Y-m-01', strtotime('-1 month')) . ' 00:00:00',
        'end' => date('Y-m-d', strtotime('last day of previous month')) . ' 00:00:00',
        'created_at' => '2021-01-01 00:00:00',
        'updated_at' => null,
    ],
    [
        //'id' => 3,
        'begin' => date('Y-m-01') . ' 00:00:00',
        'end' => date('Y-m-d') . ' 00:00:00',
        'created_at' => '2021-02-01 00:00:00',
        'updated_at' => '2021-07-01 17:01:01',
    ],
    [
        //'id' => 4,
        'begin' => date('Y-m-d', strtotime('+1 day')) . ' 00:00:00',
        'end' => date('Y-m-d', strtotime('last day of this month')) . ' 00:00:00',
        'created_at' => '2021-03-01 00:00:00',
        'updated_at' => '2021-09-01 19:01:01',
    ],
];