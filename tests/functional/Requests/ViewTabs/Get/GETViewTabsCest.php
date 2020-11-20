<?php

namespace lisa;

use Codeception\Example;
use lisa\Page\Functional\RequestView;
use rzk\TestHelper;
use Codeception\Module\TestHelper as Vadim;

/**
 * @group lisa
 * @group lisa_functional
 * @group lisa_functional_requests
 * @group GETViewTabs
 */
class GETViewTabsCest
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
        return Vadim::prepareDataprovider(require 'data.php');
    }

    /**
     * @param FunctionalTester $I
     * @param Example $data
     * @param RequestView $view
     * @throws \GuzzleHttp\Exception\GuzzleException
     *
     * @dataProvider pageProvider
     *
     */
    public function GETViewTabs(FunctionalTester $I, Example $data, RequestView $view)
    {
        $I->loadDataForTest($data);

        $providerData = $data['provider_data'];

        $I->cantSeeCookie('viewTabsEnabled');

        $I->sendGET('/bpm/request/enable-tabs');
        $I->canSeeResponseCodeIs(200);

        $I->canSeeCookie('viewTabsEnabled');
        $view->amOnView(1);
        $I->checkObjectsOnPage($providerData['pageObjects']);
    }
}
