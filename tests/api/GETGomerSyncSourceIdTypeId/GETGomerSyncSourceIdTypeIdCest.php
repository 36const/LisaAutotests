<?php
namespace lisa;

use Codeception\Example;
use rzk\TestHelper;

/**
 * @group lisa
 * @group lisa_api
 * @group GETGomerSyncSourceIdTypeId
 */
class GETGomerSyncSourceIdTypeIdCest
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

    public function _before(ApiTester $I)
    {
    }

    /**
     * @param ApiTester $I
     * @param Example $data
     * @throws \GuzzleHttp\Exception\GuzzleException
     *
     * @dataProvider pageProvider
     *
     */
    public function GETGomerSyncSourceIdTypeId(ApiTester $I, Example $data)
    {
        $I->loadDataForTest($data, $this->testHelper);
        $providerData = $data['provider_data'];

        $I->sendGET('/bpm/api/get-request-by-sync-source-id-and-type-id', $providerData['requestParameters']);

        $I->seeResponseCodeIs($providerData['responseCode']);
        $I->seeResponseContainsJson($providerData['responseBody']);
    }
}