<?php

namespace lisa;

use Codeception\Example;
use rzk\TestHelper;

/**
 * @group lisa
 * @group lisa_functional
 * @group lisa_functional_users
 * @group GETStatusPermissions
 */
class GETStatusPermissionsCest
{
    /**
     * @var TestHelper $testHelper
     */
    private $testHelper;

    public function __construct()
    {
        $this->testHelper = new TestHelper(__DIR__);
    }

    /**
     * @return array
     */
    protected function pageProvider()
    {
        return $this->testHelper->getDataProvider('');
    }

    /**
     * @param FunctionalTester $I
     * @param Example $data
     * @throws \GuzzleHttp\Exception\GuzzleException
     *
     * @dataProvider pageProvider
     *
     */
    public function GETStatusPermissions(FunctionalTester $I, Example $data)
    {
        $I->loadDataForTest($data, $this->testHelper, ['oneUserWithoutPermissionsTable']);
        $providerData = $data['provider_data'];

        $I->amOnPage($providerData['url']);
        $I->checkObjectsOnPage($providerData['tablePageObjects']);

        $I->sendAjaxGetRequest('/bpm/request/get-context-menu?requestId=1');
        $I->checkAjaxResponse($providerData['ajaxResponse']);

        $I->amOnPage('/bpm/request/view?id=1&forCrossCheck=');
        $I->checkObjectsOnPage($providerData['requestPageObjects']);

        if (isset($providerData['toCorrectionPageObjects'])) {
            $I->amOnPage('/bpm/request/to-correction?id=1');
            $I->checkObjectsOnPage($providerData['toCorrectionPageObjects']);
        }

        if (isset($providerData['correctionPageObjects'])) {
            $I->amOnPage('/bpm/request/correction?id=1');
            $I->checkObjectsOnPage($providerData['correctionPageObjects']);
        }
    }
}
