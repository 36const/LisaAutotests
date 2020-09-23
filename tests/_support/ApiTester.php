<?php

namespace lisa;

use Codeception\Util\HttpCode;
use Codeception\Example;
use rzk\TestHelper;

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
class ApiTester extends \Codeception\Actor
{
    use _generated\ApiTesterActions;

    /**
     * @param Example $data - данные кейса из файла data.php
     * @param TestHelper $testHelper
     * @param array|string[] $globalFile - название файла глобальных фикстур
     * @param bool $globalUsing - нужно ли использовать глобальные фикстуры
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function loadDataForTest(Example $data, TestHelper $testHelper,
                                    array $globalFile = ['oneUser'], bool $globalUsing = true)
    {
        $I = $this;
        $I->runShellCommand('./yii bpm/request/clear-lisa-redis');
        $testHelper->clearDB($I, $data, $globalFile);

        if ($globalUsing)
            $testHelper->loadGlobalFixture($I, $globalFile);

        $testHelper->loadFixtureAndMock($I, $data);
        $I->wantTo($data['setting']['description']);
    }

    public function checkTablesInDB($dbTablesArray)
    {
        $I = $this;

        foreach ($dbTablesArray as $dbName => $dbData) {
            $I->amConnectedToDatabase($dbName);

            foreach ($dbData as $tableName => $tableData) {

                $expectedNumber = count($tableData);
                $I->canSeeNumRecords($expectedNumber, $tableName);

                foreach ($tableData as $tableRow) {
                    $I->canSeeInDatabase($tableName, $tableRow);
                }
            }
        }
    }
}