<?php

namespace lisa\Page\Reports;

class Report
{
    public static function patternsList(int $size, string $name): string
    {
        return "//select[@multiple='multiple' and @id='report-detail_ids' and @size='$size']//option[text()='$name']";
    }
}