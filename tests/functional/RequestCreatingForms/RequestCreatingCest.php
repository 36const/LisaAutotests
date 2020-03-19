<?php

namespace lisa;

use Codeception\Util\HttpCode;
use rzk\TestHelper;

/**
 * @group lisa
 * @group RequestCreating
 */
class RequestCreatingCest
{
    /**
     * @var TestHelper $testHelper
     */
    private $testHelper;

    /**z
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
    }

    public function _before(FunctionalTester $I)
    {
        $I->login();
    }

    public function RequestCreating_1_1(FunctionalTester $I)
    {
        $I->amOnPage('/bpm/request/create-by-type?typeId=1&direction=1');
        $I->seeInTitle("Новая заявка на Добавление новых товаров (Работа с товарами Розетки)");
        $I->see("Новая заявка на Добавление новых товаров (Работа с товарами Розетки)", ['class' => 'global-caption']);

        $I->seeCheckboxIsChecked($I->checkboxInCreatingPage('Ручная загрузка'));
        $I->dontSeeCheckboxIsChecked($I->checkboxInCreatingPage('Пакетная загрузка'));

        $I->assertEquals($I->allCheckboxesNamesInCreatingPage(), [
            ' Добавление товаров в новую категорию', ' Лоты', ' На основе отзыва клиента на сайте',
            ' Пакетная загрузка', ' Промо-описание', ' Ручная загрузка',
            ' С видео', ' С размерной сеткой', ' С тегами к товарам',
            ' С фотосъемкой', ' Уценка', ' Уценка 2']);
    }

    public function RequestCreating_1_2(FunctionalTester $I)
    {
        $I->amOnPage('/bpm/request/create-by-type?typeId=1&direction=2');
        $I->seeInTitle("Новая заявка на Добавление новых товаров (Работа с товарами Маркетплейса)");
        $I->see("Новая заявка на Добавление новых товаров (Работа с товарами Маркетплейса)", ['class' => 'global-caption']);

        foreach ($I->allCheckboxesNamesInCreatingPage() as $checkbox) {
            $I->dontSeeCheckboxIsChecked($I->checkboxInCreatingPage(trim($checkbox)));
        }

        $I->assertEquals($I->allCheckboxesNamesInCreatingPage(), [
            ' Автомодерация', ' БУ, REF', ' Жалоба на товар продавца маркета',
            ' С видео', ' С палитрой', ' С размерной сеткой']);
    }

    public function RequestCreating_2_1(FunctionalTester $I)
    {
        $I->amOnPage('/bpm/request/create-by-type?typeId=2&direction=1');
        $I->seeInTitle("Новая заявка на Добавление/изменение информации в существующих товарах (Работа с товарами Розетки)");
        $I->see("Новая заявка на Добавление/изменение информации в существующих товарах (Работа с товарами Розетки)", ['class' => 'global-caption']);

        $I->seeCheckboxIsChecked($I->checkboxInCreatingPage('Ручная загрузка'));
        $I->dontSeeCheckboxIsChecked($I->checkboxInCreatingPage('Пакетная загрузка'));

        $I->assertEquals($I->allCheckboxesNamesInCreatingPage(), [
            ' Добавление/обновление инструкций', ' На основе отзыва клиента на сайте',
            ' Обновление описания', ' Обновление фото', ' Обновление характеристик',
            ' Пакетная загрузка', ' Промо-описание', ' Ручная загрузка',
            ' С видео', ' С размерной сеткой', ' С тегами к товарам',
            ' С фотосъемкой', ' Уценка', ' Уценка 2',
            ]);
    }

    public function RequestCreating_2_2(FunctionalTester $I)
    {
        $I->amOnPage('/bpm/request/create-by-type?typeId=2&direction=2');
        $I->seeInTitle("Новая заявка на Добавление/изменение информации в существующих товарах (Работа с товарами Маркетплейса)");
        $I->see("Новая заявка на Добавление/изменение информации в существующих товарах (Работа с товарами Маркетплейса)", ['class' => 'global-caption']);

        foreach ($I->allCheckboxesNamesInCreatingPage() as $checkbox) {
            $I->dontSeeCheckboxIsChecked($I->checkboxInCreatingPage(trim($checkbox)));
        }

        $I->assertEquals($I->allCheckboxesNamesInCreatingPage(), [
            ' Автомодерация', ' БУ, REF', ' Жалоба на товар продавца маркета',
            ' С видео', ' С палитрой', ' С размерной сеткой']);
    }

    public function RequestCreating_3_1(FunctionalTester $I)
    {
        $I->amOnPage('/bpm/request/create-by-type?typeId=3&direction=1');
        $I->seeInTitle("Новая заявка на Перенос товаров (Работа с товарами Розетки)");
        $I->see("Новая заявка на Перенос товаров (Работа с товарами Розетки)", ['class' => 'global-caption']);

        $I->seeCheckboxIsChecked($I->checkboxInCreatingPage('Ручная загрузка'));
        $I->dontSeeCheckboxIsChecked($I->checkboxInCreatingPage('Пакетная загрузка'));

        $I->assertEquals($I->allCheckboxesNamesInCreatingPage(), [
            ' Добавление товаров в новую категорию', ' Лоты', ' На основе отзыва клиента на сайте',
            ' Пакетная загрузка', ' Промо-описание', ' Ручная загрузка',
            ' С видео', ' С размерной сеткой', ' С тегами к товарам',
            ' С фотосъемкой', ' Уценка', ' Уценка 2']);
    }

    public function RequestCreating_3_2(FunctionalTester $I)
    {
        $I->amOnPage('/bpm/request/create-by-type?typeId=3&direction=2');
        $I->seeInTitle("Новая заявка на Перенос товаров (Работа с товарами Маркетплейса)");
        $I->see("Новая заявка на Перенос товаров (Работа с товарами Маркетплейса)", ['class' => 'global-caption']);

        foreach ($I->allCheckboxesNamesInCreatingPage() as $checkbox) {
            $I->dontSeeCheckboxIsChecked($I->checkboxInCreatingPage(trim($checkbox)));
        }

        $I->assertEquals($I->allCheckboxesNamesInCreatingPage(), [
            ' Автомодерация', ' БУ, REF', ' Жалоба на товар продавца маркета',
            ' С видео', ' С палитрой', ' С размерной сеткой']);
    }

    public function RequestCreating_4_0(FunctionalTester $I)
    {
        $I->amOnPage('/bpm/request/create-by-type?typeId=4&direction=0');
        $I->seeInTitle("Новая заявка на Группировка товаров (Определяется типом задачи)");
        $I->see("Новая заявка на Группировка товаров (Определяется типом задачи)", ['class' => 'global-caption']);

        $I->seeCheckboxIsChecked($I->checkboxInCreatingPage('Ручная загрузка'));
        $I->dontSeeCheckboxIsChecked($I->checkboxInCreatingPage('Пакетная загрузка'));

        $I->assertEquals($I->allCheckboxesNamesInCreatingPage(), [
            ' Пакетная загрузка', ' Ручная загрузка']);
    }

    public function RequestCreating_5_1(FunctionalTester $I)
    {
        $I->amOnPage('/bpm/request/create-by-type?typeId=5&direction=1');
        $I->seeInTitle("Новая заявка на Заливка фото с фотостудии (Работа с товарами Розетки)");
        $I->see("Новая заявка на Заливка фото с фотостудии (Работа с товарами Розетки)", ['class' => 'global-caption']);

        $I->seeCheckboxIsChecked($I->checkboxInCreatingPage('Ручная загрузка'));
        $I->dontSeeCheckboxIsChecked($I->checkboxInCreatingPage('Пакетная загрузка'));

        $I->assertEquals($I->allCheckboxesNamesInCreatingPage(), [
            ' Добавление товаров в новую категорию', ' Лоты', ' На основе отзыва клиента на сайте',
            ' Пакетная загрузка', ' Промо-описание', ' Ручная загрузка',
            ' С видео', ' С размерной сеткой', ' С тегами к товарам',
            ' С фотосъемкой', ' Уценка', ' Уценка 2']);
    }

    public function RequestCreating_6_2(FunctionalTester $I)
    {
        $I->amOnPage('/bpm/request/create-by-type?typeId=6&direction=2');
        $I->seeInTitle("Новая заявка на Проверка скрытых товаров (Работа с товарами Маркетплейса)");
        $I->see("Новая заявка на Проверка скрытых товаров (Работа с товарами Маркетплейса)", ['class' => 'global-caption']);

        foreach ($I->allCheckboxesNamesInCreatingPage() as $checkbox) {
            $I->dontSeeCheckboxIsChecked($I->checkboxInCreatingPage(trim($checkbox)));
        }

        $I->assertEquals($I->allCheckboxesNamesInCreatingPage(), [
            ' Автомодерация', ' БУ, REF', ' Жалоба на товар продавца маркета',
            ' С видео', ' С палитрой', ' С размерной сеткой']);
    }

    public function RequestCreating_7_0(FunctionalTester $I)
    {
        $I->amOnPage('/bpm/request/create-by-type?typeId=7&direction=0');
        $I->seeInTitle("Новая заявка на Добавление нового портала/раздела фат-меню/категории товаров (Определяется типом задачи)");
        $I->see("Новая заявка на Добавление нового портала/раздела фат-меню/категории товаров (Определяется типом задачи)", ['class' => 'global-caption']);

        $I->seeCheckboxIsChecked($I->checkboxInCreatingPage('Ручная загрузка'));
        $I->dontSeeCheckboxIsChecked($I->checkboxInCreatingPage('Пакетная загрузка'));

        $I->assertEquals($I->allCheckboxesNamesInCreatingPage(), [
            ' Добавление графики', ' Пакетная загрузка', ' Ручная загрузка', ' Точки входа']);
    }

    public function RequestCreating_8_0(FunctionalTester $I)
    {
        $I->amOnPage('/bpm/request/create-by-type?typeId=8&direction=0');
        $I->seeInTitle("Новая заявка на Добавление/изменение информации в существующих порталах/фат-меню/категориях товаров (Определяется типом задачи)");
        $I->see("Новая заявка на Добавление/изменение информации в существующих порталах/фат-меню/категориях товаров (Определяется типом задачи)", ['class' => 'global-caption']);

        $I->seeCheckboxIsChecked($I->checkboxInCreatingPage('Ручная загрузка'));
        $I->dontSeeCheckboxIsChecked($I->checkboxInCreatingPage('Пакетная загрузка'));

        $I->assertEquals($I->allCheckboxesNamesInCreatingPage(), [
            ' Добавление графики', ' Пакетная загрузка', ' Ручная загрузка', ' Точки входа']);
    }

    public function RequestCreating_9_0(FunctionalTester $I)
    {
        $I->amOnPage('/bpm/request/create-by-type?typeId=9&direction=0');
        $I->seeInTitle("Новая заявка на Добавление параметров/значений (Определяется типом задачи)");
        $I->see("Новая заявка на Добавление параметров/значений (Определяется типом задачи)", ['class' => 'global-caption']);

        $I->seeCheckboxIsChecked($I->checkboxInCreatingPage('Ручная загрузка'));
        $I->dontSeeCheckboxIsChecked($I->checkboxInCreatingPage('Пакетная загрузка'));

        $I->assertEquals($I->allCheckboxesNamesInCreatingPage(), [
            ' Пакетная загрузка', ' Ручная загрузка']);
    }

    public function RequestCreating_10_0(FunctionalTester $I)
    {
        $I->amOnPage('/bpm/request/create-by-type?typeId=10&direction=0');
        $I->seeInTitle("Новая заявка на Изменение существующих параметров/значений (Определяется типом задачи)");
        $I->see("Новая заявка на Изменение существующих параметров/значений (Определяется типом задачи)", ['class' => 'global-caption']);

        $I->seeCheckboxIsChecked($I->checkboxInCreatingPage('Ручная загрузка'));
        $I->dontSeeCheckboxIsChecked($I->checkboxInCreatingPage('Пакетная загрузка'));

        $I->assertEquals($I->allCheckboxesNamesInCreatingPage(), [
            ' Пакетная загрузка', ' Ручная загрузка']);
    }

    public function RequestCreating_11_0(FunctionalTester $I)
    {
        $I->amOnPage('/bpm/request/create-by-type?typeId=11&direction=0');
        $I->seeInTitle("Новая заявка на Проектирование структуры (Определяется типом задачи)");
        $I->see("Новая заявка на Проектирование структуры (Определяется типом задачи)", ['class' => 'global-caption']);

        $I->seeCheckboxIsChecked($I->checkboxInCreatingPage('Ручная загрузка'));
        $I->dontSeeCheckboxIsChecked($I->checkboxInCreatingPage('Пакетная загрузка'));

        $I->assertEquals($I->allCheckboxesNamesInCreatingPage(), [
            ' Пакетная загрузка', ' Ручная загрузка']);
    }

    public function RequestCreating_12_1(FunctionalTester $I)
    {
        $I->amOnPage('/bpm/request/create-by-type?typeId=12&direction=1');
        $I->seeInTitle("Новая заявка на Добавление новых СЦ/изменение существующих СЦ (Работа с товарами Розетки)");
        $I->see("Новая заявка на Добавление новых СЦ/изменение существующих СЦ (Работа с товарами Розетки)", ['class' => 'global-caption']);

        $I->seeCheckboxIsChecked($I->checkboxInCreatingPage('Ручная загрузка'));
        $I->dontSeeCheckboxIsChecked($I->checkboxInCreatingPage('Пакетная загрузка'));

        $I->assertEquals($I->allCheckboxesNamesInCreatingPage(), [
            ' Добавление товаров в новую категорию', ' Лоты', ' На основе отзыва клиента на сайте',
            ' Пакетная загрузка', ' Промо-описание', ' Ручная загрузка',
            ' С видео', ' С размерной сеткой', ' С тегами к товарам',
            ' С фотосъемкой', ' Уценка', ' Уценка 2']);
    }

    public function RequestCreating_13_0(FunctionalTester $I)
    {
        $I->amOnPage('/bpm/request/create-by-type?typeId=13&direction=0');
        $I->seeInTitle("Новая заявка на Добавление/изменение видео (Определяется типом задачи)");
        $I->see("Новая заявка на Добавление/изменение видео (Определяется типом задачи)", ['class' => 'global-caption']);

        $I->seeCheckboxIsChecked($I->checkboxInCreatingPage('Ручная загрузка'));
        $I->dontSeeCheckboxIsChecked($I->checkboxInCreatingPage('Пакетная загрузка'));

        $I->assertEquals($I->allCheckboxesNamesInCreatingPage(), [
            ' Пакетная загрузка', ' Ручная загрузка']);
    }

    public function RequestCreating_14_0(FunctionalTester $I)
    {
        $I->amOnPage('/bpm/request/create-by-type?typeId=14&direction=0');
        $I->seeInTitle("Новая заявка на Добавление/изменение размерной сетки (Определяется типом задачи)");
        $I->see("Новая заявка на Добавление/изменение размерной сетки (Определяется типом задачи)", ['class' => 'global-caption']);

        $I->seeCheckboxIsChecked($I->checkboxInCreatingPage('Ручная загрузка'));
        $I->dontSeeCheckboxIsChecked($I->checkboxInCreatingPage('Пакетная загрузка'));

        $I->assertEquals($I->allCheckboxesNamesInCreatingPage(), [
            ' Пакетная загрузка', ' Ручная загрузка']);
    }

    public function RequestCreating_15_0(FunctionalTester $I)
    {
        $I->amOnPage('/bpm/request/create-by-type?typeId=15&direction=0');
        $I->seeInTitle("Новая заявка на Добавление/изменение тегов (Определяется типом задачи)");
        $I->see("Новая заявка на Добавление/изменение тегов (Определяется типом задачи)", ['class' => 'global-caption']);

        $I->seeCheckboxIsChecked($I->checkboxInCreatingPage('Ручная загрузка'));
        $I->dontSeeCheckboxIsChecked($I->checkboxInCreatingPage('Пакетная загрузка'));

        $I->assertEquals($I->allCheckboxesNamesInCreatingPage(), [
            ' Пакетная загрузка', ' Ручная загрузка']);
    }

}