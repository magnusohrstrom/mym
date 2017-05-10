let likeButtons = document.getElementsByClassName('like-form');

function ajaxInsertLike(){
  var id = 132;
  fetch('likes/insertLike.php', {
    method: 'POST',
    body: new FormData('postId='+id) //format input-fields
  }).then(console.log('suxass'));
}


/*

for (var i = 0; i < likeButtons.length; i++) {
  likeButtons[i].addEventListener('submit', function(event){
    event.preventDefault();
    ajaxInsertLike();
  });
}

*/
