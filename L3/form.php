<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<!-- 
action => Il programma verso cui spostare l'utente, che dovrà elaborare i dati inviati. Se la Action è mancante, i dati vengono inviati alla pagina corrente che verrà ricaricata . 
method => Il metodo di invio dei dati. Sei mancante si da per scontato che sia get. 
-->
    <form action="form.php?test=1" method="POST">

        <input type="email" name="email" placeholder="scrivi la tua email">

        <button>Invia</button>
    </form>

    <a href="form.php?nome=michele&verifica_email=1">Verifica la tua email</a>

    <p>

        <?php
        echo '<pre>';
        echo 'get: <br>';
        //Qui leggo tutti i valori ricevuti via get. 
        var_dump($_GET);
        
        echo 'post: <br>';
        //Qui leggo tutti i valori ricevuti via post. 
        var_dump($_POST);
        echo '</pre>';
        
        ?>

    </p>
</body>
</html>