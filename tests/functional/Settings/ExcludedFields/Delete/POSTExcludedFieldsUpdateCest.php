<?php

namespace lisa;

use Codeception\Example;
use Codeception\Module\TestHelper;
use lisa\Page\Functional\RequestView;

/**
 * @group lisa
 * @group lisa_functional
 * @group lisa_functional_settings
 * @group POSTExcludedFields
 * @group POSTExcludedFieldsDelete
 */
class POSTExcludedFieldsUpdateCest
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
    public function POSTExcludedFieldsDelete(FunctionalTester $I, Example $data)
    {
        $I->loadDataForTest($data);

        $providerData = $data['provider_data'];

        $I->sendPOST('/bpm/excluded-fields/delete?field_id=1&excluded_field_id=2', $providerData['requestBody']);
        $I->seeResponseCodeIs(200);

        $I->checkTablesInDB($providerData['db']);
    }
}