<nav class="nav">
  <?php
  if($_SESSION['isAdmin']){
        echo '<a>Admin</a>';
        }
  else {}?>
    <a class="" href="#">Add post</a>
<?php if(isset($_SESSION['username'])): ?>
    <?php if(isset($_SESSION['admin'])) : ?>
        <a class="menu-admin" href="#"><?= $_SESSION['username'] ?></a>
    <?php else:?>
        <a><?= $_SESSION['username'] ?></a>
    <?php endif; ?>
    <a href='../mym/login/logout.php'>Logout</a>
<?php else: ?>
    <a class="" href="#">Sign up</a>
    <a class="" href="#">Login</a>
<?php endif; ?>
</nav>
