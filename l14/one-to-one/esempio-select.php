<?php require_once 'connection.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

    <?php
    
    //Per evitare errori di inserimento vado a recuperare dal database tutti i ruoli disponibili. 
    $sql = "SELECT * FROM ruoli";

    $query = $db->query($sql);

    $ruoli = $query?->fetchAll(PDO::FETCH_ASSOC);

    if(!$ruoli) die;//Se non ci sono ruoli blocca l'esecuzione dello script. 

    ?>
    
    <h1>Aggiungi nuovo utente</h1>

    <form method="POST">

        <input type="text" name="nome_utente" placeholder="Nome" class="form-control">
        <input type="text" name="cognome" placeholder="Cognome" class="form-control">
        <input type="email" name="email" placeholder="Email" class="form-control">

        <!-- In questo caso l'utilizzo di una lista di opzioni fisse è necessario per evitare errori di inserimento e per mantenere le interfacce allineate ai dati presenti in database  -->
        <select name="nome_ruolo" class="form-control"> 
            <?php foreach($ruoli as $ruolo):?>
                <option value="<?=$ruolo['id']?>"><?=ucfirst($ruolo['nome'])?></option>
            <?php endforeach;?>
        </select>

        <button class="btn btn-primary">Crea</button>

    </form>

    <?php
    
     if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $sql = 'INSERT INTO utenti(nome, cognome, email, role_id) VALUES (:nome, :cognome, :email, :role_id )';

        $query = $db->prepare($sql);
    

        $query->bindParam(':nome',$_POST['nome_utente'], PDO::PARAM_STR);
        $query->bindParam(':cognome',$_POST['cognome'], PDO::PARAM_STR);
        $query->bindParam(':email',$_POST['email'], PDO::PARAM_STR);
        $query->bindParam(':role_id',$_POST['nome_ruolo'], PDO::PARAM_STR);

        if($query->execute()){
            echo 'Utente inserito';
        }else{
            $query->errorInfo();
        }

     }
    
    ?>

   
</body>
</html>