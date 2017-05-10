let likeButtons = document.getElementsByClassName('like-form');

function ajaxInsertLike(){

  $.ajax({
    url:'likes/insertLike.php',
    method: 'post',
    data: 'userId='+5,
    success: function(resp){
      console.log(resp);
    }
  }).done();


}

for (var i = 0; i < likeButtons.length; i++) {
  likeButtons[i].addEventListener('submit', function(event){
    event.preventDefault();
    ajaxInsertLike();
  });
}
