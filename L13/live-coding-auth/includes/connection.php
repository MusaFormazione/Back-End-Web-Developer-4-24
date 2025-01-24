<?php

$hostname = 'localhost';
$dbName = 'musa-4-24-auth';
$dbUser = 'Michele';
$password = 'password';

try{

    $db = new PDO("mysql:host=$hostname;dbname=$dbName", $dbUser, $password);

}catch(PDOException $e){
    echo "Error: " . $e->getMessage();
    die;
}