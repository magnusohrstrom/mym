<?php 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

//--- PDO ---------------
require '../database/connection.php';
$mylocal = "localhost";
$pdo=db::connection($mylocal);
//-----------------------

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
            $_SESSION['status'] = "You have been registered and logged in!";
            header('Location: loggedin.php');
     }
}


//if all are filled in
if(empty($username)||empty($password)||empty($password2)):
    $_SESSION['error'] = true;
    header('Location: register_form.php');
else:
    //check username duplication
    $user = new Register($pdo);
    $exist = $user->check_user($username);

    if($exist):
        $_SESSION['duplication'] = true;
        header('Location: register_form.php');
    else:
        if($password !== $password2):
            $_SESSION['confirm'] = "Please confirm your password again";
            header('Location: register_form.php');
        else:
            $user->set_hash($password);
            $user->add_user($username);
        endif;

    endif;

endif;

