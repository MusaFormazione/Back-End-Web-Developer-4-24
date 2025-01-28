<?php

$fileName = 'file-da-leggere.txt';

$file = fopen($fileName, 'r');


//Posso ciclare verificando la posizione del puntatore e recuperare 100 byte alla volta finché non ho letto tutto il file. 
// while(!feof($file)){

//     echo fread($file, 100);
// }


$size = filesize($fileName);

echo fread($file, $size);