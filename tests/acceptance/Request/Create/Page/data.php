<?php

use lisa\Page\Requests\RequestCreate;

return [
    'case1' => [
        'setting' => [
            'description' => 'Невозможность создания заявки без обязательных полей, направление 1',
            'type' => 1,
            'direction' => 1
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'pageObjects' => [
                "canSee" => [
                    RequestCreate::$subject,
                    RequestCreate::$description,
                    RequestCreate::$seller,
                    RequestCreate::$category,
                    RequestCreate::$amount,
                    RequestCreate::$plannedFinishDate,
                    RequestCreate::$priority,
                    RequestCreate::$allCheckboxes,
                ],
                "cantSee" => [],
            ],
            'pageForm_1' => [
                "canSee" => [
                    RequestCreate::errorFieldMessage(RequestCreate::$subject, 'Необходимо заполнить «Заголовок».'),
                    RequestCreate::errorFieldMessage(RequestCreate::$description, 'Необходимо заполнить «Описание».'),
                    RequestCreate::errorFieldMessage(RequestCreate::$category, 'Поле Категория товаров обязательное для направления Работа с товарами Розетки'),
                    RequestCreate::errorFieldMessage(RequestCreate::$amount, 'Необходимо заполнить «Количество в работу».'),
                    RequestCreate::$seller,
                    RequestCreate::$plannedFinishDate,
                    RequestCreate::$priority,
                    RequestCreate::$allCheckboxes,
                ],
                "cantSee" => [
                    RequestCreate::errorFieldMessage(RequestCreate::$seller, ' '),
                    RequestCreate::errorFieldMessage(RequestCreate::$plannedFinishDate, ' '),
                    RequestCreate::errorFieldMessage(RequestCreate::$priority, ' '),
                    RequestCreate::errorFieldMessage(RequestCreate::$allCheckboxes, ' '),
                ],
            ],
            'pageForm_2' => [
                "canSee" => [
                    RequestCreate::errorFieldMessage(RequestCreate::$description, 'Необходимо заполнить «Описание».'),
                    RequestCreate::errorFieldMessage(RequestCreate::$category, 'Поле Категория товаров обязательное для направления Работа с товарами Розетки'),
                    RequestCreate::errorFieldMessage(RequestCreate::$amount, 'Необходимо заполнить «Количество в работу».'),
                    RequestCreate::$seller,
                    RequestCreate::$plannedFinishDate,
                    RequestCreate::$priority,
                    RequestCreate::$allCheckboxes,
                ],
                "cantSee" => [
                    RequestCreate::errorFieldMessage(RequestCreate::$subject, ' '),
                    RequestCreate::errorFieldMessage(RequestCreate::$seller, ' '),
                    RequestCreate::errorFieldMessage(RequestCreate::$plannedFinishDate, ' '),
                    RequestCreate::errorFieldMessage(RequestCreate::$priority, ' '),
                    RequestCreate::errorFieldMessage(RequestCreate::$allCheckboxes, ' '),
                ],
            ],
            'pageForm_3' => [
                "canSee" => [
                    RequestCreate::errorFieldMessage(RequestCreate::$category, 'Поле Категория товаров обязательное для направления Работа с товарами Розетки'),
                    RequestCreate::errorFieldMessage(RequestCreate::$amount, 'Необходимо заполнить «Количество в работу».'),
                    RequestCreate::$seller,
                    RequestCreate::$plannedFinishDate,
                    RequestCreate::$priority,
                    RequestCreate::$allCheckboxes,
                ],
                "cantSee" => [
                    RequestCreate::errorFieldMessage(RequestCreate::$subject, ' '),
                    RequestCreate::errorFieldMessage(RequestCreate::$description, ' '),
                    RequestCreate::errorFieldMessage(RequestCreate::$seller, ' '),
                    RequestCreate::errorFieldMessage(RequestCreate::$plannedFinishDate, ' '),
                    RequestCreate::errorFieldMessage(RequestCreate::$priority, ' '),
                    RequestCreate::errorFieldMessage(RequestCreate::$allCheckboxes, ' '),
                ],
            ],
            'pageForm_4' => [
                "canSee" => [
                    RequestCreate::errorFieldMessage(RequestCreate::$amount, 'Необходимо заполнить «Количество в работу».'),
                    RequestCreate::$seller,
                    RequestCreate::$plannedFinishDate,
                    RequestCreate::$priority,
                    RequestCreate::$allCheckboxes,
                ],
                "cantSee" => [
                    RequestCreate::errorFieldMessage(RequestCreate::$category, ' '),
                    RequestCreate::errorFieldMessage(RequestCreate::$subject, ' '),
                    RequestCreate::errorFieldMessage(RequestCreate::$description, ' '),
                    RequestCreate::errorFieldMessage(RequestCreate::$seller, ' '),
                    RequestCreate::errorFieldMessage(RequestCreate::$plannedFinishDate, ' '),
                    RequestCreate::errorFieldMessage(RequestCreate::$priority, ' '),
                    RequestCreate::errorFieldMessage(RequestCreate::$allCheckboxes, ' '),
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => [
                        [
                            "id" => 1,
                            "author_id" => 4,
                            "type_id" => 1,
                            "supervisor_id" => 6,
                            "manager_id" => null,
                            "status" => 1,
                            "direction" => 1,
                            "priority" => null,
                            "awaiting_correction" => 0,
                            "created_at >" => date("Y-m-d"),
                            "correction_comment" => null,
                            "amount_to_work" => 999999999,
                            "subject" => '!"№;%:?*()',
                            "description" => '!"№;%:?*()',
                            "category_id" => 1,
                            "seller_id" => 5,
                            "recommendations" => null,
                            "reason" => null,
                            "parent_id" => null,
                            "planned_start_date" => null,
                            "planned_finish_date" => null,
                            "actual_start_date" => null,
                            "actual_finish_date" => null,
                            "supervisor_process_date" => null,
                            "supervisor_check_date" => null,
                            "result_comment" => null,
                            "supervisor_comment" => null,
                            "last_change_status_date >" => date("Y-m-d"),
                            "team_direction" => 3,
                            "report_period_id" => null,
                            "sync_source_id" => null,
                            "sv_report_periods" => null,
                            "cross_check_status" => '0',
                            "cross_check_manager_id" => null,
                            "employee_code_1c" => null,
                            "child_count" => 0,
                            "photo_load_status" => 0,
                        ]
                    ],
                ]
            ]
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Невозможность создания заявки без обязательных полей, направление 2',
            'type' => 1,
            'direction' => 2
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'pageObjects' => [
                "canSee" => [
                    RequestCreate::$subject,
                    RequestCreate::$description,
                    RequestCreate::$seller,
                    RequestCreate::$category,
                    RequestCreate::$amount,
                    RequestCreate::$plannedFinishDate,
                    RequestCreate::$priority,
                    RequestCreate::$allCheckboxes,
                ],
                "cantSee" => [],
            ],
            'pageForm_1' => [
                "canSee" => [
                    RequestCreate::errorFieldMessage(RequestCreate::$subject, 'Необходимо заполнить «Заголовок».'),
                    RequestCreate::errorFieldMessage(RequestCreate::$description, 'Необходимо заполнить «Описание».'),
                    RequestCreate::errorFieldMessage(RequestCreate::$seller, 'Нужно указать либо категорию либо продавца'),
                    RequestCreate::errorFieldMessage(RequestCreate::$amount, 'Необходимо заполнить «Количество в работу».'),
                    RequestCreate::$category,
                    RequestCreate::$plannedFinishDate,
                    RequestCreate::$priority,
                    RequestCreate::$allCheckboxes,
                ],
                "cantSee" => [
                    RequestCreate::errorFieldMessage(RequestCreate::$category, ' '),
                    RequestCreate::errorFieldMessage(RequestCreate::$plannedFinishDate, ' '),
                    RequestCreate::errorFieldMessage(RequestCreate::$priority, ' '),
                    RequestCreate::errorFieldMessage(RequestCreate::$allCheckboxes, ' '),
                ],
            ],
            'pageForm_2' => [
                "canSee" => [
                    RequestCreate::errorFieldMessage(RequestCreate::$description, 'Необходимо заполнить «Описание».'),
                    RequestCreate::errorFieldMessage(RequestCreate::$seller, 'Нужно указать либо категорию либо продавца'),
                    RequestCreate::errorFieldMessage(RequestCreate::$amount, 'Необходимо заполнить «Количество в работу».'),
                    RequestCreate::$category,
                    RequestCreate::$plannedFinishDate,
                    RequestCreate::$priority,
                    RequestCreate::$allCheckboxes,
                ],
                "cantSee" => [
                    RequestCreate::errorFieldMessage(RequestCreate::$subject, ' '),
                    RequestCreate::errorFieldMessage(RequestCreate::$category, ' '),
                    RequestCreate::errorFieldMessage(RequestCreate::$plannedFinishDate, ' '),
                    RequestCreate::errorFieldMessage(RequestCreate::$priority, ' '),
                    RequestCreate::errorFieldMessage(RequestCreate::$allCheckboxes, ' '),
                ],
            ],
            'pageForm_3' => [
                "canSee" => [
                    RequestCreate::errorFieldMessage(RequestCreate::$seller, 'Нужно указать либо категорию либо продавца'),
                    RequestCreate::errorFieldMessage(RequestCreate::$amount, 'Необходимо заполнить «Количество в работу».'),
                    RequestCreate::$category,
                    RequestCreate::$plannedFinishDate,
                    RequestCreate::$priority,
                    RequestCreate::$allCheckboxes,
                ],
                "cantSee" => [
                    RequestCreate::errorFieldMessage(RequestCreate::$subject, ' '),
                    RequestCreate::errorFieldMessage(RequestCreate::$description, ' '),
                    RequestCreate::errorFieldMessage(RequestCreate::$category, ' '),
                    RequestCreate::errorFieldMessage(RequestCreate::$plannedFinishDate, ' '),
                    RequestCreate::errorFieldMessage(RequestCreate::$priority, ' '),
                    RequestCreate::errorFieldMessage(RequestCreate::$allCheckboxes, ' '),
                ],
            ],
            'pageForm_4' => [
                "canSee" => [
                    RequestCreate::errorFieldMessage(RequestCreate::$amount, 'Необходимо заполнить «Количество в работу».'),
                    RequestCreate::$category,
                    RequestCreate::$plannedFinishDate,
                    RequestCreate::$priority,
                    RequestCreate::$allCheckboxes,
                ],
                "cantSee" => [
                    RequestCreate::errorFieldMessage(RequestCreate::$subject, ' '),
                    RequestCreate::errorFieldMessage(RequestCreate::$description, ' '),
                    RequestCreate::errorFieldMessage(RequestCreate::$category, ' '),
                    RequestCreate::errorFieldMessage(RequestCreate::$plannedFinishDate, ' '),
                    RequestCreate::errorFieldMessage(RequestCreate::$priority, ' '),
                    RequestCreate::errorFieldMessage(RequestCreate::$allCheckboxes, ' '),
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => [
                        [
                            "id" => 1,
                            "author_id" => 4,
                            "type_id" => 1,
                            "supervisor_id" => 5,
                            "manager_id" => null,
                            "status" => 1,
                            "direction" => 2,
                            "priority" => null,
                            "awaiting_correction" => 0,
                            "created_at >" => date("Y-m-d"),
                            "correction_comment" => null,
                            "amount_to_work" => 999999999,
                            "subject" => '!"№;%:?*()',
                            "description" => '!"№;%:?*()',
                            "category_id" => null,
                            "seller_id" => 0,
                            "recommendations" => null,
                            "reason" => null,
                            "parent_id" => null,
                            "planned_start_date" => null,
                            "planned_finish_date" => null,
                            "actual_start_date" => null,
                            "actual_finish_date" => null,
                            "supervisor_process_date" => null,
                            "supervisor_check_date" => null,
                            "result_comment" => null,
                            "supervisor_comment" => null,
                            "last_change_status_date >" => date("Y-m-d"),
                            "team_direction" => 2,
                            "report_period_id" => null,
                            "sync_source_id" => null,
                            "sv_report_periods" => null,
                            "cross_check_status" => '0',
                            "cross_check_manager_id" => null,
                            "employee_code_1c" => null,
                            "child_count" => 0,
                            "photo_load_status" => 0,
                        ]
                    ],
                ]
            ]
        ]
    ],

    'case3' => [
        'setting' => [
            'description' => 'Невозможность создания заявки без обязательных полей, направление 0',
            'type' => 7,
            'direction' => 0
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'pageObjects' => [
                "canSee" => [
                    RequestCreate::$subject,
                    RequestCreate::$description,
                    RequestCreate::$seller,
                    RequestCreate::$category,
                    RequestCreate::$amount,
                    RequestCreate::$plannedFinishDate,
                    RequestCreate::$priority,
                    RequestCreate::$allCheckboxes,
                ],
                "cantSee" => [],
            ],
            'pageForm_1' => [
                "canSee" => [
                    RequestCreate::errorFieldMessage(RequestCreate::$subject, 'Необходимо заполнить «Заголовок».'),
                    RequestCreate::errorFieldMessage(RequestCreate::$description, 'Необходимо заполнить «Описание».'),
                    RequestCreate::errorFieldMessage(RequestCreate::$category, 'Нужно указать либо категорию либо продавца'),
                    RequestCreate::errorFieldMessage(RequestCreate::$seller, 'Нужно указать либо категорию либо продавца'),
                    RequestCreate::errorFieldMessage(RequestCreate::$amount, 'Необходимо заполнить «Количество в работу».'),
                    RequestCreate::$plannedFinishDate,
                    RequestCreate::$priority,
                    RequestCreate::$allCheckboxes,
                ],
                "cantSee" => [
                    RequestCreate::errorFieldMessage(RequestCreate::$plannedFinishDate, ' '),
                    RequestCreate::errorFieldMessage(RequestCreate::$priority, ' '),
                    RequestCreate::errorFieldMessage(RequestCreate::$allCheckboxes, ' '),
                ],
            ],
            'pageForm_2' => [
                "canSee" => [
                    RequestCreate::errorFieldMessage(RequestCreate::$description, 'Необходимо заполнить «Описание».'),
                    RequestCreate::errorFieldMessage(RequestCreate::$category, 'Нужно указать либо категорию либо продавца'),
                    RequestCreate::errorFieldMessage(RequestCreate::$seller, 'Нужно указать либо категорию либо продавца'),
                    RequestCreate::errorFieldMessage(RequestCreate::$amount, 'Необходимо заполнить «Количество в работу».'),
                    RequestCreate::$plannedFinishDate,
                    RequestCreate::$priority,
                    RequestCreate::$allCheckboxes,
                ],
                "cantSee" => [
                    RequestCreate::errorFieldMessage(RequestCreate::$subject, ' '),
                    RequestCreate::errorFieldMessage(RequestCreate::$plannedFinishDate, ' '),
                    RequestCreate::errorFieldMessage(RequestCreate::$priority, ' '),
                    RequestCreate::errorFieldMessage(RequestCreate::$allCheckboxes, ' '),
                ],
            ],
            'pageForm_3' => [
                "canSee" => [
                    RequestCreate::errorFieldMessage(RequestCreate::$category, 'Нужно указать либо категорию либо продавца'),
                    RequestCreate::errorFieldMessage(RequestCreate::$seller, 'Нужно указать либо категорию либо продавца'),
                    RequestCreate::errorFieldMessage(RequestCreate::$amount, 'Необходимо заполнить «Количество в работу».'),
                    RequestCreate::$plannedFinishDate,
                    RequestCreate::$priority,
                    RequestCreate::$allCheckboxes,
                ],
                "cantSee" => [
                    RequestCreate::errorFieldMessage(RequestCreate::$subject, ' '),
                    RequestCreate::errorFieldMessage(RequestCreate::$description, ' '),
                    RequestCreate::errorFieldMessage(RequestCreate::$plannedFinishDate, ' '),
                    RequestCreate::errorFieldMessage(RequestCreate::$priority, ' '),
                    RequestCreate::errorFieldMessage(RequestCreate::$allCheckboxes, ' '),
                ],
            ],
            'pageForm_4' => [
                "canSee" => [
                    RequestCreate::errorFieldMessage(RequestCreate::$amount, 'Необходимо заполнить «Количество в работу».'),
                    RequestCreate::$plannedFinishDate,
                    RequestCreate::$priority,
                    RequestCreate::$allCheckboxes,
                ],
                "cantSee" => [
                    RequestCreate::errorFieldMessage(RequestCreate::$category, ' '),
                    RequestCreate::errorFieldMessage(RequestCreate::$subject, ' '),
                    RequestCreate::errorFieldMessage(RequestCreate::$seller, ' '),
                    RequestCreate::errorFieldMessage(RequestCreate::$description, ' '),
                    RequestCreate::errorFieldMessage(RequestCreate::$plannedFinishDate, ' '),
                    RequestCreate::errorFieldMessage(RequestCreate::$priority, ' '),
                    RequestCreate::errorFieldMessage(RequestCreate::$allCheckboxes, ' '),
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => [
                        [
                            "id" => 1,
                            "author_id" => 4,
                            "type_id" => 7,
                            "supervisor_id" => 6,
                            "manager_id" => null,
                            "status" => 1,
                            "direction" => 0,
                            "priority" => null,
                            "awaiting_correction" => 0,
                            "created_at >" => date("Y-m-d"),
                            "correction_comment" => null,
                            "amount_to_work" => 999999999,
                            "subject" => '!"№;%:?*()',
                            "description" => '!"№;%:?*()',
                            "category_id" => 1,
                            "seller_id" => null,
                            "recommendations" => null,
                            "reason" => null,
                            "parent_id" => null,
                            "planned_start_date" => null,
                            "planned_finish_date" => null,
                            "actual_start_date" => null,
                            "actual_finish_date" => null,
                            "supervisor_process_date" => null,
                            "supervisor_check_date" => null,
                            "result_comment" => null,
                            "supervisor_comment" => null,
                            "last_change_status_date >" => date("Y-m-d"),
                            "team_direction" => 6,
                            "report_period_id" => null,
                            "sync_source_id" => null,
                            "sv_report_periods" => null,
                            "cross_check_status" => '0',
                            "cross_check_manager_id" => null,
                            "employee_code_1c" => null,
                            "child_count" => 0,
                            "photo_load_status" => 0,
                        ]
                    ],
                ]
            ]
        ]
    ],

];
