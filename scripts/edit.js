$('#edit-post-form').click(function(event){
    event.preventDefault();
    var that = this;
    console.log("hej");
    var editTitle = document.getElementById("editTitle").value;
    var editContent = document.getElementById("editContent").value;
    $.ajax({
        beforeSend: () => {
            let h = $(window).height();
            $('.edit, .editLoader, .loader-text').height(h).css('display','block');
            setTimeout(function(){location.reload()}, 500);
        },
        url: 'posts/editPost.php',
        method: 'post',
        data: {postId: that.parentNode.getAttribute("id"), editTitle: editTitle, editContent: editContent}
    });
});