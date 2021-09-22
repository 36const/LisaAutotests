<?php

namespace lisa;

class Constants
{
    public const PARAMS_LOCAL = './config/params.php';

    public const REDIS_KEYS_VALUES = [
        'active_category_ids5ec4d878ccfce7dc3c19481d6a063478' => 'a:2:{i:0;a:3:{i:0;i:1;i:1;i:2;i:2;i:474;}i:1;N;}',
        'all_category_namesfa94761536e04215430d7de0b502b16e' => 'value',
        'all_excluded_fields280d3acd22e0ce237b19d4aea2c1d44b' =>
            'a:2:{i:0;a:99:{' .
            'i:0;a:2:{s:8:\"field_id\";i:1;s:17:\"excluded_field_id\";i:2;}' .
            'i:1;a:2:{s:8:\"field_id\";i:10;s:17:\"excluded_field_id\";i:11;}' .
            'i:2;a:2:{s:8:\"field_id\";i:10;s:17:\"excluded_field_id\";i:5;}' .
            'i:3;a:2:{s:8:\"field_id\";i:10;s:17:\"excluded_field_id\";i:6;}' .
            'i:4;a:2:{s:8:\"field_id\";i:10;s:17:\"excluded_field_id\";i:7;}' .
            'i:5;a:2:{s:8:\"field_id\";i:10;s:17:\"excluded_field_id\";i:8;}' .
            'i:6;a:2:{s:8:\"field_id\";i:10;s:17:\"excluded_field_id\";i:9;}' .
            'i:7;a:2:{s:8:\"field_id\";i:10;s:17:\"excluded_field_id\";i:12;}' .
            'i:8;a:2:{s:8:\"field_id\";i:10;s:17:\"excluded_field_id\";i:14;}' .
            'i:9;a:2:{s:8:\"field_id\";i:10;s:17:\"excluded_field_id\";i:15;}' .
            'i:10;a:2:{s:8:\"field_id\";i:10;s:17:\"excluded_field_id\";i:16;}' .
            'i:11;a:2:{s:8:\"field_id\";i:10;s:17:\"excluded_field_id\";i:17;}' .
            'i:12;a:2:{s:8:\"field_id\";i:10;s:17:\"excluded_field_id\";i:13;}' .
            'i:13;a:2:{s:8:\"field_id\";i:10;s:17:\"excluded_field_id\";i:18;}' .
            'i:14;a:2:{s:8:\"field_id\";i:11;s:17:\"excluded_field_id\";i:5;}' .
            'i:15;a:2:{s:8:\"field_id\";i:11;s:17:\"excluded_field_id\";i:6;}' .
            'i:16;a:2:{s:8:\"field_id\";i:11;s:17:\"excluded_field_id\";i:7;}' .
            'i:17;a:2:{s:8:\"field_id\";i:11;s:17:\"excluded_field_id\";i:8;}' .
            'i:18;a:2:{s:8:\"field_id\";i:11;s:17:\"excluded_field_id\";i:9;}' .
            'i:19;a:2:{s:8:\"field_id\";i:11;s:17:\"excluded_field_id\";i:12;}' .
            'i:20;a:2:{s:8:\"field_id\";i:11;s:17:\"excluded_field_id\";i:14;}' .
            'i:21;a:2:{s:8:\"field_id\";i:11;s:17:\"excluded_field_id\";i:15;}' .
            'i:22;a:2:{s:8:\"field_id\";i:11;s:17:\"excluded_field_id\";i:16;}' .
            'i:23;a:2:{s:8:\"field_id\";i:11;s:17:\"excluded_field_id\";i:17;}' .
            'i:24;a:2:{s:8:\"field_id\";i:11;s:17:\"excluded_field_id\";i:13;}' .
            'i:25;a:2:{s:8:\"field_id\";i:11;s:17:\"excluded_field_id\";i:18;}' .
            'i:26;a:2:{s:8:\"field_id\";i:5;s:17:\"excluded_field_id\";i:4;}' .
            'i:27;a:2:{s:8:\"field_id\";i:5;s:17:\"excluded_field_id\";i:6;}' .
            'i:28;a:2:{s:8:\"field_id\";i:5;s:17:\"excluded_field_id\";i:7;}' .
            'i:29;a:2:{s:8:\"field_id\";i:5;s:17:\"excluded_field_id\";i:8;}' .
            'i:30;a:2:{s:8:\"field_id\";i:5;s:17:\"excluded_field_id\";i:9;}' .
            'i:31;a:2:{s:8:\"field_id\";i:5;s:17:\"excluded_field_id\";i:12;}' .
            'i:32;a:2:{s:8:\"field_id\";i:5;s:17:\"excluded_field_id\";i:14;}' .
            'i:33;a:2:{s:8:\"field_id\";i:5;s:17:\"excluded_field_id\";i:15;}' .
            'i:34;a:2:{s:8:\"field_id\";i:5;s:17:\"excluded_field_id\";i:16;}' .
            'i:35;a:2:{s:8:\"field_id\";i:6;s:17:\"excluded_field_id\";i:13;}' .
            'i:36;a:2:{s:8:\"field_id\";i:6;s:17:\"excluded_field_id\";i:2;}' .
            'i:37;a:2:{s:8:\"field_id\";i:6;s:17:\"excluded_field_id\";i:8;}' .
            'i:38;a:2:{s:8:\"field_id\";i:6;s:17:\"excluded_field_id\";i:9;}' .
            'i:39;a:2:{s:8:\"field_id\";i:6;s:17:\"excluded_field_id\";i:12;}' .
            'i:40;a:2:{s:8:\"field_id\";i:6;s:17:\"excluded_field_id\";i:14;}' .
            'i:41;a:2:{s:8:\"field_id\";i:6;s:17:\"excluded_field_id\";i:16;}' .
            'i:42;a:2:{s:8:\"field_id\";i:6;s:17:\"excluded_field_id\";i:4;}' .
            'i:43;a:2:{s:8:\"field_id\";i:6;s:17:\"excluded_field_id\";i:17;}' .
            'i:44;a:2:{s:8:\"field_id\";i:2;s:17:\"excluded_field_id\";i:7;}' .
            'i:45;a:2:{s:8:\"field_id\";i:2;s:17:\"excluded_field_id\";i:12;}' .
            'i:46;a:2:{s:8:\"field_id\";i:2;s:17:\"excluded_field_id\";i:14;}' .
            'i:47;a:2:{s:8:\"field_id\";i:7;s:17:\"excluded_field_id\";i:13;}' .
            'i:48;a:2:{s:8:\"field_id\";i:7;s:17:\"excluded_field_id\";i:2;}' .
            'i:49;a:2:{s:8:\"field_id\";i:7;s:17:\"excluded_field_id\";i:4;}' .
            'i:50;a:2:{s:8:\"field_id\";i:7;s:17:\"excluded_field_id\";i:8;}' .
            'i:51;a:2:{s:8:\"field_id\";i:7;s:17:\"excluded_field_id\";i:9;}' .
            'i:52;a:2:{s:8:\"field_id\";i:7;s:17:\"excluded_field_id\";i:12;}' .
            'i:53;a:2:{s:8:\"field_id\";i:7;s:17:\"excluded_field_id\";i:14;}' .
            'i:54;a:2:{s:8:\"field_id\";i:7;s:17:\"excluded_field_id\";i:16;}' .
            'i:55;a:2:{s:8:\"field_id\";i:7;s:17:\"excluded_field_id\";i:17;}' .
            'i:56;a:2:{s:8:\"field_id\";i:8;s:17:\"excluded_field_id\";i:12;}' .
            'i:57;a:2:{s:8:\"field_id\";i:8;s:17:\"excluded_field_id\";i:14;}' .
            'i:58;a:2:{s:8:\"field_id\";i:8;s:17:\"excluded_field_id\";i:13;}' .
            'i:59;a:2:{s:8:\"field_id\";i:9;s:17:\"excluded_field_id\";i:12;}' .
            'i:60;a:2:{s:8:\"field_id\";i:9;s:17:\"excluded_field_id\";i:16;}' .
            'i:61;a:2:{s:8:\"field_id\";i:9;s:17:\"excluded_field_id\";i:17;}' .
            'i:62;a:2:{s:8:\"field_id\";i:9;s:17:\"excluded_field_id\";i:13;}' .
            'i:63;a:2:{s:8:\"field_id\";i:12;s:17:\"excluded_field_id\";i:4;}' .
            'i:64;a:2:{s:8:\"field_id\";i:12;s:17:\"excluded_field_id\";i:14;}' .
            'i:65;a:2:{s:8:\"field_id\";i:12;s:17:\"excluded_field_id\";i:15;}' .
            'i:66;a:2:{s:8:\"field_id\";i:12;s:17:\"excluded_field_id\";i:16;}' .
            'i:67;a:2:{s:8:\"field_id\";i:12;s:17:\"excluded_field_id\";i:17;}' .
            'i:68;a:2:{s:8:\"field_id\";i:14;s:17:\"excluded_field_id\";i:4;}' .
            'i:69;a:2:{s:8:\"field_id\";i:14;s:17:\"excluded_field_id\";i:16;}' .
            'i:70;a:2:{s:8:\"field_id\";i:14;s:17:\"excluded_field_id\";i:17;}' .
            'i:71;a:2:{s:8:\"field_id\";i:14;s:17:\"excluded_field_id\";i:13;}' .
            'i:72;a:2:{s:8:\"field_id\";i:15;s:17:\"excluded_field_id\";i:16;}' .
            'i:73;a:2:{s:8:\"field_id\";i:15;s:17:\"excluded_field_id\";i:17;}' .
            'i:74;a:2:{s:8:\"field_id\";i:15;s:17:\"excluded_field_id\";i:13;}' .
            'i:75;a:2:{s:8:\"field_id\";i:16;s:17:\"excluded_field_id\";i:17;}' .
            'i:76;a:2:{s:8:\"field_id\";i:16;s:17:\"excluded_field_id\";i:13;}' .
            'i:77;a:2:{s:8:\"field_id\";i:10;s:17:\"excluded_field_id\";i:128;}' .
            'i:78;a:2:{s:8:\"field_id\";i:11;s:17:\"excluded_field_id\";i:128;}' .
            'i:79;a:2:{s:8:\"field_id\";i:128;s:17:\"excluded_field_id\";i:4;}' .
            'i:80;a:2:{s:8:\"field_id\";i:128;s:17:\"excluded_field_id\";i:6;}' .
            'i:81;a:2:{s:8:\"field_id\";i:128;s:17:\"excluded_field_id\";i:7;}' .
            'i:82;a:2:{s:8:\"field_id\";i:128;s:17:\"excluded_field_id\";i:8;}' .
            'i:83;a:2:{s:8:\"field_id\";i:128;s:17:\"excluded_field_id\";i:9;}' .
            'i:84;a:2:{s:8:\"field_id\";i:128;s:17:\"excluded_field_id\";i:12;}' .
            'i:85;a:2:{s:8:\"field_id\";i:128;s:17:\"excluded_field_id\";i:14;}' .
            'i:86;a:2:{s:8:\"field_id\";i:128;s:17:\"excluded_field_id\";i:15;}' .
            'i:87;a:2:{s:8:\"field_id\";i:128;s:17:\"excluded_field_id\";i:16;}' .
            'i:88;a:2:{s:8:\"field_id\";i:10;s:17:\"excluded_field_id\";i:127;}' .
            'i:89;a:2:{s:8:\"field_id\";i:11;s:17:\"excluded_field_id\";i:127;}' .
            'i:90;a:2:{s:8:\"field_id\";i:127;s:17:\"excluded_field_id\";i:4;}' .
            'i:91;a:2:{s:8:\"field_id\";i:127;s:17:\"excluded_field_id\";i:6;}' .
            'i:92;a:2:{s:8:\"field_id\";i:127;s:17:\"excluded_field_id\";i:7;}' .
            'i:93;a:2:{s:8:\"field_id\";i:127;s:17:\"excluded_field_id\";i:8;}' .
            'i:94;a:2:{s:8:\"field_id\";i:127;s:17:\"excluded_field_id\";i:9;}' .
            'i:95;a:2:{s:8:\"field_id\";i:127;s:17:\"excluded_field_id\";i:12;}' .
            'i:96;a:2:{s:8:\"field_id\";i:127;s:17:\"excluded_field_id\";i:14;}' .
            'i:97;a:2:{s:8:\"field_id\";i:127;s:17:\"excluded_field_id\";i:15;}' .
            'i:98;a:2:{s:8:\"field_id\";i:127;s:17:\"excluded_field_id\";i:16;}' .
            '}i:1;N;}',
        'all_fieldsddac75bec0684080a99dee24b42183c5' =>
            'a:2:{i:0;a:172:{' .
            'i:1;a:4:{s:2:"id";i:1;s:4:"name";s:29:"Ручная загрузка";s:4:"type";s:8:"checkBox";s:6:"status";i:1;}' .
            'i:2;a:4:{s:2:"id";i:2;s:4:"name";s:33:"Пакетная загрузка";s:4:"type";s:8:"checkBox";s:6:"status";i:1;}' .
            'i:3;a:4:{s:2:"id";i:3;s:4:"name";s:33:"Виза супервайзера";s:4:"type";s:8:"checkBox";s:6:"status";i:1;}' .
            'i:4;a:4:{s:2:"id";i:4;s:4:"name";s:25:"С фотосъемкой";s:4:"type";s:8:"checkBox";s:6:"status";i:1;}' .
            'i:6;a:4:{s:2:"id";i:6;s:4:"name";s:21:"Точки входа";s:4:"type";s:8:"checkBox";s:6:"status";i:1;}' .
            'i:7;a:4:{s:2:"id";i:7;s:4:"name";s:35:"Добавление графики";s:4:"type";s:8:"checkBox";s:6:"status";i:1;}' .
            'i:8;a:4:{s:2:"id";i:8;s:4:"name";s:34:"С размерной сеткой";s:4:"type";s:8:"checkBox";s:6:"status";i:1;}' .
            'i:9;a:4:{s:2:"id";i:9;s:4:"name";s:33:"С тегами к товарам";s:4:"type";s:8:"checkBox";s:6:"status";i:1;}' .
            'i:10;a:4:{s:2:"id";i:10;s:4:"name";s:12:"Уценка";s:4:"type";s:8:"checkBox";s:6:"status";i:1;}' .
            'i:11;a:4:{s:2:"id";i:11;s:4:"name";s:14:"Уценка 2";s:4:"type";s:8:"checkBox";s:6:"status";i:1;}' .
            'i:12;a:4:{s:2:"id";i:12;s:4:"name";s:61:"На основе отзыва клиента на сайте";s:4:"type";s:8:"checkBox";s:6:"status";i:1;}' .
            'i:13;a:4:{s:2:"id";i:13;s:4:"name";s:60:"Жалоба на товар продавца маркета";s:4:"type";s:8:"checkBox";s:6:"status";i:1;}' .
            'i:14;a:4:{s:2:"id";i:14;s:4:"name";s:27:"Промо-описание";s:4:"type";s:8:"checkBox";s:6:"status";i:1;}' .
            'i:15;a:4:{s:2:"id";i:15;s:4:"name";s:13:"С видео";s:4:"type";s:8:"checkBox";s:6:"status";i:1;}' .
            'i:16;a:4:{s:2:"id";i:16;s:4:"name";s:8:"Лоты";s:4:"type";s:8:"checkBox";s:6:"status";i:1;}' .
            'i:17;a:4:{s:2:"id";i:17;s:4:"name";s:9:"БУ, REF";s:4:"type";s:8:"checkBox";s:6:"status";i:1;}' .
            'i:18;a:4:{s:2:"id";i:18;s:4:"name";s:68:"Добавление товаров в новую категорию";s:4:"type";s:8:"checkBox";s:6:"status";i:1;}' .
            'i:19;a:4:{s:2:"id";i:19;s:4:"name";s:19:"С палитрой";s:4:"type";s:8:"checkBox";s:6:"status";i:1;}' .
            'i:20;a:4:{s:2:"id";i:20;s:4:"name";s:46:"Уровень сложности задачи";s:4:"type";s:6:"select";s:6:"status";i:1;}' .
            'i:21;a:4:{s:2:"id";i:21;s:4:"name";s:59:"Наличие характеристик к товарам";s:4:"type";s:6:"select";s:6:"status";i:1;}' .
            'i:22;a:4:{s:2:"id";i:22;s:4:"name";s:41:"Наличие фото к товарам";s:4:"type";s:6:"select";s:6:"status";i:1;}' .
            'i:23;a:4:{s:2:"id";i:23;s:4:"name";s:49:"Наличие описаний к товарам";s:4:"type";s:6:"select";s:6:"status";i:1;}' .
            'i:24;a:4:{s:2:"id";i:24;s:4:"name";s:27:"Обработка фото";s:4:"type";s:6:"select";s:6:"status";i:1;}' .
            'i:25;a:4:{s:2:"id";i:25;s:4:"name";s:76:"Уточнения. Количество уточнений у автора.";s:4:"type";s:6:"select";s:6:"status";i:1;}' .
            'i:26;a:4:{s:2:"id";i:26;s:4:"name";s:29:"Язык информации";s:4:"type";s:6:"select";s:6:"status";i:1;}' .
            'i:27;a:4:{s:2:"id";i:27;s:4:"name";s:28:"Видео к товарам";s:4:"type";s:6:"select";s:6:"status";i:1;}' .
            'i:28;a:4:{s:2:"id";i:28;s:4:"name";s:99:"Перенос информации при изменении структуры категории";s:4:"type";s:6:"select";s:6:"status";i:1;}' .
            'i:29;a:4:{s:2:"id";i:29;s:4:"name";s:25:"Вид структуры";s:4:"type";s:6:"select";s:6:"status";i:1;}' .
            'i:30;a:4:{s:2:"id";i:30;s:4:"name";s:37:"Сложность структуры";s:4:"type";s:6:"select";s:6:"status";i:1;}' .
            'i:31;a:4:{s:2:"id";i:31;s:4:"name";s:98:"Группировка товаров (наличие варьируемых параметров)";s:4:"type";s:6:"select";s:6:"status";i:1;}' .
            'i:32;a:4:{s:2:"id";i:32;s:4:"name";s:59:"Сложность группировки в заявках";s:4:"type";s:6:"select";s:6:"status";i:1;}' .
            'i:33;a:4:{s:2:"id";i:33;s:4:"name";s:51:"Ошибки в оформлении товаров";s:4:"type";s:14:"selectMultiple";s:6:"status";i:1;}' .
            'i:34;a:4:{s:2:"id";i:34;s:4:"name";s:72:"Ошибки в общих характеристиках товаров";s:4:"type";s:14:"selectMultiple";s:6:"status";i:1;}' .
            'i:35;a:4:{s:2:"id";i:35;s:4:"name";s:83:"Ошибки в характеристиках и описаниях товаров";s:4:"type";s:14:"selectMultiple";s:6:"status";i:1;}' .
            'i:36;a:4:{s:2:"id";i:36;s:4:"name";s:53:"Ошибки в группировке товаров";s:4:"type";s:14:"selectMultiple";s:6:"status";i:1;}' .
            'i:37;a:4:{s:2:"id";i:37;s:4:"name";s:51:"Ошибки в размещении товаров";s:4:"type";s:14:"selectMultiple";s:6:"status";i:1;}' .
            'i:38;a:4:{s:2:"id";i:38;s:4:"name";s:45:"Ошибки в особых правилах";s:4:"type";s:14:"selectMultiple";s:6:"status";i:1;}' .
            'i:39;a:4:{s:2:"id";i:39;s:4:"name";s:39:"Ошибки в стоп-брендах";s:4:"type";s:14:"selectMultiple";s:6:"status";i:1;}' .
            'i:40;a:4:{s:2:"id";i:40;s:4:"name";s:36:"Ошибки в редиректах";s:4:"type";s:14:"selectMultiple";s:6:"status";i:1;}' .
            'i:41;a:4:{s:2:"id";i:41;s:4:"name";s:55:"Ошибки в структурах категорий";s:4:"type";s:14:"selectMultiple";s:6:"status";i:1;}' .
            'i:42;a:4:{s:2:"id";i:42;s:4:"name";s:55:"Ошибки в портальных страницах";s:4:"type";s:14:"selectMultiple";s:6:"status";i:1;}' .
            'i:43;a:4:{s:2:"id";i:43;s:4:"name";s:47:"Ошибки в размерных сетках";s:4:"type";s:14:"selectMultiple";s:6:"status";i:1;}' .
            'i:44;a:4:{s:2:"id";i:44;s:4:"name";s:26:"Ошибки в тегах";s:4:"type";s:14:"selectMultiple";s:6:"status";i:1;}' .
            'i:45;a:4:{s:2:"id";i:45;s:4:"name";s:90:"Ошибки в значениях параметров и в производителях";s:4:"type";s:14:"selectMultiple";s:6:"status";i:1;}' .
            'i:46;a:4:{s:2:"id";i:46;s:4:"name";s:44:"Ошибки в видео к товарам";s:4:"type";s:14:"selectMultiple";s:6:"status";i:1;}' .
            'i:47;a:4:{s:2:"id";i:47;s:4:"name";s:102:"Суммарная длительность добавленных роликов/ролика, мин";s:4:"type";s:7:"decimal";s:6:"status";i:1;}' .
            'i:48;a:4:{s:2:"id";i:48;s:4:"name";s:100:"Суммарная длительность измененных роликов/ролика, мин";s:4:"type";s:7:"decimal";s:6:"status";i:1;}' .
            'i:49;a:4:{s:2:"id";i:49;s:4:"name";s:83:"Рассчитанное количество добавленных товаров";s:4:"type";s:7:"decimal";s:6:"status";i:1;}' .
            'i:50;a:4:{s:2:"id";i:50;s:4:"name";s:81:"Рассчитанное количество измененных товаров";s:4:"type";s:7:"decimal";s:6:"status";i:1;}' .
            'i:51;a:4:{s:2:"id";i:51;s:4:"name";s:83:"Рассчитанное количество проверенных товаров";s:4:"type";s:7:"decimal";s:6:"status";i:1;}' .
            'i:52;a:4:{s:2:"id";i:52;s:4:"name";s:60:"Коэффициент сложности категории";s:4:"type";s:7:"decimal";s:6:"status";i:1;}' .
            'i:53;a:4:{s:2:"id";i:53;s:4:"name";s:44:"Коэффициент типа задачи";s:4:"type";s:7:"decimal";s:6:"status";i:1;}' .
            'i:54;a:4:{s:2:"id";i:54;s:4:"name";s:67:"Коэффициент уровня сложности задачи";s:4:"type";s:7:"decimal";s:6:"status";i:1;}' .
            'i:55;a:4:{s:2:"id";i:55;s:4:"name";s:79:"Рассчитанное количество выполненных работ";s:4:"type";s:7:"decimal";s:6:"status";i:1;}' .
            'i:56;a:4:{s:2:"id";i:56;s:4:"name";s:79:"Рассчитанное количество добавленных видео";s:4:"type";s:7:"decimal";s:6:"status";i:1;}' .
            'i:57;a:4:{s:2:"id";i:57;s:4:"name";s:98:"Рассчитанное количество добавленных размерных сеток";s:4:"type";s:7:"decimal";s:6:"status";i:1;}' .
            'i:58;a:4:{s:2:"id";i:58;s:4:"name";s:79:"Рассчитанное количество добавленных тегов";s:4:"type";s:7:"decimal";s:6:"status";i:1;}' .
            'i:59;a:4:{s:2:"id";i:59;s:4:"name";s:152:"Рассчитанное количество обработанных категорий, параметров и значений параметров";s:4:"type";s:7:"decimal";s:6:"status";i:1;}' .
            'i:60;a:4:{s:2:"id";i:60;s:4:"name";s:103:"Рассчитанное количество проверенных товаров с ошибками";s:4:"type";s:7:"decimal";s:6:"status";i:1;}' .
            'i:61;a:4:{s:2:"id";i:61;s:4:"name";s:91:"Рассчитанное количество сгруппированных товаров";s:4:"type";s:7:"decimal";s:6:"status";i:1;}' .
            'i:62;a:4:{s:2:"id";i:62;s:4:"name";s:77:"Время на конвертацию видео в формат mp4, мин";s:4:"type";s:7:"decimal";s:6:"status";i:1;}' .
            'i:63;a:4:{s:2:"id";i:63;s:4:"name";s:106:"Количество видео, которые конвертировали в формат mp4, штук";s:4:"type";s:7:"decimal";s:6:"status";i:1;}' .
            'i:64;a:4:{s:2:"id";i:64;s:4:"name";s:79:"Общее рассчитанное количество показателей";s:4:"type";s:7:"decimal";s:6:"status";i:1;}' .
            'i:65;a:4:{s:2:"id";i:65;s:4:"name";s:58:"Количество проверенных товаров";s:4:"type";s:7:"integer";s:6:"status";i:1;}' .
            'i:66;a:4:{s:2:"id";i:66;s:4:"name";s:58:"Количество добавленных товаров";s:4:"type";s:7:"integer";s:6:"status";i:1;}' .
            'i:67;a:4:{s:2:"id";i:67;s:4:"name";s:56:"Количество изменённых товаров";s:4:"type";s:7:"integer";s:6:"status";i:1;}' .
            'i:68;a:4:{s:2:"id";i:68;s:4:"name";s:60:"Среднее количество фото в товаре";s:4:"type";s:7:"integer";s:6:"status";i:1;}' .
            'i:69;a:4:{s:2:"id";i:69;s:4:"name";s:65:"Общее количество обработанных фото";s:4:"type";s:7:"integer";s:6:"status";i:1;}' .
            'i:70;a:4:{s:2:"id";i:70;s:4:"name";s:68:"Количество добавленных видеороликов";s:4:"type";s:7:"integer";s:6:"status";i:1;}' .
            'i:71;a:4:{s:2:"id";i:71;s:4:"name";s:64:"Количество добавленных инструкций";s:4:"type";s:7:"integer";s:6:"status";i:1;}' .
            'i:72;a:4:{s:2:"id";i:72;s:4:"name";s:50:"Количество скрытых товаров";s:4:"type";s:7:"integer";s:6:"status";i:1;}' .
            'i:73;a:4:{s:2:"id";i:73;s:4:"name";s:58:"Количество связанных категорий";s:4:"type";s:7:"integer";s:6:"status";i:1;}' .
            'i:74;a:4:{s:2:"id";i:74;s:4:"name";s:60:"Количество связанных параметров";s:4:"type";s:7:"integer";s:6:"status";i:1;}' .
            'i:75;a:4:{s:2:"id";i:75;s:4:"name";s:77:"Количество связанных значений параметров";s:4:"type";s:7:"integer";s:6:"status";i:1;}' .
            'i:76;a:4:{s:2:"id";i:76;s:4:"name";s:34:"Добавлено новых СЦ";s:4:"type";s:7:"integer";s:6:"status";i:1;}' .
            'i:77;a:4:{s:2:"id";i:77;s:4:"name";s:46:"Изменено существующих СЦ";s:4:"type";s:7:"integer";s:6:"status";i:1;}' .
            'i:78;a:4:{s:2:"id";i:78;s:4:"name";s:27:"Номер задачи 1С";s:4:"type";s:7:"integer";s:6:"status";i:1;}' .
            'i:79;a:4:{s:2:"id";i:79;s:4:"name";s:95:"Количество добавленных/заблокированных параметров";s:4:"type";s:7:"integer";s:6:"status";i:1;}' .
            'i:80;a:4:{s:2:"id";i:80;s:4:"name";s:84:"Количество добавленных значений к параметрам";s:4:"type";s:7:"integer";s:6:"status";i:1;}' .
            'i:81;a:4:{s:2:"id";i:81;s:4:"name";s:99:"Количество добавленных иконок на портальную страницу";s:4:"type";s:7:"integer";s:6:"status";i:1;}' .
            'i:82;a:4:{s:2:"id";i:82;s:4:"name";s:73:"Количество добавленных размерных сеток";s:4:"type";s:7:"integer";s:6:"status";i:1;}' .
            'i:83;a:4:{s:2:"id";i:83;s:4:"name";s:54:"Количество добавленных тегов";s:4:"type";s:7:"integer";s:6:"status";i:1;}' .
            'i:84;a:4:{s:2:"id";i:84;s:4:"name";s:64:"Количество настроенных редиректов";s:4:"type";s:7:"integer";s:6:"status";i:1;}' .
            'i:85;a:4:{s:2:"id";i:85;s:4:"name";s:76:"Отправлено файлов продакту на заполнение";s:4:"type";s:7:"integer";s:6:"status";i:1;}' .
            'i:86;a:4:{s:2:"id";i:86;s:4:"name";s:108:"Редактирование видео и обрезка видеоролика. Рендеринг, мин";s:4:"type";s:7:"integer";s:6:"status";i:1;}' .
            'i:87;a:4:{s:2:"id";i:87;s:4:"name";s:66:"Количество отредактированных видео";s:4:"type";s:7:"integer";s:6:"status";i:1;}' .
            'i:88;a:4:{s:2:"id";i:88;s:4:"name";s:84:"Количество товаров, к которым добавлены видео";s:4:"type";s:7:"integer";s:6:"status";i:1;}' .
            'i:90;a:4:{s:2:"id";i:90;s:4:"name";s:146:"Количество заполненных параметров в товарах при изменении структуры категории";s:4:"type";s:7:"integer";s:6:"status";i:1;}' .
            'i:91;a:4:{s:2:"id";i:91;s:4:"name";s:64:"Количество обработанных категорий";s:4:"type";s:7:"integer";s:6:"status";i:1;}' .
            'i:92;a:4:{s:2:"id";i:92;s:4:"name";s:70:"Количество созданных связей для тегов";s:4:"type";s:7:"integer";s:6:"status";i:1;}' .
            'i:94;a:4:{s:2:"id";i:94;s:4:"name";s:64:"Количество сгруппированых товаров";s:4:"type";s:7:"integer";s:6:"status";i:1;}' .
            'i:95;a:4:{s:2:"id";i:95;s:4:"name";s:51:"Количество групп с ошибками";s:4:"type";s:7:"integer";s:6:"status";i:1;}' .
            'i:96;a:4:{s:2:"id";i:96;s:4:"name";s:107:"Количество значений параметров/производителей с ошибками";s:4:"type";s:7:"integer";s:6:"status";i:1;}' .
            'i:97;a:4:{s:2:"id";i:97;s:4:"name";s:67:"Количество измененных товаров (Splitter)";s:4:"type";s:7:"integer";s:6:"status";i:1;}' .
            'i:98;a:4:{s:2:"id";i:98;s:4:"name";s:81:"Количество измененных товаров (пакетно в Owox)";s:4:"type";s:7:"integer";s:6:"status";i:1;}' .
            'i:99;a:4:{s:2:"id";i:99;s:4:"name";s:83:"Количество измененных товаров (поштучно в Owox)";s:4:"type";s:7:"integer";s:6:"status";i:1;}' .
            'i:100;a:4:{s:2:"id";i:100;s:4:"name";s:87:"Количество измененных/замененных видеороликов";s:4:"type";s:7:"integer";s:6:"status";i:1;}' .
            'i:102;a:4:{s:2:"id";i:102;s:4:"name";s:54:"Количество проверенных видео";s:4:"type";s:7:"integer";s:6:"status";i:1;}' .
            'i:103;a:4:{s:2:"id";i:103;s:4:"name";s:54:"Количество проверенных групп";s:4:"type";s:7:"integer";s:6:"status";i:1;}' .
            'i:104;a:4:{s:2:"id";i:104;s:4:"name";s:81:"Количество проверенных значений параметров";s:4:"type";s:7:"integer";s:6:"status";i:1;}' .
            'i:105;a:4:{s:2:"id";i:105;s:4:"name";s:62:"Количество проверенных категорий";s:4:"type";s:7:"integer";s:6:"status";i:1;}' .
            'i:106;a:4:{s:2:"id";i:106;s:4:"name";s:64:"Количество проверенных параметров";s:4:"type";s:7:"integer";s:6:"status";i:1;}' .
            'i:107;a:4:{s:2:"id";i:107;s:4:"name";s:101:"Количество проверенных порталов/точек входа в фат-меню";s:4:"type";s:7:"integer";s:6:"status";i:1;}' .
            'i:108;a:4:{s:2:"id";i:108;s:4:"name";s:73:"Количество проверенных размерных сеток";s:4:"type";s:7:"integer";s:6:"status";i:1;}' .
            'i:109;a:4:{s:2:"id";i:109;s:4:"name";s:64:"Количество проверенных редиректов";s:4:"type";s:7:"integer";s:6:"status";i:1;}' .
            'i:110;a:4:{s:2:"id";i:110;s:4:"name";s:82:"Количество товаров, к которым добавлены теги";s:4:"type";s:7:"integer";s:6:"status";i:1;}' .
            'i:111;a:4:{s:2:"id";i:111;s:4:"name";s:75:"Количество товаров, которые уже есть в БД";s:4:"type";s:7:"integer";s:6:"status";i:1;}' .
            'i:112;a:4:{s:2:"id";i:112;s:4:"name";s:125:"Количество добавленных/измененных точек входа на портале/в фат-меню";s:4:"type";s:7:"integer";s:6:"status";i:1;}' .
            'i:113;a:4:{s:2:"id";i:113;s:4:"name";s:31:"Перевязано опций";s:4:"type";s:7:"integer";s:6:"status";i:1;}' .
            'i:114;a:4:{s:2:"id";i:114;s:4:"name";s:45:"Коэффициент группировки";s:4:"type";s:7:"integer";s:6:"status";i:1;}' .
            'i:115;a:4:{s:2:"id";i:115;s:4:"name";s:62:"Количество добавленных категорий";s:4:"type";s:7:"integer";s:6:"status";i:1;}' .
            'i:116;a:4:{s:2:"id";i:116;s:4:"name";s:56:"Количество отправленных писем";s:4:"type";s:7:"integer";s:6:"status";i:1;}' .
            'i:117;a:4:{s:2:"id";i:117;s:4:"name";s:54:"Количество проверенных тегов";s:4:"type";s:7:"integer";s:6:"status";i:1;}' .
            'i:118;a:4:{s:2:"id";i:118;s:4:"name";s:60:"Количество обработанных товаров";s:4:"type";s:7:"integer";s:6:"status";i:1;}' .
            'i:120;a:4:{s:2:"id";i:120;s:4:"name";s:67:"Проверенные размерные сетки (ссылки)";s:4:"type";s:8:"textarea";s:6:"status";i:1;}' .
            'i:101;a:4:{s:2:"id";i:101;s:4:"name";s:44:"Общее количество ошибок";s:4:"type";s:7:"integer";s:6:"status";i:1;}' .
            'i:122;a:4:{s:2:"id";i:122;s:4:"name";s:66:"Общее количество товаров с ошибками";s:4:"type";s:7:"integer";s:6:"status";i:1;}' .
            'i:123;a:4:{s:2:"id";i:123;s:4:"name";s:29:"Обновление фото";s:4:"type";s:8:"checkBox";s:6:"status";i:1;}' .
            'i:124;a:4:{s:2:"id";i:124;s:4:"name";s:37:"Обновление описания";s:4:"type";s:8:"checkBox";s:6:"status";i:1;}' .
            'i:125;a:4:{s:2:"id";i:125;s:4:"name";s:47:"Обновление характеристик";s:4:"type";s:8:"checkBox";s:6:"status";i:1;}' .
            'i:126;a:4:{s:2:"id";i:126;s:4:"name";s:62:"Добавление/обновление инструкций";s:4:"type";s:8:"checkBox";s:6:"status";i:1;}' .
            'i:121;a:4:{s:2:"id";i:121;s:4:"name";s:35:"Проверенные ссылки";s:4:"type";s:8:"textarea";s:6:"status";i:1;}' .
            'i:5;a:4:{s:2:"id";i:5;s:4:"name";s:21:"Стоп-бренды";s:4:"type";s:8:"checkBox";s:6:"status";i:1;}' .
            'i:127;a:4:{s:2:"id";i:127;s:4:"name";s:26:"Автомодерация";s:4:"type";s:8:"checkBox";s:6:"status";i:1;}' .
            'i:128;a:4:{s:2:"id";i:128;s:4:"name";s:71:"Ошибки в оформлении товаров (Кросс-чек)";s:4:"type";s:14:"selectMultiple";s:6:"status";i:1;}' .
            'i:129;a:4:{s:2:"id";i:129;s:4:"name";s:92:"Ошибки в общих характеристиках товаров (Кросс-чек)";s:4:"type";s:14:"selectMultiple";s:6:"status";i:1;}' .
            'i:130;a:4:{s:2:"id";i:130;s:4:"name";s:103:"Ошибки в характеристиках и описаниях товаров (Кросс-чек)";s:4:"type";s:14:"selectMultiple";s:6:"status";i:1;}' .
            'i:131;a:4:{s:2:"id";i:131;s:4:"name";s:73:"Ошибки в группировке товаров (Кросс-чек)";s:4:"type";s:14:"selectMultiple";s:6:"status";i:1;}' .
            'i:132;a:4:{s:2:"id";i:132;s:4:"name";s:71:"Ошибки в размещении товаров (Кросс-чек)";s:4:"type";s:14:"selectMultiple";s:6:"status";i:1;}' .
            'i:133;a:4:{s:2:"id";i:133;s:4:"name";s:65:"Ошибки в особых правилах (Кросс-чек)";s:4:"type";s:14:"selectMultiple";s:6:"status";i:1;}' .
            'i:134;a:4:{s:2:"id";i:134;s:4:"name";s:59:"Ошибки в стоп-брендах (Кросс-чек)";s:4:"type";s:14:"selectMultiple";s:6:"status";i:1;}' .
            'i:135;a:4:{s:2:"id";i:135;s:4:"name";s:56:"Ошибки в редиректах (Кросс-чек)";s:4:"type";s:14:"selectMultiple";s:6:"status";i:1;}' .
            'i:136;a:4:{s:2:"id";i:136;s:4:"name";s:75:"Ошибки в структурах категорий (Кросс-чек)";s:4:"type";s:14:"selectMultiple";s:6:"status";i:1;}' .
            'i:137;a:4:{s:2:"id";i:137;s:4:"name";s:75:"Ошибки в портальных страницах (Кросс-чек)";s:4:"type";s:14:"selectMultiple";s:6:"status";i:1;}' .
            'i:138;a:4:{s:2:"id";i:138;s:4:"name";s:67:"Ошибки в размерных сетках (Кросс-чек)";s:4:"type";s:14:"selectMultiple";s:6:"status";i:1;}' .
            'i:139;a:4:{s:2:"id";i:139;s:4:"name";s:46:"Ошибки в тегах (Кросс-чек)";s:4:"type";s:14:"selectMultiple";s:6:"status";i:1;}' .
            'i:140;a:4:{s:2:"id";i:140;s:4:"name";s:110:"Ошибки в значениях параметров и в производителях (Кросс-чек)";s:4:"type";s:14:"selectMultiple";s:6:"status";i:1;}' .
            'i:141;a:4:{s:2:"id";i:141;s:4:"name";s:64:"Ошибки в видео к товарам (Кросс-чек)";s:4:"type";s:14:"selectMultiple";s:6:"status";i:1;}' .
            'i:142;a:4:{s:2:"id";i:142;s:4:"name";s:103:"Рассчитанное количество проверенных товаров (Кросс-чек)";s:4:"type";s:7:"decimal";s:6:"status";i:1;}' .
            'i:143;a:4:{s:2:"id";i:143;s:4:"name";s:123:"Рассчитанное количество проверенных товаров с ошибками (Кросс-чек)";s:4:"type";s:7:"decimal";s:6:"status";i:1;}' .
            'i:144;a:4:{s:2:"id";i:144;s:4:"name";s:78:"Количество проверенных товаров (Кросс-чек)";s:4:"type";s:7:"integer";s:6:"status";i:1;}' .
            'i:145;a:4:{s:2:"id";i:145;s:4:"name";s:71:"Количество групп с ошибками (Кросс-чек)";s:4:"type";s:7:"integer";s:6:"status";i:1;}' .
            'i:146;a:4:{s:2:"id";i:146;s:4:"name";s:64:"Общее количество ошибок (Кросс-чек)";s:4:"type";s:7:"integer";s:6:"status";i:1;}' .
            'i:93;a:4:{s:2:"id";i:93;s:4:"name";s:56:"Количество обработанных групп";s:4:"type";s:7:"integer";s:6:"status";i:1;}' .
            'i:147;a:4:{s:2:"id";i:147;s:4:"name";s:74:"Количество проверенных видео (Кросс-чек)";s:4:"type";s:7:"integer";s:6:"status";i:1;}' .
            'i:148;a:4:{s:2:"id";i:148;s:4:"name";s:74:"Количество проверенных групп (Кросс-чек)";s:4:"type";s:7:"integer";s:6:"status";i:1;}' .
            'i:149;a:4:{s:2:"id";i:149;s:4:"name";s:101:"Количество проверенных значений параметров (Кросс-чек)";s:4:"type";s:7:"integer";s:6:"status";i:1;}' .
            'i:150;a:4:{s:2:"id";i:150;s:4:"name";s:82:"Количество проверенных категорий (Кросс-чек)";s:4:"type";s:7:"integer";s:6:"status";i:1;}' .
            'i:151;a:4:{s:2:"id";i:151;s:4:"name";s:84:"Количество проверенных параметров (Кросс-чек)";s:4:"type";s:7:"integer";s:6:"status";i:1;}' .
            'i:152;a:4:{s:2:"id";i:152;s:4:"name";s:121:"Количество проверенных порталов/точек входа в фат-меню (Кросс-чек)";s:4:"type";s:7:"integer";s:6:"status";i:1;}' .
            'i:153;a:4:{s:2:"id";i:153;s:4:"name";s:93:"Количество проверенных размерных сеток (Кросс-чек)";s:4:"type";s:7:"integer";s:6:"status";i:1;}' .
            'i:154;a:4:{s:2:"id";i:154;s:4:"name";s:84:"Количество проверенных редиректов (Кросс-чек)";s:4:"type";s:7:"integer";s:6:"status";i:1;}' .
            'i:155;a:4:{s:2:"id";i:155;s:4:"name";s:74:"Количество проверенных тегов (Кросс-чек)";s:4:"type";s:7:"integer";s:6:"status";i:1;}' .
            'i:156;a:4:{s:2:"id";i:156;s:4:"name";s:87:"Проверенные размерные сетки (ссылки) (Кросс-чек)";s:4:"type";s:8:"textarea";s:6:"status";i:1;}' .
            'i:157;a:4:{s:2:"id";i:157;s:4:"name";s:55:"Проверенные ссылки (Кросс-чек)";s:4:"type";s:8:"textarea";s:6:"status";i:1;}' .
            'i:158;a:4:{s:2:"id";i:158;s:4:"name";s:86:"Общее количество товаров с ошибками (Кросс-чек)";s:4:"type";s:7:"integer";s:6:"status";i:1;}' .
            'i:159;a:4:{s:2:"id";i:159;s:4:"name";s:34:"По заявке с MobileCourier";s:4:"type";s:8:"checkBox";s:6:"status";i:1;}' .
            'i:89;a:4:{s:2:"id";i:89;s:4:"name";s:50:"Фактические затраты КМ, мин";s:4:"type";s:7:"integer";s:6:"status";i:1;}' .
            'i:160;a:4:{s:2:"id";i:160;s:4:"name";s:16:"Укр. поля";s:4:"type";s:8:"checkBox";s:6:"status";i:1;}' .
            'i:161;a:4:{s:2:"id";i:161;s:4:"name";s:102:"Количество обработанных, но не сгруппированных товаров";s:4:"type";s:7:"integer";s:6:"status";i:1;}' .
            'i:162;a:4:{s:2:"id";i:162;s:4:"name";s:88:"Количество настроек групп (управление группами)";s:4:"type";s:7:"integer";s:6:"status";i:1;}' .
            'i:163;a:4:{s:2:"id";i:163;s:4:"name";s:49:"Количество слов в словарях";s:4:"type";s:7:"integer";s:6:"status";i:1;}' .
            'i:164;a:4:{s:2:"id";i:164;s:4:"name";s:96:"Рассчитанное количество не сгруппированных товаров";s:4:"type";s:7:"decimal";s:6:"status";i:1;}' .
            'i:165;a:4:{s:2:"id";i:165;s:4:"name";s:81:"Рассчитанное количество отправленных писем";s:4:"type";s:7:"decimal";s:6:"status";i:1;}' .
            'i:166;a:4:{s:2:"id";i:166;s:4:"name";s:81:"Рассчитанное количество созданных подзадач";s:4:"type";s:7:"decimal";s:6:"status";i:1;}' .
            'i:167;a:4:{s:2:"id";i:167;s:4:"name";s:74:"Рассчитанное количество слов в словарях";s:4:"type";s:7:"decimal";s:6:"status";i:1;}' .
            'i:168;a:4:{s:2:"id";i:168;s:4:"name";s:66:"Среднее количество товаров в группе";s:4:"type";s:7:"decimal";s:6:"status";i:1;}' .
            'i:169;a:4:{s:2:"id";i:169;s:4:"name";s:16:"Алгоритм";s:4:"type";s:8:"checkBox";s:6:"status";i:1;}' .
            'i:170;a:4:{s:2:"id";i:170;s:4:"name";s:91:"Коэффициент среднего количества товаров в группе";s:4:"type";s:7:"decimal";s:6:"status";i:1;}' .
            'i:171;a:4:{s:2:"id";i:171;s:4:"name";s:73:"Коэффициент не сгруппированных товаров";s:4:"type";s:7:"decimal";s:6:"status";i:1;}' .
            'i:172;a:4:{s:2:"id";i:172;s:4:"name";s:50:"Коэффициент писем/подзадач";s:4:"type";s:7:"decimal";s:6:"status";i:1;}' .
            'i:173;a:4:{s:2:"id";i:173;s:4:"name";s:72:"Коэффициент количества слов в словарях";s:4:"type";s:7:"decimal";s:6:"status";i:1;}' .
            '}i:1;N;}',
        'all_periods3e29485f645ec91800b2087082689a4b' =>
            'a:2:{i:0;a:4:{' .
            'i:0;a:5:{s:2:"id";i:1;s:5:"begin";s:19:"2021-01-01 00:00:00";s:3:"end";s:19:"2021-01-31 00:00:00";s:10:"created_at";s:19:"2021-01-01 00:00:00";s:10:"updated_at";N;}' .
            'i:1;a:5:{s:2:"id";i:2;s:5:"begin";s:19:"2021-02-01 00:00:00";s:3:"end";s:19:"2021-02-28 00:00:00";s:10:"created_at";s:19:"2021-01-01 00:00:00";s:10:"updated_at";N;}' .
            'i:2;a:5:{s:2:"id";i:3;s:5:"begin";s:19:"2021-03-01 00:00:00";s:3:"end";s:19:"2021-03-31 00:00:00";s:10:"created_at";s:19:"2021-02-01 00:00:00";s:10:"updated_at";s:19:"2021-07-01 17:01:01";}' .
            'i:3;a:5:{s:2:"id";i:4;s:5:"begin";s:19:"2021-04-01 00:00:00";s:3:"end";s:19:"2021-04-30 00:00:00";s:10:"created_at";s:19:"2021-03-01 00:00:00";s:10:"updated_at";s:19:"2021-09-01 19:01:01";}}' .
            'i:1;N;}',
        'all_prioritiesc89065f72175b22f9ba823aa3d51fa27' =>
            'a:2:{i:0;a:3:{' .
            'i:0;a:3:{s:2:"id";i:1;s:4:"name";s:61:"Информация необходима для склада";s:6:"status";i:1;}' .
            'i:1;a:3:{s:2:"id";i:3;s:4:"name";s:54:"Исправление критичной ошибки";s:6:"status";i:0;}' .
            'i:2;a:3:{s:2:"id";i:2;s:4:"name";s:81:"Товар-новинка/эксклюзив (трафикообразующий)";s:6:"status";i:1;}' .
            '}i:1;N;}',
        'all_reasons2fb6cc3f5862c154757f7dbd5ca312e9' =>
            'a:2:{i:0;a:15:{' .
            'i:0;a:4:{s:2:"id";i:10;s:12:"child_status";i:4;s:6:"reason";s:51:"Все товары уже есть на сайте";s:6:"status";i:1;}' .
            'i:1;a:4:{s:2:"id";i:11;s:12:"child_status";i:999;s:6:"reason";s:53:"Другое (описан в коментариях)";s:6:"status";i:1;}' .
            'i:2;a:4:{s:2:"id";i:9;s:12:"child_status";i:4;s:6:"reason";s:23:"Дубль задачи";s:6:"status";i:1;}' .
            'i:3;a:4:{s:2:"id";i:3;s:12:"child_status";i:7;s:6:"reason";s:46:"Изменен приоритет задачи";s:6:"status";i:1;}' .
            'i:4;a:4:{s:2:"id";i:13;s:12:"child_status";i:3;s:6:"reason";s:8:"Нада";s:6:"status";i:1;}' .
            'i:5;a:4:{s:2:"id";i:6;s:12:"child_status";i:8;s:6:"reason";s:88:"Не получена запрошенная недостающая информация";s:6:"status";i:1;}' .
            'i:6;a:4:{s:2:"id";i:12;s:12:"child_status";i:3;s:6:"reason";s:12:"Нинада";s:6:"status";i:0;}i:7;a:4:{s:2:"id";i:14;s:12:"child_status";i:7;s:6:"reason";s:37:"Ожидает группировки";s:6:"status";i:1;}' .
            'i:8;a:4:{s:2:"id";i:5;s:12:"child_status";i:7;s:6:"reason";s:74:"Ожидается загрузка обновлений в систему";s:6:"status";i:0;}i:9;a:4:{s:2:"id";i:4;s:12:"child_status";i:7;s:6:"reason";s:68:"Ожидается загрузка товаров в систему";s:6:"status";i:1;}' .
            'i:10;a:4:{s:2:"id";i:1;s:12:"child_status";i:7;s:6:"reason";s:60:"Ожидается загрузка фото в товары";s:6:"status";i:1;}' .
            'i:11;a:4:{s:2:"id";i:15;s:12:"child_status";i:7;s:6:"reason";s:36:"Товары на модерации";s:6:"status";i:1;}' .
            'i:12;a:4:{s:2:"id";i:7;s:12:"child_status";i:8;s:6:"reason";s:37:"Товары ушли в ошибки";s:6:"status";i:1;}' .
            'i:13;a:4:{s:2:"id";i:2;s:12:"child_status";i:7;s:6:"reason";s:76:"Требуется уточнение информации по задаче";s:6:"status";i:1;}' .
            'i:14;a:4:{s:2:"id";i:8;s:12:"child_status";i:8;s:6:"reason";s:50:"Часть товаров ушла в ошибки";s:6:"status";i:0;}' .
            '}i:1;N;}',
        'all_statuses0f9a6c56fce7ca294ebcaccbae7c6601' =>
            'a:2:{i:0;a:11:{' .
            'i:0;a:9:{s:2:"id";i:1;s:5:"title";s:10:"Новая";s:3:"key";i:1;s:8:"key_word";s:9:"WaitCheck";s:11:"grid_action";s:3:"new";s:16:"title_for_report";s:10:"Новая";s:21:"title_for_breadcrumbs";s:10:"Новые";s:16:"title_for_button";s:31:"Ожидает проверки";s:15:"icon_for_button";s:31:"<i class="far fa-file-alt"></i>";}' .
            'i:1;a:9:{s:2:"id";i:2;s:5:"title";s:46:"Готова для распределения";s:3:"key";i:2;s:8:"key_word";s:7:"InCheck";s:11:"grid_action";s:8:"in-check";s:16:"title_for_report";s:46:"Готова для распределения";s:21:"title_for_breadcrumbs";s:46:"Готовы для распределения";s:16:"title_for_button";s:46:"Готова для распределения";s:15:"icon_for_button";s:29:"<i class="fas fa-search"></i>";}' .
            'i:2;a:9:{s:2:"id";i:3;s:5:"title";s:23:"На доработке";s:3:"key";i:3;s:8:"key_word";s:13:"RequireChange";s:11:"grid_action";s:15:"require-changes";s:16:"title_for_report";s:23:"На доработке";s:21:"title_for_breadcrumbs";s:23:"На доработке";s:16:"title_for_button";s:23:"На доработку";s:15:"icon_for_button";s:33:"<i class="fas fa-pencil-alt"></i>";}' .
            'i:3;a:9:{s:2:"id";i:4;s:5:"title";s:16:"Отменена";s:3:"key";i:4;s:8:"key_word";s:8:"Declined";s:11:"grid_action";s:8:"declined";s:16:"title_for_report";s:16:"Отменена";s:21:"title_for_breadcrumbs";s:16:"Отменены";s:16:"title_for_button";s:16:"Отменить";s:15:"icon_for_button";s:28:"<i class="fas fa-times"></i>";}' .
            'i:4;a:9:{s:2:"id";i:5;s:5:"title";s:43:"Ожидает взятия в работу";s:3:"key";i:5;s:8:"key_word";s:8:"WaitWork";s:11:"grid_action";s:9:"wait-work";s:16:"title_for_report";s:43:"Ожидает взятия в работу";s:21:"title_for_breadcrumbs";s:43:"Ожидают взятия в работу";s:16:"title_for_button";s:41:"Назначить исполнителя";s:15:"icon_for_button";s:34:"<i class="fas fa-user-circle"></i>";}' .
            'i:5;a:9:{s:2:"id";i:6;s:5:"title";s:15:"В работе";s:3:"key";i:6;s:8:"key_word";s:6:"InWork";s:11:"grid_action";s:7:"in-work";s:16:"title_for_report";s:15:"В работе";s:21:"title_for_breadcrumbs";s:15:"В работе";s:16:"title_for_button";s:15:"В работу";s:15:"icon_for_button";s:34:"<i class="fas fa-cog fa-spin"></i>";}' .
            'i:6;a:9:{s:2:"id";i:7;s:5:"title";s:14:"Ожидает";s:3:"key";i:7;s:8:"key_word";s:6:"OnHold";s:11:"grid_action";s:7:"on-hold";s:16:"title_for_report";s:14:"Ожидает";s:21:"title_for_breadcrumbs";s:14:"Ожидают";s:16:"title_for_button";s:14:"Ожидать";s:15:"icon_for_button";s:37:"<i class="fas fa-hourglass-half"></i>";}' .
            'i:7;a:9:{s:2:"id";i:8;s:5:"title";s:35:"Частично выполнена";s:3:"key";i:8;s:8:"key_word";s:15:"PartialComplete";s:11:"grid_action";s:9:"completed";s:16:"title_for_report";s:35:"Частично выполнена";s:21:"title_for_breadcrumbs";s:35:"Частично выполнены";s:16:"title_for_button";s:35:"Частично выполнена";s:15:"icon_for_button";s:35:"<i class="far fa-check-circle"></i>";}' .
            'i:8;a:9:{s:2:"id";i:9;s:5:"title";s:18:"Выполнена";s:3:"key";i:9;s:8:"key_word";s:9:"Completed";s:11:"grid_action";s:9:"completed";s:16:"title_for_report";s:18:"Выполнена";s:21:"title_for_breadcrumbs";s:18:"Выполнены";s:16:"title_for_button";s:18:"Выполнена";s:15:"icon_for_button";s:28:"<i class="fas fa-check"></i>";}' .
            'i:9;a:9:{s:2:"id";i:10;s:5:"title";s:14:"Закрыта";s:3:"key";i:11;s:8:"key_word";s:6:"Closed";s:11:"grid_action";s:6:"closed";s:16:"title_for_report";s:14:"Закрыта";s:21:"title_for_breadcrumbs";s:14:"Закрыты";s:16:"title_for_button";s:14:"Закрыть";s:15:"icon_for_button";s:30:"<i class="fas fa-archive"></i>";}' .
            'i:10;a:9:{s:2:"id";i:11;s:5:"title";s:6:"Все";s:3:"key";i:999;s:8:"key_word";s:3:"Any";s:11:"grid_action";s:5:"index";s:16:"title_for_report";s:0:"";s:21:"title_for_breadcrumbs";s:6:"Все";s:16:"title_for_button";s:6:"Все";s:15:"icon_for_button";s:0:"";}' .
            '}i:1;N;}',
        'all_valuesc72cdd5825f4c8d1ec44822407865c5f' => 'value',
        'diff_coef_1_[1]ee1510e00f15f464f1482c229e1c4b28' => 'a:2:{i:0;s:3:"0.5";i:1;N;}',
        'diff_coef_1_[2]6b59feb34a7dd85a6b2b365f725a7b20' => 'a:2:{i:0;s:1:"2";i:1;N;}',
        'diff_coef_2_[2]e4f11b540a5968017834ae5f0e499978' => 'a:2:{i:0;s:1:"2";i:1;N;}',
        'diff_coef_3_[8,15,19]09a6c57a3c5f1025a5f3dcd444b906a9' => 'a:2:{i:0;s:1:"2";i:1;N;}',
        'diff_coef_4_[169]af057faf680f6e20087cf785ccfdc40e' => 'a:2:{i:0;s:3:"0.5";i:1;N;}',
        'diff_coef_5_[1]3bd4af5326d1e27a9ad741e340646f57' => 'a:2:{i:0;s:3:"0.5";i:1;N;}',
        'diff_coef_6_[8,15,19]b1b33073c1eb1d5daabed600c76a8dc1' => 'a:2:{i:0;s:1:"3";i:1;N;}',
        'diff_coef_7_[1]c386bb062826fca6605ade8ad14d7b38' => 'a:2:{i:0;s:1:"0.5";i:1;N;}',
        'diff_coef_7_[2]e401b38c96a14dff7cb79a71638e1fcd' => 'a:2:{i:0;s:1:"2";i:1;N;}',
        'diff_coef_8_[1,6,7]0b2026cb63268e05ca709ea7090c12cc' => 'a:2:{i:0;s:1:"3";i:1;N;}',
        'diff_coef_11_[2]107301ff442b30cffbcd119ee16b0ac6' => 'a:2:{i:0;s:1:"2";i:1;N;}',
        'formula_coefs96c97f00c7a4f639793578f36f8d740e' => 'a:2:{i:0;a:3:{i:1;s:4:"0.07";i:2;s:4:"0.15";i:3;s:3:"0.1";}i:1;N;}',
        'grid_settings_4eb368f0862999c8fa0bbef8506b11e2a' =>
            'a:2:{i:0;a:20:{' .
            'i:0;s:9:"author_id";' .
            'i:1;s:13:"supervisor_id";' .
            'i:2;s:10:"manager_id";' .
            'i:3;s:6:"status";' .
            'i:4;s:15:"previous_status";' .
            'i:5;s:22:"cross_check_manager_id";' .
            'i:6;s:18:"cross_check_status";' .
            'i:7;s:9:"direction";' .
            'i:8;s:14:"team_direction";' .
            'i:9;s:11:"category_id";' .
            'i:10;s:9:"seller_id";' .
            'i:11;s:9:"hand_load";' .
            'i:12;s:9:"pack_load";' .
            'i:13;s:4:"visa";' .
            'i:14;s:10:"with_photo";' .
            'i:15;s:12:"enter_points";' .
            'i:16;s:15:"adding_graphics";' .
            'i:17;s:9:"with_grid";' .
            'i:18;s:9:"with_tags";' .
            'i:19;s:8:"markdown";}' .
            'i:1;N;}',
        'notify_setting_40ebeb8e3e8397c381478961fc882b097' => 'a:2:{i:0;a:6:{s:2:"id";i:1;s:7:"user_id";i:4;s:22:"types_for_notification";s:96:"{"create": 2, "comment": 2, "mention": 2, "manager_id": 2, "attachments": 2, "supervisor_id": 2}";s:19:"fields_for_complete";s:60:"["1", "2", "20", "29", "30", "53", "54", "67", "101", "122"]";s:25:"statuses_for_notification";s:81:"{"1": 2, "2": 2, "3": 2, "4": 2, "5": 2, "6": 2, "7": 2, "8": 2, "9": 2, "11": 2}";s:6:"url_id";i:0;}i:1;N;}',
        'notify_setting_79e36ba7a369f04c5f9f7c23873c13d71' => 'a:2:{i:0;a:6:{s:2:"id";i:2;s:7:"user_id";i:7;s:22:"types_for_notification";s:96:"{"create": 1, "comment": 2, "mention": 0, "manager_id": 2, "attachments": 2, "supervisor_id": 2}";s:19:"fields_for_complete";s:84:"["20", "30", "53", "54", "67", "supervisor_id", "description", "priority"]";s:25:"statuses_for_notification";s:81:"{"1": 2, "2": 2, "3": 2, "4": 2, "5": 2, "6": 2, "7": 0, "8": 0, "9": 1, "11": 1}";s:6:"url_id";i:0;}i:1;N;}',
        'request_editing_153f73a2cbc2d30035a4cda1abdf82f40' => 'value',
        'request_editing_22c0a53d2e1ee583c2cea56a91b142270' => 'value',
        'request_editing_32b43daab7f8095ea03b9bf724ad3fa81' => 'value',
        'request_editing_45cc5160e57cdfcb3a52827c2a5a023de' => 'value',
        'request_editing_526467b89eb09ecc14e315d941e00c590' => 'value',
        'request_editing_61c2a03edf6ee18f33102199ff0b4dc8a' => 'value',
        'request_editing_7c64141c5ef6a80ac762304d685e9c87a' => 'value',
        'request_editing_8ce853f951d61029addbed39344d0192d' => 'value',
        'request_editing_957ded90a6bd9c436e62d42dd3a95123a' => 'value',
        'request_editing_1145e03f2f871a9ac568e3451b4750dc23' => 'value',
        'reasons_by_status_11fc68253b26fc3d2e010e94675d7cf8b' => 'a:2:{i:0;a:1:{i:0;a:3:{s:2:"id";i:11;s:6:"reason";s:53:"Другое (описан в коментариях)";s:6:"status";i:1;}}i:1;N;}',
        'reasons_by_status_2848ec487e1a0be4abfe5d5722dade4dc' => 'a:2:{i:0;a:1:{i:0;a:3:{s:2:"id";i:11;s:6:"reason";s:53:"Другое (описан в коментариях)";s:6:"status";i:1;}}i:1;N;}',
        'reasons_by_status_5ab2862e1fe728ffc6ed525d02b1a08b3' => 'a:2:{i:0;a:1:{i:0;a:3:{s:2:"id";i:11;s:6:"reason";s:53:"Другое (описан в коментариях)";s:6:"status";i:1;}}i:1;N;}',
        'reasons_by_status_64fb7db11b2f190142add5b06cba278b1' => 'a:2:{i:0;a:1:{i:0;a:3:{s:2:"id";i:11;s:6:"reason";s:53:"Другое (описан в коментариях)";s:6:"status";i:1;}}i:1;N;}',
        'reasons_by_status_9776834c96ed03ea5d6e18bf2f389288f' => 'a:2:{i:0;a:1:{i:0;a:3:{s:2:"id";i:11;s:6:"reason";s:53:"Другое (описан в коментариях)";s:6:"status";i:1;}}i:1;N;}',
        'reasons_by_status_113d18f99638fba7ed367540edf621056d' => 'a:2:{i:0;a:1:{i:0;a:3:{s:2:"id";i:11;s:6:"reason";s:53:"Другое (описан в коментариях)";s:6:"status";i:1;}}i:1;N;}',
        'reasons_by_status_3cb7d746c6663211ac9840871e16bca0c' =>
            'a:2:{i:0;a:3:{' .
            'i:0;a:3:{s:2:"id";i:11;s:6:"reason";s:53:"Другое (описан в коментариях)";s:6:"status";i:1;}' .
            'i:1;a:3:{s:2:"id";i:13;s:6:"reason";s:8:"Нада";s:6:"status";i:1;}' .
            'i:2;a:3:{s:2:"id";i:12;s:6:"reason";s:12:"Нинада";s:6:"status";i:0;}' .
            '}i:1;N;}',
        'reasons_by_status_495b720c6262f0fd97d0ec7e7172a3364' =>
            'a:2:{i:0;a:3:{' .
            'i:0;a:3:{s:2:"id";i:10;s:6:"reason";s:51:"Все товары уже есть на сайте";s:6:"status";i:1;}' .
            'i:1;a:3:{s:2:"id";i:11;s:6:"reason";s:53:"Другое (описан в коментариях)";s:6:"status";i:1;}' .
            'i:2;a:3:{s:2:"id";i:9;s:6:"reason";s:23:"Дубль задачи";s:6:"status";i:1;}' .
            '}i:1;N;}',
        'reasons_by_status_7c4921af50cf971f4cf6accb6823428ff' =>
            'a:2:{i:0;a:8:{' .
            'i:0;a:3:{s:2:"id";i:11;s:6:"reason";s:53:"Другое (описан в коментариях)";s:6:"status";i:1;}' .
            'i:1;a:3:{s:2:"id";i:3;s:6:"reason";s:46:"Изменен приоритет задачи";s:6:"status";i:1;}' .
            'i:2;a:3:{s:2:"id";i:14;s:6:"reason";s:37:"Ожидает группировки";s:6:"status";i:1;}' .
            'i:3;a:3:{s:2:"id";i:5;s:6:"reason";s:74:"Ожидается загрузка обновлений в систему";s:6:"status";i:0;}' .
            'i:4;a:3:{s:2:"id";i:4;s:6:"reason";s:68:"Ожидается загрузка товаров в систему";s:6:"status";i:1;}' .
            'i:5;a:3:{s:2:"id";i:1;s:6:"reason";s:60:"Ожидается загрузка фото в товары";s:6:"status";i:1;}' .
            'i:6;a:3:{s:2:"id";i:15;s:6:"reason";s:36:"Товары на модерации";s:6:"status";i:1;}' .
            'i:7;a:3:{s:2:"id";i:2;s:6:"reason";s:76:"Требуется уточнение информации по задаче";s:6:"status";i:1;}' .
            '}i:1;N;}',
        'reasons_by_status_89eda2a8ada4c29bd2618a2a896f67473' =>
            'a:2:{i:0;a:4:{' .
            'i:0;a:3:{s:2:"id";i:11;s:6:"reason";s:53:"Другое (описан в коментариях)";s:6:"status";i:1;}' .
            'i:1;a:3:{s:2:"id";i:6;s:6:"reason";s:88:"Не получена запрошенная недостающая информация";s:6:"status";i:1;}' .
            'i:2;a:3:{s:2:"id";i:7;s:6:"reason";s:37:"Товары ушли в ошибки";s:6:"status";i:1;}' .
            'i:3;a:3:{s:2:"id";i:8;s:6:"reason";s:50:"Часть товаров ушла в ошибки";s:6:"status";i:0;}' .
            '}i:1;N;}',
        'rozetka_categories_names04b50846f22b55d74fd96f1ab0847b52' =>
            'a:2:{i:0;a:61:{' .
            'i:4626923;s:72:"Алкогольные напитки и продукты питания";' .
            'i:80025;s:47:"Бытовая техника, интерьер";' .
            'i:2394297;s:30:"Дача, сад, огород";' .
            'i:80253;s:40:"Компьютеры и ноутбуки";' .
            'i:4629305;s:34:"Красота и здоровье";' .
            'i:1162030;s:48:"Одежда, обувь и аксессуары";' .
            'i:84625;s:12:"Оружие";' .
            'i:4625734;s:32:"Офис, школа, книги";' .
            'i:80260;s:58:"Подарки и товары для праздников";' .
            'i:4628418;s:36:"Сантехника и ремонт";' .
            'i:4655216;s:35:"Сельское хозяйство";' .
            'i:4655025;s:14:"Скрытые";' .
            'i:80262;s:33:"Скрытые категории";' .
            'i:4656380;s:27:"Скрытые товары";' .
            'i:4627949;s:50:"Смартфоны, ТВ и электроника";' .
            'i:4627893;s:32:"Спорт и увлечения";' .
            'i:4627851;s:34:"Товары для бизнеса";' .
            'i:88468;s:30:"Товары для детей";' .
            'i:2394287;s:28:"Товары для дома";' .
            'i:4630262;s:30:"Услуги и сервисы";' .
            'i:83850;s:31:"Уцененные товары";' .
            'i:753399;s:44:"Аксессуары для алкоголя";' .
            'i:4652996;s:17:"Мини-бары";' .
            'i:4653010;s:10:"Фляги";' .
            'i:4653017;s:63:"Упаковки для алкогольных напитков";' .
            'i:4628124;s:22:"Фото и видео";' .
            'i:2514857;s:10:"Файлы";' .
            'i:2514867;s:18:"Визитницы";' .
            'i:2514872;s:96:"Бейджи, брелоки-идентификаторы, настольные таблички";' .
            'i:2560747;s:49:"Банковские принадлежности";' .
            'i:2581722;s:36:"Папки, регистраторы";' .
            'i:2514862;s:33:"Папки пластиковые";' .
            'i:2581727;s:50:"Папки-портфели, папки-боксы";' .
            'i:2581732;s:35:"Папки-регистраторы";' .
            'i:2581737;s:27:"Папки-планшеты";' .
            'i:2581742;s:43:"Папки и файлы подвесные";' .
            'i:2595767;s:28:"Папки с файлами";' .
            'i:2666302;s:43:"Архивные короба и боксы";' .
            'i:4626584;s:33:"Папки специальные";' .
            'i:2660622;s:42:"Разделители и закладки";' .
            'i:2973057;s:29:"Новая категория";' .
            'i:3167120;s:29:"Новая категория";' .
            'i:4630034;s:36:"Шило, нити и шпагаты";' .
            'i:4641568;s:39:"Настольные картотеки";' .
            'i:4655242;s:40:"Пломбы и пломбираторы";' .
            'i:4655266;s:12:"Сургуч";' .
            'i:4655272;s:38:"Досточки для оттиска";' .
            'i:2460392;s:20:"Канцелярия";' .
            'i:2460402;s:62:"Архивирование и делопроизводство";' .
            'i:2514877;s:41:"Штемпельная продукция";' .
            'i:2898382;s:58:"Самонаборные штампы, кассы букв";' .
            'i:2898387;s:53:"Штемпельные краски и подушки";' .
            'i:4628926;s:12:"Датеры";' .
            'i:4629073;s:53:"Оснастки, штампы стандартные";' .
            'i:4660667;s:46:"не должно выгружаться (old)";' .
            'i:4660668;s:44:"old не должно выгружаться";' .
            'i:4660666;s:45:"не должно выгружаться _old";' .
            'i:4660669;s:71:"не использовать не должно выгружаться ";' .
            'i:4660651;s:53:"Рестораны и продуктовые сети";' .
            'i:4660652;s:18:"Рестораны";' .
            'i:4660653;s:31:"Продуктовые сети";}' .
            'i:1;N;}',
        'rz_category_import_status' => '0',
        'SellerDistribution' => 'a:2:{i:0;s:87:"{"positions":["supervisor"],"teamDirections":[2],"includedUsers":[],"excludedUsers":[]}";i:1;N;}',
        'active_user_names' =>
            'a:2:{' .
            'i:0;a:32:{i:0;a:2:{s:2:"id";i:4;s:4:"name";s:31:"Константин Куцан";}' .
            'i:1;a:2:{s:2:"id";i:11;s:4:"name";s:43:"Менеджер Контентович 1А";}' .
            'i:2;a:2:{s:2:"id";i:12;s:4:"name";s:43:"Менеджер Контентович 1Б";}' .
            'i:3;a:2:{s:2:"id";i:13;s:4:"name";s:43:"Менеджер Контентович 2А";}' .
            'i:4;a:2:{s:2:"id";i:14;s:4:"name";s:43:"Менеджер Контентович 2Б";}' .
            'i:5;a:2:{s:2:"id";i:39;s:4:"name";s:37:"Менеджер Модерашкин";}' .
            'i:6;a:2:{s:2:"id";i:17;s:4:"name";s:41:"Менеджер Продактович 1";}' .
            'i:7;a:2:{s:2:"id";i:18;s:4:"name";s:41:"Менеджер Продактович 2";}' .
            'i:8;a:2:{s:2:"id";i:21;s:4:"name";s:35:"Менеджер Фоткович 1";}' .
            'i:9;a:2:{s:2:"id";i:22;s:4:"name";s:35:"Менеджер Фоткович 2";}' .
            'i:10;a:2:{s:2:"id";i:19;s:4:"name";s:25:"Сео Сеошевич 1";}' .
            'i:11;a:2:{s:2:"id";i:20;s:4:"name";s:25:"Сео Сеошевич 2";}' .
            'i:12;a:2:{s:2:"id";i:33;s:4:"name";s:50:"Супервайзер Групповушкин 13";}' .
            'i:13;a:2:{s:2:"id";i:36;s:4:"name";s:50:"Супервайзер Групповушкин 16";}' .
            'i:14;a:2:{s:2:"id";i:35;s:4:"name";s:46:"Супервайзер Категоркин 15";}' .
            'i:15;a:2:{s:2:"id";i:38;s:4:"name";s:46:"Супервайзер Категоркин 18";}' .
            'i:16;a:2:{s:2:"id";i:6;s:4:"name";s:51:"Супервайзер Начальникович 1";}' .
            'i:17;a:2:{s:2:"id";i:30;s:4:"name";s:52:"Супервайзер Начальникович 10";}' .
            'i:18;a:2:{s:2:"id";i:31;s:4:"name";s:52:"Супервайзер Начальникович 11";}' .
            'i:19;a:2:{s:2:"id";i:32;s:4:"name";s:52:"Супервайзер Начальникович 12";}' .
            'i:20;a:2:{s:2:"id";i:10;s:4:"name";s:51:"Супервайзер Начальникович 2";}' .
            'i:21;a:2:{s:2:"id";i:23;s:4:"name";s:51:"Супервайзер Начальникович 3";}' .
            'i:22;a:2:{s:2:"id";i:24;s:4:"name";s:51:"Супервайзер Начальникович 4";}' .
            'i:23;a:2:{s:2:"id";i:25;s:4:"name";s:51:"Супервайзер Начальникович 5";}' .
            'i:24;a:2:{s:2:"id";i:26;s:4:"name";s:51:"Супервайзер Начальникович 6";}' .
            'i:25;a:2:{s:2:"id";i:27;s:4:"name";s:51:"Супервайзер Начальникович 7";}' .
            'i:26;a:2:{s:2:"id";i:28;s:4:"name";s:51:"Супервайзер Начальникович 8";}' .
            'i:27;a:2:{s:2:"id";i:29;s:4:"name";s:51:"Супервайзер Начальникович 9";}' .
            'i:28;a:2:{s:2:"id";i:34;s:4:"name";s:46:"Супервайзер Проектенко 14";}' .
            'i:29;a:2:{s:2:"id";i:37;s:4:"name";s:46:"Супервайзер Проектенко 17";}' .
            'i:30;a:2:{s:2:"id";i:5;s:4:"name";s:45:"Супервайзер Руководько 1";}' .
            'i:31;a:2:{s:2:"id";i:16;s:4:"name";s:23:"Тим Лидович 2";}' .
            '}i:1;N;}',
        'allowed_types_4' => 'value',
        'available_perms' => 'value',
        'perms_names' => 'value',
        'perms_by_role_admin' => 'value', //при изменении роли у юзера
        'perms_by_role_supervisor' => 'value', //при изменении роли у юзера
        'managers_2' => 'value',
        'managers_17' => 'value',
        'supervisors' => 'value',
        'user_names' => 'value',
        'user_team_ids_1' => 'value',
        'user_team_ids_2' => 'value',
        'user_permissions_4' => 'value',
        'user_permissions_11' => 'value',
    ];

