<?php


namespace App\core;


use mysqli;

class DB
{
    private static $connection = null;

    public static function getConnection()
    {
        if(!self::$connection){
            self::$connection = new mysqli('localhost', 'homestead', 'secret', 'test_blog');
        }
        mysqli_query(self::$connection, 'SET NAMES "utf8"');

        return self::$connection;
    }

}