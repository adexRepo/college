<?php

namespace Connection;
use PDOException;

class Koneksi
{
    private static ?\PDO $connection = null;
    public static function getConnection():\PDO
    {
        $database = [
            'driver' => 'mysql',
            'host' => 'localhost',
            'port' => '3306',
            'dbname' => 'db_uap1163',
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8'
        ];

        $urlProd = $database['driver']. ':host='.$database['host'].':'.$database['port'].';dbname='.$database['dbname'];
        if(self::$connection === null)
        {
            self::$connection = new \PDO(
                $urlProd,
                $database['username'],
                $database['password']
            );
        }

        return self::$connection;
    }
}

// try {

//     Koneksi::getConnection();
//     echo "Connection OK";
// }
// catch (PDOException $e)
// {
//     echo "Connection failed: ". $e->getMessage();
// }