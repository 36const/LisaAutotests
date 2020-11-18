<?php

namespace lisa;

use Codeception\Example;
use lisa\Page\Functional\Request;
use rzk\TestHelper;
use Codeception\Module\TestHelper as Vadim;

/**
 * @group lisa
 * @group lisa_acceptance
 * @group lisa_acceptance_requests
 * @group TableCounter
 */
class TableCounterCest
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
//        return $this->testHelper->getDataProvider('');
        return Vadim::prepareDataprovider(require ('data.php'));
    }

    /**
     * @param AcceptanceTester $I
     * @param Example $data
     * @param Request $request
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Exception
     * @dataProvider pageProvider
     */
    public function TableCounter(AcceptanceTester $I, Example $data, Request $request)
    {
        $I->loadDataForTest($data, 'allUsers');
        $providerData = $data['provider_data'];
        $I->wait(30);
        $request->amOnTable();
        $I->checkObjectsOnPage($providerData['pageObjects_1']);

        $I->scrollTo(Request::$paginator, -400);
        $I->checkObjectsOnPage($providerData['pageObjects_2']);

        $I->scrollTo(Request::$globalCaption, -400);
        $I->checkObjectsOnPage($providerData['pageObjects_3']);

        $I->scrollTo(Request::$paginator, -400);
        $I->checkObjectsOnPage($providerData['pageObjects_2']);


        $I->clickWithLeftButton(Request::tablePage('»'));
        $I->checkObjectsOnPage($providerData['pageObjects_4']);

        $I->scrollTo(Request::$paginator, -400);
        $I->checkObjectsOnPage($providerData['pageObjects_2']);

        $I->scrollTo(Request::$globalCaption, -400);
        $I->checkObjectsOnPage($providerData['pageObjects_5']);

        $I->scrollTo(Request::$paginator, -400);
        $I->checkObjectsOnPage($providerData['pageObjects_2']);


        $I->click(Request::tablePage(4));
        $I->checkObjectsOnPage($providerData['pageObjects_6']);

        $I->scrollTo(Request::$paginator);
        $I->checkObjectsOnPage($providerData['pageObjects_2']);

        $I->scrollTo(Request::$globalCaption);
        $I->checkObjectsOnPage($providerData['pageObjects_7']);

        $I->scrollTo(Request::$paginator);
        $I->checkObjectsOnPage($providerData['pageObjects_2']);
    }
}