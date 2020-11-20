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
class FunctionalTester extends \Codeception\Actor
{
    use _generated\FunctionalTesterActions;

    /**
     * @param Example $data - данные кейса из файла data.php
     * @param string|null $globalFixture - название файла глобальных фикстур, при значении [] глобальные фикстуры не используются
     */
    public function loadDataForTest(Example $data, ?string $globalFixture = 'oneUser')
    {
        $I = $this;
//        $testHelper->clearDB($I, $data, $globalFile);
//        $testHelper->resetMock();
        if (isset($globalFixture))
//            $testHelper->loadGlobalFixture($I, $globalFile);
            $I->insertFixtureToDatabase($globalFixture);
//
//        $testHelper->loadFixtureAndMock($I, $data);
//        $I->insertFixtureToDatabase($globalFile);

        $I->runShellCommand('./yii bpm/request/clear-lisa-redis');
        $I->runShellCommand('./yii bpm/request/clear-temporary-files');
        $I->purgeAllQueues();
        $I->resetCookie('viewTabsEnabled');

        $I->wantTo($data['setting']['description']);
        $I->amOnPage('/');
    }

    public function setViewTabs()
    {
        $I = $this;

        $I->cantSeeCookie('viewTabsEnabled');
        $I->sendGET('/bpm/request/enable-tabs');
        $I->canSeeCookie('viewTabsEnabled');
    }

    public function changeStatus($requestParameter, $requestBody)
    {
        $I = $this;
        $requestParameter == 'to-correction' ?
            $url = '/bpm/request/' . "$requestParameter" . '?id=1&changeStatus=1' :
            $url = '/bpm/request/' . "$requestParameter" . '?id=1';
        $I->sendPOST($url, $requestBody);
        $I->seeResponseCodeIs(200);
    }

    public function changeType($requestParameter, $requestBody)
    {
        $I = $this;
        $url = '/bpm/request/change-type?typeId=' . $requestParameter['typeId'] . '&direction=' . $requestParameter['direction'] . '&id=1';
        $I->sendPOST($url, $requestBody);
        $I->seeResponseCodeIs(200);
    }

    public function checkTablesInDB($dbTablesArray, bool $dontSee = false)
    {
        $I = $this;

        foreach ($dbTablesArray as $dbName => $dbData) {
            $I->amConnectedToDatabase($dbName);

            foreach ($dbData as $tableName => $tableData) {

                $expectedNumber = count($tableData);

                if (!$dontSee)
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

    public function checkAjaxResponse($ajaxResponse)
    {
        $I = $this;

        if (isset($ajaxResponse['canSee'])) {
            foreach ($ajaxResponse['canSee'] as $text) {
                $I->canSeeResponseContains($text);
            }
        }

        if (isset($ajaxResponse['cantSee'])) {
            foreach ($ajaxResponse['cantSee'] as $text) {
                $I->cantSeeResponseContains($text);
            }
        }
    }
}
