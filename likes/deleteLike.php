<?php
session_start();
include '../likes/Like.php';
include '../database/connection.php';
include '../database/pdo.php';
$deleteLike = new Like($pdo);
$deleteLike->deleteLike($_SESSION['userId'],$_POST['postId']);
$total = $deleteLike->getLikesForPost($_POST['postId']);
echo $total.' Likes';