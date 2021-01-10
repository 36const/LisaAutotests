<?php

namespace lisa;

use Codeception\Example;
use lisa\Page\Requests\RequestCreate;
use lisa\Page\Requests\RequestView;
use Codeception\Module\TestHelper;

/**
 * @group lisa
 * @group lisa_acceptance
 * @group lisa_acceptance_requests
 * @group ChangeTypeModal
 */
class ChangeTypeModalCest
{
    /**@return array*/
    protected function pageProvider()
    {
        return TestHelper::prepareDataprovider(require 'data.php', '');
    }

    /**
     * @param AcceptanceTester $I
     * @param Example $data
     * @param RequestView $view
     * @throws \GuzzleHttp\Exception\GuzzleException
     *
     * @dataProvider pageProvider
     *
     */
    public function ChangeTypeModal(AcceptanceTester $I, Example $data, RequestView $view)
    {
        $I->loadDataForTest($data);
        $provider_data = $data['provider_data'];

        $view->amOnView(1);
        $I->cantSeeElement(RequestCreate::$createModal);

        $I->click(RequestView::$createChangeTypeButton);
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
        $I->click(RequestCreate::$typesList);
        $I->click(RequestCreate::typeSelect(3));
        $I->click(RequestCreate::checkboxesDirection(2));
        $I->click(RequestCreate::$createButtonModal);
        $I->checkObjectsOnPage($provider_data['pageObjects']);
    }
}
