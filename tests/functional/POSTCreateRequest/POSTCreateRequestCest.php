<?php

namespace lisa;

use Codeception\Util\HttpCode;
use Codeception\Example;
use rzk\TestHelper;
use lisa\Page\Functional\Login;
use lisa\Page\Functional\RequestCreating;

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
        return $this->testHelper->getDataProvider('');
    }

    public function _before(FunctionalTester $I)
    {
    }

    /**
     * @param FunctionalTester $I
     * @param Example $data
     * @param Login $login
     * @param RequestCreating $creatingPage
     * @throws \GuzzleHttp\Exception\GuzzleException
     *
     * @dataProvider pageProvider
     *
     */
    public function POSTCreateRequest(FunctionalTester $I, Example $data, Login $login, RequestCreating $creatingPage)
    {
        $login->login();
        $I->loadDataForTest($data, $this->testHelper);

        $setting = $data['setting'];
        $providerData = $data['provider_data'];
        $providerData['requestBody']['_csrf-backend'] = $login->grabCsrfToken();

        $creatingPage->amOnCreatingPage($setting['type'], $setting['direction']);
        $I->seeInTitle($setting['description']);
        $I->see($setting['description'], ['class' => 'global-caption']);

        $I->assertEquals($creatingPage->grabAllCheckboxes(), $providerData['checkboxes']);
        if ($setting['direction'] != 2) {
            $I->seeCheckboxIsChecked($creatingPage->findCheckbox('Ручная загрузка'));
            $I->dontSeeCheckboxIsChecked($creatingPage->findCheckbox('Пакетная загрузка'));
        }

        $I->sendPOST($providerData['requestURL'], $providerData['requestBody']);
        $I->seeResponseCodeIs($providerData['responseCode']);

        $I->validateInDB('lisa_fixtures', 'requests', $providerData['db']['requests']);
        $I->validateRequestsFieldsInDB($providerData['db']['requests_fields']);
    }
}