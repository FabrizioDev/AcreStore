<?php

class DB
{
    private static $connection;

    public static function connection()
    {
        if (!isset(self::$connection)) {
            self::$connection = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASS, [
                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES '.DB_CODE
            ]);
            self::$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            self::$connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        }

        return self::$connection;
    }
}