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
    use _generated\AcceptanceTesterActions;

    /**
     * @param Example $data - данные кейса из файла data.php
     * @param TestHelper $testHelper
     * @param array|string[] $globalFile - название файла глобальных фикстур, по-умолчанию oneUser, при значении [] глобальные фикстуры не используются
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function loadDataForTest(Example $data, TestHelper $testHelper, array $globalFile = ['oneUser'])
    {
        $I = $this;
        $testHelper->clearDB($I, $data, $globalFile);

        if (isset($globalFile))
            $testHelper->loadGlobalFixture($I, $globalFile);

        $testHelper->loadFixtureAndMock($I, $data);

        $I->runShellCommand('./yii bpm/request/clear-lisa-redis');
        $I->runShellCommand('./yii bpm/request/clear-temporary-files');
        $I->purgeAllQueues();

        $I->wantTo($data['setting']['description']);
        $I->setAuthorizationCookie();
    }

    /**Установка куки авторизации*/
    private function setAuthorizationCookie()
    {
        $I = $this;
        $I->amOnPage('/');

        if (file_exists(__DIR__ . '/_identityCookie.txt')) {
            $I->setCookie('_identity', file_get_contents(__DIR__ . '/_identityCookie.txt'));
        } else {
            $I->fillField("LoginForm[username]", 'kutsan.k');
            $I->fillField("LoginForm[password]", '123qweASD!');
            $I->checkOption(['id' => 'loginform-isbasicauth']);
            $I->click("login-button");
            $I->waitForText("Добро пожаловать", 5);
            file_put_contents(__DIR__ . '/_identityCookie.txt', $I->grabCookie('_identity'));
        }

        $I->setCookie('for_normal_people_4', '1');
        $I->setCookie('requestsPerPage', '7bab5e6b3cd55b1ddf5a0d641017b292f3cb48c7cb5eeba7801e54bb1478711da%3A2%3A%7Bi%3A0%3Bs%3A15%3A%22requestsPerPage%22%3Bi%3A1%3Bi%3A20%3B%7D');

        $I->seeCookie('_identity');
        $I->seeCookie('for_normal_people_4');
        $I->seeCookie('requestsPerPage');

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
            foreach ($pageObjects['canSee'] as $object) {
                try {
                    $I->waitForElementVisible($object, 2);
                } catch (\Exception $e) {
                    $I->canSeeElement($object);
                }
            }
        }

        if (isset($pageObjects['cantSee'])) {
            foreach ($pageObjects['cantSee'] as $object) {
                try {
                    $I->waitForElementNotVisible($object, 2);
                } catch (\Exception $e) {
                    $I->cantSeeElement($object);
                }
            }
        }
    }

    public function checkCheckboxesOnPage($pageObjects)
    {
        $I = $this;

        if (isset($pageObjects['canSee'])) {
            foreach ($pageObjects['canSee'] as $checkbox) {
                $I->canSeeCheckboxIsChecked($checkbox);
            }
        }

        if (isset($pageObjects['cantSee'])) {
            foreach ($pageObjects['cantSee'] as $checkbox) {
                $I->cantSeeCheckboxIsChecked($checkbox);
            }
        }
    }
}
