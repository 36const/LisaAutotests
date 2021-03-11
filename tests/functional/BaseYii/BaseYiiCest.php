<?php

namespace lisa;

use Codeception\Example;
use Codeception\Module\TestHelper;

/**
 * @group lisa
 * @group lisa_functional
 * @group lisa_functional_baseYii
 */
class BaseYiiCest
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
    public function BaseYii(FunctionalTester $I, Example $data)
    {
        $I->loadDataForTest($data);

        $I->runShellCommand('./yii');
        $I->seeInShellOutput('This is Yii version 2.0.34.');
    }
}
