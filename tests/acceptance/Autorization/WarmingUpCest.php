<?php

namespace lisa;

use lisa\Page\Functional\Login;
use Yandex\Allure\Adapter\Annotation\Features;
use Yandex\Allure\Adapter\Annotation\Stories;
use rzk\TestHelper;

/**
 * @group lisa
 * @group lisa_acceptance
 *
 * @Features("UIBaseLogin")
 * @Stories("Успешный вход и запись куки успешно залогиненного юзера")
 */

class WarmingUpCest
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
	 * GetMainCest dataProvider
	 * Дата провайдер теста GetMainCest
	 *
	 * В данной функции реализуется дата провайдер который возвращает все кейсы с data.php
	 * Далее функция getMainTest обрабатывает каждый кейс
	 *
	 * @return array
	 */
	protected function pageProvider()
	{
		return $this->testHelper->getDataProvider();
	}

	/**
	 * @param AcceptanceTester $I
	 *
	 * @dataProvider pageProvider
	 *
	 */
	public function warmingUp(AcceptanceTester $I)
	{
		$I->amOnPage('/welcome');
		$I->fillField("LoginForm[username]", Login::$user);
		$I->fillField("LoginForm[password]", Login::$password);
		$I->checkOption(['id' => 'loginform-isbasicauth']);
		$I->click("login-button");
		$I->waitForText("Добро пожаловать", 5);

		$I->getAuthorizationCookie();
	}
}