<?php
  session_start();
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html>
    <head>
      <?php include("partials/head.php");?>
    </head>
    <body>
      <!--header-->
      <header <?php include 'partials/header-class.php'; ?>>
        <a id="nav-title" href="../index.php">MYM</a>
          <nav class="nav" id="navbar">
        <?php include 'partials/navbar.php';?>
          </nav>
      </header>

      <!--mainsection-->
      <main class= "container">
        <section class="hero">
          <h1>MYM</h1>
          <h2>Social posting!</h2>
        <?php include_once 'partials/login-form.php'; ?>

        </section>
        <section class=" col-sm-6 post-section">
          <article class="">
            <h3>title</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></article>
            <?php
            include 'partials/like-form.php';
            include 'partials/comment-form.php';
            ?>
        </section>
        <section class="row post">
        </section>

        <?php include_once 'partials/sign-up-form.php'; ?>

        <?php include 'partials/post-form.php';
        //include 'likes/getLikesForPost.php';
        //include 'posts/postList.php';
        //include 'partials/getbutton.php';
        //include 'comments/getAllComments.php';
        //include 'partials/magnustest/listAllP.php';

        ?>

      </main>
      <?php include 'partials/footer.php'; ?>

      <script src="https://code.jquery.com/jquery-3.1.1.min.js"integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="crossorigin="anonymous"></script>
      <script src="scripts/main.js" type="text/javascript"></script>
      <script src="scripts/comments.js" type="text/javascript"></script>
      <script src="scripts/likes.js" type="text/javascript"></script><script src="scripts/register.js" type="text/javascript"></script>

    </body>
</html>
