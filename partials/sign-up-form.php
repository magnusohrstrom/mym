<form class="sign-up-form col-sm-6" action="../login/register.php" method="post">
    <h3>Sign up</h3>
<!--
    <label for="first-name">First Name</label>
    <input type="text" name="first-name" value="">
    <label for="last-name">Last Name</label>
    <input type="text" name="last-name" value="">
-->
    <label for="username">Username</label>
    <input type="text" name="username" value="">
    <label for="password">Password</label>
    <input type="password" name="password" value="">
    <label for="confirm">Confirm your password</label>
    <input type="password" name="confirm_password" value="">
    <label class="col-sm-2 control-label">Choose Type</label>
    <label for="normal">
        <input type="radio" name="isAdmin" value="false" id="normal" checked="checked">Normal User
    </label>
    <label for="admin">
        <input type="radio" name="isAdmin" value="true" id="admin">Admin
    </label>
    
  <div class="btn-group">
    <button type="submit" class="btn btn-secondary" name="button">Sign up</button>
  </div>
</form>
