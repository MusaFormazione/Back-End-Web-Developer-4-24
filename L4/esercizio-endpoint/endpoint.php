<?php

if(!isset($_GET['s'])){
    header('Location: index.php');
    die;
}

header('Content-Type: application/json');


$menu = [
   'Margherita' => [
        'prezzo' => 5,
        'disponibile' => true
   ],
   'Diavola' => [
        'prezzo' => 1,
        'disponibile' => true
   ],
   'Capricciosa' => [
        'prezzo' => 7,
        'disponibile' => true
   ],
   'Ananas' => [
        'prezzo' => 700,
        'disponibile' => false
   ]
];

$risultato =  $menu[$_GET['s']];

echo json_encode($risultato);


// var_dump($menu[$_GET['s']]);