<?php
session_start();
include '../database/connection.php';
include 'deleteClass.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$pdo = db::connection();

$post = new post($pdo);
$post->delete();

header('Location: ../');