<?php
if(!isset($_SESSION)){
  session_start();

}
//include '../error.php';
include '../likes/Like.php';
include '../database/connection.php';
include '../database/pdo.php';
var_dump($_SESSION);
$postId = $_POST['postId'];
var_dump($postId);
if(isset($_SESSION['userId']))
{
  $like = new Like($pdo);
  $like->insertLike(9, $postId);

}
else {
  $like = new Like($pdo);
  $like->insertLike(90, $postId);

}


//$_SESSION['userId']
