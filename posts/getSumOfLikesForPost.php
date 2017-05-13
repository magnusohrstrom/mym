<?php
include 'database/pdo.php';
$likesToEcho = new Like($pdo);
echo '<p class="likeP" id="p'.$row['postId'].'">'.$likesToEcho->getLikesForPost($row['postId']).' Likes</p>';
//var_dump('<p id="p'.$row['postId'].'">'.$likesToEcho->getLikesForPost($row['postId']).' Likes</p>');
//include 'partials/like-form.php';
