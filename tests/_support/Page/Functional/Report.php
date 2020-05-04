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

    public function amOnReportPeriod()
    {
        $I = $this;
        $I->amOnPage("/bpm/report-period");
    }

    public function amOnReportPeriodUpdate(int $id)
    {
        $I = $this;
        $I->amOnPage("/bpm/report-period/update?id=$id");
    }
}