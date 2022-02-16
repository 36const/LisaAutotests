<?php

//в первых сообщениях проставлен 'userId':5 чтобы не приходили письма на реальный эмейл

$withAttachments = [
    1 => '{"notificationId":1,"userId":5,"attachments":"[\"803999_194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd\",\"803999_doc.doc\",\"803999_pptx_abvgdeezzijklmnoprstufhccssyeuaegii.pptx\",\"803999_~!@#$%^&*()_+`-=][;.|}{:?><.jpg\",\"803999_194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd\",\"803999_~!@#$%^&*()_+`-=][;.|}{:?><.jpg\"]","subject":"[LISA] Заявка №1 `Добавление новых товаров (Работа с товарами Розетки)` перешла в статус `Выполнена`","notification":"Константин Куцан <b>перевел(а) заявку</b> <a href=\"http://splitter.docker/lisa/#/request/view/1?notifyId=1\">№1 Добавление новых товаров (Работа с товарами Розетки)</a> [Товар-новинка/эксклюзив (трафикообразующий)] в статус <b>\"Выполнена\"</b> </br><b>Количество в работу:</b> 10</br><b>Ручная загрузка:</b> Да </br><b>Пакетная загрузка:</b> (не указан) </br><b>Уровень сложности задачи:</b> 2 </br><b>Вид структуры:</b> (не указан) </br><b>Сложность структуры:</b> (не указан) </br><b>Коэффициент типа задачи:</b> 0.5 </br><b>Коэффициент уровня сложности задачи:</b> 1.1 </br><b>Количество изменённых товаров:</b> (не указан) </br><b>Общее количество ошибок:</b> 0 </br><b>Общее количество товаров с ошибками:</b> 0 </br>","requestId":1}',
    2 => '{"notificationId":2,"userId":6,"attachments":"[\"803999_194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd\",\"803999_doc.doc\",\"803999_pptx_abvgdeezzijklmnoprstufhccssyeuaegii.pptx\",\"803999_~!@#$%^&*()_+`-=][;.|}{:?><.jpg\",\"803999_194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd\",\"803999_~!@#$%^&*()_+`-=][;.|}{:?><.jpg\"]","subject":"[LISA] Заявка №1 `Добавление новых товаров (Работа с товарами Розетки)` перешла в статус `Выполнена`","notification":"Константин Куцан <b>перевел(а) заявку</b> <a href=\"http://splitter.docker/lisa/#/request/view/1?notifyId=2\">№1 Добавление новых товаров (Работа с товарами Розетки)</a> [Товар-новинка/эксклюзив (трафикообразующий)] в статус <b>\"Выполнена\"</b> </br><b>Количество в работу:</b> 10</br><b>Ручная загрузка:</b> Да </br><b>Пакетная загрузка:</b> (не указан) </br><b>Уровень сложности задачи:</b> 2 </br><b>Вид структуры:</b> (не указан) </br><b>Сложность структуры:</b> (не указан) </br><b>Коэффициент типа задачи:</b> 0.5 </br><b>Коэффициент уровня сложности задачи:</b> 1.1 </br><b>Количество изменённых товаров:</b> (не указан) </br><b>Общее количество ошибок:</b> 0 </br><b>Общее количество товаров с ошибками:</b> 0 </br>","requestId":1}',
    3 => '{"notificationId":3,"userId":15,"attachments":"[\"803999_194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd\",\"803999_doc.doc\",\"803999_pptx_abvgdeezzijklmnoprstufhccssyeuaegii.pptx\",\"803999_~!@#$%^&*()_+`-=][;.|}{:?><.jpg\",\"803999_194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd\",\"803999_~!@#$%^&*()_+`-=][;.|}{:?><.jpg\"]","subject":"[LISA] Заявка №1 `Добавление новых товаров (Работа с товарами Розетки)` перешла в статус `Выполнена`","notification":"Константин Куцан <b>перевел(а) заявку</b> <a href=\"http://splitter.docker/lisa/#/request/view/1?notifyId=3\">№1 Добавление новых товаров (Работа с товарами Розетки)</a> [Товар-новинка/эксклюзив (трафикообразующий)] в статус <b>\"Выполнена\"</b> </br><b>Количество в работу:</b> 10</br><b>Ручная загрузка:</b> Да </br><b>Пакетная загрузка:</b> (не указан) </br><b>Уровень сложности задачи:</b> 2 </br><b>Вид структуры:</b> (не указан) </br><b>Сложность структуры:</b> (не указан) </br><b>Коэффициент типа задачи:</b> 0.5 </br><b>Коэффициент уровня сложности задачи:</b> 1.1 </br><b>Количество изменённых товаров:</b> (не указан) </br><b>Общее количество ошибок:</b> 0 </br><b>Общее количество товаров с ошибками:</b> 0 </br>","requestId":1}',
];

$withoutAttachments = [
    1 => '{"notificationId":1,"userId":5,"attachments":"[]","subject":"[LISA] Заявка №1 `Добавление новых товаров (Работа с товарами Розетки)` перешла в статус `Выполнена`","notification":"Константин Куцан <b>перевел(а) заявку</b> <a href=\"http://splitter.docker/lisa/#/request/view/1?notifyId=1\">№1 Добавление новых товаров (Работа с товарами Розетки)</a> [Товар-новинка/эксклюзив (трафикообразующий)] в статус <b>\"Готова для распределения\"</b> </br><b>Количество в работу:</b> 10</br>","requestId":1}',
    2 => '{"notificationId":2,"userId":6,"attachments":"[]","subject":"[LISA] Заявка №1 `Добавление новых товаров (Работа с товарами Розетки)` перешла в статус `Выполнена`","notification":"Константин Куцан <b>перевел(а) заявку</b> <a href=\"http://splitter.docker/lisa/#/request/view/1?notifyId=2\">№1 Добавление новых товаров (Работа с товарами Розетки)</a> [Товар-новинка/эксклюзив (трафикообразующий)] в статус <b>\"Готова для распределения\"</b> </br><b>Количество в работу:</b> 10</br>","requestId":1}',
    3 => '{"notificationId":3,"userId":15,"attachments":"[]","subject":"[LISA] Заявка №1 `Добавление новых товаров (Работа с товарами Розетки)` перешла в статус `Выполнена`","notification":"Константин Куцан <b>перевел(а) заявку</b> <a href=\"http://splitter.docker/lisa/#/request/view/1?notifyId=3\">№1 Добавление новых товаров (Работа с товарами Розетки)</a> [Товар-новинка/эксклюзив (трафикообразующий)] в статус <b>\"Готова для распределения\"</b> </br><b>Количество в работу:</b> 10</br>","requestId":1}',
];

