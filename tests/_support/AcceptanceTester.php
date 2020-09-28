<?php

namespace lisa;

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
class AcceptanceTester extends \Codeception\Actor
{
    use _generated\FunctionalTesterActions;

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
        $I->runShellCommand('./yii bpm/request/clear-temporary-files');
        $I->purgeAllQueues();
        $testHelper->clearDB($I, $data, $globalFile);

        if ($globalUsing)
            $testHelper->loadGlobalFixture($I, $globalFile);

        $testHelper->loadFixtureAndMock($I, $data);

        $I->wantTo($data['setting']['description']);
        $I->amOnPage('/');
    }

    /**
     * Метод авторизации без ввода login/pass. Авторизуемся путем проставления куки залогиненного юзера
     * @param string $startUrl - урл, по которому авторизуемся и стартуем наш тест
     */
    private function setAuthorizationCookie(string $startUrl)
    {
        $I = $this;
        $I->amOnPage($startUrl);

        $I->setCookie('_identity', file_get_contents(__DIR__ . '/_identityCookie.txt'));

        //убеждаемся что куки проставлены
        $I->seeCookie('_identity');
        $I->seeCookie('advanced-backend');

        //релоад страницы после того как засетились
        $I->amOnPage($startUrl);
    }

    /**
     * Метод получения куки залогиненного юзера, и отправки куки в файл для дальнейшего использования во всех последующих тестах.
     */

    public function getAuthorizationCookie()
    {
        $I = $this;
        file_put_contents(__DIR__ . '/_identityCookie.txt', $I->grabCookie('_identity') );
    }

    public function checkTablesInDB($dbTablesArray, bool $dontSee = false)
    {
        $I = $this;

        foreach ($dbTablesArray as $dbName => $dbData) {
            $I->amConnectedToDatabase($dbName);

            foreach ($dbData as $tableName => $tableData) {

                $expectedNumber = count($tableData);

                ($dontSee) ?:
                    $I->canSeeNumRecords($expectedNumber, $tableName);

                foreach ($tableData as $tableRow) {
                    (!$dontSee) ?
                        $I->canSeeInDatabase($tableName, $tableRow) :
                        $I->cantSeeInDatabase($tableName, $tableRow);
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
}
