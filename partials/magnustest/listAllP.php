<?php
include 'error.php';
include 'Post.php';


$hej = new Post($pdo);

$hejsan = $hej->getAllPosts();

foreach ($hejsan as $row) {
  $postId = $row['postId'];
  echo '<section class="post-section" id="'.$postId.'"col-sm-6 post-section">
          <article class="">
            <h3>'.$row['title'].'</h3>
            <p>'.$row['content'].'</p>
          </article>';

  $likes_amount = new Like($pdo);
  echo $total = $likes_amount->getLikesForPost($postId);









  include "partials/like-form.php";

  echo '</section>';
}


 ?>
