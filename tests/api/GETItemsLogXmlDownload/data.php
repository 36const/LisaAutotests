<?php

return [
    'case1' => [
        'setting' => [
            // mc-3524 Получение контента прайслиста
            'description' => 'case1 позитивный, ожидаем 200 ОК. Передаем обязательные парметры: hash(String)',
            'scenario' => 'positive',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'query_params' => [
                "hash" => 'GorjvUr72k5aoS2-QP0-V4kMJRfLXF7u0eQbMk2hLv6WJhWd7Q',
            ],
            'responseCode' => 200,
            "fields" => [
                ////
                "data" => [
                    "fileData" => [
                        "fileContent" => '<yml_catalog date="2018-12-13 12:41:01">
    <shop>
        <currencies>
            <currency id="UAH" rate="1"/>
        </currencies>
        <categories>
            <category id="4653010">Надувная мебель и аксессуары</category>
            <category id="001988">Наушники</category>
        </categories>
        <offers>
            <offer id="10" available="true">
                <price>111</price>
                <currencyId>UAH</currencyId>
                <categoryId>4653010</categoryId>
                <picture>
                    http://namak.com.ua/assets/images/white/85_4000x_1469517825.jpg
                </picture>
                <name>Надувной гамак Намак Красный</name>
                <vendor>casio</vendor>
                <description>какое-то описание</description>
                <param name="Вид">Надувные гамаки</param>
                <param name="Габариты в сложеном виде">15 x 10 x 35 см</param>
            </offer>

            <offer id="11" available="true">
                <price>850</price>
                <currencyId>UAH</currencyId>
                <categoryId>001988</categoryId>
                <picture>
                    http://rebx.96.lt/image/catalog/12345/46996744_images_5924575136.jpg
                </picture>
                <name>Беспроводные Bluetooth наушники HBQ i8x Сharging Box</name>
                <vendor>HBQ</vendor>
                <description>
                    <![CDATA[ <h3>какое-то<br>описание</h3> ]]>
                </description>
                <param name="Тип наушников">Вкладыши</param>
                <param name="Тип подключения">Беспроводное</param>
            </offer>

        </offers>
    </shop>
</yml_catalog>
',
                        "fileName" => "2020-02-07 18:31:05.xml"
                    ],
                ]
            ],
        ],
    ],

    'case2' => [
        'setting' => [
            // mc-3524 Получение контента прайслиста
            'description' => 'case2 негативный, ожидаем 500. Передаем НЕсуществующий обязательный парметр: hash(String)',
            'scenario' => 'negative',
        ],
//    'fixture_data' => include __DIR__ . '/fixture/case2.php',
        'provider_data' => [
            'query_params' => [
                "hash" => 'GorjvUr72k5aoS2-QP0-V4kMJRfLXF7u0eQbMk2hLv6WJhW111',
            ],
            'responseCode' => 500,
            "fields" => [
                "errors" => [
                    "code" => 0,
                    "message" => "Unknown error",
//                    "error_guid" => "4c88bf36-2460-4938-9e7e-2faa1301c6f0",
                    "exception_message" => "Log is empty (log.price_validate table), file content is not available.",
//                    "exception_file" => "/var/www/gomer.local/www/vendor/splitter-modules/market.gomer/submodules/api/controllers/pricevalidator/ItemsLogXmlController.php",
                    "exception_line" => 50,
//                    "trace" => 'trace...'
                ]
            ],
        ],
    ],


    'case3' => [
        'setting' => [
            // mc-3524 Получение контента прайслиста
            'description' => 'case3 негативный, ожидаем 400. НЕпередаем обязательный парметр: hash(String)',
            'scenario' => 'negative',
        ],
//    'fixture_data' => include __DIR__ . '/fixture/case3.php',
        'provider_data' => [
            'query_params' => [
            ],
            'responseCode' => 400,
            "fields" => [
                "errors" => [
                    "code" => 0,
                    "message" => "Отсутствуют обязательные параметры: hash",
//                    "error_guid" => "4c88bf36-2460-4938-9e7e-2faa1301c6f0",
                    "exception_message" => "Отсутствуют обязательные параметры: hash",
//                    "exception_file" => "/var/www/gomer.local/www/vendor/yiisoft/yii2/web/Controller.php",
                    "exception_line" => 170,
//                    "trace" => 'trace...'
                ]
            ],
        ],
    ],
];