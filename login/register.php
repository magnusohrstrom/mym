<?php 
session_start();
require 'class_register.php';

//--- connection -------------
require '../database/connection.php';
require '../database/pdo.php';
//-----------------------------

$username = $_POST['username'];
$password = $_POST['password'];
$password2 = $_POST['confirm_password'];
$message ="";
$exist;

//if all are filled in
if(empty($username)||empty($password)||empty($password2)):
    $_SESSION['reg_error'] = "Please fill in the form to register.";
    header('Location: ../index.php#reg');
else:
    //check username duplication
    $user = new Register($pdo);
    $exist = $user->check_user($username);

    if($exist):
        $_SESSION['duplication'] = "Sorry, this username already exists. Please use another name.";
        header('Location: ../index.php#reg');
    else:
        if($password !== $password2):
            $_SESSION['confirm'] = "Please confirm your password again";
            header('Location: ../index.php#reg');
        else:
            $user->set_hash($password);
            $user->add_user($username);
            header('Location: ../index.php');
        endif;

    endif;

endif;

