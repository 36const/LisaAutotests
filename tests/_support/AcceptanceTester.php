<?php

namespace lisa;

use Codeception\Example;
use Codeception\Lib\Actor\Shared\Retry;
use Facebook\WebDriver\WebDriverKeys;
use lisa\Page\Other\SearchField;
use lisa\Page\Requests\RequestTable;
use yii\helpers\Json;
use yii\httpclient\Client;

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
        $I->truncateTablesInDatabase(['lisa_fixtures' => ['exceptions' => [], 'common_log' => []]]);

        $I->wantTo($data['setting']['description']);
        $I->authorize();
        $I->retry(3);
    }

    private function authorize()
    {
        $I = $this;

        if ($I->loadSessionSnapshot('login')) {
            return;
        }
        
        $I->amOnPage('/');
        $I->seeResponseCodeIs(200 || 201);
        $I->fillField('LoginForm[username]', 'kutsan.k');
        $I->fillField('LoginForm[password]', '123qweASD!');
        $I->checkOption('LoginForm[isBasicAuth]');
        $I->click('login-button');
        $I->wait(1);

        $I->saveSessionSnapshot('login');
    }
    
    public static function manifest(): string
    {
        $request = new Client();
        $response = $request->createRequest()
            ->setUrl(getenv('LISA_API_URL') . 'manifest/view?static=1')
            ->send();

        return Json::encode($response->data);
    }

    public function clickAndWait(string $xpath, float $waitTime = 0.5)
    {
        $I = $this;

        $I->retryClick($xpath);
        $I->wait($waitTime);
    }

    public function waitAndCantSeeVisualChanges(
        $fileID,
        int $waitTime = 1,
        float $deviation = 0.001,
        array $exclude = [],
        string $elementID = '.content-wrapper'
    )
    {
        $I = $this;
        
        $defaultExclude = ['.user-image', '.main-header', '#yii-debug-toolbar'];

        $I->wait($waitTime);

        if (!is_array($fileID)) {
            $I->cantSeeVisualChanges($fileID, $elementID, array_merge($defaultExclude, $exclude), [], $deviation);
        } else {
            foreach ($fileID as $id) {
                $result[] = $I->tryToDontSeeVisualChanges($id, $elementID, array_merge($defaultExclude, $exclude), [], $deviation);
            }
            in_array(true, $result)
                ? $I->assertTrue(true)
                : $I->assertTrue(false, 'Ни один скриншот не совпал');
        }
    }

    public function checkObjectsOnPage($pageObjects)
    {
        $I = $this;

        if (isset($pageObjects['canSee'])) {
            foreach ($pageObjects['canSee'] as $object) {
                $I->waitForElementVisible($object);
            }
        }

        if (isset($pageObjects['cantSee'])) {
            foreach ($pageObjects['cantSee'] as $object) {
                $I->waitForElementNotVisible($object);
            }
        }
    }

    public function TableColumnsFiltersList($setting, $provider_data)
    {
        $I = $this;

        $I->amOnPage('/lisa/#/request/list/all');

        //открыть список значений в фильтре колонки
        $I->retryClick(RequestTable::columnSearchField($setting['column']));
        $I->checkObjectsOnPage($provider_data['columnValueList']);
        //$I->waitAndCantSeeVisualChanges(__FUNCTION__ . $setting['case'] . 1);

        //выбрать несколько значений из выпадающего списка
        foreach ($provider_data['columnValueListToSelect'] as $item) {
            $I->clickAndWait($item, 1);
            if ($I->tryToDontSeeElement($item . '/../parent::div[@aria-selected="true"]'))
                $I->clickAndWait($item, 1);
        }

        if ($I->tryToSeeElement(RequestTable::HIDDEN_TABLE_SUMMARY))
            $I->moveMouseOver(RequestTable::HIDDEN_TABLE_SUMMARY);

        $I->waitForElement(RequestTable::tableSummary($setting['tableSummary_1']));
        $I->checkObjectsOnPage($provider_data['searchValueList_1']);
        $I->waitAndCantSeeVisualChanges(__FUNCTION__ . $setting['case'] . 2, 1, 0.1, ['div.lisa-request-view > div > button']);

        //удалить одно из выбранных значений колонки
        $I->click(RequestTable::searchValueRemove($setting['column'], $setting['value'] ?? '(не задано)'));

        $I->waitForElement(RequestTable::tableSummary($setting['tableSummary_2']));
        $I->checkObjectsOnPage($provider_data['searchValueList_2']);
        $I->waitAndCantSeeVisualChanges(__FUNCTION__ . $setting['case'] . 3, 1, 0.1, ['div.lisa-request-view > div > button']);

        //удалить все оставшиеся значения колонки (очистить фильтр колонки)
        $I->click(RequestTable::searchClearButton($setting['column']));

        $I->waitForElement(RequestTable::HIDDEN_TABLE_SUMMARY);
        $I->checkObjectsOnPage($provider_data['searchValueList_3']);
        //$I->waitAndCantSeeVisualChanges(__FUNCTION__ . $setting['case'] . 4);
    }

    public function TableColumnsFiltersSearch($setting, $provider_data)
    {
        $I = $this;

        //без данной хрени выдаётся element is not interractible при клике в этих кейсах
        if (in_array($setting['column'], ['supervisor_id', 'cross_check_manager_id']))
            $I->amOnPage('/');

        $I->amOnPage('/lisa/#/request/list/all');

        //открыть результаты поля поиска и ввести текст
        $I->retryClick(RequestTable::columnSearchField($setting['column']));
        $I->pressKey(RequestTable::columnSearchField($setting['column']), $setting['symbols']);
        $I->waitAndCantSeeVisualChanges(__FUNCTION__ . $setting['case'] . 1, 2);

        //кликнуть на один из результатов и проверить применение в таблице
        in_array($setting['column'], ['category_id', 'rz_category_id', 'seller_id'])
            ? $I->retryClick(SearchField::searchResult(substr($setting['value'], 4)))
            : $I->retryClick(SearchField::searchResult(explode(' ', trim($setting['value']))[0]));

        $I->canSeeElement(RequestTable::selectedValueFromSearch($setting['column'], $setting['value']));
        $I->canSeeElement(RequestTable::tableSummary($setting['amount']));
        $I->waitAndCantSeeVisualChanges(__FUNCTION__ . $setting['case'] . 2);

        //очистить фильтр колонки
        $I->click(RequestTable::searchClearButton($setting['column']));

        $I->cantSeeElement(RequestTable::selectedValueFromSearch($setting['column'], $setting['value']));
        $I->canSeeElement(RequestTable::HIDDEN_TABLE_SUMMARY);
        $I->waitAndCantSeeVisualChanges(__FUNCTION__ . $setting['case'] . 3);
    }

}
