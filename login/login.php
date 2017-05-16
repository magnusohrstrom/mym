<?php
session_start();
//--Connection ------------------------------
require '../database/connection.php';
require '../database/pdo.php';
//--------------------------------------------
require 'class_login.php';
$username = $_POST['username'];
$password = $_POST['password'];
$askDB = new Login($pdo);
$user = $askDB->get_info($username);
if(empty($user)):
    echo 'Username not found';
else:
    $askDB->verify($password);
    if($_SESSION['passOK']):
        $askDB->create_session($user, $username); #Success Login!
    else:
        echo 'Please make sure your password';
    endif;
endif;