    public const POSITIONS = [
        'admin' => 'Администратор (Все)',
        'contentManager' => 'Контент-менеджер (Контент)',
        'headSupervisor' => 'Руководитель супервайзеров (Все)',
        'marketolog' => 'Маркетолог (Маркетинг)',
        'moderator' => 'Сотрудник отдела модерации (Контент)',
        'photoManager' => 'Сотрудник фотостудии (Контент)',
        'productManager' => 'Продакт-менеджер (Контент)',
        'seo' => 'Сотрудник seo-отдела (Контент)',
        'supervisor' => 'Супервайзер (Контент)',
        'system' => 'Система (Все)',
        'teamLead' => 'Руководитель направления (тимлид) (Все)',
    ];

    public const PROJECT_POSITIONS = [
        0 => [
            0 => [
                'value' => 'admin',
                'text' => 'Администратор',
            ],
            1 => [
                'value' => 'headSupervisor',
                'text' => 'Руководитель супервайзеров',
            ],
            2 => [
                'value' => 'teamLead',
                'text' => 'Руководитель направления (тимлид)',
            ],
        ],
        1 => [
            0 => [
                'value' => 'contentManager',
                'text' => 'Контент-менеджер',
            ],
            1 => [
                'value' => 'moderator',
                'text' => 'Сотрудник отдела модерации',
            ],
            2 => [
                'value' => 'photoManager',
                'text' => 'Сотрудник фотостудии',
            ],
            3 => [
                'value' => 'productManager',
                'text' => 'Продакт-менеджер',
            ],
            4 => [
                'value' => 'seo',
                'text' => 'Сотрудник seo-отдела',
            ],
            5 => [
                'value' => 'supervisor',
                'text' => 'Супервайзер',
            ],
        ],
        2 => [
            0 => [
                'value' => 'marketolog',
                'text' => 'Маркетолог',
            ],
        ],
    ];

