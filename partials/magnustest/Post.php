<?php
  class Post {
    private $pdo;

    public function __construct($pdo){
        $this->pdo = $pdo;
    }
    public function getAllPosts()
    {
      $st = $this->pdo->prepare("SELECT * FROM post");
      $st->execute();
      $posts = $st->fetchAll();
      return $posts;

    }
  }

 ?>
