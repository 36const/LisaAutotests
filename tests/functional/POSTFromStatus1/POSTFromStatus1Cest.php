<?php

namespace lisa;

use Codeception\Util\HttpCode;
use Codeception\Example;
use rzk\TestHelper;
use lisa\Page\Functional\Login;

/**
 * @group lisa
 * @group lisa_functional
 * @group POSTFromStatuses
 * @group POSTFromStatus1
 */
class POSTFromStatus1Cest
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
     * @param \Codeception\Example $data
     * @throws \GuzzleHttp\Exception\GuzzleException
     *
     * @dataProvider pageProvider
     *
     */
    public function POSTFromStatus1(FunctionalTester $I, Example $data, Login $login)
    {
        $login->login();
        $I->loadDataForTest($data, $this->testHelper);

        $providerData = $data['provider_data'];
        $providerData['requestBody']['_csrf-backend'] = $login->grabCsrfToken();

        $I->amOnPage('/bpm/request/view?id=1');

        $I->changeStatus($providerData['requestParameter'], $providerData['requestBody']);

        $I->validateInDB('lisa_fixtures', 'requests', $providerData['db']['requests']);
        $I->validateRequestsFieldsInDB($providerData['db']['requests_fields']);
    }
}