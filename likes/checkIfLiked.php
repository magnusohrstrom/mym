<?php
session_start();
include '../likes/Like.php';
include '../database/connection.php';
include '../database/pdo.php';
include 'error.php';
$check = new Like($pdo);

//return $check->checkLike($_SESSION['userId'],$_POST['postId']);
