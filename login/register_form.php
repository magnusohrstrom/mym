<?php 
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <boby>
        <header>

        </header>
        <main>
            <div class="container">
                <div class="row">
                    <div class="col col-sm-12">
                        <h1>Register</h1>
                        <h5><a href="login_form.php">login</a></h5>
                        <?php 
                            if($_SESSION['error']):
                                echo $_SESSION['error'];
                                unset($_SESSION['error']);
                            endif; 
                        ?>
                    </div>
                    <div class="col col-sm-12">
                        <form action="register.php" method="POST" class="form-horizontal" id="signup_form">

                            <div class="form-group">
                                <label for="username" class="col-sm-2 control-label">Username</label>
                                <div class="col-sm-10">
                                    <input type="text" name="username" id="username" placeholder="Enter username">
                                    <?php 
                                        if($_SESSION['duplication']):
                                            echo $_SESSION['duplication'];
                                            unset($_SESSION['duplication']);
                                        endif; 
                                    ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password" class="col-sm-2 control-label">Password</label>
                                <div class="col-sm-10">
                                    <input type="password" name="password" id="password" placeholder="Enter password">
                                    
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="confirm" class="col-sm-2 control-label">Confirm your password</label>
                                <div class="col-sm-10">
                                    <input type="password" name="confirm_password" id="confirm" placeholder="confirm password">
                                    <?php 
                                        if($_SESSION['confirm']):
                                            echo $_SESSION['confirm'];
                                            unset($_SESSION['confirm']);
                                        endif; 
                                    ?>

                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Choose</label>
                                <label for="normal" class="col-sm-2 radio-inline">
                                    <input type="radio" name="isAdmin" value="false" id="normal" checked="checked">Normal User
                                </label>
                                <label for="admin" class="col-sm-2 radio-inline">
                                    <input type="radio" name="isAdmin" value="true" id="admin">Admin
                                </label>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <div class="checkbox">
                                    <label>
                                      <input type="checkbox"> Remember me
                                    </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-default">SING UP</button>
                                    <a href="#">Cancel</a>
                                 </div>
                            </div>

                        </form>
                    </div>
                </div><!-- .row -->
            </div><!--.container-->
            
        </main>
        <?php 

        ?>
    </boby>
    
</html>