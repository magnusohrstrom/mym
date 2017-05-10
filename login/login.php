<?php 
session_start();
/*
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
*/
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
        echo 'Sorry, wrong password';
    endif;
endif;



