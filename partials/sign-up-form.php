<form id="sign-up-form" class="sign-up-form col-sm-6" method="post">
    <h3>Sign up</h3>

    <div id="ajax-msg" class="error-msg"></div>

    <label for="first">First Name</label>
    <input type="text" id="first" name="first-name">
    <label for="last">Last Name</label>
    <input type="text" id="last" name="last-name">

    <label for="username">Username</label>
    <input type="text" id="username" name="username">


    <label for="password">Password</label>
    <input type="password" id="password" name="password">
    <label for="confirm">Confirm password</label>
    <input type="password" id="confirm_password" name="confirm_password">


    <label for="normal">Normal User</label>
    <input type="radio" id="normal" name="isAdmin" value="0" checked>
    <label for="admin">Admin</label>
    <input type="radio" id="admin" name="isAdmin" value="1">

  <div class="btn-group">
    <button type="submit" class="">Sign up</button>
    <button type="reset" class="">Cancel</button>
  </div>
</form>
