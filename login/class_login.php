<?php
session_start();

class Login
{
    private $pdo;
    private $userInfo;
    
    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }
    
    #search the user in DB
    public function get_info($name)
    {
        $sql = "SELECT * FROM user WHERE username=:user";
        $st = $this->pdo->prepare($sql);
        $st->execute([":user" => $name]);
        $this->userInfo = $st->fetch();
        return $this->userInfo;
    }
    
    public function verify($loginpass)
    {
        $hashed = $this->userInfo['password'];
        if(password_verify($loginpass, $hashed)):
            $_SESSION['status'] = true;
        else:
            $_SESSION['status'] = false;
        endif;
    }
}