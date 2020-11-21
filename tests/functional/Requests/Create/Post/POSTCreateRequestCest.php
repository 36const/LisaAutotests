<?php

namespace lisa;

use Codeception\Example;
use lisa\Page\Functional\RequestView;
use Codeception\Module\TestHelper;

/**
 * @group lisa
 * @group lisa_functional
 * @group lisa_functional_requests
 * @group POSTCreateRequest
 */
class POSTCreateRequestCest
{
    /**
     * POSTCreateRequest dataProvider
     * Дата провайдер теста POSTCreateRequest
     *
     * В данной функции реализуется дата провайдер который возвращает все кейсы с data.php
     * Далее функция POSTCreateRequest обрабатывает каждый кейс
     *
     * @return array
     */
    protected function pageProvider()
    {
        return TestHelper::prepareDataprovider(require 'data.php', '');
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
    public function POSTCreateRequest(FunctionalTester $I, Example $data, RequestView $view)
    {
        $I->loadDataForTest($data, 'allUsers');

        $providerData = $data['provider_data'];

        $I->sendPOST('/bpm/request/create', $providerData['requestBody']);
        $I->seeResponseCodeIs(200);

        $I->checkTablesInDB($providerData['db']);
        $view->checkFields($providerData['db']);
    }
}
