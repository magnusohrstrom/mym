$(function(){
    
    let username = $('#login-username'),
        password = $('#login-password'),
        error = $("#err-msg");
    
    //--- Ajax functions ----
    let success = (res)=>{
        console.log('success!');
        if(res){
            error.html(res);
            console.log('check error message on page');
            return $.Deferred().reject().promise();
        };
    };
    let loader =()=>{
        let h = $(window).height();
        $('#loader-bg,.loader, .loader-text').height(h).css('display','block');
        setTimeout(function(){location.reload()}, 1500);
    };

    let err=()=>{
        console.log('ERROR: Data cannot be sent');
    };
    //-----------------------
    
    $('#login-form').submit(function(event){
        event.preventDefault();
        error.empty();
        let name = username.val(),
            pass = password.val();
        
        if( name ==="" && pass ==="" ){
            error.html('please fill in the form');
        }else{
            //let formData = $(this).serialize();
            let loginData = {
                                username: name,
                                password: pass
                            };
            
            $.ajax({
                url: 'login/login.php',
                method: 'post',
                data: loginData,
                dataType: 'html'
            })
            .then(success)
            .then(loader)
            .fail(err);
        }
    });
});