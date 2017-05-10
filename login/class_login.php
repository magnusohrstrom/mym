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
    
    public function check_admin($name)
    {
        $sql = "SELECT isAdmin FROM user WHERE username = :username";
        $st = $this->pdo->prepare($sql);
        $st->execute([':username' => $name]);
        $_SESSION['admin'] = $st->fetch();
        return $_SESSION['admin'];
    }
    
    public function create_session($userArray, $username)
    {
        $_SESSION['username'] = (!empty($userArray['first'])) ? $userArray['first'] : $username;
        $_SESSION['userId'] = $userArray['userId'];
        $_SESSION['first'] = $userArray['first'];
        $_SESSION['last'] = $userArray['last'];
        $_SESSION['isAdmin'] = $userArray['isAdmin'];
    }
}