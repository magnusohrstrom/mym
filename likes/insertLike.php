<?php
session_start();
//include '../error.php';
include '../likes/Like.php';
include '../database/connection.php';
include '../database/pdo.php';
var_dump($_SESSION['userId']);
$like2 =  new Like($pdo);
var_dump($_POST['userId']);
$like2->insertLike($_SESSION['userId'],$_POST['userId']);
