<?php

namespace lisa;

use Codeception\Example;
use lisa\Page\Functional\Request;
use rzk\TestHelper;

/**
 * @group lisa
 * @group lisa_functional
 * @group lisa_functional_requests
 * @group GETColumnsFilters
 */
class GETColumnsFiltersCest
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
     * @param Request $request
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @dataProvider pageProvider
     */
    public function GETColumnsFilters(FunctionalTester $I, Example $data, Request $request)
    {
        $I->loadDataForTest($data, $this->testHelper, ['allUsers']);
        $providerData = $data['provider_data'];

        $request->amOnTable($providerData['url']);
        $I->seeResponseCodeIs(200);

        $I->checkObjectsOnPage($providerData['pageObjects']);
    }
}