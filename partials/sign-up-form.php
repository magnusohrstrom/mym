<form id="reg" class="sign-up-form col-sm-6" action="../mym/login/register.php" method="post">
    <h3>Sign up</h3>
    <h5><a href="#">Already a user?</a></h5>
    
    <!-- warning for empty form -->
    <?php if(isset($_SESSION['reg_error'])): ?>
    <span class="error-msg">
        <?= $_SESSION['reg_error']; ?>
        <?php unset($_SESSION['reg_error']); ?>
    </span>            
    <?php endif; ?>

    <label for="first">First Name</label>
    <input type="text" id="first" name="first-name" value="">
    <label for="last">Last Name</label>
    <input type="text" id="last" name="last-name" value="">

    <label for="username">Username</label>
    <input type="text" name="username" value="">
    
    <!-- message for exiting username -->
    <?php if(isset($_SESSION['duplication'])): ?>
    <span class="error-msg">
        <?= $_SESSION['duplication']; ?>
        <?php unset($_SESSION['duplication']); ?>
    </span>            
    <?php endif; ?>
    
    <label for="password">Password</label>
    <input type="password" id="password" name="password" value="">
    <label for="confirm">Confirm password</label>
    <input type="password" id="confirm" name="confirm_password" value="">
    
    <!-- message for unmatch password -->
    <?php if(isset($_SESSION['confirm'])): ?>
    <span class="error-msg">
        <?= $_SESSION['confirm']; ?>
        <?php unset($_SESSION['confirm']); ?>
    </span>            
    <?php endif; ?>
    
    <label>Choose User Type</label>
    <label for="normal">Normal User</label>
    <input type="radio" name="isAdmin" value="false" id="normal" checked="checked">
    <label for="admin">Admin</label>
    <input type="radio" name="isAdmin" value="true" id="admin">
    
  <div class="btn-group">
    <button type="submit" class="btn btn-secondary" name="button">Sign up</button>
    <button type="reset" class="btn btn-default">Cancel</button>
  </div>
</form>
