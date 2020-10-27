<?php

namespace lisa;

use Codeception\Example;
use rzk\TestHelper;
use lisa\Page\Functional\RequestCreate;

/**
 * @group lisa
 * @group lisa_acceptance
 * @group lisa_acceptance_requests
 * @group CreateRequestModal
 */
class CreateRequestCest
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
        return $this->testHelper->getDataProvider('');
    }

    /**
     * @param AcceptanceTester $I
     * @param Example $data
     * @param RequestCreate $create
     * @throws \GuzzleHttp\Exception\GuzzleException
     *
     * @dataProvider pageProvider
     *
     */
    public function CreateRequest(AcceptanceTester $I, Example $data, RequestCreate $create)
    {
        $I->loadDataForTest($data, $this->testHelper);

        $create->amOnPage('/bpm/request');
        $I->cantSeeElement(RequestCreate::$createModal);

        $I->click(RequestCreate::$createButton);
        $I->waitForElementVisible(RequestCreate::$createModal);

        for ($i = 1; $i <= 15; $i++) {
            $I->click(RequestCreate::$typesList);
            $I->click(RequestCreate::typeSelect($i));

            switch ($i) {
                case 1:
                case 2:
                case 3:
                    $I->cantSeeElement(RequestCreate::checkboxesDirection(0));
                    $I->cantSeeCheckboxIsChecked(RequestCreate::checkboxesDirection(1));
                    $I->canSeeCheckboxIsChecked(RequestCreate::checkboxesDirection(2));
                    break;

                case 5:
                case 12:
                    $I->cantSeeElement(RequestCreate::checkboxesDirection(0));
                    $I->canSeeCheckboxIsChecked(RequestCreate::checkboxesDirection(1));
                    $I->cantSeeElement(RequestCreate::checkboxesDirection(2));
                    break;

                case 6:
                    $I->cantSeeElement(RequestCreate::checkboxesDirection(0));
                    $I->cantSeeElement(RequestCreate::checkboxesDirection(1));
                    $I->canSeeCheckboxIsChecked(RequestCreate::checkboxesDirection(2));
                    break;

                default:
                    $I->canSeeCheckboxIsChecked(RequestCreate::checkboxesDirection(0));
                    $I->cantSeeElement(RequestCreate::checkboxesDirection(1));
                    $I->cantSeeElement(RequestCreate::checkboxesDirection(2));
                    break;
            }
        }
    }
}