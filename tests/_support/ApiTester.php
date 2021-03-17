<?php

namespace lisa;

use Codeception\Actor;
use Codeception\Example;

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
class ApiTester extends Actor
{
    use _generated\ApiTesterActions;

    /**
     * @param Example $data - данные кейса из файла data.php
     * @param string|null $globalFixture - название файла глобальных фикстур, при значении null глобальные фикстуры не используются
     */
    public function loadDataForTest(Example $data, ?string $globalFixture = 'oneUser')
    {
        $I = $this;

        if (isset($globalFixture))
            $I->insertFixtureToDatabase($globalFixture);

        $I->loadFixtureFromDataprovider();
        $I->loadMockFromDataprovider();

        $I->runShellCommand('./yii bpm/request/clear-lisa-redis');
        $I->wantTo($data['setting']['description']);
    }

    public function checkTablesInDB($dbTablesArray)
    {
        $I = $this;

        foreach ($dbTablesArray as $dbName => $dbData) {
            foreach ($dbData as $tableName => $tableData) {
                $I->canSeeNumRecords(count($tableData), $tableName);

                foreach ($tableData as $tableRow) {
                    $I->canSeeInDatabase($tableName, $tableRow);
                }
            }
        }
    }

    public const PARAMS_LOCAL = '/var/www/gomer.local/www/vendor/splitter-modules/gomer.bpm/config/params-local.php';

    public function setMaxFileSize(int $kilobytes, bool $unset = false)
    {
        $file = file(self::PARAMS_LOCAL);

        foreach ($file as $key => $str) {
            if (strpos($str, 'max_file_size')) {
                unset($file[$key]);
            }
        }

        if ($unset == false)
            array_splice($file, 3, 0, "    'max_file_size' => $kilobytes,\n");

        $fileArray = implode($file);
        $fo = fopen(self::PARAMS_LOCAL, 'w+');
        fwrite($fo, $fileArray);
    }

}