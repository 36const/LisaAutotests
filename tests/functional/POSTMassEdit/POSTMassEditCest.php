<?php

namespace lisa;

use Codeception\Example;
use rzk\TestHelper;
use lisa\Page\Functional\Login;
use lisa\Page\Functional\Requests;
use lisa\Page\Functional\RequestView;

/**
 * @group lisa
 * @group lisa_functional
 * @group POSTMassEdit
 */
class POSTMassEditCest
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
        return $this->testHelper->getDataProvider('case1');
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
    public function POSTMassEdit(FunctionalTester $I, Example $data, Login $login,
                                 Requests $requests, RequestView $view)
    {
        $I->loadDataForTest($data, $this->testHelper);

        $errors = null;

        $providerData = $data['provider_data'];

        $providerData['requestBody']['_csrf-backend'] = $login->login();

        $I->massEdit($providerData['requestBody']);

        $errors[] = $view->checkFieldsForMassEditing($providerData['db']);

        $errors[] = $I->checkTablesInDB($providerData['db']);

        foreach ($errors as $error) $I->assertNull($error);
    }
}
