<?php

namespace lisa\Page\Functional;

use lisa\FunctionalTester;

class Dashboard extends FunctionalTester
{
    public function amOnDashboardCommon($url = '')
    {
        $I = $this;
        $I->amOnPage("/bpm/dashboard/common" . $url);
    }

    public function amOnDashboardDetail($url = '')
    {
        $I = $this;
        $I->amOnPage("/bpm/dashboard/detail" . $url);
    }

}