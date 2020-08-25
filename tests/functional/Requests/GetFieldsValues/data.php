<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Значения выпадающих списков полей результатов задачи в алфавитном порядке',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => 'bpm/request/view?id=2&forCrossCheck=0',
            "pageObjects" => [
                "canSee" => [
                    "Приоритет" => [
                        [
                            "selector" => "//select[@name='Request[priority]']/option[1][@value]",
                            "value" => "не указан"
                        ],
                        [
                            "selector" => "//select[@name='Request[priority]']/option[2][@value='4']",
                            "value" => "Группировка топовых позиций"
                        ],
                        [
                            "selector" => "//select[@name='Request[priority]']/option[3][@value='5']",
                            "value" => "Жалоба клиента (в соц сети, в КЦ, в магазине, руководству)"
                        ],
                        [
                            "selector" => "//select[@name='Request[priority]']/option[4][@value='3']",
                            "value" => "Значение (не использовать) в фильтре на сайте (и в карточках товаров)"
                        ],
                        [
                            "selector" => "//select[@name='Request[priority]']/option[5][@value='1']",
                            "value" => "Информация необходима для склада"
                        ],
                        [
                            "selector" => "//select[@name='Request[priority]']/option[6][@value='8']",
                            "value" => "Неправильные/Битые ссылки (порталы и фат-меню)"
                        ],
                        [
                            "selector" => "//select[@name='Request[priority]']/option[7][@value='7']",
                            "value" => "Приоритетный продавец (ТОП)"
                        ],
                        [
                            "selector" => "//select[@name='Request[priority]']/option[8][@value='6']",
                            "value" => "Сезонные товары"
                        ],
                        [
                            "selector" => "//select[@name='Request[priority]']/option[9][@value='2' and @selected]",
                            "value" => "Товар-новинка/эксклюзив (трафикообразующий)"
                        ],
                    ],
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
                    "На доработку" => [
                        [
                            "selector" => "//form[@id='reason-form-status-3']//select[@name='Request[reason_id]']/option[1][@value]",
                            "value" => "Выберите причину из списка.."
                        ],
                        [
                            "selector" => "//form[@id='reason-form-status-3']//select[@name='Request[reason_id]']/option[2][@value='15']",
                            "value" => "Другое (описан в коментариях)"
                        ],
                    ],
                ],
                "cantSee" => [
                ]
            ]
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Значения выпадающих списков модалок перевода в другой статус в алфавитном порядке',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => 'bpm/request/view?id=1&forCrossCheck=0',
            "pageObjects" => [
                "canSee" => [
                    "Ожидать" => [
                        [
                            "selector" => "//form[@id='reason-form-status-7']//select[@name='Request[reason_id]']/option[1][@value]",
                            "value" => "Выберите причину из списка..."
                        ],
                        [
                            "selector" => "//form[@id='reason-form-status-7']//select[@name='Request[reason_id]']/option[2][@value='15']",
                            "value" => "Другое (описан в коментариях)"
                        ],
                        [
                            "selector" => "//form[@id='reason-form-status-7']//select[@name='Request[reason_id]']/option[3][@value='3']",
                            "value" => "Изменен приоритет задачи"
                        ],
                        [
                            "selector" => "//form[@id='reason-form-status-7']//select[@name='Request[reason_id]']/option[4][@value='4']",
                            "value" => "Ожидается загрузка товаров в систему"
                        ],
                        [
                            "selector" => "//form[@id='reason-form-status-7']//select[@name='Request[reason_id]']/option[5][@value='1']",
                            "value" => "Ожидается загрузка фото в товары"
                        ],
                        [
                            "selector" => "//form[@id='reason-form-status-7']//select[@name='Request[reason_id]']/option[6][@value='2']",
                            "value" => "Требуется уточнение информации по задаче"
                        ],
                    ],
                    "Отменить" => [
                        [
                            "selector" => "//form[@id='reason-form-status-4']//select[@name='Request[reason_id]']/option[1][@value]",
                            "value" => "Выберите причину из списка..."
                        ],
                        [
                            "selector" => "//form[@id='reason-form-status-4']//select[@name='Request[reason_id]']/option[2][@value='10']",
                            "value" => "Все товары уже есть на сайте"
                        ],
                        [
                            "selector" => "//form[@id='reason-form-status-4']//select[@name='Request[reason_id]']/option[3][@value='15']",
                            "value" => "Другое (описан в коментариях)"
                        ],
                        [
                            "selector" => "//form[@id='reason-form-status-4']//select[@name='Request[reason_id]']/option[4][@value='9']",
                            "value" => "Дубль задачи"
                        ],
                    ],
                    "Частично выполнена" => [
                        [
                            "selector" => "//form[@id='complete-modal-form-8']//select[@name='Request[reason_id]']/option[1][@value]",
                            "value" => "Выберите причину из списка.."
                        ],
                        [
                            "selector" => "//form[@id='complete-modal-form-8']//select[@name='Request[reason_id]']/option[2][@value='15']",
                            "value" => "Другое (описан в коментариях)"
                        ],
                        [
                            "selector" => "//form[@id='complete-modal-form-8']//select[@name='Request[reason_id]']/option[3][@value='6']",
                            "value" => "Не получена запрошенная недостающая информация"
                        ],
                        [
                            "selector" => "//form[@id='complete-modal-form-8']//select[@name='Request[reason_id]']/option[4][@value='7']",
                            "value" => "Товары ушли в ошибки"
                        ],
                    ],
                ],
                "cantSee" => [
                ]
            ]
        ]
    ],

];
