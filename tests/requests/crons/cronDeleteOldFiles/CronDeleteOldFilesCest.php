<?php

namespace lisa;

use Codeception\Example;
use Codeception\Module\TestHelper;

/**
 * @group lisa
 * @group lisa_api
 * @group lisa_api_requests
 * @group lisa_api_crons
 * @group CronDeleteOldFiles
 */
class CronDeleteOldFilesCest
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
    public function CronDeleteOldFiles(RequestsTester $I, Example $data)
    {
        $I->loadDataForTest($data);
        $providerData = $data['provider_data'];

        $I->runShellCommand('./yii attachment/delete-old-files');
        
        $I->canSeeInShellOutput('Удаляем старые файлы:');
        $I->canSeeInShellOutput('100% (2/2)');
        $I->canSeeResultCodeIs(0);

        $I->checkTablesInDB($providerData['db']);
    }
}
