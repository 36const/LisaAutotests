<?php

namespace lisa\Page\Functional;

use lisa\FunctionalTester;

class Request extends FunctionalTester
{
    public static $tabs =
        ['index', 'new', 'in-check', 'require-changes', 'declined', 'wait-work',
            'in-work', 'on-hold', 'completed', '', '', 'closed', 'observable', 'cross-check'];

    public static function onTab($tab)
    {
        return "/bpm/request/$tab";
    }

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
        return "//ul[@id='w2']//span[@class='tab-counter' and @request-status='$tabs']";
    }

    public static function tabSummary()
    {
        return "//div[@class='summary']";
    }

}