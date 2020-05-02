<?php

namespace lisa;

use Codeception\Util\HttpCode;
use Codeception\Example;
use rzk\TestHelper;
use lisa\Page\Functional\Login;
use lisa\Page\Functional\RequestCreate;
use lisa\Page\Functional\RequestView;

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
     * @param RequestCreate $create
     * @throws \GuzzleHttp\Exception\GuzzleException
     *
     * @dataProvider pageProvider
     *
     */
    public function POSTCreateRequest(FunctionalTester $I, Example $data, Login $login, RequestCreate $create, RequestView $view)
    {
        $I->loadDataForTest($data, $this->testHelper);
        $errors = null;

        $setting = $data['setting'];
        $providerData = $data['provider_data'];

        $providerData['requestBody']['_csrf-backend'] = $login->login();

        $create->amOnRequestCreate($setting['type'], $setting['direction']);
        $I->seeInTitle($setting['description']);
        $I->see($setting['description'], ['class' => 'global-caption']);

        $I->assertEquals($I->grabMultiple(RequestCreate::$allCheckboxes), $providerData['checkboxes']);

        if ($setting['direction'] != 2) {
            $I->seeCheckboxIsChecked($create->findCheckbox('Ручная загрузка'));
            $I->dontSeeCheckboxIsChecked($create->findCheckbox('Пакетная загрузка'));
        }

        $I->sendPOST($providerData['requestURL'], $providerData['requestBody']);
        $I->seeResponseCodeIs($providerData['responseCode']);

        $errors[] = $view->checkFields($providerData['db']);
        $errors[] = $I->checkTablesInDB($providerData['db']);

        foreach ($errors as $error) $I->assertNull($error);
    }
}
