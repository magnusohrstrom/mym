<?php
include 'database/connection.php';
include 'Like.php';
$pdo = db::connection();

$like = new Like($pdo);
$like->insertLike();
