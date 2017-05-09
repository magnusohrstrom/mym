<?php
include 'error.php';
include 'database/connection.php';
include 'likes/Like.php';
include 'database/pdo.php';

$getAllLikes = new Like($pdo);
$getAllLikes->getLikesForPost(2);

 ?>
