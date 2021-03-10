<?php

namespace lisa;

use Codeception\Example;
use Codeception\Module\TestHelper;
use lisa\Page\Requests\RequestCreate;

/**
 * @group lisa
 * @group lisa_functional
 * @group lisa_functional_requests
 * @group GETChangeType
 */
class GETChangeTypeCest
{
    protected function pageProvider(): array
    {
        return TestHelper::prepareDataprovider(require 'data.php', '');
    }

    /**
     * @param FunctionalTester $I
     * @param Example $data
     * @param RequestCreate $create
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @dataProvider pageProvider
     */
    public function GETChangeType(FunctionalTester $I, Example $data, RequestCreate $create)
    {
        $I->loadDataForTest($data);
        $setting = $data['setting'];
        $providerData = $data['provider_data'];

        $create->amOnRequestChangeType($setting['type'], $setting['direction'], 1);

        $I->canSeeInTitle($setting['description']);
        $I->canSee($setting['description'], ['class' => 'global-caption']);

        $I->assertCount(count($I->grabMultiple(RequestCreate::$allCheckboxes)), $providerData['pageObjects']['canSee']['Чекбоксы']);

        $I->checkObjectsOnPage($providerData['pageObjects']);
    }
}
