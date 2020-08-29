<?php

namespace lisa;

use Codeception\Example;
use rzk\TestHelper;
use lisa\Page\Functional\RequestView;

/**
 * @group lisa
 * @group lisa_functional
 * @group lisa_functional_requests
 * @group POSTMassEdit
 */
class POSTMassEditCest
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
     * @param RequestView $view
     * @throws \GuzzleHttp\Exception\GuzzleException
     *
     * @dataProvider pageProvider
     *
     */
    public function POSTMassEdit(FunctionalTester $I, Example $data, RequestView $view)
    {
        $I->loadDataForTest($data, $this->testHelper, ['allUsers']);

        $providerData = $data['provider_data'];

        $I->sendPOST('/bpm/request/mass-edit', $providerData['requestBody']);
        $I->seeResponseCodeIs(200);

        $I->checkTablesInDB($providerData['db']);

        $view->checkFieldsForMassEditing($providerData['db']);
    }
}
