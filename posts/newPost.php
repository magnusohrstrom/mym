<?php
class newPost
{
    private $pdo;
    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }
    public function insertPost()
    {
        $stmt = $this->pdo->prepare(
            "INSERT INTO post (title, content, userId, amountOfLikes, timeStamp)
             VALUES (:title, :content, :userId, 0, now())"
        );
        $stmt->execute([
            ":title"   => $_POST['title'],
            ":content" => $_POST['content'],
            ":userId"  => $_SESSION['userId']
        ]);
    }
    //test Yoko
    public function get_postId(){
        $stmt = $this->pdo->prepare(
            "SELECT postId FROM post WHERE title=:title"
        );
        $stmt->execute(
            ":title"=$_POST['title'];
        );
    }
}