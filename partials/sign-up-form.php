<?php 
#Detta ska tas bort när man sätter ihop i index.php
session_start();
?>

<form class="sign-up-form col-sm-6" action="../login/register.php" method="post">
    <h3>Sign up</h3>
    <h5><a href="login-form.php">Already a user?</a></h5>
    
    <!-- warning for empty form -->
    <?php if($_SESSION['reg_error']): ?>
    <span class="error-msg">
        <?= $_SESSION['reg_error']; ?>
        <?php unset($_SESSION['reg_error']); ?>
    </span>            
    <?php endif; ?>

    <label for="first">First Name</label>
    <input type="text" id="first" name="first-name" value="" placeholder="First name">
    <label for="last">Last Name</label>
    <input type="text" id="last" name="last-name" value="" placeholder="Last name">

    <label for="username">Username</label>
    <input type="text" name="username" value="" placeholder="Enter username">
    
    <!-- message for exiting username -->
    <?php if($_SESSION['duplication']): ?>
    <span class="error-msg">
        <?= $_SESSION['duplication']; ?>
        <?php unset($_SESSION['duplication']); ?>
    </span>            
    <?php endif; ?>
    
    <label for="password">Password</label>
    <input type="password" id="password" name="password" value="" placeholder="Enter password">
    <label for="confirm">Confirm password</label>
    <input type="password" id="confirm" name="confirm_password" value="" placeholder="Confirm password">
    
    <!-- message for unmatch password -->
    <?php if($_SESSION['confirm']): ?>
    <span class="error-msg">
        <?= $_SESSION['confirm']; ?>
        <?php unset($_SESSION['confirm']); ?>
    </span>            
    <?php endif; ?>
    
    <label>Choose Type</label>
    <label for="normal">
        <input type="radio" name="isAdmin" value="false" id="normal" checked="checked">Normal User
    </label>
    <label for="admin">
        <input type="radio" name="isAdmin" value="true" id="admin">Admin
    </label>
  <div class="btn-group">
    <button type="submit" class="btn btn-secondary" name="button">Sign up</button>
    <button type="reset" class="btn btn-default">Cancel</button>
  </div>
</form>
