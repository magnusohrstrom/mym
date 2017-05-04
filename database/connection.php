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
    
    public static function connection($yourhost)
    {  
        $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false
        ];
        
        $dsn='mysql:dbname=mym;charset=utf8;host=' . $yourhost;
        return new PDO($dsn, 'root', 'root', $options);
    }
    
}