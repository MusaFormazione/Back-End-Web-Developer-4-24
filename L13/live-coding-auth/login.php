<?php 
include './parts/header.php';
include './guards/isGuest.php';
?>

<main class="container">

<h1>Login</h1>

<?php if(isset($_GET['message'])):?>
    <div class="alert alert-success">
        <?=$_GET['message']?>
    </div>
<?php endif;?>

<?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST'):

        $availablePostValues = ['email', 'password'];
        require_once './includes/checkPostFields.php';

        $loginAttempt = login($email, $password);
        if (!$loginAttempt->success): ?>

            <div class="alert alert-danger">
                <?=$loginAttempt->message ?>
            </div>

        <?php 
        endif; 
    endif; ?>

    
    <form method="POST">
        
        <label for="email">Inserisci la tua E-mail</label>
        <input type="email" id="email" required class="form-control" name="email">
        <label for="password">Inserisci la tua password</label>
        <input type="password" id="password" required class="form-control" name="password">
        
        <button class="btn btn-primary mt-3">Accedi</button>
    </form>
    
    <p class="alert alert-info mt-5">Sei già registrato? <a href="login.php">Accedi</a></p>
    
</main>

<?php include './parts/footer.php'?>