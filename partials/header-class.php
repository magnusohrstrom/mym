<?php
include 'error.php';
if(isset($_SESSION['isAdmin']) && ($_SESSION['isAdmin']==true)){
      echo 'class="admin"';
      }
else {

  }