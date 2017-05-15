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
            $sql = "INSERT INTO user(first, last, username, password, isAdmin) VALUES(:first, :last, :username, :password, :isAdmin)";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute([
                ":first" => $_POST['first'],
                ":last" => $_POST['last'],
                ":username" => $name,
                ":password" => $this->hashed,
                ":isAdmin" => $_POST['isAdmin']
            ]);
     }
    
    public function get_all_userinfo($name){
        $sql = "SELECT * FROM user WHERE username=:user";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([":user"=>$name]);
        return $stmt->fetch();
    }
    
    
    public function create_session($userArray, $name){
        $_SESSION['login'] = true;
        $_SESSION['username'] = ($_POST['first']) ? $_POST['first'] : $name;
        $_SESSION['isAdmin'] = $_POST['isAdmin'];
        $_SESSION['userId'] = $userArray['userId'];
    }
}