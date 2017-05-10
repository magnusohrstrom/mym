let likeButtons = document.getElementsByClassName('like-form');

function ajaxInsertLike(){


  $.ajax({
    url:'likes/insertLike.php',
    method: 'post',
    data: 'userId='+2,
    success: function(resp){
      console.log(resp);
    }
  }).done(success);

  function success(resp){
    console.log('succeeeeee');
    console.log();
  }
}


for (var i = 0; i < likeButtons.length; i++) {
  likeButtons[i].addEventListener('submit', function(event){
    event.preventDefault();
    ajaxInsertLike();
  });
}
