<?php

namespace lisa;

use Codeception\Example;
use Codeception\Module\TestHelper;
use lisa\Page\Functional\RequestCreate;

/**


 * @group UserSelecting
 */
class UserSelectingCest
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
     *
     * @dataProvider pageProvider
     *
     */
    public function UserSelecting(AcceptanceTester $I, Example $data, RequestCreate $create)
    {
        $I->loadDataForTest($data, null);

        $create->amOnPage('/bpm/request');
        $I->cantSeeElement(RequestCreate::$createModal);

        $I->click(RequestCreate::$createButton);
        $I->waitForElementVisible(RequestCreate::$createModal);

    }
}
