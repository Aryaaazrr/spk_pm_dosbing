<?php

namespace App\Helpers;

class FormatHelper
{
    public static function formatPersentase($value)
    {
        return (float) str_replace(',', '.', str_replace('%', '', $value));
    }
}