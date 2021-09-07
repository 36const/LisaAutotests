<?php

namespace lisa;

use Codeception\Example;
use Codeception\Module\TestHelper;

/**
 * @group lisa
 * @group lisa_api
 * @group lisa_api_requests
 * @group lisa_api_requests_comment
 * @group PUTCommentUpdate
 */
class PUTCommentUpdateCest
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
    public function PUTCommentUpdate(RequestsTester $I, Example $data)
    {
        $I->loadDataForTest($data);
        $providerData = $data['provider_data'];

        $I->haveHttpHeader('Content-Type', 'application/json');
        $I->sendPUT('/comment/update/1', $providerData['requestBody']);

        $I->seeResponseCodeIs($providerData['responseCode']);
        $I->canSeeResponseContainsJson($providerData['responseBody']);

        $I->checkTablesInDB($providerData['db']);
        $I->checkRabbitMQ($providerData['RabbitMQ'] ?? null);
    }
}
