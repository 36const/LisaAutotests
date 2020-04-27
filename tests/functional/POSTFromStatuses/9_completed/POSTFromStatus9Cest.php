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
 * @group POSTFromStatuses
 * @group POSTFromStatus9
 */
class POSTFromStatus9Cest
{
    /**
     * @var TestHelper $testHelper
     */
    private $testHelper;

    /**
     * GetMainCest constructor.
     * Конструктор класса GetMainCest
     *
     * TestHelper через него идет создание фикстур моков, обработка файла data.php,
     * возможность очистки кеша вашего приложения
     * (Очистка кеша работает не из коробки, возможно вам нужна будет индивидуальная настройка данной функции)
     *
     */
    public function __construct()
    {
        $this->testHelper = new TestHelper(__DIR__);
    }

    /**
     * GETItemsFinish dataProvider
     * Дата провайдер теста GETItemsFinish
     *
     * В данной функции реализуется дата провайдер который возвращает все кейсы с data.php
     * Далее функция GETItemsFinish обрабатывает каждый кейс
     *
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
    public function POSTFromStatus9(FunctionalTester $I, Example $data, Login $login, RequestView $view, RequestToCorrection $toCorrection, RequestCorrection $correction)
    {
        $I->loadDataForTest($data, $this->testHelper);

        $providerData = $data['provider_data'];

        $providerData['requestBody']['_csrf-backend'] = $login->login();

        $view->amOnView(1);

        $I->changeStatus($providerData['requestParameter'], $providerData['requestBody']);

        $view->amOnView(1);
        $view->checkFields2($providerData['db']);

        if ($providerData['requestParameter'] == 'to-correction') {

            $toCorrection->amOnToCorrection(1);
            $toCorrection->checkFields($providerData['requestBody']);

            $correction->amOnCorrection(1);
            $correction->checkFields($providerData['requestBody']);
        }

        /*$I->checkTableInDB('lisa_fixtures','requests', $providerData['db']['requests']);
        $I->checkTableInDB('lisa_fixtures','requests_fields', $providerData['db']['requests_fields']);
        $I->checkTableInDB('lisa_fixtures','request_errors', $providerData['db']['request_errors']);*/

        $I->checkTablesInDB($providerData['db']);
    }
}