$('#edit-sub-button').click(function(event){
    event.preventDefault();
    var that = this;
    console.log("hej");
    console.log(this);
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
        data: {postId: that.parentNode.parentNode.parentNode.getAttribute("id"), editTitle: editTitle, editContent: editContent}
    });
});
