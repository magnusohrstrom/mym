<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
    <!--- Replacing this bit with external file later -->
    <link href="https://fonts.googleapis.com/css?family=Abel|Playfair+Display" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <meta charset="utf-8">
    
    </head>

    <body>

        <div class="container">
            <div class="row">
        <!-- header -->
                <div class="col-xs-12 col-sm-4">
                    <header>
                        <h3 id="admin-nav-title" href="#">Admin: MYM</h3>
                            <nav>
                                <ul>
                                    <li>All list</li>
                                    <li>Seach
                                        <ul>
                                            <li>User Name</li>
                                            <li>Date</li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                    </header>
                </div>
        <!-- main -->
                <div class="col-xs-12 col-sm-8">
                    <main>
                        <p>test test test</p>
                    </main>
                </div>
            </div><!-- .row -->
        </div><!-- .container -->
        
        <!-- footer -->
        <?php include 'footer.php'; ?>
        
    </body>
</html>


