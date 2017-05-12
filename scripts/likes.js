const like = (() => {

  return {

    likeAndUnlike: () => {

    },
    updateLikeSumOnClick: function(post,response) {
      post.children[1].innerHTML = response;
    },
    checkIfThisPostIsLiked: (post) => {

    },

    insertLike:(post) => {
      let thisPost = post;
      $.ajax({
        url:'likes/insertLike.php',
        method: 'post',
        data: 'postId=' + thisPost.id,
        success:   function(resp){
            like.updateLikeSumOnClick(thisPost, resp);
            console.log(resp);
          },
        error: function(resp){
          console.log('An error has occured ' + resp);
        }
      });
    },



    changeToDeleteLikeButton: (post,that) => {

      that.children[0].innerHTML = 'Unlike';

    },


    deleteLike: () => {

    },

    addEventListenerToLikeButton:function(){
      let likeButtons = document.getElementsByClassName('like-form');
      for (let i = 0; i < likeButtons.length; i++) {
        likeButtons[i].addEventListener('submit', function(event){
          event.preventDefault();

          like.insertLike(this.parentNode);
          //like.changeToDeleteLikeButton(this);
        });
      }
    },

    addEventListenerToDeleteButton: function(){
      let deleteButtons = document.getElementsByClassName('delete-form');

      for (var i = 0; i < deleteButtons.length; i++) {
        deleteButtons[i].addEventListener('submit', function(event){
          event.preventDefault();
          like.deleteLike();
        });
      }
    },
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
