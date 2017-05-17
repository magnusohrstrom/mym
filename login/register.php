<?php
session_start();
//--- connection -------------
require '../database/connection.php';
require '../database/pdo.php';
//-----------------------------
require 'class_register.php';
//save values from register.js
$username = $_POST['username'];
$password = $_POST['password'];
$user = new Register($pdo);
$exist = $user->check_user($username);
if($exist):
    echo "Sorry, this username already exists. Please use another name.";
else:
    $user->set_hash($password);
    $user->add_user($username);
    $userinfo = $user->get_all_userinfo($username);
    $user->create_session($userinfo, $username);
endif;