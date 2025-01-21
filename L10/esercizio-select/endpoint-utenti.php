<?php 
require_once 'connection.php';
//Specifico al browser che sto restituendo una risposta in formato json e non il consueto HTML. 
header('Content-Type: application/json');
//Dichiaro che le chiamate a questo endpoint possono pervenire provenire da qualunque dominio 
header('Access-Control-Allow-Origin: *'); // Cambia * con il dominio permesso per maggiore sicurezza
//Definisco quali metodi sono accettati per le chiamate a questa pagina 
header('Access-Control-Allow-Methods: GET');
//Il frontend può richiedere un formato contentype 
header('Access-Control-Allow-Headers: Content-Type');

$nome = $_GET['nome'] ?? '';

if(!empty($nome)){

    $sql = "SELECT * FROM utenti WHERE nome LIKE '%$nome%'";

}else{
    $sql = "SELECT * FROM utenti";
}

$query = $db->query($sql);

if($query){
   
    $rows = $query->fetchAll(PDO::FETCH_ASSOC); 
    echo json_encode($rows);
}

//gestisci eventuali errori con 
// http_response_code(500);