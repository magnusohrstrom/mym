<?php
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
