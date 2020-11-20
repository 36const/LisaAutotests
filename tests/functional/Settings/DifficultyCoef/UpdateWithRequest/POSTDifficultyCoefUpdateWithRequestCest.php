<?php

namespace lisa;

use Codeception\Example;
use rzk\TestHelper;
use Codeception\Module\TestHelper as Vadim;
use lisa\Page\Functional\RequestView;

/**
 * @group lisa
 * @group lisa_functional
 * @group lisa_functional_settings
 * @group POSTDifficultyCoef
 * @group POSTDifficultyCoefUpdateWithRequest
 */
class POSTDifficultyCoefUpdateWithRequestCest
{
    /**@return array*/
    protected function pageProvider()
    {
        return Vadim::prepareDataprovider(require 'data.php');
    }

    /**
     * @param FunctionalTester $I
     * @param Example $data
     * @param RequestView $view
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @dataProvider pageProvider
     */
    public function POSTDifficultyCoefUpdateWithRequest(FunctionalTester $I, Example $data, RequestView $view)
    {
        $I->loadDataForTest($data, 'allUsers');

        $providerData = $data['provider_data'];

        $I->sendPOST('/bpm/difficulty-coef/update?id=1', $providerData['requestBody']);
        $I->seeResponseCodeIs(200);

        $view->changeStatus($providerData['requestParameter'], $providerData['requestBodyUpdate']);

        $I->checkTablesInDB($providerData['db']);
        $view->checkFields($providerData['db']);
    }
}