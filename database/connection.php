<?php
class db
{
    private static $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false
        ];
    
    public static function connection()
    {  
        $dsn='mysql:dbname=mym;charset=utf8;host=' . $yourhost;
        return new PDO($dsn, 'root', 'root', self::$options);
    }
    
}