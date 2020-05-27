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
 * @group GETRequests
 */
class GETRequestsCest
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
        return $this->testHelper->getDataProvider('case2');
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
    public function GETRequests(FunctionalTester $I, Example $data, Login $login, RequestView $view,
                                    RequestToCorrection $toCorrection, RequestCorrection $correction)
    {
        $I->loadDataForTest($data, $this->testHelper);
        $providerData = $data['provider_data'];
        $login->login();

        $I->amOnPage('/bpm/request', $providerData['requestParameters']);
        $I->seeResponseCodeIs(200);
//        die();
        $I->checkFieldsOnPage($providerData['pageObjects']);
    }
}