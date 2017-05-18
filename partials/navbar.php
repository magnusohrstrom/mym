<nav class="nav" id="nav-bar">

<?php
    if(isset($_SESSION['isAdmin']) && ($_SESSION['isAdmin']==true)){
        echo '<a>Admin</a>';
        }
    else {}
?>


<?php if(isset($_SESSION['login'])): ?>
    <a><?= $_SESSION['username'] ?></a>
    <a class="" id="post-form-a" href="#post-form">Add post</a>
    <a href='../mym/login/logout.php'>Logout</a>


<?php else: ?>
    <a class="" id="sign-up" href="#sign-up-form">Sign up</a>
    <a class="" href="#login-form">Login</a>
<?php endif; ?>
</nav>
