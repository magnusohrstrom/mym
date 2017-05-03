<?php
include '../database/connection.php';
include 'newPost.php';

$pdo = db::connection();

$newPost = new newPost($pdo);
$newPost->insertPost();

header('Location: ../');