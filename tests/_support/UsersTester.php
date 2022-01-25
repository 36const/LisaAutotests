<?php

namespace lisa;

use Codeception\Example;

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
class UsersTester extends GeneralTester
{
    use _generated\UsersTesterActions;

    /**
     * @param Example $data - данные кейса из файла data.php
     * @param string|null $globalFixture - название файла глобальных фикстур, при значении null глобальные фикстуры не используются
     */
    public function loadDataForTest(Example $data, ?string $globalFixture = 'oneUser')
    {
        $I = $this;

        if (isset($globalFixture))
            $I->insertFixtureToDatabase($globalFixture);

        $I->loadFixtureFromDataprovider();
        $I->loadMockFromDataprovider();
        $I->purgeAllQueues();
        $I->truncateTablesInDatabase(['lisa_fixtures' => ['exceptions' => [], 'common_log' => []]]);

        $I->wantTo($data['setting']['description']);
        $I->haveHttpHeader('Content-Type', 'application/json');
    }

    public static function sidebarItem(int $itemNumber, string $itemHref, string $itemName)
    {
        $lisaSidebarBlock = "//section[@class='sidebar']//li//span[text()='Lisa']/../../ul";
        return $lisaSidebarBlock . "/li[$itemNumber]//a[@href='/lisa$itemHref']/span[text()='$itemName']";
    }

