<?php

namespace lisa;

use Codeception\Example;
use Codeception\Module\TestHelper;

/**
 * @group lisa
 * @group lisa_api
 * @group lisa_api_crons
 * @group CronNotify
 */
class CronNotifyCest
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
    public function CronNotify(RequestsTester $I, Example $data)
    {
        $I->loadDataForTest($data);
        $providerData = $data['provider_data'];

        is_dir('./web/files/1631802792673')
            ? $I->cleanDir('../../../web/files/1631802792673')
            : $I->runShellCommand('mkdir -p ./web/files/1631802792673');

        $I->declareExchange('default', 'direct', false, true, false);

        $I->declareQueue('lisa_saveFiles', false, true, false, false);
        $I->bindQueueToExchange('lisa_saveFiles', 'default', 'lisa_saveFiles');
        $I->declareQueue('lisa_sendMailNotifications', false, true, false, false);
        $I->bindQueueToExchange('lisa_sendMailNotifications', 'default', 'lisa_sendMailNotifications');

        if (!empty($providerData['RabbitMQ']['lisa_saveFiles'])) {
            $I->pushToExchange('default', '{"folder":"1631802792673","fileName":"803999_194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd","alias":"194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd","size":"60424","attachmentId":5},{"folder":"1631802792673","fileName":"803999_~!@#$%^&*()_+`-=][\';.|}{:?><.jpg","alias":"!@#$%^&*()_+`-=][\';.|}{:?><.jpg","size":"34304","attachmentId":6}', 'lisa_saveFiles');
            $I->runShellCommand('cp ' . codecept_data_dir('Attachments/194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd') . ' ./web/files/1631802792673/803999_194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd');
            $I->runShellCommand('cp ' . codecept_data_dir('Attachments/~!@#$%^\&*\(\)_+\`-=][\\\'\;\.\|\}\{\:\?\>\<.jpg') . ' ./web/files/1631802792673/803999_~!@#$%^\&*\(\)_+\`-=][\\\'\;\.\|\}\{\:\?\>\<.jpg');
        }

        foreach ($providerData['pushToRabbit'] as $message)
            $I->pushToExchange('default', $message, 'lisa_sendMailNotifications');

        $I->runShellCommand('./yii request/notify', false);

        $I->checkTablesInDB($providerData['db']);
        $I->checkRabbitMQ($providerData['RabbitMQ'] ?? null);
        $I->checkRabbitMQWithRoutingKey($providerData['RabbitMQWithRoutingKey'] ?? null, true);
    }
}
