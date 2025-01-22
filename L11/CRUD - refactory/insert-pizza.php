<?php
include_once './includes/header.php';

//ottengo i valori

//Potrai definire le variabili alla classica maniera. 
// $gusto = $_POST['gusto'] ?? '';
// $prezzo = $_POST['prezzo'] ?? '';
// $disponiblita = $_POST['disponiblita'] ?? '';

//In questo esercizio, però, andiamo ad utilizzare un esempio differente, più automatico 

try{
    
    
    //Il primo passo è definire un array con le chiavi che la nostra Query di inserimento accetta. 
    $availablePostValues = ['gusto','prezzo','disponibilita'];
    //Spostati nel file incluso per vedere il resto. 
    //Abbiamo spostato questa parte all'interno del file Incluso per permettere la riutilizzabilità del codice. 
    include __DIR__ . '/includes/checkPostFields.php';
    
}catch(Exception $e){
    echo $e->getMessage();
    exit;
}

//scrivo la query

try{
    
    
    $sql = "INSERT INTO pizze (gusto, prezzo, disponibilita) VALUES (:gusto, :prezzo, :disponibilita)";
    
    //preparo la query
    $query = $db->prepare($sql);
    
    //sostituisco i parmetri
    
    $query->bindParam(':gusto',$gusto, PDO::PARAM_STR);
    $query->bindParam(':prezzo',$prezzo, PDO::PARAM_INT);
    $query->bindParam(':disponibilita',$disponibilita, PDO::PARAM_BOOL);
    
    //eseguo la query
    
    if($query->execute()){ 
        //mostro messaggio di successo
        ?>

<h2>Pizza creata!</h2>
<ul>
    <li>Gusto: <?=$gusto?></li>
    <li>Prezzo: <?=$prezzo?> €</li>
    <li>Disponibile: <?=$disponibilita == 1 ? 'Si' : 'No'?></li>
</ul>

<?php } else {
    //Messaggio di errore, se la query se la query ha problemi 
    echo $query->errorInfo();
}

}catch(PDOException $e){
    //Gestisco eccezioni lanciate da PDO. 
    echo "Error: ".$e->getMessage();
}

//permetto all'utente di tornare indietro
?>

<a class="btn btn-primary" href="add-pizza.php"> << Torna alla pagina di creazione pizze</a> 
<a class="btn btn-primary" href="index.php"> << Torna alla Home</a>

<?php include_once './includes/footer.php';