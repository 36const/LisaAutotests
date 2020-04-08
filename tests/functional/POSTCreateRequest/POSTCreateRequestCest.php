<?php

namespace lisa;

use Codeception\Util\HttpCode;
use rzk\TestHelper;

/**
 * @group lisa
 * @group lisa_functional
 * @group POSTCreateRequest
 */
class POSTCreateRequestCest
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
        $test = $this->testHelper->getDataProvider('case1 case2');
        return $test;
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

    public function POSTCreateRequest(FunctionalTester $I, \Codeception\Example $data)
    {
        $providerData = $data['provider_data'];
        $settings = $data['settings'];
        $this->testHelper->clearInDB($I, $data, 'lisa_fixtures');
        $I->wantTo($settings['description']);

        $I->amOnCreatingPage($settings['type'], $settings['direction']);
        $providerData['requestBody']['_csrf-backend'] = FunctionalTester::$csrfToken[0];

        $I->seeInTitle($settings['description']);
        $I->see($settings['description'], ['class' => 'global-caption']);

        $I->assertEquals($I->allCheckboxesInCreatingPage(), $providerData['checkboxes']);
        if ($settings['direction'] != 2) {
            $I->seeCheckboxIsChecked($I->checkboxInCreatingPage('Ручная загрузка'));
            $I->dontSeeCheckboxIsChecked($I->checkboxInCreatingPage('Пакетная загрузка'));
        }

        $I->sendPOST($providerData['requestURL'], $providerData['requestBody']);

        $I->seeResponseCodeIs($providerData['responseCode']);
        $I->validateInDB('lisa_fixtures', 'requests', $providerData['db']['requests']);
        $I->validateRequestsFieldsInDB($providerData['db']['requests_fields']);
    }
}