<?php
session_start();
include '../database/connection.php';
include 'postToEdit.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$pdo = db::connection();
$postToEdit = new postToEdit($pdo);

$postId = $_POST['postId'];

$postToEdit->edit($postId, $_POST['editTitle'], $_POST['editContent']);
