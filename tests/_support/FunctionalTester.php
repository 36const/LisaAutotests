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

    public function checkRedis($redis)
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
}
