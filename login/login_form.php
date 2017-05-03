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
                        <h1>Login</h1>
                        <h5><a href="register_form.php">Create an account</a></h5>
                    </div>
                    <div class="col col-sm-12">
                        <!-- FROM START -->
                        <form action="login.php" method="POST" class="form-horizontal" id="signup_form">

                            <div class="form-group">
                                <label for="username" class="col-sm-2 control-label">Username</label>
                                <div class="col-sm-10">
                                    <input type="text" name="username" id="username" placeholder="Enter username">
                                   <?php 
                                        if($_SESSION['username']):
                                            echo $_SESSION['username'];
                                            unset($_SESSION['username']);
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
                                    <button type="submit" class="btn btn-default">LOGIN</button>
                                    <a href="#">Cancel</a>
                                 </div>
                            </div>

                        </form>
                    </div>
                </div><!-- .row -->
            </div><!--.container-->
            
        </main>

    </boby>
    
</html>