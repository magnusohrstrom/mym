$('#deletePost').click(function(event){
    event.preventDefault();
    var that = this;
    $.ajax({
        beforeSend: () => {
            let h = $(window).height();
            $('.delete, .deleteLoader, .loader-text').height(h).css('display','block');
            setTimeout(function(){location.reload()}, 500);
        },
        url: 'posts/deletePost.php',
        method: 'post',
        data: {postId: that.parentNode.parentNode.getAttribute("id")}
    });
});