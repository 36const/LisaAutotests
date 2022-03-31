<?php

namespace lisa;

use Codeception\Example;
use Codeception\Module\TestHelper;

/**
 * @group ironVPN
 * @group POSTCreateOrder
 */
class POSTCreateOrderCest
{
    protected function pageProvider(): array
    {
        return TestHelper::prepareDataprovider(require 'data.php', '');
    }

    /**
     * @param OtherServicesTester $I
     * @param Example $data
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @dataProvider pageProvider
     */
    public function POSTCreateOrder(OtherServicesTester $I, Example $data)
    {
        $I->loadDataForTest($data);
        $providerData = $data['provider_data'];

        $I->sendPOST('https://web2app.fx2.io/order/create', $providerData['requestBody']);

        $I->seeResponseCodeIs($providerData['responseCode']);

        $providerData['responseCode'] === 200
            ? $I->canSeeJsonResponseEquals($providerData['responseBody'])
            : $I->canSeeResponseContains($providerData['responseBody']);

        //$I->checkTablesInDB($providerData['db']); //для проверки записей в БД
    }
}