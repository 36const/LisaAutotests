<?php

namespace lisa;

use Codeception\Example;
use Codeception\Lib\Actor\Shared\Retry;

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
        $I->setAuthorizationCookie();
        $I->retry(3);
    }

    private function setAuthorizationCookie()
    {
        $I = $this;
        $I->amOnPage('/');

//        if (file_exists(__DIR__ . '/_identityCookie.txt')) {
//            $I->setCookie('_identity', file_get_contents(__DIR__ . '/_identityCookie.txt'));
//        } else {
        $I->fillField("LoginForm[username]", "kutsan.k");
        $I->fillField("LoginForm[password]", "123qweASD!");
        $I->checkOption("LoginForm[isBasicAuth]");
        $I->click('login-button');
        $I->wait(1);
//            $I->waitForText("Добро пожаловать", 5);
//            file_put_contents(__DIR__ . '/_identityCookie.txt', $I->grabCookie('_identity'));
//        }

//        $I->setCookie('newTabOpening', 'false');

//        $I->seeCookie('_identity');
//        $I->seeCookie('newTabOpening');
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

    public function waitAndCantSeeVisualChanges(string $fileID, int $waitTime = 1, array $exclude = ['.user-image', '#yii-debug-toolbar'], string $elementID = '.content-wrapper')
    {
        $I = $this;

        $I->wait($waitTime);
        $I->cantSeeVisualChanges($fileID, $elementID, $exclude);
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

    public function checkCheckboxesOnPage($pageObjects)
    {
        $I = $this;

        if (isset($pageObjects['canSee'])) {
            foreach ($pageObjects['canSee'] as $checkbox) {
                $I->canSeeCheckboxIsChecked($checkbox);
            }
        }

        if (isset($pageObjects['cantSee'])) {
            foreach ($pageObjects['cantSee'] as $checkbox) {
                $I->cantSeeCheckboxIsChecked($checkbox);
            }
        }
    }

}
