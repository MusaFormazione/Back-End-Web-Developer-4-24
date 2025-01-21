<?php

try{

    $hostName = 'localhost';
    $dbName = 'esercizisql';
    $user = 'Michele';
    $password = 'password';

    $db = new PDO("mysql:host=$hostName;dbname=$dbName;", $user, $password);

}catch(Exception $e){
    echo "Error: " . $e->getMessage();
    die;
}