<?php

namespace lisa;

use Codeception\Example;
use rzk\TestHelper;

/**
 * @group lisa
 * @group lisa_functional
 * @group CronClearNotifications
 */
class CronClearNotificationsCest
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
    public function CronClearNotifications(FunctionalTester $I, Example $data)
    {
        $I->loadDataForTest($data, $this->testHelper, ['allUsers']);
        $providerData = $data['provider_data'];

        $I->runShellCommand('./yii bpm/request/clear-notifications');
        $I->canSeeInShellOutput("Удалены нотификации до " . date("Y-m-d 00:00:00", strtotime("-1 month")));

        $I->checkTablesInDB($providerData['db']);
    }
}
