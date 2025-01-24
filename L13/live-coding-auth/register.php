<?php
include './parts/header.php';
?>
<main class="container">

<h1>Register</h1>
    <?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST'):

        $availablePostValues = ['nome', 'email', 'password'];
        require_once './includes/checkPostFields.php';

        $registerAttempt = register($nome, $email, $password);
        if (!$registerAttempt->success): ?>

            <div class="alert alert-danger">
                <?=$registerAttempt->message ?>
            </div>

        <?php 
        endif; 
    endif; ?>

    <form method="POST">

        <label for="nome">Inserisci il tuo nome</label>
        <input type="text" id="nome" required class="form-control" name="nome">
        <label for="email">Inserisci la tua E-mail</label>
        <input type="email" id="email" required class="form-control" name="email">
        <label for="password">Inserisci la tua password</label>
        <input type="password" id="password" required class="form-control" name="password">

        <button class="btn btn-primary mt-3">Registrati</button>
    </form>

    <p class="alert alert-info mt-5">Sei già registrato? <a href="login.php">Accedi</a></p>
</main>


<?php include './parts/footer.php' ?>