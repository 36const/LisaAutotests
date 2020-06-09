<?php

namespace lisa;

use Codeception\Util\HttpCode;
use Codeception\Example;
use rzk\TestHelper;
use lisa\Page\Functional\Login;
use lisa\Page\Functional\RequestView;
use lisa\Page\Functional\RequestToCorrection;
use lisa\Page\Functional\RequestCorrection;

/**
 * @group lisa
 * @group lisa_functional
 * @group lisa_functional_requests
 * @group POSTFromStatuses
 */
class POSTFromStatusesCest
{
    /**
     * @var TestHelper $testHelper
     */
    private $testHelper;

    public function __construct()
    {
        $this->testHelper = new TestHelper(__DIR__);
    }

    /**
     * @return array
     */
    protected function pageProvider()
    {
        return $this->testHelper->getDataProvider('');
    }

    public function _before(FunctionalTester $I)
    {
    }

    /**
     * @param FunctionalTester $I
     * @param Example $data
     * @param Login $login
     * @param RequestView $view
     * @param RequestToCorrection $toCorrection
     * @param RequestCorrection $correction
     * @throws \GuzzleHttp\Exception\GuzzleException
     *
     * @dataProvider pageProvider
     *
     */
    public function POSTFromStatuses(FunctionalTester $I, Example $data, Login $login, RequestView $view,
                                    RequestToCorrection $toCorrection, RequestCorrection $correction)
    {
        $I->loadDataForTest($data, $this->testHelper);

        $providerData = $data['provider_data'];

        $providerData['requestBody']['_csrf-backend'] = $login->login();

        $I->changeStatus($providerData['requestParameter'], $providerData['requestBody']);

        $I->checkTablesInDB($providerData['db']);

        $view->checkFields($providerData['db']);

        if ($providerData['requestParameter'] == 'to-correction') {

            $toCorrection->amOnToCorrection(1);
            $toCorrection->checkFields($providerData['requestBody']);

            $correction->amOnCorrection(1);
            $correction->checkFields($providerData['requestBody']);
        }
    }
}