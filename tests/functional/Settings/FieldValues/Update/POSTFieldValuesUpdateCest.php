<?php

namespace lisa;

use Codeception\Example;
use Codeception\Module\TestHelper;
use lisa\Page\Requests\RequestView;

/**
 * @group lisa
 * @group lisa_functional
 * @group lisa_functional_settings
 * @group POSTFieldValues
 * @group POSTFieldValuesUpdate
 */
class POSTFieldValuesUpdateCest
{
    /**@return array*/
    protected function pageProvider()
    {
        return TestHelper::prepareDataprovider(require 'data.php', '');
    }

    /**
     * @param FunctionalTester $I
     * @param Example $data
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @dataProvider pageProvider
     *
     */
    public function POSTFieldValuesUpdate(FunctionalTester $I, Example $data)
    {
        $I->loadDataForTest($data);

        $providerData = $data['provider_data'];

        $I->sendPOST('/bpm/field-values/update?id=1', $providerData['requestBody']);
        $I->seeResponseCodeIs(200);

        $I->checkTablesInDB($providerData['db']);
    }
}