<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Значения выпадающих списков полей результатов задачи в алфавитном порядке + показываются заблоченные',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => 'bpm/request/view?id=2&forCrossCheck=0',
            "pageObjects" => [
                "canSee" => [
                    "Наличие характеристик к товарам" => [
                        [
                            "selector" => "//select[@name='RequestField[21]']/option[1][@value]",
                            "value" => "не задано"
                        ],
                        [
                            "selector" => "//select[@name='RequestField[21]']/option[2][@value='4']",
                            "value" => "Не предоставлены продактом. Выполнен поиск."
                        ],
                        [
                            "selector" => "//select[@name='RequestField[21]']/option[3][@value='1']",
                            "value" => "Предоставлены продактом"
                        ],
                        [
                            "selector" => "//select[@name='RequestField[21]']/option[4][@value='2']",
                            "value" => "Предоставлены продактом частично. Без дополнительного поиска."
                        ],
                        [
                            "selector" => "//select[@name='RequestField[21]']/option[5][@value='3']",
                            "value" => "Предоставлены продактом частично. С дополнительным поиском."
                        ],
                        [
                            "selector" => "//select[@name='RequestField[21]']/option[6][@value='5' and @disabled]",
                            "value" => "Характеристики добавлены с обновлением фото/описания"
                        ],
                    ],
                    "Наличие описаний к товарам" => [
                        [
                            "selector" => "//select[@name='RequestField[23]']/option[1][@value]",
                            "value" => "не задано"
                        ],
                        [
                            "selector" => "//select[@name='RequestField[23]']/option[2][@value='14' and @disabled]",
                            "value" => "Не предоставлены продактом. Выполнен поиск."
                        ],
                        [
                            "selector" => "//select[@name='RequestField[23]']/option[3][@value='11']",
                            "value" => "Предоставлены продактом"
                        ],
                        [
                            "selector" => "//select[@name='RequestField[23]']/option[4][@value='12']",
                            "value" => "Предоставлены продактом частично. Без дополнительного поиска."
                        ],
                        [
                            "selector" => "//select[@name='RequestField[23]']/option[5][@value='13']",
                            "value" => "Предоставлены продактом частично. С дополнительным поиском."
                        ],
                    ],
                    "Наличие фото к товарам" => [
                        [
                            "selector" => "//select[@name='RequestField[22]']/option[1][@value]",
                            "value" => "не задано"
                        ],
                        [
                            "selector" => "//select[@name='RequestField[22]']/option[2][@value='9']",
                            "value" => "Не предоставлены продактом. Выполнен поиск."
                        ],
                        [
                            "selector" => "//select[@name='RequestField[22]']/option[3][@value='6']",
                            "value" => "Предоставлены продактом"
                        ],
                        [
                            "selector" => "//select[@name='RequestField[22]']/option[4][@value='7']",
                            "value" => "Предоставлены продактом частично. Без дополнительного поиска."
                        ],
                        [
                            "selector" => "//select[@name='RequestField[22]']/option[5][@value='8']",
                            "value" => "Предоставлены продактом частично. С дополнительным поиском."
                        ],
                        [
                            "selector" => "//select[@name='RequestField[22]']/option[6][@value='10' and @disabled]",
                            "value" => "Фото предоставлены фотостудией"
                        ],
                    ],
                    "Обработка фото" => [
                        [
                            "selector" => "//select[@name='RequestField[24]']/option[1][@value]",
                            "value" => "не задано"
                        ],
                        [
                            "selector" => "//select[@name='RequestField[24]']/option[2][@value='15']",
                            "value" => "Без обработки (только кадрирование)"
                        ],
                        [
                            "selector" => "//select[@name='RequestField[24]']/option[3][@value='17' and @disabled]",
                            "value" => "Удаление теней/фона/ватермарков/цветокорекция"
                        ],
                        [
                            "selector" => "//select[@name='RequestField[24]']/option[4][@value='16']",
                            "value" => "Удаление теней/фона (простая обработка)"
                        ],
                    ],
                    "Видео к товарам" => [
                        [
                            "selector" => "//select[@name='RequestField[27]']/option[1][@value]",
                            "value" => "не задано"
                        ],
                        [
                            "selector" => "//select[@name='RequestField[27]']/option[2][@value='25']",
                            "value" => "Добавлено по собственной инициативе"
                        ],
                        [
                            "selector" => "//select[@name='RequestField[27]']/option[3][@value='24']",
                            "value" => "Предоставлено продактом"
                        ],
                        [
                            "selector" => "//select[@name='RequestField[27]']/option[4][@value='26' and @disabled]",
                            "value" => "Предоставлено продактом, в плохом качестве (производился поиск)"
                        ],
                    ],
                    "Группировка товаров (наличие варьируемых параметров)" => [
                        [
                            "selector" => "//select[@name='RequestField[31]']/option[1][@value]",
                            "value" => "не задано"
                        ],
                        [
                            "selector" => "//select[@name='RequestField[31]']/option[2][@value='48']",
                            "value" => "Без варьируемого параметра"
                        ],
                        [
                            "selector" => "//select[@name='RequestField[31]']/option[3][@value='50']",
                            "value" => "Два варьируемых параметра"
                        ],
                        [
                            "selector" => "//select[@name='RequestField[31]']/option[4][@value='49']",
                            "value" => "Один варьируемый параметр"
                        ],
                        [
                            "selector" => "//select[@name='RequestField[31]']/option[5][@value='51' and @disabled]",
                            "value" => "Три варьируемых параметра"
                        ],
                    ],
                    "Уточнения. Количество уточнений у автора." => [
                        [
                            "selector" => "//select[@name='RequestField[25]']/option[1][@value]",
                            "value" => "не задано"
                        ],
                        [
                            "selector" => "//select[@name='RequestField[25]']/option[2][@value='18']",
                            "value" => "Без уточнений"
                        ],
                        [
                            "selector" => "//select[@name='RequestField[25]']/option[3][@value='20' and @disabled]",
                            "value" => "Более 5 уточнений"
                        ],
                        [
                            "selector" => "//select[@name='RequestField[25]']/option[4][@value='19']",
                            "value" => "Менее 5 уточнений"
                        ],
                    ],
                    "Язык информации" => [
                        [
                            "selector" => "//select[@name='RequestField[26]']/option[1][@value]",
                            "value" => "не задано"
                        ],
                        [
                            "selector" => "//select[@name='RequestField[26]']/option[2][@value='23' and @disabled]",
                            "value" => "Английский"
                        ],
                        [
                            "selector" => "//select[@name='RequestField[26]']/option[3][@value='21']",
                            "value" => "Русский"
                        ],
                        [
                            "selector" => "//select[@name='RequestField[26]']/option[4][@value='22']",
                            "value" => "Украинский"
                        ],
                    ],
                    "Отчетный период КМ" => [
                        [
                            "selector" => "//select[@name='Request[report_period_id]']/option[1][@value]",
                            "value" => "Отчетный период КМ не задан..."
                        ],
                        [
                            "selector" => "//select[@name='Request[report_period_id]']/option[2][@value='1' and not(@selected)]",
                            "value" => "2020-01-01 - 2020-03-31"
                        ],
                        [
                            "selector" => "//select[@name='Request[report_period_id]']/option[3][@value='2' and not(@selected)]",
                            "value" => "2020-04-01 - 2020-06-30"
                        ],
                        [
                            "selector" => "//select[@name='Request[report_period_id]']/option[4][@value='3' and not(@selected)]",
                            "value" => "2020-07-01 - 2020-09-30"
                        ],
                        [
                            "selector" => "//select[@name='Request[report_period_id]']/option[5][@value='4' and not(@selected)]",
                            "value" => "2020-10-01 - 2020-12-31"
                        ],
                    ],
                    "Отчетный период СВ" => [
                        [
                            "selector" => "//select[@name='Request[sv_report_periods][]']/option[1][@value='1' and @selected]",
                            "value" => "2020-01-01 - 2020-03-31"
                        ],
                        [
                            "selector" => "//select[@name='Request[sv_report_periods][]']/option[2][@value='2' and not(@selected)]",
                            "value" => "2020-04-01 - 2020-06-30"
                        ],
                        [
                            "selector" => "//select[@name='Request[sv_report_periods][]']/option[3][@value='3' and not(@selected)]",
                            "value" => "2020-07-01 - 2020-09-30"
                        ],
                        [
                            "selector" => "//select[@name='Request[sv_report_periods][]']/option[4][@value='4' and not(@selected)]",
                            "value" => "2020-10-01 - 2020-12-31"
                        ],
                    ],
                ],
            ]
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Значения выпадающих списков полей структуры и сложности в алфавитном порядке + показываются заблоченные',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => 'bpm/request/view?id=1&forCrossCheck=0',
            "pageObjects" => [
                "canSee" => [
                    "Вид структуры" => [
                        [
                            "selector" => "//select[@name='RequestField[29]']/option[1][@value]",
                            "value" => "не задано"
                        ],
                        [
                            "selector" => "//select[@name='RequestField[29]']/option[2][@value='31']",
                            "value" => "Новые категории промежуточных уровней/автопорталы"
                        ],
                        [
                            "selector" => "//select[@name='RequestField[29]']/option[3][@value='32']",
                            "value" => "Новые конечные категории"
                        ],
                        [
                            "selector" => "//select[@name='RequestField[29]']/option[4][@value='30']",
                            "value" => "Новые разделы (категории верхнего уровня, второго за верхним уровня)"
                        ],
                        [
                            "selector" => "//select[@name='RequestField[29]']/option[5][@value='34']",
                            "value" => "Существующие категории промежуточных уровней/автопорталы"
                        ],
                        [
                            "selector" => "//select[@name='RequestField[29]']/option[6][@value='37']",
                            "value" => "Существующие категории промежуточных уровней/автопорталы + перенос информации"
                        ],
                        [
                            "selector" => "//select[@name='RequestField[29]']/option[7][@value='35']",
                            "value" => "Существующие конечные категории"
                        ],
                        [
                            "selector" => "//select[@name='RequestField[29]']/option[8][@value='38' and @disabled]",
                            "value" => "Существующие конечные категории + перенос информации"
                        ],
                        [
                            "selector" => "//select[@name='RequestField[29]']/option[9][@value='33']",
                            "value" => "Существующие разделы (категории верхнего уровня, второго за верхним уровня)"
                        ],
                        [
                            "selector" => "//select[@name='RequestField[29]']/option[10][@value='36']",
                            "value" => "Существующие разделы (категории верхнего уровня, второго за верхним уровня) + перенос информации"
                        ],
                    ],
                    "Сложность структуры" => [
                        [
                            "selector" => "//select[@name='RequestField[30]']/option[1][@value]",
                            "value" => "не задано"
                        ],
                        [
                            "selector" => "//select[@name='RequestField[30]']/option[2][@value='39']",
                            "value" => "Простые (физические характеристики)"
                        ],
                        [
                            "selector" => "//select[@name='RequestField[30]']/option[3][@value='40']",
                            "value" => "Простые (физические характеристики) 1 вид товара"
                        ],
                        [
                            "selector" => "//select[@name='RequestField[30]']/option[4][@value='41']",
                            "value" => "Простые (физические характеристики) несколько видов товара"
                        ],
                        [
                            "selector" => "//select[@name='RequestField[30]']/option[5][@value='45']",
                            "value" => "Сложные (физические + функциональные + технологические характеристики)"
                        ],
                        [
                            "selector" => "//select[@name='RequestField[30]']/option[6][@value='46']",
                            "value" => "Сложные (физические + функциональные + технологические характеристики) 1 вид товара"
                        ],
                        [
                            "selector" => "//select[@name='RequestField[30]']/option[7][@value='47' and @disabled]",
                            "value" => "Сложные (физические + функциональные + технологические характеристики) несколько видов товара"
                        ],
                        [
                            "selector" => "//select[@name='RequestField[30]']/option[8][@value='42']",
                            "value" => "Средней сложности (физические + функциональные характеристики)"
                        ],
                        [
                            "selector" => "//select[@name='RequestField[30]']/option[9][@value='43']",
                            "value" => "Средней сложности (физические + функциональные характеристики) 1 вид товара"
                        ],
                        [
                            "selector" => "//select[@name='RequestField[30]']/option[10][@value='44']",
                            "value" => "Средней сложности (физические + функциональные характеристики) несколько видов товара"
                        ],
                    ],
                ],
            ]
        ]
    ],

    'case3' => [
        'setting' => [
            'description' => 'Значения выпадающих списков пакетного редактирования в алфавитном порядке + не показываются заблоченные',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => 'bpm/request/in-check',
            "pageObjects" => [
                "canSee" => [
                    "Вид структуры" => [
                        [
                            "selector" => "//form[@id='mass-edit-form']//select[@name='RequestField[29]']/option[1][@value]",
                            "value" => "Выберите Вид структуры..."
                        ],
                        [
                            "selector" => "//form[@id='mass-edit-form']//select[@name='RequestField[29]']/option[2][@value='31']",
                            "value" => "Новые категории промежуточных уровней/автопорталы"
                        ],
                        [
                            "selector" => "//form[@id='mass-edit-form']//select[@name='RequestField[29]']/option[3][@value='32']",
                            "value" => "Новые конечные категории"
                        ],
                        [
                            "selector" => "//form[@id='mass-edit-form']//select[@name='RequestField[29]']/option[4][@value='30']",
                            "value" => "Новые разделы (категории верхнего уровня, второго за верхним уровня)"
                        ],
                        [
                            "selector" => "//form[@id='mass-edit-form']//select[@name='RequestField[29]']/option[5][@value='34']",
                            "value" => "Существующие категории промежуточных уровней/автопорталы"
                        ],
                        [
                            "selector" => "//form[@id='mass-edit-form']//select[@name='RequestField[29]']/option[6][@value='37']",
                            "value" => "Существующие категории промежуточных уровней/автопорталы + перенос информации"
                        ],
                        [
                            "selector" => "//form[@id='mass-edit-form']//select[@name='RequestField[29]']/option[7][@value='35']",
                            "value" => "Существующие конечные категории"
                        ],
                        [
                            "selector" => "//form[@id='mass-edit-form']//select[@name='RequestField[29]']/option[8][@value='33']",
                            "value" => "Существующие разделы (категории верхнего уровня, второго за верхним уровня)"
                        ],
                        [
                            "selector" => "//form[@id='mass-edit-form']//select[@name='RequestField[29]']/option[9][@value='36']",
                            "value" => "Существующие разделы (категории верхнего уровня, второго за верхним уровня) + перенос информации"
                        ],
                    ],
                    "Сложность структуры" => [
                        [
                            "selector" => "//form[@id='mass-edit-form']//select[@name='RequestField[30]']/option[1][@value]",
                            "value" => "Выберите Сложность структуры..."
                        ],
                        [
                            "selector" => "//form[@id='mass-edit-form']//select[@name='RequestField[30]']/option[2][@value='39']",
                            "value" => "Простые (физические характеристики)"
                        ],
                        [
                            "selector" => "//form[@id='mass-edit-form']//select[@name='RequestField[30]']/option[3][@value='40']",
                            "value" => "Простые (физические характеристики) 1 вид товара"
                        ],
                        [
                            "selector" => "//form[@id='mass-edit-form']//select[@name='RequestField[30]']/option[4][@value='41']",
                            "value" => "Простые (физические характеристики) несколько видов товара"
                        ],
                        [
                            "selector" => "//form[@id='mass-edit-form']//select[@name='RequestField[30]']/option[5][@value='45']",
                            "value" => "Сложные (физические + функциональные + технологические характеристики)"
                        ],
                        [
                            "selector" => "//form[@id='mass-edit-form']//select[@name='RequestField[30]']/option[6][@value='46']",
                            "value" => "Сложные (физические + функциональные + технологические характеристики) 1 вид товара"
                        ],
                        [
                            "selector" => "//form[@id='mass-edit-form']//select[@name='RequestField[30]']/option[7][@value='42']",
                            "value" => "Средней сложности (физические + функциональные характеристики)"
                        ],
                        [
                            "selector" => "//form[@id='mass-edit-form']//select[@name='RequestField[30]']/option[8][@value='43']",
                            "value" => "Средней сложности (физические + функциональные характеристики) 1 вид товара"
                        ],
                        [
                            "selector" => "//form[@id='mass-edit-form']//select[@name='RequestField[30]']/option[9][@value='44']",
                            "value" => "Средней сложности (физические + функциональные характеристики) несколько видов товара"
                        ],
                    ],
                    "Сложность группировки в заявках" => [
                        [
                            "selector" => "//form[@id='mass-edit-form']//select[@name='RequestField[32]']/option[1][@value]",
                            "value" => "Выберите Сложность группировки в заявках..."
                        ],
                        [
                            "selector" => "//form[@id='mass-edit-form']//select[@name='RequestField[32]']/option[2][@value='52']",
                            "value" => "Готовый файл для группировки"
                        ],
                        [
                            "selector" => "//form[@id='mass-edit-form']//select[@name='RequestField[32]']/option[3][@value='54']",
                            "value" => "Очевидные товары для группировки (больше 3-х категорий)"
                        ],
                        [
                            "selector" => "//form[@id='mass-edit-form']//select[@name='RequestField[32]']/option[4][@value='53']",
                            "value" => "Очевидные товары для группировки (до 3-х категорий)"
                        ],
                        [
                            "selector" => "//form[@id='mass-edit-form']//select[@name='RequestField[32]']/option[5][@value='58']",
                            "value" => "Очевидные товары для группировки + Наличие товаров без необходимых варьируемых параметров (больше 3-х категорий)"
                        ],
                        [
                            "selector" => "//form[@id='mass-edit-form']//select[@name='RequestField[32]']/option[6][@value='57']",
                            "value" => "Очевидные товары для группировки + Наличие товаров без необходимых варьируемых параметров (до 3-х категорий)"
                        ],
                        [
                            "selector" => "//form[@id='mass-edit-form']//select[@name='RequestField[32]']/option[7][@value='56']",
                            "value" => "Сложные товары для группировки (больше 3-х категорий)"
                        ],
                        [
                            "selector" => "//form[@id='mass-edit-form']//select[@name='RequestField[32]']/option[8][@value='55']",
                            "value" => "Сложные товары для группировки (до 3-х категорий)"
                        ],
                        [
                            "selector" => "//form[@id='mass-edit-form']//select[@name='RequestField[32]']/option[9][@value='59']",
                            "value" => "Сложные товары для группировки + Наличие товаров без необходимых варьируемых параметров (до 3-х категорий)"
                        ],
                    ],
                ],
            ]
        ]
    ],

];