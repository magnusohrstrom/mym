let likeButtons = document.getElementsByClassName('like-form');

function ajaxInsertLike(){

  $.ajax({
    url: 'likes/insertLike.php',
    method: 'POST',
    body: new FormData(this)

  }).done(function(){
    data => data.text();
  }).then(function(){
    text => console.log(text);
  });


  //Do post request to php
  /*
  fetch('likes/insertLike.php', {
    method: 'POST',
    body: new FormData(this) //format input-fields
  })
  .then(data => data.text())
  .then(text => console.log(text));

  */
}




for (var i = 0; i < likeButtons.length; i++) {
  likeButtons[i].addEventListener('submit', function(event){
    event.preventDefault();
    ajaxInsertLike();
  });
}
