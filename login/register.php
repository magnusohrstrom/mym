<?php 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
require '../database/connection.php';

$username = $_POST['username'];
$password = $_POST['password'];
$password2 = $_POST['confirm_password'];
$message ="";
$exist;

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
        echo $this->hashed;
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
     }
}


//if all are filled in
if(empty($username)||empty($password)||empty($password2)):
    echo "Please fill in";
else:
    //check username duplication
    $user = new Register($pdo);
    $exist = $user->check_user($username);

    if($exist):
        $message = "This username already exists. Please use another name.";
        echo $message;
    else:
        if($password !== $password2):
            $message = "Please confirm password again";
            echo $message;
        else:
            $user->set_hash($password);
            $user->add_user($username);
        endif;

    endif;

endif;

