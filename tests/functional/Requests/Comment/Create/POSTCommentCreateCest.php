<?php

namespace lisa;

use Codeception\Example;
use rzk\TestHelper;
use lisa\Page\Functional\Login;
use lisa\Page\Functional\RequestView;

/**
 * @group lisa
 * @group lisa_functional
 * @group lisa_functional_requests
 * @group POSTComment
 * @group POSTCommentCreate
 */
class POSTCommentCreateCest
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
     * @param Login $login
     * @param RequestView $view
     * @throws \GuzzleHttp\Exception\GuzzleException
     *
     * @dataProvider pageProvider
     *
     */
    public function POSTCommentCreate(FunctionalTester $I, Example $data, Login $login, RequestView $view)
    {
        $I->loadDataForTest($data, $this->testHelper);

        $providerData = $data['provider_data'];

        $providerData['requestBody']['_csrf-backend'] = $login->login();

        $I->sendPOST('/bpm/request-comments/create', $providerData['requestBody']);
        $I->seeResponseCodeIs(200);
        $I->seeResponseContainsJson($providerData['responseBody']);

        $I->checkTablesInDB($providerData['db']);
    }
}