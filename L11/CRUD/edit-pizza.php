<?php include_once './includes/header.php'; ?>

<?php

if(!isset($_GET['id'])){
    header('Location: index.php');
    exit;
}

$sql = "SELECT * FROM pizze WHERE id = " . $_GET['id'];

$query = $db->prepare($sql);

//Potrei eseguire la query direttamente facendo il binding dei parametri con execute. 
// $query->execute([':id' => $id]);

// $query->bindParam(':id',$id, PDO::PARAM_INT);

//Se è la query per qualche motivo non avesse successo 
if(!$query->execute())
throw new Exception($query->errorInfo());//Lancia un'eccezione che mostrerà l'errore bloccherà l'esecuzione del resto dello script. 


$rows = $query->fetchAll(PDO::FETCH_ASSOC);

[
    'gusto' => $gusto,
    'prezzo' => $prezzo,
    'disponibilita' => $disponibilita
] = $rows[0];


?>

<main class="container">
    <h1>Modifica pizza</h1>

    <form action="update-pizza.php" method="POST">

        <label for="gusto">Gusto</label>
        <input type="text" value="<?=$gusto?>" name="gusto" id="gusto" class="form-control" placeholder="gusto">

        <label for="prezzo">Prezzo</label>
        <input type="number" value="<?=$prezzo?>" name="prezzo" id="prezzo" class="form-control" placeholder="prezzo">

        <label for="disponibilita">Disponibile</label>
        <select name="disponibilita" value="<?=$disponibilita?>" id="disponibilita" class="form-control">
            <option value="1">Si</option>
            <option value="0">No</option>
        </select>

        <button class="mt-3 btn btn-primary">Salva</button>
    </form>

</main>

<?php include_once './includes/footer.php'; ?>