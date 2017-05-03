<?php
  include "database/connection.php";
  class Post {
    private $pdo;

    public function __construct($pdo, $postId, $title, $content, $userId, $amountOfLikes, $timestamp){
        $this->pdo = $pdo;
    }
    public function getAllPosts()
    {
      $st = $this->pdo->prepare("SELECT * FROM post");
      $st->execute();
      $posts = $st->fetchAll(PDO::FETCH_ASSOC);
      var_dump($posts);
    }
    public function addPost(){
      $this->pdo->prepare("INSERT INTO post (postId, title, content, userId) VALUES (:postId, :title, :content, :userId)")
    }
  }
  $hej = new Post($pdo, null, 'hejsan',"lorem ipsum", 14, 3, null);
  $hej->getAllPosts();


 ?>
