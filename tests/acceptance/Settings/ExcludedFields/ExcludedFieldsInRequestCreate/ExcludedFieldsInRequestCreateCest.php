<?php

namespace lisa;

use Codeception\Example;
use rzk\TestHelper;
use lisa\Page\Functional\RequestCreate;

/**
 * @group lisa
 * @group lisa_acceptance
 * @group lisa_acceptance_settings
 * @group ExcludedFieldsInRequestCreate
 */
class ExcludedFieldsInRequestCreateCest
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
    public function ExcludedFieldsInRequestCreate(AcceptanceTester $I, Example $data, RequestCreate $create)
    {
        $I->loadDataForTest($data, $this->testHelper, ['allUsers']);
        $providerData = $data['provider_data'];

        $create->amOnRequestCreate(2, 2);
        $I->checkCheckboxesOnPage($providerData['pageObjects_1']);

        $I->click(RequestCreate::findCheckbox(' Автомодерация'));
        $I->checkCheckboxesOnPage($providerData['pageObjects_2']);

        $I->click(RequestCreate::findCheckbox(' БУ, REF'));
        $I->click(RequestCreate::findCheckbox(' С палитрой'));
        $I->checkCheckboxesOnPage($providerData['pageObjects_3']);

        $I->click(RequestCreate::findCheckbox(' С видео'));
        $I->checkCheckboxesOnPage($providerData['pageObjects_4']);

        $I->click(RequestCreate::findCheckbox(' С видео'));
        $I->checkCheckboxesOnPage($providerData['pageObjects_5']);
    }
}
