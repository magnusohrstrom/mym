<?php
$session_start();

class Like {

  private $pdo;

  public function __construct($pdo)
  {
    $this->pdo = $pdo;
  }

  public function insertLike($postId)
  {
    $st = $this->pdo->prepare('INSERT INTO likes (userId, postId)
      VALUES (:userId,:postId)');

    $st->execute([
      ":userId" => $_SESSION['userId'],
      ":postId" => $postId
    ]);
  }
  public function getAllLikes(){
    $st = $this->pdo->prepare('SELECT * FROM likes');
    $st->execute();
    $list = $st->fetchAll();
    var_dump($list);
  }
}

 ?>
