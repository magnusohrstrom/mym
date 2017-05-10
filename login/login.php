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
        echo 'Username not found';
    //header('Location: ../index.php#login');
    else:
        $askDB->verify($passsword);
        if($_SESSION['passOK']):
            $askDB->create_session($user, $username); 
#Success Login!
            //header('Location: ../index.php');  
        else:
            echo = 'Sorry, wrong password';
            //header('Location: ../index.php#login');
        endif;

    endif;    

else:
    echo = 'Please fill in the form';
    //header('Location: ../index.php#login');
endif;




