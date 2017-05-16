<?php
class Comment{
    private $pdo;
    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }
    public function insertComment()
    {
        session_start();
        var_dump($_SESSION);
        $st = $this->pdo->prepare('INSERT INTO comments
      (userId,content,postId,timeStamp)
      VALUES
      (:userId,:content,:postId,now())');
        $st->execute([
            ":userId" => $_SESSION['userId'],
            ":content" => $_POST["content"],
            ":postId" => 2//$_POST["postId"]
        ]);
    }
    public function getAllComments(){
        $st = $this->pdo->prepare("SELECT postId FROM comments");
        $st->execute();
        $list = $st->fetchAll();
        return $list;
    }
}