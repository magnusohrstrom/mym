$(function(){

    $('#login-form').submit(function(event){
        event.preventDefault();
        $("#ajax-msg").empty();
        
        let formData = $('#username').serialize();

        $.ajax({
            url: 'login/login.php',
            method: 'post',
            data: formData
        })
        .then(success)
        .fail(err);
        
        let success = res =>{
            $("#ajax-msg").html(res);
            console.log('success!: ' + formData);
        };
        
        let err=()=>{console.log('error')};
        
    });
});