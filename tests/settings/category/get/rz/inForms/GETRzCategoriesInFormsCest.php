<?php

namespace lisa;

use yii\helpers\Json;
use Codeception\Example;
use Codeception\Module\TestHelper;

/**
 * @group lisa
 * @group lisa_api
 * @group lisa_api_settings
 * @group lisa_api_category
 * @group GETRzCategoriesInForms
 */
class GETRzCategoriesInFormsCest
{
    protected function pageProvider(): array
    {
        return TestHelper::prepareDataprovider(require 'data.php', '');
    }

    /**
     * @param SettingsTester $I
     * @param Example $data
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @dataProvider pageProvider
     */
    public function GETRzCategoriesInForms(SettingsTester $I, Example $data)
    {
        $I->loadDataForTest($data);
        $providerData = $data['provider_data'];

        $I->sendGET('/rozetka-category/' . $providerData['urlPart'], $providerData['requestParameters'] ?? []);

        $I->seeResponseCodeIs(200);
        $I->canSeeResponseEquals(Json::encode($providerData['responseBody']));
    }
}
