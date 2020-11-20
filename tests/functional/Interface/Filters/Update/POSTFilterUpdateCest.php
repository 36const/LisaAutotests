<?php

namespace lisa;

use Codeception\Example;
use rzk\TestHelper;
use Codeception\Module\TestHelper as Vadim;
use lisa\Page\Functional\Filters;

/**
 * @group lisa
 * @group lisa_functional
 * @group POSTFilter
 * @group POSTFilterUpdate
 */
class POSTFilterUpdateCest
{
    /**@return array*/
    protected function pageProvider()
    {
        return Vadim::prepareDataprovider(require 'data.php');
    }

    /**
     * @param FunctionalTester $I
     * @param Example $data
     * @param Filters $filter
     * @throws \GuzzleHttp\Exception\GuzzleException
     *
     * @dataProvider pageProvider
     *
     */
    public function POSTFilterUpdate(FunctionalTester $I, Example $data, Filters $filter)
    {
        $I->loadDataForTest($data, 'allUsers');

        $providerData = $data['provider_data'];

        $I->sendPOST('/bpm/filter/update?id=1', $providerData['requestBody']);
        $I->seeResponseCodeIs(200);

        $I->checkTablesInDB($providerData['db']);
    }
}