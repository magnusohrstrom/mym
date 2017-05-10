$(function(){

    $('#login-form').submit(function(event){
        event.preventDefault();
        $("#err-msg").empty();
        let name = $('#login-username').val(),
            pass = $('#login-password').val();

        //let formData = $(this).serialize();
        let loginData = {
            username: name,
            password: pass
        };
        
        $.ajax({
            url: 'login/login.php',
            method: 'post',
            data: loginData
        })
        .then(success)
        .fail(err);
        
        function success(res){
            console.log('success!');
            if(res){
                $('#err-msg').html(res);
                console.log('check error message on page');
                return $.Deferred().reject().promise();
            };
        };
        
        function err(){
            console.log('ERROR: Data cannot be sent');
        }
        
    });
});