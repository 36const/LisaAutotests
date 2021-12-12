<?php

namespace lisa;

use Codeception\Example;
use Codeception\Module\TestHelper;
use Facebook\WebDriver\WebDriverKeys;
use lisa\Page\Requests\RequestTable;
use lisa\Page\Requests\RequestView;

/**
 * @group lisa
 * @group lisa_acceptance
 * @group lisa_acceptance_requests
 * @group MassEdit
 */
class MassEditCest
{
    protected function pageProvider(): array
    {
        return TestHelper::prepareDataprovider(require 'data.php', '');
    }

    /**
     * @param AcceptanceTester $I
     * @param Example $data
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @dataProvider pageProvider
     */
    public function MassEdit(AcceptanceTester $I, Example $data)
    {
        $I->loadDataForTest($data);
        $provider_data = $data['provider_data'];

        $I->amOnPage('/lisa/#/request/list/all');

        //попробовать сохранить без выделения заявок
        $I->click(RequestTable::transferButton('Пакетное редактирование'));
        $I->waitAndCantSeeVisualChanges(__FUNCTION__ . 1);
        $I->click(RequestView::listFieldInResultPopUp('Уровень сложности задачи'));
        $I->click(RequestView::valueFromListFieldInResultPopUp(1, '3'));
        $I->click(RequestTable::transferPopUp('Сохранить'));
        $I->waitAndCantSeeVisualChanges(__FUNCTION__ . 2);
        $I->checkTablesInDB($provider_data['db_1']);

        //закрыть модалку, выделить все заявки, снять выделение у одной и открыть модалку снова
        $I->pressKey("//div[@role='document']", WebDriverKeys::ESCAPE);
        $I->click('//tr/th[@role="columnheader"][1]');
        $I->click('//tr/td[@class="text-start"]//span');
        $I->click(RequestTable::transferButton('Пакетное редактирование'));
        $I->waitAndCantSeeVisualChanges(__FUNCTION__ . 3);

        //заполнить все поля модалки
        $I->click(RequestView::listFieldInResultPopUp('Вид структуры'));
        $I->click(RequestView::valueFromListFieldInResultPopUp(2,
            'Существующие категории промежуточных уровней/автопорталы + перенос информации'));
        $I->click(RequestView::listFieldInResultPopUp('Сложность структуры'));
        $I->click(RequestView::valueFromListFieldInResultPopUp(3,
            'Сложные (физические + функциональные + технологические характеристики) несколько видов товара'));
        $I->click(RequestView::listFieldInResultPopUp('Сложность группировки в заявках'));
        $I->click(RequestView::valueFromListFieldInResultPopUp(4,
            'Очевидные товары для группировки + Наличие товаров без необходимых варьируемых параметров (больше 3-х категорий)'));
        $I->click(RequestView::listFieldInResultPopUp('Виза супервайзера'));
        $I->click(RequestView::valueFromListFieldInResultPopUp(5, 'Нет'));
        $I->click(RequestView::listFieldInResultPopUp('Укр. поля'));
        $I->click(RequestView::valueFromListFieldInResultPopUp(6, 'Да'));
        $I->click(RequestView::listFieldInResultPopUp('Отчетный период КМ'));
        $I->click(RequestView::valueFromListFieldInResultPopUp(7,
            date('Y-m-01') . ' - ' . date('Y-m-d')));
        $I->click(RequestView::listFieldInResultPopUp('Отчетный период СВ'));
        $I->click(RequestView::valueFromListFieldInResultPopUp(8,
            date('Y-m-01', strtotime('-1 month')) . ' - ' . date('Y-m-d', strtotime('last day of previous month'))));
        $I->click(RequestView::valueFromListFieldInResultPopUp(8,
            date('Y-m-01') . ' - ' . date('Y-m-d')));

        //очистить несколько полей модалки
        $I->click(RequestView::listFieldInResultPopUp('Уровень сложности задачи') . '//button');
        $I->click(RequestView::listFieldInResultPopUp('Виза супервайзера') . '//button');
        $I->click(RequestView::listFieldInResultPopUp('Отчетный период КМ') . '//button');
        $I->click("//div[@role='document']//label[text()='Пакетная загрузка']/preceding-sibling::div");
        $I->click("//div[@role='document']//label[text()='Не менять']/preceding-sibling::div");
        $I->waitAndCantSeeVisualChanges(__FUNCTION__ . 4);

        //сохранить изменения
        $I->click(RequestView::POPUP_SAVE);
        $I->waitAndCantSeeVisualChanges(__FUNCTION__ . 5, 2);
        $I->checkTablesInDB($provider_data['db_2']);
    }
}