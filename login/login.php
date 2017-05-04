<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
header('Location: ../partials/login-form.php');
require 'class_login.php';
//--Connection ------------------------------
require '../database/connection.php';
$mylocal = "localhost";
$pdo=db::connection($mylocal);
//--------------------------------------------

$username = $_POST['username'];
$password = $_POST['password'];


if($username && $password):  #to make sure both are filled in
    $askDB = new Login($pdo);
    $user = $askDB->get_info($username);

    if(empty($user)):
        $_SESSION['name_error'] ='username not found';

    else:
        $askDB->verify($password);  #Calling the "verify" function
        
        if($_SESSION['status']):
            $_SESSION['username'] = $username;
            header('Location: loggedin.php');
        else:
            $_SESSION['pass_error'] = 'Sorry, wrong password';

        endif;

    endif;    

else:
    $_SESSION['input_error'] = 'Please fill in the form';

endif;



