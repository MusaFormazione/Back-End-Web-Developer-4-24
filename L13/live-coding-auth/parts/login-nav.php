<div class="col-md-3 text-end">
<?php if(!isLoggedIn()):?>
    <a href="login.php" class="btn btn-outline-primary me-2">Login</a>
    <a href="register.php" class="btn btn-primary">Register</a>
<?php endif;?>
    <a href="logout.php" class="btn btn-danger">Logout</a>
</div>