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

    public function loadDataForTest(Example $data, TestHelper $testHelper)
    {
        $I = $this;
        $testHelper->clearDB($I, $data);
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