    public const ACTIVE_TEAMS = [
        [
            'value' => 1,
            'text' => 'Маркетплейс 1 (Контент)',
        ],
        [
            'value' => 2,
            'text' => 'Маркетплейс 2 (Контент)',
        ],
        [
            'value' => 3,
            'text' => 'Маркетплейс 3 (Контент)',
        ],
        [
            'value' => 4,
            'text' => 'Маркетплейс 4 (Контент)',
        ],
        [
            'value' => 5,
            'text' => 'Маркетплейс 5 (Контент)',
        ],
        [
            'value' => 7,
            'text' => 'Маркетплейс Freelance (Контент)',
        ],
        [
            'value' => 8,
            'text' => 'Fashion (Контент)',
        ],
        [
            'value' => 9,
            'text' => 'FMCG, Косметика и парфюмерия (Контент)',
        ],
        [
            'value' => 10,
            'text' => 'IT, Аксесуари, Уценка (Контент)',
        ],
        [
            'value' => 11,
            'text' => 'Бытовая техника, сантехника (Контент)',
        ],
        [
            'value' => 13,
            'text' => 'Rozetka Freelance (Контент)',
        ],
        [
            'value' => 14,
            'text' => 'Группировка товаров (Контент)',
        ],
        [
            'value' => 15,
            'text' => 'Проектирование структур категорий + фильтры (Контент)',
        ],
        [
            'value' => 16,
            'text' => 'Изменения в категориях (Контент)',
        ],
        [
            'value' => 17,
            'text' => 'Административная команда (Все)',
        ],
        [
            'value' => 18,
            'text' => 'Маркетплейс (инициаторы) (Контент)',
        ],
        [
            'value' => 19,
            'text' => 'SEO-отдел (Контент)',
        ],
        [
            'value' => 20,
            'text' => 'Фотостудия (Контент)',
        ],
        [
            'value' => 21,
            'text' => 'Маркетинг (Маркетинг)',
        ],
    ];

