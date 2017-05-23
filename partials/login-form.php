<?php

if (isset($_SESSION['username'])!==true) {

  echo '<form id="login-form" class="login-form col-sm-6" method="post">
          <h3>Login</h3>
        
          <!-- error message -->
          <div class="error-msg" id="err-msg"></div>

          <label for="username">Username</label>
          <input type="text" id="login-username" name="username" value="">

          <label for="password">Password</label>
          <input type="password" id="login-password" name="password" value="">

          <div class="login-button-container" role="group" aria-label="Basic example">
              <button type="submit" class="">Login</button>
              <button type="reset" class="">Cancel</button>
          </div>
      </form>';

}
