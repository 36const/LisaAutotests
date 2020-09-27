<?php

namespace lisa;

use Codeception\Example;
use lisa\Page\Functional\RequestView;
use rzk\TestHelper;

/**
 * @group lisa
 * @group lisa_functional
 * @group lisa_functional_settings
 * @group POSTDifficultyCoef
 * @group POSTDifficultyCoefCreateWithRequest
 */
class POSTDifficultyCoefCreateWithRequestCest
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
     * @dataProvider pageProvider
     */
    public function POSTDifficultyCoefCreateWithRequest(FunctionalTester $I, Example $data, RequestView $view)
    {
        $I->loadDataForTest($data, $this->testHelper, ['allUsers']);

        $providerData = $data['provider_data'];

        $I->sendPOST('/bpm/difficulty-coef/create', $providerData['requestBody']);
        $I->seeResponseCodeIs(200);

        $view->changeStatus($providerData['requestParameter'], $providerData['requestBodyUpdate']);

        $I->checkTablesInDB($providerData['db']);
        $view->checkFields($providerData['db']);
    }
}