//необходимость оставить сообщение в очереди определяется наличием значения у attachments в тексте сообщения

return [
    'case1' => [
        'setting' => [
            'description' => 'Оставление сообщения в очереди при переводе в статус 9, если файлы не загрузились',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'pushToRabbit' => $withAttachments,
            'db' => [
                'lisa_fixtures' => [
                    'requests' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['requests'],
                    'requests_fields' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['requests_fields'],
                    'request_attachments' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['request_attachments'],
                ]
            ],
            'RabbitMQ' => [
                'lisa_sendMailNotifications' => [
                    $withAttachments[2],
                    $withAttachments[3],
                    $withAttachments[1],
                ],
                'lisa_sendOuterNotifications' => [],
                'lisa_saveFiles' => [
                    '[{"folder":"1631802792673","fileName":"803999_194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd","alias":"194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd","size":"60424","attachment":{"id":5,"request_id":1,"file_name_old":"","alias":"194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd","status":3,"uploaded_by":"Константин Куцан","uploaded_at":null,"deleted_by":null,"deleted_at":null,"file_name":"803999_194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd","size":60424}},' .
                    '{"folder":"1631802792673","fileName":"803999_~!@#$%^&*()_+`-=][\';.|}{:?><.jpg","alias":"!@#$%^&*()_+`-=][\';.|}{:?><.jpg","size":"34304","attachment":{"id":6,"request_id":1,"file_name_old":"","alias":"!@#$%^&*()_+`-=][\';.|}{:?><.jpg","status":3,"uploaded_by":"Константин Куцан","uploaded_at":null,"deleted_by":null,"deleted_at":null,"file_name":"803999_~!@#$%^&*()_+`-=][;.|}{:?><.jpg","size":34304}}]'
                ],
            ],
            'RabbitMQWithRoutingKey' => [
                'lisa_common' => [],
            ],
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Оставление сообщения в очереди при переводе в статус 8, если файлы не загрузились',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case2.php',
        'provider_data' => [
            'pushToRabbit' => $withAttachments,
            'db' => [
                'lisa_fixtures' => [
                    'requests' => (include __DIR__ . '/fixture/case2.php')['lisa_fixtures']['requests'],
                    'requests_fields' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['requests_fields'],
                    'request_attachments' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['request_attachments'],
                ]
            ],
            'RabbitMQ' => [
                'lisa_sendMailNotifications' => [
                    $withAttachments[2],
                    $withAttachments[3],
                    $withAttachments[1],
                ],
                'lisa_sendOuterNotifications' => [],
                'lisa_saveFiles' => [
                    '[{"folder":"1631802792673","fileName":"803999_194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd","alias":"194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd","size":"60424","attachment":{"id":5,"request_id":1,"file_name_old":"","alias":"194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd","status":3,"uploaded_by":"Константин Куцан","uploaded_at":null,"deleted_by":null,"deleted_at":null,"file_name":"803999_194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd","size":60424}},' .
                    '{"folder":"1631802792673","fileName":"803999_~!@#$%^&*()_+`-=][\';.|}{:?><.jpg","alias":"!@#$%^&*()_+`-=][\';.|}{:?><.jpg","size":"34304","attachment":{"id":6,"request_id":1,"file_name_old":"","alias":"!@#$%^&*()_+`-=][\';.|}{:?><.jpg","status":3,"uploaded_by":"Константин Куцан","uploaded_at":null,"deleted_by":null,"deleted_at":null,"file_name":"803999_~!@#$%^&*()_+`-=][;.|}{:?><.jpg","size":34304}}]'
                ],
            ],
            'RabbitMQWithRoutingKey' => [
                'lisa_common' => [],
            ],
        ]
    ],

    'case3' => [
        'setting' => [
            'description' => 'Оставление сообщения в очереди при переводе в статус 11, если файлы не загрузились',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case3.php',
        'provider_data' => [
            'pushToRabbit' => $withAttachments,
            'db' => [
                'lisa_fixtures' => [
                    'requests' => (include __DIR__ . '/fixture/case3.php')['lisa_fixtures']['requests'],
                    'requests_fields' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['requests_fields'],
                    'request_attachments' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['request_attachments'],
                ]
            ],
            'RabbitMQ' => [
                'lisa_sendMailNotifications' => [
                    $withAttachments[2],
                    $withAttachments[3],
                    $withAttachments[1],
                ],
                'lisa_sendOuterNotifications' => [],
                'lisa_saveFiles' => [
                    '[{"folder":"1631802792673","fileName":"803999_194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd","alias":"194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd","size":"60424","attachment":{"id":5,"request_id":1,"file_name_old":"","alias":"194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd","status":3,"uploaded_by":"Константин Куцан","uploaded_at":null,"deleted_by":null,"deleted_at":null,"file_name":"803999_194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd","size":60424}},' .
                    '{"folder":"1631802792673","fileName":"803999_~!@#$%^&*()_+`-=][\';.|}{:?><.jpg","alias":"!@#$%^&*()_+`-=][\';.|}{:?><.jpg","size":"34304","attachment":{"id":6,"request_id":1,"file_name_old":"","alias":"!@#$%^&*()_+`-=][\';.|}{:?><.jpg","status":3,"uploaded_by":"Константин Куцан","uploaded_at":null,"deleted_by":null,"deleted_at":null,"file_name":"803999_~!@#$%^&*()_+`-=][;.|}{:?><.jpg","size":34304}}]'
                ],
            ],
            'RabbitMQWithRoutingKey' => [
                'lisa_common' => [],
            ],
        ]
    ],

    'case4' => [
        'setting' => [
            'description' => 'Удаление сообщения из очереди при переводе в статус 2, если файлы не загрузились',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case4.php',
        'mock_data' => [
            'Notifications' => [
                'httpRequest' => [
                    'method' => 'POST',
                    'path' => '/v1/send',
                    'body' => 'event=lisa-send-email&from=gomer_services%40rozetka.com.ua&to=bpm_headSupervisor_1%40rozetka.com.ua&attrs=%7B%22subject%22%3A%22%5BLISA%5D+%D0%97%D0%B0%D1%8F%D0%B2%D0%BA%D0%B0+%E2%84%961+%60%D0%94%D0%BE%D0%B1%D0%B0%D0%B2%D0%BB%D0%B5%D0%BD%D0%B8%D0%B5+%D0%BD%D0%BE%D0%B2%D1%8B%D1%85+%D1%82%D0%BE%D0%B2%D0%B0%D1%80%D0%BE%D0%B2+%28%D0%A0%D0%B0%D0%B1%D0%BE%D1%82%D0%B0+%D1%81+%D1%82%D0%BE%D0%B2%D0%B0%D1%80%D0%B0%D0%BC%D0%B8+%D0%A0%D0%BE%D0%B7%D0%B5%D1%82%D0%BA%D0%B8%29%60+%D0%BF%D0%B5%D1%80%D0%B5%D1%88%D0%BB%D0%B0+%D0%B2+%D1%81%D1%82%D0%B0%D1%82%D1%83%D1%81+%60%D0%92%D1%8B%D0%BF%D0%BE%D0%BB%D0%BD%D0%B5%D0%BD%D0%B0%60%22%2C%22body%22%3A%22%D0%9A%D0%BE%D0%BD%D1%81%D1%82%D0%B0%D0%BD%D1%82%D0%B8%D0%BD+%D0%9A%D1%83%D1%86%D0%B0%D0%BD+%3Cb%3E%D0%BF%D0%B5%D1%80%D0%B5%D0%B2%D0%B5%D0%BB%28%D0%B0%29+%D0%B7%D0%B0%D1%8F%D0%B2%D0%BA%D1%83%3C%2Fb%3E+%3Ca+href%3D%5C%22http%3A%2F%2Fsplitter.docker%2Flisa%2F%23%2Frequest%2Fview%2F1%3FnotifyId%3D1%5C%22%3E%E2%84%961+%D0%94%D0%BE%D0%B1%D0%B0%D0%B2%D0%BB%D0%B5%D0%BD%D0%B8%D0%B5+%D0%BD%D0%BE%D0%B2%D1%8B%D1%85+%D1%82%D0%BE%D0%B2%D0%B0%D1%80%D0%BE%D0%B2+%28%D0%A0%D0%B0%D0%B1%D0%BE%D1%82%D0%B0+%D1%81+%D1%82%D0%BE%D0%B2%D0%B0%D1%80%D0%B0%D0%BC%D0%B8+%D0%A0%D0%BE%D0%B7%D0%B5%D1%82%D0%BA%D0%B8%29%3C%2Fa%3E+%5B%D0%A2%D0%BE%D0%B2%D0%B0%D1%80-%D0%BD%D0%BE%D0%B2%D0%B8%D0%BD%D0%BA%D0%B0%2F%D1%8D%D0%BA%D1%81%D0%BA%D0%BB%D1%8E%D0%B7%D0%B8%D0%B2+%28%D1%82%D1%80%D0%B0%D1%84%D0%B8%D0%BA%D0%BE%D0%BE%D0%B1%D1%80%D0%B0%D0%B7%D1%83%D1%8E%D1%89%D0%B8%D0%B9%29%5D+%D0%B2+%D1%81%D1%82%D0%B0%D1%82%D1%83%D1%81+%3Cb%3E%5C%22%D0%93%D0%BE%D1%82%D0%BE%D0%B2%D0%B0+%D0%B4%D0%BB%D1%8F+%D1%80%D0%B0%D1%81%D0%BF%D1%80%D0%B5%D0%B4%D0%B5%D0%BB%D0%B5%D0%BD%D0%B8%D1%8F%5C%22%3C%2Fb%3E+%3C%2Fbr%3E%3Cb%3E%D0%9A%D0%BE%D0%BB%D0%B8%D1%87%D0%B5%D1%81%D1%82%D0%B2%D0%BE+%D0%B2+%D1%80%D0%B0%D0%B1%D0%BE%D1%82%D1%83%3A%3C%2Fb%3E+10%3C%2Fbr%3E%22%2C%22attachmentsMessage%22%3A%22%22%7D'
                ],
                'httpResponse' => [
                    'headers' => [
                        'content-type' => [
                            'application/json; charset=UTF-8'
                        ]
                    ],
                    'body' => file_get_contents(__DIR__ . '/mock/Notifications/case1.json'),
                    'statusCode' => 200
                ],
            ],
        ],
        'provider_data' => [
            'pushToRabbit' => $withoutAttachments,
            'db' => [
                'lisa_fixtures' => [
                    'requests' => (include __DIR__ . '/fixture/case4.php')['lisa_fixtures']['requests'],
                    'requests_fields' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['requests_fields'],
                    'request_attachments' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['request_attachments'],
                ]
            ],
            'RabbitMQ' => [
                'lisa_sendMailNotifications' => [
                    $withoutAttachments[2],
                    $withoutAttachments[3],
                ],
                'lisa_sendOuterNotifications' => [],
                'lisa_saveFiles' => [
                    '[{"folder":"1631802792673","fileName":"803999_194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd","alias":"194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd","size":"60424","attachment":{"id":5,"request_id":1,"file_name_old":"","alias":"194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd","status":3,"uploaded_by":"Константин Куцан","uploaded_at":null,"deleted_by":null,"deleted_at":null,"file_name":"803999_194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd","size":60424}},' .
                    '{"folder":"1631802792673","fileName":"803999_~!@#$%^&*()_+`-=][\';.|}{:?><.jpg","alias":"!@#$%^&*()_+`-=][\';.|}{:?><.jpg","size":"34304","attachment":{"id":6,"request_id":1,"file_name_old":"","alias":"!@#$%^&*()_+`-=][\';.|}{:?><.jpg","status":3,"uploaded_by":"Константин Куцан","uploaded_at":null,"deleted_by":null,"deleted_at":null,"file_name":"803999_~!@#$%^&*()_+`-=][;.|}{:?><.jpg","size":34304}}]'
                ],
            ],
            'RabbitMQWithRoutingKey' => [
                'lisa_common' => [],
            ],
        ]
    ],

    'case5' => [
        'setting' => [
            'description' => 'Удаление сообщения из очереди при переводе в статус 9, если файлы загрузились',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case5.php',
        'mock_data' => [
            'Notifications' => [
                'httpRequest' => [
                    'method' => 'POST',
                    'path' => '/v1/send',
                    'body' => 'event=lisa-send-email&from=gomer_services%40rozetka.com.ua&to=bpm_headSupervisor_1%40rozetka.com.ua&attrs=%7B%22subject%22%3A%22%5BLISA%5D+%D0%97%D0%B0%D1%8F%D0%B2%D0%BA%D0%B0+%E2%84%961+%60%D0%94%D0%BE%D0%B1%D0%B0%D0%B2%D0%BB%D0%B5%D0%BD%D0%B8%D0%B5+%D0%BD%D0%BE%D0%B2%D1%8B%D1%85+%D1%82%D0%BE%D0%B2%D0%B0%D1%80%D0%BE%D0%B2+%28%D0%A0%D0%B0%D0%B1%D0%BE%D1%82%D0%B0+%D1%81+%D1%82%D0%BE%D0%B2%D0%B0%D1%80%D0%B0%D0%BC%D0%B8+%D0%A0%D0%BE%D0%B7%D0%B5%D1%82%D0%BA%D0%B8%29%60+%D0%BF%D0%B5%D1%80%D0%B5%D1%88%D0%BB%D0%B0+%D0%B2+%D1%81%D1%82%D0%B0%D1%82%D1%83%D1%81+%60%D0%92%D1%8B%D0%BF%D0%BE%D0%BB%D0%BD%D0%B5%D0%BD%D0%B0%60%22%2C%22body%22%3A%22%D0%9A%D0%BE%D0%BD%D1%81%D1%82%D0%B0%D0%BD%D1%82%D0%B8%D0%BD+%D0%9A%D1%83%D1%86%D0%B0%D0%BD+%3Cb%3E%D0%BF%D0%B5%D1%80%D0%B5%D0%B2%D0%B5%D0%BB%28%D0%B0%29+%D0%B7%D0%B0%D1%8F%D0%B2%D0%BA%D1%83%3C%2Fb%3E+%3Ca+href%3D%5C%22http%3A%2F%2Fsplitter.docker%2Flisa%2F%23%2Frequest%2Fview%2F1%3FnotifyId%3D1%5C%22%3E%E2%84%961+%D0%94%D0%BE%D0%B1%D0%B0%D0%B2%D0%BB%D0%B5%D0%BD%D0%B8%D0%B5+%D0%BD%D0%BE%D0%B2%D1%8B%D1%85+%D1%82%D0%BE%D0%B2%D0%B0%D1%80%D0%BE%D0%B2+%28%D0%A0%D0%B0%D0%B1%D0%BE%D1%82%D0%B0+%D1%81+%D1%82%D0%BE%D0%B2%D0%B0%D1%80%D0%B0%D0%BC%D0%B8+%D0%A0%D0%BE%D0%B7%D0%B5%D1%82%D0%BA%D0%B8%29%3C%2Fa%3E+%5B%D0%A2%D0%BE%D0%B2%D0%B0%D1%80-%D0%BD%D0%BE%D0%B2%D0%B8%D0%BD%D0%BA%D0%B0%2F%D1%8D%D0%BA%D1%81%D0%BA%D0%BB%D1%8E%D0%B7%D0%B8%D0%B2+%28%D1%82%D1%80%D0%B0%D1%84%D0%B8%D0%BA%D0%BE%D0%BE%D0%B1%D1%80%D0%B0%D0%B7%D1%83%D1%8E%D1%89%D0%B8%D0%B9%29%5D+%D0%B2+%D1%81%D1%82%D0%B0%D1%82%D1%83%D1%81+%3Cb%3E%5C%22%D0%92%D1%8B%D0%BF%D0%BE%D0%BB%D0%BD%D0%B5%D0%BD%D0%B0%5C%22%3C%2Fb%3E+%3C%2Fbr%3E%3Cb%3E%D0%9A%D0%BE%D0%BB%D0%B8%D1%87%D0%B5%D1%81%D1%82%D0%B2%D0%BE+%D0%B2+%D1%80%D0%B0%D0%B1%D0%BE%D1%82%D1%83%3A%3C%2Fb%3E+10%3C%2Fbr%3E%3Cb%3E%D0%A0%D1%83%D1%87%D0%BD%D0%B0%D1%8F+%D0%B7%D0%B0%D0%B3%D1%80%D1%83%D0%B7%D0%BA%D0%B0%3A%3C%2Fb%3E+%D0%94%D0%B0+%3C%2Fbr%3E%3Cb%3E%D0%9F%D0%B0%D0%BA%D0%B5%D1%82%D0%BD%D0%B0%D1%8F+%D0%B7%D0%B0%D0%B3%D1%80%D1%83%D0%B7%D0%BA%D0%B0%3A%3C%2Fb%3E+%28%D0%BD%D0%B5+%D1%83%D0%BA%D0%B0%D0%B7%D0%B0%D0%BD%29+%3C%2Fbr%3E%3Cb%3E%D0%A3%D1%80%D0%BE%D0%B2%D0%B5%D0%BD%D1%8C+%D1%81%D0%BB%D0%BE%D0%B6%D0%BD%D0%BE%D1%81%D1%82%D0%B8+%D0%B7%D0%B0%D0%B4%D0%B0%D1%87%D0%B8%3A%3C%2Fb%3E+2+%3C%2Fbr%3E%3Cb%3E%D0%92%D0%B8%D0%B4+%D1%81%D1%82%D1%80%D1%83%D0%BA%D1%82%D1%83%D1%80%D1%8B%3A%3C%2Fb%3E+%28%D0%BD%D0%B5+%D1%83%D0%BA%D0%B0%D0%B7%D0%B0%D0%BD%29+%3C%2Fbr%3E%3Cb%3E%D0%A1%D0%BB%D0%BE%D0%B6%D0%BD%D0%BE%D1%81%D1%82%D1%8C+%D1%81%D1%82%D1%80%D1%83%D0%BA%D1%82%D1%83%D1%80%D1%8B%3A%3C%2Fb%3E+%28%D0%BD%D0%B5+%D1%83%D0%BA%D0%B0%D0%B7%D0%B0%D0%BD%29+%3C%2Fbr%3E%3Cb%3E%D0%9A%D0%BE%D1%8D%D1%84%D1%84%D0%B8%D1%86%D0%B8%D0%B5%D0%BD%D1%82+%D1%82%D0%B8%D0%BF%D0%B0+%D0%B7%D0%B0%D0%B4%D0%B0%D1%87%D0%B8%3A%3C%2Fb%3E+0.5+%3C%2Fbr%3E%3Cb%3E%D0%9A%D0%BE%D1%8D%D1%84%D1%84%D0%B8%D1%86%D0%B8%D0%B5%D0%BD%D1%82+%D1%83%D1%80%D0%BE%D0%B2%D0%BD%D1%8F+%D1%81%D0%BB%D0%BE%D0%B6%D0%BD%D0%BE%D1%81%D1%82%D0%B8+%D0%B7%D0%B0%D0%B4%D0%B0%D1%87%D0%B8%3A%3C%2Fb%3E+1.1+%3C%2Fbr%3E%3Cb%3E%D0%9A%D0%BE%D0%BB%D0%B8%D1%87%D0%B5%D1%81%D1%82%D0%B2%D0%BE+%D0%B8%D0%B7%D0%BC%D0%B5%D0%BD%D1%91%D0%BD%D0%BD%D1%8B%D1%85+%D1%82%D0%BE%D0%B2%D0%B0%D1%80%D0%BE%D0%B2%3A%3C%2Fb%3E+%28%D0%BD%D0%B5+%D1%83%D0%BA%D0%B0%D0%B7%D0%B0%D0%BD%29+%3C%2Fbr%3E%3Cb%3E%D0%9E%D0%B1%D1%89%D0%B5%D0%B5+%D0%BA%D0%BE%D0%BB%D0%B8%D1%87%D0%B5%D1%81%D1%82%D0%B2%D0%BE+%D0%BE%D1%88%D0%B8%D0%B1%D0%BE%D0%BA%3A%3C%2Fb%3E+0+%3C%2Fbr%3E%3Cb%3E%D0%9E%D0%B1%D1%89%D0%B5%D0%B5+%D0%BA%D0%BE%D0%BB%D0%B8%D1%87%D0%B5%D1%81%D1%82%D0%B2%D0%BE+%D1%82%D0%BE%D0%B2%D0%B0%D1%80%D0%BE%D0%B2+%D1%81+%D0%BE%D1%88%D0%B8%D0%B1%D0%BA%D0%B0%D0%BC%D0%B8%3A%3C%2Fb%3E+0+%3C%2Fbr%3E%22%2C%22attachmentsMessage%22%3A%22%3Cbr%3E%3Cb%3E%D0%A4%D0%B0%D0%B9%D0%BB%D1%8B+%D0%B7%D0%B0%D0%BD%D0%B8%D0%BC%D0%B0%D1%8E%D1%82+%D0%B1%D0%BE%D0%BB%D1%8C%D1%88%D0%B5+7%2C0+%D0%9C%D0%B1.+%D0%94%D0%BB%D1%8F+%D0%B8%D1%85+%D0%BF%D1%80%D0%BE%D1%81%D0%BC%D0%BE%D1%82%D1%80%D0%B0+%D0%BF%D0%B5%D1%80%D0%B5%D0%B9%D0%B4%D0%B8%D1%82%D0%B5+%D0%B2+%D0%B7%D0%B0%D1%8F%D0%B2%D0%BA%D1%83.%3C%2Fb%3E%22%7D',
                ],
                'httpResponse' => [
                    'headers' => [
                        'content-type' => [
                            'application/json; charset=UTF-8'
                        ]
                    ],
                    'body' => file_get_contents(__DIR__ . '/mock/Notifications/case1.json'),
                    'statusCode' => 200
                ],
            ],
        ],
        'provider_data' => [
            'pushToRabbit' => $withAttachments,
            'db' => [
                'lisa_fixtures' => [
                    'requests' => (include __DIR__ . '/fixture/case5.php')['lisa_fixtures']['requests'],
                    'requests_fields' => (include __DIR__ . '/fixture/case5.php')['lisa_fixtures']['requests_fields'],
                    'request_attachments' => (include __DIR__ . '/fixture/case5.php')['lisa_fixtures']['request_attachments'],
                    //пока пропускаем ошибку, она из-за того, что в минио не вставляются реальные файлы
                    'exceptions' => [
                        [
                            'message LIKE' => 'Error executing "HeadObject" %',
                        ],
                    ]
                ]
            ],
            'RabbitMQ' => [
                'lisa_sendMailNotifications' => [
                    $withAttachments[2],
                    $withAttachments[3],
                ],
                'lisa_sendOuterNotifications' => [],
                'lisa_saveFiles' => [],
            ],
            'RabbitMQWithRoutingKey' => [
                'lisa_common' => [],
            ],
        ]
    ],

    'case6' => [
        'setting' => [
            'description' => 'Удаление сообщения из очереди при переводе в статус 8, если файлы загрузились',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case6.php',
        'mock_data' => [
            'Notifications' => [
                'httpRequest' => [
                    'method' => 'POST',
                    'path' => '/v1/send',
                    'body' => 'event=lisa-send-email&from=gomer_services%40rozetka.com.ua&to=bpm_headSupervisor_1%40rozetka.com.ua&attrs=%7B%22subject%22%3A%22%5BLISA%5D+%D0%97%D0%B0%D1%8F%D0%B2%D0%BA%D0%B0+%E2%84%961+%60%D0%94%D0%BE%D0%B1%D0%B0%D0%B2%D0%BB%D0%B5%D0%BD%D0%B8%D0%B5+%D0%BD%D0%BE%D0%B2%D1%8B%D1%85+%D1%82%D0%BE%D0%B2%D0%B0%D1%80%D0%BE%D0%B2+%28%D0%A0%D0%B0%D0%B1%D0%BE%D1%82%D0%B0+%D1%81+%D1%82%D0%BE%D0%B2%D0%B0%D1%80%D0%B0%D0%BC%D0%B8+%D0%A0%D0%BE%D0%B7%D0%B5%D1%82%D0%BA%D0%B8%29%60+%D0%BF%D0%B5%D1%80%D0%B5%D1%88%D0%BB%D0%B0+%D0%B2+%D1%81%D1%82%D0%B0%D1%82%D1%83%D1%81+%60%D0%92%D1%8B%D0%BF%D0%BE%D0%BB%D0%BD%D0%B5%D0%BD%D0%B0%60%22%2C%22body%22%3A%22%D0%9A%D0%BE%D0%BD%D1%81%D1%82%D0%B0%D0%BD%D1%82%D0%B8%D0%BD+%D0%9A%D1%83%D1%86%D0%B0%D0%BD+%3Cb%3E%D0%BF%D0%B5%D1%80%D0%B5%D0%B2%D0%B5%D0%BB%28%D0%B0%29+%D0%B7%D0%B0%D1%8F%D0%B2%D0%BA%D1%83%3C%2Fb%3E+%3Ca+href%3D%5C%22http%3A%2F%2Fsplitter.docker%2Flisa%2F%23%2Frequest%2Fview%2F1%3FnotifyId%3D1%5C%22%3E%E2%84%961+%D0%94%D0%BE%D0%B1%D0%B0%D0%B2%D0%BB%D0%B5%D0%BD%D0%B8%D0%B5+%D0%BD%D0%BE%D0%B2%D1%8B%D1%85+%D1%82%D0%BE%D0%B2%D0%B0%D1%80%D0%BE%D0%B2+%28%D0%A0%D0%B0%D0%B1%D0%BE%D1%82%D0%B0+%D1%81+%D1%82%D0%BE%D0%B2%D0%B0%D1%80%D0%B0%D0%BC%D0%B8+%D0%A0%D0%BE%D0%B7%D0%B5%D1%82%D0%BA%D0%B8%29%3C%2Fa%3E+%5B%D0%A2%D0%BE%D0%B2%D0%B0%D1%80-%D0%BD%D0%BE%D0%B2%D0%B8%D0%BD%D0%BA%D0%B0%2F%D1%8D%D0%BA%D1%81%D0%BA%D0%BB%D1%8E%D0%B7%D0%B8%D0%B2+%28%D1%82%D1%80%D0%B0%D1%84%D0%B8%D0%BA%D0%BE%D0%BE%D0%B1%D1%80%D0%B0%D0%B7%D1%83%D1%8E%D1%89%D0%B8%D0%B9%29%5D+%D0%B2+%D1%81%D1%82%D0%B0%D1%82%D1%83%D1%81+%3Cb%3E%5C%22%D0%92%D1%8B%D0%BF%D0%BE%D0%BB%D0%BD%D0%B5%D0%BD%D0%B0%5C%22%3C%2Fb%3E+%3C%2Fbr%3E%3Cb%3E%D0%9A%D0%BE%D0%BB%D0%B8%D1%87%D0%B5%D1%81%D1%82%D0%B2%D0%BE+%D0%B2+%D1%80%D0%B0%D0%B1%D0%BE%D1%82%D1%83%3A%3C%2Fb%3E+10%3C%2Fbr%3E%3Cb%3E%D0%A0%D1%83%D1%87%D0%BD%D0%B0%D1%8F+%D0%B7%D0%B0%D0%B3%D1%80%D1%83%D0%B7%D0%BA%D0%B0%3A%3C%2Fb%3E+%D0%94%D0%B0+%3C%2Fbr%3E%3Cb%3E%D0%9F%D0%B0%D0%BA%D0%B5%D1%82%D0%BD%D0%B0%D1%8F+%D0%B7%D0%B0%D0%B3%D1%80%D1%83%D0%B7%D0%BA%D0%B0%3A%3C%2Fb%3E+%28%D0%BD%D0%B5+%D1%83%D0%BA%D0%B0%D0%B7%D0%B0%D0%BD%29+%3C%2Fbr%3E%3Cb%3E%D0%A3%D1%80%D0%BE%D0%B2%D0%B5%D0%BD%D1%8C+%D1%81%D0%BB%D0%BE%D0%B6%D0%BD%D0%BE%D1%81%D1%82%D0%B8+%D0%B7%D0%B0%D0%B4%D0%B0%D1%87%D0%B8%3A%3C%2Fb%3E+2+%3C%2Fbr%3E%3Cb%3E%D0%92%D0%B8%D0%B4+%D1%81%D1%82%D1%80%D1%83%D0%BA%D1%82%D1%83%D1%80%D1%8B%3A%3C%2Fb%3E+%28%D0%BD%D0%B5+%D1%83%D0%BA%D0%B0%D0%B7%D0%B0%D0%BD%29+%3C%2Fbr%3E%3Cb%3E%D0%A1%D0%BB%D0%BE%D0%B6%D0%BD%D0%BE%D1%81%D1%82%D1%8C+%D1%81%D1%82%D1%80%D1%83%D0%BA%D1%82%D1%83%D1%80%D1%8B%3A%3C%2Fb%3E+%28%D0%BD%D0%B5+%D1%83%D0%BA%D0%B0%D0%B7%D0%B0%D0%BD%29+%3C%2Fbr%3E%3Cb%3E%D0%9A%D0%BE%D1%8D%D1%84%D1%84%D0%B8%D1%86%D0%B8%D0%B5%D0%BD%D1%82+%D1%82%D0%B8%D0%BF%D0%B0+%D0%B7%D0%B0%D0%B4%D0%B0%D1%87%D0%B8%3A%3C%2Fb%3E+0.5+%3C%2Fbr%3E%3Cb%3E%D0%9A%D0%BE%D1%8D%D1%84%D1%84%D0%B8%D1%86%D0%B8%D0%B5%D0%BD%D1%82+%D1%83%D1%80%D0%BE%D0%B2%D0%BD%D1%8F+%D1%81%D0%BB%D0%BE%D0%B6%D0%BD%D0%BE%D1%81%D1%82%D0%B8+%D0%B7%D0%B0%D0%B4%D0%B0%D1%87%D0%B8%3A%3C%2Fb%3E+1.1+%3C%2Fbr%3E%3Cb%3E%D0%9A%D0%BE%D0%BB%D0%B8%D1%87%D0%B5%D1%81%D1%82%D0%B2%D0%BE+%D0%B8%D0%B7%D0%BC%D0%B5%D0%BD%D1%91%D0%BD%D0%BD%D1%8B%D1%85+%D1%82%D0%BE%D0%B2%D0%B0%D1%80%D0%BE%D0%B2%3A%3C%2Fb%3E+%28%D0%BD%D0%B5+%D1%83%D0%BA%D0%B0%D0%B7%D0%B0%D0%BD%29+%3C%2Fbr%3E%3Cb%3E%D0%9E%D0%B1%D1%89%D0%B5%D0%B5+%D0%BA%D0%BE%D0%BB%D0%B8%D1%87%D0%B5%D1%81%D1%82%D0%B2%D0%BE+%D0%BE%D1%88%D0%B8%D0%B1%D0%BE%D0%BA%3A%3C%2Fb%3E+0+%3C%2Fbr%3E%3Cb%3E%D0%9E%D0%B1%D1%89%D0%B5%D0%B5+%D0%BA%D0%BE%D0%BB%D0%B8%D1%87%D0%B5%D1%81%D1%82%D0%B2%D0%BE+%D1%82%D0%BE%D0%B2%D0%B0%D1%80%D0%BE%D0%B2+%D1%81+%D0%BE%D1%88%D0%B8%D0%B1%D0%BA%D0%B0%D0%BC%D0%B8%3A%3C%2Fb%3E+0+%3C%2Fbr%3E%22%2C%22attachmentsMessage%22%3A%22%3Cbr%3E%3Cb%3E%D0%A4%D0%B0%D0%B9%D0%BB%D1%8B+%D0%B7%D0%B0%D0%BD%D0%B8%D0%BC%D0%B0%D1%8E%D1%82+%D0%B1%D0%BE%D0%BB%D1%8C%D1%88%D0%B5+7%2C0+%D0%9C%D0%B1.+%D0%94%D0%BB%D1%8F+%D0%B8%D1%85+%D0%BF%D1%80%D0%BE%D1%81%D0%BC%D0%BE%D1%82%D1%80%D0%B0+%D0%BF%D0%B5%D1%80%D0%B5%D0%B9%D0%B4%D0%B8%D1%82%D0%B5+%D0%B2+%D0%B7%D0%B0%D1%8F%D0%B2%D0%BA%D1%83.%3C%2Fb%3E%22%7D'
                ],
                'httpResponse' => [
                    'headers' => [
                        'content-type' => [
                            'application/json; charset=UTF-8'
                        ]
                    ],
                    'body' => file_get_contents(__DIR__ . '/mock/Notifications/case1.json'),
                    'statusCode' => 200
                ],
            ],
        ],
        'provider_data' => [
            'pushToRabbit' => $withAttachments,
            'db' => [
                'lisa_fixtures' => [
                    'requests' => (include __DIR__ . '/fixture/case6.php')['lisa_fixtures']['requests'],
                    'requests_fields' => (include __DIR__ . '/fixture/case6.php')['lisa_fixtures']['requests_fields'],
                    'request_attachments' => (include __DIR__ . '/fixture/case6.php')['lisa_fixtures']['request_attachments'],
                    //пока пропускаем ошибку, она из-за того, что в минио не вставляются реальные файлы
                    'exceptions' => [
                        [
                            'message LIKE' => 'Error executing "HeadObject" %',
                        ],
                    ]
                ]
            ],
            'RabbitMQ' => [
                'lisa_sendMailNotifications' => [
                    $withAttachments[2],
                    $withAttachments[3],
                ],
                'lisa_sendOuterNotifications' => [],
                'lisa_saveFiles' => [],
            ],
            'RabbitMQWithRoutingKey' => [
                'lisa_common' => [],
            ],
        ]
    ],

    'case7' => [
        'setting' => [
            'description' => 'Удаление сообщения из очереди при переводе в статус 11, если файлы загрузились',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case7.php',
        'mock_data' => [
            'Notifications' => [
                'httpRequest' => [
                    'method' => 'POST',
                    'path' => '/v1/send',
                    'body' => 'event=lisa-send-email&from=gomer_services%40rozetka.com.ua&to=bpm_headSupervisor_1%40rozetka.com.ua&attrs=%7B%22subject%22%3A%22%5BLISA%5D+%D0%97%D0%B0%D1%8F%D0%B2%D0%BA%D0%B0+%E2%84%961+%60%D0%94%D0%BE%D0%B1%D0%B0%D0%B2%D0%BB%D0%B5%D0%BD%D0%B8%D0%B5+%D0%BD%D0%BE%D0%B2%D1%8B%D1%85+%D1%82%D0%BE%D0%B2%D0%B0%D1%80%D0%BE%D0%B2+%28%D0%A0%D0%B0%D0%B1%D0%BE%D1%82%D0%B0+%D1%81+%D1%82%D0%BE%D0%B2%D0%B0%D1%80%D0%B0%D0%BC%D0%B8+%D0%A0%D0%BE%D0%B7%D0%B5%D1%82%D0%BA%D0%B8%29%60+%D0%BF%D0%B5%D1%80%D0%B5%D1%88%D0%BB%D0%B0+%D0%B2+%D1%81%D1%82%D0%B0%D1%82%D1%83%D1%81+%60%D0%92%D1%8B%D0%BF%D0%BE%D0%BB%D0%BD%D0%B5%D0%BD%D0%B0%60%22%2C%22body%22%3A%22%D0%9A%D0%BE%D0%BD%D1%81%D1%82%D0%B0%D0%BD%D1%82%D0%B8%D0%BD+%D0%9A%D1%83%D1%86%D0%B0%D0%BD+%3Cb%3E%D0%BF%D0%B5%D1%80%D0%B5%D0%B2%D0%B5%D0%BB%28%D0%B0%29+%D0%B7%D0%B0%D1%8F%D0%B2%D0%BA%D1%83%3C%2Fb%3E+%3Ca+href%3D%5C%22http%3A%2F%2Fsplitter.docker%2Flisa%2F%23%2Frequest%2Fview%2F1%3FnotifyId%3D1%5C%22%3E%E2%84%961+%D0%94%D0%BE%D0%B1%D0%B0%D0%B2%D0%BB%D0%B5%D0%BD%D0%B8%D0%B5+%D0%BD%D0%BE%D0%B2%D1%8B%D1%85+%D1%82%D0%BE%D0%B2%D0%B0%D1%80%D0%BE%D0%B2+%28%D0%A0%D0%B0%D0%B1%D0%BE%D1%82%D0%B0+%D1%81+%D1%82%D0%BE%D0%B2%D0%B0%D1%80%D0%B0%D0%BC%D0%B8+%D0%A0%D0%BE%D0%B7%D0%B5%D1%82%D0%BA%D0%B8%29%3C%2Fa%3E+%5B%D0%A2%D0%BE%D0%B2%D0%B0%D1%80-%D0%BD%D0%BE%D0%B2%D0%B8%D0%BD%D0%BA%D0%B0%2F%D1%8D%D0%BA%D1%81%D0%BA%D0%BB%D1%8E%D0%B7%D0%B8%D0%B2+%28%D1%82%D1%80%D0%B0%D1%84%D0%B8%D0%BA%D0%BE%D0%BE%D0%B1%D1%80%D0%B0%D0%B7%D1%83%D1%8E%D1%89%D0%B8%D0%B9%29%5D+%D0%B2+%D1%81%D1%82%D0%B0%D1%82%D1%83%D1%81+%3Cb%3E%5C%22%D0%92%D1%8B%D0%BF%D0%BE%D0%BB%D0%BD%D0%B5%D0%BD%D0%B0%5C%22%3C%2Fb%3E+%3C%2Fbr%3E%3Cb%3E%D0%9A%D0%BE%D0%BB%D0%B8%D1%87%D0%B5%D1%81%D1%82%D0%B2%D0%BE+%D0%B2+%D1%80%D0%B0%D0%B1%D0%BE%D1%82%D1%83%3A%3C%2Fb%3E+10%3C%2Fbr%3E%3Cb%3E%D0%A0%D1%83%D1%87%D0%BD%D0%B0%D1%8F+%D0%B7%D0%B0%D0%B3%D1%80%D1%83%D0%B7%D0%BA%D0%B0%3A%3C%2Fb%3E+%D0%94%D0%B0+%3C%2Fbr%3E%3Cb%3E%D0%9F%D0%B0%D0%BA%D0%B5%D1%82%D0%BD%D0%B0%D1%8F+%D0%B7%D0%B0%D0%B3%D1%80%D1%83%D0%B7%D0%BA%D0%B0%3A%3C%2Fb%3E+%28%D0%BD%D0%B5+%D1%83%D0%BA%D0%B0%D0%B7%D0%B0%D0%BD%29+%3C%2Fbr%3E%3Cb%3E%D0%A3%D1%80%D0%BE%D0%B2%D0%B5%D0%BD%D1%8C+%D1%81%D0%BB%D0%BE%D0%B6%D0%BD%D0%BE%D1%81%D1%82%D0%B8+%D0%B7%D0%B0%D0%B4%D0%B0%D1%87%D0%B8%3A%3C%2Fb%3E+2+%3C%2Fbr%3E%3Cb%3E%D0%92%D0%B8%D0%B4+%D1%81%D1%82%D1%80%D1%83%D0%BA%D1%82%D1%83%D1%80%D1%8B%3A%3C%2Fb%3E+%28%D0%BD%D0%B5+%D1%83%D0%BA%D0%B0%D0%B7%D0%B0%D0%BD%29+%3C%2Fbr%3E%3Cb%3E%D0%A1%D0%BB%D0%BE%D0%B6%D0%BD%D0%BE%D1%81%D1%82%D1%8C+%D1%81%D1%82%D1%80%D1%83%D0%BA%D1%82%D1%83%D1%80%D1%8B%3A%3C%2Fb%3E+%28%D0%BD%D0%B5+%D1%83%D0%BA%D0%B0%D0%B7%D0%B0%D0%BD%29+%3C%2Fbr%3E%3Cb%3E%D0%9A%D0%BE%D1%8D%D1%84%D1%84%D0%B8%D1%86%D0%B8%D0%B5%D0%BD%D1%82+%D1%82%D0%B8%D0%BF%D0%B0+%D0%B7%D0%B0%D0%B4%D0%B0%D1%87%D0%B8%3A%3C%2Fb%3E+0.5+%3C%2Fbr%3E%3Cb%3E%D0%9A%D0%BE%D1%8D%D1%84%D1%84%D0%B8%D1%86%D0%B8%D0%B5%D0%BD%D1%82+%D1%83%D1%80%D0%BE%D0%B2%D0%BD%D1%8F+%D1%81%D0%BB%D0%BE%D0%B6%D0%BD%D0%BE%D1%81%D1%82%D0%B8+%D0%B7%D0%B0%D0%B4%D0%B0%D1%87%D0%B8%3A%3C%2Fb%3E+1.1+%3C%2Fbr%3E%3Cb%3E%D0%9A%D0%BE%D0%BB%D0%B8%D1%87%D0%B5%D1%81%D1%82%D0%B2%D0%BE+%D0%B8%D0%B7%D0%BC%D0%B5%D0%BD%D1%91%D0%BD%D0%BD%D1%8B%D1%85+%D1%82%D0%BE%D0%B2%D0%B0%D1%80%D0%BE%D0%B2%3A%3C%2Fb%3E+%28%D0%BD%D0%B5+%D1%83%D0%BA%D0%B0%D0%B7%D0%B0%D0%BD%29+%3C%2Fbr%3E%3Cb%3E%D0%9E%D0%B1%D1%89%D0%B5%D0%B5+%D0%BA%D0%BE%D0%BB%D0%B8%D1%87%D0%B5%D1%81%D1%82%D0%B2%D0%BE+%D0%BE%D1%88%D0%B8%D0%B1%D0%BE%D0%BA%3A%3C%2Fb%3E+0+%3C%2Fbr%3E%3Cb%3E%D0%9E%D0%B1%D1%89%D0%B5%D0%B5+%D0%BA%D0%BE%D0%BB%D0%B8%D1%87%D0%B5%D1%81%D1%82%D0%B2%D0%BE+%D1%82%D0%BE%D0%B2%D0%B0%D1%80%D0%BE%D0%B2+%D1%81+%D0%BE%D1%88%D0%B8%D0%B1%D0%BA%D0%B0%D0%BC%D0%B8%3A%3C%2Fb%3E+0+%3C%2Fbr%3E%22%2C%22attachmentsMessage%22%3A%22%3Cbr%3E%3Cb%3E%D0%A4%D0%B0%D0%B9%D0%BB%D1%8B+%D0%B7%D0%B0%D0%BD%D0%B8%D0%BC%D0%B0%D1%8E%D1%82+%D0%B1%D0%BE%D0%BB%D1%8C%D1%88%D0%B5+7%2C0+%D0%9C%D0%B1.+%D0%94%D0%BB%D1%8F+%D0%B8%D1%85+%D0%BF%D1%80%D0%BE%D1%81%D0%BC%D0%BE%D1%82%D1%80%D0%B0+%D0%BF%D0%B5%D1%80%D0%B5%D0%B9%D0%B4%D0%B8%D1%82%D0%B5+%D0%B2+%D0%B7%D0%B0%D1%8F%D0%B2%D0%BA%D1%83.%3C%2Fb%3E%22%7D'
                ],
                'httpResponse' => [
                    'headers' => [
                        'content-type' => [
                            'application/json; charset=UTF-8'
                        ]
                    ],
                    'body' => file_get_contents(__DIR__ . '/mock/Notifications/case1.json'),
                    'statusCode' => 200
                ],
            ],
        ],
        'provider_data' => [
            'pushToRabbit' => $withAttachments,
            'db' => [
                'lisa_fixtures' => [
                    'requests' => (include __DIR__ . '/fixture/case7.php')['lisa_fixtures']['requests'],
                    'requests_fields' => (include __DIR__ . '/fixture/case7.php')['lisa_fixtures']['requests_fields'],
                    'request_attachments' => (include __DIR__ . '/fixture/case7.php')['lisa_fixtures']['request_attachments'],
                    //пока пропускаем ошибку, она из-за того, что в минио не вставляются реальные файлы
                    'exceptions' => [
                        [
                            'message LIKE' => 'Error executing "HeadObject" %',
                        ],
                    ]
                ]
            ],
            'RabbitMQ' => [
                'lisa_sendMailNotifications' => [
                    $withAttachments[2],
                    $withAttachments[3],
                ],
                'lisa_sendOuterNotifications' => [],
                'lisa_saveFiles' => [],
            ],
            'RabbitMQWithRoutingKey' => [
                'lisa_common' => [],
            ],
        ]
    ],
    
];
