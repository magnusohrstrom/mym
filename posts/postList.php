<?php
//include '../database/connection.php';
include 'database/connection.php';
include 'getPost.php';

$pdo = db::connection();

$postList = new getPosts($pdo);
$postList->getPosts();

//header('Location: ../');