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
                  <article class="">';

                    echo '<h3>'.$row['title'].'</h3>
                    <p>'.$row['content'].'</p>
                    <label>' .$row['timeStamp'] . ' by ' . $row['username'] . '</label>';
                    if(isset($_SESSION['username'])){
                    if ($_SESSION['username'] == $row['username'] || $_SESSION['isAdmin'] == true ||
                        $_SESSION['isAdmin'] == 1)
                        {
                            echo '<button class="post-buttons" id="deletePost" type="button" value="delete">Delete</button>';
                            echo '<button class="post-buttons edit-post-button" type="button" value="">Edit</button>';
                        }
                    }
                  echo '</article>';
            include 'getSumOfLikesForPost.php';
            include 'partials/like-form.php';
            include 'partials/edit-post-form.php';
            echo '</section>';
          /*
          include 'database/pdo.php';
          $likesToEcho = new Like($pdo);
          echo '<p>'.$likesToEcho->getLikesForPost($row['postId']).' has liked this post.</p></section>';*/
        }

    }
}
