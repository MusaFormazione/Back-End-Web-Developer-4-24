<?php

const HOSTNAME = 'localhost';//Dove si trova il database
const DB_NAME = 'test_connessione';//Nome del database 
const DB_USER = 'Michele';//Nome dell'utente MySQL che accede al database 
const DB_PASSWORD = 'password';//Password dell'utente MySQL che accede al database. 
const DSN = 'mysql:host=' . HOSTNAME . ';dbname=' . DB_NAME . ';';

try{    
    
    $db = new PDO(DSN,DB_USER, DB_PASSWORD );

}catch(PDOException $e){
    echo "Error: " . $e->getMessage();
}
