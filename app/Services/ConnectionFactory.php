<?php

namespace app\Services;

class ConnectionFactory extends \PDO
{

    protected static string $host = 'localhost';
    protected static string $database = 'my_youtube_with_php';
    protected static string $password = 'root';
    protected static string $user = 'postgres';
    private static $sql;
    
    public static function connect()
    {
        if(self::$sql == null){
            try{
                self::$sql = new \PDO('pgsql:host='.self::$host.';dbname='.self::$database.'',''.self::$user.'',''.self::$password.'',array(\PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
                self::$sql->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            }catch(Exception $e){
                // TODO: Lançar exception
                echo $e->getMessage();
            }
        }

        return self::$sql;

    }

}

?>