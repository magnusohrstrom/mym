<?php
session_start();
include '../likes/Like.php';
include '../database/connection.php';
include '../database/pdo.php';
$like2 =  new Like($pdo);
$like2->insertLike($_SESSION['userId'],$_POST['postId']);
$total = $like2->getLikesForPost($_POST['postId']);
echo $total.' Likes';