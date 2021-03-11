<?php

namespace lisa;

use Codeception\Example;
use Codeception\Module\TestHelper;
use lisa\Page\Requests\RequestView;

/**
 * @group lisa
 * @group lisa_functional
 * @group lisa_functional_requests
 * @group CronSetAutoDifficulty
 */
class CronSetAutoDifficultyCest
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
    public function CronSetAutoDifficulty(FunctionalTester $I, Example $data, RequestView $view)
    {
        $I->loadDataForTest($data, 'allUsers');
        $providerData = $data['provider_data'];

        $I->runShellCommand('./yii bpm/request/set-auto-difficulty');
        $I->canSeeResultCodeIs(0);

        $I->checkTablesInDB($providerData['db']);
        $view->checkFields($providerData['db']);
    }
}
