<?php 
include './parts/header.php';
require_once './includes/auth-functions.php';
?>

<main class="container">

    
    <form action="" method="">
        
        <label for="email">Inserisci la tua E-mail</label>
        <input type="email" id="email" required class="form-control" name="email">
        <label for="password">Inserisci la tua password</label>
        <input type="password" id="password" required class="form-control" name="password">
        
        <button class="btn btn-primary mt-3">Accedi</button>
    </form>
    
    <p class="alert alert-info mt-5">Sei già registrato? <a href="login.php">Accedi</a></p>
    
</main>

<?php include './parts/footer.php'?>