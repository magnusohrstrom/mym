<?php
include 'posts/editLoader.php';
include 'posts/postLoader.php';
include 'posts/deleteLoader.php';
?>
<form class="post-form col-sm-6" action="" method="post" id="post-form">
  <h3>Add Post</h3>
    <div id="error"></div>
  <label for="title">Title</label>
  <input type="text" name="title" value="" id="title" >
  <label for="imgage">Image URL</label>
  <input type="text" name="image" value="">
  <label for="post">Post</label>
  <input type="text" name="content" value="" id="content">
  <div class="btn-group">
    <button type="submit" class="" name="button">Add post</button>
  </div>
</form>