    public static function tableMassButtons($status)
    {
        return [
            'all' => [
                'label' => 'Все',
                'dialogs' => [
                    0 => [
                        'component' => 'MassEdit',
                        'currentStatus' => $status,
                        'order' => 0,
                        'title' => 'Пакетное редактирование',
                        'visible' => true,
                    ]
                ]
            ],
            'new' => [
                'label' => 'Новые',
                'visible' => true,
                'dialogs' => [
                    0 => [
                        'component' => 'Confirm',
                        'title' => 'Готова для распределения',
                        'visible' => true,
                        'action' => 'for-check',
                        'icon' => 'mdiMagnify',
                        'order' => 1,
                        'currentStatus' => $status,
                    ],
                    1 => [
                        'component' => 'Reason',
                        'title' => 'На доработку',
                        'visible' => true,
                        'targetStatus' => 3,
                        'action' => 'change-reason',
                        'icon' => 'mdiPencilOutline',
                        'order' => 2,
                        'currentStatus' => $status,
                    ],
                    2 => [
                        'component' => 'Reason',
                        'title' => 'Отменить',
                        'visible' => true,
                        'targetStatus' => 4,
                        'action' => 'change-reason',
                        'icon' => 'mdiCloseThick',
                        'order' => 3,
                        'currentStatus' => $status,
                    ],
                    3 => [
                        'component' => 'Appoint',
                        'title' => 'Назначить исполнителя',
                        'visible' => true,
                        'url' => '/user/managers',
                        'userTeam' => 17,
                        'prompt' => 'Поиск исполнителя...',
                        'action' => 'appoint-manager',
                        'icon' => 'mdiAccountCircle',
                        'order' => 4,
                        'currentStatus' => $status,
                    ],
                    4 => [
                        'component' => 'Appoint',
                        'title' => 'Изменить супервайзера',
                        'visible' => true,
                        'url' => '/user/supervisors',
                        'prompt' => 'Поиск супервизора...',
                        'action' => 'appoint-supervisor',
                        'icon' => 'mdiAccountCowboyHat',
                        'order' => 5,
                        'currentStatus' => $status,
                    ],
                    5 => [
                        'component' => 'MassEdit',
                        'title' => 'Пакетное редактирование',
                        'visible' => true,
                        'order' => 6,
                        'currentStatus' => $status,
                    ],
                ],
            ],
            'in-check' => [
                'label' => 'Готовы для распределения',
                'visible' => true,
                'dialogs' => [
                    0 => [
                        'component' => 'Reason',
                        'title' => 'На доработку',
                        'visible' => true,
                        'targetStatus' => 3,
                        'action' => 'change-reason',
                        'icon' => 'mdiPencilOutline',
                        'order' => 7,
                        'currentStatus' => $status,
                    ],
                    1 => [
                        'component' => 'Reason',
                        'title' => 'Отменить',
                        'visible' => true,
                        'targetStatus' => 4,
                        'action' => 'change-reason',
                        'icon' => 'mdiCloseThick',
                        'order' => 8,
                        'currentStatus' => $status,
                    ],
                    2 => [
                        'component' => 'Appoint',
                        'title' => 'Назначить исполнителя',
                        'visible' => true,
                        'url' => '/user/managers',
                        'userTeam' => 17,
                        'prompt' => 'Поиск исполнителя...',
                        'action' => 'appoint-manager',
                        'icon' => 'mdiAccountCircle',
                        'order' => 9,
                        'currentStatus' => $status,
                    ],
                    3 => [
                        'component' => 'Appoint',
                        'title' => 'Изменить супервайзера',
                        'visible' => true,
                        'url' => '/user/supervisors',
                        'prompt' => 'Поиск супервизора...',
                        'action' => 'appoint-supervisor',
                        'icon' => 'mdiAccountCowboyHat',
                        'order' => 10,
                        'currentStatus' => $status,
                    ],
                    4 => [
                        'component' => 'MassEdit',
                        'title' => 'Пакетное редактирование',
                        'visible' => true,
                        'order' => 11,
                        'currentStatus' => $status,
                    ],
                ],
            ],
            'require-changes' => [
                'label' => 'На доработке',
                'visible' => true,
                'dialogs' => [
                    0 => [
                        'component' => 'Appoint',
                        'title' => 'Изменить супервайзера',
                        'visible' => true,
                        'url' => '/user/supervisors',
                        'prompt' => 'Поиск супервизора...',
                        'action' => 'appoint-supervisor',
                        'icon' => 'mdiAccountCowboyHat',
                        'order' => 12,
                        'currentStatus' => $status,
                    ],
                    1 => [
                        'component' => 'MassEdit',
                        'title' => 'Пакетное редактирование',
                        'visible' => true,
                        'order' => 13,
                        'currentStatus' => $status,
                    ],
                    2 => [
                        'component' => 'Reason',
                        'title' => 'Отменить',
                        'visible' => true,
                        'targetStatus' => 4,
                        'action' => 'change-reason',
                        'icon' => 'mdiCloseThick',
                        'order' => 14,
                        'currentStatus' => $status,
                    ],
                ],
            ],
            'wait-work' => [
                'label' => 'Ожидают взятия в работу',
                'dialogs' => [
                    0 => [
                        'component' => 'Confirm',
                        'title' => 'В работу',
                        'visible' => true,
                        'action' => 'to-work',
                        'icon' => 'mdiCog',
                        'order' => 15,
                        'currentStatus' => $status,
                    ],
                    1 => [
                        'component' => 'Appoint',
                        'title' => 'Изменить супервайзера',
                        'visible' => true,
                        'url' => '/user/supervisors',
                        'prompt' => 'Поиск супервизора...',
                        'action' => 'appoint-supervisor',
                        'icon' => 'mdiAccountCowboyHat',
                        'order' => 16,
                        'currentStatus' => $status,
                    ],
                    2 => [
                        'component' => 'MassEdit',
                        'title' => 'Пакетное редактирование',
                        'visible' => true,
                        'order' => 17,
                        'currentStatus' => $status,
                    ],
                ],
            ],
            'in-work' => [
                'label' => 'В работе',
                'dialogs' => [
                    0 => [
                        'component' => 'Reason',
                        'title' => 'Ожидать',
                        'visible' => true,
                        'targetStatus' => 7,
                        'action' => 'change-reason',
                        'icon' => 'mdiTimerSand',
                        'order' => 18,
                        'currentStatus' => $status,
                    ],
                    1 => [
                        'component' => 'Reason',
                        'title' => 'Отменить',
                        'visible' => true,
                        'targetStatus' => 4,
                        'action' => 'change-reason',
                        'icon' => 'mdiCloseThick',
                        'order' => 19,
                        'currentStatus' => $status,
                    ],
                    2 => [
                        'component' => 'Appoint',
                        'title' => 'Изменить супервайзера',
                        'visible' => true,
                        'url' => '/user/supervisors',
                        'prompt' => 'Поиск супервизора...',
                        'action' => 'appoint-supervisor',
                        'icon' => 'mdiAccountCowboyHat',
                        'order' => 20,
                        'currentStatus' => $status,
                    ],
                    3 => [
                        'component' => 'MassEdit',
                        'title' => 'Пакетное редактирование',
                        'visible' => true,
                        'order' => 21,
                        'currentStatus' => $status,
                    ],
                ],
            ],
            'on-hold' => [
                'label' => 'Ожидают',
                'dialogs' => [
                    0 => [
                        'component' => 'Appoint',
                        'title' => 'Изменить супервайзера',
                        'visible' => true,
                        'url' => '/user/supervisors',
                        'prompt' => 'Поиск супервизора...',
                        'action' => 'appoint-supervisor',
                        'icon' => 'mdiAccountCowboyHat',
                        'order' => 22,
                        'currentStatus' => $status,
                    ],
                    1 => [
                        'component' => 'MassEdit',
                        'title' => 'Пакетное редактирование',
                        'visible' => true,
                        'order' => 23,
                        'currentStatus' => $status,
                    ],
                ],
            ],
            'completed' => [
                'label' => 'Выполнены',
                'dialogs' => [
                    0 => [
                        'component' => 'Appoint',
                        'title' => 'Изменить супервайзера',
                        'visible' => true,
                        'url' => '/user/supervisors',
                        'prompt' => 'Поиск супервизора...',
                        'action' => 'appoint-supervisor',
                        'icon' => 'mdiAccountCowboyHat',
                        'order' => 24,
                        'currentStatus' => $status,
                    ],
                    1 => [
                        'component' => 'MassEdit',
                        'title' => 'Пакетное редактирование',
                        'visible' => true,
                        'order' => 25,
                        'currentStatus' => $status,
                    ],
                ],
            ],
            'declined' => [
                'label' => 'Отменены',
                'dialogs' => [
                    0 => [
                        'component' => 'MassEdit',
                        'title' => 'Пакетное редактирование',
                        'visible' => true,
                        'order' => 26,
                        'currentStatus' => $status,
                    ],
                ],
            ],
            'closed' => [
                'label' => 'Закрыты',
                'dialogs' => [
                    0 => [
                        'component' => 'MassEdit',
                        'title' => 'Пакетное редактирование',
                        'visible' => true,
                        'order' => 27,
                        'currentStatus' => $status,
                    ],
                ],
            ],
            'observable' => [
                'label' => 'Наблюдаемые',
            ],
            'cross-check' => [
                'label' => 'Кросс-чек',
                'visible' => true,
                'dialogs' => [
                    0 => [
                        'component' => 'Appoint',
                        'title' => 'Изменить супервайзера',
                        'visible' => true,
                        'url' => '/user/supervisors',
                        'prompt' => 'Поиск супервизора...',
                        'action' => 'appoint-supervisor',
                        'icon' => 'mdiAccountCowboyHat',
                        'order' => 28,
                        'currentStatus' => $status,
                    ],
                    1 => [
                        'component' => 'Confirm',
                        'title' => 'Взять на Кросс-чек',
                        'action' => 'to-cross-check',
                        'icon' => 'mdiClosedCaptionOutline',
                        'order' => 29,
                        'currentStatus' => $status,
                    ],
                ],
            ],
        ];
    }
}