    public const ALL_TEAMS = [
        [
            'value' => 1,
            'text' => 'Маркетплейс 1 (Контент)',
        ],
        [
            'value' => 2,
            'text' => 'Маркетплейс 2 (Контент)',
        ],
        [
            'value' => 3,
            'text' => 'Маркетплейс 3 (Контент)',
        ],
        [
            'value' => 4,
            'text' => 'Маркетплейс 4 (Контент)',
        ],
        [
            'value' => 5,
            'text' => 'Маркетплейс 5 (Контент)',
        ],
        [
            'value' => 6,
            'text' => 'Маркетплейс 6 (Контент)',
        ],
        [
            'value' => 7,
            'text' => 'Маркетплейс Freelance (Контент)',
        ],
        [
            'value' => 8,
            'text' => 'Fashion (Контент)',
        ],
        [
            'value' => 9,
            'text' => 'FMCG, Косметика и парфюмерия (Контент)',
        ],
        [
            'value' => 10,
            'text' => 'IT, Аксесуари, Уценка (Контент)',
        ],
        [
            'value' => 11,
            'text' => 'Бытовая техника, сантехника (Контент)',
        ],
        [
            'value' => 12,
            'text' => 'Спорт и туризм, Автотовары (Контент)',
        ],
        [
            'value' => 13,
            'text' => 'Rozetka Freelance (Контент)',
        ],
        [
            'value' => 14,
            'text' => 'Группировка товаров (Контент)',
        ],
        [
            'value' => 15,
            'text' => 'Проектирование структур категорий + фильтры (Контент)',
        ],
        [
            'value' => 16,
            'text' => 'Изменения в категориях (Контент)',
        ],
        [
            'value' => 17,
            'text' => 'Административная команда (Все)',
        ],
        [
            'value' => 18,
            'text' => 'Маркетплейс (инициаторы) (Контент)',
        ],
        [
            'value' => 19,
            'text' => 'SEO-отдел (Контент)',
        ],
        [
            'value' => 20,
            'text' => 'Фотостудия (Контент)',
        ],
        [
            'value' => 21,
            'text' => 'Маркетинг (Маркетинг)',
        ],
    ];

