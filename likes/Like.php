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

  public function checkLike($userId,$postId)
  {
    $st = $this->pdo->prepare(
      'SELECT userId, postId FROM likes
        where postId = :postId and userId = :userId');
        $st->execute([
          ':postId' => $postId,
          ':userId' => $userId
        ]);

    $isLiked = $st->rowCount() < 1 ? true : false;
    return json_encode($isLiked);
  }

  public function insertLike($userId, $postId)
  { self::checkLike($userId,$postId);
    if(self::checkLike($userId,$postId)){
      $st = $this->pdo->prepare('INSERT INTO likes (userId, postId)
      VALUES (:userId,:postId)');

      $st->execute([
        ":userId" => $userId,
        ":postId" => $postId
      ]);

    }
    else {


    }

  }

  public function deleteLike($userId, $postId)
  {
    $st = $this->pdo->prepare('
    DELETE FROM likes WHERE postId = :postId
    AND userId = :userId');
    $st->execute([
      ":userId" => $userId,
      ":postId" => $postId
    ]);


  }

  public function getLikesForPost($postId)
  {
    $st = $this->pdo->prepare(
    'SELECT COUNT(*) as total FROM likes WHERE postId = :postId');
    $st->execute([
      ':postId' => $postId
    ]);
    $list = $st->fetchAll();

    return $list[0]['total'];
  }
}

 ?>
