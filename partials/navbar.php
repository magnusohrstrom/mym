<nav class="nav">
    <a class="" href="#">Add post</a>
<?php if(isset($_SESSION['username'])): ?>
    <?php if($_SESSION['admin']) : ?>
        <a class="menu-admin"><?= $_SESSION['username'] ?></a>
    <?php else:?>
        <a><?= $_SESSION['username'] ?></a>
    <?php endif; ?>
    <a href='../mym/login/logout.php'>Logout</a>
<?php else: ?>
    <a class="" href="#">Sign up</a>
    <a class="" href="#">Login</a>
<?php endif; ?>
</nav>