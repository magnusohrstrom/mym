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
             VALUES (:title, :content, :userId, 0, 123)"
        );
        $stmt->execute([
            ":title"   => $_POST['title'],
            ":content" => $_POST['content'],
            ":userId"  => $_SESSION['userId']
        ]);
    }
}