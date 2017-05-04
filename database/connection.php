<?php
/*
class db
{
    private $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false
    ];
    
    public function connection($options)
    {
        return new PDO('mysql:host=localhost:8889;dbname=mym;charset=utf8',
            'root',
            'root',
            $options);
    }
}
*/
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

/*------------------
   Call like this:
--------------------*/
/*

$mylocal = "localhost:xxxx";
$pdo=db::connection($mylocal);

*/