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

//Suddivisione di una stringa in una re di stringhe. 
echo "<h3>explode/implode</h3>\n";

$stringa5 = "Mario,Rossi,30";
$arrayDaStringa5 = explode(',',$stringa5);

echo "Originale: $stringa5 $nl";
echo "Dopo l'utilizzo di explode con separatore \",\": $nl"; 
var_dump($arrayDaStringa5);

//posso destrutturare
[$nome, $cognome, $anni] = $arrayDaStringa5;
echo "Valori destrutturati => nome : $nome, cognome: $cognome, anni: $anni";


echo $nl;
echo $nl;


echo "Originale: $nl";
var_dump($arrayDaStringa5);

echo "$nl Dopo l'utilizzo di implode $nl"; 

echo implode(", ",$arrayDaStringa5);

//Controllo se una stringa contiene un'altra stringa 
echo "<h3>str_contains</h3>\n";

$stringa6 = "Questo è un esempio in PHP";

echo "Cerco js nella frase: \"$stringa6\", risultato:";
var_dump(str_contains($stringa6, 'js'));
echo $nl;

echo "Cerco PHP nella frase: \"$stringa6\", risultato:";
var_dump(str_contains($stringa6, 'PHP'));
echo $nl;

//Cerco una stringa all'inizio di un'altra stringa. 
echo "<h3>str_starts_with</h3>\n";
$stringa7 = "Questo è un esempio in PHP";

echo "Cerco \"Questo\" all'inizio della frase: \"$stringa7\", risultato:";
var_dump( str_starts_with($stringa7, 'Questo'));
echo $nl;


echo "Cerco \"PHP\" all'inizio della frase: \"$stringa7\", risultato:";
var_dump( str_starts_with($stringa7, 'PHP'));
echo $nl;


//Cerco una stringa alla fine di un'altra stringa
echo "<h3>str_ends_with</h3>\n";
$stringa8 = "Questo è un esempio in PHP";

echo "Cerco \"Questo\" alla fine della frase: \"$stringa8\", risultato:";
var_dump( str_ends_with($stringa8, 'Questo'));
echo $nl;


echo "Cerco \"PHP\" alla fine della frase: \"$stringa8\", risultato:";
var_dump( str_ends_with($stringa8, 'PHP'));
echo $nl;

