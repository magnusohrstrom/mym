<?php 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
//---------------------------------------------
//Replace this part to connection.php
require '../database/connection.php';
/*
$options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false
    ];
$dsn = "mysql:host=localhost;dbname=mym;charset=utf8";
$username='root';
$password='root';
$pdo = new PDO($dsn, $username, $password, $options);
//------------------------------------------*/

$mylocal = "localhost";
$pdo=db::connection($mylocal);

$username = $_POST['username'];
$password = $_POST['password'];

class Login
{
    private $pdo;
    private $userInfo;
    
    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }
    
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
            $_SESSION['status'] = 'logged in';
        else:
            $_SESSION['status'] = 'login failed';
        endif;
    }
}

$askDB = new Login($pdo);
$print = $askDB->get_info($username);
if(empty($print)):
    $_SESSION['username'] ='username not found';
    header('Location: login_form.php');
else:
    $askDB->verify($password);
    $_SESSION['username'] = $username;
    header('Location: loggedin.php');
endif;    

