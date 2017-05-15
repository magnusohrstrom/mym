//Do post request to php
$('#button').onclick(function(event){
    event.preventDefault();
    let title = $('#title').val(),
    content = $('#content').val();
    console.log("test");
    if( title ==="" || content ==="" ){
        error.html('please fill in the form');
    }else{
        let formData = $(this).serialize();
        $.ajax({
            url: 'posts/postThis.php',
            method: 'post',
            data: formData,
            dataType: 'html'
        })
        .then(function(res)
        {
            let error = document.getElementById("error");
            error.innerHTML(res);
        })
        //.then(loader)
        //.fail(err);
    }
});