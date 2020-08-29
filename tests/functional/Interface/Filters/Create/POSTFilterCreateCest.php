<?php

namespace lisa;

use Codeception\Example;
use rzk\TestHelper;
use lisa\Page\Functional\Filters;

/**
 * @group lisa
 * @group lisa_functional
 * @group POSTFilter
 * @group POSTFilterCreate
 */
class POSTFilterCreateCest
{
    /**
     * @var TestHelper $testHelper
     */
    private $testHelper;

    public function __construct()
    {
        $this->testHelper = new TestHelper(__DIR__);
    }

    /**
     * @return array
     */
    protected function pageProvider()
    {
        return $this->testHelper->getDataProvider('');
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
    public function POSTFilterCreate(FunctionalTester $I, Example $data, Filters $filter)
    {
        $I->loadDataForTest($data, $this->testHelper, ['allUsers']);

        $providerData = $data['provider_data'];

        $I->sendPOST('/bpm/filter/create', $providerData['requestBody']);
        $I->seeResponseCodeIs(200);

        $I->checkTablesInDB($providerData['db']);
    }
}
