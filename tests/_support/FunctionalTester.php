<?php

namespace lisa;

use Codeception\Util\HttpCode;
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

    public function loadDataForTest(\Codeception\Example $data, TestHelper $testHelper)
    {
        $I = $this;
        $testHelper->clearDB($I, $data);
        $testHelper->loadFixtureAndMock($I, $data);
        $I->wantTo($data['setting']['description']);
    }

    public function changeStatus($requestParameter, $requestBody)
    {
        $I = $this;
        $url = '/bpm/request/' . "$requestParameter" . '?id=1';
        $I->sendPOST($url, $requestBody);
        $I->seeResponseCodeIs(200);
    }

    public function validateInDB(string $DBName, string $table, $checkValuesRecords)
    {
        $I = $this;
        $I->amConnectedToDatabase($DBName);
        $I->seeInDatabase($table, $checkValuesRecords);
    }

    public function validateRequestsFieldsInDB($checkValuesRecords)
    {
        $I = $this;
        foreach ($checkValuesRecords as $key => $value) {
            $I->validateInDB('lisa_fixtures', 'requests_fields', $value);
        }
    }

    /**
     * Define custom actions here
     */
}
