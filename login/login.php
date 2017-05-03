<?php 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
require '../database/connection.php';

$username = $_POST['username'];
$password = $_POST['password'];

class Login
{
    private $pdo;
    
    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }
    
    public function get_info($name)
    {
        $sql = "SELECT * FROM user WHERE username=:user";
        $st = $this->pdo->prepare($sql);
        $st->execute([":user" => $name]);
        return $st->fetchAll();
    }
}

if($username):
    $askDB = new Login($pdo);
    $print = $askDB->get_info($username);
    if(empty($print)):
        $_SESSION['message'] = "wrong username";
    
endif;

