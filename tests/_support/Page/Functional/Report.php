<?php

namespace lisa\Page\Functional;

use lisa\FunctionalTester;

class Report extends FunctionalTester
{
    public function amOnReportView(int $id)
    {
        $I = $this;
        $I->amOnPage("/bpm/report/view?id=$id");
    }

    public function amOnReportUpdate(int $id)
    {
        $I = $this;
        $I->amOnPage("/bpm/report/update?id=$id");
    }


}