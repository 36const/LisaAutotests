<?php
namespace lisa;

use Codeception\Util\HttpCode;
use rzk\TestHelper;

/**
 * @group lisa
 * @group POSTGomer_1_2_used
 */

class POSTGomer_1_2_usedCest
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
        $test = $this->testHelper->getDataProvider();
        return $test;
    }

    public function _before(ApiTester $I)
    {
    }

    /**
     * @param ApiTester $I
     * @param \Codeception\Example $data
     * @throws \GuzzleHttp\Exception\GuzzleException
     *
     * @dataProvider pageProvider
     *
     */

    public function POSTGomer_1_2_used(ApiTester $I, \Codeception\Example $data)
    {
        $providerData = $data['provider_data'];
        $this->testHelper->loadFixture($I, $data);
        $I->wantTo($data['setting']['description']);

        $I->sendPOST('/bpm/api/create-request-by-market-id',
            [
                "sync_source_id" => 1,
                "market_id" => 83,
                "type_id" => 1,
                "items_count" => 10,
                "used_ref" => true
            ]);

        $I->seeResponseCodeIs($providerData['responseCode']);
        $I->seeResponseContainsJson($providerData['responseBody']);

        $I->validateInDB('lisa_fixtures', 'requests', $providerData['db']['requests']);
        $I->validateInDB('lisa_fixtures', 'requests_fields', $providerData['db']['requests_fields']);
    }
}