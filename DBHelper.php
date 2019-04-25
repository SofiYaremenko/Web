<?php

class DBHelper
{
    private static $servername = "localhost";
    private static $username = "root";
    private static $password = "";
    private static $dbname = "vos_resurs";
    private static $connection = null;

    static function connect()
    {
        self::$connection = new PDO("mysql:host=" . self::$servername . ";" . "dbname=" . self::$dbname, self::$username, self::$password);
        self::$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return self::$connection;
    }

    public static function query($queryName)
    {
        $result = self::$connection->query($queryName);
        return $result;
    }

    public static function disconnect()
    {
        self::$connection = null;
    }
}