$('#deletePost').click(function(event){
    console.log("hej");
    event.preventDefault();
    $.ajax({
        url: 'posts/deletePost.php',
        method: 'post',
        dataType: 'html',
        success: function(){
            console.log("ja");
        }
    });
});