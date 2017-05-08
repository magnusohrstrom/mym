<?php

class Comment{

  private $pdo;

  public function __construct($pdo)
  {
    $this->pdo = $pdo;
  }

  public function insertComment()
  {

    $st = $this->pdo->prepare('INSERT INTO comments
      (userId,content,postId)
      VALUES
      (:userId,:content,:postId)');

    $st->execute([
      ":userId" => 12,
      ":content" => $_POST["content"],
      ":postId" => 1678
    ]);


  }
  public function getAllComments(){
    $st = $this->pdo->prepare("SELECT postId FROM comments");
    $st->execute();
    $list = $st->fetchAll();
    return $list;
  }
}
