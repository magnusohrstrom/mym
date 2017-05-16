<?php

class getPosts
{

    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function getPosts()
    { 
        $getPosts = $this->pdo->prepare(
            "SELECT post.title, post.content, post.timeStamp, user.username, post.postId FROM post
              INNER JOIN user on post.userId = user.userId ORDER BY postId DESC");
        $getPosts->execute();
        $post = $getPosts->fetchAll();
        foreach ($post as $row){
            echo '<section class="col-sm-6 post-section" id="'.$row['postId'].'">
                  <article class="">
                    <h3>'.$row['title'].'</h3>
                    <p>'.$row['content'].'</p>
                    <label>' .$row['timeStamp'] . ' by ' . $row['username'] . '</label>
                  </article>';
            include 'getSumOfLikesForPost.php';
            include 'partials/like-form.php';
            echo '</section>';
          /*
include 'database/pdo.php';
          $likesToEcho = new Like($pdo);
          echo '<p>'.$likesToEcho->getLikesForPost($row['postId']).' has liked this post.</p></section>';*/


        }
    }
}
