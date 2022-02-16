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
 * @group lisa_acceptance_1
 * @group lisa_acceptance_requests
 * @group RequestStatusesTransfer
 * @group RequestStatusesTransferSingle2
 */
class RequestStatusesTransferSingle2Cest
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
    public function RequestStatusesTransferSingle2(AcceptanceTester $I, Example $data)
    {
        $I->loadDataForTest($data);
        $provider_data = $data['provider_data'];

        $I->amOnPage('/lisa/#/request/view/1');
        $I->reloadPage();

        //перевод 7->6
        $I->retryClick(RequestTable::transferButton('В работу'));
        $I->waitAndCantSeeVisualChanges(__FUNCTION__ . '_1', 2);
        $I->checkTablesInDB($provider_data['db_1']);

        //ошибка при переводе 6->9 с пустыми полями и комментарием
        $I->clickAndWait(RequestTable::transferButton('Выполнена'));
        $I->pressKey("//div[@role='document']", WebDriverKeys::PAGE_DOWN);
        $I->click(RequestView::POPUP_COMPLETED);
        $I->waitAndCantSeeVisualChanges(__FUNCTION__ . '_2', 2);

        //ошибка при переводе 6->9 с пустыми полями, но заполненным комментарием
        $I->pressKey("//div[@role='document']", WebDriverKeys::PAGE_UP);
        $I->pressKey("//div[@role='document']", WebDriverKeys::PAGE_UP);
        $I->pressKey(RequestView::POPUP_RESULT_COMMENT, 'https://zabbix3.local/latest.php?group=251&host=12686&host=16666&host=16728&host=17592&host=17607&host=17714&host=17720&host=18537&host=19198&application=Memory');
        $I->moveMouseOver("//div[@role='document']");
        $I->pressKey("//div[@role='document']//textarea", WebDriverKeys::PAGE_DOWN);
        $I->pressKey("//div[@role='document']//textarea", WebDriverKeys::PAGE_DOWN);
        $I->click(RequestView::POPUP_COMPLETED);
        $I->waitAndCantSeeVisualChanges([__FUNCTION__ . '_3_1', __FUNCTION__ . '_3_2'], 2);  //иногда не прокручивается до конца
        $I->checkTablesInDB($provider_data['db_1']);

        //проставление обязательных полей результатов задачи и перевод 6->9
        $I->pressKey(RequestView::numberFieldInResultPopUp('Количество добавленных товаров'), 10);
        $I->pressKey(RequestView::numberFieldInResultPopUp('Общее количество обработанных фото'), 9);
        $I->pressKey(RequestView::numberFieldInResultPopUp('Среднее количество фото в товаре'), 8);
        $I->click(RequestView::listFieldInResultPopUp('Наличие характеристик к товарам'));
        $I->click(RequestView::valueFromListFieldInResultPopUp(1, 'Не предоставлены продактом. Выполнен поиск.'));
        $I->click(RequestView::listFieldInResultPopUp('Наличие описаний к товарам'));
        $I->click(RequestView::valueFromListFieldInResultPopUp(2, 'Предоставлены продактом'));
        $I->click(RequestView::listFieldInResultPopUp('Наличие фото к товарам'));
        $I->click(RequestView::valueFromListFieldInResultPopUp(3, 'Предоставлены продактом частично. Без дополнительного поиска.'));
        $I->click(RequestView::listFieldInResultPopUp('Язык информации'));
        $I->click(RequestView::valueFromListFieldInResultPopUp(4, 'Украинский'));
        $I->click(RequestView::POPUP_COMPLETED);
        $I->waitAndCantSeeVisualChanges(__FUNCTION__ . '_4', 2);
        $I->checkTablesInDB($provider_data['db_2']);

        //ошибка при переводе 9->11 с пустым уровнем сложности
        $I->click(RequestTable::transferButton('Закрыть'));
        $I->waitAndCantSeeVisualChanges(__FUNCTION__ . '_5', 2);
        $I->checkTablesInDB($provider_data['db_2']);

        //изменение Уровня сложности, Количества в работу и чекбокса
        $I->click("//div[@id='head-section']//label[text()='Уровень сложности задачи']/following-sibling::div");
        $I->click(RequestView::valueFromListFieldInResultPopUp(1, 5));
        $I->pressKey(RequestView::AMOUNT_TO_WORK, WebDriverKeys::BACKSPACE, WebDriverKeys::BACKSPACE, 5);
        $I->click(RequestView::checkbox('Виза супервайзера'));
        $I->waitAndCantSeeVisualChanges(__FUNCTION__ . '_6', 2);

        //перевод 9->11
        $I->click(RequestTable::transferButton('Закрыть'));
        $I->waitAndCantSeeVisualChanges(__FUNCTION__ . '_7', 2);
        $I->checkTablesInDB($provider_data['db_3']);
    }
}
