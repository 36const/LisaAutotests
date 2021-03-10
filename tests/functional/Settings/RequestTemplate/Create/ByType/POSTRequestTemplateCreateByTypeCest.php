<?php

namespace lisa;

use Codeception\Example;
use Codeception\Module\TestHelper;

/**
 * @group lisa
 * @group lisa_functional
 * @group lisa_functional_settings
 * @group POSTRequestTemplate
 * @group POSTRequestTemplateCreateByType
 */
class POSTRequestTemplateCreateByTypeCest
{
    protected function pageProvider(): array
    {
        return TestHelper::prepareDataprovider(require 'data.php', '');
    }

    /**
     * @param FunctionalTester $I
     * @param Example $data
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @dataProvider pageProvider
     */
    public function POSTRequestTemplateCreateByType(FunctionalTester $I, Example $data)
    {
        $I->loadDataForTest($data);
        $providerData = $data['provider_data'];
        $setting = $data['setting'];

        $I->sendPOST(
            '/bpm/request-template/create-by-type?typeId=' . $setting['type'] . '&direction=' . $setting['direction'],
            $providerData['requestBody']
        );
        $I->seeResponseCodeIs(200);

        $I->checkTablesInDB($providerData['db']);
    }
}