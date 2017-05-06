<?php

  include 'database/connection.php';

  $st = new connection();

  $st->$pdo->prepare('SELECT * FROM mym');

  $st->execute();
  $post = $st->fetchAll();

  var_dump($post);


 ?>
