<?php

namespace lisa;

use Codeception\Example;
use rzk\TestHelper;

/**
 * @group lisa
 * @group lisa_functional
 * @group lisa_functional_requests
 * @group POSTTable
 */
class POSTTableCest
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
    public function POSTTable(FunctionalTester $I, Example $data)
    {
        $I->loadDataForTest($data, $this->testHelper, ['allUsers']);

        $providerData = $data['provider_data'];

        $I->sendPOST('/bpm/request', $providerData['requestBody']);
        $I->seeResponseCodeIs(200);
//die();
        $I->amOnPage('/bpm/request/' . $providerData['url']);

        $I->checkObjectsOnPage($providerData['pageObjects']);
    }
}
