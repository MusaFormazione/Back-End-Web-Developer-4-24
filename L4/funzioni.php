<?php
//Che fanno qualcosa 
function saluta(){
    echo '<p>Ciao</p>';
}

saluta();
//Funzioni che restituiscono qualcosa
function restituisciSaluto(){
    return '<p>Ciao</p>';
}
$valore = restituisciSaluto();
echo $valore;
file_put_contents(__DIR__.'/saluto.txt', $valore);


//Scope delle variabili nelle funzioni
function testVariabileInterna(){
    $prova = 0;
    //La variabile non è disponibile all'interno della funzione richiamarla equivarrà a scatenare un errore. 
}
// echo $prova; Warning: Undefined variable $prova

$variabileGlobale = 1;

function testVariabileEsterna(){
    // echo $variabileGlobale; Undefined variable $variabileGlobale
    global $variabileGlobale;//La parola chiave è Global ricerca la variabile nello scope globale e se disponibile la importa, Dovremmo anche però sempre verificare che questa venga trovata
    echo $variabileGlobale;
}

testVariabileEsterna();

echo '<hr>';

//Funzioni parametriche

function somma($a, $b) {
    //Se mi dimentico di inserire dei valori per $a e $b questi contengono null
    return $a + $b;
}

echo "3 + 7 = " . somma(3, 7) . "<br>";
echo "56 + 7897 = " . somma(56, 7897) . "<br>";

echo '<hr>';

function sommaSicura($a = 0, $b = 0){
    return $a + $b;
}
echo "3 + 7 = " . sommaSicura(3, 7) . "<br>";
echo "3 + niente = " . sommaSicura(3 ) . "<br>";
