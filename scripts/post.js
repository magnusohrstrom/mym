$('#post-form').submit(function(event){
    event.preventDefault();
    let title = $('#title').val(),
    content = $('#content').val();
    let formData = $(this).serialize();
    $.ajax({
        url: 'posts/postThis.php',
        method: 'post',
        data: formData,
        dataType: 'html',
        success: function(){
            console.log("yes");
        }
    })
});