    public const USER_NAMES = [
        1 => 'Система',
        2 => 'Администратор',
        3 => 'Гость',
        4 => 'Константин Куцан',
        5 => 'Супервайзер Руководько 1',
        6 => 'Супервайзер Начальникович 1',
        7 => 'Splitter.Moderation',
        8 => 'Mobile Courier',
        9 => 'JIRA COMI-запрос на замер',
        10 => 'Супервайзер Начальникович 2',
        11 => 'Менеджер Контентович 1А',
        12 => 'Менеджер Контентович 1Б',
        13 => 'Менеджер Контентович 2А',
        14 => 'Менеджер Контентович 2Б',
        15 => 'Тим Лидович 1',
        16 => 'Тим Лидович 2',
        17 => 'Менеджер Продактович 1',
        18 => 'Менеджер Продактович 2',
        19 => 'Сео Сеошевич 1',
        20 => 'Сео Сеошевич 2',
        21 => 'Менеджер Фоткович 1',
        22 => 'Менеджер Фоткович 2',
        23 => 'Супервайзер Начальникович 3',
        24 => 'Супервайзер Начальникович 4',
        25 => 'Супервайзер Начальникович 5',
        26 => 'Супервайзер Начальникович 6',
        27 => 'Супервайзер Начальникович 7',
        28 => 'Супервайзер Начальникович 8',
        29 => 'Супервайзер Начальникович 9',
        30 => 'Супервайзер Начальникович 10',
        31 => 'Супервайзер Начальникович 11',
        32 => 'Супервайзер Начальникович 12',
        33 => 'Супервайзер Групповушкин 13',
        34 => 'Супервайзер Проектенко 14',
        35 => 'Супервайзер Категоркин 15',
        36 => 'Супервайзер Групповушкин 16',
        37 => 'Супервайзер Проектенко 17',
        38 => 'Супервайзер Категоркин 18',
        39 => 'Менеджер Модерашкин'
    ];

