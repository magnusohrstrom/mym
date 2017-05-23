const like = (() => {

  return {

    likeAndUnlike: (post,postP) => {
      like.checkIfThisPostIsLiked(post,postP);
    },

    updateLikeSumOnClick: function(post,response) {
      post.children[1].innerHTML = response;
    },

    checkIfThisPostIsLiked: (post,postP) => {
      let thisPost = post;
      var that = postP;
      $.ajax({
        url:'likes/checkIfLiked.php',
        method: 'post',
        data: 'postId=' + thisPost.id,
        success:   function(resp){
            if(resp == 'true'){
              like.insertDeleteLike(post,'likes/insertLike.php');
              like.changeToUnLikeButton(that,'Unlike');
            }
            else if(resp == 'false'){
              like.insertDeleteLike(post,'likes/deleteLike.php');
              like.changeToUnLikeButton(that,'Like');
            }
          },
        error: function(resp){
          alert('An error has occured ' + resp);
        }
      });
    },

    insertDeleteLike:(post,phpUrl) => {
      let thisPost = post;
      $.ajax({
        url: phpUrl,
        method: 'post',
        data: 'postId=' + thisPost.id,
        success:   function(resp){
            like.updateLikeSumOnClick(thisPost, resp);
          },
        error: function(resp){
          alert('An error has occured ' + resp);
        }
      });
    },

    changeToUnLikeButton: (likeButton, status) => {
      likeButton.innerHTML = status;
    },

    addEventListenerToLikeButton:function(){
      let likeButtons = document.getElementsByClassName('like-form');

      for (let i = 0; i < likeButtons.length; i++) {
        likeButtons[i].addEventListener('submit', function(event){
          event.preventDefault();
          like.likeAndUnlike(this.parentNode,this.children[0]);
        });
      }
    },

    init:function(){
      like.addEventListenerToLikeButton();
    }
  };
})();

like.init();
