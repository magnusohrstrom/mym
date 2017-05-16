<?php
session_start();
include '../database/connection.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$pdo = db::connection();
$postId = $_POST['postId'];
$sql = "DELETE FROM post WHERE postId = $postId";
$pdo->exec($sql);
