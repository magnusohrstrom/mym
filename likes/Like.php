<?php

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
  public function getLikesForPost($postId){
    $st = $this->pdo->prepare(
    'SELECT COUNT(*) FROM likes WHERE postId = :postId');
    $st->execute([
      ':postId' => $postId
    ]);
    $list = $st->fetchAll();
    var_dump(json_encode($list));
  }
}

 ?>
