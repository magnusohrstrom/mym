$(function(){
    
    let name = $('#username'),
        firstname = $('#first'),
        lastname = $('#last'),
        pass1 = $('#password'),
        pass2 = $('#confirm_password'),
        admincheck = $('input[name=isAdmin]:checked'),
        message = $('#ajax-msg');
    
    //--- Ajax functions ----
    let success = res =>{
        console.log('success!');
        if(res!==""){
            message.html(res);
            return $.Deferred().reject().promise();
        };
    };
    
    let loader =()=>{
        let h = $(window).height();
        $('#loader-bg,.loader, .loader-text').height(h).css('display','block');
        setTimeout(function(){location.reload()}, 1500);
    };
    
    let err = ()=>{console.log('error')};
    //-----------------------
    
    $('#sign-up-form').on('submit', function(event){   
        event.preventDefault();
        message.empty();
            let username = name.val(),
                first = firstname.val(),
                last = lastname.val(),
                password = pass1.val(),
                password2 = pass2.val(),
                admin = admincheck.val();
        
        if(username ==="" || password==="" || password2===""){
            message.html('please fill in the form');
        } else if (password !== password2){
            message.html('please confirm password again');
        } else {
            let regData = {
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
                data: regData,
                dataType: 'html'
            })
            .then(success)
            .then(loader)
            .fail(err);
        }    
    });
});