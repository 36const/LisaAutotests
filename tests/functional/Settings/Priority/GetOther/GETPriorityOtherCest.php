<?php

namespace lisa;

use Codeception\Example;
use rzk\TestHelper;
use lisa\Page\Functional\Login;

/**
 * @group lisa
 * @group lisa_functional
 * @group lisa_functional_settings
 * @group GETPriorityOther
 */
class GETPriorityOtherCest
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
    public function GETPriorityOther(FunctionalTester $I, Example $data, Login $login)
    {
        $I->loadDataForTest($data, $this->testHelper);
        $providerData = $data['provider_data'];

        $login->login();

        $I->amOnPage($providerData['url']);
        $I->seeResponseCodeIs(200);

        $I->checkObjectsOnPage($providerData['pageObjects']);
    }
}