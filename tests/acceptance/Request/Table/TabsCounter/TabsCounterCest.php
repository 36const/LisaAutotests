<?php

namespace lisa;

use Codeception\Example;
use lisa\Page\Requests\Request;
use Codeception\Module\TestHelper;

/**
 * @group lisa
 * @group lisa_acceptance
 * @group lisa_acceptance_requests
 * @group TabsCounter
 */
class TabsCounterCest
{
    /**@return array*/
    protected function pageProvider()
    {
        return TestHelper::prepareDataprovider(require 'data.php', '');
    }

    /**
     * @param AcceptanceTester $I
     * @param Example $data
     * @param \lisa\Page\Requests\Request $request
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Exception
     * @dataProvider pageProvider
     */
    public function TabsCounter(AcceptanceTester $I, Example $data, Request $request)
    {
        $I->loadDataForTest($data, 'allUsers');
        $I->wait(30);
        $request->amOnTable('index');
        $I->canSeeElement(Request::statusTabsCounter(1, 24));
        $I->canSeeElement(Request::tableSummary('......'));

        $request->amOnTable('new?RequestSearch[id]=&RequestSearch[subject]=&RequestSearch[type_id]=&RequestSearch[type_id][]=4&RequestSearch[author_id]=&RequestSearch[supervisor_id]=&RequestSearch[manager_id]=&RequestSearch[cross_check_manager_id]=&RequestSearch[cross_check_status]=&RequestSearch[awaiting_correction]=&RequestSearch[amount_to_work]=');
        $I->canSeeElement(Request::statusTabsCounter(2, 3));
        $I->canSeeElement(Request::tableSummary(1));

        $request->amOnTable('in-check?RequestSearch[id]=&RequestSearch[subject]=&RequestSearch[type_id]=&RequestSearch[author_id]=&RequestSearch[supervisor_id]=6&RequestSearch[manager_id]=&RequestSearch[cross_check_manager_id]=&RequestSearch[reasons]=&RequestSearch[cross_check_status]=&RequestSearch[awaiting_correction]=&RequestSearch[amount_to_work]=');
        $I->canSeeElement(Request::statusTabsCounter(3, 3));
        $I->canSeeElement(Request::tableSummary(2));

        $request->amOnTable('require-changes?RequestSearch[id]=&RequestSearch[subject]=&RequestSearch[type_id]=&RequestSearch[author_id]=&RequestSearch[supervisor_id]=&RequestSearch[manager_id]=&RequestSearch[cross_check_manager_id]=&RequestSearch[reasons]=&RequestSearch[reasons][]=1&RequestSearch[cross_check_status]=&RequestSearch[awaiting_correction]=&RequestSearch[amount_to_work]=');
        $I->canSeeElement(Request::statusTabsCounter(4, 3));
        $I->canSeeElement(Request::tableSummary(2));

        $request->amOnTable('wait-work?RequestSearch[id]=&RequestSearch[subject]=&RequestSearch[type_id]=&RequestSearch[author_id]=&RequestSearch[supervisor_id]=&RequestSearch[manager_id]=&RequestSearch[cross_check_manager_id]=&RequestSearch[cross_check_status]=&RequestSearch[cross_check_status][]=1&RequestSearch[awaiting_correction]=&RequestSearch[amount_to_work]=');
        $I->canSeeElement(Request::statusTabsCounter(5, 3));
        $I->canSeeElement(Request::$emptyTable);

        $request->amOnTable('in-work?RequestSearch[id]=19----4&RequestSearch[subject]=&RequestSearch[type_id]=&RequestSearch[author_id]=&RequestSearch[supervisor_id]=&RequestSearch[manager_id]=&RequestSearch[cross_check_manager_id]=&RequestSearch[cross_check_status]=&RequestSearch[awaiting_correction]=&RequestSearch[amount_to_work]=');
        $I->canSeeElement(Request::statusTabsCounter(6, 3));
        $I->canSeeElement(Request::tableSummary(2));

        $request->amOnTable('on-hold?RequestSearch[subject]=Добавление/изменение размерной сетки (Определяется типом задачи)&');
        $I->canSeeElement(Request::statusTabsCounter(7, 2));
        $I->canSeeElement(Request::tableSummary(1));

        $request->amOnTable('completed?RequestSearch[id]=&RequestSearch[subject]=&RequestSearch[type_id]=&RequestSearch[author_id]=&RequestSearch[supervisor_id]=&RequestSearch[manager_id]=&RequestSearch[cross_check_manager_id]=&RequestSearch[status]=&RequestSearch[cross_check_status]=&RequestSearch[awaiting_correction]=0&RequestSearch[amount_to_work]=');
        $I->canSeeElement(Request::statusTabsCounter(8, 3));
        $I->canSeeElement(Request::tableSummary(3));

        $request->amOnTable('declined?RequestSearch[id]=&RequestSearch[subject]=&RequestSearch[type_id]=&RequestSearch[author_id]=&RequestSearch[supervisor_id]=&RequestSearch[manager_id]=&RequestSearch[cross_check_manager_id]=&RequestSearch[cross_check_status]=&RequestSearch[awaiting_correction]=&RequestSearch[amount_to_work]=90');
        $I->canSeeElement(Request::statusTabsCounter(9, 1));
        $I->canSeeElement(Request::$emptyTable);

        $request->amOnTable('closed');
        $I->canSeeElement(Request::statusTabsCounter(10, 3));
        $I->canSeeElement(Request::tableSummary(3));
    }
}