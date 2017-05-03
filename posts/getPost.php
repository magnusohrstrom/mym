<?php
/**
 * filen är under konstruktion!!
 */

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include '../database/connection.php';

$pdo = db::connection();

$getPosts = $pdo->prepare(
    "SELECT post.title, post.content, post.amountOfLikes, post.timeStamp,
              post.userId, user.username, user.userId FROM post, user
              WHERE post.userId = user.userId");
$getPosts->execute;
var_dump($getPosts);
