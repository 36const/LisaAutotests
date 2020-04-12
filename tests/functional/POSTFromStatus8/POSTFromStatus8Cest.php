<?php

namespace lisa;

use Codeception\Util\HttpCode;
use rzk\TestHelper;

/**
 * @group lisa
 * @group lisa_functional
 * @group POSTFromStatuses
 * @group POSTFromStatus8
 */
class POSTFromStatus8Cest
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
        $I->login();
    }

    /**
     * @param FunctionalTester $I
     * @param \Codeception\Example $data
     * @throws \GuzzleHttp\Exception\GuzzleException
     *
     * @dataProvider pageProvider
     *
     */
    public function POSTFromStatus8(FunctionalTester $I, \Codeception\Example $data)
    {
        $providerData = $data['provider_data'];
        $settings = $data['settings'];
        $this->testHelper->clearInDB($I, $data, 'lisa_fixtures');
        $this->testHelper->loadFixture($I, $data);
        $I->wantTo($settings['description']);

        $I->amOnPage('/bpm/request/view?id=1');

        !isset($providerData['requestUpdateBody']) ?:
            $I->sendPostIfRequestBodyExists($providerData['requestUpdateBody'], '/bpm/request/update?id=1');

        !isset($providerData['requestToCorrectionBody']) ?:
            $I->sendPostIfRequestBodyExists($providerData['requestToCorrectionBody'], '/bpm/request/to-correction?id=1&changeStatus=1');

        $I->validateInDB('lisa_fixtures', 'requests', $providerData['db']['requests']);
        $I->validateRequestsFieldsInDB($providerData['db']['requests_fields']);
    }
}