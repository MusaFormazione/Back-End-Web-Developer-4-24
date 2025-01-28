<?php
//Questo è il nome del file che sarà creato o scritto 
$nomeFile = 'file-creato.txt';//Tieni presente che il nome del file in realtà può comprendere anche il percorso dove si trova il file 

//Verifico se il file esiste e se non esiste blocco lo script 
// if(!file_exists($nomeFile))
// exit;

//Apro il file 
$file = fopen($nomeFile,'w');
//Il secondo parametro (w) definisce che stiamo aprendo il file in scrittura. (Sovrascrive il file se contiene dati)

if(fwrite($file, 'Ciao Mondo!')){
    echo 'File scritto con successo!';
}else{
    echo 'Errore nella scrittura del file';
}


fclose($file);