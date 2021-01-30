<?php

namespace lisa;

use Codeception\Example;
use Codeception\Module\TestHelper;
use lisa\Page\Other\SearchField;
use lisa\Page\Requests\RequestView;
use lisa\Page\Requests\Request;

/**
 * @group lisa
 * @group lisa_acceptance
 * @group lisa_acceptance_requests
 * @group ManagerAndSupervisorSelecting
 */
class ManagerAndSupervisorSelectingCest
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
     * @dataProvider pageProvider
     */
    public function ManagerRequestSelecting(AcceptanceTester $I, Example $data, RequestView $view)
    {
        $I->loadDataForTest($data, null);
        $I->wantTo('Выбор менеджера в заявке');
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
    }

    /**
     * @param AcceptanceTester $I
     * @param Example $data
     * @param Request $request
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @dataProvider pageProvider
     */
    public function ManagerTableSelecting(AcceptanceTester $I, Example $data, Request $request)
    {
        $I->loadDataForTest($data, null);
        $I->wantTo('Выбор менеджера в модалке из таблицы');
        $providerData = $data['provider_data'];

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

    /**
     * @param AcceptanceTester $I
     * @param Example $data
     * @param RequestView $view
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @dataProvider pageProvider
     */
    public function SupervisorRequestSelecting(AcceptanceTester $I, Example $data, RequestView $view)
    {
        $I->loadDataForTest($data, null);
        $I->wantTo('Выбор супервайзера в заявке');
        $providerData = $data['provider_data'];

        //в форме заявки
        $view->amOnView(1);
        $I->click(RequestView::$supervisor_id);
        $I->waitForElementVisible(RequestView::searchSVResult(1, 'Пожалуйста, введите ещё хотя бы 2 символa'));
        $I->canSeeNumberOfElements(RequestView::$searchResults, 1);

        $I->pressKey(SearchField::$search, 'М', 'е');
        $I->canSeeElement(RequestView::searchSVResult(1, 'Совпадений не найдено'));
        $I->canSeeNumberOfElements(RequestView::$searchResults, 1);

        $I->pressKey(SearchField::$search, ['ctrl', 'a'], 'Т', 'и');
        $I->canSeeElement(RequestView::searchSVResult(1, 'Константин Куцан'));
        $I->canSeeNumberOfElements(RequestView::$searchResults, 1);

        $I->pressKey(SearchField::$search, ['ctrl', 'a'], 'С', 'у');

        $i = 1;
        foreach ($providerData['pageObjectsSV'] as $object) {
            $I->canSeeElement(RequestView::searchSVResult($i, $object));
            $i++;
        }

        $I->canSeeNumberOfElements(RequestView::$searchResults, 19);
    }

    /**
     * @param AcceptanceTester $I
     * @param Example $data
     * @param Request $request
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @dataProvider pageProvider
     */
    public function SupervisorTableSelecting(AcceptanceTester $I, Example $data, Request $request)
    {
        $I->loadDataForTest($data, null);
        $I->wantTo('Выбор супервайзера в модалке из таблицы');
        $providerData = $data['provider_data'];

        //в модалке из таблицы
        $request->amOnTable('in-check');
        $I->click(Request::transferButton('Изменить супервайзера'));
        $I->waitForElementVisible(Request::$modal_supervisor_id);

        $I->click(Request::$modal_supervisor_id);
        $I->waitForElementVisible(RequestView::searchSVResult(1, 'Пожалуйста, введите ещё хотя бы 2 символa'));
        $I->canSeeNumberOfElements(RequestView::$searchResults, 1);

        $I->pressKey(SearchField::$search, 'М', 'е');
        $I->canSeeElement(RequestView::searchSVResult(1, 'Совпадений не найдено'));
        $I->canSeeNumberOfElements(RequestView::$searchResults, 1);

        $I->pressKey(SearchField::$search, ['ctrl', 'a'], 'Т', 'и');
        $I->canSeeElement(RequestView::searchSVResult(1, 'Константин Куцан'));
        $I->canSeeNumberOfElements(RequestView::$searchResults, 1);

        $I->pressKey(SearchField::$search, ['ctrl', 'a'], 'С', 'у');

        $i = 1;
        foreach ($providerData['pageObjectsSV'] as $object) {
            $I->canSeeElement(RequestView::searchSVResult($i, $object));
            $i++;
        }

        $I->canSeeNumberOfElements(RequestView::$searchResults, 19);
    }
}
