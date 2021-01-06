<?php

namespace lisa;

use Codeception\Example;
use Codeception\Module\TestHelper;

/**
 * @group lisa
 * @group lisa_functional
 * @group lisa_functional_users
 * @group GETStatusPermissions
 */
class GETStatusPermissionsCest
{
    /**@return array*/
    protected function pageProvider()
    {
        return TestHelper::prepareDataprovider(require 'data.php', '');
    }

    /**
     * @param FunctionalTester $I
     * @param Example $data
     * @throws \GuzzleHttp\Exception\GuzzleException
     *
     * @dataProvider pageProvider
     *
     */
    public function GETStatusPermissions(FunctionalTester $I, Example $data)
    {
        $I->loadDataForTest($data, 'oneUserWithoutPermissionsTable');
        $providerData = $data['provider_data'];

        $I->amOnPage($providerData['url']);
        $I->canSeeResponseCodeIs(200);
        $I->checkObjectsOnPage($providerData['tablePageObjects']);
        $I->canSeeNumberOfElements(
            "//div[@class='buttons-background']/button",
            count($providerData['tablePageObjects']['canSee'][0]) + 2
        );

        $I->sendAjaxGetRequest('/bpm/request/get-context-menu?requestId=1');
        $I->checkAjaxResponse($providerData['ajaxResponse']);

        $I->amOnPage('/bpm/request/view?id=1&forCrossCheck=');
        $I->checkObjectsOnPage($providerData['requestPageObjects']);
        $I->canSeeNumberOfElements(
            "//div[@class='buttons-background']/div/div/button | //div[@class='buttons-background']/div/div/a",
            count($providerData['requestPageObjects']['canSee'][0])
        );

        if (isset($providerData['toCorrectionPageObjects'])) {
            $I->amOnPage('/bpm/request/to-correction?id=1');
            $I->checkObjectsOnPage($providerData['toCorrectionPageObjects']);
        }

        if (isset($providerData['correctionPageObjects'])) {
            $I->amOnPage('/bpm/request/correction?id=1');
            $I->checkObjectsOnPage($providerData['correctionPageObjects']);
        }
    }
}
