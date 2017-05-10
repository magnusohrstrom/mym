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
  $list_of_likes = json_encode($likes_amount->getLikesForPost($postId));
 highlight_string(  $list_of_likes );
  echo $list_of_likes['COUNT(*)'];

  include "partials/like-form.php";

  echo '</section>';
}


 ?>
