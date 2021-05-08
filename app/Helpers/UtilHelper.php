<?php

namespace App\Helpers;

class UtilHelper
{

    public static function fixFloat($float, $precision = 2)
    {
        $float = (float)$float;
        $converted = number_format($float, $precision, ".", "");
        return (float)$converted;
    }    

}
