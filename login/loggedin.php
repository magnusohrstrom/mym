<?php
session_start();

if(isset($_SESSION['status'])){
   echo "Welcome " . $_SESSION['username'] . " " . $_SESSION['status'];   
}


echo "<p><a href='logout.php'>logout</a></p>";
