<?php

namespace lisa;

use Codeception\Example;
use rzk\TestHelper;

/**
 * @group lisa
 * @group lisa_functional
 * @group Cron
 * @group CronMakeXls
 */
class CronMakeXlsCest
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
    public function CronMakeXls(FunctionalTester $I, Example $data)
    {
        $I->loadDataForTest($data, $this->testHelper, ['allUsers']);
        $providerData = $data['provider_data'];

        $I->sendGET('/bpm/request?isExport=1&columns=%20%20%20%20%20%20%20%20[%22id%22,%22subject%22,%22type_id%22,%22author_id%22,%22supervisor_id%22,%22manager_id%22,%22cross_check_manager_id%22,%22status%22,%22cross_check_status%22,%22with_grid%22,%22used_ref%22,%22updating_photos%22,%22automoderation%22,%22mobile_courier%22,%22hand_load%22,%22enter_points%22,%22with_tags%22,%22by_client_review%22,%22updating_characteristics%22,%22stop_brands%22,%22adding_instructions%22,%22updating_description%22,%22markdown_2%22,%22with_video%22,%22with_pallets%22,%22adding_goods_to_new_category%22,%22lots%22,%22promo_desc%22,%22complaint_for_good%22,%22visa%22,%22markdown%22,%22difficulty_level%22,%22photos_available%22,%22with_photo%22,%22adding_graphics%22,%22calc_quantity_of_checked_goods%22,%22changed_goods%22,%22added_goods%22,%22pack_load%22,%22goods_in_db%22,%22language%22,%22description_available%22,%22characteristics_available%22,%22calc_quantity_of_checked_goods_with_errors_cc%22,%22author_clarifications%22,%22calc_quantity_of_checked_goods_cc%22,%22awaiting_correction%22,%22calc_quantity_of_checked_goods_with_errors%22,%22result_comment%22,%22team_direction%22,%22last_change_status_date%22,%22amount_to_work%22,%22sv_report_periods%22,%22supervisor_check_date%22,%22category_id%22,%22priority%22,%22actual_start_date%22,%22report_period_id%22,%22supervisor_process_date%22,%22actual_finish_date%22,%22planned_finish_date%22,%22recommendations%22,%22planned_start_date%22,%22created_at%22,%22parent_id%22,%22seller_id%22,%22description%22,%22reason_id%22,%22correction_comment%22,%22reason%22,%22direction%22]');
        $I->seeResponseCodeIs(200);
        $I->runShellCommand('./yii bpm/request/make-xls');

        $I->amOnPage('/bpm/export/index');
        $I->checkObjectsOnPage($providerData['pageObjects']);
    }
}