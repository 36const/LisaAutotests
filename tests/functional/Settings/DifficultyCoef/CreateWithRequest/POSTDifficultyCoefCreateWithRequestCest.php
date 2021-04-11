<?php

namespace lisa;

use Codeception\Example;
use lisa\Page\Requests\RequestView;
use Codeception\Module\TestHelper;

/**
 * @group lisa
 * @group lisa_functional
 * @group lisa_functional_settings
 * @group POSTDifficultyCoef
 * @group POSTDifficultyCoefCreateWithRequest
 */
class POSTDifficultyCoefCreateWithRequestCest
{
    protected function pageProvider(): array
    {
        return TestHelper::prepareDataprovider(require 'data.php', '');
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
        $I->loadDataForTest($data);
        $providerData = $data['provider_data'];

        $I->sendPOST('/bpm/difficulty-coef/create', $providerData['requestBody']);
        $I->seeResponseCodeIs(200);

        $view->changeStatus($providerData['requestParameter'], $providerData['requestBodyUpdate']);

        $I->checkTablesInDB($providerData['db']);
        $view->checkFields($providerData['db']);
    }
}