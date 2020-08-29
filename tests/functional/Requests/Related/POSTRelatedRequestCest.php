<?php

namespace lisa;

use Codeception\Example;
use rzk\TestHelper;
use lisa\Page\Functional\RequestCreate;
use lisa\Page\Functional\RequestView;

/**
 * @group lisa
 * @group lisa_functional
 * @group lisa_functional_requests
 * @group POSTRelatedRequest
 */
class POSTRelatedRequestCest
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
     * @param RequestCreate $create
     * @param RequestView $view
     * @throws \GuzzleHttp\Exception\GuzzleException
     *
     * @dataProvider pageProvider
     *
     */
    public function POSTRelatedRequest(FunctionalTester $I, Example $data,
                                       RequestCreate $create, RequestView $view)
    {
        $I->loadDataForTest($data, $this->testHelper, ['allUsers']);

        $setting = $data['setting'];
        $providerData = $data['provider_data'];

        $create->checkFields($providerData['db'], $setting['type'], $setting['direction'], $setting['id']);

        $I->sendPOST('/bpm/request/create', $providerData['requestBody']);
        $I->seeResponseCodeIs(200);

        $I->checkTablesInDB($providerData['db']);
        $view->checkFields($providerData['db']);
    }
}
