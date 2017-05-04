<nav class="nav">
    <a class="" href="#">Add post</a>
<?php if(isset($_SESSION['username'])): ?>
    <a class="" href="#"><?= $_SESSION['username'] ?></a>
    <a href='../mym/login/logout.php'>Logout</a>
<?php else: ?>
    <a class="" href="#">Sign up</a>
    <a class="" href="#">Login</a>
<?php endif; ?>
</nav>

