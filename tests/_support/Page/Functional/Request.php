<?php

namespace lisa\Page\Functional;

use lisa\FunctionalTester;

class Request extends FunctionalTester
{
    public static $tabs =
        ['index', 'new', 'in-check', 'require-changes', 'declined', 'wait-work',
            'in-work', 'on-hold', 'completed', '', '', 'closed', 'observable', 'cross-check'];

    public function table($filter)
    {
        $I = $this;
        $I->amOnPage("/bpm/request/$filter");
    }

    public static function globalPath()
    {
        return "//div[@class='global-breadcrumbs']//li[@class='active']";
    }
    
    public static function globalCaption()
    {
        return "//h1[@class='global-caption']";
    }

    public static function tabSummary()
    {
        return "//div[@class='summary']/b[2]";
    }

    public static function emptyTable()
    {
        return '//table[@class="kv-grid-table table table-bordered table-striped"]' .
                '/tbody//div[@class="empty" and text()="Ничего не найдено."]';
    }

    public static function requestInTable($lineNumber, $columnNumber, $text)
    {
        return '//table[@class="kv-grid-table table table-bordered table-striped"]' .
                '/tbody/tr[' . $lineNumber . ']/td[@data-col-seq="' . $columnNumber . '"]//*[text()=' . $text . ']';
    }

}