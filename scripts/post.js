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