$(function(){

    
    $('#signup-form').submit(function(event){   
        event.preventDefault();
        $("#ajax-msg").empty();
            let username = $('#username').val(),
                first = $('#first').val(),
                last = $('#last').val(),
                password = $('#password').val(),
                password2 = $('#confirm_password').val(),
                admin = $('input[name=isAdmin]:checked').val();
        
        if(username ==="" || password==="" || password2===""){
            $('#ajax-msg').html('please fill in the form');
        } else if (password !== password2){
            $('#ajax-msg').html('please confirm password again');
        } else {
            let data = {
                        username: username,
                        first: first,
                        last: last,
                        password: password,
                        password2: password2,
                        isAdmin: admin
                        };
            $.ajax({
                url: 'login/register.php',
                method: 'post',
                data: data,
                dataType: 'html'
            })
            .then(success)
            .then(reload)
            .fail(err);
            
            function success(res){
                console.log('success!: ');
                if(res!==""){
                    $('#ajax-msg').html(res);
                    return $.Deferred().reject().promise();
                };
            };
            
            function reload(){
                console.log('reload!');
                location.reload();
            };
            
            function err(){
                console.log('error')
            };
        }
            
    });
});