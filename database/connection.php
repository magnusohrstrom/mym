<?php
class db
{
<<<<<<< HEAD
=======

>>>>>>> master
    private static $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false
<<<<<<< HEAD
    ];

   public static function connection()
=======
        ];
   
  
    public static function connection()
>>>>>>> master
    {
        return new PDO('mysql:host=localhost;dbname=mym;charset=utf8',
            'root',
            'root',
<<<<<<< HEAD
            self::$options
       );
    }
}
=======
            self::$options);
    }
}
>>>>>>> master
