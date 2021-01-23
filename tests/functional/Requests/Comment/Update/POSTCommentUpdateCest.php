<?php

namespace lisa;

use Codeception\Example;
use Codeception\Module\TestHelper;
use lisa\Page\Requests\RequestView;

/**
 * @group lisa
 * @group lisa_functional
 * @group lisa_functional_requests
 * @group POSTComment
 * @group POSTCommentUpdate
 */
class POSTCommentUpdateCest
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
    public function POSTCommentUpdate(FunctionalTester $I, Example $data, RequestView $view)
    {
        $I->loadDataForTest($data, 'allUsers');
        $providerData = $data['provider_data'];

        $I->sendPOST('/bpm/request-comments/update', $providerData['requestBody']);
        $I->seeResponseCodeIs(200);
        $I->canSeeResponseContainsJson($providerData['responseBody']);

        $I->checkTablesInDB($providerData['db']);
    }
}