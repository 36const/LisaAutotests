<?php

namespace lisa;

use Codeception\Example;
use Codeception\Lib\Actor\Shared\Retry;
use Facebook\WebDriver\WebDriverKeys;

/**
 * Inherited Methods
 * @method void wantToTest($text)
 * @method void wantTo($text)
 * @method void execute($callable)
 * @method void expectTo($prediction)
 * @method void expect($prediction)
 * @method void amGoingTo($argumentation)
 * @method void am($role)
 * @method void lookForwardTo($achieveValue)
 * @method void comment($description)
 * @method void pause()
 *
 * @SuppressWarnings(PHPMD)
 */
class AcceptanceTester extends GeneralTester
{
    use _generated\AcceptanceTesterActions;
    use Retry;

    /**
     * @param Example $data - данные кейса из файла data.php
     */
    public function loadDataForTest(Example $data)
    {
        $I = $this;

        $I->loadFixtureFromDataprovider();
        $I->loadMockFromDataprovider();
        $I->purgeAllQueues();
        $I->truncateTablesInDatabase(['lisa_fixtures' => ['exceptions' => []]]);

        $I->wantTo($data['setting']['description']);
        $I->authorize();
        $I->retry(3);
    }

    private function authorize()
    {
        $I = $this;

        if ($I->loadSessionSnapshot('login')) {
            $I->pressKey('//body', WebDriverKeys::PAGE_UP);
            return;
        }
        
        $I->amOnPage('/');
        $I->fillField("LoginForm[username]", "kutsan.k");
        $I->fillField("LoginForm[password]", "123qweASD!");
        $I->checkOption("LoginForm[isBasicAuth]");
        $I->click('login-button');
        $I->wait(1);

        $I->saveSessionSnapshot('login');
    }

    public function setRequestPerPageCookie(int $amount)
    {
        $I = $this;

        if (file_exists(__DIR__ . '/_requestsPerPage.txt')) {
            $I->setCookie('requestsPerPage', file_get_contents(__DIR__ . '/_requestsPerPage.txt'));
        } else {
            $I->resetCookie('requestsPerPage');
            $I->amOnPage('/request/list/all');
            $I->scrollTo('//div[@id="toolbar"]//ul[@class="dropdown-menu"]');
            $I->click('//div[@id="toolbar"]//a[@id="drop5"]');
            $I->click('//div[@id="toolbar"]//ul[@class="dropdown-menu"]//li//a[text()="' . $amount . '"]');
            file_put_contents(__DIR__ . '/_requestsPerPage.txt', $I->grabCookie('requestsPerPage'));
        }

        $I->seeCookie('requestsPerPage');
    }

    public function clickAndWait(string $xpath, int $waitTime = 1)
    {
        $I = $this;

        $I->click($xpath);
        $I->wait($waitTime);
    }

    public function waitAndCantSeeVisualChanges(string $fileID, int $waitTime = 1, array $exclude = [], string $elementID = '.content-wrapper')
    {
        $I = $this;
        
        $defaultExclude = ['.user-image', '#yii-debug-toolbar'];

        $I->wait($waitTime);
        $I->cantSeeVisualChanges($fileID, $elementID, array_merge($defaultExclude, $exclude), []);
    }

    public function checkObjectsOnPage($pageObjects)
    {
        $I = $this;

        if (isset($pageObjects['canSee'])) {
            foreach ($pageObjects['canSee'] as $object) {
                $I->canSeeElement($object);
            }
        }

        if (isset($pageObjects['cantSee'])) {
            foreach ($pageObjects['cantSee'] as $object) {
                $I->cantSeeElement($object);
            }
        }
    }

}
