<?php
include 'error.php';
class Like {
  private $postId;
  private $userId;
  private $pdo;

  public function __construct($pdo)
  {
    $this->pdo = $pdo;
  }


  /*
  public function insertLike()
  {


  $st = $this->pdo->prepare('INSERT INTO likes (userId, postId)
      VALUES (:userId,:postId)');

    $st->execute([
      ":userId" => $this->userId,
      ":postId" => $this->postId
    ]);
  }  */



  public function insertLike($userId, $postId)
  {
    $st = $this->pdo->prepare('INSERT INTO likes (userId, postId)
    VALUES (:userId,:postId)');

  $st->execute([
    ":userId" => $userId,
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

    return $list;
  }
}

 ?>
