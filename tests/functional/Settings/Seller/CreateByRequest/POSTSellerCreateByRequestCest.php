<?php

namespace lisa;

use Codeception\Example;
use lisa\Page\Functional\RequestView;
use Codeception\Module\TestHelper;

/**
 * @group lisa
 * @group lisa_functional
 * @group lisa_functional_settings
 * @group POSTSeller
 * @group POSTSellerCreateByRequest
 */
class POSTSellerCreateByRequestCest
{
    /**@return array*/
    protected function pageProvider()
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
    public function POSTSellerCreate(FunctionalTester $I, Example $data, RequestView $view)
    {
        $I->loadDataForTest($data, 'allUsers');

        $providerData = $data['provider_data'];

        $I->sendPOST($providerData['url'], $providerData['requestBody']);
        $I->seeResponseCodeIs(200);

        $I->checkTablesInDB($providerData['db']);
        $view->checkFields($providerData['db']);
    }
}