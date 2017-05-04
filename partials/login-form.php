<?php
session_start();
?>

<form class="login-form col-sm-6" action="../login/login.php" method="post">
    <h3>Log in</h3>
    <h5><a href="sign-up-form.php">Don't have an account?</a></h5>
    <label for="username">Username</label>
    <input type="text" name="username" value="" placeholder="Enter username">
    
    <!-- error message for wrong username -->
    <?php if($_SESSION['name_error']): ?>
    <span class="error-msg">
        <?= $_SESSION['name_error']; ?>
        <?php unset($_SESSION['name_error']); ?>
    </span>
    <?php endif; ?>
    
    
    <label for="password">Password</label>
    <input type="text" name="password" value="" placeholder="Enter password">
    
    <!-- error message for wrong password -->
    <?php if($_SESSION['pass_error']): ?>
    <span class="error-msg">
        <?= $_SESSION['pass_error']; ?>
        <?php unset($_SESSION['pass_error']); ?>
    </span>
    <?php endif; ?>
    
    
    <div class="btn-group" role="group" aria-label="Basic example">
        <button type="submit" class="btn btn-secondary">Log in</button>
        <button type="reset" class="btn btn-default">Cancel</button>
    </div>
</form>
