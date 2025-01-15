<?php
$nl = "<br>\n";//Utilizzata solo per andare a capo rapidamente nell'esercizio 

echo "<h3>strlen</h3>\n";

$stringa1 = "Hello World!";

echo strlen($stringa1);//La stringa è lunga 12 caratteri


//Trasformo i caratteri in maiuscolo o in minuscolo
echo "<h3>strtoupper/strtolower/ucfirst</h3>\n";

$stringa2 = "hello World!";

echo "Originale: $stringa2<br>\n";
echo "Maiuscolo: " . strtoupper($stringa2) . $nl;
echo "Minuscolo: " . strtolower($stringa2) . $nl;
echo "Prima lettera maiuscola: " . ucfirst($stringa2) . $nl;

//Rimozione spazi inutili all'inizio o alla fine di una stringa 
echo "<h3>Rimozione spazi all'inizio e alla fine di una stringa. </h3>\n";

$stringa3 = "     Hello World!      ";

echo "Originale: $stringa3 <br>\n";
echo "trim: " . trim($stringa3) . $nl;
echo "ltrim: " . ltrim($stringa3) . $nl;
echo "rtrim: " . rtrim($stringa3) . $nl;

//Cerco la posizione di una stringa 
echo "<h3>strpos</h3>\n";

$stringa3 = "Hello World!";

echo 'Ricerca case sensitive: ' . strpos($stringa3, 'World!') . $nl;
echo 'Ricerca case insensitive: ' . stripos($stringa3, 'world!') . $nl;

if(strpos($stringa3, 'World!') !== false){
    echo 'Stringa trovata';
}else{
    echo 'Stringa non trovata';
}

//Sostituisco una porzione di stringa con una sottostringa
echo "<h3>str_replace</h3>\n";

$stringa4 = "Hello World!";

echo "Originale: $stringa4 $nl";
echo "Dopo la sostituzione: " . str_replace('World','Mondo',  $stringa4) . $nl;
echo "Dopo la sostituzione caseinsensitive: " . str_ireplace('world','Mondo',  $stringa4) . $nl;