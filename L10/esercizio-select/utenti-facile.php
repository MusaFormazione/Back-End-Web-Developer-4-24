<?php 
require_once 'connection.php';
include_once './includes/header.php';

$nome = $_GET['nome'] ?? '';

if(!empty($nome)){

    $sql = "SELECT * FROM utenti WHERE nome LIKE '%$nome%'";

}else{
    $sql = "SELECT * FROM utenti";
}

//La variabile query conterrà il risultato della query stessa(quindi i dati ricevuti)
//Attenzione, perché in caso di problemi query potrebbe contenere un dato booleano false
$query = $db->query($sql);

if($query){
    //fetchAll Recupera i dati della query. 
    //Restituirà di default una re associativo, ma è possibile definire Un tipo alternativo di formato dati Attraverso l'utilizzo delle costanti di PDO, già built-in nel linguaggio. 
    //PDO::NOME_COSTANTE
    $rows = $query->fetchAll(PDO::FETCH_ASSOC); 

    $count = count($rows);

    
    ?>

<h1>Lista utenti</h1>

<table class="table">
    <caption>Trovati n°<?=$count?> elementi</caption>
    <thead>
        <tr>
            <th>#</th>
            <th>Nome</th>
            <th>Età</th>
            <th>Città</th>
            <th>Email</th>
        </tr>
    </thead>
    
    <tbody>
        <?php foreach($rows as $utente): 
            [
                'id' => $id, 
                'nome' => $nomeUtente, 
                'eta' => $eta, 
                'citta' => $citta, 
                'email' => $email
            ] = $utente;
            ?>
                <tr>
                    <td><?=$id?></td>
                    <td><?=$nomeUtente?></td>
                    <td><?=$eta?></td>
                    <td><?=$citta?></td>
                    <td><?=$email?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>

    </table>

    <div class="container">
        <div class="row">
            <div class="col">

                <form>

                    <input type="text" value="<?=$nome?>" name="nome" placeholder="Cerca utenti per nome" class="form-control">
                    <button class="btn btn-primary">Cerca</button>

                </form>

            </div>
        </div>
    </div>

    <?php

}

