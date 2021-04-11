<?php

namespace lisa;

use Codeception\Example;
use Codeception\Module\TestHelper;
use lisa\Page\Requests\RequestView;

/**
 * @group lisa
 * @group lisa_functional
 * @group lisa_functional_requests
 * @group POSTChangeType
 */
class POSTChangeTypeCest
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
    public function POSTChangeType(FunctionalTester $I, Example $data, RequestView $view)
    {
        $I->loadDataForTest($data);
        $providerData = $data['provider_data'];

        $view->changeType($providerData['requestParameter'], $providerData['requestBody']);

        $I->checkTablesInDB($providerData['db']);

        $view->checkFields($providerData['db'], $providerData['otherTypesFields']);
    }
}
