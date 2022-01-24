<?php

namespace lisa;

use Codeception\Example;
use Codeception\Module\TestHelper;

/**
 * @group lisa
 * @group lisa_api
 * @group lisa_api_users
 * @group lisa_api_crons
 * @group CronEmailSync
 */
class CronEmailSyncCest
{
    protected function pageProvider(): array
    {
        return TestHelper::prepareDataprovider(require 'data.php', '');
    }

    /**
     * @param UsersTester $I
     * @param Example $data
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @dataProvider pageProvider
     */
    public function CronEmailSync(UsersTester $I, Example $data)
    {
        $I->loadDataForTest($data, null);
        $providerData = $data['provider_data'];
        $setting = $data['setting'];

        $I->runShellCommand('./yii user/sync-emails ' . ($setting['last_hour'] ?? 1));
        $I->canSeeResultCodeIs(0);

        $I->checkTablesInDB($providerData['db']);
    }
}
