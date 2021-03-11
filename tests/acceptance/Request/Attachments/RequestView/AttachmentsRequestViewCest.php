<?php

namespace lisa;

use Codeception\Example;
use lisa\Page\Requests\RequestView;
use Codeception\Module\TestHelper;

/**
 * @group lisa
 * @group lisa_acceptance
 * @group lisa_acceptance_requests
 * @group AttachmentsRequest
 * @group AttachmentsRequestView
 */
class AttachmentsRequestViewCest
{
    protected function pageProvider(): array
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
    public function AttachmentsRequestView(AcceptanceTester $I, Example $data, RequestView $view)
    {
        $I->loadDataForTest($data, 'allUsers');
        $provider_data = $data['provider_data'];
        $I->cleanDir(FunctionalTester::BPM_UPLOADS);

        $view->amOnView(1);
        $I->scrollTo('//input[@name="RequestField[3]"]');

        //добавляем первый, правильный файл
        $I->attachFile('//input[@id="request-uploadedfiles"]', "Attachments/~!@#$%^&*()_+`-=][';.|}{\":?><.doc");
        $I->waitForElement(RequestView::downloadedFile(0));
        $I->cantSeeElement(RequestView::downloadedFile(1));
        $I->cantSeeElement('//div[@class="file-preview"]//div[@class="kv-fileinput-error file-error-message"]');
        $I->canSeeFileFound('*-.doc', FunctionalTester::BPM_UPLOADS);

        //добавляем второй файл с неподходящим расширением
        $I->attachFile('//input[@id="request-uploadedfiles"]', 'Attachments/255exeexeexeexeexeexeexeexeexeexeexeexeexeexeexeexeexeexeexeexeexeexeexeexeexeexeexeexeexeexeexeexeexeexeexeexeexeexeexeexeexeexeexeexeexeexeexeexeexeexeexeexeexeexeexeexeexeexeexeexeexeexee.exe');
        $I->waitForElement('//div[@class="file-preview"]//div[@class="kv-fileinput-error file-error-message"]');
        $I->waitForElement(RequestView::downloadedFile(0));
        $I->cantSeeElement(RequestView::downloadedFile(1));
        $I->cantSeeElement(RequestView::downloadedFile(2));
        $I->canSeeFileFound('*-.doc', FunctionalTester::BPM_UPLOADS);
        $I->cantSeeFileFound('*.exe', FunctionalTester::BPM_UPLOADS);

        //удаляем второй файл
        $I->click('//div[contains(@class, "file-preview-error")]//button[@title="Удалить файл"]');
        $I->waitForElement(RequestView::downloadedFile(0));
        $I->cantSeeElement(RequestView::downloadedFile(1));
        $I->canSeeFileFound('*-.doc', FunctionalTester::BPM_UPLOADS);
        $I->cantSeeFileFound('*.exe', FunctionalTester::BPM_UPLOADS);

        //сохраняем заявку
        $I->wait(1);    //без ожидания иногда не нажимает на кнопку "Сохранить"
        $I->click(RequestView::$saveButton);
        $I->waitForElement(RequestView::$attachedFiles);
        $I->canSeeNumberOfElements(RequestView::$savedFileTableRow, 2);
        $I->canSeeElement(RequestView::$savedFileTableRow . '//a[contains(@href, "/bpm/request/download-file")]');
        $I->canSeeElement(RequestView::$savedFileTableRow . '//a[@href="#" and @title="Удалить файл"]');
        $I->canSeeElement(RequestView::$savedFileTableRow . '/div[contains(text(), "' . date('Y-m-d') . '")]');
        $I->canSeeElement(RequestView::$savedFileTableRow . '/div[contains(text(), "Константин Куцан")]');
        $I->checkTablesInDB($provider_data['db_1']);
        $I->checkRabbitMQ($provider_data['RabbitMQ_1']);
        $I->canSeeFileFound('*-.doc', FunctionalTester::BPM_UPLOADS);

        //создаём и скачиваем архив
        $I->click(RequestView::$downloadArchiveButton);
        $I->waitForElement(RequestView::$downloadArchiveButton . '[text()=" Архив генерируется"]');
        $I->runShellCommand('./yii bpm/request/make-archive', false);
        $I->canSeeResultCodeIs(1);
        $I->canSeeInShellOutput(' успешно сгенерирован.');
        $I->waitForElement(RequestView::$downloadArchiveButton . '[text()=" Скачать архив"]');
        $I->canSeeFileFound('lisa_*.zip', FunctionalTester::BPM_UPLOADS);

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
