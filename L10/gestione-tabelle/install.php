<?php
require_once 'connection.php';

$sql = "CREATE TABLE IF NOT EXISTS prodotti(
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    prezzo DECIMAL(10,2) NOT NULL,
    quantita INT DEFAULT 0,
    descrizione TEXT
)";


$query = $db->query($sql);

if($query){
    echo "Installazione avvenuta";
}