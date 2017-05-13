$(function(){
    let error = $("#err-msg");
    
    //--- Ajax functions ----
    let success = (res)=>{
        console.log('success!');
        if(res){
            error.html(res);
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
        let name = $('#login-username').val(),
            pass = $('#login-password').val();

        if( name ==="" && pass ==="" ){
            error.html('please fill in the form');
        }else{
            let formData = $(this).serialize();
            $.ajax({
                url: 'login/login.php',
                method: 'post',
                data: formData,
                dataType: 'html'
            })
            .then(success)
            .then(loader)
            .fail(err);
        }
    });
});