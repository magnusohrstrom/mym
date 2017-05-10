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
            "SELECT * FROM post ORDER BY postId DESC");
        $getPosts->execute();
        $post = $getPosts->fetchAll();
        foreach ($post as $row){
            echo '<section class="post-section" id="'.$row['postId'].' col-sm-6 post-section">
                  <article class="">
                    <h3>'.$row['title'].'</h3>
                    <p>'.$row['content'].'</p>
                  </article>';
            echo '</section>';
        }
    }
}