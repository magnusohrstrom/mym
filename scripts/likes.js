const like = (() => {

  return {

    likeAndUnlike: (post,postP) => {
      like.checkIfThisPostIsLiked(post,postP);
      //
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
              console.log('true');
              like.changeToUnLikeButton(that,'Unlike');
            }
            else if(resp == 'false'){
              console.log(resp);
              like.insertDeleteLike(post,'likes/deleteLike.php');
              console.log('false');
                like.changeToUnLikeButton(that,'Like');
            }
          },
        error: function(resp){
          console.log('An error has occured ' + resp);
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
          console.log('An error has occured ' + resp);
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
          //like.changeToUnLikeButton(this.children[0]);
        });
      }
    },

    /*
    addEventListenerToDeleteButton: function(){
      let deleteButtons = document.getElementsByClassName('delete-form');

      for (var i = 0; i < deleteButtons.length; i++) {
        deleteButtons[i].addEventListener('submit', function(event){
          event.preventDefault();

        });
      }
    },    */


    init:function(){
      like.addEventListenerToLikeButton();
    }
  };
})();
like.addEventListenerToLikeButton();
/*
let likeButtons = document.getElementsByClassName('like-form');

var ajaxInsertLike = () => {
  //let postId = this.parentNode.parentNode.id;
  console.log(this);
  $.ajax({
    url:'likes/insertLike.php',
    method: 'post',
    data: 'postId=',//+postId,
    success: function(resp){
      console.log(resp);
    }
  }).done();
};

for (var i = 0; i < likeButtons.length; i++) {
  likeButtons[i].addEventListener('submit', (event) => {
    event.preventDefault();
    ajaxInsertLike();
  });
}
*/
