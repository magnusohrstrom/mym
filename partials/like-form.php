
<form class="like-form" action="" method="POST">
  <button type="submit" class="btn btn-secondary">
    <?php
      $like = 'Like';
      $unlike = 'Unlike';
      $likesToEcho = new Like($pdo);
      $likesToEcho->checkLike($_SESSION['userId'],$row['postId'])=='true'? $val = $like: $val = $unlike;
      echo $val;
     ?>
  </button>
</form>
