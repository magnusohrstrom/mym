<?php
include 'error.php';

$getAllLikes = new Like($pdo);
$likes = $getAllLikes->getLikesForPost(2);

?>
