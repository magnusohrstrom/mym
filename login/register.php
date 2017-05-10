<?php 
session_start();
require 'class_register.php';

//--- connection -------------
require '../database/connection.php';
require '../database/pdo.php';
//-----------------------------

//save values from register.php
$username = $_POST['username'];
$password = $_POST['password'];

$user = new Register($pdo);
$exist = $user->check_user($username);

if($exist):
    echo "Sorry, this username already exists. Please use another name.";
else:
    $user->set_hash($password);
    $user->add_user($username);
    $user->create_session($username);
endif;