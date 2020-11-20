<?php

namespace lisa;

use Codeception\Example;
use lisa\Page\Functional\RequestView;
use rzk\TestHelper;
use Codeception\Module\TestHelper as Vadim;

/**
 * @group lisa
 * @group lisa_acceptance
 * @group lisa_acceptance_settings
 * @group ExcludedFieldsInRequestView
 */
class ExcludedFieldsInRequestViewCest
{
    protected function pageProvider()
    {
        return Vadim::prepareDataprovider(require 'data.php');
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
    public function ExcludedFieldsInRequestView(AcceptanceTester $I, Example $data, RequestView $view)
    {
        $I->loadDataForTest($data, 'allUsers');
        $providerData = $data['provider_data'];

        $view->amOnView(1);
        $I->checkCheckboxesOnPage($providerData['pageObjects_1']);

        $I->click(RequestView::findCheckbox(' Пакетная загрузка'));
        $I->checkCheckboxesOnPage($providerData['pageObjects_2']);

        $I->click(RequestView::findCheckbox(' С размерной сеткой'));
        $I->click(RequestView::findCheckbox(' С тегами к товарам'));
        $I->click(RequestView::findCheckbox(' С фотосъемкой'));
        $I->checkCheckboxesOnPage($providerData['pageObjects_3']);

        $I->click(RequestView::findCheckbox(' Промо-описание'));
        $I->checkCheckboxesOnPage($providerData['pageObjects_4']);

        $I->click(RequestView::findCheckbox(' Ручная загрузка'));
        $I->checkCheckboxesOnPage($providerData['pageObjects_5']);

        $I->click(RequestView::$saveButton);
        $I->checkCheckboxesOnPage($providerData['pageObjects_5']);
    }
}
