<?php

namespace lisa;

use Codeception\Example;
use Codeception\Module\TestHelper;
use PhpAmqpLib\Message\AMQPMessage;

/**
 * @group lisa
 * @group lisa_api
 * @group lisa_api_requests
 * @group lisa_api_crons
 * @group CronAttachmentSave
 */
class CronAttachmentSaveCest
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
    public function CronAttachmentSave(RequestsTester $I, Example $data)
    {
        $I->loadDataForTest($data);
        $providerData = $data['provider_data'];

        $I->runShellCommand(Constants::MAKE_AND_CLEAR_FILES_DIR);
        $I->runShellCommand('mkdir -p ' . Constants::TEMP_FILES_DIR . '1631802792673');
        $I->runShellCommand(Constants::MAKE_AND_CLEAR_MINIO_DIR);

        foreach ($providerData['copyCommand'] as $from => $to)
            $I->runShellCommand('cp ' . codecept_data_dir($from) . ' ' . $to);

        $I->pushToExchange('default', $providerData['message'], 'lisa_saveFiles');

        $I->runShellCommand('./yii attachment/save');

        $I->checkTablesInDB($providerData['db']);
        $I->checkRabbitMQ($providerData['RabbitMQ']);

    }
}
