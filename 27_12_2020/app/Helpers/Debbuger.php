<?php


namespace App\Helpers;


class Debbuger
{
    public static function debug()
    {
        echo "<pre>";
        print_r($var);
        echo "</pre>";
    }
}