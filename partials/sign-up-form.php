<form class="sign-up-form col-sm-6" method="post">
    <h3>Sign up</h3>
    <h5><a href="#">Already a user?</a></h5>

    <div id="ajax-msg" class="error-msg"></div>
    
    <label for="first">First Name</label>
    <input type="text" id="first" name="first-name" value="">
    <label for="last">Last Name</label>
    <input type="text" id="last" name="last-name" value="">

    <label for="username">Username</label>
    <input type="text" id="username" name="username" value="">
    
    
    <label for="password">Password</label>
    <input type="password" id="password" name="password" value="">
    <label for="confirm">Confirm password</label>
    <input type="password" id="confirm" name="confirm_password" value="">
    
    <label>Choose User Type</label>
    <label for="normal">Normal User</label>
    <input type="radio" name="isAdmin" value="false" id="normal" checked="checked">
    <label for="admin">Admin</label>
    <input type="radio" name="isAdmin" value="true" id="isAdmin">
        
  <div class="btn-group">
    <button type="submit" id="signup" class="btn btn-secondary">Sign up</button>
    <button type="reset" class="btn btn-default">Cancel</button>
  </div>
</form>
