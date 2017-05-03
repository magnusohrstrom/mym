<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    include("database/connection.php");
?>
<!DOCTYPE html>
<html>
    <head>
      <?php include("partials/head.php");?>

    </head>
    <body>
      <!--header-->
        <?php include 'partials/navbar.php';?>
      <!--mainsection-->
      <main>
        <section class="hero">
          <h1>MYM</h1>
          <h2>Social posting!</h2>
        </section>
        <section class="row post-section">
          <article class="col-sm-8">
            <h3>title</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></article>
        </section>
        <section class="row post">
        </section>
        <?php include 'partials/login-form.php'; ?>
        <?php include 'partials/sign-up-form.php'; ?>
        <?php include 'partials/post-form.php';?>
      </main>
    </body>
</html>
