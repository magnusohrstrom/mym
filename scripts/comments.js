let commentsForm = document.getElementsByClassName('comment-form')[0];



commentsForm.addEventListener('submit', function(event){

  //Prevent form from submitting
  event.preventDefault();

  //Do post request to php
  fetch('comments/insertComment.php', {
    method: 'POST',
    body: new FormData(this) //format input-fields
  })
  .then(alert('Then!'));

});






/*

fetch('comments/getAllComments.php')
.then(data => data.text())
.then(text => console.log(text));







commentsForm.addEventListener('submit', function(event){

  //Prevent form from submitting
  event.preventDefault();

  //Do post request to php
  fetch('https://localhost:8888/mym/comments/insertComment.php', {
    method: 'POST',
    body: new FormData(this) //format input-fields
  })
  .then(data => data.text())
  .then(text => console.log(text));

});

*/
