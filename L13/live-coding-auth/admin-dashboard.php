<?php 
include './parts/header.php';
include './guards/isAdmin.php';
?>

<main class="container">

    <h1>Welcome Admin</h1>
<ul>
    <li><a href="?page=add-user">Aggiungi utente</a></li>
    <li><a href="?page=profile">Profile</a></li>
</ul>


    <?php 
        if(!isset($_GET['page'])){
            $_GET['page'] = 'profile';
        }

            if($_GET['page'] == 'add-user'){
                include './admin-routes/add-user.php';
            }
            
            if($_GET['page'] == 'profile'){
                include './admin-routes/profile.php';
            }

    ?>


</main>
<?php include './parts/footer.php'?>