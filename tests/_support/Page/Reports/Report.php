<?php

namespace lisa\Page\Reports;

class Report
{
    public static function patternsList(int $size, string $name)
    {
        return "//select[@multiple='multiple' and @id='report-detail_ids' and @size='$size']//option[text()='$name']";
    }
}