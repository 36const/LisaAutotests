<?php

namespace lisa;

use Codeception\Example;
use rzk\TestHelper;

/**
 * @group lisa
 * @group lisa_functional
 * @group lisa_functional_users
 * @group GETPermissions
 */
class GETPermissionsCest
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
    public function GETPermissions(FunctionalTester $I, Example $data)
    {
        $I->loadDataForTest($data, $this->testHelper, ['oneUserWithoutPermissionsTable']);
        $providerData = $data['provider_data'];

        $I->amOnPage($providerData['url']);

        isset($providerData['responseCode']) ?
            $I->seeResponseCodeIs($providerData['responseCode']) :
            $I->seeResponseCodeIs(200);

        $I->checkObjectsOnPage($providerData['pageObjects']);
    }
}
