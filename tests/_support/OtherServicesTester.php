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

    /**
     * @param Example $data - данные кейса из файла data.php
     */
    public function loadDataForTest(Example $data)
    {
        $I = $this;

        $I->loadFixtureFromDataprovider();
        $I->loadMockFromDataprovider();
        $I->purgeAllQueues();
        $I->truncateTablesInDatabase(['lisa_fixtures' => ['exceptions' => [], 'common_log' => []]]);

        $I->wantTo($data['setting']['description']);
    }
    
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

    /**
     * Установить максимально допустимый объём загружаемого файла 1 Мб.
     * При параметре false установка скидывается
     */
    public function changeMaxFileSize(bool $set = true)
    {
        $fileStringsArray = file(Constants::PARAMS_LOCAL);

        foreach ($fileStringsArray as $key => $string) {
            if (strpos($string, 'max_file_size'))
                unset($fileStringsArray[$key]);
        }

        if ($set)
            array_splice($fileStringsArray, 3, 0, "    'max_file_size' => 1024,\n");

        $newFileContent = implode($fileStringsArray);
        $fo = fopen(Constants::PARAMS_LOCAL, 'w+');
        fwrite($fo, $newFileContent);
    }

}