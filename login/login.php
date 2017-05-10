<?php 
session_start();
require 'class_login.php';
//--Connection ------------------------------
require '../database/connection.php';
require '../database/pdo.php';
//--------------------------------------------

$username = $_POST['username'];
$password = $_POST['password'];


if($username && $password):
    $askDB = new Login($pdo);
    $user = $askDB->get_info($username);

    if(empty($user)):
        $_SESSION['name_error'] ='Username not found';
    header('Location: ../index.php#login');
    else:
        $askDB->verify($password);
        if($_SESSION['status']):
            $askDB->create_session($user, $username);  #Success Login!
            header('Location: ../index.php');
        else:
            $_SESSION['pass_error'] = 'Sorry, wrong password';
            header('Location: ../index.php#login');
        endif;

    endif;    

else:
    $_SESSION['input_error'] = 'Please fill in the form';
    header('Location: ../index.php#login');
endif;



