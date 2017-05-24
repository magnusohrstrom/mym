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
    this.parentNode.parentNode.children[3].classList.toggle('active');
  });
}
