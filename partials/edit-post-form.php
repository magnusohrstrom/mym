<form class="edit-post-form" action="" method="post" id="edit-post-form">
  <h3>Edit post</h3>
    <div id="error"></div>
  <label for="title">Title</label>
  <input type="text" name="editTitle" id="editTitle" >
  <label for="imgage">Image URL</label>
  <input type="text" name="image" value="">
  <label for="post">Post</label>
  <input id ="editContent" type="text" name="editContent">
  <div class="btn-group grupp">
    <input type="submit" id="edit-sub-button" class="post-buttons" name="Save" value="Save"></input>
    <input type="button" class="post-buttons cancel-button" id="deletePosts" name="Cancel" value="Cancel"></input>
  </div>
</form>
