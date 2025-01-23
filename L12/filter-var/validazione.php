<?php

//filter_var Controlla un valore, se questo passa la validazione positivamente allora il risultato sarà il valore iniziale, in caso contrario avremo false.

//Validazione numero intero 
$invalidInteger = "123abc";
$result = filter_var($invalidInteger, FILTER_VALIDATE_INT);
echo $result !== false ? "$result è valido" : "NON è valido: ";
// var_dump($result);
echo "<br>";

//Validazione numero decimale
$invalidFloat = "123";
$result = filter_var($invalidFloat, FILTER_VALIDATE_FLOAT);
//In questo caso anche un numero senza decimali Risulta corretto.
//Se ricevi un numero intero lo restituisce tipizzandolo come float. 
echo $result !== false ? "$result è valido" : "NON è valido: ";
var_dump($result);
echo "<br>";

//Validazione valori booleani.
$invalidBool = 'ABCD';
$result = filter_var($invalidBool, FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE);
echo $result !== NULL ? "$result è valido" : "NON è UN BOOLEANO valido; ";
// var_dump($result);
echo "<br>";

//Validazione email 
$invalidEmail = "esempio@esempio.it";
$result = filter_var($invalidEmail, FILTER_VALIDATE_EMAIL);
echo $result !== false ? "$result è valido" : "NON è valido: ";
// var_dump($result);
echo "<br>";

//Validazione URL 
$invalidURL = 'htp://sito.it';
$result = filter_var($invalidURL, FILTER_VALIDATE_URL);
echo $result !== false ? "$result è valido" : "NON è valido: ";
// var_dump($result);
echo "<br>";

//Filtrare numeri in un determinato range 
$number = '10';
$options = [
    'options' => ["min_range" => 1, "max_range" => 100]
];
$result = filter_var($number, FILTER_VALIDATE_INT, $options);
var_dump($result);