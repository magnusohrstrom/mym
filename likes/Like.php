<?php
$session_start();

class Like {

  private $pdo;

  public function __construct($pdo)
  {
    $this->pdo = $pdo;
  }

  public function insertLike()
  {
    $st = $this->pdo->prepare('INSERT INTO likes (liketId,userId, postId)
      VALUES (null,:userId,:postId)');

    $st->execute([
      ":userId" => 16,
      ":postId" => 105
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
