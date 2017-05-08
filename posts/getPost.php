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
            "SELECT * FROM post");
        $getPosts->execute();
        $post = $getPosts->fetchAll();
        foreach ($post as $row){
            echo '<ul>';
            echo '<li>' . $row['title'] . '</li>';
            echo '<li>' . $row['content'] . '</li>';
            echo '</ul>';
        }
    }
}

