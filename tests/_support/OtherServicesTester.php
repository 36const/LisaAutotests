<?php

namespace lisa;

use Codeception\Example;

/**
 * Inherited Methods
 * @method void wantToTest($text)
 * @method void wantTo($text)
 * @method void execute($callable)
 * @method void expectTo($prediction)
 * @method void expect($prediction)
 * @method void amGoingTo($argumentation)
 * @method void am($role)
 * @method void lookForwardTo($achieveValue)
 * @method void comment($description)
 * @method void pause()
 *
 * @SuppressWarnings(PHPMD)
 */
class OtherServicesTester extends GeneralTester
{
    use _generated\OtherServicesTesterActions;

    public function checkRabbitMQ(?array $providerData)
    {
        $I = $this;

        if ($providerData) {
            foreach ($providerData as $queueName => $queueMessages) {
                $I->canSeeNumberOfMessagesInQueue($queueName, count($queueMessages));

                foreach ($queueMessages as $message) {
                    $I->canSeeMessageInQueueContainsText($queueName, $message);
                }
            }
        }
    }

//    public const PARAMS_LOCAL = '/var/www/lisa/www/api/config/params.php';
    public const PARAMS_LOCAL = '/builds/gomer/lisa/api/config/params.php';

    public function setMaxFileSize(int $kilobytes, bool $unset = false)
    {
        $fileArray = file(self::PARAMS_LOCAL);

        foreach ($fileArray as $key => $str) {
            if (strpos($str, 'max_file_size')) {
                unset($fileArray[$key]);
            }
        }

        if ($unset == false)
            array_splice($fileArray, 3, 0, "    'max_file_size' => $kilobytes,\n");

        $newFileContent = implode($fileArray);
        $fo = fopen(self::PARAMS_LOCAL, 'w+');
        fwrite($fo, $newFileContent);
    }

}