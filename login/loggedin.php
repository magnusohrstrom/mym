<?php
session_start();

if($_SESSION['status']){
   echo "Welcome " . $_SESSION['username'] . " You are logged in!";   
}


echo "<p><a href='logout.php'>logout</a></p>";