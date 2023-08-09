<?php

namespace App\Helpers;

class Slugger
{
    public static function slug($text)
    {
        $pattern = '/[^a-zA-Z0-9\-]/';
        $replacement = '-';
        $text = strtolower(trim($text));

        return preg_replace($pattern, $replacement, $text);
    }
}
