<?php

namespace lisa;

use Codeception\Example;
use Codeception\Module\TestHelper;
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
    /**@return array*/
    protected function pageProvider()
    {
        return TestHelper::prepareDataprovider(require 'data.php', '');
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
        $I->loadDataForTest($data, 'allUsers');

        $setting = $data['setting'];
        $providerData = $data['provider_data'];

        $create->checkRelatedRequestFields($providerData['db'], $setting['type'], $setting['direction'], $setting['id']);

        $I->sendPOST('/bpm/request/create', $providerData['requestBody']);
        $I->seeResponseCodeIs(200);

        $I->checkTablesInDB($providerData['db']);
        $view->checkFields($providerData['db']);
    }
}
