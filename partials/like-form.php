<?php
if(isset($_SESSION['username'])){
  echo
  '<form class="like-form" action="" method="POST">
    <button type="submit" class="">';
        $like = "Like";
        $unlike = "Unlike";
        $likesToEcho = new Like($pdo);
        $likesToEcho->checkLike($_SESSION["userId"],$row["postId"])=="true"? $val = $like: $val = $unlike;
        echo $val;

  echo '</button>
  </form>';
}
