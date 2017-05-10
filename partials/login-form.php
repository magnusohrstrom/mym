<form id="login-form" class="login-form col-sm-6" method="post">
    <h3>Log in</h3>
    <h5><a href="#">Don't have an account?</a></h5>
    <!-- error message -->
    <div class="err-msg" id="err-msg"></div>
    
    
    <label for="username">Username</label>
    <input type="text" id="login-username" name="username" value="">
    
    <label for="password">Password</label>
    <input type="password" id="login-password" name="password" value="">
    
    <div class="btn-group" role="group" aria-label="Basic example">
        <button type="submit" class="btn btn-secondary">Log in</button>
        <button type="reset" class="btn btn-default">Cancel</button>
    </div>
</form>
