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
            ordini.id AS order_id,
            utenti.nome AS nome_utente,
            prodotti.nome AS nome_prodotto,
            ordini_prodotti.quantity,
            prodotti.prezzo,
            ordini.data
        FROM
            utenti 
        INNER JOIN
            ordini ON utenti.id = ordini.user_id
        INNER JOIN
            ordini_prodotti ON ordini.id = ordini_prodotti.order_id
        INNER JOIN
            prodotti ON prodotti.id = ordini_prodotti.product_id
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
    
<h1>Ordine n°4</h1>
<?php

    $ordine4 = array_filter($ordini, function($ordine){
        return $ordine['order_id'] === 4;
    });

    // var_dump($ordine4);

?>

<table class="table">
    <thead>
        <tr>
            <th>nome prodotto</th>
            <th>quantità</th>
            <th>totale</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        
        $total = array_reduce($ordine4, function($acc, $el){
            return $acc + ($el['prezzo'] * $el['quantity']);
        },0);

        foreach($ordine4 as $prodotto):
            $subTotal = $prodotto['quantity'] * $prodotto['prezzo'];
            ?>
            <tr>
                <td><?=$prodotto['nome_prodotto']?></td>
                <td>x <?=$prodotto['quantity']?></td>
                <td><?=$subTotal?>€</td>
            </tr>
        <?php endforeach;?>
    </tbody>
    <tfoot>
        <td colspan="2"><b>Totale ordine:</b></td>
        <td><?=$total?>€</td>
    </tfoot>
</table>
</body>
</html>