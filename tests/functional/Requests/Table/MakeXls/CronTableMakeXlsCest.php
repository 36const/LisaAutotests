<?php

namespace lisa;

use Codeception\Example;
use rzk\TestHelper;

/**
 * @group lisa
 * @group lisa_functional
 * @group lisa_functional_requests
 * @group CronMakeXls
 * @group CronTableMakeXls
 */
class CronTableMakeXlsCest
{
    /**
     * @var TestHelper $testHelper
     */
    private $testHelper;

    public function __construct()
    {
        $this->testHelper = new TestHelper(__DIR__);
    }

    /**
     * @return array
     */
    protected function pageProvider()
    {
        return $this->testHelper->getDataProvider('');
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
        $I->loadDataForTest($data, $this->testHelper, ['allUsers']);
        $providerData = $data['provider_data'];

        $I->sendGET('/bpm/request?isExport=1&columns={"1":"id","2":"subject","3":"type_id","4":"author_id","5":"supervisor_id","6":"manager_id","7":"cross_check_manager_id","8":"status","9":"cross_check_status","10":"with_grid","11":"used_ref","12":"updating_photos","13":"automoderation","14":"mobile_courier","15":"hand_load","16":"enter_points","17":"with_tags","18":"by_client_review","19":"updating_characteristics","20":"stop_brands","21":"adding_instructions","22":"updating_description","23":"markdown_2","24":"with_video","25":"with_pallets","26":"adding_goods_to_new_category","27":"lots","28":"promo_desc","29":"complaint_for_good","30":"visa","31":"markdown","32":"difficulty_level","33":"photos_available","34":"with_photo","35":"adding_graphics","36":"calc_quantity_of_checked_goods","37":"changed_goods","38":"added_goods","39":"pack_load","40":"goods_in_db","41":"language","42":"description_available","43":"characteristics_available","44":"calc_quantity_of_checked_goods_with_errors_cc","45":"author_clarifications","46":"calc_quantity_of_checked_goods_cc","47":"awaiting_correction","48":"calc_quantity_of_checked_goods_with_errors","49":"result_comment","50":"team_direction","51":"last_change_status_date","52":"amount_to_work","53":"sv_report_periods","54":"supervisor_check_date","55":"category_id","56":"priority","57":"actual_start_date","58":"report_period_id","59":"supervisor_process_date","60":"actual_finish_date","61":"planned_finish_date","62":"recommendations","63":"planned_start_date","64":"created_at","65":"parent_id","66":"seller_id","67":"description","68":"reason_id","69":"correction_comment","70":"reason","71":"direction"}');
        $I->seeResponseCodeIs(200);
        $I->canSeeNumberOfMessagesInQueue('lisa_exportGenerating', 1);

        $I->runShellCommand('./yii bpm/request/make-xls');
        $I->canSeeInShellOutput('');
        $I->canSeeNumberOfMessagesInQueue('lisa_exportGenerating', 0);

        $I->amOnPage('/bpm/export/index');
        $I->checkObjectsOnPage($providerData['pageObjects']);
    }
}