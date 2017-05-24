$('#post-form').submit(function(event){
    event.preventDefault();
    let formData = $(this).serialize();
    $.ajax({
        beforeSend: () => {
            let h = $(window).height();
            $('.post, .postLoader, .loader-text').height(h).css('display','block');
            setTimeout(function(){location.reload()}, 500);
        },
        url: 'posts/postThis.php',
        method: 'post',
        data: formData
    })
});

let editButtons = document.getElementsByClassName('edit-post-button');

for (var i = 0; i < editButtons.length; i++) {
  editButtons[i].addEventListener('click', function(){
    this.parentNode.parentNode.childNodes[4].classList.toggle('active');
    let editTitle = document.getElementById("editTitle");
    let editContent = document.getElementById("editContent");
    editTitle.value = this.parentNode.firstChild.innerHTML;
    editContent.value = this.parentNode.childNodes[2].innerHTML;

  });
}

let cancelButtons = document.getElementsByClassName('cancel-button');
for (var i = 0; i < cancelButtons.length; i++) {
  cancelButtons[i].addEventListener('click', function(){
    this.parentNode.parentNode.classList.remove('active');
  });
}
