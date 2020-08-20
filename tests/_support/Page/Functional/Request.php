<?php

namespace lisa\Page\Functional;

use lisa\FunctionalTester;

class Request extends FunctionalTester
{
    public static function onTab($tabName)
    {
        return "/bpm/request/$tabName";
    }

    public static $tabs =
        ['index', 'new', 'in-check', 'require-changes', 'declined', 'wait-work',
            'in-work', 'on-hold', 'completed', '', '', 'closed', 'observable', 'cross-check'];

    public static function globalPath()
    {
        return "//div[@class='global-breadcrumbs']//li[@class='active']";
    }
    
    public static function globalCaption()
    {
        return "//h1[@class='global-caption']";
    }

    public static function tabCounter($tabs)
    {
        return "//span[@class='tab-counter' and @request-status='$tabs']";
    }

}