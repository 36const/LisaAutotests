<?php

namespace lisa;

use Codeception\Example;
use lisa\Page\Functional\Seller;
use Codeception\Module\TestHelper;

/**
 * @group lisa
 * @group lisa_acceptance
 * @group lisa_acceptance_settings
 * @group SellerUpdate
 */
class SellerUpdateCest
{
    protected function pageProvider()
    {
        return TestHelper::prepareDataprovider(require 'data.php', '');
    }

    /**
     * @param AcceptanceTester $I
     * @param Example $data
     * @param Seller $seller
     * @throws \GuzzleHttp\Exception\GuzzleException
     *
     * @dataProvider pageProvider
     *
     */
    public function SellerUpdate(AcceptanceTester $I, Example $data, Seller $seller)
    {
        $I->loadDataForTest($data, 'allUsers');
        $providerData = $data['provider_data'];

        $seller->amOnSeller();
        $I->click(Seller::$updateButton);

        $I->click(Seller::$clearButton);
        $I->canSeeElement(Seller::errorField('Необходимо заполнить «ID супервайзера».'));
        $I->click(Seller::$saveButton);
        $I->checkTablesInDB($providerData['db_1']);

        $I->click(Seller::$sellerSV);
        $I->click(Seller::$search);
        $I->pressKey(Seller::$search, 'С', 'у');
        $I->click(Seller::searchResult('Супервайзер Начальникович 10'));
        $I->wait(1);     //без ожидания выдаёт ошибку, что сообщение есть
        $I->cantSeeElement(Seller::errorField('Необходимо заполнить «ID супервайзера».'));
        $I->click(Seller::$saveButton);

        $I->waitForElement(Seller::$updateButton);
        $I->wait(1);     //без ожидания выдаёт ошибку, что плашки нет
        $I->canSee('Продавец Маркетплейс (общий) успешно обновлен');
        $I->checkTablesInDB($providerData['db_2']);
    }
}
