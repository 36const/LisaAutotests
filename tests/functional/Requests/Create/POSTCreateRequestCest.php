<?php

namespace lisa;

use Codeception\Example;
use rzk\TestHelper;
use lisa\Page\Functional\Login;
use lisa\Page\Functional\RequestCreate;
use lisa\Page\Functional\RequestView;

/**
 * @group lisa
 * @group lisa_functional
 * @group lisa_functional_requests
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

    /**
     * @param FunctionalTester $I
     * @param Example $data
     * @param Login $login
     * @param RequestCreate $create
     * @param RequestView $view
     * @throws \GuzzleHttp\Exception\GuzzleException
     *
     * @dataProvider pageProvider
     *
     */
    public function POSTCreateRequest(FunctionalTester $I, Example $data, Login $login, RequestCreate $create, RequestView $view)
    {
        $I->loadDataForTest($data, $this->testHelper, ['allUsers']);

        $setting = $data['setting'];
        $providerData = $data['provider_data'];

        $providerData['requestBody']['_csrf-backend'] = $login->login();

        $create->amOnRequestCreate($setting['type'], $setting['direction']);
        $I->seeInTitle($setting['description']);
        $I->see($setting['description'], ['class' => 'global-caption']);

        $I->assertEquals($I->grabMultiple(RequestCreate::$allCheckboxes), $providerData['checkboxes']);

        if ($setting['direction'] != 2 && $setting['type'] != 4) {
            $I->seeCheckboxIsChecked($create->findCheckbox('Ручная загрузка'));
            $I->dontSeeCheckboxIsChecked($create->findCheckbox('Пакетная загрузка'));
        }

        if ($setting['type'] == 4) {
            $I->dontSeeCheckboxIsChecked($create->findCheckbox('Ручная загрузка'));
            $I->seeCheckboxIsChecked($create->findCheckbox('Пакетная загрузка'));
        }

        $I->sendPOST('/bpm/request/create', $providerData['requestBody']);
        $I->seeResponseCodeIs(200);

        $I->checkTablesInDB($providerData['db']);
        $view->checkFields($providerData['db']);
    }
}
