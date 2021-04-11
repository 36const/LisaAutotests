<?php

namespace lisa;

use Codeception\Example;
use Codeception\Module\TestHelper;

/**
 * @group lisa
 * @group lisa_functional
 * @group lisa_functional_interface
 * @group CronClearNotifications
 */
class CronClearNotificationsCest
{
    protected function pageProvider(): array
    {
        return TestHelper::prepareDataprovider(require 'data.php', '');
    }

    /**
     * @param FunctionalTester $I
     * @param Example $data
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @dataProvider pageProvider
     */
    public function CronClearNotifications(FunctionalTester $I, Example $data)
    {
        $I->loadDataForTest($data);
        $providerData = $data['provider_data'];

        $I->runShellCommand('./yii bpm/request/clear-notifications');
        $I->canSeeInShellOutput("Удалены нотификации до " . date("Y-m-d 00:00:00", strtotime("-1 month")));
        $I->canSeeResultCodeIs(0);

        $I->checkTablesInDB($providerData['db']);
    }
}
