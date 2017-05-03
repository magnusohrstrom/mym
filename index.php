<?php
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
      <header class="">
        <a class="header-title" href="index.php">MYM</a>
        <nav class="navbar navbar-toggleable-md navbar-light">
          <a href="#">Log in</a>
          <a href="#">Add new post</a>
          <a href="#">Sign up</a>
        </nav>
      </header>

      <!--mainsection-->
      <main class="container">
        <section class="hero">
          <h1>MYM</h1>
          <h2>Social posting!</h2>
        </section>
        <section class="row post">
        </section>
        <section class="row post">
        </section>
        <?php include 'partials/login-form.php'; ?>
        <?php include 'partials/sign-up-form.php'; ?>
        <?php include 'partials/post-form.php'; ?>
      </main>
    </body>
</html>
