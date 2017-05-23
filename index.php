<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include 'database/connection.php';
include 'database/pdo.php';
include 'likes/Like.php';
include 'comments/Comment.php';
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

        <?php include 'partials/navbar.php';?>
        <div id="nav-icon1">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </header>

      <!--mainsection-->
      <main class= "container">
        <section class="hero col-sm-12">
          <h1>MYM</h1>
          <h2>Social posting!</h2>
          <?php include 'partials/sign-up-form.php'; ?>
          <?php include 'login/loader.php'; ?>
          <?php include 'partials/login-form.php'; ?>

        </section>

        <section class="row post">
        </section>



        <?php include 'partials/post-form.php';
        echo '<h1>Latest posts</h1>';
        include 'likes/getLikesForPost.php';


        //include 'likes/getLikesForPost.php';

        include 'posts/postList.php';
        //include 'partials/getbutton.php';
        //include 'comments/getAllComments.php';
        //include 'partials/magnustest/listAllP.php';
        //include 'likes/insertLike.php';


        ?>

      </main>
      <?php include 'partials/footer.php'; ?>

        <script src="https://code.jquery.com/jquery-3.1.1.min.js"integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="crossorigin="anonymous"></script>
        <script src="scripts/deletePost.js"></script>
        <script src="scripts/main.js" type="text/javascript"></script>
        <script src="scripts/comments.js" type="text/javascript"></script>
        <script src="scripts/likes.js" type="text/javascript"></script>
        <script src="scripts/register.js" type="text/javascript"></script>
        <script src="scripts/login.js" type="text/javascript"></script>
        <script src="scripts/post.js" type="text/javascript"></script>

    </body>
</html>
