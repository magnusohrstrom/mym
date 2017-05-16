$('#deletePost').click(function(event){
    console.log("hej");
    event.preventDefault();
    var that = this;
    $.ajax({
        url: 'posts/deletePost.php',
        method: 'post',
        data: {postId: that.parentNode.parentNode.getAttribute("id")},
        success: function(postId){
            console.log(postId);
        }
    });
});