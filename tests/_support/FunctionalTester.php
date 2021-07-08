<?php

namespace lisa;

use Codeception\Actor;
use Codeception\Example;
use PhpOffice\PhpSpreadsheet\IOFactory;
use Exception;
use Yii;

/**
 * Inherited Methods
 * @method void wantToTest($text)
 * @method void wantTo($text)
 * @method void execute($callable)
 * @method void expectTo($prediction)
 * @method void expect($prediction)
 * @method void amGoingTo($argumentation)
 * @method void am($role)
 * @method void lookForwardTo($achieveValue)
 * @method void comment($description)
 * @method void pause()
 *
 * @SuppressWarnings(PHPMD)
 */
class FunctionalTester extends Actor
{
    use _generated\FunctionalTesterActions;

    /**
     * @param Example $data - данные кейса из файла data.php
     */
    public function loadDataForTest(Example $data)
    {
        $I = $this;

        $I->loadFixtureFromDataprovider();
        $I->loadMockFromDataprovider();

        $I->runShellCommand('./yii bpm/request/clear-lisa-redis');
        $I->runShellCommand('./yii bpm/request/clear-temporary-files');
        $I->purgeAllQueues();
        $I->resetCookie('viewTabsEnabled');

        $I->wantTo($data['setting']['description']);
        $I->amOnPage('/');
    }

    public const BPM_UPLOADS = '/var/www/gomer.local/www/backend/web/tmp/bpm_uploads/';

    public function checkTablesInDB($dbTablesArray)
    {
        $I = $this;

        foreach ($dbTablesArray as $dbData) {
            foreach ($dbData as $tableName => $tableData) {
                $I->canSeeNumRecords(count($tableData), $tableName);

                foreach ($tableData as $tableRow) {
                    $I->canSeeInDatabase($tableName, $tableRow);
                }
            }
        }
    }

    public function checkObjectsOnPage($pageObjects)
    {
        $I = $this;

        if (isset($pageObjects['canSee'])) {
            foreach ($pageObjects['canSee'] as $objects) {
                foreach ($objects as $object) {
                    isset($object['value']) ?
                        $I->canSee($object['value'], $object['selector']) :
                        $I->canSeeElement($object['selector']);
                }
            }
        }

        if (isset($pageObjects['cantSee'])) {
            foreach ($pageObjects['cantSee'] as $objects) {
                foreach ($objects as $object) {
                    isset($object['value']) ?
                        $I->cantSee($object['value'], $object['selector']) :
                        $I->cantSeeElement($object['selector']);
                }
            }
        }
    }

    public function checkRabbitMQ($providerData)
    {
        $I = $this;

        if (isset($providerData['RabbitMQ'])) {

            foreach ($providerData['RabbitMQ'] as $queueName => $queueMessages) {
                $I->canSeeNumberOfMessagesInQueue($queueName, count($queueMessages));

                foreach ($queueMessages as $message) {
                    $I->canSeeMessageInQueueContainsText($queueName, $message);
                }
            }
        }
    }

    public function checkSellerRedis($redis)
    {
        $I = $this;

        if (isset($redis['canSee'])) {
            foreach ($redis['canSee'] as $key => $value) {
                $I->assertEquals(1, Yii::$app->redis->exists($key));
                $I->assertSame($value, Yii::$app->redis->get($key));
            }
        }

        if (isset($redis['cantSee'])) {
            foreach ($redis['cantSee'] as $key => $value) {
                $I->assertEquals(0, Yii::$app->redis->exists($key));
            }
        }
    }

    public function checkXlsxFile(?array $fileContent, ?int $rowCount = null, int $sheetCount = 1, string $filepath = FunctionalTester::BPM_UPLOADS)
    {
        $I = $this;

        if ($fileContent) {

            $file = IOFactory::createReader('Xlsx')
                ->load($filepath . scandir($filepath, 1)[0]);
            $tableArray = $file->getSheet(0)->toArray(null, true, true, true);
            $exceptions = null;

            try {
                $I->assertEquals($sheetCount, $file->getSheetCount());
            } catch (Exception $exception) {
                $exceptions[] = [
                    "expected" => $sheetCount,
                    "actual" => $file->getSheetCount(),
                    $exception->getMessage()
                ];
            }

            try {
                $I->assertEquals($rowCount, count($tableArray));
            } catch (Exception $exception) {
                $exceptions[] = [
                    "expected" => $rowCount,
                    "actual" => count($tableArray),
                    $exception->getMessage()
                ];
            }

            $i = 1;
            foreach ($fileContent as $row) {
                try {
                    $I->assertEquals($row, $tableArray[$i]);
                } catch (Exception $exception) {
                    $exceptions[] = [
                        "expected" => $row,
                        "actual" => $tableArray[$i],
                        $exception->getMessage()
                    ];
                }
                $i++;
            }

            $I->assertNull($exceptions);
        }
    }

    public function loadDataForRedis(array $keys)
    {
        foreach ($keys as $key => $value)
            Yii::$app->redis->set($key, $value);
    }

    public function checkRedis(?array $excludedKeys = null)
    {
        $I = $this;

        $redisKeys = self::REDIS_KEYS_VALUES;

        if (isset($excludedKeys)) {
            foreach ($excludedKeys as $key) {
                $I->assertEquals(0, Yii::$app->redis->exists($key));
                unset($redisKeys[$key]);
            }
        }

        foreach ($redisKeys as $key => $value)
            $I->assertEquals(1, Yii::$app->redis->exists($key));
    }

    public const REDIS_KEYS_VALUES = [
        'active_category_ids5ec4d878ccfce7dc3c19481d6a063478' => 'value',
        'all_category_namesfa94761536e04215430d7de0b502b16e' => 'value',
        'all_excluded_fields280d3acd22e0ce237b19d4aea2c1d44b' => 'value',
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
        'all_periods3e29485f645ec91800b2087082689a4b' => 'value',
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
    ];
}
