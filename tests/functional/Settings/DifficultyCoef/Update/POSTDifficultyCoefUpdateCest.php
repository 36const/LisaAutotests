<?php

namespace lisa;

use Codeception\Example;
use Codeception\Module\TestHelper;
use lisa\Page\Requests\RequestView;

/**
 * @group lisa
 * @group lisa_functional
 * @group lisa_functional_settings
 * @group POSTDifficultyCoef
 * @group POSTDifficultyCoefUpdate
 */
class POSTDifficultyCoefUpdateCest
{
    protected function pageProvider(): array
    {
        return TestHelper::prepareDataprovider(require 'data.php', '');
    }

    /**
     * @param FunctionalTester $I
     * @param Example $data
     * @param RequestView $view
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @dataProvider pageProvider
     */
    public function POSTDifficultyCoefUpdate(FunctionalTester $I, Example $data, RequestView $view)
    {
        $I->loadDataForTest($data);
        $providerData = $data['provider_data'];

        $I->loadDataForRedis(FunctionalTester::REDIS_KEYS_VALUES);

        $I->sendPOST('/bpm/difficulty-coef/update?id=1', $providerData['requestBody']);
        $I->seeResponseCodeIs(200);

        $I->checkRedis($providerData['excludedRedisKeys'] ?? null);
        $I->checkTablesInDB($providerData['db']);
        $view->checkFields($providerData['db']);
    }
}