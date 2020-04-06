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
class ApiTester extends \Codeception\Actor
{
    use _generated\ApiTesterActions;

    /**
     * Define custom actions here
     */

    public function loadDataForTest(\Codeception\Example $data, TestHelper $testHelper)
    {
        $I = $this;
        $testHelper->loadFixtureAndMock($I, $data);
        $I->wantTo($data['setting']['description']);
    }

    public function validateGETResponse(\Codeception\Example $data)
    {
        $I = $this;
        $providerData = $data['provider_data'];
        $I->seeResponseCodeIs(HttpCode::OK);
        $I->canSeeResponseIsValidOnSchemaFile($providerData['json_structure']);
        $I->seeResponseContainsJson($providerData['response_fields']);
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
}

