<?php
include 'error.php';
if(isset($_SESSION['isAdmin']) && ($_SESSION['isAdmin']===1)){
      echo 'class="admin"';
      }
else {

  }