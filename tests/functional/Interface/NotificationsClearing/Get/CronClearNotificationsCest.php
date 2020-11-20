<?php

namespace lisa;

use Codeception\Example;
use rzk\TestHelper;
use Codeception\Module\TestHelper as Vadim;

/**
 * @group lisa
 * @group lisa_functional
 * @group CronClearNotifications
 */
class CronClearNotificationsCest
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
    public function CronClearNotifications(FunctionalTester $I, Example $data)
    {
        $I->loadDataForTest($data, 'allUsers');
        $providerData = $data['provider_data'];

        $I->runShellCommand('./yii bpm/request/clear-notifications');
        $I->canSeeInShellOutput("Удалены нотификации до " . date("Y-m-d 00:00:00", strtotime("-1 month")));

        $I->checkTablesInDB($providerData['db']);
    }
}
