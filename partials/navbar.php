<nav class="nav">
<?php
    if(isset($_SESSION['isAdmin']) && ($_SESSION['isAdmin']===1)){
        echo '<a>Admin</a>';
        }
    else {}
?>
<a class="" href="#">Add post</a>

<?php if(isset($_SESSION['login'])): ?>
    <a><?= $_SESSION['username'] ?></a>
    <a href='../mym/login/logout.php'>Logout</a>

<?php else: ?>
    <a class="" href="#">Sign up</a>
    <a class="" href="#">Login</a>
<?php endif; ?>
</nav>