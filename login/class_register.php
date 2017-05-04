<?php
session_start();

class Register
{
    private $pdo;
    private $hashed;
    private $exist;
    
    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }
    
    public function set_hash($p){
        $this->hashed = password_hash($p, PASSWORD_DEFAULT);
    }
    
    public function check_user($name){
        $sql = "SELECT username FROM user WHERE username=:user";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([":user"=>$name]);
        return $stmt->fetch();
    }
    
     public function add_user($name){
            $sql = "INSERT INTO user(username, password, isAdmin) VALUES(:username, :password, :isAdmin)";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute([
                ":username" => $name,
                ":password" => $this->hashed,
                ":isAdmin" => $_POST['isAdmin']
            ]);
            $_SESSION['username'] = $name;
            $_SESSION['status'] = true;
     }
}