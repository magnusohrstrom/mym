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
$exist;

//if all are filled in
if(empty($username) || empty($password) || empty($password2)):
    $_SESSION['reg_error'] = "Please fill in the form to register.";
    return $_SESSION['reg_error'];
    //header('Location: ../index.php#reg');
else:
    //check username duplication
    $user = new Register($pdo);
    $exist = $user->check_user($username);

    if($exist):
        $_SESSION['reg_error'] = "Sorry, this username already exists. Please use another name.";
        return $_SESSION['reg_error'];
        //header('Location: ../index.php#reg');
    else:
        if($password !== $password2):
            $_SESSION['reg_error'] = "Please confirm your password again";
            return $_SESSION['reg_error'];
            //header('Location: ../index.php#reg');
        else:
            $user->set_hash($password);
            $user->add_user($username);
            $user->create_session($username);
            //header('Location: ../index.php');
        endif;

    endif;

endif;

