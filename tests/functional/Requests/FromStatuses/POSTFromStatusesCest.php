<?php

namespace lisa;

use Codeception\Example;
use Codeception\Module\TestHelper;
use lisa\Page\Requests\RequestView;
use lisa\Page\Requests\RequestToCorrection;
use lisa\Page\Requests\RequestCorrection;

/**
 * @group lisa
 * @group lisa_functional
 * @group lisa_functional_requests
 * @group POSTFromStatuses
 */
class POSTFromStatusesCest
{
    protected function pageProvider(): array
    {
        return TestHelper::prepareDataprovider(require 'data.php', '');
    }

    /**
     * @param FunctionalTester $I
     * @param Example $data
     * @param RequestView $view
     * @param RequestToCorrection $toCorrection
     * @param RequestCorrection $correction
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @dataProvider pageProvider
     */
    public function POSTFromStatuses(FunctionalTester $I, Example $data, RequestView $view,
                                     RequestToCorrection $toCorrection, RequestCorrection $correction)
    {
        $I->loadDataForTest($data, 'allUsers');
        $providerData = $data['provider_data'];

        $view->changeStatus($providerData['requestParameter'], $providerData['requestBody']);
        $I->checkTablesInDB($providerData['db']);
        $view->checkFields($providerData['db']);

        if ($providerData['requestParameter'] == 'to-correction') {

            $toCorrection->amOnToCorrection(1);
            $toCorrection->checkFields($providerData['requestBody']);

            $correction->amOnCorrection(1);
            $correction->checkFields($providerData['requestBody']);
        }

        $I->checkRabbitMQ($providerData);
    }
}