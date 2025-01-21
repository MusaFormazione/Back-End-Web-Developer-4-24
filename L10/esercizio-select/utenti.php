<?php 
require_once 'connection.php';
include_once './includes/header.php';

$nome = $_GET['nome'] ?? '';

if(!empty($nome)){

    $sql = "SELECT * FROM utenti WHERE nome LIKE '%$nome%";
    // $sql = "SELECT * FROM utenti WHERE nome LIKE '%$nome%' LIMIT 1";

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

    $keys = $count > 0 ? array_keys($rows[0]) : [];

    ?>

    <h1>Lista utenti</h1>

    <table class="table">
        <caption>Trovati n°<?=$count?> elementi</caption>
        <thead>
            <tr>
                <?php foreach($keys as $key):?>
                    <td><?=$key?></td>
                <?php endforeach;?>
            </tr>
        </thead>

        <tbody>
            <?php foreach($rows as $utente): ?>
                <tr>
                    <?php foreach($utente as $dato): ?>
                        <td><?=$dato?></td>
                    <?php endforeach; ?>
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

