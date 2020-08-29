<?php

namespace lisa;

use Codeception\Example;
use rzk\TestHelper;

/**
 * @group lisa
 * @group lisa_functional
 * @group lisa_functional_settings
 * @group POSTSeller
 * @group POSTSellerCreate
 */
class POSTSellerCreateCest
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
     * @throws \GuzzleHttp\Exception\GuzzleException
     *
     * @dataProvider pageProvider
     *
     */
    public function POSTSellerCreate(FunctionalTester $I, Example $data)
    {
        $I->loadDataForTest($data, $this->testHelper);

        $providerData = $data['provider_data'];

        $I->runShellCommand('./yii bpm/seller/appoint-supervisors');

        $I->checkTablesInDB($providerData['db']);
    }
}