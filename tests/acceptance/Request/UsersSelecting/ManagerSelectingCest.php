<?php

namespace lisa;

use Codeception\Example;
use Codeception\Module\TestHelper;
use lisa\Page\Requests\RequestView;
use lisa\Page\Requests\Request;

/**
 * @group lisa
 * @group lisa_acceptance
 * @group lisa_acceptance_requests
 * @group ManagerSelecting
 */
class ManagerSelectingCest
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
    public function ManagerSelecting(AcceptanceTester $I, Example $data, RequestView $view, Request $request)
    {
        $I->loadDataForTest($data, null);
        $providerData = $data['provider_data'];

        //в форме заявки
        $view->amOnView(1);
        $I->click(RequestView::$manager_id);
        $i = 1;
        foreach ($providerData['pageObjectsCM'] as $object) {
            $I->canSeeElement(RequestView::searchCMResult($i, $object));
            $i++;
        }
        $I->canSeeNumberOfElements(RequestView::$searchResults, 4);

        //в модалке из формы заявки
        $I->click(Request::transferButton('Назначить исполнителя'));
        $I->waitForElementVisible(Request::$modal_manager_id);
        $I->click(Request::$modal_manager_id);
        $i = 1;
        foreach ($providerData['pageObjectsCM'] as $object) {
            $I->canSeeElement(RequestView::searchCMResult($i, $object));
            $i++;
        }
        $I->canSeeNumberOfElements(RequestView::$searchResults, 4);

        //в модалке из таблицы
        $request->amOnTable('in-check');
        $I->click(Request::transferButton('Назначить исполнителя'));
        $I->waitForElementVisible(Request::$modal_manager_id);
        $I->click(Request::$modal_manager_id);
        $i = 1;
        foreach ($providerData['pageObjectsCM'] as $object) {
            $I->canSeeElement(RequestView::searchCMResult($i, $object));
            $i++;
        }
        $I->canSeeNumberOfElements(RequestView::$searchResults, 4);
    }
}
