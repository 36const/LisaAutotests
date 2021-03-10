<?php
return [
    "lisa_fixtures" => [
        "requests" => [
            [
                //"id" => 5,
                "author_id" => 4,
                "type_id" => 10,
                "supervisor_id" => 37,
                "manager_id" => 11,
                "status" => 7,
                "direction" => 0,
                "priority" => 2,
                "awaiting_correction" => 0,
                "created_at" => "2020-02-01 00:00:00",
                "correction_comment" => null,
                "amount_to_work" => 10,
                "subject" => "Изменение существующих параметров/значений (Определяется типом задачи)",
                "description" => "Описание",
                "category_id" => 1,
                "seller_id" => 83,
                "recommendations" => null,
                "reason" => "Ожидать",
                "parent_id" => null,
                "planned_start_date" => null,
                "planned_finish_date" => null,
                "actual_start_date" => "2020-01-01 00:00:03",
                "actual_finish_date" => null,
                "supervisor_process_date" => "2020-01-01 00:00:02",
                "supervisor_check_date" => null,
                "result_comment" => null,
                "supervisor_comment" => "Комментарий",
                "last_change_status_date" => date("Y-m-07 00:00:01"),
                "team_direction" => 5,
                "report_period_id" => null,
                "sync_source_id" => null,
                "sv_report_periods" => '{"1": 1}'
            ],
        ],
        'user_notifications' => [
            [
                //"id" => 1,
                "user_id" => 4,
                "notification" => '',
                "status" => 0,
                "created_at" => date("Y-m-d"),
                "request_id" => 1,
                "priority" => 2,
                "amount_to_work" => 10,
                "request_subject" => "Добавление новых товаров (Работа с товарами Розетки)",
                "fields_for_complete" => '{"Причина": "Другое (описан в коментариях) | Нада </b>!@#$%^&*()_+`-]\'/[;.,}\"?{:>\\\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО"}',
                "triggered_by" => "Константин Куцан",
                "event" => "status",
                "changed_fields" => '{"newValue": "3", "oldValue": 1}'
            ],
            [
                //"id" => 2,
                "user_id" => 6,
                "notification" => '',
                "status" => 0,
                "created_at" => date("Y-m-d"),
                "request_id" => 1,
                "priority" => 2,
                "amount_to_work" => 10,
                "request_subject" => "Добавление новых товаров (Работа с товарами Розетки)",
                "fields_for_complete" => '{"Причина": "Другое (описан в коментариях) | Нада </b>!@#$%^&*()_+`-]\'/[;.,}\"?{:>\\\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО"}',
                "triggered_by" => "Константин Куцан",
                "event" => "status",
                "changed_fields" => '{"newValue": "3", "oldValue": 1}'
            ],
            [
                //"id" => 3,
                "user_id" => 4,
                "notification" => "",
                "status" => 0,
                "created_at" => date("Y-m-d"),
                "request_id" => 1,
                "priority" => 2,
                "amount_to_work" => 10,
                "request_subject" => "Добавление новых товаров (Работа с товарами Розетки)",
                "fields_for_complete" => "[]",
                "triggered_by" => "Константин Куцан",
                "event" => "status",
                "changed_fields" => '{"newValue": "7", "oldValue": 6}',
                "notify_service_id" => null
            ],
            [
                //"id" => 4,
                "user_id" => 15,
                "notification" => "",
                "status" => 0,
                "created_at" => date("Y-m-d"),
                "request_id" => 1,
                "priority" => 2,
                "amount_to_work" => 10,
                "request_subject" => "Добавление новых товаров (Работа с товарами Розетки)",
                "fields_for_complete" => "[]",
                "triggered_by" => "Константин Куцан",
                "event" => "status",
                "changed_fields" => '{"newValue": "7", "oldValue": 6}',
                "notify_service_id" => null
            ],
            [
                //"id" => 5,
                "user_id" => 4,
                "notification" => "",
                "status" => 0,
                "created_at" => date("Y-m-d"),
                "request_id" => 1,
                "priority" => 2,
                "amount_to_work" => 10,
                "request_subject" => "Добавление новых товаров (Работа с товарами Розетки)",
                "fields_for_complete" => '{"Вид структуры": "(не указан)", "Ручная загрузка": "Да", "Пакетная загрузка": "(не указан)", "Сложность структуры": "(не указан)", "Коэффициент типа задачи": "0.5", "Общее количество ошибок": "0", "Уровень сложности задачи": "(не указан)", "Количество изменённых товаров": "(не указан)", "Общее количество товаров с ошибками": "0", "Коэффициент уровня сложности задачи": "1"}',
                "triggered_by" => "Константин Куцан",
                "event" => "status",
                "changed_fields" => '{"newValue": "8", "oldValue": 6}',
                "notify_service_id" => null
            ],
            [
                //"id" => 6,
                "user_id" => 17,
                "notification" => "",
                "status" => 0,
                "created_at" => date("Y-m-d"),
                "request_id" => 1,
                "priority" => 2,
                "amount_to_work" => 10,
                "request_subject" => "Добавление новых товаров (Работа с товарами Розетки)",
                "fields_for_complete" => '{"Вид структуры": "(не указан)", "Ручная загрузка": "Да", "Пакетная загрузка": "(не указан)", "Сложность структуры": "(не указан)", "Коэффициент типа задачи": "0.5", "Общее количество ошибок": "0", "Уровень сложности задачи": "(не указан)", "Количество изменённых товаров": "(не указан)", "Общее количество товаров с ошибками": "0", "Коэффициент уровня сложности задачи": "1"}',
                "triggered_by" => "Константин Куцан",
                "event" => "status",
                "changed_fields" => '{"newValue": "8", "oldValue": 6}',
                "notify_service_id" => null
            ]
        ],
        "categories" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/categories.php',
        "field_values" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/field_values.php',
        "teams" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/teams.php',
        "reasons" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/reasons.php',
        "priorities" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/priorities.php',
    ],
];