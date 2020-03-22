<?php

use lisa\FunctionalTester;
use rzk\TestHelper;

/**
 * @group lisa
 * @group POSTCreate_1_1
 */
class POSTCreate_1_1Cest
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
        return $this->testHelper->getDataProvider();
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

    public function POSTCreate_1_1(FunctionalTester $I, \Codeception\Example $data)
    {
        $providerData = $data['provider_data'];
        $this->testHelper->loadFixture($I, $data);
        echo "{$I->grabCookie('_csrf-backend')}";

        $I->wantTo($data['setting']['description']);

        $I->sendPOST('/bpm/request/create',
            [
                "RequestFields[15]" => 1,
                "RequestFields[1]" => 1,
                "RequestFields[8]" => 1,
                "RequestFields[9]" => 1,
                "Request[amount_to_work]" => 10,
                /*Request[attachment_folder] => 18ac118ec8919dcb3ad0d7ddd129d88a,*/
                "Request[attachments]" => [],
                "Request[category_id]" => 1,
                "Request[description]" => "Добавление новых товаров (Работа с товарами Розетки)",
                "Request[direction]" => 1,
                "Request[parent_id]" => null,
                "Request[planned_finish_date]" => null,
                "Request[priority]" => 0,
                "Request[seller_id]" => 5,
                "Request[subject]" => "Добавление новых товаров (Работа с товарами Розетки)",
                "Request[type_id]" => 1,
                "Request[uploadedFiles][]" => null,
                "Request[uploadedFiles][]" => null,
                "_csrf-backend" => \yii\BaseYii::$app->request->getCsrfToken()

            ]);

        $I->seeResponseCodeIs($providerData['responseCode']);
        $I->seeInDatabase("requests", $data['provider_data']['requests']);
    }
}