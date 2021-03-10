<?php

namespace lisa;

use Codeception\Example;
use lisa\Page\Settings\Reason;
use Codeception\Module\TestHelper;

/**
 * @group lisa
 * @group lisa_acceptance
 * @group lisa_acceptance_settings
 * @group ReasonCreate
 */
class ReasonCreateCest
{
    protected function pageProvider(): array
    {
        return TestHelper::prepareDataprovider(require 'data.php', '');
    }

    /**
     * @param AcceptanceTester $I
     * @param Example $data
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @dataProvider pageProvider
     */
    public function ReasonCreate(AcceptanceTester $I, Example $data)
    {
        $I->loadDataForTest($data);
        $providerData = $data['provider_data'];

        $I->amOnPage("/bpm/reason");

        $I->click(Reason::$createButton);
        $I->waitForElement(Reason::$saveButton);

        $I->click(Reason::$saveButton);
        $I->canSeeElement(Reason::errorField('Необходимо заполнить «Причина».'));
        $I->checkTablesInDB($providerData['db_1']);

        $I->selectOption(Reason::$childStatus, 'Ожидает');
        $I->pressKey(Reason::$reason, 'О', 'ж', 'и', 'д', 'а', 'е', 'т', ' ', 'г', 'р', 'у', 'п', 'п', 'и', 'р', 'о', 'в', 'к', 'и');
        $I->click(Reason::$saveButton);

        $I->waitForElement(Reason::$createButton);
        $I->checkTablesInDB($providerData['db_2']);
    }
}
