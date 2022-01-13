<?php

namespace lisa;

use Codeception\Example;
use Codeception\Module\TestHelper;

/**
 * @group lisa
 * @group lisa_api
 * @group lisa_api_requests
 * @group lisa_api_crons
 * @group CronCompleteWaitGrouping
 */
class CronCompleteWaitGroupingCest
{
    protected function pageProvider(): array
    {
        return TestHelper::prepareDataprovider(require 'data.php', '');
    }

    /**
     * @param RequestsTester $I
     * @param Example $data
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @dataProvider pageProvider
     */
    public function CronCompleteWaitGrouping(RequestsTester $I, Example $data)
    {
        $I->loadDataForTest($data);
        $providerData = $data['provider_data'];

        $I->declareQueue('lisa_sendOuterNotifications', false, true, false, false);

        $I->runShellCommand('./yii request/complete-wait-grouping');
        $I->canSeeResultCodeIs(0);

        is_null($providerData['status'])
            ? $I->canSeeInShellOutput('')
            : $I->canSeeInShellOutput('Задача №1 переведена в статус ' . $providerData['status']);

        $I->checkTablesInDB($providerData['db']);
        $I->checkRabbitMQ($providerData['RabbitMQ'] ?? null);
    }
}
