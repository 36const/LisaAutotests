<?php

namespace lisa;

use Codeception\Example;
use Codeception\Module\TestHelper;

/**
 * @group lisa
 * @group lisa_functional
 * @group lisa_functional_requests
 * @group CronMakeXls
 * @group CronTableMakeXls
 */
class CronTableMakeXlsCest
{
    protected function pageProvider(): array
    {
        return TestHelper::prepareDataprovider(require 'data.php', 'case3 case4 case6');
    }

    /**
     * @param FunctionalTester $I
     * @param Example $data
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @dataProvider pageProvider
     */
    public function CronTableMakeXls(FunctionalTester $I, Example $data)
    {
        $I->loadDataForTest($data);
        $providerData = $data['provider_data'];
        $setting = $data['setting'];
        $I->cleanDir(FunctionalTester::BPM_UPLOADS);

        $I->sendGET('/bpm/request?isExport=1&columns=        ' .
            '{"1":"id","2":"subject","3":"type_id","4":"author_id","5":"supervisor_id","6":"manager_id","7":"cross_check_manager_id","8":"status","9":"cross_check_status",' .
            '"10":"with_grid","11":"used_ref","12":"updating_photos","13":"automoderation","14":"mobile_courier","15":"hand_load","16":"enter_points","17":"with_tags","18":"by_client_review","19":"updating_characteristics",' .
            '"20":"stop_brands","21":"adding_instructions","22":"updating_description","23":"markdown_2","24":"with_video","25":"with_pallets","26":"adding_goods_to_new_category","27":"lots","28":"promo_desc","29":"complaint_for_good",' .
            '"30":"visa","31":"markdown","32":"difficulty_level","33":"photos_available","34":"with_photo","35":"adding_graphics","36":"calc_quantity_of_checked_goods","37":"changed_goods","38":"added_goods","39":"pack_load",' .
            '"40":"goods_in_db","41":"language","42":"description_available","43":"characteristics_available","44":"calc_quantity_of_checked_goods_with_errors_cc","45":"author_clarifications","46":"calc_quantity_of_checked_goods_cc","47":"awaiting_correction","48":"calc_quantity_of_checked_goods_with_errors","49":"result_comment",' .
            '"50":"team_direction","51":"last_change_status_date","52":"amount_to_work","53":"sv_report_periods","54":"supervisor_check_date","55":"category_id","56":"priority","57":"actual_start_date","58":"report_period_id","59":"supervisor_process_date",' .
            '"60":"actual_finish_date","61":"planned_finish_date","62":"recommendations","63":"planned_start_date","64":"created_at","65":"parent_id","66":"seller_id","67":"description","68":"reasons","69":"correction_comment",' .
            '"70":"reason","71":"direction","72":"ua_fields","73":"handled_goods","74":"quantity_of_handled_but_not_grouped","75":"group_settings","76":"quantity_of_words_in_dictionaries","77":"child_count","78":"calc_quantity_of_indicators","79":"calc_quantity_of_not_grouped",' .
            '"80":"calc_quantity_of_sent_emails","81":"calc_quantity_of_child_requests","82":"calc_quantity_of_words_in_dictionaries","83":"average_amount_of_goods_in_group","84":"algorithm","85":"previous_status"}'
        );
        $I->seeResponseCodeIs(200);
        $I->canSeeNumberOfMessagesInQueue('_lisa_exportGenerating', $setting['count'] ?? 1);
        $I->checkTablesInDB($providerData['db_1']);

        $I->runShellCommand('./yii bpm/request/make-xls');
        $I->canSeeInShellOutput('');
        $I->canSeeResultCodeIs(0);
        $I->canSeeNumberOfMessagesInQueue('_lisa_exportGenerating', 0);

        $I->amOnPage('/bpm/export/index');
        $I->checkObjectsOnPage($providerData['pageObjects']);
        $I->checkTablesInDB($providerData['db_2']);

        if (!isset($setting['count'])) {
            $I->seeFileFound(
                $providerData['db_2']['lisa_fixtures']['user_exports'][0]['title >'] . '*.xlsx',
                FunctionalTester::BPM_UPLOADS
            );
        }
        $I->checkXlsxFile($providerData['fileContent'] ?? null, $setting['rows'] ?? null);
    }
}