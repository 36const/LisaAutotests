<?php

namespace lisa;

use Codeception\Example;
use Codeception\Module\TestHelper;

/**
 * @group lisa
 * @group lisa_api
 * @group lisa_api_settings
 * @group lisa_api_crons
 * @group CronSyncSeller
 */
class CronSyncSellerCest
{
    protected function pageProvider(): array
    {
        return TestHelper::prepareDataprovider(require 'data.php', '');
    }

    /**
     * @param SettingsTester $I
     * @param Example $data
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @dataProvider pageProvider
     */
    public function CronSyncSeller(SettingsTester $I, Example $data)
    {
        $I->loadDataForTest($data);
        $providerData = $data['provider_data'];
        
        $I->declareExchange('marketplace_exchange', 'topic', false, true, false);
        $I->declareQueue('market_queue', false, true, false, false);
        $I->bindQueueToExchange('market_queue', 'marketplace_exchange', $providerData['routing_key']);

        if (isset($data['setting']['multi'])) {
            $I->haveInRedis('string', 'SellerDistribution', 'a:2:{i:0;s:127:"{"positions":["supervisor","admin","teamLead"],"teamDirections":[2,"5"],"includedUsers":["23"],"excludedUsers":["6","10","34"]}";i:1;N;}');
            $id = 1;

            while ($id <= 18) {
                $message = '{"data":{"id":21567,"owox_id":13480' . $id . ',"title_translit":"soska","business_model":"b2c","title":"Soska' . $id . '","extended_description":"","extended_description_ua":"","primary_phone":"+380445021079","description":"","description_ua":"","is_show_phone":"1","is_reliable":"0","status":"1","logo":null,"mobile_logo":null,"big_logo":null,"logo_svg":"","mobile_logo_svg":"","big_logo_svg":"","default_sla_owox_id":"40","manager_id":"194","ff":"0"},"changed":["status"],"time":"2021-05-25 09:57:15"}';
                $id++;

                $I->pushToExchange('marketplace_exchange', $message, $providerData['routing_key']);
                $I->runShellCommand('./yii request/sync-seller', false);
                $I->canSeeResultCodeIs(1);
                $I->canSeeInShellOutput($providerData['response']);
            }

            foreach ($providerData['numberOfRecords'] as $supervisorId => $expectedNumber)
                $I->canSeeNumRecords($expectedNumber, 'markets_supervisors', ['supervisor_id' => $supervisorId]);

        } else {
            $I->pushToExchange('marketplace_exchange', $providerData['message'], $providerData['routing_key']);
            $I->runShellCommand('./yii request/sync-seller', false);
            $I->canSeeResultCodeIs(1);

            isset($data['setting']['negative'])
                ? $I->assertEquals('', $I->grabShellOutput())
                : $I->canSeeInShellOutput($providerData['response']);
        }
        
        $I->checkTablesInDB($providerData['db']);
    }
}
