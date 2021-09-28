<?php

namespace lisa;

use Codeception\Example;
use Codeception\Module\TestHelper;

/**
 * @group lisa
 * @group lisa_api
 * @group lisa_api_reports
 * @group lisa_api_reportPeriod
 * @group PUTReportPeriodUpdate
 */
class PUTReportPeriodUpdateCest
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
    public function PUTReportPeriodUpdate(RequestsTester $I, Example $data)
    {
        $I->loadDataForTest($data);
        $providerData = $data['provider_data'];

        $I->loadDataForRedis();

        $I->sendPUT('/report-period/update/4', $providerData['requestBody']);
        
        $I->seeResponseCodeIs(200);
        $I->canSeeJsonResponseMatchesCriteria($providerData['responseBody']);

        $I->checkRedis($providerData['excludedRedisKeys'] ?? null);
        $I->checkTablesInDB($providerData['db']);
        $I->checkRabbitMQWithRoutingKey($providerData['RabbitMQWithRoutingKey'] ?? null, true);
    }
}
