<?php

use lisa\Constants;

$initialValues = [
    'statuses' => [
        1 => 'Новая',
        2 => 'Готова для распределения',
        3 => 'На доработке',
        4 => 'Отменена',
        5 => 'Ожидает взятия в работу',
        6 => 'В работе',
        7 => 'Ожидает',
        8 => 'Частично выполнена',
        9 => 'Выполнена',
        11 => 'Закрыта',
        999 => 'Все',
    ],
    'typeDirections' => Constants::TYPE_DIRECTIONS
];

return [
    'case1' => [
        'setting' => [
            'description' => 'Получить модель активной причины',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'id' => 1,
            'responseBody' => [
                'model' => [
                    'id' => 1,
                    'child_status' => 7,
                    'reason' => 'Ожидается загрузка фото в товары',
                    'status' => 1,
                    'reason_for_personal_cab' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|Ожидается загрузка фото ЛК',
                    'reason_for_personal_cab_ua' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|Ожидается загрузка фото_ua ЛК',
                    'reason_for_supplier_cab' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|Ожидается загрузка фото Output',
                    'reason_for_supplier_cab_ua' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|Ожидается загрузка фото_ua Output',
                    'comment_is_required' => 1,
                    'type_directions' => ['[1,1]', '[1,2]', '[2,1]', '[2,2]', '[3,1]', '[3,2]', '[4,0]', '[5,1]', '[6,2]', '[7,0]', '[8,0]', '[9,0]', '[10,0]', '[11,0]', '[12,1]', '[13,0]', '[14,0]', '[15,0]'],
                ],
                'initialValues' => $initialValues,
            ],
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Получить модель заблокированной причины',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'id' => 5,
            'responseBody' => [
                'model' => [
                    'id' => 5,
                    'child_status' => 7,
                    'reason' => 'Ожидается загрузка обновлений в систему',
                    'status' => 0,
                    'reason_for_personal_cab' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|Ожидается загрузка обновлений ЛК',
                    'reason_for_personal_cab_ua' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|Ожидается загрузка обновлений_ua ЛК',
                    'reason_for_supplier_cab' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|Ожидается загрузка обновлений Output',
                    'reason_for_supplier_cab_ua' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|Ожидается загрузка обновлений_ua Output',
                    'type_directions' => ['[1,1]', '[1,2]', '[2,1]', '[2,2]', '[3,1]', '[3,2]', '[4,0]', '[5,1]', '[6,2]', '[7,0]', '[8,0]', '[9,0]', '[10,0]', '[11,0]', '[12,1]', '[13,0]', '[14,0]', '[15,0]'],
                    'comment_is_required' => 1,
                ],
                'initialValues' => $initialValues,
            ],
        ]
    ],

    'case3' => [
        'setting' => [
            'description' => 'Получить пустую модель причины для создания',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'responseBody' => [
                'model' => [
                    'id' => NULL,
                    'child_status' => NULL,
                    'reason' => NULL,
                    'status' => 1,
                    'reason_for_personal_cab' => NULL,
                    'reason_for_personal_cab_ua' => NULL,
                    'reason_for_supplier_cab' => NULL,
                    'reason_for_supplier_cab_ua' => NULL,
                    'type_directions' => [],
                    'comment_is_required' => NULL,
                ],
                'initialValues' => $initialValues,
            ],
        ]
    ],

];
