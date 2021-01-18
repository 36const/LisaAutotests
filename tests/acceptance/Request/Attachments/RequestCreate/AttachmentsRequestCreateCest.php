<?php

namespace lisa;

use Codeception\Example;
use lisa\Page\Other\SearchField;
use lisa\Page\Requests\RequestCreate;
use lisa\Page\Requests\RequestView;
use Codeception\Module\TestHelper;

/**
 * @group lisa
 * @group lisa_acceptance
 * @group lisa_acceptance_requests
 * @group AttachmentsRequest
 * @group AttachmentsRequestCreate
 */
class AttachmentsRequestCreateCest
{
    /**@return array*/
    protected function pageProvider()
    {
        return TestHelper::prepareDataprovider(require 'data.php', '');
    }

    /**
     * @param AcceptanceTester $I
     * @param Example $data
     * @param RequestView $view
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @dataProvider pageProvider
     */
    public function AttachmentsRequestCreate(AcceptanceTester $I, Example $data, RequestView $view)
    {
        $I->loadDataForTest($data, 'allUsers');
        $provider_data = $data['provider_data'];

        $I->amOnPage('bpm/request/create-by-type?typeId=1&direction=2');

        //заполняем все обязательные поля
        $I->pressKey(RequestCreate::$subject, '!', '"', '№', ';', '%', ':', '?', '*', '(', ')');
        $I->pressKey(RequestCreate::$description, '!', '"', '№', ';', '%', ':', '?', '*', '(', ')');
        $I->click(RequestCreate::$seller . '/../span');
        $I->click(SearchField::$search);
        $I->pressKey(SearchField::$search, 'М', 'а');
        $I->click(SearchField::searchResult('Маркетплейс (общий)'));
        $I->pressKey(RequestCreate::$amount, '9', '9', '9', '9', '9', '9', '9', '9', '9');
        $I->scrollTo(RequestCreate::$amount);

        //добавляем первый, правильный файл
        $I->attachFile('//input[@id="request-uploadedfiles"]', "Attachments/~!@#$%^&*()_+`-=][';.|}{\":?><.doc");
        $I->waitForElement(RequestView::downloadedFile(0));
        $I->cantSeeElement(RequestView::downloadedFile(1));
        $I->cantSeeElement('//div[@class="file-preview"]//div[@class="kv-fileinput-error file-error-message"]');

        //добавляем второй файл с неподходящим расширением
        $I->attachFile('//input[@id="request-uploadedfiles"]', 'Attachments/255exeexeexeexeexeexeexeexeexeexeexeexeexeexeexeexeexeexeexeexeexeexeexeexeexeexeexeexeexeexeexeexeexeexeexeexeexeexeexeexeexeexeexeexeexeexeexeexeexeexeexeexeexeexeexeexeexeexeexeexeexeexee.exe');
        $I->waitForElement('//div[@class="file-preview"]//div[@class="kv-fileinput-error file-error-message"]');
        $I->waitForElement(RequestView::downloadedFile(0));
        $I->cantSeeElement(RequestView::downloadedFile(1));
        $I->cantSeeElement(RequestView::downloadedFile(2));

        //удаляем второй файл
        $I->click('//div[contains(@class, "file-preview-error")]//button[@title="Удалить файл"]');
        $I->waitForElement(RequestView::downloadedFile(0));
        $I->cantSeeElement(RequestView::downloadedFile(1));

        //создаём заявку
        $I->scrollTo(RequestCreate::$createButtonForm, null, 100);
        $I->wait(1);    //без ожидания иногда не нажимает на кнопку "Сохранить"
        $I->click(RequestCreate::$createButtonForm);
        $I->waitForElement('//div[contains(@class, "alert-success")]');
        $I->canSee('Ваша заявка успешно создана.');
        $I->checkTablesInDB($provider_data['db_1']);
        $I->checkRabbitMQ($provider_data['RabbitMQ_1']);

        //заходим в заявку
        $view->amOnView(1);
        $I->scrollTo('//input[@name="RequestField[3]"]');
        $I->canSeeElement(RequestView::$attachedFiles);
        $I->canSeeNumberOfElements(RequestView::$savedFileTableRow, 2);
        $I->canSeeElement(RequestView::$savedFileTableRow . '//a[contains(@href, "/bpm/request/download-file")]');
        $I->canSeeElement(RequestView::$savedFileTableRow . '//a[@href="#" and @title="Удалить файл"]');
        $I->canSeeElement(RequestView::$savedFileTableRow . '/div[contains(text(), "' . date('Y-m-d') . '")]');
        $I->canSeeElement(RequestView::$savedFileTableRow . '/div[contains(text(), "Константин Куцан")]');

        //создаём и скачиваем архив
        $I->click(RequestView::$downloadArchiveButton);
        $I->waitForElement(RequestView::$downloadArchiveButton . '[text()=" Архив генерируется"]');
        $I->runShellCommand('./yii bpm/request/make-archive', false);
        $I->canSeeResultCodeIs(1);
        $I->canSeeInShellOutput(' успешно сгенерирован.');
        $I->waitForElement(RequestView::$downloadArchiveButton . '[text()=" Скачать архив"]');

        //удаляем первый файл
        $I->click(RequestView::$savedFileTableRow . '//a[@href="#" and @title="Удалить файл"]');
        $I->canSeeElement(RequestView::$savedFileTableRow . '/div[contains(text(), "Файл будет удален при сохранении изменений в заявке")]');

        //сохраняем заявку
        $I->click(RequestView::$saveButton);
        $I->reloadPage();
        $I->cantSeeElement(RequestView::$attachedFiles);
        $I->checkTablesInDB($provider_data['db_2']);
        $I->checkRabbitMQ($provider_data['RabbitMQ_2']);
    }
}
