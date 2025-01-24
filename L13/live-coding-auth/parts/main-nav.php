<ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
    <li><a href="index.php" class="nav-link px-2 link-secondary">Home</a></li>
  
    <?php if(isLoggedIn()):?>
    <li><a href="dashboard.php" class="nav-link px-2">Dashboard</a></li>
    <?php endif;?>
    <li><a href="admin-dashboard.php" class="nav-link px-2">Admin dashboard</a></li>
</ul>