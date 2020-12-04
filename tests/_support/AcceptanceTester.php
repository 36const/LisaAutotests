<?php

namespace lisa;

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
class AcceptanceTester extends \Codeception\Actor
{
    use _generated\AcceptanceTesterActions;

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
        $I->runShellCommand('./yii bpm/request/clear-temporary-files');
        $I->purgeAllQueues();

        $I->wantTo($data['setting']['description']);
        $I->setAuthorizationCookie();
    }

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

        $I->seeCookie('_identity');
        $I->seeCookie('for_normal_people_4');
    }

    public function setRequestPerPageCookie(int $amount)
    {
        $I = $this;
        $I->resetCookie('requestsPerPage');
        $I->amOnPage('/bpm/request');

        $I->scrollTo('//div[@id="toolbar"]//ul[@class="dropdown-menu"]');
        $I->click('//div[@id="toolbar"]//a[@id="drop5"]');
        $I->click('//div[@id="toolbar"]//ul[@class="dropdown-menu"]//li//a[text()="'. $amount. '"]');

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
