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
            ordini.id as id_ordine,  
            utenti.id, utenti.nome, utenti.cognome, utenti.email,
            ordini.data
        FROM 
            ordini
        RIGHT JOIN
            utenti ON utenti.id = ordini.user_id
        ";

        $query = $db->query($sql);

        $ordini = $query?->fetchAll(PDO::FETCH_ASSOC);

        if(!$ordini) die;

        $nomiCampi = array_keys($ordini[0]);
    ?>

<h1>Lista ordini</h1>

<table class="table">
    <thead>
        <tr>
            <?php foreach($nomiCampi as $campo): ?>
                <th><?=$campo?></th>
                <?php endforeach; ?>
            </tr>
        </thead>
    <tbody>
        <?php foreach($ordini as $ordine): ?>
            <tr>
                <?php foreach($ordine as $campo): ?>
                    <td><?=$campo?></td>
                <?php endforeach; ?>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php
$luisaID = 3;
$ordiniLuisa = array_filter($ordini, function($ordine){ 
    global $luisaID;
    return $luisaID === $ordine['id'];
});
?>

<h1>Ordini di Luisa Verdi</h1>
<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>data</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($ordiniLuisa as $ordine): ?>
            <tr>
                <td><?=$ordine['id_ordine']?></td>
                <td><?=$ordine['data']?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
    
</body>
</html>