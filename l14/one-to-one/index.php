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
    
    $sql = "SELECT 
        utenti.nome as nome_utente, utenti.cognome, utenti.email,
        ruoli.nome as nome_ruolo
    FROM 
        utenti
    INNER JOIN
        ruoli ON utenti.role_id = ruoli.id
    ";


    $query = $db->query($sql);

    $righe = $query?->fetchAll(PDO::FETCH_ASSOC);

    if(!$righe) die;

    $nomiCampi = array_keys($righe[0]);

    ?>
    
    <h1>Lista utenti con rispettivi ruoli</h1>

    <table class="table">
        <thead>
            <tr>
                <?php foreach($nomiCampi as $campo): ?>
                    <th><?=$campo?></th>
                    <?php endforeach; ?>
                </tr>
            </thead>
        <tbody>
            <?php foreach($righe as $riga): ?>
                <tr>
                    <?php foreach($riga as $campo): ?>
                        <td><?=$campo?></td>
                    <?php endforeach; ?>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <a href="esempio-select.php">Vai all'altro esempio </a>

</body>
</html>