<?php

namespace lisa;

use Codeception\Example;
use rzk\TestHelper;
use lisa\Page\Functional\Login;
use lisa\Page\Functional\RequestView;
use lisa\Page\Functional\Roles;

/**
 * @group lisa
 * @group lisa_functional
 * @group POSTRoles
 * @group POSTRolesUpdate
 */
class POSTRolesUpdateCest
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
     * @param Roles $roles
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @dataProvider pageProvider
     *
     */
    public function POSTRolesUpdate(FunctionalTester $I, Example $data, Login $login, Roles $roles)
    {
        $I->loadDataForTest($data, $this->testHelper);

        $providerData = $data['provider_data'];

        $providerData['requestBody']['_csrf-backend'] = $login->login();

        $I->sendPOST('/bpm/roles/update?id=1', $providerData['requestBody']);
        $I->seeResponseCodeIs(200);

        $roles->amOnRoleUpdate(1);
        $roles->checkCheckboxes($providerData['requestBody']);

        $I->checkTablesInDB($providerData['db']);
    }
}