$(function(){

    $('#signup').on('click', function(event){
        event.preventDefault();
        //$("#ajax-msg").empty();
        let username = $('#username').val(),
            first = $('#first').val(),
            last = $('#last').val(),
            password = $('#password').val(),
            password2 = $('#confirm_password').val(),
            admin = $('#isAdmin').val(),
            data = {
                        username: username,
                        first: first,
                        last: last,
                        password: password,
                        password2: password2,
                        admin: admin
                   };
        
        $.ajax({
            url: 'login/register.php',
            method: 'post',
            data: data,
            dataType: 'html'
        })
        .done(success)
        .fail(err);
        
        function success(data){
            $('#ajax-msg').html(data);
            console.log(data);
        }
        
        function err(){
            console.log('error');
        }
        return false;
    });
});