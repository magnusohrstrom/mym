<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include '../comments/Comment.php';
include '../database/connection.php';
include '../database/pdo.php';
$new_comment = new Comment($pdo);
$new_comment->insertComment();