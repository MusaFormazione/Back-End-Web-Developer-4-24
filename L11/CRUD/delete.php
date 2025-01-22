<?php include_once './includes/header.php'; ?>

<?php

if(!isset($_GET['id'])){
    header('Location: index.php');
    exit;
}

$sql = "DELETE FROM pizze WHERE id = :id";

$query = $db->prepare($sql);

$query->bindParam(':id', $_GET['id']);

if($query->execute()) {

    header("Location: index.php?message=Pizza eliminata");

}
//Aggiungere gestione di un'eventuale errore della query 
?>

