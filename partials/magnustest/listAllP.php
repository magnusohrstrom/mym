<?php
include 'error.php';
include 'Post.php';
include 'database/connection.php';
$pdo = db::connection();
$hej = new Post($pdo);

$hejsan = $hej->getAllPosts();

foreach ($hejsan as $row) {
  echo '<section class="post-section" id="'.$row['postId'].'"col-sm-6 post-section">
          <article class="">
            <h3>'.$row['title'].'</h3>
            <p>'.$row['content'].'</p>
          </article>';
  include "partials/like-form.php";

  echo '</section>';
}


 ?>
