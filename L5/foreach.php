<?php

$array = ['a', 'b', 'c', 'd', 'e', 'f'];

//Ciclo basilare sull'array per mostrare i suoi valori. 
foreach($array as $valore){

    echo "Valore: $valore<br>";

}

//Realizzazione dinamica di una lista puntata (<ul></ul>) contenente le chiavi ed i valori dell'array "$array" per numerare visivamente i valori. 
echo "<ul>";
foreach($array as $chiave => $valore){
    // $chiave => Rappresenta l'indice(posizione nell'array) del valore ciclato. 
    //$valore => Rappresenta il valore ciclato 
    echo "<li id=\"list-item-$chiave\">$chiave: $valore</li>";
    
}
echo "</ul>";


//Ciclare un array associativo mostrando chiave e valore di ogni elemento contenuto al suo interno
$persona = [
    "nome" => "Mario",
    "cognome" => "Rossi",
    "anni" => 30
];

foreach($persona as $nomeDato => $dato){
    echo "$nomeDato: $dato<br>";
}