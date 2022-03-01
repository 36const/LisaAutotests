<?php

use lisa\Constants;

return [
    'case1' => [
        'setting' => [
            'description' => 'Добавление файлов в заявку без вложений',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'copyCommand' => [
                'Attachments/194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd' => Constants::TEMP_FILES_DIR . '1631802792673/803902_194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd',
                'Attachments/doc\ .doc' => Constants::TEMP_FILES_DIR . '1631802792673/803902_doc\ .doc',
                'Attachments/pptx_абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїі.pptx' => Constants::TEMP_FILES_DIR . '1631802792673/803902_pptx_абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїі.pptx',
                'Attachments/~!@#$%^\&*\(\)_+\`-=][\\\'\;\.\|\}\{\:\?\>\<.jpg' => Constants::TEMP_FILES_DIR . '1631802792673/803902_~!@#$%^\&*\(\)_+\`-=][\\\'\;\.\|\}\{\:\?\>\<.jpg',
            ],
            'message' => '[{"folder":"1631802792673","fileName":"803902_194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd","alias":"194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd","size":"60424","attachment":{"id":1,"request_id":1,"file_name_old":"","alias":"194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd","status":3,"uploaded_by":"Константин Куцан","uploaded_at":null,"deleted_by":null,"deleted_at":null,"file_name":"803902_194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd","size":60424}},' .
                '{"folder":"1631802792673","fileName":"803902_doc .doc","alias":"doc .doc","size":"34304","attachment":{"id":2,"request_id":1,"file_name_old":"","alias":"doc .doc","status":3,"uploaded_by":"Константин Куцан","uploaded_at":null,"deleted_by":null,"deleted_at":null,"file_name":"803902_doc.doc","size":34304}},' .
                '{"folder":"1631802792673","fileName":"803902_pptx_абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїі.pptx","alias":"pptx_абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїі.pptx","size":"97152","attachment":{"id":3,"request_id":1,"file_name_old":"","alias":"pptx_абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїі.pptx","status":3,"uploaded_by":"Константин Куцан","uploaded_at":null,"deleted_by":null,"deleted_at":null,"file_name":"803902_pptx_abvgdeezzijklmnoprstufhccssyeuaegii.pptx","size":97152}},' .
                '{"folder":"1631802792673","fileName":"803902_~!@#$%^&*()_+`-=][\';.|}{:?><.jpg","alias":"!@#$%^&*()_+`-=][\';.|}{:?><.jpg","size":"34304","attachment":{"id":4,"request_id":1,"file_name_old":"","alias":"!@#$%^&*()_+`-=][\';.|}{:?><.jpg","status":3,"uploaded_by":"Константин Куцан","uploaded_at":null,"deleted_by":null,"deleted_at":null,"file_name":"803902_~!@#$%^&*()_+`-=][;.|}{:?><.jpg","size":34304}}]',
            'savedFiles' => [
                '803902_194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd',
                '803902_doc.doc',
                '803902_pptx_abvgdeezzijklmnoprstufhccssyeuaegii.pptx',
                '803902_~!@#$%^&*\.|}\{:?><.jpg',
            ],
            'db' => [
                'lisa_fixtures' => [
                    'request_attachments' => array_replace_recursive(
                        (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['request_attachments'],
                        [
                            [
                                'id' => 1,
                                'status' => 2,
                            ],
                            [
                                'id' => 2,
                                'status' => 2,
                            ],
                            [
                                'id' => 3,
                                'status' => 2,
                            ],
                            [
                                'id' => 4,
                                'status' => 2,
                            ],
                        ],
                    )
                ]
            ],
            'RabbitMQ' => [
                'lisa_saveFiles' => [],
            ],
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Добавление файлов в заявку с вложениями',
            //два файла с таким же именем, два файлы с другим
        ],
        'fixture_data' => include __DIR__ . '/fixture/case2.php',
        'provider_data' => [
            'copyCommand' => [
                'Attachments/194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd ' => Constants::MINIO_DIR . '803902_194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd',
                'Attachments/doc\ .doc ' => Constants::MINIO_DIR . '803902_doc.doc',
                'Attachments/pptx_абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїі.pptx' => Constants::MINIO_DIR . '803902_pptx_абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїі.pptx',
                'Attachments/~!@#$%^\&*\(\)_+\`-=][\\\'\;\.\|\}\{\:\?\>\<.jpg' => Constants::MINIO_DIR . '803902_~!@#$%^\&*\(\)_+\`-=][\\\'\;\.\|\}\{\:\?\>\<.jpg',
                'Attachments/194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd' => Constants::TEMP_FILES_DIR . '1631802792673/1234567_194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd',
                'Attachments/doc\ .doc' => Constants::TEMP_FILES_DIR . '1631802792673/1234567_doc\ .doc',
                'Attachments/mp3.mp3' => Constants::TEMP_FILES_DIR . '1631802792673/1234567_mp3.mp3',
                'Attachments/zip1.zip' => Constants::TEMP_FILES_DIR . '1631802792673/1234567_zip1.zip',
            ],
            'message' => '[{"folder":"1631802792673","fileName":"1234567_194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd","alias":"194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd","size":"60424","attachment":{"id":5,"request_id":1,"file_name_old":"","alias":"194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd","status":3,"uploaded_by":"Константин Куцан","uploaded_at":null,"deleted_by":null,"deleted_at":null,"file_name":"1234567_194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd","size":60424}},' .
                '{"folder":"1631802792673","fileName":"1234567_doc .doc","alias":"doc .doc","size":"34304","attachment":{"id":6,"request_id":1,"file_name_old":"","alias":"doc .doc","status":3,"uploaded_by":"Константин Куцан","uploaded_at":null,"deleted_by":null,"deleted_at":null,"file_name":"1234567_doc.doc","size":34304}},' .
                '{"folder":"1631802792673","fileName":"1234567_mp3.mp3","alias":"mp3.mp3","size":"97152","attachment":{"id":7,"request_id":1,"file_name_old":"","alias":"mp3.mp3","status":3,"uploaded_by":"Константин Куцан","uploaded_at":null,"deleted_by":null,"deleted_at":null,"file_name":"1234567_mp3.mp3","size":97152}},' .
                '{"folder":"1631802792673","fileName":"1234567_zip1.zip","alias":"zip1.zip","size":"34304","attachment":{"id":8,"request_id":1,"file_name_old":"","alias":"zip1.zip","status":3,"uploaded_by":"Константин Куцан","uploaded_at":null,"deleted_by":null,"deleted_at":null,"file_name":"1234567_zip1.zip","size":34304}}]',
            'savedFiles' => [
                '803902_194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd',
                '803902_doc.doc',
                '803902_pptx_абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїі.pptx',
                '803902_~!@#$%^&*\.|}\{:?><.jpg',
                '1234567_194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd',
                '1234567_doc.doc',
                '1234567_mp3.mp3',
                '1234567_zip1.zip',
            ],
            'db' => [
                'lisa_fixtures' => [
                    'request_attachments' => array_replace_recursive(
                        (include __DIR__ . '/fixture/case2.php')['lisa_fixtures']['request_attachments'],
                        [
                            4 => [
                                'id' => 5,
                                'status' => 2,
                            ],
                            5 => [
                                'id' => 6,
                                'status' => 2,
                            ],
                            6 => [
                                'id' => 7,
                                'status' => 2,
                            ],
                            7 => [
                                'id' => 8,
                                'status' => 2,
                            ],
                        ]
                    ),
                ]
            ],
            'RabbitMQ' => [
                'lisa_saveFiles' => [],
            ],
        ]
    ],

];
