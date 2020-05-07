<?php

namespace lisa\Page\Functional;

use lisa\FunctionalTester;

class Filters extends FunctionalTester
{
    public function amOnFilters()
    {
        $I = $this;
        $I->amOnPage("/bpm/filter");
    }

    public function amOnFilterUpdating(int $id)
    {
        $I = $this;
        $I->amOnPage("/bpm/filter/update?id=" . $id);
    }

}