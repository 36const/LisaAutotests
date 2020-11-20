<?php

namespace lisa;

use Codeception\Example;
use rzk\TestHelper;
use Codeception\Module\TestHelper as Vadim;

/**
 * @group lisa
 * @group lisa_functional
 * @group lisa_functional_requests
 * @group CronMakeXls
 * @group CronTableMakeXls
 */
class CronTableMakeXlsCest
{
    /**@return array*/
    protected function pageProvider()
    {
        return Vadim::prepareDataprovider(require 'data.php');
    }

    /**
     * @param FunctionalTester $I
     * @param Example $data
     * @throws \GuzzleHttp\Exception\GuzzleException
     *
     * @dataProvider pageProvider
     *
     */
    public function CronTableMakeXls(FunctionalTester $I, Example $data)
    {
        $I->loadDataForTest($data, 'allUsers');
        $providerData = $data['provider_data'];

        $I->sendGET('/bpm/request?isExport=1&columns=["id","subject","type_id","author_id","supervisor_id","manager_id","cross_check_manager_id","status","cross_check_status","with_grid","used_ref","updating_photos","automoderation","mobile_courier","hand_load","enter_points","with_tags","by_client_review","updating_characteristics","stop_brands","adding_instructions","updating_description","markdown_2","with_video","with_pallets","adding_goods_to_new_category","lots","promo_desc","complaint_for_good","visa","markdown","difficulty_level","photos_available","with_photo","adding_graphics","calc_quantity_of_checked_goods","changed_goods","added_goods","pack_load","goods_in_db","language","description_available","characteristics_available","calc_quantity_of_checked_goods_with_errors_cc","author_clarifications","calc_quantity_of_checked_goods_cc","awaiting_correction","calc_quantity_of_checked_goods_with_errors","result_comment","team_direction","last_change_status_date","amount_to_work","sv_report_periods","supervisor_check_date","category_id","priority","actual_start_date","report_period_id","supervisor_process_date","actual_finish_date","planned_finish_date","recommendations","planned_start_date","created_at","parent_id","seller_id","description","reason_id","correction_comment","reason","direction"]');
        $I->seeResponseCodeIs(200);
        $I->canSeeNumberOfMessagesInQueue('lisa_exportGenerating', 1);

        $I->runShellCommand('./yii bpm/request/make-xls');
        $I->canSeeInShellOutput('');
        $I->canSeeNumberOfMessagesInQueue('lisa_exportGenerating', 0);

        $I->amOnPage('/bpm/export/index');
        $I->checkObjectsOnPage($providerData['pageObjects']);
    }
}