<?php

class Database
{
    private static $pdo;

    public static function connect()
    {
        if (self::$pdo == null) {
            self::$pdo = new PDO(
                "mysql:host=localhost;dbname=gestion_console",
                "root",
                ""
            );
        }

        return self::$pdo;
    }
}