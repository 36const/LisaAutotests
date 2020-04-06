<?php
namespace lisa;

use Codeception\Util\HttpCode;
use rzk\TestHelper;

/**
 * @group lisa
 * @group lisa_api
 * @group POSTModeration
 */
class POSTModerationCest
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
    public function POSTModeration(ApiTester $I, \Codeception\Example $data)
    {
        $providerData = $data['provider_data'];
        $this->testHelper->clearInDB($I, $data, 'lisa_fixtures');
        $I->wantTo($data['setting']['description']);

        $I->sendPOST($providerData['requestURL'], $providerData['requestBody']);

        $I->seeResponseCodeIs($providerData['responseCode']);
        $I->seeResponseContainsJson($providerData['responseBody']);

        $I->seeNumRecords($providerData['seeNumRecords']['requests'], 'requests');
        $I->seeNumRecords($providerData['seeNumRecords']['requests_fields'], 'requests_fields');

        $I->grabNumRecords('requests') == 0 ?:
            $I->validateInDB('lisa_fixtures', 'requests', $providerData['db']['requests']);
        $I->grabNumRecords('requests_fields') == 0 ?:
            $I->validateRequestsFieldsInDB($providerData['db']['requests_fields']);
    }
}