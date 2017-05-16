<?php
class post
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function delete()
    {
        $deletePost = $this->pdo->prepare("DELETE * FROM post
                      WHERE postId = 57");
        $deletePost = execute();
    }
}