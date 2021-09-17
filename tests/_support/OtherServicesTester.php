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

    public const PARAMS_LOCAL = '/var/www/lisa/www/api/config/params.php';
//    public const PARAMS_LOCAL = '/builds/gomer/lisa/api/config/params.php';

    /**
     * Установить максимально допустимый объём загружаемого файла 1 Мб.
     * При параметре false установка скидывается
     */
    public function changeMaxFileSize(bool $set = true)
    {
        $fileStringsArray = file(self::PARAMS_LOCAL);

        foreach ($fileStringsArray as $key => $string) {
            if (strpos($string, 'max_file_size'))
                unset($fileStringsArray[$key]);
        }

        if ($set)
            array_splice($fileStringsArray, 3, 0, "    'max_file_size' => 1024,\n");

        $newFileContent = implode($fileStringsArray);
        $fo = fopen(self::PARAMS_LOCAL, 'w+');
        fwrite($fo, $newFileContent);
    }

}