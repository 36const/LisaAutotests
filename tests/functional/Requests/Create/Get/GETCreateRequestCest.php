<?php

namespace lisa;

use Codeception\Example;
use rzk\TestHelper;
use lisa\Page\Functional\RequestCreate;
use Codeception\Module\TestHelper as Vadim;

/**
 * @group lisa
 * @group lisa_functional
 * @group lisa_functional_requests
 * @group GETCreateRequest
 */
class GETCreateRequestCest
{
    /**
     * @var TestHelper $testHelper
     */
    private $testHelper;

    public function __construct()
    {
        $this->testHelper = new TestHelper(__DIR__);
    }

    protected function pageProvider()
    {
//        return $this->testHelper->getDataProvider('');
        return Vadim::prepareDataprovider(require ('data.php'));
    }

    /**
     * @param FunctionalTester $I
     * @param Example $data
     * @param RequestCreate $create
     * @throws \GuzzleHttp\Exception\GuzzleException
     *
     * @dataProvider pageProvider
     *
     */
    public function GETCreateRequest(FunctionalTester $I, Example $data, RequestCreate $create)
    {
        $I->loadDataForTest($data);

        $setting = $data['setting'];
        $providerData = $data['provider_data'];

        $create->amOnRequestCreate($setting['type'], $setting['direction']);

        $I->canSeeInTitle($setting['description']);
        $I->canSee($setting['description'], ['class' => 'global-caption']);

        $I->assertCount(count($I->grabMultiple(RequestCreate::$allCheckboxes)), $providerData['pageObjects']['canSee']['Чекбоксы']);

        $I->checkObjectsOnPage($providerData['pageObjects']);
    }
}