    public const PROJECTS = [
        [
            'value' => 0,
            'text' => 'Все',
        ],
        [
            'value' => 1,
            'text' => 'Контент',
        ],
        [
            'value' => 2,
            'text' => 'Маркетинг',
        ],
    ];

    public const PROJECT_PERMISSIONS = [
        0 => [
            'Управление пользователями' => [
                [
                    'blockUser' => 'Блокирование пользователей',
                    'updateUser' => 'Изменение пользователей',
                    'viewUser' => 'Просмотр пользователей',
                ],
                [
                    'errorsUpdate' => 'Редактирование истории ошибок (Контент)',
                    'createUser' => 'Создание пользователей',
                ],
            ],
            'Управление заявками' => [
                [
                    'takeToWork' => 'Взятие в работу и выполнение/отмена заявок (не менеджером заявки) (Контент)',
                    'requestUpdate' => 'Обновление полей заявок (Контент)',
                    'massEdit' => 'Пакетное редактирование (Контент)',
                ],
                [
                    'requestViewAllRequests' => 'Просмотр всех заявок (Контент)',
                    'requestViewTeamRequests' => 'Просмотр заявок команды (Контент)',
                    'viewSplitterModerationRequests' => 'Просмотр заявок отдела модерации (Контент)',
                ],
                [
                    'requestViewDirectionRequests' => 'Просмотр заявок своего направления (Контент)',
                    'requestViewOwnRequests' => 'Просмотр своих заявок (Контент)',
                    'requestCreate' => 'Создание задач (Контент)',
                ],
                [
                    'requestCreateRelated' => 'Создание подзадач (Контент)',
                    'requestDeleteAttachments' => 'Удаление вложеных файлов (Контент)',
                ],
            ],
            'Переходы по статусам' => [
                [
                    'transferInWorkToCompleted' => 'В работе	-> Выполнена (Контент)',
                    'transferInWorkToWaitWork' => 'В работе -> Ожидает взятия в работу (Контент)',
                    'transferInWorkToOnHold' => 'В работе	-> Ожидает (нужны ризоны) (Контент)',
                ],
                [
                    'transferInWorkToDeclined' => 'В работе	-> Отменена (Контент)',
                    'transferInWorkToPartialComplete' => 'В работе	-> Частично выполнена (нужны ризоны) (Контент)',
                    'transferCompletedToInWork' => 'Выполнена -> В работе (Контент)',
                ],
                [
                    'transferCompletedToClosed' => 'Выполнена -> Закрыта (Контент)',
                    'transferInCheckToRequireChange' => 'Готова для распределения -> На доработке (Контент)',
                    'transferInCheckToWaitWork' => 'Готова для распределения -> Ожидает взятия в работу (Контент)',
                ],
                [
                    'transferInCheckToDeclined' => 'Готова для распределения -> Отменена (Контент)',
                    'transferRequireChangeToWaitCheck' => 'На доработке -> Новая (Контент)',
                    'transferRequireChangeToDeclined' => 'На доработке -> Отменена (Контент)',
                ],
                [
                    'transferWaitCheckToRequireChange' => 'Новая -> На доработке (Контент)',
                    'transferWaitCheckToWaitWork' => 'Новая -> Ожидает взятия в работу (Контент)',
                    'transferWaitCheckToDeclined' => 'Новая -> Отменена (Контент)',
                ],
                [
                    'transferWaitCheckToInCheck' => 'Новые -> Готовы для распределения (Контент)',
                    'transferWaitWorkToInWork' => 'Ожидает взятия в работу -> В работе (Контент)',
                    'transferWaitWorkToDeclined' => 'Ожидает взятия в работу -> Отменена (Контент)',
                ],
                [
                    'transferOnHoldToCompleted' => 'Ожидает -> Выполнена (Контент)',
                    'transferOnHoldToInWork' => 'Ожидает (нужны ризоны) -> В работе (Контент)',
                    'transferOnHoldToPartialComplete' => 'Ожидает -> Частично выполнена (Контент)',
                ],
                [
                    'transferPartialCompleteToInWork' => 'Частично выполнена -> В работе (Контент)',
                    'transferPartialCompleteToClosed' => 'Частично выполнена -> Закрыта (Контент)',
                ],
            ],
            'Отчеты' => [
                [
                    'reportLoadAllUsers' => 'Выгрузка отчетов по всем пользователям (Контент)',
                    'reportLoadMarketUsers' => 'Выгрузка отчетов по пользователям направления Маркетплейс (Контент)',
                    'reportLoadYourTeam' => 'Выгрузка отчетов по своей комманде (Контент)',
                ],
                [
                    'reportView' => 'Просмотр отчетов (Контент)',
                ],
            ],
            'Заявки' => [
                [
                    'requestGroupItems' => 'Группировка товаров (Контент)',
                    'requestAddUpdateVideo' => 'Добавление/изменение видео (Контент)',
                    'requestUpdateFatPortalCat' => 'Добавление/изменение информации в существующих порталах/фат-меню/категориях товаров (Контент)',
                ],
                [
                    'requestUpdateItems' => 'Добавление/изменение информации в существующих товарах (Контент)',
                    'requestAddUpdateSizeGrid' => 'Добавление/изменение размерной сетки (Контент)',
                    'requestAddUpdateTags' => 'Добавление/изменение тегов (Контент)',
                ],
                [
                    'requestAddFatPortalCat' => 'Добавление нового портала/раздела фат-меню/категории товаров (Контент)',
                    'requestAddUpdateSC' => 'Добавление новых СЦ/изменение существующих СЦ (Контент)',
                    'requestAddNewItems' => 'Добавление новых товаров (Контент)',
                ],
                [
                    'requestAddAttrOrValues' => 'Добавление параметров/значений (Контент)',
                    'requestUploadPhoto' => 'Заливка фото с фотостудии (Контент)',
                    'requestUpdateAttrOrValues' => 'Изменение существующих параметров/значений (Контент)',
                ],
                [
                    'commentRequestMrk' => 'Комментирование задач (Маркетинг)',
                    'requestTransferItems' => 'Перенос товаров (Контент)',
                    'requestCheckHidden' => 'Проверка скрытых товаров (Контент)',
                ],
                [
                    'requestStructureDesign' => 'Проектирование структуры (Контент)',
                    'viewAllRequestsMrk' => 'Просмотр всех задач (Маркетинг)',
                    'viewTeamRequestsMrk' => 'Просмотр задач команды (Маркетинг)',
                ],
                [
                    'viewOwnRequestsMrk' => 'Просмотр только своих задач (Маркетинг)',
                    'updateRequestMrk' => 'Редактирование задач (Маркетинг)',
                    'createRequestMrk' => 'Создание задач (Маркетинг)',
                ],
                [
                    'createSubRequestMrk' => 'Создание подзадач (Маркетинг)',
                    'createFilterMrk' => 'Создание фильтра (Маркетинг)',
                ],
            ],
            'Шаблоны' => [
                [
                    'updateTemplates' => 'Обновление чужих шаблонов (Контент)',
                    'seeAllTemplates' => 'Просмотр всех шаблонов (Контент)',
                    'seeTeamTemplates' => 'Просмотр шаблонов команды (Контент)',
                ],
                [
                    'seeDirectionTemplates' => 'Просмотр шаблонов направления (Контент)',
                ],
            ],
            'Дашборды' => [
                [
                    'viewDashboardsByCommand' => 'Просмотр дашбордов для супервизоров по своей команде (Контент)',
                    'viewDashboardsByDirection' => 'Просмотр дашбордов по заявкам направления Маркет (Контент)',
                    'viewOwnDashboards' => 'Просмотр дашбордов по своим заявкам (Контент)',
                ],
                [
                    'viewAllDashboards' => 'Просмотр дашбордов с заявками всех направлений, команд и пользователей (Контент)',
                ],
            ],
            'Управление настройками' => [
                [
                    'excludedFieldsUpdate' => 'Редактирование взаимоисключающих чекбоксов (Контент)',
                    'categoryUpdate' => 'Редактирование категорий (Контент)',
                    'teamUpdate' => 'Редактирование команд (Контент)',
                ],
                [
                    'coefUpdate' => 'Редактирование коэфициентов (Контент)',
                    'sellerUpdate' => 'Редактирование магазинов (Контент)',
                    'fieldsUpdate' => 'Редактирование полей (Контент)',
                ],
                [
                    'priorityUpdate' => 'Редактирование приоритетов (Контент)',
                    'reasonsUpdate' => 'Редактирование причин (Контент)',
                ],
            ],
        ],
        1 => [
            'Управление пользователями' => [
                [
                    'blockUser' => 'Блокирование пользователей',
                    'updateUser' => 'Изменение пользователей',
                    'viewUser' => 'Просмотр пользователей',
                ],
                [
                    'errorsUpdate' => 'Редактирование истории ошибок',
                    'createUser' => 'Создание пользователей',
                ],
            ],
            'Управление заявками' => [
                [
                    'takeToWork' => 'Взятие в работу и выполнение/отмена заявок (не менеджером заявки)',
                    'requestUpdate' => 'Обновление полей заявок',
                    'massEdit' => 'Пакетное редактирование',
                ],
                [
                    'requestViewAllRequests' => 'Просмотр всех заявок',
                    'requestViewTeamRequests' => 'Просмотр заявок команды',
                    'viewSplitterModerationRequests' => 'Просмотр заявок отдела модерации',
                ],
                [
                    'requestViewDirectionRequests' => 'Просмотр заявок своего направления',
                    'requestViewOwnRequests' => 'Просмотр своих заявок',
                    'requestCreate' => 'Создание задач',
                ],
                [
                    'requestCreateRelated' => 'Создание подзадач',
                    'requestDeleteAttachments' => 'Удаление вложеных файлов',
                ],
            ],
            'Переходы по статусам' => [
                [
                    'transferInWorkToCompleted' => 'В работе	-> Выполнена',
                    'transferInWorkToWaitWork' => 'В работе -> Ожидает взятия в работу',
                    'transferInWorkToOnHold' => 'В работе	-> Ожидает (нужны ризоны)',
                ],
                [
                    'transferInWorkToDeclined' => 'В работе	-> Отменена',
                    'transferInWorkToPartialComplete' => 'В работе	-> Частично выполнена (нужны ризоны)',
                    'transferCompletedToInWork' => 'Выполнена -> В работе',
                ],
                [
                    'transferCompletedToClosed' => 'Выполнена -> Закрыта',
                    'transferInCheckToRequireChange' => 'Готова для распределения -> На доработке',
                    'transferInCheckToWaitWork' => 'Готова для распределения -> Ожидает взятия в работу',
                ],
                [
                    'transferInCheckToDeclined' => 'Готова для распределения -> Отменена',
                    'transferRequireChangeToWaitCheck' => 'На доработке -> Новая',
                    'transferRequireChangeToDeclined' => 'На доработке -> Отменена',
                ],
                [
                    'transferWaitCheckToRequireChange' => 'Новая -> На доработке',
                    'transferWaitCheckToWaitWork' => 'Новая -> Ожидает взятия в работу',
                    'transferWaitCheckToDeclined' => 'Новая -> Отменена',
                ],
                [
                    'transferWaitCheckToInCheck' => 'Новые -> Готовы для распределения',
                    'transferWaitWorkToInWork' => 'Ожидает взятия в работу -> В работе',
                    'transferWaitWorkToDeclined' => 'Ожидает взятия в работу -> Отменена',
                ],
                [
                    'transferOnHoldToCompleted' => 'Ожидает -> Выполнена',
                    'transferOnHoldToInWork' => 'Ожидает (нужны ризоны) -> В работе',
                    'transferOnHoldToPartialComplete' => 'Ожидает -> Частично выполнена',
                ],
                [
                    'transferPartialCompleteToInWork' => 'Частично выполнена -> В работе',
                    'transferPartialCompleteToClosed' => 'Частично выполнена -> Закрыта',
                ],
            ],
            'Отчеты' => [
                [
                    'reportLoadAllUsers' => 'Выгрузка отчетов по всем пользователям',
                    'reportLoadMarketUsers' => 'Выгрузка отчетов по пользователям направления Маркетплейс',
                    'reportLoadYourTeam' => 'Выгрузка отчетов по своей комманде',
                ],
                [
                    'reportView' => 'Просмотр отчетов',
                ],
            ],
            'Заявки' => [
                [
                    'requestGroupItems' => 'Группировка товаров',
                    'requestAddUpdateVideo' => 'Добавление/изменение видео',
                    'requestUpdateFatPortalCat' => 'Добавление/изменение информации в существующих порталах/фат-меню/категориях товаров',
                ],
                [
                    'requestUpdateItems' => 'Добавление/изменение информации в существующих товарах',
                    'requestAddUpdateSizeGrid' => 'Добавление/изменение размерной сетки',
                    'requestAddUpdateTags' => 'Добавление/изменение тегов',
                ],
                [
                    'requestAddFatPortalCat' => 'Добавление нового портала/раздела фат-меню/категории товаров',
                    'requestAddUpdateSC' => 'Добавление новых СЦ/изменение существующих СЦ',
                    'requestAddNewItems' => 'Добавление новых товаров',
                ],
                [
                    'requestAddAttrOrValues' => 'Добавление параметров/значений',
                    'requestUploadPhoto' => 'Заливка фото с фотостудии',
                    'requestUpdateAttrOrValues' => 'Изменение существующих параметров/значений',
                ],
                [
                    'requestTransferItems' => 'Перенос товаров',
                    'requestCheckHidden' => 'Проверка скрытых товаров',
                    'requestStructureDesign' => 'Проектирование структуры',
                ],
            ],
            'Шаблоны' => [
                [
                    'updateTemplates' => 'Обновление чужих шаблонов',
                    'seeAllTemplates' => 'Просмотр всех шаблонов',
                    'seeTeamTemplates' => 'Просмотр шаблонов команды',
                ],
                [
                    'seeDirectionTemplates' => 'Просмотр шаблонов направления',
                ],
            ],
            'Дашборды' => [
                [
                    'viewDashboardsByCommand' => 'Просмотр дашбордов для супервизоров по своей команде',
                    'viewDashboardsByDirection' => 'Просмотр дашбордов по заявкам направления Маркет',
                    'viewOwnDashboards' => 'Просмотр дашбордов по своим заявкам',
                ],
                [
                    'viewAllDashboards' => 'Просмотр дашбордов с заявками всех направлений, команд и пользователей',
                ],
            ],
            'Управление настройками' => [
                [
                    'excludedFieldsUpdate' => 'Редактирование взаимоисключающих чекбоксов',
                    'categoryUpdate' => 'Редактирование категорий',
                    'teamUpdate' => 'Редактирование команд',
                ],
                [
                    'coefUpdate' => 'Редактирование коэфициентов',
                    'sellerUpdate' => 'Редактирование магазинов',
                    'fieldsUpdate' => 'Редактирование полей',
                ],
                [
                    'priorityUpdate' => 'Редактирование приоритетов',
                    'reasonsUpdate' => 'Редактирование причин',
                ],
            ],
        ],
        2 => [
            'Управление пользователями' => [
                [
                    'blockUser' => 'Блокирование пользователей',
                    'updateUser' => 'Изменение пользователей',
                    'viewUser' => 'Просмотр пользователей',
                ],
                [
                    'createUser' => 'Создание пользователей',
                ],
            ],
            'Заявки' => [
                [
                    'commentRequestMrk' => 'Комментирование задач',
                    'viewAllRequestsMrk' => 'Просмотр всех задач',
                    'viewTeamRequestsMrk' => 'Просмотр задач команды',
                ],
                [
                    'viewOwnRequestsMrk' => 'Просмотр только своих задач',
                    'updateRequestMrk' => 'Редактирование задач',
                    'createRequestMrk' => 'Создание задач',
                ],
                [
                    'createSubRequestMrk' => 'Создание подзадач',
                    'createFilterMrk' => 'Создание фильтра',
                ],
            ],
        ],
    ];

}