<?php
session_start();
include '../database/connection.php';
include 'newPost.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$pdo = db::connection();
$newPost = new newPost($pdo);
$newPost->insertPost();

header('Location: ../');