<?php
ini_set('display_errors', '1');
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
    <!--- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Abel|Playfair+Display" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="utf-8">
    <!-- Bootstrap4 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <!-- Own Style -->
    <link rel="stylesheet" type="text/css" href="css/admin.css">
    
    </head>

    <body class="admin-body">
        
    <!-- Modal Start -->
    <div class="modal fade" id="userSearchModal" tabindex="-1" role="dialog" aria-labelledby="userModal" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="userModal">Enter username you search for</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

            <!-- Search Modal : Username -->
            <form action="" method="get">
                <div class="modal-body">
                    <input type="text" name="search-user" placeholder="username">
                </div>
                <div class="modal-footer">
                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-primary">Search</button>
                    </div>
                </div>
            </form>

        </div>
      </div>
    </div>
    <!-- Modal End -->

        <div class="container-fluid">
            <div class="row">
        <!-- header -->
                <div class="col-12 navbar-inverse bg-inverse">
                <header>
                        <nav class="navbar navbar-toggleable-md ">
                            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <a class="navbar-brand" href="#">MYM: Admin</a>
                            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                                <span class="navbar-text">
                                    [ Login Name ]
                                </span>
                                <ul class="navbar-nav mr-auto">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Show all<span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="nav-item dropdown" >
                                        <a class="nav-link dropdown-toggle" id="search-dropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Seach by</a>
                                            <div class="dropdown-menu mym-dropdown" aria-labelledby="search-dropdown">
                                                <a class="dropdown-item mym-dp-item" data-toggle="modal" data-target="#userSearchModal"  href="#">Username</a>
                                                <a class="dropdown-item mym-dp-item" href="#">Date Posted</a>
                                            </div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Back to blog</a>
                                    </li>
                                </ul>
                                
                            </div>
                        </nav>
                </header>
                </div>
    <!-- main -->
                <div class="col-12">
                <main>
                    <?php include 'partials/admin-tables.php'; ?>
                </main>
                </div>
            </div><!-- .row end -->
        </div><!-- .container end -->
        
    <!-- footer -->
        <?php include 'partials/footer.php'; ?>
        
    </body>
</html>


