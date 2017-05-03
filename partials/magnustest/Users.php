<?php

  include 'database/connection.php';

  class User {
    private $pdo;
    public function __construct($pdo,$userId, $username, $password, $isAdmin)
      {
        $this->pdo = $pdo;
        $this->userId = $userId;
        $this->username = $username;
        $this->password = $password;
        $this->isAdmin = $isAdmin;
      }
    public function getAllUsers()
      {
        $st = $this->pdo->prepare("SELECT userId FROM user");
        $st->execute();
        $all = $st->fetchAll(PDO::FETCH_ASSOC);
        var_dump($all);
      }
    public function addNewUser(){
      $st = $this->pdo->prepare("INSERT INTO user (userId, username, password, isAdmin) VALUES (NULL, :username, :password, :isAdmin)");
      $st->execute([
        ":username" => $this->username,
        ":password" => $this->password,
        ":isAdmin" => $this->isAdmin
      ]);
    }
  }
 ?>
