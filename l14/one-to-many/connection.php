<?php

$host = 'localhost';
$dbName = 'join1';
$user = 'Michele';
$password = 'password';

try{

    $db = new PDO("mysql:host=$host;dbname=$dbName",$user,$password);

}catch(PDOException $e){
    echo $e->getMessage();
}