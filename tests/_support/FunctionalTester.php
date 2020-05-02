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
class FunctionalTester extends \Codeception\Actor
{
    use _generated\FunctionalTesterActions;

    public function loadDataForTest(Example $data, TestHelper $testHelper)
    {
        $I = $this;
        $testHelper->clearDB($I, $data);
        $testHelper->loadFixtureAndMock($I, $data);
        $I->wantTo($data['setting']['description']);
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

    public function massEdit($requestBody) {
        $I = $this;
        $url = '/bpm/request/mass-edit';
        $I->sendPOST($url, $requestBody);
        $I->seeResponseCodeIs(200);
    }

    public function checkTablesInDB($dbTablesArray)
    {
        $I = $this;
        $errors = null;

        foreach ($dbTablesArray as $dbName => $dbData) {
            $I->amConnectedToDatabase($dbName);

            foreach ($dbData as $tableName => $tableData) {
                foreach ($tableData as $tableRow) {
                    try {
                        $I->seeInDatabase($tableName, $tableRow);
                    } catch (\Exception $exception) {
                       $errors[] = [
                           'table' => $tableName,
                           'row' => $tableRow,
                           'message' => $exception->getMessage()
                       ];
                    }
                }
            }
        }

        return $errors;
    }
}
