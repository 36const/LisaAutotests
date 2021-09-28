<?php

namespace lisa;

use Codeception\Actor;
use Codeception\Example;
use Codeception\Module\TestHelper;
use PhpOffice\PhpSpreadsheet\IOFactory;

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
class GeneralTester extends Actor
{
    /**
     * @param Example $data - данные кейса из файла data.php
     */
    public function loadDataForTest(Example $data)
    {
        $I = $this;

        $I->loadFixtureFromDataprovider();
        $I->loadMockFromDataprovider();
        $I->purgeAllQueues();
        $I->truncateTablesInDatabase(['lisa_fixtures' => ['exceptions' => []]]);

        $I->wantTo($data['setting']['description']);
        $I->haveHttpHeader('Content-Type', 'application/json');
    }

    public function checkTablesInDB($dbTablesArray)
    {
        $I = $this;

        foreach ($dbTablesArray as $dbTable) {
            foreach ($dbTable as $tableName => $tableData) {
                $I->canSeeNumRecords(count($tableData), $tableName);

                foreach ($tableData as $tableRow) {
                    $I->canSeeInDatabase($tableName, $tableRow);
                }
            }

            if (!in_array('exceptions', array_keys($dbTable)))
                $I->assertFalse($I->grabFromDatabase('exceptions', 'message'));
        }
    }

    /**
     * Создание массива для заполнения таблицы большим количеством записей
     */
    public static function generateManyRecords(int $quantity, string $table)
    {
        $allRecords = [];
        $record = (include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/' . $table . '.php')[0];

        while ($quantity > 0) {
            array_push($allRecords, $record);
            $quantity--;
        }

        return $allRecords;
    }

    /**
     * Проверка количества и значений сообщений в очереди.
     * Для очереди lisa_common добавляется 1, потому что последнее сообщение из этой очереди проверяется 
     * вместе с routing_key отдельно через метод checkRabbitMQWithRoutingKey
     */
    public function checkRabbitMQ(?array $providerData)
    {
        $I = $this;

        if ($providerData) {
            foreach ($providerData as $queueName => $queueMessages) {
                $queueName === 'lisa_common'
                    ? $I->canSeeNumberOfMessagesInQueue($queueName, count($queueMessages) + 1)
                    : $I->canSeeNumberOfMessagesInQueue($queueName, count($queueMessages));

                foreach ($queueMessages as $messageBody) {
                    $I->canSeeMessageInQueueContainsText($queueName, $messageBody);
                }
            }
        }
    }

    /**
     * Проверка одного последнего сообщения в очереди с его routing_key.
     */
    public function checkRabbitMQWithRoutingKey(?array $providerData, bool $notExactMatch = false)
    {
        $I = $this;

        if ($providerData) {
            foreach ($providerData as $queueName => $queueMessages) {
                $I->canSeeNumberOfMessagesInQueue($queueName, count($queueMessages));
                $lastMessage = (array)$I->grabMessageFromQueue($queueName);

                if (count($queueMessages) !== 0)
                    $I->assertNotEquals($lastMessage, []);

                foreach ($queueMessages as $routingKey => $messageBody) {
                    $I->assertEquals($routingKey, $lastMessage['delivery_info']['routing_key']);

                    if ($notExactMatch) {
                        foreach ($messageBody as $messageBodyPart)
                            $I->assertStringContainsString($messageBodyPart, $lastMessage['body']);
                    } else {
                        $I->assertEquals($messageBody, $lastMessage['body']);
                    }
                }
            }
        }
    }

    public static function interiorMockArray(string $event, int $marketId, string $responseFile = 'full')
    {
        return [
            'httpRequest' => [
                'method' => 'GET',
                'path' => '/v2/seller-notification/list',
                'queryStringParameters' => [
                    'notification' => [$event],
                    'channel' => ['email'],
                    'marketOwoxId' => ["$marketId"],
                    'expand' => ['email']
                ]
            ],
            'httpResponse' => [
                'headers' => [
                    'content-type' => [
                        'application/json; charset=UTF-8'
                    ]
                ],
                'body' => file_get_contents(codecept_data_dir('/Interior/' . $responseFile . '.json')),
                'statusCode' => 200
            ],
        ];
    }
    
    public function loadDataForRedis(array $keyValueArray = Constants::REDIS_KEYS_VALUES)
    {
        $I = $this;

        foreach ($keyValueArray as $key => $value)
            $I->haveInRedis('string', $key, $value);
    }

    /**
     * Проверка наличия/отсутствия ключей в редисе.
     * На отсутствие проверяются ключи, указанные в $excludedKeys
     */
    public function checkRedis(?array $excludedKeys = null, $redisKeys = Constants::REDIS_KEYS_VALUES)
    {
        $I = $this;

        if (isset($excludedKeys)) {
            foreach ($excludedKeys as $key) {
                $I->cantSeeInRedis($key);
                unset($redisKeys[$key]);
            }
        }

        foreach ($redisKeys as $key => $value)
            $I->canSeeInRedis($key);
    }

    /**
     * Проверка значения ключа в редисе после его изменения
     */
    public function checkKeyValueInRedis(?array $redisValueAfter = null)
    {
        $I = $this;

        if (isset($redisValueAfter)) {
            foreach ($redisValueAfter as $key => $items)
                foreach ($items as $item => $value)
                    $I->canSeeRedisKeyContains($key, (string)$item, $value);
        }
    }

    /**
     * Проверка Excel-файла на количество листов, количество строк и содержимое ячеек (только для первого листа).
     * Содержимое ячеек можно не проверять, указав значение [] для $fileContent
     */
    public function checkXlsxFile(?array $fileContent, ?int $rowCount = null, int $sheetCount = 1, string $filepath = './web/files/')
    {
        $I = $this;

        if (isset($fileContent)) {

            $file = IOFactory::createReader('Xlsx')
                ->load($filepath . scandir($filepath, 1)[0]);
            $tableArray = $file->getSheet(0)->toArray(null, true, true, true);
            $exceptions = null;

            try {
                $I->assertEquals($sheetCount, $file->getSheetCount());
            } catch (Exception $exception) {
                $exceptions[] = [
                    'expected' => $sheetCount,
                    'actual' => $file->getSheetCount(),
                    $exception->getMessage()
                ];
            }

            try {
                $I->assertEquals($rowCount, count($tableArray));
            } catch (Exception $exception) {
                $exceptions[] = [
                    'expected' => $rowCount,
                    'actual' => count($tableArray),
                    $exception->getMessage()
                ];
            }

            if ($fileContent !== []) {
                $i = 1;
                foreach ($fileContent as $row) {
                    try {
                        $I->assertEquals($row, $tableArray[$i]);
                    } catch (Exception $exception) {
                        $exceptions[] = [
                            'expected' => $row,
                            'actual' => $tableArray[$i],
                            $exception->getMessage()
                        ];
                    }
                    $i++;
                }
            }

            $I->assertNull($exceptions);
        }
    }
    
}