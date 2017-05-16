$('#post-form').submit(function(event){
    event.preventDefault();
    let formData = $(this).serialize();
    $.ajax({
        url: 'posts/postThis.php',
        method: 'post',
        data: formData,
        success: function(){
            console.log("yes");
        }
    })
});