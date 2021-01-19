<?php

namespace lisa;

use Codeception\Example;
use lisa\Page\Requests\RequestCreate;
use Codeception\Module\TestHelper;

/**
 * @group lisa
 * @group lisa_acceptance
 * @group lisa_acceptance_requests
 * @group CreateRequestModal
 */
class CreateRequestModalCest
{
    /**@return array*/
    protected function pageProvider()
    {
        return TestHelper::prepareDataprovider(require 'data.php', '');
    }

    /**
     * @param AcceptanceTester $I
     * @param Example $data
     * @param RequestCreate $create
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @dataProvider pageProvider
     */
    public function CreateRequestModal(AcceptanceTester $I, Example $data, RequestCreate $create)
    {
        $I->loadDataForTest($data);
        $provider_data = $data['provider_data'];

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

        $I->click(RequestCreate::$createButtonModal);
        $I->checkObjectsOnPage($provider_data['pageObjects']);
    }
}